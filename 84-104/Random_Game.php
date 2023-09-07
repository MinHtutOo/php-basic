<?php
$p1 = 0;
$p2 = 0;
$draw =0;


for($i =0; $i <50;$i++){
    $player1 = rand(0,6);
    $player2 = rand(0,6);
    if($player1 > $player2) {
        $p1++;
    }else if($player1 == $player2) {
        $s++;
    }else {
        $p2++;
    }
}

echo "Player 1 win" . $p1 . "times<br>";
echo "Player 2 win" . $p1 . "times<br>";
echo "There were" . $p1 . "times draw.<br>";
?>