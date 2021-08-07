<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $data['judulHalaman']; ?> </title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/main.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= BASEURL; ?>">ICF</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav text-center">
                    <a class="nav-link <?php echo ($data['judulHalaman'] == 'Event') ? 'active' : '' ?>" href="<?= BASEURL; ?>/admin/peserta">Peserta</a>
                    <a class="nav-link <?php echo ($data['judulHalaman'] == 'Event') ? 'active' : '' ?>" href="<?= BASEURL; ?>/admin/event">Event</a>
                    <a class="nav-link <?php echo ($data['judulHalaman'] == 'FAQ') ? 'active' : '' ?>" href="<?= BASEURL; ?>/admin/faq">FAQ</a>

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
                        <a class="nav-link <?php echo ($data['judulHalaman'] == 'Login' || $data['judulHalaman'] == 'Register') ? 'active' : '' ?>" href="<?= BASEURL; ?>/user/login">Login / Register</a>
                    <?php } ?>

                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid p-0">