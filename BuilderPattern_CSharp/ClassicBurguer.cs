using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BuilderPattern
{
    class ClassicBurguer : HamburguerBuilder
    {
        public ClassicBurguer()
        {
            burguer = new Burguer ("Classic Burguer");

        }
        public override void AddBun()
        {
            burguer["bun"] = " Brioche";
        }
        public override void AddMeat()
        {
            burguer["meat"] = " Beef";
        }

        public override void AddToppings()
        {
            burguer["toppings"] = " Lettuche, Tomato, Onion, Mayo, Ketchup";
        }
       

    }
}
