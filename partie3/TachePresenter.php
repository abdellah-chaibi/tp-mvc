<?php
class TachePresenter {
  function __construct(
    private TacheViewInterface $vue,
    private TacheModelMemoire $modele
  ) {}

  function onAjouter(string $titre): void {
    // TODO 10 : si le titre (après trim) est vide, appeler
    //           $this->vue->afficherErreur('Titre vide') et s'arrêter ;
    //           sinon ajouter au modèle puis appeler
    //           $this->vue->afficherTaches($this->modele->tout()).
  }
}
