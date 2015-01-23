<head>
<script>

function exampleDelete(_id)
{
	if (confirm("Delete")){
		location.href='/example_control/exampleDelete/' + _id;
		alert("Completed");
	}else{
		alert("Canceled");
	}
}

</script>
</head>
<div align="center"><h1><?=$title?></h1></div>
<div align = "right"><input type = button value="Register" onclick="location.href='/example_control/exampleRegister/';"></div>
<br>
<div align="center">
<table class = "list">
<tr>
	<?php foreach($field as $fdata) { ?>
		<td class = "header"><?=$fdata->name?></td>
	<?php } ?>
	
	<td class = "header">Detail</td>
	<td class = "header">Modify</td>
	<td class = "header">Delete</td>
	
</tr>
	<?php foreach($data as $data_row) { ?>
		
		<tr>
		<?php foreach($field as $fdata) { ?>
			<td class = "row"><?=$data_row[$fdata->name]?></td>
		<?php } ?>
		
		<td class = "row"><input type = button value="Detail" onclick="location.href='/example_control/exampleDetail/<?=$data_row['id']?>';"></td>
		<td class = "row"><input type = button value="Modify" onclick="location.href='/example_control/exampleModify/<?=$data_row['id']?>';"></td>
		<td class = "row"><input type = button value="Delete" onclick="exampleDelete(<?= $data_row['id']?>);"></td>
		</tr>
		
	<?php } ?>
</table>
