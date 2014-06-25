<div id="main">
<table class="result">
<?php if (!empty($_SESSION['user'])) { ?>
	<form action="index.php?ctrl=login&action=logoff" method="POST">
		<tr>
			<td class="result">Sie sind als <?php echo $_SESSION['user']; ?> angemeldet.</td>
		</tr>
		<tr>
			<td class="result" align="right"><input type="submit" value="Logoff"></td>
		</tr>
		<tr>
			<td class="result"><?php echo $_SESSION['sql']; ?></td>
		</tr>
	</form>
<?php
}
else { ?>
		<tr>
			<td class="result">Benutzername oder Passwort falsch</td>
		</tr>
		<tr>
			<td class="result"><?php echo $_SESSION['sql']; ?></td>
		</tr>
<?php } ?>
</table>
</div>