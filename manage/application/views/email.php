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
</head>
<body>
<div class="panel admin-panel">
	<div class="panel-head">
		<strong><span class="icon-pencil-square-o"></span> 发信箱</strong>
		<strong><a href="welcome/inbox"><span class="icon-pencil-square-o" style="margin-left:80%;"></span> 收信箱</a></strong>
	</div>
  <div class="body-content">
    <form method="post" class="form-x" action="user/send_email">   
		<div class="form-group">
        <div class="label">
          <label>发给：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="email" value="" />
        </div>
      </div>   
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="title" value="" />
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>附件：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="plus" style="width:25%; float:left;"  value=""   />
          <!-- <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;"> -->
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>内容：</label>
        </div>
        <div class="field">
				<input type="text" class="input" name="content" style="width:600px;height:300px;"  value=""   />
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 发送</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body></html>