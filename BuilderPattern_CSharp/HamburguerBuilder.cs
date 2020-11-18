using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BuilderPattern
{
    abstract class HamburguerBuilder
    {
        protected Burguer burguer;

        public Burguer Burguer
        {
            get { return burguer;  }
            
        }

        //Abstracts methods
        public abstract void AddBun();
        public abstract void AddMeat();
        public abstract void AddToppings();



    }
}
