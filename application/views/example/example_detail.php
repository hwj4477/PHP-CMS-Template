<h1><?=$title?></h1>
<table>
	<?php foreach($field as $fdata) { ?>
		<tr>
		<td class = "header"><?=$fdata->name?></td>
		<td class = "row"><?=$data[$fdata->name]?></td>
		</tr>
	<?php } ?>
</table>
