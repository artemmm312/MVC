<h2>Люди:</h2>

<div>
	<table border='1' cellspacing='0' width='50%'>
		<tr>
			<th>Id</th>
			<th>Name</th>
		</tr>
		<?php
		foreach ($data as $key => $value) {
			echo "<tr>";
			foreach ($value as $data)
				echo "<td>" . $data . "</td>";
			echo "</tr>";
		}?>
	</table>
</div>