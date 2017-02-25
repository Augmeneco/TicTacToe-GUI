<?php global $steps;
$object->caption = "X";
$steps++;
if ( $steps != 5 ){
    rnd:
    $rand = rand(1, 9);
    if ( c("panel" . $rand)->caption != "X" & c("panel" . $rand)->caption != "0" ){
        c("panel" . $rand)->caption = "0";
    } else {
        goto rnd;
    }
}

if ( c("panel1")->text == "X" & c("panel2")->text == "X" & c("panel3")->text == "X" ){
    alert("Вы выйграли!");
    restart();
    $won = 1;
}
if ( c("panel4")->text == "X" & c("panel5")->text == "X" & c("panel6")->text == "X" ){
    alert("Вы выйграли!");
    restart();
    $won = 1;
}
if ( c("panel7")->text == "X" & c("panel8")->text == "X" & c("panel9")->text == "X" ){
    alert("Вы выйграли!");
    restart();
    $won = 1;
}
if ( c("panel1")->text == "X" & c("panel4")->text == "X" & c("panel7")->text == "X" ){
    alert("Вы выйграли!");
    restart();
    $won = 1;
}
if ( c("panel2")->text == "X" & c("panel5")->text == "X" & c("panel8")->text == "X" ){
    alert("Вы выйграли!");
    restart();
    $won = 1;
}
if ( c("panel3")->text == "X" & c("panel6")->text == "X" & c("panel9")->text == "X" ){
    alert("Вы выйграли!");
    restart();
    $won = 1;
}
if ( c("panel1")->text == "X" & c("panel5")->text == "X" & c("panel9")->text == "X" ){
    alert("Вы выйграли!");
    restart();
    $won = 1;
}
if ( c("panel7")->text == "X" & c("panel5")->text == "X" & c("panel3")->text == "X" ){
    alert("Вы выйграли!");
    restart();
    $won = 1;
}

if ( $won != 1 ){

if ( c("panel1")->text == "0" & c("panel2")->text == "0" & c("panel3")->text == "0" ){
    alert("Победу одержал компьютер!");
    restart();
}
if ( c("panel4")->text == "0" & c("panel5")->text == "0" & c("panel6")->text == "0" ){
    alert("Победу одержал компьютер!");
    restart();
}
if ( c("panel7")->text == "0" & c("panel8")->text == "0" & c("panel9")->text == "0" ){
    alert("Победу одержал компьютер!");
    restart();
}
if ( c("panel1")->text == "0" & c("panel4")->text == "0" & c("panel7")->text == "0" ){
    alert("Победу одержал компьютер!");
    restart();
}
if ( c("panel2")->text == "0" & c("panel5")->text == "0" & c("panel8")->text == "0" ){
    alert("Победу одержал компьютер!");
    restart();
}
if ( c("panel3")->text == "0" & c("panel6")->text == "0" & c("panel9")->text == "0" ){
    alert("Победу одержал компьютер!");
    restart();
}
if ( c("panel1")->text == "0" & c("panel5")->text == "0" & c("panel9")->text == "0" ){
    alert("Победу одержал компьютер!");
    restart();
}
if ( c("panel7")->text == "0" & c("panel5")->text == "0" & c("panel3")->text == "0" ){
    alert("Победу одержал компьютер!");
    restart();
}

} else {
    $won = false;
}
