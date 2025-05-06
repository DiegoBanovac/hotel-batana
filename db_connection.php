<?php
$server = "localhost"; // Ako koristiš XAMPP ili WAMP, localhost je ispravan
$username = "root"; // Podrazumijevani korisnik u XAMPP-u
$password = ""; // U XAMPP-u obično nema lozinke, ali možeš postaviti ako želiš
$database = "hotel_batana"; // Naziv tvoje baze podataka

// Kreiranje konekcije
$conn = new mysqli($server, $username, $password, $database);

// Provjera povezanosti
if ($conn->connect_error) {
    die("Greška pri povezivanju: " . $conn->connect_error);
}

// Postavljanje UTF-8 kako bi podržao hrvatske znakove
$conn->set_charset("utf8");

?>
