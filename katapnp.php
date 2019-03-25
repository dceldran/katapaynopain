<?php


function minEggDropper100() {
    $floors = 100;
    $minDrops100 = 0;
    while ($floors > 1) {
        $minDrops100++;
        $floors = round($floors/2);
    }
    return $minDrops100;
}

function minEggDropper2() {
    $actualFloor = 1;
    $minDrops2 = 0;
    while ($actualFloor <= 100) {
        $minDrops2++;
        $actualFloor = $actualFloor + 3;
    }
    $minDrops2 = $minDrops2 + 2;
    return $minDrops2;
}

echo minEggDropper100();
echo " | ";
echo minEggDropper2();