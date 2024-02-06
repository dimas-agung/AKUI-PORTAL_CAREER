<?php
$jabatan = $_GET['nama'];



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="icon" href="asset/logo2.svg">
  <link rel="stylesheet" href="css/infor.css" />
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
</head>
<style>
  .bawah {
    height: 100vh;
    padding: 20px;
    width: 100%;
    text-align: left;
  }

  .bawah .text- {
    text-align: start;
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .containerr {
    background-image: url('asset/LANDSCAPE.jpg');
    background-size: cover;
    /* z-index: 99; */
  }


  /* Media query for screens with a width of 768 pixels or more (typical tablets and desktops) */
  @media screen and (min-width: 768px) {
    .banner {
      background: linear-gradient(#ffffff1c, rgba(0, 0, 0, 0.684));

      background-size: cover;
      height: 100vh;
      /* Change background color for desktop screens */
    }
  }

  /* Media query for screens with a width of 480 pixels or less (typical mobile screens) */
  @media screen and (max-width: 480px) {
    .containerr {
      background-image: url('asset/POTRAIT.jpg');
      background-size: cover;
      /* z-index: 99; */
    }

    .banner {
      background: linear-gradient(#ffffff1c, rgba(0, 0, 0, 0.684));

      background-size: cover;
      /* Change background color for mobile screens */
    }
  }
</style>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img style="width: 150px;" src="asset/LOGO NO REG.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav justify-content-end fs-4 ms-auto mt-3">
          <li class="nav-item">
            <a class="nav-link active" href="index.php"><button type="button"
                onclick="document.location.href='index.php'" class="btn btn-outline-warning">
                Our Websites
              </button></a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link active"> <ion-icon onclick="sendEmail()" name="mail"></ion-icon></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="https://www.linkedin.com/company/akuibirdnest/mycompany/"><ion-icon
                name="logo-linkedin"></ion-icon></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="https://www.instagram.com/akuibirdnest"><ion-icon
                name="logo-instagram"></ion-icon></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- hero -->
  <div class="containerr">
    <div class="banner d-flex flex-column justify-content-center align-items-center">

      <h2 class="mt-5 font-weight-light display-4">

      </h2>
      <div>
        <span style="margin-right: 10px"><ion-icon name="pin" class="text-dark"></ion-icon>

          Tembelang &nbsp; <i class="fa-solid fa-building"></i>, Jombang,
          Indonesia
        </span>
      </div>
      <!-- <a href=""> -->
      <button type="button" class="btn btn-lg btn-outline-light mt-3">
        Lamar Ke Posisi
      </button>
    </div>
  </div>
  <section class="bawah">
    <div class="text- mb-3">
      <div class="text-primary">Job Openings</div>
      <ion-icon class="fs-4" name="arrow-dropright"></ion-icon>
    </div>


    <div class="container">
      <h2>

      </h2>
      <div class="detail">
        <!-- <p>
          Provide video documentation and editing to ensure all company's
          events are well documented.
        </p> -->
        <p>
          <strong>Deskripsi Pekerjaan</strong>
        </p>
        <div class="y" id="jobdesc">

        </div>



        <p>
          <strong>Kualifikasi</strong>
        </p>
        <!-- <p>Minimum Education and Experience</p> -->
        <ul id="rekruitment">
          <!-- <li>Junior high scholl company.</li> -->
        </ul>
        <!-- <p><b>Core Competencies (Knowledge, Skills &amp; Characters)</b></p> -->
        <!-- <ul>
          <li>teliti</li>
          <li>Gercep</li>
          <li>ya.</li>
        </ul> -->
        <!-- <p>Deadline: 10 Des 2023</p> -->
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://kit.fontawesome.com/3e890378ee.js" crossorigin="anonymous"></script>
  <script>
    function sendEmail() {
      // Replace 'email@example.com' with the actual email address
      var emailAddress = 'recruitment@akuibirdnest.com';

      // Use the mailto URI scheme to create a mailto link
      var mailtoLink = 'mailto:' + emailAddress;

      // Open the default email client with the new email
      window.location.href = mailtoLink;
    }
    $(document).ready(function () {
      var nama = <?= $jabatan ?>;

      // // Button click event
      // var rejrt = document.getElementById('rekruitment');
      // var jobdesc = document.getElementById('jobdesc');
      // var jobs = {
      //   2: {
      //     nama: 'ADMIN DOCUMENT CONTROL SPECIALIST INTERNSHIP',
      //     kualifikasi: [
      //       'Laki-laki/Perempuan (Diutamakan Perempuan).',
      //       'Usia Maksimal 25 Tahun.',
      //       'Pendidikan minimal D3 Jurusan Teknik Kimia/Teknik Pangan/Gizi/Biologi/Teknik Peternakan',
      //       'Bersedia untuk magang 6 Bulan',
      //       'Jujur, Aktif, Teliti, Kreatif dan Inovatif',
      //       'Bersedia ditempatkan di Jombang, Jawa Timur.'
      //     ],
      //     jobdesc: [
      //       `a. Melakukan input, menyiapkan dan mendistribusikan data Audit internal secara berkala guna memenuhi syarat ekspor.<br>b. Menyiapkan, merapikan dan mendistribusikan materi yang dibuat Lead Auditor sesuai scope di Audit Internal, ke masing - masing departemen secara berkala.`
      //       , `Menjalankan semua aktivitas operasional sesuai dengan SOP, WI dan kebijakan Departemen Audit agar tercapainya kualitas dan kuantitas serta target yang ditetapkan oleh perusahaan.`
      //       , `Melakukan evaluasi, saran perbaikan berkelanjutan dan pembuatan laporan di bagian terkait.`
      //       , `Memastikan bahwa pedoman kesehatan, keselamatan serta keamanan kerja dipatuhi di bagian terkait.`
      //       , ` Mengembangkan kemampuan ilmu terkait.`
      //     ]
      //   },
      //   3: {
      //     nama: 'HSE SPECIALIST (SUPERVISOR LEVEL)',
      //     kualifikasi: [
      //       'Usia Maksimal 30 Tahun',
      //       'Pendidikan Minimal D3 (Diutamakan Teknik Berkaitan dengan K3)',
      //       'Berpengalaman di Bidangnya Minimal 2 Tahun ',
      //       'Mempunyai Kemampuan Bahasa Inggris (Menengah) 4',
      //       'Memahami dan Menguasai Standar K3 dan SMK3',
      //       'Memiliki Sertifikat Ahli K3 Umum',
      //       'Bersedia Ditempatkan di Jombang Jawa Timur'
      //     ],
      //     jobdesc: [
      //       `Mengidentifikasi, merancang, melaksanakan, mengendalikan dan mengevaluasi :                    
      //             a. Prosedur kerja dan potensi - potensi bahaya di lingkungan perusahaan untuk menjamin dan melindungi keselamatan dan kesehatan kerja setiap tenaga kerja dan orang lain di tempat kerja agar tercapai zero accident.
      //            <br> b. Potensi - potensi resiko bahaya penyakit menular maupun penyakit akibat kerja untuk menanggulangi gangguan kesehatan baik jasmani maupun rohani yang ditimbulkan dan atau diperparah karena aktivitas kerja atau kondisi yang berhubungan dengan pekerjaan.
      //             c. Pengelolaan lingkungan hidup di perusahaan untuk melestarikan fungsi lingkungan hidup dan mencegah terjadinya pencemaran dan/atau kerusakan lingkungan hidup.`
      //       , `Mengawasi semua aktivitas operasional di bagian terkait sesuai dengan SOP, WI, dan Kebijakan departemen agar tercapai kualitas dan kuantitas serta target yang ditetapkan oleh perusahaan.`
      //       , `Melakukan evaluasi, saran perbaikan dan membuat laporan di bagian terkait.`
      //       , `Memastikan bahwa pedoman kesehatan, keselamatan serta keamanan kerja dipatuhi di bagian terkait`
      //       , `Mengembangkan Bawahan baik secara KOMPETEN dan KOMITMEN sehingga didapatkan bawahan yang siap dipromosikan.`

      //     ]
      //   },
      //   4: {
      //     nama: 'SALES DAN MARKETING MANAGER (MARKET CHINA)',
      //     kualifikasi: [
      //       'Pendidikan minimal D3',
      //       'Lebih dari 5 tahun pengalaman dalam pemasaran eksport (Lebih diutamakan eksport pasar China)',
      //       'Menguasai Bahasa Inggris dan Bahasa Mandari (Lebih diutamakan)',
      //       'Mengetahui secara mendalam tentang tren konsumen dan budaya pemasaran di China.',
      //       'Keahlian dalam strategi pemasaran digital, termasuk media sosial, dan iklan online.',
      //       'Kreatif, Proaktif, Analisis Baik, dan pemahaman mendalam tentang perilaku konsumen.',
      //       'Bersedia ditempatkan di Head Office Jombang, Jawa Timur.'
      //     ],
      //     jobdesc: [
      //       `Menyusun dan melaksanakan strategi pemasaran inovatif untuk mendominasi pasar Sarang Burung Walet khususnya di Cina.`
      //       , `Mengidentifikasi tren pasar, menciptakan kampanye pemasaran yang unik dan bersaing untuk menarik perhatian konsumen.`
      //       , `Memimpin kampanye Digital Marketing, mengelola media sosial, iklan online dan segala bentuk pemasaran digital.`
      //       , `Membangun dan merawat kemitraan yang kokoh dengan pelanggan dan mitra di seluruh Cina.`
      //       , `Memantau, menganalisis, dan melaporkan kinerja kampanye pemasaran secara berkala kepada manajemen.`
      //     ]
      //   },
      //   5: {
      //     nama: 'JURU MASAK',
      //     kualifikasi: [
      //       'Laki-Laki (Usia 18-30 Th) dan Perempuan (30-45 Th)',
      //       'Pendidikan Minimal SMA Semua Jurusan',
      //       'Wajib Berpengalaman Memasak',
      //       'Mampu Merencanakan Bahan Baku Kebutuhan Dapur',
      //       'Mampu Mengelola Pembiayaan dan Pembelanjaan Dapur',
      //       'Bertanggung Jawab Kebersihan Dapur',
      //       'Mampu Melakukan Pengembangan Menu Masakan',
      //       'Jujur, Aktif, Kreatif dan Inovatif',
      //       'Bersedia Untuk Tinggal Di Rumah (Khusus Perempuan)',
      //       'Siap Ditempatkan di Surabaya Barat (Khusus Perempuan), dan Jombang (Khusus Laki-Laki)'
      //     ],
      //     jobdesc: [
      //       `Membuat dan menyusun bahan yang diperlukan untuk kebutuhan makan manajemen dan karyawan sesuai dengan standar kelayakan makanan di perusahaan dan mengontrol pendistribusian makanan kepada seluruh karyawan perusahaan`,
      //       `Menjalankan dan mengevaluasi pengadaan bahan pangan sesuai perencanaan yang sudah dibuat untuk kebutuhan kantin dan melakukan koordinasi dengan staff juru masak dan operator juru masak terkait perencanaan menu yang akan dibuat.`,
      //       `Melaksanakan tugas-tugas tambahan yang bersifat supporting kepada operator juru masak agar proses pengolahan makanan berjalan sesuai dengan waktu yang ditentukan perusahaan`
      //       , `Melakukan pengecekan terhadap makanan yang akan disajikan kepada karyawan dan manajemen meliputi pengecekan fisik dan pengecekan rasa/organoleptik`

      //     ]
      //   }
      // };

      // // Check if the provided $jabatan is a valid key in the 'jobs' object
      // if (jobs.hasOwnProperty(nama)) {
      //   jobs[nama].kualifikasi.forEach(element => {
      //     rejrt.innerHTML += `<li>${element}</li>`;

      //   });
      //   $('h2').html(jobs[nama].nama);
      //   $('.btn').on('click', function () {
      //     // Assuming you have a URL to redirect to
      //     window.location.href = `Formulirpendaftaranpelamar/formulir.php?nama=${jobs[nama].nama}`;
      //   });
      //   jobs[nama].jobdesc.forEach(element => {
      //     jobdesc.innerHTML += `<li>${element}</li>`
      //   });
      // } else {
      //   console.error(`Job with key ${nama} not found.`);
      // }

      localStorage.clear();

      $.ajax({
        url: 'api/api_job.php',
        method: 'GET',
        data: { nama: nama },
        dataType: 'json',
        success: function (data) {
          // console.log(data);

          var dta = data.jobPosting.job_requirement;
          var rejrt = document.getElementById('rekruitment');
          var jobdesc = document.getElementById('jobdesc');

          var buggati = data.jobPosting.job_title.nama;
          $('h2').html(buggati);
          // console.log(buggati);
          // Clear the content of the element before appending new items
          rejrt.innerHTML = '';
          jenisKelaminL = dta.L == 'Ya' ? 'Laki-Laki' : '';
          jenisKelaminP = dta.P == 'Ya' ? 'Perempuan' : '';
          $('.btn').on('click', function () {
            // Assuming you have a URL to redirect to
            window.location.href = `Formulirpendaftaranpelamar/formulir.php?nama=${buggati}`;
          });
          var tanggungJawab = dta.tanggungjawab_kompeten;
          const stepsArray = tanggungJawab.split("\r\n");
          // Menghapus angka di awal setiap langkah dan membuat HTML untuk poin-poin
          const formattedSteps = stepsArray.map(step => `<li>${step.replace(/^\d+\.\s*/, '').trim()}</li>`);

          // dta.forEach(element => {
          //   // Access properties directly without a nested loop
          rejrt.innerHTML += `<li>${jenisKelaminL} ,${jenisKelaminP}</li>`;
          // rejrt.innerHTML += `<li>Perempuan : ${dta.P}</li>`;
          rejrt.innerHTML += `<li>Kualifikasi Komitmen: ${dta.kualifikasi_komitmen}</li>`;
          rejrt.innerHTML += `<li>Nilai Akademik : ${dta.nilai_akademik}</li>`;
          rejrt.innerHTML += `<li>Pendidikan : ${dta.pendidikan}</li>`;
          rejrt.innerHTML += `<li>Pengalaman : ${dta.pengalaman}</li>`;
          jobdesc.innerHTML += `<ol>${formattedSteps.join('')}</ol>`;
          rejrt.innerHTML += `<li>Tujuan Utama : ${dta.tujuan_utama}</li>`;
          rejrt.innerHTML += `<li>Usia : ${dta.usia}`

          //   console.log(element.id);
          // });

          // Convert the array to a JSON string before storing in localStorage
          localStorage.setItem('key', JSON.stringify(data.data));
        },
        error: function (xhr, status, error) {
          console.error(error);
          $('#output').html('<p>Error loading data</p>');
        }
      });
    });

  </script>


</body>

</html>