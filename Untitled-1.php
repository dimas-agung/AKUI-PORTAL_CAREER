<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&family=Montserrat&family=Noto+Serif&family=Open+Sans&family=Poppins:wght@200;500&family=Roboto:wght@300&display=swap"
    rel="stylesheet">
</head>
<style>
  a {
    text-decoration: none;
    color: black;
  }

  @import url("https://fonts.googleapis.com/css2?family=Cinzel+Decorative&family=Montserrat&family=Noto+Serif&family=Open+Sans&family=Poppins:wght@200;500&family=Roboto:wght@300&display=swap");

  .PT {
    font-family: "Cinzel Decorative";
  }

  .hero {
    display: flex;
    justify-content: center;
    flex-direction: column;
    gap: 20px;
    /* text-align: ; */
    align-items: center;
    background-color: transparent;
    color: white;

    position: relative;
    min-height: 100vh;
    overflow: hidden;
    font-family: "poppins", sans-serif;
  }

  .video-bg {
    position: absolute;
    bottom: 0;
    left: 0;
    /* min-height: 100%; */
    width: 100%;
    z-index: -1;
  }

  .hero .search-box {
    width: 80%;
    height: 100px;
    backdrop-filter: blur;
    border: white solid 1px;
    background: hsla(0, 6%, 40%, 0.583);
    margin-top: 20px;
    padding-top: 1%;
    display: flex;
  }

  .search-box form {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    width: 100%;
    font-size: 20px;
    align-items: center;
    justify-content: center;
    padding: 0 10px;
  }

  .col {
    width: 25%;
  }

  .col select {
    width: 90%;
    border: none;
    padding: 0 0 3px;
    border-bottom: 1px solid hsla(0, 0%, 100%, 0.3);
    border-right: 1px solid hsla(0, 0%, 100%, 0.3);
    font-size: 14px;
    outline: none;
    color: white;
    background: transparent;
  }

  .col option {
    color: black;
  }

  .col input {
    border: none;
    width: 90%;
    border-right: 1px solid hsla(0, 0%, 100%, 0.3);
    border-bottom: 1px solid hsla(0, 0%, 100%, 0.3);
    font-size: 14px;
    outline: none;
    color: white;
    background: transparent;
  }

  form button {
    border: none;
    background-color: rgb(0, 166, 255);
    color: white;
    height: 40px;
    width: 40px;
    margin: 0 20px;
    outline: none;
  }

  .col label {
    font-size: 14px;
  }

  ::placeholder {
    color: white;
    opacity: 1;
    /* Firefox */
  }

  @media only screen and (max-width: 800px) {
    .hero .search-box {
      height: 350px;
    }

    .search-box form {
      width: 100%;
      margin: 20px;
      display: block;
      height: 100%;
    }

    .col {
      width: 100%;
    }

    .col select {
      width: 100%;
      border: none;
      padding: 0 0 3px;
      border-bottom: 1px solid hsla(0, 0%, 100%, 0.3);
      font-size: 14px;
      outline: none;
      color: white;
      background: transparent;
    }

    .col input {
      width: 100%;
      border-right: none;
    }

    form button {
      margin: 20px 0 0 0;
      width: 100%;
    }
  }

  .link {
    padding: 10px 20px 20px 15px;
  }

  .job_card {
    width: 100%;
    padding: 15px;
    cursor: pointer;
    display: flex;
    border-radius: 10px;
    background: #fff;
    margin-bottom: 15px;
    justify-content: space-between;
    border: 2px solid rgb(190, 190, 190);
    box-shadow: 0 20px 30px rgba(0, 0, 0, 0.1);
    transition: 300ms;
    transform: scale(1);
    user-select: none;
  }

  .job_card:hover {
    transform: scale(1.01);
    border: 1px solid blue;
    box-shadow: 10px 20px 30px rgba(0, 0, 0, 0.1);
  }

  .job {
    display: flex;
  }

  .job .text {
    margin-left: 2.3 rem;
  }

  .job .text .category {
    color: black;
    font-size: 19px;
  }

  .job .text span {
    color: rgb(116, 112, 112);
  }

  .job_card:active {
    border: 4px solid blue;
    transition: 0.2s;
  }

  .job_card ion-icon {
    margin-top: 20px;
    font-size: 22px;
  }

  @media only screen and (max-width: 480px) {
    .video-bg {
      height: auto;
      width: auto;
    }
  }
</style>

<body>
  <nav class="navbar fixed-top navbar-expand-lg" style="background:#ffffff48;">
    <div class="container-fluid" style="display:flex;justify-content:center;">
      <a class="navbar-brand" href="#">
        <img src="asset/LOGO NO REG.png" alt="" style="max-width: 300px;"></a>
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
  <section class="hero">
    <div class="text">
      <h1>Career opening</h1>
    </div>
    <div class="search-box">
      <form>
        <div class="col ">
          <label for="sc">Category</label>
          <select name="" id="">

            <option value="" id="sc" selected>Select category</option>
            <option value="">Berpengalaman</option>
            <option value="">Program magang</option>
          </select>
        </div>
        <div class="col">
          <label for="te">Job title</label>
          <div class="input-t"></div>
          <input id="te" placeholder="type your job here" type="text">
        </div>
        <div class="col">
          <label for="te">Job title</label>
          <select name="" id="">
            <option value="">Select category</option>
            <option value="">Berpengalaman</option>
            <option value="">Program magang</option>
          </select>
        </div>
        <div class="col">
          <label for="te">Job title</label>
          <select name="" id="">
            <option value="">Select category</option>
            <option value="">Berpengalaman</option>
            <option value="">Program magang</option>
          </select>
        </div>
        <button type="submit"><ion-icon name="search-outline"></ion-icon></button>
      </form>
      <video class="video-bg" src="asset/1 MENIT.mp4" autoplay muted loop></video>
  </section>
  <section class="link">
    <h2 class="text-center" style="margin: 30px;">Posisi tersedia</h2>
    <div id="output"></div>
    <div id="output1"></div>

    <!-- <div class="job_card" onclick="location.href='infor.php'">
      <div class="job">
        <div class="text">
          <span class="category">Operator</span>
          <h2>Operator Cabut</h2>
          <span>Operator</span>
        </div>
      </div>
      <ion-icon name="arrow-forward-outline"></ion-icon>
    </div>

    <div class="job_card" onclick="location.href='infor.php'">
      <div class="job">
        <div class="text">
          <span class="category">Operator cetak</span>
          <h2>Operator cetak</h2>
          <span>Operator cetak</span>
        </div>
      </div>
      <ion-icon name="arrow-forward-outline"></ion-icon>
    </div>

    <div class="job_card" onclick="location.href='infor.php'">
      <div class="job">
        <div class="text">
          <Span class="category">Sanitasi</Span>
          <h2>Sanitasi</h2>
          <span>Sanitasi Perusahaan</span>
        </div>
      </div>
      <ion-icon name="arrow-forward-outline"></ion-icon>
    </div> -->
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script>


    $(document).ready(function () {
      //   var jobs = [`ADMIN DOCUMENT CONTROL SPECIALIST INTERNSHIP`, `HSE SPECIALIST (SUPERVISOR LEVEL)`, `SALES DAN MARKETING MANAGER (MARKET CHINA)`, `JURU MASAK`];
      //   var htmlContent = '';
      //   var i = 2;

      //   // Iterate through the array and build HTML content
      //   jobs.forEach(job => {
      //     // console.log(jobs.indexOf(job)); // Log the index of the current job

      //     htmlContent += `
      //     <a class="job_card" href="infor.php?nama=${i++}">
      //         <div class="job">
      //             <div class="text">
      //                 <span class="category">${job}</span>
      //                 <h2>${job}</h2>
      //                 <span>${job}</span>
      //             </div>
      //         </div>
      //         <ion-icon name="arrow-forward-outline"></ion-icon>
      //     </a>
      // `;
      //   });
      //   // job.forEach(function (job) {


      //   // });

      //   // Display the HTML content in a container
      //   $('#output1').html(htmlContent);
      // Button click event
      // localStorage.clear();
      // AJAX request using the GET method
      $(document).ready(function () {
        // Button click event
        localStorage.clear();
        // AJAX request using the GET method
        $.ajax({
          url: 'api/api_job_posting.php',
          method: 'GET',
          // data: { id: 4 },
          dataType: 'json',
          success: function (data) {
            console.log(data);
            var jobData = data.jobPosting;
            var htmlContent = '';


            // Iterate through the array and build HTML content
            jobData.forEach(function (job) {
              htmlContent += `
          <a class="job_card" href="infor.php?nama=${job.id}">
            <div class="job">
              <div class="text">
                <span class="category">${job.job_title.nama}</span>
                <h2>${job.job_title.nama}</h2>
                <span>${job.job_title.nama}</span>
              </div>
            </div>
            <ion-icon name="arrow-forward-outline"></ion-icon>
          </a>
        `;
            });

            // Display the HTML content in a container
            $('#output').html(htmlContent);
          },
          error: function (xhr, status, error) {
            console.error('Error:', status, error);
            $('#output').html('<p>Error loading data</p>');
          }
        });
      });




    });

    // var card = document.getElementById('link'); var myArray = ['Operator Produksi', 'Tim Sanitasi', 'IT Intern'];

    // myArray.forEach(element => {
    //   var jobCard = document.createElement('div');
    //   jobCard.className = 'job_card';
    //   jobCard.onclick = function () {
    //     location.href = 'infor.php?nama=' + element;
    //   };

    //   jobCard.innerHTML = `
    //         <div class="job">
    //             <div class="text">
    //                 <span class="category">${element}</span>
    //                 <h2>${element}</h2>
    //                 <span>${element}</span>
    //             </div>
    //         </div>
    //         <ion-icon name="arrow-forward-outline"></ion-icon>
    //     `;

    //   card.appendChild(jobCard);
    // });
  </script>

</body>
<style>
  .link {
    height: 100vh;
    width: 100%;
  }

  .1 {}
</style>

</html>