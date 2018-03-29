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
  <div class="panel-head"><strong class="icon-reorder">部门管理</strong></div>
  <div class="padding border-bottom">  
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="25%">部门编号</th>
			<th width="25%">部门名称</th>
			<th width="25%">部门负责人</th>
      <th width="25%">说明</th>
    </tr>
   <?php foreach($list as $department){?>
    <tr>
      <td><?php echo $department->dep_no?></td>     
      <td><?php echo $department->name?></td>     
      <td><?php echo $department->leader?></td>
      <td><?php echo $department->plus?></td>
    </tr>
	 <?php }?>
  </table>
</div>
<div class="panel admin-panel margin-top" id="add">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 部门建立</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="user/add_department">    
      <div class="form-group">
        <div class="label">
          <label>部门编号：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="no" data-validate="required:请输入部门编号" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>部门名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="name" value=""  />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>部门负责人：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="leader" value=""  />
          <div class="tips"></div>
        </div>
      </div>
      
			<div class="form-group">
        <div class="label">
          <label>说明：</label>
        </div>
        <div class="field">
          <input type="text"  name="plus" class="input tips" style="width:25%; float:left;"  value="" data-toggle="hover"  />
          <!-- <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;"> -->
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