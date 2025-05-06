<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Batana - Wellness</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/sobe.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=call,mail" />
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
        <img src="assets/photos/welnessbanner.jpg" class="banner-img img-fluid">
    </div>
    <h1 class="mb-4 title-text">Wellness</h1>
    <div class="divider"></div>
    <div class="main-box">
        <div class="glavni-tekst-box">
            <p class="glavni-opis-text">
                Nadahnuti slobodom jedrenja, u našem centru Wellness & Spa otkrivamo tajne wellnessa u Istri.
            </p>
        </div>
    </div>
    <div class="main-box">
        <div class="tekst-box">
            <h2 class="mb-4 naslov-text">Wellness & Spa</h2>
            <p class="opis-text">
                Pronađite novu snagu i opustite se uz jedinstvene spa tretmane s ljekovitim morskim algama, prešanim maslinama i ručno ubranim lokalnim ljekovitim biljem natopljenim istarskim likerima. Na više od 1000 m2 nudimo i saune, bazene, prostor za sunčanje i opuštanje u mediteranskom vrtu.
            </p>
        </div>
        <div class="slika-box">
            <img src="assets/photos/wellness1.jpg" class="main-img">
        </div>
    </div>
    <div class="main-box">
    <div class="slika-box">
            <img src="assets/photos/wellness2.webp" class="main-img">
        </div>
        <div class="tekst-box">
            <h2 class="mb-4 naslov-text">Plivanje, sunce i fitness</h2>
            <p class="opis-text">
                Na drugom katu hotela zona je za plivanje, vježbanje i opuštanje u jednom od tri bazena, teretani, baru Cissa te ležaljkama. U vanjskom beskrajnom bazenu kupate se s pogledom na Rovinj, dok se 50-metarski sportski bazen proteže od unutrašnjosti do vanjskog prostora. Birate ležaljke u unutrašnjem i vanjskom prostoru.
            </p>
            <p class="opis-text">
                Teretana s pogledom na more omogućuje vam održavanje forme tijekom odmora. Isprobajte vrhunsku opremu za vježbanje izdržljivosti i snage, ili promijenite rutinu uz stručne trenere koji će vas voditi kroz raznovrsne treninge poput Cross class funkcionalnih treninga te treninga trčanja, veslanja ili plivanja.
            </p>
        </div>
    </div>
    <div class="main-box">
        <div class="tekst-box">
            <h2 class="mb-4 naslov-text">Rezervacije</h2>
            <div class="mb-4">
                <div class="d-flex align-items-center">
                    <span class="fon material-symbols-outlined">call</span>
                    <p class="ml-2 mb-0">+385 93 366 4433</p>
                </div>
                <div class="d-flex align-items-center">
                    <span class="fon material-symbols-outlined">mail</span>
                    <p class="ml-2 mb-0">wellnesscentar@batana.hr</p>
                </div>
            </div>
            <h3 class="mb-4 podnaslov-text">Radno vrijeme</h3>
            <div class="vrijeme">
                <div class="vrijeme-item">Wellness & Spa</div><div class="vrijeme-item"><hr style="display: inline-block;  width: 100%; vertical-align: middle; align-self: center;"></div><div class="vrijeme-item">7:00 – 21:00</div>
                <div class="vrijeme-item">Bazen</div><div class="vrijeme-item"><hr style="display: inline-block;  width: 100%; vertical-align: middle; align-self: center;"></div><div class="vrijeme-item"> 8:00 – 21:30</div>
                <div class="vrijeme-item">Teretana</div><div class="vrijeme-item"><hr style="display: inline-block;  width: 100%; vertical-align: middle; align-self: center;"></div><div class="vrijeme-item"> 0-24</div>
            </div>
        </div>
    </div>
    <?php include('assets/components/footer.php'); ?>
    <script>
    $(document).ready(function() {
        let hideTimeout;

        $('#sobeDropdown').on('mouseenter', function() {
            clearTimeout(hideTimeout); // Poništi prethodni timeout ako se miš vrati unutra
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

        // Spriječi zatvaranje dropdowna ako se klikne unutar njega
        $('.dropdown-menu').on('click', function(e) {
            e.stopPropagation();
        });
    });
  </script>
</body>
</html>