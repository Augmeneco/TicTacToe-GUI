<?php global $gameType, $activePlayer, $steps;
if ( $gameType == 0){
    $rand = rand(1, 2);
    $activePlayer = $rand;
    for ($i = 1; $i <= 9; $i++){
        c("panel" . $i)->caption = "";
    }
    if ( $rand == 1 ){
        c("statusBar")->simpleText = "��� ������� ������";
    } else {
        c("statusBar")->simpleText = "��� ������� ������";
    }
} else {
    $steps = 0;
    for ($i = 1; $i <= 9; $i++){
        c("panel" . $i)->caption = "";
    }
}
