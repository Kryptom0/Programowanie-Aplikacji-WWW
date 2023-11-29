<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="Author" content="Krystian Drząszcz" />
    <title>Strona główna</title>
    <script src="js/kolorujtlo.js" type="text/javascript"></script>
    <script src ="js/timedate.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
    </style>
</head>
<body onload="startclock()">
        <table style="width:100%">
        <tr>
		<td><a href="index.php">Strona Główna</a></td>
		<td><a href="?idp=podstrona1">Ranking</a></td>
		<td><a href="?idp=podstrona2">Galeria</a></td>
		<td><a href="?idp=podstrona3">Informacje</a></td>
		<td><a href="?idp=podstrona4">Kontakt</a></td>
		<td><a href="?idp=podstrona6">Filmy</a></td>
        </tr>
    </table>

<?php
    include("cfg.php")
	error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
	if($_GET['idp'] == '' && file_exists('html/stronax.html'))$strona = 'html/stronax.html';
	if($_GET['idp'] == 'podstrona1' && file_exists('html/strona2.html'))$strona = 'html/strona2.html';
	if($_GET['idp'] == 'podstrona2' && file_exists('html/strona3.html'))$strona = 'html/strona3.html';
	if($_GET['idp'] == 'podstrona3' && file_exists('html/strona4.html'))$strona = 'html/strona4.html';
	if($_GET['idp'] == 'podstrona4' && file_exists('html/strona5.html'))$strona = 'html/strona5.html';
	if($_GET['idp'] == 'podstrona6' && file_exists('html/filmy.html')) $strona = 'html/filmy.html';

	include($strona);
?>
<p style="text-align: center; padding: 10px;">
<?php
    $nr_indeksu = '164361';
    $nrGrupy = '1 ISI';
	echo 'Krystian Drząszcz '.$nr_indeksu.' grupa '.$nrGrupy;
?>
</p>
</body>
</html>


