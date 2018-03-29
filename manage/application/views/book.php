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
<form method="post" action="">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder">相关人员通讯录</strong></div>
    
    <table class="table table-hover text-center">
      <tr>
        <th width="120">编号</th>
        <th>姓名</th>       
        <th>电话</th>
        <th>邮箱</th>
        <th>岗位</th>
        <th width="25%">地址</th>      
      </tr>      
			<?php foreach($list as $book){?>
        <tr data-no="<?php echo $book->no;?>">
          <td><input type="checkbox" name="id[]"/>
					<?php echo $book->no?></td>
          <td><?php echo $book->call?></td>
          <td><?php echo $book->tel?></td>
          <td><?php echo $book->email?></td>  
           <td><?php echo $book->job?></td>         
          <td><?php echo $book->address?></td>
					<!-- <td><div class="button-group"> <a class="button border-green" href="javascript:void(0)" onclick="return del(1)"><span class="icon-trash-o"></span> 修改</a> </div></td> -->
          <td><div class="button-group"> <a class="button border-red" href="javascript:void(0)" onclick="return del(1)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
				<?php }?>
    </table>
		
  </div>
	<div class="padding border-bottom">
      <ul class="search">
        <li>
          <button type="submit" class="button border-red"><span class="icon-trash-o"></span> 添加 </button>
        </li>
      </ul>
    </div>
</form>
<script type="text/javascript">
	function del(id){
		if(confirm("您确定要删除吗?")){
			
		}
	}
$(".button-group").on("click",function () {
	var no = $(this).parent().parent().data("no");

	$.get('welcome/del_book',{
		no:no
		},function (data) {
			if(data == 'fail'){		
			}
			if(data == 'success'){
				location.href='user/book';
			}
		},'text');	
});


</script>
</body>
</html>