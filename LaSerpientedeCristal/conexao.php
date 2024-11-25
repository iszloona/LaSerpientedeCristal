<?php

$usuario = 'root';
$senha= '1905gigicas';
$database = 'laserpientedecristal_bd';
$host = 'localhost';
$port = '3307';

//conexão apropriada com o banco de dados "laserpientedecristal_bd", porta "3307" com senha "1905gigicas" e usuário "root"(padrão)//

$mysqli= new mysqli($host, $usuario, $senha, $database, $port);

//if ($mysqli->error){
   // die("falhou". $mysqli->error);
//}else{
   // echo ("funcinou");

//}
//teste de conexão php e my sql workbench, pegando os dados da conexão apropriada e, caso falha, "morrer" execução de programa, mas se funcionar exibir mensagem "funcinou"//


