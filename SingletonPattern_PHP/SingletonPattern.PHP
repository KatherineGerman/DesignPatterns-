<?php

/**
 * Singleton classes
 */
class CarSingleton {

    //caracterisitcas del carro
    private $carBrand = 'Honda CR-V';
    private $carType= 'Jeep';
    private $year  = '2016 ';
    private $color = 'Gray';
    private $motor= '4 cilindros';
    private static $car = NULL;

    private static $isLoanedOut = FALSE;

    private function __construct() {
    }
    /*Si el carro que busca el cliente esta rentado no aparecera 
    disponible de lo contrario se le rentara a la persona que lo pida*/

    static function rentCar() {
      if (FALSE == self::$isLoanedOut) {
        if (NULL == self::$car) {
           self::$car = new CarSingleton();
        }
        self::$isLoanedOut = TRUE;
        return self::$car;
      } else {
        return NULL;
      }
    }

    function returnCar(CarSingleton $carReturned) {
        self::$isLoanedOut = FALSE;
    }

    function getBrand() {return $this->carBrand;}

    function getType() {return $this->carType;}

    function getYear() {return $this->year;}

    function getColor() {return $this->color;}

    function getMotor() {return $this->motor;}

    function getCarData() {
      return $this->getBrand() . ' ' . $this->getType().' '.$this->getYear(). ' ' . $this->getColor(). ' ' . $this->getMotor();
    }
  }
 /* 
 si una persona que va a rentar unvehiculo 
 que no este disponible aparecera el mensaje mostrado
 */
class carRenter {
    private $rentedCar;
    private $haveCar = FALSE;

    function __construct() {
    }

    function getCarData() {
      if (TRUE == $this->haveCar) {
        return $this->rentedCar->getCarData();
      } else {
        return "The car is not available :c";
      }
    }

    function rentCar() {
      $this->rentedCar = CarSingleton::rentCar();
      if ($this->rentedCar == NULL) {
        $this->haveCar = FALSE;
      } else {
        $this->haveCar = TRUE;
      }
    }

    function returnCar() {
      $this->rentedCar->returnCar($this->rentedCar);
    }
  }
 
/**
 * Initialization
 */

  writeln('RENT-A-CAR');
  writeln('');

  $client1 = new carRenter();
  $client2 = new carRenter();

  $client1->rentCar();
  writeln('Client1 asked to rent A car');
  writeln('Client1 car data: ');
  writeln($client1->getCarData());
  writeln('');

  $client2->rentCar();
  writeln('Client2 asked to rent A car');
  writeln('Client2 car data: ');
  writeln($client2->getCarData());
  writeln('');

  $client1->returnCar();
  writeln('Client1 returned the Car');
  writeln('');

  $client2->rentCar();
  writeln('Client2 car data: ');
  writeln($client2->getCarData());
  writeln('');



  function writeln($line_in) {
    echo $line_in.'<br/>';
  }
?>