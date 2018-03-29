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
<form action="welcome/check_in" method="post">
	<div class="panel admin-panel">

		<div class="padding border-bottom">  
			<button type="submit" class="button border-yellow" ><span class="icon-plus-square-o"></span> 签到 </button>
			<button type="button" class="button border-green" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 签退 </button>
		</div>
		<table class="table table-hover text-center">
			<tr>
				<th width="20%">日期</th>
				<th width="25%">签到时间</th>
				<th width="25%">签退时间</th>
			</tr>
			<?php foreach($list as $info){?>
			<tr>
				<td><?php echo $info->date?></td>     
				<td><?php echo $info->time_in?></td>     
				<td><?php echo $info->time_out?></td>
			</tr>
			<?php }?>
			
		</table>
	</div>
</form>
  
</body>
</html>