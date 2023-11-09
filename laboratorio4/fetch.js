function cargarContenido(abrir) {
  var contenedor;
  contenedor = document.getElementById("datos");
  fetch(abrir)
    .then((response) => response.text())
    .then((data) => (contenedor.innerHTML = data));
}
function autenticacion() {
  var contenedor = document.getElementById("datos");
  var formulario = document.getElementById("form");
  var parametros = new FormData(formulario);

  fetch("autenticar.php", {
      method: "POST",
      body: parametros,
  })
      .then(response => response.json())
      .then(data => {
          if (data.autenticado) {
              contenedor.innerHTML = "Autenticado correctamente.";
          } else {
              contenedor.innerHTML = "No autenticado.";
          }
      })
      .catch(error => {
          console.error("Error: " + error);
      });
}
