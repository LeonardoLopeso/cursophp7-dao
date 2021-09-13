<?php 

require_once("config.php");

//Carrega um usuário
// $root = new Usuario();
// $root->loadById(1);
// echo $root;

//Carrega uma lista de usuários
// $lista = Usuario::getList();
// echo json_encode($lista);

//Carrega uma lista de usuáris buscando pelo login
// $search = Usuario::search("leo");
// echo json_encode($search);

//Carrega um usuário usando o login e a senha
// $usuario = new Usuario();
// $usuario->login("root", "#1234");
// echo $usuario;

//Criando um novo usuário
// $aluno = new Usuario("aluno3", "@lun03");
// $aluno->insert();
// echo $aluno;

$usuario = new Usuario();

$usuario->loadById(6);

$usuario->update("professor", "!@#123");

echo $usuario;

 ?>