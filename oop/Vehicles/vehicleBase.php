<?php
namespace Vehicles;

abstract class VehicleBase
{
  //public $owner;
  //private $owner;
  protected $owner;

  public function __construct($ownerName)
  {
    echo 'Construct</br>';
    $this->owner = $ownerName;
  }
  /*
  public function __destruct(){
    echo 'Destruct</br>';
  }
  */
  public function move()
  {
    echo $this->startEngine().'</br>';
    echo 'Moving</br>';
  }
  public function getOwner()
  {
    return $this->owner;
  }
  public function setOwner($owner)
  {
    $this->owner = $owner;
  }
  public abstract function startEngine();
}
?>
