<?php
// Modèle en mémoire : suffisant pour tester le Presenter
class TacheModelMemoire {
  private array $taches = [];
  function ajouter(string $titre): void { $this->taches[] = $titre; }
  function tout(): array { return $this->taches; }
}
