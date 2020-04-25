<!-- This file has been generated automatically by the following script -->
<!-- C:\Christophe\Repository\writing-documentation\concat-md\concat-md.ps1 -->
<!-- So don't modify this file manually but run the tool once more instead -->

<!-- Last refresh date: 2020-04-25 11:54:56 -->

<!-- below, content of ./index.md -->

# Visual Studio Code - Tutorial

![Banner](./images/banner.png)

> Tutorial and collection of tips and tricks for Visual Studio Code

<!-- table-of-contents - start -->
* [Visual Studio Code Tip - Using xDebug](#visual-studio-code-tip-using-xdebug)
    * [Installation](#installation)
       * [Check if xdebug is loaded](#check-if-xdebug-is-loaded)
    * [Visual Studio Code](#visual-studio-code)
       * [Settings](#settings)
       * [Use inside vscode](#use-inside-vscode)
* [Tips](#tips)
    * [editorconfig](#editorconfig)
    * [Interface](#interface)
       * [Use color to identify projects](#use-color-to-identify-projects)
* [Troubleshooting](#troubleshooting)
    * [Intelephense](#intelephense)
    * [Phan](#phan)
* [License](#license)
<!-- table-of-contents - end -->

<!-- below, content of ./070-xdebug/readme.md -->

## Visual Studio Code Tip - Using xDebug

URL: [https://xdebug.org](https://xdebug.org/)

> [Tutorial](https://scotch.io/@chenster/debugging-php-in-visual-studio-code205)

### Installation

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

#### Check if xdebug is loaded

* Open `http://localhost/?phpinfo=1` once more
* Search for `xdebug`. A  **xdebug** table should be there with a lot of keys/values.

### Visual Studio Code

Tutorial by Microsoft: `https://code.visualstudio.com/docs/editor/debugging#_launch-configurations`

* Install the [PHP Debug](https://marketplace.visualstudio.com/itemdetails?itemName=felixfbecker.php-debug) extension
* Click on the `bug` button ![Visual Studio - Debug](./070-xdebug/images/xdebug_visual_studio.png)
* Click on the ![Visual Studio - Debug](./070-xdebug/images/xdebug_visual_studio_add_configuration.png) dropdown
* Select `Add configuration` and select `PHP` as language
* A list of options can be configured, the list is here: `https://marketplace.visualstudio.com/itemdetails?itemName=felixfbecker.php-debug#supported-launch.json-settings`

#### Settings

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

#### Use inside vscode

Open your PHP file and add breakpoints. To do so, click on the line in your code where you want that the browser needs to stop and click on the `Debug` menu then click on `Toggle breakpoint`. A red bullet will appear near the line number:

![Red bullet](./070-xdebug/images/xdebug_visual_studio_breakpoints.png)

Then, once your breakpoints are in place, click on the `Debug` menu and click then on `Start Debugging`. You'll see an orange panel like the following one:

![xDebug is running](./070-xdebug/images/xdebug_visual_studio_is_running.png)

You'll also have a new toolbar:

![xDebug toolbar](./070-xdebug/images/xdebug_visual_studio_buttons.png)

Now, go back to your web browser and refresh your URL without any change; if your breakpoints are correctly initialized, the browser will be on *pause* and Visual Studio Code will activate the first met breakpoint.

![xDebug has stopped the execution](./070-xdebug/images/xdebug_visual_studio_debugging.png)

Use <kbd>F10</kbd> to go to the next instruction or <kbd>F11</kbd> to set into the next instruction (if the instruction is a function, go inside the function).

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

* you can use a tool like [https://contrastchecker.com/](https://contrastchecker.com/) to find a good contrast schema.
* You can also deeper in the configuration of the editor; please take a look to [https://code.visualstudio.com/api/references/theme-color](https://code.visualstudio.com/api/references/theme-color)

Happy coloring 😉

<!-- below, content of ./090-troubleshooting/readme.md -->

## Troubleshooting

<!-- below, content of ./090-troubleshooting/Intelephense/readme.md -->

### Intelephense

In order to avoid errors with `Intelephense` like `Undefined function xxx` (f.i. `trim`) or `Undefined type xxx` (f.i. `stdClass`) for core PHP features, make sure to specify in your `settings.json`  file the correct PHP version you're using.

```json
"intelephense.environment.phpVersion": "7.4.4"
```

That version should match the one you've defined in the `PHPBIN` environment variable:

![PHPBIN](./090-troubleshooting/Intelephense/images/phpbin.png)

<!-- below, content of ./090-troubleshooting/phan/readme.md -->

### Phan

Make sure to specify in your `settings.json` file the PHP version you're using:

```json
"phan.phpExecutablePath": ""C:\\wamp64\\bin\\php\\php7.4.4\\php.exe"
```

That version should match the one you've defined in the `PHPBIN` environment variable:

![PHPBIN](./090-troubleshooting/phan/images/phpbin.png)

<!-- below, content of ./999-license/readme.md -->

## License

[MIT](./../LICENSE)
