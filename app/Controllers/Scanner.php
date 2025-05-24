<?php
// app/Controllers/Scanner.php
namespace App\Controllers;
use App\Models\InvitationModel;

class Scanner extends BaseController
{
public function index()
{
return view('invitation/scanQR');
}

public function validasi()
{
$data = $this->request->getJSON(true);
$kode = $data['kode'] ?? null;

if (!$kode) {
return $this->response->setJSON([
'status' => false,
'message' => 'QR tidak terbaca'
]);
}

$model = new InvitationModel();
$row = $model->where('uniqid', $kode)->first();

// if ($row) {
// // Optional: update hadir = 1
// $model->update($row['id'], ['hadir' => 1]);

// return $this->response->setJSON([
// 'status' => true,
// 'nama' => $row['nama']
// ]);
// }

return $this->response->setJSON([
'status' => false,
'message' => 'Data tidak ditemukan $kode'
]);
}
}