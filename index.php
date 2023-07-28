<?php
require_once('utils/loadClass.php');
require_once('utils/connexion.php');

$qcmRepo = new QcmRepository($db);
$qcm = $qcmRepo->selectQcm(1);
// $questionRepo = new QuestionRepository($db);
// $answerRepo = new answerRepository($db);


// print_r($qcmRepo->selectQcm());
// print_r($questionRepo->selectQuestion());
// print_r($answerRepo->selectAnswer());


echo $qcm->generate();





// $qcm->addQuestion($question1);
// $qcm->generate();

