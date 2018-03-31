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
	<div class="panel-head"><strong class="icon-reorder">会议室申请</strong></div>
    <div class="padding border-bottom">
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th>申请编号</th>
        <th>申请部门</th>       
        <th>申请人</th>
        <th>申请用途说明</th>   
				<th>操作</th>   
      </tr>      
        
					<?php foreach($list as $apply){?>
						<tr>
          <td><?php echo $apply->no?></td>
          <td><?php echo $apply->job?></td>
          <td><?php echo $apply->name?></td>          
          <td><?php echo $apply->content?></td>
					<td><div class="button-group"> <a class="button border-green" href="javascript:void(0)" onclick="return agree(1)">
					 同意</a> </div>
					 <div class="button-group"> <a class="button border-red" href="javascript:void(0)" onclick="return del(1)">
					 拒绝</a> </div></td>
				</tr>
				<?php }?>
        
     
    </table>
		
  </div>
</form>
<form method="post" action="">
  <div class="panel admin-panel">
	<div class="panel-head"><strong class="icon-reorder">会议申请</strong></div>
    <div class="padding border-bottom">
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th>申请编号</th>
        <th>申请部门</th>       
        <th>申请人</th>
        <th>申请用途说明</th> 
				<th>操作</th>   
      </tr>      
        
					<?php foreach($list2 as $apply){?>
						<tr>
          <td><?php echo $apply->no?></td>
          <td><?php echo $apply->job?></td>
          <td><?php echo $apply->name?></td>          
          <td><?php echo $apply->content?></td>
					<td><div class="button-group"> <a class="button border-green" href="javascript:void(0)" onclick="return agree(1)">
					 同意</a> </div>
					 <div class="button-group"> <a class="button border-red" href="javascript:void(0)" onclick="return del(1)">
					 拒绝</a> </div></td>
				</tr>
				<?php }?>
        
     
    </table>
		
  </div>

</form>
<form method="post" action="">
  <div class="panel admin-panel">
	<div class="panel-head"><strong class="icon-reorder">资源申请</strong></div>
    <div class="padding border-bottom">
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th>申请编号</th>
        <th>申请部门</th>       
        <th>申请人</th>
        <th>申请用途说明</th> 
				<th>操作</th>     
      </tr>      
        
					<?php foreach($list1 as $apply){?>
						<tr>
          <td><?php echo $apply->no?></td>
          <td><?php echo $apply->job?></td>
          <td><?php echo $apply->name?></td>          
          <td><?php echo $apply->content?></td>
					<td><div class="button-group"> <a class="button border-green" href="javascript:void(0)" onclick="return agree(1)">
					 同意</a> </div>
					 <div class="button-group"> <a class="button border-red" href="javascript:void(0)" onclick="return del(1)">
					 拒绝</a> </div></td>
				</tr>
				<?php }?>
        
     
    </table>
		
  </div>

</form>
<script type="text/javascript">
function agree(id){
		if(confirm("您确定同意吗吗?")){
			
		}
	};
	function del(id){
		if(confirm("您确定不同意吗吗?")){
			
		}
	}


</script>
</body></html>