<?php global $gameType, $steps;
$gameType = 1;
$steps = 0;
for ($i = 1; $i <= 9; $i++){
    c("panel" . $i)->caption = "";
}
c("main->statusBar")->simpleText = "Вы ходите крестиком";
