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

function minEggDropperX($eggs, $floors) {
    if ($eggs <= 0 || $floors <= 0) {
        return false;
    }
    $actualFloor = 1;
    $minDrops = 0;
    if ($eggs === 1 || $floors === 1) {
        while ($actualFloor <= $floors) {
            $minDrops++;
            $actualFloor = $actualFloor + 1;
        }
    } else if ($eggs > 1 && $floors > 1) {
        $eggsNeeded = numberEggsDividing($floors);
        if ($eggs >= $eggsNeeded) {
            $minDrops = 0;
            while ($floors > 1) {
                $minDrops++;
                $floors = round($floors/2);
            }
        } else {
            while ($actualFloor <= $floors) {
                $minDrops++;
                $actualFloor = $actualFloor + 3;
            }
            $minDrops = $minDrops + 2;
        }
    }
    return $minDrops;
}

function numberEggsDividing($floors) {
    $eggsNeeded = 0;
    while ($floors > 1) {
        $eggsNeeded++;
        $floors = round($floors/2);
    }
    return $eggsNeeded;
}

echo minEggDropper100();
echo " | ";
echo minEggDropper2();
echo " | ";
echo minEggDropperX(2,100);