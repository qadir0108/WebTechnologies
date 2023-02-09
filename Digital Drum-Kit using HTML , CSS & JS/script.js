window.addEventListener('keydown', playSound);
const keys = document.querySelectorAll('.key');

keys.forEach(key => key.addEventListener('transitionend', removeTransition));

function playSound(e){
    const audio = document.querySelector(`audio[data-key="${e.keyCode}"]`);
    const key = document.querySelector(`.key[data-key="${e.keyCode}"]`);
    // console.log(audio);

    if (!audio) {
        return;
    }

    //error message
    // Uncaught TypeError: Cannot set property 'currentTime' of null
    audio.currentTime = 0;
    audio.play();
    key.classList.add('playing');
}

function removeTransition (e){
// remove playing class
if(e.propertyName !== 'transform'){
    return;
}
// The propertyName property returns the name of the CSS property associated with the transition, when a transitionevent occurs.
console.log(e);
this.classList.remove('playing');
}


