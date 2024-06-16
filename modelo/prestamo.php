<?php

class Prestamo{

    public $Id;
    public $LineaDePrestamo;
    public $Titular;
    public $FechaAlta;
    public $CantidadCuotas;
    public $MontoCapital;


    public function MostrarDatos(){

        echo'Id del Prestamo:'.$this->Id .'<br>';
        echo '----------------------- <br>';
        echo'Linea de Prestamo: '.$this->LineaPrestamo->Descripcion.'<br>';
        echo'Tasa Efectiva Mensual: '.$this->LineaPrestamo->TasaEfectivaMensual.'<br>';
        echo '----------------------- <br>';
        echo'Datos del titular:<br> ';
        echo'Nombre del titular: '.$this->DatosPersona->Nombre.'<br>';
        echo'Apellido del titular: '.$this->DatosPersona->Apellido.'<br>';
        echo'Documento del titular: '.$this->DatosPersona->Documento.'<br>';
        echo '----------------------- <br>';
        echo'Direccion del titular:<br>';
        echo'Calle: '.$this->DatosPersona->Direccion->Calle.'<br>';
        echo'Numero: '.$this->DatosPersona->Direccion->Numero.'<br>';
        echo'Localidad: '.$this->DatosPersona->Direccion->Localidad.'<br>';
        echo'Provincia: '.$this->DatosPersona->Direccion->Provincia->Descripcion.'<br>';
        echo '----------------------- <br>';
        echo'Fecha de alta: '.$this->FechaDeAlta.'<br>';
        echo'Cantidad de Cuotas: '.$this->CantidadDeCuotas.'<br>';
        echo'Monto Capital: '.$this->MontoCapital.'<br>';

    }



    
    
}