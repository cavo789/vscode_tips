# PHP Formatting {#php-formatting}

If you already have installed [PHP intelephense](#extensions-php-intelephense), you can retrieve a `Format Document` command in the `Command Palette` (<kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>P</kbd>) but you can't really configure the rules (how the formatting should be done, tabs or spaces, removed unused classes, ...) and for this reason it's probably best to install [PHP-CS-FIXER]](#extensions-php-cs-fixer).

Once installed, php-cs-fixer will add command like `Fix this file` (<kbd>ALT</kbd>-<kbd>SHIFT</kbd>-<kbd>F</kbd>).

php-cs-fixer can be configured globally (in the `User Settings` (<kbd>CTRL</kbd>-<kbd>,</kbd>)) or for the Workspace (in this case, create or edit the `/.vscode/settings.json` file in your project).

```json
<!-- concat-md::include "./files/configuration.json" -->
```

By creating a `.php-cs` file in your root folder, php-cs-fixer will apply rules defined in that file.
