-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2018 at 07:27 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resortsql`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `BILL_ID` varchar(45) NOT NULL,
  `RESERVE_RES_ID` varchar(45) NOT NULL,
  `TYPE_PAYMENT_TYM_ID` varchar(45) NOT NULL,
  `BILL_DATE` date DEFAULT NULL,
  `BILL_AMOUNTMONEY` decimal(9,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bill_service`
--

CREATE TABLE `bill_service` (
  `BS_ID` varchar(45) NOT NULL,
  `USESERVICE_SER_ID` varchar(45) NOT NULL,
  `BS_DATE` date DEFAULT NULL,
  `BS_TOTALPRICE` decimal(9,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `checkin`
--

CREATE TABLE `checkin` (
  `CH_ID` varchar(45) NOT NULL,
  `ROOM_ROOM_ID` varchar(45) NOT NULL,
  `EMP_ID` int(4) UNSIGNED ZEROFILL NOT NULL,
  `LISTRES_LR_ID` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `claim`
--

CREATE TABLE `claim` (
  `CLA_ID` varchar(45) NOT NULL,
  `VENDER_V_ID` varchar(45) NOT NULL,
  `CLA_AMOUNT` int(11) DEFAULT NULL,
  `CLA_DATESEND` date DEFAULT NULL,
  `CLA_DATEGET` date DEFAULT NULL,
  `CLA_STATUS` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CUS_ID` varchar(45) NOT NULL,
  `CUS_FNAME` varchar(45) DEFAULT NULL,
  `CUS_LNAME` varchar(45) DEFAULT NULL,
  `CUS_PHONE` varchar(10) DEFAULT NULL,
  `CUS_EMAIL` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CUS_ID`, `CUS_FNAME`, `CUS_LNAME`, `CUS_PHONE`, `CUS_EMAIL`) VALUES
('', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `detail_claim`
--

CREATE TABLE `detail_claim` (
  `DCL_ID` varchar(45) NOT NULL,
  `PRODUCT_PD_ID` varchar(45) NOT NULL,
  `LIST_ORDER_LOR_ID` varchar(45) NOT NULL,
  `CALM_CAL_ID` varchar(45) NOT NULL,
  `DCL_AMOUNT` int(11) DEFAULT NULL,
  `DCL_STATUS` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `detail_get`
--

CREATE TABLE `detail_get` (
  `DG_ID` varchar(45) NOT NULL,
  `DG_AMOUNT` int(11) DEFAULT NULL,
  `GET_PRODUCT_GET_ID` varchar(45) NOT NULL,
  `PRODUCT_PD_ID` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `DOR_ID` varchar(45) NOT NULL,
  `PRODUCT_PD_ID` varchar(45) NOT NULL,
  `LIST_ORDER_LOR_ID` varchar(45) NOT NULL,
  `DOR_AMOUNT` int(11) DEFAULT NULL,
  `DOR_PRICE` decimal(9,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `detail_take_of_product`
--

CREATE TABLE `detail_take_of_product` (
  `LTOP_ID` varchar(45) NOT NULL,
  `TAKE_OF_PRODUCT_TOP_ID` varchar(45) NOT NULL,
  `PRODUCT_PD_ID` varchar(45) NOT NULL,
  `DTOP_AMOUNT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EMP_ID` int(4) UNSIGNED ZEROFILL NOT NULL,
  `POS_ID` varchar(45) NOT NULL,
  `EMP_FNAME` varchar(45) DEFAULT NULL,
  `EMP_LNAME` varchar(45) DEFAULT NULL,
  `EMP_PHONE` varchar(10) DEFAULT NULL,
  `EMP_EMAIL` varchar(45) DEFAULT NULL,
  `EMP_EDUCATION` varchar(45) DEFAULT NULL,
  `EMP_GENDER` char(1) DEFAULT NULL,
  `EMP_SALARY` decimal(9,2) DEFAULT NULL,
  `EMP_BIRTHDATE` date DEFAULT NULL,
  `EMP_DATESTARTWORK` date DEFAULT NULL,
  `EMP_ADDRESS` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EMP_ID`, `POS_ID`, `EMP_FNAME`, `EMP_LNAME`, `EMP_PHONE`, `EMP_EMAIL`, `EMP_EDUCATION`, `EMP_GENDER`, `EMP_SALARY`, `EMP_BIRTHDATE`, `EMP_DATESTARTWORK`, `EMP_ADDRESS`) VALUES
(0001, '001', 'นายเอsd', 'สงวนสิทธิ์d', '0882329637', 'atest@hotmail.com', 'ระดับประถมศึกษา', 'F', '8000.00', '2012-01-01', '2012-02-29', 'ฟหกดฟหasdfasdfa'),
(0002, '001', 'นาง สมศรี ', 'สมศักดิ์', '0859943636', 'somze@hotmail.com', 'ระดับอุดมศึกษา', 'F', '15000.00', '2018-02-08', '2018-02-08', 'ทุกที่ที่อยู่'),
(0003, '006', 'นายสมศักดิ์', 'สมศรี', '0855546321', 'abc@hotmail.com', 'ไม่จบการศึกษาใดๆ', 'M', '15000.00', '2018-02-08', '2018-02-08', 'อยู่ทุกที่'),
(0004, '001', 'นาย บี', 'ไม่มี', '0845634123', 'test@hotmail.com', 'ระดับมัธยมศึกษา', 'F', '15000.00', '2018-02-08', '2018-02-08', 'ไม่มี'),
(0005, '001', 'นายสงวน', 'วันนา', '0822222222', 'test555@hotmail.com', 'ไม่จบการศึกษาใดๆ', 'M', '6000.00', '2018-02-08', '2018-02-08', 'ไม่มีที่อยู่'),
(0006, '004', 'นายซี', 'ทดสอบ', '0812354564', 'akdf@hotmail.com', 'ระดับอุดมศึกษา', 'M', '8000.00', '2018-02-08', '2018-02-08', 'ทุกที่'),
(0007, '005', 'adsf', 'asdf', '0121321313', 'adsfko@hotmail.com', 'ระดับอาชีวศึกษา', 'M', '10000.00', '2018-02-08', '2018-02-08', 'asdfghjkdfgh'),
(0008, '004', 'asdf', 'asdf', '0123156456', 'asdkf@hotmail.com', 'ระดับมัธยมศึกษา', 'M', '15000.00', '2018-02-08', '2018-02-08', 'asdf'),
(0009, '004', 'dsaf', 'asdfgasf', '0456321685', 'asdf@hotmail.com', 'ระดับอุดมศึกษา', 'M', '8000.00', '2018-02-08', '2018-02-08', 'asdfasdf'),
(0010, '005', 'asdf', 'sdf', '0045132312', 'asdf@hotmail.com', 'ระดับปฐมวัย', 'M', '6000.00', '2018-02-08', '2018-02-08', 'asdfasf'),
(0011, '005', 'sfdgs', 'sdfsf', '0000000000', 'asdfs@hotmail.com', 'ระดับอาชีวศึกษา', 'M', '6000.00', '2018-02-08', '2018-02-08', 'adsfsadf'),
(0012, '003', 'erwtwer', 'twertwet', '0123156465', 'adfsf@hotmail.com', 'ระดับอุดมศึกษา', 'M', '6000.00', '2018-02-08', '2018-02-08', 'asdfasdf'),
(0013, '004', 'sdfgsd', 'fsdf', '0123654648', 'adsf@hotmail.com', 'ระดับอาชีวศึกษา', 'M', '6000.00', '2018-02-08', '2018-02-08', 'asdfasf'),
(0014, '001', 'asdfasdf', 'asdfasdf', '0787685453', 'asfd@hotmail.com', 'ระดับประถมศึกษา', 'M', '6000.00', '2018-02-03', '2018-02-08', 'asdfasdf'),
(0015, '004', 'asdfasdf', 'asdfasdf', '0123146584', 'asdfasd@hotmail.com', 'ระดับอุดมศึกษา', 'M', '6000.00', '2018-02-03', '2018-02-03', 'asdfasdfa'),
(0016, '001', 'a', 'b', '0882329633', 'test@hotmail.com', 'ระดับปฐมวัย', 'F', '10000.00', '2018-02-12', '2018-02-12', 'hklk'),
(0017, '004', 'นายซี', 'ทดสอบ', '0812354564', 'akdf@hotmail.com', 'ระดับอุดมศึกษา', 'M', '8000.00', '2018-02-08', '2018-02-08', 'ทุกที่'),
(0018, '001', 'sdfsdfgsdf', 'adfdsf', '(132) 168-', 'asdfasdfadsfdsf@asdfasdf.cas', 'ระดับอาชีวศึกษา', 'M', '6000.00', '2018-02-24', '2018-02-24', 'asdfdsf'),
(0019, '005', 'asdfa', 'asdfasdf', '(025) 284-', 'asdfds@ha.com', 'ระดับอาชีวศึกษา', 'M', '6000.00', '0000-00-00', '2018-02-24', 'adsfasdf'),
(0020, '003', 'rsyrdty', 'ssdfsdfdfg', '(123)13213', 'omeasdf@adfa.com', 'ระดับปฐมวัย', 'M', '6000.00', '2012-02-12', '2018-02-24', 'sdfsdf'),
(0021, '001', 'dsfs', 'hhhhh', '(111)11111', 'test@hotmail.com', 'ระดับอุดมศึกษา', 'M', '6000.00', '2012-02-24', '2018-02-24', 'adsfasdfa'),
(0022, '004', 'นายเอ', 'asdf', '0812345648', 'asdfasdfadsfdsf@asdfasdf.cas', 'ระดับปฐมวัย', 'M', '6000.00', '2012-01-31', '2018-02-24', 'asdfasdf'),
(0023, '003', 'asdf', 'สิทธิ์', '0202020202', 'asdf@hotmail.com', 'ระดับอาชีวศึกษา', 'F', '6000.00', '2012-02-01', '2012-02-29', 'dtrhdfghdgj');

-- --------------------------------------------------------

--
-- Table structure for table `get_product`
--

CREATE TABLE `get_product` (
  `GET_ID` varchar(45) NOT NULL,
  `LIST_ORDER_LOR_ID` varchar(45) NOT NULL,
  `EMPLOYEE_EMP_ID` int(4) UNSIGNED ZEROFILL NOT NULL,
  `GET_DATEGET` date DEFAULT NULL,
  `GET_TOTALAMOUNT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `leaving`
--

CREATE TABLE `leaving` (
  `LEA_ID` int(4) UNSIGNED ZEROFILL NOT NULL,
  `EMP_ID` int(4) UNSIGNED ZEROFILL NOT NULL,
  `TYL_NAME` varchar(45) NOT NULL,
  `LEA_DATESTART` date DEFAULT NULL,
  `LEA_DATEEND` date DEFAULT NULL,
  `LEA_ETC` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `leaving`
--

INSERT INTO `leaving` (`LEA_ID`, `EMP_ID`, `TYL_NAME`, `LEA_DATESTART`, `LEA_DATEEND`, `LEA_ETC`) VALUES
(0011, 0001, 'ลาป่วย', '2018-08-01', '2018-08-07', 'รถล้มแล้วป่วย'),
(0012, 0005, 'ลากิจ', '2018-02-01', '2018-02-03', 'แม่ป่วย');

-- --------------------------------------------------------

--
-- Table structure for table `listimage`
--

CREATE TABLE `listimage` (
  `IMAGE_ID` varchar(45) NOT NULL,
  `TYPEROOM_TYR_ID` varchar(45) NOT NULL,
  `IMAGE_NAME` varchar(45) DEFAULT NULL,
  `IMAGE_PHOTO` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `listres`
--

CREATE TABLE `listres` (
  `LR_ID` varchar(45) NOT NULL,
  `RESERVE_RES_ID` varchar(45) NOT NULL,
  `TYPEROOM_TYR_ID` varchar(45) NOT NULL,
  `LR_AMOUNTROOMS` int(11) DEFAULT NULL,
  `LR_PRICE` decimal(9,2) DEFAULT NULL,
  `LR_DATESTART` date NOT NULL,
  `LR_DATEEND` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `list_order`
--

CREATE TABLE `list_order` (
  `LOR_ID` varchar(45) NOT NULL,
  `VENDER_V_ID` varchar(45) NOT NULL,
  `EMP_ID` int(4) UNSIGNED ZEROFILL NOT NULL,
  `LOR_DATESEND` date DEFAULT NULL,
  `LOR_DATEPAY` date DEFAULT NULL,
  `LOR_DATEGET` date DEFAULT NULL,
  `LOR_TOTALAMOUNT` decimal(9,2) DEFAULT NULL,
  `LOR_TOTALPRICE` decimal(9,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PAY_ID` varchar(45) NOT NULL,
  `TYPE_PAYMENT_TYM_ID` varchar(45) NOT NULL,
  `LIST_ORDER_LOR_ID` varchar(45) NOT NULL,
  `PAY_MONEY` decimal(9,2) DEFAULT NULL,
  `PAY_DATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `POS_ID` varchar(45) NOT NULL,
  `POS_NAME` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`POS_ID`, `POS_NAME`) VALUES
('001', 'แม่บ้าน'),
('002', 'พ่อบ้าน'),
('003', 'แม่ครัว'),
('004', 'คนงาน'),
('005', 'พนักงานตอนรับ'),
('006', 'เด็กเสริฟ');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `PD_ID` varchar(45) NOT NULL,
  `TYP_ID` varchar(45) NOT NULL,
  `PD_NAME` varchar(45) DEFAULT NULL,
  `PD_AMOUNT` decimal(9,2) DEFAULT NULL,
  `PD_PRICE` decimal(9,2) DEFAULT NULL,
  `PD_COST` decimal(9,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `PRO_ID` varchar(45) NOT NULL,
  `Pro_NAME` varchar(45) DEFAULT NULL,
  `PRO_DATESTART` date DEFAULT NULL,
  `PRO_DATEEND` date DEFAULT NULL,
  `PRO_DISCOUNT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`PRO_ID`, `Pro_NAME`, `PRO_DATESTART`, `PRO_DATEEND`, `PRO_DISCOUNT`) VALUES
('P000', 'ไม่มี', NULL, NULL, NULL),
('P001', 'ลด10%', '2018-01-01', '2018-01-31', 10);

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `RES_ID` varchar(45) NOT NULL,
  `CUSTOMER_CUS_ID` varchar(45) DEFAULT NULL,
  `PROMOTION_PRO_ID` varchar(45) DEFAULT NULL,
  `RES_CHECKOUT` date DEFAULT NULL,
  `RES_DATERES` date DEFAULT NULL,
  `RES_CHECKIN` date DEFAULT NULL,
  `RES_ROOMAMOUNT` int(11) DEFAULT NULL,
  `RES_STATUS` tinyint(4) DEFAULT NULL,
  `RES_DEPOSIT` decimal(9,2) DEFAULT NULL,
  `RES_TOTALPRICE` decimal(9,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `ROOM_ID` varchar(45) NOT NULL,
  `ROOM_NAME` varchar(45) DEFAULT NULL,
  `TYPEROOM_TYR_ID` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`ROOM_ID`, `ROOM_NAME`, `TYPEROOM_TYR_ID`) VALUES
('R001', 'บ้านแผ่บารมี', 'K'),
('R002', 'บ้านแควน้อย', 'K'),
('R003', 'บ้านเศรษฐีสยาม', 'K'),
('R004', 'บ้านเสน่ห์จันทร์', 'K'),
('R005', 'บ้านประดู่', 'K'),
('R006', 'บ้านทองหลาง', 'K'),
('R007', 'บ้านออมเงินออมทอง', 'K'),
('R008', 'บ้านมหาหงส์', 'T'),
('R009', 'บ้านชงโค', 'K'),
('R010', 'บ้านเอืองผึง', 'T'),
('R011', 'บ้านศุภโชค', 'T'),
('R012', 'บ้านราชพฤกษ์', 'K'),
('R013', 'บ้านราชาวดี', 'K'),
('R014', 'บ้านกวักมร', 'Q2'),
('R015', 'บ้านแก้วมุกดา', 'Q2');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `SAL_ID` int(4) UNSIGNED ZEROFILL NOT NULL,
  `EMP_ID` int(4) UNSIGNED ZEROFILL NOT NULL,
  `SAL_DATE` date DEFAULT NULL,
  `SAL_ROUNDOFSALARY` date NOT NULL,
  `SAL_MONEY` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`SAL_ID`, `EMP_ID`, `SAL_DATE`, `SAL_ROUNDOFSALARY`, `SAL_MONEY`) VALUES
(0001, 0012, '1970-01-01', '2018-03-14', 25),
(0002, 0001, '2012-02-23', '2018-03-14', 50),
(0003, 0016, '1970-01-01', '2018-03-14', 50),
(0004, 0014, '1970-01-01', '2018-03-14', 500);

-- --------------------------------------------------------

--
-- Table structure for table `status_room`
--

CREATE TABLE `status_room` (
  `STR_DATE` date NOT NULL,
  `ROOM_ROOM_ID` varchar(45) NOT NULL,
  `STR_STATUS` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `take_of_product`
--

CREATE TABLE `take_of_product` (
  `TOP_ID` varchar(45) NOT NULL,
  `EMP_ID` int(4) NOT NULL,
  `TOP_DATE` date DEFAULT NULL,
  `TOP_ALLAMOUNT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `typeroom`
--

CREATE TABLE `typeroom` (
  `TYR_ID` varchar(45) NOT NULL,
  `TYP_TYPE` varchar(45) DEFAULT NULL,
  `TYP_PRICEROOM` decimal(9,2) DEFAULT NULL,
  `TYP_DESCRIPTION` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `typeroom`
--

INSERT INTO `typeroom` (`TYR_ID`, `TYP_TYPE`, `TYP_PRICEROOM`, `TYP_DESCRIPTION`) VALUES
('K', 'KingSize', NULL, NULL),
('Q', 'QueenSize', NULL, NULL),
('Q2', 'QueenSize2', NULL, NULL),
('T', 'TwinBed', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type_payment`
--

CREATE TABLE `type_payment` (
  `TYM_ID` varchar(45) NOT NULL,
  `TYM_NAME` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `type_product`
--

CREATE TABLE `type_product` (
  `TYP_ID` varchar(45) NOT NULL,
  `TYP_NAME` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type_product`
--

INSERT INTO `type_product` (`TYP_ID`, `TYP_NAME`) VALUES
('001', 'พัดลม'),
('002', 'ทีวี');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_ID` varchar(45) NOT NULL,
  `userPassword` varchar(45) DEFAULT NULL,
  `userType` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_ID`, `userPassword`, `userType`) VALUES
('admin', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `useservice`
--

CREATE TABLE `useservice` (
  `SER_ID` varchar(45) NOT NULL,
  `CHECKIN_CH_ID` varchar(45) NOT NULL,
  `PRODUCT_PD_ID` varchar(45) NOT NULL,
  `SER_AMOUNT` decimal(9,2) DEFAULT NULL,
  `SER_PRICE` decimal(9,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vender`
--

CREATE TABLE `vender` (
  `V_ID` varchar(45) NOT NULL,
  `VEN_NAME` varchar(45) DEFAULT NULL,
  `V_TEL` varchar(45) DEFAULT NULL,
  `V_EMAIL` varchar(45) DEFAULT NULL,
  `V_ADDRESS` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `working`
--

CREATE TABLE `working` (
  `WOR_ID` int(10) UNSIGNED ZEROFILL NOT NULL,
  `EMP_ID` int(4) UNSIGNED ZEROFILL NOT NULL,
  `WOR_DATEWORK` date NOT NULL,
  `WOR_TIMEWORK` time DEFAULT NULL,
  `WOR_TIMEOUT` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `working`
--

INSERT INTO `working` (`WOR_ID`, `EMP_ID`, `WOR_DATEWORK`, `WOR_TIMEWORK`, `WOR_TIMEOUT`) VALUES
(0000000004, 0012, '1970-01-01', '20:00:00', '21:00:00'),
(0000000005, 0001, '2012-02-23', '05:00:00', '07:00:00'),
(0000000006, 0016, '1970-01-01', '20:00:00', '22:00:00'),
(0000000007, 0014, '1970-01-01', '00:00:20', '20:24:15'),
(0000000009, 0002, '1970-01-01', '01:02:00', '21:00:00'),
(0000000012, 0017, '1970-01-01', '20:25:00', '20:26:15'),
(0000000020, 0018, '1970-01-01', '21:10:30', '22:10:30'),
(0000000022, 0015, '2012-03-15', '21:21:45', '22:21:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`BILL_ID`),
  ADD KEY `fk_BILL_RESERVE1_idx` (`RESERVE_RES_ID`),
  ADD KEY `fk_BILL_TYPE_PAYMENT1_idx` (`TYPE_PAYMENT_TYM_ID`);

--
-- Indexes for table `bill_service`
--
ALTER TABLE `bill_service`
  ADD PRIMARY KEY (`BS_ID`),
  ADD KEY `fk_BILLSERVICE_USESERVICE1_idx` (`USESERVICE_SER_ID`);

--
-- Indexes for table `checkin`
--
ALTER TABLE `checkin`
  ADD PRIMARY KEY (`CH_ID`),
  ADD KEY `fk_CHECKIN_ROOM1_idx` (`ROOM_ROOM_ID`),
  ADD KEY `fk_CHECKIN_EMPLOYEE1_idx` (`EMP_ID`),
  ADD KEY `fk_CHECKIN_LISTRES1_idx` (`LISTRES_LR_ID`);

--
-- Indexes for table `claim`
--
ALTER TABLE `claim`
  ADD PRIMARY KEY (`CLA_ID`),
  ADD KEY `fk_CLAIM_VENDER1_idx` (`VENDER_V_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CUS_ID`);

--
-- Indexes for table `detail_claim`
--
ALTER TABLE `detail_claim`
  ADD PRIMARY KEY (`DCL_ID`),
  ADD KEY `fk_DETAIL_CALM_CALM1_idx` (`CALM_CAL_ID`),
  ADD KEY `fk_DETAIL_CLAIM_LIST_ORDER1_idx` (`LIST_ORDER_LOR_ID`),
  ADD KEY `fk_DETAIL_CLAIM_PRODUCT1_idx` (`PRODUCT_PD_ID`);

--
-- Indexes for table `detail_get`
--
ALTER TABLE `detail_get`
  ADD PRIMARY KEY (`DG_ID`),
  ADD KEY `fk_DETAIL_GET_GET_PRODUCT1_idx` (`GET_PRODUCT_GET_ID`),
  ADD KEY `fk_DETAIL_GET_PRODUCT1_idx` (`PRODUCT_PD_ID`);

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`DOR_ID`),
  ADD KEY `fk_LIST_ORDER_PRODUCT1_idx` (`PRODUCT_PD_ID`),
  ADD KEY `fk_DETAIL_ORDER_LIST_ORDER1_idx` (`LIST_ORDER_LOR_ID`);

--
-- Indexes for table `detail_take_of_product`
--
ALTER TABLE `detail_take_of_product`
  ADD PRIMARY KEY (`LTOP_ID`),
  ADD KEY `fk_LIST_TAKE_OF_PRODUCT_TAKE_OF_PRODUCT1_idx` (`TAKE_OF_PRODUCT_TOP_ID`),
  ADD KEY `fk_LIST_TAKE_OF_PRODUCT_PRODUCT1_idx` (`PRODUCT_PD_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EMP_ID`),
  ADD KEY `fk_EMPLOYEE_RANK1_idx` (`POS_ID`);

--
-- Indexes for table `get_product`
--
ALTER TABLE `get_product`
  ADD PRIMARY KEY (`GET_ID`),
  ADD KEY `fk_GET_PRODUCT_LIST_ORDER1_idx` (`LIST_ORDER_LOR_ID`),
  ADD KEY `fk_GET_PRODUCT_EMPLOYEE1_idx` (`EMPLOYEE_EMP_ID`);

--
-- Indexes for table `leaving`
--
ALTER TABLE `leaving`
  ADD PRIMARY KEY (`LEA_ID`),
  ADD KEY `fk_EMPLOYEE_EMP_ID` (`EMP_ID`);

--
-- Indexes for table `listimage`
--
ALTER TABLE `listimage`
  ADD PRIMARY KEY (`IMAGE_ID`),
  ADD KEY `fk_LISTIMAGE_TYPEROOM1_idx` (`TYPEROOM_TYR_ID`);

--
-- Indexes for table `listres`
--
ALTER TABLE `listres`
  ADD PRIMARY KEY (`LR_ID`),
  ADD KEY `fk_LISTRES_RESERVE1_idx` (`RESERVE_RES_ID`),
  ADD KEY `fk_LISTRES_TYPEROOM1_idx` (`TYPEROOM_TYR_ID`);

--
-- Indexes for table `list_order`
--
ALTER TABLE `list_order`
  ADD PRIMARY KEY (`LOR_ID`),
  ADD KEY `fk_LIST_ORDER_VENDER1_idx` (`VENDER_V_ID`),
  ADD KEY `fk_EMP_ID` (`EMP_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PAY_ID`),
  ADD KEY `fk_PAYMENT_TYPE_PAYMENT1_idx` (`TYPE_PAYMENT_TYM_ID`),
  ADD KEY `fk_PAYMENT_LIST_ORDER1_idx` (`LIST_ORDER_LOR_ID`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`POS_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PD_ID`),
  ADD KEY `fk_PRODUCT_TYPE_PRODUCT1_idx` (`TYP_ID`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`PRO_ID`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`RES_ID`),
  ADD KEY `fk_RESERVE_PROMOTION_idx` (`PROMOTION_PRO_ID`),
  ADD KEY `fk_RESERVE_CUSTOMER1_idx` (`CUSTOMER_CUS_ID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`ROOM_ID`),
  ADD KEY `fk_ROOM_TYPEROOM1_idx` (`TYPEROOM_TYR_ID`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`SAL_ID`),
  ADD KEY `fk_EMPLOYEE_EMP_ID_II` (`EMP_ID`);

--
-- Indexes for table `status_room`
--
ALTER TABLE `status_room`
  ADD PRIMARY KEY (`STR_DATE`,`ROOM_ROOM_ID`),
  ADD KEY `fk_STATUSROOM_ROOM1_idx` (`ROOM_ROOM_ID`);

--
-- Indexes for table `take_of_product`
--
ALTER TABLE `take_of_product`
  ADD PRIMARY KEY (`TOP_ID`);

--
-- Indexes for table `typeroom`
--
ALTER TABLE `typeroom`
  ADD PRIMARY KEY (`TYR_ID`);

--
-- Indexes for table `type_payment`
--
ALTER TABLE `type_payment`
  ADD PRIMARY KEY (`TYM_ID`);

--
-- Indexes for table `type_product`
--
ALTER TABLE `type_product`
  ADD PRIMARY KEY (`TYP_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_ID`);

--
-- Indexes for table `useservice`
--
ALTER TABLE `useservice`
  ADD PRIMARY KEY (`SER_ID`),
  ADD KEY `fk_USESERVICE_PRODUCT1_idx` (`PRODUCT_PD_ID`),
  ADD KEY `fk_USESERVICE_CHECKIN1_idx` (`CHECKIN_CH_ID`);

--
-- Indexes for table `vender`
--
ALTER TABLE `vender`
  ADD PRIMARY KEY (`V_ID`);

--
-- Indexes for table `working`
--
ALTER TABLE `working`
  ADD PRIMARY KEY (`WOR_ID`),
  ADD KEY `fk_EMPLOYEE_EMP_ID_III` (`EMP_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkin`
--
ALTER TABLE `checkin`
  MODIFY `EMP_ID` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EMP_ID` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `get_product`
--
ALTER TABLE `get_product`
  MODIFY `EMPLOYEE_EMP_ID` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `leaving`
--
ALTER TABLE `leaving`
  MODIFY `LEA_ID` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `SAL_ID` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `working`
--
ALTER TABLE `working`
  MODIFY `WOR_ID` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `fk_BILL_RESERVE1` FOREIGN KEY (`RESERVE_RES_ID`) REFERENCES `reserve` (`RES_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_BILL_TYPE_PAYMENT1` FOREIGN KEY (`TYPE_PAYMENT_TYM_ID`) REFERENCES `type_payment` (`TYM_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `bill_service`
--
ALTER TABLE `bill_service`
  ADD CONSTRAINT `fk_BILLSERVICE_USESERVICE1` FOREIGN KEY (`USESERVICE_SER_ID`) REFERENCES `useservice` (`SER_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `checkin`
--
ALTER TABLE `checkin`
  ADD CONSTRAINT `EMP_ID` FOREIGN KEY (`EMP_ID`) REFERENCES `employee` (`EMP_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_CHECKIN_LISTRES1` FOREIGN KEY (`LISTRES_LR_ID`) REFERENCES `listres` (`LR_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CHECKIN_ROOM1` FOREIGN KEY (`ROOM_ROOM_ID`) REFERENCES `room` (`ROOM_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `claim`
--
ALTER TABLE `claim`
  ADD CONSTRAINT `fk_CLAIM_VENDER1` FOREIGN KEY (`VENDER_V_ID`) REFERENCES `vender` (`V_ID`);

--
-- Constraints for table `detail_claim`
--
ALTER TABLE `detail_claim`
  ADD CONSTRAINT `fk_DETAIL_CALM_CALM1` FOREIGN KEY (`CALM_CAL_ID`) REFERENCES `claim` (`CLA_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DETAIL_CLAIM_LIST_ORDER1` FOREIGN KEY (`LIST_ORDER_LOR_ID`) REFERENCES `list_order` (`LOR_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DETAIL_CLAIM_PRODUCT1` FOREIGN KEY (`PRODUCT_PD_ID`) REFERENCES `product` (`PD_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `detail_get`
--
ALTER TABLE `detail_get`
  ADD CONSTRAINT `fk_DETAIL_GET_GET_PRODUCT1` FOREIGN KEY (`GET_PRODUCT_GET_ID`) REFERENCES `get_product` (`GET_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DETAIL_GET_PRODUCT1` FOREIGN KEY (`PRODUCT_PD_ID`) REFERENCES `product` (`PD_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD CONSTRAINT `fk_DETAIL_ORDER_LIST_ORDER1` FOREIGN KEY (`LIST_ORDER_LOR_ID`) REFERENCES `list_order` (`LOR_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_LIST_ORDER_PRODUCT1` FOREIGN KEY (`PRODUCT_PD_ID`) REFERENCES `product` (`PD_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `detail_take_of_product`
--
ALTER TABLE `detail_take_of_product`
  ADD CONSTRAINT `fk_LIST_TAKE_OF_PRODUCT_PRODUCT1` FOREIGN KEY (`PRODUCT_PD_ID`) REFERENCES `product` (`PD_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_LIST_TAKE_OF_PRODUCT_TAKE_OF_PRODUCT1` FOREIGN KEY (`TAKE_OF_PRODUCT_TOP_ID`) REFERENCES `take_of_product` (`TOP_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `fk_EMPLOYEE_RANK1` FOREIGN KEY (`POS_ID`) REFERENCES `position` (`POS_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `get_product`
--
ALTER TABLE `get_product`
  ADD CONSTRAINT `EMPLOYEE_EMP_ID` FOREIGN KEY (`EMPLOYEE_EMP_ID`) REFERENCES `employee` (`EMP_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_GET_PRODUCT_LIST_ORDER1` FOREIGN KEY (`LIST_ORDER_LOR_ID`) REFERENCES `list_order` (`LOR_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `leaving`
--
ALTER TABLE `leaving`
  ADD CONSTRAINT `fk_EMPLOYEE_EMP_ID` FOREIGN KEY (`EMP_ID`) REFERENCES `employee` (`EMP_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `listimage`
--
ALTER TABLE `listimage`
  ADD CONSTRAINT `fk_LISTIMAGE_TYPEROOM1` FOREIGN KEY (`TYPEROOM_TYR_ID`) REFERENCES `typeroom` (`TYR_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `listres`
--
ALTER TABLE `listres`
  ADD CONSTRAINT `fk_LISTRES_RESERVE1` FOREIGN KEY (`RESERVE_RES_ID`) REFERENCES `reserve` (`RES_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_LISTRES_TYPEROOM1` FOREIGN KEY (`TYPEROOM_TYR_ID`) REFERENCES `typeroom` (`TYR_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `list_order`
--
ALTER TABLE `list_order`
  ADD CONSTRAINT `fk_EMP_ID` FOREIGN KEY (`EMP_ID`) REFERENCES `employee` (`EMP_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_LIST_ORDER_VENDER1` FOREIGN KEY (`VENDER_V_ID`) REFERENCES `vender` (`V_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_PAYMENT_LIST_ORDER1` FOREIGN KEY (`LIST_ORDER_LOR_ID`) REFERENCES `list_order` (`LOR_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PAYMENT_TYPE_PAYMENT1` FOREIGN KEY (`TYPE_PAYMENT_TYM_ID`) REFERENCES `type_payment` (`TYM_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_PRODUCT_TYPE_PRODUCT1` FOREIGN KEY (`TYP_ID`) REFERENCES `type_product` (`TYP_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reserve`
--
ALTER TABLE `reserve`
  ADD CONSTRAINT `fk_RESERVE_CUSTOMER1` FOREIGN KEY (`CUSTOMER_CUS_ID`) REFERENCES `customer` (`CUS_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_RESERVE_PROMOTION` FOREIGN KEY (`PROMOTION_PRO_ID`) REFERENCES `promotion` (`PRO_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `fk_ROOM_TYPEROOM1` FOREIGN KEY (`TYPEROOM_TYR_ID`) REFERENCES `typeroom` (`TYR_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `fk_EMPLOYEE_EMP_ID_II` FOREIGN KEY (`EMP_ID`) REFERENCES `employee` (`EMP_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `status_room`
--
ALTER TABLE `status_room`
  ADD CONSTRAINT `fk_STATUSROOM_ROOM1` FOREIGN KEY (`ROOM_ROOM_ID`) REFERENCES `room` (`ROOM_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `useservice`
--
ALTER TABLE `useservice`
  ADD CONSTRAINT `fk_USESERVICE_CHECKIN1` FOREIGN KEY (`CHECKIN_CH_ID`) REFERENCES `checkin` (`CH_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_USESERVICE_PRODUCT1` FOREIGN KEY (`PRODUCT_PD_ID`) REFERENCES `product` (`PD_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `working`
--
ALTER TABLE `working`
  ADD CONSTRAINT `fk_EMPLOYEE_EMP_ID_III` FOREIGN KEY (`EMP_ID`) REFERENCES `employee` (`EMP_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
