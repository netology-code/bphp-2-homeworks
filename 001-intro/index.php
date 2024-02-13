<?php
echo("Задание 2.1\n");
echo("Файл: " . __FILE__ . "\n" . "Строка: " . __LINE__ . "\n");

echo("\nЗадание 2.2\n");
$heredocTextVar = <<<EOT
Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    Cras malesuada, magna eget sodales finibus, lacus risus cursus mi, ut volutpat nibh turpis eget mi. 
        Duis vitae lorem sit amet tortor faucibus lacinia eu vitae sem. 
    Nullam efficitur sapien elit, eget tristique purus condimentum sit amet. 
Sed dolor ex, gravida at dui et, pretium lobortis lorem.
EOT;
echo($heredocTextVar . "\n");

echo("\nЗадание 2.3\n");
$a = 'Рыба';
$b = 'человек';
echo "{$a} рыбою сыта, а {$b} человеком\n";

echo("\nЗадание 3.1\n");
$virableType = false;
$variable = 3.14;
// $variable = 3;
// $variable = 'one';
//$variable = true;
// $variable = null;
//$variable = [];


if(is_bool($variable)) {
    $virableType = 'bool';
} else if(is_float($variable)) {
    $virableType = 'float';
} else if(is_int($variable)) {
    $virableType = 'int';
} else if(is_string($variable)) {
    $virableType = 'string';
} else if(is_null($variable)) {
    $virableType = 'null';
} else {
    $virableType = 'other';
}

if($virableType) {
    echo("variable is a {$virableType}\n");
}

$virableTwoType = false;
//$variableTwo = 3.14;
// $variableTwo = 3;
// $variableTwo = 'one';
//$variableTwo = true;
$variableTwo = null;
//$variableTwo = [];

switch(true) {
    case is_bool($variableTwo):
        $virableTwoType = 'bool';
        break;
    case is_float($variableTwo):
        $virableTwoType = 'float';
        break;
    case is_int($variableTwo):
        $virableTwoType = 'int';
        break;
    case is_string($variableTwo):
        $virableTwoType = 'string';
        break;
    case is_null($variableTwo):
        $virableTwoType = 'null';
        break;
    default:
        $virableTwoType = 'other';
    break;
}

if($virableTwoType) {
    echo("variable is a {$virableTwoType}\n");
}