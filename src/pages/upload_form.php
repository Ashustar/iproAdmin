<?php


?>

<form class='center' name='update_form' method='post' enctype='multipart/form-data' action='index.php?page=upload'>
	<p>
		Bitte wähle eine MINIMAL und dann die normale Firmware Version aus!
	</p>
	<table border='0' cellspacing='0' class='center-table'>
		<tr>
			<td>
				MINIMAL Firmware:
			</td>
		</tr>
		<tr>
			<td>
				<input type='file' name='minimal_firmware'>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>
				Neue Firmware:
			</td>
		</tr>
		<tr>
			<td>
				<input type='file' name='new_firmware'>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>
				<button type='submit' class='btn' name='submit' value='submit'>Starte Upload</button>
			</td>
		</tr>
	</table>
</form>
