<?php
include 'vehicles/Car.php';
include 'vehicles/Truck.php';
include 'vehicles/ToyCar.php';

use Vehicles\{Car, Truck, ToyCar};
//use Vehicles\Truck;
/*
interface MyInterface{
  public function method1();
}
*/
try {
  echo 'Class ToyCar</br>';
  $toyCar = new ToyCar('Brayan');
  $toyCar->move();
}catch(Exception $e) {
  echo 'This is a toy</br></br>';
  //log...
}finally{
  echo 'Finally</br></br>';
}

echo 'Class Car</br>';
$car = new Car('Brayan');
$car->move();
echo'GPS pos: '.$car->getPos();
echo 'Owner car: '.$car->getOwner().'</br>';
//$car->setOwner('Smith');
//$car2->setOwner('Laura');
//$car->owner = 'Brayan';

echo '</br>Class Truck 1</br>';
$truck1 = new Truck('Smith','pickup');
$truck1->move();

echo '</br>Class Truck 2</br>';
$truck2 = new Truck('Smith','pickup');
$truck2->move();

echo '</br>Total trucks: '.Truck::getTotal().'</br>';
//echo 'Owner truck: '.$truck->getOwner();
//echo 'Owner: '.$car->owner;
/*
$v1 = new \Vehicles\VehicleBase('Toby');
$v1->move();
*/
$ser = serialize($car);
$newCar = unserialize($ser);

echo 'NewCar Owner: '.$newCar->getOwner().'</br>'
?>
