# Extensions {#extensions}

Some extensions that will be useful for any PHP developer.

## Unneeded extensions

Unneeded because vscode can do the same natively... After each names here below, the setting to enable in VSCode, somes are already enabled by default:

* [Auto Close Tag](https://marketplace.visualstudio.com/items?itemName=formulahendry.auto-close-tag)
    * `"html.autoClosingTags": true,`
    * `"javascript.autoClosingTags": true,`
    * `"typescript.autoClosingTags": true`
* [Auto Import](https://marketplace.visualstudio.com/items?itemName=steoates.autoimport)
    * `"javascript.suggest.autoImports": true,`
    * `"typescript.suggest.autoImports": true,`
    * `"javascript.updateImportsOnFileMove.enabled": "always",`
    * `"typescript.updateImportsOnFileMove.enabled": "always",`
* [Auto Rename Tag](https://marketplace.visualstudio.com/items?itemName=formulahendry.auto-rename-tag)
    * `"editor.renameOnType":true`
* [Settings Sync](https://marketplace.visualstudio.com/items?itemName=Shan.code-settings-sync)
    * See [https://code.visualstudio.com/updates/v1_48#_settings-sync](https://code.visualstudio.com/updates/v1_48#_settings-sync)

## Get the list of all installed extensions {extensions-list-extensions}

You can use vscode on the command line with the `--list-extensions` option to retrieve the list of all installed extensions.

Open a DOS Prompt Session and run `code --list-extensions`. You'll get a list like below:

```text
aaron-bond.better-comments
alefragnani.Bookmarks
bajdzis.vscode-twig-pack
bmewburn.vscode-intelephense-client
bobmagicii.autofoldyeah
calebporzio.better-phpunit
...
```

By running a `Windows Powershell` prompt, you can quickly generate a list of vscode instructions to install all these extensions. Start `Windows Powershell` and run the following command:

```powershell
code --list-extensions | % { "code --install-extension $_" }
```

You'll get a list like below:

```text
code --install-extension aaron-bond.better-comments
code --install-extension alefragnani.Bookmarks
code --install-extension bajdzis.vscode-twig-pack
code --install-extension bmewburn.vscode-intelephense-client
code --install-extension bobmagicii.autofoldyeah
code --install-extension calebporzio.better-phpunit
...
```

![List of all installed extensions](./images/code-list-extensions.png)

Just copy/paste the full output and, f.i. send it by mail to someone. He'll just need to paste the list in a DOS Prompt Session to install them.
