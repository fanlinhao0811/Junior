<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<base href="<?php echo site_url()?>">
<link rel="stylesheet" href="assets/css/pintuer.css">
<link rel="stylesheet" href="assets/css/admin.css">
<script src="assets/js/jquery.js"></script>
<script src="assets/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-key"></span> 监督建议 </strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="">     
      <div class="form-group">
        <div class="label">
          <label for="sitename">相关人员：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="title" placeholder="请输入相关人员或部门" data-validate="required:请输入相关人员或部门" />       
        </div>
      </div>      
      <div class="form-group">
        <div class="label">
          <label for="sitename">问题描述：</label>
        </div>
				<div class="field">
          <textarea name="content" placeholder="请输入监督建议问题描述" data-validate="required:请输入描述内容"></textarea>
        </div>
			</div>
			<div class="form-group">
        <div class="label">
          <label>相关材料：</label>
        </div>
        <div class="field">
          <input type="text" id="url1" name="img" class="input tips" style="width:25%; float:left;"  value="" />
          <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;">
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>   
        </div>
      </div>      
    </form>
  </div>
</div>
</body></html>