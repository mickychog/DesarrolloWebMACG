<?php

$lista = array(
    array(
        'Nro' => 1,
        'Apellidos' => 'Perez',
        'Nombres' => 'Juan',
        'Edad' => 25,
        'Materia' => 'SIS-256',
        'Nota' => 83
    ),
    array(
        'Nro' => 2,
        'Apellidos' => 'Luna',
        'Nombres' => 'Ricardo',
        'Edad' => 30,
        'Materia' => 'SIS-258',
        'Nota' => 70
    ),
    array(
        'Nro' => 3,
        'Apellidos' => 'Tomasa',
        'Nombres' => 'Teresa',
        'Edad' => 26,
        'Materia' => 'SIS-256',
        'Nota' => 84
    ),
    array(
        'Nro' => 4,
        'Apellidos' => 'Umbre',
        'Nombres' => 'Fabian',
        'Edad' => 24,
        'Materia' => 'SIS-258',
        'Nota' => 70
    )
);


header('Content-Type: application/json');
echo json_encode($lista);
?>
