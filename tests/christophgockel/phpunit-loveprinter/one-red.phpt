--TEST--
phpunit -c _files/phpunit.xml _files/RedTest.php
--FILE--
<?php
$_SERVER['TERM'] = 'linux';
$_SERVER['argv'][1] = '-c';
$_SERVER['argv'][2] = dirname(__FILE__) . '/_files/phpunit.xml';
$_SERVER['argv'][3] = dirname(__FILE__) . '/_files/RedTest.php';

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/vendor/autoload.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

Configuration read from %s

</3 

Time: %i %s, Memory: %sMb

There was 1 failure:

1) RedTest::testRed
Failed asserting that false is true.

%s:%i

FAILURES!
Tests: 1, Assertions: 1, Failures: 1.
