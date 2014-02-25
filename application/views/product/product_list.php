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
	<td class = "header">No</td>
	<td class = "header">브랜드</td>
	<td class = "header">제품종류</td>
	<td class = "header">제품ID</td>	
	<td class = "header">제품명</td>
	<td class = "header">가격</td>
	<td class = "header">세일</td>
	<td class = "header">노출</td>
	<td class = "header">착용</td>
	<td class = "header">확인</td>
	<td class = "header">수정</td>
	<td class = "header">삭제</td>
</tr>
	<?php foreach($product as $pcd) { ?>
		<tr>
		<td class = "row"><?=$pcd->id?></td>
		<td class = "row"><?=$pcd->brand?></td>
		<td class = "row"><?=$pcd->type?></td>
		<td class = "row"><?=$pcd->product_id?></td>
		<td class = "row"><?=$pcd->name?></td>
		<td class = "row"><?=$pcd->price?></td>
		<?php if($pcd->sale == 1):?>
			<td class = "enable">O</td>
		<?php elseif($pcd->sale == 0):?>
			<td class = "disable">X</td>
		<?php endif?>
		
		<?php if($pcd->post == 1):?>
			<td class = "enable">O</td>
		<?php elseif($pcd->post == 0):?>
			<td class = "disable">X</td>
		<?php endif?>
		
		<?php if($pcd->try == 1):?>
			<td class = "enable">O</td>
		<?php elseif($pcd->try == 0):?>
			<td class = "disable">X</td>
		<?php endif?>
		<td class = "row"><input type = button value="확인" onclick="location.href='<?=base_url()?>product_control/productDetail/<?=$pcd->id?>';"></td>
		<td class = "row"><input type = button value="수정" onclick="location.href='<?=base_url()?>product_control/productModify/<?=$pcd->id?>';"></td>
		<td class = "row"><input type = button value="삭제" onclick="productDelete(<?= $pcd->id?>);"></td>
		</tr>
	<?php } ?>
</table>
