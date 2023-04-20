<?php
require 'database-connection.php';
require 'functions.php';

$sql =" SELECT term, id, seo_name FROM glossary WHERE (term > '0') AND (term < '9') ORDER BY term ASC;";
$num = $pdo->query($sql);

$sql =" SELECT term, id, seo_name  FROM glossary WHERE term LIKE 'A%' ORDER BY term ASC;";
$A = $pdo->query($sql);

$sql =" SELECT term, id, seo_name  FROM glossary WHERE term LIKE 'B%' ORDER BY term ASC;";
$B = $pdo->query($sql);

$sql =" SELECT term, id, seo_name  FROM glossary WHERE term LIKE 'C%' ORDER BY term ASC;";
$C = $pdo->query($sql);

$sql =" SELECT term, id, seo_name  FROM glossary WHERE term LIKE 'D%' ORDER BY term ASC;";
$D = $pdo->query($sql);

$sql =" SELECT term, id, seo_name  FROM glossary WHERE term LIKE 'E%' ORDER BY term ASC;";
$E = $pdo->query($sql);

$sql =" SELECT term, id, seo_name  FROM glossary WHERE term LIKE 'F%' ORDER BY term ASC;";
$F = $pdo->query($sql);

$sql =" SELECT term, id, seo_name  FROM glossary WHERE term LIKE 'G%' ORDER BY term ASC;";
$G = $pdo->query($sql);

$sql =" SELECT term, id, seo_name  FROM glossary WHERE term LIKE 'H%' ORDER BY term ASC;";
$H = $pdo->query($sql);

$sql =" SELECT term, id, seo_name  FROM glossary WHERE term LIKE 'I%' ORDER BY term ASC;";
$I = $pdo->query($sql);

$sql =" SELECT term, id, seo_name  FROM glossary WHERE term LIKE 'J%' ORDER BY term ASC;";
$J = $pdo->query($sql);

$sql =" SELECT term, id, seo_name  FROM glossary WHERE term LIKE 'K%' ORDER BY term ASC;";
$K = $pdo->query($sql);

$sql =" SELECT term, id, seo_name  FROM glossary WHERE term LIKE 'L%' ORDER BY term ASC;";
$L = $pdo->query($sql);

$sql =" SELECT term, id, seo_name  FROM glossary WHERE term LIKE 'M%' ORDER BY term ASC;";
$M = $pdo->query($sql);

$sql =" SELECT term, id, seo_name  FROM glossary WHERE term LIKE 'N%' ORDER BY term ASC;";
$N = $pdo->query($sql);

$sql =" SELECT term, id, seo_name  FROM glossary WHERE term LIKE 'O%' ORDER BY term ASC;";
$O = $pdo->query($sql);

$sql =" SELECT term, id, seo_name  FROM glossary WHERE term LIKE 'P%' ORDER BY term ASC;";
$P = $pdo->query($sql);

$sql =" SELECT term, id, seo_name  FROM glossary WHERE term LIKE 'R%' ORDER BY term ASC;";
$R = $pdo->query($sql);

$sql =" SELECT term, id, seo_name  FROM glossary WHERE term LIKE 'S%' ORDER BY term ASC;";
$S = $pdo->query($sql);

$sql =" SELECT term, id, seo_name  FROM glossary WHERE term LIKE 'T%' ORDER BY term ASC;";
$T = $pdo->query($sql);

$sql =" SELECT term, id, seo_name  FROM glossary WHERE term LIKE 'U%' ORDER BY term ASC;";
$U = $pdo->query($sql);

$sql =" SELECT term, id, seo_name  FROM glossary WHERE term LIKE 'V%' ORDER BY term ASC;";
$V = $pdo->query($sql);

$sql =" SELECT term, id, seo_name  FROM glossary WHERE term LIKE 'W%' ORDER BY term ASC;";
$W = $pdo->query($sql);

$sql =" SELECT term, id, seo_name  FROM glossary WHERE term LIKE 'X%' ORDER BY term ASC;";
$X = $pdo->query($sql);

$alphas = array_merge(range('A', 'P'), range('R', 'X'));
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Jargony</title>
        <link rel="stylesheet" href="style.css">
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
        <header>
            <div class="container">
                <a class="link-logo" href="https://jargony.infinityfreeapp.com/"><img id="logo-standard" class="img-logo" src="logo_jargony.svg" alt="jargony logo"><img id="logo-alt" class="img-logo" src="logo_jargony_white.svg" alt="jargony logo"></a>
                <nav class="nav-bar">
                    <button id="btn-mode-home" class="btn-mode"><i class="fa-solid fa-circle-half-stroke"></i><span id="btn-mode-text">Dark Mode</span></button>
                    <button class="btn-contact">Contact</button>
                </nav>
            </div>
        </header>
        <!-- Top intro section -->
        <section id="section-top" class="section-home-top">
            <div class="container">
                <h1>Jargony</h1>
                <p class="p-intro">Jargony is a glossary with 270+ terms related to web design and development. Its purpose is to help Designers, Researchers, Content and Marketing Strategists, Copywriters, Product Managers, and Developers speak the same language. It quotes defintions from various online sources as well as providing links to further reading. Many concepts have multiple terms associated with them. Use the Search feature to find more related terms.</p>
                <div class="p-intro">
                    <input class="jargony-search" type="search" placeholder="Search glossary">
                </div> 
            </div>
        </section>
         <!-- Alphabet menu links -->
        <section class="section-list">
            <div class="container div-list">
                <a href="#sec-num" class="link-landing">#</a>
                <?php foreach (range('A', 'P') as $alphabet1) { ?>
                    <a href="#sec-<?= $alphabet1 ?>" class="link-landing"><?= $alphabet1 ?></a>
                <?php } ?>
                <a href="#" class="link-landing disabled" disabled>Q</a>
                <?php foreach (range('R', 'X') as $alphabet2) { ?>
                    <a href="#sec-<?= $alphabet2 ?>" class="link-landing"><?= $alphabet2 ?></a>
                <?php } ?>
                <a href="#" class="link-landing disabled" disabled>Y</a>
                <a href="#" class="link-landing disabled" disabled>Z</a>
            </div>
        </section>
         <!-- Glossary list split into two sections to account for the Numbers(#) & Letters sections-->
        <div class="section-home-bottom">
            <section id="sec-num" class="secreveal">
                <div class="container">
                    <h2>#</h2>
                    <div class="d-flex">
                        <div class="row">
                                <?php while ($row = $num->fetch()){ ?>
                                    <ul class="unstyled-list">
                                        <li> <a class="link-landing" href="term.php?id=<?= $row['id'] ?>&title=<?= $row['seo_name'] ?>"><?= html_escape($row['term']) ?></a></li>
                                    </ul>
                                <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php foreach ($alphas as $alphabet3) { ?>
            <section id="sec-<?= $alphabet3 ?>" class="secreveal">
                    <div class="container">
                        <h2><?= $alphabet3 ?></h2>
                        <div class="d-flex">
                            <div class="row">
                                    <?php while ($row = $$alphabet3 -> fetch()){ ?>
                                        <ul class="unstyled-list">
                                            <li> <a class="link-landing" href="term.php?id=<?= $row['id'] ?>&title=<?= $row['seo_name'] ?>"><?= html_escape($row['term']) ?></a></li>
                                        </ul>
                                    <?php } ?>

                            </div>
                        </div>
                    </div>
            </section>
            <?php } ?>
        </div> 
        <!-- Scroll to top arrow -->
        <a href="#section-top" class="btn-scroll-top"><i class="fa-solid fa-circle-arrow-up"></i></a>  
        <footer>
            <div class="container">
                <p>©2023 Jargony. All rights reserved.</p>
            </div>
        </footer>
        <script async src="https://js.sitesearch360.com/plugin/bundle/13135.js"></script>
        <script async src="https://widget.websitevoice.com/lGpRw_rr-XpwnYoi9d-JYw"></script>
        <script type="text/javascript" src="main.js"></script>
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
