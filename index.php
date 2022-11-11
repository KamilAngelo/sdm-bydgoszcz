<?php get_header(); ?>
<div class="container">
    <div class="content">
        <section class="index-section section1">
            <div class="flex-row" style="justify-content: space-between;">
                <div class="section1-items">
                    <h1 class="big-h1 textleft">ŚDM Lizbona 2023<br/> <span class="blue">Diecezja Bydgoska</span></h1>
                    <p class="section1-p section-p">Tutaj musimy coś powiedzieć o tym, jak cudownym wydarzeniem są światowe dni młodzieży, które będą już niedługo z wielu miejsc w naszej diecezji</p>
                </div>
                <img class="map" src="<?php bloginfo('template_url'); ?>/media/index-map.png"/>
            </div>
        </section>
    </div>
        <section class="index-section section1a">
            <h1 class="big-h1" style="color:var(--darkcontent); font-weight: 500;">
                <span class="bold">Etapy</span> Światowych Dni Młodzieży
            </h1>
            <div class="flex-row" style="gap: 40px;">
                <div class="etapy-div shadow-div">
                    <img src="<?php bloginfo('template_url'); ?>/media/calendar.png" alt="kalendarz-logo" width="40px"/>
                    <p>26-31 lipca 2023 r.</p>
                    <h2 class="big-h2">Dni w Diecezjach Portugalii</h2>
                </div>
                <div class="etapy-div shadow-div">
                    <img src="<?php bloginfo('template_url'); ?>/media/calendar.png" alt="kalendarz-logo" width="40px"/>
                    <p>1-6 sierpnia 2023 r.</p>
                    <h2 class="big-h2">Wydarzenia Centralne w Lizbonie</h2>
                </div>
            </div>
            <a href="<?php echo site_url('/lizbona-2023/'); ?>"><button class="etapy-button animate__bounce">DOWIEDZ SIĘ WIĘCEJ O ETAPACH</button></a>
        </section>
        <section class="index-section section1b" style="background-image: url('<?php bloginfo('template_url'); ?>/media/patternpad.svg');">
            <h1 class="big-h1" style="color:var(--darkcontent); font-weight: 500;">
                - tu będzie zaproszenie od księdza Biskupa -
            </h1>
        </section>
        <section class="index-section section2">
            <h1 class="big-h1 zindex10">Tak było w poprzednich latach</h1>
            <div class="swiper zindex10">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="https://upload.wikimedia.org/wikipedia/commons/d/de/Wydrome2000.jpg" alt="" srcset=""></div>
                  <div class="swiper-slide">Slide 2</div>
                  <div class="swiper-slide">Slide 3</div>
                </div>
                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              
            </div>
        </section>
        <section class="index-section section3">
            <div class="content">
                <h1 class="big-h1" style="font-weight: 500;">Poznaj Hymn ŚDM w Lizbonie!</h1>
                <div class="flex-row">
                    <p class="section3-p section-p">
                        Jest to oficjalna polska wersja hymnu Światowych Dni Młodzieży w Lizbonie w 2023 roku „Ha pressa no ar” zrealizowana we współpracy <a class="bold" style="color: white;" href="https://mlodzi.diecezja.pl">Duszpasterstwa Młodzieży Archidiecezji Krakowskiej</a>, <a class="bold" style="color: white;" href="https://sdmpolska.pl">Krajowego Biura Organizacyjnego ŚDM</a> oraz <a class="bold" style="color: white;" href="https://idmjp2.pl">Instytutu Dialogu Międzykulturowego im. Jana Pawła II w Krakowie</a>.
                    </p>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/JUiBADEot90" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <h2 class="bottom-h2"><a target="_blank" style="color: white;" href="https://www.youtube.com/watch?v=SWo7r7PaHqE">Sprawdź oryginalną wersję!</a></h2>
            </div>
        </section>
        <section class="index-section section4">
            <div class="content" style="max-width: 100%; width: 100%;">
                <h1 class="big-h1" style="color:var(--darkcontent); font-weight: 500;">
                    Grupy wyjeżdżające na ŚDM z naszej Diecezji:
                </h1>
                <div class="grupy-row">
                    <div class="grupa-div shadow-div">
                        <h2 class="page-h3">Grupa Złotów I</h2>
                        <p class="page-p" style="font-size: 15px; text-align: left;">Organizator: Parafia pw. Św. Piotra i Pawła Apostołów w Złotowie</p>
                        <p class="page-p" style="font-size: 15px; text-align: left;">Koordynator: ks. Bartłomiej Brzeziński</p>
                        <button class="more-button"><a href="<?php echo site_url('/punkty-przygotowan/'); ?>#zlotow1-a" style="color: white;">Więcej informacji</a></button>
                    </div>
                    <div class="grupa-div shadow-div">
                        <h2 class="page-h3">Grupa Złotów II</h2>
                        <p class="page-p" style="font-size: 15px; text-align: left;">Organizator: Parafia pw. Wniebowzięcia NMP w Złotowie</p>
                        <p class="page-p" style="font-size: 15px; text-align: left;">Koordynator: Marcin Przystawski MSF</p>
                        <button class="more-button"><a href="<?php echo site_url('/punkty-przygotowan/'); ?>#zlotowii-a" style="color: white;">Więcej informacji</a></button>
                    </div>
                    <div class="grupa-div shadow-div">
                        <h2 class="page-h3">Grupa Nakło</h2>
                        <p class="page-p" style="font-size: 15px; text-align: left;">Organizator: Dekanalne Duszpasterstwo Młodzieży</p>
                        <p class="page-p" style="font-size: 15px; text-align: left;">Koordynator: ks. Igor Wichrowski</p>
                        <button class="more-button"><a href="<?php echo site_url('/punkty-przygotowan/'); ?>#naklo-a" style="color: white;">Więcej informacji</a></button>
                    </div>
                    <div class="grupa-div shadow-div">
                        <h2 class="page-h3">Grupa Osowa Góra</h2>
                        <p class="page-p" style="font-size: 15px; text-align: left;">Organizator: Duszpasterstwo Młodzieży u Maksymiliana</p>
                        <p class="page-p" style="font-size: 15px; text-align: left;">Koordynator: ks. Wojciech Ciołek</p>
                        <button class="more-button"><a href="<?php echo site_url('/punkty-przygotowan/'); ?>#osowagora-a" style="color: white;">Więcej informacji</a></button>
                    </div>
                    <div class="grupa-div shadow-div">
                        <h2 class="page-h3">Grupa Fordon</h2>
                        <p class="page-p" style="font-size: 15px; text-align: left;">Organizator: Kościół św. Mateusza Apostoła i Ewangelisty w Bydgoszczy</p>
                        <p class="page-p" style="font-size: 15px; text-align: left;">Koordynator: ks. Henryk Stippa</p>
                        <button class="more-button"><a href="<?php echo site_url('/punkty-przygotowan/'); ?>#fordon-a" style="color: white;">Więcej informacji</a></button>
                    </div>
                    <div class="grupa-div shadow-div">
                        <h2 class="page-h3">Grupa Centralna</h2>
                        <p class="page-p" style="font-size: 15px; text-align: left;">Organizator: Młodzieżowa Rada Programowa Diecezji Bydgoskiej</p>
                        <p class="page-p" style="font-size: 15px; text-align: left;">Koordynator: ks. Henryk Stippa</p>
                        <button class="more-button"><a href="<?php echo site_url('/punkty-przygotowan/'); ?>#centralna-a" style="color: white;">Więcej informacji</a></button>
                    </div>
                    <div class="grupa-div shadow-div">
                        <h2 class="page-h3">Grupa Studencka</h2>
                        <p class="page-p" style="font-size: 15px; text-align: left;">Organizator: Diecezjalny Ośrodek Duszpasterstwa Akademickiego "Martyria"</p>
                        <p class="page-p" style="font-size: 15px; text-align: left;">Koordynator: ks. Piotr Wachowski</p>
                        <button class="more-button"><a href="<?php echo site_url('/punkty-przygotowan/'); ?>#studencka-a" style="color: white;">Więcej informacji</a></button>
                    </div>
                    <div class="grupa-div shadow-div">
                        <h2 class="page-h3">Grupa Katolik</h2>
                        <p class="page-p" style="font-size: 15px; text-align: left;">Organizator: Zespół Szkół Katolickich w Bydgoszczy</p>
                        <p class="page-p" style="font-size: 15px; text-align: left;">Koordynator: ks. Łukasz Boruch</p>
                        <button class="more-button"><a href="<?php echo site_url('/punkty-przygotowan/'); ?>#katolik-a" style="color: white;">Więcej informacji</a></button>
                    </div>
                </div>
            </div>
        </section>
</div>
<script>

document.addEventListener('scroll', (e) => {
    let etapybutton = document.getElementsByClassName('etapy-button')[0]
    if (checkVisible(etapybutton)) {
        etapybutton.classList.add('animate__animated') 
        etapybutton.classList.add('animate__bounceIn') 
    } else {
        
        etapybutton.classList.remove('animate__animated') 
        etapybutton.classList.remove('animate__bounceIn') 
    }
})

</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<?php get_footer(); ?>