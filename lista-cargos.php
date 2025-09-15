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
        <table>
          <thead>
            <tr>
            <?php
            
            $sql = "SELECT * FROM cargos";
            $resultado = mysqli_query($conexao, $sql);

            if ($resultado && mysqli_num_rows($resultado) > 0) {
                while ($row = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['nome']."</td>";
                    echo "<td>".$row['teto_salarial']."</td>";
                    echo "<td>
                            <a href='salvar-cargos.php?id=".$row['id']."' class='btn btn-edit'>Editar</a>
                            <a href='excluir-cargos.php?id=".$row['id']."' class='btn btn-delete' onclick=\"return confirm('Excluir o cargo #".$row['id']."?')\">Excluir</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Nenhum cargo encontrado</td></tr>";
            }
            ?>
            </tr>
          </thead>
          <tbody>
          </tbody>
          </table>
      </div> 
  </main>
  
  <?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>