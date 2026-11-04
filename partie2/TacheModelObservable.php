<?php
// Modèle observable (en mémoire) : implémente SplSubject
class TacheModelObservable implements SplSubject {
  private SplObjectStorage $obs;
  private array $taches = [];

  function __construct() {
    $this->obs = new SplObjectStorage();
  }

  function attach(SplObserver $o): void { $this->obs->attach($o); }
  function detach(SplObserver $o): void { $this->obs->detach($o); }

  function notify(): void {
    foreach ($this->obs as $o) {
      $o->update($this);
    }
  }

  function ajouter(string $titre): void {
    $this->taches[] = $titre;
    // TODO 7 : prévenir les observateurs (une seule ligne)
  }

  function etat(): array { return $this->taches; }
}
