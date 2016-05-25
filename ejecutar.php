<?php
//include("archivo.php");
require_once("archivo.php");
/*
$p=new Padre("César","Cancino");
echo $p->getNombre();
*/
$h=new Hija( "Juan","Martínez" );
echo $h->getNombre();
