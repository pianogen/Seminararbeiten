<div id="main">
<form action="index.php?ctrl=basex&action=modify" method="POST" name="search">
<table class="input">
	<tr>
		<th colspan="2" align="left">
			Neuen Kontakt hinzufügen
		</th>
	</tr>
	<tr>
		<td>
			<b>Firmenname: </b>
		</td>
		<td>
			<input type="text" size="50" name="name" class="input">
		</td>
	</tr>
	<tr>
		<td>
			<b>Kürzel: </b>
		</td>
		<td>
			<input type="text" size="3" name="code" class="input">
		</td>
	</tr>
	<tr>
		<td>
			<b>Person: </b>
		</td>
		<td>
			<input type="text" size="50" name="person" class="input">
		</td>
	</tr>
	<tr>
		<td>
			<b>Strasse: </b>
		</td>
		<td>
			<input type="text" size="50" name="street" class="input">
		</td>
	</tr>
	<tr>
		<td>
			<b>PLZ: </b>
		</td>
		<td>
			<input type="text" size="4" name="plz" class="input">
		</td>
	</tr>
	<tr>
		<td>
			<b>Stadt: </b>
		</td>
		<td>
			<input type="text" size="50" name="city" class="input">
		</td>
	</tr>
	<tr>
		<td>
			<b>Mail: </b>
		</td>
		<td>
			<input type="text" size="50" name="mail" class="input">
		</td>
	</tr>
	<tr>
		<td>
			<b>Telefonnr.: </b>
		</td>
		<td>
			<input type="text" size="11" name="number" class="input">
		</td>
	</tr>
	<tr>
		<td>
			<b>Provider: </b>
		</td>
		<td>
			<input type="text" size="20" name="provider" class="input">
		</td>
	</tr>
	<tr>
		<th colspan="2" align="right">
			<input type="submit" value="Speichern">
		</th>
	</tr>
</table>
</form>
<form action="index.php?ctrl=basex&action=add" method="POST" name="add">
<table class="input">
	<tr>
		<th colspan="2" align="left">
			Vorhandene Datei hinzufügen/ersetzen
		</th>
	</tr>
	<tr>
		<td>
			<b>Dateiname: </b>
		</td>
		<td>
			<input name="Datei" type="file" size="32" maxlength="100000" accept="text/*" class="input">
		</td>
	</tr>
	<tr>
		<th colspan="2" align="right">
			<input type="submit" value="Hochladen">
		</th>
	</tr>
</table>
</form>
<form action="index.php?ctrl=basex&action=delete" method="POST" name="delete">
<table class="input">
	<tr>
		<th colspan="2" align="left">
			Kontakt löschen
		</th>
	</tr>
	<tr>
		<td>
			<b>Name/Kürzel:</b>
		</td>
		<td>
			<input type="text" size="50" name="titel" class="input">
		</td>
	</tr>
	<tr>
		<th colspan="2" align="right">
			<input type="submit" value="L&ouml;schen">
		</th>
	</tr>
</table>
</form>
</div>