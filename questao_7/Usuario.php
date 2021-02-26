<?php
  /**
   * Classe Usuario
   * Responsável por modelar/armazenar os dados do usuario
   * Extende a classe Permissao
   * Atributos privados, sendo necessario utilizar os metodos de acesso
   */
  class Usuario extends Permissao{
    private $nome;
    private $telefone;
    private $data_cadastro;

    public function cadastrar(){
        $this->data_cadastro = date('d/m/Y H:i');
    }

    public function getTelefone(){
      return $this->telefone;
    }

    public function preencherDados($nome, $telefone, $nivel){
      $this->nome = $nome;
      $this->telefone = $telefone;
      $this->setNivel($nivel);

      $ret = ""; //variavel utilizada para retorno de excecao

      $ret .= empty($this->nome) ? "'nome' " : "";
      $ret .= empty($this->telefone) ? "'telefone' " : "";
      $ret .= empty($this->nivel) ? "'nivel'" : "";

      if(empty($ret)){
        $this->cadastrar();
      }else{
        throw new Exception("O(s) campo(s) $ret nao foi/foram preenchido(s)!<br/>");
      }
    }

    public function getDataCadastro(){
      return $this->data_cadastro;
    }

    public function getNome(){
      return $this->nome;
    }

  }

 ?>
