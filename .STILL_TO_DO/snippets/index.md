---
title: "Visual Studio Code Tip - Snippets"
subtitle: "Technical documentation"
date: "2019-01-17"
keywords: [vscode]
subject: "Visual Studio Code Tip"
language: "fr"
---
# Visual Studio Code Tip - Snippets

## Built-in Snippets

Les snippets sont des morceaux de code préprogrammé (comme un `try...catch...`) qui permettent de générer du code sans avoir à le taper.

Selon le fichier ouvert et le langage de celui-ci (php, js, Markdown, ...), _VSCode_ va proposer des snippets standards et il sera aussi possible de programmer les siens.

La combinaison <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>P</kbd> puis `Insert snippet` va faire apparaître une liste pour le langage de programmation du fichier édité :

![markdown](./images/snippets/markdown.png)

## User Snippets

Il est toutefois possible d'écrire ses propres snippets : <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>P</kbd> puis `Configure User Snippets`. On choisit le langage de programmation, p.ex. `JavaScript` ce qui aura pour effet d'ouvrir un éditeur avec, ici, le fichier `JavaScript` ouvert.

Exemple :

```json
{
  "Debug": {
    "prefix": "log",
    "body": [
      " /*<!-- build:debug -->*/",
      "if (marknotes.settings.debug) {",
      "   console.log('xyz');",
      "}",
      "/*<!-- endbuild -->*/"
    ]
  }
}
```

Une fois sauvé, il faut fermer _VSCode_ pour qu'il puisse alors charger le fichier. Lorsqu'on sera dans un fichier JavaScript; il suffira de taper `log` pour que l'éditeur propose le User snippet. Si on appuie sur le touche <kbd>TAB</kbd>, le prefix sera alors remplacé par le contenu (se trouvant dans le `body`).

Si <kbd>TAB</kbd> est sans effet, vérifier que le paramètre de configuration `editor.tabCompletion` est bien sur `true`.

Note : les User snippets sont stockés dans le dossier `%APPDATA%\code\user\snippets` sous la forme de fichier .json.

Astuce : l'extension [snippet-creator](https://marketplace.visualstudio.com/items?itemName=nikitaKunevich.snippet-creator) simplifie la création d'un snippet depuis un code existant. Il suffit de sélectionner le code déjà présent dans un fichier puis de faire un <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>P</kbd> `Create Snippet` pour faire appel au wizard.
