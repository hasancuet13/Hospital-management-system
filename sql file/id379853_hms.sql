-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 16, 2017 at 01:47 PM
-- Server version: 10.1.20-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id379853_hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_test`
--

CREATE TABLE `about_test` (
  `test_id` int(10) NOT NULL,
  `test_name` varchar(20) NOT NULL,
  `test_bill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_test`
--

INSERT INTO `about_test` (`test_id`, `test_name`, `test_bill`) VALUES
(10110, 'Bloode Test', 120),
(10111, 'X-ray', 560),
(10112, 'Ultrasonography', 1050),
(10113, 'CT Scan', 1520),
(10114, 'Thyroid Scan', 640),
(10115, 'Urin Test', 220),
(10116, 'ECG', 2050),
(10117, 'MRI', 2250),
(10118, 'Eye Test', 300);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(20) NOT NULL,
  `department_name` varchar(20) DEFAULT NULL,
  `symptom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `symptom`) VALUES
(1, 'Medicine', 'Allergies'),
(5, 'Medicine', 'Gastric'),
(6, 'Medicine', 'Diarrhoea'),
(7, NULL, 'Anxiety'),
(8, 'Orthopedic', 'Arthritis'),
(9, 'Medicine', 'Asthma'),
(10, 'Medicine', 'Pneumonia'),
(11, 'Medicine', 'Benign Prostatic Hypertrophy'),
(12, 'Neurology', 'Blood Clots'),
(13, 'Cancer', 'Cancer-Type'),
(14, 'Medicine', 'Fever'),
(15, 'Surgery', 'Cerebrovascular Accident'),
(16, 'Cardiology', 'Cronary Artery Disease'),
(17, NULL, 'COPD(Emphysema)'),
(18, 'Psychiatric', 'Depression'),
(19, 'Diabatology', 'Diabetes'),
(20, 'Medicine', 'Gallbladder Disease'),
(21, 'Eye', 'Eye disorder'),
(22, 'Medicine', 'Hepatitis B'),
(23, 'Cardiology', 'Hypertension'),
(24, 'ENT', 'Ear,Nose,Throad'),
(25, 'Medicine', 'Liver Disease'),
(26, 'Neurology', 'Migraine Headaches'),
(27, 'Cardiology', 'Myocardial Infarction'),
(28, 'Orthopedic', 'Osteoarthritis'),
(29, NULL, 'Peptic Ulcer Disease'),
(30, NULL, 'Renal Disease'),
(31, NULL, 'Seizure Disorder'),
(32, 'Neurology', 'Thyroid Disease'),
(33, NULL, 'Renal Disease'),
(34, NULL, 'Seizure Disorder'),
(35, NULL, 'Renal Disease'),
(36, 'Surgery', 'Seizure Disorder');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_info`
--

CREATE TABLE `doctor_info` (
  `Doctor_Name` varchar(30) NOT NULL,
  `Doctor_Id` int(10) NOT NULL,
  `Doctor_designation` varchar(50) NOT NULL,
  `Qualification` varchar(100) NOT NULL,
  `Specialist` varchar(50) NOT NULL,
  `Room_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_info`
--

INSERT INTO `doctor_info` (`Doctor_Name`, `Doctor_Id`, `Doctor_designation`, `Qualification`, `Specialist`, `Room_no`) VALUES
('Dr.Omar Faruque Yusuf', 10011, 'Professor of Surgery', 'MBBS, FCPS, FRCS', 'Urologists', '100'),
('Dr. Abdus Salek Mollah', 10012, 'Head of Endocrynology dept', 'MBBS', 'Diabetis', '100'),
('Dr. Md. Iftikher Hossain Khan', 10013, 'Professor', 'MBBS, M.D (E.M)', 'Diabetis', '100'),
('Dr. Nil Kantha Bhatachharja', 10014, 'Professor & Head of ENT', 'MBBS, FCPS', 'ENT', '100'),
('Dr. Abdul Kaiyum', 10015, 'Surgeon', 'MBBS,DLO,FCPS', 'ENT', '100'),
('Dr. Fazle Elahee Mahmood', 10016, 'Associate Professor', 'MBBS, MS, Ph.D. (ENT)', 'ENT', '100'),
('Dr. Kamol Krishna Pramanik', 10017, 'Surgeon', 'MBBS, FCPS (ENT)', 'ENT', '100'),
('Dr. S. M. Tariq', 10018, 'Vice-Principal, BGC Trust Medical College', 'MBBS, DO (DU), MS (London)', 'Eye', '100'),
('DR. CAPT. (RTD.) OSMAN SHAHEED', 10019, 'Captain(RTD.)', 'MBBS, MCPS', 'Eye', '100'),
('DR. QUAMRUL ALAM', 10020, 'Consultant', 'MBBS, MCPS (OPHTHALMOLOGY)', 'Eye', '100'),
('DR. S.K. ROY', 10021, 'Consultant', 'MBBS', 'Eye', '100'),
('Dr. Khondker A K Azad', 10022, 'Associate Professor of Surgery', 'MBBS, FCPS, FRCS (EDIN)', 'Surgery(Laparoscopic and Colorectal)', '100'),
('Dr. Md. Sanaullah Shelly', 10023, 'Senior Consultant Surgery', 'MBBS, FCPS (Surgery)', 'Surgery', '100'),
('Dr. Md Zillur Rahman', 10024, 'Professor & Head of Neurosurgery', 'MBBS, FCPS, MS (Neurosurgery)', 'Surgery(Neuro)', '100'),
('Dr. Md. Hasanuzzaman', 10025, 'Associate Professor of Neuro-Medicine', 'MBBS, FCPS (Medicine), MD (Neurology)', 'Neurology', '100'),
('Dr. Md. Ridwanur Rahman', 10026, 'Professor of Medicine', 'MBBS, FCPS (Internal Medicine)', 'Medicine', '100'),
('Dr.Khaled', 10027, 'Associate Professor', 'B.D.S(D.D.C)', 'Dentists', '100'),
('Dr.Omar Faruque Yusuf', 10029, 'Professor of Surgery', 'MBBS, FCPS, FRCS', 'Urologists', '100');

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `age` int(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`fname`, `lname`, `username`, `password`, `email`, `mobile`, `age`, `gender`, `bday`) VALUES
('ismail', 'hossain', 'icpc_preli_2016_dhaka312', '123456', 'smilemukul60@gmail.comm', 1830278221, 0, 'male', '2016-12-16'),
('afdfasd', 'afsd', 'dsfsadf', 'aaaaaa', 'ismail.mukul@yahoo.co', 54545445, 0, 'female', '2016-12-14'),
('Mohammad', 'Hasan', 'Mohammad_Hasan', 'hasan1245', 'hasancse.cuet13@gmail.com', 1787604848, 21, 'Male', '1996-01-08'),
('ismail', 'hossain', 'icpc_preli_2016_dhaka31', 'mmmmmm', 'ismailhossain188@gmail.com', 1521484475, 0, 'male', '2016-12-29'),
('Ismail', 'Hossain', 'ISMAIL_HOSSAIN', 'mukul015', 'ismail.mukul@yahoo.com', 1830278221, 22, 'Male', '1995-11-14'),
('Omar', 'Sharif', 'Omar_sharif', 'sharif123', 'omar_sharif@gmail.com', 1687069554, 0, 'male', '1996-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `manage_bill`
--

CREATE TABLE `manage_bill` (
  `Patient_id` int(10) NOT NULL,
  `p_payment` int(10) NOT NULL DEFAULT '0',
  `test_name` varchar(20) NOT NULL,
  `a_payment` int(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_bill`
--

INSERT INTO `manage_bill` (`Patient_id`, `p_payment`, `test_name`, `a_payment`) VALUES
(11111, 100, 'Blood Test', 50),
(11116, 100, 'Eye Test', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `file_id` int(10) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_type` varchar(50) NOT NULL,
  `file_size` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`file_id`, `file_name`, `file_type`, `file_size`) VALUES
(3, '28496-cuet.png', 'image/png', 343),
(4, '84172-cuet.png', 'image/png', 343),
(5, '78133-icpc-dhaka-2016.pdf', 'application/pdf', 1067),
(6, '54697-slide10.jpg', 'image/jpeg', 297),
(7, '64745-15392882_1339166539460756_7533630051658611345_o.jpg', 'image/jpeg', 254),
(8, '59576-quiz.pdf', 'application/pdf', 341),
(9, '76628-sql.ppt', 'application/vnd.ms-powerpoint', 876),
(10, '75326-er.ppt', 'application/vnd.ms-powerpoint', 111);

-- --------------------------------------------------------

--
-- Table structure for table `patient_info`
--

CREATE TABLE `patient_info` (
  `Patient_id` int(10) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `userid` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `district` varchar(20) DEFAULT NULL,
  `division` varchar(20) DEFAULT NULL,
  `zipcode` int(10) DEFAULT NULL,
  `day` varchar(10) DEFAULT NULL,
  `month` varchar(10) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `cellphone` varchar(20) DEFAULT NULL,
  `homephone` varchar(20) DEFAULT NULL,
  `workphone` varchar(20) DEFAULT NULL,
  `contactmethod` varchar(30) DEFAULT NULL,
  `nid` varchar(14) DEFAULT NULL,
  `maritalstatus` varchar(20) DEFAULT NULL,
  `preferredpharmacy` varchar(30) DEFAULT NULL,
  `preferredpharmacyphone` varchar(30) DEFAULT NULL,
  `pharmacyaddress` varchar(100) DEFAULT NULL,
  `employment` varchar(10) DEFAULT NULL,
  `symptom` varchar(30) DEFAULT NULL,
  `department_name` varchar(20) NOT NULL,
  `otherhistory` varchar(60) DEFAULT NULL,
  `bonefractures` varchar(10) DEFAULT NULL,
  `exerciseactivity` varchar(30) DEFAULT NULL,
  `exercisedays` varchar(20) DEFAULT NULL,
  `tobaccouse` varchar(20) DEFAULT NULL,
  `alcoholuse` varchar(20) DEFAULT NULL,
  `caffeineuse` varchar(20) DEFAULT NULL,
  `prescriptionmedication` varchar(20) DEFAULT NULL,
  `allergies` varchar(20) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_info`
--

INSERT INTO `patient_info` (`Patient_id`, `fname`, `lname`, `userid`, `password`, `address`, `district`, `division`, `zipcode`, `day`, `month`, `year`, `age`, `email`, `cellphone`, `homephone`, `workphone`, `contactmethod`, `nid`, `maritalstatus`, `preferredpharmacy`, `preferredpharmacyphone`, `pharmacyaddress`, `employment`, `symptom`, `department_name`, `otherhistory`, `bonefractures`, `exerciseactivity`, `exercisedays`, `tobaccouse`, `alcoholuse`, `caffeineuse`, `prescriptionmedication`, `allergies`, `time`) VALUES
(11111, 'ismail', 'hossain', 'ISMAIL_HOSSAIN', NULL, 'Room-B109,Bangabandhu hall,CUET.', 'Noakhali', 'Chittagong', 54, '14', 'Nov', '2011', 20, 'ismailhossain188@gmail.com', '01830278221', '01727649785', '01521484475', 'Mail', '13154656476131', 'Single', 'CMC', '01521484475', 'Chittagong', 'Unemployed', 'Fever', 'Medicine', '', 'No', 'Moderate', '2', 'No', 'No', 'No', 'I do not take any me', 'No', '2016-12-05 19:02:19'),
(11112, 'Masudur', 'Rahman', 'Masudur_rahman', NULL, 'Madaripur', 'Madaripu', 'Dhaka', 25, '02', 'Jul', '2011', 25, 'masud_july02@gmail.com', '01830278221', '01521484475', '', 'Mail', '13544454545254', 'Single', 'CMC', '01521484475', 'Chittagong', 'Employed', 'Ear,Nose,Throad', 'ENT', '', 'No', 'Moderate', '2', 'No', 'No', 'No', 'Yes, I am.', 'No', '2016-12-06 10:02:05'),
(11113, 'omar', 'sharif', 'Omar_sharif', NULL, 'Chandpur', 'Chandpur', 'Chittagong', NULL, '21', 'Jan', '1995', 21, 'omar_sharif@gmail.com', '01652154787', '01521484475', NULL, 'Mail', '1995012547825', 'Married', 'CMC', '54543', 'Chittagong', 'Employed', 'Depression', 'Psychiatric', NULL, 'No', 'Moderate', '1', 'No', 'No', 'No', 'I do not take any me', 'No', '2016-12-07 09:49:23'),
(11114, 'Billal', 'Hossain', 'b1lla1', NULL, 'comilla', 'Comilla', 'Chittagong', NULL, '06', 'Sep', '1995', 23, 'billalhossain@gmail.com', '015879422', '0172234888', NULL, 'Mail', '1325785144254', 'Single', 'DMC', '0257845585', 'Dhaka', 'Employed', 'Allergies', 'Medicine', NULL, 'No', 'Moderate', '1', 'No', 'No', 'No', 'I do not take any me', 'Yes', '2016-12-08 08:49:55'),
(11115, 'Khorshed', 'Alam', 'K_alam', NULL, 'comilla', 'Comilla', 'Chittagong', NULL, '11', 'Feb', '1994', 20, 'khorshedalam03@gmail.com', '01521486549', '01521486549', NULL, 'Cell Phone', '19958025487450', 'Single', 'comilla drug house', '029874515', 'comilla', 'Employed', 'Ear,Nose,Throad', 'ENT', NULL, 'No', '', '', 'No', 'Former User', 'No', 'I do not take any me', 'No', '2016-12-10 09:13:55'),
(11116, 'Nasim', 'Ahmed', 'nasim_ahmed', NULL, 'Bogra', 'Bogra', 'Dhaka', NULL, '10', 'Nov', '1993', 21, 'Nasim_Ahmed@gmail.com', '01796759192', '01796759192', NULL, 'Cell Phone', '1997112547836', 'Single', 'Bogra  Drug House', '01830278221', 'Bogra', 'Employed', 'Eye disorder', 'Eye', NULL, 'No', 'Moderate', '3', 'No', 'Former User', 'No', 'Yes, I am.', 'No', '2016-12-12 09:21:22');

-- --------------------------------------------------------

--
-- Table structure for table `patient_list`
--

CREATE TABLE `patient_list` (
  `Patient_id` int(10) NOT NULL,
  `Serial_no` int(10) NOT NULL,
  `Doctor_name` varchar(30) NOT NULL,
  `Meet_date` varchar(20) NOT NULL DEFAULT '00-00-0000',
  `Meet_time` varchar(6) NOT NULL DEFAULT '00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_list`
--

INSERT INTO `patient_list` (`Patient_id`, `Serial_no`, `Doctor_name`, `Meet_date`, `Meet_time`) VALUES
(11111, 0, 'Dr. Md. Ridwanur Rahman', '00-00-0000', '00:00'),
(11112, 0, 'Dr. Nil Kantha Bhatachharja', '00-00-0000', '00:00'),
(11114, 0, 'Dr. Md. Ridwanur Rahman', '00-00-0000', '00:00'),
(11115, 0, 'Dr. Nil Kantha Bhatachharja', '00-00-0000', '00:00'),
(11116, 0, 'Dr. S. M. Tariq', '00-00-0000', '00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_test`
--
ALTER TABLE `about_test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `doctor_info`
--
ALTER TABLE `doctor_info`
  ADD PRIMARY KEY (`Doctor_Id`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`password`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `manage_bill`
--
ALTER TABLE `manage_bill`
  ADD PRIMARY KEY (`Patient_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `patient_info`
--
ALTER TABLE `patient_info`
  ADD UNIQUE KEY `userid` (`userid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nid` (`nid`),
  ADD KEY `00000` (`Patient_id`);

--
-- Indexes for table `patient_list`
--
ALTER TABLE `patient_list`
  ADD PRIMARY KEY (`Patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_test`
--
ALTER TABLE `about_test`
  MODIFY `test_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10119;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `doctor_info`
--
ALTER TABLE `doctor_info`
  MODIFY `Doctor_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10030;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `file_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `patient_info`
--
ALTER TABLE `patient_info`
  MODIFY `Patient_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11117;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
