# editorconfig

> [https://editorconfig.org](https://editorconfig.org)

Just place a file like the one below in your project folder or **any parent folder**. The file should be named `.editorconfig`.

There is **nothing** to do in VSCode except installing the [extension](https://marketplace.visualstudio.com/items?itemName=EditorConfig.EditorConfig). There is no settings... The extension will automatically check for the presence of the `.editorconfig` file in the project folder or any parent folder. If a file is found, if the `root = true` line is in it, the extension knows that this is the final file.

So we can have a file in our project folder without the root statement for overriding some features and a global file in the parent folder.

```text
<!-- concat-md::include "./files/.editorconfig" -->
```
