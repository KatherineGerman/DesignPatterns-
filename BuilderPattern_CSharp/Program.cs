using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BuilderPattern
{
    class Program
    {
        static void Main(string[] args)
        {
            HamburguerBuilder builder;

            Director shop = new Director();

            //Display burguers

            builder = new ClassicBurguer();
            shop.Directr(builder);
            builder.Burguer.Show();

            builder = new BaconBurguer();
            shop.Directr(builder);
            builder.Burguer.Show();

            builder = new ChickenBurguer();
            shop.Directr(builder);
            builder.Burguer.Show();

            Console.ReadKey();
        }
    }
}
