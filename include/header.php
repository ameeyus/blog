<?php
if(session_status() === PHP_SESSION_NONE){
    session_start();
}

if (isset($_SESSION["message"])) {
    $message = $_SESSION["message"];
    unset($_SESSION["message"]);
}
?>

<header>
    <div class="inner_container">
        <div class="toggle_menu">
            <img src="assets/image/menu-svgrepo-com.svg" alt="">
        </div>
        <nav>
            <ul>
                <li><a href="#">Все</a></li>
                <li><a href="#">Рзаработка</a></li>
                <li><a href="#">Дизайн</a></li>
                <li><a href="#">администрирование</a></li>
            </ul>
        </nav>
        <div class="icons">
            <a href="search.php">
                <img src="assets/image/search.svg" alt="">
            </a>
            <a href="user.php">
                <img src="assets/image/user.svg" alt="">
            </a>
        </div>
    </div>
</header>

<div id="popup_message" class="<?= isset($message) ? 'active' : '' ?>">
    <div class="center">
        <p><?= $message ?? '' ?></p>
    </div>
</div>
