<div id="main">
<table class="result">
<form action="index.php?ctrl=liste&action=show" method=POST>
<tr>
	<th colspan="2" class="result">
		<input type="text" size="100" name="search">
	</th>
	<td class="result">
		<input type="submit" value="Senden">
	</td>
</tr>
</table>
<table>
</form>
<?php if (!empty($liste)) {?>
	<tr>
		<td class="result"><b>Titel</b></td>
		<td class="result"><b>Hersteller</b></td>
		<td class="result"><b>Launch</b></td>
	</tr>
<?php 
$i = 0;
foreach ($liste as $game) {
if ($i%2==0){?>
	<tr style=color:#527DE5;">
<?php }
 else { ?>
<tr style="background: #527DE5; color:white;">
<?php  }
	echo "<td class='result'>".$game['titel']."</td>
			<td class='result'>".$game['hersteller']."</td>
			<td class='result'>".$game['launch']."</td>
		  </tr>";
		  $i = $i + 1;
		  } 
		}
		else { ?>
			<td class="result">Keine Videospiel mit diesem Inhalt gefunden innerhalb der Sammlung</td></td>
<?php	} ?>
		</table>
</div>