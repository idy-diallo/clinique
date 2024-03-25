<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../medecin/main.css" rel="stylesheet">
    <link rel="stylesheet" href="../../medecin/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	 <!-- login page -->
		<!-- Font Icon -->
		<link rel="stylesheet" href="/public/logincss/fonts/material-icon/css/material-design-iconic-font.min.css">

		<!-- Main css css/style.css-->
		<link rel="stylesheet" href="/public/logincss/css/style.css">
	<!-- login page -->
	<title>{{ env('APP_NAME') }}</title>
    <style>
		table, td, a {
			color: #000;
			font: normal normal 12px Verdana, Geneva, Arial, Helvetica, sans-serif
        }
		/* définir la hauteur et la largeur de la zone de défilement. Ajouter 16px à la largeur de la barre de défilement */
		div.tableContainer {
			clear: both;
			border: 1px solid #963;
			height: 200px;
			overflow: auto;
			width: 900px
		}

		/* Réinitialise la valeur de débordement sur masqué pour tous les navigateurs non-IE. */
		html>body div.tableContainer {
			overflow: hidden;
			width: 900px;
		}

		/* définit la largeur du tableau. Navigateurs IE uniquement */
		div.tableContainer table {
			float: left;
			width: 900px;
			border-collapse: collapse;
			height: 900px;
		}

		/* définit la largeur du tableau. Ajoutez 16 pixels à la largeur de la barre de défilement. */
		/* Tous les autres navigateurs non-IE. */
		html>body div.tableContainer table {
			width: 900px;
			
		}

		/* définit l'en-tête du tableau à une position fixe. WinIE 6.x uniquement */
		/* Dans WinIE 6.x, tout élément avec une propriété de position définie sur relative et est un enfant de */
		/* un élément qui a une propriété de débordement définie, la valeur relative se traduit par fixe. */
		/* Ex : l'élément parent DIV avec une classe de tableContainer a une propriété de débordement définie sur auto */
		thead.fixedHeader tr {
			position: relative
		}

		/* définit l'élément THEAD pour qu'il ait des attributs de niveau bloc. Tous les autres navigateurs non IE */
		/* cela permet au débordement de fonctionner sur l'élément TBODY. Tous les autres navigateurs non-IE, non-Mozilla */
		html>body thead.fixedHeader tr {
			display: block
		}

		/* rendre les éléments TH jolis */
		thead.fixedHeader th {
			background: rgb(174, 214, 241);
			border-left: 1px solid #EB8;
			border-right: 1px solid #B74;
			border-top: 1px solid #EB8;
			font-weight: normal;
			padding: 4px 3px;
			text-align: left
		}


		/* rend les éléments A jolis. fait de beaux en-têtes cliquables */
		thead.fixedHeader a, thead.fixedHeader a:link, thead.fixedHeader a:visited {
			color: rgb(4, 14, 3);
			display: block;
			text-decoration: none;
			width: 100%;
		}

		/* définir le contenu du tableau pour qu'il soit défilable */
		/* définit l'élément TBODY pour qu'il ait des attributs de niveau bloc. Tous les autres navigateurs non IE */
		/* cela permet au débordement de fonctionner sur l'élément TBODY. Tous les autres navigateurs non-IE, non-Mozilla */
		/* l'effet secondaire induit est que les TD enfants n'acceptent plus width: auto */
		html>body tbody.scrollContent {
			display: block;
			height: 300px;
			overflow: auto;
			width: 100%
        }

		/* rend les éléments TD jolis. Prévoir des classes alternées pour le striping de la table */
		tbody.scrollContent td, tbody.scrollContent tr.normalRow td {
			background: #FFF;
			border-bottom: none;
			border-left: none;
			border-right: 1px solid #CCC;
			border-top: 1px solid #DDD;
			padding: 2px 10px 3px 4px
		}

		tbody.scrollContent tr.alternateRow td {
			background: #EEE;
			border-bottom: none;
			border-left: none;
			border-right: 1px solid #CCC;
			border-top: 1px solid #DDD;
			padding: 2px 3px 3px 4px
		}

		/* définit la largeur des éléments TH : 1er, 2e et 3e respectivement. */
		/* Ajouter 16px au dernier TH pour le rembourrage de la barre de défilement. Tous les autres navigateurs non-IE. */
		html>body thead.fixedHeader th {
			width: 355px;
			height: 40;
		}

		html>body thead.fixedHeader th + th {
			width: 492px
		}

		html>body thead.fixedHeader th + th + th {
			width: 745px
		}

		html>body thead.fixedHeader th + th + th + th{
			width: 645px
		}

		html>body thead.fixedHeader th + th + th + th + th{
			width: 860px
		}


		/* définit la largeur des éléments TD : 1er, 2e et 3e respectivement. */
		/* Tous les autres navigateurs non-IE. */
		html>body tbody.scrollContent td {
			width: 373px;
		}

		html>body tbody.scrollContent td + td {
			width: 349px
		}

		html>body tbody.scrollContent td + td + td {
			width: 493px
		}

		html>body tbody.scrollContent td + td + td + td{
			width: 490px
		}

		html>body tbody.scrollContent td + td + td + td + td{
			width: 510px
		}
    </style>
  </head>
  <body>

    
    <script type="text/javascript" src="../medecin/js/scripts/main.js"></script></body>
	<script src="/public/logincss/vendor/jquery/jquery.min.js"></script>
    <script src="/public/logincss/js/main.js"></script>
  </body>
</html>