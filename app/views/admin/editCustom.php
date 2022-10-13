<?php
// aku komen aja, biar gak kepencet (dari Hendra)
if ($_SESSION['username'] != 'adminduongz') {
    header('location: ' . BASEURL);
}


if ($data["judulHalaman"] == "Schedule") {
    echo "<pre>";
     // print_r($data["result_schedule"]);
     echo "<br><br>";
     print_r($data["current_schedule"]);
    echo "</pre>";

}
?>
<!-- Tambah Pengumuman -->
<form method="post" action="<?= BASEURL; ?>/admin/tambahSchedule">
    <label>Tambah Pengumuman</label><br>
    <button type="submit">TAMBAH</button>
</form><br><br>


<h1 class="mt-4">JANGAN TEKEN SEMBARANGAN</h1>

<form method="post" action="<?= BASEURL; ?>/admin/editCustomGo/eventbiasa">
    <label>Hapus pendaftar kecuali pubg</label><br>
    <label>Username</label><input type="text" name="username"><br>
    <label>ID Event</label><input type="text" name="idevent"><br>
    <button type="submit">HAPUS</button>
</form><br><br>

<form method="post" action="<?= BASEURL; ?>/admin/editCustomGo/eventpubg">
    <label>Hapus pendaftar pubg</label><br>
    <label>Nama Tim</label><input type="text" name="namatim"><br>
    <button type="submit">HAPUS</button>
</form><br><br>

<form method="post" action="<?= BASEURL; ?>/admin/editCustomGo/user">
    <label>Hapus user</label><br>
    <label>username</label><input type="text" name="username"><br>
    <button type="submit">HAPUS</button>
</form><br><br>

<form method="post" action="<?= BASEURL; ?>/admin/editCustomGo/custom">
    <label>Custom Button</label><br>
    <button type="submit">GO</button>
</form><br><br> 