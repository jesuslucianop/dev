/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.7.22-0ubuntu0.16.04.1 : Database - GBH
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`GBH` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `GBH`;

/*Table structure for table `Autores` */

DROP TABLE IF EXISTS `Autores`;

CREATE TABLE `Autores` (
  `Id_autores` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`Id_autores`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `Autores` */

insert  into `Autores`(`Id_autores`,`Nombre`) values (1,'Paulo Coelho'),(2,'Nicolas Maquiavelo'),(3,'nicolas de ovando'),(4,'algurismi'),(5,'Hipatias'),(6,'w3 school');

/*Table structure for table `Libros` */

DROP TABLE IF EXISTS `Libros`;

CREATE TABLE `Libros` (
  `id_libro` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(45) NOT NULL,
  `Id_autores` varchar(15) NOT NULL,
  `Cant_pag` varchar(10) NOT NULL,
  `url` varchar(45) NOT NULL,
  PRIMARY KEY (`id_libro`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `Libros` */

insert  into `Libros`(`id_libro`,`Titulo`,`Id_autores`,`Cant_pag`,`url`) values (1,'jesus','2','4','./Repositorio/18082018_927188_Sprint-Backlog.'),(2,'jesus','2','4','./Repositorio/18082018_927188_Sprint-Backlog.'),(3,'jesus','2','4','./Repositorio/18082018_927188_Sprint-Backlog.');

/*Table structure for table `Usuarios` */

DROP TABLE IF EXISTS `Usuarios`;

CREATE TABLE `Usuarios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `password` varchar(25) NOT NULL,
  `Rol` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `Usuarios` */

insert  into `Usuarios`(`Id`,`nombre`,`usuario`,`password`,`Rol`) values (1,'jesus luciano','jluciano','admin123','1'),(2,'Jorge de jesus bello','jbello','123','2'),(4,'anthony nova perez','anova','123','2'),(8,'Elian soto (el sotico)','lagger','admin12345','1'),(10,'David luciano','dluciano','123','2');

/*Table structure for table `libro` */

DROP TABLE IF EXISTS `libro`;

CREATE TABLE `libro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) DEFAULT NULL,
  `id_autores` int(25) DEFAULT NULL,
  `cant_pag` int(30) DEFAULT NULL,
  `url` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `libro` */

insert  into `libro`(`id`,`titulo`,`id_autores`,`cant_pag`,`url`) values (1,'los alpesitos',1,2,'./Repositorio/20082018_524870_Product-Backlog.pdf'),(2,'los alpes ',2,345,'./Repositorio//20082018_555735_Product-Backlog.pdf'),(3,'El principito',2,588,'./Repositorio//22082018_5809_EULA.pdf'),(4,'Html5',6,2,'./Repositorio//24082018_946385_HTML5_draft.pdf'),(5,'El principe',2,158,'./Repositorio//24082018_742150_El_príncipe.pdf'),(6,'Scrum book',6,25,'./Repositorio//24082018_125447_Scrum-Master.pdf');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
