<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Batana</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=pin_drop" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=call" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script type="module" src="js/index.js"></script>
</head>
<body>
    <?php require_once 'config.php'; ?>
    <?php include('assets/components/navbar.php'); ?>

    <div class="position-relative text-center hero-banner">
    <video autoplay loop muted playsinline class="fullscreen-video">
            <source src="assets/videos/video1.webm" type="video/mp4">
            Tvoj preglednik ne podržava video format.
    </video>
    <h1 class="hero-text">
        Hotel vaših snova na dohvatu ruke.
    </h1>
    </div>

    <div class="main-box">
        <div class="tekst-box">
            <h2 class="mb-4 naslov-text">Hotel Batana nudi vam jedinstveno iskustvo koje nećete zaboraviti.</h2>
            <p class="opis-text">
                Probudite se u luksuznom okruženju sa jedinstvenim pogledom na stari grad Rovinja te uživajte u okruženju gdje ste Vi na prvome mjestu. Naš hotel nudi Vam elegantne sobe sa terasama različitih veličina prikladne svim dobima, infinity bazenom koji se prostire duž obale i restoran sa tradicionalnim istarskim jelima te brojne usluge kao što su wellness i spa.
            </p>
        </div>
        <div class="slika-box">
            <img src="assets/photos/slika_2.jpg" class="main-img">
            <div class="slike-box">
                <img src="assets/photos/slika_2.jpg" class="small-img">
                <img src="assets/photos/slika_3.jpg" class="small-img">
                <img src="assets/photos/slika_4.jpg" class="small-img">
            </div>
        </div>
    </div>

    <div class="main-box">
        <div class="tekst-box w-100">
            <h2 class="naslov-text mb-5 pb-4">Usluge i pogodnosti</h2>
            <div class="tabela row mx-n4">
 
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Concierge usluga</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Usluga privatnog transfera</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Besplatan Wi-Fi</p>
                    </div>
                </div>
                
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Restorani i barovi</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Usluga parkiranja vozila</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Klub za djecu</p>
                    </div>
                </div>
                
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Wellness & Spa</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Garaža</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Sportski objekti</p>
                    </div>
                </div>
                
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Posluga u sobu 24 sata na dan</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-4 px-4">
                    <div class="d-flex align-items-center">
                        <span class="check-icon">&#10003;</span>
                        <p class="ml-2 mb-0">Plaže i bazeni</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-box">
        <div class="tekst-box">
            <h2 class="mb-4 naslov-text">Sobe</h2>
            <p class="opis-text">
                Naš hotel nudi tri vrste soba prilagođene različitim potrebama gostiju. Standardna soba s pogledom na vrt pruža udobnost i mir s privatnim balkonom okrenutim prema mediteranskom zelenilu. Superior soba s pogledom na more nudi prostraniji interijer i spektakularan pogled na more i staru jezgru Rovinja, idealan za opuštanje. Za one koji traže vrhunski luksuz, Deluxe suite s panoramskim pogledom kombinira elegantan dizajn, odvojeni dnevni boravak i prostranu terasu s nezaboravnim pogledom na more.
            </p>
            <a class="btn btn-primary mt-3" href="./sobe.php">Saznajte više</a>
        </div>
        <div class="slika-box">
            <img src="assets/photos/slika_sobe.jpg" class="main-img">
        </div>
    </div>

    <div class="main-box">
        <div class="tekst-box">
            <h2 class="mb-4 naslov-text">Kako do nas</h2>
            <div class="mb-4">
                <div class="d-flex align-items-center mb-3">
                    <span class="material-symbols-outlined">pin_drop</span>
                    <p class="ml-2 mb-0">Ul. Luigija Montija 9a, 52210, Rovinj</p>
                </div>
                <div class="d-flex align-items-center">
                    <span class="material-symbols-outlined">call</span>
                    <p class="ml-2 mb-0">+385 91 929 4594</p>
                </div>
            </div>
            
            <h3 class="mb-4 podnaslov-text">Udaljenosti</h3>
            <div class="container mt-4">
  <div class="d-flex justify-content-between border-bottom py-2">
    <span>More</span><span>150 m</span>
  </div>
  <div class="d-flex justify-content-between border-bottom py-2">
    <span>Centar</span><span>2500 m</span>
  </div>
  <div class="d-flex justify-content-between border-bottom py-2">
    <span>Luka</span><span>140 m</span>
  </div>
  <div class="d-flex justify-content-between border-bottom py-2">
    <span>Trgovina</span><span>600 m</span>
  </div>
  <div class="d-flex justify-content-between border-bottom py-2">
    <span>Autobusna stanica</span><span>2300 m</span>
  </div>
</div>
        </div>
        <div id="map"></div>
    </div>
    <?php include('assets/components/footer.php'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // Selektiramo sve male slike
    const smallImages = document.querySelectorAll('.small-img');
    // Selektiramo glavnu sliku unutar .slika-box
    const mainImage = document.querySelector('.slika-box .main-img');

    // Dodajemo event listener svakoj maloj slici
    smallImages.forEach(img => {
        img.addEventListener('click', () => {
            // Promijenimo src glavne slike na onu koju smo kliknuli
            mainImage.src = img.src;
        });
    });
    </script>
    <!-- prettier-ignore -->
    <script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
        ({key: "<?php echo $googleMapsApiKey; ?>", v: "weekly"});</script>
</body>
</html>
