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
}
