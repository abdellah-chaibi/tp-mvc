<!DOCTYPE html>
<html lang="fr">
<head><meta charset="utf-8"><title>Mes tâches</title></head>
<body>
<h1>Mes tâches</h1>
<ul>
<?php /* TODO 6 : parcourir $taches avec foreach ; pour chaque tâche,
   afficher le titre (échappé avec htmlspecialchars) dans un <li>
   et un petit formulaire POST /taches/supprimer avec un champ caché "id". */ 
   
   foreach ($taches as $tache) { ?>
     <li>
       <?= htmlspecialchars($tache['titre'], ENT_QUOTES, 'UTF-8') ?>
       <form method="post" action="/taches/supprimer" style="display: inline;">
         <input type="hidden" name="id" value="<?= (int) $tache['id'] ?>">
         <button type="submit">Supprimer</button>
       </form>
     </li>
   <?php } ?> 
   
</ul>
<form method="post" action="/taches">
  <input name="titre" placeholder="Nouvelle tâche">
  <button>Ajouter</button>
</form>
</body>
</html>
