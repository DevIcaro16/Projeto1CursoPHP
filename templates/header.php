<?php

//incluindo os códigos dos outros arquivos para ter as funcionalidades :

include_once("helpers/url.php");
include_once("data/posts.php");
include_once("data/categories.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog World Games : </title>
    <link rel="stylesheet" href="<?= $BASE_URL?>/CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:wght@300;700&display=swap" rel="stylesheet">

</head>
<body>
    <header>
      
        <a href="<?php= $BASE_URL?>" id="logo">
    
        <img src="<?= $BASE_URL?>/img/Logo.avif" alt="World Games">
        <nav>


            <ul id="navbar">
                <li><a href="<?= $BASE_URL?>" class="nav-link">Home</a></li>
                <li><a href="<?= $BASE_URL?>/categorias.php" class="nav-link">Categorias</a></li>
                <li><a href="<?= $BASE_URL?>/sobre.php" class="nav-link">Sobre</a></li>
                <li><a href="<?= $BASE_URL?>/contato.php" class="nav-link">Contato</a></li>
            </ul>

        </nav>
        
    </a>

    </header>