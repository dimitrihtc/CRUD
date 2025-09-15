<?php
define('DBSERVER', 'localhost'); //endereco do servidor
define('DBUSER','root'); //usuario de acesso ao mysql
define('DBPASS',''); // senha de acesso ao mysql
define('DBBASE','empresa'); //nome da base dde dados do banco
 
//variavel de conexao com o banco de dados
$conexao = mysqli_connect(DBSERVER,DBUSER,DBPASS,DBBASE);