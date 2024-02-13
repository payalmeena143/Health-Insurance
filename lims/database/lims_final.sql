-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 11:22 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lims`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `agent_id` varchar(50) NOT NULL,
  `agent_password` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`agent_id`, `agent_password`, `name`, `branch`, `phone`) VALUES
('111', '222', 'Pantho Sorkar', 'Mirpur', '01598745682'),
('1610', '1610', 'Shovon', 'Dhanmondi', '01698484654'),
('222', '333', 'Sultan', 'Mohakhali', '01521302251'),
('234', '111', 'Rafiq Bond', 'Raipur', '654654654645'),
('555', '666', 'Amit Dutta', 'Mohakhali', '00111'),
('Admin', '12345', 'Master User', 'null', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `claims`
--

CREATE TABLE `claims` (
  `claim_id` varchar(200) NOT NULL,
  `claim_date` varchar(50) NOT NULL,
  `client_id` varchar(100) NOT NULL,
  `disease_name` varchar(200) NOT NULL,
  `hospital_name` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `reason` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `claims`
--

INSERT INTO `claims` (`claim_id`, `claim_date`, `client_id`, `disease_name`, `hospital_name`, `status`, `reason`) VALUES
('1511986023-414821017', '15-08-2019', '1511986023', 'Dengue', 'City Hospital', 'Accepted', 'NA'),
('1511986129-562418685', '10-08-2020', '1511986129', 'Asthma', 'National Hospital', 'Accepted', 'NA'),
('1511986256-1001633290', '12-07-2020', '1511986256', 'Thyroid', 'AIIMS', 'Rejected', 'Disease not covered under policy'),
('1511986409-1583368932', '26-10-2018', '1511986409', 'Covid-19', 'New City Hospital', 'Accepted', 'NA'),
('1511986570-225462542', '14-11-2018', '1511986409', 'Oral Cancer', 'G.K Hospital', 'Rejected', 'Hospital not under network'),
('1511986641-1504036491', '05-06-2019', '1511986641', 'Covid-19', 'AIIMS Delhi', 'Accepted', 'NA'),
('1511986754-53418428', '12-09-2018', '1511986754', 'Malaria', 'GMC Mumbai', 'Rejected', 'Disease not covered under policy'),
('1511986912-1024403548', '10-09-2017', '1511986912', 'Dengue', 'PDMC', 'Accepted', 'NA'),
('1511987011-183007296', '15-04-2018', '1511987011', 'Yellow Fever ', 'JPMC', 'Accepted', 'NA'),
('1511987599-513216278', '07-11-2019', '1511987599', 'Malaria', 'Raj Hospital', 'Accepted', 'NA'),
('1511987920-2105200552', '16-01-2019', '1511987920', 'Mouth Cancer', 'GMC Delhi', 'Accepted', 'NA'),
('1511987932-1318641913', '19-09-2017', '1511987932', 'Rabies', 'City Hospital ', 'Rejected', 'Pre-existing disease not covered  '),
('1511988146-114572519', '12-09-2018', '1511988146', 'Snakebite', 'National Hospital', 'Accepted', 'NA'),
('1511988147-1556364815', '16-12-2019', '1511988147', 'Mumps', 'AIIMS Nagpur', 'Rejected', 'Incomplete document'),
('1511988275-674553550', '25-07-2018', '1511988275', 'Tuberculosis', 'GMC Amritsar ', 'Accepted', 'NA'),
('1511988421-516349587', '19-03-2020', '1511988421', 'HIV Infection', 'RIIMS', 'Accepted', 'NA'),
('1511988604-484205419', '13-09-2019', '1511988604', 'Hepatitis B', 'GMC Bangalore', 'Rejected', 'Disease not found in the policy '),
('1511988659-361572415', '12-01-2020', '1511988659', 'Typhoid Fever', 'Apollo Hospital', 'Accepted', 'NA'),
('1511988918-1027705582', '10-08-2019', '1511988918', 'Influenza', 'ACMH Hospital', 'Accepted', 'NA'),
('1511989029-1466194256', '15-09-2018', '1511989029', 'Rubella', 'P.V. Healthcare ', 'Rejected', 'Incomplete documents'),
('1511989124-257126087', '20-09-2019', '1511989124', 'Malaria ', 'AIIMS Amritsar', 'Accepted', 'NA'),
('1511989196-1383443438', '12-11-2021', '1511989196', 'Smallpox', 'J.K.Hospital', 'Processing', 'NA'),
('1511989270-522970848', '11-05-2020', '1511989270', 'Chikungunya', ' D.M. Hospital', 'Processing', 'NA'),
('1511989353-1465676744', '07-03-2021', '1511989270', 'Scabies', 'GMC Delhi', 'Rejected', 'Hospital not under network'),
('1511989508-1852375428', '17-05-2021', '1511989508', 'Rabies', 'R.K. Hospital', 'Processing', 'NA'),
('1511989560-1833013957', '15-08-1998', '1511987599', 'Jamius Siam', 'Son', '2nd', 'Male'),
('1511989629-1412083486', '21-07-1992', '1511988147', 'Adnan Azmee', 'Brother', '2nd', 'Male'),
('1511989682-1891269900', '19-09-1925', '1511989196', 'Susuke Uchiha', 'Brother', '2nd', 'Male'),
('1605853689-491904229', '01-07-1975', '1605853689', 'krishna', 'father', 'high', 'male'),
('1682591203-998684878', '10-05-2022', '1682591203', 'COVID-19', '', 'Processing', 'NA'),
('1682591599-189746651', '10-05-2022', '1682591599', 'COVID-19', '', 'Processing', 'NA'),
('1682632178-1345844997', '15-04-2023', '1682631977', 'Mouth Cancer', '', 'Processing', 'NA'),
('1683364922-10908798', '15-09-2020', '1572913681', 'Malaria', '', 'Processing', 'NA'),
('1683365380-1503538510', '15-09-2020', '1683365380', 'AIDS', 'Colvin Hospital', 'Processing', 'NA'),
('1683365790-1938759489', '18-07-2023', '1572913681', 'Lung Cancer', '', 'Processing', 'NA'),
('1683365963-1681355164', '10-03-2022', '1562189112', 'Mouth Cancer', 'City Hospital', 'Accepted', 'NA'),
('1683741221-2050157121', '18-07-2023', '1511986023', 'Tuberculosis', 'City Hospital', 'Rejected', 'Documents'),
('1683825392-1676695276', '18-07-2023', '1511986023', 'Stroke', 'Colvin Hospital', 'Accepted', 'NA'),
('1683826450-378907433', '15-09-2020', '1511986256', 'Covid-19', 'City Hospital', 'Processing', 'NA'),
('1683869345-488757945', '10-03-2022', '1511986912', 'Lung Cancer', 'City Hospital', 'Processing', 'NA'),
('1683870693-1005987576', '18-07-2023', '1511986641', 'Thyroid', 'GMC Mumbai', 'Accepted', 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` varchar(200) NOT NULL,
  `client_password` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `birth_date` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `policy_id` varchar(50) NOT NULL,
  `renewal_date` varchar(20) NOT NULL,
  `agent_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_password`, `name`, `sex`, `birth_date`, `phone`, `address`, `policy_id`, `renewal_date`, `agent_id`) VALUES
('1511986023', '123', 'John Green', 'Male', '11-05-1985', '013548743689', 'Uttarakhand', '4', '15-04-2024', '555'),
('1511986129', '123', 'Aemon Task', 'Male', '10-09-1970', '54189465100', 'Dhaka', '1', '11-05-2025', '555'),
('1511986256', '123', 'Gareth Walker', 'Male', '05-09-1987', '0169780980', 'Noakhali', '3', '09-09-2030', '555'),
('1511986409', '123', 'Hillary Clinton', 'Female', '15-09-1978', '074740548974', 'New York', '1', '12-08-2027', '555'),
('1511986641', '123', 'Salman Muktadir', 'Male', '14-02-1992', '987451315', 'Dhaka', '2', '12-02-2025', '555'),
('1511986754', '123', 'Ashraf Bin Shahadat', 'Male', '03-10-1996', '01658794121', 'Chittagong', '2', '24-01-2024', '555'),
('1511986912', '123', 'Tisha Khan', 'Female', '19-08-1990', '8798451321320', 'Dhaka', '3', '12-07-2026', '555'),
('1511987011', '123', 'S. a. Sadik', 'Male', '05-03-1987', '01515644470', 'Hatirpool, Dhaka', '3', '28-03-2030', '222'),
('1511987599', '123', 'Aamir Khan', 'Male', '14-03-1965', '01833036524', 'Banani, Dhaka', '2', '15-04-2028', '222'),
('1511987920', '123', 'Emre Can', 'Male', '12-03-1992', '012589746', 'Liverpool', '2', '18-05-2029', '111'),
('1511987932', '123', 'Lailatul Jannat Lamia', 'Female', '07-12-1991', '01762274542', 'Dhap, Rnagpur', '1', '10-06-2027', '222'),
('1511988146', '123', 'Cristiano Ronaldo', 'Male', '25-03-1985', '9885151321', 'Madrid', '3', '12-01-2027', '111'),
('1511988147', '123', 'Raihan Alam Rahat', 'Male', '18-08-1993', '01562664475', 'Badda, Dhaka', '2', '25-06-2025', '222'),
('1511988275', '123', 'Lionel Messi', 'Male', '12-09-1987', '0125886451', 'Barcelona', '3', '12-07-2032', '111'),
('1511988421', '123', 'Jorina Akter', 'Female', '09-11-1994', '01530220045', 'Panthapath, Dhaka', '3', '23-09-2026', '222'),
('1511988604', '123', 'Sabila Noor', 'Female', '30-09-1993', '16815616516', 'Potuakhali', '2', '26-08-2026', '111'),
('1511988659', '123', 'Lex Luthor', 'Male', '11-02-1778', '01622633745', 'Kilgaon, Dhaka', '2', '23-08-2029', '222'),
('1511988918', '123', 'Safa Kabir', 'Female', '19-02-1992', '16516065146', 'Mohammadpur', '2', '23-09-2030', '1610'),
('1511989029', '123', 'Harry Potter', 'Male', '26-03-1991', '01988223734', 'Banani, Bogra', '2', '27-09-2025', '222'),
('1511989124', '123', 'Tony Stark', 'Male', '18-04-1982', '01684646864', 'Avengers Tower', '3', '20-06-2026', '1610'),
('1511989196', '123', 'Naruto Uzumaki', 'Male', '28-01-1970', '01922833374', 'Dhanmondi, Dhaka', '3', '19-08-2028', '222'),
('1511989270', '123', 'Shahriar Fahim', 'Male', '25-08-1995', '5641510654', 'Badda, Dhaka', '1', '06-12-2026', '1610'),
('1511989508', '123', 'Frank Underwood', 'Male', '29-06-1989', '518914651684', 'Washington', '3', '25-04-2030', '1610'),
('1605853689', '12345', 'Ram Kumar', 'Male', '10-11-1990', '9998529631', 'Raigarh', '5048', '20-06-2023', '007'),
('1606114669', '123456', 'Kiran', 'Male', '10-11-1990', '9998529631', 'Raigarh', '105', '19-06-2035', 'agent007'),
('1682591203', '123', 'Tejal', 'Female', '10-01-2001', '3289037095', 'Mumbai ', '3', '20-07-2030', 'ahmed'),
('1682591599', '123', 'Tejal', 'Female', '10-01-2001', '8327910567', 'Mumbai, India', '3', '15-04-2024', 'ahmed'),
('1683365380', '123', 'Purwa Mohod', 'Female', '08-05-2003', '9761827109', 'Amravati, Maharashtra', '3', '12-03-2025', 'ahmed'),
('1683740615', '1234', 'Agreema', 'Female', '08-05-2003', '26127911928', 'Telangana', '4', '12-04-2025', 'Admin'),
('1683799660', '123', 'Aditi', 'Female', '18-05-2003', '3826120192', 'Uttar Pradesh', '3', '12-03-2025', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `recipt_no` varchar(20) NOT NULL,
  `client_id` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `due` varchar(50) NOT NULL,
  `fine` varchar(50) NOT NULL,
  `agent_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`recipt_no`, `client_id`, `month`, `amount`, `due`, `fine`, `agent_id`) VALUES
('1511987179_452089622', '1511986023', 'May ', '6500', '0', '120', '555'),
('1511987211_190085256', '1511986023', 'June', '6500', '0', '0', '555'),
('1511987230_390658416', '1511986023', 'July', '6000', '0', '500', '555'),
('1511987272_936407539', '1511986129', 'January', '3000', '0', '0', '555'),
('1511987294_157536829', '1511986129', 'February', '3000', '0', '0', '555'),
('1511987356_228689839', '1511986256', 'September', '13000', '0', '0', '555'),
('1511987375_208594029', '1511986256', 'October', '13000', '0', '0', '555'),
('1511987407_616696691', '1511986409', 'November', '3000', '0', '0', '555'),
('1511987433_196711163', '1511986409', 'December', '3000', '0', '0', '555'),
('1511987516_243604186', '1511986641', 'March', '6500', '0', '0', '555'),
('1511987592_140845877', '1511987011', 'April', '13000', '0', '0', '555'),
('1511987614_130742935', '1511987011', 'July', '13000', '0', '0', '555'),
('1511987665_189868060', '1511986912', 'August', '13000', '0', '0', '555'),
('1511987683_122084269', '1511986912', 'September', '10000', '0', '3000', '555'),
('1511987717_198373690', '1511986912', 'October', '13000', '0', '0', '555'),
('1511987778_123379304', '1511986256', 'June', '13000', '0', '0', '555'),
('1511988103_361528786', '1511987920', 'May ', '6500', '0', '0', '111'),
('1511988119_162172016', '1511987920', 'June', '6500', '0', '0', '111'),
('1511988132_734204095', '1511987920', 'July', '5000', '0', '1500', '111'),
('1511988410_340758810', '1511988146', 'May ', '13000', '0', '0', '111'),
('1511988425_663527012', '1511988146', 'June', '9000', '0', '4000', '111'),
('1511988449_500783305', '1511988146', 'July', '13000', '0', '0', '111'),
('1511988497_126275506', '1511988275', 'January', '13000', '0', '0', '111'),
('1511988535_990905192', '1511988275', 'February', '13000', '0', '0', '111'),
('1511988556_123908469', '1511988275', 'March', '10000', '0', '3000', '111'),
('1511988737_327582747', '1511988604', 'April', '6500', '0', '0', '111'),
('1511988751_359818495', '1511988604', 'May', '6000', '0', '500', '111'),
('1511988766_127505142', '1511988604', 'June', '6500', '0', '0', '111'),
('1511988780_170076555', '1511988604', 'July', '6500', '0', '0', '111'),
('1511989102_683990954', '1511988918', 'May', '6500', '0', '0', '1610'),
('1511989392_84501314', '1511989270', 'March', '3000', '0', '0', '1610'),
('1511989409_123979267', '1511989270', 'April', '2000', '0', '1000', '1610'),
('1511989429_583095229', '1511989124', 'August', '13000', '0', '0', '1610'),
('1511989444_189806601', '1511989124', 'September', '10000', '500', '3000', '1610'),
('1511989466_212456917', '1511989124', 'October', '13000', '200', '0', '1610'),
('1511989636_340353445', '1511989508', 'May ', '13000', '0', '0', '1610'),
('1511989652_157014714', '1511989508', 'June', '13000', '0', '0', '1610'),
('1511989666_170298934', '1511989508', 'July', '13000', '0', '0', '1610'),
('1511989675_131262819', '1511989508', 'August', '10000', '200', '3000', '1610'),
('1511989810_798994343', '1511987011', 'January', '13000', '0', '0', '222'),
('1511989871_127982362', '1511987011', 'February', '12000', '0', '1000', '222'),
('1511989898_333265655', '1511987011', 'March', '13500', '0', '0', '222'),
('1511989998_117407536', '1511987599', 'April', '6500', '0', '0', '222'),
('1511990035_160826062', '1511987599', 'May', '6500', '0', '0', '222'),
('1511990048_422427668', '1511987599', 'June', '6200', '0', '300', '222'),
('1511990085_87306440', '1511987932', 'February', '3000', '0', '0', '222'),
('1511990125_551933465', '1511987932', 'March', '3000', '0', '0', '222'),
('1511990134_120884202', '1511987932', 'April', '3000', '0', '0', '222'),
('1511990144_176620861', '1511987932', 'May', '2700', '0', '300', '222'),
('1511990187_187405393', '1511988147', 'May', '6500', '0', '0', '222'),
('1511990199_959205473', '1511988147', 'June', '6200', '0', '300', '222'),
('1511990208_118604619', '1511988147', 'July', '6800', '0', '0', '222'),
('1511990256_119833492', '1511988421', 'June', '13000', '0', '0', '222'),
('1511990272_28498432', '1511988421', 'July', '11000', '0', '2000', '222'),
('1511990285_110428955', '1511988421', 'August', '15000', '0', '0', '222'),
('1511990349_127882369', '1511988659', 'October', '6500', '0', '0', '222'),
('1511990363_130124137', '1511988659', 'November', '6000', '0', '500', '222'),
('1511990377_109303020', '1511988659', 'December', '6500', '0', '500', '222'),
('1511990406_193995825', '1511989029', 'January', '6000', '0', '500', '222'),
('1511990421_728097194', '1511989029', 'February', '6500', '0', '500', '222'),
('1511990448_253707727', '1511989029', 'March', '7000', '0', '0', '222'),
('1511990478_53908577', '1511989196', 'March', '13000', '0', '0', '222'),
('1511990488_140201370', '1511989196', 'April', '13000', '0', '0', '222'),
('1511990498_126571266', '1511989196', 'May', '13000', '0', '0', '222'),
('1511990510_111608856', '1511989196', 'June', '12000', '0', '1000', '222'),
('1683826375_191677593', '1511986256', 'July', '200000', '0', '0', 'Admin'),
('1683870801_148122000', '1511986641', 'April', '6500', '0', '0', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `policy_id` varchar(50) NOT NULL,
  `term` varchar(50) NOT NULL,
  `sum_insured` varchar(50) NOT NULL,
  `premium_rate` varchar(50) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `coverage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`policy_id`, `term`, `sum_insured`, `premium_rate`, `payment_method`, `coverage`) VALUES
('1', '10 year', '500000', '3000', 'Cash/Check', 'Family'),
('2', '10 Years', '1000000', '6500', 'Check', 'Individual'),
('3', '10 Years', '2000000', '13000', 'Cash', 'Family'),
('4', '15 years', '400000', '1000', 'Cash/Check', 'Individual'),
('5', '4 years', '200000', '1000', 'Cash', 'Family');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`agent_id`),
  ADD UNIQUE KEY `agent_id` (`agent_id`);

--
-- Indexes for table `claims`
--
ALTER TABLE `claims`
  ADD PRIMARY KEY (`claim_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `client_id` (`client_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`recipt_no`),
  ADD UNIQUE KEY `recipt_no` (`recipt_no`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`policy_id`),
  ADD UNIQUE KEY `policy_id` (`policy_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
