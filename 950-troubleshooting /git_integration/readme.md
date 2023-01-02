# Git integration is no more working under WSL

The problem: vscode is showing `No source control providers registered` in the `Source control` tab (<kbd>CTRL</kbd>+<kbd>SHIFT</kbd>+<kbd>G</kbd>) even though it is a git project and you've well a `.git` folder in your directory.

Due to that problem, vscode won't recognize your project as a git one and you don't have any versioning.

Reasons can be multiple but make sure that the `Git` core extension is well enabled. Show the list of extensions  (<kbd>CTRL</kbd>+<kbd>SHIFT</kbd>+<kbd>X</kbd>) and type `@builtin git` in the `Search` bar. Make sure `Git` and `Git Base` are enabled.

When I had the `No source control providers registered` problem, `Git` was disabled and it was purely impossible to enable it. The description page of `Git` was saying `This extension is disabled in this workspace because it is defined to run in the Remote Extension Host. Please install the extension in 'WSL: Ubuntu-20.04' to enable` and impossible to really understand what to do.

The solution: it was given here: [https://stackoverflow.com/a/69131127/1065340](https://stackoverflow.com/a/69131127/1065340). After an uninstallation of Visual Studio Code, I've start a command prompt in Linux, in my Ubuntu distribution, go to my home profile (i.e. `cd ~`) and there, I've removed (in fact, renamed) all my `.vscode-xxx` folders (I had `.vscode-remote-containers`, `.vscode-server` and `.vscode-server-server`).

Then, I've reinstalled Visual Studio Code and, finally, running `code .` from the Linux console.  Linux was reinstalling the vscode-server.

Once vscode was started and my project opened, this time, the git extension was well enabled and versioning was finally supported back. 


