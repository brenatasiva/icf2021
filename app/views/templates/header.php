<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?= $data['judulHalaman']; ?> </title>
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/main.min.css">
  <style type="text/css">
    body {
      /* font-family: "Circular Std" !important; */
      font-family: "Bahnschrift" !important;
    }

    .navbar-expand-lg .navbar-nav .nav-link {
      padding: 1rem 1.5rem;
    }

    @font-face {
      font-family: "Circular Std";
      src: url('<?= BASEURL ?>/font/CircularStd-Light.otf');
      font-weight: 500;
    }

    @font-face {
      font-family: "Circular Std";
      src: url('<?= BASEURL ?>/font/CircularStd-Medium.otf');
      font-weight: 600;
    }

    @font-face {
      font-family: "Circular Std";
      src: url('<?= BASEURL ?>/font/CircularStd-Bold.otf');
      font-weight: 800;
    }

    @font-face {
      font-family: "Bahnschrift";
      src: url('<?= BASEURL ?>/font/BAHNSCHRIFT.TTF');
    }

    table,
    th,
    a,
    input {
      font-weight: lighter !important;
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
      padding: 28px 52px 28px 0px;
    }

    .icon-header-inside {
      position: absolute;
      top: -3px;
      width: auto;
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
  <script src="<?= BASEURL; ?>/js/bootstrap.bundle.min.js"></script>
  <script src="<?= BASEURL; ?>/js/jquery.js"></script>
</head>

<body>
  <div id="pageContainer">
    <div id="contentWrap">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <div class="icon-header-outside">
            <div class="icon-header-inside container" style="margin: 0; padding: 0;">
              <div class="row" style="min-width: 135px;">
                <div class="col-6">
                  <a class="navbar-brand" href="https://ubaya.ac.id/" style="padding: 0; margin: 0;">
                    <img style="width: 60px; height: auto;" src="<?= BASEURL; ?>/img/header/logoubaya.png">
                  </a>
                </div>
                <div class="col-6">
                  <a class="navbar-brand" href="<?= BASEURL; ?>" style="padding: 0; margin: 0;">
                    <div class="crop">
                      <img style="width: 75px; height: auto;" src="<?= BASEURL; ?>/img/header/logoicf.png">
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
              <a class="nav-link <?php echo ($data['judulHalaman'] == 'Home') ? 'active' : '' ?>" href="<?= BASEURL; ?>">Home</a>
              <!-- dropdown event -->
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle <?php echo ($data['judulHalaman'] == 'Seminar' || $data['judulHalaman'] == "Lomba" || $data['judulHalaman'] == 'Pameran') ? 'active' : '' ?>" href=" #" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Events</a>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item <?php echo ($data['judulHalaman'] == 'Seminar') ? 'active' : '' ?>" href=" <?= BASEURL; ?>/event/seminar">Seminar</a></li>
                    <li><a class="dropdown-item <?php echo ($data['judulHalaman'] == 'Lomba') ? 'active' : '' ?>" href="<?= BASEURL; ?>/event/lomba">Lomba</a></li>
                    <li><a class="dropdown-item <?php echo ($data['judulHalaman'] == 'Pameran') ? 'active' : '' ?>" href="<?= BASEURL; ?>/event/pameran">Pameran</a></li>
                  </ul>
                </li>
              </ul>
              <!-- end event -->
              <a class="nav-link <?php echo ($data['judulHalaman'] == 'About') ? 'active' : '' ?>" href="<?= BASEURL; ?>/about">About</a>
              <!-- <a class="nav-link <?php echo ($data['judulHalaman'] == 'Riwayat') ? 'active' : '' ?>" href="<?= BASEURL; ?>/riwayat" <?php echo (isset($_SESSION['username'])) ? '' : 'hidden' ?>>Riwayat</a> -->
              <a class="nav-link <?php echo ($data['judulHalaman'] == 'FAQ') ? 'active' : '' ?>" href="<?= BASEURL; ?>/faq">FAQ</a>
            </div>
            <div class="navbar-nav text-center">
              <!-- button login -->
              <?php if (isset($_SESSION['username'])) { ?>
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo ($data['judulHalaman'] == 'Profile') ? 'active' : '' ?>" href=" #" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <?= $_SESSION['username']; ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                      <li><a class="dropdown-item <?php echo ($data['judulHalaman'] == 'Profile') ? 'active' : '' ?>" href=" <?= BASEURL; ?>/user/profile">Edit Profile</a></li>
                      <li><a class="dropdown-item" href="<?= BASEURL; ?>/user/logout">Logout</a></li>
                    </ul>
                  </li>
                </ul>
              <?php } else { ?>
                <a class="btn btn-outline-light <?php echo ($data['judulHalaman'] == 'Login' || $data['judulHalaman'] == 'Register') ? 'active' : '' ?>" href="<?= BASEURL; ?>/user/login">Login</a>
              <?php } ?>
            </div>
          </div>
        </div>
      </nav>
      <div class="container-fluid p-0">
        <?php Flasher::flash(); ?>