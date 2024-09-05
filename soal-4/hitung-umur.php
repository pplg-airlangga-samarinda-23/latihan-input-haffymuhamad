<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $birthdate = $_POST['birthdate'];
    $birthdate = new DateTime($birthdate);
    $today = new DateTime("today");

    if ($birthdate > $today) {
        echo "<h1>Tanggal lahir tidak valid!</h1>";
    } else {
        $age = $today->diff($birthdate)->y;
        echo "<h1>Umur Anda: " . $age . " tahun</h1>";
    }
}
?>