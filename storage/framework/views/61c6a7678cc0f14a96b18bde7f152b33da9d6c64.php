<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/style.css">

</head>
<body>
    <nav class="navbar fixed-top navbar-light bg-light">
        <div class="burger">
            <div class="burger_item b_i_1"></div>
            <div class="burger_item b_i_2"></div>
            <div class="burger_item b_i_3"></div>
        </div>
        <img class="logo" src="/img/logo.png" alt="">

        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="<?php echo e(route("index")); ?>">Главная</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo e(route("projects_page")); ?>">Практика</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo e(route("buro_page")); ?>">Наше Бюро</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo e(route("team_page")); ?>">Команда</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo e(route("news_page")); ?>">Новости Бюро</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('contacts_page')); ?>">Контакты</a></li>
        </ul>

        <div class="adres_list fixed-bottom">
            <p class="adres-test"> +7 (985) 784-96-72 <br>
                +7 (495) 363-19-48 <br>
                info@urgazenergo.com <br>
                г. Москва ул. Садовая-Спасская, <br>
                д. 19/1, офис 3</p>

            <p class="copyright">
                © АБ «Юргазэнерго», 2020
            </p>
        </div>
    </nav>

    <header>
         <?php echo $__env->yieldContent('header'); ?>
    </header>

    <div class="wrapper">
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>


    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="/js/script.js"></script>
</body>
</html><?php /**PATH D:\OpenServer\domains\test\resources\views\layouts\main-layout.blade.php ENDPATH**/ ?>