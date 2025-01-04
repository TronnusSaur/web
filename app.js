/** IDK **/

const main_img = document.querySelector('#main_img')

main_img.addEventListener('click', function () {
    alert("Waiting for something to happen?")
});

/** Blocks **/

const block_act1 = document.querySelector('#block_01')
const block_act2 = document.querySelector('#block_02')
const block_act3 = document.querySelector('#block_03')
const block_act4 = document.querySelector('#block_04')

block_act1.addEventListener('click', function () {
    alert("Waiting for something to happen? 1")
});
block_act2.addEventListener('click', function () {
    alert("Waiting for something to happen? 2")
});
block_act3.addEventListener('click', function () {
    alert("Waiting for something to happen? 3")
});
block_act4.addEventListener('click', function () {
    alert("Waiting for something to happen? 4")
});

/** **/

const faq_button = document.querySelector('#faq_button')
const faq = document.querySelector('#faq')

faq_button.addEventListener('click', function () {
    faq.classList.toggle('active')
});

const faq_button_2 = document.querySelector('#faq_button_2')
const faq_2 = document.querySelector('#faq_2')

faq_button_2.addEventListener('click', function () {
    faq_2.classList.toggle('active')
});

const faq_button_3 = document.querySelector('#faq_button_3')
const faq_3 = document.querySelector('#faq_3')

faq_button_3.addEventListener('click', function () {
    faq_3.classList.toggle('active')
});

const faq_button_4 = document.querySelector('#faq_button_4')
const faq_4 = document.querySelector('#faq_4')

faq_button_4.addEventListener('click', function () {
    faq_4.classList.toggle('active')
});

const faq_button_5 = document.querySelector('#faq_button_5')
const faq_5 = document.querySelector('#faq_5')

faq_button_5.addEventListener('click', function () {
    faq_5.classList.toggle('active')
});

/** Video? **/
const watch_btn = document.querySelector('#watch_now')

watch_btn.addEventListener('click', function () {
    alert('No media :(')
});

/** Scroll **/

const header = document.querySelector('.header')

window.addEventListener('scroll', function () {
    header.classList.toggle('active', window.scrollY > 10)
});

const need = document.querySelector('.need')

window.addEventListener('scroll', function () {
    need.classList.toggle('active', window.scrollY > 25)
});

/** Menu Responsive **/

const nav_bar = document.querySelector('.nav_bar');
const menu_btn = document.querySelector('.menu_btn');

menu_btn.addEventListener('click', () => {
    nav_bar.classList.toggle('active');
});

/** Sonido? **/

var bg_snd = document.getElementById("bg-music");
function setNullVolume() {
    bg_snd.volume = 0.0;
}
function setLowVolume() {
    bg_snd.volume = 0.4;
}
function setFullVolume() {
    bg_snd.volume = 0.8;
}

