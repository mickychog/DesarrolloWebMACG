function cargarSubmenu(abrir) {
    var contenedor;
    contenedor = document.getElementById("sub-menu");
    var ajax = new XMLHttpRequest();
    ajax.open("get", abrir, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    };
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}
function cargarContenido(abrir) {
    var contenedor;
    contenedor = document.getElementById("contenido");
    var ajax = new XMLHttpRequest();
    ajax.open("get", abrir, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    };
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}
function cambiarColor() {
	var colorInput = document.getElementById("colorInput").value;
	var elementoId = document.getElementById("elementosSelect").value;
	var propiedad = document.getElementById("colorSelect").value;

	var elemento = document.getElementById(elementoId);

	if (propiedad === "colorFondo") {
		elemento.style.backgroundColor = colorInput;
	} else if (propiedad === "colorFrente") {
		elemento.style.color = colorInput;
	}
}
var valoresAB = [];
var tipOp;
function generarEjercicios(operacion) {
		var cantidad = document.getElementById("cantidad").value;
		var ejerciciosDiv = document.getElementById("contenido");
		ejerciciosDiv.innerHTML = 'EJERCICIOS';

		valoresAB = [];

		for (var i = 1; i <= cantidad; i++) {
			var numA = Math.floor(Math.random() * 10);
			var numB = Math.floor(Math.random() * 10);

			valoresAB.push({ A: numA, B: numB });

			var ejercicio = document.createElement('div');
			ejercicio.innerHTML = `<p> ${numA} ${getOperador(operacion)} ${numB} = <input type="number" id="respuesta${i}" /></p>`;
			ejerciciosDiv.appendChild(ejercicio);
		}
		var ejercicio = document.createElement('div');
		ejercicio.innerHTML = `<button onclick="calificar()">Calificar</button>`;
		ejerciciosDiv.appendChild(ejercicio);
		tipOp=operacion;
	}
function getOperador(operacion) {
	switch (operacion) {
		case 'suma':
			return '+';
		case 'resta':
			return '-';
		case 'multiplicacion':
			return '*';
		case 'division':
			return '/';
		default:
			return '';
	}
}
function calificar() {
    var cantidad = document.getElementById("cantidad").value;

    for (var i = 1; i <= cantidad; i++) {
        var respuestaUsuario = parseInt(document.getElementById("respuesta" + i).value);
        var numA = valoresAB[i - 1].A;
        var numB = valoresAB[i - 1].B;

        var resultadoEsperado = operacion(numA, numB,tipOp);
        var divEjercicio = document.getElementById("respuesta" +i);

        if (respuestaUsuario === resultadoEsperado) {
            divEjercicio.style.backgroundColor = 'green';
        } else {
            divEjercicio.style.backgroundColor = 'red';
        }
    }
}
function operacion(numA, numB, tipoOperacion) {
    switch (tipoOperacion) {
        case 'suma':
            return numA + numB;
        case 'resta':
            return numA - numB;
        case 'multiplicacion':
            return numA * numB;
        case 'division':
            return numB !== 0 ? numA / numB : 'Indefinido';
        default:
            return 'Operación no válida';
    }
}
