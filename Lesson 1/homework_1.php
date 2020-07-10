<?php
/* Задание 1-4*/

class Boat{

    protected $classOfBoat;
    protected $wt;
    protected $name;
    protected $info;
    protected $properties = [];

    public function __construct($classOfBoat, $wt, $name, $info)
    {
        $this->classOfTransport = $classOfBoat;
        $this->weight = $wt;
        $this->name = $name;
        $this->info = $info;
    }
    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }
    public function sendASignal(){
        return "<h1>$this->classOfBoat</h1>" . $this->getName() . "<p>Яхта</p>";
    }
    protected function getName()
    {
        return "<p>{$this->name}</p>";
    }
}
class Yacht extends Boat
{
    protected $power;

    public function __construct($classOfBoat, $wt, $name, $info, $power)
    {
        $this->power = $power;
        parent::__construct($classOfBoat, $wt, $name, $info);
    }
    public function sendASignal()
    {
        return "<h1>$this->classOfBoat</h1>" . $this->getName() . "<p>Яхта. Мощностью: " . $this->power . "</p>" ;
    }
}
class Product
{
    public $name;
    public $price;

    function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    function inference()
    {
        echo $this->name . " стоит " . $this->price . "р. <br>";
    }
}

class Sale extends Product
{
    public $discount;

    public function __construct($name, $price, $discount)
    {
        parent::__construct($name, $price);
        $this->discount = $discount;
    }

    public function discountSale()
    {
        echo $this->name . " стоит " . $this->price . "р. <b>скидка " . $this->discount . "%</b><br>";
    }
    private function getTotal()
    {
        return ($this->price / 50) * $this->discount;
    }
    public function showPriceWithDiscount()
    {
        echo "Скидка на данный товар составит: " . $this->getTotal();
    }

}

$boat = new Boat('Лодка', '-', 'Лодки', 'Some info');
$boat->test = 100;
echo $boat->sendASignal();
$yacht = new Yacht('Яхта', '3500kg', 'Absolute 58 Fly', 'Some info', '600л/с');
echo $yacht->sendASignal();




$reservation = new Product ('Товар', '300000');
$reservation->inference();

$reservation1 = new Sale('Товар', 1500000, 50);
$reservation1->discountSale();
$reservation1->showPriceWithDiscount();

echo '<br><br><br>';



/* Задание 5*/

//создаем класс А
echo '<h3>Задание 5</h3>';
class A
{
    //создаем метод foo()
    public function foo()
    {
        static $x = 0;
        echo ++$x . "<br>";
    }
}

$a1 = new A(); //присваиваем переменной экземпляр класса А
$a2 = new A(); //аналогично пред. шагу

$a1->foo(); //вызываем метод foo() и получаем "1"
$a2->foo(); //вызываем метод foo() и получаем "2", т.к. используется static значение переменной $x не перезаписывается, следовательно ++1 = 2
$a1->foo(); //аналогично получаем "3"
$a2->foo(); //аналогично получаем "4"

///* Задание 6*/
echo '<h3>Задание 6</h3>';
class A2
{
    public function foo()
    {
        static $x = 0;
        echo ++$x . "<br>";
    }
}

//класс В наследует класс А (без добавления новых свойств)
class B extends A2
{
}

$a1 = new A2(); //присваиваем переменной экземпляр класса А
$b1 = new B(); //присваиваем переменной экземпляр класса В
$a1->foo(); //вызываем метод foo() класса А и получаем на выходе "1"
$b1->foo(); //вызываем метод foo() класса В и получаем аналогичный результат, в сделствии полного наследования свойств без каких либо изменений
$a1->foo(); //аналогично предыдущему заданию получаем на выходе "2" т.к. используется static
$b1->foo(); //полностью дуюлируем запись, в следствии наследования свойств класса

/* Замечание:

В случае отсутствия аргументов в конструктор класса,
круглые скобки после названия класса можно опустить. */
echo '<h3>Задание 7</h3>';
class D {
    public function foo() {
        static $x = 0;
        echo ++$x . '<br>';
    }
}
class E extends D {
}
$a1 = new D;
$b1 = new E;
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();

//Вывод будет такой же как и в 6 задании
