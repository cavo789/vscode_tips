---
title: "Visual Studio Code Tip - Settings"
subtitle: "Technical documentation"
date: "2019-01-17"
keywords: [vscode]
subject: "Visual Studio Code Tip"
language: "fr"
---
# Visual Studio Code Tip - Settings

Quelques paramètres...

* [Editor](#editor)
* [Files](#files)
* [Markdown](#markdown)
* [PHP-CS-FIXER](#php-cs-fixer)
* [Prettier](#prettier)
* [Search](#search)
  * [Telemetry](#telemetry)
* [Window](#window)
* [Workbench](#workbench)

## Editor

Désactive la demande de confirmation lorsqu'on déplace un fichier depuis le treeview :

```json
   "explorer.confirmDragAndDrop": false,
```

Adapte la taille de la police utilisée :

```json
   "editor.fontSize": 18,
```

Format le code lors d'un copy/paste :

```json
   "editor.formatOnPaste": true,
```

Format le code lors de la sauvegarde du fichier :

```json
   "editor.formatOnSave": true,
```

Indentation : tabulation ou espaces ? `true` pour opter pour des espaces, `false` pour des tabulations :

```json
   "editor.insertSpaces": false,
```

Ne plus afficher la liste des fichiers ouverts (en haut à gauche) :

```json
   "explorer.openEditors.visible": 0,
```

Afficher un "point" grisé pour rendre les espaces visible :

```json
   "editor.renderWhitespace": "all",
```

Lorsqu'on utilise des snippets, l'appui sur la touche Tabulation va activer la conversion du shortcut vers le contenu du snippet :

```json
   "editor.tabCompletion": true,
```

Spécifie la taille d'une tabulation :

```json
   "editor.tabSize": 3,
```

## Files

Associer certaines extensions à des langages de programmation :

```json
   "files.associations": {
      ".frm": "html",
      ".php-cs": "php"
   },
```

Précise le langage par défaut pour les nouveaux fichiers :

```json
   "files.defaultLanguage": "PHP",
```

Spécifie le format par défaut pour les fichiers CRLF (Windows) ou LF (Unix) :

```json
   "files.eol": "\n",
```

Si on souhaite ne pas voir certains fichiers / dossiers dans son arborescence :

```json
   "files.exclude": {
      "**/.DS_Store": true,
      "**/.git": true,
      "**/.hg": true,
      "**/.svn": true,
      "**/CVS": true,
      "**/libs/**": true
   },
```

## Markdown

Opter pour le `*` pour la mise en italique et non le `_` :

```json
   "Markdown": "*",
```

## PHP-CS-FIXER

Spécifie où se trouve le fichier qui permettra de définir les règles :

```json
   "php-cs-fixer.config": "C:\\Christophe\\Repository\\phpmenu\\.php-cs",
```

Sous Windows, définit le nom du script d'exécution pour php-cs-fixer (qui doit être installé à part; voir [cette note](http://localhost:8080/notes/docs/Development/Web/Visual%20Studio%20Code/php-cs-fixer.html)) :

```json
   "php-cs-fixer.executablePathWindows": "~/AppData/Roaming/Composer/vendor/bin/php-cs-fixer.bat",
```

(the syntax `~/AppData/Roaming/Composer/vendor/bin/php-cs-fixer.bat` allow to simulate the logged in user home folder under Windows)

Correction de la qualité de la mise en forme du code PHP lors de la sauvegarde du fichier :

```json
   "php-cs-fixer.onsave": true,
```

## Prettier

Si on a installé php-cs-fixer qui s'occupe de la mise en page du code PHP, markdownlint pour le code Markdown, ... il n'est plus nécessaire que Prettier s'en charge :

```json
   "prettier.disableLanguages": [
      "php",
      "Markdown"
   ],
```

## Search

Si on souhaite que la fonctionnalité de recherche ignore certains fichiers / dossiers :

```json
   "search.exclude": {
      "**/bower_components": true,
      "**/node_modules": true,
      "**/libs/**": true
   },
```

### Telemetry

Désactive la remontée d'information (`telemetry`) vers Microsoft :

```json
   "telemetry.enableCrashReporter": false,
   "telemetry.enableTelemetry": false,
```

## Window

Lorsqu'on ouvre un fichier puis qu'on ouvre un autre sans avoir modifié le premier, l'éditeur va ouvrir le second fichier dans le même onglet; le premier fichier sera alors fermé.

Si on souhaite à chaque fois ouvrir dans un nouvel onglet, il faut adapter le paramètre ci-dessous :

```json
   "window.openFilesInNewWindow": "on"
```

Change le niveau de zoom :

```json
   "window.zoomLevel": 5,
```

## Workbench

Ne pas afficher la barre de menu verticale à gauche qui reprends les icônes pour les fichiers, la recherche, Git, ... :

```json
   "workbench.activityBar.visible": false,
```

Ne plus afficher la barre d'état qui apparaît au bas de l'écran :

```json
   "workbench.statusBar.visible": false,
```
