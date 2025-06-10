document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault(); 
    const nombre = document.getElementById("nombre").value;
    const pass = document.getElementById("pass").value;

    fetch('../config/login.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ nombre, pass })

    })
    .then(res => res.json())
    .then(data => {
        const divRespuesta = document.getElementById("respuesta");

        if (nombre.trim() === "" || pass.trim() === "") {
            divRespuesta.innerHTML = `<span class="message message-error">Por favor, completa todos los campos.</span>`;
            return;
        }

        if (data.success) {
            divRespuesta.innerHTML = `<span class="message message-success">${data.message}</span>`;
            setTimeout(() => {
                window.location.href = "../index.php  ";
            }, 5000);
        } else {
            divRespuesta.innerHTML = `<span class="message message-error">${data.message}</span>`;
        }
    })
    .catch(error => {
        console.error('Error al procesar la peticion:', error);
        const divRespuesta = document.getElementById("respuesta");
        divRespuesta.innerHTML = `<span class="message message-error">Error de server</span>`;
    });
})

