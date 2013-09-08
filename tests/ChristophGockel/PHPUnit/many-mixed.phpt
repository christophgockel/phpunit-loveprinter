--TEST--
phpunit -c _files/phpunit.xml --repeat 42 _files/MixedTest.php
--FILE--
<?php
$_SERVER['TERM'] = 'linux';
$_SERVER['argv'][1] = '-c';
$_SERVER['argv'][2] = dirname(__FILE__) . '/_files/phpunit.xml';
$_SERVER['argv'][3] = '--repeat';
$_SERVER['argv'][4] = '42';
$_SERVER['argv'][5] = dirname(__FILE__) . '/_files/MixedTest.php';

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/vendor/autoload.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

Configuration read from %s

<3 </3 </3 <? <? <3 </3 </3 <? <? <3 </3 </3 <? <? <3 </3 </3 <?      19 / 210 (  9%)
<? <3 </3 </3 <? <? <3 </3 </3 <? <? <3 </3 </3 <? <? <3 </3 </3      38 / 210 ( 18%)
<? <? <3 </3 </3 <? <? <3 </3 </3 <? <? <3 </3 </3 <? <? <3 </3       57 / 210 ( 27%)
</3 <? <? <3 </3 </3 <? <? <3 </3 </3 <? <? <3 </3 </3 <? <? <3       76 / 210 ( 36%)
</3 </3 <? <? <3 </3 </3 <? <? <3 </3 </3 <? <? <3 </3 </3 <? <?      95 / 210 ( 45%)
<3 </3 </3 <? <? <3 </3 </3 <? <? <3 </3 </3 <? <? <3 </3 </3 <?     114 / 210 ( 54%)
<? <3 </3 </3 <? <? <3 </3 </3 <? <? <3 </3 </3 <? <? <3 </3 </3     133 / 210 ( 63%)
<? <? <3 </3 </3 <? <? <3 </3 </3 <? <? <3 </3 </3 <? <? <3 </3      152 / 210 ( 72%)
</3 <? <? <3 </3 </3 <? <? <3 </3 </3 <? <? <3 </3 </3 <? <? <3      171 / 210 ( 81%)
</3 </3 <? <? <3 </3 </3 <? <? <3 </3 </3 <? <? <3 </3 </3 <? <?     190 / 210 ( 90%)
<3 </3 </3 <? <? <3 </3 </3 <? <? <3 </3 </3 <? <? <3 </3 </3 <?     209 / 210 ( 99%)
<? 

Time: %i %s, Memory: %sMb

There were 42 errors:

1) MixedTest::testError
%s

%s:%i

2) MixedTest::testError
%s

%s:%i

3) MixedTest::testError
%s

%s:%i

4) MixedTest::testError
%s

%s:%i

5) MixedTest::testError
%s

%s:%i

6) MixedTest::testError
%s

%s:%i

7) MixedTest::testError
%s

%s:%i

8) MixedTest::testError
%s

%s:%i

9) MixedTest::testError
%s

%s:%i

10) MixedTest::testError
%s

%s:%i

11) MixedTest::testError
%s

%s:%i

12) MixedTest::testError
%s

%s:%i

13) MixedTest::testError
%s

%s:%i

14) MixedTest::testError
%s

%s:%i

15) MixedTest::testError
%s

%s:%i

16) MixedTest::testError
%s

%s:%i

17) MixedTest::testError
%s

%s:%i

18) MixedTest::testError
%s

%s:%i

19) MixedTest::testError
%s

%s:%i

20) MixedTest::testError
%s

%s:%i

21) MixedTest::testError
%s

%s:%i

22) MixedTest::testError
%s

%s:%i

23) MixedTest::testError
%s

%s:%i

24) MixedTest::testError
%s

%s:%i

25) MixedTest::testError
%s

%s:%i

26) MixedTest::testError
%s

%s:%i

27) MixedTest::testError
%s

%s:%i

28) MixedTest::testError
%s

%s:%i

29) MixedTest::testError
%s

%s:%i

30) MixedTest::testError
%s

%s:%i

31) MixedTest::testError
%s

%s:%i

32) MixedTest::testError
%s

%s:%i

33) MixedTest::testError
%s

%s:%i

34) MixedTest::testError
%s

%s:%i

35) MixedTest::testError
%s

%s:%i

36) MixedTest::testError
%s

%s:%i

37) MixedTest::testError
%s

%s:%i

38) MixedTest::testError
%s

%s:%i

39) MixedTest::testError
%s

%s:%i

40) MixedTest::testError
%s

%s:%i

41) MixedTest::testError
%s

%s:%i

42) MixedTest::testError
%s

%s:%i

--


There were 42 failures:

1) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

2) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

3) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

4) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

5) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

6) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

7) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

8) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

9) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

10) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

11) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

12) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

13) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

14) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

15) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

16) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

17) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

18) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

19) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

20) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

21) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

22) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

23) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

24) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

25) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

26) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

27) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

28) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

29) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

30) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

31) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

32) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

33) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

34) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

35) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

36) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

37) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

38) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

39) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

40) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

41) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

42) MixedTest::testFailure
Failed asserting that false is true.

%s:%i

FAILURES!
Tests: 210, Assertions: 84, Failures: 42, Errors: 42, Incomplete: 42, Skipped: 42.

