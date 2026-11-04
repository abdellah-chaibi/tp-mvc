<?php
// Charge automatiquement src/NomDeClasse.php
spl_autoload_register(function (string $classe): void {
  $fichier = __DIR__ . '/' . $classe . '.php';
  if (is_file($fichier)) {
    require $fichier;
  }
});
