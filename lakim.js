 
const express = require('express')
const app = express()
const bodyParser=require('body-parser')
var cors = require('cors')
app.use(cors())
// app.use(bodyParser.json())
app.set('view engine', 'ejs');
    app.get('/',async (req, res) => {
await res.sendFile(__dirname+'/index.html')
})

 app.post('/craiglist',bodyParser.json(),async (req, res) => {
 var  craigslist = require('node-craigslist'),
  client = new craigslist.Client({
    city : 'seattle'
  });
     
const listing=await client.search(req.body.search)
await res.send(listing)
})
app.listen(8080, () => console.log('Example app listening on port 3000!'))