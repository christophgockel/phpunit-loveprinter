--TEST--
phpunit -c _files/phpunit.xml --repeat 93 _files/RedTest.php
--FILE--
<?php
$_SERVER['TERM'] = 'linux';
$_SERVER['argv'][1] = '-c';
$_SERVER['argv'][2] = dirname(__FILE__) . '/_files/phpunit.xml';
$_SERVER['argv'][3] = '--repeat';
$_SERVER['argv'][4] = '93';
$_SERVER['argv'][5] = dirname(__FILE__) . '/_files/RedTest.php';

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/vendor/autoload.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

Configuration read from %s

</3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3    17 / 93 ( 18%)
</3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3    34 / 93 ( 36%)
</3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3    51 / 93 ( 54%)
</3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3    68 / 93 ( 73%)
</3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3 </3    85 / 93 ( 91%)
</3 </3 </3 </3 </3 </3 </3 </3 

Time: %i %s, Memory: %sMb

There were 93 failures:

1) RedTest::testRed
Failed asserting that false is true.

%s:%i

2) RedTest::testRed
Failed asserting that false is true.

%s:%i

3) RedTest::testRed
Failed asserting that false is true.

%s:%i

4) RedTest::testRed
Failed asserting that false is true.

%s:%i

5) RedTest::testRed
Failed asserting that false is true.

%s:%i

6) RedTest::testRed
Failed asserting that false is true.

%s:%i

7) RedTest::testRed
Failed asserting that false is true.

%s:%i

8) RedTest::testRed
Failed asserting that false is true.

%s:%i

9) RedTest::testRed
Failed asserting that false is true.

%s:%i

10) RedTest::testRed
Failed asserting that false is true.

%s:%i

11) RedTest::testRed
Failed asserting that false is true.

%s:%i

12) RedTest::testRed
Failed asserting that false is true.

%s:%i

13) RedTest::testRed
Failed asserting that false is true.

%s:%i

14) RedTest::testRed
Failed asserting that false is true.

%s:%i

15) RedTest::testRed
Failed asserting that false is true.

%s:%i

16) RedTest::testRed
Failed asserting that false is true.

%s:%i

17) RedTest::testRed
Failed asserting that false is true.

%s:%i

18) RedTest::testRed
Failed asserting that false is true.

%s:%i

19) RedTest::testRed
Failed asserting that false is true.

%s:%i

20) RedTest::testRed
Failed asserting that false is true.

%s:%i

21) RedTest::testRed
Failed asserting that false is true.

%s:%i

22) RedTest::testRed
Failed asserting that false is true.

%s:%i

23) RedTest::testRed
Failed asserting that false is true.

%s:%i

24) RedTest::testRed
Failed asserting that false is true.

%s:%i

25) RedTest::testRed
Failed asserting that false is true.

%s:%i

26) RedTest::testRed
Failed asserting that false is true.

%s:%i

27) RedTest::testRed
Failed asserting that false is true.

%s:%i

28) RedTest::testRed
Failed asserting that false is true.

%s:%i

29) RedTest::testRed
Failed asserting that false is true.

%s:%i

30) RedTest::testRed
Failed asserting that false is true.

%s:%i

31) RedTest::testRed
Failed asserting that false is true.

%s:%i

32) RedTest::testRed
Failed asserting that false is true.

%s:%i

33) RedTest::testRed
Failed asserting that false is true.

%s:%i

34) RedTest::testRed
Failed asserting that false is true.

%s:%i

35) RedTest::testRed
Failed asserting that false is true.

%s:%i

36) RedTest::testRed
Failed asserting that false is true.

%s:%i

37) RedTest::testRed
Failed asserting that false is true.

%s:%i

38) RedTest::testRed
Failed asserting that false is true.

%s:%i

39) RedTest::testRed
Failed asserting that false is true.

%s:%i

40) RedTest::testRed
Failed asserting that false is true.

%s:%i

41) RedTest::testRed
Failed asserting that false is true.

%s:%i

42) RedTest::testRed
Failed asserting that false is true.

%s:%i

43) RedTest::testRed
Failed asserting that false is true.

%s:%i

44) RedTest::testRed
Failed asserting that false is true.

%s:%i

45) RedTest::testRed
Failed asserting that false is true.

%s:%i

46) RedTest::testRed
Failed asserting that false is true.

%s:%i

47) RedTest::testRed
Failed asserting that false is true.

%s:%i

48) RedTest::testRed
Failed asserting that false is true.

%s:%i

49) RedTest::testRed
Failed asserting that false is true.

%s:%i

50) RedTest::testRed
Failed asserting that false is true.

%s:%i

51) RedTest::testRed
Failed asserting that false is true.

%s:%i

52) RedTest::testRed
Failed asserting that false is true.

%s:%i

53) RedTest::testRed
Failed asserting that false is true.

%s:%i

54) RedTest::testRed
Failed asserting that false is true.

%s:%i

55) RedTest::testRed
Failed asserting that false is true.

%s:%i

56) RedTest::testRed
Failed asserting that false is true.

%s:%i

57) RedTest::testRed
Failed asserting that false is true.

%s:%i

58) RedTest::testRed
Failed asserting that false is true.

%s:%i

59) RedTest::testRed
Failed asserting that false is true.

%s:%i

60) RedTest::testRed
Failed asserting that false is true.

%s:%i

61) RedTest::testRed
Failed asserting that false is true.

%s:%i

62) RedTest::testRed
Failed asserting that false is true.

%s:%i

63) RedTest::testRed
Failed asserting that false is true.

%s:%i

64) RedTest::testRed
Failed asserting that false is true.

%s:%i

65) RedTest::testRed
Failed asserting that false is true.

%s:%i

66) RedTest::testRed
Failed asserting that false is true.

%s:%i

67) RedTest::testRed
Failed asserting that false is true.

%s:%i

68) RedTest::testRed
Failed asserting that false is true.

%s:%i

69) RedTest::testRed
Failed asserting that false is true.

%s:%i

70) RedTest::testRed
Failed asserting that false is true.

%s:%i

71) RedTest::testRed
Failed asserting that false is true.

%s:%i

72) RedTest::testRed
Failed asserting that false is true.

%s:%i

73) RedTest::testRed
Failed asserting that false is true.

%s:%i

74) RedTest::testRed
Failed asserting that false is true.

%s:%i

75) RedTest::testRed
Failed asserting that false is true.

%s:%i

76) RedTest::testRed
Failed asserting that false is true.

%s:%i

77) RedTest::testRed
Failed asserting that false is true.

%s:%i

78) RedTest::testRed
Failed asserting that false is true.

%s:%i

79) RedTest::testRed
Failed asserting that false is true.

%s:%i

80) RedTest::testRed
Failed asserting that false is true.

%s:%i

81) RedTest::testRed
Failed asserting that false is true.

%s:%i

82) RedTest::testRed
Failed asserting that false is true.

%s:%i

83) RedTest::testRed
Failed asserting that false is true.

%s:%i

84) RedTest::testRed
Failed asserting that false is true.

%s:%i

85) RedTest::testRed
Failed asserting that false is true.

%s:%i

86) RedTest::testRed
Failed asserting that false is true.

%s:%i

87) RedTest::testRed
Failed asserting that false is true.

%s:%i

88) RedTest::testRed
Failed asserting that false is true.

%s:%i

89) RedTest::testRed
Failed asserting that false is true.

%s:%i

90) RedTest::testRed
Failed asserting that false is true.

%s:%i

91) RedTest::testRed
Failed asserting that false is true.

%s:%i

92) RedTest::testRed
Failed asserting that false is true.

%s:%i

93) RedTest::testRed
Failed asserting that false is true.

%s:%i

FAILURES!
Tests: 93, Assertions: 93, Failures: 93.
