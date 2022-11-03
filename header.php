<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Wyjazd centralny Diecezji Bydgoskiej">
    <meta name="keywords" content="SDM, ŚDM, Światowe dni młodzieży, Swiatowe dni mlodziezy, lizbona, sdm bydgoszcz, swiatowe dni mlodziezy bydgoszcz, sdm bydgoszcz lizbona">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>Z Kujaw i Pomorza do Lizbony</title>
</head>
    <body>
        <header>
                <div class="header-logo flex-center">
                        <a href="/">
                            <img src="<?php bloginfo('template_url'); ?>/media/logo.png" alt="sdm-logo" />
                        </a>
                </div>
                <div class="header-menu flex-center">
                        <ul>
                            <li class="flex-center"><a href="<?php echo site_url('/idea-sdm/'); ?>" class="menu-a">IDEA ŚDM</a></li>
                            <li class="flex-center"><a href="<?php echo site_url('/lizbona-2023/'); ?>" class="menu-a">LIZBONA 2023</a></li>
                            <li class="flex-center"><a href="<?php echo site_url('/diecezja-bydgoska/'); ?>" class="menu-a">DIECEZJA BYDGOSKA</a></li>
                            <li class="flex-center"><a href="<?php echo site_url('/punkty-przygotowan/'); ?>" class="menu-a">PUNKTY PRZYGOTOWAŃ</a></li>
                            <li class="flex-center"><a href="<?php echo site_url('/masz-pytanie/'); ?>" class="menu-a">MASZ PYTANIE?</a></li>
                            <li class="flex-center"><a href="<?php echo site_url('/zapisz-sie/'); ?>"><button class="sign-in-button animate__animated animate__pulse">ZAPISZ SIĘ!</button></a></li>
                        </ul>
                </div>
                <button class="hamburger hamburger--collapse" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>

        </header>
