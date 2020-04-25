# Markdownlint {#extensions-markdownlint}

* [https://github.com/DavidAnson/vscode-markdownlint](https://github.com/DavidAnson/vscode-markdownlint)

## Configuration {#extensions-markdownlint-configuration}

You can configure markdownlint to ignore some files or some rules.

The list of rules can be retrieved from [https://github.com/DavidAnson/markdownlint/blob/master/doc/Rules.md](https://github.com/DavidAnson/markdownlint/blob/master/doc/Rules.md).

To ignore f.i. the rule MD041, just add the following configuration in your `settings.json` file:

<!-- concat-md::include "./files/settings_rules.json" -->

To ignore files use the `ignore` key:

<!-- concat-md::include "./files/settings_ignore.json" -->

Set your custom rules:

<!-- concat-md::include "./files/settings_custom_rules.json" -->
