// const first = document.querySelector('#details');
// const second = document.querySelector('#second');
// const iconics = document.querySelector('#iconics');


// setTimeout(() => {
//     on()
// }, "9000");

// function on() {
//     document.getElementById("overlay").style.display = "block";
//     first.style.display = 'none';
//     second.style.display = 'none';
//     iconics.style.display = 'none';
// }

// function off() {
//     document.getElementById("overlay").style.display = "none";
//     first.style.display = 'block';
//     second.style.display = 'block';
//     iconics.style.display = 'block';
// }

// document.getElementById("close-button").addEventListener("click",off);

let firstA = document.querySelector('#first-a');
let midleA = document.querySelector("#midle-a");
let lastA = document.querySelector("#last-a");
let allElements = document.getElementsByClassName('all-services');

if (firstA.classList.contains('current2')) {
    allElements[0].classList.add('active');
}

firstA.addEventListener("click", function (event) {
    event.preventDefault();
    if (firstA.classList.contains('current2')) {
        allElements[0].classList.add('active');
        return;
    } else {
        if (midleA.classList.contains('current2')) {
            midleA.classList.remove('current2');
            firstA.classList.add('current2')
            allElements[1].classList.remove('active');
            allElements[0].classList.add('active');
        } else {
            if (lastA.classList.contains('current2')) {
                lastA.classList.remove('current2');
                firstA.classList.add('current2');
                allElements[2].classList.remove('active');
                allElements[0].classList.add('active');
            }
        }
    }
});

midleA.addEventListener("click", function (event) {
    event.preventDefault();
    if (midleA.classList.contains('current2')) {
        return;
    } else {
        if (firstA.classList.contains('current2')) {
            firstA.classList.remove('current2');
            midleA.classList.add('current2');
            allElements[0].classList.remove('active');
            allElements[1].classList.add('active');
        } else {
            if (lastA.classList.contains('current2')) {
                lastA.classList.remove('current2');
                midleA.classList.add('current2');
                allElements[0].classList.remove('active');
                allElements[1].classList.add('active');
            }
        }
    }
});

lastA.addEventListener("click", function (event) {
    event.preventDefault();
    if (lastA.classList.contains('current2')) {
        return;
    } else {
        if (midleA.classList.contains('current2')) {
            midleA.classList.remove('current2');
            lastA.classList.add('current2');
            allElements[1].classList.remove('active');
            allElements[2].classList.add('active');
        } else {
            if (firstA.classList.contains('current2')) {
                firstA.classList.remove('current2');
                lastA.classList.add('current2');
                allElements[0].classList.remove('active');
                allElements[2].classList.add('active');
            }
        }
    }
});







































