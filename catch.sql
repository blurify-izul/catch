/*
SQLyog Ultimate v10.41 
MySQL - 5.5.5-10.1.32-MariaDB : Database - catch
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` bigint(20) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `customers` */

insert  into `customers`(`id`,`first_name`,`last_name`,`email`,`phone`,`add_date`) values (587625,'Avery','Hessel','avery.hessel@example.org','1402.8648','2019-08-03 15:01:17'),(597877,'Emory','Jacobson','emory.jacobson@example.net','(02)-2511-6290','2019-08-03 15:01:17'),(779458,'Alda','Koss','alda.koss@example.org','(02) 6253 1125','2019-08-03 15:01:16'),(815298,'Reynold','Weber','reynold.weber@example.org','32478586','2019-08-03 15:01:17'),(888195,'Norris','Kassulke','norris.kassulke@example.net','1633.1749','2019-08-03 15:01:14'),(988573,'Geovanny','O\'Keefe','geovanny.okeefe@example.com','5515.0475','2019-08-03 15:01:16'),(1047124,'Eleanora','Howell','eleanora.howell@example.org','0786184081','2019-08-03 15:01:14'),(1276184,'Yadira','West','yadira.west@example.net','+61737481647','2019-08-03 15:01:15'),(1294450,'Luciano','Fadel','luciano.fadel@example.org','(02) 5482 0345','2019-08-03 15:01:14'),(1461254,'Roslyn','Durgan','roslyn.durgan@example.com','2359 0281','2019-08-03 15:01:15'),(1462274,'Evert','Reichel','evert.reichel@example.org','08 7258 6692','2019-08-03 15:01:16'),(1835089,'Thomas','Rippin','thomas.rippin@example.com','+61 8 8698 2741','2019-08-03 15:01:17'),(1921430,'Annabelle','Bartoletti','annabelle.bartoletti@example.net','+61-3-9372-4677','2019-08-03 15:01:16'),(2124681,'Gloria','Swaniawski','gloria.swaniawski@example.org','0355740477','2019-08-03 15:01:16'),(2290259,'Omari','O\'Connell','omari.oconnell@example.com','(02)-4338-3590','2019-08-03 15:01:16'),(2290933,'Ruben','Gerhold','ruben.gerhold@example.org','84633963','2019-08-03 15:01:16'),(2423718,'Charles','Schimmel','charles.schimmel@example.org','3458 9062','2019-08-03 15:01:15'),(2472235,'Judson','Bauch','judson.bauch@example.org','+61-8-9700-1229','2019-08-03 15:01:17'),(2568708,'Tiana','Herzog','tiana.herzog@example.net','4928-9238','2019-08-03 15:01:16'),(2577761,'Karolann','O\'Kon','karolann.okon@example.org','(03)-4258-1633','2019-08-03 15:01:15'),(2579423,'Kailyn','Friesen','kailyn.friesen@example.org','4733 0660','2019-08-03 15:01:14'),(2628395,'Shyann','Auer','shyann.auer@example.com','5425 1674','2019-08-03 15:01:15'),(2665355,'Melody','O\'Kon','melody.okon@example.net','(02)80612592','2019-08-03 15:01:15'),(2671422,'Fae','Murphy','fae.murphy@example.org','5438.9413','2019-08-03 15:01:14'),(2712731,'Shakira','Rutherford','shakira.rutherford@example.com','+61248056938','2019-08-03 15:01:14'),(2821447,'Dannie','Marquardt','dannie.marquardt@example.org','37875743','2019-08-03 15:01:17'),(2854107,'Andy','Kautzer','andy.kautzer@example.net','(08) 6059 8986','2019-08-03 15:01:14'),(2879613,'Esther','Rau','esther.rau@example.org','96277320','2019-08-03 15:01:17'),(2890389,'Myrl','Nicolas','myrl.nicolas@example.net','8462.5048','2019-08-03 15:01:17'),(3170283,'Aidan','Koelpin','aidan.koelpin@example.com','+61.2.8332.1598','2019-08-03 15:01:17'),(3206399,'Dedrick','Monahan','dedrick.monahan@example.org','8689-0223','2019-08-03 15:01:15'),(3252921,'Carolina','Brekke','carolina.brekke@example.net','(07) 5492 9839','2019-08-03 15:01:17'),(3315776,'Shany','McClure','shany.mcclure@example.net','02.7568.6546','2019-08-03 15:01:15'),(3320326,'Carol','Schaefer','carol.schaefer@example.net','03-2519-6947','2019-08-03 15:01:16'),(3332601,'Luigi','Wilderman','luigi.wilderman@example.com','+61-2-3636-4138','2019-08-03 15:01:17'),(3339829,'Orland','Towne','orland.towne@example.net','(08)-1906-8731','2019-08-03 15:01:17'),(3374005,'Berenice','Heidenreich','berenice.heidenreich@example.com','(03) 7186 5608','2019-08-03 15:01:17'),(3380067,'Wilmer','Adams','wilmer.adams@example.org','+61.8.0493.6617','2019-08-03 15:01:17'),(3393279,'Wilburn','Johns','wilburn.johns@example.org','+61.8.0929.6920','2019-08-03 15:01:16'),(3432606,'Brenna','Upton','brenna.upton@example.org','0862450556','2019-08-03 15:01:17'),(3516446,'Caitlyn','Rosenbaum','caitlyn.rosenbaum@example.com','+61.3.8478.3197','2019-08-03 15:01:14'),(3546881,'Norwood','Batz','norwood.batz@example.com','08 8265 9827','2019-08-03 15:01:17'),(3588200,'Melody','Torphy','melody.torphy@example.net','(02)50520256','2019-08-03 15:01:16'),(3613428,'Serena','Beatty','serena.beatty@example.com','3503 4778','2019-08-03 15:01:17'),(3649179,'Eloy','Roberts','eloy.roberts@example.com','0209599754','2019-08-03 15:01:14'),(3745573,'Libby','Davis','libby.davis@example.org','0063-3790','2019-08-03 15:01:16'),(3759017,'Carmen','Buckridge','carmen.buckridge@example.net','+61716659489','2019-08-03 15:01:16'),(3760348,'Guido','Dooley','guido.dooley@example.org','+61-3-5554-3196','2019-08-03 15:01:17'),(3792758,'Prince','Weissnat','prince.weissnat@example.org','1767.7319','2019-08-03 15:01:16'),(3805442,'Terrell','Bauch','terrell.bauch@example.com','+61-7-5571-1605','2019-08-03 15:01:14'),(3815375,'Gavin','Price','gavin.price@example.net','(03).6046.4084','2019-08-03 15:01:15'),(3872711,'Brian','Huel','brian.huel@example.net','(03)-6469-5491','2019-08-03 15:01:17'),(3876409,'Houston','Berge','houston.berge@example.com','3875-5461','2019-08-03 15:01:17'),(4003708,'Penelope','Jaskolski','penelope.jaskolski@example.net','02.6573.8037','2019-08-03 15:01:15'),(4130418,'Gino','Collier','gino.collier@example.org','(03)-8684-5144','2019-08-03 15:01:17'),(4324277,'Trey','Murray','trey.murray@example.com','+61 3 7023 6831','2019-08-03 15:01:17'),(4451927,'Aimee','Wintheiser','aimee.wintheiser@example.com','07-7647-9544','2019-08-03 15:01:14'),(4615457,'Mallory','Windler','mallory.windler@example.net','02 9106 0807','2019-08-03 15:01:14'),(4947257,'Saige','Kessler','saige.kessler@example.org','02.3816.3382','2019-08-03 15:01:14'),(5077599,'Jeremy','Jerde','jeremy.jerde@example.org','19119505','2019-08-03 15:01:16'),(5144344,'Alicia','Conn','alicia.conn@example.com','+61 8 4809 0061','2019-08-03 15:01:14'),(5157372,'Eusebio','Gleason','eusebio.gleason@example.net','03-7798-2686','2019-08-03 15:01:17'),(5174564,'Elvis','Jakubowski','elvis.jakubowski@example.org','+61231377936','2019-08-03 15:01:15'),(5220760,'Kevin','Runolfsdottir','kevin.runolfsdottir@example.com','08 1332 5883','2019-08-03 15:01:17'),(5314168,'Luther','Armstrong','luther.armstrong@example.com','+61.7.8346.0281','2019-08-03 15:01:17'),(5549098,'Cora','Stehr','cora.stehr@example.org','07.4527.9790','2019-08-03 15:01:16'),(5629702,'Pedro','Donnelly','pedro.donnelly@example.net','+61-8-3223-2292','2019-08-03 15:01:16'),(5643986,'Myles','Turcotte','myles.turcotte@example.org','0810428204','2019-08-03 15:01:17'),(5648657,'Meta','Dicki','meta.dicki@example.org','07 0644 4840','2019-08-03 15:01:13'),(5801183,'Nash','Grimes','nash.grimes@example.org','+61-3-9987-4325','2019-08-03 15:01:15'),(5863282,'Laurine','Ryan','laurine.ryan@example.com','9089 3959','2019-08-03 15:01:16'),(6072926,'Alda','Dach','alda.dach@example.org','6586-0281','2019-08-03 15:01:14'),(6297908,'Cory','Dare','cory.dare@example.com','07-8221-0792','2019-08-03 15:01:17'),(6333214,'Aiden','Gleichner','aiden.gleichner@example.org','+61806293388','2019-08-03 15:01:17'),(6440293,'Andre','Eichmann','andre.eichmann@example.com','9807 1737','2019-08-03 15:01:14'),(6457027,'Jo','Anderson','jo.anderson@example.org','(03) 0459 4863','2019-08-03 15:01:14'),(6615696,'Esperanza','Hermiston','esperanza.hermiston@example.com','+61883396837','2019-08-03 15:01:14'),(6630436,'Lavon','Effertz','lavon.effertz@example.org','(07)-7688-3597','2019-08-03 15:01:17'),(6776727,'Jarrett','Zboncak','jarrett.zboncak@example.org','03-4879-0580','2019-08-03 15:01:14'),(6813567,'Elyse','Murazik','elyse.murazik@example.net','07-0582-0323','2019-08-03 15:01:14'),(6823388,'Helga','Jaskolski','helga.jaskolski@example.org','1736 8973','2019-08-03 15:01:15'),(6903648,'Armand','Gibson','armand.gibson@example.org','(03)37155719','2019-08-03 15:01:16'),(7118202,'Sienna','Paucek','sienna.paucek@example.net','03.2879.7270','2019-08-03 15:01:15'),(7126333,'Evie','Gottlieb','evie.gottlieb@example.net','+61 7 5425 8093','2019-08-03 15:01:17'),(7140204,'Emilio','Cremin','emilio.cremin@example.net','02.8995.7268','2019-08-03 15:01:16'),(7143878,'Geoffrey','Zboncak','geoffrey.zboncak@example.net','+61323771769','2019-08-03 15:01:15'),(7149603,'Mac','Kunde','mac.kunde@example.com','(03).9675.6093','2019-08-03 15:01:16'),(7345563,'Alexis','Kihn','alexis.kihn@example.com','(02)-0895-0291','2019-08-03 15:01:17'),(7389169,'Shana','Eichmann','shana.eichmann@example.com','02-0921-5926','2019-08-03 15:01:17'),(7525358,'Myrtle','Durgan','myrtle.durgan@example.com','7027-2683','2019-08-03 15:01:15'),(7614062,'Alfredo','Bosco','alfredo.bosco@example.com','+61 2 4607 5289','2019-08-03 15:01:17'),(7652056,'Electa','Okuneva','electa.okuneva@example.com','4471.8531','2019-08-03 15:01:15'),(7730954,'Sibyl','Feil','sibyl.feil@example.com','3491.3991','2019-08-03 15:01:16'),(7808927,'Curt','Johnston','curt.johnston@example.com','08 3121 7407','2019-08-03 15:01:16'),(7936706,'Joan','Mayer','joan.mayer@example.com','+61 7 6794 0999','2019-08-03 15:01:15'),(7970214,'Edwardo','Rowe','edwardo.rowe@example.org','(08) 7167 1968','2019-08-03 15:01:13'),(8046312,'Geraldine','Homenick','geraldine.homenick@example.com','9945 6570','2019-08-03 15:01:16'),(8075189,'Darlene','Walker','darlene.walker@example.com','08-3244-9614','2019-08-03 15:01:15'),(8158928,'Pearline','Schroeder','pearline.schroeder@example.org','+61-8-1483-8469','2019-08-03 15:01:14'),(8275944,'Orland','Larkin','orland.larkin@example.com','(03).1439.9569','2019-08-03 15:01:16'),(8384200,'Gwendolyn','Schmidt','gwendolyn.schmidt@example.net','+61-8-6093-4812','2019-08-03 15:01:14'),(8395933,'Kolby','Mueller','kolby.mueller@example.net','08-3575-4014','2019-08-03 15:01:16'),(8590178,'Cecile','Franecki','cecile.franecki@example.org','08-6913-7300','2019-08-03 15:01:15'),(8614639,'Violet','Gutkowski','violet.gutkowski@example.com','6409-5334','2019-08-03 15:01:17'),(8836302,'Roxane','Bartoletti','roxane.bartoletti@example.com','+61710348564','2019-08-03 15:01:15'),(8891502,'Dudley','Hane','dudley.hane@example.com','0322654740','2019-08-03 15:01:15'),(8917811,'Rylan','Hill','rylan.hill@example.com','+61706367039','2019-08-03 15:01:16'),(8924059,'Lesly','Konopelski','lesly.konopelski@example.com','5443 3257','2019-08-03 15:01:17'),(9058691,'Cory','Mohr','cory.mohr@example.com','(08)16332469','2019-08-03 15:01:16'),(9115152,'Deja','Rath','deja.rath@example.net','(07)-1532-2448','2019-08-03 15:01:15'),(9392599,'Chris','Heller','chris.heller@example.org','08 9154 1974','2019-08-03 15:01:16'),(9481397,'Terrance','Gutkowski','terrance.gutkowski@example.org','+61768754464','2019-08-03 15:01:17'),(9586566,'Salvatore','Schaefer','salvatore.schaefer@example.com','4949-4494','2019-08-03 15:01:14'),(9652775,'Trey','Hane','trey.hane@example.org','7293 1863','2019-08-03 15:01:17'),(9669222,'Oran','Fadel','oran.fadel@example.com','+61296547587','2019-08-03 15:01:17'),(9808184,'Dorthy','Prohaska','dorthy.prohaska@example.com','(02)-7433-7472','2019-08-03 15:01:17'),(9811769,'Maia','Lindgren','maia.lindgren@example.net','03-5620-4521','2019-08-03 15:01:17'),(9852250,'Reece','Olson','reece.olson@example.org','+61213155408','2019-08-03 15:01:17'),(9854133,'Ruthie','Kunde','ruthie.kunde@example.org','+61248264296','2019-08-03 15:01:17'),(9872222,'Winona','Simonis','winona.simonis@example.net','9923-4899','2019-08-03 15:01:15');

/*Table structure for table `order` */

DROP TABLE IF EXISTS `order`;

CREATE TABLE `order` (
  `id` bigint(20) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `order_date` datetime DEFAULT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`,`customer_id`)  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `order_items` */

DROP TABLE IF EXISTS `order_items`;

CREATE TABLE `order_items` (
  `order_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit_price` decimal(14,2) DEFAULT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`,`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `id` bigint(20) NOT NULL,
  `brand_id` bigint(20) NOT NULL,
  `title` varchar(225) DEFAULT NULL,
  `subtitle` varchar(225) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `thumbnail` varchar(150) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `url` varchar(150) DEFAULT NULL,
  `upc` varchar(50) DEFAULT NULL,
  `gtin14` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`,`brand_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


/*Table structure for table `product_brand` */

DROP TABLE IF EXISTS `product_brand`;

CREATE TABLE `product_brand` (
  `id` bigint(20) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


/*Table structure for table `shipping_address` */

DROP TABLE IF EXISTS `shipping_address`;

CREATE TABLE `shipping_address` (
  `customer_id` bigint(20) NOT NULL,
  `street` varchar(150) DEFAULT NULL,
  `suburb` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
