<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:49:"E:\BK/application/index\view\message\message.html";i:1526981167;s:47:"E:\BK\application\index\view\public\header.html";i:1527068783;}*/ ?>
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

<link rel="stylesheet" href="/static/css/message.css">
<script type="text/javascript">
    //layui的懒加载
//    layui.use('flow', function(){
//        var $ = layui.jquery; //不用额外加载jQuery，flow模块本身是有依赖jQuery的，直接用即可。
//        var flow = layui.flow;
//        flow.load({
//            elem: '#demo' //指定列表容器
//            ,done: function(page, next){ //到达临界点（默认滚动触发），触发下一页
//                var lis = [];
//                //以jQuery的Ajax请求为例，请求下一页数据（注意：page是从2开始返回）
//                $.get('/api/list?page='+page, function(res){
//                    //假设你的列表返回在data集合中
//                    layui.each(res.data, function(index, item){
//                        lis.push('<li>'+ item.title +'</li>');
//                    });
//                    //执行下一页渲染，第二参数为：满足“加载更多”的条件，即后面仍有分页
//                    //pages为Ajax返回的总页数，只有当前页小于总页数的情况下，才会继续出现加载更多
//                    next(lis.join(''), page < res.pages);
//                });
//            }
//        });
//    });
    $(function(){
        $('#button').click(function(){
            $content = $('#data').val();
            $.ajax({
                type: "POST",
                url: "/index/message/verify",
                data: {"content":$content},
                dataType: 'json',
                success: function($data){
                    alert($data);
                    if($data=='留言成功，等待后台审核'){
                        $('#data').val('');
                    }
                }
            });
        });
    });
</script>
<div class="totle">
    <div class="row" style="width: 1096px">
        <div class="col-xl-6" id="div1">
            <textarea id="data" rows="15" style="width: 100%" placeholder="欢迎讨论..."></textarea>
            <br/><br/>
            <button type="button" id="button" class="btn btn-info">点击留言</button>
            <h>留言板</h>
            <div id="mess" class="well well-lg" style="width: 684px;margin-top: 10px">
                <ul>
                    <li class="li"><a style="font-size: 20px">admin</a>&nbsp;&nbsp;&nbsp;2018-5-21</li>
                    <li>Session驱动 这里参数不一致的情况下需要说明， 哪些参数用在哪个驱动，就上次前台和后台设置的session前缀不同，过期时间也不同，但是用的redis ，出现了同时退出的情况， 看了下 redis前缀根本没使用配置文件中的前缀，导致形成这个BUG困扰了很长时间呢。</li>
                </ul>
                <ul>
                    <li class="li"><a style="font-size: 20px">admin</a>&nbsp;&nbsp;&nbsp;2018-5-21</li>
                    <li>Session驱动 这里参数不一致的情况下需要说明， 哪些参数用在哪个驱动，就上次前台和后台设置的session前缀不同，过期时间也不同，但是用的redis ，出现了同时退出的情况， 看了下 redis前缀根本没使用配置文件中的前缀，导致形成这个BUG困扰了很长时间呢。</li>
                </ul>
                <ul>
                    <li class="li"><a style="font-size: 20px">admin</a>&nbsp;&nbsp;&nbsp;2018-5-21</li>
                    <li>Session驱动 这里参数不一致的情况下需要说明， 哪些参数用在哪个驱动，就上次前台和后台设置的session前缀不同，过期时间也不同，但是用的redis ，出现了同时退出的情况， 看了下 redis前缀根本没使用配置文件中的前缀，导致形成这个BUG困扰了很长时间呢。</li>
                </ul>
            </div>
            <div id="div2">
                <a href="#">查看更多</a>
            </div>
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