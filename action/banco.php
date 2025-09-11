<?php
//constantes de conexao com o banco
define('DBSERVER', 'localhost'); //endereco do servidor
define('DBUSER','root'); //usuario de acesso ao mysql
define('DBPASS',''); // senha de acesso ao mysql
define('DBBASE','empresa'); //nome da base dde dados do banco
 
//variavel de conexao com o banco de dados
$conexao = mysqli_connect(DBSERVER,DBUSER,DBPASS,DBBASE);
 
$sql = 'SELECT * FROM cargos';
$resultado = mysqli_query($conexao,$sql);
if (mysqli_num_rows($resultado) > 0) {
    //se houver registros, exibe os dados
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo 'Nome: ' . $row['Nome'] . "<br>";
    }
} else {
    echo "0 registros" ;
}
//exibe na tela a conexao com o banco
echo '<pre>';
print_r($resultado);
echo '</pre>';
 
$sql = 'SELECT * FROM setor;';
$resultado = mysqli_query($conexao,$sql);
 
 
?>
 
<select name="" id="">
    <?php
    while ($row = mysqli_fetch_assoc($resultado)) {
    echo '<option value="' . $row['SetorID'] . '">' . $row['Nome'] . '</option>';
    }
    ?>
 
</select>
 
<?php
$sql = 'SELECT * FROM produtos;';
$resultado = mysqli_query($conexao,$sql);
?>
<label for="">produtos</label>
<select name="" id="">
<option value="">-selecione-</option>
    <?php
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo '<option value="' . $row['ProdutoID'] . '">' . $row['Nome'] . '</option>';
    }
    ?>
</select>
 
<?php
$sql = 'SELECT * FROM funcionarios;';
$resultado = mysqli_query($conexao,$sql);
?>
<label for="">produtos</label>
<select name="" id="">
<option value="">-selecione-</option>
    <?php
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo '<option value="' . $row['FuncionarioID-'] . '">' . $row['Nome'] . '</option>';
    }
    ?>
</select>
 