<?php
// Vue console : même interface qu'une vue HTML ou qu'une fausse vue
class CliView implements TacheViewInterface {
  function afficherTaches(array $taches): void {
    echo "Tâches : " . implode(', ', $taches) . "\n";
  }
  function afficherErreur(string $message): void {
    echo "ERREUR : $message\n";
  }
}
