<?php

$jabatan = $_GET['nama'];



?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulir</title>
  <link rel="icon" href="asset/logo2.svg">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <style>
    li {
      margin-bottom: 20px;
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


      <form action="" method="post" enctype="multipart/form-data">
        <div class=" card m-3 md">
          <div class="card-body border-top border-5 border-warning">
            <h5 class="card-title text-center"></h5>
            <form>

              <div class="mb-3">
                <label class="form-label" for="posisi">Posisi yang dilamar</label>
                <input type="text" class="form-control" id="posisi" value="<?= $jabatan ?>" readonly><br>
                <label for="scan-ktp" class="form-label fs">
                  <p>Foto KTP
                  </p>
                </label>
                <input name="scan_ktp" accept=".jpeg, .jpg, .png" class="form-control" type="file" id="scan-ktp">
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama lengkap sesuai KTP</label>
                <input name="nama" required type="text" class="form-control" id="nama" aria-describedby="emailHelp">

              </div>

              <div class="mb-3">
                <label for="nik" class="form-label">NIK KTP</label>
                <input name="nik_ktp" minlength="16" required type="text" class="form-control" id="nik"
                  aria-describedby="emailHelp">

              </div>

              <div class="mb-3">
                <label for="tempatlahir" class="form-label">Tempat lahir</label>
                <input name="tempatlahir" required type="text" class="form-control" id="tempatlahir"
                  aria-describedby="emailHelp">

              </div>
              <div class="mb-3">
                <label for="tanggallahir" class="form-label">Tanggal lahir</label>
                <input name="tanggallahir" required type="date" class="form-control" id="tanggallahir">

              </div>
              <div class="berat_badan">
                <label for="berat_badan">Berat Badan</label>
                <input type="number" class="form-control" id="berat_bedan">
                <label for="tinggi_badan">Tinggi Badan</label>
                <input type="number" class="form-control" id="tinggi_badan">
                <label for="agama">Agama</label>
                <input type="text" class="form-control" id="agama">
              </div>
              <!-- <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Usia</label>
                    <div class="mb-3" id="emailHelp" class="form-text">Contoh pengisian: 25 Th</div>
                    <input name = "usia" required type="text" class="form-control" id="exampleInputPassword1">
                  </div><div class="container mb-3"></div> -->
              <p> Jenis kelamin</p>
              <div class="form-check">
                <input value="laki laki" name="jeniskelamin" required class="form-check-input" type="radio" id="jk">
                <label class="form-check-label" for="jk">
                  laki laki
                </label>
              </div>
              <div class="form-check">
                <input value="Perempuan" class="form-check-input" type="radio" name="jeniskelamin" id="jk">
                <label class="form-check-label mb-3" for="permprn">
                  Perempuan
                </label>
              </div>


              <div class="mb-3 mt-2">

                <label for="email" class="form-label">Email Aktif</label>
                <input name="email" required type="email" class="form-control" id="email" aria-describedby="emailHelp">
              </div>

              <div class="mb-3 p-2">
                <p>Pendidikan terakhir</p>
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
                <label for="nma_sklh" class="form-label">Tuliskan Nama Sekolah/Universitas Terakhir Anda</label>
                <div class="mb-3" id="y" class="form-text">Contoh: SMA Negeri 1 Jombang atau Universitas Muhammadiyah
                  Malang</div>
                <input name="nama_sekolah" required type="text" class="form-control mt-2" id="nma_sklh"
                  aria-describedby="emailHelp">
                <label for="jrsn" class="mt-4">Jurusan Sekolah</label>
                <input name="jurusan_sekolah" required type="text" class="form-control" id="jrsn"
                  aria-describedby="emailHelp">
              </div>
              <div class="mb-2"><label>Status pernikahan</label>
                <select class="form-control" id="sts-prnkhn">
                  <option value="">Pilih Status pernikahan</option>
                  <option value="Belum menikah">Belum menikah</option>
                  <option value="Menikah">Menikah</option>
                  <option value="Cerai hidup">Cerai hidup</option>
                  <option value="Cerai mati">Cerai mati</option>


                </select>
              </div>

              <div class="mb-3">
                <label for="alamat_ktp" class="form-label">Alamat sesuai KTP</label>
                <div class="mb-3" id="emailHelp" class="form-text">Hanya pelamar yang menuliskan alamat lengkap sesuai
                  KTP, yang akan kami proses lebih lanjut. <br>
                  Contoh : Jl. Singojoyo RT/RW 04/02 Ds. Tembelang Kec. Tembelang Kab. Jombang </div>
                <input name="alamat" required type="text" class="form-control mb-3" id="alamat_ktp"
                  aria-describedby="emailHelp">
                <div class="mb-3">
                  <label for="alamat_domisili" class="form-label">Alamat domisili saat ini</label>
                  <div class="mb-3" id="emailHelp" class="form-text">Jika alamat domisili sama dengan KTP, tidak perlu
                    ditulis ulang melainkan isi dengan tanda - </div>
                  <input nama="domisili" required type="text" class="form-control mb-3" id="alamat_domisili"
                    aria-describedby="emailHelp">
                  <div class="mb-3">
                    <label for="no_telp" class="form-label">Nomor Telepon</label>
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
                      <label for="pnglm_bkrj" class="form-label">
                        <p class="mt-4">Pengalaman Bekerja</p>
                      </label>
                      <div class="mb-3" id="emailHelp" class="form-text">Contoh: PT Akui Bird Nest Indonesia sebagai
                        Operator Produksi (1 tahun 2 bulan) </div>
                      <input name="pengalaman_bekerja" required type="text" class="form-control mb-3" id="pnglm_bkrj"
                        aria-describedby="emailHelp">

                      <div id="matasilinder" class="mb-2 d-none">
                        Apakah anda memiliki mata minus / silinder

                        <div class="form-check">
                          <input value="YES" name="minus_silinder" class="form-check-input" type="radio" id="ms/y"
                            onclick="text(0)">
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
                            <label for="minus_silinder" class="form-label">minus berapa?</label>
                            <input name="minus_silinder" id="minus_silinder" required type="text" class="form-control"
                              aria-describedby="emailHelp">
                            <label for="slndr_berapa" class="form-label">silinder berapa?</label>
                            <input name="minus_silinder" required type="text" id="slndr_berapa" class="form-control"
                              aria-describedby="emailHelp">
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
                          <label for="penyakit-apa" class="form-label">Penyakit apa yang and miliki?</label>
                          <input name="penyakit" id="penyakit-apa" required type="text" class="form-control"
                            aria-describedby="emailHelp">
                          <label for="penyakit_kapan" class="form-label">Kapan?</label>
                          <input name="penyakit_kapan" required type="text" class="form-control" id="penyakit_kapan"
                            aria-describedby="emailHelp">
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
                          <label for="relasi-nama" class="form-label">Nama</label>
                          <input name="relasi" required type="text" class="form-control" aria-describedby="emailHelp"
                            id="relasi-nama">
                          <label for="relasi-jabatan" class="form-label">Jabatannya</label>
                          <input name="relasi" required id="relasi-jabatan" type="text" class="form-control"
                            aria-describedby="emailHelp">
                        </div>
                      </div>
                    </div>

                    <div class="mb-3">
                      <label for="pnjlsan" class="form-label">
                        <p class="mt-4">Berikan penjelasan singkat kenapa anda tertarik di perushaan ini?</p>
                      </label>
                      <input name="penjelasan" required type="text" class="form-control mb-3" id="pnjlsan"
                        aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3"><label for="eksp_salary">Ekspektasi Salary</label>
                      <input type="number" class="form-control" name="" id="eksp_salary">
                    </div>
                    <div class="mb-3">
                      <label for="pnjlsan" class="form-label">
                        <p class="mt-4">Kewarganegaraan</p>
                      </label>
                      <input name="penjelasan" required type="text" class="form-control mb-3" id="warga"
                        aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3"><label for="provinsi">Provinsi</label>
                      <input type="text" class="form-control" name="" id="provinsi">
                    </div>
                    <div class="mb-3">
                      <label for="kabupaten" class="form-label">
                        Kabupaten
                      </label>
                      <input name="penjelasan" required type="text" class="form-control mb-3" id="kabupaten"
                        aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3"><label for="kecamatan">Kecamatan</label>
                      <input type="text" class="form-control" name="" id="kecamatan">
                    </div>
                    <div class="mb-3"><label for="rt">RT</label>
                      <input type="number" class="form-control" name="" id="rt">
                    </div>
                    <div class="mb-3"><label for="rw">RW</label>
                      <input type="number" class="form-control" name="" id="rw">
                    </div>


                    <div class="mb-3">
                      <label for="formFile" class="form-label fs">
                        <p>Upload Berkas Lamaran
                        </p>
                        <ol type="1">
                          Berkas Lamaran Berisi:
                          <!-- <li>
                              KTP ASLI <br>
                              <input type="file" class="form-control" name="ktp_asli" id="ktp_aseli">
                            </li> -->
                          <li>KARTU KELUARGA <br>
                            <input type="file" class="form-control" accept="application/pdf" name="kartu_keluarga"
                              id="kk">
                          </li>
                          <li>Pass Foto <br>
                            <input type="file" class="form-control" accept=".jpeg, .jpg, .png" name="pass_foto"
                              id="pass_foto">
                          </li>
                          <li> LAMARAN LENGKAP (Surat Lamaran, CV/Daftar Riwayat Hidup, Ijazah, SKHU/Transkip Nilai,
                            Keterangan Vaksin Terakhir, Surat Sehat Asli) <br>
                            <br>

                            -Berkas lamaran yang diupload harus jelas dan bisa terbaca untuk dapat kami proses lebih
                            lanjut.
                      </label></li>
                      <input name="fileberkas" accept="application/pdf" class="form-control" type="file" id="formFile">
                      </ol>
                    </div>


                    <button type="button" class="btn btn-warning text-light" onclick="submitForm()">Submit</button>

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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <!-- Your script with AJAX call and Swal usage -->

  <script>
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
        localStorage.clear();
        localStorage.setItem('key', JSON.stringify(data.data.id));
        // id = data.data.id;

        // Now you can work with the 'id' or other data here
        // console.log(id);
        // localStorage.setItem('key', data.data.id)
        // Call a function or perform other actions that depend on the data
        // processData(data);
      },
      error: function (xhr, status, error) {
        console.error('Error:', status, error);
        // $('#output').html('<p>Error loading data</p>');
      }
    });

  </script>
  <script>
    // The 'id' will still be 'undefined' here because the AJAX call is asynchronous

    // function processData(data) {
    //   // Process the data or perform actions here
    //   console.log("Processed data:", data);
    // }
    document.getElementById("posisi").addEventListener('change', function () {
      // Wrap your code in an event listener to ensure it runs after the DOM is fully loaded

      var selectedPosisi = document.getElementById("posisi").value;
      var tr = document.getElementById("matasilinder");

      if (selectedPosisi === "Operator produksi") {
        tr.classList.remove("d-none");
      } else {
        tr.classList.add("d-none");
      }
    });

    $(document).ready(function () {
      $('.select2').select2();
    });


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


    function submitForm() {
      // Perform the AJAX request
      var id = localStorage.getItem('key');
      // console.log(id);
      var scan_ktp = $("#scan-ktp")[0].files[0];
      var nama = $('#nama').val();
      var nik = $('#nik').val();
      var tempatlahir = $('#tempatlahir').val();
      var tanggallahir = $('#tanggallahir').val();
      var jk = $('#jk').val();
      var berat_bedan = $('#berat_bedan').val();
      var tinggi_badan = $('#tinggi_badan').val();
      var agama = $('#agama').val();
      var email = $('#email').val();
      var pendidikan = $('#pnd').val();
      var nma_sklh = $('#nma_sklh').val();
      var jurusan_sekolah = $('#jrsn').val();
      var status_pernikahan = $('#sts-prnkhn').val();
      var alamat_ktp = $('#alamat_ktp').val();
      var alamat_domisili = $('#alamat_domisili').val();
      var no_telp = $('#no_telp').val()
      var posisi = $('#posisi').val()
      var pnglm_bkrj = $('#pnglm_bkrj').val()
      var minus_silinder = $('#minus_silinder').val()
      var penyakitApa = $('#penyakit-apa').val()
      var penyakit_kapan = $('#penyakit_kapan').val()
      var seleksi = $('#kapan_seleksi').val();
      var slndr_berapa = $('#slndr_berapa').val();
      var relasi_nama = $('#relasi-nama').val();
      var relasi_jabatan = $('#relasi-jabatan').val();
      var pnjlsan = $('#pnjlsan').val();
      // var ktp_aseli=$('#ktp_aseli').val();
      var kk = $("#kk")[0].files[0];
      var pas_photo = $("#pass_foto")[0].files[0];
      var berkas = $("#formFile")[0].files[0];
      var kwrgn = $("#warga").val();
      var rt = $("#rt").val();
      var rw = $("#rw").val();
      var kecamatan = $("#kecamatan").val();
      var kabupaten = $("#kabupaten").val();
      var provinsi = $("#provinsi").val();
      //var rw = $("#rw");

      var dobValue = new Date();

      // Hitung usia berdasarkan tanggal lahir
      var today = new Date(tanggallahir);
      var age = dobValue.getFullYear() - today.getFullYear();

      // Atur tanggal lahir ke tanggal saat ini untuk memeriksa hari ulang tahun
      today.getFullYear(dobValue.setFullYear());

      // Jika tanggal lahir pada atau setelah hari ini, kurangi satu tahun dari usia
      if (today < dobValue) {
        age--;
      }

      var eksp_salary = $('#eksp_salary').val();
      //v
      var jabatan_id = id;
      // console.log(id);
      if (
        scan_ktp == null ||
        nama == "" ||
        nik == "" ||
        tempatlahir == "" ||
        tempatlahir == "" ||
        //== "" ||
        tinggi_badan == "" ||
        berat_bedan == "" ||
        jk == "" ||
        agama == "" ||
        email == "" ||
        nma_sklh == "" ||
        jurusan_sekolah == "" ||
        alamat_ktp == "" ||
        //kewarganegaraan == "" ||
        //provinsi == "" ||
        // kabupaten == "" ||
        // kecamatan == "" ||
        //rt == "" ||
        //rw == "" ||
        alamat_domisili == "" ||
        no_telp == "" ||
        //jabatan_id == "" ||
        pnglm_bkrj == "" ||
        eksp_salary == "" ||
        kk == "" ||
        pas_photo == "" ||
        berkas == ""
      ) {
        Swal.fire({ title: "Gagal", text: "Isian Anda Ada Yang Masih Kosong", icon: "error" });
        return;
      }

      //
      if (email.indexOf('@') === -1) {
        Swal.fire({
          title: 'Error!',
          text: 'Email Anda tidak valid',
          icon: 'error',
          confirmButtonText: 'OK'
        });
        return;
      }

      if (nik.length !== 16) {
        Swal.fire({
          title: 'Eror!',
          text: 'NIK Anda tidak valid',
          icon: 'error',
          confirmButtonText: 'OK'
        })
        return;
      }

      // Create a FormData object
      var formData = new FormData();
      formData.append('scan_ktp', scan_ktp);
      formData.append('nama', nama);
      formData.append('nik', nik);
      formData.append('tempat_lahir', tempatlahir);
      formData.append('tanggal_lahir', tanggallahir);
      formData.append('usia', age); // Use 'age' instead of 'umur'
      formData.append('tinggi_badan', tinggi_badan);
      formData.append('berat_badan', berat_bedan);
      formData.append('jenis_kelamin', jk);
      formData.append('agama', agama);
      formData.append('email', email);
      formData.append('pendidikan_terakhir', pendidikan);
      formData.append('nama_pendidikan', nma_sklh);
      formData.append('status_pernikahan', status_pernikahan)
      formData.append('alamat_ktp', alamat_ktp);
      formData.append('kewarganegaraan', kwrgn);
      formData.append('provinsi', provinsi);
      formData.append('kabupaten', kabupaten);
      formData.append('kecamatan', kecamatan);
      formData.append('rt', rt);
      formData.append('rw', rw);
      formData.append('alamat_domisili', alamat_domisili);
      formData.append('nomor_telp', no_telp);
      formData.append('jabatan_id', jabatan_id);
      formData.append('status_pengalaman', pnglm_bkrj);
      formData.append('ekspektasi_salary', eksp_salary);
      formData.append('ketebalan_minus', minus_silinder);
      formData.append('ketebalan_silinder', slndr_berapa);
      formData.append('nama_penyakit', penyakitApa);
      formData.append('lama_penyakit', penyakit_kapan);
      formData.append('nama_teman', relasi_nama);
      formData.append('posisi_teman', relasi_jabatan);
      formData.append('kk', kk);
      formData.append('pas_photo', pas_photo);
      formData.append('berkas', berkas);
      // formData.append('status', 'Pending');
      //cek
      $.ajax({
        url: 'api/api_cek_pelamar.php',
        method: 'GET',
        data: {
          nik: nik,
          jabatan_id: jabatan_id
        },
        success: function (response) {
          // Server mengembalikan respons
          if (response === 'success') {
            //alert('Tdak boleh stoppppp');
            Swal.fire({
              title: 'Error!',
              text: 'Pelamar dengan NIK dan Posisi tersebut sudah ada.',
              icon: 'error'
            });
            return;
          } else {

            // Assuming formData is defined earlier in your code
            $.ajax({
              method: "POST",
              url: "api/api_pelamar.php",
              data: formData,
              processData: false,
              contentType: false,
              cache: false,
              enctype: 'multipart/form-data',
              success: function (postResponse) {
                // console.log(postResponse);
                Swal.fire({
                  title: 'Success!',
                  text: 'Data berhasil Disimpan',
                  icon: 'success',
                  confirmButtonText: 'OK'
                });
              },
              error: function (xhr, status, error) {
                // console.error(xhr.responseText);
                Swal.fire({
                  title: 'Error!',
                  text: xhr.responseText,
                  icon: 'error',
                  confirmButtonText: 'OK'
                });
              }
            });
          }
        }
      });

    }



  </script>

</body>

</html>