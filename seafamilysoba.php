<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Batana - Sea Family Soba</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/pojedina_soba.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=man" />
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
    <h1 class="pt-5 mb-4 title-text">SEA FAMILY SOBA<div class="osobe">
        <span class="material-symbols-outlined icon-custom">man</span>   
        <span class="material-symbols-outlined icon-custom">man</span>
        <span class="material-symbols-outlined icon-custom">man</span>
    </div></h1>
    <div class="divider"></div>
    <div class="main-box">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="custom-radius d-block w-100" src="assets/photos/seafamilyslike/seafamily1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="custom-radius d-block w-100" src="assets/photos/seafamilyslike/seafamily2.webp." alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="custom-radius d-block w-100" src="assets/photos/seafamilyslike/seafamily3.webp" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="main-box">
        <div class="glavni-tekst-box">
            <p class="glavni-opis-text">
            Soba je opremljena velikim bračnim krevetom ili s dva spojena kreveta, a nadahnuta je nenametljivom ugodom Mediterana koja se ovdje osjeća na svakom koraku – u zemljanim tonovima, prirodnim materijalima te u mediteranskim biljkama na balkonu. Pogled se pruža na more i staru gradsku jezgru Rovinja.
            </p>
        </div>
    </div>
    <div class="divider"></div>
    <div class="main-box">
        <div class="tekst-box w-100">
            <h2 class="naslov-text mb-5 pb-4">Usluge i sadržaj</h2>
            <div class="tabela row mx-n4">
 
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Pogled na more</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Bračni krevet ili dva spojena kreveta</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Udoban kutak za sjedenje za četiri osobe</p>
                    </div>
                </div>
                
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Kupaonica s kadom, tušem s efektom kiše</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Balkon s dva stolca i stolom</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Klima-uređaj</p>
                    </div>
                </div>
                
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Smart TV</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Sef</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Minibar</p>
                    </div>
                </div>
                
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Free Wi-Fi</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Maks. 2 odrasle osobe i dijete do 16 godina</p>
                    </div>
                </div>
            </div>
        </div>
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