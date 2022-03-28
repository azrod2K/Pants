using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Pants_Gestion
{
    internal class Order
    {
        private int _idOrder;
        private double _price;
        private DateTime _dateOrder;
        private DateTime _dateDelivery;
        private int _idUser;

        public int IdOrder { get => _idOrder; set => _idOrder = value; }
        public double Price { get => _price; set => _price = value; }
        public DateTime DateOrder { get => _dateOrder; set => _dateOrder = value; }
        public DateTime DateDelivery { get => _dateDelivery; set => _dateDelivery = value; }
        public int IdUser { get => _idUser; set => _idUser = value; }


        public Order(int idOrder, double price, DateTime dateOrder, DateTime dateDelivery, int idUser)
        {
            _idOrder = idOrder;
            _price = price;
            _dateOrder = dateOrder;
            _dateDelivery = dateDelivery;
            _idUser = idUser;
        }

    }
}
