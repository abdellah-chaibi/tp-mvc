<?php
class TachePresenter {
  function __construct(
    private TacheViewInterface $vue,
    private TacheModelMemoire $modele
  ) {}

  function onAjouter(string $titre): void {
    if (trim($titre) === '') {
      $this->vue->afficherErreur('Titre vide');
      return;
    }

    $this->modele->ajouter($titre);
    $this->vue->afficherTaches($this->modele->tout());
    // TODO 10 : si le titre (après trim) est vide, appeler
    //           $this->vue->afficherErreur('Titre vide') et s'arrêter ;
    //           sinon ajouter au modèle puis appeler
    //           $this->vue->afficherTaches($this->modele->tout()).
  }
}
