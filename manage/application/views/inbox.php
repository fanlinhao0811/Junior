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
    <div class="panel-head"><strong class="icon-reorder">收信箱</strong></div>
    <div class="padding border-bottom">
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="25%">邮箱名</th>
        <th>标题</th>       
        <th>附件</th>
        <th>内容</th>    
      </tr>      
        <tr>
					<?php foreach($list as $email){?>
          <td><?php echo $email->email_name?></td>
          <td><?php echo $email->title?></td>
          <td><?php echo $email->plus?></td>          
          <td><?php echo $email->content?></td>
					<td><div class="button-group"> <a class="button border-red" href="javascript:void(0)"><span class="icon-trash-o"></span> 阅读全文</a> </div></td>
					<?php }?>
				</tr>
        <td colspan="8"><div class="pagelist"> <a href="">上一页</a> <span class="current">1</span><a href="">2</a><a href="">3</a><a href="">下一页</a><a href="">尾页</a> </div></td>
      </tr>
    </table>
  </div>
</form>
<script type="text/javascript">


$("#checkall").click(function(){ 
  $("input[name='id[]']").each(function(){
	  if (this.checked) {
		  this.checked = false;
	  }
	  else {
		  this.checked = true;
	  }
  });
})


</script>
</body></html>