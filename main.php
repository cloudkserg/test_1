<?php
require __DIR__ . '/vendor/autoload.php';

if (!isset($_GET['sms'])) {
  return printf('Ожидается передача текста смс потверждения в get параметре sms');
}
$sms = $_GET['sms'];

//for console check
$sms = $argv[1];


$factory = new \Src\ApproveFactory();
$approveSms = $factory::createFromText($sms);


printf("Код подтверждения = %s, Сумма = %s, Кошелек = %s",
  $approveSms->getCode(),
  $approveSms->getPrice(),
  $approveSms->getPouncName()
);
?>
