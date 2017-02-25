<?php global $music;
$name = getFileName("{res}/menu.mp3");
c("TMusic1")->url = $name;
c("TMusic1")->play();
$music="1";
