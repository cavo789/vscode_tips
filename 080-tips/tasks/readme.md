# Custom tasks

> [https://code.visualstudio.com/docs/editor/tasks](https://code.visualstudio.com/docs/editor/tasks)
> 
> [https://code.visualstudio.com/docs/editor/variables-reference](https://code.visualstudio.com/docs/editor/variables-reference)

By creating a  `./.vscode/tasks.json`, it's possible to add custom tasks to Visual Studio Code.

A custom task can be running PHP Unit tests or any other shell commands.

The following example define a task called `concat-md`, it's a shell command (i.e. a DOS task).

```json
<!-- concat-md::include "./files/tasks.json" -->
```

Note: `${workspaceFolder}` has been used instead of just `./concat-md.cmd` to make sure vscode will use the file from the repo's root folder.

To run that task, we just need to call the `Command Palette` (<kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>P</kbd>) then select `Tasks: Run task`. You'll then be prompted to select the task and `concat-md` will appear.

All your custom tasks will be accessible in the `Tasks: Run task` list.
