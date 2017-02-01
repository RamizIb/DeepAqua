<?php
  $city = $_POST['payDesc'];
  $tel =  $_POST['payPhone'];
  $email =  $_POST['payEmail'];
  $to = "mexpert@bk.ru";
  $headers = "Content-type: text/plain; charset = UTF-8";
  $subject = "Сообщение с вашего сайта";
  $message = "Имя пославшего: \nГород покупателя: $city \nЭлектронный адрес: $email \nТелефон: $tel";
  $send = mail ($to, $subject, $message, $headers);
  if ($send == 'true')
    {
     echo "<b>Спасибо за отправку вашего сообщения!<p>";
     echo "<a href=index.html>Нажмите,</a> чтобы вернуться на главную страницу";
    }
  else
    {
     echo "<p><b>Ошибка. Сообщение не отправлено!";
    }
?>
