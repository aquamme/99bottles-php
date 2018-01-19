<?php namespace Src;

use function implode;
use const PHP_EOL;

class Bottles {

  public static function song() {
    return self::verse(99, 0);
  }

  public static function verse($startBottles, $endBottles = null) {
    $verses = [];

    if (is_null($endBottles)) {
      $endBottles = $startBottles;
    }

    while ($startBottles >= $endBottles) {
      $verses[] = self::singleVerse($startBottles--);
    }

    return implode(PHP_EOL . PHP_EOL, $verses);
  }

  private static function singleVerse($currentNumber) {

    if ($currentNumber === 0) {
      return <<<VERSE
No more bottles of beer on the wall, no more bottles of beer.
Go to the store and buy some more, 99 bottles of beer on the wall.
VERSE;

    }


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