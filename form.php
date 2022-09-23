<?php
require_once 'connect.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
    <title>Форма</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    
</head>
<style>
    th,
    td {
        padding: 10px;

    }

    th {
        background: #606060;
        color: #000;
    }

    td {
        background: #909090;
    }

    table {
        margin: 0 auto;
    }
</style>

<body>
    <header class="header">
        <div class='header__cont'>
            <a href="" class="header__logo">
                <img src="img/Vector.svg" alt="">
            </a>
            <div class="header__navigation">
                <nav class="header__menu menu">
                    <ul class="menu__body">
                        <li class="menu__item"><a href="index.html" class="menu__link">Главная</a></li>
                        <li class="menu__item"><a href="catalog.html" class="menu__link">Услуги</a></li>
                        <li class="menu__item"><a href="#" class="menu__link">О нас</a></li>
                        <li class="menu__item"><a href="#" class="menu__link">Контакты</a></li>
                    </ul>
                </nav>
                <div class="header__buttons">
                    <button class="login header__btn">+7 (302) 785-85-98</button>
                </div>
                <div class="menu-icon">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </div>
    </header>

    <div class="page">
        <form class="js-form" action="" novalidate>
            <div class="form-left-decoration"></div>
            <div class="form-right-decoration"></div>
            <div class="circle"></div>
            <div class="form__group">
                <input type="text" class="input js-input" name="username" placeholder="Имя">
            </div>
            <div class="form__group">
                <input type="text" class="input js-input js-input-text" name="text" placeholder="Вид услуги">
            </div>
            <div class="form__group">
                <input type="email" class="input js-input js-input-email" name="email" placeholder="Email">
            </div>
            <div class="form__group">
                <input type="tel" class="input js-input js-input-phone" name="phone" placeholder="Мобильный телефон">
            </div>
            <div class="form__group">
                <input type="checkbox" class="checkbox__input js-input-checkbox" id="privacy_check">
                <label class="checkbox__label" for="privacy_check">Я согласен(на) на обработку моих персональных
                    данных.</label>
            </div>
            <button class="btn" type="submit">
                Отправить.
            </button>
        </form>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Вид услуги</th>
                <th>Email</th>
                <th>Телефон</th>
            </tr>
        </thead>
        <?php
        $users = mysqli_query($connect, "SELECT * FROM `users`");
        $users = mysqli_fetch_all($users);
        foreach ($users as $users) {
        ?>
            <tr>
                <td><?= $users[0] ?></td>
                <td><?= $users[1] ?></td>
                <td><?= $users[2] ?></td>
                <td><?= $users[3] ?></td>
                <td><?= $users[4] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <script>
       
    </script>
</body>


<script src="ajax.js"></script>
<script src="index.js"></script>

</html>