<?php
// On définit un login et un mot de passe de base pour tester notre exemple. Cependant, vous pouvez très bien interroger votre base de données afin de savoir si le visiteur qui se connecte est bien membre de votre site
$login_valide = "will";
$pwd_valide = "wi";

// on teste si nos variables sont définies
if (isset($_POST['login']) && isset($_POST['pwd'])) {

    if ($login_valide == $_POST['login'] && $pwd_valide == $_POST['pwd']) {

        session_start ();
        // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['pwd'] = $_POST['pwd'];

        // on redirige notre visiteur vers une page de notre section membre
        header ('./index.php?objet=authentification&action=verifierConnexion');
    }
    else {
        // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
        echo '<body onLoad="alert(\'Membre non reconnu...\')">';
        // puis on le redirige vers la page d'accueil
        echo '<meta http-equiv="refresh" content="0;URL=./index.php?objet=accueil&action=afficherPresentation">';
    }
}
else {
    echo 'Les variables du formulaire ne sont pas déclarées.';
}
?>