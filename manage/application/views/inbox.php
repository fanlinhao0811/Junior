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
<form method="post" action="">
  <div class="panel admin-panel">
    <div class="panel-head"><a href="user/shouxin"><strong class="icon-reorder">收信箱</strong></a></div>
 		
  </div>
</form>
<?php $user = $this->session->userdata('user');
	  if ($user->privilege=='1'){?>
<form method="post" action="">
  <div class="panel admin-panel">
    <div class="panel-head"><a href="user/jiandu"><strong class="icon-reorder">监督与建议</strong></a></div>
    
  </div>
</form>
<?php }?>
</body></html>