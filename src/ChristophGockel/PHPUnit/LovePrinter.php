<?php
namespace ChristophGockel\PHPUnit;

/**
 * More love!
 * 
 * @author Christoph Gockel <christoph@christophgockel.de>
 */
class LovePrinter extends \PHPUnit_TextUI_ResultPrinter
{
  protected $safeshotPaddingDistance = 5;


  protected function writeProgress($progress)
  {
    switch ($progress) {
      case '.':
        $progress = '<3 ';
        break;
      case 'F':
      case 'E':
        $progress = '</3 ';
        break;
      default:
        $progress = '<? ';
        break;
    }

    $this->write($progress);
    $this->column += strlen($progress);
    $this->numTestsRun++;

    $this->assureAlignedOutput();

    if ($this->column >= $this->maxColumn) {
      $this->write(
        sprintf(
          ' %' . $this->numTestsWidth . 'd / %' .
                 $this->numTestsWidth . 'd (%3s%%)',

            $this->numTestsRun,
            $this->numTests,
            floor(($this->numTestsRun / $this->numTests) * 100)
          )
        );

      $this->writeNewLine();
    }
  }

  protected function assureAlignedOutput() {
    if ($this->outputNeedsToBeAligned()) {
      $this->writePadding();
    }
  }

  protected function outputNeedsToBeAligned() {
    return $this->lineLengthOverspill() <= 0;
  }

  protected function lineLengthOverspill() {
    return $this->maxColumn - $this->column;
  }

  protected function writePadding() {
    $this->write(str_pad(' ', $this->paddingLength()));
  }

  protected function paddingLength() {
    return $this->safeshotPaddingDistance - $this->unnecessaryPadding();
  }

  protected function unnecessaryPadding() {
    return abs($this->lineLengthOverspill());
  }
}

