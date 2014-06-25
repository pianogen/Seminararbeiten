<div id="main">
<?php if (!empty($_SESSION['user'])) {
	include_once 'view/logged_in.php'; 
} 
else { ?>
	<form action="index.php?ctrl=login&action=login" method="POST">
		<table>
			<tr>
				<td>Benutzername:</td>
				<td><input type="text" name="user"></td>
			</tr>
			<tr>
				<td>Passwort:</td>
				<td><input type="password" name="pw"></td>
			</tr>
			<tr>
				<th colspan="2" align="right">
					<input type="submit" value="Anmelden">
				</th>
			</tr>
		<table>
	</form>
<?php } ?>
</div>