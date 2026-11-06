<?php
class TacheModel
{
  private PDO $db;

  function __construct()
  {
    $this->db = Database::pdo();
  }

  function tout(): array
  {
    return $this->db
      ->query('SELECT id, titre FROM tache ORDER BY id')
      ->fetchAll();
  }

  function ajouter(string $titre): void
  {
    $stmt = $this->db->prepare('INSERT INTO tache (titre) VALUES (?)');
    $stmt->execute([$titre]);
  }

  function supprimer(int $id): void
  {
    $stmt = $this->db->prepare('DELETE FROM tache WHERE id = ?');
    $stmt->execute([$id]);

  }
}
