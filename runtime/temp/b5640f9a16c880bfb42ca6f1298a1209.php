<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:45:"E:\BK/application/index\view\index\index.html";i:1521793609;s:47:"E:\BK\application\index\view\public\header.html";i:1521793443;}*/ ?>
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
    <link rel="stylesheet" href="/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/css/font-awesome.min.css"/>
    <script src="/static/layui.js" charset="utf-8"></script>
    <script src="/static/index.js" charset="utf-8"></script>
    <script src="/static/js/jquery.min.js" charset="utf-8"></script>
    <script src="/static/js/bootstrap.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="/static/css/skel-noscript.css" />
    <link rel="stylesheet" href="/static/css/css/style.css" />

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
    <div id="content" class="8u skel-cell-important">
    <div class="article shadow">
        <div class="article-left">
            <img src="/static/images/Z.jpg" alt="你好世界" width="153px" height="117px"/>
        </div>
        <div class="article-right">
            <div class="article-title">
                <a href="">你好世界</a>
            </div>
            <div class="article-abstract">
                你好世界！
            </div>
        </div>
        <div class="clear"></div>
        <div class="article-footer">
            <span>
                <i class="fa fa-clock-o"/>
                &nbsp;&nbsp;2018-3-14 15:51:16
            </span>
            <span class="article-author">
                <i class="fa fa-user"></i>
                &nbsp;&nbsp;LiXin
            </span>
            <span>
                <i class="fa fa-tag"></i>
                &nbsp;&nbsp;<a href="#">PHP</a>
            </span>
            <span class="article-viewinfo">
                <i class="fa fa-eye"></i>
                &nbsp;&nbsp;29
            </span>
            <span class="article-viewinfo">
                <i class="fa fa-commenting"></i>
                &nbsp;&nbsp;2
            </span>
        </div>
    </div>
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
    layui.use('element', function(){
        var element = layui.element; //导航的hover效果、二级菜单等功能，需要依赖element模块

        //监听导航点击
        element.on('nav(demo)', function(elem){
            //console.log(elem)
            layer.msg(elem.text());
        });
    });
</script>

