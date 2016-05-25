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
//colaboración de objetos
class Hija
{
    private $padre;
    
    public function __construct($nom,$ap)
    {
        $this->padre=new Padre($nom,$ap);
    }
    public function getNombreHija()
    {
        return $this->padre->getNombre();
    }
}





