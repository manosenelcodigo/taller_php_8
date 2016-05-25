<?php
class Padre 
{
    private $nombre;
    private $apellido;
    
    public function __construct($nom,$ap)
    {
       $this->nombre=$nom;
       $this->apellido=$ap; 
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    
}
//herencia simple
class Hija extends Padre
{
    public function __construct($nom2,$ap2)
    {
        parent::__construct($nom2,$ap2);
        
    }
}


