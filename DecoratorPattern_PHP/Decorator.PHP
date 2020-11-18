<?php

/**  */
interface IceCreamDecorator
{
    public function getIcecream();
    public function putToppings();
    public function Extra();
}
/** En esta clase se crea la base del helado */
class BasicIcecream implements IceCreamDecorator
{
    public function getIcecream()
    { 
        return "Chocolate Ice Cream";
    }
    public function putToppings()
    {
        return "Sprinkles";
    }
    public function Extra()
    {
        return "  Brownie-Batter Bites ";
    }
}

/** EN esta y las demas, se implementa el objeto IceCreamDecorator en el constructor */
class SingleScoop implements IceCreamDecorator
{
    protected $iceCream;
    public function __construct(IceCreamDecorator $iceCream)
    {
        $this->iceCream = $iceCream;
    }
    public function getIceCream()
    {
        return  $this->iceCream->getIcecream(). "\n Vainilla Ice Cream ";
    }
    public function putToppings()
    {
        return $this->iceCream->putToppings() . ",\n  with chocolate Hot Fudge ";
    }
    public function Extra()
    {
        
    }
    
}

class DoubleScoop implements IceCreamDecorator
{
    protected $iceCream;
    public function __construct(IceCreamDecorator $iceCream)
    {
        $this->iceCream = $iceCream;
    }
    public function getIcecream()
    {
        return $this->iceCream->getIcecream(). ", \n Caramel Ice cream";
    }
    public function putToppings()
    {
        return $this->iceCream->putToppings() . ",\n  Whipped cream and cookies";
    }
     public function Extra()
    {
      return $this->iceCream->Extra() . "Brownie-Batter Bites";
    }
  
}



// Simple ice cream:
// Aqui se lee un Helado simple solo con una bola de helado y un topping:
echo "=== SIMPLE ICE CREAM ===\n";
$simpleIcecream = new BasicIcecream();
echo "Ice cream Base: " . $simpleIcecream->getIcecream() . "\n";
echo "Toppings included: " . $simpleIcecream->putToppings() . "\n";
echo"\n";
// Despues aqui se lee dos bolas de helado con toppings agregados
echo "=== SINGLE ICE CREAM SCOOP+ TOPPING ===\n";
$singlescop = new SingleScoop (new BasicIcecream());
echo "Ice cream: " . $singlescop->getIcecream() . "\n";
echo "Toppings Included: " . $singlescop->putToppings() . "\n";
echo"\n";
// Por ultimo se le agrega otra bola de helado con otros sabores, diferentes toppings y un elemento EXTRA
echo "=== DOUBLE ICE CREAM SCOOP+ TOPPINGS + EXTRA ===\n";
$double_scoop = new DoubleScoop(new SingleScoop(new BasicIcecream()));
echo "Ice cream: " . $double_scoop->getIcecream() . "\n";
echo "Toppings included: " . $double_scoop->putToppings() . "\n";
echo "Extra: " . $double_scoop->Extra() . "\n";