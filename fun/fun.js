// var str = {};
// str.sumnumber = function (a,b) {
//     return a + b;
// };
// str.teststring = function (a,b) {
//     return a + b;
// };
// module.data = str;

// function helloWorld() {
//     return "Hello World";
// }
// function delayhelloWorld() {
//     return new Promise((resolve,reject)=> {
//         setTimeout(() => {
//            resolve("Delay"); 
//         }, 1500);
//     })
// }

// async function main() {
//     let a = helloWorld();
//     console.log(a);
//     let b =await delayhelloWorld();
//     console.log(b);
// }

const mysql = require('mysql2/promise')
const dbconfig = require('../db/db')

let pool;

async function data() {
    try {
      pool = await mysql.createPool(dbconfig.mysqlconfig);
      const connection = await pool.getConnection();
      console.log('database connection successful');
      connection.release();
    } catch (error) {
      console.error('Error connecting to the database:',error);
    }
  }

  async function user() {
    try{
        const [rows] = await pool.query('SELECT * FROM register ');
        return rows;
      } catch (error) {
        console.log('Error connecting to the database',error);
        throw error;
      }
  }

  module.exports = {data,user};


