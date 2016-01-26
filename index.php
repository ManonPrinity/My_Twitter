<?php
include('controleur/class/userClss.php');

?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8" />
    <link rel="stylesheet" href="vue/css/style2.css" />
    <title>My Twitter</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript" src="script/script.js"></script>
</head>
<body>
	<HEADER>
		<img id="logo" src="images/logo.png"/>
		<h1>My Twitter</h1>
	</HEADER>

    <div id="page">
    	<p>Bienvenue !</p>
    	<div id="mur">
            <div id="mur-content">
                ICI PHP 
            </div>
            <div id='ConnectPage'>
                <form method="post" action="">
                    <label> Nom d'utilisateur</label> <input type="text" name="username"/>
                    <label>Mot de Passe</label> <input type='password' name="password"/>
                </form>
                <a href='' class="return">Retour au mur</a>
            </div>
            <div id="inscriptPage">
                <form id="inscriptForm" method="post" action="">
                    <label> Nom d'utilisateur</label> <input type="text" name="username" id='insusername' required/>
                    <label> Prenom</label> <input type="text" name="prenom" id='insprenom' required/>
                    <label> Nom</label> <input type="text" name="nom" id='insnom' required/>
                    <label> Date de Naissance</label> <input type="date" name="birthdate" id='insdate' required/>
                    <label> Adresse E-Mail</label> <input type="email" name="email" id='insmail' required/>
                    <label>Mot de Passe</label> <input type='password' name="password" id='insmdp' required/>
                    <label> Confirmation du mot de Passe</label> <input type="password" name="confpass" id='insconfmdp' required/>
                    <input type="submit" value="Envoyer"/>
                </form>
                <a href='' class="return">Retour au mur</a>
            </div>
        </div>
    </div>

    <aside id="leftAside">
        <div id="firstButton">
            <a id="connect" href="connexion.php">Connection</a>
            <p>ou</p>
            <a id="inscript" href="Inscription.php">Inscription</a>
        </div>
    </aside>

     <aside id="rightAside">
     </aside>

</body>
</html>
