<?php 

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);

}

class Civic implements Veiculo {

	public function acelerar($velocidade) {

		echo "O veículo acelerou até " . $velocidade . " Km/h";
	}

	public function frenar($velocidade) {

		echo "O veículo frenou até " . $velocidade . " Km/h";
	}

	public function trocarMarcha($marcha) {

		echo "O veículo trocou a marcha " . $marcha;
	}
}

$carro = new Civic();

$carro->trocarMarcha(1);

?>