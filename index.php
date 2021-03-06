<!DOCTYPE html>
<?php
	/*
	 * index.php
	 * Fidelity
	 * 
	 * Created by Richard Degenne on 30/12/2013. CC by-nc-sa.
	 * 
	 * Cette page sert de frame à Fidelity. Elle permet l'appel vers les autres modules du système et organise la frame principale de l'affichage.
	 */
?>

<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Fidelity</title>
	<!-- Feuilles de styles standard -->
	<link rel="stylesheet" href="Stylesheets/default.css">
	
	<!-- Scripts standard -->
	
	
	<!-- Désactivation du cache (DEBUG_ONLY) -->
	<META http-equiv="Cache-Control" content="no-cache"> 
	<META http-equiv="Pragma" content="no-cache"> 
	<META http-equiv="Expires" content="0">
</head>
<body>
<?php
	include_once("filenames.php"); // Inclusion des noms de fichier
	include_once($filename["db_functions"]); // Inclusion du fichier de fonctions base de données
	
	echo "\n<!-- HEADER -->\n";
	include_once($filename["header"]);
	echo "\n<!-- FIN HEADER -->\n";
	
	echo "\n<!-- BODY -->\n";
	if (isset($_GET["page"]))
	{
		switch($_GET["page"])
		{
			case "accueil":
				include_once($filename["accueil"]);
				break;
			
			case "aide":
				include_once($filename["aide"]);
				break;
			
			case "apropos":
				include_once($filename["apropos"]);
				break;
			
			case "caisse":
				include_once($filename["caisse"]);
				break;
			
			case "clients":
				include_once($filename["clients"]);
				break;
			
			case "mail":
				include_once($filename["mail"]);
				break;
			
			case "options":
				include_once($filename["options"]);
				break;
			
			case "reductions":
				include_once($filename["reductions"]);
				break;
			
			default:
				include_once($filename["accueil"]);
				break;
		}
	}
	else
	{
		include_once($filename["accueil"]);
	}
	echo "\n<!-- FIN BODY -->\n";
	
	echo "\n<!-- FOOTER -->\n";
	include_once($filename["footer"]);
	echo "\n<!-- FIN FOOTER -->\n";
?>

</body>
</html>
