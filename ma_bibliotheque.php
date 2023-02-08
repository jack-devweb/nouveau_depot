<?php

function trouver_min($tableau) {
    $min = PHP_INT_MAX;
    foreach ($tableau as $element) {
        if ($min > $element) {
            $min = $element;
        }
    }
    return $min;
}

function trouver_max($tableau) {
    $max = PHP_INT_MIN;
    foreach ($tableau as $element) {
        if ($max < $element) {
            $max = $element;
        }
    }
    return $max;
}

function trouver_plus_proche_de_zero($tableau) {
    $min = PHP_INT_MAX;
    $resultat = 0;
    foreach ($tableau as $element) {
        if (abs($element) < $min) {
            $min = abs($element);
            $resultat = $element;
        }
    }
    return $resultat;
}

?>
