<?php


function minEggDropper100() {
    $floors = 100;
    $usedEggs = 0;
    while ($floors > 1) {
        $usedEggs++;
        $floors = round($floors/2);
    }
    return $usedEggs;
}


echo minEggDropper100();