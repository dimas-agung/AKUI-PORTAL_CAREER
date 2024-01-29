<?php
$current_directory = dirname(__FILE__);
$ch = curl_init();
require 'api_ip.php';
$url = $link . 'api/Pelamar/Store';

$nama_ktp = $_FILES['scan_ktp']["name"];
$file_tmp_ktp = $_FILES["scan_ktp"]["tmp_name"];
$file_path_ktp = $current_directory . '/storage/' . $nama_ktp;
move_uploaded_file($file_tmp_ktp, $file_path_ktp);

$nama_kk = $_FILES['kartu_keluarga']["name"];
$file_tmp_kk = $_FILES["kartu_keluarga"]["tmp_name"];
$file_path_kk = $current_directory . '/storage/' . $nama_kk;
move_uploaded_file($file_tmp_kk, $file_path_kk);

$nama_passfoto = $_FILES['pass_foto']["name"];
$file_tmp_passfoto = $_FILES["pass_foto"]["tmp_name"];
$file_path_passfoto = $current_directory . '/storage/' . $nama_passfoto;
move_uploaded_file($file_tmp_passfoto, $file_path_passfoto);

$nama_fileberkas = $_FILES['fileberkas']["name"];
$file_tmp_fileberkas = $_FILES["fileberkas"]["tmp_name"];
$file_path_fileberkas = $current_directory . '/storage/' . $nama_fileberkas;
move_uploaded_file($file_tmp_fileberkas, $file_path_fileberkas);

$data = array(
  'scan_ktp' => new CURLfile($file_path_ktp),
  'nama' => $_POST['nama'],
  'nik' => $_POST['nik'],
  'tempat_lahir' => $_POST['tempat_lahir'],
  'tanggal_lahir' => $_POST['tanggal_lahir'],
  'tinggi_badan' => $_POST['tinggi_badan'],
  'berat_badan' => $_POST['berat_badan'],
  'jenis_kelamin' => $_POST['jenis_kelamin'],
  'agama' => $_POST['agama'],
  'status_pernikahan' => $_POST['status_pernikahan'],
  'email' => $_POST['email'],
  'pendidikan_terakhir' => $_POST['pendidikan'],
  'nama_pendidikan' => $_POST['nama_sekolah'],
  'alamat_ktp' => $_POST['alamat'],
  'kewarganegaraan' => $_POST['kewarganegaraan'],
  'provinsi' => $_POST['provinsi'],
  'kabupaten' => $_POST['kabupaten'],
  'kecamatan' => $_POST['kecamatan'],
  'rt' => $_POST['rt'],
  'rw' => $_POST['rw'],
  'alamat_domisili' => $_POST['alamat_domisili'],
  'nomor_telp' => $_POST['nomor_telpon'],
  'job_title_id' => $_POST['jabatan_id'],
  'status_pengalaman' => $_POST['pengalaman_bekerja'],
  'ekspektasi_salary' => $_POST['ekspektasi_salary'],
  'kk' => new CURLfile($file_path_kk),
  'pas_photo' => new CURLfile($file_path_passfoto),
  'berkas' => new CURLfile($file_path_fileberkas),
  'status' => $_POST['status'],
  'ketebalan_minus' => $_POST['ketebalan_minus'],
  'ketebalan_silinder' => $_POST['ketebalan_silinder'],
  'nama_penyakit' => $_POST['nama_penyakit'],
  'lama_penyakit' => $_POST['lama_penyakit'],
  'nama_teman' => $_POST['nama_teman'],
  'posisi_teman' => $_POST['posisi_teman'],
);

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
if (curl_errno($ch)) {
  echo 'Curl error: ' . curl_error($ch);
}

curl_close($ch);

echo $response;
?>