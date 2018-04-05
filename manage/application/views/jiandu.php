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
    <div class="panel-head"><strong class="icon-reorder">监督与建议</strong></div>
    <div class="padding border-bottom">
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th>姓名</th>       
				<th>描述</th> 
				<th>监督人</th>   
      </tr>      
					<?php foreach($list1 as $suggest){?>
					<tr>
						<td><?php echo $suggest->name?></td>          
						<td><?php echo $suggest->content?></td>
						<td><?php echo $suggest->uname?></td>
					 </tr>
					<?php }?>
   
    </table>		
  </div>
</form>
</body></html>