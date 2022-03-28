using MySql.Data.MySqlClient;
using System.Linq;

namespace Pants_Gestion
{
    public partial class Form1 : Form
    {
        const int DATABASE_TABLE_COLUMN_NUMBER_0 = 0;
        const int DATABASE_TABLE_COLUMN_NUMBER_1 = 1;
        const int DATABASE_TABLE_COLUMN_NUMBER_2 = 2;
        const int DATABASE_TABLE_COLUMN_NUMBER_3 = 3;
        const int DATABASE_TABLE_COLUMN_NUMBER_4 = 4;


        private List<User> users = new List<User>();
        private List<Order> orders = new List<Order>();
        private List<Pant> pants = new List<Pant>();   
        private DatabaseConnect db = new DatabaseConnect();
        public Form1()
        {
            InitializeComponent();
            MySqlConnection conn = db.GetMysqlConnection();
            conn.Open();
            GetAllUsers(conn);
            GetAllOrders(conn);
            conn.Close();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
        }

        private void GetAllUsers(MySqlConnection conn)
        {
            // SQL STUFF
            string sql = "SELECT * FROM User";
            MySqlCommand cmd = new MySqlCommand(sql, conn);
            MySqlDataReader rdr = cmd.ExecuteReader();

            // ADD DATA TO LIST
            while (rdr.Read())
            {
                users.Add(new User((int)rdr[DATABASE_TABLE_COLUMN_NUMBER_0],
                    (string)rdr[DATABASE_TABLE_COLUMN_NUMBER_1],
                    (string)rdr[DATABASE_TABLE_COLUMN_NUMBER_2],
                    (string)rdr[DATABASE_TABLE_COLUMN_NUMBER_3],
                    (string)rdr[DATABASE_TABLE_COLUMN_NUMBER_4]));
            }
            rdr.Close();

            // ADD LIST DATA TO FORMS ELEMENT LISTBOX
            foreach (User user in users)
            {
                lbxUsers.Items.Add(user.IdUser + " | " + user.FirstName + " | " + user.LastName + " | " +  user.Email + " | " + user.Password);
            }
        }

        private void GetAllPants(MySqlConnection conn)
        {
            // SQL STUFF
            string sql = "SELECT * FROM Pants";
            MySqlCommand cmd = new MySqlCommand(sql, conn);
            MySqlDataReader rdr = cmd.ExecuteReader();

            // ADD DATA TO LIST
            while (rdr.Read())
            {
                //pants.Add(new Pant()); sql query to do
            }
            rdr.Close();

            // ADD LIST DATA TO FORMS ELEMENT LISTBOX
            foreach (User user in users)
            {
                lbxOrders.Items.Add(user.FirstName + " " + user.LastName);
            }
        }

        private void GetAllOrders(MySqlConnection conn)
        {
            // SQL STUFF
            string sql = "SELECT * FROM Commande";
            MySqlCommand cmd = new MySqlCommand(sql, conn);
            MySqlDataReader rdr = cmd.ExecuteReader();

            // ADD DATA TO LIST
            while (rdr.Read())
            {
                orders.Add(new Order((int)rdr[DATABASE_TABLE_COLUMN_NUMBER_0],
                    (double)rdr[DATABASE_TABLE_COLUMN_NUMBER_1],
                    (DateTime)rdr[DATABASE_TABLE_COLUMN_NUMBER_2],
                    (DateTime)rdr[DATABASE_TABLE_COLUMN_NUMBER_3],
                    (int)rdr[DATABASE_TABLE_COLUMN_NUMBER_4]));
            }

            rdr.Close();

            // ADD LIST DATA TO FORMS ELEMENT LISTBOX
            foreach (Order order in orders)
            {
                lbxOrders.Items.Add(order.IdOrder + " | " + order.Price + " | " + order.DateOrder + " | " + order.DateDelivery + " | " + order.IdUser);
            }
        }

        private void lbxOrders_SelectedIndexChanged(object sender, EventArgs e)
        {
            test1.Text = "";
            if (lbxOrders.Items.Count > 0)
            {
                String test = String.Empty;
                test = lbxOrders.Items[lbxOrders.SelectedIndex].ToString();
                List<string> data = test.Split("|").ToList();
                for (int i = 0; i < data.Count; i++)
                {
                    test1.Text += " ->  " + data[i] + Environment.NewLine;
                }
            }
        }

        private void lbxUsers_SelectedIndexChanged(object sender, EventArgs e)
        {
            test1.Text = "";
            if (lbxOrders.Items.Count > 0)
            {
                String test = String.Empty;
                test = lbxUsers.Items[lbxUsers.SelectedIndex].ToString();
                List<string> data = test.Split("|").ToList();
                for (int i = 0; i < data.Count; i++)
                {
                    test1.Text += " ->  " + data[i] + Environment.NewLine;
                }
            }
        }
    }
}