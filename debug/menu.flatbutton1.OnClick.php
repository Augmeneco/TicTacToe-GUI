<?php global $gameType, $activePlayer;
$gameType = c("type")->itemIndex;
if ( $gameType == 0 ){
    $rand = rand(1, 2);
    $activePlayer = $rand;
    if ( $rand == 1 ){
        c("main->statusBar")->simpleText = "��� ������� ������";
    } else {
        c("main->statusBar")->simpleText = "��� ������� ������";
    }
} else {
    c("main->statusBar")->simpleText = "�� ������ ���������";
}
loadForm(main, LD_NONE);
