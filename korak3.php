<?php
session_start();
require_once 'db_connection.php'; 


if (!isset($_SESSION['room_id'], $_SESSION['start_date'], $_SESSION['end_date'])) {
    header("Location: rezerviraj.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['name'])) {
    $room_id = $_SESSION['room_id'];
    $start_date = $_SESSION['start_date'];
    $end_date = $_SESSION['end_date'];
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone_number']);

   
    $stmt = $conn->prepare("INSERT INTO reservations (room_id, start_date, end_date, name, surname, email, phone_number) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issssss", $room_id, $start_date, $end_date, $name, $surname, $email, $phone);

    if ($stmt->execute()) {
        session_unset();
        session_destroy();
        echo '
        <!DOCTYPE html>
        <html lang="hr">
        <head>
            <meta charset="UTF-8">
            <title>Rezervacija uspješna</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
            <meta http-equiv="refresh" content="3;url=index.php">
        </head>
        <body>
            <div class="container mt-5 text-center">
                <div class="alert alert-success">
                    <h4 class="alert-heading">Soba je uspješno rezervirana!</h4>
                    <p>Bit ćete preusmjereni na početnu stranicu za 3 sekunde...</p>
                </div>
            </div>
        </body>
        </html>';
        exit;
    } else {
        echo "Greška pri unosu u bazu: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Hotel Batana - Potvrda rezervacije</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Potvrda rezervacije</h2>

    <div class="progress mb-4">
        <div class="progress-bar" role="progressbar" style="width: 100%; background-color: #844d36;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    <h5>Pregled podataka:</h5>
    <ul class="list-group mb-4">
        <li class="list-group-item"><strong>Soba:</strong> <?= $_SESSION['room_id'] ?></li>
        <li class="list-group-item"><strong>Datum dolaska:</strong> <?= $_SESSION['start_date'] ?></li>
        <li class="list-group-item"><strong>Datum odlaska:</strong> <?= $_SESSION['end_date'] ?></li>
        <li class="list-group-item"><strong>Ime:</strong> <?= htmlspecialchars($_POST['name']) ?></li>
        <li class="list-group-item"><strong>Prezime:</strong> <?= htmlspecialchars($_POST['surname']) ?></li>
        <li class="list-group-item"><strong>E-mail:</strong> <?= htmlspecialchars($_POST['email']) ?></li>
        <li class="list-group-item"><strong>Broj telefona:</strong> <?= htmlspecialchars($_POST['phone_number']) ?></li>
    </ul>

    <form method="post" action="korak3.php">
        <input type="hidden" name="name" value="<?= htmlspecialchars($_POST['name']) ?>">
        <input type="hidden" name="surname" value="<?= htmlspecialchars($_POST['surname']) ?>">
        <input type="hidden" name="email" value="<?= htmlspecialchars($_POST['email']) ?>">
        <input type="hidden" name="phone_number" value="<?= htmlspecialchars($_POST['phone_number']) ?>">

        <div class="d-flex justify-content-between">
            <a href="javascript:history.back()" class="btn" style="background-color: #844d36; color: white;">Prethodni korak</a>
            <button type="submit" class="btn" style="background-color: #844d36; color: white;">Rezerviraj</button>
        </div>
    </form>
</div>
<script>
$(document).ready(function() {
    $("#subscribe-button").click(function() {
        var email = $("#newsletter-email").val().trim();

        if (email === "") {
            alert("Molimo unesite svoj e-mail.");
            return;
        }

        
        var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailRegex.test(email)) {
            alert("Molimo unesite validan e-mail.");
            return;
        }

        
        $.ajax({
            url: 'subscribe_newsletter.php',
            type: 'POST',
            data: { email: email },
            dataType: 'json', 
            success: function(response) {
                if (response.success) {
                    $("#newsletter-message").text("Uspješno ste pretplaćeni na newsletter.").css("color", "green");
                    $("#newsletter-email").val('');
                } else {
                    $("#newsletter-message").text(response.message).css("color", "red");
                }
            },
            error: function(xhr, status, error) {
        
                console.warn("Neispravan odgovor servera ili server nije dostupan.");
            }
        });
    });
});
</script>
</body>
</html>
