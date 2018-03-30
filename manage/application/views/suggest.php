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
    <form method="post" class="form-x" action="user/add_suggest">    
			<div class="form-group">
					<div class="label">
						<label for="sitename">编号：</label>
					</div>
					<div class="field">
						<input type="text" class="input" name="no" placeholder="请输入编号" data-validate="required:请输入编号" />       
					</div>
				</div>    
      <div class="form-group">
        <div class="label">
          <label for="sitename">相关人员：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="name" placeholder="请输入相关人员或部门" data-validate="required:请输入相关人员或部门" />       
        </div>
      </div>      
      <div class="form-group">
        <div class="label">
          <label for="sitename">问题描述：</label>
        </div>
				<div class="field">
				  <input type="text" class="input" name="content" placeholder="请输入监督建议问题描述" data-validate="required:请输入描述内容" />       
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