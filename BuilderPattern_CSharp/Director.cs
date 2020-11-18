using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BuilderPattern
{
    class Director
    {
        public void Directr(HamburguerBuilder hamburguerBuilder)

        {
            
            hamburguerBuilder.AddBun();
            hamburguerBuilder.AddMeat();
            hamburguerBuilder.AddToppings();

            
        }
    }
}
