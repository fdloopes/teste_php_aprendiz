/* Escreva um SELECT que retorne todas as tuplas com o “nome_estado” e o “nome_pais”. */

SELECT e.nome_estado, p.nome_pais FROM estado AS e, pais AS p WHERE p.id = e.id_pais;
