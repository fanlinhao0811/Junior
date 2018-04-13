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
	<h3>
	<a href="user/leader"><strong class="icon-reorder">未处理申请</strong></a>
	<a href="user/leader_a"><strong class="icon-reorder">已同意申请 </strong></a>
	<a href="user/leader_r"><strong class="icon-reorder">已拒绝申请 </strong></a>
	</h3>
<form method="post" action="">
  <div class="panel admin-panel">
	<div class="panel-head"><strong class="icon-reorder">已拒绝申请会议室</strong></div>
    <div class="padding border-bottom">
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="25%">申请部门</th>       
        <th width="25%">申请人</th>
        <th width="50%">申请用途说明</th>   				 
      </tr>             
					<?php foreach($list3 as $apply){?>
				<tr>
          <td><?php echo $apply->job?></td>
          <td><?php echo $apply->name?></td>          
          <td><?php echo $apply->content?></td>
				</tr>
				<?php }?>     
    </table>		
  </div>
</form>
<form method="post" action="">
  <div class="panel admin-panel">
	<div class="panel-head"><strong class="icon-reorder">已拒绝申请会议</strong></div>
    <div class="padding border-bottom">
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="25%">申请部门</th>       
        <th width="25%">申请人</th>
        <th width="50%">申请用途说明</th>   				 
      </tr>             
					<?php foreach($list5 as $apply){?>
				<tr>
          <td><?php echo $apply->job?></td>
          <td><?php echo $apply->name?></td>          
          <td><?php echo $apply->content?></td>
				</tr>
				<?php }?>     
    </table>		
  </div>
</form>
<form method="post" action="">
  <div class="panel admin-panel">
	<div class="panel-head"><strong class="icon-reorder">已拒绝申请资源</strong></div>
    <div class="padding border-bottom">
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="25%">申请部门</th>       
        <th width="25%">申请人</th>
        <th width="50%">申请用途说明</th>   				 
      </tr>             
					<?php foreach($list4 as $apply){?>
				<tr>
          <td><?php echo $apply->job?></td>
          <td><?php echo $apply->name?></td>          
          <td><?php echo $apply->content?></td>
				</tr>
				<?php }?>     
    </table>		
  </div>
</form>
</body></html>