/*
SQLyog - Free MySQL GUI v5.02
Host - 5.5.5-10.4.17-MariaDB : Database - mobile
*********************************************************************
Server version : 5.5.5-10.4.17-MariaDB
*/


create database if not exists `mobile`;

USE `mobile`;

/*Table structure for table `ci_sessions` */

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT 0,
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `ci_sessions` */

insert into `ci_sessions` values 
('12g1ist812oe08i6fj3mvahv2qq97qn5','::1',1655037009,'__ci_last_regenerate|i:1655037009;'),
('20lf651o0o9l7273g8cc2lu453pjuq43','::1',1656306491,'__ci_last_regenerate|i:1656306486;'),
('57lm0o9clsauud9sq1p1pbfct8uon6j8','::1',1654483899,'__ci_last_regenerate|i:1654483811;'),
('5g8ilnltq9gg3hhjmdtdau9c6pnl3tp4','::1',1655039207,'__ci_last_regenerate|i:1655039207;'),
('943vh4ujofdndjt0h1decnhtjioq0joo','::1',1655043018,'__ci_last_regenerate|i:1655043018;'),
('advvukjesj0bqnfjq1j8lg61rjvf0l8s','::1',1656305509,'__ci_last_regenerate|i:1656305461;'),
('e5lkqkaj0vtqmo86o8psnjsrkoqi1j06','::1',1655041342,'__ci_last_regenerate|i:1655041342;'),
('gbu0l13pa4u94m741csrn3vtfoprge6i','::1',1655039742,'__ci_last_regenerate|i:1655039742;'),
('glafuttau55fau11n5hirb6vfb8tgjns','::1',1655042173,'__ci_last_regenerate|i:1655042173;'),
('oqspbfsn6vun685o892r1fblno13riup','::1',1655041026,'__ci_last_regenerate|i:1655041026;'),
('qa2t3kqfro74a5ov2o306ohsesg9evo3','::1',1655043018,'__ci_last_regenerate|i:1655043018;'),
('r6ll3r7c9terqlsgthnukbimr6b3hn5j','::1',1655040055,'__ci_last_regenerate|i:1655040055;'),
('r80fehmtsjgm34sg53r7tm05mtktorst','::1',1655037327,'__ci_last_regenerate|i:1655037327;'),
('ro2ff6irp0b69i6okt89rg93pd50haa2','::1',1655042683,'__ci_last_regenerate|i:1655042683;'),
('rr9u3dpco1fc5nkl3jdmn6272t1dcmmj','::1',1655038442,'__ci_last_regenerate|i:1655038442;'),
('rrijkt2tvctsoh90en8j578g02bkbtet','::1',1655041653,'__ci_last_regenerate|i:1655041653;');

/*Table structure for table `design` */

DROP TABLE IF EXISTS `design`;

CREATE TABLE `design` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

/*Data for the table `design` */

insert into `design` values 
(1,'https://i.pinimg.com/564x/79/99/de/7999de6fbc5f05233ae0008367960091.jpg','Crybaby','2020','Mengenai 3 mata yang menyiratkan akan kesedihan'),
(2,'https://i.pinimg.com/564x/d2/8f/33/d28f33af74b0cc840a61fd904fa16ccf.jpg','Destroy Me','2021','\"You can destory me over and over, and I will always forgive you.\" An Ethan Torchio Fanfiction\r\n\r\n'),
(3,'https://i.pinimg.com/564x/bd/79/c2/bd79c2d8cc38b8c18fe0afcd80b8d646.jpg','Girl in Dream','2021','Design berupa seorang perempuan yang dikelilingi dengan mimpi indahnya\r\n'),
(4,'https://i.pinimg.com/564x/40/f2/fa/40f2fa7cb4c7e41aef6636d428cc6946.jpg','Portrait of a Lady on Fire','2021','Design terinspirasi dari film serupa yaitu Lady on Fire'),
(5,'https://i.pinimg.com/564x/cb/65/d4/cb65d4bef93792cda3f36abb5e96199f.jpg','I Am a Warrior Through Anxiety','2021','I fight the battles each day inside my head'),
(6,'https://i.pinimg.com/564x/65/3c/c6/653cc607588caf66f750794e7a92c3e7.jpg','Music Art','2021','Original art about the pleasure of making or listening to music. Jazz and orchestra. Piano, violin and base.'),
(7,'https://i.pinimg.com/564x/30/1e/28/301e287862500ffa49db97c0f475abab.jpg','Trent Gudmundsen','2021','Raised in a small farming town in eastern Utah, American painter Trent Gudmundsen spent his childhood surrounded by people who worked hard and lived simply, and he was driven from an early age to record his impressions of life in paint.'),
(8,'https://i.pinimg.com/564x/db/d3/f3/dbd3f33ad4efe5a6bbeb28e4ba6d1ec2.jpg','Golden Retriever','2021','The best cute retriever ever'),
(9,'https://i.pinimg.com/564x/22/2e/ac/222eac8c852227c95c435c9c367a86b2.jpg','Thorburn','2021','Archibald thorburn - Mallad in the reeds\r\n'),
(10,'https://i.pinimg.com/564x/c2/1e/4f/c21e4fab08a330759913dad850888fe7.jpg','Lavandes Et Cabanon','2021','Acheter l\'art de Annie Rivière (Livraison gratuite, Achat en direct sécurisé): Peinture intitulée\r\n'),
(11,'https://i.pinimg.com/564x/9c/c0/b9/9cc0b9a394b7bc83663d5b420a0bfb7c.jpg','Sherree Valentine Daines','2021','Sherree Valentine-Daines enjoys a position at the forefront of British art, and has done for many years. Daines was born in Effingham, Surrey.'),
(12,'https://i.pinimg.com/564x/f9/4c/35/f94c3523ad5654b4b15d267152a04c2b.jpg','Kind Invitation','2021','Nos encantaría presentar esta recreación hecha a mano al óleo sobre lienzo de la obra mencionada en el título. Esta obra de arte hecha por Leonid Afremov Studio con la misma cantidad de alma y emoción al igual que la primera pintura original. Esta pintura fue creada al óleo sobre lienzo artístico usando la técnica única de espátula de Afremov. La obra tiene textura, se puede sentir los trazos tocando la pintura. Comprando en este sitio, están comprando directamente de Leonid Afremov Studio. Nosotros garantizamos su satisfacción y la mejor experiencia de cliente. La obra de arte está firmada por delante y detrás. El certificado de autenticidad incluirá el nombre del propietario que compró la obra de arte. El certificado está firmado por Leonid Afremov Studio. Si está comprando esta pintura como regalo, ponemos el nombre del destinatario del certificado. También podemos enviar a la dirección del destinatario de su regalo.'),
(41,'https://w0.peakpx.com/wallpaper/246/777/HD-wallpaper-blue-aesthetic-flowers.jpg','Blue aesthetic, flowers','2022','Bertaburkan bunga pada background biru');

/*Table structure for table `keys` */

DROP TABLE IF EXISTS `keys`;

CREATE TABLE `keys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `keys` */

insert into `keys` values 
(1,1,'moviecatalog',1,0,0,'',1);

/*Table structure for table `user_access_menu` */

DROP TABLE IF EXISTS `user_access_menu`;

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_access_menu` */

insert into `user_access_menu` values 
(1,1,1),
(2,1,2),
(3,2,2),
(4,1,3);

/*Table structure for table `user_menu` */

DROP TABLE IF EXISTS `user_menu`;

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_menu` */

insert into `user_menu` values 
(1,'Admin'),
(2,'User'),
(3,'Menu'),
(4,'Test');

/*Table structure for table `user_role` */

DROP TABLE IF EXISTS `user_role`;

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_role` */

insert into `user_role` values 
(1,'Administrator'),
(2,'Member');

/*Table structure for table `user_sub_menu` */

DROP TABLE IF EXISTS `user_sub_menu`;

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_sub_menu` */

insert into `user_sub_menu` values 
(1,1,'Dashboard','admin','fas fa-fw fa-tachometer-alt',1),
(2,2,'My Profile','user','fas fa-fw fa-user',1),
(3,2,'Edit profile','user/edit','fas fa-fw fa-user-edit',1),
(4,3,'Menu Management','menu','fas fa-fw fa-folder',1),
(5,3,'Submenu Management','menu/submenu','fas fa-fw fa-folder-open',1);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `image` varchar(128) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert into `users` values 
(1,'Wawan Hamadi','abcsakatonik123@gmail.com','default.jpg','$2y$10$WOxdwGnBIuhkkjXaKcQexexL58WRn9au1kIUO5AUhpKG4llXcZHcu',1,1,1649393237),
(6,'Sarah Menanti','sarahmenanti@yahoo.com','default.jpg','$2y$10$aM4pUBTseE3xl9CZPx3vI.C.7R.BbNOIHLasSOlPAP72vLwJ5B24i',2,1,1649659544);
