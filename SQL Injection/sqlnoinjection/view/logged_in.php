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
	</form>
<?php
}
else { ?>
		<tr>
			<th colspan="2" class="result">Benutzername oder Passwort falsch</td>
		</tr>
		<tr>
			<td class="result" align="right">	
				<a href="index.php?ctrl=login&action=show" style="color:black;">
					Z&uuml;ruck
				</a>
			</td>
		</tr>
<?php } ?>
</table>
</div>