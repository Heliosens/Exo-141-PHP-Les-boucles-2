<?php
// ex1
for($a = 0 ; $a <= 10 ; $a++){
    echo "$a ";
}

echo "<br><br>";

// ex2
$c = 75;

for($b = 0 ; $b <= 20 ; $b++){
    echo $b * $c ." - ";
}

echo "<br><br>";

// ex3
$e = 22;

for($d = 100 ; $d > 10 ; $d--){
    echo $d * $e . " - ";
}

echo "<br><br>";

// ex4
for($f = 1 ; $f < 11 ; $f++){
    echo $f . " - ";
    $f+=$f/2;
}

echo "<br><br>";

// ex5
for($g = 1 ; $g < 16 ; $g++){
    echo "On y arrive presque ";
}

echo "<br><br>";

// ex6
for($h = 20 ; $h >= 0 ; $h--){
    echo "C'est presque bon ";
}

echo "<br><br>";

// exo 7
for($i = 1 ; $i <=100 ; $i+=15){
    echo "On tient le bon bout ";
}

echo "<br><br>";

// ex8
for($j = 200 ; $j >= 0 ; $j -= 12){
    echo "Enfin !!!! ";
}
