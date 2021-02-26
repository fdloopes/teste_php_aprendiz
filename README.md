<h1>Teste para vaga de aprendiz PHP</h1>

- Este repositório é destinado para armazenar as resoluções dos desafios propostos.

> - Obs: Para executar as soluções em PHP é necessário um servidor web(apache) local.

<h2>Questão 4</h2>

- Realizar validações de variáveis em PHP

- a) Validar a variável: $variavel = 198;
- b) Validar o array e o indice “endereco”: $variavel = [ “nome” => “Pedro Luiz”, “endereco” => “Av Taquara”, “telefone” => “(51) 5151-51511” ];
- c) Validar a variável: $variavel = “Romarinho”;

<h2>Questão 6</h2>

- Implemente Queries em SQL:

- a) Escreva um SELECT que retorne o nome_estado com valor ‘Paraná’;
- b) Escreva um SELECT que retorne todas as tuplas com o “nome_estado” e o “nome_pais”;
- c) Altere a tabela “pais” para adicionar um novo campo de nome “sigla” com limite para 2 caracteres;
- d) Crie uma nova tabela chamada “cidade” com as colunas “id”, “nome_cidade” e “id_estado” sendo a coluna “id” uma Primary Key com Auto Increment e “id_estado” uma Foreign Key da coluna “id” da tabela “estado”.

- As soluções são scripts sql, de maneira que para executa-los é necessário utilizar um banco de dados, para os desafios utilizei o MySQL.
> - Obs: para facilitar é interessante abrir um terminal para acessar o BD de dentro do diretório onde estão os scripts.
- Após estar logado no BD foi utilizado o comando: source "script a executar".
- Importante: O script create_table.sql é o de criação do BD e das tabelas, de maneira que deve ser o primeiro a ser executado, seguido do script insert_data.sql que é o responsável por popular as tabelas.

<h2>Questão 7</h2>

- Implementação de classes em PHP

- a) Utilizar o autoload ou composer para carregar as classes;
- b) Utilizar tratamento de exceções;
- c) O método preencherDados dentro de Usuario deve chamar função setNivel da classe Permissao para definir o nivel do usuário;
- d) O método cadastrar dentro de Usuario só deve ser executado se os atributos nome, telefone e nivel estiverem preenchidos, caso contrario deve retornar uma exceção informando os campos não preenchidos. Ao executar o método cadastrar o atributo data_cadastro deve ser preenchido com a data e hora atuais;
- e) Após realizar a execucação dos métodos preencherDados e cadastrar é necessário exibir na tela os dados cadastrados(nome, telefone, nivel, data cadastro).
