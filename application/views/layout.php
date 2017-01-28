<!doctype html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <?=HTML::style('css/vendor/bootstrap.min.css')?>
    <?=HTML::style('css/vendor/font-awesome.min.css')?>
    <?=HTML::style('css/main.css')?>
    <?=HTML::style('css/vendor/chosen.css')?>

    <?=HTML::script('js/vendor/jquery-1.10.2.min.js')?>
    <?=HTML::script('js/vendor/bootstrap.min.js')?>
    <?=HTML::script('js/vendor/chosen.js')?>
    <?=HTML::script('js/index.js')?>
    <?=HTML::script('js/notification.js')?>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
        <?=$content?>
    </div>
</body>
</html>