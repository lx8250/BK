<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:45:"E:\BK/application/index\view\fresh\fresh.html";i:1522225448;s:47:"E:\BK\application\index\view\public\header.html";i:1522226989;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>李鑫个人博客</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
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
    <!--<script src="/static/js/jquery.cookie.js" charset="utf-8"></script>-->
    <link rel="stylesheet" href="/static/css/skel-noscript.css"/>
    <link rel="stylesheet" href="/static/css/style.css"/>
    <link rel="stylesheet" href="/static/css/home.css">
    <link rel="stylesheet" href="/static/css/global.css">
    <link rel="stylesheet" href="/static/css/style-desktop.css"/>
    <link rel="stylesheet" href="/static/css/index.css" media="all">
    <link rel="stylesheet" href="/static/css/article.css"/>
    <link rel="stylesheet" href="/static/css/Note.css"/>



</head>
<body>
<!--上方的时间和头标题-->
<header>
    <div class="totle row">
        <ul style="height: 30px;padding-top: 7px;width: 1040px">
            <li class="layui-nav-item" style="float: left;margin-left: -40px">Hi,你好，现在是：<?php echo date('Y年-m月-d日 H:m'); ?>&nbsp;&nbsp;&nbsp;星期<?php echo date('N'); ?>&nbsp;&nbsp;&nbsp;本年的第<?php echo date('W'); ?>周</li>
            <li style="float: right">您好！欢迎访问李鑫的个人博客</li>
        </ul>
    </div>
    <div class="totle row">
        <ul class="layui-nav layui-bg-cyan" style="padding-top: 0px">
            <li class="layui-nav-item" style="margin-left: -40px"><a href="<?php echo url('/index/index/index'); ?>">首页</a></li>
            <li class="layui-nav-item"><a href="<?php echo url('/index/fresh/fresh'); ?>">新鲜科技</a></li>
            <li class="layui-nav-item"><a href="<?php echo url('/index/note/note'); ?>">生活笔记</a></li>
            <li class="layui-nav-item"><a href="<?php echo url('/index/message/message'); ?>">给我留言</a></li>
            <li class="layui-nav-item"><a href="<?php echo url('/index/sponsor/sponsor'); ?>">赞助作者</a></li>
            <li class="layui-nav-item"><a href="<?php echo url('/index/personal/personal'); ?>">个人中心</a></li>
            <li style="padding-top: 10px;float: right;color: black;margin-left: 232px;padding-right: 9px;" class="layui-input-inline">
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

<div id="main-wrapper">
    <div class="container">

        <div id="main" style="padding-top: 0px;">
            <blockquote class="layui-elem-quote sitemap layui-breadcrumb shadow" style="border-left: 5px solid #6495Ed;margin-top: 0px;visibility: visible;margin-left: -23px;width: 1045px">
                <a href="/" title="网站首页">网站首页</a>
                <a><cite>新鲜科技</cite></a>
            </blockquote>
            <div class="row">

                <div id="content" class="8u skel-cell-important" style="margin-left: 24px">
                    <div class="blog-body">
                        <div class="blog-container">

                            <div class="blog-main">
                                <div class="blog-main-left">

                                    <div class="article shadow">
                                        <div class="article-left">
                                            <img src="/static/images/timg.jpg" alt="" width="150px" height="116px">
                                        </div>
                                        <div class="article-right">
                                            <div class="article-title">
                                                <a href="../controller/detail.php?id=37">正月十五元宵节</a>
                                            </div>
                                            <div class="article-abstract">
                                                元宵节的由来与传说
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="article-footer">
                                            <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2018-03-02 16:30:33</span>
                                            <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;Cheng</span>
                                            <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">历史</a></span>
                                            <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;13</span>
                                            <span class="article-viewinfo"><i class="fa fa-comments"></i>&nbsp;4</span>
                                        </div>
                                    </div>
                                    <div class="article shadow">
                                        <div class="article-left">
                                            <img src="/static/images/PHPfunction.jpg" alt="" width="150px" height="116px">
                                        </div>
                                        <div class="article-right">
                                            <div class="article-title">
                                                <a href="/static/detail.php?id=46">PHP常用函数</a>
                                            </div>
                                            <div class="article-abstract">
                                                常用PHP函数示例
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="article-footer">
                                            <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2018-03-05 20:46:39</span>
                                            <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;IT_Wallace</span>
                                            <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">PHP</a></span>
                                            <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;13</span>
                                            <span class="article-viewinfo"><i class="fa fa-comments"></i>&nbsp;2</span>
                                        </div>
                                    </div>
                                    <div class="article shadow">
                                        <div class="article-left">
                                            <img src="/static/images/mysql.jpg" alt="" width="150px" height="116px">
                                        </div>
                                        <div class="article-right">
                                            <div class="article-title">
                                                <a href="/static/detail.php?id=44">MySql的join（连接）查询</a>
                                            </div>
                                            <div class="article-abstract">
                                                三表 left join 写法
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="article-footer">
                                            <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2018-03-08 08:34:02</span>
                                            <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;海贼王路飞</span>
                                            <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">MySql</a></span>
                                            <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;14</span>
                                            <span class="article-viewinfo"><i class="fa fa-comments"></i>&nbsp;2</span>
                                        </div>
                                    </div>
                                    <div class="article shadow">
                                        <div class="article-left">
                                            <img src="/static/images/wechat.jpg" alt="" width="150px" height="116px">
                                        </div>
                                        <div class="article-right">
                                            <div class="article-title">
                                                <a href="../controller/detail.php?id=54">浅谈微信小程序的推广方法</a>
                                            </div>
                                            <div class="article-abstract">
                                                小程序是当前比较火的概念，如果你开发了一款小程序一定也很想让其盈利吧？想要获取流量红利，商家上线小程序后，就需要注意这六大引流方式。
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="article-footer">
                                            <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2018-03-08 14:36:10</span>
                                            <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;拓海</span>
                                            <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">杂谈</a></span>
                                            <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;14</span>
                                            <span class="article-viewinfo"><i class="fa fa-comments"></i>&nbsp;3</span>
                                        </div>
                                    </div>
                                    <div class="article shadow">
                                        <div class="article-left">
                                            <img src="/static/images/mianshi1.jpg" alt="" width="150px" height="116px">
                                        </div>
                                        <div class="article-right">
                                            <div class="article-title">
                                                <a href="../controller/detail.php?id=49">PHP面试总结分享</a>
                                            </div>
                                            <div class="article-abstract">
                                                学会这些，妈妈再也不担心我的面试啦
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="article-footer">
                                            <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2018-03-08 11:05:08</span>
                                            <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;admin</span>
                                            <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">PHP</a></span>
                                            <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;15</span>
                                            <span class="article-viewinfo"><i class="fa fa-comments"></i>&nbsp;2</span>
                                        </div>
                                    </div>
                                    <div class="article shadow">
                                        <div class="article-left">
                                            <img src="/static/images/ef.jpg" alt="" width="150px" height="116px">
                                        </div>
                                        <div class="article-right">
                                            <div class="article-title">
                                                <a href="../controller/detail.php?id=39">Web安全之跨站请求伪造CSRF</a>
                                            </div>
                                            <div class="article-abstract">
                                                跨站请求伪造：（英语：Cross-site request forgery）缩写为CSRF，是一种挟持用户在当前已登录的Web应用程序上执行非本意操作的攻击方法
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="article-footer">
                                            <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2018-03-05 20:37:36</span>
                                            <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;John</span>
                                            <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">Web前端</a></span>
                                            <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;16</span>
                                            <span class="article-viewinfo"><i class="fa fa-comments"></i>&nbsp;3</span>
                                        </div>
                                    </div>
                                    <div class="article shadow">
                                        <div class="article-left">
                                            <img src="/static/images/MHW.jpg" alt="" width="150px" height="116px">
                                        </div>
                                        <div class="article-right">
                                            <div class="article-title">
                                                <a href="../controller/detail.php?id=40">微信支付和支付宝支付的三行代码开发教程</a>
                                            </div>
                                            <div class="article-abstract">
                                                支付的demo
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="article-footer">
                                            <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2018-03-08 08:37:50</span>
                                            <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;小马</span>
                                            <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">学习</a></span>
                                            <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;16</span>
                                            <span class="article-viewinfo"><i class="fa fa-commenting"></i>&nbsp;5</span>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sidebar" class="4u" style="width: 33.2%;padding-left: 20px;">
                    <div class="blog-main-right">
                        <div class="blog-search">
                            <form class="layui-form" method="post" action="../controller/search.php?page=1">
                                <div class="layui-form-item">
                                    <div class="search-keywords shadow">
                                        <input type="text" name="keywords" placeholder="输入关键词搜索..." autocomplete="on" class="layui-input">
                                    </div>
                                    <div class="search-submit shadow">
                                        <a class="search-btn" lay-submit="formSearch" lay-filter="formSearch"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="article-category shadow">
                            <div class="article-category-title">分类导航</div>
                            <a href="../controller/search_category.php?page=1&amp;cate=C语言基础">C语言基础</a>
                            <a href="../controller/search_category.php?page=1&amp;cate=JavaScript">JavaScript</a>
                            <a href="../controller/search_category.php?page=1&amp;cate=MySql">MySql</a>
                            <a href="../controller/search_category.php?page=1&amp;cate=PHP">PHP</a>
                            <a href="../controller/search_category.php?page=1&amp;cate=SQL Server">SQL Server</a>
                            <a href="../controller/search_category.php?page=1&amp;cate=Web前端">Web前端</a>
                            <div class="clear"></div>
                        </div>


                        <div class="blog-module shadow" style="font-family: 'Roboto Condensed', sans-serif;font-size: 10pt;font-weight: 300;line-height: 1.75em;width: 100%;height: 100%;float: right;">
                            <div class="blog-module-title">作者推荐</div>
                            <ul class="fa-ul blog-module-ul">
                                <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">Web安全之跨站请求伪造CSRF</a></li>
                                <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">ASP.NET MVC 防范跨站请求伪造（CSRF）</a></li>
                                <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">C#基础知识回顾-扩展方法</a></li>
                                <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">一步步制作时光轴（一）（HTML篇）</a></li>
                                <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">一步步制作时光轴（二）（CSS篇）</a></li>
                                <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">一步步制作时光轴（三）（JS篇）</a></li>
                                <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">写了个Win10风格快捷菜单！</a></li>
                                <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">ASP.NET MVC自定义错误页</a></li>
                                <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">ASP.NET MVC制作404跳转（非302和200）</a></li>
                                <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">基于laypage的layui扩展模块（pagesize.js）！</a></li>
                            </ul>
                        </div>
                        <div class="blog-module shadow" style="font-family: 'Roboto Condensed', sans-serif;font-size: 10pt;font-weight: 300;line-height: 1.75em;width: 100%;height: 100%;float: right;">
                            <div class="blog-module-title">随便看看</div>
                            <ul class="fa-ul blog-module-ul">
                                <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">一步步制作时光轴（一）（HTML篇）</a></li>
                                <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">ASP.NET MVC制作404跳转（非302和200）</a></li>
                                <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">ASP.NET MVC 防范跨站请求伪造（CSRF）</a></li>
                                <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">一步步制作时光轴（三）（JS篇）</a></li>
                                <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">基于laypage的layui扩展模块（pagesize.js）！</a></li>
                                <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">一步步制作时光轴（二）（CSS篇）</a></li>
                                <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">写了个Win10风格快捷菜单！</a></li>
                                <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">常用正则表达式</a></li>
                            </ul>
                        </div>

                        <!--右边悬浮 平板或手机设备显示-->
                        <div class="category-toggle"><i class="fa fa-chevron-left"></i></div>

                        <div class="clear"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>