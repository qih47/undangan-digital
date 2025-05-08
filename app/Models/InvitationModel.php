<?php
namespace App\Models;

use CodeIgniter\Model;

class InvitationModel extends Model
{
protected $table = 'invitation'; 
protected $primaryKey = 'id'; 
protected $allowedFields = ['nama', 'partner', 'jumlah', 'gender', 'kota', 'link', 'qrcode', 'uniqid', 'status'];

    public function getDaftarHadir()
    {
        return $this->db
            ->table('daftar_hadir')
            ->select('daftar_hadir.id, invitation.nama, invitation.partner,invitation.kota, daftar_hadir.jumlah, daftar_hadir.status, daftar_hadir.created_at')
            ->join('invitation', 'invitation.id = daftar_hadir.id_invitation')
            ->orderBy('daftar_hadir.created_at', 'DESC')
            ->get()
            ->getResultArray();
    }
}