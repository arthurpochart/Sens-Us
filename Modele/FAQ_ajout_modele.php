<?php

function FAQ_ajout_modele($db)
{
    $insererQuestionReponse = $db->prepare('INSERT INTO faq(Question, Reponse) VALUES(:question, :reponse)');
    $insererQuestionReponse->bindParam("question", $_POST['question']);
    $insererQuestionReponse->bindParam("reponse", $_POST['reponse']);
    $insererQuestionReponse->execute();
    $insererQuestionReponse->closeCursor();
}
