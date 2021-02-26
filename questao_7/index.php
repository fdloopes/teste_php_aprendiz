<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teste tecnico - Questao 7</title>
  </head>
  <body>
    <!-- Carrega o arquivo contendo o autoload -->
    <?php require_once("autoload.php");?>

    <!-- Formulario de cadastro de usuario -->
    <h2>Cadastro Usuario</h2>
    <form id="formulario" name="formulario" method="POST" action="index.php">
      <label>Nome:</label><br>
      <input type="text" name="nome"><br><br>
      <label>Telefone:</label><br>
      <input type="tel" name="telefone"><br><br>
      <label>Nivel:</label><br>
      <input type="text" name="nivel"><br><br>
      <input type="submit" name="button" value="Cadastrar"><br><br>
    </form>

    <?php
      // Verifica se o método é POST e se $_POST['nome'] possui algum valor, antes de realizar qualquer requisicao
      if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['nome'])){

        try{ // Instancia usuario
          $usuario = new Usuario();
        } catch(Exception $e){
          echo $e->getMessage(),"<br/>";
        }

        try { // Invoca metodo preencher dados e exibe na tela os dados caso nao haja nenhuma excecao
          $usuario->preencherDados($_POST['nome'],$_POST['telefone'],$_POST['nivel']); ?>
          <div>
              <?php
                echo "Nome: " . $usuario->getNome(),"<br/>";
                echo "Telefone: " . $usuario->getTelefone(),"<br/>";
                echo "Nível: " . $usuario->getNivel(),"<br/>";
                echo "Data de cadastro: " . $usuario->getDataCadastro(),"<br/>";
              ?>
          </div>
        <?php
        } catch (Exception $e) { ?>
          <div >
            <?php echo $e->getMessage(),"<br/>"; ?>
          </div>
        <?php
        }
      }
     ?>

  </body>
</html>
