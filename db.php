<?php
// Připojení k databázi
$host = 'localhost';
$user = 'jeglaj';
$pass = 'F0tbal3kPL14*';
$dbname = 'jeglaj_knihovna';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Připojení selhalo: " . $conn->connect_error);
}
?>
