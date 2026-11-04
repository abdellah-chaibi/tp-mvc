<?php
// public/index.php : TOUTES les requêtes passent ici (Front Controller)
require __DIR__ . '/../src/autoload.php';

$uri    = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

$routes = [
  'GET /taches'            => [TacheController::class, 'index'],
  // TODO 1 : ajouter les deux routes manquantes
  //   - POST /taches            -> TacheController::store
  //   - POST /taches/supprimer  -> TacheController::supprimer
];

// Redirige la racine vers la liste
if ($method === 'GET' && $uri === '/') {
  header('Location: /taches');
  exit;
}

$action = $routes["$method $uri"] ?? null;
if (!$action) {
  http_response_code(404);
  exit('Page introuvable');
}

[$classe, $methode] = $action;
(new $classe())->$methode();
