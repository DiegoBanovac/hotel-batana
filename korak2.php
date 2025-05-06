<?php
session_start();

if (!isset($_POST['room_id']) || !isset($_POST['start_date']) || !isset($_POST['end_date'])) {
    header("Location: rezerviraj.php");
    exit;
}

$_SESSION['room_id'] = $_POST['room_id'];
$_SESSION['start_date'] = $_POST['start_date'];
$_SESSION['end_date'] = $_POST['end_date'];
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Hotel Batana - Rezervacija</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Rezervacija - Osobni podaci</h2>

    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 50%; background-color: #844d36;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    <form method="post" action="korak3.php" class="mt-4" onsubmit="return validateForm();">
        <div class="form-group">
            <label for="name">Ime:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="surname">Prezime:</label>
            <input type="text" class="form-control" id="surname" name="surname">
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="phone_number">Broj telefona:</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number">
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="rezerviraj.php" class="btn" style="background-color: #844d36; color: white;">Prethodni korak</a>
            <button type="submit" class="btn" style="background-color: #844d36; color: white;">Sljedeći korak</button>
        </div>
    </form>
</div>

<script>
function validateForm() {
    let name = document.getElementById("name").value.trim();
    let surname = document.getElementById("surname").value.trim();
    let email = document.getElementById("email").value.trim();
    let phone = document.getElementById("phone_number").value.trim();

    if (!name || !surname || !email || !phone) {
        alert("Molimo ispunite sva polja.");
        return false;
    }
    return true;
}
</script>
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
