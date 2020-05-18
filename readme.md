﻿<!-- This file has been generated automatically by the following script -->
<!-- C:\Christophe\Repository\writing-documentation\concat-md\concat-md.ps1 -->
<!-- So don't modify this file manually but run the tool once more instead -->

<!-- Last refresh date: 2020-05-18 22:54:08 -->

<!-- below, content of ./index.md -->

# Visual Studio Code - Tutorial

![Banner](./images/banner.png)

> Tutorial and collection of tips and tricks for Visual Studio Code

<!-- table-of-contents - start -->
* [Discovering Visual Studio Code {#discovering}](#discovering-visual-studio-code-discovering)
    * [Installation {#discovering-installation}](#installation-discovering-installation)
    * [The first keyboard shortcuts to learn {#discovering-shortcuts}](#the-first-keyboard-shortcuts-to-learn-discovering-shortcuts)
    * [Settings {#discovering-settings}](#settings-discovering-settings)
    * [Working with files and folders {#working-with-files}](#working-with-files-and-folders-working-with-files)
       * [Keyboard shortcuts {#working-with-files-shortcuts}](#keyboard-shortcuts-working-with-files-shortcuts)
    * [Code traversal - Navigation {#traversal}](#code-traversal-navigation-traversal)
       * [Keyboard shortcuts {#traversal-shortcuts}](#keyboard-shortcuts-traversal-shortcuts)
       * [Select first {#traversal-select-first}](#select-first-traversal-select-first)
    * [Snippets {#snippets}](#snippets-snippets)
       * [Global {#snippets-global}](#global-snippets-global)
          * [Built-in {#snippets-built-in}](#built-in-snippets-built-in)
          * [User defined ones {#snippets-user-defined}](#user-defined-ones-snippets-user-defined)
          * [Make snippets configurable {#snippets-user-placeholders}](#make-snippets-configurable-snippets-user-placeholders)
          * [Using variables](#using-variables)
          * [Settings {#snippets-settings}](#settings-snippets-settings)
          * [Extensions {#snippets-extensions}](#extensions-snippets-extensions)
       * [Project-based {#snippets-project-based}](#project-based-snippets-project-based)
       * [Generator {#snippets-generator}](#generator-snippets-generator)
       * [Video tutorial {#snippets-video}](#video-tutorial-snippets-video)
    * [Using the built-in terminal {#terminal}](#using-the-built-in-terminal-terminal)
       * [Extensions {#terminal-extensions}](#extensions-terminal-extensions)
    * [Search](#search)
       * [Save the search](#save-the-search)
* [Working with code {#working-with-code}](#working-with-code-working-with-code)
    * [Keyboard shortcuts {#working-with-code-shortcuts}](#keyboard-shortcuts-working-with-code-shortcuts)
       * [Code folding {#working-with-code-folding}](#code-folding-working-with-code-folding)
       * [Comments {#working-with-code-comments}](#comments-working-with-code-comments)
    * [Integrated GIT {#integrated-git}](#integrated-git-integrated-git)
       * [Using with the terminal {#integrated-git-terminal}](#using-with-the-terminal-integrated-git-terminal)
       * [Source Control - GIT {#integrated-git-source-control}](#source-control-git-integrated-git-source-control)
       * [Extensions {#integrated-git-extensions}](#extensions-integrated-git-extensions)
    * [Code definition](#code-definition)
    * [PHP-Unit {#phpunit}](#php-unit-phpunit)
       * [Extensions {#phpunit-extensions}](#extensions-phpunit-extensions)
    * [Using xDebug {#xdebug}](#using-xdebug-xdebug)
       * [Installation](#installation)
          * [Check if xdebug is loaded](#check-if-xdebug-is-loaded)
       * [Visual Studio Code](#visual-studio-code)
          * [Settings](#settings)
          * [Use inside vscode](#use-inside-vscode)
          * [Breakpoint](#breakpoint)
          * [Logpoint](#logpoint)
    * [PHP Formatting {#php-formatting}](#php-formatting-php-formatting)
    * [Multiple cursors {#multiple-cursors}](#multiple-cursors-multiple-cursors)
    * [Navigate between problems](#navigate-between-problems)
    * [Rename all](#rename-all)
* [Some settings {#settings}](#some-settings-settings)
    * [Editor settings {#settings-editor}](#editor-settings-settings-editor)
    * [Files settings {#settings-files}](#files-settings-settings-files)
    * [Search settings {#settings-search}](#search-settings-settings-search)
    * [Telemetry settings {#settings-telemetry}](#telemetry-settings-settings-telemetry)
    * [Window settings {#settings-window}](#window-settings-settings-window)
    * [Workbench settings {#settings-workbench}](#workbench-settings-settings-workbench)
* [Extensions {#extensions}](#extensions-extensions)
    * [Extend core features of Visual Studio Code {#extensions-core}](#extend-core-features-of-visual-studio-code-extensions-core)
       * [Active File In StatusBar {#extensions-active-file-statusbar}](#active-file-in-statusbar-extensions-active-file-statusbar)
       * [Autofold {#extensions-autofold}](#autofold-extensions-autofold)
       * [Better comments {#extensions-better-comments}](#better-comments-extensions-better-comments)
       * [Bookmarks {#extensions-bookmarks}](#bookmarks-extensions-bookmarks)
       * [Bracket Pair Colorizer {#extensions-bracket-pair-colorizer}](#bracket-pair-colorizer-extensions-bracket-pair-colorizer)
       * [Change case {#extensions-change-case}](#change-case-extensions-change-case)
       * [Code Spell Checker {#extensions-code-spell-checker}](#code-spell-checker-extensions-code-spell-checker)
       * [EditorConfig {#extensions-editorconfig}](#editorconfig-extensions-editorconfig)
       * [Favorites {#extensions-favorites}](#favorites-extensions-favorites)
       * [Gitlens {#extensions-gitlens}](#gitlens-extensions-gitlens)
       * [Vscode Google Translate {#extensions-google-translate}](#vscode-google-translate-extensions-google-translate)
          * [Configuration](#configuration)
       * [Colouring of source codes according to the language {#extensions-highlight}](#colouring-of-source-codes-according-to-the-language-extensions-highlight)
          * [Apache configuration file {#highlight-apache}](#apache-configuration-file-highlight-apache)
          * [Log File Highlighter {#extensions_log-file-highlighter}](#log-file-highlighter-extensions_log-file-highlighter)
       * [Prettier {#extensions-prettier-vscode}](#prettier-extensions-prettier-vscode)
       * [Project Manager {#extensions-project-manager}](#project-manager-extensions-project-manager)
       * [Rerun the last command {#extensions-terminal-rerun}](#rerun-the-last-command-extensions-terminal-rerun)
       * [REST client {#extensions-rest-client}](#rest-client-extensions-rest-client)
       * [Select highlight in minimap {#extensions-select-highlight-minimap}](#select-highlight-in-minimap-extensions-select-highlight-minimap)
       * [Snippet-creator {#extensions-snippet-creator}](#snippet-creator-extensions-snippet-creator)
       * [Sort lines {#extensions-sort-lines}](#sort-lines-extensions-sort-lines)
       * [Surround {#extensions-surround}](#surround-extensions-surround)
       * [Syncing {#extensions-syncing}](#syncing-extensions-syncing)
       * [Todo Tree {#extensions-todo-tree}](#todo-tree-extensions-todo-tree)
       * [vscode-icons {#extensions-vscode-icons}](#vscode-icons-extensions-vscode-icons)
    * [Javascript {#extensions-javascript}](#javascript-extensions-javascript)
       * [ESLint {#extensions-eslint}](#eslint-extensions-eslint)
    * [Markdown {#extensions-markdown}](#markdown-extensions-markdown)
       * [Markdown All in One {#extensions-markdown-all-in-one}](#markdown-all-in-one-extensions-markdown-all-in-one)
       * [Markdownlint {#extensions-markdownlint}](#markdownlint-extensions-markdownlint)
          * [Configuration {#extensions-markdownlint-configuration}](#configuration-extensions-markdownlint-configuration)
    * [PHP {#extensions-php}](#php-extensions-php)
       * [Better PHPUnit {#extensions-php-better-phpunit}](#better-phpunit-extensions-php-better-phpunit)
          * [Configure](#configure)
          * [Run a test method](#run-a-test-method)
          * [Run a test file](#run-a-test-file)
          * [Run the entire suite](#run-the-entire-suite)
          * [Run the previous test](#run-the-previous-test)
       * [Code-runner {#extensions-php-better-phpunit}](#code-runner-extensions-php-better-phpunit)
          * [Configuration](#configuration)
       * [PHP intelephense {#extensions-php-intelephense}](#php-intelephense-extensions-php-intelephense)
          * [Configuration {#extensions-php-intelephense-configuration}](#configuration-extensions-php-intelephense-configuration)
       * [Laravel Blade Snippets {#extensions-laravel-blade}](#laravel-blade-snippets-extensions-laravel-blade)
       * [PHP-CS-FIXER {#extensions-php-cs-fixer}](#php-cs-fixer-extensions-php-cs-fixer)
       * [PHP DocBlocker {#extensions-php-docblocker}](#php-docblocker-extensions-php-docblocker)
       * [PHP Extension Pack {#extensions-php-extension-pack}](#php-extension-pack-extensions-php-extension-pack)
       * [PHP IntelliSense {#extensions-php-intellisense}](#php-intellisense-extensions-php-intellisense)
* [Tips](#tips)
    * [editorconfig](#editorconfig)
    * [Interface](#interface)
       * [Use color to identify projects](#use-color-to-identify-projects)
    * [Keyboard shortcuts for Windows](#keyboard-shortcuts-for-windows)
    * [Search and replace - Regex](#search-and-replace-regex)
       * [Remove all empty lines](#remove-all-empty-lines)
    * [Custom tasks](#custom-tasks)
* [Troubleshooting {#troubleshooting}](#troubleshooting-troubleshooting)
    * [Intelephense {#troubleshooting-intelephense}](#intelephense-troubleshooting-intelephense)
    * [Phan {#troubleshooting-phan}](#phan-troubleshooting-phan)
    * [PHP-CS-FIXER {#troubleshooting-php-cs-fixer}](#php-cs-fixer-troubleshooting-php-cs-fixer)
       * [PHP General Error {#troubleshooting-php-cs-fixer-php-general-error}](#php-general-error-troubleshooting-php-cs-fixer-php-general-error)
* [Create your own extension {#own-extension}](#create-your-own-extension-own-extension)
* [Bookmarks](#bookmarks)
    * [VS Code can do that](#vs-code-can-do-that)
    * [VS Code channel on youtube](#vs-code-channel-on-youtube)
* [License](#license)
<!-- table-of-contents - end -->

<!-- below, content of ./010-first-approach/readme.md -->

## Discovering Visual Studio Code {#discovering}

<!-- below, content of ./010-first-approach/010-installation/readme.md -->

### Installation {#discovering-installation}

Download [Visual Studio Code](https://code.visualstudio.com/).

The [Insiders version](https://code.visualstudio.com/insiders/) contains the very latest version but can be unstable.

<!-- below, content of ./010-first-approach/020-interface-shortcuts/readme.md -->

### The first keyboard shortcuts to learn {#discovering-shortcuts}

* <kbd>CTRL</kbd>-<kbd>B</kbd> toggle visibility of the side bar (the one with the list of files in the project).
* <kbd>CTRL</kbd>-<kbd>O</kbd> to open a file.
* <kbd>CTRL</kbd>-<kbd>K</kbd>-<kbd>CTRL</kbd>-<kbd>O</kbd> to open a folder (a project).
* <kbd>CTRL</kbd>-<kbd>R</kbd> to show the list of recent folders (recent project).
  * **TIP** Before clicking on the desired folder   , be sure to press the <kbd>CTRL</kbd> key to open the folder in a new window ([link](https://github.com/Microsoft/vscode/issues/31581#issuecomment-321753188))
* <kbd>CTRL</kbd>-<kbd>P</kbd> to quickly retrieve and open a file in an open project.
* <kbd>CTRL</kbd>-<kbd>O</kbd> to open a recent folder (a project).
* <kbd>SHIFT</kbd>-<kbd>CTRL</kbd>-<kbd>F</kbd> to open the `search` pane (when a project has been opened).
* <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>P</kbd> to open the `Command Palette` to quick access all commands of the editor.
* <kbd>CTRL</kbd>-<kbd>,</kbd> to get access to the `User Settings`.
* <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>N</kbd> to open a new instance of vscode.
* <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>T</kbd> to reopen a closed file.
* <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>X</kbd> to open the list of `Extensions`.
* <kbd>CTRL</kbd>-<kbd>B</kbd> show/hide the left side-bar (if <kbd>CTRL</kbd>-<kbd>B</kbd> isn't used like in markdown files to set in bold).
* <kbd>CTRL</kbd>-<kbd>K</kbd>-<kbd>Z</kbd> maximize the screen, aka `Zen mode`.

<!-- below, content of ./010-first-approach/030-settings/readme.md -->

### Settings {#discovering-settings}

There are two sorts of settings: `User` or `Workspace`. Remember, you can quickly access settings thanks the <kbd>CTRL</kbd>-<kbd>,</kbd shortcut.

 `User` settings are for all yours projects and stored in the `%APPDATA%\Code\User\settings.json` file.

 `Workspace` settings are the opened project and stored in the `.vscode/settings.json` file (in the project's structure).

<!-- below, content of ./010-first-approach/040-working-with-files-folders/readme.md -->

### Working with files and folders {#working-with-files}

The most efficient way to do is to use the tree-view at the left and right-click where the file/folder should be created.

Select the parent folder, right-click and select `New file` or `New folder`.

#### Keyboard shortcuts {#working-with-files-shortcuts}

* <kbd>SHIFT</kbd>-<kbd>CTRL</kbd>-<kbd>E</kbd> when a file is opened will activate the tree-view, retrieve the file and highlight it.

<!-- below, content of ./010-first-approach/050-traversal/index.md -->

### Code traversal - Navigation {#traversal}

#### Keyboard shortcuts {#traversal-shortcuts}

* <kbd>CTRL</kbd>-<kbd>P</kbd> to quick open / go to an opened file. Files are sorted in the list from the most recent till the last recent so it's easy to go back to the previously edited file.
* <kbd>CTRL</kbd>-<kbd>P</kbd>-<kbd>CTRL</kbd>-<kbd>P</kbd> to open the most recent file (the second file in the list). You can press CTRL-P again and again to go the the third, fourth, ... When you'll release keys, the selected file will be immediately open.
* <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>O</kbd> to open (browse) a symbol[^symbol] in the opened file. Navigating with the arrows will select the portion of code in the editor.
* <kbd>CTRL</kbd>-<kbd>T</kbd> to open (browse) a symbol[^symbol] in the entire project. In a markdown file, <kbd>CTRL</kbd>-<kbd>T</kbd> will display the list of every headings f.i.
* <kbd>CTRL</kbd>-<kbd>TAB</kbd> to switch between opened tabs (just like Windows and active applications).
* <kbd>CTRL</kbd>-<kbd>K</kbd>-<kbd>CTRL</kbd>-<kbd>Q</kbd> go back to the last edited line.

#### Select first {#traversal-select-first}

* Select a word, a function name, a variable, a constant then press <kbd>CTRL</kbd>-<kbd>T</kbd> to open a list where that selection can be found. For instance, by selecting a constant name and pressing <kbd>CTRL</kbd>-<kbd>T</kbd> you'll obtain the full list of files using that constant and the one who defines the constant.

<!-- below, content of ./010-first-approach/060-snippets/readme.md -->

### Snippets {#snippets}

#### Global {#snippets-global}

##### Built-in {#snippets-built-in}

Snippets are pieces of pre-programmed code (like a `try...catch...`) that allow you to generate code without typing it entirely.

Depending on the open file and its language (php, js, markdown, ...), *VSCode* will offer standard snippets and it will also be possible to program your own.

Press <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>P</kbd> to open the Palette Command then type `Insert Snippet` to get the list of already existing snippets.

##### User defined ones {#snippets-user-defined}

It is however possible to write your own snippets: press <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>P</kbd> then `Configure User Snippets`. The programming language is chosen, e.g. `PHP`, which will open an editor with, here, the open `PHP` file.

A file called `php.json` will be opened and you can start to create a snippet; f.i.:

```json
{
    "strict": {
        "prefix": "strict",
        "body": [
            "declare (strict_types = 1);",
            ""
        ],
        "description": "Add strict_types"
    }
}
```

The code here above define a snippet called `strict` and it's for a `.php` file. Open such file, start to type `stri` (you can type only a few letters) and press the <kbd>CTRL</kbd>-<kbd>space</kbd> keys. Select the snippet and press <kbd>enter</kbd>. You'll get the code defined in the `body`. It's magic.

Note: you can also desired to just press the <kbd>TAB</kbd> key. If so, check your `User Settings` and make sure the following key is well on `on`:

```json
{
    "editor.tabCompletion": "on"
}
```

The example below will add two snippets, one called `img` and the other one `url`. These snippets are for markdown files so, when adding snippets to VSCode, in the `Configure User Snippets` command, select `markdown` as language first.

```json
{
    "img": {
        "prefix": "img",
        "description": "Add an image tags",
        "body": [
            "![${1:caption}](./images/${2:image}.png)"
        ]
    },
    "url": {
        "prefix": "url",
        "description": "Add an url tags",
        "body": [
            "[${1:URL}](${1:URL})"
        ]
    }
}
```

##### Make snippets configurable {#snippets-user-placeholders}

Take a look on the following snippet and the `$1` and `$2` placeholders.

```json
{
    "var-dump": {
        "prefix": "vd",
        "body": [
            "echo '<pre>'.__METHOD__.'--'.__LINE__.'</pre>';",
            "echo '<pre>'.print_r(${1:\\$variableName}, true).'</pre>';",
            "die(${2:\"I'm dying right now\"});"
        ],
        "description": "Debug - Die and echo file/line info"
    }
}
```

Save this snippet in your editor and, in a `php` file, type `vd` followed by <kbd>CTRL</kbd>-<kbd>space</kbd>. You'll get now three new lines and the cursor will be placed where the `$1` placeholder was. Type a PHP variable and press <kbd>TAB</kbd> and see, the cursor will be now immediately put where `$2` was located. Thanks these placeholders it's easy to foresee, in a snippet, locations where you need to type dynamic content like variables, custom text, ...

Tip: use `${1:$variableName}` instead of just `$1` to show a place holder and/or a default value.

![var_dump](./010-first-approach/060-snippets/images/snippets-vd.gif)

##### Using variables

When creating a snippet, we can f.i. use the current PHP filename. Imagine you've a file name `Customer.php` and there you wish to create a new class.

The following snippet will do the magic:

```json
{
    "Class": {
        "prefix": "class",
        "body": [
            "class ${TM_FILENAME_BASE}",
            "{",
            "    return;",
            "}"
        ],
        "description": "Create a new class"
    }
}
```

The `TM_FILENAME_BASE` variable will be replaced by VS Code to the filename *(without the extension)* so we'll get a new class called `Customer`.

See all variables here: [https://code.visualstudio.com/docs/editor/userdefinedsnippets#_variables](https://code.visualstudio.com/docs/editor/userdefinedsnippets#_variables)

##### Settings {#snippets-settings}

User snippets are stored in the `%APPDATA%\code\user\snippets` folder, one `.json` file by languages.

##### Extensions {#snippets-extensions}

Also see the [snippet-creator](#extensions-snippet-creator) extension.

#### Project-based {#snippets-project-based}

You can also define your snippets for your project and not globally. You can then share snippets with your colleagues f.i.

1. In the root folder of your project, create a `.vscode` folder if not yet present;
2. Create a file with the `.code-snippets` extension like `my-project.code-snippets`;
3. You can configure your snippets there.

Below an example from this `VSCode-Tips` project:

```json
{
    "Terminal-shortcut": {
        "scope": "markdown",
        "prefix": "terminal",
        "body": [
            "`Terminal` (<kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>ù</kbd>)"
        ],
        "description": "Show Terminal keyboad Shortcuts"
    }
}
```

Now, each time I'll type `terminal` I can decide to immediately add the keyboard shortcuts; nice.

#### Generator {#snippets-generator}

If you prefer to use a generator, [https://snippet-generator.app/](https://snippet-generator.app/) can help you.

#### Video tutorial {#snippets-video}

[https://www.youtube.com/watch?v=JIqk9UxgKEc](https://www.youtube.com/watch?v=JIqk9UxgKEc)

<!-- below, content of ./010-first-approach/070-terminal/readme.md -->

### Using the built-in terminal {#terminal}

Press <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>ù</kbd> to open the built-in terminal.

Press <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>C</kbd> to open a DOS Prompt session where the current folder will be the opened project.

You can choose for a DOS terminal, Powershell or bash one. Just select the `Select Default Shell` option and VS Code will prompt which shell application should be used.

![Terminal](./010-first-approach/070-terminal/images/terminal.png)

Note: by clicking on the `+` button, we can create as many terminal we want.

#### Extensions {#terminal-extensions}

Also see the [Rerun last command](#extensions-terminal-rerun) extension.

<!-- below, content of ./010-first-approach/080-search/readme.md -->

### Search

#### Save the search

Just after having fired a search, it's possible to click on the `Open in editor` link so the result appears in the editor. The very nice thing then is to be able to see the context (i.e. xxx lines before/after the search match) and to be able to save the search as a file (the filename will be `.code-search`).

This can be useful when f.i. the search pattern is a complex regex or if working on the search result can take a long time so we can save the search as a file in the project and open it later on.

![Save search](./010-first-approach/080-search/images/save_search.png)

This video show this: [https://www.youtube.com/watch?v=zm7ZjENKUEc](https://www.youtube.com/watch?v=zm7ZjENKUEc)

<!-- below, content of ./020-working-with-code/readme.md -->

## Working with code {#working-with-code}

<!-- below, content of ./020-working-with-code/010-keyboard-shortcuts/readme.md -->

### Keyboard shortcuts {#working-with-code-shortcuts}

#### Code folding {#working-with-code-folding}

* <kbd>CTRL</kbd>-<kbd>K</kbd>-<kbd>CTRL</kbd>-<kbd>à</kbd> to collapse all functions, headings, ... The same can be obtained by <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>P</kbd> then `Fold all`.
* <kbd>CTRL</kbd>-<kbd>K</kbd>-<kbd>CTRL</kbd>-<kbd>J</kbd> to expand all functions, headings, ... The same can be obtained by <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>P</kbd> then `Unfold all`.
* <kbd>CTRL</kbd>-<kbd>K</kbd>-<kbd>CTRL</kbd>-<kbd>&</kbd> - Collapse level 1.
* <kbd>CTRL</kbd>-<kbd>K</kbd>-<kbd>CTRL</kbd>-<kbd>é</kbd> - Collapse level 2.
* <kbd>CTRL</kbd>-<kbd>K</kbd>-<kbd>CTRL</kbd>-<kbd>"</kbd> - Collapse level 3.
* <kbd>CTRL</kbd>-<kbd>K</kbd>-<kbd>CTRL</kbd>-<kbd>'</kbd> - Collapse level 4.
* <kbd>CTRL</kbd>-<kbd>K</kbd>-<kbd>CTRL</kbd>-<kbd>(</kbd> - Collapse level 5.
* <kbd>CTRL</kbd>-<kbd>K</kbd>-<kbd>CTRL</kbd>-<kbd>§</kbd> - Collapse level 6.
* <kbd>CTRL</kbd>-<kbd>K</kbd>-<kbd>CTRL</kbd>-<kbd>è</kbd> - Collapse level 7.
* <kbd>CTRL</kbd>-<kbd>K</kbd>-<kbd>CTRL</kbd>-<kbd>)</kbd> - Collapse the bloc where the cursor is located.

#### Comments {#working-with-code-comments}

Select a bloc of lines then,

* <kbd>CTRL</kbd>-<kbd>K</kbd>-<kbd>CTRL</kbd>-<kbd>C</kbd> to put that bloc in comments (add `//` in front of each line).
* <kbd>CTRL</kbd>-<kbd>K</kbd>-<kbd>CTRL</kbd>-<kbd>U</kbd> to remove the comments (remove `//` in front of each line).

<!-- below, content of ./020-working-with-code/020-integrated-git/readme.md -->

### Integrated GIT {#integrated-git}

#### Using with the terminal {#integrated-git-terminal}

Once a project has been opened, you can get access to any git command by using the terminal. Open the `Terminal` (<kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>ù</kbd>).

For instance, if the project has never been sent to git, you can initialize the repository like this:

* Open the `Terminal` (<kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>ù</kbd>). You'll be placed in the root folder of the project;
* `git init` to initialize your local repository;
* `git add .` to add all files to the staging area of your repository. Visual Studio Code will change the color of any files and folders in the tree-view to reflect that files are now in the staging area and ready to be committed;
* `git commit -m 'My initial commit'` to commit everything to the local repository. Color in the tree-view will be back in white (no more green) meaning that files are now placed in the repo.;

If you now change a file by appending a new function, removing part of the code, changing a variable, ... VSCode will display a color (green, red, ...) in the left margin of the code editor reflecting the change.

* `git status` in the `Terminal` will show the list of uncommitted changes.

Note: You can get access to any GIT command in the `Command Palette` (<kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>P</kbd>).

#### Source Control - GIT {#integrated-git-source-control}

* <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>G</kbd> will open the `Source Control: GIT` pane with the list of changes made to your source after the last `git add` command.

From there it's easy to see what files have been modified and, file by file, discard changes if you want.

#### Extensions {#integrated-git-extensions}

Also see the [Gitlens](#extensions-gitlens) extension.

<!-- below, content of ./020-working-with-code/030-code-definition/readme.md -->

### Code definition

By right-clicking on a variable, constant or method, we can get access to a few features like showing everywhere it's used.

![Go to References](./020-working-with-code/030-code-definition/images/goto-references.png)

* <kbd>SHIFT</kbd>-<kbd>F12</kbd> to show all references

In the right area of the popup, we can navigate and click to see each portion of files.

Press <kbd>F12</kbd> to jump in the definition of the method: click or select a method name like in `writeLog(...)` and press <kbd>F12</kbd> once the cursor is located on `writeLog` and you'll jump in the file that implement the method, the method source code will be displayed too.

<!-- below, content of ./020-working-with-code/040-phpunit/readme.md -->

### PHP-Unit {#phpunit}

From the `Terminal` (<kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>ù</kbd>), you can directly run phpunit and the full suite of tests will be executed.

![PHP-Unit](./020-working-with-code/040-phpunit/images/phpunit.png)

#### Extensions {#phpunit-extensions}

Also see the [Better PHPUnit](#extensions-php-better-phpunit) extension.

<!-- below, content of ./020-working-with-code/045-xdebug/readme.md -->

### Using xDebug {#xdebug}

URL: [https://xdebug.org](https://xdebug.org/)

> [Tutorial](https://scotch.io/@chenster/debugging-php-in-visual-studio-code205)

#### Installation

* Open `http://localhost/?phpinfo=1` and make <kbd>CTRL</kbd>-<kbd>A</kbd>/<kbd>CTRL</kbd>-<kbd>C</kbd>
* Open `https://xdebug.org/wizard.php` and <kbd>CTRL</kbd><kbd>V</kbd> there
* Click on the `Analyse my phpinfo() output` button

Follow installation steps:

* download the suggested `.dll`,
* save the file in the mentioned location,
* edit `php.ini` and add the reference to the `.dll`
* **extra step**: add the two lines below in the `php.ini` in the `[xdebug]` section

```ini
xdebug.remote_enable = 1
xdebug.remote_autostart = 1
```

* save the file
* restart the webserver

**The two variables below are important and should be initialized to 1 otherwise xdebug will not stop the code on breakpoints.**

##### Check if xdebug is loaded

* Open `http://localhost/?phpinfo=1` once more
* Search for `xdebug`. A  **xdebug** table should be there with a lot of keys/values.

#### Visual Studio Code

Tutorial by Microsoft: `https://code.visualstudio.com/docs/editor/debugging#_launch-configurations`

* Install the [PHP Debug](https://marketplace.visualstudio.com/itemdetails?itemName=felixfbecker.php-debug) extension
* Click on the `bug` button ![Visual Studio - Debug](./020-working-with-code/045-xdebug/images/xdebug_visual_studio.png)
* Click on the ![Visual Studio - Debug](./020-working-with-code/045-xdebug/images/xdebug_visual_studio_add_configuration.png) dropdown
* Select `Add configuration` and select `PHP` as language
* A list of options can be configured, the list is here: `https://marketplace.visualstudio.com/itemdetails?itemName=felixfbecker.php-debug#supported-launch.json-settings`

##### Settings

Settings are saved in the `/.vscode/launch.json` file. A nice option is the `ignore` one who make possible to ignore certain files from a debugger perspective. Here, ask to not go into vendors scripts (and stay in our own scripts):

```json
{
    "version": "0.2.0",
    "configurations": [
        {
            "name": "Listen for XDebug",
            "type": "php",
            "request": "launch",
            "port": 9000,
            "ignore": [
                "**/vendor/**/*.php"
            ]
        }
    ]
}
```

##### Use inside vscode

Open your PHP file and add breakpoints. To do so, click on the line in your code where you want that the browser needs to stop and click on the `Debug` menu then click on `Toggle breakpoint`. A red bullet will appear near the line number:

![Red bullet](./020-working-with-code/045-xdebug/images/xdebug_visual_studio_breakpoints.png)

Then, once your breakpoints are in place, click on the `Debug` menu and click then on `Start Debugging`. You'll see an orange panel like the following one:

![xDebug is running](./020-working-with-code/045-xdebug/images/xdebug_visual_studio_is_running.png)

You'll also have a new toolbar:

![xDebug toolbar](./020-working-with-code/045-xdebug/images/xdebug_visual_studio_buttons.png)

Now, go back to your web browser and refresh your URL without any change; if your breakpoints are correctly initialized, the browser will be on *pause* and Visual Studio Code will activate the first met breakpoint.

![xDebug has stopped the execution](./020-working-with-code/045-xdebug/images/xdebug_visual_studio_debugging.png)

Use <kbd>F10</kbd> to go to the next instruction or <kbd>F11</kbd> to set into the next instruction (if the instruction is a function, go inside the function).

##### Breakpoint

By adding a breakpoint, it's possible to edit it and set a condition.

![Conditional breakpoint](./020-working-with-code/045-xdebug/images/conditional_breakpoint.gif)

##### Logpoint

Instead of writing here and there `echo '...';` or `console.log(...);` statements, VS Code can do it for us:

![Add a logpoint](./020-working-with-code/045-xdebug/images/logpoint.gif)

<!-- below, content of ./020-working-with-code/050-php-formatting/readme.md -->

### PHP Formatting {#php-formatting}

If you already have installed [PHP intelephense](#extensions-php-intelephense), you can retrieve a `Format Document` command in the `Command Palette` (<kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>P</kbd>) but you can't really configure the rules (how the formatting should be done, tabs or spaces, removed unused classes, ...) and for this reason it's probably best to install [PHP-CS-FIXER]](#extensions-php-cs-fixer).

Once installed, php-cs-fixer will add command like `Fix this file` (<kbd>ALT</kbd>-<kbd>SHIFT</kbd>-<kbd>F</kbd>).

php-cs-fixer can be configured globally (in the `User Settings` (<kbd>CTRL</kbd>-<kbd>,</kbd>)) or for the Workspace (in this case, create or edit the `/.vscode/settings.json` file in your project).

```json
{
    "php-cs-fixer.executablePath": "php-cs-fixer",
    "php-cs-fixer.executablePathWindows": "",
    "php-cs-fixer.onsave": false,
    "php-cs-fixer.rules": "@PSR2",
    "php-cs-fixer.config": ".php_cs;.php_cs.dist",
    "php-cs-fixer.allowRisky": false,
    "php-cs-fixer.pathMode": "override",
    "php-cs-fixer.exclude": [],
    "php-cs-fixer.autoFixByBracket": true,
    "php-cs-fixer.autoFixBySemicolon": false,
    "php-cs-fixer.formatHtml": false,
    "php-cs-fixer.documentFormattingProvider": true
}
```

By creating a `.php-cs` file in your root folder, php-cs-fixer will apply rules defined in that file.

<!-- below, content of ./020-working-with-code/060-multiple-cursors/readme.md -->

### Multiple cursors {#multiple-cursors}

VSCode supports multiple cursors: click here and there and there but just press the <kbd>CTRL</kbd> key after the first click.

You'll then have more than one cursor and starting type will do it in any places where a cursor was displayed.

For instance, you've a list of public functions, click before each `p` of public functions, press the delete key to remove the `public` word, it'll be done for all functions at a time and type now `private`.

You can also have an enumeration list, one word on each line. Click before each letter and then type `*` to add a bullet before each item.

Really convenient.

The <kbd>CTRL</kbd>-<kbd>D</kbd> shortcut will select the next occurrence: double-click on, f.i., the `public` word to select the first occurrence. Press <kbd>CTRL</kbd>-<kbd>D</kbd> to select the second, the third, and so on. Press <kbd>CTRL</kbd>-<kbd>D</kbd> again and again to select all occurrences. Then type `private` f.i. to overwrite selections and replace by the new word.

I's not really like a `Search` and `Replace all` since here we can decide how many occurrences we wish to replace. It's more interactive.

<!-- below, content of ./020-working-with-code/070-navigate-problems/readme.md -->

### Navigate between problems

The list of problems detected by VS Code is displayed in a tab at the bottom of the screen, below the main editor.

You can see the list of problems and navigate between each of them by just pressing <kbd>F8</kbd>.

<!-- below, content of ./030-refactoring/readme.md -->

<!-- below, content of ./030-refactoring/010-rename/readme.md -->

### Rename all

1. Select the text to rename like a variable name.
2. Once selected, press <kbd>CTRL</kbd>-<kbd>F2</kbd>. All occurrences of that text will be selected.
3. Type the new value.

![Rename All](./030-refactoring/010-rename/images/rename.gif)

<!-- below, content of ./060-settings/readme.md -->

## Some settings {#settings}

<!-- below, content of ./060-settings/editor/readme.md -->

### Editor settings {#settings-editor}

Adapts the size of the font used:

```json
{
    "editor.fontSize": 18
}
```

Format the code during a copy/paste:

```json
{
    "editor.formatOnPaste": true
}
```

Format the code when saving:

```json
{
    "editor.formatOnSave": true
}
```

Indentation: tabs or spaces? `true` for spaces, `false` for tabs:

```json
{
    "editor.insertSpaces": false
}
```

Stop displaying the list of open files (top left):

```json
{
    "explorer.openEditors.visible": 0
}
```

Display a grayed out "dot" to make spaces visible:

```json
{
    "editor.renderWhitespace": "all",
}
```

When using snippets, pressing the Tab key will activate the conversion from the shortcut to the content of the snippet:

```json
{
    "editor.tabCompletion": true
}
```

Spécifie la taille d'une tabulation :

```json
{
    "editor.tabSize": 3
}
```

<!-- below, content of ./060-settings/files/readme.md -->

### Files settings {#settings-files}

Associating certain extensions with programming languages:

```json
{
    "files.associations": {
        ".frm": "html",
        ".php-cs": "php"
    }
}
```

Specifies the default language for new :

```json
{
    "files.defaultLanguage": "PHP"
}
```

Specifies the default format for CRLF (Windows) or LF (Unix) files:

```json
{
    "files.eol": "\n"
}
```

If you don't want to see certain files / folders in your :

```json
{
    "files.exclude": {
        "**/.DS_Store": true,
        "**/.git": true,
        "**/.hg": true,
        "**/.svn": true,
        "**/CVS": true,
        "**/libs/**": true
    }
}
```

<!-- below, content of ./060-settings/search/redme.md -->

### Search settings {#settings-search}

If you want the search feature to ignore certain files / folders :

```json
{
    "search.exclude": {
        "**/bower_components": true,
        "**/node_modules": true,
        "**/libs/**": true
    }
}
```

<!-- below, content of ./060-settings/telemetry/readme.md -->

### Telemetry settings {#settings-telemetry}

Disables telemetry to Microsoft:

```json
{
    "telemetry.enableCrashReporter": false,
    "telemetry.enableTelemetry": false
}
```

<!-- below, content of ./060-settings/window/readme.md -->

### Window settings {#settings-window}

When you open a file and then open another one without modifying the first one, the editor will open the second file in the same tab; the first file will then be closed.

If you want to open each time in a new tab, you have to adapt the parameter below:

```json
{
    "window.openFilesInNewWindow": "on"
}
```

Changes the zoom level:

```json
{
    "window.zoomLevel": 5
}
```

<!-- below, content of ./060-settings/workbench/readme.md -->

### Workbench settings {#settings-workbench}

Don't display the vertical menu bar on the left side which includes icons for files, search, Git, ...:

```json
{
    "workbench.activityBar.visible": false
}
```

Stop displaying the status bar that appears at the bottom of the screen :

```json
{
    "workbench.statusBar.visible": false
}
```

<!-- below, content of ./070-extensions/readme.md -->

## Extensions {#extensions}

Some extensions that will be useful for any PHP developer.

Note: to get the list of already installed extensions, press <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>X</kbd> and type `@installed` in the text box to get the list.

<!-- below, content of ./070-extensions/core/readme.md -->

### Extend core features of Visual Studio Code {#extensions-core}

<!-- below, content of ./070-extensions/core/active_file/readme.md -->

#### Active File In StatusBar {#extensions-active-file-statusbar}

> [https://marketplace.visualstudio.com/items?itemName=RoscoP.ActiveFileInStatusBar](https://marketplace.visualstudio.com/items?itemName=RoscoP.ActiveFileInStatusBar)

Displays the full name of the file being edited at the bottom of the screen and allows, for example, to copy/paste its name by clicking on it.

![Active file in status bar](./070-extensions/core/active_file/images/ActiveFileInStatusBar.gif)

<!-- below, content of ./070-extensions/core/autofold/readme.md -->

#### Autofold {#extensions-autofold}

> [https://marketplace.visualstudio.com/items?itemName=bobmagicii.autofoldyeah](https://marketplace.visualstudio.com/items?itemName=bobmagicii.autofoldyeah)

By opening a file, the autofold extension can automatically collapse docblocks, functions, ...

The level (collapse all, from the second, third, ... level) can be configured for each file extension separately.

Here is a sample: by opening that source file, comment's and function's code is collapse automatically, we've directly a better view on what that file is doing.

![Autofold](./070-extensions/core/autofold/images/autofold.png)

<!-- below, content of ./070-extensions/core/better-comments/readme.md -->

#### Better comments {#extensions-better-comments}

> [https://marketplace.visualstudio.com/items?itemName=aaron-bond.better-comments](https://marketplace.visualstudio.com/items?itemName=aaron-bond.better-comments)

The Better Comments extension will help you create more human-friendly comments in your code.

![Better comments](./070-extensions/core/better-comments/images/better-comments.png)

<!-- below, content of ./070-extensions/core/bookmarks/readme.md -->

#### Bookmarks {#extensions-bookmarks}

> [https://marketplace.visualstudio.com/items?itemName=alefragnani.Bookmarks](https://marketplace.visualstudio.com/items?itemName=alefragnani.Bookmarks)

Allows you to put files in a Bookmark folder, displayed in the icon bar on the left. This allows you to jump very quickly to a file, to a specific line (which would have been bookmarked).

<!-- below, content of ./070-extensions/core/bracket-pair-colorizer/readme.md -->

#### Bracket Pair Colorizer {#extensions-bracket-pair-colorizer}

> [https://marketplace.visualstudio.com/items?itemName=CoenraadS.bracket-pair-colorizer](https://marketplace.visualstudio.com/items?itemName=CoenraadS.bracket-pair-colorizer)

Uses different colors in the editor to properly identify brackets and opening / closing braces.

![Bracket Pair Colorizer](./070-extensions/core/bracket-pair-colorizer/images/example.png)

<!-- below, content of ./070-extensions/core/change-case/readme.md -->

#### Change case {#extensions-change-case}

> [https://marketplace.visualstudio.com/items?itemName=wmaurer.change-case](https://marketplace.visualstudio.com/items?itemName=wmaurer.change-case)

Easily change the case of variable names; like switching to pascal case, camelCase, CONSTANT, ...

![Change case](./070-extensions/core/change-case/images/change-case.gif)

<!-- below, content of ./070-extensions/core/code-spell-checker/readme.md -->

#### Code Spell Checker {#extensions-code-spell-checker}

> [https://marketplace.visualstudio.com/items?itemName=streetsidesoftware.code-spell-checker](https://marketplace.visualstudio.com/items?itemName=streetsidesoftware.code-spell-checker)

A basic spell checker that works well with camelCase code.

The goal of this spell checker is to help catch common spelling errors while keeping the number of false positives low.

![Code Spell Checker](./070-extensions/core/code-spell-checker/images/example.gif)

<!-- below, content of ./070-extensions/core/editorconfig/readme.md -->

#### EditorConfig {#extensions-editorconfig}

> [https://github.com/editorconfig/editorconfig-vscode](https://github.com/editorconfig/editorconfig-vscode)

EditorConfig extension for Visual Studio Code [https://editorconfig.org/](https://editorconfig.org/)

<!-- below, content of ./070-extensions/core/favorites/readme.md -->

#### Favorites {#extensions-favorites}

> [https://marketplace.visualstudio.com/items?itemName=kdcro101.favorites](https://marketplace.visualstudio.com/items?itemName=kdcro101.favorites)

Allows you to group shortcuts to files that, for example, you often have to open.

![Favorites](./070-extensions/core/favorites/images/favorites.jpg)

<!-- below, content of ./070-extensions/core/gitlens/readme.md -->

#### Gitlens {#extensions-gitlens}

> [https://github.com/eamodio/vscode-gitlens](https://github.com/eamodio/vscode-gitlens)

Supercharge the Git capabilities built into Visual Studio Code — Visualize code authorship at a glance via Git blame annotations and code lens, seamlessly navigate and explore Git repositories, gain valuable insights via powerful comparison commands, and so much more

![GitLens](./070-extensions/core/gitlens/images/gitlens-preview.gif)

<!-- below, content of ./070-extensions/core/google-translate/readme.md -->

#### Vscode Google Translate {#extensions-google-translate}

> [https://marketplace.visualstudio.com/items?itemName=funkyremi.vscode-google-translate](https://marketplace.visualstudio.com/items?itemName=funkyremi.vscode-google-translate)

Quickly translate text right in your code.

![Translate](./070-extensions/core/google-translate/images/translate.gif)

##### Configuration

By setting your preferred language, you'll not be prompted each time about the target language.

```json
{
    "vscodeGoogleTranslate.preferredLanguage": "fr",
}
```

Also, it's best to assign keyboard shortcut like <kbd>ALT</kbd>-<kbd>SHIFT</kbd>-<kbd>T</kbd> to translate the text.

```json
{
    "key": "shift+alt+t",
    "command": "extension.translateTextPreferred"
}
```

<!-- below, content of ./070-extensions/core/highlight/readme.md -->

#### Colouring of source codes according to the language {#extensions-highlight}

<!-- below, content of ./070-extensions/core/highlight/apache/readme.md -->

##### Apache configuration file {#highlight-apache}

> [https://marketplace.visualstudio.com/items?itemName=mrmlnc.vscode-apache](https://marketplace.visualstudio.com/items?itemName=mrmlnc.vscode-apache)

Support (coloring) Apache files such as `.htaccess`, `.htpasswd`, `.conf` and `.htgroups`.

![Apache coloring](./070-extensions/core/highlight/apache/images/apache.png)

<!-- below, content of ./070-extensions/core/highlight/log-file-highlighter/readme.md -->

##### Log File Highlighter {#extensions_log-file-highlighter}

> [https://marketplace.visualstudio.com/items?itemName=emilast.LogFileHighlighter](https://marketplace.visualstudio.com/items?itemName=emilast.LogFileHighlighter)

Log file highlight.

![logfile_highlight.png](./070-extensions/core/highlight/log-file-highlighter/images/logfile_highlight.png)

<!-- below, content of ./070-extensions/core/prettier-vscode/readme.md -->

#### Prettier {#extensions-prettier-vscode}

> [https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode)

Prettier is an opinionated code formatter. It enforces a consistent style by parsing your code and re-printing it with its own rules that take the maximum line length into account, wrapping code when necessary.

<!-- below, content of ./070-extensions/core/project-manager/readme.md -->

#### Project Manager {#extensions-project-manager}

> [https://marketplace.visualstudio.com/items?itemName=alefragnani.project-manager](https://marketplace.visualstudio.com/items?itemName=alefragnani.project-manager)

Easily switch between projects.

![Project Manager](./070-extensions/core/project-manager/images/project-manager-list-sort-by-name.png)

<!-- below, content of ./070-extensions/core/rerun-last-command/readme.md -->

#### Rerun the last command {#extensions-terminal-rerun}

[https://marketplace.visualstudio.com/items?itemName=Cameron.rerun-last-command](https://marketplace.visualstudio.com/items?itemName=Cameron.rerun-last-command)

Quickly repeat the last command in your terminal without leaving the text editor.

Just press <kbd>CTRL</kbd>-<kbd>F7</kbd> to rerun it.

![Rerun last command](./070-extensions/core/rerun-last-command/images/demo.gif)

<!-- below, content of ./070-extensions/core/rest-client/readme.md -->

#### REST client {#extensions-rest-client}

> [https://marketplace.visualstudio.com/items?itemName=humao.rest-client](https://marketplace.visualstudio.com/items?itemName=humao.rest-client)

Make easy to debug JSON API without leaving the IDE.

<!-- below, content of ./070-extensions/core/select-highlight-minimap/readme.md -->

#### Select highlight in minimap {#extensions-select-highlight-minimap}

> [https://marketplace.visualstudio.com/items?itemName=mde.select-highlight-minimap](https://marketplace.visualstudio.com/items?itemName=mde.select-highlight-minimap)

Highlights the selected code (e.g. a function name) in the minimap so that you can quickly identify where in the currently edited file the same function is called.

![Select highlight in minimap](./070-extensions/core/select-highlight-minimap/images/ide.png)

<!-- below, content of ./070-extensions/core/snippet-creator/readme.md -->

#### Snippet-creator {#extensions-snippet-creator}

The [snippet-creator](https://marketplace.visualstudio.com/items?itemName=nikitaKunevich.snippet-creator) extension simplifies the creation of a snippet from existing code. Simply select the code already present in a file and then do a <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>P</kbd>, type `Create Snippet` to call the wizard.

*Note: the extension is actually deprecated (may 2020).*

<!-- below, content of ./070-extensions/core/sort-lines/readme.md -->

#### Sort lines {#extensions-sort-lines}

> [https://marketplace.visualstudio.com/items?itemName=Tyriar.sort-lines](https://marketplace.visualstudio.com/items?itemName=Tyriar.sort-lines)

Sorts lines of text.

![Sort lines](./070-extensions/core/sort-lines/images/usage-animation.gif)

<!-- below, content of ./070-extensions/core/surround/readme.md -->

#### Surround {#extensions-surround}

> [https://marketplace.visualstudio.com/items?itemName=yatki.vscode-surround](https://marketplace.visualstudio.com/items?itemName=yatki.vscode-surround)

On sélectionne un bloc de lignes de code puis, grâce à Surround, on peut l'inclure dans un `if/else`, `try/catch`, ... L'outil fait lui-même l'indentation du code.

![VS Code - Surround](./070-extensions/core/surround/images/demo.gif)

<!-- below, content of ./070-extensions/core/Syncing/readme.md -->

#### Syncing {#extensions-syncing}

> [https://marketplace.visualstudio.com/items?itemName=nonoroazoro.syncing](https://marketplace.visualstudio.com/items?itemName=nonoroazoro.syncing)

Synchronize all of your VSCode settings across multiple devices.

<!-- below, content of ./070-extensions/core/todo-tree/readme.md -->

#### Todo Tree {#extensions-todo-tree}

> [https://marketplace.visualstudio.com/items?itemName=Gruntfuggly.todo-tree](https://marketplace.visualstudio.com/items?itemName=Gruntfuggly.todo-tree)

Displays an icon on the left side of the screen, in the form of a tree, which allows you to find, in one place, the list of TODOs that you have to make, i.e. comments beginning with `// TODO` that have been encoded in the source files.

![Todo Tree](./070-extensions/core/todo-tree/images/screenshot.png)

<!-- below, content of ./070-extensions/core/vscode-icons/readme.md -->

#### vscode-icons {#extensions-vscode-icons}

> [https://marketplace.visualstudio.com/items?itemName=robertohuertasm.vscode-icons](https://marketplace.visualstudio.com/items?itemName=robertohuertasm.vscode-icons)

Adapt the tree-view with the list of files to use an icon associated to the type of file (css, html, php, ...)

![VS Code Icons](./070-extensions/core/vscode-icons/images/screenshot.gif)

<!-- below, content of ./070-extensions/javascript/readme.md -->

### Javascript {#extensions-javascript}

<!-- below, content of ./070-extensions/javascript/eslint/readme.md -->

#### ESLint {#extensions-eslint}

> [https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint](https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint)

Javascript linter

<!-- below, content of ./070-extensions/markdown/readme.md -->

### Markdown {#extensions-markdown}

<!-- below, content of ./070-extensions/markdown/markdown-all-in-one/readme.md -->

#### Markdown All in One {#extensions-markdown-all-in-one}

> [https://marketplace.visualstudio.com/items?itemName=yzhang.markdown-all-in-one](https://marketplace.visualstudio.com/items?itemName=yzhang.markdown-all-in-one)

Implements keyboard shortcuts for the Markdown language, allows the generation of tables of contents, preview, ...

<!-- below, content of ./070-extensions/markdown/markdown-lint/readme.md -->

#### Markdownlint {#extensions-markdownlint}

* [https://github.com/DavidAnson/vscode-markdownlint](https://github.com/DavidAnson/vscode-markdownlint)

##### Configuration {#extensions-markdownlint-configuration}

You can configure markdownlint to ignore some files or some rules.

The list of rules can be retrieved from [https://github.com/DavidAnson/markdownlint/blob/master/doc/Rules.md](https://github.com/DavidAnson/markdownlint/blob/master/doc/Rules.md).

To ignore f.i. rules `MD033` and `MD041`, just add the following configuration in your `settings.json` file:

```json
{
    "markdownlint.config": {
        "MD033": false,
        "MD041": false
    }
}
```

To ignore files use the `ignore` key:

```json
{
    "markdownlint.config": {
        "ignore": [
            "!**/History.md"
        ]
    }
}
```

Set your custom rules:

```json
{
    "markdownlint.customRules": [
        "C:\\Christophe\\.config\\.markdownlint.json"
    ]
}
```

<!-- below, content of ./070-extensions/php/readme.md -->

### PHP {#extensions-php}

<!-- below, content of ./070-extensions/php/better-phpunit/readme.md -->

#### Better PHPUnit {#extensions-php-better-phpunit}

> [https://github.com/calebporzio/better-phpunit](https://github.com/calebporzio/better-phpunit)

Better PHPUnit is the most popular, cleanest, and fastest PHPUnit runner for VS Code.

![Better PHPUnit](./070-extensions/php/better-phpunit/images/demo.gif)

##### Configure

Make sure to edit the `Workspace` settings and add these two keys:

{
  "better-phpunit.phpunitBinary": "c:\\your_project\\vendor\\bin\\phpunit.bat",
  "better-phpunit.xmlConfigFilepath": "c:\\your_project\\phpunit.xml"
}

Should be the absolute path to the `phpunit.bat` file and your `phpunit.xml` configuration file.

##### Run a test method

* Place your cursor in/on the method you want to run
* <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>P</kbd> to open the `Command Palette`
* Select: `Better PHPUnit: run` (<kbd>CTRL</kbd>-<kbd>K</kbd>-<kbd>CTRL</kbd>-<kbd>R</kbd>)

##### Run a test file

* <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>P</kbd> to open the `Command Palette`
* Select: `Better PHPUnit: run-file` (<kbd>CTRL</kbd>-<kbd>K</kbd>-<kbd>CTRL</kbd>-<kbd>F</kbd>)

##### Run the entire suite

* <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>P</kbd> to open the `Command Palette`
* Select: `Better PHPUnit: run suite`

##### Run the previous test

* <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>P</kbd> to open the `Command Palette`
* Select: `Better PHPUnit: run previous` (<kbd>CTRL</kbd>-<kbd>K</kbd>-<kbd>CTRL</kbd>-<kbd>P</kbd>)

<!-- below, content of ./070-extensions/php/code-runner/readme.md -->

#### Code-runner {#extensions-php-better-phpunit}

> [https://github.com/formulahendry/vscode-code-runner](https://github.com/formulahendry/vscode-code-runner)

With code-runner, open a PHP file and just run it from within vscode. Usefull to run samples scripts f.i.

##### Configuration

Be sure to enable the `fileDirectoryAsCwd` setting. This will force `code-runner` to run the script by first setting the current directory to the one of the PHP file. Needed to make sure your require (like your autoloader) statements can retrieve files.

{
    "code-runner.clearPreviousOutput": true,
    "code-runner.defaultLanguage": "php",
    "code-runner.enableAppInsights": false,
    "code-runner.fileDirectoryAsCwd": true
}

<!-- below, content of ./070-extensions/php/intelephense/readme.md -->

#### PHP intelephense {#extensions-php-intelephense}

> [https://github.com/bmewburn/vscode-intelephense](https://github.com/bmewburn/vscode-intelephense)

##### Configuration {#extensions-php-intelephense-configuration}

After installation, we need to disable the built-in PHP feature of VSCode.

1. Go to the extensions tab (<kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>X</kbd>)
2. Search for `@builtin php`
3. Select `PHP Language Features`
4. Disable it.

<!-- below, content of ./070-extensions/php/laravel-blade/readme.md -->

#### Laravel Blade Snippets {#extensions-laravel-blade}

> [https://marketplace.visualstudio.com/items?itemName=onecentlin.laravel-blade](https://marketplace.visualstudio.com/items?itemName=onecentlin.laravel-blade)

Helper for working with Laravel Blade templates.

<!-- below, content of ./070-extensions/php/php-cs-fixer/readme.md -->

#### PHP-CS-FIXER {#extensions-php-cs-fixer}

> [https://marketplace.visualstudio.com/items?itemName=junstyle.php-cs-fixer](https://marketplace.visualstudio.com/items?itemName=junstyle.php-cs-fixer)

Automatic correction of the quality of PHP code formatting thanks to quality standards (e.g. PSR2), which can be overloaded through a configuration file.

Once installed, go to the `Command Palette` (<kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>P</kbd>) and select `php-cs-fixer: fix this file` to correctly format the file.

Note: you can add PHP-CS-FIXER as a global dependency (thus for all your projects) by running `composer require friendsofphp/php-cs-fixer global` on the command line.

php-cs-fixer is using a `.php-cs` file for his configuration; there are a lot of items that can be configured. See [https://github.com/FriendsOfPHP/PHP-CS-Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) for more information's.

<!-- below, content of ./070-extensions/php/php-docblocker/readme.md -->

#### PHP DocBlocker {#extensions-php-docblocker}

> [https://marketplace.visualstudio.com/items?itemName=neilbrayfield.php-docblocker](https://marketplace.visualstudio.com/items?itemName=neilbrayfield.php-docblocker)

Allows to generate documentation blocks of classes, methods, ...

<!-- below, content of ./070-extensions/php/php-extension-pack/reame.md -->

#### PHP Extension Pack {#extensions-php-extension-pack}

> [https://marketplace.visualstudio.com/items?itemName=felixfbecker.php-pack](https://marketplace.visualstudio.com/items?itemName=felixfbecker.php-pack)

Includes the most important extensions to get you started with PHP development in Visual Studio Code.

<!-- below, content of ./070-extensions/php/php-intellisense/readme.md -->

#### PHP IntelliSense {#extensions-php-intellisense}

> [https://marketplace.visualstudio.com/items?itemName=felixfbecker.php-intellisense](https://marketplace.visualstudio.com/items?itemName=felixfbecker.php-intellisense)

Advanced PHP IntelliSense for Visual Studio Code.

![PHP IntelliSense](./070-extensions/php/php-intellisense/images/signatureHelp.gif)

<!-- below, content of ./080-tips/readme.md -->

## Tips

<!-- below, content of ./080-tips/editorconfig/readme.md -->

### editorconfig

> [https://editorconfig.org](https://editorconfig.org)

Just place a file like the one below in your project folder or **any parent folder**. The file should be named `.editorconfig`.

There is **nothing** to do in VSCode except installing the [extension](https://marketplace.visualstudio.com/items?itemName=EditorConfig.EditorConfig). There is no settings... The extension will automatically check for the presence of the `.editorconfig` file in the project folder or any parent folder. If a file is found, if the `root = true` line is in it, the extension knows that this is the final file.

So we can have a file in our project folder without the root statement for overriding some features and a global file in the parent folder.

```text
# http://editorconfig.org/

# top-most EditorConfig file
root = true

[*]
charset = utf-8
indent_style = spaces
indent_size = 4
end_of_line = lf
trim_trailing_whitespace = true
insert_final_newline = true

[*.md]
trim_trailing_whitespace = false

[*.Markdown]
trim_trailing_whitespace = false
```

<!-- below, content of ./080-tips/interface/readme.md -->

### Interface

<!-- below, content of ./080-tips/interface/colors/readme.md -->

#### Use color to identify projects

Colors have to be set in the `.vscode/settings.json` file in the project root folder; example:

```json
{
    "workbench.colorCustomizations": {
        "titleBar.activeBackground": "#f3a2bc",
        "titleBar.inactiveBackground": "#FF2CCC",
        "titleBar.activeForeground": "#0e0b0b",
        "titleBar.inactiveForeground": "#FFF000"
    }
}
```

To open that settings file, just go to your `Workspace settings` page.

![Interface colors](./080-tips/interface/colors/images/interface_colors.png)

Tips:

* Install [Peacock](https://marketplace.visualstudio.com/items?itemName=johnpapa.vscode-peacock) to make changes easily. Peacock will use some default schemas or allow to choose a random one.
* you can use a tool like [https://contrastchecker.com/](https://contrastchecker.com/) to find a good contrast schema.
* You can also deeper in the configuration of the editor; please take a look to [https://code.visualstudio.com/api/references/theme-color](https://code.visualstudio.com/api/references/theme-color)

Happy coloring 😉

<!-- below, content of ./080-tips/keyboard_shortcuts/readme.md -->

### Keyboard shortcuts for Windows

Cheat sheet for Windows users: [https://code.visualstudio.com/shortcuts/keyboard-shortcuts-windows.pdf](https://code.visualstudio.com/shortcuts/keyboard-shortcuts-windows.pdf)

<!-- below, content of ./080-tips/regex/readme.md -->

### Search and replace - Regex

#### Remove all empty lines

> [https://dev.to/gyurisc/easily-remove-empty-lines-using-regular-expression-in-visual-studio-code-1230](https://dev.to/gyurisc/easily-remove-empty-lines-using-regular-expression-in-visual-studio-code-1230)

* Search `^(?:[\t]*(?:\r?\n|\r))+`
* Replace by *let this field empty*

![Remove all empty lines](./080-tips/regex/images/replace_empty_lines.png)

<!-- below, content of ./080-tips/tasks/readme.md -->

### Custom tasks

> [https://code.visualstudio.com/docs/editor/tasks](https://code.visualstudio.com/docs/editor/tasks)
>
> [https://code.visualstudio.com/docs/editor/variables-reference](https://code.visualstudio.com/docs/editor/variables-reference)

By creating a  `./.vscode/tasks.json`, it's possible to add custom tasks to Visual Studio Code.

A custom task can be running PHP Unit tests or any other shell commands.

The following example define a task called `concat-md`, it's a shell command (i.e. a DOS task).

```json
{
    "version": "2.0.0",
    "tasks": [
        {
            "label": "concat-md",
            "type": "shell",
            "command": "${workspaceFolder}/concat-md.cmd",
            "group": "build",
            "presentation": {
                "reveal": "always"
            },
            "problemMatcher": []
        }
    ]
}
```

Note: `${workspaceFolder}` has been used instead of just `./concat-md.cmd` to make sure vscode will use the file from the repo's root folder.

To run that task, we just need to call the `Command Palette` (<kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>P</kbd>) then select `Tasks: Run task`. You'll then be prompted to select the task and `concat-md` will appear.

All your custom tasks will be accessible in the `Tasks: Run task` list.

Tip: it's possible to specify more than one command using the `&&` syntax; f.i. `"command": "cd tests/ && run_all.cmd",`

![Running the pre-commit custom task](./080-tips/tasks/images/pre-commit.gif)

<!-- below, content of ./090-troubleshooting/readme.md -->

## Troubleshooting {#troubleshooting}

<!-- below, content of ./090-troubleshooting/Intelephense/readme.md -->

### Intelephense {#troubleshooting-intelephense}

In order to avoid errors with `Intelephense` like `Undefined function xxx` (f.i. `trim`) or `Undefined type xxx` (f.i. `stdClass`) for core PHP features, make sure to specify in your `settings.json`  file the correct PHP version you're using.

```json
"intelephense.environment.phpVersion": "7.4.4"
```

That version should match the one you've defined in the `PHPBIN` environment variable:

![PHPBIN](./090-troubleshooting/Intelephense/images/phpbin.png)

<!-- below, content of ./090-troubleshooting/phan/readme.md -->

### Phan {#troubleshooting-phan}

Make sure to specify in your `settings.json` file the PHP version you're using:

```json
"phan.phpExecutablePath": ""C:\\wamp64\\bin\\php\\php7.4.4\\php.exe"
```

That version should match the one you've defined in the `PHPBIN` environment variable:

![PHPBIN](./090-troubleshooting/phan/images/phpbin.png)

<!-- below, content of ./090-troubleshooting/php-cs-fixer/readme.md -->

### PHP-CS-FIXER {#troubleshooting-php-cs-fixer}

#### PHP General Error {#troubleshooting-php-cs-fixer-php-general-error}

By calling a PHP-CS-FIXER function like running `Fix this file` (<kbd>ALT</kbd>-<kbd>SHIFT</kbd>-<kbd>F</kbd>), you can get the following error:

![PHP General Error](./090-troubleshooting/php-cs-fixer/images/php-general-error.png)

To get more information, make sure to display the `Developer Tools` (<kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>I</kbd>) in the `Help` menu. You'll get there extra information's.

![Console](./090-troubleshooting/php-cs-fixer/images/console.png)

As we can see here above, our PHP-CS-FIXER needs to be updated: we're using a more recent version of PHP and the maximum supported by the current PHP-CS-FIXER installed version is an old one.

<!-- below, content of ./100-create-own-extension/readme.md -->

## Create your own extension {#own-extension}

> [https://www.youtube.com/watch?v=srwsnNhiqv8](https://www.youtube.com/watch?v=srwsnNhiqv8)
>
> [https://code.visualstudio.com/api/get-started/your-first-extension](https://code.visualstudio.com/api/get-started/your-first-extension)

It's quite easy to create his own extension by the use of `Yo Code - Extension Generator`.

The [YouTube video](https://www.youtube.com/watch?v=srwsnNhiqv8) is showing how to create a snippet extension. Really easy!

<!-- below, content of ./800-bookmarks/readme.md -->

## Bookmarks

List of nice website for learning VS Code.

<!-- below, content of ./800-bookmarks/vscode-can-do-that/readme.md -->

### VS Code can do that

All the best things about Visual Studio Code that nobody ever bothered to tell you.

>[https://vscodecandothat.com/](https://vscodecandothat.com/)

<!-- below, content of ./800-bookmarks/vscode-youtube/readme.md -->

### VS Code channel on youtube

> [https://www.youtube.com/channel/UCs5Y5_7XK8HLDX0SLNwkd3w](https://www.youtube.com/channel/UCs5Y5_7XK8HLDX0SLNwkd3w)

<!-- below, content of ./999-license/readme.md -->

## License

[MIT](/blob/master/LICENSE)

<!-- below, content of ./includes/footnotes.md -->

[^symbol]: A symbol is the name of a constant, of a function, part of a title (for a markdown document f.i.), ... You can get access to symbols of an opened file by using the <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>O</kbd> keyboard shortcut.
