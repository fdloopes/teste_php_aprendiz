<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teste tecnico - Questao 4</title>
  </head>
  <body>
    <?php
      echo "Primeiro teste <br/>";
      $variavel = 198;

      // Variavel ret é utilizada para os retornos, apenas por um retorno visual dos testes
      $ret = isset($variavel) ? (!empty($variavel) ? (is_int($variavel) ? "Variavel existe, tem valor e é um inteiro" : "Variavel existe, tem valor, mas nao é inteiro") : "Variavel existe e nao tem valor" ) : "Variavel nao existe";
      echo $ret;
      echo "<br/>";

      echo "Segundo teste <br/>";
      $variavel = [ "nome" => "Pedro Luiz", "endereco" => "Av Taquara", "telefone" => "(51) 5151-51511" ];

      $ret = isset($variavel) ? (!empty($variavel) ? (is_array($variavel) ? "Variavel existe, tem valor e é um array" : "Variavel existe, tem valor, mas nao é array") : "Variavel existe e nao tem valor" ) : "Variavel nao existe";
      echo $ret;
      echo "<br/>";

      $ret = isset($variavel["endereco"]) ? (!empty($variavel["endereco"]) ? (is_string($variavel["endereco"]) ? "Indice existe, tem valor e é uma string" : "Indice existe, tem valor, mas nao é string") : "Indice existe e nao tem valor" ) : "Indice nao existe";
      echo $ret;
      echo "<br/>";

      echo "Terceiro teste <br/>";
      $variavel = "Romarinho";

      $ret = isset($variavel) ? (!empty($variavel) ? (is_string($variavel) ? "Variavel existe, tem valor e é uma string" : "Variavel existe, tem valor, mas nao é string") : "Variavel existe e nao tem valor" ) : "Variavel nao existe";
      echo $ret;
      echo "<br/>";

     ?>
  </body>
</html>
