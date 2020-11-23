# Integrated GIT {#integrated-git}

## Using with the terminal {#integrated-git-terminal}

Once a project has been opened, you can get access to any git command by using the terminal. Open the `Terminal` (<kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>ù</kbd>).

For instance, if the project has never been sent to git, you can initialize the repository like this:

* Open the `Terminal` (<kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>ù</kbd>). You'll be placed in the root folder of the project;
* `git init` to initialize your local repository;
* `git add .` to add all files to the staging area of your repository. Visual Studio Code will change the color of any files and folders in the tree-view to reflect that files are now in the staging area and ready to be committed;
* `git commit -m 'My initial commit'` to commit everything to the local repository. Color in the tree-view will be back in white (no greener) meaning that files are now placed in the repo.;

If you now change a file by appending a new function, removing part of the code, changing a variable, ... VSCode will display a color (green, red, ...) in the left margin of the code editor reflecting the change.

* `git status` in the `Terminal` will show the list of uncommitted changes.

Note: You can get access to any GIT command in the `Command Palette` (<kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>P</kbd>).

## Source Control - GIT {#integrated-git-source-control}

* <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>G</kbd> will open the `Source Control: GIT` pane with the list of changes made to your source after the last `git add` command.

From there it's easy to see what files have been modified and, file by file, discard changes if you want.

## Extensions {#integrated-git-extensions}

Also see the [Gitlens](#extensions-gitlens) extension.
