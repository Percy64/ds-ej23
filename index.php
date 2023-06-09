<?php

require_once 'modelo/nacionalidad.php';
require_once 'modelo/persona.php';

    $n = new nacionalidad();
    $n->id=1;
    $n->desc='argentina';

    $p = new persona();
    $p->nombre='emanuel';
    $p->direccion='pasco 123';
    $p->dni=42557726;
    $p->edad=23;
    $p->nacionalidad=$n;
    $p->mostrardatos();
