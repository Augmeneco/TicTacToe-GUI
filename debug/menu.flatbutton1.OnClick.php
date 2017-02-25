<?php global $gameType, $activePlayer;
$gameType = c("type")->itemIndex;
if ( $gameType == 0 ){
    $rand = rand(1, 2);
    $activePlayer = $rand;
    if ( $rand == 1 ){
        c("main->statusBar")->simpleText = "Ход первого игрока";
    } else {
        c("main->statusBar")->simpleText = "Ход второго игрока";
    }
} else {
    c("main->statusBar")->simpleText = "Вы ходите крестиком";
}
loadForm(main, LD_NONE);
