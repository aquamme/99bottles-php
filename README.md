# 99 Bottles of OOP - PHP

This repository contains a PHP version of the test suite from 99 Bottles of OOP, a wonderful book written by Sandi Metz and Katrina Owen. Get it [here](https://www.sandimetz.com/99bottles/).

The tests were taken verbatim from [here](https://gist.github.com/Vasiliy-Bondarenko/6320509e763e05747d78e2bc1e25fb0c).

## Setup

Ensure you have Php 7.1 and composer installed on your system.
Clone the 'tests' branch.
Run `composer install`

To run the tests, use: `./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/BottlesTest.php`
