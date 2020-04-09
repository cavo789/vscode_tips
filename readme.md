![Banner](images/banner.jpg)

# VSCode Tricks

> Collection of tips and tricks for Visual Studio Code

* [Interface tips](#interface-tips)
  * [Use color to identify projects](#use-color-to-identify-projects)
* [Troubleshooting](#troubleshooting)
  * [Phan](#phan)
  * [Intelephense](#intelephense)
* [License](#license)

## Interface tips

### Use color to identify projects

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

![Interface colors](./images/interface_colors.png)

Tips:

* you can use a tool like [https://contrastchecker.com/](https://contrastchecker.com/) to find a good contrast schema.
* You can also deeper in the configuration of the editor; please take a look to [https://code.visualstudio.com/api/references/theme-color](https://code.visualstudio.com/api/references/theme-color)

Happy coloring 😉

## Troubleshooting

### Phan

Make sure to specify in your `settings.json` file the PHP version you're using:

```json
"phan.phpExecutablePath": ""C:\\wamp64\\bin\\php\\php7.4.4\\php.exe"
```

That version should match the one you've defined in the `PHPBIN` environment variable:

![PHPBIN](./images/phpbin.png)

### Intelephense

In order to avoid errors with `Intelephense` like `Undefined function xxx` (f.i. `trim`) or `Undefined type xxx` (f.i. `stdClass`) for core PHP features, make sure to specify in your `settings.json`  file the correct PHP version you're using.

```json
"intelephense.environment.phpVersion": "7.4.4"
```

That version should match the one you've defined in the `PHPBIN` environment variable:

![PHPBIN](./images/phpbin.png)

## License

[MIT](LICENSE)
