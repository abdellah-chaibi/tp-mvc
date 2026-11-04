<?php
// Connexion PDO SQLite (fichier data/todo.sqlite créé automatiquement)
class Database {
  private static ?PDO $pdo = null;

  static function pdo(): PDO {
    if (self::$pdo === null) {
      $dir = __DIR__ . '/../data';
      if (!is_dir($dir)) {
        mkdir($dir, 0775, true);
      }
      self::$pdo = new PDO('sqlite:' . $dir . '/todo.sqlite');
      self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      self::$pdo->exec(
        'CREATE TABLE IF NOT EXISTS tache (
           id INTEGER PRIMARY KEY AUTOINCREMENT,
           titre TEXT NOT NULL
         )'
      );
    }
    return self::$pdo;
  }
}
