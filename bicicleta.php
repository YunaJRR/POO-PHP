<?php
require_once 'vehiculo.php';
final class Bicicleta extends Vehiculo{
    public function __construct(
        protected string $marca = "",
        protected string $modelo = "",
        protected string $color = "Negro",
    ) {
        parent::__construct($marca, $modelo, $color); 
    }
    public function detener() {
        echo "Bicicleta se ha detenido.";
    }

    public function mover() {
        echo "Bicicleta está en movimiento.";
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
}
$bicicleta = new Bicicleta();
$bicicleta->mover(); // Output: Bicicleta está en movimiento.
$bicicleta->detener(); // Output: Bicicleta ha detenido.