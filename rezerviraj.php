<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Batana - Rezervacija</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/sobe.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=call" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
</head>
<body>
<?php include('assets/components/navbar.php'); ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<div class="container mt-5">
    <h2 class="header-rezervacija">Rezervacija</h2>
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 25%; background-color: #844d36;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    <div class="form-group mt-4">
        <label for="room">Odaberi sobu:</label>
        <select id="room" class="form-control">
            <option value="1">SEA VIEW SOBA</option>
            <option value="2">SEA FAMILY SOBA</option>
            <option value="3">DELUXE SEA FAMILY SOBA</option>
        </select>
    </div>

    <div class="form-group">
        <label for="start_date">Datum dolaska:</label>
        <input type="text" id="start_date" class="form-control">
    </div>

    <div class="form-group">
        <label for="end_date">Datum odlaska:</label>
        <input type="text" id="end_date" class="form-control">
    </div>

    <div class="button-provjeri">
        <a class="btn btn-primary mt-3" href="#" id="btn-provjeri">Provjeri dostupnost</a>
    </div>

    <div id="provjera-poruka" class="mt-3 text-right"></div>

    <div class="alert alert-info mt-4">
        <strong>Ukupna cijena:</strong> <span id="total_price">0</span> €
    </div>
</div>

<script>
$(document).ready(function () {
    // Datepicker
    $("#start_date, #end_date").datepicker({
        dateFormat: "yy-mm-dd",
        minDate: 0,
        numberOfMonths: 2,
        showButtonPanel: true
    });

    $("#start_date").on("change", function() {
        let minEndDate = $(this).datepicker("getDate");
        $("#end_date").datepicker("option", "minDate", minEndDate);
    });

    $("#end_date").on("change", function() {
        let selectedRoom = $("#room").val();
        let startDate = $("#start_date").val();
        let endDate = $("#end_date").val();

        if (startDate && endDate) {
            $.ajax({
                url: "get_price.php",
                type: "POST",
                data: { room_id: selectedRoom, start_date: startDate, end_date: endDate },
                success: function(response) {
                    $("#total_price").text(response);
                }
            });
        }
    });

    
    $("#btn-provjeri").on("click", function(e) {
        e.preventDefault();

        let room_id = $("#room").val();
        let start_date = $("#start_date").val();
        let end_date = $("#end_date").val();
        $("#provjera-poruka").html("");

        if (!start_date || !end_date) {
            $("#provjera-poruka").html('<div class="alert alert-warning">Molimo ispunite oba datuma.</div>');
            return;
        }

        $.ajax({
            url: "check_availability.php",
            type: "POST",
            dataType: "json",
            data: { room_id, start_date, end_date },
            success: function(response) {
                if (response.available) {
                    $("#provjera-poruka").html(`
                        <div class="alert alert-success">Soba je dostupna u odabranom terminu.</div>
                        <form method="post" action="korak2.php" class="mt-3">
                        <input type="hidden" name="room_id" value="${room_id}">
                        <input type="hidden" name="start_date" value="${start_date}">
                        <input type="hidden" name="end_date" value="${end_date}">
                        <button type="submit" class="btn btn-success">Sljedeći korak</button>
                        </form>
                    `);
                } else {
                    $("#provjera-poruka").html('<div class="alert alert-danger">Soba nije dostupna u tom terminu. Odaberite drugi datum.</div>');
                }
            },
            error: function(xhr, status, error) {
                console.log("Greška u AJAX pozivu: ", error);
                $("#provjera-poruka").html('<div class="alert alert-danger">Došlo je do greške. Pokušajte ponovno.</div>');
            }
        });
    });
});
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
