let menu = document.querySelector (' #menu-icon ');
let navbar = document.querySelector (' .navbar ');

menu.onclick = () => {
    menu.classList.toggle ('bx-x');
    navbar.classList.toggle ('open');

};

const sr = ScrollReveal ({
    distance: '65px',
    duration: 2600,
    delay: 450,
    reset: true
});

sr.reveal(' .Nombre-02',{delay:200, origin:'top'});
sr.reveal(' .imagen',{delay:450, origin:'top'});
sr.reveal(' .icons',{delay:500, origin:'left'});
sr.reveal(' .scroll-down',{delay:500, origin:'right'});

const $form =  document.querySelector (' #form ')
const $buttonMailto =  document.querySelector (' #trucazo ')
$form.addEventListener ('submit', handleSubmit)
function handleSubmit(event) {
    event.preventDefault()
    const form = new FormData(this)
    console.log(form.get('name'))
    $buttonMailto.setAttribute('href','mailto:agmbr2@gmail.com?subject=${form.get(name)}$${form.get(email)}&body{form.get(Comentario)}')
    $buttonMailto.click()
}
document.getElementById('menu-icon').addEventListener('click', function() {
    var navbar = document.getElementById('navbar');
    navbar.classList.toggle('active');
});

