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

    // Menyimpan data undangan
    public function simpan()
    {
        $model = new InvitationModel();

        // Ambil data dari form
        $nama   = $this->request->getPost('nama');
        $partner   = $this->request->getPost('partner');
        $gender = $this->request->getPost('gender');
        $kota   = $this->request->getPost('kota');
        $status = $this->request->getPost('status');

        $model->insert([
            'nama'   => $nama,
            'partner'   => $partner,
            'gender' => $gender,
            'kota'   => $kota,
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


        return redirect()->to('/invitation/list')->with('message', 'Undangan berhasil disimpan!');
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
        $invitations = $model->findAll();

        return view('invitation/InputInvitation', ['invitations' => $invitations]);
    }
}
