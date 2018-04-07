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
		<!-- <style>
		.panel-head{
			background-color:#fcfcfc;
			padding:10px 10px;
			border-radius:4px 4px 0 0;
			border-bottom:solid 1px #ddd;
		}
		</style> -->
</head>
<body>

<div class="banner" data-pointer="1" data-interval="8" data-item="3" data-small="3" data-middle="3" data-big="3" data-style="border-red">
<ul class="carousel">
	<li class="item"><img src="../manage/assets/images/1.jpg" alt=""></li>
	<li class="item"><img src="../manage/assets/images/2.jpg" alt=""></li>
	<li class="item"><img src="../manage/assets/images/3.jpg" alt=""></li>
	<li class="item"><img src="../manage/assets/images/4.jpg" alt=""></li>
	<li class="item"><img src="../manage/assets/images/5.jpg" alt=""></li>
	<li class="item"><img src="../manage/assets/images/6.jpg" alt=""></li>
	<li class="item"><img src="../manage/assets/images/7.jpg" alt=""></li>
	<li class="item"><img src="../manage/assets/images/8.jpg" alt=""></li>
	<li class="item"><img src="../manage/assets/images/9.jpg" alt=""></li>
	<li class="item"><img src="../manage/assets/images/10.jpg" alt=""></li>
	<li class="item"><img src="../manage/assets/images/12.jpg" alt=""></li>
	<li class="item"><img src="../manage/assets/images/13.jpg" alt=""></li>
	<li class="item"><img src="../manage/assets/images/14.jpg" alt=""></li>
</ul>
</div>

  <div class="panel admin-panel">
    <div class="panel-head"><a href="user/shouxin"><strong class="icon-reorder">收信箱</strong></a></div>
 		
  </div>

<?php $user = $this->session->userdata('user');
	  if ($user->privilege=='1'){?>
  <div class="panel admin-panel">
    <div class="panel-head"><a href="user/jiandu"><strong class="icon-reorder">监督与建议</strong></a></div>
    
  </div>

<?php }?>



</body></html>