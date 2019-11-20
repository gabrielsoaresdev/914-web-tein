<?php
require_once 'Participante.php';

class ParticipanteDAO {
    private $conexao;

    function __construct() {
        $this->conexao = new PDO('mysql:host=localhost;dbname=db_webquiz', 'root', '');
    }

    function insert(Participante $participante) {
        $stmt = $this->conexao->prepare("INSERT INTO participantes (id, idade, "
                . "peso, freq_cardiaca_bpm, altura, curso, nivel) "
                . "VALUES (:a, :i, :p, :f, :h, :c, :n)");

        $stmt->bindValue(":a", $participante->getId());
        $stmt->bindValue(":i", $participante->getIdade());
        $stmt->bindValue(":p", $participante->getPeso());
        $stmt->bindValue(":f", $participante->getFrequenciaCardiaca());
        $stmt->bindValue(":h", $participante->getAltura());
        $stmt->bindValue(":c", $participante->getCurso());
        $stmt->bindValue(":n", $participante->getNivel());
        
        return $stmt->execute();
    }
    
    function selectMaxId() {
        $stmt = $this->conexao->prepare("SELECT MAX(id) as 'id' FROM participantes");
        $stmt->execute();
        if($row = $stmt->fetch())
            return $row['id'];
        else
            return 0;
    }
    
    function selectParticipanteById() {
        $stmt = $this->conexao->prepare("SELECT * FROM participantes");
        $stmt->execute();
        if($row = $stmt->fetch())
            return new Participante($row['id'], $row['idade'], $row['peso'],
                    $row['freq_cardiaca_bpm'], $row['altura'], $row['curso'],
                    $row['nivel'], $row['qnt_questoes'], $row['tempo_sec']);
        else
            return null;
    }

    function updateTempo($id, $tempo) {
        $stmt = $this->conexao->prepare("UPDATE participantes SET tempo_sec = :t WHERE id = :i");
        $stmt ->bindValue(":t", $tempo);
        $stmt ->bindValue(":i", $id);
        $stmt->execute();
    }

    function updateQntQuestoes($id, $acerto) {
        $stmt = $this->conexao->prepare("UPDATE participantes SET qnt_questoes = :a WHERE id = :i");
        $stmt ->bindValue(":a", $acerto);
        $stmt ->bindValue(":i", $id);
        $stmt->execute();
    }
    
    function selectAcertosAndFrequencia() {
        $stmt = $this->conexao->prepare("SELECT freq_cardiaca_bpm, qnt_questoes, tempo_sec "
                . "FROM participantes WHERE qnt_questoes != 0 AND tempo_sec != 0");
        $stmt->execute();
        $participantes = array();
        while($row = $stmt->fetch())
            array_push ($participantes, new Participante(0, 0, 0,
                    $row['freq_cardiaca_bpm'], 0, 0, 0, $row['qnt_questoes'], 0, $row['tempo_sec']));
        return $participantes;
    }
}
?>