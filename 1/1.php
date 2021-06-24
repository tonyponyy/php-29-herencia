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
class Operacion {
    protected $valor1;
    protected $valor2;
    protected $resultado;

    function muestra_resultado(){
        print $this.resultado;
    }

}

class suma extends Operacion{
    function sumar($valor1,$valor2){
        $this->valor1 = $valor1;
        $this->valor2 = $valor2;
        $this->resultado = ($valor1+$valor2) ;
        print $this->valor1.' + '.$this->valor2.' = '. $this->resultado ;
    }
}

class resta extends Operacion{
    function restar($valor1,$valor2){
        $this->valor1 = $valor1;
        $this->valor2 = $valor2;
        $this->resultado = $valor1-$valor2 ;
        print $this->valor1.' - '.$this->valor2.' = '.$this->resultado ;
    }
}

$op1 = new suma;
$op1->sumar(12,23);
print '<br>';
$op2 = new resta;
$op2->restar(2,23);



?> 
</body>
</html>