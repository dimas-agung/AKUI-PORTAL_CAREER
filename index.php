<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <script src="script.js" defer></script>
  <link rel="icon" href="asset/logo2.svg">
  <title>Career</title>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <script src="https://kit.fontawesome.com/3e890378ee.js" crossorigin="anonymous"></script>
</head>
<style>
  /*@import url("https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@500&family=Roboto:wght@300&display=swap");*/


  @import url('https://fonts.googleapis.com/css2?family=Cinzel+Decorative&family=Montserrat&family=Noto+Serif&family=Open+Sans&family=Poppins:wght@200;500&family=Roboto:wght@300&display=swap');

  *,
  *:before,
  *:after {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }

  /* .pop {
    position: relative;
  } */

  .pop-up {
    background-color: rgba(0, 0, 0, 0.827);
    width: 100%;
    height: 200vh;
    z-index: 9999;
    padding: 20px 40px;
    position: absolute;

    /* transform: translate(-50%, -50%); */
    /* left: 50%;
      top: 50%; */
    /* border-radius: 8px; */
    font-family: "poppins", sans-serif;
  }

  .pop-up button {
    display: block;
    margin: 0 0 20px auto;
    background-color: transparent;
    font-size: 30px;
    color: #c5c5c5;
    border: none;
    outline: none;
    cursor: pointer;
  }

  .img>img {
    object-fit: cover;
    height: 100%;
    width: 100%;
  }

  .hero {
    /* display: flex; */
    justify-content: center;
    text-align: center;
    align-items: center;
    background-color: transparent;
    color: white;
    font-size: 3em;
    position: relative;
    height: 100vh;
    overflow: hidden;
    width: 100%;
    background: linear-gradient(#ffffff1c, rgba(0, 0, 0, 0.684));
  }

  .video-bg {
    position: absolute;
    bottom: 0;
    left: 0;
    /* min-height: 200%; */
    height: auto;
    width: 100%;
    /* min-width: 200%; */
    z-index: -1;
  }

  .h1 {
    margin-top: 5em;
  }






  .navbar {
    background-color: rgba(0, 0, 0, 0.508);
  }

  #logo {
    width: 200px;
    height: 100px;
    transform: scale(0.8);
    object-fit: cover;
  }

  .gal {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 90vh;
  }

  .wrapper {
    max-width: 1100px;
    width: 100%;
    position: relative;
  }

  .wrapper i {
    height: 50px;
    width: 50px;
    background: #fff;
    text-align: center;
    line-height: 50px;
    border-radius: 50%;
    cursor: pointer;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
  }

  .wrapper i:first-child {
    z-index: 100;
    left: 20px;
  }

  .wrapper i:last-child {
    right: 20px;
  }

  .wrapper .carousel {
    display: grid;
    grid-auto-flow: column;
    grid-auto-columns: calc((100% / 3) - 12px);
    gap: 16px;
    overflow: hidden;
    scroll-behavior: smooth;
  }

  /* .no-transition {
      scroll-behavior: auto;
    } */
  .carousel.dragging {
    scroll-behavior: auto;
  }

  .carousel.dragging .cardd {
    cursor: grab;
    user-select: none;
  }

  .carousel .cardd {
    height: 342px;
    list-style: none;
    background: linear-gradient(#ffffff1c, rgba(0, 0, 0, 0.684));
    background-size: cover;
    border-radius: 8px;
    display: flex;
    align-items: start;
    justify-content: end;
    flex-direction: column;
    padding-bottom: 15px;
    cursor: pointer;
    padding-left: 12px;
    transition: 290ms;
  }

  .carousel .cardd:hover {
    transform: scale(1.01);
    font-size: larger;
  }

  .cardd .img img {
    width: 100%;
    height: 100px;
    border: 2px white solid;
    border-radius: 50px;
    object-fit: cover;
  }

  @media screen and (max-width: 900px) {
    .wrapper .carousel {
      grid-auto-columns: calc((100% / 2) - 9px);
    }
  }

  @media screen and (max-width: 600px) {
    .wrapper .carousel {
      grid-auto-columns: 100%;
    }
  }

  #cd1 {
    text-align: left;

    background-size: cover;
  }

  #cd2 {
    text-align: left;
    background: linear-gradient(#ffffff1c, rgba(0, 0, 0, 0.684));
    background-size: cover;
  }

  #cd3 {
    background-image: url(asset/4630062.jpg);
    text-align: left;
    background: linear-gradient(#ffffff1c, rgba(0, 0, 0, 0.684));
  }

  #cd4 {
    background-image: url(asset/One\ piece\ _\ sanji.jpeg);
    text-align: left;
    background: linear-gradient(#ffffff1c, rgba(0, 0, 0, 0.684));
  }

  #cd5 {
    background-image: url(asset/Netflix\ acquires\ streaming\ rights\ to\ all\ 21\ Studio\ Ghibli\ films.jpeg);
    text-align: left;
    background: linear-gradient(#ffffff1c, rgba(0, 0, 0, 0.684));
  }

  a {
    text-decoration: none;
  }

  .carousel>button {
    border: none;
    border-radius: 10px;
    background-image: url('asset/IMG_7503.jpg');
    transform: scale(1);
    transition: 1000ms;
    background-size: cover;
  }

  .carousel>button:hover {
    transform: scale(0.9);
  }

  .carousel>button:nth-child(2) {
    background-image: url('asset/IMG_7530.jpg');
  }

  .carousel>button:nth-child(3) {
    background-image: url('asset/IMG_75405.jpg');
  }

  .carousel>button:nth-child(4) {
    background-image: url(asset/IMG_75405.jpg);
  }

  .carousel>button:nth-child(5) {
    background-image: url(asset/Netflix\ acquires\ streaming\ rights\ to\ all\ 21\ Studio\ Ghibli\ films.jpeg);
  }

  @media only screen and (max-width: 480px) {
    .video-bg {
      height: auto;
      width: auto;
    }

    .hero {
      height: 50vh;
    }

    .h1 {
      display: none;
    }

    /* min-height: 100%;
      /* height: auto;
      width: 100%; */
    /* min-width: 100%; */
    /* /* z-index: -1; */
    .gal {
      min-height: 50vh;
    }

    video {
      /* position: relative; */
      bottom: 0;
      left: 0;
      right: 0;
      transform: translateX(-700px);
    }


  }
</style>

<body>

  <section class="pop">
    <div class="pop-up" id="hide">
      <div class="card-md bg-light  ">
        <div class="row g-0">
          <div class="col-md-4 img">
            <img src="asset/Photo by Manideep Karne on Pexels.jpeg" alt="..." />
          </div>
          <div class="col-md-8">
            <div class="card-body" style="padding: 10px">
              <button id="close" onclick="hide()">&times;</button>
              <h5 class="card-title">Terima kasih atas kunjungan anda,</h5>
              <br>
              <p class="card-text">

                Kami menghimbau para pencari kerja untuk berhati-hati dan mewaspadai beragam modus penipuan perekrutan
                yang mengatasnamakan PT AKUI BIRD NEST INDONESIA. Dalam setiap proses rekrutmen dan penerimaan karyawan,
                PT AKUI BIRD NEST INDONESIA maupun konsultan rekrutmennya tidak memungut biaya apapun.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- akhir pop up -->
  <section class="hero">
    <nav class="navbar navbar-expand-lg" style="background-color:transparent;">
      <div class="container-fluid" style="display:flex;justify-content:center;">
        <a class="navbar-brand" href="#"><img src="asset/LOGO NO REG.png" alt="" style="max-width: 300px;"></a>
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav " style="margin-left: 250px;">
          <li class="nav-item " style="color:black;">
            <h1 style="font-family: 'Cinzel Decorative';">PT. Akui Bird Nest Karir</h1>
          </li>

        </ul> -->
      </div>
      </div>
    </nav>
    <h1 class="h1" style="letter-spacing: 20px;font-family:'Noto serif';">SELAMAT DATANG</h1>
    <video class="video-bg" src="asset/1 MENIT.mp4" autoplay muted loop></video>
  </section>
  <!-- akhir isi -->
  <!-- card box -->
  <section class="gal">
    <div class="wrapper">
      <i id="left" class="fa-solid fa-chevron-left"></i>
      <ul class="carousel" style="padding-left: 0">
        <!-- onclick="window.location.href ='Untitled-1.php'" -->
        <button id="expBtn">
          <li draggable="false" class="cardd" id="cd1">
            <div class="img">
              <div class="text-light">
                <h2>Berpengalaman</h2>
                <p><span id="exp"></span> Posisi tersedia</p>
              </div>
            </div>
          </li>
        </button>
        <button id="mgBtn" type="button">
          <li class="cardd" id="cd2">
            <div class="img">
              <div class="text-light">
                <h2>Magang</h2>
                <p draggable="false"><span id="magang">0</span> Posisi teredia</p>
              </div>
            </div>
          </li>
        </button>
        <button id="freshBtn" type="button">
          <li class="cardd" id="cd3">
            <div class="img">
              <div class="text-light">
                <h2>Fresh Graduate</h2>
                <p draggable="false"><span id="fresh">0</span> Posisi teredia</p>
              </div>
            </div>
          </li>
        </button>
        <!-- <button id="chef-btn" type="button">
          <li class="cardd" id="cd4">
            <div class="img">
              <div class="text-light">
                <h2>Chef</h2>
                <p draggable="false"><span id="chef">0</span> Posisi tersedia</p>
              </div>
            </div>
          </li>
        </button> -->
        <!-- <button type="button" onclick="location.href='Untitled-1.php'"> -->
        <!-- <li class="cardd" id="cd5">
            <div class="img">
              <div class="text-light">
                <h2>Lorem</h2>
                <p draggable="false">Lorem ipsum dolor sit amet.</p>
              </div>
            </div>
          </li> -->
        </button>
      </ul>
      <i id="right" class="fa-solid fa-chevron-right"></i>
    </div>
  </section>
  <!-- end cardbox -->
  <script defer>
    var div = document.getElementById("hide");
    var display = 0;

    function hide() {
      if (display == 1) {
        div.style.display = "block";
        display = 0;
      } else {
        div.style.display = "none";
        display = 1;
      }
    }

    var magang = document.getElementById('magang');
    var exp = document.getElementById('exp');
    var fresh = document.getElementById('fresh');
    var chef = document.getElementById('chef');

    $(document).ready(function () {
      // Make an AJAX request
      $.ajax({
        url: "api/api_job_posting.php",
        method: "GET",
        dataType: "json",
        success: function (response) {
          // console.log(response);
          let exp_count = 0;
          let fresh_count = 0;
          let magang_count = 0;
          var reqr;

          response.jobPosting.forEach(value => {
            reqr = value.job_requirement;
            var name = value.job_title;
            magang_count += name.nama.includes("Intern") ? 1 : 0;
            fresh_count += reqr.fresh_graduate === "Ya" ? 1 : 0;
            exp_count += reqr.pengalaman === "Ya" ? 1 : 0;
            // console.log(value);
          });

          // Set href based on magang_count using a ternary operator
          document.querySelector('#mgBtn').addEventListener('click', function () {
            // Redirect to 'untitled.php' if magang_count is greater than 0
            window.location.href = (magang_count > 0) ? 'karir1.php' : '#';
          });

          document.querySelector('#expBtn').addEventListener('click', function () {
            // Redirect to 'Untitled-1.php' if magang_count is 1, otherwise redirect to '#'
            window.location.href = (exp_count > 0) ? 'karir2.php' : '#';
          });
          document.querySelector('#freshBtn').addEventListener('click', function () {
            // Redirect to 'Untitled-1.php' if magang_count is 1, otherwise redirect to '#'
            window.location.href = (fresh_count > 0) ? 'karir3.php' : '#';
          });

          // Update other HTML elements
          document.querySelector('#magang').innerHTML = magang_count;
          document.querySelector('#exp').innerHTML = exp_count;
          document.querySelector('#fresh').innerHTML = fresh_count;
        },
        error: function (xhr, status, error) {
          console.error( error);
        }
      });
    });

  </script>

  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>