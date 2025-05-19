<?php

namespace App\Controllers;

use App\Models\InvitationModel;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\QrCode;
// use Endroid\QrCode\Label\Label;
// use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;

class Invitation extends BaseController
{
    // Menampilkan halaman index undangan
    public function invitation()
    {
        return view('invitation/index');
    }

    public function uniqidInvitation($uniqid)
    {
        $model = new InvitationModel();

        $data = $model->where('uniqid', $uniqid)->first();

        if (!$data) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('invitation/index', ['data' => $data]);
    }

    // Menampilkan form tambah undangan
    public function tambah()
    {
        return view('invitation/InputInvitation');
    }

    public function showKehadiran(): string
    {
        return view('show/showKehadiran');
    }

    // Menyimpan data undangan
    public function importUndangan()
    {
        $file = $this->request->getFile('file_excel');

        if (!$file->isValid()) {
            return $this->response->setJSON([
                'status' => false,
                'message' => 'File tidak valid'
            ]);
        }

        $ext = $file->getClientExtension();
        if (!in_array($ext, ['xls', 'xlsx'])) {
            return $this->response->setJSON([
                'status' => false,
                'message' => 'File harus berformat Excel (.xls/.xlsx)'
            ]);
        }

        // Baca file Excel
        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile($file->getTempName());
        $reader->setReadDataOnly(true);
        $spreadsheet = $reader->load($file->getTempName());
        $worksheet = $spreadsheet->getActiveSheet();
        $rows = $worksheet->toArray(null, true, true, true);

        $dataInsert = [];

        foreach (array_slice($rows, 1) as $row) {
            if (empty($row['A'])) continue;

            $uniqid = uniqid(); // ← Buat sekali saja
            $fileName = 'qrcode_' . $uniqid . '.png';
            $filePath = FCPATH . 'qrcode/' . $fileName;

            $link = base_url('invitation/' . $uniqid); // ← Dipakai untuk QR dan database

            // Buat QR code dari uniqid yang sama
            $qrCode = QrCode::create($uniqid)
                ->setEncoding(new Encoding('UTF-8'))
                ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
                ->setSize(300)
                ->setMargin(10)
                ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
                ->setForegroundColor(new Color(0, 0, 0))
                ->setBackgroundColor(new Color(255, 255, 255));

            $writer = new PngWriter();
            $result = $writer->write($qrCode);
            $result->saveToFile($filePath);

            $dataInsert[] = [
                'nama'    => $row['A'] ?? null,
                'partner' => $row['B'] ?? null,
                'dari'    => $row['C'] ?? null,
                'link'    => $link,
                'qrcode'  => $fileName,
                'uniqid'  => $uniqid,
                'status'  => $row['D'] ?? 'Friend',
            ];
        }

        if (empty($dataInsert)) {
            return $this->response->setJSON([
                'status' => false,
                'message' => 'Tidak ada data yang bisa diimpor'
            ]);
        }

        $model = new \App\Models\InvitationModel();
        $model->insertBatch($dataInsert);

        return $this->response->setJSON([
            'status' => true,
            'message' => 'Data undangan berhasil diimpor',
            'jumlah' => count($dataInsert)
        ]);
    }


    public function simpan()
    {
        $model = new InvitationModel();

        // Ambil data dari form
        $nama   = $this->request->getPost('nama');
        $partner   = $this->request->getPost('partner');
        // $gender = $this->request->getPost('gender');
        $dari   = $this->request->getPost('dari');
        $status = $this->request->getPost('status');

        $model->insert([
            'nama'   => $nama,
            'partner'   => $partner,
            // 'gender' => $gender,
            'dari'   => $dari,
            'status' => $status,
        ]);
        $id = $model->getInsertID();


        // Nama file untuk QR code
        $fileName = 'qrcode_' . uniqid() . '.png';
        $filePath = FCPATH . 'qrcode/' . $fileName;
        $dataQr = uniqid();
        // Buat link berdasarkan ID
        $link = base_url('invitation/' . $dataQr);
        // Buat QR code
        $qrCode = new QrCode($link);
        $qrCode = QrCode::create($dataQr)
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));


        // Menulis QR code ke dalam file
        $writer = new PngWriter();
        $result = $writer->write($qrCode);
        $result->saveToFile($filePath);

        // Simpan data undangan ke database
        if ($id) {
            $model->update($id, [
                'link'   => $link,
                'qrcode' => $fileName,
                'uniqid' => $dataQr,
            ]);
        }


        return redirect()->to('/invitation/list')->with('message', '
    <div class="alert alert-success alert-dismissible bg-success text-white border-0 show flash-alert" role="alert">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong>Success - </strong> List Undangan berhasil ditambahkan!
    </div>
');
    }

    // Menampilkan detail undangan berdasarkan ID
    public function show($id)
    {
        $model = new InvitationModel();
        $invitation = $model->find($id);

        return view('invitation/show', ['invitation' => $invitation]);
    }

    // Menampilkan semua daftar undangan
    public function InputInvitation()
    {
        $model = new InvitationModel();
        $data['invitations'] = $model->findAll();
        $data['jumlah'] = $model->getCountingTamu();

        return view('invitation/InputInvitation', $data);
    }


    public function getDataInvitation()
    {
        $model = new \App\Models\InvitationModel();
        $data = $model->findAll();

        return $this->response->setJSON(['data' => $data]);
    }

    public function getDataHadir()
    {
        $model = new \App\Models\InvitationModel();
        $data = $model->getDaftarHadir();

        return $this->response->setJSON(['data' => $data]);
    }

    public function getBukuTamu()
    {
        $model = new \App\Models\InvitationModel();
        $data = $model->getDaftarHadir();

        return $this->response->setJSON(['data' => $data]);
    }

    public function viewBukuTamu()
    {
        $countingModel = new InvitationModel();
        $data['jumlah'] = $countingModel->getCountingTamu();
        return view('buku/index', $data);
    }

    public function cek_tamu_baru()
    {
        $modelTMBaru = new InvitationModel();

        $data = $modelTMBaru->getTamuBaru();

        if ($data && isset($data['id']) && isset($data['status']) && $data['status'] == '1') {
            $modelTMBaru->updateStatusKehadiran($data['id']);
        }

        return $this->response->setJSON(['data' => $data]);
    }



    public function getTamuByScan()
    {
        $uniqid = $this->request->getPost('uniqid');

        if (!$uniqid) {
            return $this->response->setJSON([
                'status' => false,
                'message' => 'No uniqid provided'
            ]);
        }

        $model = new InvitationModel();
        $data = $model->where('uniqid', $uniqid)->first();

        if ($data) {
            return $this->response->setJSON([
                'status' => true,
                'data' => $data
            ]);
        } else {
            return $this->response->setJSON([
                'status' => false,
                'message' => 'Data not found'
            ]);
        }
    }

    public function simpanKehadiran()
    {
        $idInvitation = $this->request->getPost('id_invitation');
        $jumlah = $this->request->getPost('jumlah');
        $nama = $this->request->getPost('nama');
        $partner = $this->request->getPost('partner');

        if (!$idInvitation || !$jumlah || !$nama) {
            return $this->response->setJSON([
                'status' => false,
                'message' => 'Beberapa data tidak terisi hadir wajib diisi'
            ]);
        }

        $model = new \App\Models\InvitationModel();
        $berhasil = $model->simpanKehadiran($idInvitation, $jumlah, $nama, $partner);

        if ($berhasil) {
            return $this->response->setJSON([
                'status' => true,
                'message' => 'Kehadiran berhasil disimpan'
            ]);
        } else {
            return $this->response->setJSON([
                'status' => false,
                'message' => 'Gagal menyimpan kehadiran'
            ]);
        }
    }
}
