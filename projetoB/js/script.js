function abrir (){
    window.location.href="telacaduser.php"
}

let cadastro = document.getElementById('cadastro');
let buscar = document.getElementById('buscar');


document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const action = urlParams.get('action');

    if (action === 'cadastro') {
        cadastro.style.display = 'block';
        buscar.style.display = 'none';
    } else if (action === 'buscar') {
        cadastro.style.display = 'none';
        buscar.style.display = 'block';
    }
});