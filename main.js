const imgAbout = document.getElementById('img-about');
let imgId = 0;
setInterval(()=>{
    imgAbout.style.backgroundImage = `url('./img/esport-team${imgId}.jpg')`;
    imgId++;
    if(imgId>=3){
        imgId=0;
    }
},6000);