<?php
if (!session_id()) {
    session_start();
    $_SESSION['xyz'] = "abudabi";
}

require_once '../app/init.php';

$app = new App();
