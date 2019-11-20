<?php
class Participante {
    private $id;
    private $idade;
    private $peso;
    private $frequenciaCardiaca;
    private $altura;
    private $curso;
    private $nivel;
    private $acertos;
    private $tempo;
    function __construct($id, $idade, $peso, $frequenciaCardiaca, 
            $altura, $curso, $nivel, $acertos, $tempo) {
        $this->id = $id;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->frequenciaCardiaca = $frequenciaCardiaca;
        $this->altura = $altura;
        $this->curso = $curso;
        $this->nivel = $nivel;
        $this->acertos = $acertos;
        $this->tempo = $tempo;
    }

    function getId() {
        return $this->id;
    }

    function getIdade() {
        return $this->idade;
    }

    function getPeso() {
        return $this->peso;
    }

    function getFrequenciaCardiaca() {
        return $this->frequenciaCardiaca;
    }

    function getAltura() {
        return $this->altura;
    }

    function getCurso() {
        return $this->curso;
    }

    function getNivel() {
        return $this->nivel;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setPeso($peso) {
        $this->peso = $peso;
    }

    function setFrequenciaCardiaca($frequenciaCardiaca) {
        $this->frequenciaCardiaca = $frequenciaCardiaca;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }

    function setNivel($nivel) {
        $this->nivel = $nivel;
    }
    
    function getAcertos() {
        return $this->acertos;
    }

    function setAcertos($acertos) {
        $this->acertos = $acertos;
    }
    
    function getTempo() {
        return $this->tempo;
    }

    function setTempo($tempo) {
        $this->tempo = $tempo;
    }
}

?>