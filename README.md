PHPUnit Love Printer
====================

More love for developers!

## Example

## Requirements

The Love Printer works with PHP 5.3+ and PHPUnit 3.7+.

## Installation

The recommended way to install the Love Printer is [via composer](http://getcomposer.org).
Create a `composer.json` file (or edit your existing one). Then add the folling dependency:

    {
        "require-dev": {
            "christophgockel/phpunit-loveprinter": "*"
        }
    }

Finally run `php composer.phar install --dev` to install it.

Once installed, the following attributes are needed in your `phpunit.xml` file (add them to the `<phpunit>`):

    printerFile="vendor/christophgockel/phpunit-loveprinter/src/ChristophGockel/PHPUnit/LovePrinter.php"
    printerClass="ChristophGockel\PHPunit\LovePrinter"

## Acknowledgements
The Love Printer's packaging is __heavily__ inspired by [whatthejeff/fab-phpunit-resultprinter](https://github.com/whatthejeff/fab-phpunit-resultprinter).

## License
Love Printer is licensed under the [MIT license](LICENSE).


<3
