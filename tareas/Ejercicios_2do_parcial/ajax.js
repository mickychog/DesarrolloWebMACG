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

