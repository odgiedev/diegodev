<?php

$desc = "Olá! me chamo Diego Fernandes, sou desenvolvedor back-end, entusiasta no desenvolvimento de jogos e hacking. Além de estar sempre estudando alguma coisa ligada a área da programação.";
$bio = "Desenvolvedor Back-end";

if(isset($_GET['lang']) and $_GET['lang'] == 'english'){
    $desc = "Hey! My name is Diego Fernandes, I'm a back-end developer. Game development and hacking entusiast. And I'am always studying something related to the programming area.";
    $bio = "Back-end Developer";
    $english = True;
}
