# Using xDebug {#xdebug}

URL: [https://xdebug.org](https://xdebug.org/)

> [Tutorial](https://scotch.io/@chenster/debugging-php-in-visual-studio-code205)

## Installation

* Open `http://localhost/?phpinfo=1` and make <kbd>CTRL</kbd>-<kbd>A</kbd>/<kbd>CTRL</kbd>-<kbd>C</kbd>
* Open `https://xdebug.org/wizard.php` and <kbd>CTRL</kbd><kbd>V</kbd> there
* Click on the `Analyze my phpinfo() output` button

Follow installation steps:

* download the suggested `.dll`,
* save the file in the mentioned location,
* edit `php.ini` and add the reference to the `.dll`
* **extra step**: add the two lines below in the `php.ini` in the `[xdebug]` section

```ini
<!-- concat-md::include "./files/xdebug.ini" -->
```

* save the file
* restart the webserver

**The two variables below are important and should be initialized to 1 otherwise xdebug will not stop the code on breakpoints.**

### Check if xdebug is loaded

* Open `http://localhost/?phpinfo=1` once more
* Search for `xdebug`. A  **xdebug** table should be there with a lot of keys/values.

## Visual Studio Code

Tutorial by Microsoft: `https://code.visualstudio.com/docs/editor/debugging#_launch-configurations`

* Install the [PHP Debug](https://marketplace.visualstudio.com/itemdetails?itemName=felixfbecker.php-debug) extension
* Click on the `bug` button ![Visual Studio - Debug](./images/xdebug_visual_studio.png)
* Click on the ![Visual Studio - Debug](./images/xdebug_visual_studio_add_configuration.png) dropdown
* Select `Add configuration` and select `PHP` as language
* A list of options can be configured, the list is here: `https://marketplace.visualstudio.com/itemdetails?itemName=felixfbecker.php-debug#supported-launch.json-settings`

### Settings

Settings are saved in the `/.vscode/launch.json` file. A nice option is the `ignore` one who makes possible to ignore certain files from a debugger perspective. Here, ask not to go into vendors scripts (and stay in our own scripts):

```json
<!-- concat-md::include "./files/launch.json" -->
```

Notes:

* `ignore` is used to indicate to vscode to not stop on any error, exceptions, ... that can be retrieved in specific files or folders. If you're using dependencies, it's a good idea to not stop in files under the `vendor/` folder. Also, if you're using `.phar` archives for instance (let's say in folder `bin/`, it's also a good idea to ignore that folder / files),
* `internalConsoleOptions` will allow to immediately open the debug console in a new terminal, pretty easy.

The list of all settings can be retrieved here: [https://code.visualstudio.com/docs/editor/debugging#_launchjson-attributes](https://code.visualstudio.com/docs/editor/debugging#_launchjson-attributes).

### Use inside vscode

Open your PHP file and add breakpoints. To do so, click on the line in your code where you want the browser to need to stop and click on the `Debug` menu then click on `Toggle breakpoint`. A red bullet will appear near the line number:

![Red bullet](./images/xdebug_visual_studio_breakpoints.png)

Then, once your breakpoints are in place, click on the `Debug` menu and click then on `Start Debugging`. You'll see an orange panel like the following one:

![xDebug is running](./images/xdebug_visual_studio_is_running.png)

You'll also have a new toolbar:

![xDebug toolbar](./images/xdebug_visual_studio_buttons.png)

Now, go back to your web browser and refresh your URL without any change; if your breakpoints are correctly initialized, the browser will be on *pause* and Visual Studio Code will activate the first met breakpoint.

![xDebug has stopped the execution](./images/xdebug_visual_studio_debugging.png)

Use <kbd>F10</kbd> to go to the next instruction or <kbd>F11</kbd> to set into the next instruction (if the instruction is a function, go inside the function).

### Breakpoint

By adding a breakpoint, it's possible to edit it and set a condition.

![Conditional breakpoint](./images/conditional_breakpoint.gif)

### Logpoint

Instead of writing here and there `echo '...';` or `console.log(...);` statements, VS Code can do it for us:

![Add a logpoint](./images/logpoint.gif)

### Debug keyboard shortcuts

* Show the Run pane (that pane contains all your variables so you can see, at runtime, their values): <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>D</kbd>
* Toggle breakpoint: <kbd>F9</kbd>
* Step Info: <kbd>F11</kbd>
* Start / Continue: <kbd>F5</kbd>

### Also read

You can find more information on this repository, from Microsoft: [https://github.com/Microsoft/vscode-recipes/tree/master/PHP](https://github.com/Microsoft/vscode-recipes/tree/master/PHP)
