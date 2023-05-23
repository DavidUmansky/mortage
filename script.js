const first = document.querySelector('#details');
const second = document.querySelector('#second');
const iconics = document.querySelector('#iconics');


setTimeout(() => {
    on()
}, "9000");

function on() {
    document.getElementById("overlay").style.display = "block";
    first.style.display = 'none';
    second.style.display = 'none';
    iconics.style.display = 'none';
}

function off() {
    document.getElementById("overlay").style.display = "none";
    first.style.display = 'block';
    second.style.display = 'block';
    iconics.style.display = 'block';
}

document.getElementById("close-button").addEventListener("click",off);






















