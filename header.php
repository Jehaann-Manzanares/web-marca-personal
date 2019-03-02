<!DOCTYPE html>
<?php
/**
*Jehaann Theme - Header

@package wordpress
@subpackage jehaann
@since 1.0.0
@Version 1.0.0/
*/
?>
<html lang="es">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('|',true,'right') ?> <?php bloginfo('name') ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <i class="icon-menu burger-button" id="burger-menu"></i>
    <header class="menu" id="navbar">
        <a href="#main-slider"><h1 class="logo"></h1></a>
        <nav class="container-menu fadeIn">
             <ul>
                 <li><a href="#about-me">Sobre mi</a></li>
                 <li><a href="#portfolio">Portfolio</a></li>
                 <li><a href="#contact"><button class="btn">Contactar</button></a></li>
             </ul>
        </nav>
    </header>
<section id="main-slider" class="main-slider ">