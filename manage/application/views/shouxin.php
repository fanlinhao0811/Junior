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
	<div class="panel-head"><strong class="icon-reorder">收信箱</strong>
	<strong><a href="user/faxin"><span class="icon-pencil-square-o" style="margin-left:80%;"></span> 发信箱</a></strong>
	</div>
    <div class="padding border-bottom">
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="25%">发信人</th>
        <th>标题</th>       
        <th>附件</th>
        <th>内容</th>    
      </tr>      
        
					<?php foreach($list as $email){?>
						<tr>
          <td><?php echo $email->s_email?></td>
          <td><?php echo $email->title?></td>
          <td><a href="<?php echo $email->plus?>" download="w3logo"><?php echo $email->plus?></a></td>          
          <td><?php echo $email->content?></td>
					
				</tr>
				<?php }?>
   
    </table>
		
  </div>
	<!-- <?php echo $links?> -->
</form>

</body></html>