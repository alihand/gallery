--  Database olusturma 
    CREATE DATABASE `mydb` ;
--
-- `login` tablosu icin tablo olusturma
--
CREATE TABLE IF NOT EXISTS `login` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
);
--
--`login` tablosu icin kullanıcı degerlerini girme
--
INSERT INTO `login` (`Id`, `Username`, `Password`) VALUES
(1, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229');

INSERT INTO `login` (`Id`, `Username`, `Password`) VALUES
(2, 'alihan', '81dc9bdb52d04dc20036dbd8313ed055');
--
--  Resimler icin `gallery` tablosu olusturma
--
CREATE TABLE IF NOT EXISTS `gallery` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ImageName` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`)
);
--
--`gallery` tablosu icin resimleri ekleme
--
INSERT INTO `gallery` (`ID`,`ImageName`) VALUES
(1,'rotatetrans.jpg'),
(2,'kedi.jpeg'),
(3,'BB-8_Clean_legal_line_1024x1024.jpg'),
(4,'jpg.jpg'),
(5,'toy-story-4ten-yeni-tanitim,H9nKsTP6ikGyRMogDemVrg.jpg'),
(6,'JPEG_example_JPG_RIP_100.jpg');