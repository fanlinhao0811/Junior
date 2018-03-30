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
          <td><?php echo $book->name?></td>
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
<div class="panel admin-panel margin-top" id="add">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 增加联系人</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="user/add_book">    
      <div class="form-group">
        <div class="label">
          <label>编号：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="no" data-validate="required:请输入编号" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>姓名：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="name" value=""  />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>电话：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="tel" value=""  />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>邮箱：</label>
        </div>
        <div class="field">
					<input type="text" class="input w50" name="email" value=""  />
          <div class="tips"></div>
        </div>
      </div>
			<div class="form-group">
        <div class="label">
          <label>岗位：</label>
        </div>
        <div class="field">
					<input type="text" class="input w50" name="job" value=""  />
          <div class="tips"></div>
        </div>
      </div><div class="form-group">
        <div class="label">
          <label>地址：</label>
        </div>
        <div class="field">
					<input type="text" class="input w50" name="address" value=""  />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 添加</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body>
</html>