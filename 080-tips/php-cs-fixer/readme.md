# PHP-CS-FIXER {#php-cs-fixer}

The use of [php-cs-fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) can help to maintain a proper code. More info below.

## Installation {#php-cs-fixer-installation}

Install [PHP-CS-FIXER](https://github.com/FriendsOfPHP/PHP-CS-Fixer)<https://github.com/FriendsOfPHP/PHP-CS-Fixer.>

Create your `php-cs-fixer.php` file and put it there your settings. More info below.

Open VSCode, go to the settings page (press <kbd>CTRL</kbd>-<kbd>,</kbd>), search for `php-cs-fixer.config` and initialize the settings to the path of your `php-cs-fixer.php` (f.i. `C:\\config\\php-cs-fixer.php`).

## Remove unused imports {#php-cs-fixer-no-unused-imports}

The `no_unused_imports` setting, when set to `true`, allow php-cs-fixer to detect unused imports like below and to remove it automatically.

```php
<?php

require 'vendor/autoload.php';

use Avonture\Pandoc;

echo __DIR__;
```

This is done when you'll save your file.

```php
<?php
return PhpCsFixer\Config::create()
    ->setRules([
        'no_unused_imports'=> true
    ]);
```
