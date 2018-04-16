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
<form action="welcome/check_in" method="post">
	<div class="panel admin-panel">

		<div class="padding border-bottom">  
			<button type="submit" class="button border-red" > 签到 </button>
			<button class="button border-yellow" ><a href="user/check">出勤表</a></button>
		</div>
		<table class="table table-hover text-center">
			<tr>
				<th >签到时间</th>
				<th >姓名</th>
				<th width="25%">状态</th>
			</tr>
			<?php foreach($list as $info){?>
			<tr>  
				<td><?php echo $info->time_in?></td>
				<td><?php echo $info->name?></td>
				<td><?php	echo $info->state	?></td>
			</tr>
			<?php }?>
			
		</table>
	</div>
</form>
  
</body>
</html>