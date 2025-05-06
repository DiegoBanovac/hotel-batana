<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Batana - Restoran</title>
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
</head>
<body>
    <?php include('assets/components/navbar.php'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <div class="position-relative text-center hero-banner">
        <img src="assets/photos/restoranbanner.jpg" class="banner-img img-fluid">
    </div>
    <h1 class=" mb-4 title-text">Restoran</h1>
    <div class="divider"></div>
    <div class="main-box">
        <div class="glavni-tekst-box">
            <p class="glavni-opis-text">
            U našem restoranu doživite kulinarsko putovanje koje mami vaše nepce primamljivom paletom tradicionalnih istarskih i mediteranskih poslastica. Otvoren je tijekom cijelog dana te nudi buffet doručak, ručak ili ležernu večeru.
            </p>
        </div>
    </div>
    <div class="main-box">
        <div class="tekst-box">
            <h2 class="mb-4 naslov-text">Priče istarske tradicije i lokalnih namirnica s potpisom vrhunskih chefova</h2>
            <p class="opis-text">
             Restoran je otvoren cijeli dan uz opuštenu atmosferu i predivan pogled s terase na marinu i Rovinj
            </p>
        </div>
        <div class="slika-box">
            <img src="assets/photos/restoran1.jpg" class="main-img">
        </div>
    </div>
    <div class="main-box">
    <div class="slika-box">
            <img src="assets/photos/restoran2.webp" class="main-img">
        </div>
        <div class="tekst-box">
            <h2 class="mb-4 naslov-text">Okusi koji ostaju u pamćenju</h2>
            <p class="opis-text">
            Krenite u otkrivanje okusa, mirisa i boja Istre već od doručka. Uz fuziju istarskih i mediteranskih okusa jela a la carte poslužuju se cijeli dan od 13 do 22.30 sati. Priče istarske tradicije iznenadit će vas istarskom maneštrom, ručno rađenim fužima s vrganjima i tartufima, rižotom s jadranskim škampima i paškim sirom i ostalim autorskim jelima s potpisom naših chefova.
            </p>
        </div>
    </div>
    <div class="main-box">
        <div class="tekst-box">
            <h2 class="mb-4 naslov-text">Rezervacije</h2>
            <div class="mb-4">
                <div class="d-flex align-items-center">
                    <span class="fon material-symbols-outlined">call</span>
                    <p class="ml-2 mb-0">+385 91 344 4137</p>
                </div>
            </div>
            <h3 class="mb-4 podnaslov-text">Radno vrijeme</h3>
            <div class="vrijeme">
                <div class="vrijeme-item">Doručak</div><div class="vrijeme-item"><hr style="display: inline-block;  width: 100%; vertical-align: middle; align-self: center;"></div><div class="vrijeme-item"> 06:30 – 12:00</div>
                <div class="vrijeme-item">Ručak</div><div class="vrijeme-item"><hr style="display: inline-block;  width: 100%; vertical-align: middle; align-self: center;"></div><div class="vrijeme-item"> 13:00 – 18:00</div>
                <div class="vrijeme-item">Večera</div><div class="vrijeme-item"><hr style="display: inline-block;  width: 100%; vertical-align: middle; align-self: center;"></div><div class="vrijeme-item"> 19:00 – 22:30</div>
            </div>
        </div>
        <div class="blok">
            <div class="naslov-section">
                <h2 class="naslov-section-text">Povezani dokumenti</h2>
            </div>
            <div>
                <div class="blok-divider"></div>
                    <div class = "body-section">
                        <p class="blok-opis-text">
                        Za posjetu restoranu molimo da unaprijed rezervirate stol.
                        </p>
                        <a class="link" href="url">Restoran Batana - Karta jela</a>
                        <a class="link" href="url">Restoran Batana - Karta pića</a>
                        <a class="link" href="url">Restoran Batana - Dječji meni</a>
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
</html>