# PHP-OOP-Form

PHP OOP functions to create nice singin and singup forms.

1) Create your database and configure connections on config.php

2) Create table or import registrazione.sql

SQL code to create table:<br>
<code>CREATE TABLE IF NOT EXISTS `iscritti` (
  `id_utente` int(4) NOT NULL AUTO_INCREMENT,
  `nome_utente` varchar(20) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `nome_reale` varchar(50) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id_utente`),
  UNIQUE KEY `username` (`nome_utente`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
</code>
<h2>Now you are ready to use functions.<h2>
