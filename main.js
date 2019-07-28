const imgAbout = document.getElementById('img-about');
const watchCalculator = document.getElementById('watch-calculator');
let calDisplay = document.getElementById('calculator');
watchCalculator.addEventListener('click',()=>{
    
    if(calDisplay.style.display == 'block'){
        calDisplay.style.display = 'none';
    }else{
        calDisplay.style.display = 'block';
    }
})

let imgId = 0;
setInterval(()=>{
    imgAbout.style.backgroundImage = `url('./img/esport-team${imgId}.jpg')`;
    imgId++;
    if(imgId>=3){
        imgId=0;
    }
},6000);