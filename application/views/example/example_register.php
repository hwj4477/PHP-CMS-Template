<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title></title>
</head>
<body>
<h1><?=$title?></h1>
<?
	echo form_open_multipart("/example_control/exampleInsert/");
?>
<table>
	<? foreach($field as $fdata) 
	{ 
		if($fdata->name != 'id')
		{
	?>
		<tr>
		<td class = "header"><?=$fdata->name?></td>
		<td class = "row"><?=form_input($fdata->name, '')?></td>
		</tr>
	<?
		}
	 } 
	 ?>
</table>
<br/>
<?
	echo form_submit("", "Register");
	echo form_close();
?>
</body>
</html>