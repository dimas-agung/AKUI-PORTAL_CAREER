<?php

$jabatan = $_GET['nama'];



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Page</title>
    <!-- Include SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>
        /* Some basic styling for the page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .container {
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- <div class="container">
        <h1>Error Page</h1>
        <button id="showErrorBtn">Show Error</button>
    </div> -->

    <!-- Include SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Function to show SweetAlert error message and then redirect
        // function showErrorAndRedirect() {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Mohon maaf data belum sesuai silahkan periksa kembali data isian anda',

        }).then(() => {
            // Redirect the user to another page (e.g., index.html)
            window.location.href = '../formulir.php?nama=<?= $jabatan ?>';
        });
        // }

        // Event listener for the button
        // document.getElementById('showErrorBtn').addEventListener('click', showErrorAndRedirect);
    </script>

</body>

</html>