<div id="main">
<?php 
if ($delete == "yes")
	echo "Kontakt erfolgreich gel&ouml;scht";
else if ($exist != "")
	echo "Kontakt war schon vorhanden und wurde erfolgreich angepasst";
else if ($schemaFailed == "yes")
	echo "Daten stimmen nicht mit gew&uuml;nschter Form &uuml;berein, bitte in Anleitung nachlesen";
else
	echo "Kontakt erfolgreich hinzugef&uuml;gt";
?>
</div>