<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title><?php echo $titre ?></title>
        <style type="text/css">
            @import url("css/base.css");
            @import url("css/form.css");
            @import url("css/corps.css");
        </style>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    </head>
    <body>
    <nav>
            
            <ul id="menuGeneral">
                <li><a href="./index.php?objet=accueil&action=afficherPresentation">Accueil</a></li>
                <li><a href="./index.php?objet=reservation"><img src="images/reserver.png" alt="calendrier" /> Reservation </a></li>
                <li><a href="./index.php?objet=accueil&action=afficherPlans">Notre installation</a></li>
                <li id="logo"><a href="./index.php?objet=accueil&action=afficherPresentation"><img src="images/sport.png" alt="logo" /></a></li>
                <li><a href="./index.php?objet=Contact&action=afficherContact">Contact</a></li>
                <li><a href="./index.php?objet=authentification&action=afficherConnexion">Connexion</a></li>

            </ul>
    </nav>
    <div id="bouton">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <ul id="menuContextuel">
        <li><img src="images/menu.png" alt="logo" /></li>
        <?php if (isset($menuBurger)) { ?>
            <?php for ($i = 0; $i < count($menuBurger); $i++) { ?>
                <li>
                    <a href="<?php echo $menuBurger[$i]['url']; ?>">
                        <?php echo $menuBurger[$i]['label']; ?>
                    </a>
                </li>
            <?php } ?>
        <?php } ?>
    </ul>

    <div id="corps">