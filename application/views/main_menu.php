<h1><?=$title?></h1>

<a href="<?=base_url("main/blank")?>" target="content">home</a>
<?
	$page = 1;
?>

<ul>
	<li><a href="<?=base_url("product_control/productAll")?>" target="content">상품관리</a></li><br>
	<!-- <li><a href="<?=base_url("product_control/productAll")?>" target="content">고객관리</a></li><br> -->
	<!-- <li><a href="<?=base_url("product_control/productAll")?>" target="content">주문관리</a></li><br> -->
</ul>

<br>

<br/>
<a href="<?=base_url("main/logout")?>" target="_parent">logout</a>

