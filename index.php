<?php

$category = [];

$category[] = 'Infantil';
$category[] = 'Adolescente';
$category[] = 'Adulto';

$name = 'Calixto';
$age = 17;

#var_dump($name, $age);

if ($age >= 6 && $age <= 12) {
    for ($i = 0; $i <= count($category); $i++) {
        if ($category[$i] == 'Infantil')
            echo 'O nadador ' . $name . ' compete na categoria infantil';
    }
} else if ($age >= 13 && $age < 18) {
    for ($i = 0; $i <= count($category); $i++) {
        if ($category[$i] == 'Adolescente')
            echo 'O nadador ' . $name . ' compete na categoria adolescente';
    }
} else {
    for ($i = 0; $i <= count($category); $i++) {
        if ($category[$i] == 'Adulto')
            echo 'O nadador ' . $name . ' compete na categoria adulto';
    }
}
