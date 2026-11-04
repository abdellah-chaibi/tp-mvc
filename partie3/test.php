<?php
// Lancer : php partie3/test.php
require __DIR__ . '/TacheViewInterface.php';
require __DIR__ . '/TacheModelMemoire.php';
require __DIR__ . '/FakeView.php';
require __DIR__ . '/TachePresenter.php';

$ok = 0;
$total = 0;
function verifier(string $nom, bool $condition): void {
  global $ok, $total;
  $total++;
  if ($condition) { $ok++; echo "OK     $nom\n"; }
  else { echo "ECHEC  $nom\n"; }
}

// Test 1 : titre vide => une erreur, rien d'affiché
$vue = new FakeView();
(new TachePresenter($vue, new TacheModelMemoire()))->onAjouter('');
verifier('titre vide : une erreur', $vue->erreurs === ['Titre vide']);
verifier('titre vide : aucune liste affichée', $vue->affiche === []);

// Test 2 : titre fait d'espaces => même comportement
$vue = new FakeView();
(new TachePresenter($vue, new TacheModelMemoire()))->onAjouter('   ');
verifier('espaces : une erreur', $vue->erreurs === ['Titre vide']);

// Test 3 : titre valide => liste affichée, pas d'erreur
$vue = new FakeView();
(new TachePresenter($vue, new TacheModelMemoire()))->onAjouter('Faire le TP');
verifier('titre valide : liste affichée', $vue->affiche === ['Faire le TP']);
verifier('titre valide : aucune erreur', $vue->erreurs === []);

// Test 4 : deux ajouts successifs => liste cumulée
$vue = new FakeView();
$p = new TachePresenter($vue, new TacheModelMemoire());
$p->onAjouter('A');
$p->onAjouter('B');
verifier('deux ajouts : liste cumulée', $vue->affiche === ['A', 'B']);

echo "\n$ok / $total tests réussis\n";
exit($ok === $total ? 0 : 1);
