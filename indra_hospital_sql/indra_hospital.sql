-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.27-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.6.0.6765
-- Owned by :                    Isuru Pradeep (pradeepisuru31@gmail.com)
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for indra_hospital
DROP DATABASE IF EXISTS `indra_hospital`;
CREATE DATABASE IF NOT EXISTS `indra_hospital` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `indra_hospital`;

-- Dumping structure for table indra_hospital.admin
DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `E_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(50) NOT NULL,
  `D_ID` int(11) DEFAULT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `First_Day` date NOT NULL,
  `Working_Hours` int(11) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Birthday` date NOT NULL,
  `Basic_Salary` decimal(10,2) NOT NULL,
  `OT_Salary` decimal(10,2) NOT NULL,
  `Other_Adition` decimal(10,2) NOT NULL,
  PRIMARY KEY (`E_ID`,`User_Name`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.admin: ~6 rows (approximately)
DELETE FROM `admin`;
INSERT INTO `admin` (`E_ID`, `User_Name`, `D_ID`, `First_Name`, `Last_Name`, `First_Day`, `Working_Hours`, `Password`, `Birthday`, `Basic_Salary`, `OT_Salary`, `Other_Adition`) VALUES
	(1, 'admin', 1, 'Isuru', 'Pradeep', '2016-03-01', 6, 'admin', '1998-03-10', 50000.00, 35000.00, 45000.00),
	(8, 'admin3', 1, 'supun ', 'prasanna', '2001-05-30', 6, 'supun', '1999-01-10', 60000.00, 50000.00, 20000.00),
	(9, 'randilu', 1, 'randilu', 'lindapitiya', '2001-05-30', 6, 'randilu', '1999-01-10', 60000.00, 50000.00, 20000.00),
	(10, 'chandrakumara', 14, 'chandra', 'kumara', '2001-05-30', 6, 'lakshan', '1998-03-10', 60000.00, 50000.00, 20000.00),
	(11, 'dilshan', 1, 'dishan', 'sacheera', '2001-05-30', 6, 'dilshan', '1999-01-10', 60000.00, 50000.00, 20000.00);

-- Dumping structure for table indra_hospital.admin_employee_address
DROP TABLE IF EXISTS `admin_employee_address`;
CREATE TABLE IF NOT EXISTS `admin_employee_address` (
  `E_ID` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  PRIMARY KEY (`E_ID`,`Address`),
  CONSTRAINT `admin_employee_address` FOREIGN KEY (`E_ID`) REFERENCES `admin` (`E_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.admin_employee_address: ~0 rows (approximately)
DELETE FROM `admin_employee_address`;

-- Dumping structure for table indra_hospital.admin_employee_phone_num
DROP TABLE IF EXISTS `admin_employee_phone_num`;
CREATE TABLE IF NOT EXISTS `admin_employee_phone_num` (
  `E_ID` int(11) NOT NULL,
  `Phone_Num` varchar(50) NOT NULL,
  PRIMARY KEY (`E_ID`,`Phone_Num`),
  CONSTRAINT `admin_employee_phone_num` FOREIGN KEY (`E_ID`) REFERENCES `admin` (`E_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.admin_employee_phone_num: ~0 rows (approximately)
DELETE FROM `admin_employee_phone_num`;

-- Dumping structure for table indra_hospital.appointment
DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `APPOINTMENT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(50) DEFAULT NULL,
  `DOC_EMP_ID` int(11) DEFAULT NULL,
  `RECEI_EMP_ID` int(11) DEFAULT NULL,
  `Decription` varchar(50) DEFAULT NULL,
  `Time` time NOT NULL DEFAULT curtime(),
  `Date` date NOT NULL DEFAULT curdate(),
  PRIMARY KEY (`APPOINTMENT_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.appointment: ~3 rows (approximately)
DELETE FROM `appointment`;
INSERT INTO `appointment` (`APPOINTMENT_ID`, `User_Name`, `DOC_EMP_ID`, `RECEI_EMP_ID`, `Decription`, `Time`, `Date`) VALUES
	(1, 'charith', 1, 1, 'I feel cold', '11:20:34', '2023-05-04'),
	(2, 'nuwantha', 3, 1, 'I feel cold', '15:33:55', '2023-05-04'),
	(3, 'pradeepisuru31@gmail.com', 1, 0, 'I feel nothing', '16:10:30', '2023-05-04'),
	(4, 'sfdsfafa', 1, 0, 'dsfsfds', '16:14:05', '2023-05-04');

-- Dumping structure for table indra_hospital.bill
DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `Bill_ID` int(11) NOT NULL AUTO_INCREMENT,
  `E_ID` int(11) DEFAULT NULL,
  `P_ID` int(11) NOT NULL,
  `Patient_Name` varchar(50) NOT NULL,
  `Time` time DEFAULT current_timestamp(),
  `Date` date DEFAULT current_timestamp(),
  `Doctor_Charge` decimal(10,2) NOT NULL,
  `Hopital_Charge` decimal(10,2) NOT NULL,
  `Drug_Charge` decimal(10,2) NOT NULL,
  `Tax` decimal(10,2) DEFAULT NULL,
  `Discount` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`Bill_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.bill: ~1 rows (approximately)
DELETE FROM `bill`;
INSERT INTO `bill` (`Bill_ID`, `E_ID`, `P_ID`, `Patient_Name`, `Time`, `Date`, `Doctor_Charge`, `Hopital_Charge`, `Drug_Charge`, `Tax`, `Discount`) VALUES
	(4, 1, 1, 'charitha adikari', '16:41:39', '2023-05-04', 1000.00, 500.00, 250.00, 250.00, 200.00);

-- Dumping structure for table indra_hospital.cleaner
DROP TABLE IF EXISTS `cleaner`;
CREATE TABLE IF NOT EXISTS `cleaner` (
  `E_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(50) NOT NULL,
  `D_ID` int(11) DEFAULT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `First_Day` date NOT NULL,
  `Working_Hours` int(11) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Birthday` date NOT NULL,
  `Basic_Salary` decimal(10,2) NOT NULL,
  `OT_Salary` decimal(10,2) DEFAULT NULL,
  `Other_Adition` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`E_ID`,`User_Name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.cleaner: ~1 rows (approximately)
DELETE FROM `cleaner`;
INSERT INTO `cleaner` (`E_ID`, `User_Name`, `D_ID`, `First_Name`, `Last_Name`, `First_Day`, `Working_Hours`, `Password`, `Birthday`, `Basic_Salary`, `OT_Salary`, `Other_Adition`) VALUES
	(1, 'lakshan', 5, 'Lakshan', 'prasanna', '2001-05-30', 6, 'lakshan', '1998-03-10', 60000.00, 50000.00, 20000.00);

-- Dumping structure for table indra_hospital.cleaner_employee_address
DROP TABLE IF EXISTS `cleaner_employee_address`;
CREATE TABLE IF NOT EXISTS `cleaner_employee_address` (
  `E_ID` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  PRIMARY KEY (`E_ID`,`Address`),
  CONSTRAINT `cleaner_employee_address` FOREIGN KEY (`E_ID`) REFERENCES `cleaner` (`E_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.cleaner_employee_address: ~0 rows (approximately)
DELETE FROM `cleaner_employee_address`;

-- Dumping structure for table indra_hospital.cleaner_employee_phone_num
DROP TABLE IF EXISTS `cleaner_employee_phone_num`;
CREATE TABLE IF NOT EXISTS `cleaner_employee_phone_num` (
  `E_ID` int(11) NOT NULL,
  `Phone_Num` varchar(50) NOT NULL,
  PRIMARY KEY (`E_ID`,`Phone_Num`),
  CONSTRAINT `cleaner_employee_phone_num` FOREIGN KEY (`E_ID`) REFERENCES `cleaner` (`E_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.cleaner_employee_phone_num: ~0 rows (approximately)
DELETE FROM `cleaner_employee_phone_num`;

-- Dumping structure for table indra_hospital.cleans
DROP TABLE IF EXISTS `cleans`;
CREATE TABLE IF NOT EXISTS `cleans` (
  `CLEA_EMP_ID` int(11) NOT NULL,
  `Ward_ID` int(11) NOT NULL,
  PRIMARY KEY (`CLEA_EMP_ID`,`Ward_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.cleans: ~0 rows (approximately)
DELETE FROM `cleans`;

-- Dumping structure for table indra_hospital.controls
DROP TABLE IF EXISTS `controls`;
CREATE TABLE IF NOT EXISTS `controls` (
  `PHA_EMP_ID` int(11) NOT NULL,
  `DRUG_ID` int(11) NOT NULL,
  PRIMARY KEY (`PHA_EMP_ID`,`DRUG_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.controls: ~0 rows (approximately)
DELETE FROM `controls`;

-- Dumping structure for table indra_hospital.department
DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `D_ID` int(11) NOT NULL AUTO_INCREMENT,
  `D_Name` varchar(50) DEFAULT NULL,
  `Phone_Number` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`D_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.department: ~14 rows (approximately)
DELETE FROM `department`;
INSERT INTO `department` (`D_ID`, `D_Name`, `Phone_Number`) VALUES
	(1, 'Out Patient Department', '0123456789'),
	(2, 'Surgical Derpartment', '1234567890'),
	(3, 'Neonatal Intensive Care Unit', '2345678901'),
	(4, 'Pediatrics Department', '3456789012'),
	(5, 'Oncology Department', '4567890123'),
	(6, 'Radiology Department', '2345678901'),
	(7, 'Sterlization Department', '5678901234'),
	(8, 'ICU', '7890123456'),
	(9, 'Cleaning Unit', '7890123456'),
	(10, 'Receiption Unit', '8901234567'),
	(11, 'Security Unit', '2345678901'),
	(12, 'Vehicle Unit', '9012345678'),
	(13, 'Pharmacist Unit', '0234567891'),
	(14, 'Admin Department', '2034567891');

-- Dumping structure for table indra_hospital.doctor
DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `E_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(50) NOT NULL,
  `D_ID` int(11) DEFAULT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `First_Day` date NOT NULL,
  `Working_Hours` int(11) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Birthday` date NOT NULL,
  `Basic_Salary` decimal(10,2) NOT NULL,
  `OT_Salary` decimal(10,2) DEFAULT NULL,
  `Other_Adition` decimal(10,2) DEFAULT NULL,
  `Classify` varchar(50) NOT NULL,
  PRIMARY KEY (`E_ID`,`User_Name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.doctor: ~2 rows (approximately)
DELETE FROM `doctor`;
INSERT INTO `doctor` (`E_ID`, `User_Name`, `D_ID`, `First_Name`, `Last_Name`, `First_Day`, `Working_Hours`, `Password`, `Birthday`, `Basic_Salary`, `OT_Salary`, `Other_Adition`, `Classify`) VALUES
	(1, 'sampath', 2, 'sampath', 'kumara', '2001-05-30', 4, 'sampath', '1957-01-20', 56000.00, 30000.00, 45000.00, 'surgen'),
	(3, 'ranil', 2, 'ranil', 'rajapaksha', '2022-05-06', 4, 'ranil', '1957-06-15', 65000.00, 3000.00, 600.00, 'surgen');

-- Dumping structure for table indra_hospital.doctor_employee_address
DROP TABLE IF EXISTS `doctor_employee_address`;
CREATE TABLE IF NOT EXISTS `doctor_employee_address` (
  `E_ID` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  PRIMARY KEY (`E_ID`,`Address`),
  CONSTRAINT `doctor_employee_address` FOREIGN KEY (`E_ID`) REFERENCES `doctor` (`E_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.doctor_employee_address: ~0 rows (approximately)
DELETE FROM `doctor_employee_address`;

-- Dumping structure for table indra_hospital.doctor_employee_phone_num
DROP TABLE IF EXISTS `doctor_employee_phone_num`;
CREATE TABLE IF NOT EXISTS `doctor_employee_phone_num` (
  `E_ID` int(11) NOT NULL,
  `Phone_Num` varchar(50) NOT NULL,
  PRIMARY KEY (`E_ID`,`Phone_Num`),
  CONSTRAINT `doctor_employee_phone_num` FOREIGN KEY (`E_ID`) REFERENCES `doctor` (`E_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.doctor_employee_phone_num: ~0 rows (approximately)
DELETE FROM `doctor_employee_phone_num`;

-- Dumping structure for table indra_hospital.driver
DROP TABLE IF EXISTS `driver`;
CREATE TABLE IF NOT EXISTS `driver` (
  `E_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(50) NOT NULL,
  `D_ID` int(11) DEFAULT NULL,
  `Number_Plate` varchar(50) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `First_Day` date NOT NULL,
  `Working_Hours` int(11) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Birthday` date NOT NULL,
  `Basic_Salary` decimal(10,2) NOT NULL,
  `OT_Salary` decimal(10,2) DEFAULT NULL,
  `Other_Adition` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`E_ID`,`User_Name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.driver: ~1 rows (approximately)
DELETE FROM `driver`;
INSERT INTO `driver` (`E_ID`, `User_Name`, `D_ID`, `Number_Plate`, `First_Name`, `Last_Name`, `First_Day`, `Working_Hours`, `Password`, `Birthday`, `Basic_Salary`, `OT_Salary`, `Other_Adition`) VALUES
	(2, 'sachindra', 1, 'CP-PA-4562', 'sachindra', 'dilshan', '2005-08-14', 6, 'sachindra', '1997-04-02', 50000.00, 30000.00, 10000.00),
	(3, '', 0, '', '', '', '0000-00-00', 0, '', '0000-00-00', 0.00, 0.00, 0.00);

-- Dumping structure for table indra_hospital.driver_employee_address
DROP TABLE IF EXISTS `driver_employee_address`;
CREATE TABLE IF NOT EXISTS `driver_employee_address` (
  `E_ID` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  PRIMARY KEY (`E_ID`,`Address`),
  CONSTRAINT `driver_employee_address` FOREIGN KEY (`E_ID`) REFERENCES `driver` (`E_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.driver_employee_address: ~0 rows (approximately)
DELETE FROM `driver_employee_address`;

-- Dumping structure for table indra_hospital.driver_employee_phone_num
DROP TABLE IF EXISTS `driver_employee_phone_num`;
CREATE TABLE IF NOT EXISTS `driver_employee_phone_num` (
  `E_ID` int(11) NOT NULL,
  `Phone_Num` varchar(50) NOT NULL,
  PRIMARY KEY (`E_ID`,`Phone_Num`),
  CONSTRAINT `driver_employee_phone_num` FOREIGN KEY (`E_ID`) REFERENCES `driver` (`E_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.driver_employee_phone_num: ~0 rows (approximately)
DELETE FROM `driver_employee_phone_num`;

-- Dumping structure for table indra_hospital.drug
DROP TABLE IF EXISTS `drug`;
CREATE TABLE IF NOT EXISTS `drug` (
  `Drug_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `QTY` int(11) DEFAULT NULL,
  `Description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Drug_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.drug: ~3 rows (approximately)
DELETE FROM `drug`;
INSERT INTO `drug` (`Drug_ID`, `Name`, `QTY`, `Description`) VALUES
	(1, 'Alprazolam tab I.P 0.25mg', 200, 'Preanaesthic medications'),
	(2, 'Alprazolam tab I.P 0.5mg', 225, 'Preanaesthic medications'),
	(3, 'Alprazolam tab I.P 1mg', 75, 'Preanaesthic medications');

-- Dumping structure for table indra_hospital.guards
DROP TABLE IF EXISTS `guards`;
CREATE TABLE IF NOT EXISTS `guards` (
  `D_ID` int(11) NOT NULL,
  `E_ID` int(11) NOT NULL,
  PRIMARY KEY (`D_ID`,`E_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.guards: ~0 rows (approximately)
DELETE FROM `guards`;

-- Dumping structure for table indra_hospital.issues
DROP TABLE IF EXISTS `issues`;
CREATE TABLE IF NOT EXISTS `issues` (
  `Prescription_ID` int(11) NOT NULL,
  `Drug_ID` int(11) NOT NULL,
  PRIMARY KEY (`Prescription_ID`,`Drug_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.issues: ~0 rows (approximately)
DELETE FROM `issues`;

-- Dumping structure for table indra_hospital.nurse
DROP TABLE IF EXISTS `nurse`;
CREATE TABLE IF NOT EXISTS `nurse` (
  `E_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(50) NOT NULL,
  `D_ID` int(11) DEFAULT NULL,
  `Ward_ID` int(11) DEFAULT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `First_Day` date NOT NULL,
  `Working_Hours` int(11) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Birthday` date NOT NULL,
  `Basic_Salary` decimal(10,2) NOT NULL,
  `OT_Salary` decimal(10,2) DEFAULT NULL,
  `Other_Adition` decimal(10,2) DEFAULT NULL,
  `Class` varchar(50) NOT NULL,
  PRIMARY KEY (`E_ID`,`User_Name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.nurse: ~2 rows (approximately)
DELETE FROM `nurse`;
INSERT INTO `nurse` (`E_ID`, `User_Name`, `D_ID`, `Ward_ID`, `First_Name`, `Last_Name`, `First_Day`, `Working_Hours`, `Password`, `Birthday`, `Basic_Salary`, `OT_Salary`, `Other_Adition`, `Class`) VALUES
	(1, 'pushpa', 4, 3, 'pushpa', 'ramyani', '2005-02-08', 6, 'pushpa', '1963-07-12', 65000.00, 2000.00, 60000.00, 'class 1'),
	(2, 'randilu', 8, NULL, 'randilu', 'jayani', '2021-05-08', 6, 'randilu', '1998-05-09', 35000.00, 90000.00, 3000.00, 'class 2'),
	(3, 'asini', 3, 1, 'asini', 'warnakulasooriya', '2022-02-03', 5, 'asini', '1999-05-06', 50000.00, 23000.00, 2000.00, 'class 2');

-- Dumping structure for table indra_hospital.nurse_employee_address
DROP TABLE IF EXISTS `nurse_employee_address`;
CREATE TABLE IF NOT EXISTS `nurse_employee_address` (
  `E_ID` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  PRIMARY KEY (`E_ID`,`Address`),
  CONSTRAINT `nurse_employee_address` FOREIGN KEY (`E_ID`) REFERENCES `nurse` (`E_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.nurse_employee_address: ~0 rows (approximately)
DELETE FROM `nurse_employee_address`;

-- Dumping structure for table indra_hospital.nurse_employee_phone_num
DROP TABLE IF EXISTS `nurse_employee_phone_num`;
CREATE TABLE IF NOT EXISTS `nurse_employee_phone_num` (
  `E_ID` int(11) NOT NULL,
  `Phone_Num` varchar(50) NOT NULL,
  PRIMARY KEY (`E_ID`,`Phone_Num`),
  CONSTRAINT `nurse_employee_phone_num` FOREIGN KEY (`E_ID`) REFERENCES `nurse` (`E_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.nurse_employee_phone_num: ~0 rows (approximately)
DELETE FROM `nurse_employee_phone_num`;

-- Dumping structure for table indra_hospital.patient
DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `P_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(50) NOT NULL,
  `APPOINTMENT_ID` int(11) DEFAULT NULL,
  `Ward_ID` int(11) DEFAULT NULL,
  `First_Name` varchar(50) DEFAULT NULL,
  `Last_Name` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`P_ID`,`User_Name`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.patient: ~4 rows (approximately)
DELETE FROM `patient`;
INSERT INTO `patient` (`P_ID`, `User_Name`, `APPOINTMENT_ID`, `Ward_ID`, `First_Name`, `Last_Name`, `Password`, `Birthday`, `email`, `sex`) VALUES
	(1, 'charith', 1, 1, 'charitha', 'adikari', 'charitha', '1999-07-31', 'charithabimsara123@gmail.com', 'male'),
	(2, 'viraj', 2, 1, 'viraj', 'prabuddika', 'viraj', '1998-05-07', 'virajprabuddika123@gmail.com', 'male'),
	(3, 'rasika', 4, 10, 'rasika', 'prassana', 'rasika', '1998-03-10', 'rasikaprassna123@gmail.com', 'male'),
	(5, 'nuwantha', 0, 0, 'nuwantha', 'amarasinghe', 'nuwantha', '1998-03-10', 'thisalnuwantha@gmail.com', 'male'),
	(10, 'geeth', NULL, NULL, 'geeth', 'rathnathilaka', 'geeth', '2023-05-12', 'rathnathilakageeth@gmail.com', 'male');

-- Dumping structure for table indra_hospital.pharmacist
DROP TABLE IF EXISTS `pharmacist`;
CREATE TABLE IF NOT EXISTS `pharmacist` (
  `E_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(50) NOT NULL,
  `D_ID` int(11) DEFAULT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `First_Day` date NOT NULL,
  `Working_Hours` int(11) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Birthday` date NOT NULL,
  `Basic_Salary` decimal(10,2) NOT NULL,
  `OT_Salary` decimal(10,2) DEFAULT NULL,
  `Other_Adition` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`E_ID`,`User_Name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.pharmacist: ~1 rows (approximately)
DELETE FROM `pharmacist`;
INSERT INTO `pharmacist` (`E_ID`, `User_Name`, `D_ID`, `First_Name`, `Last_Name`, `First_Day`, `Working_Hours`, `Password`, `Birthday`, `Basic_Salary`, `OT_Salary`, `Other_Adition`) VALUES
	(1, 'sankalpa', 2, 'sankalpa', 'sahan', '2005-06-07', 7, 'sankalpa', '1990-05-01', 70000.00, 2000.00, 6000.00);

-- Dumping structure for table indra_hospital.pharmacist_employee_address
DROP TABLE IF EXISTS `pharmacist_employee_address`;
CREATE TABLE IF NOT EXISTS `pharmacist_employee_address` (
  `E_ID` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  PRIMARY KEY (`E_ID`,`Address`),
  CONSTRAINT `pharmacist_employee_address` FOREIGN KEY (`E_ID`) REFERENCES `pharmacist` (`E_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.pharmacist_employee_address: ~0 rows (approximately)
DELETE FROM `pharmacist_employee_address`;

-- Dumping structure for table indra_hospital.pharmacist_employee_phone_num
DROP TABLE IF EXISTS `pharmacist_employee_phone_num`;
CREATE TABLE IF NOT EXISTS `pharmacist_employee_phone_num` (
  `E_ID` int(11) NOT NULL,
  `Phone_Num` varchar(50) NOT NULL,
  PRIMARY KEY (`E_ID`,`Phone_Num`),
  CONSTRAINT `pharmacist_employee_phone_num` FOREIGN KEY (`E_ID`) REFERENCES `pharmacist` (`E_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.pharmacist_employee_phone_num: ~0 rows (approximately)
DELETE FROM `pharmacist_employee_phone_num`;

-- Dumping structure for table indra_hospital.prescription
DROP TABLE IF EXISTS `prescription`;
CREATE TABLE IF NOT EXISTS `prescription` (
  `Prescription_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(50) DEFAULT NULL,
  `DOC_EMP_ID` int(11) DEFAULT NULL,
  `First_Name` varchar(50) DEFAULT NULL,
  `Last_Name` varchar(50) DEFAULT NULL,
  `Description` varchar(50) DEFAULT NULL,
  `P_Age` int(11) DEFAULT NULL,
  PRIMARY KEY (`Prescription_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.prescription: ~0 rows (approximately)
DELETE FROM `prescription`;
INSERT INTO `prescription` (`Prescription_ID`, `User_Name`, `DOC_EMP_ID`, `First_Name`, `Last_Name`, `Description`, `P_Age`) VALUES
	(4, 'charith', 1, 'charitha', 'adikari', 'he is pretending as sick', 24),
	(5, 'charith', 1, 'adikari', 'charitha', 'Alprazolam tab I.P 0.5mg*3 tabs for 3 days', 23),
	(6, 'charith', 1, '', '', 'Alprazolam tab I.P 0.5mg*3 tabs for 3 days', 0);

-- Dumping structure for table indra_hospital.receiptionist
DROP TABLE IF EXISTS `receiptionist`;
CREATE TABLE IF NOT EXISTS `receiptionist` (
  `E_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(50) NOT NULL,
  `D_ID` int(11) DEFAULT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `First_Day` date NOT NULL,
  `Working_Hours` int(11) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Birthday` date NOT NULL,
  `Basic_Salary` decimal(10,2) NOT NULL,
  `OT_Salary` decimal(10,2) DEFAULT NULL,
  `Other_Adition` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`E_ID`,`User_Name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.receiptionist: ~2 rows (approximately)
DELETE FROM `receiptionist`;
INSERT INTO `receiptionist` (`E_ID`, `User_Name`, `D_ID`, `First_Name`, `Last_Name`, `First_Day`, `Working_Hours`, `Password`, `Birthday`, `Basic_Salary`, `OT_Salary`, `Other_Adition`) VALUES
	(1, 'ishara', 1, 'ishara', 'sewmini', '2023-02-04', 5, 'ishara', '2000-08-08', 60000.00, 2000.00, 2500.00),
	(2, 'sewwandi', 10, 'sewwandi', 'supipi', '2022-01-01', 6, 'sewwandi', '2000-01-01', 25000.00, 30000.00, 20000.00);

-- Dumping structure for table indra_hospital.receptionist_employee_address
DROP TABLE IF EXISTS `receptionist_employee_address`;
CREATE TABLE IF NOT EXISTS `receptionist_employee_address` (
  `E_ID` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  PRIMARY KEY (`E_ID`,`Address`),
  CONSTRAINT `receptionist_employee_address` FOREIGN KEY (`E_ID`) REFERENCES `receiptionist` (`E_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.receptionist_employee_address: ~0 rows (approximately)
DELETE FROM `receptionist_employee_address`;

-- Dumping structure for table indra_hospital.receptionist_employee_phone_num
DROP TABLE IF EXISTS `receptionist_employee_phone_num`;
CREATE TABLE IF NOT EXISTS `receptionist_employee_phone_num` (
  `E_ID` int(11) NOT NULL,
  `Phone_Num` varchar(50) NOT NULL,
  PRIMARY KEY (`E_ID`,`Phone_Num`),
  CONSTRAINT `receptionist_employee_phone_num` FOREIGN KEY (`E_ID`) REFERENCES `receiptionist` (`E_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.receptionist_employee_phone_num: ~0 rows (approximately)
DELETE FROM `receptionist_employee_phone_num`;

-- Dumping structure for table indra_hospital.recipt
DROP TABLE IF EXISTS `recipt`;
CREATE TABLE IF NOT EXISTS `recipt` (
  `Recipt_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Bill_ID` int(11) DEFAULT NULL,
  `Decription` varchar(50) DEFAULT NULL,
  `Doctor_Charge` decimal(10,2) NOT NULL,
  `Hopital_Charge` decimal(10,2) NOT NULL,
  `Drug_Charge` decimal(10,2) NOT NULL,
  `Tax` decimal(10,2) DEFAULT NULL,
  `Discount` decimal(10,2) DEFAULT NULL,
  `Total_Bill` decimal(10,2) DEFAULT NULL,
  `Time` time NOT NULL DEFAULT curtime(),
  `Date` date NOT NULL DEFAULT curdate(),
  PRIMARY KEY (`Recipt_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.recipt: ~0 rows (approximately)
DELETE FROM `recipt`;
INSERT INTO `recipt` (`Recipt_ID`, `Bill_ID`, `Decription`, `Doctor_Charge`, `Hopital_Charge`, `Drug_Charge`, `Tax`, `Discount`, `Total_Bill`, `Time`, `Date`) VALUES
	(2, 4, 'charitha adikari', 1000.00, 500.00, 250.00, 250.00, 200.00, 1800.00, '16:41:39', '2023-05-04');

-- Dumping structure for table indra_hospital.report
DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `R_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(50) DEFAULT NULL,
  `Ward_ID` int(11) DEFAULT NULL,
  `DOC_EMP_ID` int(11) DEFAULT NULL,
  `Description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`R_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.report: ~0 rows (approximately)
DELETE FROM `report`;
INSERT INTO `report` (`R_ID`, `User_Name`, `Ward_ID`, `DOC_EMP_ID`, `Description`) VALUES
	(1, 'charith', 1, 1, 'Alprazolam tab I.P 0.5mg*3 tabs for 3 days');

-- Dumping structure for table indra_hospital.security
DROP TABLE IF EXISTS `security`;
CREATE TABLE IF NOT EXISTS `security` (
  `E_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(50) NOT NULL,
  `D_ID` int(11) DEFAULT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `First_Day` date NOT NULL,
  `Working_Hours` int(11) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Birthday` date NOT NULL,
  `Basic_Salary` decimal(10,2) NOT NULL,
  `OT_Salary` decimal(10,2) DEFAULT NULL,
  `Other_Adition` decimal(10,2) DEFAULT NULL,
  `Rank` varchar(50) NOT NULL,
  PRIMARY KEY (`E_ID`,`User_Name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.security: ~0 rows (approximately)
DELETE FROM `security`;

-- Dumping structure for table indra_hospital.token
DROP TABLE IF EXISTS `token`;
CREATE TABLE IF NOT EXISTS `token` (
  `Token_ID` int(11) NOT NULL AUTO_INCREMENT,
  `APPOINTMENT_ID` int(11) DEFAULT NULL,
  `DOC_EMP_ID` int(11) DEFAULT NULL,
  `Token_number` int(11) DEFAULT NULL,
  `Decription` varchar(50) DEFAULT NULL,
  `Time` time NOT NULL DEFAULT current_timestamp(),
  `Date` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`Token_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.token: ~2 rows (approximately)
DELETE FROM `token`;
INSERT INTO `token` (`Token_ID`, `APPOINTMENT_ID`, `DOC_EMP_ID`, `Token_number`, `Decription`, `Time`, `Date`) VALUES
	(15, 1, 3, 1, 'I feel cold', '15:33:55', '2023-05-04'),
	(16, 1, 1, 2, 'I feel nothing', '16:10:30', '2023-05-04'),
	(17, 4, 1, 3, 'dsfsfds', '16:14:05', '2023-05-04');

-- Dumping structure for table indra_hospital.vehicle
DROP TABLE IF EXISTS `vehicle`;
CREATE TABLE IF NOT EXISTS `vehicle` (
  `Number_Plate` varchar(50) NOT NULL,
  `Model` varchar(50) DEFAULT NULL,
  `Brand` varchar(50) DEFAULT NULL,
  `Availability` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Number_Plate`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.vehicle: ~3 rows (approximately)
DELETE FROM `vehicle`;
INSERT INTO `vehicle` (`Number_Plate`, `Model`, `Brand`, `Availability`) VALUES
	('CP-LA-0456', 'Wagan', 'Benz', 'Available'),
	('CP-LM-1375', 'Wagan', 'BMW', 'Available'),
	('CP-PA-4562', 'HIACE', 'TOYOTA', 'Available');

-- Dumping structure for table indra_hospital.ward
DROP TABLE IF EXISTS `ward`;
CREATE TABLE IF NOT EXISTS `ward` (
  `Ward_ID` int(11) NOT NULL AUTO_INCREMENT,
  `DOC_ID` int(11) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `beds` int(11) DEFAULT NULL,
  `Description` varchar(50) DEFAULT NULL,
  `Filled_beds` int(11) DEFAULT NULL,
  PRIMARY KEY (`Ward_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table indra_hospital.ward: ~1 rows (approximately)
DELETE FROM `ward`;
INSERT INTO `ward` (`Ward_ID`, `DOC_ID`, `Name`, `beds`, `Description`, `Filled_beds`) VALUES
	(1, 1, 'CG1', 20, 'This is female childern ward', 0);

-- Dumping structure for trigger indra_hospital.reset_token_number_trigger
DROP TRIGGER IF EXISTS `reset_token_number_trigger`;
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `reset_token_number_trigger` BEFORE INSERT ON `token` FOR EACH ROW BEGIN
    DECLARE current_hour INT;
    SELECT HOUR(NOW()) INTO current_hour;
    IF current_hour <= 0 THEN
        SET NEW.Token_number = 1;
    END IF;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger indra_hospital.set_token_number
DROP TRIGGER IF EXISTS `set_token_number`;
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `set_token_number` BEFORE INSERT ON `token` FOR EACH ROW BEGIN
    SET NEW.Token_number = (SELECT IFNULL(MAX(Token_number), 0) + 1 FROM token);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
