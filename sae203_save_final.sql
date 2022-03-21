-- MySQL dump 10.19  Distrib 10.3.29-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sae203
-- ------------------------------------------------------
-- Server version	10.3.29-MariaDB-0+deb10u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `jeux_video`
--

DROP TABLE IF EXISTS `jeux_video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jeux_video` (
  `jv_id` int(11) NOT NULL AUTO_INCREMENT,
  `jv_titre` varchar(50) NOT NULL,
  `jv_annee_sortie` varchar(10) NOT NULL,
  `jv_photo` varchar(100) NOT NULL,
  `jv_note` varchar(10) NOT NULL,
  `jv_prix` float NOT NULL,
  `jv_disponibilite_mobile` varchar(3) NOT NULL,
  `jv_multiplateformes` varchar(3) NOT NULL,
  `_stud_id` int(11) NOT NULL,
  PRIMARY KEY (`jv_id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jeux_video`
--

LOCK TABLES `jeux_video` WRITE;
/*!40000 ALTER TABLE `jeux_video` DISABLE KEYS */;
INSERT INTO `jeux_video` VALUES (1,'Fallout 76','04/11/2018','img/fallout-76.jpg','9/20',69.99,'non','oui',1),(2,'Red dead redemption 2','26/09/2018','img/red-dead-redemption-2.jpg','19/20',59.99,'non','oui',2),(3,'Outriders','01/04/2021','img/outriders.jpg','15/20',59.99,'non','oui',3),(4,'Xenoblades Chronicles 2','01/12/2017','img/xenoblade-chronicles.jpg','16/20',59.99,'non','non',4),(5,'Mario kart 8 Deluxe','27/04/2017','img/mario-kart-8-deluxe.jpg','18/20',59.99,'non','non',5),(6,'Cuphead','29/09/2017','img/cuphead.jpg','17/20',19.99,'non','oui',6),(7,'Dead Cells','10/05/2017','img/dead-cells.jpg','18/20',24.99,'non','oui',7),(8,'Minecraft','18/11/2011','img/minecraft.jpg','19/20',29.99,'oui','oui',8),(9,'World of Warcraft','23/11/2004','img/wow.jpg','18/20',0,'non','non',9),(10,'Starcraft 2','27/07/2010','img/starcraft-2.jpg','18/20',0,'non','non',9),(11,'Overwatch','03/05/2016','img/overwatch.jpg','17/20',19.99,'non','oui',9),(12,'Call of Duty: VanGuard','16/09/2021','img/callofduty-vanguard.jpg','14/20',69.99,'non','oui',10),(13,'Halo Infinite','08/12/2021','img/halo-infinite.jpg','16/20',69.99,'non','non',11),(14,'Ori and the blind forest','11/03/2015','img/ori.jpg','18.3/20',19.99,'non','oui',12),(15,'Angry bird','10/12/2009','img/Angry_Birds.png','16/20',0,'oui','oui',13),(16,'Plants vs Zombies 2','09/07/2013','img/Plants_vs_Zombies_2.png','16/20',0,'oui','oui',14),(17,'Brawl Star','14/06/2017','img/brawl-star.png','14/20',0,'oui','non',15),(18,'Clash of clans','02/08/2012','img/coc.jpg','15.7/20',0,'oui','non',15),(19,'Subway surfer','23/05/2012','img/subway.jpg','16.1/20',0,'oui','non',16),(20,'Lost Ark','04/12/2019','img/lost-ark.jpg','12.7/20',0,'non','non',17),(21,'Ark','02/06/2015','img/ark.jpg','13.8/20',23.99,'non','oui',18),(22,'Clash Royale','02/03/2016','img/clash-royale.jpg','10',0,'oui','non',15),(23,'La noire','17/05/2011','img/la-noire.jpg','17/20',39.99,'non','oui',2),(24,'GTA 5','17/09/2013','img/gta5.jpg','18/20',29.99,'non','oui',2),(25,'Fnaf: security breach','16/09/2021','img/fnaf.jpg',' 11/20',33.99,'oui','oui',19),(26,'Dead by daylight','14/06/2016','img/dbd.jpg','11.6/20',19.99,'oui','oui',20),(27,'Fortnite','21/07/2017','img/fortnite.jpg','16/20',0,'oui','oui',21),(28,'Apex Legend','04/02/2019','img/fapex.jpg','17/20',0,'non','oui',22),(29,'Super smash bros ultimate','07/12/2018','img/smash.jpg','18/20',69.99,'non','non',23),(30,'The legend of zelda BOTW','03/03/2017','img/zelda-botw.jpg','20/20',69.99,'non','non',5),(31,'Steet Fighter 5','16/02/2016','img/street-fighter-v.jpg','18/20',19.99,'non','oui',24),(32,'Tales of Vesperia','07/08/2008','img/tales-of-vesperia.jpg','18/20',49.99,'non','oui',23),(33,'Farcry 6','06/10/2021','img/far-cry-6.jpg','16/20',59.99,'non','oui',25),(34,'Battle Breakers','13/11/2019','img/battle-breakers.jpg','13.6/20',0,'oui','oui',21),(35,'Assassin\'s Creed Valhalla','10/11/2020','img/ac-valhalla.png','18/20',59.99,'non','non',25),(36,'Alien Isolation','06/10/2014','img/alien-isolation.jpg','16/20',39.99,'non','oui',26),(37,'XCOM 2','05/02/2016','img/xcom2.jpg','18/20',49.99,'non','oui',27),(38,'Borderlands 3','13/09/2019','img/borderlands-3.jpg','16/20',59.99,'non','oui',28),(39,'Kirby star allies','16/03/2018','img/kirby-star-allies.jpg','14/20',59.99,'non','non',29),(40,'Monster Hunter Rise','26/03/2021','img/monster-hunter-rise.jpg','18/20',44.99,'non','oui',24),(41,'Pokémon Legend Arceus','28/01/2022','img/legendes-pokemon-arceus.jpg','16/20',59.99,'non','non',30),(42,'Titan Fall','11/03/2014','img/titanfall.jpg','15/20',19.99,'non','oui',22),(43,'Fallout Shelter','14/06/2015','img/falloutShelter.jpg','16/20',0,'oui','oui',1),(44,'Genshin Impact','28/09/2020','img/genshin-impact.jpg','13.1/20',0,'oui','oui',31),(45,'Mario Odyssey','27/10/2017','img/super-mario-odyssey.jpg',' 19/20',59.99,'non','non',5),(46,'Pokémon Bouclier','15/10/2019','img/pokemonShield.jpg','16/20',59.99,'non','non',30),(47,'Rayman Legend','28/08/2013','img/rayman-legend.jpg','18/20',39.99,'non','non',25),(48,'Inazuma Eleven 2','01/10/2009','img/inazuma-eleven2.jpg','15/20',8.99,'non','non',32),(49,'Yokai Watch 3','11/07/2013','img/Yo-Kai-Watch.jpg','15/20',14.99,'non','oui',32),(50,'Final Fantasy XV','29/11/2016','img/final-fantasyXV.jpg','18/20',34.99,'non','oui',3),(58,'ça mousse ','2022','img/uploads/2022_03_21_17_46_18---224893924_small.jpg','10/20',10.99,'oui','non',32);
/*!40000 ALTER TABLE `jeux_video` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stud_developpement`
--

DROP TABLE IF EXISTS `stud_developpement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stud_developpement` (
  `stud_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_nom` varchar(50) NOT NULL,
  `stud_date_creation` varchar(10) NOT NULL,
  `stud_fondateur` varchar(30) NOT NULL,
  `stud_co-fondateur` varchar(30) NOT NULL,
  `stud_siege_social_ville` varchar(30) NOT NULL,
  `stud_siege_social_pays` varchar(20) NOT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stud_developpement`
--

LOCK TABLES `stud_developpement` WRITE;
/*!40000 ALTER TABLE `stud_developpement` DISABLE KEYS */;
INSERT INTO `stud_developpement` VALUES (1,'Bethesda','28/06/1986','Robert A. Altman ','Christopher Weaver','Rockville ','Etats-Unis'),(2,'Rockstar','27/12/1998','Dan Houser','Sam Houser','New York ','Etats-Unis'),(3,'Square Enix','01/04/2003','Yasuhiro Fukushima','Masafumi Miyamoto','Shinkuju ','Japon'),(4,'Monolith Soft','01/10/1999','Tetsuya Takahashi','Hirohide Sugiura','Tokyo ','Japon'),(5,'Nintendo','23/09/1989','Fusajiro Yamauchi','','Kyoto ','Japon'),(6,'Studio MDHR','25/10/2013','Chad Moldenhauer','Jared Moldenhauer','Oakville ','Canada'),(7,'Motion Twin','06/08/2001','Nicolas Cannasse','','Bordeaux ','France'),(8,'Mojang Studios','01/05/2009','Markus Persson','Jakob Porser','Stockholm ','Suede'),(9,'Blizzard Entertainment','08/02/1991','Michael Morhaime','Allen Adham','Ivrine ','Etats-Unis'),(10,'Sledgehammer Games','21/07/2009','Michael Condrey','Glen Schofield','Foster','Etats-Unis'),(11,'343 Industries','01/07/2007','Bonnie Ross','','Redmond ','Etats-Unis'),(12,'Moon Studios','02/07/1905','Thomas Malher','Gennadiy Korol','Vienne ','Autriche'),(13,'Rovio Mobile','10/11/2003','Niklas Hed','Kim Dikert','Espoo ','Finlande'),(14,'PopCap Games','22/06/1905','John Vechey','Brian Fiete','Seattle ','Etats-Unis'),(15,'Supercell','01/06/2010','Ilkka Paananen','Mikko Kodisoja','Helsinki ','Finlande'),(16,'Kiloo Games','22/06/1905','Jacob Moller','Simon Moller','Aarhus ','Danemark'),(17,'Smilegate','24/06/1905','HyukBin Kwon','','Seongnam','Corée du Sud'),(18,'Studio Wildcard','01/10/2014','Jesse Rapczak','Doug Kennedy','Kirkland ','Etats-Unis'),(19,'Steel Wood Studios','05/07/1905','Jossh Qualtieri','','Oakland ','Etats-Unis'),(20,'Behaviour Interactive','21/09/1992','Remi Racine','','Montreal','Canada'),(21,'Epic Games','15/01/1991','Tim Sweeney','Mark Rein','Cary','Etats-Unis'),(22,'Respawn Entertainment','12/04/2010','Vince Zampella','Jason West','Encino ','Etats-Unis'),(23,'Bandai Namco ','29/09/2015','Masaya Nakamura','','Minato-ku','Japon'),(24,'Capcom','30/05/1979','Kenzo Tsujimoto','','Osaka ','Japon'),(25,'Ubisoft ','28/03/1986','Yves Guillemot','Christian Guillemot','Montreuil ','France'),(26,'Creative Assembly ','18/08/1997','Tim Ansell','','Horsham ','Royaume-Uni'),(27,'Firaxis Games','01/05/1996','Sid Meier','Jeff Brings ','Baltimore ','Etats-Unis'),(28,'Gearbox Software','16/02/1999','Randy Pitchford','','Frisco ','Etats-Unis'),(29,'HAL Laboratory','21/02/1980','Mitsuhiro Ikeda','','Chiyoda ','Japon'),(30,'Game Freak ','26/04/1989','Junichi Masuda','Satoshi Tajiri','Tokyo ','Japon'),(31,'MiHoYo','13/02/2012','Liu Wei','Luo Yuhao ','Shanghai','Chine'),(32,'Level-5','01/10/1998','Akhiro Hino','','Fukuoka','Japon');
/*!40000 ALTER TABLE `stud_developpement` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-21 17:59:07
