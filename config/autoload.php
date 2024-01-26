<?php


function chargerClasse($classname)
{
    require __DIR__ . '/../class/' . $classname . '.php';
}
spl_autoload_register('chargerClasse');

?>