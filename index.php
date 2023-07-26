<?php
require_once('utils/loadClass.php');

$qcm = new Qcm();
$question1 = new Question('POO signifie :');
$question1->addAnswer(new Answer('Php Orienté Objet', false));
$question1->addAnswer(new Answer('ProgrammatiOn Orientée
Outil', false));
$question1->addAnswer(new Answer('Programmation Orientée Objet', true));
$question1->addAnswer(new Answer('Papillon Onirique Ostentatoire', false));
$question1->setExplanation('Sans commentaires si vous avez eufaux :-°', false);
var_dump($question1);

// $qcm->addQuestion($question1);
// $qcm->generate();

