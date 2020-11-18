using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BuilderPattern
{
    class ChickenBurguer : HamburguerBuilder
    {
        

            public ChickenBurguer()
            {
                burguer = new Burguer(" Chicken Burguer");
            }
            public override void AddBun()
            {
                burguer["bun"] = " Brioche";
            }
            public override void AddMeat()
            {
                burguer["meat"] = " Chicken";
            }

            public override void AddToppings()
            {
                burguer["toppings"] = " Lettuche, Tomato, Ketchup, Mayo";
            }

        
    }
}
