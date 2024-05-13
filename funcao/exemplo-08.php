<?php

function soma(int ...$valores):string {

	return array_sum($valores);

}

echo var_dump(soma(2, 2));
echo "<br>";
echo soma(25, 25);
echo "<br>";
echo soma(2.0, 30);
echo "<br>";


?>