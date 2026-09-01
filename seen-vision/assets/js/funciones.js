function buscarProductos() {

    const texto = buscador.value.toLowerCase();

    productos.forEach(function(producto) {

        const nombre = producto
            .querySelector(".nombre-producto")
            .textContent
            .toLowerCase();

        if (nombre.includes(texto)) {
            producto.style.display = "";
        } else {
            producto.style.display = "none";
        }

    });

}
function validarNewsletter() {

    const email = emailNewsletter.value.trim();

    if (email === "") {
        alert("Por favor ingresa tu correo.");
        return;
    }

    if (!email.includes("@") || !email.includes(".")) {
        alert("Ingresa un correo válido.");
        return;
    }

    alert("¡Gracias por suscribirte al newsletter!");

    emailNewsletter.value = "";

}
function validarCheckout() {

    if (emailCheckout.value.trim() === "") {
        alert("Debes ingresar un correo electrónico.");
        return;
    }

    if (!emailCheckout.value.includes("@") || !emailCheckout.value.includes(".")) {
        alert("Ingresa un correo electrónico válido.");
        return;
    }

    if (nombreCheckout.value.trim() === "") {
        alert("Debes ingresar tu nombre.");
        return;
    }

    if (apellidoCheckout.value.trim() === "") {
        alert("Debes ingresar tu apellido.");
        return;
    }

    if (direccionCheckout.value.trim() === "") {
        alert("Debes ingresar una dirección.");
        return;
    }

    if (telefonoCheckout.value.trim() === "") {
        alert("Debes ingresar un teléfono.");
        return;
    }

    alert("¡Compra realizada con éxito!");

}
function calcularTotal() {

    const subtotalValor = 29990;
    const impuestoValor = Math.round(subtotalValor * 0.19);

    let envioValor = 2990;

    if (deliveryRetiro.checked) {
        envioValor = 0;
    }

    const totalValor = subtotalValor + impuestoValor + envioValor;

    subtotal.textContent = "$" + subtotalValor.toLocaleString("es-CL");
    impuestos.textContent = "$" + impuestoValor.toLocaleString("es-CL");
    envio.textContent = "$" + envioValor.toLocaleString("es-CL");
    total.textContent = "$" + totalValor.toLocaleString("es-CL");

}