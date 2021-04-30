
let btn = document.getElementById('changeColor');
let houses = document.querySelectorAll('.house')

btn.addEventListener('click', () => {
    for ($i=0; $i<houses.length; $i++){
        houses[$i].classList.add('red')
    }
})

