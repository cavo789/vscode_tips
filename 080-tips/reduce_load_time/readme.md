# Reduce the load time of vscode

You've installed some addons and at given time period, you're suffering on *Damned, vscode takes a lot of time to load my project*.

Press <kbd>CTRL</kbd>-<kbd>P</kbd> to open the palette and run `Developer: Show Running Extensions`.

You'll get a screen like the one below, extensions are ordered by the slowest one.

In my case, I like to use `Compare Folders` but no so often so it's best to disabled it and enable it again only on a need base. Same for `Code Runner`. By disabling these two, I earn 4 seconds each time I start vscode a day (and I start it so much for all my projects).

![Show Running Extensions](./images/activation_time.png)

## Loading from a WSL2 prompt is slow

> [https://stackoverflow.com/questions/66310913/vscode-with-wsl2-delayed-launching-due-to-no-response-to-ping](https://stackoverflow.com/questions/66310913/vscode-with-wsl2-delayed-launching-due-to-no-response-to-ping)
> [https://github.com/microsoft/vscode-remote-release/issues/4888](https://github.com/microsoft/vscode-remote-release/issues/4888)

If, running `code .` from a WSL2 prompt is slow, try to set the `remote.WSL.server.connectThroughLocalhost` global setting to `true`.

The problem comes from an internal ping done by VSCode on the IP of your machine and in some situation like working on a virtual machine, the ping will be blocked and vscode will wait one minute before throwing a timeout.

Loosing that minute of time can be avoided thanks the `remote.WSL.server.connectThroughLocalhost` setting.
