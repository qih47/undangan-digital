<?php

namespace App\Models;

use CodeIgniter\Model;

class UcapanModel extends Model
{
    protected $table = 'kirim_doa';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['id_invitation', 'kehadiran', 'ucapan',];

    public function getWithInvitation()
    {
        return $this->select('kirim_doa.*, invitation.*')
            ->join('invitation', 'invitation.id = kirim_doa.id_invitation')
            ->orderBy('kirim_doa.time_created', 'DESC')
            ->findAll();
    }

    public function getInvitationById($id)
    {
        return $this->db->table('invitation')
            ->select('*')
            ->where('id', $id)
            ->limit(1)
            ->get()
            ->getRowArray();
    }

    public function saveUcapan($idInvitation, $kehadiran, $ucapan)
    {
        $data = [
            'id_invitation' => $idInvitation,
            'kehadiran'     => $kehadiran,
            'ucapan'        => $ucapan,
        ];

        return $this->insert($data);
    }
}
