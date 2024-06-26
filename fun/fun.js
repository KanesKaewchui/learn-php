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

  async function usersid(id) {
    try{
        const [rows] = await pool.query("SELECT * FROM register WHERE userid = ?",[id]);
        if (!rows || rows.length == 0) {
          return {code: 100, msg: "fail"};
        }
        const header = 123456789;
        if (header != 123456789) {
          return { code: 100, msg: "fail" };
        }
        return { code: 101, msg: "success", data: rows[0], header: header };
      } catch (error) {
        console.log('Error connecting to the database',error);
        throw error;
      }
  }

  async function postuserid(data) {
    try{
        const [rows] = await pool.query("SELECT * FROM register WHERE userid = ?",[data]);
        if (!rows || rows.length == 0) {
          return {code: 100, msg: "fail"};
        }
        const header = 123456789;
        if (header != 123456789) {
          return { code: 100, msg: "fail" };
        }
        return { code: 101, msg: "success", data: rows[0], header: header };
      } catch (error) {
        console.log('Error connecting to the database',error);
        throw error;
      }
  }


  module.exports = {data,user,usersid};


