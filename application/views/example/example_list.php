<head>
<script>

function exampleDelete(_id)
{
	if (confirm("Delete")){
		location.href='/<?=$class?>/delete/' + _id;
		alert("Completed");
	}else{
		alert("Canceled");
	}
}

</script>
</head>
<div class="common">
<div align="center"><h1><?=$title?></h1></div>
<hr/>
<div align = "right"><input type = "button" value="Register" class="btn btn-primary" onclick="location.href='/<?=$class?>/register/';"></div>
<br>
<div align="center">
<table class="table common-table table-bordered">
<tr class="active">
	<?php foreach($field as $fdata) { ?>
		<th><p class="text-center"><?=$fdata->name?></p></th>
	<?php } ?>
	
	<th><p class="text-center">Detail</p></th>
	<th><p class="text-center">Modify</p></th>
	<th><p class="text-center">Delete</p></th>
	
</tr>
	<?php foreach($data as $data_row) { ?>
		
		<tr>
		<?php foreach($field as $fdata) { ?>
			<td><p class="text-center"><?=$data_row[$fdata->name]?></p></td>
		<?php } ?>
		
		<td><p class="text-center"><input type = "button" class="btn btn-primary" value="Detail" onclick="location.href='/<?=$class?>/detail/<?=$data_row['id']?>';"></p></td>
		<td><p class="text-center"><input type = "button" class="btn btn-primary" value="Modify" onclick="location.href='/<?=$class?>/modify/<?=$data_row['id']?>';"></p></td>
		<td><p class="text-center"><input type = "button" class="btn btn-primary" value="Delete" onclick="exampleDelete(<?= $data_row['id']?>);"></p></td>
		</tr>
		
	<?php } ?>
</table>
</div>