-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2021 at 04:47 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oes_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alerts`
--

CREATE TABLE `tbl_alerts` (
  `id` int(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alerts`
--

INSERT INTO `tbl_alerts` (`id`, `code`, `description`) VALUES
(1, '9275', 'Department was added successfully'),
(2, '1185', 'Duplicate record found'),
(3, '5426', 'Could not add department'),
(4, '7823', 'Settings applied successfully'),
(5, '1298', 'Could not apply settings'),
(6, '1289', 'Category was added successfully'),
(7, '7732', 'Could not add category'),
(8, '3598', 'Subject was added successfully'),
(9, '1925', 'Could not add subject'),
(10, '6310', 'Student was added successfully, default password is 123456'),
(11, '9157', 'Could not register student'),
(12, '2074', 'Duplicate phone number found'),
(13, '1189', 'Duplicate email found'),
(14, '2932', 'Examination was added successfully'),
(15, '7788', 'Could not add examination'),
(16, '0357', 'New question was added successfully'),
(17, '3903', 'Could not add question'),
(18, '9174', 'Notice was added successfully'),
(19, '6389', 'Could not add notice'),
(20, '9135', 'You must be admin to access the control panel'),
(21, '9422', 'You must login first'),
(22, '0912', 'Invalid username or password'),
(23, '9122', 'You must be a student to acces the exams'),
(24, '5732', 'Your account has been disabled'),
(25, '8924', 'Account not found'),
(26, '1804', 'New password has been sent to you through your email'),
(27, '1100', 'Could not reset your password');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assessment_records`
--

CREATE TABLE `tbl_assessment_records` (
  `record_id` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `exam_name` varchar(255) NOT NULL,
  `exam_id` varchar(255) NOT NULL,
  `score` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `next_retake` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_assessment_records`
--

INSERT INTO `tbl_assessment_records` (`record_id`, `student_id`, `student_name`, `exam_name`, `exam_id`, `score`, `status`, `next_retake`, `date`) VALUES
('RS34544143037207', 'S074-158-772', 'Anuj Arya', 'Testing 2', 'EX-897392', '-8.31', 'FAIL', '1', '21-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `category_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_registered` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`category_id`, `name`, `department`, `description`, `date_registered`, `status`) VALUES
('CT-360093', 'Computer Science', 'B.Tech', 'Computer science involves learning about programming which includes learning the basics of programming, algorithms, data structures and complexity theory. There is a stream known as computer engineering that deals with the \'low level\' and involves the internal circuitry, electronics and power of a computer.', '29-03-2020', 'Active'),
('CT-640239', 'Electronics', 'B.Tech', 'Electronics engineering is that branch of electrical engineering concerned with the uses of the electromagnetic spectrum and with the application of such electronic devices as integrated circuits and transistors. Electrical and electronics engineering.', '29-03-2020', 'Active'),
('CT-741525', 'Civil', 'B.Tech', 'BE Civil Engineering is a 4 year undergraduate engineering degree course. This course deals with the construction, design and maintenance of structures such as bridges, canals, tunnels, buildings, waterworks, airports etc.', '29-03-2020', 'Active'),
('CT-954087', 'Information Technology', 'B.Tech', 'IT Deals With Management Of Computers Rather Than Computation. IT Is A Combination Of Programming, Hardware Administration, Software Administration, Networking And Network Security. Computer Science Is A Wide Field And Includes Algorithms, Complexity Theory, Automata Theory, Distributed Computation, Parallel Computation Architecture, Machine Learning, Cryptography, Compiler Construction, Microprocessors, Embedded Systems, Computer Architecture And Organization, Computer Graphics, Database Management Systems, Digital Signal Processing, Operating Systems And Control Systems Engineering.', '11-07-2021', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contacts`
--

CREATE TABLE `tbl_contacts` (
  `contact_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` mediumtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contacts`
--

INSERT INTO `tbl_contacts` (`contact_id`, `name`, `email`, `subject`, `message`, `date`) VALUES
('CONT-673300', 'Xyz', 'xyz@gmail.com', 'Xyz', 'Xyz', '2021-07-11 06:07:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_departments`
--

CREATE TABLE `tbl_departments` (
  `department_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_registered` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_departments`
--

INSERT INTO `tbl_departments` (`department_id`, `name`, `description`, `date_registered`, `status`) VALUES
('DP-072313', 'MCA', 'MCA (Master Of Computer Applications) Is A Professional Master\'s Degree In Computer Science. It Focuses On Providing A Theoretical As Well As Practical Training To Students In The Related Field', '11-07-2021', 'Active'),
('DP-546891', 'B.Tech', 'B. Tech Or Bachelor Of Technology Is An Undergraduate Degree Programme In The Engineering Field. It Is Offered In Various Disciplines Like Computer Science And Engineering, Civil Engineering, Mechanical Engineering, Electrical Engineering, Electronics Engineering Etc', '11-07-2021', 'Active'),
('DP-620005', 'BCA', 'Academics. Bachelor Of Computer Applications (B. C. A.) Is An Undergraduate Programme To Start Career In Computer Science. ... The Programme Also Carries Out The Required Analysis And Synthesis Involved In Computer Systems, Information Systems And Computer Applications.', '11-07-2021', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_examinations`
--

CREATE TABLE `tbl_examinations` (
  `exam_id` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `exam_name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `duration` time NOT NULL,
  `end_duration` time NOT NULL,
  `passmark` int(255) NOT NULL,
  `re_exam` int(255) NOT NULL,
  `terms` longtext NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_examinations`
--

INSERT INTO `tbl_examinations` (`exam_id`, `category`, `subject`, `exam_name`, `date`, `end_date`, `duration`, `end_duration`, `passmark`, `re_exam`, `terms`, `status`) VALUES
('EX-897392', 'Information Technology', 'Algorithm', 'Testing 2', '08/13/2021', '08/13/2021', '11:10:00', '11:30:00', 50, 1, 'Terms and Conditions apply.', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notice`
--

CREATE TABLE `tbl_notice` (
  `id` int(255) NOT NULL,
  `notice_id` varchar(255) NOT NULL,
  `post_date` varchar(255) NOT NULL,
  `last_update` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notice`
--

INSERT INTO `tbl_notice` (`id`, `notice_id`, `post_date`, `last_update`, `description`, `title`) VALUES
(1, 'NT-60920607', '19/12/2017 01:16:53', '19/12/2017 01:16:53', 'every student is required to take his/her assessment on time, fail to do that the instructor wont re-enable the assessment again.', 'Assessments'),
(2, 'NT-78455397', '29/03/2020 05:48:00', '29/03/2020 05:48:00', 'Exam start in just a minute', 'Exam Start ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_questions`
--

CREATE TABLE `tbl_questions` (
  `question_id` varchar(255) NOT NULL,
  `exam_id` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `question` longtext NOT NULL,
  `option1` text NOT NULL,
  `option2` text NOT NULL,
  `option3` text NOT NULL,
  `option4` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_questions`
--

INSERT INTO `tbl_questions` (`question_id`, `exam_id`, `type`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
('QS-473127', 'EX-897392', 'MC', 'who is our prime minister?', 'narendra modi', 'amit shah', 'rajnath singh', 'ramnath kovind', 'narendra modi'),
('QS-703880', 'EX-897392', 'MC', '<p>this is new question.</p>\r\n', 'abc', 'bcd', 'def', 'feg', 'def'),
('QS-867058', 'EX-127128', 'MC', ' __________ is one of the field types in MS-Access.', 'Double', 'Float', 'Memo', 'None of these', 'option3'),
('QS-895506', 'EX-088849', 'FB', 'adsfasfasdf', '-', '-', '-', '-', 'as'),
('QS-897860', 'EX-897392', 'MC', 'this is another question.', 'ans1', 'ans2', 'ans3', 'ans4', 'option2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_result`
--

CREATE TABLE `tbl_result` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `totalQ` int(11) NOT NULL,
  `attempted` int(11) NOT NULL,
  `correct` int(11) NOT NULL,
  `incorrect` int(11) NOT NULL,
  `score` float NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `subTime` time NOT NULL,
  `subDate` varchar(255) NOT NULL,
  `exam_id` varchar(255) NOT NULL,
  `exam_c` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_result`
--

INSERT INTO `tbl_result` (`id`, `subject`, `totalQ`, `attempted`, `correct`, `incorrect`, `score`, `student_id`, `subTime`, `subDate`, `exam_id`, `exam_c`) VALUES
(53, 'Algorithm', 3, 3, 2, 1, 63.92, 'S074-158-772', '19:42:24', '03/30/2020', 'EX-897392', 'Testing 2'),
(54, 'Algorithm', 3, 3, 2, 1, 63.92, 'S074-158-772', '19:47:56', '03/30/2020', 'EX-897392', ''),
(55, 'Algorithm', 3, 2, 2, 0, 66.67, 'S074-158-772', '19:55:17', '03/30/2020', 'EX-897392', ''),
(56, 'Algorithm', 3, 2, 2, 0, 66.67, 'S074-158-772', '19:56:14', '03/30/2020', 'EX-897392', 'Testing 2'),
(57, 'Algorithm', 3, 2, 2, 0, 66.67, 'S074-158-772', '20:18:03', '03/30/2020', 'EX-897392', 'Testing 2'),
(58, 'Algorithm', 3, 2, 0, 2, -5.58, 'S074-158-772', '14:20:31', '04/01/2020', 'EX-897392', 'Testing 2'),
(59, 'Algorithm', 4, 4, 0, 4, -8.31, 'S074-158-772', '17:32:56', '07/10/2021', 'EX-897392', 'Testing 2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subjects`
--

CREATE TABLE `tbl_subjects` (
  `subject_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `date_registered` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subjects`
--

INSERT INTO `tbl_subjects` (`subject_id`, `name`, `department`, `category`, `date_registered`, `status`) VALUES
('SB-265730', 'Algorithm', 'B.Tech', 'Information Technology', '29-03-2020', 'Active'),
('SB-589664', 'Data Structures', 'B.Tech', 'Information Technology', '29-03-2020', 'Active'),
('SB-824814', 'Computer Architecture', 'B.Tech', 'Information Technology', '29-03-2020', 'Active'),
('SB-880508', 'Software Engineering', 'B.Tech', 'Information Technology', '29-03-2020', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_super_admins`
--

CREATE TABLE `tbl_super_admins` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `acc_stat` varchar(255) NOT NULL DEFAULT '1',
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_super_admins`
--

INSERT INTO `tbl_super_admins` (`id`, `email`, `password`, `acc_stat`, `role`) VALUES
(1, 'sanskar@gmail.com', '123', '1', 'super_admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL DEFAULT '-',
  `category` varchar(255) NOT NULL DEFAULT '-',
  `login` varchar(255) NOT NULL DEFAULT 'e10adc3949ba59abbe56e057f20f883e',
  `role` varchar(255) NOT NULL DEFAULT 'student',
  `avatar` longblob DEFAULT NULL,
  `acc_stat` varchar(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `first_name`, `last_name`, `gender`, `dob`, `address`, `email`, `phone`, `department`, `category`, `login`, `role`, `avatar`, `acc_stat`) VALUES
('S048-501-004', 'Sanskar', 'Goyal', 'Male', '08/10/2021', 'saddfasfas', 'sanskargoyal@gmail.com', '98708911711', '', '', 'sanskar', 'admin', NULL, '1'),
('S074-158-772', 'Anuj', 'Arya', 'Male', '12/14/1998', 'Saharanpur', 'anujarya6121998@gmail.com', '08989898989', 'B.Tech', 'Information Technology', 'anuj', 'student', '', '1'),
('S782-515-176', 'Xyz', 'Xyz', 'Male', '07/14/2021', 'Xyz', 'xyz@gmail.com', '1234567890', 'B.Tech', 'Information Technology', 'xyz', 'faculty', NULL, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_alerts`
--
ALTER TABLE `tbl_alerts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `tbl_assessment_records`
--
ALTER TABLE `tbl_assessment_records`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_contacts`
--
ALTER TABLE `tbl_contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_departments`
--
ALTER TABLE `tbl_departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `tbl_examinations`
--
ALTER TABLE `tbl_examinations`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `notice_id` (`notice_id`);

--
-- Indexes for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `tbl_result`
--
ALTER TABLE `tbl_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subjects`
--
ALTER TABLE `tbl_subjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `tbl_super_admins`
--
ALTER TABLE `tbl_super_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_alerts`
--
ALTER TABLE `tbl_alerts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_result`
--
ALTER TABLE `tbl_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tbl_super_admins`
--
ALTER TABLE `tbl_super_admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
