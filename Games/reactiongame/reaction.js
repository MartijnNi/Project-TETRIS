randomTime = 0;
function setRandom() {
    randomTime = Math.random() * 101 | 0;
}
setInterval(setRandom, 5000);
console.log(randomTime)