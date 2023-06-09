<?php

class persona{

    public $nombre;
    public $direccion;
    public $dni ;
    public $edad;
    public $nacionalidad;

    public function mostrardatos()
    {
        echo 'datos personales<br>';
        echo 'nombre:'. $this->nombre.'<br>';
        echo 'direccion:'. $this->direccion .'<br>';
        echo 'dni:'. $this->dni .'<br>';
        echo 'edad:'. $this->edad .'<br>';

        echo 'id:'. $this->nacionalidad->id .'<br>';
        echo 'descripción:'.' '. $this->nacionalidad->desc .'<br>';


    } 

}