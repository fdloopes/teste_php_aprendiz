<?php

/**
 * Classe Permissao
 * Responsável por armazenar e disponibilizar os metodos de acesso ao nivel do usuario
 * Atributo e funcao de set protegidos
 */
 class Permissao {
   protected $nivel;

   protected function setNivel($nivel){
     $this->nivel = $nivel;
   }

   public function getNivel(){
     return $this->nivel;
   }
 }

?>
