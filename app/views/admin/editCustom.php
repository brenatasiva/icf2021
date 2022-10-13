<?php
if ($_SESSION['username'] != 'adminduongz') {
    header('location: ' . BASEURL);
}
?>
<h1 class="mt-4">JANGAN TEKEN SEMBARANGAN</h1>

<form method="post" action="<?= BASEURL; ?>/admin/editCustomGo/eventbiasa">
    <label>Hapus pendaftar kecuali pubg</label><br>
    <label>Username</label><input type="text" name="username"><br>
    <label>ID Event</label><input type="text" name="idevent"><br>
    <button type="submit">HAPUS</button>
</form><br><br>

<form method="post" action="<?= BASEURL; ?>/admin/editCustomGo">

</form>