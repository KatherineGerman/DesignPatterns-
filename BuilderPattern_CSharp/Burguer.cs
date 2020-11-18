using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BuilderPattern
{
    class Burguer
    {
        private string _burguerType;

     

        private Dictionary<string, string> ingredientes  = new Dictionary<string, string>();

        public Burguer(string burguerType)
        {
            this._burguerType = burguerType;

        }


         public string this[string key]
        {
            get { return ingredientes[key]; }
            set { ingredientes[key] = value; }
        }
         

        public void Show()
        {
            Console.WriteLine("...");
            Console.WriteLine("Burguer: {0}", _burguerType);
            Console.WriteLine(" Bun: {0}", ingredientes["bun"]);
            Console.WriteLine(" Meat: {0}", ingredientes["meat"]);
            Console.WriteLine(" Toppings: {0}", ingredientes["toppings"]);
        }

     
    }
}
