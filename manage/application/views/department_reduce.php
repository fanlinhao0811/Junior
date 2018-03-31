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
<div class="panel admin-panel">
  <div class="padding border-bottom">  
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="20%">部门编号</th>
			<th width="20%">部门名称</th>
			<th width="20%">部门负责人</th>
      <th width="20%">说明</th>
			<th width="20%">操作</th
    </tr>
   
    <?php foreach($list as $department){?>
			<tr data-no="<?php echo $department->dep_no;?>">
				<td><?php echo $department->dep_no?></td>     
				<td><?php echo $department->name?></td>     
				<td><?php echo $department->leader?></td>
				<td><?php echo $department->plus?></td>
				<td><div class="button-group"> <a class="button border-red" href="javascript:void(0)" onclick="return del(1)">
				<span class="icon-trash-o"></span> 删除</a> </div></td>
			</tr>
		 <?php }?>
  </table>
</div>
<script type="text/javascript">
	function del(id){
		if(confirm("您确定要删除吗?")){
			
		}
	}
$(".button-group").on("click",function () {
	var no = $(this).parent().parent().data("no");

	$.get('welcome/del_dep',{
		no:no
		},function (data) {
			if(data == 'fail'){		
			}
			if(data == 'success'){
				location.href='user/department_reduce';
			}
		},'text');	
});


</script>
</body>
</html>