const express = require('express')
const req = require('express/lib/request')
const res = require('express/lib/response')
const {data,user,usersid} = require('../fun/fun');
const md5 = require('md5');
const { default: axios } = require('axios');
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

  app.post('/usernode',async(req, res) =>{
    const getid = req.body.id;
    const headertest = req.get('test');
    console.log(getid); 
    console.log(headertest); 
    axios.post('http://localhost:8080/Service/nodeuser', {
      id: getid
    }, {
      headers: {
        'Content-Type': 'application/json',
        'test': headertest
      }
    }
  ).then (function (response) {
    console.log(response.data);
    res.status(200).json(response.data)
  }).catch(function (error) {
    console.log(error);
  }
  )
  });


  app.post('/userunknow',async(req, res) =>{
  const userid = "123456,fluke"
  const chacksum = md5('fullss4'+'123456'+'3E1SOVUNQX@_2024'+'apiphp'+'fluke')
    axios.post('https://snap-england-cambridge-societies.trycloudflare.com/test/api_v1', {
      userid: userid,
      chksum : chacksum,
      key_api: '3E1SOVUNQX@_2024'
    }, {
      headers: {
        'Content-Type': 'application/json',
      }
    }
  ).then (function (response) {
    console.log(response.data);
    res.status(200).json(response.data)
  }).catch(function (error) {
    console.log(error);
  }
  )
  });

  app.post('/userunknow',async(req, res) =>{
    const userid = "123456,fluke"
    const chacksum = md5('fullss4'+'123456'+'3E1SOVUNQX@_2024'+'apiphp'+'fluke')
      axios.post('https://snap-england-cambridge-societies.trycloudflare.com/test/api_v1', {
        userid: userid,
        chksum : chacksum,
        key_api: '3E1SOVUNQX@_2024'
      }, {
        headers: {
          'Content-Type': 'application/json',
        }
      }
    ).then (function (response) {
      console.log(response.data);
      
      const md5_userid = md5(response.data.userid);
      const list = {
      md5_userid: md5_userid,
      code: response.data.code,
      name: response.data.name
      };


      axios.post('https://snap-england-cambridge-societies.trycloudflare.com/test/api_v2',list,{
        headers: {
          'Content-Type': 'application/json',
        }
      }
    ).then (function (response2) {
      console.log(response2.data);
      res.status(200).json({
        md5_userid: md5_userid,
        code: response1.data.code,
        name: response1.data.name
      });
    }).catch(function (error) {
      console.log(error);
    }
    )













    }).catch(function (error) {
      console.log(error);
    }
    )
    });

        // then(function (response2) {
    //   axios.post('https://snap-england-cambridge-societies.trycloudflare.com/test/api_v2',{
    //     md5_userid: response2.data,
    //     code : response2.code,
    //     name: response2.name
    //   })
    // })
    //   console.log(response2.code);
    //   res.status(200).json(response.data)





  
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



