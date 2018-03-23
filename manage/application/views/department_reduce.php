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
      <th width="25%">操作</th>
    </tr>
   
    <tr>
      <td>1</td>     
      <td>教研部</td>     
      <td>张三</td>
      <td><div class="button-group">
      <a class="button border-main" href="#add"><span class="icon-edit"></span> 修改</a>
      </div></td>
    </tr>
  </table>
</div>
<div class="panel admin-panel margin-top" id="add">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 部门删除</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="">    
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
          <input type="text" class="input w50" name="explain" value=""  />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>部门负责人：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="sort" value=""  />
          <div class="tips"></div>
        </div>
      </div>
      
			<div class="form-group">
        <div class="label">
          <label>附件：</label>
        </div>
        <div class="field">
          <input type="text" id="url1" name="img" class="input tips" style="width:25%; float:left;"  value="" data-toggle="hover" data-place="right" data-image="" />
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