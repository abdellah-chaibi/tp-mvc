# TP MVC : flux et variantes (1 h)

Prérequis : PHP 8.1 ou plus avec l'extension pdo_sqlite (vérifier : `php -m | grep -i sqlite`).

## Partie 1 : MVC passif (application web)
    php -S localhost:8000 -t public public/index.php
Ouvrir http://localhost:8000 . Compléter TODO 1 à 6.

## Partie 2 : MVC actif (Observer, en console)
    php partie2/demo.php
Compléter TODO 7 à 9.

## Partie 3 : MVP (Presenter testé sans navigateur)
    php partie3/test.php
    php partie3/demo.php
Compléter TODO 10 : les 6 tests doivent passer.
