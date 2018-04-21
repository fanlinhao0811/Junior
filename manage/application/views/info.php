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
<div class="error_msg" style="display:none;color:red;font-size:20px;"></div>
<!-- <form action="welcome/check_in" method="post"> -->
	<div class="panel admin-panel">
	
		<div class="padding border-bottom">  
			<button type="submit" class="button border-red" id="check_in" > 签到 </button>
			<?php $user = $this->session->userdata('user');
	    if ($user->privilege=='1'){?>
			<button class="button border-yellow" ><a href="user/check">出勤表</a></button>
			<?php }?>
		</div>
		<table class="table table-hover text-center">
			<tr>
				<th >签到时间</th>
				<th width="25%">状态</th>
			</tr>
			<?php foreach($list as $info){?>
			<tr>  
				<td><?php echo $info->time_in?></td>
				<?php if($info->state == 迟到){?>
					<td style="color:red"><?php	echo $info->state?></td>
					<?php }else{?>
					<td><?php	echo $info->state?></td>
					<?php }?>
			</tr>
			<?php }?>
			
		</table>
	</div>
<!-- </form> -->
  <script>
		$('#check_in').on('click',function(){
				$.get('welcome/check_in',{
				},function(data){
					if(data == 'error'){
						// console.log($(typeof '.error_msg')[0])
						console.log(1)
						// console.log($(typeof('.error_msg')[0]))11
						$('.error_msg').text("今日已签到");
						$('#check_in').text("已签到");
						$('.error_msg').show();
					}else{
						alert('签到成功');
						location.href = 'user/info';
					}
				},'text')
			});</script>
</body>
</html>