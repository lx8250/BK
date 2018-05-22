<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:45:"E:\BK/application/index\view\index\index.html";i:1526866751;s:47:"E:\BK\application\index\view\public\header.html";i:1526981265;}*/ ?>
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
            <li style="float: right">您好！欢迎<?php if($name!='null'): ?><a style="color: #007DDB;text-decoration: none" href="javascript:;"><?php echo $name; ?></a><?php endif; ?>访问李鑫的个人博客&nbsp;&nbsp;&nbsp;&nbsp;
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

<div class="totle">
    <div class="row">
        <div class="col-xs-7" style="width: 1093px;">
            <div class="layui-carousel" id="test1" lay-filter="test1">
                <div carousel-item="">
                    <div><img src="/static/images/lunbo/1.png"></div>
                    <div><img src="/static/images/lunbo/2.png"></div>
                </div>
            </div>
            <div id="test2" class="col-xs-5">
                <p>毕竟不是作家，写不出那么好的文章。--因为没有丰富阅历和经验！</p>
            </div>
        </div>
    </div>
<div class="row" id="wenzhang">
    <div class="well well-lg" style="margin-top: 20px;width: 640px">
        <div class="col-xl-7"  style="margin-top: -50px;width: 586px">
            <div class="article shadow">
                <div class="article-left">
                    <img src="/static/images/Z.jpg" alt="" width="150px" height="116px">
                </div>
                <div class="article-right">
                    <div class="article-title">
                        <a href="javascript:void(0)">php简易爬虫</a>
                    </div>
                    <div class="article-abstract">
                        说这是一个爬虫有点说大话了，但这个名字又恰到好处，所以在前面加了”简易“两个字，表明 这是一个阉割的爬虫，简单的使用或者玩玩儿还是可以的。
                    </div>
                </div>
                <div class="clear"></div>
                <div class="article-footer">
                    <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2018-03-14 15:51:16</span>
                    <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;Leo</span>
                    <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">PHP</a></span>
                    <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;35</span>
                    <span class="article-viewinfo"><i class="fa fa-comments"></i>&nbsp;1</span>
                </div>
            </div>
            <div class="article shadow">
                <div class="article-left">
                    <img src="/static/images/Z.jpg" alt="" width="150px" height="116px">
                </div>
                <div class="article-right">
                    <div class="article-title">
                        <a href="javascript:void(0)">php简易爬虫</a>
                    </div>
                    <div class="article-abstract">
                        说这是一个爬虫有点说大话了，但这个名字又恰到好处，所以在前面加了”简易“两个字，表明 这是一个阉割的爬虫，简单的使用或者玩玩儿还是可以的。
                    </div>
                </div>
                <div class="clear"></div>
                <div class="article-footer">
                    <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2018-03-14 15:51:16</span>
                    <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;Leo</span>
                    <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">PHP</a></span>
                    <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;35</span>
                    <span class="article-viewinfo"><i class="fa fa-comments"></i>&nbsp;1</span>
                </div>
            </div>
            <div class="article shadow">
                <div class="article-left">
                    <img src="/static/images/Z.jpg" alt="" width="150px" height="116px">
                </div>
                <div class="article-right">
                    <div class="article-title">
                        <a href="javascript:void(0)">PHP操作Redis实例讲解</a>
                    </div>
                    <div class="article-abstract">
                        Redis是一个速度非常快的非关系数据库，它可以存储键(key)与5种不同类型的值(value)之间的映射(mapping)，可以将存储在内存的键值对数据持久化到硬盘，可以使用复制特性来扩展读性能，还可以使用客户端分片来扩展写性能
                    </div>
                </div>
                <div class="clear"></div>
                <div class="article-footer">
                    <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2018-03-08 15:24:18</span>
                    <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;田中裕之</span>
                    <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">PHP</a></span>
                    <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;23</span>
                    <span class="article-viewinfo"><i class="fa fa-comments"></i>&nbsp;1</span>
                </div>
            </div>
            <div class="article shadow">
                <div class="article-left">
                    <img src="/static/images/Z.jpg" alt="" width="150px" height="116px">
                </div>
                <div class="article-right">
                    <div class="article-title">
                        <a href="javascript:void(0)">简单的理解PHP冒泡排序</a>
                    </div>
                    <div class="article-abstract">
                        PHP中涉及到多种排序，而冒泡排序应该是我用的最闹心的一种排序，弄了老半天还是没太懂，这篇简单讲述PHP冒泡排序的很适合像我一样不太懂冒泡排序的看哦！
                    </div>
                </div>
                <div class="clear"></div>
                <div class="article-footer">
                    <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2018-03-08 15:12:01</span>
                    <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;溧阳</span>
                    <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">PHP</a></span>
                    <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;19</span>
                    <span class="article-viewinfo"><i class="fa fa-comments"></i>&nbsp;1</span>
                </div>
            </div>
            <div class="article shadow">
                <div class="article-left">
                    <img src="/static/images/Z.jpg" alt="" width="150px" height="116px">
                </div>
                <div class="article-right">
                    <div class="article-title">
                        <a href="javascript:void(0)">JS代码怎样实现记住账号密码</a>
                    </div>
                    <div class="article-abstract">
                        JS代码怎样实现记住账号密码，JS代码实现记住账号密码的注意事项有哪些，下面就是实战案例，一起来看一下。
                    </div>
                </div>
                <div class="clear"></div>
                <div class="article-footer">
                    <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2018-03-08 15:05:27</span>
                    <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;admin</span>
                    <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">JavaScript</a></span>
                    <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;19</span>
                    <span class="article-viewinfo"><i class="fa fa-comments"></i>&nbsp;3</span>
                </div>
            </div>
            <div>
                <ul class="pagination">
                    <li><a href="javascript:void(0)">首页</a></li>
                    <li><a href="javascript:void(0)">«</a></li>
                    <li class="active"><a href="javascript:void(0)">1</a></li>
                    <li><a href="javascript:void(0)">2</a></li>
                    <li><a href="javascript:void(0)">3</a></li>
                    <li><a href="javascript:void(0)">4</a></li>
                    <li><a href="javascript:void(0)">5</a></li>
                    <li><a href="javascript:void(0)">»</a></li>
                    <li><a href="javascript:void(0)">尾页</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="well well-lg" style="width: 382px;margin-top: 20px;margin-left: 20px">
        <div id="sidebar" class="col-xl-6 4u" style="width: 326px;margin-top: -50px">
            <div class="blog-main-right">
                <div class="blogerinfo shadow" style="width: 370px;float: right;">
                    <div class="blogerinfo-figure">
                        <img src="/static/images/Absolutely.jpg" alt="Absolutely">
                    </div>
                    <p class="blogerinfo-nickname">Absolutely</p>
                    <p class="blogerinfo-introduce">一枚90后后端程序员，PHP开发工程师</p>
                    <p class="blogerinfo-location"><i class="fa fa-location-arrow"></i>&nbsp;河南 - 洛阳</p>
                    <hr>
                    <div class="blogerinfo-contact">
                        <a target="_blank"
                           href="http://wpa.qq.com/msgrd?v=3&amp;uin=1372470407&amp;site=qq&amp;menu=yes"
                           title="QQ交流"><i class="fa fa-qq fa-2x"></i></a>
                        <!--QQ邮箱的模板-->
                        <!--<a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&amp;email=TiInNCYnOSsnfXx9DighNiMvJyJgLSEj" title="给我写信"><i class="fa fa-envelope fa-2x"></i></a>-->
                        <a target="_blank"
                           href="Mailto:lx8250@126.com?CC=lx8250@126.com&BCC=lx8250@126.com&Subject=Hello&Body=你好"
                           title="给我写信"><i class="fa fa-envelope fa-2x"></i></a>
                        <a target="_blank" title="新浪微博" href="javascript:layer.msg('转到你的微博主页')"><i
                                class="fa fa-weibo fa-2x"></i></a>
                        <a target="_blank" title="码云" href="javascript:layer.msg('转到你的github主页')"><i
                                class="fa fa-git fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-module shadow" id="shadow">
            <div class="blog-module-title" style="margin-top: -20px">热文排行</div>
            <ul class="fa-ul blog-module-ul">
                <li><i class="fa-li fa fa-hand-o-right"></i><a href="javascript:;">羊脂球</a></li>
                <li><i class="fa-li fa fa-hand-o-right"></i><a href="javascript:;">凡卡</a></li>
                <li><i class="fa-li fa fa-hand-o-right"></i><a href="javascript:;">浅说韩信</a></li>
                <li><i class="fa-li fa fa-hand-o-right"></i><a href="javascript:;">PHP遍历数组的三种方式</a></li>
                <li><i class="fa-li fa fa-hand-o-right"></i><a href="javascript:;">麦琪的礼物</a></li>
                <li><i class="fa-li fa fa-hand-o-right"></i><a href="javascript:;">如何写出高质量JS代码</a></li>
                <li><i class="fa-li fa fa-hand-o-right"></i><a href="javascript:;">普鲁斯特：我用半生著一书</a></li>
                <li><i class="fa-li fa fa-hand-o-right"></i><a href="javascript:;">PHP中的会话控制__笔记</a></li>
            </ul>
        </div>
    </div>
</div>
</div>


