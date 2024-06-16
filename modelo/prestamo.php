<?php

class Prestamo{

    public $Id;
    public $LineaDePrestamo;
    public $Titular;
    public $FechaAlta;
    public $CantidadCuotas;
    public $MontoCapital;


    public function MostrarDatos(){

        public'Id del Prestamo'.$this->Id .'<br>';

        public'Linea de Prestamo'.$this->LineadePrestamo->Descripcion.'<br>';
        public'Tasa Efectiva Mensual'.$this->LineaDePrestamo->TasaEfectivaMensual.'<br>';

        public'Datos del titular <br>';
        public'Nombre del titular'.$this->DatosPersona->Nombre.'<br>';
        public'Apellido del titular'.$this->DatosPersona->Apellido.'<br>';
        public'Documento del titular'.$this->DatosPersona->Docuemnto.'<br>';

        public'Direccion del titular <br>';
        public'Calle'.$this->Direccion->Calle.'<br>';
        public'Numero'.$this->Direccion->Numero.'<br>';
        public'Localidad'.$this->Direccion->Localidad.'<br>';

        public'Provincia'.$this->Provincia->Descripcion.'<br>';

        public'Fecha de alta'.$this->FechaDeAlta.'<br>';
        public'Cantidad de Cuotas'.$this->CantidadDeCuotas.'<br>';
        public'Monto Capital'.$this->MontoCapital.'<br>';

    }



    
    
}