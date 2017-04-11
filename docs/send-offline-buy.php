<meta http-equiv='refresh' content='3; url=https://aquel-shop.ru/'>
<meta charset="UTF-8" />

<?php
if (isset($_POST['offlain-tel'])) {$tel = $_POST['offlain-tel']; if ($tel == '') {unset($tel);}}
if (isset($_POST['city-select'])) {$city = $_POST['city-select']; if ($city == '') {unset($city);}}

if (isset($tel) && isset($city)){

  $address = "aquel-shop@yandex.ru";
  $mes = "Покупка с оплатой при получении";
  $send = mail ($address,$mes,"Хочет купить:\nТелефон: $tel \nГород: $city","Content-type:text/plain; charset = UTF-8\r\n");
  if ($send == 'true')
    {echo "Сообщение отправлено успешно, через 3 секунды Вы вернетесь на сайт";}
  else {echo "Ошибка, сообщение не отправлено!";}
}
?>
