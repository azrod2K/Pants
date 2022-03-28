﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Pants_Gestion
{
    internal class User
    {
        private int _idUser;
        private string _firstName;
        private string _lastName;
        private string _email;
        private string _password;

        public int IdUser { get => _idUser; set => _idUser = value; }
        public string FirstName { get => _firstName; set => _firstName = value; }
        public string LastName { get => _lastName; set => _lastName = value; }
        public string Email { get => _email; set => _email = value; }
        public string Password { get => _password; set => _password = value; }

        public User(int idUser, string firstName, string lastName, string email, string password)
        {
            _idUser = idUser;
            _firstName = firstName;
            _lastName = lastName;
            _email = email;
            _password = password;
        }

    }
}
