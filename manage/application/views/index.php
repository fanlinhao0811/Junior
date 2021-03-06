<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>基建管理系统</title>  
		<base href="<?php echo site_url()?>">
    <script src="assets/js/jquery.js"></script>   
    <link rel="stylesheet" href="assets/css/pintuer.css">
    <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="assets/images/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />基建管理系统</h1>
  </div>
	<div class="head-l">
	<h2>你好：<?php $user = $this->session->userdata('user');
	echo $user->name
	 ?></h2>
	</div>
  <div class="head-l"><a class="button button-little bg-red" href="welcome/index"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <h2><span class="icon-user"></span>用户管理</h2>
  <ul style="display:block">
    <li><a href="user/info" target="right"><span class="icon-caret-right"></span>个人考勤</a></li>
    <li><a href="user/email" target="right"><span class="icon-caret-right"></span>邮件</a></li>
    <?php $user = $this->session->userdata('user');
	  if ($user->privilege=='1'){?>
		<li><a href="user/job" target="right"><span class="icon-caret-right"></span>岗位管理</a></li>  
		<?php }?>
    <li><a href="user/book" target="right"><span class="icon-caret-right"></span>通讯录</a></li>      
  </ul>   
  <h2><span class="icon-asterisk"></span>项目管理</h2>
  <ul>
		<li><a href="user/plan" target="right"><span class="icon-caret-right"></span>流程规划</a></li>
		<?php $user = $this->session->userdata('user');
	  if ($user->privilege=='0'){?>
		<li><a href="user/apply_model" target="right"><span class="icon-caret-right"></span>模板申请</a></li>
		<?php }?>  
    <li><a href="user/data_a" target="right"><span class="icon-caret-right"></span>日程安排</a></li>
		<?php $user = $this->session->userdata('user');
	  if ($user->privilege=='1'){?>
		<li><a href="user/leader" target="right"><span class="icon-caret-right"></span>领导审批</a></li> 
		<?php }?>       
	</ul> 
	  <?php $user = $this->session->userdata('user');
	  if ($user->privilege=='0'){?>
	  <h2><span class="icon-book"></span>综合行政</h2>
    <ul>
    <li><a href="user/apply_meeting" target="right"><span class="icon-caret-right"></span>会议申请</a></li>
    <li><a href="user/apply_resource" target="right"><span class="icon-caret-right"></span>资源申请</a></li>      
	  </ul> 
  	<?php }?>
	  <?php $user = $this->session->userdata('user');
	  if ($user->privilege=='1'){?>
  	<h2><span class="icon-paper-plane"></span>相关部门管理</h2>
    <ul>
    <li><a href="user/department_add" target="right"><span class="icon-caret-right"></span>相关部门建立</a></li>
    <li><a href="user/department_reduce" target="right"><span class="icon-caret-right"></span>相关部门删除</a></li>     
	  </ul> 
  	<?php }?>
	  <h2><span class="icon-thumbs-up"></span>规章制度管理</h2>
    <ul>
    <li><a href="user/adv" target="right"><span class="icon-caret-right"></span>增删规章制度</a></li>
    <li><a href="user/suggest" target="right"><span class="icon-caret-right"></span>纪律监察</a></li>  
   </ul>  
</div>
<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(400);	
	  $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
  })
});
</script>
<ul class="bread">
  <li><a href="welcome/inbox" target="right" class="icon-home"> 首页</a></li>
  <li>高校基建管理系统</li>
  <li><b>当前语言：</b><span style="color:red;">中文</php></span>
</ul>
<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="welcome/inbox" name="right" width="100%" height="100%"></iframe>
</div>
</body>
</html>
