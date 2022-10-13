<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:image" content="<?= BASECSS; ?>/img/ICF 2021 - Logo.jpg" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Informatics Creative Festival 2021" />
  <meta property="og:url" content="http://icf.ifubaya.id" />
  <meta property="og:description" content="ICF (Informatics Creative Festival) adalah sebuah festival yang memamerkan hasil-hasil karya mahasiswa dari Informatika Universitas Surabaya.
            Tiap tahunnya, ICF mengenalkan desain dan pemrograman melalui pameran karya-karya mahasiswa akhir teknik informatika UBAYA.
            Selain itu, ICF juga ada berbagai macam seminar dan lomba untuk menambah pengetahuan dan mengasah kemampuan para peserta sesuai dengan perkembangan teknologi." />

  <title> <?= $data['judulHalaman']; ?> </title>
  <link rel="stylesheet" href="<?= BASECSS; ?>/css/main.min.css">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= BASECSS; ?>/img/CS_Logo.jpg">
  <style type="text/css">
    @font-face {
      font-family: "Circular Icf";
      src: url('<?= BASECSS ?>/font/CircularStd-Light.otf') format('opentype');
      font-weight: 500;
    }

    @font-face {
      font-family: "Circular Icf";
      src: url('<?= BASECSS ?>/font/CircularStd-Medium.otf') format('opentype');
      font-weight: 600;
    }

    @font-face {
      font-family: "Circular Icf";
      src: url('<?= BASECSS ?>/font/CircularStd-Bold.otf') format('opentype');
      font-weight: 800;
    }

    @font-face {
      font-family: "Bahnschrift Icf";
      src: url('<?= BASECSS ?>/font/BAHNSCHRIFT.TTF');
    }

    body {
      font-family: "Bahnschrift Icf" !important;
    }

    .navbar-expand-lg .navbar-nav .nav-link {
      padding: 1rem 1.5rem;
    }

    .circular-icf {
      font-family: "Circular Icf" !important;
    }

    table,
    th,
    a,
    input {
      font-weight: lighter !important;
    }

    .navbar-expand-lg .navbar-nav .nav-link {
      padding: 1rem 1.5rem;
    }

    .icf-color {
      color: #009b8d !important;
    }

    .icf-bg-color {
      background: #009b8d !important;
    }

    html,
    body {
      height: 100%;
    }

    .crop {
      width: 75px;
      height: 50px;
      overflow: hidden;
      margin: auto;
    }

    .crop img {
      margin-top: -7px;
    }

    .icon-header-outside {
      position: relative;
      padding: 28px 100px 28px 0px;
    }

    .icon-header-inside {
      position: absolute;
      top: -3px;
      width: auto;
    }

    #new {
      left: 87% !important;
      padding: 0.28rem !important;
    }

    .btn-navbar-user {
      font-weight: bold !important;
      min-width: 100px;
      border-radius: 10px;
      border-width: 2px !important;
      font-size: 0.9rem !important;
    }

    .btn-logged-user {
      font-weight: lighter !important;
      min-width: 100px;
      border-radius: 10px;
      border-width: 2px !important;
      font-size: 1rem !important;
    }

    #pageContainer {
      position: relative;
      min-height: 100vh;
      overflow-x: hidden;
    }

    #footer {
      position: absolute !important;
      bottom: 0;
      width: 100%;
      /* Footer height */
    }
  </style>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="<?= BASECSS; ?>/js/bootstrap.bundle.min.js"></script>
  <script src="<?= BASECSS; ?>/js/jquery.js"></script>
</head>

<body>
  <?php
      date_default_timezone_set('Asia/Jakarta');

      $dateTime = new DateTime();
      $now = $dateTime->format('d-m-Y H:i');
  ?>
  <div id="pageContainer">
    <div id="contentWrap">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <div class="icon-header-outside">
            <div class="icon-header-inside container" style="margin: 0; padding: 0;">
              <div class="row" style="min-width: 135px;">
                <div class="col-6">
                  <a class="navbar-brand" href="https://ubaya.ac.id/" style="padding: 0; margin: 0;">
                    <img style="width: 60px; height: auto;" src="<?= BASECSS; ?>/img/logoubaya.png">
                  </a>
                </div>
                <div class="col-6">
                  <a class="navbar-brand" href="<?= BASEURL; ?>" style="padding: 0; margin: 0;">
                    <div class="crop">
                      <img style="width: 75px; height: auto;" src="<?= BASECSS; ?>/img/logoicf_header.png">
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
            <div>
              <!-- dummy -->
            </div>
            <div class="navbar-nav text-center">
              <a class="nav-link <?php echo ($data['judulHalaman'] == 'ICF 2021') ? 'active' : '' ?>" href="<?= BASEURL; ?>">Home</a>
              <a class="nav-link <?php echo ($data['judulHalaman'] == 'About - ICF 2021') ? 'active' : '' ?>" href="<?= BASEURL; ?>/about">About Us</a>
              <!-- dropdown event -->
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle <?php echo ($data['judulHalaman'] == 'Seminar - ICF 2021' || $data['judulHalaman'] == "Lomba Kelompok - ICF 2021" || $data['judulHalaman'] == "Lomba - ICF 2021" || $data['judulHalaman'] == 'Pameran - ICF 2021') ? 'active' : '' ?>" href=" #" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Events</a>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item <?php echo ($data['judulHalaman'] == 'Seminar - ICF 2021') ? 'active' : '' ?>" href=" <?= BASEURL; ?>/event/seminar">Seminar</a></li>
                    <li><a class="dropdown-item <?php echo ($data['judulHalaman'] == 'Lomba Kelompok - ICF 2021') ? 'active' : '' ?>" href="<?= BASEURL; ?>/event/lomba">Lomba</a></li>
                    <li><a class="dropdown-item <?php echo ($data['judulHalaman'] == 'Pameran - ICF 2021') ? 'active' : '' ?>" href="<?= BASEURL; ?>/event/pameran">Pameran</a></li>
                  </ul>
                </li>
              </ul>
              <!-- end event -->
              <a class="nav-link <?php echo ($data['judulHalaman'] == 'Schedule - ICF 2021') ? 'active' : '' ?>" href="<?= BASEURL; ?>/schedule" style="position: relative;">Schedule<?php
                  if (strtotime($now) >= strtotime("26-09-2021 06:00") && strtotime($now) < strtotime("26-09-2021 19:35")) { 
                    echo "<span id='new' class='position-absolute top-5 start-100 translate-middle p-2 bg-danger rounded-circle'>";
                  }
                ?>
                <span class="visually-hidden">New alerts</span>
              </span></a>
              <a class="nav-link <?php echo ($data['judulHalaman'] == 'FAQ - ICF 2021') ? 'active' : '' ?>" href="<?= BASEURL; ?>/faq">FAQ</a>
            </div>
            <div class="navbar-nav text-center">
              <!-- button login -->
              <?php if (isset($_SESSION['username'])) { ?>
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link btn-logged-user circular-icf dropdown-toggle <?php echo ($data['judulHalaman'] == 'Profile - ICF 2021') ? 'active' : '' ?>" href=" #" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <?= $_SESSION['username']; ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                      <li><a class="dropdown-item <?php echo ($data['judulHalaman'] == 'Profile - ICF 2021') ? 'active' : '' ?>" href=" <?= BASEURL; ?>/user/profile">Edit Profile</a></li>
                      <li><a class="dropdown-item" href="<?= BASEURL; ?>/user/logout">Logout</a></li>
                    </ul>
                  </li>
                </ul>
              <?php } else { ?>
                <a class="btn btn-navbar-user btn-outline-light <?php echo ($data['judulHalaman'] == 'Login - ICF 2021' || $data['judulHalaman'] == "Register - ICF 2021"  || $data['judulHalaman'] == "Profile - ICF 2021" || $data['judulHalaman'] == "Reset Password - ICF 2021") ? 'active' : '' ?>" href="<?= BASEURL; ?>/user/login">LOGIN</a>
              <?php } ?>
            </div>
          </div>
        </div>
      </nav>
      <div class="container-fluid p-0">
        <?php Flasher::flash(); ?>