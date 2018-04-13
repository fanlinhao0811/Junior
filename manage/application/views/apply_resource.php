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
  <div class="panel-head"><strong><span class="icon-pencil-square-o">资源申请 </span> 
	</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="user/apply_re">    
      <div class="form-group">
        <div class="label">
          <label>申请部门：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="job" value=""  />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>申请人：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="name" value=""  />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>申请用途说明：</label>
        </div>
        <div class="field">
				<input type="text" class="input w50" name="content" value=""  />
          <div class="tips"></div>
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
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder">申请资源记录</strong></div>
  <div class="padding border-bottom">  
  </div>
  <table class="table table-hover text-center">
	<tr>
	<th width="20%">申请部门</th>       
	<th width="20%">申请人</th>
	<th width="40%">申请用途说明</th> 
	<th width="20%">申请结果</th>     
</tr>            
		<?php foreach($list as $apply){?>
			<tr>
		<td><?php echo $apply->job?></td>
		<td><?php echo $apply->name?></td>          
		<td><?php echo $apply->content?></td>
		<td><?php echo $apply->flag?></td>
	</tr>
	<?php }?> 
  </table>
</div>
</body></html>