<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Persona {
    protected $nombre;
    protected $edad;

    function setear($nombre,$edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    function muestra(){
        print 'Nombre : '.$this->nombre.'<br> Edad : '.$this->edad;
    }

}

class Empleado extends Persona{
    protected $sueldo;

    function setear_sueldo($sueldo){
        $this->sueldo = $sueldo;
    }

    function imprimir_sueldo(){
        print 'El sueldo es de '.$this->sueldo.' €';
    }
}

$p1 = new Persona;
$p1->setear('Jordi',60);
$p1->muestra();
print '<br>';
$e1 = new Empleado;
$e1->setear_sueldo(3000);
$e1->imprimir_sueldo();



?> 
</body>
</html>