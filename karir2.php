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
  <link rel="icon" href="asset/logo2.svg">
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

  nav {
    background: none;
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
    width: 50%;
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
    /* flex-direction: column; */
    /* flex-wrap: wrap; */
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
      height: 100px;
      width: 80%;
    }

    .search-box form {
      /* width: 100%; */
      margin: 20px;
      gap: 10px;
      justify-content: center;
      align-items: center;
      display: flex;
      /* height: 100%; */
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
      /* width: 100%; */
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

  .hide {
    display: none !important;
  }
</style>

<body>

  <section class="hero">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid" style="display:flex;justify-content:center;">
        <a class="navbar-brand" href="index.php">
          <img src="asset/LOGO NO REG.png" alt="" style="max-width: 300px;"></a>
      </div>
      </div>
    </nav>
    <div class="text">
      <h1>Career opening</h1>
    </div>
    <div class="search-box">
      <form id="searchForm">
        <div class="col">
          <label for="sc">Category</label>
          <select name="category" id="sc">

            <option value="" selected>Select category</option>
            <option value="karir1.php">Berpengalaman</option>
            <option value="karir3.php">Fresh Graduate</option>
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
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script>
    document.getElementById('searchForm').addEventListener('submit', function (event) {
      // Prevent the default form submission
      event.preventDefault();

      // Get the selected option value
      var selectedValue = document.getElementById('sc').value;

      // If a value is selected, set the form action to the selected value
      if (selectedValue) {
        this.action = selectedValue;
        this.submit(); // Submit the form
      } else {
        alert('Please select a category');
      }
    });

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
            // console.log(data);
            var jobData = data.jobPosting;
            var htmlContent = '';


            // Iterate through the array and build HTML content
            jobData.forEach(function (job) {
              // Check if fresh_graduate is 'YA'
              if (job.job_requirement.pengalaman === 'Tidak') {
                // If 'YA', add class 'hide'
                htmlContent += `
      <a class="job_card hide" href="infor.php?nama=${job.id}">
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
              } else if (job.job_requirement.pengalaman === 'Ya') {
                // If not 'YA', add class 'wau'
                htmlContent += `
      <a class="job_card wau" href="infor.php?nama=${job.id}">
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
              }
            });
            // Display the HTML content in a container
            $('#output').html(htmlContent);
          },
          error: function (xhr, status, error) {
            console.error(error);
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