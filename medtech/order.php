<?php
$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$email = trim($_POST['email'] ?? '');
$comment = trim($_POST['comment'] ?? '');
$product = trim($_POST['productId'] ?? '');

$to = "sales@orion-m.ru";
$subject = "Заявка с сайта Orion-m";
$msg = "Имя: $name\nТелефон: $phone\nE-mail: $email\nТовар/корзина: $product\nКомментарий: $comment";

mail($to,$subject,$msg,"Content-type:text/plain; charset=utf-8");
echo "Спасибо! Менеджер свяжется в течение часа.";
?>