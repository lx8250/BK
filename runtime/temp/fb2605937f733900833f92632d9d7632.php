<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:45:"E:\BK/application/admin\view\daily\daily.html";i:1522652362;s:45:"E:\BK\application\admin\view\index\index.html";i:1522655221;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>后台博客管理</title>
    <link rel="stylesheet" href="/static/css/layui.css">
    <script type="text/javascript" src="/static/layui.js"></script>
    <link rel="stylesheet" href="/static/css/bootstrap.css">
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">Lx8250</div>
        <!-- 头部区域 -->
        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item"><a href="">控制台</a></li>
            <li class="layui-nav-item"><a href="">商品管理</a></li>
            <li class="layui-nav-item"><a href="">用户</a></li>
            <li class="layui-nav-item">
                <a href="javascript:;">其它系统</a>
                <dl class="layui-nav-child">
                    <dd><a href="">邮件管理</a></dd>
                    <dd><a href="">消息管理</a></dd>
                    <dd><a href="">授权管理</a></dd>
                </dl>
            </li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <img src="/static/houtai/images/header.jpg" class="layui-nav-img">
                    贤心
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="">基本资料</a></dd>
                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="">退了</a></li>
        </ul>
    </div>

    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域 -->
            <ul class="layui-nav layui-nav-tree" lay-filter="test">
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">文章</a>
                    <dl class="layui-nav-child">
                        <dd lay-id="111"><a href="javascript:;" data-options="<?php echo url("","",true,false);?>">每日一语</a></dd>
                        <dd><a href="javascript:;">列表二</a></dd>
                        <dd><a href="javascript:;">列表三</a></dd>
                        <dd><a href="">超链接</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">解决方案</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;">列表一</a></dd>
                        <dd><a href="javascript:;">列表二</a></dd>
                        <dd><a href="">超链接</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item"><a href="">云市场</a></li>
                <li class="layui-nav-item"><a href="">发布商品</a></li>
            </ul>
        </div>
    </div>

    <div class="layui-body">
        <!-- 内容主体区域 -->
        <div style="padding: 15px;">
            <iframe id="myIframe" name="myIframe" frameBorder=0 marginwidth=0 marginheight=0 scrolling=no width="100%" onload="iframeFitHeight(this)">
                <h2 style="margin-top: 20%;color: #777;text-align: center;font-size: 40px">欢迎使用博客后台管理系统！</h2>
            </iframe>
        </div>
    </div>

    <!--<div class="layui-footer">-->
    <!--&lt;!&ndash; 底部固定区域 &ndash;&gt;-->
    <!--© layui.com - 底部固定区域-->
    <!--</div>-->
</div>
<script>
    //JavaScript代码区域
    layui.use('element', function () {
        var element = layui.element;
        element.on('nav(test)', function (elem) {
            /*使用DOM操作获取超链接的自定义data属性值*/
            var options = eval('(' + elem.context.children[0].dataset.options + ')');
            var title = options.title;
            element.tabAdd('tabs', {
                title: title,
                content: '<iframe scrolling="auto" frameborder="0"  src="' + url + '" style="width:100%;height:100%;"></iframe>',
                id: '111'
            });
        });
    });
</script>
</body>
</html>
<div class="layui-body">
    <!-- 内容主体区域 -->
    <div style="padding: 15px;">
        你好
    </div>
</div>