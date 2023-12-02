function cargarSubmenu(abrir) {
    var contenedor;
    contenedor = document.getElementById("botones");
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
function cargarBotones(abrir) {
    var contenedor;
    contenedor = document.getElementById("botones");
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
    contenedor = document.getElementById("principal");
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
function cargarForm(abrir) {
    var contenedor;
    contenedor = document.getElementById("form2");
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

var turno = "x";
function marcar(numero) {
    if (document.getElementById(numero).value == "") {
        document.getElementById(numero).value = turno;

        if (turno == "x") turno = "o";
        else turno = "x";
    } else alert("casilla ya marcada");

    document.getElementById("mensaje").innerHTML = "Es el turno de "+turno;
}

function calcular()
{
	numero=document.getElementById("numero").value;
	hasta=document.getElementById("hasta").value;
	if (numero>0 && numero<=10)
    {
    	if (hasta>0)
    	{
	operaciones=document.getElementsByName("operacion");
	if (operaciones[0].checked)
		operacion='+';
	if (operaciones[1].checked)
		operacion='*';
	if (operaciones[2].checked)
		operacion='-';
	if (operaciones[3].checked)
		operacion='/';
	h="";
	for (var i = 1; i <= hasta; i++) {
		switch (operacion){
			case "+":
				r=i+numero;
				break;
			case "-":
				r=i-numero;
				break;
			case "*":
				r=i*numero;
				break;
			case "/":
				r=i/numero;
				break;
					}
		h+=i+operacion+numero+"="+r+"<br>";				
	

		}
	document.getElementById("resultado").innerHTML=h;	
		}
		else
		alert("hasta fuera de rango");		
	}
	else
	{
		alert("numero fuera de rango");
	}
}
function cargarForm(abrir) {
    var cantidad = document.getElementById('cantidad').value;

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById('form2').innerHTML = xhr.responseText;

            var inputs = document.querySelectorAll('.numero');
            inputs.forEach(input => {
                input.addEventListener('input', sumar);
            });
        }
    };

    xhr.open('GET', abrir + '?cantidad=' + cantidad, true);
    xhr.send();
}
function sumar() {
    var inputs = document.querySelectorAll('.numero');
    var suma = 0;

    inputs.forEach(input => {
        suma += parseInt(input.value) || 0;
    });

    document.getElementById('suma').textContent = 'Suma: ' + suma;
}

function calcular()
{
	numero=document.getElementById("numero").value;
	hasta=document.getElementById("hasta").value;
	if (numero>0 && numero<=10)
    {
    	if (hasta>0)
    	{
	operaciones=document.getElementsByName("operacion");
	if (operaciones[0].checked)
		operacion='+';
	if (operaciones[1].checked)
		operacion='-';
	if (operaciones[2].checked)
		operacion='factorial';
	h="";
	for (var i = 1; i <= hasta; i++) {
		switch (operacion){
			case "+":
				r=i+numero;
				break;
			case "-":
				r=i-numero;
				break;
			case "factorial":
				r=i*numero;
				break;
					}
		h+=i+operacion+numero+"="+r+"<br>";				
	

		}
	document.getElementById("resultado").innerHTML=h;	
		}
		else
		alert("hasta fuera de rango");		
	}
	else
	{
		alert("numero fuera de rango");
	}
}
