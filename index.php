<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8" />
    <link rel="stylesheet" href="vue/css/style.css" />
    <title>My Twitter</title>
</head>
<body>
	<HEADER>
		<img id="logo" src="images/logo.png"/>
		<h1>My Twitter</h1>
	</HEADER>

    <div id="page">
    	<p>Bienvenue !</p>
    	<div id="mur">
    	</div>
    </div>

	<aside id="leftAside">
		<div id="firstButton">
			<input id="connectButton" type="button" value="Connection" onclick="class/Bdd.php"/>
			<p>ou</p>
			<input id="inscriptionButton" type="button" value="Inscription" onclick="class/userClss.php"/>
		</div>
    </aside>

     <aside id="rightAside">
     </aside>

</body>
</html>
