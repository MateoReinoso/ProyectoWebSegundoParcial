const form = document.querySelector('#login');
form.addEventListener('submit', (e) => {
    e.preventDefault();

const div = document.createElement('div');
div.className = 'alert bg-danger text-center';
//div.appendChild(document.createTextNode(message));
div.innerHTML = 'Usuario o contraseña incorrecta'; // funciona igual que el createtextnode
//seleccionar mensajes
const divMessage = document.querySelector('.mensajes');
divMessage.appendChild(div);

//mostrar contenido
setTimeout(() => {
    document.querySelector('.mensajes div').remove();
}, 3000)
})