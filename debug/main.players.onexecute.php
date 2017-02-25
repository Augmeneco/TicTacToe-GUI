<?php global $activePlayer;
switch ( $activePlayer ){
    case 1:
        $activePlayer = 2;
        $object->caption = "X";
        c("statusBar")->simpleText = "Ход второго игрока";
    break;
    case 2:
        $activePlayer = 1;
        $object->caption = "0";
        c("statusBar")->simpleText = "Ход первого игрока";
    break;
}

if ( c("panel1")->text == "X" & c("panel2")->text == "X" & c("panel3")->text == "X" ){
    alert("Первый игрок победил!");
    restart();
}
if ( c("panel4")->text == "X" & c("panel5")->text == "X" & c("panel6")->text == "X" ){
    alert("Первый игрок победил!");
    restart();
}
if ( c("panel7")->text == "X" & c("panel8")->text == "X" & c("panel9")->text == "X" ){
    alert("Первый игрок победил!");
    restart();
}
if ( c("panel1")->text == "X" & c("panel4")->text == "X" & c("panel7")->text == "X" ){
    alert("Первый игрок победил!");
    restart();
}
if ( c("panel2")->text == "X" & c("panel5")->text == "X" & c("panel8")->text == "X" ){
    alert("Первый игрок победил!");
    restart();
}
if ( c("panel3")->text == "X" & c("panel6")->text == "X" & c("panel9")->text == "X" ){
    alert("Первый игрок победил!");
    restart();
}
if ( c("panel1")->text == "X" & c("panel5")->text == "X" & c("panel9")->text == "X" ){
    alert("Первый игрок победил!");
    restart();
}
if ( c("panel7")->text == "X" & c("panel5")->text == "X" & c("panel3")->text == "X" ){
    alert("Первый игрок победил!");
    restart();
}



if ( c("panel1")->text == "0" & c("panel2")->text == "0" & c("panel3")->text == "0" ){
    alert("Второй игрок победил!");
    restart();
}
if ( c("panel4")->text == "0" & c("panel5")->text == "0" & c("panel6")->text == "0" ){
    alert("Второй игрок победил!");
    restart();
}
if ( c("panel7")->text == "0" & c("panel8")->text == "0" & c("panel9")->text == "0" ){
    alert("Второй игрок победил!");
    restart();
}
if ( c("panel1")->text == "0" & c("panel4")->text == "0" & c("panel7")->text == "0" ){
    alert("Второй игрок победил!");
    restart();
}
if ( c("panel2")->text == "0" & c("panel5")->text == "0" & c("panel8")->text == "0" ){
    alert("Второй игрок победил!");
    restart();
}
if ( c("panel3")->text == "0" & c("panel6")->text == "0" & c("panel9")->text == "0" ){
    alert("Второй игрок победил!");
    restart();
}
if ( c("panel1")->text == "0" & c("panel5")->text == "0" & c("panel9")->text == "0" ){
    alert("Второй игрок победил!");
    restart();
}
if ( c("panel7")->text == "0" & c("panel5")->text == "0" & c("panel3")->text == "0" ){
    alert("Второй игрок победил!");
    restart();
}
