<?php

use App\models\Electronics;
use App\models\Good as Good;
use App\models\Order;
use App\models\Real;
use App\models\User;
use App\models\Weight;
use App\services\DB;

include dirname(__DIR__) . '/services/Autoloader.php';
spl_autoload_register([(new Autoloader()), 'loadClass']);



$db = new DB();
//$good = new Order($db);
//echo $good->getOne('21');
//echo '<hr>';
//
//$good = new Good($db);
//echo $good->getOne('21');
//echo '<hr>';
//
//
//$good = new User($db);
//echo $good->getOne('21');
//
echo '<br>';
$item1 = new Electronics('Электроника','Телевизор', 99000, $db);
$item1->desc();
echo $item1->MyPercent(10);
$item2 = new Real('Реальный', 'Шкаф' , 1500 , $db);
$item2->desc();
echo $item2->MyPercent(10);
$item3 = new Weight('Весовой', 'Огурцы' , 200 , $db, 5);
$item3->desc();
echo $item3->MyPercent(10);

