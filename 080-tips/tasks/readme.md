<!-- markdownlint-disable MD033 -->

# Custom tasks {#custom-tasks}

> [https://code.visualstudio.com/docs/editor/tasks](https://code.visualstudio.com/docs/editor/tasks)
>
> [https://code.visualstudio.com/docs/editor/variables-reference](https://code.visualstudio.com/docs/editor/variables-reference)

By creating a  `./.vscode/tasks.json`, it's possible to add custom tasks to Visual Studio Code.

A custom task can be running PHP Unit tests or any other shell commands.

## Run a DOS batch {#custom-tasks-batch}

The following example define a task called `concat-md`, it's a shell command (i.e. a DOS task).

```json
<!-- concat-md::include "./files/tasks.json" -->
```

Note: `${workspaceFolder}` has been used instead of just `./concat-md.cmd` to make sure vscode will use the file from the repo's root folder.

To run that task, we just need to call the `Command Palette` (<kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>P</kbd>) then select `Tasks: Run task`. You'll then be prompted to select the task and `concat-md` will appear.

All your custom tasks will be accessible in the `Tasks: Run task` list.

Tip: it's possible to specify more than one command using the `&&` syntax; f.i. `"command": "cd tests/ && run_all.cmd",`

![Running the pre-commit custom task](./images/pre-commit.gif)

## Run PHP-Unit {#custom-tasks-phpunit}

Another example can be to run PHP Unit with some command-line options.

The example below defines a `phpunit: run tests\Api` task so we can execute all tests under the `Api` folder. We can of course use any command line options supported by PHP Unit.

```json
<!-- concat-md::include "./files/phpunit.json" -->
```

Note: the `type` defined in the JSON file is `process`, this means that the defined `command` will be executed within vscode, in the `Terminal`. The process should then be an executable and any parameters have to be defined in the `args` array;
