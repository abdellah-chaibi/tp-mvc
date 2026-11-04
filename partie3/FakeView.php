<?php
// Fausse vue pour les tests : enregistre les appels au lieu d'afficher
class FakeView implements TacheViewInterface {
  public array $affiche = [];
  public array $erreurs = [];

  function afficherTaches(array $taches): void { $this->affiche = $taches; }
  function afficherErreur(string $message): void { $this->erreurs[] = $message; }
}
