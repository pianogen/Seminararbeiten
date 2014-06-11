<table>
	<?php 
	foreach ($test as $contacts) {
		foreach ($contacts->attributes() as $name=>$value) {
			if ($name == "name") {
				echo "<tr><th colspan='2' style='font-size: 20pt; align:left;'>".$value."</th></tr>";
			}
			if ($name == "code") {
				echo "<tr><td><b>Code: </b></td>
						<td>".$value."</td></tr>";
			}
		}
		foreach ($contacts->children() as $contact)
		{
			echo "<tr><td><b>".ucfirst($contact->getName()).": </b></td>
					<td>".$contact."</td></tr>";
		}
	}
	?> 
</table>