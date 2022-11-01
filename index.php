<?php get_header(); ?>
<link rel="stylesheet" href="style-index.css">
<div class="container">
    <section class="index-section section1">
        <div class="flex-row">
            <div style="width: 40%;">
                <h1 class="big-h1 textleft" style="font-size: calc(2.4vw + 12px); color: black;">Grupa centralna<br/> <span class="blue">Diecezji Bydgoskiej</span></h1>
                <p class="section1-p section-p">Tutaj będą jakieś głupotki o tym, że serdecznie zapraszamy do niesamowitej podróży w jednej z ośmiu grup wyjeżdżającej z naszej diecezji w ramach projektu "Z Kujaw i Pomorza do Lizbony" bla bla.</p>
            </div>
            <div class="section1-slider">
                <h1 class="big-h1 zindex10" style="bottom: 20%; left: 0; font-weight: 500; padding-left: 30px; text-align: left;">I spotkanie organizacyjne</h1>
                <p class="zindex10" style="bottom: 20px; right: 20px;">Zobacz więcej...</p>
                <p class="center bigfont zindex10" style="bottom: 0; width: 100%;">. . .</p>
                <!-- to są divy zrobione w kółka display: inline-block z 1 2 3 ^ -->
                <img class="slider" src="http://diecezja.bydgoszcz.pl/wp-content/gallery/z-kujaw-do-lizbony-23-10-22/2.jpg"/>
            </div>
        </div>
        <h1 class="big-h1" style="color:var(--darkcontent)">
            Etapy Światowych Dni Młodzieży:
        </h1>
        <div class="flex-row">
            <div class="etapy-div">
                <img src="<?php bloginfo('template_url'); ?>/media/calendar.png" alt="kalendarz-logo" width="40px"/>
                <p>26-31 lipca 2023 r.</p>
                <h2 class="big-h2">Dni w Diecezjach Portugalii</h2>
            </div>
            <div class="etapy-div">
                <img src="<?php bloginfo('template_url'); ?>/media/calendar.png" alt="kalendarz-logo" width="40px"/>
                <p>1-6 sierpnia 2023 r.</p>
                <h2 class="big-h2">Wydarzenia Centralne w Lizbonie</h2>
            </div>
        </div>
    </section>
    <section class="index-section section2">
ads
    </section>
    <section class="index-section section3">
        <h1 class="big-h1">Poznaj Hymn ŚDM w Lizbonie!</h1>
        <div class="flex-row">
            <p class="section3-p section-p">
                Jest to oficjalna polska wersja hymnu Światowych Dni Młodzieży w Lizbonie w 2023 roku „Ha pressa no ar” zrealizowana we współpracy <a class="uline" style="color: white;" href="https://mlodzi.diecezja.pl">Duszpasterstwa Młodzieży Archidiecezji Krakowskiej</a>, <a class="uline" style="color: white;" href="https://sdmpolska.pl">Krajowego Biura Organizacyjnego ŚDM</a> oraz <a class="uline" style="color: white;" href="https://idmjp2.pl">Instytutu Dialogu Międzykulturowego im. Jana Pawła II w Krakowie</a>.
            </p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/JUiBADEot90" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <!-- do dołu, z podkreśleniem, colorowe -->
        <a href="https://www.youtube.com/watch?v=SWo7r7PaHqE"><h2 class="bottom-h2">Sprawdź oryginalną wersję!</h2></a>
    </section>
    <section class="index-section section4">
        <h1 class="big-h1" style="color: var(--darkcontent);">
            Grupy wyjeżdżające na ŚDM z naszej Diecezji:
        </h1>
    </section>
</div>

<?php get_footer(); ?>
<!-- 
    Na 1 stronie krotko o naszym wyjezdzie i aktualnosci
    na zdjeciu ZAPISZ SIE JUZ DZIS!
    Dwie czesci sdmow
    grupy ktore wyjezdzaja (3, do reszty odnosnik)

    aria-current
-->