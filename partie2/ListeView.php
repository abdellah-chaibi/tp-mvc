<?php
class ListeView implements SplObserver {
  function update(SplSubject $m): void {
    echo "-- Liste mise à jour --\n";
    foreach ($m->etat() as $i => $t) {
      echo ($i + 1) . ". $t\n";
    }
  }
}
