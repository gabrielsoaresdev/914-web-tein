<?php

require_once '../model/ParticipanteDAO.php';
require_once '../model/Participante.php';
class ParticipanteController {
    private $dao;
    
    function __construct() {
        $this->dao = new ParticipanteDAO();   
    }
    
    function cadastrar(Participante $participante) {
        $this->dao->insert($participante);
    }
    
    function getLastId() {
        return $this->dao->selectMaxId();
    }
    
    function getParticipante($id) {
        return $this->dao->selectParticipanteById($id);
    }

    function updateTempo($id, $tempo) {
        return $this->dao->updateTempo($id, $tempo);
    }

    
    function updateAcertos($id, $acertos) {
        return $this->dao->updateQntQuestoes($id, $acertos);
    }
}

if(isset($_POST['q1'], $_POST['q2'], $_POST['q3'], $_POST['q4'])) {
    $controller = new ParticipanteController();
    $controller->updateTempo($_POST['id'], $_POST['tempo']);
    $acertos = 0;
    for($i = 1; $i < 4; $i++) {
        if($_POST['q'.$i] == true) {
            $acertos++;
        }
    }
    $controller->updateAcertos($_POST['id'], $acertos);
}