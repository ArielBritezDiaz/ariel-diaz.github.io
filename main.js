const fname = document.getElementById('fname');
const lname = document.getElementById('lname');
const email = document.getElementById('email');
const subject = document.getElementById('subject');
const message = document.getElementById('message');
const formSubmit = document.getElementsByClassName('formSubmit')[0];

formSubmit.addEventListener("submit", (e) => {
    e.preventDefault();
    console.log("Click");

    let contentBody = `
        <b>Nombre: </b> ${fname.value}&nbsp;${lname.value}
        <br>
        <b>Correo Electrónico: </b> ${email.value}
        <br>
        <b>Asunto: </b> ${subject.value}
        <br>
        <b>Mensaje: </b> ${message.value}
        <br>
    `;

    Email.send({
        SecureToken: "a94829c9-9150-4ded-bc6a-3032b64a5200",
        To: "arielbritezdiaz@gmail.com",
        From: "arielbritezdiaz@gmail.com",
        Subject: "Contacto Portfolio de: " + email.value,
        Body: contentBody
    }).then(
        function () {
            setTimeout(function () {
                window.location.href = "#Contacto";
                fname.value = "";
                lname.value = "";
                email.value = "";
                subject.value = "";
                message.value = "";
            }, 1000);
        }
    );
});

document.addEventListener("DOMContentLoaded", function () {
    const flechaAbajo = document.getElementById('arrowDown');

    // Agregar clase para la primera carga
    if (!document.body.classList.contains('primera-carga')) {
        document.body.classList.add('primera-carga');

        // Esperar 2 segundos antes de ejecutar la animación inicial
        setTimeout(function () {
            // Agregar la clase de animación inicial
            flechaAbajo.classList.add('bounce-once');
        }, 2000); // 2000 milisegundos (2 segundos)
    }

    // Resto del código...
});

// Resto del código...


document.getElementById('arrowDown').addEventListener('click', function() {
    const sobreMiSection = document.getElementById('Sobre-Mi');
    sobreMiSection.scrollIntoView({ behavior: 'smooth' });
    this.classList.remove('bounce-once');
});