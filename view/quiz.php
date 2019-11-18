<?php
require_once '../model/Participante.php';
require_once '../controller/ParticipanteController.php';

$participante = new Participante(0, $_POST['idade'], $_POST['peso'],
        $_POST['freq'], $_POST['altura'], $_POST['curso'], $_POST['nivel']);

if($participante == null)
    header('Location: ./index.php');
else {
    $controller = new ParticipanteController();
    $controller->cadastrar($participante);
    $participante->setId($controller->getLastId());
}
?>