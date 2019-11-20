<?php 
//header("Content-Type: application/csv");
//header("Content-Disposition: attachment;Filename=frequenciaacertos.csv");
require_once '../controller/ParticipanteController.php';

$controller = new ParticipanteController();
$participantes = $controller->buscarAcertosEFrequenciaCardiaca();

$delimiter = ";";
$filename = "dados.csv";

$f = fopen('php://memory', 'w');

$fields = array('BPM', 'Acertos', 'Tempo');
fputcsv($f, $fields, $delimiter);

foreach($participantes as $p) {
    $lineData = array($p->getFrequenciaCardiaca(), $p->getAcertos(), $p->getTempo());
    fputcsv($f, $lineData, $delimiter);
}

fseek($f, 0);

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '";');
fpassthru($f);


?>