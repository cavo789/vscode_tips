# Regions

`Regions` are a very smart features to make code editing more readable.

Consider the following function:

```php
<!-- concat-md::include "./files/regions.php" -->
```

Your function is, logically, divided into three parts; the first to do checks, the second to do the job and the third to prepare the return data.

Using `regions` inside your function make the code's logic really easy to understand.

![Working with regions](./images/regions.gif)

A very languages didn't support regions, this is the case for `.env` (aka `dotenv`) files. In that case, you can use this addon: [https://github.com/maptz/maptz.vscode.extensions.customfolding](https://github.com/maptz/maptz.vscode.extensions.customfolding).

And now, you can add your own settings like this:

```json
<!-- concat-md::include "./files/maptz.json" -->
```
