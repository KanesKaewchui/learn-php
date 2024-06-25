// exports.mysqlconfig = {
//     host: 'localhost',
//     user: 'loki',
//     password: 'loki12345',
//     database: 'full_ss4',
// }

const mysql = require('./db')
const dbconfig = require('./db')

pool = mysql.createPool(dbconfig.mysqlconfig);
async function checkDatabaseConnection() {
  try {
    const connection = await pool.getConnection();
    console.log(`database connection successful`);
    connection.release();
  } catch (error) {
    console.error('Error connecting to the database:',error);
  }
}

