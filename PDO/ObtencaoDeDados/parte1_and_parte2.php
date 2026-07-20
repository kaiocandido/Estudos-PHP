<?php

function getConexao(){
    return new PDO("mysql:host=localhost;dbname=crud_demo", "root", "", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
}

function buscarUsuarioAssoc(){
    $pdo = getConexao();
    $sql = "SELECT id, nome, email FROM usuarios";
    $stmt = $pdo->query($sql);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function buscarUsuariosAssoc2(){
    $pdo = getConexao();
    $sql = "SELECT id, nome, email FROM usuarios";
    $smtm = $pdo->query($sql);

    while ($usuario = $smtm ->fetch(PDO::FETCH_ASSOC)) {
        echo "Nome {$usuario['nome']} </br>";
        echo "Email: {$usuario['email']}</br>"; 
    }
}

function buscarUsuariosAssoc3(){
    $pdo = getConexao();
    $sql = "SELECT id, nome, email FROM usuarios";
    $smtm = $pdo->query($sql);
    $usuarios = [];

    while($row = $smtm->fetch(PDO::FETCH_ASSOC)){
        $usuarios[]= [
            'id' => (int)$row['id'],
            'nome' => ucfirst(strtolower($row['name'])),
            'email' => strtolower($row['email'])
        ];
    }
    return $usuarios;
}


echo '<h3>FETCH_ASSOC</h3>';
$usuarios = buscarUsuarioAssoc();
echo '<pre>';
print_r($usuarios);
echo '</pre>';
foreach ($usuarios as $usuario) {
    echo "Nome {$usuario['nome']} | Email: {$usuario['email']}</br>";
}

$usuarios2 = buscarUsuariosAssoc2();

$usuarios3 = buscarUsuariosAssoc3();
echo '<pre>';
print_r($usuarios3);
echo '</pre>';


// FETCH_NUM

function buscarUsuariosNum(){
    $pdo = getConexao();
    $sql = "SELECT  id, nome, email FROM usuarios";
    $smtm = $pdo->query($sql);

    return $smtm->fetchAll(PDO::FETCH_NUM);
}

echo "<h3> FETCH_NUM</h3>";
$usuariosNum = buscarUsuariosNum();
echo "<pre>";
print_r($usuariosNum);
echo "</pre>";
foreach($usuariosNum as $num){
    echo "Nome: {$num[1]} | Email: {$num[2]}</br>";
}

//ACEITA TANTO O NUMERO DA COLUNA COMO O NOME
function buscarUsuariosBoth(){
    $pdo = getConexao();
    $sql = "SELECT  id, nome, email FROM usuarios";
    $smtm = $pdo->query($sql);

    return $smtm->fetchAll(PDO::FETCH_BOTH);
}

echo "<h3>FETCH_BOTH/h3>";
$usuarios4 = buscarUsuariosBoth();
echo "<pre>";
print_r($usuarios4);
echo "</pre>";
foreach($usuarios4 as $num){
    echo "Nome: {$num[1]} | Email: {$num['email']}</br>";
}

// FUNCAO COM PDO::FETCH_CLASS (OBJETO DE CLASSE)

class Usuario{
    public $id;
    public $nome;
    public $email;
}

function buscarUsuariosClasse(){
    $pdo = getConexao();
    $sql = "SELECT  id, nome, email FROM usuarios";
    $smtm = $pdo->query($sql);
    return $smtm->fetchAll(PDO::FETCH_CLASS, 'Usuario');
}

echo "<h3> FETCH_CLASS TODOS OS ITENS</h3>";
$usuarios5 = buscarUsuariosClasse();
echo "<pre>";
print_r($usuarios5);
echo "</pre>";
foreach ($usuarios5 as $usuario) {
    echo "ID: $usuario->id | Nome: $usuario->nome | Email: $usuario->email</br>";
}

function buscarUsuarioClasse2(){
    $pdo = getConexao();
    $sql = "SELECT  id, nome, email FROM usuarios";
    $smtm = $pdo->query($sql);

    $smtm->setFetchMode(pdo::FETCH_CLASS, 'Usuario');

    while($usuario = $smtm->fetch()){
        echo $usuario->nome . "</br>";
    }
}

$usuarios5 = buscarUsuariosClasse();