-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: book_store_database
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Temporary view structure for view `active_customers`
--

DROP TABLE IF EXISTS `active_customers`;
/*!50001 DROP VIEW IF EXISTS `active_customers`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `active_customers` AS SELECT 
 1 AS `customer_id`,
 1 AS `fname`,
 1 AS `lname`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `author_view`
--

DROP TABLE IF EXISTS `author_view`;
/*!50001 DROP VIEW IF EXISTS `author_view`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `author_view` AS SELECT 
 1 AS `Author_Last`,
 1 AS `Author_first`,
 1 AS `Book`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `authors` (
  `Author_id` int NOT NULL AUTO_INCREMENT,
  `Fname` varchar(45) DEFAULT NULL,
  `Lname` varchar(45) DEFAULT NULL,
  `GenreID` int DEFAULT NULL,
  PRIMARY KEY (`Author_id`),
  KEY `Genre_id_idx` (`GenreID`),
  CONSTRAINT `Genre_id` FOREIGN KEY (`GenreID`) REFERENCES `genre` (`Genre_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
INSERT INTO `authors` VALUES (1,'Suzanne','Collins',1),(2,'J.K.','Rowling',2),(3,'Markus ','Zusak',3),(4,'J.R.R','Tolken',2),(5,'Dr.','Suesss',4),(6,'Douglas','Adams',5);
UNLOCK TABLES;

--
-- Temporary view structure for view `authors_stocked`
--

DROP TABLE IF EXISTS `authors_stocked`;
/*!50001 DROP VIEW IF EXISTS `authors_stocked`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `authors_stocked` AS SELECT 
 1 AS `fname`,
 1 AS `lname`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `books` (
  `ISBN` varchar(13) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `AuthorID` int DEFAULT NULL,
  `PubID` int DEFAULT NULL,
  `Price` float DEFAULT NULL,
  `GenreID` int DEFAULT NULL,
  PRIMARY KEY (`ISBN`),
  KEY `Author_id_idx` (`AuthorID`),
  KEY `Publisher_id_idx` (`PubID`),
  KEY `Genre_id_idx` (`GenreID`),
  KEY `Author` (`AuthorID`),
  KEY `Publisher` (`PubID`),
  KEY `Genre` (`GenreID`),
  CONSTRAINT `Author` FOREIGN KEY (`AuthorID`) REFERENCES `authors` (`Author_id`) ON UPDATE CASCADE,
  CONSTRAINT `Genre` FOREIGN KEY (`GenreID`) REFERENCES `genre` (`Genre_id`),
  CONSTRAINT `Publisher` FOREIGN KEY (`PubID`) REFERENCES `publisher` (`Publisher_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
INSERT INTO `books` VALUES ('9780007247912','Cat in the Hat',5,4,5.99,4),('9780345538376','The Lord of the Rings #0-3',4,3,12.99,2),('9780375831003','The Book Thief',3,2,11.99,3),('9780439023481','The Hunger Games',1,1,8.99,1),('9780439358071','Harry Potter and the Order of the Phoenix',2,1,7.99,2),('9999999999999','Hitchhikers Guide to the Galaxy',6,5,6.99,5);
UNLOCK TABLES;

--
-- Temporary view structure for view `budget_books`
--

DROP TABLE IF EXISTS `budget_books`;
/*!50001 DROP VIEW IF EXISTS `budget_books`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `budget_books` AS SELECT 
 1 AS `name`,
 1 AS `price`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `catalog`
--

DROP TABLE IF EXISTS `catalog`;
/*!50001 DROP VIEW IF EXISTS `catalog`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `catalog` AS SELECT 
 1 AS `ISBN`,
 1 AS `Name`,
 1 AS `Author_first`,
 1 AS `Authors_Last`,
 1 AS `Genre`,
 1 AS `Publisher`,
 1 AS `Price`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customers` (
  `customer_id` int NOT NULL AUTO_INCREMENT,
  `Fname` varchar(45) DEFAULT NULL,
  `Lname` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Address` varchar(45) DEFAULT NULL,
  `Pword` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
INSERT INTO `customers` VALUES (1,'Bob ','Bobert','Bob@mail.com','123 Bob Lane','BOB'),(2,'Eric','Hua','erichua139@gmail.com','24 Jones Ave.','123'),(3,'Mary','Jane','m.j@mail.com','13 newyork lane','Spidey');
UNLOCK TABLES;

--
-- Table structure for table `genre`
--

DROP TABLE IF EXISTS `genre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `genre` (
  `Genre_id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) DEFAULT NULL,
  `Aisle` int DEFAULT NULL,
  PRIMARY KEY (`Genre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genre`
--

LOCK TABLES `genre` WRITE;
INSERT INTO `genre` VALUES (1,'Young Adult',1),(2,'Fantasy',4),(3,'Historical',2),(4,'Childrens',1),(5,'Science Fiction',8);
UNLOCK TABLES;

--
-- Temporary view structure for view `genres`
--

DROP TABLE IF EXISTS `genres`;
/*!50001 DROP VIEW IF EXISTS `genres`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `genres` AS SELECT 
 1 AS `Title`,
 1 AS `Genre`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `order_info`
--

DROP TABLE IF EXISTS `order_info`;
/*!50001 DROP VIEW IF EXISTS `order_info`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `order_info` AS SELECT 
 1 AS `Fname`,
 1 AS `Lname`,
 1 AS `Address`,
 1 AS `Order_id`,
 1 AS `Price`,
 1 AS `Items`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `order_rundown`
--

DROP TABLE IF EXISTS `order_rundown`;
/*!50001 DROP VIEW IF EXISTS `order_rundown`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `order_rundown` AS SELECT 
 1 AS `TOTAL`,
 1 AS `AVERAGE_ORDER`,
 1 AS `NUMBER_OF_ORDERS`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `Order_id` int NOT NULL AUTO_INCREMENT,
  `Price` float DEFAULT NULL,
  `CustomerID` int DEFAULT NULL,
  `Items` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`Order_id`),
  KEY `Customer_idx` (`CustomerID`),
  CONSTRAINT `Customer` FOREIGN KEY (`CustomerID`) REFERENCES `customers` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
INSERT INTO `orders` VALUES (1,14.98,1,'\' Harry Potter and the Order of the Phoenix \', \' Cat in the Hat \''),(2,12.99,3,'\' The Lord of the Rings #0-3 \'');
UNLOCK TABLES;

--
-- Table structure for table `publisher`
--

DROP TABLE IF EXISTS `publisher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `publisher` (
  `Publisher_id` int NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Location` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Publisher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publisher`
--

LOCK TABLES `publisher` WRITE;
INSERT INTO `publisher` VALUES (1,'Scholastic Press','Wilkinsburg, Pennsylvania, United States'),(2,'Alfred A. Knopf','New York, New York, United States'),(3,'Ballantine Books','New York, New York, United States'),(4,'Del Rey','New York, New York, United States'),(5,'Random House','New York, New York, United States');
UNLOCK TABLES;

--
-- Temporary view structure for view `publisher_employee`
--

DROP TABLE IF EXISTS `publisher_employee`;
/*!50001 DROP VIEW IF EXISTS `publisher_employee`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `publisher_employee` AS SELECT 
 1 AS `publisher`,
 1 AS `Author_first`,
 1 AS `Authors_last`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `publisher_view`
--

DROP TABLE IF EXISTS `publisher_view`;
/*!50001 DROP VIEW IF EXISTS `publisher_view`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `publisher_view` AS SELECT 
 1 AS `Publisher`,
 1 AS `Title`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reviews` (
  `Review_id` int NOT NULL AUTO_INCREMENT,
  `BookID` varchar(13) DEFAULT NULL,
  `Rating` varchar(45) DEFAULT NULL,
  `Review` varchar(200) DEFAULT NULL,
  `Date` varchar(45) DEFAULT NULL,
  `CustomerID` int DEFAULT NULL,
  PRIMARY KEY (`Review_id`),
  KEY `Reviewer_idx` (`CustomerID`),
  KEY `Book_idx` (`BookID`),
  CONSTRAINT `Book` FOREIGN KEY (`BookID`) REFERENCES `books` (`ISBN`),
  CONSTRAINT `Reviewer` FOREIGN KEY (`CustomerID`) REFERENCES `customers` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
INSERT INTO `reviews` VALUES (1,'9780007247912','5/5','Chlengin read!','01/01/2020',1),(2,'9999999999999','4/5','What a fun read! Love the part where the guy did the thing!','02/12/2021',2),(3,'9780375831003','5/5','Fatastic story telling from the a unique perspective.','11/28/2022',3),(4,'9780439358071','3/5','Intersting, but to far fetched for me.','12/05/2018',1);
UNLOCK TABLES;

--
-- Final view structure for view `active_customers`
--

/*!50001 DROP VIEW IF EXISTS `active_customers`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `active_customers` AS select `customers`.`customer_id` AS `customer_id`,`customers`.`Fname` AS `fname`,`customers`.`Lname` AS `lname` from `customers` where `customers`.`customer_id` in (select `orders`.`CustomerID` from `orders` union select `reviews`.`CustomerID` from `reviews`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `author_view`
--

/*!50001 DROP VIEW IF EXISTS `author_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `author_view` AS select `authors`.`Lname` AS `Author_Last`,`authors`.`Fname` AS `Author_first`,`books`.`Name` AS `Book` from (`books` left join `authors` on((`books`.`AuthorID` = `authors`.`Author_id`))) order by `authors`.`Lname` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `authors_stocked`
--

/*!50001 DROP VIEW IF EXISTS `authors_stocked`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `authors_stocked` AS select `authors`.`Fname` AS `fname`,`authors`.`Lname` AS `lname` from `authors` where `authors`.`Author_id` in (select `books`.`AuthorID` from `books`) group by `authors`.`GenreID` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `budget_books`
--

/*!50001 DROP VIEW IF EXISTS `budget_books`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `budget_books` AS select `books`.`Name` AS `name`,`books`.`Price` AS `price` from `books` where (`books`.`Price` < (select avg(`books`.`Price`) from `books`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `catalog`
--

/*!50001 DROP VIEW IF EXISTS `catalog`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `catalog` AS select `books`.`ISBN` AS `ISBN`,`books`.`Name` AS `Name`,`authors`.`Fname` AS `Author_first`,`authors`.`Lname` AS `Authors_Last`,`genre`.`Name` AS `Genre`,`publisher`.`Name` AS `Publisher`,`books`.`Price` AS `Price` from (((`books` left join `authors` on((`books`.`AuthorID` = `authors`.`Author_id`))) left join `genre` on((`books`.`GenreID` = `genre`.`Genre_id`))) left join `publisher` on((`books`.`PubID` = `publisher`.`Publisher_id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `genres`
--

/*!50001 DROP VIEW IF EXISTS `genres`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `genres` AS select `books`.`Name` AS `Title`,`genre`.`Name` AS `Genre` from (`books` left join `genre` on((`books`.`GenreID` = `genre`.`Genre_id`))) order by `genre`.`Genre_id` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `order_info`
--

/*!50001 DROP VIEW IF EXISTS `order_info`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `order_info` AS select `full`.`Fname` AS `Fname`,`full`.`Lname` AS `Lname`,`full`.`Address` AS `Address`,`orders`.`Order_id` AS `Order_id`,`orders`.`Price` AS `Price`,`orders`.`Items` AS `Items` from (`customers` `full` join `orders` on((`orders`.`CustomerID` = `full`.`customer_id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `order_rundown`
--

/*!50001 DROP VIEW IF EXISTS `order_rundown`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `order_rundown` AS select cast(sum(`orders`.`Price`) as decimal(65,1)) AS `TOTAL`,cast(avg(`orders`.`Price`) as decimal(65,1)) AS `AVERAGE_ORDER`,count(0) AS `NUMBER_OF_ORDERS` from `orders` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `publisher_employee`
--

/*!50001 DROP VIEW IF EXISTS `publisher_employee`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `publisher_employee` AS select `publisher`.`Name` AS `publisher`,`authors`.`Fname` AS `Author_first`,`authors`.`Lname` AS `Authors_last` from ((`books` left join `authors` on((`authors`.`Author_id` = `books`.`AuthorID`))) left join `publisher` on((`publisher`.`Publisher_id` = `books`.`PubID`))) order by `publisher`.`Name` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `publisher_view`
--

/*!50001 DROP VIEW IF EXISTS `publisher_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `publisher_view` AS select `publisher`.`Name` AS `Publisher`,`books`.`Name` AS `Title` from (`publisher` left join `books` on((`publisher`.`Publisher_id` = `books`.`PubID`))) order by `publisher`.`Name` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed
