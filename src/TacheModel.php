<?php
class TacheModel {
  private PDO $db;

  function __construct() {
    $this->db = Database::pdo();
  }

  function tout(): array {
    return $this->db
      ->query('SELECT id, titre FROM tache ORDER BY id')
      ->fetchAll();
  }

  function ajouter(string $titre): void {
    // TODO 2 : insérer le titre dans la table tache
    //          (requête préparée : INSERT INTO tache(titre) VALUES(?))
  }

  function supprimer(int $id): void {
    // TODO 3 : supprimer la tâche dont l'id est $id
    //          (requête préparée : DELETE FROM tache WHERE id = ?)
  }
}
