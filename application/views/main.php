<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<? echo HTML::style('media/css/bootstrap.css');?>
	<? echo HTML::style('media/css/responsive.css');?>
	<? echo HTML::style('media/css/font-awesome.css');?>
    <? echo HTML::style('media/css/'.Request::current()->controller().'.css');?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!--<script src="http://api-maps.yandex.ru/2.0/?load=package.full&mode=debug&lang=ru-RU" type="text/javascript"></script>-->
	<? echo html::script(	
		'media/js/slider.js'
		
		);
	?>
	<? echo html::script(	
		'media/js/bootstrap.min.js'
		
		);
	?>
	<? echo html::script(	
		'media/js/site/'.Request::current()->controller().'.js'
		
		);
	?>
    
	<script type="text/javascript" ></script>
    <script type="text/javascript">
  
    
    </script>
</head>
<body class="<? echo Request::current()->controller().' '.Request::current()->action(); ?>">
<header id="main-header">
    <div class="navbar">
        <div class="navbar-inner">
            <a class="btn btn-navbar collapsed" data-target=".nav-collapse" data-toggle="collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="/" title="Автология">Автология</a>
            <nav class="nav-collapse collapse">
                <ul class="nav">
                    <li><a href="#">Новости</a></li>
                    <li class="active"><a href="/calculator/">Калькулятор</a></li>
                    <li><a href="/catalog/">Каталог автосервисов</a></li>
                    <li><a href="/statistic/">Статистика</a></li>
                </ul>
            </nav>
            
        </div>
    </div>
</header>

<div id="container" class="container">
	<?= $content; ?>
</div>

<footer id="footer" class="navbar navbar-fixed-bottom">
    <small>&copy; Все права защищены Avtology 2012 info@avtology.ru</small>
</footer>	
</body>
</html>