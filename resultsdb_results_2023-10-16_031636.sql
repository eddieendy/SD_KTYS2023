/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET SQL_NOTES=0 */;
DROP TABLE IF EXISTS results;
CREATE TABLE `results` (
  `Kod` varchar(8) NOT NULL,
  `Subjek` varchar(50) NOT NULL,
  `Gred` varchar(1) NOT NULL,
  `GPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO results(Kod,Subjek,Gred,GPA) VALUES('\'DDWD1223\'','\'COMPUTER ORGANIZATION AND ASSEMBLY LANGUAGE\'','\'C\'','2');