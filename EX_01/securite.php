<?php


if ($_POST['Password']=='2020')
{   
    session_start(); 
    $_SESSION['id']=$_POST['Login'];
    echo "<p>Vous allez être redirigé vers la page d'accueil.</p>";
    echo "<p><a href='http://localhost/ISCC/ISCC-2020-J09/EX_01/mini-site-routing.php?page=1'>Revenir à l'accueil</a></p>";

    setcookie('id', $_SESSION['id'], time() + 365*24*3600, null, null, false, true);
}
elseif($_POST['Password'] !='2020')
{
    echo "<h1>Mauvais couple identifiant/mot de passe</h1>";
    echo "<p>Vous allez être redirigé vers la page de connexion.</p>";
    echo "<p><a href='http://localhost/ISCC/ISCC-2020-J09/EX_01/connexion.php?page=connexion'>Revenir au formulaire.</a></p>";
}


?>


