<?php

require "class/session.php";

$session = new Session();


$session->firstname = "PHILIIIIPPE!";
$session->lastname = "VIENS ICI QUE JE TE BUTE, ENCULE !!!";

echo($session->firstname);
echo($session->lastname);

var_dump(isset($session->tamere));

unset($session->firstname);
$session->firstname = "Trouloulou";
echo($session->firstname);

$variable = serialize($session);
var_dump($variable);
?>