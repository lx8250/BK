<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:43:"E:\BK/application/index\view\note\note.html";i:1522720966;s:47:"E:\BK\application\index\view\public\header.html";i:1526981265;}*/ ?>
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

<link rel="stylesheet" href="/static/css/Note.css"/>
<div class="totle" style="width:1043px;">
<div class="content">
    <div class="wrapper">
        <div class="light"><i></i></div>
        <hr style="background-color: #474954;margin-top: 6px;" class="line-left">
        <hr style="background-color: #474954;margin-top: 6px;" class="line-right">
        <div class="main">
            <h1 class="title">微俱聚更新日志</h1>
            <div class="year">
                <h2><a href="#">2014年<i></i></a></h2>
                <div class="list">
                    <ul>
                        <li class="cls highlight">
                            <p class="date">3月26日</p>
                            <p class="intro">微俱聚硬件微美图正式推出</p>
                            <p class="version">&nbsp;</p>
                            <div class="more">
                                <p>首创微信集商务、娱乐一体化多媒体智能终端机微美图打印机</p>
                                <p>营销推广活动支持导入SN码</p>
                                <p>微商城模板，支持分类列表</p>
                                <p>微商城完整支持微信支付</p>
                                <p>微商城数据统计显示顺序更正</p>
                                <p>微商城支持商品预览</p>
                                <p>微商城订单成功后，网页将收到新订单通知</p>
                                <p>幸运机活动时间延长至三个月等6个改进及Bug</p>
                            </div>
                        </li>
                        <li class="cls">
                            <p class="date">3月12日</p>
                            <p class="intro">首家支持微信支付，多客服系统上线！</p>
                            <p class="version">&nbsp;</p>
                            <div class="more">
                                <p>为公众账号的微信支付提供技术接入，通过简单配置即可使用微信支付</p>
                                <p>微信公众平台高级接口支持，通过认证的服务号可以使用多客服系统回复粉丝</p>
                                <p>微商城首页添加多套模板，详情页支持模板自定义，商城购买商品支持微信支付；商城首页图片自适应等等十多个细节改进</p>
                            </div>
                        </li>
                        <li class="cls">
                            <p class="date">3月5日</p>
                            <p class="intro">360全景隆重上线！</p>
                            <p class="version">&nbsp;</p>
                            <div class="more">
                                <p>全新360全景模块上线，3D看房、3D看车、3D看实景，一网打尽</p>
                                <p>微官网新增24套一级模板</p>
                                <p>微官网提供全局颜色调色器</p>
                            </div>
                        </li>
                        <li class="cls">
                            <p class="date">2月26日</p>
                            <p class="intro">微婚庆行业应用上线</p>
                            <p class="version">&nbsp;</p>
                            <div class="more">
                                <p>提供更加友好的套餐价格</p>
                                <p>提供经典案例，并可以二维码扫描</p>
                                <p>提供更新日志，让您每周有惊喜</p>
                            </div>
                        </li>
                        <li class="cls">
                            <p class="date">2月19日</p>
                            <p class="intro">微信墙(微信大屏幕)上线</p>
                            <p class="version">&nbsp;</p>
                            <div class="more">
                                <p>支持上墙、抽奖、投票等等功能的微信墙上线</p>
                                <p>修正一战到底等多个模块的13个Bug, 并提供7个新改进</p>
                            </div>
                        </li>
                        <li class="cls">
                            <p class="date">2月12日</p>
                            <p class="intro">微贺卡上线</p>
                            <p class="version"></p>
                        </li>
                        <li class="cls highlight">
                            <p class="date">1月</p>
                            <p class="intro">微俱聚V6.0上线</p>
                            <p class="version">&nbsp;</p>
                            <div class="more">
                                <p>确立每周迭代、周三发布，用户参与推动模块开发的小米模式</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="year">
                <h2><a href="#">2013年<i></i></a></h2>
                <div class="list">
                    <ul>
                        <li class="cls">
                            <p class="date">12月</p>
                            <p class="intro">微俱聚V5.4上线</p>
                            <p class="version">&nbsp;</p>
                            <div class="more">
                                <p>形成完整的基础服务+互动推广+业务管理+行业应用+应用商店的服务架构</p>
                                <p>注册用户突破10万，荣获“创业之星”大赛八强</p>
                            </div>
                        </li>
                        <li class="cls">
                            <p class="date">11月</p>
                            <p class="intro">微俱聚v5.3上线</p>
                            <p class="version">&nbsp;</p>
                            <div class="more">
                                <p>全新渠道代理管理后台上线，更便捷更强大</p>
                                <p>荣获2013年微应用最佳服务商</p>
                            </div>
                        </li>
                        <li class="cls">
                            <p class="date">10月</p>
                            <p class="intro">微俱聚V5.2上线</p>
                            <p class="version">&nbsp;</p>
                            <div class="more">
                                <p>与众多行业建立合作，推出多个行业解决方案</p>
                            </div>
                        </li>
                        <li class="cls">
                            <p class="date">9月</p>
                            <p class="intro">微俱聚V5.1上线</p>
                            <p class="version">&nbsp;</p>
                            <div class="more">
                                <p>发力行业O2O应用，为商家提供量身定制的行业方案</p>
                            </div>
                        </li>
                        <li class="cls highlight">
                            <p class="date">8月</p>
                            <p class="intro">全新微俱聚平台V5.0上线</p>
                            <p class="version">&nbsp;</p>
                            <div class="more">
                                <p>推出微信应用商店，为商家提供更丰富的应用选择</p>
                                <p>整合众多优秀微信应用，打造微应用分发平台</p>
                            </div>
                        </li>
                        <li class="cls highlight">
                            <p class="date">7月</p>
                            <p class="intro">微信加更名为微俱聚</p>
                            <p class="version">&nbsp;</p>
                            <div class="more">
                                <p>出于品牌和商标保护的考虑，微信加平台更名</p>
                            </div>
                        </li>
                        <li class="cls">
                            <p class="date">6月</p>
                            <p class="intro">微信加V4.0上线</p>
                            <p class="version">&nbsp;</p>
                            <div class="more">
                                <p>微信在线预约、更多微信互动模块和微官网模板，商家业务展现日渐丰富</p>
                                <p>签约《中国好声音》，成为其微信独家战略合作伙伴</p>
                            </div>
                        </li>
                        <li class="cls">
                            <p class="date">5月</p>
                            <p class="intro">微信加V3.0上线</p>
                            <p class="version">&nbsp;</p>
                            <div class="more">
                                <p>推出微信会员卡、微信团购等业务模块，打通更多商家业务</p>
                            </div>
                        </li>
                        <li class="cls">
                            <p class="date">4月</p>
                            <p class="intro">微信加V2.0上线</p>
                            <p class="version">&nbsp;</p>
                            <div class="more">
                                <p>推出微官网等微信业务模块，实现微信与商家业务对接</p>
                            </div>
                        </li>
                        <li class="cls">
                            <p class="date">3月</p>
                            <p class="intro">微信加V1.0上线</p>
                            <p class="version">&nbsp;</p>
                            <div class="more">
                                <p>微信基础服务模块+微信互动推广模块上线</p>
                                <p>创造微信公众号一周涨5万粉的奇迹</p>
                            </div>
                        </li>
                        <li class="cls">
                            <p class="date">1月</p>
                            <p class="intro">全网第一个微信刮刮卡、大转盘上线</p>
                            <p class="version">&nbsp;</p>
                            <div class="more">
                                <p>微信互动推广模块上线，用实际行动证明微信鸡汤有毒</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="year">
                <h2><a href="#">2012年<i></i></a></h2>
                <div class="list">
                    <ul>
                        <li class="cls">
                            <p class="date">8月</p>
                            <p class="intro">顿悟</p>
                            <p class="version">&nbsp;</p>
                            <div class="more">
                                <p>顿悟，微信公众平台是企业移动互联网化的入口</p>
                            </div>
                        </li>
                        <li class="cls">
                            <p class="date">8月以前</p>
                            <p class="intro">实现一个NB的社会化APP</p>
                            <p class="version">&nbsp;</p>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript">
    $(".main .year .list").each(function(e, target){
        var $target=  $(target),
            $ul = $target.find("ul");
        $target.height($ul.outerHeight()), $ul.css("position", "absolute");
    });
    $(".main .year>h2>a").click(function(e){
        e.preventDefault();
        $(this).parents(".year").toggleClass("close");
    });
</script>
</div>
