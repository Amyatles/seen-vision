if (buscador) {
    buscador.addEventListener("keyup", buscarProductos);
}

if (btnNewsletter) {
    btnNewsletter.addEventListener("click", function (event) {
        event.preventDefault();
        validarNewsletter();
    });
}

if (btnPagar) {
    btnPagar.addEventListener("click", function (event) {
        event.preventDefault();
        validarCheckout();
    });
}
if (deliveryEnvio && deliveryRetiro) {
    calcularTotal();
    deliveryEnvio.addEventListener("change", calcularTotal);
    deliveryRetiro.addEventListener("change", calcularTotal);

}