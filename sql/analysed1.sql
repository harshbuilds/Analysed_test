-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2022 at 05:16 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `analysed`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcontact`
--

CREATE TABLE `addcontact` (
  `contact_id` int(25) NOT NULL,
  `image` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `contact_type` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `reports_to` varchar(255) NOT NULL,
  `industry` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `last_contact` varchar(255) NOT NULL,
  `lastvisit` varchar(255) NOT NULL,
  `visibility` varchar(255) NOT NULL,
  `validity` varchar(255) NOT NULL,
  `LinkedIn_profile` varchar(255) NOT NULL,
  `added_On` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addcontact`
--

INSERT INTO `addcontact` (`contact_id`, `image`, `fname`, `lname`, `status`, `mname`, `email`, `phone`, `address`, `city`, `zip_code`, `state`, `country`, `job_title`, `company_name`, `contact_type`, `division`, `source`, `reports_to`, `industry`, `skills`, `last_contact`, `lastvisit`, `visibility`, `validity`, `LinkedIn_profile`, `added_On`) VALUES
(1, '', 'Md', 'Khalid', '2', 'athar', 'new1@gmail.com', '86564534', 'new castel, town', 'Bangalore', '-2', '2', '2', 'dev', 'facebook', '2', '2', '2', '2', '2', 'java', '2012-07-13', '2019-10-17', '1', '2', 'lonk', NULL),
(2, '', 'Dave', 'patel', '1', 'kr', 'faze@gmail.com', '86564534', 'bangalore', 'ADas', '-2', '2', '2', 'engineer', 'facebook', '2', '2', '2', '2', '2', 'java', '2016-10-24', '2019-10-22', '1', '2', 'jskahaksh', NULL),
(3, '', 'neha', 'mishra', '1', 'n', 'neha@gmail.com', '8976543281', 'new York', 'New York', '-3', '1', '2', 'Analyst', 'genpact', '1', '1', '1', '1', '2', 'C++', '2018-09-25', '2019-10-23', '1', '2', 'neh', NULL),
(4, 'pradipjavascript.png', 'pradip', 'giri', '1', 'kr', 'pradip@gmail.com', '65453423', 'kolkata', 'kolkta', '713302', '0', '0', 'developer', 'zenc', '1', '1', '1', '1', '1', 'c++', '2015-11-30', '2019-10-29', '2', '2', 'ajsdk', NULL),
(5, '', 'md ', 'adnan', 'single', 'k', 'adnan@gmail.com', '8734251324', 'calcutta', 'calcutta', '786543', 'andhra', 'Inia', 'dev', 'spc', 'new', 'ka', 'new', 'kia', 'tel', 'java', '11-11-2013', '11-11-2014', 'none', '12-11-2020', 'link', NULL),
(6, '', 'Richard', 'Max', '1', 'Jr', 'max@gmail.com', '3425123456', 'baker street', 'london', '122223', '2', '1', 'Developer', 'oracle', '1', '1', '2', '1', '1', 'Cloud computing', '2022-11-12', '2022-11-11', '1', '1', 'new@gmail.com', '2022-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `candidate_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `Industry` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `ownership` varchar(255) NOT NULL,
  `cityname` varchar(255) NOT NULL,
  `Zipcode` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `currentTitle` varchar(255) NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `candidateType` varchar(255) NOT NULL,
  `employmentPreference` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `recruiter` varchar(255) NOT NULL,
  `currentSalary` varchar(255) NOT NULL,
  `salaryRange1` varchar(255) NOT NULL,
  `salaryRange2` varchar(255) NOT NULL,
  `talents` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `candidateComment` varchar(255) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `accessebility` varchar(255) NOT NULL,
  `reasonType` varchar(255) NOT NULL,
  `added_On` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`candidate_id`, `image`, `firstname`, `lastname`, `emailid`, `phonenumber`, `birthdate`, `Industry`, `address`, `ownership`, `cityname`, `Zipcode`, `State`, `currentTitle`, `companyName`, `candidateType`, `employmentPreference`, `source`, `recruiter`, `currentSalary`, `salaryRange1`, `salaryRange2`, `talents`, `resume`, `skills`, `qualification`, `candidateComment`, `availability`, `job`, `accessebility`, `reasonType`, `added_On`) VALUES
(52, '4.jpg', 'anan', 'white', 'ana@gmail.com', '986573423', '2021-11-29', 'Inactive', 'baker street', 'India', 'london', '123122', 'Tamil Nadu', 'developer', 'facebook', 'Temporary', 'Temporary', 'Internshala', 'Albert', '7000', '8000', '9000', 'c++', '', 'Cloud computing', 'BSc', 'very', '2021-11-26', '1', '1', '1', '2022-02-02'),
(53, 'testPic.png', 'ammy', 'brown', 'amy@gmail.com', '432112323', '2015-04-26', '2', 'linc roaad', 'Australia', 'Kolkata', '123121', 'Maharastra', 'tester', 'youtube', '2', '1', '1', '1', '70000', '80000', '90000', 'bussinessSkills', '', 'c++', 'MSc', 'good', '2020-11-28', '2', '2', '2', '2022-02-02'),
(54, '', 'Jack', 'Ma', 'jack@gmail.com', '9865734231', '2004-09-30', '1', 'streetview', 'Japan', 'tokyo', '786756', 'Maharastra', 'analyst', 'facebook', '2', '3', '1', '2', '70000', '80000', '90000', 'bussinessSkills', '', 'java', 'B.Com', 'good', '2012-10-30', '3', '3', '2', '2022-01-16'),
(55, '', 'richard ', 'nick', 'ri@gmail.com', '9182198213', '2020-10-27', '3', 'bourbun street', 'Japan', 'london', '123121', 'Maharastra', 'coder', 'Virtusa', '2', '2', '2', '2', '70000', '85000', '90000', 'bussinessSkills', '', 'python', 'BSc', 'good', '2021-10-28', '3', '2', '1', '2022-01-16'),
(56, '', 'lisa', 'richardson', 'li@gmail.com', '839291729', '2021-11-30', '2', 'lakeview', 'India', 'Delhi', '786756', 'UP', 'tester', 'facebook', '1', '2', '2', '3', '70000', '80000', '85000', 'bussinessSkills', '', 'python', 'BSc', 'good to join', '2021-11-29', '2', '2', '0', '2022-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `ownership` varchar(255) NOT NULL,
  `industry` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `parent_company` varchar(255) NOT NULL,
  `active_contact` varchar(255) NOT NULL,
  `company_desc` varchar(255) NOT NULL,
  `permanent_fee` varchar(255) NOT NULL,
  `contract_fee` varchar(255) NOT NULL,
  `main_email` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `bank_id` varchar(255) NOT NULL,
  `bank_acc_no` varchar(255) NOT NULL,
  `iban` varchar(255) NOT NULL,
  `vat` varchar(255) NOT NULL,
  `added_On` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `image`, `company_name`, `status`, `company`, `ownership`, `industry`, `source`, `parent_company`, `active_contact`, `company_desc`, `permanent_fee`, `contract_fee`, `main_email`, `contact_no`, `address`, `city`, `zipcode`, `state`, `country`, `bank_name`, `bank_id`, `bank_acc_no`, `iban`, `vat`, `added_On`) VALUES
(1, '', 'facebook', 'Inactive', 'www.facebook.com', 'Contract', 'Closed', 'Internshala', 'Flipkart', '', '', '', '', 'gamo@com', '213761746812821', 'bangalore', 'Bangalore', '560068', 'Tamil Nadu', 'Australia', 'csb', 'basjhuq1', 'jsaj1223123', 'djwbdjwqjj', 'nkcndnndsa', NULL),
(2, '', 'virtusa', 'Active', 'vir.com', 'Private', 'Information Technology', 'Linkedin', 'Flipkart', 'Andrew foy', 'new company                            ', '6000', '7000', 'vir@gmail.com', '97231919', 'bangalore', 'ADas', '560068', 'Andhra Pradesh', 'India', 'csb', 'basjhuq1', 'jsaj1223123', 'djwbdjwqjj', 'nkcndnndsa', NULL),
(3, '', 'virtusa', 'Inactive', 'www.facebook.com', 'Contract', 'Closed', 'Internshala', '', 'Caley Mike', '                            sdahd', '6000', '7000', 'vir@gmail.com', '213761746812821', 'new castel, town', 'Bangalore', '560068', 'Uttar Pradesh', 'India', 'csb', 'basjhuq1', 'jsaj1223123', 'djwbdjwqjj', 'nkcndnndsa', NULL),
(4, '', 'facebook', 'Active', 'www.facebook.com', 'Private', 'Information Technology', 'Linkedin', 'Flipkart', 'Andrew foy', '                            just', '6000', '33', 'gamo@com', '97231919', 'bangalore', 'Bangalore', '560068', 'Tamil Nadu', 'Australia', 'csb', 'basjhuq1', 'jsaj1223123', 'djwbdjwqjj', 'nkcndnndsa', NULL),
(5, '', 'tcs', 'Active', 'tcs.com', 'Temporary', 'Information Technology', 'Linkedin', 'Flipkart', 'Andrew foy', 'new                            ', '100', '50', 'tcs@gmail.com', '90876545', 'new york', 'new', '786756', 'Tamil Nadu', 'India', 'hsbc', 'hs12', '12345678', 'jh12', '1871', NULL),
(6, 'vinod.png', 'tcs', 'Inactive', 'tcs.com', 'Contract', 'Closed', 'Internshala', 'Amazon', 'Albert', '                            newq', '100', '50', 'tcs@gmail.com', '90876545', 'new york', 'new', '786756', 'Andhra Pradesh', 'Australia', 'hsbc', 'hs12', '12345678', 'scai', '1871', NULL),
(7, 'testPic.png', 'tosca', 'Active', 'tosca@gmail.com', 'Private', 'Information Technology', 'Linkedin', 'Flipkart', 'Albert', 'enviroment support                            ', '100', '50', 'tos@gmail.com', '90876545', 'kolkata', 'kolkta', '786756', 'Andhra Pradesh', 'India', 'hsbc', 'dalsk', '12345678', 'scai', '1871', NULL),
(8, '', 'ahmar', 'Inactive', 'ah@gmail.com', 'Private', 'Information Technology', 'Linkedin', 'Flipkart', 'Andrew foy', '                            new', '1777', '17', 'new@gmail.com', '1234567', 'bangalore', 'Bangalore', '12345', 'Andhra Pradesh', 'India', 'hsbc', 'bf12', '12345678', '1242431', '123', '2022-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `createrecruitment`
--

CREATE TABLE `createrecruitment` (
  `createrecruitement_id` int(11) NOT NULL,
  `job_description` varchar(255) NOT NULL,
  `Position` varchar(255) NOT NULL,
  `Industry` varchar(255) NOT NULL,
  `Jobtype` varchar(255) NOT NULL,
  `client_company` varchar(255) NOT NULL,
  `Contact_at_client_company` varchar(255) NOT NULL,
  `Business_Development_Manager` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Priority` varchar(255) NOT NULL,
  `Job_reference_number` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Recruiters_name` varchar(255) NOT NULL,
  `Number_of_openings` varchar(255) NOT NULL,
  `Start_Date` varchar(255) NOT NULL,
  `End_Date` varchar(255) NOT NULL,
  `Joblocation1` varchar(255) NOT NULL,
  `Joblocation2` varchar(255) NOT NULL,
  `Joblocation3` varchar(255) NOT NULL,
  `Starting_time` varchar(255) NOT NULL,
  `Ending_time` varchar(255) NOT NULL,
  `Client_margin` varchar(255) NOT NULL,
  `Contact_information_for_the_advert` varchar(255) NOT NULL,
  `advert_contact_no` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `Qualifications` varchar(255) NOT NULL,
  `Eligibility_criteria` varchar(255) NOT NULL,
  `Experience_requirement` varchar(255) NOT NULL,
  `Relevant_experience` varchar(255) NOT NULL,
  `Irrelevant_experience` varchar(255) NOT NULL,
  `Roles_and_responsibilities` varchar(255) NOT NULL,
  `Growth_oppurtunities` varchar(255) NOT NULL,
  `Learning_oppurtunities` varchar(255) NOT NULL,
  `Employeee_endorsements` varchar(255) NOT NULL,
  `Employee_benefits` varchar(255) NOT NULL,
  `Reputation_of_organisation` varchar(255) NOT NULL,
  `advert_Job_description` varchar(255) NOT NULL,
  `Workspace_view` varchar(255) NOT NULL,
  `Transportation` varchar(255) NOT NULL,
  `Package_type` varchar(255) NOT NULL,
  `Package_duration` varchar(255) NOT NULL,
  `Package` varchar(255) NOT NULL,
  `Bill_rate` varchar(255) NOT NULL,
  `Markup` varchar(255) NOT NULL,
  `cl_margin` varchar(255) NOT NULL,
  `Days_on` varchar(255) NOT NULL,
  `Days_off` varchar(255) NOT NULL,
  `Shift_pattern` varchar(255) NOT NULL,
  `added_On` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `createrecruitment`
--

INSERT INTO `createrecruitment` (`createrecruitement_id`, `job_description`, `Position`, `Industry`, `Jobtype`, `client_company`, `Contact_at_client_company`, `Business_Development_Manager`, `Status`, `Priority`, `Job_reference_number`, `Designation`, `Recruiters_name`, `Number_of_openings`, `Start_Date`, `End_Date`, `Joblocation1`, `Joblocation2`, `Joblocation3`, `Starting_time`, `Ending_time`, `Client_margin`, `Contact_information_for_the_advert`, `advert_contact_no`, `skills`, `Qualifications`, `Eligibility_criteria`, `Experience_requirement`, `Relevant_experience`, `Irrelevant_experience`, `Roles_and_responsibilities`, `Growth_oppurtunities`, `Learning_oppurtunities`, `Employeee_endorsements`, `Employee_benefits`, `Reputation_of_organisation`, `advert_Job_description`, `Workspace_view`, `Transportation`, `Package_type`, `Package_duration`, `Package`, `Bill_rate`, `Markup`, `cl_margin`, `Days_on`, `Days_off`, `Shift_pattern`, `added_On`) VALUES
(1, '', 'Frontend Developer', 'Uber', 'Part-time', 'Blue yonder', 'Adams', 'John smith', 'Temporary', '2', '2', 'new', 'John Doe', '11', '2020-10-24', '2019-10-24', 'Australia', 'Madhya Pradesh', 'Coimbatore', '01:13', '13:13', '10', 'khalid', '99675634', 'java', '10', '12', '1 year', '2', '1', 'developer`', 'sdbjhbsadjb', 'jsbaj', 'nknskcna', 'kndskacsnska', 'kknsckank', 'knsckank', '', '1', '1', '3 month', 'asa', 'dcac', 'sacc', '', 'ascas', 'scac', 'sacasc', NULL),
(2, '', 'Frontend Developer', 'Intel', 'Part-time', 'Blue yonder', 'Adams', 'Cory Butler', 'Permanent', '2', '2', 'new', 'Chris Do', '101', '2020-09-30', '2021-12-31', 'Australia', 'Madhya Pradesh', 'Coimbatore', '23:58', '22:59', '20', '8736111231', '78654534', 'new', '10+2', 'indian', '10 yrs', '9', '2', 'developer', 'good', 'new10', 'qoqoqo', '100', 'good', 'his', 'testPic.png', '1', '2', '3 month', '10000', '11', '11', '', '12', '11', 'morning', NULL),
(3, 'oop.py', 'UI Developer', 'Intel', 'Part-time', 'Blue yonder', 'Adams', 'John smith', 'Temporary', '2', '2', 'new', 'John Doe', '101', '2018-11-11', '2020-11-30', 'Australia', 'Madhya Pradesh', 'Coimbatore', '22:58', '22:58', '20', '8736111231', '78654534', 'new', '10+2', 'indian', '10 yrs', '9', '2', 'developer', 'good', 'new10', 'qoqoqo', '100', 'good', 'his', 'practice.py', '1', '3', '3 month', '10000', '11', '11', '', '12', '11', 'morning', NULL),
(4, '', 'Android Developer', 'Intel', 'Part-time', 'Adventure works', 'Adams', 'John smith', 'Temporary', '2', '3', 'Developer', 'John Doe', '12', '2022-02-11', '2022-11-12', 'Australia', 'Uttar Pradesh', 'Coimbatore', '12:11', '12:11', '11', 'New', '12342112311', 'java', '12', 'Indian', '1 year', '11 months', '5 months', 'full stack developer', 'high', 'high', 'good', '100000', 'good', 'new', '', '1', '1', '3 month', '12111111', '12', '11', '', '20', '10', 'Night', '2022-01-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcontact`
--
ALTER TABLE `addcontact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `createrecruitment`
--
ALTER TABLE `createrecruitment`
  ADD PRIMARY KEY (`createrecruitement_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcontact`
--
ALTER TABLE `addcontact`
  MODIFY `contact_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `createrecruitment`
--
ALTER TABLE `createrecruitment`
  MODIFY `createrecruitement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
