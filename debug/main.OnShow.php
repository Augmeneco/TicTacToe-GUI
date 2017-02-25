<?php global $music;
$name = getFileName("{res}/game.mp3");
if ($music=="1"){
c("menu->TMusic1")->url = $name;
c("menu->TMusic1")->play();
}
