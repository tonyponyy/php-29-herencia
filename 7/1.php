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
const color_d = 'Blanco';
const consumo_d = 'F';
const precio_d = 100;
const peso_d = 5;

class Electrodomestico {
    protected $precio_base;
    protected $color;
    protected $consumo_energetico;
    protected $peso;

    function __construct($precio,$peso){
        $this->precio_base = $precio;
        $this->peso = $peso;
        $this->consumo_energetico = consumo_d;
        $this->color = color_d;
    }

    function set($precio,$peso,$color,$consumo_energetico){
       
        $color = $this->comprobarColor($color);
        $consumo_energetico=  $this->comprobarConsumoEnergetico($consumo_energetico);

        $this->precio_base = $precio;
        $this->peso = $peso;
        $this->consumo_energetico = $consumo_energetico  ;
        $this->color = $color;
    }
    function get_color(){
        return $this->color;
    }
    function get_consumo_energetico(){
        return $this->consumo_energetico;
    }
    function get_peso(){
        return $this->peso;
    }
    function get_precio(){
        return $this->precio_base;
    }

   function comprobarColor($color){
    if (strtoupper($color) == 'BLANCO'){
        $color = 'Blanco';
        return $color;
    }
    if (strtoupper($color) == 'NEGRO'){
        $color = 'Negro';
        return $color;
    }
    if (strtoupper($color) == 'ROJO'){
        $color = 'Rojo';
        return $color;
    }
    if (strtoupper($color) == 'AZUL'){
        $color = 'Azul';
        return $color;
    }
    if (strtoupper($color) == 'GRIS'){
        $color = 'Gris';
        return $color;
    }
    return color_d;
   }

   function comprobarConsumoEnergetico($char){
    if (strtoupper($char) == 'A'){ return 'A';}
    if (strtoupper($char) == 'B'){ return 'B';}
    if (strtoupper($char) == 'C'){ return 'C';}
    if (strtoupper($char) == 'D'){ return 'D';}
    if (strtoupper($char) == 'E'){ return 'E';}
    if (strtoupper($char) == 'F'){ return 'F';}
    return consumo_d;
   }
  function precioFinal(){
      $resultado = 0;
      if ($this->consumo_energetico = 'A'){
        $resultado +=100;
      }
      if ($this->consumo_energetico = 'B'){
        $resultado +=80;
    }
    if ($this->consumo_energetico = 'C'){
        $resultado +=60;
    }
    if ($this->consumo_energetico = 'D'){
        $resultado +=50;
    }
    if ($this->consumo_energetico = 'E'){
        $resultado +=30;
    }
    if ($this->consumo_energetico = 'F'){
        $resultado +=10;
    }
    
    if ($this->peso > 0 and $this->peso < 20 ){
        $resultado +=10;
    }
    if ($this->peso >= 20 and $this->peso < 50 ){
        $resultado +=50;
    }
    if ($this->peso >= 50 and $this->peso < 80 ){
        $resultado +=50;
    }
    if ($this->peso >= 80 ){
        $resultado +=100;
    }
    print  $resultado;

  }

}
const carga_d = 5;
class Lavadora extends Electrodomestico{

    protected $carga = carga_d;

    function __construct($carga,$precio,$peso){
        $this->carga = $carga;
        $this->precio_base = $precio;
        $this->peso = $peso;
        $this->consumo_energetico = consumo_d;
        $this->color = color_d;
    }
    function get_carga(){
        return this->carga;
    }
    function precioFinal(){
        $v1= parent::precioFinal();
        if ($this->carga > 30){
            return $v1+30;
        }
        return $v1;
    }

}
class Television extends Electrodomestico{
    protected $resolucion =20;
    protected $TDT = false;
    function __construct($precio,$peso,$resolucion,$TDT){
        $this->resolucion = $resolucion;
        $this->TDT = $TDT;
        parent::__construct($precio,$peso);
    }
    function get_resolucion(){
        return $this->resolucion;
    }
    function get_TDT(){
        return $this->TDT;
    }
    function preciofinal(){
        parent::precioFinal();
        if ($this->resolucion > 40){
            $this->precio = $this->precio + ($this->precio)*0.3;
        }
    }
    
}

$array =[];
for ($i=0; $i < 10; $i++) { 
    $elec1 = new Electrodomestico(rand(0, 300),rand(6, 200));
    array_push($array,$elec1); 
}

for ($e=0; $e < count($array); $e++) { 
    print $array[$e]->precioFinal().'<br>';
}



?> 
</body>
</html>