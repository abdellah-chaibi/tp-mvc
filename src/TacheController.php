<?php
class TacheController {
  function index(): void {
    $m = new TacheModel();
    $taches = $m->tout();
    require __DIR__ . '/../views/liste.php';
  }

  function store(): void {
    // TODO 4 : lire et valider $_POST['titre'] (trim, non vide),
    //          appeler le modèle, puis rediriger vers /taches (Post/Redirect/Get)
  }

  function supprimer(): void {
    // TODO 5 : lire $_POST['id'] (entier > 0), appeler le modèle,
    //          puis rediriger vers /taches
  }
}
