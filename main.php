<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href='icon_.png' type='image/x-icon'>
    <title>Главная</title>
</head>
<body>
    <style>
        /* Меню боковой панели */
    .sidenav {
    height: 100%; 
    width: 160px;
    position: fixed;
    z-index: 10; 
    top: 0; 
    left: 0;
    background-color: #111; 
    overflow-x: hidden; 
    padding-top: 20px;
    }

    .sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
    }

    .sidenav a:hover {
    color: #f1f1f1;
    }

    .main {
    margin-left: 160px; 
    padding: 0px 10px;
    position: fixed;
    top: 20%;
    font-size: 18px;
    }

    @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
    }

    </style>

    <!-- Боковой панели навигации -->
    <div class="sidenav">
    <a href="main.php">Главная</a>
    <a href="qwery.php">Запросы</a>
    <a href="add_date.php">Добавить запись</a>
    </div>

    <!-- Содержимое страницы -->
    <div class="main">
        <div>
            <h2>О сайте</h2>
            <p>Данный сайт разработан студентом Троицким Михаилом группы ИСИП20.20 как дипломная работа.</p>
        </div>
    </div>

</body>
</html>