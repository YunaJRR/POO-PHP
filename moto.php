<?php
require_once 'vehiculo.php';
class Moto extends Vehiculo {
    public function __construct(
        protected string $marca = "",
        protected string $modelo = "",
        protected string $color = "Negro",
        protected int $cilindrada = 0
    ) {
        parent::__construct($marca, $modelo, $color); 
    }

    public function mover() {
        return "La moto {$this->marca} {$this->modelo} está en movimiento.";
    }

    public function detener() {
        return "La moto {$this->marca} {$this->modelo} se ha detenido.";
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

    public function getCilindrada(): int {
        return $this->cilindrada;
    }

    public function setCilindrada(int $cilindrada): void {
        $this->cilindrada = $cilindrada;
    }

    public function obtenerInformacion(): string {
        return "Marca: {$this->marca}, Modelo: {$this->modelo}, Color: {$this->color}, Cilindrada: {$this->cilindrada}";
    }
}