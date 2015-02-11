<div class="common">
<h1><?=$title?></h1>
<hr/>
<?
	echo form_open_multipart("/" . $class . "/insert/");
?>
<table class="table intra-table table-bordered">
	<? foreach($field as $fdata) 
	{ 
		if($fdata->name != 'id')
		{
	?>
		<tr>
		<th class="active" width="100px"><?=$fdata->name?></th>
		<td><?=form_input($fdata->name, '')?></td>
		</tr>
	<?
		}
	 } 
	 ?>
</table>
<br/>
<button type="submit" class="btn btn-default">Register</button>
<?
	echo form_close();
?>
</div>

