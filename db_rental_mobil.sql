-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 04, 2017 at 02:13 
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rental_mobil`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `inBooking` (IN `x` VARCHAR(5), IN `y` CHAR(20), IN `z` CHAR(20), IN `i` DATE, IN `a` DATE, IN `b` DATE, IN `c` TIME, IN `d` CHAR(20), IN `e` VARCHAR(5))  BEGIN
	INSERT INTO transaksisewa(notransaksi,nik,noktp,tglpesan,TglPinjamRencana,tglkembalirencana,JamKembaliRencana,NoPlat,IDSopir) VALUES(x,y,z,i,a,b,c,d,e);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertPlgn` (IN `NoKTP` VARCHAR(20), IN `NamaPel` VARCHAR(50), IN `AlamatPel` VARCHAR(50), IN `TelpPel` VARCHAR(20))  BEGIN
	INSERT INTO pelanggan VALUES(NoKTP,NamaPel,AlamatPel,TelpPel);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertSop` (`x` VARCHAR(5), `y` VARCHAR(20), `z` VARCHAR(50), `a` VARCHAR(20), `b` VARCHAR(30), `c` INT)  BEGIN
	INSERT INTO sopir VALUES(x,y,z,a,b,c);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `tranServices` (IN `x` VARCHAR(5), IN `y` DATE, IN `z` DOUBLE, IN `a` CHAR(20), IN `b` VARCHAR(5))  BEGIN
	INSERT INTO service VALUES(x,y,z,a,b);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `uTranSewa` (IN `c` DATE, IN `d` TIME, IN `f` INT, IN `g` INT, IN `h` VARCHAR(50), IN `k` VARCHAR(5))  BEGIN
	UPDATE transaksisewa SET tglpinjam = c ,jampinjam = d ,
				kilometerpinjam = f ,bbmpinjam = g ,kondisimobilpinjam = h  WHERE notransaksi = k;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `booData`
--
CREATE TABLE `booData` (
`NoTransaksi` varchar(5)
,`NIK` char(20)
,`NoKTP` varchar(20)
,`TglPesan` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `bookingData`
--
CREATE TABLE `bookingData` (
`NoTransaksi` varchar(5)
,`TglPesan` date
,`TglPinjam` date
,`JamPinjam` time
,`tglkembalirencana` date
,`TglPinjamRencana` date
,`JamKembaliRencana` time
,`TglKembaliRealisasi` date
,`JamKembaliReal` time
,`Denda` double
,`KiloMeterPinjam` int(11)
,`KiloMeterKembali` int(11)
,`BBMPinjam` int(11)
,`BBMKembali` int(11)
,`KondisiMobilPinjam` varchar(50)
,`KondisiMobilKembali` varchar(50)
,`Kerusakan` varchar(255)
,`BiayaKerusakan` double
,`BiayaBBM` double
,`NIK` char(20)
,`NoPlat` char(20)
,`IDSopir` varchar(5)
,`NoKTP` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daKendaraan`
--
CREATE TABLE `daKendaraan` (
`NoPlat` char(20)
,`IDType` varchar(5)
,`Tahun` varchar(4)
,`TarifPerJam` int(11)
,`StatusRental` char(1)
,`KodeMerk` varchar(5)
,`NmMerk` varchar(20)
,`NmType` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `datKendaraan`
--
CREATE TABLE `datKendaraan` (
`NoPlat` char(20)
,`IDType` varchar(5)
,`Tahun` varchar(4)
,`TarifPerJam` int(11)
,`StatusRental` char(1)
,`KodeMerk` varchar(5)
,`NmMerk` varchar(20)
,`NmType` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `dk`
--
CREATE TABLE `dk` (
`NIK` char(20)
,`NmKaryawan` varchar(50)
,`AlmtKaryawan` varchar(50)
,`TelpKaryawan` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `dkarJoin`
--
CREATE TABLE `dkarJoin` (
`nik` char(20)
,`NmKaryawan` varchar(50)
,`AlmtKaryawan` varchar(50)
,`TelpKaryawan` varchar(20)
,`username` char(10)
,`typeuser` varchar(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `dkc`
--
CREATE TABLE `dkc` (
`COUNT(*)` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `dKembali`
--
CREATE TABLE `dKembali` (
`NoTransaksi` varchar(5)
,`NIK` char(20)
,`NoPlat` char(20)
,`IDSopir` varchar(5)
,`NoKTP` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `dKendaraan`
--
CREATE TABLE `dKendaraan` (
`NoPlat` char(20)
,`IDType` varchar(5)
,`Tahun` varchar(4)
,`TarifPerJam` int(11)
,`StatusRental` char(1)
,`KodeMerk` varchar(5)
,`NmMerk` varchar(20)
,`NmType` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `dKJoin`
--
CREATE TABLE `dKJoin` (
`NIK` char(20)
,`NmKaryawan` varchar(50)
,`AlmtKaryawan` varchar(50)
,`TelpKaryawan` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `dmbl`
--
CREATE TABLE `dmbl` (
`NoPlat` char(20)
,`IDType` varchar(5)
,`Tahun` varchar(4)
,`TarifPerJam` int(11)
,`StatusRental` char(1)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `dplgn`
--
CREATE TABLE `dplgn` (
`NoKTP` varchar(20)
,`NamaPel` varchar(50)
,`AlamatPel` varchar(50)
,`TelpPel` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `ds`
--
CREATE TABLE `ds` (
`IDSopir` varchar(5)
,`NmSopir` varchar(20)
,`AlmSopir` varchar(50)
,`TelpSopir` varchar(20)
,`NoSIM` varchar(30)
,`TarifPerJam` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `dServices`
--
CREATE TABLE `dServices` (
`KodeService` varchar(5)
,`TglService` date
,`BiayaService` double
,`NoPlat` char(20)
,`IDJenisService` varchar(5)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `dSop`
--
CREATE TABLE `dSop` (
`IDSopir` varchar(5)
,`NmSopir` varchar(20)
,`AlmSopir` varchar(50)
,`TelpSopir` varchar(20)
,`NoSIM` varchar(30)
,`TarifPerJam` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `getIdSop`
--
CREATE TABLE `getIdSop` (
`IDSopir` varchar(5)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `getNKTP`
--
CREATE TABLE `getNKTP` (
`noktp` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `getPlMob`
--
CREATE TABLE `getPlMob` (
`NoPlat` char(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `jenisservice`
--

CREATE TABLE `jenisservice` (
  `IDJenisService` varchar(5) NOT NULL,
  `NmJenisService` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenisservice`
--

INSERT INTO `jenisservice` (`IDJenisService`, `NmJenisService`) VALUES
('123', 'Ganti Oli'),
('55555', 'Karbulator');

-- --------------------------------------------------------

--
-- Stand-in structure for view `jServices`
--
CREATE TABLE `jServices` (
`IDJenisService` varchar(5)
,`NmJenisService` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `NIK` char(20) NOT NULL,
  `NmKaryawan` varchar(50) NOT NULL,
  `AlmtKaryawan` varchar(50) NOT NULL,
  `TelpKaryawan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`NIK`, `NmKaryawan`, `AlmtKaryawan`, `TelpKaryawan`) VALUES
('1234', 'idneh', 'maleber', '089182918'),
('13131311311', 'Garsa Cahya Sukmana', 'Jl.Kh Saleh Kp.Pandan Jaya RT 01/RW 06', '081563283453');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `NoPlat` char(20) NOT NULL,
  `IDType` varchar(5) NOT NULL,
  `Tahun` varchar(4) NOT NULL,
  `TarifPerJam` int(11) NOT NULL,
  `StatusRental` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`NoPlat`, `IDType`, `Tahun`, `TarifPerJam`, `StatusRental`) VALUES
('F1010ZQ', '12345', '2009', 10000, '1'),
('FA182D', '1234', '2009', 1000, '0');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `NIK` char(20) NOT NULL,
  `UserName` char(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `TypeUser` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`NIK`, `UserName`, `password`, `TypeUser`) VALUES
('1234', 'idneh', 'idneh', 'admin'),
('13131311311', 'gagaycahya', 'gagay12345', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE `merk` (
  `KodeMerk` varchar(5) NOT NULL,
  `NmMerk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merk`
--

INSERT INTO `merk` (`KodeMerk`, `NmMerk`) VALUES
('1', 'TOYOTA');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `NoKTP` varchar(20) NOT NULL,
  `NamaPel` varchar(50) NOT NULL,
  `AlamatPel` varchar(50) NOT NULL,
  `TelpPel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`NoKTP`, `NamaPel`, `AlamatPel`, `TelpPel`) VALUES
('1234', 'Garsa', 'x', '23532'),
('1234242', 'Garsa Cahya Sukmana', 'JL.KH Saleh', '081563283453'),
('1235', 'Garsa', 'x', '23533'),
('12353225325', 'Dadan T', 'JL.Ahmad Yani No.56', '085616189212'),
('1236', 'Garsa', 'x', '23534'),
('1237', 'Garsa', 'x', '23535'),
('1238', 'Garsa', 'x', '23536'),
('1239', 'Garsa', 'x', '23537'),
('1240', 'Garsa', 'x', '23538'),
('1241', 'Garsa', 'x', '23539'),
('1242', 'Garsa', 'x', '23540'),
('1243', 'Garsa', 'x', '23541'),
('15315', '152235', '2352', '532532525223'),
('2232352', '5325323', '532532532', '523253253'),
('235232', '523', '523532', '22353253253');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `KodePemilik` varchar(5) NOT NULL,
  `NoPlat` char(20) NOT NULL,
  `NmPemilik` varchar(20) NOT NULL,
  `AlmPemilik` varchar(50) NOT NULL,
  `TelpPemilik` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `pinjamData`
--
CREATE TABLE `pinjamData` (
`NoTransaksi` varchar(5)
,`TglPesan` date
,`TglPinjam` date
,`JamPinjam` time
,`tglkembalirencana` date
,`TglPinjamRencana` date
,`JamKembaliRencana` time
,`TglKembaliRealisasi` date
,`JamKembaliReal` time
,`Denda` double
,`KiloMeterPinjam` int(11)
,`KiloMeterKembali` int(11)
,`BBMPinjam` int(11)
,`BBMKembali` int(11)
,`KondisiMobilPinjam` varchar(50)
,`KondisiMobilKembali` varchar(50)
,`Kerusakan` varchar(255)
,`BiayaKerusakan` double
,`BiayaBBM` double
,`NIK` char(20)
,`NoPlat` char(20)
,`IDSopir` varchar(5)
,`NoKTP` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `KodeService` varchar(5) NOT NULL,
  `TglService` date DEFAULT NULL,
  `BiayaService` double DEFAULT NULL,
  `NoPlat` char(20) NOT NULL,
  `IDJenisService` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`KodeService`, `TglService`, `BiayaService`, `NoPlat`, `IDJenisService`) VALUES
('12345', '2017-02-03', 100000, 'F1010ZQ', '123'),
('2727', '2017-02-04', 1000000, 'F1010ZQ', '55555');

-- --------------------------------------------------------

--
-- Table structure for table `setoran`
--

CREATE TABLE `setoran` (
  `NoSetoran` varchar(5) NOT NULL,
  `TglSetoran` date NOT NULL,
  `Jumlah` double NOT NULL,
  `KodePemilik` varchar(5) NOT NULL,
  `NIK` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sopir`
--

CREATE TABLE `sopir` (
  `IDSopir` varchar(5) NOT NULL,
  `NmSopir` varchar(20) NOT NULL,
  `AlmSopir` varchar(50) NOT NULL,
  `TelpSopir` varchar(20) NOT NULL,
  `NoSIM` varchar(30) NOT NULL,
  `TarifPerJam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sopir`
--

INSERT INTO `sopir` (`IDSopir`, `NmSopir`, `AlmSopir`, `TelpSopir`, `NoSIM`, `TarifPerJam`) VALUES
('1', 'Ujang', 'JL.Ahmad Yani', '0823521234', '1748374857', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksisewa`
--

CREATE TABLE `transaksisewa` (
  `NoTransaksi` varchar(5) NOT NULL,
  `TglPesan` date NOT NULL,
  `TglPinjam` date NOT NULL,
  `JamPinjam` time NOT NULL,
  `tglkembalirencana` date NOT NULL,
  `TglPinjamRencana` date NOT NULL,
  `JamKembaliRencana` time NOT NULL,
  `TglKembaliRealisasi` date NOT NULL,
  `JamKembaliReal` time NOT NULL,
  `Denda` double NOT NULL,
  `KiloMeterPinjam` int(11) NOT NULL,
  `KiloMeterKembali` int(11) NOT NULL,
  `BBMPinjam` int(11) NOT NULL,
  `BBMKembali` int(11) NOT NULL,
  `KondisiMobilPinjam` varchar(50) NOT NULL,
  `KondisiMobilKembali` varchar(50) NOT NULL,
  `Kerusakan` varchar(255) NOT NULL,
  `BiayaKerusakan` double NOT NULL,
  `BiayaBBM` double NOT NULL,
  `NIK` char(20) NOT NULL,
  `NoPlat` char(20) NOT NULL,
  `IDSopir` varchar(5) NOT NULL,
  `NoKTP` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksisewa`
--

INSERT INTO `transaksisewa` (`NoTransaksi`, `TglPesan`, `TglPinjam`, `JamPinjam`, `tglkembalirencana`, `TglPinjamRencana`, `JamKembaliRencana`, `TglKembaliRealisasi`, `JamKembaliReal`, `Denda`, `KiloMeterPinjam`, `KiloMeterKembali`, `BBMPinjam`, `BBMKembali`, `KondisiMobilPinjam`, `KondisiMobilKembali`, `Kerusakan`, `BiayaKerusakan`, `BiayaBBM`, `NIK`, `NoPlat`, `IDSopir`, `NoKTP`) VALUES
('12345', '2017-02-03', '2017-02-03', '10:54:28', '2017-02-03', '2017-02-03', '00:47:00', '0000-00-00', '00:00:00', 0, 1600, 0, 100, 0, 'Baik - Baik Saja', '', '', 0, 0, '13131311311', 'F1010ZQ', '1', '1234'),
('67878', '2017-02-03', '0000-00-00', '00:00:00', '2017-02-04', '2017-02-04', '11:00:00', '0000-00-00', '00:00:00', 0, 0, 0, 0, 0, '', '', '', 0, 0, '13131311311', 'F1010ZQ', '1', '12353225325');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `IDType` varchar(5) NOT NULL,
  `KodeMerk` varchar(5) NOT NULL,
  `NmType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`IDType`, `KodeMerk`, `NmType`) VALUES
('12345', '1', 'AVANZA');

-- --------------------------------------------------------

--
-- Structure for view `booData`
--
DROP TABLE IF EXISTS `booData`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `booData`  AS  select `transaksisewa`.`NoTransaksi` AS `NoTransaksi`,`transaksisewa`.`NIK` AS `NIK`,`transaksisewa`.`NoKTP` AS `NoKTP`,`transaksisewa`.`TglPesan` AS `TglPesan` from `transaksisewa` ;

-- --------------------------------------------------------

--
-- Structure for view `bookingData`
--
DROP TABLE IF EXISTS `bookingData`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `bookingData`  AS  select `transaksisewa`.`NoTransaksi` AS `NoTransaksi`,`transaksisewa`.`TglPesan` AS `TglPesan`,`transaksisewa`.`TglPinjam` AS `TglPinjam`,`transaksisewa`.`JamPinjam` AS `JamPinjam`,`transaksisewa`.`tglkembalirencana` AS `tglkembalirencana`,`transaksisewa`.`TglPinjamRencana` AS `TglPinjamRencana`,`transaksisewa`.`JamKembaliRencana` AS `JamKembaliRencana`,`transaksisewa`.`TglKembaliRealisasi` AS `TglKembaliRealisasi`,`transaksisewa`.`JamKembaliReal` AS `JamKembaliReal`,`transaksisewa`.`Denda` AS `Denda`,`transaksisewa`.`KiloMeterPinjam` AS `KiloMeterPinjam`,`transaksisewa`.`KiloMeterKembali` AS `KiloMeterKembali`,`transaksisewa`.`BBMPinjam` AS `BBMPinjam`,`transaksisewa`.`BBMKembali` AS `BBMKembali`,`transaksisewa`.`KondisiMobilPinjam` AS `KondisiMobilPinjam`,`transaksisewa`.`KondisiMobilKembali` AS `KondisiMobilKembali`,`transaksisewa`.`Kerusakan` AS `Kerusakan`,`transaksisewa`.`BiayaKerusakan` AS `BiayaKerusakan`,`transaksisewa`.`BiayaBBM` AS `BiayaBBM`,`transaksisewa`.`NIK` AS `NIK`,`transaksisewa`.`NoPlat` AS `NoPlat`,`transaksisewa`.`IDSopir` AS `IDSopir`,`transaksisewa`.`NoKTP` AS `NoKTP` from `transaksisewa` where ((`transaksisewa`.`TglPinjam` = ((0 - 0) - 0)) and (`transaksisewa`.`JamPinjam` = ((0 - 0) - 0))) ;

-- --------------------------------------------------------

--
-- Structure for view `daKendaraan`
--
DROP TABLE IF EXISTS `daKendaraan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daKendaraan`  AS  select `k`.`NoPlat` AS `NoPlat`,`k`.`IDType` AS `IDType`,`k`.`Tahun` AS `Tahun`,`k`.`TarifPerJam` AS `TarifPerJam`,`k`.`StatusRental` AS `StatusRental`,`m`.`KodeMerk` AS `KodeMerk`,`m`.`NmMerk` AS `NmMerk`,`t`.`NmType` AS `NmType` from ((`kendaraan` `k` join `type` `t`) join `merk` `m`) where ((`k`.`IDType` = `t`.`IDType`) and (`t`.`KodeMerk` = `m`.`KodeMerk`) and (`k`.`StatusRental` = 0)) ;

-- --------------------------------------------------------

--
-- Structure for view `datKendaraan`
--
DROP TABLE IF EXISTS `datKendaraan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `datKendaraan`  AS  select `k`.`NoPlat` AS `NoPlat`,`k`.`IDType` AS `IDType`,`k`.`Tahun` AS `Tahun`,`k`.`TarifPerJam` AS `TarifPerJam`,`k`.`StatusRental` AS `StatusRental`,`m`.`KodeMerk` AS `KodeMerk`,`m`.`NmMerk` AS `NmMerk`,`t`.`NmType` AS `NmType` from ((`kendaraan` `k` join `type` `t`) join `merk` `m`) where ((`k`.`IDType` = `t`.`IDType`) and (`t`.`KodeMerk` = `m`.`KodeMerk`) and (`k`.`StatusRental` = 0)) ;

-- --------------------------------------------------------

--
-- Structure for view `dk`
--
DROP TABLE IF EXISTS `dk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dk`  AS  select `karyawan`.`NIK` AS `NIK`,`karyawan`.`NmKaryawan` AS `NmKaryawan`,`karyawan`.`AlmtKaryawan` AS `AlmtKaryawan`,`karyawan`.`TelpKaryawan` AS `TelpKaryawan` from `karyawan` ;

-- --------------------------------------------------------

--
-- Structure for view `dkarJoin`
--
DROP TABLE IF EXISTS `dkarJoin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dkarJoin`  AS  select `k`.`NIK` AS `nik`,`k`.`NmKaryawan` AS `NmKaryawan`,`k`.`AlmtKaryawan` AS `AlmtKaryawan`,`k`.`TelpKaryawan` AS `TelpKaryawan`,`l`.`UserName` AS `username`,`l`.`TypeUser` AS `typeuser` from (`karyawan` `k` join `login` `l` on((`k`.`NIK` = `l`.`NIK`))) ;

-- --------------------------------------------------------

--
-- Structure for view `dkc`
--
DROP TABLE IF EXISTS `dkc`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dkc`  AS  select count(0) AS `COUNT(*)` from `karyawan` ;

-- --------------------------------------------------------

--
-- Structure for view `dKembali`
--
DROP TABLE IF EXISTS `dKembali`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dKembali`  AS  select `transaksisewa`.`NoTransaksi` AS `NoTransaksi`,`transaksisewa`.`NIK` AS `NIK`,`transaksisewa`.`NoPlat` AS `NoPlat`,`transaksisewa`.`IDSopir` AS `IDSopir`,`transaksisewa`.`NoKTP` AS `NoKTP` from `transaksisewa` ;

-- --------------------------------------------------------

--
-- Structure for view `dKendaraan`
--
DROP TABLE IF EXISTS `dKendaraan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dKendaraan`  AS  select `k`.`NoPlat` AS `NoPlat`,`k`.`IDType` AS `IDType`,`k`.`Tahun` AS `Tahun`,`k`.`TarifPerJam` AS `TarifPerJam`,`k`.`StatusRental` AS `StatusRental`,`m`.`KodeMerk` AS `KodeMerk`,`m`.`NmMerk` AS `NmMerk`,`t`.`NmType` AS `NmType` from ((`kendaraan` `k` join `type` `t`) join `merk` `m`) where ((`k`.`IDType` = `t`.`IDType`) and (`t`.`KodeMerk` = `m`.`KodeMerk`)) ;

-- --------------------------------------------------------

--
-- Structure for view `dKJoin`
--
DROP TABLE IF EXISTS `dKJoin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dKJoin`  AS  select `karyawan`.`NIK` AS `NIK`,`karyawan`.`NmKaryawan` AS `NmKaryawan`,`karyawan`.`AlmtKaryawan` AS `AlmtKaryawan`,`karyawan`.`TelpKaryawan` AS `TelpKaryawan` from `karyawan` ;

-- --------------------------------------------------------

--
-- Structure for view `dmbl`
--
DROP TABLE IF EXISTS `dmbl`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dmbl`  AS  select `kendaraan`.`NoPlat` AS `NoPlat`,`kendaraan`.`IDType` AS `IDType`,`kendaraan`.`Tahun` AS `Tahun`,`kendaraan`.`TarifPerJam` AS `TarifPerJam`,`kendaraan`.`StatusRental` AS `StatusRental` from `kendaraan` ;

-- --------------------------------------------------------

--
-- Structure for view `dplgn`
--
DROP TABLE IF EXISTS `dplgn`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dplgn`  AS  select `pelanggan`.`NoKTP` AS `NoKTP`,`pelanggan`.`NamaPel` AS `NamaPel`,`pelanggan`.`AlamatPel` AS `AlamatPel`,`pelanggan`.`TelpPel` AS `TelpPel` from `pelanggan` ;

-- --------------------------------------------------------

--
-- Structure for view `ds`
--
DROP TABLE IF EXISTS `ds`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ds`  AS  select `sopir`.`IDSopir` AS `IDSopir`,`sopir`.`NmSopir` AS `NmSopir`,`sopir`.`AlmSopir` AS `AlmSopir`,`sopir`.`TelpSopir` AS `TelpSopir`,`sopir`.`NoSIM` AS `NoSIM`,`sopir`.`TarifPerJam` AS `TarifPerJam` from `sopir` ;

-- --------------------------------------------------------

--
-- Structure for view `dServices`
--
DROP TABLE IF EXISTS `dServices`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dServices`  AS  select `service`.`KodeService` AS `KodeService`,`service`.`TglService` AS `TglService`,`service`.`BiayaService` AS `BiayaService`,`service`.`NoPlat` AS `NoPlat`,`service`.`IDJenisService` AS `IDJenisService` from `service` ;

-- --------------------------------------------------------

--
-- Structure for view `dSop`
--
DROP TABLE IF EXISTS `dSop`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dSop`  AS  select `sopir`.`IDSopir` AS `IDSopir`,`sopir`.`NmSopir` AS `NmSopir`,`sopir`.`AlmSopir` AS `AlmSopir`,`sopir`.`TelpSopir` AS `TelpSopir`,`sopir`.`NoSIM` AS `NoSIM`,`sopir`.`TarifPerJam` AS `TarifPerJam` from `sopir` ;

-- --------------------------------------------------------

--
-- Structure for view `getIdSop`
--
DROP TABLE IF EXISTS `getIdSop`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `getIdSop`  AS  select `sopir`.`IDSopir` AS `IDSopir` from `sopir` ;

-- --------------------------------------------------------

--
-- Structure for view `getNKTP`
--
DROP TABLE IF EXISTS `getNKTP`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `getNKTP`  AS  select `pelanggan`.`NoKTP` AS `noktp` from `pelanggan` ;

-- --------------------------------------------------------

--
-- Structure for view `getPlMob`
--
DROP TABLE IF EXISTS `getPlMob`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `getPlMob`  AS  select `kendaraan`.`NoPlat` AS `NoPlat` from `kendaraan` ;

-- --------------------------------------------------------

--
-- Structure for view `jServices`
--
DROP TABLE IF EXISTS `jServices`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `jServices`  AS  select `jenisservice`.`IDJenisService` AS `IDJenisService`,`jenisservice`.`NmJenisService` AS `NmJenisService` from `jenisservice` ;

-- --------------------------------------------------------

--
-- Structure for view `pinjamData`
--
DROP TABLE IF EXISTS `pinjamData`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pinjamData`  AS  select `transaksisewa`.`NoTransaksi` AS `NoTransaksi`,`transaksisewa`.`TglPesan` AS `TglPesan`,`transaksisewa`.`TglPinjam` AS `TglPinjam`,`transaksisewa`.`JamPinjam` AS `JamPinjam`,`transaksisewa`.`tglkembalirencana` AS `tglkembalirencana`,`transaksisewa`.`TglPinjamRencana` AS `TglPinjamRencana`,`transaksisewa`.`JamKembaliRencana` AS `JamKembaliRencana`,`transaksisewa`.`TglKembaliRealisasi` AS `TglKembaliRealisasi`,`transaksisewa`.`JamKembaliReal` AS `JamKembaliReal`,`transaksisewa`.`Denda` AS `Denda`,`transaksisewa`.`KiloMeterPinjam` AS `KiloMeterPinjam`,`transaksisewa`.`KiloMeterKembali` AS `KiloMeterKembali`,`transaksisewa`.`BBMPinjam` AS `BBMPinjam`,`transaksisewa`.`BBMKembali` AS `BBMKembali`,`transaksisewa`.`KondisiMobilPinjam` AS `KondisiMobilPinjam`,`transaksisewa`.`KondisiMobilKembali` AS `KondisiMobilKembali`,`transaksisewa`.`Kerusakan` AS `Kerusakan`,`transaksisewa`.`BiayaKerusakan` AS `BiayaKerusakan`,`transaksisewa`.`BiayaBBM` AS `BiayaBBM`,`transaksisewa`.`NIK` AS `NIK`,`transaksisewa`.`NoPlat` AS `NoPlat`,`transaksisewa`.`IDSopir` AS `IDSopir`,`transaksisewa`.`NoKTP` AS `NoKTP` from `transaksisewa` where ((`transaksisewa`.`TglKembaliRealisasi` = '0000-00-00') and (`transaksisewa`.`JamKembaliReal` = '00:00:00')) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenisservice`
--
ALTER TABLE `jenisservice`
  ADD PRIMARY KEY (`IDJenisService`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`NoPlat`,`IDType`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`KodeMerk`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`NoKTP`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`KodePemilik`,`NoPlat`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`KodeService`,`NoPlat`,`IDJenisService`);

--
-- Indexes for table `setoran`
--
ALTER TABLE `setoran`
  ADD PRIMARY KEY (`NoSetoran`,`KodePemilik`,`NIK`);

--
-- Indexes for table `sopir`
--
ALTER TABLE `sopir`
  ADD PRIMARY KEY (`IDSopir`);

--
-- Indexes for table `transaksisewa`
--
ALTER TABLE `transaksisewa`
  ADD PRIMARY KEY (`NoTransaksi`,`NIK`,`NoPlat`,`NoKTP`,`IDSopir`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`IDType`,`KodeMerk`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
