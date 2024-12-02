<?php
require_once 'vehiculo.php';
class Coche extends Vehiculo {
    public function __construct(
        protected string $marca = "",
        protected string $modelo = "",
        protected string $color = "Negro",
        protected int $numeroPuertas = 4 
    ) {
        parent::__construct($marca, $modelo, $color); 
    }

    public function mover() {
        return "El coche {$this->marca} {$this->modelo} está en movimiento.";
    }

    public function detener() {
        return "El coche {$this->marca} {$this->modelo} se ha detenido.";
    }

    public function obtenerInformacion(): string {
        return "Marca: {$this->marca}, Modelo: {$this->modelo}, Color: {$this->color}, Numero de puertas: {$this->numeroPuertas}";
    }
}