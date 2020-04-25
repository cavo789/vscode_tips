---
title: "Visual Studio Code Tip - Navigation"
subtitle: "Technical documentation"
date: "2019-01-17"
keywords: [vscode]
subject: "Visual Studio Code Tip"
language: "fr"
---
# Visual Studio Code Tip - Navigation

## Ouverture rapide d'un fichier : CTRL-P

Avec la combinaison <kbd>CTRL</kbd>-<kbd>P</kbd> on affiche une liste des fichiers existants. Il suffit de commencer à taper un nom (p.ex. `setting`) pour que _VSCode_ affiche la liste des fichiers du projet en cours ayant ce nom. Ce moyen est bien plus rapide que de parcourir l'arborescence du projet pour retrouver le fichier.

Le treeview reprennant la liste des fichiers se positionne automatiquement sur le fichier qui vient d'être ouvert.

![ctrl-p](./images/navigation/ctrl-p.png)

## Basculer entre les fichiers ouverts : CTRL-TAB

<kbd>CTRL</kbd>-<kbd>TAB</kbd> permet d'afficher la liste des fichiers ouverts et de basculer de l'un vers l'autre.

## Au sein d'un fichier ouvert : CTRL-R

La notion de symbôles fait référence aux noms des fichiers, des variables, des classes, des fonctions, ...

Avec <kbd>CTRL</kbd>-<kbd>R</kbd>, lorsqu'un fichier est ouvert, la liste des fonctions définies, des classes, des variables du fichier sera affichée.

![symbole-php-file](./images/navigation/symbole-php-file.png)

_Pour un fichier Markdown, ce sera les différents niveaux de titre._

Si on souhaite se positionner immédiatement sur une fonction précise, après avoir appuyé sur <kbd>CTRL</kbd>-<kbd>R</kbd> on sélectionne le nom de la fonction et l'éditeur va s'y rendre immédiatement.

Si on utilise les flèches haut et bas, au niveau des fonctions, _VSCode_ va sélectionner l'entièreté de la fonction; facile pour p.ex. supprimer / copier / déplacer en bloc.

## Sauter dans une fonction, peu importe le fichier : CTRL-T

Avec <kbd>CTRL</kbd>-<kbd>T</kbd> puis suivi de <kbd>#</kbd>, on va lancer une recherche dans l'ensemble des fichiers du projet. Pour retrouver les fichiers avec une fonction nommée `reset`, il suffit donc d'introduire `#reset` pour que _VSCode_ affiche la liste des fichiers :

![symbole-jump-function](./images/navigation/symbole-jump-function.png)

## Sauter dans le corps de la fonction où se trouve le curseur : F12

Après avoir cliqué sur le nom d'une fonction, p.e. `showError`, la touche <kbd>F12</kbd> permet de se rendre dans le corps de cette fonction.
