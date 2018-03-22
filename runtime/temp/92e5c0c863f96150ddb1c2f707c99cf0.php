<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:47:"E:\BK/application/index\view\header\header.html";i:1521703770;}*/ ?>
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
    <script src="/static/layui.js" charset="utf-8"></script>
    <script src="/static/index.js" charset="utf-8"></script>
</head>
<body>
<!--上方的时间和头标题-->
<header>
    <div class="totle">
        <ul style="height: 30px;padding-top: 7px">
            <li class="layui-nav-item" style="float: left">Hi,你好，现在是：<?php echo date('Y年-m月-d日 H:m'); ?>&nbsp;&nbsp;&nbsp;<?php echo $week; ?>&nbsp;&nbsp;&nbsp;本年的第<?php echo date('W'); ?>周</li>
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
</body>

</html>