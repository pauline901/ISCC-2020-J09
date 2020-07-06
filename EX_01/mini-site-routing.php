<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>mini-site-routing</title>
</head>

<body>
    <h2>NAVIGATION </h2>
    <nav class="menu">
        <li><a href="mini-site-routing.php?page=1">Accueil</a></li><br/>
        <li><a href="mini-site-routing.php?page=2">Page 1</a></li><br/>
        <li><a href="mini-site-routing.php?page=3">Page 2</a></li><br/>
        <li><a href="connexion.php?page=connexion">Connexion</a></li><br/>
        <li><a href="admin.php?page=admin">Admin</a></li><br/>
    </nav>

    <?php
    if($_GET)
    {
    if($_GET["page"]== "1")
    {
        echo "<h1>Accueil !</h1>";
    }
    if($_GET["page"]== "2")
    {
        echo "<h1>Page 2 !</h1>";
    }
    if($_GET["page"]== "3")
    {
        echo "<h1>Page 3 !</h1>";
    }
    if($_GET["page"]== "connexion")
    {
        echo "<h1>Connexion</h1>";
    }
    if($_GET["page"]== "admin")
    {
        echo "<h1>Admin</h1>";
    }
    }
   

    ?>

</body>
<footer>
<?php

session_start();


if(isset($_SESSION["id"]))
{
    echo '<p>Login : ' .$_SESSION["id"]. '</p>';
}



if ($_COOKIE['id'])
{
    echo $_COOKIE['id'];
}
else 
{
    echo "<p><a href='http://localhost/ISCC/ISCC-2020-J09/EX_01/connexion.php?page=connexion'>Revenir au formulaire.</a></p>";
}
?>
</footer>


</html>