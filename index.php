<html>
<head>
<style>
input[type="text"] {
	font-size: 24px;
	border: 1px outset yellow;
}

span {
	color: silver;
	font-family: arial, sans-serif;
	font-size: 20px;
}
</style>
<title>Générateur</title>
<body bgcolor="black"><center>

<img src="gener.php?l1=Manjaro&l2=Arch%20derived&l3=0000-1234-0102" /> <br />

<form method="get" action="gener.php">
    <p><br />
        <input type="text" name="l1" id="l1" placeholder="Nom de la ville ou du joueur (l. 1)" size="30" maxlength="100" />
		<input type="text" name="l2" id="l2" placeholder="Nom de la ville ou du joueur (l. 2)" size="30" maxlength="100" />
		<input type="text" name="l3" id="l3" placeholder="Code ami/code onirique" size="30" maxlength="100" />
		<br /><br />
		<input type="submit" value="C'est parti !" size="30" />
    </p>
	<br />
</form>
<span>
<i>Vous pouvez ainsi copier l'URL de l'image obtenue pour vous en servir où bon vous semble, voire enregistrer l'image !</i><br />
</span>
</head></center></body>
</html>