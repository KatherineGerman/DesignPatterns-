using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BuilderPattern
{
    class BaconBurguer : HamburguerBuilder

    {
        public BaconBurguer()
        {
            burguer = new Burguer(" Bacon Burguer");
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
            burguer["toppings"] = "Bacon, Lettuche, Tomato, Onions, Pickles, Ketchup, Mayo";
        }

    }
}
