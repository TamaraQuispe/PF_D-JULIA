document.getElementById('registroForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const nombre = document.getElementById('nombre').value.trim();
    const correo = document.getElementById('correo').value.trim();
    const contrasena = document.getElementById('password').value.trim();
    const telefono = document.getElementById('telefono').value.trim();
    const direccion = document.getElementById('direccion').value.trim();

    if (!nombre || !correo || !contrasena || !telefono || !direccion) {
        alert("Por favor, completa todos los campos.");
        return;
    }

    fetch('registrar_usuario.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ nombre, correo, contrasena, telefono, direccion })
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            alert("¡Registro exitoso!");
            window.location.href = "login.html"; // redirige a login
        } else {
            alert(data.message || "Error al registrar.");
        }
    })
    .catch(error => {
        alert("Error en la conexión.");
        console.error(error);
    });
});
