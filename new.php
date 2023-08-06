<?php

echo "welcome to my game!\n";
while (true) {
echo "===game tebak angka===\n";
echo "tebsk sebuah angka antara 1 dan 9!\n";
$computer = rand (1,9);
echo "masukkan tebakanmu: ";
$player = trim(fgets(STDIN));
if ($player == $computer) {
    echo "menang. angka komputer $computer.\n";
    exit;
}else {
    echo "kalah. angka komputer $computer.\n";
}
    
}