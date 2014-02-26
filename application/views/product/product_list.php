<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
<script>

function productDelete(_id)
{
	if (confirm("해당 항목이 삭제됩니다.")){
		location.href='<?=base_url()?>product_control/productDelete/' + _id;
		alert("삭제 되었습니다.");
	}else{
		alert("취소 되었습니다.");
	}
}

</script>
</head>
<div align="center"><h1><?=$title?></h1></div>
<div align = "right"><input type = button value="등록" onclick="location.href='<?=base_url()?>product_control/productRegister/';"></div>
<br>
<div align="center">
<table class = "list">
<tr>
	<?php foreach($field as $fdata) { ?>
		<td class = "header"><?=$fdata->name?></td>
	<?php } ?>
	
	<td class = "header">확인</td>
	<td class = "header">수정</td>
	<td class = "header">삭제</td>
	
</tr>
	<?php foreach($product as $pcd) { ?>
		
		<tr>
		<?php foreach($field as $fdata) { ?>
			<td class = "row"><?=$pcd[$fdata->name]?></td>
		<?php } ?>
		
		<td class = "row"><input type = button value="확인" onclick="location.href='<?=base_url()?>product_control/productDetail/<?=$pcd['id']?>';"></td>
		<td class = "row"><input type = button value="수정" onclick="location.href='<?=base_url()?>product_control/productModify/<?=$pcd['id']?>';"></td>
		<td class = "row"><input type = button value="삭제" onclick="productDelete(<?= $pcd['id']?>);"></td>
		</tr>
		
	<?php } ?>
</table>
