<?php

    include($_SERVER['DOCUMENT_ROOT'].'/server.php');
    include($_SERVER['DOCUMENT_ROOT'].'/is_reg.php'); 
    
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="{$title}";?></title>
    <!-- <link rel="stylesheet" href="/css/reset.css"> -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href=<?="/css/{$css}";?>>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <header>
            <div class="header wrapper">
                <div class="logo"><img src="/images/5g.png" alt="иконка" class="icon"></div>
            
                <ul class="menu">
                    <li class="item"><a class = "menu_link" href="/main.php">О себе</a></li>
                    <li class="item"><a class = "menu_link" href="/pages/resume.php">Резюме</a></li>
                    <li class="item"><a class = "menu_link" href="/pages/portfolio.php">Портфолио</a></li>
                    <li class="item"><a class = "menu_link" href="/pages/competence.php">Компетенции</a></li>
                    <li class="item"><a class = "menu_link" href="/pages/contacts.php">Контакты</a></li>
                    <li class="item"><a class = "menu_link" href="/pages/zadanija.php">Задания</a></li>
            </div>
    </header>
    <?php

    //include($_SERVER['DOCUMENT_ROOT'].'/parts/conf.php');
    //include($_SERVER['DOCUMENT_ROOT'].'/is_reg.php'); 
    include($_SERVER['DOCUMENT_ROOT'].'/server.php');
    include($_SERVER['DOCUMENT_ROOT'].'/is_reg.php'); 
?>