const express = require('express')
const req = require('express/lib/request')
const res = require('express/lib/response')
const {data,user,usersid} = require('../fun/fun');
const md5 = require('md5');
const app = express()
const port = 3000

app.use(express.json());

data().then(() => {
  app.get('/test',async(req, res) =>{
    try{
        const getusers = await user();
        res.json(getusers);
    } catch (error) {
        console.log('Error connecting to the database',error);
        res.status(500).send('Error database')
    }
  });

  app.get('/userid',async(req, res) =>{
    try{
        const getid = req.query.id;
        const getusersid = await usersid(getid);
        res.json(getusersid);
    } catch (error) {
        console.log('Error connecting to the database',error);
        res.status(500).send('Error database')
    }
  });

  app.post('/useridpost',async(req, res) =>{
    try{
        const getid = req.body.id;
        const checksum = req.body.checksum;
        console.log("checksum >>>>",checksum);
        const key = '12345GGWP';
        const checksumsevr = md5(key + '67581');
        if (checksumsevr !==  checksum) {
          return res.status(400).json({err:"error not true"})
        }
        console.log("checksumsevr >>>>",checksumsevr);
        console.log(getid);
        const getusersid = await usersid(getid);
        res.json(getusersid);
    } catch (error) {
        console.log('Error connecting to the database',error);
        res.status(500).send('Error database')
    }
  });

  
  app.get('*', (req, res) => {
    res.status(404).send('page not found');
  });

  app.listen(port, () => {
    console.log(`Example app listening on port ${port}`);
  });
}).catch(err => {
  console.error('Error connecting to the database:', err);
});

module.exports = app;



