const express = require('express')
const app = express()
const bodyParser=require('body-parser')
app.use(bodyParser.json())
app.use(bodyParser.urlencoded({ extended: true }))
const axios=require('axios')
app.get('/', (req, res) => {

if(req.query.id==null&&req.query.name==null){
 res.send(`please use ?id=[THE ID OF THE GAME]&name=[THE NAME OF THE ITEM]<br>
 for example <a href="/?id=578080&name=SURVIVOR CRATE">/?id=578080&name=SURVIVOR CRATE</a> search an item using POST method to this link
 and add request body {search:[YOUR ITEM NAME]}`)   
}else{
    
    axios.get(`http://steamcommunity.com/market/priceoverview/?currency=3&appid=${req.query.id}&market_hash_name=${req.query.name}`)
    .then(data=>{
res.json(data.data)        
    })
}
})

// app.post('/', (req, res) =>{
//     axios.get(`http://steamcommunity.com/market/search?q=${req.body.search}`)
//     .then(data=>{
//   const cheerio = require('cheerio')
// const $ = cheerio.load(data.data)
        
//     })
//   res.send('Hello World!')  
// } )
app.post('/',(req,res)=>{
    // console.log(req.body.search)
    axios.get(`http://steamcommunity.com/market/search/render/?query=${req.body.search}&start=0&count=10&currency=3&language=english&format=json`).then(data=>{
        const cheerio = require('cheerio')
const $ = cheerio.load(data.data.results_html)
var panda=[]
for(let i=0;i<$('.market_listing_row').length;i++){
var ciki={}
ciki.id=$(".market_listing_row_link").eq(i).attr('href').split('/')[5]
ciki.name=$(".market_listing_row_link").eq(i).attr('href').split('/')[6]
ciki.img_url=$('.market_listing_row').eq(i).children().eq(0).attr("src")
ciki.quantity=$('.market_listing_row').eq(i).children().eq(1).children().eq(0).children().eq(0).children().eq(0).text()
ciki.normal_price=$('.market_listing_row').eq(i).children().eq(1).children().eq(1).children().eq(0).children().eq(1).text()
ciki.sale_price=$('.market_listing_row').eq(i).children().eq(1).children().eq(1).children().eq(0).children().eq(2).text()

    panda.push(ciki)    
}
var sarke={}
sarke.data=panda
if(Number(data.data.total_count)-Number(data.data.start)+10>-1){
    sarke.pagination=`/pagination?search=${req.body.search}&page=${Number(data.data.start)+10}`
}
res.send(sarke)
// res.send('<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>'+data.data.start+'\n'+data.data.total_count+'\n'+data.data.results_html)
// res.send(data.data)
    })
})
app.get('/pagination',(req,res)=>{
    axios.get(`http://steamcommunity.com/market/search/render/?query=${req.query.search}&start=${req.query.page}&count=10&currency=3&language=english&format=json`).then(data=>{
        const cheerio = require('cheerio')
const $ = cheerio.load(data.data.results_html)
var panda=[]
for(let i=0;i<$('.market_listing_row').length;i++){
var ciki={}
ciki.id=$(".market_listing_row_link").eq(i).attr('href').split('/')[5]
ciki.name=$(".market_listing_row_link").eq(i).attr('href').split('/')[6]
ciki.img_url=$('.market_listing_row').eq(i).children().eq(0).attr("src")
ciki.quantity=$('.market_listing_row').eq(i).children().eq(1).children().eq(0).children().eq(0).children().eq(0).text()
ciki.normal_price=$('.market_listing_row').eq(i).children().eq(1).children().eq(1).children().eq(0).children().eq(1).text()
ciki.sale_price=$('.market_listing_row').eq(i).children().eq(1).children().eq(1).children().eq(0).children().eq(2).text()

    panda.push(ciki)    
}
var sarke={}
sarke.data=panda
if(Number(data.data.total_count)-(Number(data.data.start)+10)>-1){
    sarke.pagination=`/pagination?search=${req.query.search}&page=${Number(data.data.start)+10}`
}
res.send(sarke)
// res.send('<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>'+data.data.start+'\n'+data.data.total_count+'\n'+data.data.results_html)
// res.send(data.data)
    })
})
app.listen(8080, () => console.log('Example app listening on port 3000!'))