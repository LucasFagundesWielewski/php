<?php

$total = 150;
$desconto = .9;

do {

	$total *= $desconto;

} while ($total > 100);

echo $total;

?>