-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 31, 2020 at 04:51 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `unique` varchar(10) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `cpname` varchar(30) NOT NULL,
  `desig` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cnum` varchar(15) NOT NULL,
  `disability` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `jdesig` varchar(30) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `entry` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`unique`, `cname`, `cpname`, `desig`, `email`, `cnum`, `disability`, `city`, `state`, `country`, `jdesig`, `username`, `password`, `entry`) VALUES
('120984', 'Atos Syntel', 'Priyanka', 'HR-Recruitment', 'priyankaatos@gmail.com', '9158873601', 'Deaf', 'Bangalore', 'TamilNadu', 'India', 'a', 'priyankaas', 'priya1289@as', '2020-03-02 01:59:29.000000'),
('123456', 'Amazon', 'Sridhar', 'Receptionist', 'sridhar123@gmail.com', '9856231045', 'Locomotor', 'Chennai', 'TamilNadu', 'India', 'b', 'sriamazon', 'AmazonSri1234', '2020-03-02 01:59:21.000000'),
('16748', 'abc company', 'rajesh', 'hr', 'rajesh@gmail.com', '9786534568', 'Deaf', 'chennai', 'Tamil Nadu', 'India', 'vision', 'rajesh', 'rajeshabc', '2020-03-30 09:13:42.638880'),
('234087', 'TCS', 'Harish', 'Data Entry', 'harishtcs15@gmail.com', '8543369258', 'Mute', 'Pune', 'TamilNadu', 'India', 'c', 'harishtcs', 'Tcs012145', '2020-03-02 01:59:28.000000'),
('234569', 'Sify Technologies', 'Kadhir', 'Content Writer', 'kadhirst221@gmail.com', '8856221034', 'Mute', 'Kolkata', 'TamilNadu', 'India', 'e', 'kadhir', 'kadhirsify#0254', '2020-03-02 01:59:23.000000'),
('267845', 'Infosys', 'Guna', 'Data Entry', 'gunainfo2362@gmail.com', '9658214588', 'Mute', 'Pune', 'TamilNadu', 'India', 'g', 'gunainfosys', 'infosys@0231', '2020-03-02 01:59:33.000000'),
('339764', 'Verizon', 'Adhithyan', 'Office Assistant', 'adhithyan652@gmail.com', '7745996210', 'Deaf', 'Chennai', 'TamilNadu', 'India', 'd', 'adhiverizon', 'adhi@verizon02', '2020-03-02 01:59:34.000000'),
('456782', 'Mind Tree', 'Samuel', 'Receptionist', 'samuel@gmail.com', '6589968744', 'Locomotor', 'Madurai', 'TamilNadu', 'India', 'f', 'samuelmindtree', 'samuelmt0302', '2020-03-02 01:59:31.000000'),
('464926', 'cfgvgv company', 'raju', 'rcrtcfc', 'ttttt@gmail.com', '05686745345', 'Locomotor', 'Chengalpattu', 'Tamil Nadu', 'India', 'receptionist', 'muthukumar', 'muthukumar', '2020-03-30 08:36:09.581744'),
('652357', 'CTS', 'Vaishnavi', 'Receptionist', 'vaishnavi@gmail.com', '7458874210', 'Locomotor', 'Chennai', 'TamilNadu', 'India', 'h', 'vaishnavicts', 'vaishucts5120', '2020-03-02 01:59:27.000000'),
('664356', 'Zoho', 'Stephen', 'Data Entry', 'stephenzoho@gmail.com', '9745001305', 'Mute', 'Bangalore', 'TamilNadu', 'India', 'j', 'stephenzoho', 'stephen2zoho', '2020-03-02 01:59:32.000000'),
('678456', 'Kaar Technologies', 'Manish', 'Content Writer', 'manishkaartech@gmail.com', '7412589510', 'Mute', 'Mumbai', 'TamilNadu', 'India', 'h', 'manishkt', 'KT@00125', '2020-03-02 01:59:22.000000'),
('764237', '8K Miles', 'Raghav', 'Receptionist', 'raghav0201@gmail.com', '8745699821', 'Locomotor', 'Chennai', 'TamilNadu', 'India', 'l', 'raghav123', '0128kmiles', '2020-03-02 01:59:35.000000'),
('765068', 'HCL', 'Harshitha', 'Receptionist', 'harshitha002@gmail.com', '8845200369', 'Locomotor', 'Madurai', 'TamilNadu', 'India', 'n', 'harshithahcl', 'harshihcl#02', '2020-03-02 01:59:30.000000'),
('783464', 'Full Creative', 'Sandhiya', 'HR-Recruitment', 'sandhiyafc4@gmail.com', '7854236903', 'Deaf', 'Kolkata', 'TamilNadu', 'India', 'k', 'sandhiya', 'sandhiyaitfc', '2020-03-02 01:59:25.000000'),
('873476', 'Tech Mahindra', 'Vidhya', 'Executive Assistant', 'vidhyatechm012@gmail.com', '9195203666', 'Deaf', 'Chennai', 'TamilNadu', 'India', 'i', 'vidhyatm', 'vidhyatm2@01', '2020-03-02 01:59:26.000000'),
('981267', 'Wipro', 'Rakesh', 'Head Librarian', 'rakeshwipro2008@gmail.com', '6581002541', 'Deaf', 'Madurai', 'TamilNadu', 'India', 'm', 'rakesh', 'Wipro@rak7895', '2020-03-02 01:59:24.000000');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `suid` varchar(30) NOT NULL,
  `sunique` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`suid`, `sunique`) VALUES
('TN1002365474102306', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `name` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `high` varchar(10) NOT NULL,
  `disability` varchar(10) NOT NULL,
  `percent` varchar(10) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `doi` varchar(10) NOT NULL,
  `doe` varchar(10) NOT NULL,
  `occupation` varchar(10) NOT NULL,
  `sector` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cpassword` varchar(20) NOT NULL,
  `timestamp` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`name`, `fname`, `dob`, `gender`, `high`, `disability`, `percent`, `uid`, `doi`, `doe`, `occupation`, `sector`, `password`, `cpassword`, `timestamp`) VALUES
('Sandhiya', 'Kumar', '5/11/1985', 'Female', 'SSLC', 'Locomotor', '40', 'TN1002365474102306', '4/11/1991', '30-05-2050', 'No', 'NA', 'Sandhiya', 'Sandhiya', '0000-00-00 00:00:00'),
('Imran', 'Raghav', '15-02-1993', 'Male', 'Primary', 'Locomotor', '45', 'TN1122354106589701', '14-02-1999', '9/11/2048', 'No', 'NA', 'Imran', 'Imran', '0000-00-00 00:00:00'),
('Rekha', 'Sanjeev', '5/11/1945', 'Female', 'SSLC', 'Locomotor', '81', 'TN1122530041003366', '22-01-1954', 'Permanent', 'No', 'NA', 'Rekha', 'Rekha', '0000-00-00 00:00:00'),
('Abishek', 'Prakash', '15-02-1994', 'Male', 'UG', 'Mute', '66', 'TN1122589968740036', '14-02-2000', 'Permanent', 'No', 'NA', 'Abishek', 'Abishek', '0000-00-00 00:00:00'),
('Kabhir', 'Nasar', '22-01-1996', 'Male', 'HSC', 'Deaf', '98', 'TN1123604520361895', '20-01-2002', 'Permanent', 'No', 'NA', 'Kabhir', 'Kabhir', '0000-00-00 00:00:00'),
('ertyu', 'ertyu', '1990-08-07', 'Male', 'SSLC', 'Locomotor', '67', 'TN1123607834361857', '2002-01-09', '2017-07-06', 'No', 'Public', 'kamalakannan', 'kamalakannan', '2020-03-29 23:41:29'),
('Renuka Sree', 'Raja', '5/3/1960', 'Female', 'HSC', 'Mute', '69', 'TN1124578549658966', '4/3/1966', 'Permanent', 'No', 'NA', 'Renuka Sree', 'Renuka Sree', '0000-00-00 00:00:00'),
('Ravi Kumar', 'Raja', '15-02-1994', 'Male', 'SSLC', 'Mute', '79', 'TN1145203699874521', '20-12-2000', 'Permanent', 'No', 'NA', 'Ravi Kumar', 'Ravi Kumar', '0000-00-00 00:00:00'),
('Pawan', 'Raghul', '22-01-1950', 'Male', 'HSC', 'Mute', '33', 'TN1200145896887452', '26-11-1956', '18-12-2035', 'No', 'NA', 'Pawan', 'Pawan', '0000-00-00 00:00:00'),
('Murali', 'Karan', '15-02-1994', 'Male', 'HSC', 'Mute', '97', 'TN1234856985752000', '4/5/2002', 'Permanent', 'No', 'NA', 'Murali', 'Murali', '0000-00-00 00:00:00'),
('Ram Kumar', 'Pradeep', '5/11/1945', 'Male', 'UG', 'Deaf', '74', 'TN1236547896541236', '22-01-1954', 'Permanent', 'Yes', 'Private', 'Ram Kumar', 'Ram Kumar', '0000-00-00 00:00:00'),
('Ganga', 'Dinesh', '28-02-1990', 'Female', 'Primary', 'Deaf', '80', 'TN1236985697410025', '2/1/1997', 'Permanent', 'Yes', 'Private', 'Ganga', 'Ganga', '0000-00-00 00:00:00'),
('Ramya', 'Subash', '5/11/1985', 'Female', 'HSC', 'Locomotor', '61', 'TN1254639874520145', '4/11/1991', '11/4/2063', 'No', 'NA', 'Ramya', 'Ramya', '0000-00-00 00:00:00'),
('Prasad', 'Anandh', '5/3/1994', 'Male', 'UG', 'Locomotor', '97', 'TN1254778521003690', '22-05-2002', 'Permanent', 'Yes', 'Private', 'Prasad', 'Prasad', '0000-00-00 00:00:00'),
('Rahul', 'Karthick', '15-02-1994', 'Male', 'HSC', 'Mute', '85', 'TN1265348520149963', '4/5/2002', 'Permanent', 'No', 'NA', 'Rahul', 'Rahul', '0000-00-00 00:00:00'),
('Deepika', 'Manikandan', '28-02-1990', 'Female', 'SSLC', 'Deaf', '83', 'TN1332008988956321', '2/1/1997', 'Permanent', 'No', 'NA', 'Deepika', 'Deepika', '0000-00-00 00:00:00'),
('Arun', 'Kumaran', '22-01-1996', 'Male', 'SSLC', 'Locomotor', '25', 'TN1447814203698541', '26-11-2002', '5/11/2038', 'No', 'NA', 'Arun', 'Arun', '0000-00-00 00:00:00'),
('Badrinath', 'Sanjay', '22-01-1996', 'Male', 'HSC', 'Mute', '69', 'TN1452003658974521', '26-11-2002', 'Permanent', 'Yes', 'Private', 'Badrinath', 'Badrinath', '0000-00-00 00:00:00'),
('Abinaya', 'Ramesh', '15-02-1993', 'Female', 'HSC', 'Deaf', '50', 'TN1452369963201459', '14-02-1999', '13-12-2060', 'No', 'NA', 'Abinaya', 'Abinaya', '0000-00-00 00:00:00'),
('Divya', 'Prabhu', '5/3/1960', 'Female', 'UG', 'Mute', '33', 'TN1456987532160054', '8/1/1967', '17-02-2021', 'No', 'NA', 'Divya', 'Divya', '0000-00-00 00:00:00'),
('Sathish', 'Jeeva', '5/3/1994', 'Male', 'SSLC', 'Deaf', '71', 'TN1522003698745210', '3/3/2000', 'Permanent', 'Yes', 'Private', 'Sathish', 'Sathish', '0000-00-00 00:00:00'),
('Aadarsh', 'Sankar', '15-02-1993', 'Male', 'UG', 'Mute', '66', 'TN2001785412366955', '4/5/2001', 'Permanent', 'No', 'NA', 'Aadarsh', 'Aadarsh', '0000-00-00 00:00:00'),
('Shiva', 'Arulnithi', '28-02-1990', 'Male', 'SSLC', 'Deaf', '89', 'TN2010003654785100', '17-05-1998', 'Permanent', 'No', 'NA', 'Shiva', 'Shiva', '0000-00-00 00:00:00'),
('Valli Priya', 'Shri', '5/3/1994', 'Female', 'HSC', 'Deaf', '66', 'TN2012003365989652', '3/3/2000', 'Permanent', 'No', 'NA', 'Valli Priya', 'Valli Priya', '0000-00-00 00:00:00'),
('Rishi ', 'Rahul', '15-02-1994', 'Male', 'UG', 'Locomotor', '71', 'TN2013005201457896', '20-12-2000', 'Permanent', 'Yes', 'Private', 'Rishi ', 'Rishi ', '0000-00-00 00:00:00'),
('Siddique', 'Abdul', '15-02-1994', 'Male', 'SSLC', 'Deaf', '65', 'TN2103665410014785', '4/5/2002', 'Permanent', 'No', 'NA', 'Siddique', 'Siddique', '0000-00-00 00:00:00'),
('Bela', 'Rajendran', '15-02-1993', 'Female', 'HSC', 'Mute', '68', 'TN2145003698789655', '4/5/2001', 'Permanent', 'No', 'NA', 'Bela', 'Bela', '0000-00-00 00:00:00'),
('Shivani', 'Murali ', '5/3/1994', 'Female', 'SSLC', 'Deaf', '88', 'TN2145003698798569', '7/1/2001', 'Permanent', 'No', 'NA', 'Shivani', 'Shivani', '0000-00-00 00:00:00'),
('Vivek', 'Rajasehkar', '28-02-1954', 'Male', 'SSLC', 'Deaf', '46', 'TN2150362587452011', '27-02-1960', '5/6/2000', 'Yes', 'Private', 'Vivek', 'Vivek', '0000-00-00 00:00:00'),
('Dharshan', 'Shagul', '15-02-1994', 'Male', 'SSLC', 'Deaf', '92', 'TN2200145547889632', '14-02-2000', 'Permanent', 'No', 'NA', 'Dharshan', 'Dharshan', '0000-00-00 00:00:00'),
('Anusha', 'Prasana', '22-01-1950', 'Female', 'SSLC', 'Locomotor', '86', 'TN2210036547854239', '10/4/1958', 'Permanent', 'No', 'NA', 'Anusha', 'Anusha', '0000-00-00 00:00:00'),
('Magesh', 'Kannan', '28-02-1954', 'Male', 'SSLC', 'Locomotor', '51', 'TN2215478541100365', '27-02-1960', '23-01-2042', 'No', 'NA', 'Magesh', 'Magesh', '0000-00-00 00:00:00'),
('Mani', 'Sivaguru', '5/11/1945', 'Male', 'HSC', 'Locomotor', '96', 'TN2221114500362033', '22-01-1954', 'Permanent', 'No', 'NA', 'Mani', 'Mani', '0000-00-00 00:00:00'),
('Swathi', 'Muthuraman', '5/3/1994', 'Female', 'SSLC', 'Locomotor', '69', 'TN2253000014547701', '3/3/2000', 'Permanent', 'No', 'NA', 'Swathi', 'Swathi', '0000-00-00 00:00:00'),
('Preeti', 'Devaraj', '5/11/1985', 'Female', 'HSC', 'Locomotor', '48', 'TN2254103000145879', '22-01-1994', '1/12/2039', 'No', 'NA', 'Preeti', 'Preeti', '0000-00-00 00:00:00'),
('Balaji', 'Siva Kumar', '28-02-1954', 'Male', 'HSC', 'Locomotor', '49', 'TN2256301420014789', '2/1/1961', '18-11-2001', 'No', 'NA', 'Balaji', 'Balaji', '0000-00-00 00:00:00'),
('Pradeep', 'Kamal', '5/3/1960', 'Male', 'HSC', 'Deaf', '85', 'TN2322145006987450', '22-05-1968', 'Permanent', 'No', 'NA', 'Pradeep', 'Pradeep', '0000-00-00 00:00:00'),
('Chandra', 'Vijay', '28-02-1990', 'Male', 'HSC', 'Mute', '48', 'TN2365987400123658', '27-02-1996', '5/10/2046', 'No', 'NA', 'Chandra', 'Chandra', '0000-00-00 00:00:00'),
('Gautham', 'Senthil', '28-02-1954', 'Male', 'HSC', 'Mute', '75', 'TN2415003698963014', '17-05-1962', 'Permanent', 'No', 'NA', 'Gautham', 'Gautham', '0000-00-00 00:00:00'),
('Vigneshwari', 'Prakash Kumar', '22-01-1950', 'Female', 'HSC', 'Deaf', '55', 'TN2510036589745210', '10/4/1958', '5/10/2041', 'No', 'NA', 'Vigneshwari', 'Vigneshwari', '0000-00-00 00:00:00'),
('Devi Priya', 'Rajeev', '22-01-1996', 'Female', 'HSC', 'Deaf', '59', 'TN2511452036541250', '9/4/2004', '16-07-2057', 'No', 'NA', 'Devi Priya', 'Devi Priya', '0000-00-00 00:00:00'),
('Vijayalakshmi', 'Ram', '5/11/1945', 'Female', 'HSC', 'Deaf', '71', 'TN2512440036528967', '4/11/1951', 'Permanent', 'No', 'NA', 'Vijayalakshmi', 'Vijayalakshmi', '0000-00-00 00:00:00'),
('Raghu', 'Eshwar', '28-02-1954', 'Male', 'HSC', 'Locomotor', '74', 'TN2514036589745210', '17-05-1962', 'Permanent', 'No', 'NA', 'Raghu', 'Raghu', '0000-00-00 00:00:00'),
('Prem Kumar', 'Raj', '15-02-1994', 'Male', 'SSLC', 'Locomotor', '74', 'TN2530054125879632', '14-02-2000', 'Permanent', 'Yes', 'Private', 'Prem Kumar', 'Prem Kumar', '0000-00-00 00:00:00'),
('Rakshan', 'Seenu', '22-01-1950', 'Male', 'HSC', 'Deaf', '73', 'TN2530145874102365', '10/4/1958', 'Permanent', 'No', 'NA', 'Rakshan', 'Rakshan', '0000-00-00 00:00:00'),
('Felix', 'Anthony', '28-02-1990', 'Male', 'HSC', 'Locomotor', '42', 'TN2541236987452012', '27-02-1996', '11/7/2042', 'No', 'NA', 'Felix', 'Felix', '0000-00-00 00:00:00'),
('Dharshini', 'Dheena', '28-02-1990', 'Female', 'HSC', 'Locomotor', '89', 'TN2541789633001485', '17-05-1998', 'Permanent', 'No', 'NA', 'Dharshini', 'Dharshini', '0000-00-00 00:00:00'),
('Aarav', 'Vikram', '15-02-1994', 'Male', 'HSC', 'Deaf', '30', 'TN2562554425210068', '20-12-2000', '16-12-2075', 'No', 'NA', 'Aarav', 'Aarav', '0000-00-00 00:00:00'),
('Sarath Kumar', 'Kumar', '22-01-1996', 'Male', 'SSLC', 'Locomotor', '66', 'TN2563201457896325', '20-01-2002', 'Permanent', 'No', 'NA', 'Sarath Kumar', 'Sarath Kumar', '0000-00-00 00:00:00'),
('Devi Priya', 'Ganeshan', '15-02-1994', 'Female', 'HSC', 'Deaf', '71', 'TN2566985745213650', '4/5/2002', 'Permanent', 'No', 'NA', 'Devi Priya', 'Devi Priya', '0000-00-00 00:00:00'),
('Aarti', 'Kishore', '28-02-1954', 'Female', 'HSC', 'Locomotor', '71', 'TN2653000145268411', '2/1/1961', 'Permanent', 'No', 'NA', 'Aarti', 'Aarti', '0000-00-00 00:00:00'),
('Gaurav', 'Kunal', '22-01-1950', 'Male', 'HSC', 'Locomotor', '29', 'TN3214520162301201', '26-11-1956', '25-11-2000', 'No', 'NA', 'Gaurav', 'Gaurav', '0000-00-00 00:00:00'),
('Ganesh Kumar', 'Mohan', '5/11/1985', 'Male', 'HSC', 'Mute', '90', 'TN3251004569887777', '4/11/1991', 'Permanent', 'No', 'NA', 'Ganesh Kumar', 'Ganesh Kumar', '0000-00-00 00:00:00'),
('Samuel', 'Bharath', '5/3/1960', 'Male', 'UG', 'Locomotor', '75', 'TN3320014521463987', '8/1/1967', 'Permanent', 'No', 'NA', 'Samuel', 'Samuel', '0000-00-00 00:00:00'),
('Baani', 'Babu', '22-01-1996', 'Female', 'SSLC', 'Mute', '59', 'TN3320145896554785', '20-01-2002', '22-07-2057', 'No', 'NA', 'Baani', 'Baani', '0000-00-00 00:00:00'),
('Bala Krishna', 'Prithvi', '5/3/1960', 'Male', 'UG', 'Deaf', '32', 'TN3321456655001200', '22-05-1968', '28-06-2040', 'Yes', 'Private', 'Bala Krishna', 'Bala Krishna', '0000-00-00 00:00:00'),
('Adrien', 'Suresh', '15-02-1994', 'Male', 'HSC', 'Locomotor', '25', 'TN3322001144785214', '20-12-2000', '16-09-2085', 'No', 'NA', 'Adrien', 'Adrien', '0000-00-00 00:00:00'),
('Pavani Reddy', 'Ram Reddy', '15-02-1994', 'Female', 'HSC', 'Deaf', '24', 'TN3362501204895632', '14-02-2000', '4/12/2057', 'No', 'NA', 'Pavani Reddy', 'Pavani Reddy', '0000-00-00 00:00:00'),
('Suresh', 'Murali Krishna', '28-02-1954', 'Male', 'SSLC', 'Mute', '78', 'TN3526987536984120', '27-02-1960', 'Permanent', 'Yes', 'Private', 'Suresh', 'Suresh', '0000-00-00 00:00:00'),
('Harish', 'Nakhul', '5/3/1960', 'Male', 'UG', 'Deaf', '92', 'TN3625569854120015', '4/3/1966', 'Permanent', 'Yes', 'Private', 'Harish', 'Harish', '0000-00-00 00:00:00'),
('Subha', 'Kiran', '5/11/1985', 'Female', 'SSLC', 'Locomotor', '75', 'TN4521875412000365', '22-01-1994', 'Permanent', 'No', 'NA', 'Subha', 'Subha', '0000-00-00 00:00:00'),
('Akash', 'Sandeep', '5/3/1994', 'Male', 'UG', 'Deaf', '95', 'TN4522100365004789', '7/1/2001', 'Permanent', 'Yes', 'Private', 'Akash', 'Akash', '0000-00-00 00:00:00'),
('Reethu', 'Mani ', '15-02-1994', 'Female', 'HSC', 'Locomotor', '80', 'TN4785496300589588', '14-02-2000', 'Permanent', 'No', 'NA', 'Reethu', 'Reethu', '0000-00-00 00:00:00'),
('Senthil', 'Saravana', '15-02-1994', 'Male', 'HSC', 'Locomotor', '55', 'TN5148552103659852', '14-02-2000', '15-08-2041', 'No', 'NA', 'Senthil', 'Senthil', '0000-00-00 00:00:00'),
('Guna ', 'Rajini', '15-02-1993', 'Male', 'HSC', 'Deaf', '99', 'TN5210365897548210', '21-12-1999', 'Permanent', 'No', 'NA', 'Guna ', 'Guna ', '0000-00-00 00:00:00'),
('Ananya', 'Pugazh', '15-02-1994', 'Female', 'SSLC', 'Locomotor', '55', 'TN5214520014587963', '4/5/2002', '12/5/2052', 'No', 'NA', 'Ananya', 'Ananya', '0000-00-00 00:00:00'),
('Sowmiya', 'Suriya', '22-01-1950', 'Female', 'SSLC', 'Mute', '31', 'TN5263145001288899', '21-01-1956', '16-11-1995', 'No', 'NA', 'Sowmiya', 'Sowmiya', '0000-00-00 00:00:00'),
('Priya', 'Govindhan', '5/11/1985', 'Female', 'HSC', 'Locomotor', '69', 'TN5266985630014520', '4/11/1991', 'Permanent', 'No', 'NA', 'Priya', 'Priya', '0000-00-00 00:00:00'),
('Eesha', 'Pratap', '28-02-1990', 'Female', 'SSLC', 'Mute', '29', 'TN5511032698445120', '2/1/1997', '19-12-2041', 'No', 'NA', 'Eesha', 'Eesha', '0000-00-00 00:00:00'),
('Dhanya', 'Jiiva', '15-02-1993', 'Female', 'HSC', 'Deaf', '58', 'TN5520136987469301', '14-02-1999', '10/10/2051', 'No', 'NA', 'Dhanya', 'Dhanya', '0000-00-00 00:00:00'),
('Shankar', 'Manoj', '22-01-1996', 'Male', 'HSC', 'Deaf', '55', 'TN5521463895677411', '20-01-2002', '29-06-2081', 'No', 'NA', 'Shankar', 'Shankar', '0000-00-00 00:00:00'),
('Priyanka', 'Dhilip', '5/11/1945', 'Female', 'HSC', 'Locomotor', '90', 'TN5521478596336985', '4/11/1951', 'Permanent', 'No', 'NA', 'Priyanka', 'Priyanka', '0000-00-00 00:00:00'),
('Mounika', 'Vignesh', '5/3/1994', 'Female', 'HSC', 'Mute', '35', 'TN5521487530126001', '22-05-2002', '15-12-2057', 'No', 'NA', 'Mounika', 'Mounika', '0000-00-00 00:00:00'),
('Geetha', 'Sathish', '22-01-1950', 'Female', 'SSLC', 'Mute', '45', 'TN5523001478523965', '21-01-1956', '1/10/2026', 'No', 'NA', 'Geetha', 'Geetha', '0000-00-00 00:00:00'),
('Karthi', 'Hariprakash', '15-02-1993', 'Male', 'HSC', 'Mute', '49', 'TN5584712003698547', '4/5/2001', '15-01-2059', 'No', 'NA', 'Karthi', 'Karthi', '0000-00-00 00:00:00'),
('Venkat Raman', 'Bala', '22-01-1950', 'Male', 'HSC', 'Deaf', '71', 'TN5588963301425485', '21-01-1956', 'Permanent', 'Yes', 'Private', 'Venkat Raman', 'Venkat Raman', '0000-00-00 00:00:00'),
('Kumar', 'Vimal', '15-02-1994', 'Male', 'HSC', 'Deaf', '98', 'TN5589647536985889', '20-12-2000', 'Permanent', 'No', 'NA', 'Kumar', 'Kumar', '0000-00-00 00:00:00'),
('Chitra', 'Diwakar', '5/3/1960', 'Female', 'HSC', 'Mute', '66', 'TN5895663222170058', '22-05-1968', 'Permanent', 'No', 'NA', 'Chitra', 'Chitra', '0000-00-00 00:00:00'),
('Dharani', 'Sehkar', '5/3/1994', 'Female', 'HSC', 'Mute', '60', 'TN5896320120014145', '7/1/2001', '29-11-2043', 'Yes', 'Private', 'Dharani', 'Dharani', '0000-00-00 00:00:00'),
('Chinnasamy', 'Rajesh', '28-02-1954', 'Male', 'HSC', 'Locomotor', '54', 'TN5896485521003698', '27-02-1960', '5/1/2000', 'No', 'NA', 'Chinnasamy', 'Chinnasamy', '0000-00-00 00:00:00'),
('Madhavi', 'Varun raj', '28-02-1954', 'Female', 'SSLC', 'Deaf', '65', 'TN6523001457854125', '2/1/1961', 'Permanent', 'No', 'NA', 'Madhavi', 'Madhavi', '0000-00-00 00:00:00'),
('Eshani', 'Jai Shankar', '28-02-1954', 'Female', 'SSLC', 'Mute', '29', 'TN6547595123004589', '17-05-1962', '15-09-2061', 'No', 'NA', 'Eshani', 'Eshani', '0000-00-00 00:00:00'),
('Dheena', 'Deepak', '15-02-1994', 'Male', 'HSC', 'Deaf', '33', 'TN6582314785960365', '4/5/2002', '15-08-2046', 'No', 'NA', 'Dheena', 'Dheena', '0000-00-00 00:00:00'),
('Eshwar', 'Vinoth', '5/11/1985', 'Male', 'HSC', 'Locomotor', '47', 'TN6589332014520047', '22-01-1994', '12/12/2071', 'No', 'NA', 'Eshwar', 'Eshwar', '0000-00-00 00:00:00'),
('Janaki ', 'Dev', '5/11/1945', 'Female', 'SSLC', 'Locomotor', '66', 'TN7532159632147850', '9/9/1952', 'Permanent', 'No', 'NA', 'Janaki ', 'Janaki ', '0000-00-00 00:00:00'),
('Rithik', 'Krishna', '15-02-1993', 'Male', 'SSLC', 'Locomotor', '41', 'TN7589641230125400', '21-12-1999', '15-08-2025', 'No', 'NA', 'Rithik', 'Rithik', '0000-00-00 00:00:00'),
('kanmani', 'Vetri', '22-01-1996', 'Female', 'SSLC', 'Mute', '51', 'TN7741258951423698', '9/4/2004', '11/2/2048', 'No', 'NA', 'kanmani', 'kanmani', '0000-00-00 00:00:00'),
('Hari Krishna', 'Sarath', '15-02-1993', 'Male', 'HSC', 'Mute', '71', 'TN7854125963014522', '21-12-1999', 'Permanent', 'No', 'NA', 'Hari Krishna', 'Hari Krishna', '0000-00-00 00:00:00'),
('Vanitha', 'Vishnu', '22-01-1996', 'Female', 'HSC', 'Locomotor', '55', 'TN7958663210041054', '9/4/2004', '25-04-2052', 'No', 'NA', 'Vanitha', 'Vanitha', '0000-00-00 00:00:00'),
('Abhav', 'Sarvesh', '5/3/1960', 'Male', 'HSC', 'Mute', '58', 'TN8599663201457852', '4/3/1966', '14-04-2058', 'No', 'NA', 'Abhav', 'Abhav', '0000-00-00 00:00:00'),
('Raj Kumar', 'Aakash', '5/11/1985', 'Male', 'HSC', 'Deaf', '69', 'TN8854712254998774', '9/9/1992', 'Permanent', 'No', 'NA', 'Raj Kumar', 'Raj Kumar', '0000-00-00 00:00:00'),
('Kavi Bharathi', 'Ajay', '28-02-1990', 'Female', 'HSC', 'Deaf', '90', 'TN8855412033669977', '2/1/1997', 'Permanent', 'No', 'NA', 'Kavi Bharathi', 'Kavi Bharathi', '0000-00-00 00:00:00'),
('Kaushik', 'Arjun Raj', '5/11/1945', 'Male', 'HSC', 'Mute', '60', 'TN8874596820136000', '4/11/1951', '14-03-2025', 'No', 'NA', 'Kaushik', 'Kaushik', '0000-00-00 00:00:00'),
('Aadhi', 'Sanjay', '5/11/1945', 'Male', 'PG', 'Deaf', '90', 'TN8956998741203010', '9/9/1952', 'Permanent', 'Yes', 'Public', 'Aadhi', 'Aadhi', '0000-00-00 00:00:00'),
('Dinesh', 'Magesh', '5/11/1985', 'Male', 'SSLC', 'Locomotor', '78', 'TN8988541200221478', '9/9/1992', 'Permanent', 'No', 'NA', 'Dinesh', 'Dinesh', '0000-00-00 00:00:00'),
('Chetan', 'Nithi', '5/3/1960', 'Male', 'HSC', 'Locomotor', '86', 'TN9512547856300145', '8/1/1967', 'Permanent', 'No', 'NA', 'Chetan', 'Chetan', '0000-00-00 00:00:00'),
('Devaraj', 'Arvind', '28-02-1990', 'Male', 'SSLC', 'Locomotor', '77', 'TN9563258753694120', '27-02-1996', 'Permanent', 'No', 'NA', 'Devaraj', 'Devaraj', '0000-00-00 00:00:00'),
('Radhika', 'Ashok', '22-01-1950', 'Female', 'HSC', 'Locomotor', '80', 'TN9688900365401111', '21-01-1956', 'Permanent', 'No', 'NA', 'Radhika', 'Radhika', '0000-00-00 00:00:00'),
('Vignesh', 'Sunil', '15-02-1994', 'Male', 'SSLC', 'Deaf', '73', 'TN9856320011452068', '20-12-2000', 'Permanent', 'No', 'NA', 'Vignesh', 'Vignesh', '0000-00-00 00:00:00'),
('Jessi Reshma', 'Mathew', '5/3/1994', 'Female', 'HSC', 'Mute', '80', 'TN9856321004785520', '3/3/2000', 'Permanent', 'No', 'NA', 'Jessi Reshma', 'Jessi Reshma', '0000-00-00 00:00:00'),
('Sneha', 'Muthu ', '15-02-1993', 'Female', 'HSC', 'Locomotor', '35', 'TN9856352140002518', '14-02-1999', '1/8/2062', 'No', 'NA', 'Sneha', 'Sneha', '0000-00-00 00:00:00'),
('Suresh', 'Raghavan', '22-01-1996', 'Male', 'HSC', 'Deaf', '30', 'TN9874563210201452', '26-11-2002', '5/12/2070', 'No', 'NA', 'Suresh', 'Suresh', '0000-00-00 00:00:00'),
('Swetha', 'Rajesh', '5/11/1945', 'Female', 'SSLC', 'Deaf', '48', 'TN9985632410145789', '22-01-1954', '25-11-1998', 'Yes', 'Private', 'Swetha', 'Swetha', '0000-00-00 00:00:00'),
('Seetha', 'Kathir', '5/11/1985', 'Female', 'UG', 'Mute', '79', 'TN9988745632187548', '9/9/1992', 'Permanent', 'No', 'NA', 'Seetha', 'Seetha', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`unique`),
  ADD UNIQUE KEY `cnum` (`cnum`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`suid`),
  ADD UNIQUE KEY `suid` (`suid`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uid` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
