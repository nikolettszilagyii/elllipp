<!-- 
* File: calc.php
* Author: Szilágyi Nikolett Viola
* Copyright: 2022, Szilágyi Nikolett Viola
* Group: Szoft_I_N
* Date: 2022_06_14
* Github: https://github.com/nikolettszilagyii/
* Licenc: GNU GPL
 -->


 <?php

echo file_get_contents('templates/head.html');
echo file_get_contents('templates/nav.html');
$page = file_get_contents('templates/calc.html');

function calcVolume ($a, $b, $c) {

    $volume = (4 / 3) * pi()*$a*$b*$c;
    
    return $volume;
}


if (
    !empty($_GET['a']) and
    !empty($_GET['b']) and
    !empty($_GET['c'])
) {
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];

    $volume = calcVolume($a, $b, $c);

    $page = str_replace('{{ result }}', $volume, $page);
} else {
    $volume = "Hiba! Helytelen adatok vagy üres mezők!";

    $page = str_replace('{{ result }}', $volume, $page);
}

echo $page;
echo file_get_contents('templates/foot.html');

?>