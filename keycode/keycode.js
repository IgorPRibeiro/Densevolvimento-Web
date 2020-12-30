const start = document.querySelector('.start');
const tecla = document.querySelector('.tecla ');
const keyCode = document.querySelector('.keycode');
const keyCodeName = document.querySelector('.code');
const keyCodeDiv = document.querySelector('.keycodeDiv');

window.addEventListener('keydown', (e) => {
  start.classList.add('hide');
  tecla.innerText = e.key;
  keyCode.innerText = e.keyCode;
  keyCodeName.innerText = e.code;
  if (e.keyCode === 32) {
    tecla.innerText = `'Espaço'`
  }
})

