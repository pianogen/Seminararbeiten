<table>
	<?php 
	foreach ($result as $key=>$value)
	{ 
		if ($value !== "") {?>
			<tr>
				<td>
					<?php print "<b>".ucfirst($key).":</b>"; ?>
				</td>
				<td>
					<?php print $value; ?>
				</td>
			</tr>
	<?php
		}
	} ?>
</table>