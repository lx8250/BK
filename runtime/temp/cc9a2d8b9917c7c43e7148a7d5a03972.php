<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:45:"E:\BK/application/index\view\login\login.html";i:1526689309;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>用户登录</title>

    <!-- Bootstrap -->
    <link href="/static/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/static/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/static/css/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="/static/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/static/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>
    <a class="hiddenanchor" id="signout"></a>

    <div class="login_wrapper" style="margin-top: 150px">
        <!--用户登录-->
        <div class="animate form login_form">
            <section class="login_content">
                <form action="<?php echo url('/index/login/login'); ?>" method="post" id="subform">
                    <input type="hidden" name="op" value="login">
                    <h1>用户登录</h1>
                    <div>
                        <input type="text" name="username" class="form-control" placeholder="用户名" required/>
                    </div>
                    <div>
                        <input type="password" class="form-control" name="password" placeholder="密码" required />
                    </div>
                    <div>
                        <input class="btn btn-default submit" type="submit" value="登录">
                        <a class="reset_pass to_register" href="#signout">忘记密码</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">
                        <p class="change_link">没有账户?
                            <a href="#signup" class="to_register">创建</a>
                        </p>

                        <div class="clearfix"></div>
                        <br />
                    </div>
                </form>
            </section>
        </div>
        <!--创建用户-->
        <div id="register" class="animate form registration_form">
            <section class="login_content">
                <form action="<?php echo url('/index/login/login'); ?>" method="post" id="registerform">
                    <h1>创建用户</h1>
                    <input type="hidden" name="op" value="register">
                    <div>
                        <input type="text" class="form-control" name="username" placeholder="用户名" required />
                    </div>
                    <div>
                        <input type="email" class="form-control" name="email" placeholder="邮箱" required />
                    </div>
                    <div>
                        <input type="password" class="form-control" name="password" placeholder="密码" required />
                    </div>
                    <div>
                        <input style="margin-left: 133px" class="btn btn-default submit" type="submit" value="注册">
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">已有用户名 ?
                            <a href="#signin" class="to_register"> 登录 </a>
                        </p>

                        <div class="clearfix"></div>
                        <br/>
                    </div>
                </form>
            </section>
        </div>
        <!--修改密码-->
        <div id="reset_pass" class="animate form pass_form">
            <section class="login_content">
                <form action="<?php echo url('/index/login/login'); ?>" method="post" id="repass">
                    <input type="hidden" name="op" value="repass">
                    <h1>忘记密码</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="用户名" name="username" required="" />
                    </div>
                    <div>
                        <input type="email" class="form-control" placeholder="邮箱" name="email" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="新密码" name="password" required="" />
                    </div>
                    <div>
                        <input style="margin-left: 133px" type="submit" class="btn btn-default submit" value="提交"/>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">
                            <a href="#signin" class="to_register"> 登录 </a>
                            <a href="#signup" class="to_register"> 注册 </a>
                        </p>

                        <div class="clearfix"></div>
                        <br/>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>
