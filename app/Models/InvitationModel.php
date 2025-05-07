<?php
namespace App\Models;

use CodeIgniter\Model;

class InvitationModel extends Model
{
protected $table = 'invitation'; 
protected $primaryKey = 'id'; 
protected $allowedFields = ['nama', 'partner', 'jumlah', 'gender', 'kota', 'link', 'qrcode', 'uniqid', 'status']; 
}