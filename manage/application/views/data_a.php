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
    <div class="panel-head"><strong class="icon-reorder">日程安排</strong></div>
    <div class="padding border-bottom">
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="25%">编号</th>
        <th>日期</th>       
        <th>行程1</th>
        <th>行程2</th>    
      </tr>      
        
					<?php foreach($list as $data){?>
						<tr>
          <td><?php echo $data->no?></td>
          <td><?php echo $data->data?></td>
          <td><?php echo $data->content1?></td>          
          <td><?php echo $data->content2?></td>
					
				</tr>
				<?php }?>
        
     
    </table>
		
  </div>
	<?php echo $links?>
</form>

</body></html>