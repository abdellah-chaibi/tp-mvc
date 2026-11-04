<?php
// Lancer : php partie3/demo.php
require __DIR__ . '/TacheViewInterface.php';
require __DIR__ . '/TacheModelMemoire.php';
require __DIR__ . '/CliView.php';
require __DIR__ . '/TachePresenter.php';

$p = new TachePresenter(new CliView(), new TacheModelMemoire());
$p->onAjouter('');
$p->onAjouter('Faire le TP');
