<?php

$response = '{
  "success": true,
  "message": "Data pelamar berhasil disimpan"
}';

$data = json_decode($response);

if ($data->success === true) {
    header('Location: Thanks.php');
} elseif ($data->success === false) {
    header('Location: err.php?nama=' . $_POST['namaJ']);
} else {
    header('Location: 404.php');
}
?>