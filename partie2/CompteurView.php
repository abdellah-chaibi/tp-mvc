<?php
// TODO 8 : écrire la classe CompteurView qui implémente SplObserver.
// Sa méthode update(SplSubject $m) affiche le nombre de tâches, par exemple :
//   2 tâche(s)
class CompteurView implements SplObserver {
    public function update(SplSubject $subject) {
        // TODO 10 : afficher le nombre de tâches
        $count = count($subject->getTaches());
        echo "$count tâche(s)\n";
    }
}       