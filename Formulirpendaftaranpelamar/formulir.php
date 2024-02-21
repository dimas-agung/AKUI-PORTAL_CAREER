<?php

$jabatan = $_GET['nama'];



?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulir</title>
  <link rel="icon" href="../asset/logo2.svg">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
  <style>
    li {
      margin-bottom: 20px;
    }

    .label::after {
      content: "*";
      color: red;
      margin-left: 5px;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <!-- Include Select2 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->
</head>

<body>
  <section class="d-flex justify-content-center">
    <div class="card m-3d-flex md" style="width: 500px;">

      <div class="card-body border-top border-5 border-warning">
        <h5 class="card-title text-center p-3">Form Pendaftaran Karyawan Baru PT Akui Bird Nest Indonesia</h5>
        <div class="container text-center fs-5">
          <p class="card-text">Silakan memasukkan data diri Anda dengan sebenar-benarnya.
            Baca dengan teliti dan isikan form pendaftaran ini dengan benar sesuai instruksi pada masing-masing
            pertanyaan.
            Seluruh proses rekrutmen yang diadakan oleh perusahaan tidak dipungut biaya apapun.
          </p>
        </div>
      </div>


      <form id="upload-form" method="post" enctype="multipart/form-data" onsubmit="return validateFileSize()">
        <div class="card m-3 md">
          <div class="card-body border-top border-5 border-warning">
            <h5 class="card-title text-center"></h5>
            <form>

              <div class="mb-3">
                <label for="posisi">Posisi yang dilamar</label>
                <input type="text" class="form-control" id="posisi" value="<?= $jabatan ?>" readonly required><br>
                <label for="scan-ktp" class="form-label fs label">
                  Foto KTP

                </label>
                <input required name="scan_ktp" accept="application/pdf,.jpeg,.jpg,.png" class=" form-control"
                  type="file" id="scan-ktp" onchange="validateFile(this, 5000)">
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label label">Nama lengkap sesuai KTP</label>
                <input name="nama" required type="text" class="form-control" id="nama" aria-describedby="emailHelp">

              </div>

              <div class="mb-3">
                <label for="nik" class="form-label label">NIK KTP</label>
                <input name="nik" minlength="16" required type="number" class="form-control" id="nik"
                  aria-describedby="emailHelp">

              </div>

              <div class="mb-3">
                <label for="tempatlahir" class="form-label label">Tempat lahir</label>
                <input name="tempat_lahir" required type="text" class="form-control" id="tempatlahir"
                  aria-describedby="emailHelp">

              </div>
              <div class="mb-3">
                <label for="tanggallahir" class="form-label label">Tanggal lahir</label>
                <input name="tanggal_lahir" required type="date" class="form-control" id="tanggallahir">

              </div>
              <div class="berat_badan">
                <label class="label" for="berat_badan">Berat Badan</label>
                <input type="number" required name="berat_badan" class="form-control" id="berat_bedan">
                <label class="label" for="tinggi_badan">Tinggi Badan</label>
                <input type="number" required name="tinggi_badan" class="form-control" id="tinggi_badan">
                <label class="label" for="agama">Agama</label>
                <select required class="form-control" name="agama" id="agama">
                  <option value=""></option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen Protestan">Kristen Protestan</option>
                  <option value="Kristen Katolik">Kristen Katolik</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Buddha">Buddha</option>
                  <option value="Konghucu">Konghucu</option>
                </select>
              </div>
              <!-- <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label label">Usia</label>
                    <div class="mb-3" id="emailHelp" class="form-text">Contoh pengisian: 25 Th</div>
                    <input name = "usia" required type="text" class="form-control" id="exampleInputPassword1">
                  </div><div class="container mb-3"></div> -->
              <label class="label"> Jenis kelamin</label>
              <div class="form-check">
                <input value="laki laki" name="jenis_kelamin" required class="form-check-input" type="radio" id="jk">
                <label class="form-check-label" for="jk">
                  laki laki
                </label>
              </div>
              <div class="form-check">
                <input value="Perempuan" class="form-check-input" type="radio" name="jenis_kelamin" id="jk">
                <label class="form-check-label mb-3" for="permprn">
                  Perempuan
                </label>
              </div>


              <div class="mb-3 mt-2">

                <label for="email" class="form-label label">Email Aktif <br>
                  Pastikan Email anda benar dan pastikan anda mengisi email tidak salah ketik</label>
                <input name="email" required type="email" class="form-control" id="email" aria-describedby="emailHelp">
              </div>

              <div class="mb-3 p-2">
                <label class="label">Pendidikan terakhir</label>
                <select class="form-control select2" name="pendidikan" style="width:100%;" id="pnd">
                  <option value="smp">SMP Sederajat</option>
                  <option value="SMA">SMA</option>
                  <option value="SMK">SMK</option>
                  <option value="D1">D1</option>
                  <option value="D2">D2</option>
                  <option value="D3">D3</option>
                  <option value="D4">D4</option>
                  <option value="S1">S1</option>
                  <option value="S2">S2</option>
                </select>
              </div>


              <div class="mb-3">
                <label for="nma_sklh" class="form-label label">Tuliskan Nama Sekolah/Universitas Terakhir Anda</label>
                <div class="mb-3" id="y" class="form-text">Contoh: SMA Negeri 1 Jombang atau Universitas Muhammadiyah
                  Malang</div>
                <input name="nama_sekolah" required type="text" class="form-control mt-2" id="nma_sklh"
                  aria-describedby="emailHelp">
                <label for="jrsn" class="mt-4 label">Jurusan Sekolah</label>
                <input name="jurusan_sekolah" required type="text" class="form-control" id="jrsn"
                  aria-describedby="emailHelp">
              </div>
              <div class="mb-2"><label class="label">Status pernikahan</label>
                <select class="form-control" name="status_pernikahan" id="sts-prnkhn">
                  <option value="">Pilih Status pernikahan</option>
                  <option value="Belum menikah">Belum menikah</option>
                  <option value="Menikah">Menikah</option>
                  <option value="Cerai hidup">Cerai hidup</option>
                  <option value="Cerai mati">Cerai mati</option>


                </select>
              </div>

              <div class="mb-3">
                <label for="alamat_ktp" class="form-label label">Alamat sesuai KTP</label>
                <div class="mb-3" name="alamat_ktp" id="emailHelp" class="form-text">Hanya pelamar yang menuliskan
                  alamat lengkap sesuai
                  KTP, yang akan kami proses lebih lanjut. <br>
                  Contoh : Jl. Singojoyo RT/RW 04/02 Ds. Tembelang Kec. Tembelang Kab. Jombang </div>
                <input name="alamat" required type="text" class="form-control mb-3" id="alamat_ktp"
                  aria-describedby="emailHelp">
                <div class="mb-3">
                  <label for="alamat_domisili" class="form-label label">Alamat domisili saat ini</label>
                  <div class="mb-3" id="emailHelp" class="form-text">Jika alamat domisili sama dengan KTP, tidak perlu
                    ditulis ulang melainkan isi dengan tanda - </div>
                  <input name="alamat_domisili" required type="text" class="form-control mb-3" id="alamat_domisili"
                    aria-describedby="emailHelp">
                  <div class="mb-3">
                    <label for="no_telp" class="form-label label">Nomor Telepon</label>
                    <div class="mb-3" id="emailHelp" class="form-text">Yang terhubung dengn whatsapp <br> Awali dengan
                      angka 0 dan tanpa tanda -
                    </div><input name="nomor_telpon" required type="number" class="form-control mb-3" id="no_telp"
                      aria-describedby="emailHelp">

                    <!-- <div class="mb-2"><label for="">Posisi yang dilamar</label>
                      <select class="form-control" id="posisi">
                        <option value="">Pilih Posisi yang dilamar</option>
                        <option value="Operator produksi">Operator produksi</option>
                        <option value="Security"> Security</option>
                        <option value="Continuous Improvement">Continuous Improvement</option>
                        <option value="IT Programmer Intership Program"> IT Programmer Intership Program</option>
                        <option value="Juru Masak"> Juru Masak</option>
                      </select>
                    </div> -->
                    <div class="mb-3">
                      <label for="pnglm_bkrj" class="form-label label">
                        Pengalaman Bekerja
                      </label>
                      <div class="mb-3" id="emailHelp" class="form-text">Contoh: PT Akui Bird Nest Indonesia sebagai
                        Operator Produksi (1 tahun 2 bulan) </div>
                      <input name="pengalaman_bekerja" required type="text" class="form-control mb-3" id="pnglm_bkrj"
                        aria-describedby="emailHelp">

                      <div id="matasilinder" class="mb-2 d-none">
                        Apakah anda memiliki mata minus / silinder

                        <div class="form-check">
                          <input value="YES" class="form-check-input" type="radio" id="ms/y" onclick="text(0)">
                          <label class="form-check-label" for="ms/y">
                            Yes
                          </label>
                        </div>
                        <div class="form-check">
                          <input value="-" class="form-check-input" type="radio" name="minus_silinder" id="m/sn"
                            onclick="text(1)">
                          <label class="form-check-label" for="m/sn">
                            No
                          </label>
                          <div class="mb-3 mt-2" id="hmm">
                            <label for="minus_silinder" class="form-label ">minus berapa?</label>
                            <input name="ketebalan_minus" id="minus_silinder" required type="text" class="form-control"
                              aria-describedby="emailHelp" value="-">
                            <label for="slndr_berapa" class="form-label ">silinder berapa?</label>
                            <input name="ketebalan_silinder" value="-" required type="text" id="slndr_berapa"
                              class="form-control" aria-describedby="emailHelp">
                          </div>
                        </div>
                      </div>

                      <div class="mb-3">
                        Apakah anda memiliki riwayat penyakit?
                      </div>
                      <div class="form-check">
                        <input value="YES" name="penyakit" class="form-check-input" type="radio" id="penyakit-y"
                          onclick="t(0)">
                        <label class="form-check-label" for="penyakit-y">
                          Yes
                        </label>
                      </div>
                      <div class="form-check">
                        <input value="-" class="form-check-input" type="radio" name="penyakit" id="penyakit-n"
                          onclick="t(1)">
                        <label class="form-check-label" for="penyakit-n">
                          No
                        </label>
                        <div class="mb-3 mt-2" id="penyakit">
                          <label for="penyakit-apa" class="form-label ">Penyakit apa yang and miliki?</label>
                          <input value="-" name="nama_penyakit" id="penyakit-apa" required type="text"
                            class="form-control" aria-describedby="emailHelp">
                          <label for="penyakit_kapan" class="form-label ">Kapan?</label>
                          <input value="-" name="lama_penyakit" required type="text" class="form-control"
                            id="penyakit_kapan" aria-describedby="emailHelp">
                        </div>
                      </div>



                      <div class="mb-2">
                        Apakah anda mempunyai keluarga atau kawan yang bekerja dalam group perusahaan kami?
                      </div>
                      <div class="form-check">
                        <input value="YES" name="relasi" class="form-check-input" type="radio" id="relas"
                          onclick="te(0)">
                        <label class="form-check-label" for="relas">
                          Yes
                        </label>
                      </div>
                      <div class="form-check">
                        <input value="-" class="form-check-input" type="radio" name="relasi" id="r" onclick="te(1)">
                        <label class="form-check-label" for="r">
                          No
                        </label>
                        <div class="mb-3 mt-2" id="relasi">
                          <label for="relasi-nama" class="form-label ">Nama</label>
                          <input value="-" name="nama_teman" required type="text" class="form-control"
                            aria-describedby="emailHelp" id="relasi-nama">
                          <label for="relasi-jabatan" class="form-label ">Jabatannya</label>
                          <input value="-" name="posisi_teman" required id="relasi-jabatan" type="text"
                            class="form-control" aria-describedby="emailHelp">
                        </div>
                      </div>
                    </div>

                    <div class="mb-3">
                      <label for="pnjlsan" class="form-label label">
                        Berikan penjelasan singkat kenapa anda tertarik di perushaan ini?
                      </label>
                      <input name="penjelasan" required type="text" class="form-control mb-3" id="pnjlsan"
                        aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3"><label class="form-label label" for="eksp_salary">Ekspektasi Salary</label>
                      <input type="number" required class="form-control" name="ekspektasi_salary" id="eksp_salary">
                    </div>
                    <div class="mb-3">
                      <label for="pnjlsan" class="form-label label">
                        Kewarganegaraan
                      </label>
                      <select name="kewarganegaraan" required type="text" class="form-select mb-3" id="warga"
                        aria-describedby="emailHelp">
                        <option value="WNI">WNI (Warga Negara Indonesia)</option>
                        <option value="WNA">WNA (Warga Negara Asing)</option>
                      </select>
                    </div>
                    <div class="mb-3"><label class="form-label label" for="provinsi">Provinsi</label>
                      <select type="text" required class="form-select" name="provinsi" id="province">
                        <option value="" selected>--Pilih Provinsi--</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="kabupaten" class="form-label label">
                        Kabupaten
                      </label>
                      <select name="kabupaten" required type="text" class="form-select mb-3" id="kabupaten"
                        aria-describedby="emailHelp">
                        <option value="" selected></option>
                      </select>
                    </div>
                    <div class="mb-3"><label class="form-label label" for="kecamatan">Kecamatan</label>
                      <select type="text" required class="form-select" name="kecamatan" id="kecamatan">
                        <option value="" selected></option>
                      </select>
                    </div>
                    <div class="mb-3"><label class="form-label label" for="rt">RT</label>
                      <input type="number" required class="form-control" name="rt" id="rt">
                    </div>
                    <div class="mb-3"><label class="form-label label" for="rw">RW</label>
                      <input type="number" required class="form-control" name="rw" id="rw">
                    </div>


                    <div class="mb-3">

                      <p>Upload Berkas Lamaran
                      </p>
                      <ol type="1">
                        Berkas Lamaran Berisi:
                        <!-- <li>
                              KTP ASLI <br>
                              <input type="file" class="form-control" name="ktp_asli" id="ktp_aseli">
                            </li> -->
                        <li>
                          <label for="kk" class="form-label label">KARTU KELUARGA </label>
                          <p>Dokumen bisa berupa pdf /
                            jpeg, jpg, png</p>
                          <input type="file" class="form-control" accept="application/pdf, .jpeg ,.jpg , .png"
                            name="kartu_keluarga" id="kk" required onchange="validateFile(this, 5000)">
                        </li>

                        <li><label class="form-label label" for=""> Pass Foto</label>
                          <input type="file" class="form-control" accept=".jpeg, .jpg, .png" name="pass_foto"
                            id="pass_foto" required onchange="validateFile(this, 5000)">
                        </li>
                        <li class="label"> LAMARAN LENGKAP (Surat Lamaran,
                          CV/Daftar Riwayat Hidup, Ijazah, SKHU/Transkip Nilai,
                          Keterangan Vaksin Terakhir, Surat Sehat Asli) <br>
                          <br>

                          -Berkas lamaran yang diupload harus jelas dan bisa terbaca untuk dapat kami proses lebih
                          lanjut.
                        </li>
                        <input name="fileberkas" accept="application/pdf" onchange="validateFile(this, 10000)"
                          class="form-control" required type="file" id="formFile">
                      </ol>
                    </div>
                    <input type="hidden" required id="sembunyi" name="jabatan_id" value="">
                    <input type="hidden" required id="posting" name="posting_id" value="">
                    <input type="hidden" id="o" name="status" value="PENDING">
                    <input type="hidden" name="namaJ" value="<?= $jabatan ?>">
                    <button class="btn btn-warning text-light" onsubmit="submitForm()">Submit</button>

            </form>
          </div>
        </div>
    </div>
    </form>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <style>
    .yl {
      outline: none;
      border: none;
      border-bottom: silver 2px solid;
    }

    li {
      margin-bottom: 0 !important;
    }
  </style>
  <!-- Include SweetAlert library -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    if (!localStorage.getItem('tahu')) {
      // If 'tahu' doesn't exist, set it to 'isi'
      window.location.href = '../index.php';
    }
    $(document).ready(function () {
      $('#upload-form').on('submit', function (e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
          url: 'api/api_pelamar.php',
          type: 'POST',
          data: formData,
          processData: false,
          contentType: false,
          success: function (response) {
            var responseData = JSON.parse(response);
            if (responseData.success) {
              Swal.fire({
                icon: 'success',
                title: 'Success',
                html: responseData.message,
              }).then((result) => {
                if (result.isConfirmed) {
                  window.location.href = 'thanks.php';
                }
              });
            } else {
              Swal.fire({
                icon: 'error',
                title: 'Error',
                html: responseData.message
              });
            }
          },
          error: function (xhr, status, error) {
            var errorResponse = JSON.parse(xhr.responseText);
            Swal.fire({
              icon: 'error',
              title: 'Error',
              html: `<h1 class="mt-3">${errorResponse.message}</h1>
        <p> mohon maaf server sedang dalam perbaikan tunggu beberapa saat atau silahkan menghubungi nomor berikut
        <a href="https://wa.me/+6281216552207" > Tim HR</a>
      </p>`
            });
          }
        });
      });
    });
  </script>

  <script>
    function validateFileSize() {
      // You can add more file input validations here if needed
      return true; // Return true to submit the form, or false to prevent submission
    }

    function validateFile(input, maxSizeKB) {
      if (input.files && input.files[0]) {
        const fileSize = input.files[0].size; // Size in bytes
        const maxSizeBytes = maxSizeKB * 1024;

        if (fileSize > maxSizeBytes) {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: `File size exceeds the maximum allowed size (${maxSizeKB} KB). Please choose a smaller file.`
          });
          input.value = ''; // Clear the file input
          return false;
        }
      }

      return true; // File size is within the limit
    }

  </script>

  <script>

    function text(x) {
      if (x == 0) document.getElementById("hmm").style.display = "block";
      else document.getElementById("hmm").style.display = "none";
      return;
    }
    function t(x) {
      if (x == 0) document.getElementById("penyakit").style.display = "block";
      else document.getElementById("penyakit").style.display = "none";
      return;
    }
    function e(x) {
      if (x == 0) document.getElementById("seleksi").style.display = "block";
      else document.getElementById("seleksi").style.display = "none";
      return;
    }
    function x(x) {
      if (x == 0) document.getElementById("bekerja").style.display = "block";
      else document.getElementById("bekerja").style.display = "none";
      return;
    }
    function xt(x) {
      if (x == 0) document.getElementById("kuliah").style.display = "block";
      else document.getElementById("kuliah").style.display = "none";
      return;
    }
    function te(x) {
      if (x == 0)
        document.getElementById("relasi").style.display = "block";
      else
        document.getElementById("relasi").style.display = "none";
    }

    var selectedPosisi = document.getElementById("posisi").value;

    if (selectedPosisi === 'OPERATOR PRODUKSI') {
      document.getElementById("matasilinder").classList.remove("d-none");
    }

    $.ajax({
      url: 'api/api_job_posting.php',
      method: 'GET',
      data: { id: "<?= $jabatan ?>" },
      dataType: 'json',
      success: function (data) {
        // console.log(data);
        // localStorage.clear();
        // var id = localStorage.setItem('key', JSON.stringify(data.data.id));
        // id = data.data.id;localStorage.getItem('key');

        // console.log(JSON.stringify(data.data.id));
        var rotiBakar = document.getElementById('sembunyi');
        var rotiJamur = document.getElementById('posting');
        rotiJamur.value = localStorage.getItem('key');
        // console.log(rotiJamur.value);
        rotiBakar.value = JSON.stringify(data.data.id);
        // Now you can work with the 'id' or other data here
        // console.log(id);
        // localStorage.setItem('key', data.data.id)
        // Call a function or perform other actions that depend on the data
        // processData(data);
      },
      error: function (xhr, status, error) {
        // console.error('Error:', status, error); $('#output').html('<p>Error loading data</p>');

      }
    });
    $('#nik').on('change', function () {
      if ($(this).val().length === 16) {
        var selectedOption = $(this).val();

        var id = localStorage.getItem('key');
        // AJAX request
        $.ajax({
          url: 'api/api_cek_pelamar.php', // URL to your backend script
          type: 'GET', // HTTP method
          data: {
            nik: selectedOption,
            jabatan_id: id,
          }, // Data to be sent to the server
          success: function (response) {
            if (response === 'success') {
              // Alert or show error message here
              Swal.fire({
                title: 'Error!',
                text: 'Pelamar dengan NIK dan Posisi tersebut sudah ada.',
                icon: 'error'
              });
              $('#nik').val('');
              // Reset selectedOption if needed
            }
          },
          error: function (xhr, status, error) {
            //console.error(error);  Log any errors to the console
          }
        });
      } else {
        Swal.fire({
          title: 'Error!',
          text: 'NIK Harus 16 digit',
          icon: 'error'
        });
        $('#nik').val('');
      }
    });

  </script>
  <script>
    $(document).ready(function () {
      // Load province data
      $.ajax({
        url: 'wilayah/provinsi.json',
        dataType: 'json',
        success: function (data) {
          // Iterate over each province and add it to the select element
          $.each(data, function (index, province) {
            $('#province').append(`<option value="${province.name}" data-id="${province.id}" data-kabupaten="${province.kabupaten}">${province.name}</option>`);
          });

          // Trigger change event to initially populate kabupaten based on the selected province
          $('#province').change();
        },
        error: function (xhr, status, error) {
          console.error('Failed to fetch province data:', status, error);
        }
      });

      // Load kabupaten data based on selected province
      $('#province').change(function () {
        var selectedProvinceId = $(this).find(':selected').data('id'); // Correct way to retrieve data-id attribute
        var selectedKabupaten = $(this).find(':selected').data('kabupaten'); // Retrieve kabupaten data

        // Clear existing kabupaten options
        $('#kabupaten').empty().append('<option value="">Select Kabupaten</option>');
        $('#kecamatan').empty().append('<option value="">Select Kecamatan</option>');

        // Fetch kabupaten data based on selected province
        $.ajax({
          url: 'wilayah/kabupaten.json',
          dataType: 'json',
          success: function (data) {
            // Iterate over each kabupaten and display only the ones matching the selected province
            $.each(data, function (index, kabupaten) {
              if (kabupaten.provinsi_id == selectedProvinceId) {
                $('#kabupaten').append(`<option value="${kabupaten.name}" data-id="${kabupaten.id}" data-kabupaten="${kabupaten.kabupaten}">${kabupaten.name} ${kabupaten.type}</option>`);
              }
            });

            // Trigger change event to initially populate kecamatan based on the selected kabupaten
            $('#kabupaten').change();
          },
          error: function (xhr, status, error) {
            console.error('Failed to fetch kabupaten data:', status, error);
          }
        });
      });

      // Load kecamatan data based on selected kabupaten
      $('#kabupaten').change(function () {
        var selectedKabupatenId = $(this).find(':selected').data('id'); // Correct way to retrieve data-id attribute

        // Clear existing kecamatan options
        $('#kecamatan').empty().append('<option value="">Select Kecamatan</option>');

        // Fetch kecamatan data based on selected kabupaten
        $.ajax({
          url: 'wilayah/kecamatan.json',
          dataType: 'json',
          success: function (data) {
            // Iterate over each kecamatan and display only the ones matching the selected kabupaten
            $.each(data, function (index, kecamatan) {
              if (kecamatan.kabupaten_id == selectedKabupatenId) {
                $('#kecamatan').append(`<option value="${kecamatan.name}" data-kecamatan="${kecamatan.kabupaten_id}">${kecamatan.name}</option>`);
              }
            });
          },
          error: function (xhr, status, error) {
            console.error('Failed to fetch kecamatan data:', status, error);
          }
        });
      });

      // Initialize Select2 after all select elements are populated
      $('#province').select2();
      $('#kabupaten').select2();
      $('#kecamatan').select2();
    });

  </script>



</body>

</html>