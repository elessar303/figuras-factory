<?php
class Figuras 
{

    public function create($type)
    {
        switch($type) {
            case 'cuadrado':
                return new Cuadrado();
            case 'triangulo':
                return new Triangulo();
            case 'circulo':
                return new Circulo();
            default:
                echo 'Error: Figura no definida';
        }
    }

    public function getType()
    {
        return get_class($this);
    }
}

class Cuadrado extends Figuras 
{
    public function superficie(){
        return 'Superficie del Cuadrado ='.$this->base()*$this->altura();
    }

    public function base(){
        return 3;
    }

    public function altura(){
        return 3;
    }

    public function diametro(){
        return 'El cuadrado no posee diametro';
    }
}

class Triangulo extends Figuras 
{
    public function superficie(){
        return 'Superficie del Triangulo ='.($this->base()*$this->altura())/2;
    }

    public function base(){
        return 2;
    }

    public function altura(){
        return 3;
    }

    public function diametro(){
        return 'El triangulo no posee diametro';
    }
}

class Circulo extends Figuras 
{
    public function pi(){
        return 3.14;
    }

    public function superficie(){
        return 'Superficie del Circulo = '.($this->diametro()/2)*($this->diametro()/2)*$this->pi();
    }

    public function base(){
        return 'El circulo no posee base';
    }

    public function altura(){
        return 'El circulo no posee altura';
    }

    public function diametro(){
        return 5;
    }
}

$cuadrado = Figuras::create('cuadrado');
echo $cuadrado->getType().": ".$cuadrado->superficie() . "<br>";

$triangulo = Figuras::create('triangulo');
echo $triangulo->getType().": ".$triangulo->superficie() . "<br>";

$circulo = Figuras::create('circulo');
echo $circulo->getType().": ".$circulo->superficie() . "<br>";

$rombo = Figuras::create('rombo');

?>