# vscode configuration

VScode stores his settings, for your project, in the `.vscode` folder in your project's root directory.

If you don't have that folder, just create it.

## Suggest a list of extensions to install for your project

Just create a file called `extensions.json` in the `.vscode` folder. In that file, copy/paste something like this:

```json
{
    "recommendations": [
        "aaron-bond.better-comments",
        "bmewburn.vscode-intelephense-client",
        "eamodio.gitlens",
        "gruntfuggly.todo-tree",
        "mikestead.dotenv",
        "ms-azuretools.vscode-docker",
        "ms-vscode-remote.remote-containers",
        "ms-vscode-remote.remote-wsl",
        "neilbrayfield.php-docblocker",
        "xdebug.php-debug",
        "zobo.php-intellisense"
    ]
}
```

From now, everyone who'll open your project **for the first time** will get a popup "Do you want to install recommended extensions for this project?". More information at [https://code.visualstudio.com/docs/editor/extension-marketplace#_workspace-recommended-extensions](https://code.visualstudio.com/docs/editor/extension-marketplace#_workspace-recommended-extensions)
