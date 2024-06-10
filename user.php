<?php
    require_once "vendor/autoload.php";
    use App\DB;
    $db = new DB();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/common.css">
    <link rel="stylesheet" href="./assets/css/user.css">
    <title>blog</title>
</head>
<body>
<?php include "include/header.php"?>

<main>
    <div class="inner_container">
        <div class="register ">
            <form action="scripts/register.php" method="post">
                <label for="email">email</label>
                <input name="login" type="email"  id="email" required>
                <label for="nickname">Nick</label>
                <input name="name" type="text"  id="nickname" required>
                <label for="password">Пароль</label>
                <input name="password" type="password"  id="password" required>
                <label>
                    <input type="checkbox" required>
                    <span>Я принимаю пользовательское соглашение</span>
                </label>
                <button>Зарегистрироваться</button>
            </form>
            <div class="switch">
                <p>Уже есть аккаунт?</p>
                <button id="switch_to_register">Войти</button>
            </div>
        </div>
        <div class="login active">
            <form action="scripts/login.php" method="post">
                <label for="login_email">email</label>
                <input name="login" type="email"  id="login_email">
                <label for="login_password">Пароль</label>
                <input name="password" type="password"  id="login_password">

                <button>Войти</button>
            </form>
            <div class="switch">
                <p>Еще нет аккаунта?</p>
                <button id="switch_to_login"> Зарегистрируйтесь</button>
            </div>
        </div>
    </div>
</main>

<?php include "include/footer.php"?>

<script src="assets/js/user.js"></script>
<script src="assets/js/common.js"></script>

</body>
</html>