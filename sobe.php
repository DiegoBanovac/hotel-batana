<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Batana - Sobe</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/sobe.css?v=<?php echo time(); ?>">
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
    <div class="position-relative text-center hero-banner">
        <img src="assets/photos/slika_1.jpg" class="banner-img img-fluid">
    </div>
    <h1 class=" mb-4 title-text">Sobe</h1>
    <div class="divider"></div>
    <div class="main-box">
        <div class="glavni-tekst-box">
            <p class="glavni-opis-text">
            Hotel Batana spušta se prema moru s jedne strane, a s druge prema park šumi te vam pruža pogled za pamćenje iz svake od 10 elegantnih soba i suiteova. Boje i detalji u sobama stvaraju intimnu atmosferu, a pogled na Rovinj upotpunjuje doživljaj tijekom zalaska sunca.
            </p>
        </div>
    </div>
    <div class="main-box">
        <div class="tekst-box">
            <h2 class="mb-4 naslov-text">SEA VIEW SOBA</h2>
            <div class ="broj-osoba">
            <span class="material-symbols-outlined">man</span>   
            <span class="material-symbols-outlined">man</span> 
            </div>
            <p class="opis-text">
            Smještene na prvom katu, ove sobe ostavljaju snažan osjećaj povezanosti s okruženjem hotela. Stil koji ih definira je ugodni minimalizam, luksuz izražen kroz prirodne materijale. Balkon s pogledom na more tek je uvertira u instant revitalizaciju koju osjetite svaki put kad uronite u svoj mali privatni bazen ispred balkona.
            </p>
            <p class="cijena-text">
            od 50€
            </p>
            <div>
                <a class="btn btn-primary mt-3" href="./seaviewsoba.php">Saznajte više</a>
            </div>
        </div>
        <div class="slika-box">
            <img src="assets/photos/soba1.webp" class="main-img">
        </div>
    </div>
    <div class="main-box">
        <div class="slika-box">
            <img src="assets/photos/soba2.webp" class="main-img">
        </div>
        <div class="tekst-box">
            <h2 class="mb-4 naslov-text">SEA FAMILY SOBA</h2>
            <div class ="broj-osoba">
            <span class="material-symbols-outlined">man</span>   
            <span class="material-symbols-outlined">man</span>
            <span class="material-symbols-outlined">man</span>
             
            </div>
            <p class="opis-text">
            Soba je opremljena velikim bračnim krevetom ili s dva spojena kreveta, a nadahnuta je nenametljivom ugodom Mediterana koja se ovdje osjeća na svakom koraku – u zemljanim tonovima, prirodnim materijalima te u mediteranskim biljkama na balkonu. Pogled se pruža na more i staru gradsku jezgru Rovinja.
            </p>
            <p class="cijena-text">
            od 60€
            </p>
            <div>
                <a class="btn btn-primary mt-3" href="./seafamilysoba.php">Saznajte više</a>
            </div>
        </div>
    </div>
    <div class="main-box">
        <div class="tekst-box">
            <h2 class="mb-4 naslov-text">DELUXE SEA FAMILY SOBA</h2>
            <div class ="broj-osoba">
            <span class="material-symbols-outlined">man</span>   
            <span class="material-symbols-outlined">man</span>
            <span class="material-symbols-outlined">man</span>   
            <span class="material-symbols-outlined">man</span>
              
            </div>
            <p class="opis-text">
            Dvije sobe privatnim hodnikom povezane u jednu veliku obiteljsku sobu prirodan su izbor za obitelji s djecom. Jedna soba opremljena je bračnim krevetom, u drugoj se nalaze dva spojena ili odvojena kreveta, a na raspolaganju imate i dvije kupaonice. Dva balkona pružaju pogled na zelene parkove.
            </p>
            <p class="cijena-text">
            od 70€
            </p>
            <div>
                <a class="btn btn-primary mt-3" href="./deluxeseafamilysoba.php">Saznajte više</a>
            </div>
        </div>
        <div class="slika-box">
            <img src="assets/photos/soba3.webp" class="main-img">
        </div>
    </div>
    <div class="main-box">
        <div class="tekst-box w-100">
            <h2 class="naslov-text mb-5 pb-4">U vašoj sobi</h2>
            <div class="tabela row mx-n4">
 
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Sve smještajne jedinice imaju veliki balkon ili terasu</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Kada i walk-in tuš s efektom tropske kiše</p>
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
                        <p class="ml-2 mb-0">Klima-uređaj</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">USB priključke za punjenje </p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">SOS alarm
                        </p>
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
                        <p class="ml-2 mb-0">Free Wi-Fi</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Kuhalo za vodu</p>
                    </div>
                </div>
                
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Aparat za espresso kavu</p>
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
                        <p class="ml-2 mb-0">Pretinac sa sušilom za kosu, papuče itd.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Zvono na vratima</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Dječji krevetić na upit (uključen u cijenu smještaja)</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Posluga u sobu dostupna je 24 sata dnevno</p>
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