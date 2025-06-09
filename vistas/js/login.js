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
            divRespuesta.innerHTML = `<span style="color:red">Por favor, completa todos los campos.</span>`;
            return;
        }

        if (data.success) {
            divRespuesta.innerHTML = `<span style="color: #27AE60">${data.message}</span>`;
            setTimeout(() => {
                window.location.href = "../index.php  ";
            }, 5000);
        } else {
            divRespuesta.innerHTML = `<span style="color: #EB5757">${data.message}</span>`;
        }
    })
    .catch(error => {
        console.error('Error al procesar la peticion:', error);
        const divRespuesta = document.getElementById("respuesta");
        divRespuesta.innerHTML = `<span style="color:red">Error de server</span>`;
    });
})

var current = null;
document.querySelector('#nombre').addEventListener('focus', function(e) {
  if (current) current.pause();
  current = anime({
    targets: 'path',
    strokeDashoffset: {
      value: 0,
      duration: 700,
      easing: 'easeOutQuart'
    },
    strokeDasharray: {
      value: '240 1386',
      duration: 700,
      easing: 'easeOutQuart'
    }
  });
});
document.querySelector('#pass').addEventListener('focus', function(e) {
  if (current) current.pause();
  current = anime({
    targets: 'path',
    strokeDashoffset: {
      value: -336,
      duration: 700,
      easing: 'easeOutQuart'
    },
    strokeDasharray: {
      value: '240 1386',
      duration: 700,
      easing: 'easeOutQuart'
    }
  });
});
document.querySelector('#submit').addEventListener('focus', function(e) {
  if (current) current.pause();
  current = anime({
    targets: 'path',
    strokeDashoffset: {
      value: -730,
      duration: 700,
      easing: 'easeOutQuart'
    },
    strokeDasharray: {
      value: '530 1386',
      duration: 700,
      easing: 'easeOutQuart'
    }
  });
});