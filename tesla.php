<?php
require_once 'vehiculoelectrico.php';
class Tesla implements VehiculoElectrico {
    private int $nivelBateria;

    public function __construct() {
        $this->nivelBateria = 100; 
    }

    public function cargarBateria(): void {
        $this->nivelBateria = 100; 
        echo "Batería cargada al 100%.\n";
    }

    public function estadoBateria(): int {
        return $this->nivelBateria; 
    }
}