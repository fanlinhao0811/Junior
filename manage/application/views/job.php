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
  <div class="panel-head"><strong class="icon-reorder">岗位管理</strong></div>
  <div class="padding border-bottom">  
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="20%">编号</th>
			<th width="20%">姓名</th>
			<th width="20%">岗位</th>
      <th width="20%">分类</th>
      <th width="20%">操作</th>
    </tr>
		<?php foreach($list as $job){?>
    <tr data-no="<?php echo $job->no;?>">
      <td><?php echo $job->no?></td>     
      <td><?php echo $job->name?></td>     
      <td><?php echo $job->job?></td>
      <td><?php echo $job->class?></td>
      <td><div class="button-group">
      <a class="button border-red" href="javascript:void(0)" onclick="return del(1,1)"><span class="icon-trash-o"></span> 删除</a>
      </div></td>
    </tr>
		<?php }?>
  </table>
</div>
<script type="text/javascript">
		function del(id,mid){
				var r=confirm("您确定要删除吗?")
					if (r==true)
						{
							$(".button-group").on("click",function () {
								var no = $(this).parent().parent().data("no");
							
								$.get('welcome/del_job',{
									no:no
									},function (data) {
										if(data == 'fail'){		
										}
										if(data == 'success'){
											location.href='user/job';
										}
									},'text');	
							})
						}
					else
						{
							location.href='user/job';
						}
		}
</script>
<div class="panel admin-panel margin-top" id="add">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 增加岗位</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="user/add_job">    
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
          <label>岗位：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="job" value=""  />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>分类：</label>
        </div>
        <div class="field">
					<input type="text" class="input w50" name="job_class" value=""  />
          <div class="tips"></div>
        </div>
      </div>
  
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body></html>