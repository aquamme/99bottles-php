<?php namespace Src;

class Bottles {

  public static function verse($currentNumber) {
    $nextNumber = $currentNumber - 1;

    $currentText = $currentNumber === 1 ? 'bottle' : 'bottles';
    $nextText = $nextNumber === 1 ? 'bottle' : 'bottles';

    $lastClause = $nextNumber === 0 ?
      "Take it down and pass it around, no more bottles of beer on the wall."
      :
      "Take one down and pass it around, $nextNumber $nextText of beer on the wall.";

    $text = <<<VERSE
$currentNumber $currentText of beer on the wall, $currentNumber $currentText of beer.
$lastClause
VERSE;

    return $text;
  }
}