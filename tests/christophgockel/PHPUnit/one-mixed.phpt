--TEST--
phpunit -c _files/phpunit.xml _files/MixedTest.php
--FILE--
<?php
$_SERVER['TERM'] = 'linux';
$_SERVER['argv'][1] = '-c';
$_SERVER['argv'][2] = dirname(__FILE__) . '/_files/phpunit.xml';
$_SERVER['argv'][3] = dirname(__FILE__) . '/_files/MixedTest.php';

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/vendor/autoload.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

Configuration read from %s

<3 </3 </3 <? <? 

Time: %i %s, Memory: %sMb

There was 1 error:

1) MixedTest::testError
%s

%s:%i

--


There was 1 failure:

1) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

FAILURES!
Tests: 5, Assertions: 2, Failures: 1, Errors: 1, Incomplete: 1, Skipped: 1.
