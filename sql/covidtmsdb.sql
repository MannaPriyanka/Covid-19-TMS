-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 03:38 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covidtmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `corona_resource`
--

CREATE TABLE `corona_resource` (
  `id` int(11) NOT NULL,
  `req_no` int(11) NOT NULL,
  `res_type` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `serv_desc` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `sms_check` tinyint(1) NOT NULL,
  `alt_phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `google_location` varchar(200) NOT NULL,
  `verified` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `corona_resource`
--

INSERT INTO `corona_resource` (`id`, `req_no`, `res_type`, `state`, `city`, `title`, `serv_desc`, `phone`, `sms_check`, `alt_phone`, `email`, `google_location`, `verified`) VALUES
(1, 0, 'MEDICINES', '$state', '$city', '$title', '$serv_desc', '8320547900', 0, '$alt_phone', '$email', '$google_location', 1),
(2, 934609073, 'MEDICINES', 'Gujarat', ' Ahmedabad ', 'insights', 'exdfcghjnkm', '8320547900', 1, '+918320547900', 'sardarravu@gmail.com', 'sdxfcgvhjnm', 1),
(3, 294380702, 'FOOD SERVICES', 'Arunachal Pradesh', 'Pasighat', 'bhojnalay', 'wdasfghuk', '9265708188', 0, '8320574900', 'axay.sardar@gmail.com', 'sdxfcgvhjnm', 1),
(4, 551266625, 'AFTER-DEATH SERVICES', 'Kerala', 'Kunnamkulam', 'service', 'service', '8320574900', 1, '8320574900', 'axay.sardar@gmail.com', 'sdxfcgvhjnm', 1),
(5, 454529978, 'OXYGEN', 'Gujarat', 'Nadiad', 'service', 'trcygvhjb', '8320547900', 1, '+917359809861', 'sardarravu@gmail.com', 'sdxfcgvhjnm', 1),
(6, 604059512, 'OXYGEN', 'Gujarat', 'Bhavnagar', 'OXYGEN CYLINDER', 'OXYGEN CYLINDER PROVIDED FOR FREE', '1234567891', 1, '9876554321', 'oxy@gmail.com', 'http://127.0.0.1/my/covid-tms/covid-tms/add-resource.php', 1),
(7, 781496373, 'OXYGEN', 'Bihar', 'Barh', 'oxy provider', 'provides oxygen cyclinder home delivery', '1234567890', 1, '0987654321', 'op@gmail.com', 'http://127.0.0.1/my/covid-tms/covid-tms/add-resource.php#about', 1),
(8, 995518260, 'HOSPITAL/AMBULANCE', 'Arunachal Pradesh', 'Naharlagun', 'AVD HOSPITAL', 'TREATMENT FOR COVID ', '8967452310', 1, '2143658709', 'avd@gmail.com', 'http://127.0.0.1/my/covid-tms/covid-tms/add-resource.php', 1),
(9, 608465628, 'HOSPITAL/AMBULANCE', 'Himachal Pradesh', 'Shimla*', 'Ambulance', 'get ambulance service within 15 min', '8780831052', 1, '0987654321', 'amb@gmail.com', 'http://127.0.0.1/my/covid-tms/covid-tms/add-resource.php#about', 1),
(10, 461604447, 'PLASMA', 'Dadra and Nagar Haveli', 'Silvassa*', 'Plasma ', 'Get plasma and blood of any blood group', '8780831052', 1, '9876554321', 'plsma@gmail.com', 'http://127.0.0.1/my/covid-tms/covid-tms/add-resource.php#about', 1),
(11, 840461618, 'BLOOD DONERS', 'Delhi', 'New', 'BLOOD BANK', 'Get or donote blood to us .', '8780831052', 1, '0987654321', 'bb@gmil.com', 'http://127.0.0.1/my/covid-tms/covid-tms/add-resource.php#about', 1),
(12, 155883762, 'OTHER SERVICES', 'Arunachal Pradesh', 'Pasighat', 'Private nursing', 'call us for private nursing of co', '8780831052', 1, '9876554321', 'pp@gmail.com', 'http://127.0.0.1/my/covid-tms/covid-tms/add-resource.php#about', 1);

-- --------------------------------------------------------

--
-- Table structure for table `patient_record`
--

CREATE TABLE `patient_record` (
  `id` int(255) NOT NULL,
  `reg_no` varchar(200) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `patient_id` varchar(255) NOT NULL,
  `patient_phone` varchar(15) NOT NULL,
  `sms` tinyint(1) NOT NULL,
  `staff_id` varchar(200) NOT NULL,
  `prescription_file` varchar(255) NOT NULL,
  `extra_note` varchar(255) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_record`
--

INSERT INTO `patient_record` (`id`, `reg_no`, `patient_name`, `patient_id`, `patient_phone`, `sms`, `staff_id`, `prescription_file`, `extra_note`, `reg_date`) VALUES
(1, '540228989', 'ravina', '123123', '07359809861', 1, '741852', '', 'werxtcvghbjk', '2021-06-11 11:16:32'),
(2, '899902097', 'akshay', '123123', '4964684961', 0, '87645312', '', 'hkjnkm', '2021-06-12 12:18:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(11) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `AdminuserName` varchar(20) NOT NULL,
  `MobileNumber` int(10) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `AdminuserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(2, 'Admin', 'admin', 1234567890, 'admin@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2021-04-19 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblhospital_user`
--

CREATE TABLE `tblhospital_user` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `hospital_name` varchar(255) NOT NULL,
  `hospital_id` varchar(255) NOT NULL,
  `contactno` varchar(11) DEFAULT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblhospital_user`
--

INSERT INTO `tblhospital_user` (`id`, `fname`, `lname`, `email`, `password`, `hospital_name`, `hospital_id`, `contactno`, `posting_date`) VALUES
(9, 'Anuj', 'Kumar', 'demouser@gmail.com', 'Test@123', '', '', '21222222', '2020-04-15 18:30:00'),
(11, 'Anuj', 'Kumar', 'phpgurukulofficial@gmail.com', 'Test@123', '', '', '1234567890', '2020-04-15 18:30:00'),
(13, 'RAVINA', 'SARDAR', 'ravu@gmail.com', 'ravu', '', '', '07359809861', '2020-12-31 07:30:23'),
(14, 'PRIYANKA', 'MANNA', 'piyu@gmail.com', '123456', '', '', '8320574900', '2021-05-24 03:15:49'),
(15, 'RAVINA', 'SARDAR', 'sardarravina@gmail.com', '1234', 'lg college', '12346', '07359809861', '2021-06-11 09:06:49');

-- --------------------------------------------------------

--
-- Table structure for table `tblpatients`
--

CREATE TABLE `tblpatients` (
  `id` int(11) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(12) DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `GovtIssuedId` varchar(150) DEFAULT NULL,
  `GovtIssuedIdNo` varchar(150) DEFAULT NULL,
  `FullAddress` varchar(255) DEFAULT NULL,
  `State` varchar(200) DEFAULT NULL,
  `RegistrationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpatients`
--

INSERT INTO `tblpatients` (`id`, `FullName`, `MobileNumber`, `DateOfBirth`, `GovtIssuedId`, `GovtIssuedIdNo`, `FullAddress`, `State`, `RegistrationDate`) VALUES
(1, 'Anuj kumar', 1234567890, '1999-02-01', 'Driving License', '342545445345', 'A83748 New Delhi India', 'Delhi', '2021-04-27 17:31:22'),
(2, 'Sarita', 6547893210, '1990-05-09', 'Pancard', 'HHHGHGH8888jh', 'H 826273 Noida', 'Uttar Pradesh', '2021-04-27 18:04:57'),
(4, 'Garima Singh', 4598520125, '2005-01-08', 'Pancard', 'DDDKJKJ454545H', 'A-1234 Patna', 'Bihar', '2021-05-08 05:49:44'),
(5, 'Amit Singh', 2536987410, '2007-06-01', 'PANCARD', 'HJGGHG76767HGGH', 'H 37334 New Delhi', 'Delhi', '2021-05-08 09:25:50'),
(6, 'Rahul Yadav', 1234567899, '2003-06-05', 'Driving License', '5435345', 'ABC 123 XYZ Street Noida', 'Uttar Pradesh', '2021-05-08 09:29:22'),
(7, 'RAVINA SUDHAKARBHAI SARDAR', 8320547900, '2001-08-23', 'aadhar', '123456789123', '29/163 bombay housing hathikhai police line gomtip', 'GUJARAT', '2021-05-22 07:24:18'),
(8, '', 0, '0000-00-00', '', '', '', 'Gujarat', '2021-06-03 06:52:06'),
(9, 'AXAY SARDAR', 7383863790, '2021-06-16', 'AADHAR', '602620530711', '29/163 bombay housing hathikhai police line gomtipur', 'Gujarat', '2021-06-13 06:50:08'),
(10, 'RAVINA SUDHAKARBHAI SARDAR', 7359809861, '2021-06-18', 'AADHAR', '123456789123', '29/163 bombay housing hathikhai police line gomtip', 'GUJARAT', '2021-06-13 07:43:34'),
(11, 'RAVINA SUDHAKARBHAI SARDAR', 7359809861, '2021-06-18', 'AADHAR', '123456789123', '29/163 bombay housing hathikhai police line gomtip', 'GUJARAT', '2021-06-13 07:45:59'),
(12, 'RAVINA SUDHAKARBHAI SARDAR', 7659809861, '2021-06-09', 'aadhar', '602620530711', '29/163 bombay housing hathikhai police line gomtip', 'GUJARAT', '2021-06-13 07:46:33'),
(13, 'RAVINA SUDHAKARBHAI SARDAR', 7265056317, '2021-06-26', 'aadhar', '123456789123', '29/163 bombay housing hathikhai police line gomtip', 'GUJARAT', '2021-06-13 07:48:44');

-- --------------------------------------------------------

--
-- Table structure for table `tblphlebotomist`
--

CREATE TABLE `tblphlebotomist` (
  `id` int(11) NOT NULL,
  `EmpID` varchar(100) DEFAULT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(12) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblphlebotomist`
--

INSERT INTO `tblphlebotomist` (`id`, `EmpID`, `FullName`, `MobileNumber`, `RegDate`) VALUES
(3, '12587493', 'Amit Singh', 9876543212, '2021-05-03 04:51:44'),
(4, '105202365', 'Rahul', 8529631470, '2021-05-03 04:52:06'),
(5, '10802364', 'Sanjeev Tomar', 1234567890, '2021-05-08 09:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `tblreporttracking`
--

CREATE TABLE `tblreporttracking` (
  `id` int(11) NOT NULL,
  `OrderNumber` bigint(40) DEFAULT NULL,
  `Remark` varchar(255) DEFAULT NULL,
  `Status` varchar(120) DEFAULT NULL,
  `PostingTime` timestamp NULL DEFAULT current_timestamp(),
  `RemarkBy` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblreporttracking`
--

INSERT INTO `tblreporttracking` (`id`, `OrderNumber`, `Remark`, `Status`, `PostingTime`, `RemarkBy`) VALUES
(1, 450040675, 'The Phlebotomist is on the way for collection.', 'On the Way for Collection', '2021-05-06 04:36:22', 2),
(6, 450040675, 'Sample collection.', 'Sample Collected', '2021-05-06 19:15:25', 2),
(7, 450040675, 'Sample sent to the lab.', 'Sent to Lab', '2021-05-06 19:15:48', 2),
(9, 450040675, 'Report uploaded.', 'Delivered', '2021-05-06 20:01:48', 2),
(10, 617325549, 'The phlebotomist is on the way to sample collection.', 'On the Way for Collection', '2021-05-07 04:44:38', 2),
(11, 617325549, 'Sample collected successfully.', 'Sample Collected', '2021-05-07 04:46:46', 2),
(12, 617325549, 'Sample sent to the lab.', 'Sent to Lab', '2021-05-07 04:51:25', 2),
(13, 617325549, 'Report uploaded.', 'Delivered', '2021-05-07 04:57:20', 2),
(14, 250482553, 'On the way for sample collection.', 'On the Way for Collection', '2021-05-08 09:31:42', 2),
(15, 250482553, 'Sample collected successfully', 'Sample Collected', '2021-05-08 09:32:06', 2),
(16, 250482553, 'Sample sent to lab', 'Sent to Lab', '2021-05-08 09:32:26', 2),
(17, 250482553, 'Report Uploaded', 'Delivered', '2021-05-08 09:32:51', 2),
(18, 740138296, 'sdfgn', 'On the Way for Collection', '2021-05-22 07:33:56', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbltestrecord`
--

CREATE TABLE `tbltestrecord` (
  `id` int(11) NOT NULL,
  `OrderNumber` bigint(14) DEFAULT NULL,
  `PatientMobileNumber` bigint(14) DEFAULT NULL,
  `TestType` varchar(100) DEFAULT NULL,
  `TestTimeSlot` varchar(120) DEFAULT NULL,
  `ReportStatus` varchar(100) DEFAULT NULL,
  `FinalReport` varchar(150) DEFAULT NULL,
  `ReportUploadTime` varchar(200) DEFAULT NULL,
  `RegistrationDate` timestamp NULL DEFAULT current_timestamp(),
  `AssignedtoEmpId` varchar(150) DEFAULT NULL,
  `AssigntoName` varchar(180) DEFAULT NULL,
  `AssignedTime` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltestrecord`
--

INSERT INTO `tbltestrecord` (`id`, `OrderNumber`, `PatientMobileNumber`, `TestType`, `TestTimeSlot`, `ReportStatus`, `FinalReport`, `ReportUploadTime`, `RegistrationDate`, `AssignedtoEmpId`, `AssigntoName`, `AssignedTime`) VALUES
(1, 450040675, 1234567890, 'Antigen', '2021-05-01T04:05', 'Delivered', '2c86e2aa7eb4cb4db70379e28fab9b521620331308.pdf', '07-05-2021 01:31:48 AM', '2021-04-27 17:31:23', '12587493', 'Amit Singh', '06-05-2021 10:05:22 AM'),
(2, 617325549, 6547893210, 'RT-PCR', '2021-05-01T05:10', 'Delivered', '2c86e2aa7eb4cb4db70379e28fab9b521620363440.pdf', '07-05-2021 10:27:20 AM', '2021-04-27 18:04:58', '105202365', 'Rahul', '07-05-2021 10:13:41 AM'),
(4, 740138296, 1234567890, 'RT-PCR', '2021-05-05T14:40', 'On the Way for Collection', NULL, NULL, '2021-04-27 19:10:30', '105202365', 'Rahul', '07-05-2021 03:52:05 PM'),
(5, 716060226, 4598520125, 'CB-NAAT', '2021-05-15T14:22', 'Assigned', NULL, NULL, '2021-05-08 05:49:46', '12587493', 'Amit Singh', '12-06-2021 08:40:52 PM'),
(6, 599452326, 2536987410, 'CB-NAAT', '2021-05-20T19:00', NULL, NULL, NULL, '2021-05-08 09:25:50', NULL, NULL, NULL),
(7, 250482553, 1234567899, 'Antigen', '2021-05-11T15:00', 'Delivered', '2c86e2aa7eb4cb4db70379e28fab9b521620466371.pdf', '08-05-2021 03:02:51 PM', '2021-05-08 09:29:22', '12587493', 'Amit Singh', '08-05-2021 03:00:47 PM'),
(9, 0, 0, '', '', NULL, NULL, NULL, '2021-06-03 06:52:06', NULL, NULL, NULL),
(12, 270610141, 7359809861, 'RT-PCR', '2021-06-20T13:13', NULL, NULL, NULL, '2021-06-13 07:45:59', NULL, NULL, NULL),
(13, 951190591, 7659809861, 'RT-PCR', '2021-07-13T13:16', NULL, NULL, NULL, '2021-06-13 07:46:33', NULL, NULL, NULL),
(14, 724524584, 7265056317, 'RT-PCR', '2021-07-01T13:18', NULL, NULL, NULL, '2021-06-13 07:48:44', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(11) NOT NULL,
  `userName` varchar(120) DEFAULT NULL,
  `useruserName` varchar(20) NOT NULL,
  `MobileNumber` int(10) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `userRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `userName`, `useruserName`, `MobileNumber`, `Email`, `Password`, `userRegdate`) VALUES
(1, 'ravina', 'ravina sardar', 4, 'sardarravu@gmail.com', '12345', '2021-05-22 06:55:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `corona_resource`
--
ALTER TABLE `corona_resource`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_record`
--
ALTER TABLE `patient_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblhospital_user`
--
ALTER TABLE `tblhospital_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpatients`
--
ALTER TABLE `tblpatients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblphlebotomist`
--
ALTER TABLE `tblphlebotomist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblreporttracking`
--
ALTER TABLE `tblreporttracking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltestrecord`
--
ALTER TABLE `tbltestrecord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `corona_resource`
--
ALTER TABLE `corona_resource`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `patient_record`
--
ALTER TABLE `patient_record`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblhospital_user`
--
ALTER TABLE `tblhospital_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblpatients`
--
ALTER TABLE `tblpatients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblphlebotomist`
--
ALTER TABLE `tblphlebotomist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblreporttracking`
--
ALTER TABLE `tblreporttracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbltestrecord`
--
ALTER TABLE `tbltestrecord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
