// const Alldata = requirs('./fun/fun.js')
// console.log('All function', Alldata);
// const {data} = requirs('./fun/fun.js')

// const result = data.sumnumber(5,10);
// console.log('The sum is:',result);

// const result2 = data.teststring('ABC','DEFG');
// console.log('The string',result2);

const express = require('express')
const mysql = require('mysql2/promise')
const dbconfig = require('./db/app')
const req = require('express/lib/request')
const res = require('express/lib/response')
const app = express()
const port = 3000

// app.get('/', (req, res) => {
//   res.send('Hello World!')
// })

// app.listen(port, () => {
//   console.log(`Example app listening on port ${port}`)
// })

let pool;

async function data() {
  try {
    pool = mysql.createPool(dbconfig.mysqlconfig);
    const connection = await pool.getConnection();
    console.log('database connection successful');
  } catch (error) {
    console.error('Error connecting to the database:',error);
  }
}

data().then(() =>{
  app.get('/',(req,res)=>{
    res.send
  });

  app.listen(port, () => {
    console.log(`Example app listening on port ${port}`)
  });
}).catch(err => {
  console.error('Error connecting to the database:', err);
});
module.exports = app;











// pool = mysql.createPool(dbconfig.mysqlconfig);
// async function checkDatabaseConnection() {
//   try {
//     const connection = await pool.getConnection();
//     console.log(`database connection successful`);
//     connection.release();
//   } catch (error) {
//     console.error('Error connecting to the database:',error);
//   }
// }


