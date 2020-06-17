# Better PHPUnit {#extensions-php-better-phpunit}

> [https://github.com/calebporzio/better-phpunit](https://github.com/calebporzio/better-phpunit)

Better PHPUnit is the most popular, cleanest, and fastest PHPUnit runner for VS Code.

![Better PHPUnit](./images/demo.gif)

## Configure

Make sure to edit the `Workspace` settings and add these two keys:

<!-- concat-md::include "./files/settings.json" -->

Should be the absolute path to the `phpunit.bat` file and your `phpunit.xml` configuration file.

## Run a test method

* Place your cursor in/on the method you want to run
* <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>P</kbd> to open the `Command Palette`
* Select: `Better PHPUnit: run` (<kbd>CTRL</kbd>-<kbd>K</kbd>-<kbd>CTRL</kbd>-<kbd>R</kbd>)

## Run a test file

* <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>P</kbd> to open the `Command Palette`
* Select: `Better PHPUnit: run-file` (<kbd>CTRL</kbd>-<kbd>K</kbd>-<kbd>CTRL</kbd>-<kbd>F</kbd>)

## Run the entire suite

* <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>P</kbd> to open the `Command Palette`
* Select: `Better PHPUnit: run suite`

## Run the previous test

* <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>P</kbd> to open the `Command Palette`
* Select: `Better PHPUnit: run previous` (<kbd>CTRL</kbd>-<kbd>K</kbd>-<kbd>CTRL</kbd>-<kbd>P</kbd>)
