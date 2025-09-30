<?php 

$tarefas = $_POST['total-tarefas'];
$duracao = $_POST['duracao-sprint'];
$media = $_POST['media-concluidas'];
$dias = $_POST['total-dias'];
$sprintsConcluidas = 0;
$tarefasConcluidas = 0;

while ($dias >= $duracao && $tarefas > 0) {
    $dias -= $duracao;          
    $tarefas -= $media;         
    $sprintsConcluidas++;       
    $tarefasConcluidas += $media; 
}

if ($tarefas < 0) {
    $tarefasConcluidas += $tarefas; 
    $tarefas = 0;
}

echo "<h2>Resultado da Simulação</h2>";
echo "Sprints concluídas: $sprintsConcluidas <br>";
echo "Tarefas concluídas: $tarefasConcluidas <br>";
echo "Dias restantes: $dias <br>";

if ($tarefas > 0) {
    echo "Ainda restaram $tarefas tarefas não concluídas.";
} else {
    echo "Todas as tarefas foram concluídas dentro do prazo!";
}

?>