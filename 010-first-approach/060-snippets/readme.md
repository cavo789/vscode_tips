# Snippets {#snippets}

## Built-in {#snippets-built-in}

Snippets are pieces of pre-programmed code (like a `try...catch...`) that allow you to generate code without typing it entirely.

Depending on the open file and its language (php, js, markdown, ...), *VSCode* will offer standard snippets and it will also be possible to program your own.

Press <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>P</kbd> to open the Palette Command then type `Insert Snippet` to get the list of already existing snippets.

## User defined ones {#snippets-user-defined}

It is however possible to write your own snippets: press <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>P</kbd> then `Configure User Snippets`. The programming language is chosen, e.g. `PHP`, which will open an editor with, here, the open `PHP` file.

A file called `php.json` will be opened and you can start to create a snippet; f.i.:

```json
<!-- concat-md::include "./files/strict.json" -->
```

The code here above define a snippet called `strict` and it's for a `.php` file. Open such file, start to type `stri` (you can type only a few letters) and press the <kbd>CTRL</kbd>-<kbd>space</kbd> keys. Select the snippet and press <kbd>enter</kbd>. You'll get the code defined in the `body`. It's magic.

Note: you can also desired to just press the <kbd>TAB</kbd> key. If so, check your `User Settings` and make sure the following key is well on `on`: 

```json
<!-- concat-md::include "./files/tabCompletion.json" -->
```

## Make snippets configurable {#snippets-user-placeholders}

Take a look on the following snippet and the `$1` and `$2` placeholders.

```json
<!-- concat-md::include "./files/vd.json" -->
```

Save this snippet in your editor and, in a `php` file, type `vd` followed by <kbd>CTRL</kbd>-<kbd>space</kbd>. You'll get now three new lines and the cursor will be placed where the `$1` placeholder was. Type a PHP variable and press <kbd>TAB</kbd> and see, the cursor will be now immediately put where `$2` was located. Thanks these placeholders it's easy to foresee, in a snippet, locations where you need to type dynamic content like variables, custom text, ...

## Using variables

When creating a snippet, we can f.i. use the current PHP filename. Imagine you've a file name `Customer.php` and there you wish to create a new class.

The following snippet will do the magic:

```json
<!-- concat-md::include "./files/newclass.json" -->
```

The `TM_FILENAME_BASE` variable will be replaced by VS Code to the filename *(without the extension)* so we'll get a new class called `Customer`.

See all variables here: [https://code.visualstudio.com/docs/editor/userdefinedsnippets#_variables](https://code.visualstudio.com/docs/editor/userdefinedsnippets#_variables)

## Settings {#snippets-settings}

User snippets are stored in the `%APPDATA%\code\user\snippets` folder, one `.json` file by languages.

## Extensions {#snippets-extensions}

Also see the [snippet-creator](#extensions-snippet-creator) extension.
