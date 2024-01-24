<?php
$ch = curl_init();
require 'api_ip.php';
$url = $link . 'api/Pelamar/Store';

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
// var_dump($_FILES);
$data = array(
  'scan_ktp' => $_FILES['scan_ktp'],
  'nama' => $_POST['nama'],
  'nik' => $_POST['nik'],
  'tempat_lahir' => $_POST['tempat_lahir'],
  'tanggal_lahir' => $_POST['tanggal_lahir'],
  'usia' => $_POST['usia'],
  'tinggi_badan' => $_POST['tinggi_badan'],
  'berat_badan' => $_POST['berat_badan'],
  'jenis_kelamin' => $_POST['jenis_kelamin'],
  'agama' => $_POST['agama'],
  'status_pernikahan' => $_POST['status_pernikahan'],
  'email' => $_POST['email'],
  'pendidikan_terakhir' => $_POST['pendidikan_terakhir'],
  'nama_pendidikan' => $_POST['nama_pendidikan'],

  'alamat_ktp' => $_POST['alamat_ktp'],
  'kewarganegaraan' => $_POST['kewarganegaraan'],
  'provinsi' => $_POST['provinsi'],
  'kabupaten' => $_POST['kabupaten'],
  'kecamatan' => $_POST['kecamatan'],
  'rt' => $_POST['rt'],
  'rw' => $_POST['rw'],
  'alamat_domisili' => $_POST['alamat_domisili'],
  'nomor_telp' => $_POST['nomor_telp'],
  'job_title_id' => $_POST['jabatan_id'],
  'status_pengalaman' => $_POST['status_pengalaman'],
  'ekspektasi_salary' => $_POST['ekspektasi_salary'],
  'kk' => $_FILES['kk'],
  'pas_photo' => $_FILES['pas_photo'],
  'berkas' => $_FILES['berkas'],
  'status' => $_POST['status']
);

$post_fields = http_build_query($data);

curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
$response = curl_exec($ch);

if (curl_errno($ch)) {
  echo 'Curl error: ' . curl_error($ch);
}

curl_close($ch);

// Proses respons
echo $response;
?>