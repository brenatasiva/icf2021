<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?= $data['judulHalaman']; ?> </title>
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="<?= BASEURL; ?>">ICF</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav text-center">
          <a class="nav-link <?php echo ($data['judulHalaman'] == 'Home') ? 'active' : '' ?>" href="<?= BASEURL; ?>">Home</a>
          <a class="nav-link <?php echo ($data['judulHalaman'] == 'Event') ? 'active' : '' ?>" href="<?= BASEURL; ?>/event">Event</a>
          <a class="nav-link <?php echo ($data['judulHalaman'] == 'About') ? 'active' : '' ?>" href="<?= BASEURL; ?>/about">About</a>
          <a class="nav-link <?php echo ($data['judulHalaman'] == 'Riwayat') ? 'active' : '' ?>" href="<?= BASEURL; ?>/riwayat" <?php echo (isset($_SESSION['username'])) ? '' : 'hidden' ?>>Riwayat</a>
          <a class="nav-link <?php echo ($data['judulHalaman'] == 'FAQ') ? 'active' : '' ?>" href="<?= BASEURL; ?>/faq">FAQ</a>

          <?php if (isset($_SESSION['username'])) { ?>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?= $_SESSION['username']; ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="<?= BASEURL; ?>/login/logout">Logout</a></li>
                </ul>
              </li>
            </ul>
          <?php } else { ?>
            <a class="nav-link <?php echo ($data['judulHalaman'] == 'Login' || $data['judulHalaman'] == 'Register') ? 'active' : '' ?>" href="<?= BASEURL; ?>/login">Login / Register</a>
          <?php } ?>

        </div>
      </div>
    </div>
  </nav>
  <div class="container">