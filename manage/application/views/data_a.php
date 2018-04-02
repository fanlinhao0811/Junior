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
        <th>日期</th>       
        <th>行程1</th>
        <th>行程2</th>    
      </tr>  
					<?php foreach($list as $data){?>
						<tr>
						<td><?php echo $data->data?></td>
						<td><?php echo $data->content1?></td>          
						<td><?php echo $data->content2?></td>
						</tr>
				<?php }?>
    </table>	
  </div>
</form>
<div class="panel admin-panel margin-top" id="add">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 增加行程</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="user/add_data">    
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
          <label>行程1：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="content1" value=""  />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>行程2：</label>
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
  </div>
</div>
</body></html>