<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>
<!--> 
<html class="no-js"> 
<!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>FB Page Posts</title>
       
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,400italic,300italic,300,500,500italic,700,900">
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/font-awesome.css">
        <link rel="stylesheet" href="/css/misc.css">
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
        <style>
        	@media (max-width: @screen-xs-max) {
        		.download{
        			float:none;
        			margin:0 auto;
        		}
        	}
        </style>
    </head>
    <body
        <div class="section-header" style="text-align: center;"><h2>Troll Pages</h2></div>
        <header class="site-header container-fluid">
            <div class="main-header">
                <div class="row">
                    <div class="menu-wrapper col-md-12 col-sm-12 col-xs-12">
                        <a href="#" class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></a>
                        <ul class="sf-menu hidden-xs hidden-sm" style="text-align: center;">
                            <?php foreach($pagesConfig as $pname => $pageid){?>
                            <li><a href="/<?= str_replace('.', '+', $pageid)?>" title=""><?=$pname?></a></li>
                            <?php } ?>
                        </ul>
                    </div> <!-- /.menu-wrapper -->
                </div> <!-- /.row -->
            </div> <!-- /.main-header -->
        </header> <!-- /.site-header -->