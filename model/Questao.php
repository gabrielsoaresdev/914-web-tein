<?php
class Questao {
    private $idParticipante;
    private $numeroQuestao;
    private $acertou;
    private $tempoSegundos;

    function __construct($idParticipante, $numeroQuestao, $acertou, $tempoSegundos) {
        $this->idParticipante = $idParticipante;
        $this->numeroQuestao = $numeroQuestao;
        $this->acertou = $acertou;
        $this->tempoSegundos = $tempoSegundos;
    }
    
    function getIdParticipante() {
        return $this->idParticipante;
    }

    function getNumeroQuestao() {
        return $this->numeroQuestao;
    }

    function getAcertou() {
        return $this->acertou;
    }

    function getTempoSegundos() {
        return $this->tempoSegundos;
    }

    function setIdParticipante($idParticipante) {
        $this->idParticipante = $idParticipante;
    }

    function setNumeroQuestao($numeroQuestao) {
        $this->numeroQuestao = $numeroQuestao;
    }

    function setAcertou($acertou) {
        $this->acertou = $acertou;
    }

    function setTempoSegundos($tempoSegundos) {
        $this->tempoSegundos = $tempoSegundos;
    }
}
?>