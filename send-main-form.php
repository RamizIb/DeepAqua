<meta http-equiv='refresh' content='3; url=https://aquel-shop.ru/'>
<meta charset="UTF-8" />

<?php
if (isset($_POST['main-form-name'])) {$name = $_POST['main-form-name']; if ($name == '') {unset($name);}}
if (isset($_POST['main-form-phone'])) {$phone = $_POST['main-form-phone']; if ($phone == '') {unset($phone);}}

if (isset($name) && isset($phone)){

  $address = "aquel-shop@yandex.ru";
  $mes = "Форма на главной странице - консультация";
  $send = mail ($address,$mes,"Ждет консультацию:\nИмя: $name \nТелефон: $phone","Content-type:text/plain; charset = UTF-8\r\n");
  if ($send == 'true')
    {echo "Сообщение отправлено успешно, через 3 секунды Вы вернетесь на сайт";}
  else {echo "Ошибка, сообщение не отправлено!";}
}
?>
