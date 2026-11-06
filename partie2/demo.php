<?php
// Lancer : php partie2/demo.php
require __DIR__ . '/TacheModelObservable.php';
require __DIR__ . '/ListeView.php';
require __DIR__ . '/CompteurView.php';

$m = new TacheModelObservable();
$m->attach(new ListeView());
// TODO 9 : attacher aussi un CompteurView
$m->attach(new CompteurView());
$m->ajouter('Réviser MVC');
$m->ajouter('Faire le TP');
