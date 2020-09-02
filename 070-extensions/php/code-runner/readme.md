# Code-runner {#extensions-php-better-phpunit}

> [https://github.com/formulahendry/vscode-code-runner](https://github.com/formulahendry/vscode-code-runner)

With code-runner, open a PHP file and just run it from within vscode. Useful to run samples scripts f.i.

## Configuration Code-runner

Be sure to enable the `fileDirectoryAsCwd` setting. This will force `code-runner` to run the script by first setting the current directory to the one of the PHP file. Needed to make sure your require (like your autoloader) statements can retrieve files.

<!-- concat-md::include "./files/settings.json" -->
