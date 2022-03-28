using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Pants_Gestion
{
    internal class Pant
    {

        // (main) pant
        private int _idPant;
        private string _name;
        private Image _image;
        private string _description;
        private int _price;

        // Type
        private int _type;

        // Sex
        private int _sex;

        // Quantity
        private int _quantity;

        // Size
        private int _size;

        // Color
        private string _color;

        public int IdPant { get => _idPant; set => _idPant = value; }
        public string Name { get => _name; set => _name = value; }
        public Image Image { get => _image; set => _image = value; }
        public string Description { get => _description; set => _description = value; }
        public int Price { get => _price; set => _price = value; }
        public int Type { get => _type; set => _type = value; }
        public int Sex { get => _sex; set => _sex = value; }
        public int Quantity { get => _quantity; set => _quantity = value; }
        public int Size { get => _size; set => _size = value; }
        public string Color { get => _color; set => _color = value; }

        public Pant(int idPant, string name, Image image, string description, int price, int type, int sex, int quantity, int size, string color)
        {
            _idPant = idPant;
            _name = name;
            _image = image;
            _description = description;
            _price = price;
            _type = type;
            _sex = sex;
            _quantity = quantity;
            _size = size;
            _color = color;
        }

        public void DeletePant(int id)
        {
            // stuff
        }

        public void AddPant(Pant pant)
        {
            // stuff
        }

    }
}
