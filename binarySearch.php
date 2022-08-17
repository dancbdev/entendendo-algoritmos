<?php

function binarySearch($needle, $array) {
  $lowerPosition = 0;
  $higherPosition = count($array) - 1;

  while ($lowerPosition <= $higherPosition) {
    $middle = ceil(($lowerPosition + $higherPosition) / 2);
    $guess = $array[$middle];

    if ($guess == $needle) {
      return $middle;
    }

    if ($guess > $needle) {
      $higherPosition = $middle - 1;
    } else {
      $lowerPosition = $middle + 1;
    }
  }

  return null;
}

$array = [1, 3, 5, 7, 9];
echo binarySearch(3, $array) . "\n";
echo binarySearch(9, $array) . "\n";
echo binarySearch(1, $array) . "\n";
echo binarySearch(5, $array) . "\n";
echo binarySearch(7, $array) . "\n";
echo binarySearch(-1, $array) . "\n";