<?php

namespace App\Models;

use CodeIgniter\Model;

class InvitationModel extends Model
{
    protected $table = 'invitation';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'partner', 'jumlah', 'kota', 'link', 'qrcode', 'uniqid', 'status'];

    public function getDaftarHadir()
    {
        return $this->db
            ->table('daftar_hadir')
            ->select("
            daftar_hadir.id,
            invitation.nama,
            invitation.partner,
            invitation.kota,
            invitation.status AS jenis,
            invitation.link,
            invitation.qrcode,
            daftar_hadir.jumlah,
            daftar_hadir.status,
            daftar_hadir.created_at,
            GROUP_CONCAT(
                CONCAT(
                    '<img src=\"/images/profile/profile.png\" width=\"20\" class=\"me-2 rounded-circle\" />',
                    kirim_doa.nama ,'\n', 
                    kirim_doa.ucapan ,'\n'
                ) 
                SEPARATOR '\n'
            ) AS ucapan
        ")
            ->join('invitation', 'invitation.id = daftar_hadir.id_invitation')
            ->join('kirim_doa', 'kirim_doa.id_invitation = invitation.id', 'left')
            ->groupBy('daftar_hadir.id')
            ->orderBy('daftar_hadir.created_at', 'DESC')
            ->get()
            ->getResultArray();
    }



    public function getCountingTamu()
    {
        return $this->db
            ->table('daftar_hadir')
            ->selectSum('jumlah')
            ->get()
            ->getRow();
    }

    public function getCountingHadir()
    {
        return $this->db
            ->table('kirim_doa')
            ->select(" 
            COUNT(CASE WHEN kehadiran = 'hadir' THEN 1 END) AS hadir, 
            COUNT(CASE WHEN kehadiran = 'mungkin-hadir' THEN 1 END) AS mungkin_hadir, 
            COUNT(CASE WHEN kehadiran = 'tidak-hadir' THEN 1 END) AS tidak_hadir
        ")
            ->get()
            ->getRow();
    }
}
