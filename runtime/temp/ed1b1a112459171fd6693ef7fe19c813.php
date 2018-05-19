<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:49:"E:\BK/application/index\view\message\message.html";i:1526647925;s:47:"E:\BK\application\index\view\public\header.html";i:1526696692;}*/ ?>
<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>李鑫个人博客</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!--关键字-->
    <meta name="keywords" content="李鑫,博客,个人博客">
    <!--作者-->
    <meta name="author" content="李鑫">
    <!--生产者-->
    <meta name="generator" content="lixin">
    <!--描述-->
    <meta name="description" content="李鑫的个人博客，仅仅用于了解自己的屌丝级入门程序员">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="/static/js/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="/static/css/layui.css" media="all">
    <link href="//cdn.bootcss.com/tether/1.3.6/css/tether.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/tether/1.3.6/js/tether.min.js"></script>
    <link rel="stylesheet" href="/static/css/bootstrap.min.css">
    <script src="/static/js/bootstrap.min.js" charset="utf-8"></script>
    <!--博客上的地址-->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="/static/css/font-awesome.min.css"/>
    <script src="/static/layui.js" charset="utf-8"></script>
    <script src="/static/js/index.js" charset="utf-8"></script>
    <script src="/static/js/message.js" charset="utf-8"></script>
    <!--<script src="/static/js/js.cookie.js" charset="utf-8"></script>-->
    <link rel="stylesheet" href="/static/css/skel-noscript.css"/>
    <link rel="stylesheet" href="/static/css/style.css"/>
    <link rel="stylesheet" href="/static/css/home.css">
    <link rel="stylesheet" href="/static/css/global.css">
    <link rel="stylesheet" href="/static/css/style-desktop.css"/>
    <link rel="stylesheet" href="/static/css/index.css" media="all">
    <link rel="stylesheet" href="/static/css/article.css"/>
    <!--<link rel="stylesheet" href="/static/css/Note.css"/>-->
</head>
<body>
<!--上方的时间和头标题-->
<header>
    <div class="totle row">
        <ul style="height: 30px;padding-top: 7px;width: 1040px">
            <li class="layui-nav-item" style="float: left;margin-left: -40px">Hi,你好，现在是：<?php echo date('Y年-m月-d日 H:m'); ?>&nbsp;&nbsp;&nbsp;星期<?php echo date('N'); ?>&nbsp;&nbsp;&nbsp;本年的第<?php echo date('W'); ?>周</li>
            <li style="float: right">您好！欢迎<?php if($_SESSION['user_name']): ?><a style="color: #007DDB;text-decoration: none" href="javascript:;"><?php echo $_SESSION['user_name']; ?></a><?php endif; ?>访问李鑫的个人博客&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo url('/index/login/login'); ?>">
                    <?php if($_SESSION['user_name']==''): ?>登录或注册<?php endif; ?></a></li>
        </ul>
    </div>
    <div class="totle row header">
        <ul class="layui-nav layui-bg-cyan" style="padding-top: 0px">
            <li class="layui-nav-item" style="margin-left: -40px"><a href="<?php echo url('/index/index/index'); ?>">首页</a></li>
            <li class="layui-nav-item"><a href="<?php echo url('/index/fresh/fresh'); ?>">新鲜科技</a></li>
            <li class="layui-nav-item"><a href="<?php echo url('/index/note/note'); ?>">生活笔记</a></li>
            <li class="layui-nav-item"><a href="<?php echo url('/index/message/message'); ?>">给我留言</a></li>
            <!--<li class="layui-nav-item"><a href="<?php echo url('/index/sponsor/sponsor'); ?>">赞助作者</a></li>-->
            <li class="layui-nav-item"><a href="<?php echo url('/index/personal/personal'); ?>">个人中心</a></li>
            <li style="padding-top: 10px;float: right;color: black;margin-left: 326px;padding-right: 9px;" class="layui-input-inline">
                <input type="text" name="title" style="width: 180px;float: left;" lay-verify="required" placeholder="请输入想要查找的内容..." class="layui-input">
                <button class="layui-btn layui-btn-normal">搜索</button>
            </li>
        </ul>
    </div>
    <!--返回顶部-->
    <span style="font-size:14px">
    <p id="back-to-top">
        <a href="#top">
            <img src="/static/images/time.jpg" alt="返回顶部"/></a>
    </p>
</span>
    <script>
        // 回到顶部
        $(function(){
            //当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
            $(function () {
                $(window).scroll(function(){
                    if ($(window).scrollTop()>100){
                        $("#back-to-top").fadeIn(1000);
                    }
                    else
                    {
                        $("#back-to-top").fadeOut(1000);
                    }
                });

                //当点击跳转链接后，回到页面顶部位置
                $("#back-to-top").click(function(){
                    //$('body,html').animate({scrollTop:0},1000);
                    if ($('html').scrollTop()) {
                        $('html').animate({ scrollTop: 0 }, 1000);
                        return false;
                    }
                    $('body').animate({ scrollTop: 0 }, 1000);
                    return false;
                });
            });
        });
    </script>
    <script type="text/javascript">
        var urlstr = location.href;
        var urlstatus=false;
        $(".layui-nav a").each(function () {
            var aa = $(this).attr('href').substr(0,$(this).attr('href').length-5);
            if (urlstr.indexOf(aa) > -1&&$(this).attr('href')!='') {
                $(this).addClass('layui-this');
                urlstatus = true;
            }else {
                $(this).removeClass('layui-this');
            }
        });
        if (!urlstatus) {$(".layui-nav a").eq(0).addClass('layui-this');}
    </script>
</header>

<div class="totle">
    <div class="row">
        <div class="col-xl-6" style="width: 730px;height: 650px;float: left">
            <textarea rows="15" style="margin-top: 20px;width: 100%" placeholder="欢迎讨论..."></textarea>
            <br/><br/>
            <button type="button" class="btn btn-info">点击留言</button>
        </div>
        <div id="aboutme" class="col-xl-6 well well-lg site-doc-icon">
            <h2 class="ab_title">精选留言</h2>
            <div class="ab_con">
                <p>你好世界</p>
                <p>你好世界</p>
                <p>你好世界</p>
                <p>你好世界</p>
                <p>你好世界</p>
            </div>
        </div>
    </div>
</div>
<style>
    #aboutme {
        background: #FFF;
        border-radius: 10px;
        overflow: hidden;
        width: 343px;
        height: 600px;
        margin-left: 20px;
        padding-left: 14px;
        font-size: 16px;
        margin-top: 20px;
    }

    .ab_title {
        text-align: center;
        position: relative;
        margin: 20px;
    }

    .ab_title:before {
        content: "";
        width: 25%;
        height: 2px;
        background: #000;
        position: absolute;
        left: 0;
        bottom: 8px
    }

    .ab_title:after {
        content: "";
        width: 25%;
        height: 2px;
        background: #000;
        position: absolute;
        right: 0;
        bottom: 8px
    }

    .ab_con {
        line-height: 30px;
        padding: 10px;
    }

    .ab_con p {
        background: #f6f6f6;
        margin: 5px 0;
        padding-left: 10px;
        border-radius: 5px;
        text-shadow: rgba(255, 255, 255, 0.3) 0px 1px 0px;
    }

    .avatar img {
        width: 100px;
        height: 100px
    }
</style>