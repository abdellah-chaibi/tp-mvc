<?php
class TacheController
{
  function index(): void
  {
    $m = new TacheModel();
    $taches = $m->tout();
    require __DIR__ . '/../views/liste.php';
  }

  function store(): void
  {
    // TODO 4 : lire et valider $_POST['titre'] (trim, non vide),
    //          appeler le modèle, puis rediriger vers /taches (Post/Redirect/Get)
    $titre = trim($_POST['titre'] ?? '');

    if ($titre !== '') {
      $m = new TacheModel();
      $m->ajouter($titre);
    }

    header('Location: /taches');
    exit;
  }

  function supprimer(): void
  {
    // TODO 5 : lire $_POST['id'] (entier > 0), appeler le modèle,
    //          puis rediriger vers /taches
    $id = filter_var($_POST['id'] ?? null, FILTER_VALIDATE_INT);

    if ($id !== false && $id > 0) {
      $m = new TacheModel();
      $m->supprimer($id);
    }
    header('Location: /taches');
    exit;   
  }
}
