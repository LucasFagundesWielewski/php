<?php 

abstract class Animal {

	public function falar(){
		return "Som";
	}

	public function mover(){
		return "Movimenta";
	}

}

class Cachorro extends Animal {
	public function falar(){
		return "Late";
	}
}

class Gato extends Animal {

	public function falar(){
		return "Mia";
	}

}

class Passaro extends Animal {

	public function falar(){
		return "Canta";
	}

	public function mover(){
		return "Voa e " . parent::mover();
	}
}

$dog = new Cachorro();

echo $dog->falar() . "<br>";

echo $dog->mover() . "<br>";

echo "<br>";

$cat = new Gato();

echo $cat->falar() . "<br>";

echo $cat->mover() . "<br>";

echo "<br>";

$piupiu = new Passaro();

echo $piupiu->falar() . "<br>";

echo $piupiu->mover() . "<br>";

?>