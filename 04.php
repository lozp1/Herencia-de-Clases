<?php include 'includes/header.php';

class Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad){
    }

    public function getInfo(): string {
        return "El transporte tiene: " . $this->ruedas . " y una capacidad de: " . $this->capacidad . " personas";
    }

    public function getRuedas() : int {
        return $this -> ruedas;
    }
}

class Bicicleta extends Transporte {

    public function getInfo(): string {
        return "El transporte tiene: " . $this->ruedas . " y una capacidad de: " . $this->capacidad . " personas y NO CONSUME GASOLINA";
    }
}

$bicicleta = new Bicicleta(2,1, "");
echo $bicicleta -> getInfo();
echo "<hr>";

class Automovil extends Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision){
    }

    public function getInfo(): string {
        return "El transporte tiene: " . $this->ruedas . ", una capacidad de: " . $this->capacidad . " personas" . " y con transmisión: " . $this-> transmision;
    }
}

$auto = new Automovil(4,5, "MANUAL");
echo $auto -> getInfo();
echo "<hr>";

include 'includes/footer.php';