<?php namespace Src;

use function implode;
use const PHP_EOL;

class Bottles {

  public static function song() {
    return self::verse(99, 0);
  }

  public static function verse($startBottles, $endBottles = null) {

    if (is_null($endBottles)) {
      return self::singleVerse($startBottles);
    } else {
      return self::multipleVerses($startBottles, $endBottles);
    }

  }

  private static function multipleVerses($startBottles, $endBottles) {

    while ($startBottles >= $endBottles) {
      $verses[] = self::singleVerse($startBottles--);
    }

    return implode(PHP_EOL . PHP_EOL, $verses);
  }

  private static function singleVerse($currentNumber) {

    if ($currentNumber === 0) {
      return self::finalVerse();
    }

    return self::lineOne($currentNumber) . PHP_EOL . self::lineTwo($currentNumber);

  }

  private static function lineOne ($currentNumber) {

    $currentNumBottles = self::getNumBottles($currentNumber);

    return "$currentNumBottles of beer on the wall, $currentNumBottles of beer.";
  }

  private static function lineTwo ($currentNumber) {

    $nextNumber = $currentNumber - 1;

    if ($nextNumber === 0) {
      return "Take it down and pass it around, no more bottles of beer on the wall.";
    }

    $nextNumBottles = self::getNumBottles($nextNumber);

    return "Take one down and pass it around, $nextNumBottles of beer on the wall.";
  }

  private static function finalVerse () {
    return <<<VERSE
No more bottles of beer on the wall, no more bottles of beer.
Go to the store and buy some more, 99 bottles of beer on the wall.
VERSE;

  }

  private static function getNumBottles ($num) {
    if ($num === 1) {
      return "1 bottle";
    } else {
      return "$num bottles";
    }
  }
}