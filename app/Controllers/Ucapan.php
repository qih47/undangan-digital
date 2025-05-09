<?php

namespace App\Controllers;

use App\Models\UcapanModel;
use \App\Models\InvitationModel;

class Ucapan extends BaseController
{
    public function index()
    {
        $chatModel = new UcapanModel();
        $countingModel = new InvitationModel();
        // $data['chats'] = $chatModel->getWithInvitation();
        $data['jumlah'] = $countingModel->getCountingTamu();
        $data['counting']= $countingModel->getCountingHadir();
        return view('dashboard/index', $data);
    }

    public function getUcapanJSON()
    {
        $chatModel = new UcapanModel();
        $ucapan = $chatModel->getWithInvitation();
        return $this->response->setJSON($ucapan); 
    }


    public function display(): string
    {
        $model = new UcapanModel();
        $data = $model->getWithInvitation();

        $html = '';

        foreach ($data as $row) {
            if ($row["kehadiran"] == 'hadir') {
                $kehadiran = '<span class="hadir">Hadir</span>';
            } elseif ($row["kehadiran"] == 'mungkin-hadir') {
                $kehadiran = '<span class="m-hadir">Mungkin Hadir</span>';
            } else {
                $kehadiran = '<span class="t-hadir">Tidak Hadir</span>';
            }

            $html .= '<div class="data-doa">' .
                '<div class="name-doa mt-1">' . esc($row["pengirim"]) . '</div>' .
                '<div class="location-and-present mt-1">' .
                '<span class="location-name">Di ' . esc($row["kota"]) . ' </span>' .
                $kehadiran .
                '</div>' .
                '<div class="doa-value mt-1">" ' . esc($row["ucapan"]) . ' "</div>' .
                // '<div class="nama-undangan mt-1">Untuk: ' . esc($row["nama"]) . '</div>' .
                '</div>';
        }

        return $html ?: '0 results';
    }

    public function insert()
    {
        // echo "METHOD INSERT KEPANGGIL";
        // exit;
        $model = new UcapanModel();

        $id_invitation = $this->request->getPost('id_invitation');
        $nama = $this->request->getPost('nama');
        $kehadiran = $this->request->getPost('kehadiran');
        $ucapan = $this->request->getPost('ucapan');

        if (!$id_invitation || !$nama || !$kehadiran || !$ucapan) {
            return $this->response->setStatusCode(400)->setBody('Data tidak lengkap!');
        }

        $data = [
            'id_invitation' => $id_invitation,
            'nama' => $nama,
            'kehadiran'     => $kehadiran,
            'ucapan'        => $ucapan,
            'time_created'   => date('Y-m-d H:i:s'),
        ];

        if ($model->insert($data)) {
            return $this->response->setStatusCode(200)->setBody('success');
        }

        return $this->response->setStatusCode(500)->setBody('Error saat menyimpan data');
    }

    public function idUndangan($id)
    {

        $ucapanModel = new UcapanModel();
        $invitation = $ucapanModel->getInvitationById($id);

        if (!$invitation) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Undangan tidak ditemukan');
        }
        return view('invitation/index', ['data' => $invitation]);
    }

}
