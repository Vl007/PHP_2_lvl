<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/9d71517162.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/site.js"></script>
    <link rel="stylesheet" href="styles/site.css">
    <title>PHP_2_lvl</title>
</head>
<body>
<header>
    <div id="headerInside">
        <div id="logo"></div>
        <div id="companyName">Brand</div>
        <div id="navWrap">
            <a href="?c=user">
                Главная
            </a>
            <a href="?c=user&a=all">
                Пользователи
            </a>
            <a href="?c=shop">
                Магазин
            </a>
            <a href="?c=shop&a=addGoodPage">
                Добавить товар в БД
            </a>
        </div>
    </div>
</header>
<div id="content">
    <?= $content; ?>
</div>

<footer>
    <div id="footerInside">

        <div id="contacts">
            <div class="contactWrap">
                <img src="images/envelope.svg" class="contactIcon">
                info@brandshop.ru
            </div>
            <div class="contactWrap">
                <img src="images/phone-call.svg" class="contactIcon">
                8 888 777 55 55
            </div>
            <div class="contactWrap">
                <img src="images/placeholder.svg" class="contactIcon">
                Москва, Большая Садовая, д. 13
            </div>
        </div>

        <div id="footerNav">
            <a href="?c=user">Главная</a>
            <a href="?c=user&a=all">Пользователи</a>
            <a href="?c=shop">Магазин</a>
            <a href="?c=shop&a=addGoodPage">Добавить товар в БД</a>
        </div>

        <div id="social">
            <img class="socialItem" src="images/vk-social-logotype.svg">
            <img class="socialItem" src="images/google-plus-social-logotype.svg">
            <img class="socialItem" src="images/facebook-logo.svg">
        </div>

        <div id="copyrights">&copy; Brand</div>
    </div>
</footer>
</body>
</html>
