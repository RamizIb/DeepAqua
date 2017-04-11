<meta http-equiv='refresh' content='3; url=https://aquel-shop.ru/'>
<meta charset="UTF-8" />

<?php
if (isset($_POST['footer-form-email'])) {$email = $_POST['footer-form-email']; if ($email == '') {unset($email);}}

if (isset($email)){

  $address = "aquel-shop@yandex.ru";
  $mes = "(Форма в футере - консультация.\nEmail: $email";
  $send = mail ($address,$mes,"Content-type:text/plain; charset = UTF-8\r\n");
  if ($send == 'true')
    {echo "Сообщение отправлено успешно, через 3 секунды Вы вернетесь на сайт";}
  else {echo "Ошибка, сообщение не отправлено!";}

}
?>
