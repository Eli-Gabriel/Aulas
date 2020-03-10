<?php

class Pessoa{
  private $nome;
  private $email;
  private $fone;

  public function __construct($nome = null, $email = null, $fone = null){
    $this->nome = $nome;
    $this->email = $email;
    $this->fone = $fone;
  }

  public function getNome(){
    return $this->nome;
  }

  public function setNome($nome){
    $this->nome = $nome;
  }

  public function setEmail($email){
    $this->email = $email;
  }

  public function setFone($fone){
    $this->fone = $fone;
  }

  public function receiveData($post){
    $this->nome = $post["nome"];
    $this->email = $post["email"];
    $this->fone = $post["fone"];
  }

  public function buscarTodos($conn){
    $query = "SELECT * FROM contatos ORDER BY nome ASC";

    $select = $conn->prepare($query);
    $result = $select->execute();

    return $select->fetchAll(PDO::FETCH_OBJ);
  }

  public function getById($conn, $id){
    $query = "SELECT * FROM contatos WHERE id =:r_id";

    $select = $conn->prepare($query);
    $select->bindParam(":r_id", $id);

    $result = $select->execute();

    if (!$select->rowCount())
      return false;

    return $select->fetch(PDO::FETCH_OBJ);
  }
}
