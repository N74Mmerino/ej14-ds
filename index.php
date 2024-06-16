<?php

require_once 'modelo/datosPersona.php';
require_once 'modelo/direccion.php';
require_once 'modelo/lineaPrestamo.php';
require_once 'modelo/prestamo.php';
require_once 'modelo/provincia.php';

$Provincia= new Provincia ();
$Provincia->Descripcion='Santa Fe';

$Direccion= new Direccion();
$Direccion->Calle='Montevideo';
$Direccion->Numero='34';
$Direccion->Localidad='Rosario';
$Direccion->Provincia=$Provincia;

$DatosPersona= new DatosPersona();
$DatosPersona->Nombre='Daniel';
$DatosPersona->Apellido='Rodriguez';
$DatosPersona->Documento='12456789';
$DatosPersona->Direccion=$Direccion;

$LineaPrestamo= new LineaPrestamo(); 
$LineaPrestamo->Descripcion='Personal Sola Firma';
$LineaPrestamo->TasaEfectivaMensual='15 %';

$Prestamo= new Prestamo();
$Prestamo->Id='1';
$Prestamo->LineaPrestamo=$LineaPrestamo;
$Prestamo->DatosPersona=$DatosPersona;
$Prestamo->FechaDeAlta='21/08/20191';
$Prestamo->CantidadDeCuotas='36';
$Prestamo->MontoCapital='10.000.000';

$Prestamo->MostrarDatos();



