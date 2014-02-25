<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title></title>
</head>
<body>
<h1><?=$title?></h1>
<table>
	<tr>
		<td class="header">브랜드</td>
		<td class = "row"><?=$product->brand?></td>
	</tr>
	<tr>
		<td class="header">제품종류</td>
		<td class = "row"><?=$product->type?></td>
	</tr>
	<tr>
		<td class="header">제품ID</td>
		<td class = "row"><?=$product->product_id?></td>
	</tr>
	<tr>
		<td class="header">제품이름</td>
		<td class = "row"><?=$product->name?></td>
	</tr>
	<tr>
		<td class="header">추천제품</td>
		<td class = "row"><?=$product->recommand?></td>
	</tr>
	<tr>
		<td class="header">가격</td>
		<td class = "row"><?=$product->price?></td>
	</tr>
	<tr>
		<td class="header">세일</td>
		<?php if($product->sale == 1) { ?>
			<td class = "row">O</td>
		<? } ?>
		<?php if($product->sale == 0) { ?>	
			<td class = "row">X</td>
		<? } ?>
	</tr>
	<tr>
		<td class="header">노출</td>
		<?php if($product->post == 1) { ?>
			<td class = "row">O</td>
		<? } ?>
		<?php if($product->post == 0) { ?>
			<td class = "row">X</td>
		<? } ?>
	</tr>
	<tr>
		<td class="header">착용가능</td>
		<?php if($product->try == 1) { ?>
			<td class = "row">O</td>
		<? } ?>
		<?php if($product->try == 0) { ?>
			<td class = "row">X</td>
		<? } ?>
	</tr>
	<tr>
		<td class="header">Image-Thum</td>
		<td class = "imageview" ><img src="<?=base_url('www/upload/product') . '/' . $product->image_thum?>" width="200" height="200"></td>
	</tr>
	<tr>
		<td class="header">Image-Detail</td>
		<td class = "imageview"><img src="<?=base_url('www/upload/product') . '/' . $product->image_detail?>" width="200" height="200"></td>
	</tr>
	<tr>
		<td class="header">Image-Try1</td>
		<td class = "imageview"><img src="<?=base_url('www/upload/product') . '/' . $product->image_try1?>" width="200" height="200"></td>
	</tr>
	<tr>
		<td class="header">Image-Try2</td>
		<td class = "imageview"><img src="<?=base_url('www/upload/product') . '/' . $product->image_try2?>" width="200" height="200"></td>
	</tr>
	<tr>
		<td class="header">Video</td>
		<td class = "imageview">
			<video height="200" width="200">
				<source src="<?=base_url('www/upload/product') . '/' . $product->video?>" type="video/mp4">
			</video>
		</td>
	</tr>
</table>
</body>
</html>