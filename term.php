<?php
require 'database-connection.php';
require 'functions.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT); // Validate id
if (!$id) {                                               // If no valid id
    include 'page-not-found.php';                         // Page not found
}


$sql =" SELECT g.id, g.term, g.author_name, g.author_link, g.description, g.resource1_name, g.resource1_link, g.resource2_name, g.resource2_link, g.pronunciation, g.seo_name
        FROM glossary AS g
        WHERE g.id = :id;";

$entry = pdo($pdo, $sql, [$id])->fetch();               // Get entry
if (!$entry) {                                          // If entry not found
    include 'page-not-found.php';                         // Page not found
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Jargony</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700&family=Noto+Serif:wght@700&family=Source+Sans+Pro:wght@600" type="text/css">
        <link rel="icon" type="image/png" href="favicon.png">
        <script src="https://kit.fontawesome.com/32ae876081.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width">
        <meta charset="UTF-8">
        <meta name="keywords" content="Design Language, Jargon, Glossary, Design Terms">
    </head>
    <body>
        <!-- Header bar -->
        <header class="header-standard">
            <div class="container">
                <a class="link-logo" href="https://jargony.infinityfreeapp.com/"><img id="logo-standard" class="img-logo" src="logo_jargony.svg" alt="jargony logo"> <img id="logo-alt" class="img-logo" src="logo_jargony_white.svg" alt="jargony logo"></a>
                <nav class="nav-bar">
                    <input class="input-top jargony-search" type="search" placeholder="Search">
                    <button id="btn-mode-term" class="btn-mode"><i class="fa-solid fa-circle-half-stroke"></i><span id="btn-mode-text">Dark Mode</span></button>
                    <button class="btn-contact">Contact</button>
                </nav>
            </div>
        </header>
        <!-- Alphabet menu links -->
        <section class="section-list">
            <div class="container div-list">
                <a href="/#sec-num" class="link-landing">#</a>
                <?php foreach (range('A', 'P') as $alphabet1) { ?>
                    <a href="/#sec-<?= $alphabet1 ?>" class="link-landing"><?= $alphabet1 ?></a>
                <?php } ?>
                <a href="#" class="link-landing disabled" disabled>Q</a>
                <?php foreach (range('R', 'X') as $alphabet2) { ?>
                    <a href="/#sec-<?= $alphabet2 ?>" class="link-landing"><?= $alphabet2 ?></a>
                <?php } ?>
                <a href="#" class="link-landing disabled" disabled>Y</a>
                <a href="#" class="link-landing disabled" disabled>Z</a>
            </div>
        </section>
        <!-- Term definition section -->
        <section class="section-term-entry secreveal">
            <div class="container">
                <div class="div-title-section">
                    <h1 class="h1-large"><?= html_escape($entry['term']) ?></h1>
                    <p class="p-hidden"><?= html_escape($entry['pronunciation']) ?></p>
                    <div class="wv-button-placeholder"></div>
                </div>
                <p class="p-author">From: <a class="link-standard" href="<?= html_escape($entry['author_link']) ?>" target="_blank"><?= html_escape($entry['author_name']) ?><i class="fa-solid fa-square-arrow-up-right"></i></a></p>
                <p class="p-description"><?= html_escape($entry['description']) ?></p>
                <h3>Additional Resources</h3>
                <ul class="unstyled-list list-tight">
                    <li><a class="link-standard" href="<?= html_escape($entry['resource1_link']) ?>" target="_blank"><?= html_escape($entry['resource1_name']) ?><i class="fa-solid fa-square-arrow-up-right"></i></a></li>
                    <li><a class="link-standard" href="<?= html_escape($entry['resource2_link']) ?>" target="_blank"><?= html_escape($entry['resource2_name']) ?><i class="fa-solid fa-square-arrow-up-right"></i></a></li>
                </ul>
            </div>
        </section>
        <footer>
            <div class="container footer-flex">
                <p>©2023 Jargony. All rights reserved.</p>
                <p>Powered by: <a class="link-footer" href="https://www.sitesearch360.com/" target="_blank">Site Search 360</a> / <a class="link-footer" href="https://www.infinityfree.net/" target="_blank">InfinityFree</a> / <a class="link-footer" href="https://websitevoice.com/" target="_blank">WebsiteVoice</a></p>
            </div>
        </footer>
        <script async src="https://js.sitesearch360.com/plugin/bundle/13135.js"></script>
        <script type="text/javascript" src="main.js"></script>
        <script async src="https://widget.websitevoice.com/lGpRw_rr-XpwnYoi9d-JYw"></script>
        <!-- Pronunciation button-->
        <script>
            window.wvData=window.wvData||{};function wvtag(a,b){wvData[a]=b;}
            wvtag('id', 'lGpRw_rr-XpwnYoi9d-JYw');
            wvtag('gender', 'female');
            wvtag('text-selector', '.p-hidden');
            wvtag('widget-style', {backgroundColor: '#33373b'});
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function(){
                if(localStorage.getItem('dark')){
                    document.body.classList.add('dark-mode');
                    document.querySelector("#btn-mode-text").textContent = "Light Mode";
                    document.querySelector("#logo-standard").style.display = "none";
                    document.querySelector("#logo-alt").style.display = "block";
                }
                else {
                    document.body.classList.remove('dark-mode');
                    document.querySelector("#btn-mode-text").textContent = "Dark Mode";
                    document.querySelector("#logo-standard").style.display = "block";
                    document.querySelector("#logo-alt").style.display = "none";
                }
                if(localStorage.getItem('letterClick')){
                    document.querySelector('.btn-scroll-top').style.display = "block";
                    document.querySelector('#input-home').style.display = "block";
                    let stored1 = localStorage.getItem('letterClick');
                    console.log(stored1);
                }
                else {
                    document.querySelector('.btn-scroll-top').style.display = "none";
                    document.querySelector('#input-home').style.display = "none";
                }
            });
        </script>
    </body>
</html>