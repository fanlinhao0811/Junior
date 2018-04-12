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
    <div class="panel-head"><strong class="icon-reorder">项目规划</strong></div>
    <div class="padding border-bottom">
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="20%">日期</th>       
        <th width="30%">规划1</th>
				<th width="30%">规划2</th> 
				<?php $user = $this->session->userdata('user');
	         if ($user->privilege=='1'){?>
				<th width="20%">操作</th>    
				<?php }?>
      </tr>  
					<?php foreach($list as $data){?>
						<tr data-no="<?php echo $data->no;?>">
						<td><?php echo $data->data?></td>
						<td><?php echo $data->content1?></td>          
						<td><?php echo $data->content2?></td>
						<?php $user = $this->session->userdata('user');
	         if ($user->privilege=='1'){?>
					<!-- <td><div class="button-group"> <a class="button border-green" href="javascript:void(0)" onclick="return del(1)"><span class="icon-trash-o"></span> 修改</a> </div></td> -->
          <td><div class="button-group"> <a class="button border-red" href="javascript:void(0)" onclick="return del(1)"><span class="icon-trash-o"></span> 删除</a> </div></td>
          <?php }?>
				</tr>
				<?php }?>
    </table>	
  </div>
</form>
<script type="text/javascript">
	function del(id){
		var r=confirm("您确定要删除吗?")
		if(r==true){
			$(".button-group").on("click",function () {
			var no = $(this).parent().parent().data("no");

			$.get('welcome/del_plan',{
				no:no
				},function (data) {
					if(data == 'fail'){		
					}
					if(data == 'success'){
						location.href='user/plan';
					}
				},'text');	
		});
		}
		else {
			location.href='user/plan';
		}
	}

</script>
<?php $user = $this->session->userdata('user');
	  if ($user->privilege=='1'){?>
<div class="panel admin-panel margin-top" id="add">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 增加规划</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="user/add_plan">    
      <div class="form-group">
        <div class="label">
          <label>日期：</label>
        </div>
        <div class="field">
          <input type="date" class="input w50" value="" name="date" data-validate="required:请输入日期" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>规划1：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="content1" value=""  />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>规划2：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="content2" value=""  />
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
		<?php }?>
  </div>
</div>
</body></html>