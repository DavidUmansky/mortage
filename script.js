// const prevent = document.querySelector('#prevent');
// prevent.preventDefault();

if (document.querySelector('#first') !== null) {
    const first = document.querySelector('#details');
    const iconics = document.querySelector('#iconics');

    setTimeout(() => {
        on()
    }, "9000");

    document.getElementById("close-button").addEventListener("click", off);
} else {
    setTimeout(() => {
        on()
    }, "9000");
    document.getElementById("close-button").addEventListener("click", off);
}

function on() {
    document.getElementById("overlay").style.display = "block";
    if (document.querySelector('#first') !== null) {
        first.style.display = 'none';
        iconics.style.display = 'none';
    }
}

function off() {
    document.getElementById("overlay").style.display = "none";
    if (document.querySelector('#first') !== null) {
        first.style.display = 'block';
        iconics.style.display = 'block';
    }
}

if (document.querySelector('#first-a') !== null) {
    let firstA = document.querySelector('#first-a');
    let midleA = document.querySelector("#midle-a");
    let lastA = document.querySelector("#last-a");
    let FourA = document.querySelector("#four-a");
    let FiveA = document.querySelector("#five-a");
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
                } else {
                    if (FourA.classList.contains('current2')) {
                        FourA.classList.remove('current2');
                        firstA.classList.add('current2')
                        allElements[3].classList.remove('active');
                        allElements[0].classList.add('active');
                    } else {
                        FiveA.classList.remove('current2');
                        firstA.classList.add('current2')
                        allElements[4].classList.remove('active');
                        allElements[0].classList.add('active');
                    }
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
                    allElements[2].classList.remove('active');
                    allElements[1].classList.add('active');
                } else {
                    if (FourA.classList.contains('current2')) {
                        FourA.classList.remove('current2');
                        midleA.classList.add('current2');
                        allElements[3].classList.remove('active');
                        allElements[1].classList.add('active');
                    } else {
                        FiveA.classList.remove('current2');
                        midleA.classList.add('current2')
                        allElements[4].classList.remove('active');
                        allElements[1].classList.add('active');
                    }
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
                } else {
                    if (FourA.classList.contains('current2')) {
                        FourA.classList.remove('current2');
                        lastA.classList.add('current2');
                        allElements[3].classList.remove('active');
                        allElements[2].classList.add('active');
                    } else {
                        FiveA.classList.remove('current2');
                        lastA.classList.add('current2')
                        allElements[4].classList.remove('active');
                        allElements[2].classList.add('active');
                    }
                }
            }
        }
    });

    FourA.addEventListener("click", function (event) {
        event.preventDefault();
        if (FourA.classList.contains('current2')) {
            return;
        } else {
            if (midleA.classList.contains('current2')) {
                midleA.classList.remove('current2');
                FourA.classList.add('current2');
                allElements[1].classList.remove('active');
                allElements[3].classList.add('active');
            } else {
                if (firstA.classList.contains('current2')) {
                    firstA.classList.remove('current2');
                    FourA.classList.add('current2');
                    allElements[0].classList.remove('active');
                    allElements[3].classList.add('active');
                } else {
                    if (lastA.classList.contains('current2')) {
                        lastA.classList.remove('current2');
                        FourA.classList.add('current2');
                        allElements[2].classList.remove('active');
                        allElements[3].classList.add('active');
                    } else {
                        FiveA.classList.remove('current2');
                        FourA.classList.add('current2')
                        allElements[4].classList.remove('active');
                        allElements[3].classList.add('active');
                    }
                }
            }
        }
    });

    FiveA.addEventListener("click", function (event) {
        event.preventDefault();
        if (FiveA.classList.contains('current2')) {
            return;
        } else {
            if (midleA.classList.contains('current2')) {
                midleA.classList.remove('current2');
                FiveA.classList.add('current2');
                allElements[1].classList.remove('active');
                allElements[4].classList.add('active');
            } else {
                if (firstA.classList.contains('current2')) {
                    firstA.classList.remove('current2');
                    FiveA.classList.add('current2');
                    allElements[0].classList.remove('active');
                    allElements[4].classList.add('active');
                } else {
                    if (lastA.classList.contains('current2')) {
                        lastA.classList.remove('current2');
                        FiveA.classList.add('current2');
                        allElements[2].classList.remove('active');
                        allElements[4].classList.add('active');
                    } else {
                        FourA.classList.remove('current2');
                        FiveA.classList.add('current2');
                        allElements[3].classList.remove('active');
                        allElements[4].classList.add('active');
                        
                    }
                }
            }
        }
    });



}








































