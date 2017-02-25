<?php global $gameType, $activePlayer, $steps;
if ( $gameType == 0){
    $rand = rand(1, 2);
    $activePlayer = $rand;
    for ($i = 1; $i <= 9; $i++){
        c("panel" . $i)->caption = "";
    }
    if ( $rand == 1 ){
        c("statusBar")->simpleText = "Ход первого игрока";
    } else {
        c("statusBar")->simpleText = "Ход второго игрока";
    }
} else {
    $steps = 0;
    for ($i = 1; $i <= 9; $i++){
        c("panel" . $i)->caption = "";
    }
}
