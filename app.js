let li_1 = document.getElementById("li_1");
let li_2 = document.getElementById("li_2");
let li_3 = document.getElementById("li_3");
let li_4 = document.getElementById("li_4");
let li_5 = document.getElementById("li_5");

let sec_0 = document.getElementById("sec_0");
let sec_1 = document.getElementById("sec_1");
let sec_2 = document.getElementById("sec_2");
let sec_3 = document.getElementById("sec_3");
let sec_4 = document.getElementById("sec_4");

let logo_01 = document.getElementById("logo_01");

function btnSnd_1() {
    let audio = new Audio('Select.ogg');
    audio.play();
}

function btnSnd_2() {
    let audio = new Audio('Wait.ogg');
    audio.play();
}

li_1.addEventListener('mouseover', ()=>{
    btnSnd_1();
});
li_2.addEventListener('mouseover', ()=>{
    btnSnd_1();
});
li_3.addEventListener('mouseover', ()=>{
    btnSnd_1();
});
li_4.addEventListener('mouseover', ()=>{
    btnSnd_1();
});
li_5.addEventListener('mouseover', ()=>{
    btnSnd_1();
});


li_1.addEventListener('click', ()=>{
    btnSnd_2();
    
    sec_1.style.display = "block";

    sec_0.style.display = "none";
    sec_2.style.display = "none";
    sec_3.style.display = "none";
    sec_4.style.display = "none";
});
li_2.addEventListener('click', ()=>{
    btnSnd_2();
    
    sec_2.style.display = "block";

    sec_0.style.display = "none";
    sec_1.style.display = "none";
    sec_3.style.display = "none";
    sec_4.style.display = "none";
});
li_3.addEventListener('click', ()=>{
    btnSnd_2();
    
    sec_3.style.display = "block";

    sec_0.style.display = "none";
    sec_1.style.display = "none";
    sec_2.style.display = "none";
    sec_4.style.display = "none";
});
li_4.addEventListener('click', ()=>{
    btnSnd_2();
    
    sec_4.style.display = "block";

    sec_0.style.display = "none";
    sec_1.style.display = "none";
    sec_2.style.display = "none";
    sec_3.style.display = "none";
});
li_5.addEventListener('click', ()=>{
    btnSnd_2();
    
    sec_0.style.display = "block";

    sec_1.style.display = "none";
    sec_2.style.display = "none";
    sec_3.style.display = "none";
    sec_4.style.display = "none";

    let audio = new Audio('Mac_Startup.mp3');
    audio.play();
    
});

logo_01.addEventListener('click', ()=>{
    let audio = new Audio('Robotvoice.ogg');
    audio.play();
});

document.addEventListener("keypress", ()=>{
    let bg_audio = new Audio('Ambience1.ogg');
    bg_audio.play();

    let msg = document.getElementById('message');
    msg.style.display = "none";
    let cnt = document.getElementById('content');
    cnt.style.opacity = 1.0;
    cnt.style.pointerEvents = "all";
})