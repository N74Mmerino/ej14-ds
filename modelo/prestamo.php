<?php

class Prestamo{

    public $Id;
    public $LineaDePrestamo;
    public $Titular;
    public $FechaAlta;
    public $CantidadCuotas;
    public $MontoCapital;


    public function MostrarDatos(){

        echo'Id del Prestamo'.$this->Id .'<br>';

        echo'Linea de Prestamo'.$this->LineadePrestamo->Descripcion.'<br>';
        echo'Tasa Efectiva Mensual'.$this->LineaDePrestamo->TasaEfectivaMensual.'<br>';

        echo'Datos del titular <br>';
        echo'Nombre del titular'.$this->DatosPersona->Nombre.'<br>';
        echo'Apellido del titular'.$this->DatosPersona->Apellido.'<br>';
        echo'Documento del titular'.$this->DatosPersona->Docuemnto.'<br>';

        echo'Direccion del titular <br>';
        echo'Calle'.$this->Direccion->Calle.'<br>';
        echo'Numero'.$this->Direccion->Numero.'<br>';
        echo'Localidad'.$this->Direccion->Localidad.'<br>';

        echo'Provincia'.$this->Provincia->Descripcion.'<br>';

        echo'Fecha de alta'.$this->FechaDeAlta.'<br>';
        echo'Cantidad de Cuotas'.$this->CantidadDeCuotas.'<br>';
        echo'Monto Capital'.$this->MontoCapital.'<br>';

    }



    
    
}