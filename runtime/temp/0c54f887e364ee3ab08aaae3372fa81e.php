<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:45:"E:\BK/application/admin\view\index\index.html";i:1522743333;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/favicon.ico" type="image/ico" />
    <title>用户管理后台</title>
    <!-- Bootstrap -->
    <link href="/static/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/static/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="/static/css/custom.min.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/tether/1.3.6/css/tether.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/tether/1.3.6/js/tether.min.js"></script>

</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="/admin" class="site_title"><i class="fa fa-paw"></i> <span>博客后台管理</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- 侧边头部 -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="/static/houtai/images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome</span>
                        <h2>Li Xin</h2>
                    </div>
                </div>
                <!-- /侧边头部结束 -->

                <br />

                <!-- 侧边栏 -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> 菜单1 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="javascript:;">子菜单1</a></li>
                                    <li><a href="javascript:;">子菜单2</a></li>
                                    <li><a href="javascript:;">子菜单3</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-edit"></i> 菜单2 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="form.html">子菜单1</a></li>
                                    <li><a href="form_advanced.html">子菜单2</a></li>
                                    <li><a href="form_validation.html">子菜单3</a></li>
                                    <li><a href="form_wizards.html">子菜单4</a></li>
                                    <li><a href="form_upload.html">子菜单5</a></li>
                                    <li><a href="form_buttons.html">子菜单6</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-desktop"></i> 菜单3 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="general_elements.html">子菜单1</a></li>
                                    <li><a href="media_gallery.html">子菜单2</a></li>
                                    <li><a href="typography.html">子菜单3</a></li>
                                    <li><a href="icons.html">子菜单4</a></li>
                                    <li><a href="glyphicons.html">子菜单5</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-table"></i> 菜单4 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="tables.html">子菜单1</a></li>
                                    <li><a href="tables_dynamic.html">子菜单2</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-bar-chart-o"></i> 菜单5 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="chartjs.html">子菜单1</a></li>
                                    <li><a href="chartjs2.html">子菜单2</a></li>
                                    <li><a href="morisjs.html">子菜单3</a></li>
                                    <li><a href="echarts.html">子菜单4</a></li>
                                    <li><a href="other_charts.html">子菜单5</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /侧边栏结束 -->

                <!-- 侧边底部 -->
                <!--<div class="sidebar-footer hidden-small">-->
                    <!--<a data-toggle="tooltip" data-placement="top" title="Settings">-->
                        <!--<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>-->
                    <!--</a>-->
                    <!--<a data-toggle="tooltip" data-placement="top" title="FullScreen">-->
                        <!--<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>-->
                    <!--</a>-->
                    <!--<a data-toggle="tooltip" data-placement="top" title="Lock">-->
                        <!--<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>-->
                    <!--</a>-->
                    <!--<a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo url('/admin/login/login'); ?>">-->
                        <!--<span class="glyphicon glyphicon-off" aria-hidden="true"></span>-->
                    <!--</a>-->
                <!--</div>-->
                <!-- /侧边底部结束 -->
            </div>
        </div>

        <!-- 中部上方栏 -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="/static/houtai/images/img.jpg" title="lixin">李鑫
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="<?php echo url('/admin/login/login'); ?>"><i class="fa fa-sign-out pull-right"></i> 退出</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- 首页统计 -->
        <div class="right_col" role="main">
            <!-- top tiles -->
            <div class="row tile_count"  style="text-align: center">
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> 用户总数</span>
                    <div class="count">2500</div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-clock-o"></i> 今日新增用户</span>
                    <div class="count">12</div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> 今日浏览量</span>
                    <div class="count green">2500</div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> 总浏览量</span>
                    <div class="count">4,567</div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> 今日用户留言</span>
                    <div class="count">433</div>
                </div>
            </div>
            <!-- /首页统计结束 -->

            <div class="row"  style="text-align: center;margin-top: 17%">
                <h1>博客后台管理中心！</h1>
            </div>
            <br />
        </div>
        <!-- /统计结束 -->

        <!-- 首页尾部 -->
        <footer>
            <div class="pull-right">
                李鑫博客后台管理
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /尾部结束 -->
    </div>
</div>
</body>
<!-- jQuery -->
<script src="/static/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/static/js/bootstrap.min.js"></script>
<!-- Custom Theme Scripts -->
<script src="/static/js/custom.min.js"></script>
</html>
