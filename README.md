# CRUD PHP / MYSQL

Esse projeto foi desenvolvido com o intuito de aprender novas tecnologias.

Na construção desse projeto foi utilizado o Design Pattern MVC para melhor organização do código e posteriormente uma fácil manutenção do mesmo.

## Cenário utilizado para criação do projeto
Um cliente precisa em seu painel de controle um módulo simples de cadastro de produto, em que cada produto está relacionado a uma tabela chamada 'categorias' (script da tabela categorias está abaixo):

```mysql
 CREATE TABLE `categorias` (
 `id` INT(11) NOT NULL AUTO_INCREMENT,
 `titulo` VARCHAR(190) NOT NULL,
 PRIMARY KEY (`id`)
 )
 ENGINE=InnoDB;
 INSERT INTO `categorias` (`id`, `titulo`) VALUES (4, 'Alimentos');
 INSERT INTO `categorias` (`id`, `titulo`) VALUES (5, 'Informática');
 INSERT INTO `categorias` (`id`, `titulo`) VALUES (2, 'Eletrodomésticos');
 INSERT INTO `categorias` (`id`, `titulo`) VALUES (3, 'Celulares');
````
## Foram utilizadas as seguintes tecnologias no desenvolvimento:

- HTML
- BOOTSTRAP
- TWIG
- MySQL
- PHP

## Funcionalidades adicionadas:

- [x] Adicionar um produto
- [x] Listar todos os produtos
- [X] Editar um produto
- [x] Remover um produto

------------



------------


> Author do projeto: ***Wesley Gessner***
