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
<div class="panel admin-panel">
  <div class="padding border-bottom">  
  <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 签到 </button>
	<button type="button" class="button border-green" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 签退 </button>
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="10%">日期</th>
      <th width="20%">签到时间</th>
      <th width="20%">签退时间</th>
      <th width="20%">考勤</th>
			<th width="30%">说明</th>
    </tr>
   
    <tr>
      <td>2018.03.18</td>     
      <td>08:00</td>     
      <td>17:00</td>
      <td>正常</td>
			<td>正常</td>
    </tr>
    <tr>
      <td>2018.03.19</td>     
      <td>08:30</td>     
      <td>17:00</td>
      <td>迟到</td>
			<td>请假</td>
    </tr>
    <tr>
      <td>2018.03.20</td>     
      <td>08:30</td>     
      <td>16:30</td>
      <td>迟到早退</td>
			<td>外出</td>
    </tr>
    
  </table>
</body>
</html>