<?php
abstract class Vehiculo {
    protected string $marca;
    protected string $modelo;
    protected string $color;
 
 
    public function __construct(string $marca, string $modelo, string $color = "Negro") {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
    }
 
 
    abstract public function mover();
    abstract public function detener();
 
 
    public function obtenerInformacion(): string {
        return "Marca: {$this->marca}, Modelo: {$this->modelo}, Color: {$this->color}";
    }

        
}

class Coche extends Vehiculo {
    public function __construct
    (protected string $marca = "",
    protected string $modelo = "",
    protected string $color = "Negro",
    protected int $numeroPuertas
    ) {
        parent::__construct($marca, $modelo, $color); 
    }

    public function mover() {
        return "El coche {$this->marca} {$this->modelo} está en movimiento.";
    }

    public function detener() {
        return "El coche {$this->marca} {$this->modelo} se ha detenido.";
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

    public function getNumeroPuertas(): string {
        return $this->numeroPuertas;
    }

    public function setNumeroPuertas(int $numeroPuertas): void {
        $this->numeroPuertas = $numeroPuertas;
    }

    public function obtenerInformacion(): string {
        return "Marca: {$this->marca}, Modelo: {$this->modelo}, Color: {$this->color}, Numero de puertas: {$this->numeroPuertas}";
    }
}

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

final class Bicicleta{
    public function __construct(
        protected string $marca = "",
        protected string $modelo = "",
        protected string $color = "Negro",
    ) {}
    public function pedalear(){
        return "La bicicleta {$this->marca} {$this->modelo}, está en movimiento";
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