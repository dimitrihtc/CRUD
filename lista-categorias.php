<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
?>
  <main>

    <div class="container">
        <h1>Lista de Categorias</h1>
        <a href="./salvar-categorias.php" class="btn btn-add">Incluir</a>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Dado A</td>

              <td>
                <a href="#" class="btn btn-edit">Editar</a>
                <a href="#" class="btn btn-delete">Excluir</a>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Dado B</td>
              <td>
                <a href="#" class="btn btn-edit">Editar</a>
                <a href="#" class="btn btn-delete">Excluir</a>
              </td>
            </tr>
            <tr>
            <?php
          $sql = 'SELECT * FROM categorias';
          $resultado = mysqli_query($conexao, $sql);
 
          if (mysqli_num_rows($resultado) > 0) {
              while ($row = mysqli_fetch_assoc($resultado)) {
                  echo "<tr>";
                  echo "<td>" . $row['CategoriaID'] . "</td>";
                  echo "<td>" . $row['Nome'] . "</td>";
                  echo "<td>
                          <a href='salvar-categorias.php?id=" . $row['CategoriaID'] . "' class='btn btn-edit'>Editar</a>
                          <a href='excluir-categoria.php?id=" . $row['CategoriaID'] . "' class='btn btn-delete' onclick=\"return confirm('Deseja excluir esta categoria?');\">Excluir</a>
                        </td>";
                  echo "</tr>";
              }
          } else {
              echo "<tr><td colspan='3'>Nenhuma categoria encontrada</td></tr>";
          }
          ?>
          </tbody>
        </table>
      </div>
  </main>
  


  <?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>