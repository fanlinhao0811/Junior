<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>基建管理系统</title>  
		<base href="<?php echo site_url()?>">
    <link rel="stylesheet" href="assets/css/pintuer.css">
    <link rel="stylesheet" href="assets/css/admin.css">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/pintuer.js"></script>  
</head>
<body>
<div class="bg"></div>
<div class="container">
    <div class="line bouncein">
        <div class="xs6 xm4 xs3-move xm4-move">
            <div style="height:150px;"></div>
            <div class="media media-y margin-big-bottom">           
            </div>         
            <form action="user/index" onsubmit="return false;" method="post">
            <div class="panel loginbox">
                <div class="text-center margin-big padding-big-top"><h1>基建管理系统</h1></div>
                <div class="panel-body" style="padding:30px; padding-bottom:10px; padding-top:10px;">
								<div id="error_msg" class="error_msg" style="display:none;"></div>
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="text" class="input input-big" id="f_name" name="name"  placeholder="登录账号" data-validate="required:请填写账号" />
                            <span class="icon icon-user margin-small"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="password" class="input input-big" id="f_pwd" name="password" placeholder="登录密码" data-validate="required:请填写密码" />
                            <span class="icon icon-key margin-small"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field">
                            <input type="text" class="input input-big" name="code" placeholder="填写右侧的验证码" data-validate="required:请填写右侧的验证码" />
                           <img src="assets/images/passcode.jpg" alt="" width="100" height="32" class="passcode" style="height:43px;cursor:pointer;" onclick="this.src=this.src+'?'">  
                              <!-- <?php echo $img?>                      -->
                        </div>
                    </div>
                </div>
                <div style="padding:30px;"><input type="submit" class="button button-block bg-main text-big input-big" id="btn-login" value="登录"></div>
            </div>
            </form>          
        </div>
    </div>
</div>
 <script>
$('#btn-login').on('click',function(){
			var name = $('#f_name').val();
			var pwd = $('#f_pwd').val();
	
			$.get('user/check_login',{
				name:name,
				pwd:pwd
			},function(data){
				if(data == 'name not exist'){
					$('#error_msg').html("账号不存在");
					$('#error_msg').show();
				}else if(data == 'password error'){
					$('#error_msg').html("密码错误");
					$('#error_msg').show();
				}else{
					location.href = 'user/index';
				}
			},'text')
	
	
		})
 </script>
</body>
</html>