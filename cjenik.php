<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Batana - Cjenik</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/tablica.css">
    <link rel="stylesheet" href="css/sobe.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php include('assets/components/navbar.php'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <div class="position-relative text-center hero-banner">
        <img src="assets/photos/cijenikbanner.jpg" class="banner-img img-fluid">
    </div>
    <h1 class="mb-4 title-text">Cjenik</h1>
    <div class="divider"></div>
    <div class="main-box">
            <table class="table table-bordered table-hover text-center">
        <thead class="thead-light">
            <tr>
            <th>Vrsta sobe</th>
            <th>Siječanj</th>
            <th>Veljača</th>
            <th>Ožujak</th>
            <th>Travanj</th>
            <th>Svibanj</th>
            <th>Lipanj</th>
            <th>Srpanj</th>
            <th>Kolovoz</th>
            <th>Rujan</th>
            <th>Listopad</th>
            <th>Studeni</th>
            <th>Prosinac</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>SEA VIEW SOBA - 1 noć</td>
            <td>50 €</td>
            <td>50 €</td>
            <td>55 €</td>
            <td>60 €</td>
            <td>65 €</td>
            <td>70 €</td>
            <td>90 €</td>
            <td>90 €</td>
            <td>70 €</td>
            <td>60 €</td>
            <td>55 €</td>
            <td>50 €</td>
            </tr>
            <tr>
            <td>SEA FAMILY SOBA - 1 noć</td>
            <td>60 €</td>
            <td>60 €</td>
            <td>65 €</td>
            <td>70 €</td>
            <td>75 €</td>
            <td>80 €</td>
            <td>100 €</td>
            <td>100 €</td>
            <td>80 €</td>
            <td>70 €</td>
            <td>65 €</td>
            <td>60 €</td>
            </tr>
            <tr>
            <td>DELUXE SEA FAMILY SOBA - 1 noć</td>
            <td>70 €</td>
            <td>70 €</td>
            <td>75 €</td>
            <td>80 €</td>
            <td>85 €</td>
            <td>90 €</td>
            <td>120 €</td>
            <td>120 €</td>
            <td>90 €</td>
            <td>80 €</td>
            <td>75 €</td>
            <td>70 €</td>
            </tr>
        </tbody>
        </table>
    </div>
    <?php include('assets/components/footer.php'); ?>
    <script>
    $(document).ready(function() {
        let hideTimeout;

        $('#sobeDropdown').on('mouseenter', function() {
            clearTimeout(hideTimeout); 
            $(this).find('.dropdown-menu').addClass('show');
            $(this).find('.dropdown-toggle').attr('aria-expanded', 'true');
        });

        $('#sobeDropdown').on('mouseleave', function() {
            const dropdownMenu = $(this).find('.dropdown-menu');
            hideTimeout = setTimeout(function() {
            dropdownMenu.removeClass('show');
            $('#sobeDropdown').find('.dropdown-toggle').attr('aria-expanded', 'false');
            }, 500);
        });

        $('#navbarDropdownSobe').on('click', function(e) {
            if (!$(e.target).hasClass('dropdown-item')) {
            window.location.href = this.href;
            }
        });

        
        $('.dropdown-menu').on('click', function(e) {
            e.stopPropagation();
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