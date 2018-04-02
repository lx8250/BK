<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:45:"E:\BK/application/admin\view\login\login.html";i:1522660879;}*/ ?>
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

    <div class="login_wrapper" style="margin-top: 150px">
        <div class="animate form login_form">
            <section class="login_content">
                <form>
                    <h1>用户登录</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="用户名" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="密码" required="" />
                    </div>
                    <div>
                        <a class="btn btn-default submit" href="<?php echo url('/admin/index/index'); ?>">登录</a>
                        <a class="reset_pass" href="#signin">忘记密码</a>
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

        <div id="register" class="animate form registration_form">
            <section class="login_content">
                <form>
                    <h1>创建用户</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="用户名" required="" />
                    </div>
                    <div>
                        <input type="email" class="form-control" placeholder="邮箱" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="密码" required="" />
                    </div>
                    <div>
                        <a class="btn btn-default submit" href="<?php echo url('/admin/index/index'); ?>">提交</a>
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
        <div id="reset_pass" class="animate form pass_from">
            <section class="login_content">
                <form>
                    <h1>修改密码</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="用户名" required="" />
                    </div>
                    <div>
                        <input type="email" class="form-control" placeholder="邮箱" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="密码" required="" />
                    </div>
                    <div>
                        <a class="btn btn-default submit" href="<?php echo url('/admin/index/index'); ?>">提交</a>
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
    </div>
</div>
</body>
</html>
