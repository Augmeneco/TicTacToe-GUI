<?php global $music;
if ($music == "1"){
$music="0";
c("menu->TMusic1")->stop();
c("flatButton2")->caption = "Музыка выключена";
}
else
{
$music="1";
c("menu->TMusic1")->play();
c("flatButton2")->caption = "Музыка включена";
}
