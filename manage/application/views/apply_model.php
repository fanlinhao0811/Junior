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
<div class="panel admin-panel margin-top" id="add">
  <div class="panel-head"><strong><span class="icon-pencil-square-o">申请模板 </span> 
	</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="">    
      <div class="form-group">
        <div class="label">
          <label>申请部门：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="job" value="数学教研部"  />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>申请人：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="name" value="李四"  />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>申请用途说明：</label>
        </div>
        <div class="field">
				<input type="text" class="input w50" name="content" value="数学教研组开研讨会"  />
          <div class="tips"></div>
        </div>
      </div>
    </form>
  </div>
</div>
</body></html>