<div class="common">
<h1><?=$title?></h1>
<hr/>
<table class="table intra-table table-bordered">
	<?php foreach($field as $fdata) { ?>
		<tr>
		<th class="active" width="100px"><?=$fdata->name?></th>
		<td><?=$data[$fdata->name]?></td>
		</tr>
	<?php } ?>
</table>
</div>