<?php
$no_visible_elements = true;
 include 'config.php' ?>
 <!-- 导入header头 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>trips backend</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="/plugins/css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link href="/plugins/css/charisma-app.css" rel="stylesheet">
    <link href='/plugins/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='/plugins/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='/plugins/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='/plugins/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='/plugins/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='/plugins/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='/plugins/css/jquery.noty.css' rel='stylesheet'>
    <link href='/plugins/css/noty_theme_default.css' rel='stylesheet'>
    <link href='/plugins/css/elfinder.min.css' rel='stylesheet'>
    <link href='/plugins/css/elfinder.theme.css' rel='stylesheet'>
    <link href='/plugins/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='/plugins/css/uploadify.css' rel='stylesheet'>
    <link href='/plugins/css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="/plugins/bower_components/jquery/jquery.min.js"></script>
    <link rel="shortcut icon" href="/plugins/img/favicon.ico">
</head>

<body>
<?php
if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="##"> <img alt="Charisma Logo" src="/plugins/img/logo20.png" class="hidden-xs"/>
                <span>Charisma</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs">123</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="/Home/logout">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs"> Change Theme / Skin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                    <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                    <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                    <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                    <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                    <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                    <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                    <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                    <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
                </ul>
            </div>
            <!-- theme selector ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="#"><i class="glyphicon glyphicon-globe"></i> Visit Site</a></li>
                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Search" class="search-query form-control col-md-10" name="query"
                               type="text">
                    </form>
                </li>
            </ul>

        </div>
    </div>
    <!-- topbar ends -->
<?php } ?>
<div class="ch-container">
    <div class="row">
        <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-picture"></i><span> 分类管理</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="/Category/lists">分类列表</a></li>
                                <li><a href="/Category/add">新增分类</a></li>
                                <li><a href="/Category/edit">分类编辑</a></li>
                            </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-list-alt"></i><span> 文章管理</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="/Article/lists">文章列表</a></li>
                                <li><a href="/Article/add">新增文章</a></li>
                                <li><a href="/Article/edit">文章编辑</a></li>
                            </ul>
                        </li>
                        <li><a href="/Home/index_login"><i class="glyphicon glyphicon-lock"></i><span> Login Page</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <?php } ?>


    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>Welcome to trips</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
            <div class="alert alert-info">
                Please login with your Username and Password.
            </div>
            <form class="form-horizontal" action="/Home/dologin" method="post">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div><br>
                    <div class="clearfix"></div>
                    <div class=""><span style="color:red;"><?php
                            if(!empty($info)){
                                echo $info['msg'];
                            }
                    ?></span></div>

                    <p class="center col-md-5">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </p>
                </fieldset>
            </form>
        </div>
        <!--/span-->
    </div><!--/row-->
<?php require('footer.php'); ?>