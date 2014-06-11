<div id="main">
<?php 
if ($delete == "yes")
	echo "Kontakt erfolgreich gel&ouml;scht";
else if ($delete == "no")
	echo "Kontakt ".$search." exisiterit nicht und kann somit nicht gel&ouml;scht werden"; 
else if ($exist != "")
	echo "Kontakt war schon vorhanden und wurde erfolgreich angepasst";
else if ($schemaFailed == "yes")
	echo "Daten stimmen nicht mit gew&uuml;nschter Form &uuml;berein, bitte in Anleitung nachlesen";
else if ($nofile == true)
	echo "Es wurde kein Wert angegeben";
else
	echo "Kontakt erfolgreich hinzugef&uuml;gt";
?>
<div style="position:absolute; bottom:0px; right:500px;">
	<a href="javascript:history.back()" style="color:#527DE5;">Zur&uuml;ck</a>
</div>
</div>