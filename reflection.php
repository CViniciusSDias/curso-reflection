<?php

use Alura\Reflection\ClasseExemplo;

require_once __DIR__ . '/vendor/autoload.php';

$reflectionClass = new ReflectionClass(ClasseExemplo::class);

var_dump($reflectionClass->getMethods(ReflectionMethod::IS_PUBLIC | ReflectionMethod::IS_PROTECTED));

$modifiers = $reflectionClass->getModifiers();
$modifierNames = Reflection::getModifierNames($modifiers);

$objetoClasseExemplo = $reflectionClass->newInstance();

echo json_encode($objetoClasseExemplo);
