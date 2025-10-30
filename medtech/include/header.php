<?php
session_start();                 // стартуем сессию
?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Орион-м | Медицинское оборудование</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="accets/css/styles.css">
  <script src="accets/js/app.js"></script>
</head>
<body>

<header class="top-bar">
  <div class="container top-bar__inner">
    <a href="/" class="logo">Орион-м</a>

    <div class="search">
      <input type="text" id="search-input" placeholder="Поиск по товарам…">
      <button class="search__btn" aria-label="Искать"></button>
    </div>

    <div class="contacts">
      <a href="tel:+74951234567" class="phone">+7 (495) 123-45-67</a>
      <span class="work-time">пн-пт 9:00-18:00</span>
    </div>

    <a href="cart.php" class="cart-btn" aria-label="Корзина">
      <span class="cart-btn__count">0</span>
    </a>

    <div class="account-section">
            <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']):?>
            <a class="account-btn" href="account.php">Личный кабинет</a>
            <?php else: ?>
                <a class="account-btn" href="#" onclick="openModal(); return false;">Личный кабинет</a>
            <?php endif; ?>
        </div>
            </header>

<div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <?php if (isset($_SESSION['error'])): ?>
                <div style="color: red; margin-bottom: 10px; padding: 10px; background: #ffe6e6; border-radius: 4px;">
                    <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                </div>
            <?php endif; ?>

            <?php if (isset($_SESSION['success'])): ?>
                <div style="color: green; margin-bottom: 10px; padding: 10px; background: #e6ffe6; border-radius: 4px;">
                    <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
                </div>
            <?php endif; ?>
            
            <form id="loginForm" class="active" method="post" action="auth.php">
                <h2 class="modal-autreg">Авторизация</h2>
                <input type="text" name="username" placeholder="Имя пользователя" required>
                <input type="password" name="password" placeholder="Пароль" required>
                <button class="modal-button" type="submit" name="login">Войти</button>
                <div class="switch-form">
                    Нет аккаунта? <a onclick="showRegistrationForm()">Зарегистрироваться</a>
                </div>
            </form>
            
            <form id="registrationForm" method="post" action="auth.php">
                <h2 class="modal-autreg">Регистрация</h2>
                <input type="text" name="username" placeholder="Имя пользователя" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Пароль" required>
                <button class="modal-button" type="submit" name="register">Зарегистрироваться</button>
                <div class="switch-form">
                    Уже есть аккаунт? <a onclick="showLoginForm()">Войти</a>
                </div>
            </form>
        </div>
    </div>
</header>