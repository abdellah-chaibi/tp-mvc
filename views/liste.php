<!DOCTYPE html>
<html lang="fr">
<head><meta charset="utf-8"><title>Mes tâches</title></head>
<body>
<h1>Mes tâches</h1>
<ul>
<?php /* TODO 6 : parcourir $taches avec foreach ; pour chaque tâche,
   afficher le titre (échappé avec htmlspecialchars) dans un <li>
   et un petit formulaire POST /taches/supprimer avec un champ caché "id". */ ?>
</ul>
<form method="post" action="/taches">
  <input name="titre" placeholder="Nouvelle tâche">
  <button>Ajouter</button>
</form>
</body>
</html>
