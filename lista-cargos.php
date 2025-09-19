<?php 
// include dos arquivos
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
?>
 
 <main>
  <div class="container">
    <h1>Lista de Cargos</h1>
    <a href="./salvar-cargos.php" class="btn btn-add">Incluir</a>
    <table> ... </table>
  </div>
</main>

<?php

if (!isset($conn) || !($conn instanceof mysqli)) {
    echo "<div class='error'>Erro: conexão com o banco de dados não encontrada. Verifique include/conexao.php</div>";
} else {
   // segue a consulta
};

$sql = "SELECT id, nome, descricao FROM cargos ORDER BY id DESC";
if ($stmt = $conn->prepare($sql)) {
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // escape e echo das linhas
        }
    } else {
        echo "<tr><td colspan='4'>Nenhum cargo encontrado</td></tr>";
    }
    $stmt->close();
} else {
    echo "<tr><td colspan='4'>Erro na consulta: " . htmlspecialchars($conn->error, ENT_QUOTES, 'UTF-8') . "</td></tr>";
}
$nome = htmlspecialchars($row['nome'], ENT_QUOTES, 'UTF-8');
$descricao = htmlspecialchars($row['descricao'], ENT_QUOTES, 'UTF-8');

include_once __DIR__ . '/include/footer.php';

?>

<?php
// include dos arquivos
include_once './include/footer.php';
?>
