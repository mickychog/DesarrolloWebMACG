function cargarContenidoFetch(abrir){
    var contenedor;
    contenedor = document.getElementById('contenido');
    fetch(abrir)
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
    
    document.getElementById('sub-menu').innerHTML=`
    <div>
    <ul>
        <li><a href="">Listar</a></li>
        <li><a href="">Insertar</a></li>
    </ul>
</div>`
}












