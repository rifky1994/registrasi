/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.6.16 : Database - registrasi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`registrasi` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `registrasi`;

/*Table structure for table `anggota` */

DROP TABLE IF EXISTS `anggota`;

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nak` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nik` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `anggota` */

insert  into `anggota`(`id`,`nak`,`nama`,`nik`) values (1,400,'MOCHAMAD OSMANI','551639'),(2,479,'DADANG SUKARNA','620083'),(3,507,'NANA SOBANA','620096'),(4,634,'MIMIK SUMIYATI','601427'),(5,638,'EDDY SUHARDI','601442'),(6,639,'ENGKOS KOSRIYADI','630365'),(7,646,'YAYAT ROHADIYAT','620923'),(8,651,'MISBAH','620674'),(9,706,'NANAN ','631246'),(10,711,'WALUDIN','602019'),(11,729,'DINI YULIANI','631188'),(12,731,'RUKMANA','591667'),(13,745,'SUHERMAN AMURASA SANTOSO','622093'),(14,751,'YUDI YUNIARTO','631227'),(15,753,'DEDDY HAFIDI','602015'),(16,756,'AJAT SUDRAJAT','612111'),(17,758,'SAMBAS SETIAWAN','640355'),(18,766,'EEM SULAEMAN','602129'),(19,771,'MAMAN KARMANA','631251'),(20,773,'ENDANG SUHARA','622070'),(21,776,'YANDI WIYANDI','640349'),(22,839,'DADANG SUTISNA','633347'),(23,840,'OMAN SURYANA','633328'),(24,842,'ATANG SODIKIN','633319'),(25,843,'DEDI SUJADI','633340'),(26,844,'DIDI SUHERMAN','623330'),(27,847,'IDA SURYADI','651507'),(28,849,'ATEP KUSNADI','660600'),(29,853,'UBEY','642443'),(30,856,'UJANG BURHANUDIN','602475'),(31,866,'DWI ANDAYANI PUSPORINI, RR','612114'),(32,872,'SYAFRUDIN','622085'),(33,887,'DAVID WAIRISSAL','631357'),(34,888,'ADIANA MAJID','622181'),(35,889,'IBNU MUTOWALI','640450'),(36,895,'NINA HERLINA','631393'),(37,900,'UNTUNG SUPRIYANTO','640487'),(38,904,'ALEX INDRA PALAKA','640452'),(39,930,'SYAHRIN MUSA','531966'),(40,941,'MASYAHATUN','611236'),(41,947,'DEDI SADIMAN','680453'),(42,948,'ACHMAD SARBINI','633345'),(43,950,'LEO DANDUN BINTORO','660599'),(44,951,'NANUNG SUHERMAN','651511'),(45,952,'RACHMAT','670514'),(46,953,'USEP SAEPUROHMAN','660601'),(47,955,'ASEP JIJI','651508'),(48,956,'SULAEMAN','680452'),(49,958,'UJANG SUBANDAR','642436'),(50,959,'DEDI SUTARDI','642452'),(51,960,'YAYUS RUSMANA','612732'),(52,963,'PONIMAN','602474'),(53,968,'DEWI ASIH RATNASIH','601999'),(54,970,'AGUS HARYONO','602027'),(55,972,'KARTIWA SAPJAWIJAYA','622033'),(56,975,'CUCUM KOLSUM','650462'),(57,977,'ONENG RESMAYATI','650470'),(58,978,'IIS SOFIANI','622739'),(59,979,'ENTEP DJAENUDIN','641293'),(60,984,'SUGIONO','641311'),(61,986,'ASRI HAMBALI','632184'),(62,988,'ISKANDAR ZULKARNAIN','641309'),(63,990,'KUSNANDAR','622751'),(64,998,'DJUHANA','632181'),(65,1002,'AYI SUDRAJAT','631213'),(66,1061,'LILIS ANDESAH','601996'),(67,1133,'ASEP SURYANA','612085'),(68,1139,'GEGEN SUDARGIN','612741'),(69,1142,'SURYANA','642451'),(70,1143,'ADANG AHMAD ISKANDAR','633346'),(71,1144,'YAYAN SUNDIAN','602476'),(72,1151,'SUTRISNA','623324'),(73,1154,'YAYAN GUMILANG','621601'),(74,1211,'EMAN HARYANA','611162'),(75,1235,'I PUTU YASA','640014'),(76,1239,'SOHIBUROHMAT','622083'),(77,1261,'JATNIKA','600466'),(78,1262,'MARSUDI','600451'),(79,1272,'YOHANES WIJANARTO','600450'),(80,1312,'ROCHMAN','602478'),(81,1319,'YADI MULYADI','633326'),(82,1320,'AGUS SETIADI','651514'),(83,1341,'LILIS RITA RACHMAYATI','640181'),(84,1342,'YULI HARNI RISNAWATI','640280'),(85,1388,'KADAR WINARTI','650475'),(86,1403,'EUIS NURAENI','631186'),(87,1404,'HARYANI','640338'),(88,1435,'MINTONI PASARIBU','601474'),(89,1516,'SITI AISYAH','622041'),(91,1559,'TUTI HERAWATI','641279'),(92,1621,'TUTI SARTIKA','531505'),(93,1639,'NENA TAHER','620108'),(94,1640,'WIWIEK HERAWATI','620267'),(95,1645,'MAS RORO SETIAWATI','631390'),(96,1647,'APIS RAPISAH SILAWATI','650156'),(97,1649,'AAM AMINAH','650162'),(98,1692,'DANI WENDANINGSIH','622194'),(99,1695,'NURCAHYANI','631394'),(100,1696,'DIANI PRUWATI','640481'),(101,1697,'ENDAH AMINAH','640488'),(102,1698,'ENTIN RUSTINI','640498'),(103,1700,'II MULYATI','650145'),(104,1727,'YUSMADI','591661'),(105,1732,'SUPRIYONO','632133'),(106,1755,'ADE KOSASIH','612090'),(107,1759,'YAYAT RUHIYAT','622039'),(108,1761,'DEDI SULAEMAN','650974'),(109,1769,'SRI ROSANTI','680119'),(110,1780,'SURYATI','631232'),(111,1815,'ADANG SUPRIADI','631206'),(112,1837,'HERRY SUNANDI','660065'),(113,1876,'YAYAT SUDRADJAT','670513'),(114,1877,'SAMSURI','642454'),(115,1882,'NEDIH','633336'),(116,1884,'ADIN TARDIN','660598'),(117,1887,'SOPIAN','612739'),(118,1892,'IMAM RIGARNO','612733'),(119,2009,'IYAN SUPRIATNA','622051'),(120,2027,'NURAH GUNARIAH','650150'),(121,2035,'RUDDY SUPRIHADHY','640330'),(122,2048,'SUMARNI','640490'),(123,2056,'TATI RIZKIANI ISKANDAR','631191'),(124,2080,'ATANG TATANG RUKMANA','591776'),(125,2089,'ONENG HALIMAH','640505'),(126,2172,'HERI CUNIAWAN','670515'),(127,2223,'SUWANDI','600377'),(128,2254,'BUMIANI','640129'),(129,2323,'ISDIANTO','590122'),(130,2328,'DEDI SUHANDA','602023'),(131,2342,'NITA NURHAYATI','690406'),(132,2373,'NANI ROHAENI','601997'),(133,2388,'B. BUDIHADI NURSASONO','640666'),(134,2433,'RADEN SITI FATIMAH','730018'),(135,2464,'SUHARIJONO','680071'),(136,0,'admin','580726'),(137,2490,'NURDIN SYAH','591370'),(138,2506,'SARWONO','611198'),(139,2536,'HENI SRI SUMARNI','612187'),(140,2539,'LIMAN','640079'),(141,2540,'WAWAN SETIAWAN','650458'),(142,2583,'ENTIN KURAESIN','611204'),(143,2589,'NURIH SITEPU','622907'),(144,2611,'JULAEHA','660062'),(145,2623,'TUTI NINGSIH','641303'),(146,2642,'FARIDAH','590590'),(147,2644,'TANTRI HARIMURTI','630348'),(148,2646,'ROSDIANA','640457'),(149,2656,'ATI KURNIATI,NY','620914'),(150,2708,'SRI MULYATI','700459'),(151,2709,'SRI LESTARI ANDAYANI','710228'),(152,2710,'ERNI KUSTININGSIH','700456'),(153,2713,'SYARIAH SAGALA','680449'),(154,2716,'INNA KARTINA','690404'),(155,2718,'KRISTIANI PUDIASTUTI','700445'),(156,2719,'EUIS TATI ROHAENI','700447'),(157,2723,'SRI MULYATI','680447'),(158,2739,'HERRY SUHENDI','591351'),(159,2740,'TINI GUSTIANI','620887'),(160,2743,'TASIAH','640081'),(161,2745,'HILMAN GUMILAR','740002'),(162,2752,'MERRY PATTY','630915'),(163,2768,'SRI WIDANINGSIH,NY','601424'),(164,2769,'DYAH NUR CHOLIDA,NY','610707'),(165,2774,'SITI NURBAENI','640459'),(166,2776,'ASEP SASMITA','650929'),(167,2777,'EKA WIDIHASTUTI','660147'),(168,2810,'NYAYU LATIFAH','621875'),(169,2849,'SOBAR','612448'),(170,2851,'NANY SOESILOWATI','641287'),(171,2865,'TUTI HERAWATI, RR.','610422'),(172,2867,'MARIANI SUMERU','611206'),(173,2868,'SRI HERTIN','621070'),(174,2870,'NINA MARLINA','630826'),(175,2879,'ENDANG IRIANI','622313'),(176,2895,'MOHAMAD OLIYANO','620087'),(178,2929,'IPAH MUNAYIPAH','640719'),(179,2959,'ZAINUL ARIEF','610245'),(180,2963,'SRI SUPRAPTI','611370'),(181,2969,'MAIMUNAH','621158'),(182,2986,'ADANG HENDANG','561665'),(183,2993,'SULAEMAN','592009'),(184,2995,'WAWANG','602322'),(185,2996,'WAWAN KOSASIH','612606'),(186,2997,'SUKIRNO','612607'),(187,2998,'DIDI (IDI) SAMSUDI','612609'),(188,2999,'EDDY SURYADI','612735'),(189,3000,'SISWO SUTARDI HARJOSUMARTO','623156'),(190,3001,'PUJONO','623163'),(191,3002,'RUSMAN','623328'),(192,3004,'MAMAN KOSWARA','633186'),(193,3005,'DADANG KUSMANA','633323'),(194,3007,'KARWAN SUKMANA','642273'),(195,3008,'ATANG SUGANDA','642274'),(196,3010,'AGUS KARYAWAN','651376'),(197,3011,'WAWAN RUDIANTO','651377'),(198,3015,'ASEP SURYANA','651384'),(199,3084,'SURYONO','650729'),(200,3113,'AGUS NADI','611768'),(201,3137,'CACIH','622717'),(202,3259,'YAYA','622745'),(203,3310,'ACHMAD','642194'),(204,3319,'DJONET BAMBANG GUNAWAN','641406'),(205,3357,'HERMAN SUYANTO','590707'),(206,3358,'PAUJI TAMIM','620782'),(207,3371,'ENTANG HARSONO','622189'),(208,3378,'JULIATI SITOMPUL','651337'),(209,3379,'AHMAD HUNEN','720119'),(210,3402,'YUSUF ABDULLAH','551149'),(211,3403,'HERRY PURNOMO','560011'),(212,3406,'DJOKO HARIADI','550759'),(213,3407,'SALIM HADI','570804'),(214,3411,'SETIANTI DEWI ROSLIANA','640494'),(215,3432,'HENU TRIYANTO','560389'),(216,3435,'SUHARMADJI','640548'),(217,3436,'SRI SETIANI NY','641302'),(218,3451,'SRI BUDI HARTI','611208'),(219,3455,'DANAN RIANTA','651362'),(220,3460,'UJANG SUNARYA','621606'),(221,3461,'NUNUNG HERYANA','641507'),(222,3462,'NI LUH EKEDANI ,NY','650240'),(223,3463,'DIDIN SAPRUDIN','640083'),(224,3465,'KP. ANTONIUS TRIGAMAWAN','610352'),(225,3466,'YANWAR RAHMADI','640353'),(226,3473,'MOHAMAD SAKBAN','620046'),(227,3474,'EKO SUROSO','631356'),(228,3478,'I GST AYU CANDRA MAHAGANDHI','621758'),(229,3487,'UMI INDRA DJULAEHA','622737'),(230,3513,'DAYAT SUPRIATNA','622027'),(231,3524,'DESMULYATI ADRIANI','590827'),(232,3526,'AGUS KAYUN','630652'),(233,3530,'MOHAMAD SETIAWAN','531428'),(234,3540,'NOTO PRAYITNO','611290'),(235,3561,'HERRY ISNAENI','600605'),(236,3565,'DEDI SUNARDI','611780'),(237,3571,'USUP','622091'),(238,3575,'AYI RODIANA','640460'),(239,3576,'SUMYATI DATO SALAMA','650923'),(240,3577,'KOKOH KABUL AMIN','730122'),(241,3580,'HULMAN MARASI','632969'),(242,3584,'NGADI WULYO UTOMO','670211'),(243,3588,'II SETIA','591342'),(244,3591,'JEJE PAMALUDIN','611724'),(245,3592,'NENENG SETIATI','602022'),(246,3596,'ANDAR HIDAYAT','621704'),(247,3599,'RUMZIBAY','600646'),(248,3603,'KARMAN SOEPARMAN','650302'),(249,3605,'DEVIJANE FEBRIYANTE SIAGIAN','650836'),(250,3606,'FAJAR ERI DIANTO','670145'),(251,3607,'ROBIADY','600673'),(252,3609,'TRI HARSO','640147'),(253,3610,'I MADE SUKARMA','590026'),(254,3612,'AKHMAD RIYANTO','641458'),(255,3613,'WITING JULIATI','640503'),(256,3614,'AGUS DARYANA','560014'),(257,3616,'DJADAJATSJAH','601174'),(258,3617,'ADI SUMANTOKO','611670'),(259,3619,'HARLAN SISWADI','650977'),(260,3621,'NASRUL FATAH','670343'),(261,3622,'HAYATUL FIKRI','632417'),(262,3623,'SABRI RASYID','680149'),(264,3625,'MUHAMMAD KHOLILUDDIN FAHRI','641985'),(265,3627,'UNTUNG SETIABUDI.S, RD IR','642143'),(266,3628,'ACHMAD HARIJADI, S.E.','630780'),(267,3632,'FEBRUARTO','730262'),(268,3634,'ENDA WANRIDHA','590480'),(269,3635,'DENI HAMDANI','650876'),(270,3637,'ETTY HERAWATI','640486'),(271,3638,'RUSTAM EFENDI','830105'),(272,3639,'R. WIDHA ANDI PARMOKO','850089'),(273,3641,'ISYA SUNARDI','650705'),(274,3642,'ISEP HENDIYANA','670394'),(275,3644,'ACHMAD SUWANDA','680365'),(276,3645,'KEN WIDURI','740316'),(277,3648,'MAMAN AGUS ROKHMAN','590455'),(278,3649,'PRADIPTA WISMAYA ALBY','860135'),(279,3650,'SUHARNO','640966'),(280,3651,'SANNTY DEVIYANTI','870043'),(281,3652,'B I N U R I','632944'),(282,3653,'JOKO WIYONO','730335'),(283,3654,'PATRIS SUPRIADI','621466'),(284,3655,'SAFYUL','640123'),(285,3656,'SUMPENA','631189'),(286,3659,'FIRDATIN HASTUTI','641107'),(287,3660,'SHANDY ASRI ACHMAD','870047'),(288,3661,'SEPTIRASYAHYANI','880039'),(289,3662,'TEDY ANANDA PRIBADI','642445'),(290,3663,'JAJANG HIDAYAT','620913'),(291,3664,'ANAK AGUNG ARDHA CHANDRA DEWI','830132'),(292,3665,'ARIPIN SUNJANA','620084'),(293,3666,'ULY DHANA SITUMORANG','641282'),(294,3667,'SETYA WIBAWA','710499'),(295,3669,'UTARI DWI ELIANI','620828'),(296,3670,'MAMAY M JUMARDI','660224'),(297,3671,'SOEMARJOTO','601332'),(298,3672,'ZURIANTI','632437'),(299,3673,'ENOK RATNASIH','611027'),(300,3674,'DANANG TJATUR. W','720169'),(301,3675,'SATRIA REKSANEGARA','650801'),(302,3676,'ISMIYATI,NY','650447'),(303,3677,'ASMANUR ARUMSARI','820042'),(304,3678,'ALI AKBAR','650897'),(305,3679,'HADI SUYONO','631249'),(306,9012,'METI KURNIASIH','9012'),(307,9017,'ASEP AHMAD','9017'),(308,9019,'RIYADI DERAJAT','9019'),(309,9020,'RACHMAT HIDAYAT','9020'),(310,9021,'ASEP HIDAYAT','9021'),(311,9023,'DIMROH HASBUNA','9023'),(312,9024,'EDED DEDI','9024'),(313,9028,'YAN SAPTADI','9028'),(314,9030,'TETI SUKMAWATI','9030'),(315,9031,'MILA AMALIA','9031'),(316,9040,'SONY MARTHIN','9040'),(317,9042,'HERI HERYADI','9042'),(318,9043,'MACHYAR','9043'),(319,9044,'BAMBANG WIRYAWAN','9044'),(320,9045,'DODI HIDAYAT','9045'),(322,9055,'MIRA DEWI KANTIKA','9055'),(323,9057,'ERNIYATI','9057'),(324,9060,'SUSIANTO CATUR','9060'),(325,9063,'ROEBIANA LIBRANSYAH','9063'),(326,9076,'DADANG JUNAEDI','9076'),(327,9085,'YORI MULYANA','9085'),(328,9087,'YULIA KURAESIN','9087'),(329,9088,'HERNI PERMANAWATI','9088'),(330,9089,'NUGRAHA ADHILISTIYO','9089'),(331,9090,'DADANG SUPRIADI','9090'),(332,9093,'RIKA YATMIKASARI','9093'),(333,9094,'YANYAN KEMALUDIN','9094'),(334,9096,'IRWAN SAPTA P.','9096'),(335,9098,'CANDRA RIDWAN','9098'),(336,9101,'BUDIAR HAMID','9101'),(337,9102,'NANDANG SAKTIYANTO','9102'),(338,9109,'YUSUP','9109'),(339,9113,'ASEP WAHYUDIN','9113'),(340,9118,'DESI SURAYA','9118'),(341,9126,'ATIE PURWATININGSIH','9126'),(342,9130,'SURYANI NURAFIAH','9130'),(343,9132,'ILYAS','9132'),(344,9133,'ARIEF SUHERLAN','9133'),(345,9131,'HERLINA SAFITRI','9131'),(346,9141,'DIAH RODIAH','9141'),(347,9900,'SURYO SANTOSA','DCM0'),(348,9901,'DEDI RUSNADI','DCM1'),(349,9902,'SUTRISNO','DCM2'),(350,9903,'HIDAYAT','DCM3'),(351,9904,'M. DONNA','DCM4'),(352,9905,'ARNES AGUSTIN','DCM5'),(353,9906,'AYI DEDI','DCM6');

/*Table structure for table `bayar` */

DROP TABLE IF EXISTS `bayar`;

CREATE TABLE `bayar` (
  `bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bayar` */

insert  into `bayar`(`bayar`) values (500000);

/*Table structure for table `bendahara` */

DROP TABLE IF EXISTS `bendahara`;

CREATE TABLE `bendahara` (
  `nak` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bendahara` */

insert  into `bendahara`(`nak`,`nama`,`nik`) values ('12345','AISYAH',54321);

/*Table structure for table `kehadiran` */

DROP TABLE IF EXISTS `kehadiran`;

CREATE TABLE `kehadiran` (
  `waktu` datetime NOT NULL,
  `nak` int(11) NOT NULL,
  `status` enum('HADIR','KUASA') NOT NULL,
  `user` varchar(30) NOT NULL,
  `temp` int(1) NOT NULL,
  `id_kuasa` int(11) NOT NULL,
  `no_kupon` int(11) NOT NULL,
  `jam` time NOT NULL,
  `cetak` int(1) NOT NULL,
  PRIMARY KEY (`nak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kehadiran` */

insert  into `kehadiran`(`waktu`,`nak`,`status`,`user`,`temp`,`id_kuasa`,`no_kupon`,`jam`,`cetak`) values ('2016-02-24 08:45:30',843,'HADIR','RIYADI DERAJAT',0,843,3,'08:45:30',1),('2016-02-23 16:35:09',9019,'HADIR','admin',0,9019,1,'16:35:09',1);

/*Table structure for table `kuasa` */

DROP TABLE IF EXISTS `kuasa`;

CREATE TABLE `kuasa` (
  `id_kuasa` int(11) NOT NULL,
  `nak` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL,
  `temp` int(1) NOT NULL,
  `no_kupon` int(11) NOT NULL,
  `jam` time NOT NULL,
  `status2` varchar(10) NOT NULL,
  `cetak` int(1) NOT NULL,
  PRIMARY KEY (`nak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kuasa` */

insert  into `kuasa`(`id_kuasa`,`nak`,`status`,`user`,`waktu`,`temp`,`no_kupon`,`jam`,`status2`,`cetak`) values (9019,900,'KUASA','admin','2016-02-23 16:35:09',0,2,'16:35:09','HADIR',1);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `nak` varchar(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `password` varchar(11) DEFAULT NULL,
  `level` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`nak`,`nama`,`password`,`level`) values ('9012','METI KURNIASIH','9012','user'),('9017','ASEP AHMAD','9017','user'),('9019','RIYADI DERAJAT','9019','user'),('9020','RACHMAT HIDAYAT','9020','user'),('9021','ASEP HIDAYAT','9021','user'),('9023','DIMROH HASBUNA','9023','user'),('9024','EDED DEDI','9024','user'),('9028','YAN SAPTADI','9028','user'),('9030','TETI SUKMAWATI','9030','user'),('9031','MILA AMALIA','9031','user'),('9040','SONY MARTHIN','9040','user'),('9042','HERI HERYADI','9042','user'),('9043','MACHYAR','9043','user'),('9044','BAMBANG WIRYAWAN','9044','user'),('9045','DODI HIDAYAT','9045','user'),('9046','RINI NUR\'AENI','9046','user'),('9055','MIRA DEWI KANTIKA','9055','user'),('9057','ERNIYATI','9057','user'),('9060','SUSIANTO CATUR','9060','user'),('9063','ROEBIANA LIBRANSYAH','9063','user'),('9076','DADANG JUNAEDI','9076','user'),('9085','YORI MULYANA','9085','user'),('9087','YULIA KURAESIN','9087','user'),('9088','HERNI PERMANAWATI','9088','user'),('9089','NUGRAHA ADHILISTIYO','9089','user'),('9090','DADANG SUPRIADI','9090','user'),('9093','RIKA YATMIKASARI','9093','user'),('9094','YANYAN KEMALUDIN','9094','user'),('9096','IRWAN SAPTA P.','9096','user'),('9098','CANDRA RIDWAN','9098','user'),('9101','BUDIAR HAMID','9101','user'),('9102','NANDANG SAKTIYANTO','9102','user'),('9109','YUSUP','9109','user'),('9113','ASEP WAHYUDIN','9113','user'),('9118','DESI SURAYA','9118','user'),('9126','ATIE PURWATININGSIH','9126','user'),('9130','SURYANI NURAFIAH','9130','user'),('9132','ILYAS','9132','user'),('9133','ARIEF SUHERLAN','9133','user'),('9131','HERLINA SAFITRI','9131','user'),('9141','DIAH RODIAH','9141','user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),(NULL,NULL,NULL,'user'),('650447',NULL,NULL,'user'),('admin','admin','admin','admin'),('admin2','admin2','admin2','admin'),('admin3','admin3','admin','admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
