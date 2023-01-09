
console.log(Math.random())

function random(min, max){
    return Math.round(Math.random() * (max - min) + min)

}
x = random(10,300)
console.log(x);





const bonne = document.querySelector(".bonne");
const tent = document.querySelector(".tent");
const canvas = document.querySelector("canvas");
var button = document.querySelector('.button');
var tent3 = document.querySelector('.tent3');
var i = 7;
y = button.addEventListener('click', function (){
    document.getElementById("button").onclick = document.getElementById("nombre").value;
    var nombrako = document.getElementById("nombre").value;

    if (nombrako < x){
        
        tent.innerText = "Augmente un peu"
        
    }
    else if (nombrako > x){
        tent.innerText = "diminue un peu"     
        
        
    }
    if ( nombrako == x){
        button.addEventListener('click', button.classList.add('button2'));
        button.addEventListener('click', button.classList.add('button3'));
        tent.innerText = "Felicitation,";
        bonne.innerText = " Vous avez trouvé la bonne reponse";
        button.addEventListener('click',tent.classList.add('tentcolor2'));
        button.addEventListener('click',canvas.classList.add('canvas1'));
        

        
        
    }
    else{
        button.addEventListener('click', button.classList.add('button1'));
        button.addEventListener('click', button.classList.remove('button2'));  
        i=i-1;
        document.getElementById("score").innerHTML = i;
       
        
     }  
     if(i<0) {
        document.getElementById("score").innerHTML = "0";
        
        button.addEventListener('click', button.classList.add('button3'));
        tent.innerText = "Game over";
        bonne.innerText = "La bonne réponse est " + x; 
        button.addEventListener('click',tent.classList.add('tentcolor3'));
     }
    if(i==0){
        
        button.addEventListener('click', button.classList.add('button3'));
        tent.innerText = "Game over";
        bonne.innerText = "La bonne réponse est " + x; 
        button.addEventListener('click',tent.classList.add('tentcolor3'));
        
    }
}


)



/* var containervisible = documment.querySelector(".containervisible"); */
var container = document.querySelector(".container")
var startinvisible = document.querySelector(".startinvisible");
var starts = document.querySelector(".start")

/* start.addEventListener('click', );*/

var start = document.querySelector('.btn-start');

start.addEventListener('click', function (){
    console.log("ça marche");
    container.classList.remove('containervisible');
    starts.classList.add('startinvisible');

    const timer = document.querySelector('.timer');

const min = 0;
const sec = 31;

const minutes = min * 60000;
const seconds = sec * 1000;
const setTime = minutes + seconds;

const starTime = Date.now();
const futureTime = starTime + setTime;
    const timerLoop = setInterval(countDownTimer);
countDownTimer(); 
function countDownTimer(){
    const currentTime = Date.now();
    const remainingTime = futureTime - currentTime;
    
     const mins = Math.floor((remainingTime / (1000 * 60 )) % 60).toLocaleString('en-US', {minimumIntegerDigits: 2, useGrouping:false});
     const secs = Math.floor((remainingTime / (1000)) % 60).toLocaleString('en-US', {minimumIntegerDigits: 2, useGrouping:false});

    timer.innerHTML =
    `
    <div>${mins}</div>
    <div class="colon">:</div>
    <div>${secs}</div>
    ` ;

    if(remainingTime<=6000){
        timer.style.color = "red";
    }
    if(remainingTime<0){
        clearInterval(timerLoop);
        button.addEventListener('click', button.classList.add('button3'));
        tent.innerText = "Game over";
        bonne.innerText = "La bonne réponse est " + x; 
        button.addEventListener('click',tent.classList.add('tentcolor3'));
        
        timer.innerHTML =
    `
    <div>00</div>
    <div class="colon">:</div>
    <div>00</div>
    ` ;
    timer.style.color = "lightgray";
    }


}

})

