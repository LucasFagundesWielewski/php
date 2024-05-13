<?php

$json = '[{"nome":"Lucas","idade":19},{"nome":"Claudio","idade":28}]';

$data = json_decode($json, true);

var_dump($data);

?>