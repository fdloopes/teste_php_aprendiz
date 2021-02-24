/* Crie uma nova tabela chamada “cidade” com as colunas “id”, “nome_cidade” e “id_estado”
sendo a coluna “id” uma Primary Key com Auto Increment e “id_estado” uma Foreign Key da
coluna “id” da tabela “estado”. */

/* TABELA CIDADE */
CREATE TABLE cidade(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, nome_cidade VARCHAR(255) NOT NULL, id_estado INT NOT NULL,CONSTRAINT fk_id_estado FOREIGN KEY(id_estado) REFERENCES estado(id));
