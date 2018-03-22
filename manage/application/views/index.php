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
  <div class="head-l"><a class="button button-little bg-red" href="user/login"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <h2><span class="icon-user"></span>用户管理</h2>
  <ul style="display:block">
    <li><a href="user/info" target="right"><span class="icon-caret-right"></span>个人考勤</a></li>
    <li><a href="user/email" target="right"><span class="icon-caret-right"></span>邮件</a></li>
    <li><a href="page.html" target="right"><span class="icon-caret-right"></span>岗位管理</a></li>  
    <li><a href="user/book" target="right"><span class="icon-caret-right"></span>通讯录</a></li>      
  </ul>   
  <h2><span class="icon-pencil-square-o"></span>项目管理</h2>
  <ul>
    <li><a href="list.html" target="right"><span class="icon-caret-right"></span>流程规划</a></li>
    <li><a href="add.html" target="right"><span class="icon-caret-right"></span>模板申请</a></li>
    <li><a href="cate.html" target="right"><span class="icon-caret-right"></span>日程安排</a></li>
		<li><a href="column.html" target="right"><span class="icon-caret-right"></span>领导审批</a></li>        
  </ul> 
	<h2><span class="icon-pencil-square-o"></span>综合行政</h2>
  <ul>
    <li><a href="list.html" target="right"><span class="icon-caret-right"></span>会议申请</a></li>
    <li><a href="add.html" target="right"><span class="icon-caret-right"></span>资源申请</a></li>      
  </ul> 
	<h2><span class="icon-pencil-square-o"></span>相关部门管理</h2>
  <ul>
    <li><a href="list.html" target="right"><span class="icon-caret-right"></span>相关部门建立</a></li>
    <li><a href="add.html" target="right"><span class="icon-caret-right"></span>相关部门删除</a></li>     
  </ul> 
	<h2><span class="icon-pencil-square-o"></span>规章制度管理</h2>
  <ul>
    <li><a href="user/adv" target="right"><span class="icon-caret-right"></span>增删规章制度</a></li>
    <li><a href="add.html" target="right"><span class="icon-caret-right"></span>纪律监察</a></li>  
  </ul>  
</div>
<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);	
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
  <li><a href="{:U('Index/info')}" target="right" class="icon-home"> 首页</a></li>
  <li><a href="##" id="a_leader_txt">高校基建管理系统</a></li>
  <li><b>当前语言：</b><span style="color:red;">中文</php></span>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;切换语言：<a href="##">中文</a> &nbsp;&nbsp;<a href="##">英文</a> </li>
</ul>
<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="user/info" name="right" width="100%" height="100%"></iframe>
</div>
<div style="text-align:center;">
<p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>
</body>
</html>
