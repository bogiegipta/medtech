<?php
session_start();
require_once 'db.php';   // подключение к БД (см. ниже)

$mode = $_POST['mode'] ?? 'login';
$email = trim($_POST['email']);
$pass  = $_POST['password'];

if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error'] = 'Некорректный e-mail';
    header('Location: login.php?mode='.$mode);
    exit;
}

if ($mode === 'reg') {
    $name = trim($_POST['name']);
    if ($name==='') {
        $_SESSION['error'] = 'Укажите имя';
        header('Location: login.php?mode=reg'); exit;
    }

    $hash = password_hash($pass, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare('SELECT id FROM users WHERE email = ?');
    $stmt->execute([$email]);
    if ($stmt->fetch()) {
        $_SESSION['error'] = 'Такой e-mail уже занят';
        header('Location: login.php?mode=reg'); exit;
    }

    $stmt = $pdo->prepare('INSERT INTO users (name,email,password) VALUES (?,?,?)');
    $stmt->execute([$name,$email,$hash]);

    $_SESSION['user_id'] = $pdo->lastInsertId();
    $_SESSION['user_name'] = $name;
    header('Location: index.php');
} else {
    $stmt = $pdo->prepare('SELECT id,name,password FROM users WHERE email = ?');
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($pass, $user['password'])) {
        $_SESSION['user_id']   = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        header('Location: index.php');
    } else {
        $_SESSION['error'] = 'Неверный e-mail или пароль';
        header('Location: login.php'); exit;
    }
}