// const Alldata = requirs('./fun/fun.js')
// console.log('All function', Alldata);
// const {data} = requirs('./fun/fun.js')

// const result = data.sumnumber(5,10);
// console.log('The sum is:',result);

// const result2 = data.teststring('ABC','DEFG');
// console.log('The string',result2);

// const express = require('express')
// const req = require('express/lib/request')
// const res = require('express/lib/response')
// const app = express()
// const port = 3000

// let pool;

// async function data() {
//   try {
//     pool = await mysql.createPool(dbconfig.mysqlconfig);
//     const connection = await pool.getConnection();
//     console.log('database connection successful');
//   } catch (error) {
//     console.error('Error connecting to the database:',error);
//   }
// }

// data().then(() =>{
  // app.get('/test',async(req,res)=>{
  //   try{
  //     const [rows] = await pool.query('SELECT * FROM register ');
  //     res.json(rows)
  //   } catch (error) {
  //     console.log('Error connecting to the database',error);
  //     res.status(500).send('Error database')
  //   }
  // });

//   app.get('*', (req, res) => {
//     res.status(404).send('page not found');
//   });

//   app.listen(port, () => {
//     console.log(`Example app listening on port ${port}`)
//   });
// }).catch(err => {
//   console.error('Error connecting to the database:', err);
// });
// module.exports = app;

// exports.mysqlconfig = {
//   host: 'localhost',
//   user: 'Test',
//   password: 'D5CEVO',
//   database: 'db_user',
// }











