<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="ajax.js"></script>
    <script src="fetch.js"></script>
    <title>Examen Final</title>
</head>
<body>
    <div class="cuerpo">
        <Header>
            <div class="contimagen">
                <img src="usfx.png" alt="" class="imagen">
            </div>
            <div>
                <ul class="preguntas" id="menu">
                    <li><a href="index.php">Pregunta 1</a></li>
                    <li><a href="javascript:cargarSubmenu('pregunta2.html')">Pregunta 2</a></li>
                    <li><a href="">Pregunta 3</a></li>
                    <li><a href="javascript:cargarContenidoFetch('pregunta4.php')">Pregunta 4</a></li>
                    <li><a href="javascript:cargarContenido('pregunta5.html')">Pregunta 5</a></li>
                </ul>
                <div id="titulo" class="titulo"><p>Pregunta 1</p></div>
            </div>
        </Header>
        <main>
            <section class="sub-menu" id="sub-menu">
                <p class="opciones">Opciones</p>
                <ul>
                    <li>Detalle 1</li>
                    <li>Detalle 2</li>
                </ul>
            </section>
            <section id="contenido" class="contenido">
                <div class="info">
                    <div class="sup">
                        <h2>SIS 256 Programacion Web</h2>
                        <h3>Examen Final - 02-12-2023 7:00am</h3>
                    </div>
                    <img src="micky.jpg" alt="" class="img-perfil">
                    <div class="inf">
                        <p>Nombre: Miguel Angel Choque Garcia</p>
                        <p>Carrera: Ing. en Ciencias de la Computación</p>
                        </p>Repositorio: <a href="https://github.com/mickychog/DesarrolloWebMACG/tree/main/Evaluaciones/ExamenFinal" target="_blank">Github</a>
                    </div>
                </div>
            </section>
            <div id="boton"></div>
        </main>
        <footer>
            <div id="pie" class="pie">Sucre - Semestre 2-2023</div>
        </footer>
    </div>
    
</body>
</html>