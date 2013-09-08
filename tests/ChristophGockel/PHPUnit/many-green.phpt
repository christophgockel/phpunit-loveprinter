--TEST--
phpunit -c _files/phpunit.xml --repeat 84 _files/GreenTest.php
--FILE--
<?php
$_SERVER['TERM'] = 'linux';
$_SERVER['argv'][1] = '-c';
$_SERVER['argv'][2] = dirname(__FILE__) . '/_files/phpunit.xml';
$_SERVER['argv'][3] = '--repeat';
$_SERVER['argv'][4] = '84';
$_SERVER['argv'][5] = dirname(__FILE__) . '/_files/GreenTest.php';

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/vendor/autoload.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

Configuration read from %s

<3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3      22 / 84 ( 26%)
<3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3      44 / 84 ( 52%)
<3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3      66 / 84 ( 78%)
<3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 <3 

Time: %i %s, Memory: %sMb

OK (84 tests, 84 assertions)
