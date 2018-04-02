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
  <div class="panel-head"><strong class="icon-reorder">规章条例</strong></div>
  <div class="padding border-bottom">  
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="10%">编号</th>
      <th width="20%">简要说明</th>
      <th width="15%">分类</th>
			<th width="30%">详细</th>
			<?php $user = $this->session->userdata('user');
	    if ($user->privilege=='1'){?>
			<th width="15%">操作</th>
			<?php }?>
    </tr>
   <?php foreach($list as $adv){?>
    <tr data-no="<?php echo $adv->no;?>">
      <td><?php echo $adv->no;?></td>     
      <td><?php echo $adv->short?></td>     
      <td><?php echo $adv->class?></td>
			<td><?php echo $adv->content?></td>
			<?php $user = $this->session->userdata('user');
	    if ($user->privilege=='1'){?>
			<td><div class="button-group">
      <a class="button border-red" href="javascript:void(0)" onclick="return del(1,1)"><span class="icon-trash-o"></span> 删除</a>
			</div></td>
			<?php }?>
    </tr>
	 <?php }?>
  </table>
</div>
<script type="text/javascript">
function del(id,mid){
	if(confirm("您确定要删除吗?")){
	
	}
}
$(".button-group").on("click",function () {
	var no = $(this).parent().parent().data("no");

	$.get('welcome/del_adv',{
		no:no
		},function (data) {
			if(data == 'fail'){		
			}
			if(data == 'success'){
				location.href='user/adv';
			}
		},'text');	
});
</script>
<?php $user = $this->session->userdata('user');
	    if ($user->privilege=='1'){?>
<div class="panel admin-panel margin-top" id="add">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 增加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="user/add_adv">    
      <div class="form-group">
        <div class="label">
          <label>简要说明：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="short" value=""  />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>分类：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="class" value=""  />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>详细：</label>
        </div>
        <div class="field">
				<input type="text" class="input w50" name="content" value=""  />
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
<?php }?>
</body></html>