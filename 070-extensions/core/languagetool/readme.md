# LanguageTool {#extensions-code-spell-checker}

> [Based on the French *Utiliser languagetool dans Visual Studio Code* article](https://blog.stephane-robert.info/post/langagetool-visual-studio-code/)

LanguageTool is an addon for vscode using a backend server we can host locally. It's a spelling and grammar tool supporting several languages like English and French but many others too. It has an auto-detect feature.

First create a new folder on your disk and put this a file called `docker-compose.yml`. Copy/paste the content below in it. This done, using a command line, run `docker compose up --detach` to download the Docker image and run the container.

You've your local backend server.

```yml
version: "3"

services:
  languagetool:
    image: erikvl87/languagetool
    container_name: LanguageTool
    restart: always
    ports:
      - 8010:8010 # Using default port from the image
    environment:
      - langtool_languageModel=/ngrams # OPTIONAL: Using ngrams data
      - Java_Xms=512m # OPTIONAL: Setting a minimal Java heap size of 512 mib
      - Java_Xmx=1g # OPTIONAL: Setting a maximum Java heap size of 1 Gib
    volumes:
      - ./ngrams:/ngrams
```

The next step is to install the `LanguageTool Linter` of David L. Day: [https://marketplace.visualstudio.com/items?itemName=davidlday.languagetool-linter](https://marketplace.visualstudio.com/items?itemName=davidlday.languagetool-linter)

Here are the settings to add to your vscode `settings.json` file:

```json
"languageToolLinter.external.url": "http://127.0.0.1:8010",
"languageToolLinter.languageTool.motherTongue": "fr",
"languageToolLinter.plainText.languageIds": [
    "plaintext",
    "markdown"
]
```

Feel free of course to add more supported `languageIds`, the full list is available at [https://code.visualstudio.com/docs/languages/identifiers#_known-language-identifiers](https://code.visualstudio.com/docs/languages/identifiers#_known-language-identifiers).
