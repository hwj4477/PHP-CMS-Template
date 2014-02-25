<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="<?php echo site_url() ?>www/js/uploadify/uploadify.css" />
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="<?php echo site_url() ?>www/js/uploadify/jquery.uploadify-3.1.min.js"></script>
  <script type='text/javascript' >
  $(function() {
   $('#upload_img_thum').uploadify({
    'swf'   : '<?php echo site_url() ?>www/js/uploadify/uploadify.swf',
    'uploader'  : '<?php echo site_url('product_control/uploadify')?>',
    'cancelImage' : '<?php echo site_url() ?>www/js/uploadify/uploadify-cancel.png',
    'buttonClass'  : 'button',
    'buttonText' : "Upload Files",
    'multi'   : false,
    'auto'   : true,

    'formData'  : {'sessdata' : '<?php echo $this->session->get_encrypted_sessdata()?>', 'filename' : ''},
    'method'  : 'post',
    'fileObjName' : 'userfile',

    'queueSizeLimit': 40,
    'simUploadLimit': 2,
    'sizeLimit'  : 10240000,
	'onUploadStart' : function(file) {
	                $("#upload_img_thum").uploadify("settings", 'formData', {'filename' : 'p_' + $('input[name=product_id]').val() + '_img_thum'});
	        },
  	'onUploadComplete' : function(file) {

	  			$('#imagethum').text(file.name);
				$('input[name=image_thum]').val('p_' + $('input[name=product_id]').val() + '_img_thum.png');
       		}
      });
   });
   
   $(function() {
    $('#upload_img_detail').uploadify({
     'swf'   : '<?php echo site_url() ?>www/js/uploadify/uploadify.swf',
     'uploader'  : '<?php echo site_url('product_control/uploadify')?>',
     'cancelImage' : '<?php echo site_url() ?>www/js/uploadify/uploadify-cancel.png',
     'buttonClass'  : 'button',
     'buttonText' : "Upload Files",
     'multi'   : false,
     'auto'   : true,

     'formData'  : {'sessdata' : '<?php echo $this->session->get_encrypted_sessdata()?>', 'filename' : ''},
     'method'  : 'post',
     'fileObjName' : 'userfile',

     'queueSizeLimit': 40,
     'simUploadLimit': 2,
     'sizeLimit'  : 10240000,
 	'onUploadStart' : function(file) {
 	                $("#upload_img_detail").uploadify("settings", 'formData', {'filename' : 'p_' + $('input[name=product_id]').val() + '_img_detail'});
 	        },
   	'onUploadComplete' : function(file) {

 	  			$('#imagedetail').text(file.name);
 				$('input[name=image_detail]').val('p_' + $('input[name=product_id]').val() + '_img_detail.png');
        		}
       });
    });
	
    $(function() {
     $('#upload_img_try1').uploadify({
      'swf'   : '<?php echo site_url() ?>www/js/uploadify/uploadify.swf',
      'uploader'  : '<?php echo site_url('product_control/uploadify')?>',
      'cancelImage' : '<?php echo site_url() ?>www/js/uploadify/uploadify-cancel.png',
      'buttonClass'  : 'button',
      'buttonText' : "Upload Files",
      'multi'   : false,
      'auto'   : true,

      'formData'  : {'sessdata' : '<?php echo $this->session->get_encrypted_sessdata()?>', 'filename' : ''},
      'method'  : 'post',
      'fileObjName' : 'userfile',

      'queueSizeLimit': 40,
      'simUploadLimit': 2,
      'sizeLimit'  : 10240000,
  	'onUploadStart' : function(file) {
  	                $("#upload_img_try1").uploadify("settings", 'formData', {'filename' : 'p_' + $('input[name=product_id]').val() + '_img_try1'});
  	        },
    	'onUploadComplete' : function(file) {

  	  			$('#imagetry1').text(file.name);
  				$('input[name=image_try1]').val('p_' + $('input[name=product_id]').val() + '_img_try1.png');
         		}
        });
     });
	 
     $(function() {
      $('#upload_img_try2').uploadify({
       'swf'   : '<?php echo site_url() ?>www/js/uploadify/uploadify.swf',
       'uploader'  : '<?php echo site_url('product_control/uploadify')?>',
       'cancelImage' : '<?php echo site_url() ?>www/js/uploadify/uploadify-cancel.png',
       'buttonClass'  : 'button',
       'buttonText' : "Upload Files",
       'multi'   : false,
       'auto'   : true,

       'formData'  : {'sessdata' : '<?php echo $this->session->get_encrypted_sessdata()?>', 'filename' : ''},
       'method'  : 'post',
       'fileObjName' : 'userfile',

       'queueSizeLimit': 40,
       'simUploadLimit': 2,
       'sizeLimit'  : 10240000,
   	'onUploadStart' : function(file) {
   	                $("#upload_img_try2").uploadify("settings", 'formData', {'filename' : 'p_' + $('input[name=product_id]').val() + '_img_try2'});
   	        },
     	'onUploadComplete' : function(file) {

   	  			$('#imagetry2').text(file.name);
   				$('input[name=image_try2]').val('p_' + $('input[name=product_id]').val() + '_img_try2.png');
          		}
         });
      });
   
   $(function() {
    $('#upload_video').uploadify({
     'swf'   : '<?php echo site_url() ?>www/js/uploadify/uploadify.swf',
     'uploader'  : '<?php echo site_url('product_control/uploadify')?>',
     'cancelImage' : '<?php echo site_url() ?>www/js/uploadify/uploadify-cancel.png',
     'buttonClass'  : 'button',
     'buttonText' : "Upload Files",
     'multi'   : false,
     'auto'   : true,

     'formData'  : {'sessdata' : '<?php echo $this->session->get_encrypted_sessdata()?>', 'filename' : ''},
     'method'  : 'post',
     'fileObjName' : 'userfile',

     'queueSizeLimit': 40,
     'simUploadLimit': 2,
     'sizeLimit'  : 10240000,
 	'onUploadStart' : function(file) {
 	                $("#upload_video").uploadify("settings", 'formData', {'filename' : 'p_' + $('input[name=product_id]').val() + '_video'});
 	        },
  	 'onUploadComplete' : function(file) {

	  			$('#videofile').text(file.name);
				$('input[name=video]').val('p_' + $('input[name=product_id]').val() + '_video.mp4');
       		}
       });
    });
    </script>
  <title></title>
</head>
<body>
<h1><?=$title?></h1>
<?
echo form_open_multipart("/product_control/productInsert/");
?>
<table>
	<tr>
		<td class="header">브랜드</td>
		<td class = "row"><?=form_input("brand", "")?></td>
	</tr>
	<tr>
		<td class="header">제품종류</td>
		<td class = "row"><?=form_input("type", "")?></td>
	</tr>
	<tr>
		<td class="header">제품ID</td>
		<td class = "row"><input name="product_id" type="text"></td>
	</tr>
	<tr>
		<td class="header">제품이름</td>
		<td class = "row"><?=form_input("name", "")?></td>
	</tr>
	<tr>
		<td class="header">추천제품</td>
		<td class = "row"><?=form_input("recommand", "")?><br/><sub> ',' 로 구분하여 제품ID 입력</sub></td>
	</tr>
	<tr>
		<td class="header">가격</td>
		<td class = "row"><?=form_input("price", "")?></td>
	</tr>
	<tr>
		<td class="header">세일</td>
		<td class = "row">
			<input type="radio" name="sale" value="1" <?php echo set_radio('sale', '1', TRUE); ?> />O
			<input type="radio" name="sale" value="0" <?php echo set_radio('sale', '0'); ?> />X
		</td>
	</tr>
	<tr>
		<td class="header">노출</td>
		<td class = "row">
			<input type="radio" name="post" value="1" <?php echo set_radio('post', '1', TRUE); ?> />O
			<input type="radio" name="post" value="0" <?php echo set_radio('post', '0'); ?> />X
		</td>
	</tr>
	<tr>
		<td class="header">착용가능</td>
		<td class = "row">
			<input type="radio" name="try" value="1" <?php echo set_radio('try', '1', TRUE); ?> />O
			<input type="radio" name="try" value="0" <?php echo set_radio('try', '0'); ?> />X
		</td>
	</tr>
	<tr>
		<td class="header">Image-Thum</td>
		<td class = "row"><div class="uploadify-queue" id="file-queue"></div>
    		<input type="file" name="userfile" id="upload_img_thum" />
			<input type="hidden" name="image_thum">
			<div id="imagethum"></div>
		</td>
	</tr>
	<tr>
		<td class="header">Image-Detail</td>
		<td class = "row"><div class="uploadify-queue" id="file-queue"></div>
    		<input type="file" name="userfile" id="upload_img_detail" />
			<input type="hidden" name="image_detail">
			<div id="imagedetail"></div>
		</td>
	</tr>
	<tr>
		<td class="header">Image-Try1</td>
		<td class = "row"><div class="uploadify-queue" id="file-queue"></div>
    		<input type="file" name="userfile" id="upload_img_try1" />
			<input type="hidden" name="image_try1">
			<div id="imagetry1"></div>
		</td>
	</tr>
	<tr>
		<td class="header">Image-Try2</td>
		<td class = "row"><div class="uploadify-queue" id="file-queue"></div>
    		<input type="file" name="userfile" id="upload_img_try2" />
			<input type="hidden" name="image_try2">
			<div id="imagetry2"></div>
		</td>
	</tr>
	<tr>
		<td class="header">Video</td>
		<td class = "row"><div class="uploadify-queue" id="file-queue"></div>
    		<input type="file" name="userfile2" id="upload_video" />
			<input type="hidden" name="video">
			<div id="videofile"></div>
		</td>
	</tr>
</table>
<?
echo form_submit("productInsert", "저장");
echo form_close();
?>
</body>
</html>