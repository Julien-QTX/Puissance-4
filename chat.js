let secondes = 0;
let minutes = 0;

const counter = document.getElementById('counter');

counter.innerText = timer;

function increment() {
        counter.innerText = secondes;
        if(secondes == 60)
        minutes++;
        secondes = 0;

        if(minutes == 60)
        minutes = 0;

}

setInterval(increment, 1000);