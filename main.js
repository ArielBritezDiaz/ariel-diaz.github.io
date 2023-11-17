const fname = document.getElementById('fname')
const lname = document.getElementById('lname')
const email = document.getElementById('email')
const subject = document.getElementById('subject')
const message = document.getElementById('message')
const formSubmit = document.getElementsByClassName('formSubmit')[0]

formSubmit.addEventListener("submit", (e) => {
    e.preventDefault()
    console.log("Click")

    let contentBody = `
        <b>Nombre: </b> ${fname.value}&nbsp${lname.value}
        <br>
        <b>Correo Electrónico: </b> ${email.value}
        <br>
        <b>Asunto: </b> ${subject.value}
        <br>
        <b>Mensaje: </b> ${message.value}
        <br>
    `

    Email.send({
        SecureToken: "a94829c9-9150-4ded-bc6a-3032b64a5200",
        To: "arielbritezdiaz@gmail.com",
        From: "arielbritezdiaz@gmail.com",
        Subject: "Contacto Portfolio de: " + email.value,
        Body: contentBody
    }).then(
        function () {
            setTimeout(function () {
                window.location.href = "#Contacto"
                fname.value = ""
                lname.value = ""
                email.value = ""
                subject.value = ""
                message.value = ""
            }, 1000)
        }
    )
})

document.addEventListener("DOMContentLoaded", function () {
    const flechaAbajo = document.getElementById('arrowDown')

    if (!document.body.classList.contains('primera-carga')) {
        document.body.classList.add('primera-carga')

        setTimeout(function () {
            flechaAbajo.classList.add('bounce-once')
        }, 2000)
    }
})

function scrollToSection(sectionId) {
    const section = document.getElementById(sectionId)
    section.scrollIntoView({ behavior: 'smooth' })
}

document.getElementById('arrowDown').addEventListener('click', function() {
    scrollToSection('Sobre-Mi')
    this.classList.remove('bounce-once')
})

const navLinks = document.querySelectorAll('.scroll-link')

navLinks.forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault()
        const targetId = this.getAttribute('href').substring(1)
        scrollToSection(targetId)
    })
})
