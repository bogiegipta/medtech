<?php
session_start();
$mode = $_GET['mode'] ?? 'login';
?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title><?= $mode==='reg' ? 'Регистрация' : 'Вход' ?> – Орион-м</title>
  <link rel="stylesheet" href="assets/css/styles.css">
  <style>
    .auth-form{max-width:420px;margin:80px auto;background:#fff;padding:30px;border-radius:14px;box-shadow:0 8px 24px rgba(0,0,0,.08)}
    .auth-form h2{margin-bottom:20px}
    .auth-form input{width:100%;padding:10px 12px;margin-bottom:12px;border:1px solid #d1d5db;border-radius:8px}
    .auth-form button{width:100%}
    .error{color:var(--danger);margin-bottom:12px}
  </style>
</head>
<body>

<div class="auth-form">
  <h2><?= $mode==='reg' ? 'Регистрация' : 'Вход' ?></h2>

  <?php if (isset($_SESSION['error'])): ?>
    <div class="error"><?= $_SESSION['error'] ?></div>
    <?php unset($_SESSION['error']); ?>
  <?php endif; ?>

  <form action="auth.php" method="post">
    <input type="hidden" name="mode" value="<?= $mode ?>">

    <?php if ($mode==='reg'): ?>
      <input type="text" name="name" placeholder="Имя" required>
    <?php endif; ?>

    <input type="email" name="email" placeholder="E-mail" required>
    <input type="password" name="password" placeholder="Пароль" required minlength="6">

    <button class="btn btn--primary"><?= $mode==='reg' ? 'Зарегистрироваться' : 'Войти' ?></button>
  </form>

  <p style="margin-top:15px;text-align:center;font-size:14px">
    <?= $mode==='reg' ? 'Уже есть аккаунт?' : 'Нет аккаунта?' ?>
    <a href="login.php?mode=<?= $mode==='reg' ? 'login' : 'reg' ?>">
      <?= $mode==='reg' ? 'Войти' : 'Зарегистрироваться' ?>
    </a>
  </p>
</div>

</body>
</html>