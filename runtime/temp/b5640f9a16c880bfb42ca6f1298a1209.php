<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:45:"E:\BK/application/index\view\index\index.html";i:1521710575;s:47:"E:\BK\application\index\view\public\header.html";i:1521710951;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>李鑫个人博客</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/static/css/layui.css" media="all">
    <link rel="stylesheet" href="/static/css/index.css" media="all">
    <script src="/static/lay/layui.js" charset="utf-8"></script>
    <script src="/static/layui.js" charset="utf-8"></script>
    <script src="/static/index.js" charset="utf-8"></script>
</head>
<body>
<!--上方的时间和头标题-->
<header>
    <div class="totle">
        <ul style="height: 30px;padding-top: 7px">
            <li class="layui-nav-item" style="float: left">Hi,你好，现在是：<?php echo date('Y年-m月-d日 H:m'); ?>&nbsp;&nbsp;&nbsp;<?php echo date('N'); ?>&nbsp;&nbsp;&nbsp;本年的第<?php echo date('W'); ?>周</li>
            <li style="float: right">您好！欢迎访问李鑫的个人博客</li>
        </ul>
    </div>
    <div class="totle">
        <ul class="layui-nav layui-bg-cyan">
            <li class="layui-nav-item layui-this"><a href="">首页</a></li>
            <li class="layui-nav-item"><a href="javascript:;">新鲜科技</a></li>
            <li class="layui-nav-item"><a href="javascript:;">生活笔记</a></li>
            <li class="layui-nav-item"><a href="javascript:;">给我留言</a></li>
            <li class="layui-nav-item"><a href="javascript:;">赞助作者</a></li>
            <li class="layui-nav-item"><a href="javascript:;">个人中心</a></li>
            <li style="padding-top: 10px;float: right">
                <input type="text" name="title" style="width: 180px;float: left;" lay-verify="required"
                       placeholder="请输入想要查找的内容..." class="layui-input">
                <button class="layui-btn layui-btn-normal">搜索</button>
            </li>
        </ul>
    </div>
</header>
<div class="totle">
    <div class="layui-carousel" id="test1" lay-filter="test1">
        <div carousel-item="">
            <div><img src="/static/images/lunbo/1.png"></div>
            <div><img src="/static/images/lunbo/2.png"></div>
        </div>
    </div>
    <div id="test2">
        <p>毕竟不是作家，写不出那么好的文章。--因为没有丰富阅历和经验！</p>
    </div>
</div>
<div class="totle1" id="remenpaihang">
    <div id="remenleft">
        <fieldset id="fieldset" class="layui-elem-field">
            <legend>热门排行</legend>
            <div class="layui-field-box">
                内容区域
            </div>
            <hr class="layui-bg-red">
            <div class="layui-field-box">
                内容区域
            </div>
            <hr class="layui-bg-orange">
            <div class="layui-field-box">
                内容区域
            </div>
            <hr class="layui-bg-blue">
            <div class="layui-field-box">
                内容区域
            </div>
            <hr class="layui-bg-black">
            <div class="layui-field-box">
                内容区域
            </div>
            <hr class="layui-bg-black">
        </fieldset>

    </div>
    <div id="wenzhanglist">
        <blockquote class="layui-elem-quote" style="margin-top: 10px;">
            <div></div>
        </blockquote>
        <blockquote class="layui-elem-quote" style="margin-top: 10px;">
            <div id="test2"></div>
        </blockquote>
        <blockquote class="layui-elem-quote" style="margin-top: 10px;">
            <div></div>
        </blockquote>

        <!--<ul class="layui-nav layui-nav-tree layui-inline" lay-filter="demo" style="margin-right: 10px;">-->
        <!--<li class="layui-nav-item"><a href="">默认展开</a></li>-->
        <!--<li class="layui-nav-item"><a href="">解决方案</a></li>-->
        <!--<li class="layui-nav-item"><a href="">云市场</a></li>-->
        <!--<li class="layui-nav-item"><a href="">社区</a></li>-->
        <!--</ul>-->
    </div>
</div>
<div class="totle2">
    <div class="layui-tab" id="rementuijian">
        <ul class="layui-tab-title" id="tuijian">
            <li class="layui-this">网站设置</li>
            <li>用户管理</li>
            <li>权限分配</li>
        </ul>
        <div class="layui-tab-content" id="tuijianwenzhang">
            <div class="layui-tab-item layui-show">
                <li>1</li>
                <li>1</li>
                <li>1</li>
                <li>1</li>
                <li>1</li>
                <li>1</li>
                <li>1</li>
                <li>1</li>
                <li>1</li>
                <li>1</li>
            </div>
            <div class="layui-tab-item">
                <li>2</li>
                <li>2</li>
                <li>2</li>
                <li>2</li>
                <li>2</li>
                <li>2</li>
                <li>2</li>
                <li>2</li>
                <li>2</li>
                <li>2</li>
            </div>
            <div class="layui-tab-item">
                <li>3</li>
                <li>3</li>
                <li>3</li>
                <li>3</li>
                <li>3</li>
                <li>3</li>
                <li>3</li>
                <li>3</li>
                <li>3</li>
                <li>3</li>
            </div>
        </div>
    </div>
</div>
<script>
    layui.use(['util', 'laydate', 'layer'], function(){
        var util = layui.util
            ,laydate = layui.laydate
            ,layer = layui.layer;
        //固定块
        util.fixbar({
            bar1: true
            ,bar2: true
            ,css: {right: 50, bottom: 100}
            ,bgcolor: '#393D49'
            ,click: function(type){
                if(type === 'bar1'){
                    layer.msg('icon是可以随便换的')
                } else if(type === 'bar2') {
                    layer.msg('两个bar都可以设定是否开启')
                }
            }
        });

        //倒计时
        var thisTimer, setCountdown = function(y, M, d, H, m, s){
            var endTime = new Date(y, M||0, d||1, H||0, m||0, s||0) //结束日期
                ,serverTime = new Date(); //假设为当前服务器时间，这里采用的是本地时间，实际使用一般是取服务端的

            clearTimeout(thisTimer);
            util.countdown(endTime, serverTime, function(date, serverTime, timer){
                var str = date[0] + '天' + date[1] + '时' +  date[2] + '分' + date[3] + '秒';
                lay('#test2').html(str);
                thisTimer = timer;
            });
        };
        setCountdown(2099,1,1);

        laydate.render({
            elem: '#test1'
            ,type: 'datetime'
            ,done: function(value, date){
                setCountdown(date.year, date.month - 1, date.date, date.hours, date.minutes, date.seconds);
            }
        });


        //某个时间在当前时间的多久前
        var setTimeAgo = function(y, M, d, H, m, s){
            var str = util.timeAgo(new Date(y, M||0, d||1, H||0, m||0, s||0));
            lay('#test4').html(str);
        };

        laydate.render({
            elem: '#test3'
            ,type: 'datetime'
            ,done: function(value, date){
                setTimeAgo(date.year, date.month - 1, date.date, date.hours, date.minutes, date.seconds);
            }
        });

    });
</script>
