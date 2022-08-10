<h2>CODEIGNITER 4</h2>
<h2>Exemplos de MYSQL JOINS</h2>

>INNER JOIN
>LEFT JOIN
>RIGHT JOIN

>MySQL Database: cihelp

**MySQL Tables**
<pre style="background-color:'#E7E9EB'; color:'#000000' ">
CREATE TABLE `tbl_users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(120) DEFAULT NULL,
 `email` varchar(120) DEFAULT NULL,
 `phone_no` varchar(120) DEFAULT NULL,
 `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `tbl_courses` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(120) NOT NULL,
 `user_id` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
</pre>

**Instalação**
1)Substituir a pasta app original pela app disponível
2)Replace the original app with the available folder
3)Mudar o ENV para .env e realizar as mudanças padrão do framework
4)Make the default changes in the .env
5)Adicionar as tabelas ao banco de dados
6)Add the tables to the database
7)Relizar as mudanças necessárias em app/config/app.php e database.php
