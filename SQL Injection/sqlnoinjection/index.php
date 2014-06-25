<?php
session_start();
include_once 'class.resolver.php';
$resolver = new resolver();
if ($_GET['ctrl'] === "search"){
	$title = " - Suche";
}
if ($_GET['ctrl'] === "update"){
	$title = " - Verwaltung der Kontakte";
}
?>
<html>
	<head>
		<title>Seminar - SQL Injection</title>
		<script language="JavaScript" type="text/JavaScript">
			function popup(){
				window.open("c:/styles/");
			}
		</script>
		<style type="text/css">
		<!-- 
		 #nav { float: left; width: 200px; height: 800px; position:absolute; top:0px; left:0px; background:#527DE5; background-size:100%; font-family:helvetica;}
		 #content { float: left; width:1000px; position:absolute; top:0px; left:200px; font-family:helvetica; padding: 120px 0px 0px 10px; }
		 #header { float: left; background: #527DE5; color:white; top:0px; left:200px; position:absolute; width:1200px;  height:100px; vertical-align: middle;}
		 #body { font-family: arial; }
		 #error { visibility:hidden; color: red; font-size: 12px; float: left; position:absolute; left: 10px; top:252px; display:inline; }
		 #error_add { visibility: hidden; color: red; font-size: 12px; display:inline; }
		 #separate { text-align: right; font-size: 12px; }
		 #main { padding: 0px 0px 20px 0px; float:left; }
		 #divresult { border-top:1px solid #527DE5; border-left:1px solid #527DE5; padding:20px 100px 20px 0px; float:left; }
		 h1 { font-family: arial; }
		 .input { border: 1px solid #527DE5;}
		 .colspan { text-align: left; }
		 
		 table.result {border-collapse:collapse; padding:10px; } 
		 td.result { padding: 10px; }
		 .button { display: block; width: 115px; height: 25px; background: #4E9CAF; padding: 10px; text-align: center; border-radius: 5px; color: white; font-weight: bold;}
		 a { color:white; text-decoration:none; padding: 20px 0px 0px 10px; }
		 -->
		 </style>
	</head>
	<body>
	<div>
		<div id="nav">
			<div style="padding: 100px 0px 0px 10px;">
				<a href="index.php?ctrl=login&action=show">Anmelden</a>
			</div>
			<div style="padding: 20px 0px 0px 10px;">
				<a href="index.php?ctrl=liste&action=show">Liste anzeigen</a>
			</div>
		</div>
		<div id="header">
			<h1>Seminar - SQL Injection<?php if (isset($title)){ echo $title; }?></h1>
		</div>
		<div id="content">
			<?php
				if(!isset($_GET['ctrl']))
					include_once 'view/start.php';
				else
					$resolver->handleRequest(); ?>
		</div>
	</div>
	</body>
</html>
		