# Markdownlint {#extensions-markdownlint}

* [https://github.com/DavidAnson/vscode-markdownlint](https://github.com/DavidAnson/vscode-markdownlint)

## Configuration Markdownlint {#extensions-markdownlint-configuration}

You can configure markdownlint to ignore some files or some rules.

The list of rules can be retrieved from [https://github.com/DavidAnson/markdownlint/blob/master/doc/Rules.md](https://github.com/DavidAnson/markdownlint/blob/master/doc/Rules.md).

To ignore f.i. rules `MD033` and `MD041`, just add the following configuration in your `settings.json` file:

```json
<!-- concat-md::include "./files/settings_rules.json" -->
```

To ignore files use the `ignore` key:

```json
<!-- concat-md::include "./files/settings_ignore.json" -->
```

Set your custom rules:

```json
<!-- concat-md::include "./files/settings_custom_rules.json" -->
```
