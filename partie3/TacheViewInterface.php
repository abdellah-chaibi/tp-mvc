<?php
interface TacheViewInterface {
  function afficherTaches(array $taches): void;
  function afficherErreur(string $message): void;
}
