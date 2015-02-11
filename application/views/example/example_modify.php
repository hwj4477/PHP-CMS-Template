<div class="common">
<h1><?=$title?></h1>
<hr/>
<?
	echo form_open_multipart("/" . $class . "/update/" . $data['id']);
?>
<table class="table intra-table table-bordered">
	<? foreach($field as $fdata) 
	{ 
		if($fdata->name != 'id')
		{
	?>
		<tr>
		<th class="active" width="100px"><?=$fdata->name?></th>
		<td><?=form_input($fdata->name, $data[$fdata->name])?></td>
		</tr>
	<?
		}
	 } 
	 ?>
</table>
<br/>
<button type="submit" class="btn btn-default">Save</button>
<?
	echo form_close();
?>
</div>
