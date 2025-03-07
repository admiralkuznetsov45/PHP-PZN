<?php

$name = "Eko";
$name = NULL;
$age = null;

$is_null = is_null($name);
var_dump($is_null);

$value = "Eko";
unset($value);

var_dump(isset($value));

$value = "Eko";
var_dump(isset($value));