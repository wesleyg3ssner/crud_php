# CRUD PHP / MYSQL

Esse projeto foi desenvolvido com o intuito de aprender novas tecnologias.

Na construção desse projeto foi utilizado o Design Pattern MVC para melhor organização do código e posteriormente uma fácil manutenção do mesmo.

## Cenário utilizado para criação do projeto
Um cliente precisa em seu painel de controle um módulo simples de cadastro de produto, em que cada produto está relacionado a uma tabela chamada 'categoria' (script da tabela categoria e produto está abaixo):

```mysql
 CREATE TABLE `categoria` (
 `id` INT(11) NOT NULL AUTO_INCREMENT,
 `titulo` VARCHAR(190) NOT NULL,
 PRIMARY KEY (`id`)
 )

 INSERT INTO `categoria` (`id`, `titulo`) VALUES (4, 'Alimentos');
 INSERT INTO `categoria` (`id`, `titulo`) VALUES (5, 'Informática');
 INSERT INTO `categoria` (`id`, `titulo`) VALUES (2, 'Eletrodomésticos');
 INSERT INTO `categoria` (`id`, `titulo`) VALUES (3, 'Celulares');
````

```mysql
 CREATE TABLE `produto` (
 `id` INT(11) NOT NULL AUTO_INCREMENT,
 `categoria_id` INT(11) NOT NULL
 `nome` VARCHAR(190) NOT NULL,
 `preco` decimal(7, 2),
 PRIMARY KEY (`id`)
 )

 INSERT INTO `produto` (categoria_id, `nome`, preco) VALUES (4, 'Pão');
 INSERT INTO `produto` (categoria_id, `nome`, preco) VALUES (5, 'Mouse Gamer');
 INSERT INTO `produto` (categoria_id, `nome`, preco) VALUES (2, 'Galedeira');
 INSERT INTO `produto` (categoria_id, `nome`, preco) VALUES (3, 'Xiaomi Redmi 6');
```

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
