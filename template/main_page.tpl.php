<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Hall - Mini Hotel</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/datepicker.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700&amp;subset=cyrillic" rel="stylesheet">
</head>
<body>
<div class="content" id="up">
    <div class="content--head">
        <div class="content--head__wrapper">
            <div class="header-content">
                <div class="header-item item--name">Business Hall<div class="subtitle">Mini Hotel</div></div>
                <div class="header-item item--phone"><a href="tel:+73952436380">+7 (3952) 43‒63‒80</a></div>
                <div class="header-item item--address">Иркутск, Свердлова, 10</div>
                <div class="header-item items--menu">
                    <div class="item-menu mt"><a class="scroll" href="#welcome">Главная</a></div>
                    <div class="item-menu mt"><a class="scroll" href="#main">Номера</a></div>
                    <div class="item-menu mt"><a class="scroll" href="#rules">Правила</a></div>
                    <div class="item-menu mt"><a class="scroll" href="#form">Контакты</a></div>
                    <div class="item-menu mt"><a class="scroll" href="#comments">Отзывы</a></div>
                </div>
                <div class="menu-toggle open"></div>
            </div>
        </div>
    </div>
    <div class="content--body">
        <?php include 'welcome.tpl.php'; ?>
        <?php include 'numbers.tpl.php'; ?>
        <?php include 'rules.tpl.php'; ?>
        <?php include 'contacts.tpl.php'; ?>
        <?php include 'map.tpl.php'; ?>
        <?php include 'comment.tpl.php'; ?>
    </div>
    <div class="content--footer">Made by <a href="mailto:pluskika@gmail.com">Kirill</a> 2017</div>
    <div class="pop-up">
        <?php include 'hotel-lux.tpl.php'; ?>
      <?php include 'hotel-common.tpl.php'; ?>
        <div class="pop-up--fon pop-up--close hide"></div>
    </div>
    <!--a href="#up" class="up scroll"></a-->
    <a href="#form" class="call scroll">Заказать обратный звонок</a>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/datepicker.min.js"></script>
<script src="/js/main.js"></script>
</body>
</html>