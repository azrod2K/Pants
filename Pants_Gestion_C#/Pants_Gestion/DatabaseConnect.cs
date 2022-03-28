using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MySql.Data.MySqlClient;

namespace Pants_Gestion
{
    internal class DatabaseConnect
    {
        private const string _HOST = "localhost";
        private const string _PORT = "3306";
        private const string _DATABASE = "pants";
        private const string _USERNAME = "pants_admin";
        private const string _PASSWORD = "Super";

        private String _conn;

        public DatabaseConnect()
        {
            _conn = "server=" + _HOST + ";database=" + _DATABASE
               + ";port=" + _PORT + ";user=" + _USERNAME + ";password=" + _PASSWORD;
        }

        public MySqlConnection GetMysqlConnection()
        {
            return new MySqlConnection(this._conn);
        }
    }
}
