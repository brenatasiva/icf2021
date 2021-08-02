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
          <a class="nav-link <?php echo ($data['judulHalaman'] == 'Login') ? 'active' : '' ?>" href="<?= BASEURL; ?>/login">Login/Register</a>

        </div>
      </div>
    </div>
  </nav>