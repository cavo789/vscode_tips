---
title: "Visual Studio Code Tip - Keyboard shortcuts"
subtitle: "Technical documentation"
date: "2019-01-17"
keywords: [vscode]
subject: "Visual Studio Code Tip"
language: "fr"
---
# Visual Studio Code Tip - Keyboard shortcuts

* [Code folding / collapse](#code-folding--collapse)
* [Alt-Shift](#alt-shift)
* [Alt](#alt)
* [Ctrl-Alt-Shift](#ctrl-alt-shift)
* [Ctrl-Shift](#ctrl-shift)
* [Ctrl](#ctrl)

Lire bien plus : [https://github.com/Microsoft/vscode-tips-and-tricks](https://github.com/Microsoft/vscode-tips-and-tricks)

Lorsqu'on connaît déjà les raccourcis clavier d'un d'autre éditeur (p.ex. _Atom_), on peut importer cette configuration dans _VSCode_. Il existe une multitude d'extensions de type `keymap` (comme `Atom keymap`, `Sublime Text keymap`, ...).

> Après avoir installé le keymap pour [Atom](https://marketplace.visualstudio.com/items?itemName=ms-vscode.atom-keybindings)

## Code folding / collapse

- Dans p.ex. un fichier Markdown, HTML, PHP, ..., pour n'afficher que le premier niveau des blocs (p.ex. juste les titres `#`de premier niveau dans markdown), il faut faire ans <kbd>CTRL</kbd>-<kbd>K</kbd> puis <kbd>CTRL</kbd>-<kbd>0</kbd> (ce qui correspond à un collapse all)
- Pour le contraire, ce sera <kbd>CTRL</kbd>-<kbd>K<//kbd> puis <kbd>CTRL</kbd>-<kbd>J</kbd> (expand all)

## Alt-Shift

- <kbd>ALT</kbd>-<kbd>SHIFT</kbd>-<kbd>F</kbd> - `Code formatting` - Formate le code source pour respecter un standard comme PSR2 (c'est défini au travers d'un fichier .php-cs, voir [cette note](http://localhost:8080/notes/docs/Development/Web/Visual%20Studio%20Code/php-cs-fixer.html))

## Alt

- <kbd>ALT</kbd>-<kbd>F12</kbd> - `Peek` - Affiche dans un popup l'entête de la méthode; sans déplacer le curseur. Pratique pour voir, p.ex., à quoi correspondent les différents paramètres d'appel ou lire le bloc de commentaires.

![](https://raw.githubusercontent.com/Microsoft/vscode-tips-and-tricks/master/media/peek.gif)

## Ctrl-Alt-Shift

- <kbd>CTRL</kbd>-<kbd>ALT</kbd>-<kbd>SHIFT</kbd>-<kbd>)</kbd> – `Code folding` - Ferme chaque bloc de code
- <kbd>CTRL</kbd>-<kbd>ALT</kbd>-<kbd>SHIFT</kbd>-<kbd>^</kbd> - `Code unfold` - Ouvre tous les blocs de code

## Ctrl-Shift

- <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>X</kbd> - Affiche la liste des extensions

- <kbd>CTRL</kbd>-<kbd>SHIFT</kbd>-<kbd>P</kbd> - Affiche la palette de commandes

![ctrl-shift-p](https://raw.githubusercontent.com/Microsoft/vscode-tips-and-tricks/master/media/OpenCommandPalatte.gif)

## Ctrl

- <kbd>CTRL</kbd>-<kbd>-</kbd> - `Toggle comment` - Met en commentaire / rétire les commentaires pour le bloc de lignes de code sélectionné.

- <kbd>CTRL</kbd>-<kbd>K</kbd>-<kbd>CTRL</kbd>-<kbd>S</kbd> - Affiche la liste des raccourcis clavier (aussi au format PDF sur [https://code.visualstudio.com/shortcuts/keyboard-shortcuts-windows.pdf](https://code.visualstudio.com/shortcuts/keyboard-shortcuts-windows.pdf))

- <kbd>CTRL</kbd>-<kbd>,</kbd> - Affiche l'écran des settings permettant de configurer l'interface et toutes les extensions

* <kbd>CTRL</kbd>-<kbd>P</kbd> - Ouverture rapide d'un fichier

![](https://raw.githubusercontent.com/Microsoft/vscode-tips-and-tricks/master/media/QuickOpen.gif)

- <kbd>CTRL</kbd>-<kbd>\`</kbd> - Affiche / Masque la liste des fichiers (`Toggle sidebar`) qui se trouve à gauche, donne donc plus d'espace au code source

![](https://raw.githubusercontent.com/Microsoft/vscode-tips-and-tricks/master/media/toggle_side_bar.gif)

- <kbd>CTRL</kbd>-<kbd>K</kbd>-<kbd>Z</kbd> - `Zen mode` - Ce mode permet d'afficher le code source en pleine page; pratique si l'on doit rétro-projeter l'écran de l'éditeur mode présentation

![Mode zen](https://raw.githubusercontent.com/Microsoft/vscode-tips-and-tricks/master/media/zen_mode.gif)
