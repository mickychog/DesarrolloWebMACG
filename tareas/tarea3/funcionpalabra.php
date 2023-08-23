<?php
function palabramaslarga($cadena)
{
    $palabras=explode(" ",$cadena);

    $nletras=0;
    $pmlarga="";
    foreach ($palabras as $palabra)
{
    if(strlen($palabra)>=$nletras)
        {
            $nletras=strlen($palabra);
            $pmlarga=$palabra;
        }
}
    return $pmlarga;
}

?>