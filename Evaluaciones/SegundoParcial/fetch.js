function cargarContenidoFetch(abrir){
    var contenedor;
    contenedor = document.getElementById('principal');
    fetch(abrir)
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}











