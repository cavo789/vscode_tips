# Search and replace - Regex

## Remove all empty lines

> [https://dev.to/gyurisc/easily-remove-empty-lines-using-regular-expression-in-visual-studio-code-1230](https://dev.to/gyurisc/easily-remove-empty-lines-using-regular-expression-in-visual-studio-code-1230)

* Search `^(?:[\t]*(?:\r?\n|\r))+`
* Replace by *let this field empty*

![Remove all empty lines](./images/replace_empty_lines.png)
