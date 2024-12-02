<?php
require_once 'vehiculo.php';
class Camion extends Vehiculo {
    public function __construct(
        protected string $marca = "",
        protected string $modelo = "",
        protected string $color = "Negro",
        protected float $capacidadCarga = 0.0
    ) {
        parent::__construct($marca, $modelo, $color); 
    }

    public function mover() {
        return "El camión {$this->marca} {$this->modelo} está en movimiento.";
    }

    public function detener() {
        return "El camión {$this->marca} {$this->modelo} se ha detenido.";
    }

    public function getMarca(): string {
        return $this->marca;
    }

    public function setMarca(string $marca): void {
        $this->marca = $marca;
    }

    public function getModelo(): string {
        return $this->modelo;
    }

    public function setModelo(string $modelo): void {
        $this->modelo = $modelo;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }

    public function getCapacidadCarga(): float {
        return $this->capacidadCarga;
    }

    public function setCapacidadCarga(float $capacidadCarga): void {
        $this->capacidadCarga = $capacidadCarga;
    }

    public function obtenerInformacion(): string {
        return "Marca: {$this->marca}, Modelo: {$this->modelo}, Color: {$this->color}, Capacidad de carga: {$this->capacidadCarga}";
    }
}