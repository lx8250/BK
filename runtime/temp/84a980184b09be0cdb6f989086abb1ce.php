<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:51:"E:\BK/application/index\view\personal\personal.html";i:1526980811;s:47:"E:\BK\application\index\view\public\header.html";i:1541405428;}*/ ?>
<!DOCTYPE html>
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
            <li style="float: right"><?php if($name!='null'): ?><a style="color: #007DDB;text-decoration: none" href="javascript:;"><?php echo $name; ?></a><?php endif; ?>您好！欢迎访问李鑫的个人博客&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo url('/index/login/login'); ?>"><?php if($name=='null'): ?>登录或注册<?php endif; ?></a></li>
        </ul>
    </div>
    <div class="row" style="margin-left: 20%;margin-right: -9%">
        <ul class="layui-nav layui-bg-cyan" style="padding-top: 0px">
            <li class="layui-nav-item" style="margin-left: -40px"><a href="<?php echo url('/index/index/index'); ?>">首页</a></li>
            <li class="layui-nav-item"><a href="<?php echo url('/index/fresh/fresh'); ?>">新鲜科技</a></li>
            <li class="layui-nav-item"><a href="<?php echo url('/index/note/note'); ?>">生活笔记</a></li>
            <li class="layui-nav-item"><a href="<?php echo url('/index/message/message'); ?>">给我留言</a></li>
            <li class="layui-nav-item"><a href="<?php echo url('/index/sponsor/sponsor'); ?>">高德地图</a></li>
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

<link rel="stylesheet" href="/static/css/personal.css"/>
<div class="totle">
    <div class="row" style="margin-left: 0px;width: 1096px">
        <div class="col-xl-6 well well-lg" style="width: 680px;height: 650px;">
                <p class="h4" style="line-height: 26px">年龄，那是一种对时间的焦虑。张爱玲一句“出名要趁早”，害了不知多少人。人是靠价值相互认同的，而不是年龄；一个人要知道自己想要什么，才能做成事情。别着急，你还年轻，喜欢的事情大可以努力去做，没有钱途也没关系。毕竟，你还年轻啊！</p>
            <p class="h4">李笑来在《把时间当作朋友》里写：我们总是对短期收益期望过高，却对长期收益期望过低。
                他指英语，也说人生。说来说去，还是急。</p>
            <p class="h4">这一代中国年轻人可能面临着某种吊诡的自我矛盾：一方面，我们是前所未有早衰的一代，“十八岁开始苍老”，二十岁开始怀旧，尽管仍在青春，“你爱谈天我爱笑”的时光竟成了一代人的集体乡愁；另一方面，我们拼命的想要向前奔跑，想要稳定、无虑的生活，想要拥抱住某种确定感，焦虑着，想要立即像三四十岁的人那样，车房不缺，事业成功。<br/>
                你，你，你，真的享受年轻吗？为何你一边怀旧一边还在努力奔跑？<br/>
                你，你，你，真的热爱冒险和漂泊吗？为什么将理想纳给稳定和房产证做投名状？<br/>
                你，你，你，真的珍惜可能性吗？为何我看到你宁肯早衰也要拥抱“生活的终结”？<br/>
                生活更美好的可能性，难道不在于这缓缓经历的一步步、默默感知的一天天，而在于未来的宏大勾画？</p>
            <p class="h4">
                我不知道自己最终要去哪，还在一边晃悠一边张望，走一步停一下，摸摸这个碰碰那个，试图去感知、观察、理解这个世界。新鲜好奇着呢。但我确定，我只会走自己想走的林荫道；我确定，我会像哈维尔说的那样，遵从自己的内心，活在真实里。
            </p>
        </div>
        <div id="aboutme" class="col-xl-6 well well-lg site-doc-icon">
            <h2 class="ab_title">关于我</h2>
            <div id="img" class="blogerinfo-figure layui-anim layui-anim-rotate" data-anim="layui-anim-rotate">
                <img src="/static/images/Absolutely.jpg" alt="Absolutely">
            </div>
            <div class="ab_con">
                <p>网名：辣萝卜条儿 | 李鑫</p>
                <p>职业：日常打怪兽 </p>
                <p>爱好：洗澡、睡觉 </p>
                <p>个人微信：a210825-</p>
                <p>邮箱：lx8250@126.com</p>
            </div>
        </div>
    </div>
</div>
<script>
    layui.use('jquery', function () {
        var $ = layui.$;
        //演示动画
        $('.site-doc-icon .layui-anim').on('click', function () {
            var othis = $(this), anim = othis.data('anim');
            //停止循环
            if (othis.hasClass('layui-anim-loop')) {
                return othis.removeClass(anim);
            }
            othis.removeClass(anim);
            setTimeout(function () {
                othis.addClass(anim);
            });
        });
    });
</script>