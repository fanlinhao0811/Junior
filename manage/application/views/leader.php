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
        <th width="20%">申请部门</th>       
        <th width="20%">申请人</th>
        <th width="40%">申请用途说明</th>   
				<th width="20%">操作</th>   
      </tr>      
        
					<?php foreach($list as $apply){?>
						<tr data-no="<?php echo $apply->no;?>">
          <td><?php echo $apply->job?></td>
          <td><?php echo $apply->name?></td>          
          <td><?php echo $apply->content?></td>
					<td><div class="button-group"> <a class="button border-green" href="javascript:void(0)" onclick="return agree1(1)">
					 同意</a> </div>
					 <div class="button-group"> <a class="button border-red" href="javascript:void(0)" onclick="return del1(1)">
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
        <th width="20%">申请部门</th>       
        <th width="20%">申请人</th>
        <th width="40%">申请用途说明</th> 
				<th width="20%">操作</th>   
      </tr>      
        
					<?php foreach($list2 as $apply){?>
						<tr data-no="<?php echo $apply->no;?>">
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
        <th width="20%">申请部门</th>       
        <th width="20%">申请人</th>
        <th width="40%">申请用途说明</th> 
				<th width="20%">操作</th>     
      </tr>            
					<?php foreach($list1 as $apply){?>
						<tr data-no="<?php echo $apply->no;?>">
          <td><?php echo $apply->job?></td>
          <td><?php echo $apply->name?></td>          
          <td><?php echo $apply->content?></td>
					<td><div class="button-group"> <a class="button border-green" href="javascript:void(0)" onclick="return agree2(1)">
					 同意</a> </div>
					 <div class="button-group"> <a class="button border-red" href="javascript:void(0)" onclick="return del2(1)">
					 拒绝</a> </div></td>
				</tr>
				<?php }?>    
    </table>	
  </div>
</form>
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
	<div class="panel-head"><strong class="icon-reorder">已同意申请会议室</strong></div>
    <div class="padding border-bottom">
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="25%">申请部门</th>       
        <th width="25%">申请人</th>
        <th width="50%">申请用途说明</th>   				 
      </tr>             
					<?php foreach($list6 as $apply){?>
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
	<div class="panel-head"><strong class="icon-reorder">已同意申请会议</strong></div>
    <div class="padding border-bottom">
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="25%">申请部门</th>       
        <th width="25%">申请人</th>
        <th width="50%">申请用途说明</th>   				 
      </tr>             
					<?php foreach($list8 as $apply){?>
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
<form method="post" action="">
  <div class="panel admin-panel">
	<div class="panel-head"><strong class="icon-reorder">已同意申请资源</strong></div>
    <div class="padding border-bottom">
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="25%">申请部门</th>       
        <th width="25%">申请人</th>
        <th width="50%">申请用途说明</th>   				 
      </tr>             
					<?php foreach($list7 as $apply){?>
				<tr>
          <td><?php echo $apply->job?></td>
          <td><?php echo $apply->name?></td>          
          <td><?php echo $apply->content?></td>
				</tr>
				<?php }?>     
    </table>		
  </div>
</form>
<script type="text/javascript">
	function agree(id){
		var r=confirm("您确定同意吗?")
		if(r==true){
			$(".button-group").on("click",function () {
			var no = $(this).parent().parent().data("no");

			$.get('welcome/agree',{
				no:no
				},function (data) {
					if(data == 'fail'){		
					}
					if(data == 'success'){
						location.href='user/leader';
					}
				},'text');	
		});
		}
		else {
			location.href='user/leader';
		}}
	function del(id){
		var r=confirm("您确定要拒绝吗?")
		if(r==true){
			$(".button-group").on("click",function () {
			var no = $(this).parent().parent().data("no");

			$.get('welcome/del',{
				no:no
				},function (data) {
					if(data == 'fail'){		
					}
					if(data == 'success'){
						location.href='user/leader';
					}
				},'text');	
		});
		}
		else {
			location.href='user/leader';
		}}
	function agree1(id){
		var r=confirm("您确定同意吗?")
		if(r==true){
			$(".button-group").on("click",function () {
			var no = $(this).parent().parent().data("no");

			$.get('welcome/agree1',{
				no:no
				},function (data) {
					if(data == 'fail'){		
					}
					if(data == 'success'){
						location.href='user/leader';
					}
				},'text');	
		});
		}
		else {
			location.href='user/leader';
		}}
	function del1(id){
		var r=confirm("您确定要拒绝吗?")
		if(r==true){
			$(".button-group").on("click",function () {
			var no = $(this).parent().parent().data("no");

			$.get('welcome/del1',{
				no:no
				},function (data) {
					if(data == 'fail'){		
					}
					if(data == 'success'){
						location.href='user/leader';
					}
				},'text');	
		});
		}
		else {
			location.href='user/leader';
		}}
	function agree2(id){
		var r=confirm("您确定同意吗?")
		if(r==true){
			$(".button-group").on("click",function () {
			var no = $(this).parent().parent().data("no");

			$.get('welcome/agree2',{
				no:no
				},function (data) {
					if(data == 'fail'){		
					}
					if(data == 'success'){
						location.href='user/leader';
					}
				},'text');	
		});
		}
		else {
			location.href='user/leader';
		}}
	function del2(id){
		var r=confirm("您确定要拒绝吗?")
		if(r==true){
			$(".button-group").on("click",function () {
			var no = $(this).parent().parent().data("no");

			$.get('welcome/del2',{
				no:no
				},function (data) {
					if(data == 'fail'){		
					}
					if(data == 'success'){
						location.href='user/leader';
					}
				},'text');	
		});
		}
		else {
			location.href='user/leader';
		}}
</script>
</body></html>