-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2017 at 01:08 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `asgn`
--

CREATE TABLE `asgn` (
  `asgn_ID` int(11) NOT NULL,
  `asgn_no` int(11) NOT NULL,
  `asgn_high_grade` int(11) DEFAULT NULL,
  `asgn_high_url` varchar(455) DEFAULT NULL,
  `asgn_avg_grade` int(11) DEFAULT NULL,
  `asgn_avg_url` varchar(455) DEFAULT NULL,
  `asgn_low_grade` int(11) DEFAULT NULL,
  `asgn_low_url` varchar(455) DEFAULT NULL,
  `users_has_courses1_users_users_ID` int(11) NOT NULL,
  `users_has_courses1_courses_course_ID` int(11) NOT NULL,
  `asgn_date` datetime(2) DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `asgn`
--

INSERT INTO `asgn` (`asgn_ID`, `asgn_no`, `asgn_high_grade`, `asgn_high_url`, `asgn_avg_grade`, `asgn_avg_url`, `asgn_low_grade`, `asgn_low_url`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`, `asgn_date`) VALUES
(4, 1, 20, '/project/uploads/asgn/IT242-21105assignment-1-HighMark.docx', 15, '/project/uploads/asgn/IT242-21105assignment-1-AverageMark.docx', 5, '/project/uploads/asgn/IT242-21105assignment-1-LowMark.docx', 1, 21105, '2017-12-02 02:23:32.82');

-- --------------------------------------------------------

--
-- Table structure for table `asgn_avg`
--

CREATE TABLE `asgn_avg` (
  `asgn_avg_ID` int(11) NOT NULL,
  `asgn_avg_no` int(11) DEFAULT NULL,
  `asgn_avg_grade` varchar(45) DEFAULT NULL,
  `asgn_avg_url` varchar(455) DEFAULT NULL,
  `users_has_courses1_users_users_ID` int(11) NOT NULL,
  `users_has_courses1_courses_course_ID` int(11) NOT NULL,
  `asgn_avg_date` datetime(2) DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `asgn_avg`
--

INSERT INTO `asgn_avg` (`asgn_avg_ID`, `asgn_avg_no`, `asgn_avg_grade`, `asgn_avg_url`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`, `asgn_avg_date`) VALUES
(5, 1, '10', '/project/uploads/asgn/IT242-21105assignment-1-AverageMark.docx', 1, 21105, '2017-12-01 00:00:00.00'),
(6, 2, '10', '/project/uploads/asgn/IT242-21105assignment-2-AverageMark.docx', 1, 21105, '2017-12-01 00:00:00.00');

-- --------------------------------------------------------

--
-- Table structure for table `asgn_high`
--

CREATE TABLE `asgn_high` (
  `asgn_high_ID` int(11) NOT NULL,
  `asgn_high_no` int(11) DEFAULT NULL,
  `asgn_high_grade` varchar(45) DEFAULT NULL,
  `asgn_high_url` varchar(455) DEFAULT NULL,
  `users_has_courses1_users_users_ID` int(11) NOT NULL,
  `users_has_courses1_courses_course_ID` int(11) NOT NULL,
  `asgn_high_date` datetime(2) DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `asgn_high`
--

INSERT INTO `asgn_high` (`asgn_high_ID`, `asgn_high_no`, `asgn_high_grade`, `asgn_high_url`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`, `asgn_high_date`) VALUES
(5, 1, '20', '/project/uploads/asgn/IT242-21105assignment-1-HighMark.docx', 1, 21105, '2017-11-29 22:08:18.91'),
(6, 2, '20', '/project/uploads/asgn/IT242-21105assignment-2-HighMark.docx', 1, 21105, '2017-12-01 22:02:39.03');

-- --------------------------------------------------------

--
-- Table structure for table `asgn_low`
--

CREATE TABLE `asgn_low` (
  `asgn_low_ID` int(11) NOT NULL,
  `asgn_low_no` int(11) DEFAULT NULL,
  `asgn_low_grade` varchar(45) DEFAULT NULL,
  `asgn_low_url` varchar(455) DEFAULT NULL,
  `users_has_courses1_users_users_ID` int(11) NOT NULL,
  `users_has_courses1_courses_course_ID` int(11) NOT NULL,
  `asgn_low_date` datetime(2) DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `asgn_low`
--

INSERT INTO `asgn_low` (`asgn_low_ID`, `asgn_low_no`, `asgn_low_grade`, `asgn_low_url`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`, `asgn_low_date`) VALUES
(5, 1, '5', '/project/uploads/asgn/IT242-21105assignment-1-LowMark.docx', 1, 21105, '2017-12-01 00:00:00.00'),
(6, 2, '5', '/project/uploads/asgn/IT242-21105assignment-2-LowMark.docx', 1, 21105, '2017-12-01 00:00:00.00');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comments_ID` int(11) NOT NULL,
  `comm_` varchar(45) DEFAULT NULL,
  `users_has_courses1_users_users_ID` int(11) NOT NULL,
  `users_has_courses1_courses_course_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_ID` int(11) NOT NULL,
  `course_title` varchar(45) DEFAULT NULL,
  `course_code` varchar(45) DEFAULT NULL,
  `credit_hours` int(11) DEFAULT NULL,
  `contact_hours` int(11) DEFAULT NULL,
  `dept_dept_ID` int(11) NOT NULL,
  `semster` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_ID`, `course_title`, `course_code`, `credit_hours`, `contact_hours`, `dept_dept_ID`, `semster`) VALUES
(10369, 'Database Management Systems', 'IT344', 3, 60, 1, 'LEVEL 6'),
(21105, 'Software Engineering ', 'IT242', 3, 60, 1, 'semester 2'),
(21106, 'System Integration', 'IT440', 3, 45, 1, 'Level 7'),
(21108, 'Advanced Web Development', 'IT442', 3, 60, 1, 'semester 2'),
(21110, 'IT Security & Policies', 'IT409', 3, 60, 1, 'LEVEL 9'),
(21113, 'Network Security', 'IT413', 3, 45, 1, 'semester 2'),
(21130, 'Database Administration', 'IT444', 3, 60, 1, 'LEVEL 9'),
(66320, 'test', 'ittest', 1, 1, 2, 'LEVEL 9000'),
(21110123, 'IT Security & Policies2', 'IT409123', 123, 123, 1, 'LEVEL 9000');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `dept_ID` int(11) NOT NULL,
  `dept_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`dept_ID`, `dept_name`) VALUES
(1, 'College of computing and informatics'),
(2, 'College of Health Science'),
(3, 'College of Law');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `exam_ID` int(11) NOT NULL,
  `exam_type` varchar(45) NOT NULL,
  `exam_high_grade` int(11) DEFAULT NULL,
  `exam_avg_grade` int(11) DEFAULT NULL,
  `exam_low_grade` int(11) DEFAULT NULL,
  `exam_high_url` varchar(455) DEFAULT NULL,
  `exam_avg_url` varchar(455) DEFAULT NULL,
  `exam_low_url` varchar(455) DEFAULT NULL,
  `users_has_courses1_users_users_ID` int(11) NOT NULL,
  `users_has_courses1_courses_course_ID` int(11) NOT NULL,
  `exam_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`exam_ID`, `exam_type`, `exam_high_grade`, `exam_avg_grade`, `exam_low_grade`, `exam_high_url`, `exam_avg_url`, `exam_low_url`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`, `exam_date`) VALUES
(2, 'Midterm', 25, 20, 10, '/project/uploads/exam/IT242-21105-Midterm-HighMark.docx', '/project/uploads/exam/IT242-21105-Midterm-AverageMark.docx', '/project/uploads/exam/IT242-21105-Midterm-LowMark.docx', 1, 21105, '2017-12-03 09:46:18'),
(3, 'Final', 50, 25, 10, '/project/uploads/exam/IT242-21105-Final-HighMark.docx', '/project/uploads/exam/IT242-21105-Final-AverageMark.docx', '/project/uploads/exam/IT242-21105-Final-LowMark.docx', 1, 21105, '2017-12-03 16:11:26');

-- --------------------------------------------------------

--
-- Table structure for table `exams_final`
--

CREATE TABLE `exams_final` (
  `exam_final_ID` int(11) NOT NULL,
  `final_high_grade` int(11) DEFAULT NULL,
  `final_avg_grade` int(11) DEFAULT NULL,
  `final_low_grade` int(11) DEFAULT NULL,
  `final_high_url` varchar(455) DEFAULT NULL,
  `final_avg_url` varchar(455) DEFAULT NULL,
  `final_low_url` varchar(455) DEFAULT NULL,
  `users_has_courses1_users_users_ID` int(11) NOT NULL,
  `users_has_courses1_courses_course_ID` int(11) NOT NULL,
  `final_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exams_final`
--

INSERT INTO `exams_final` (`exam_final_ID`, `final_high_grade`, `final_avg_grade`, `final_low_grade`, `final_high_url`, `final_avg_url`, `final_low_url`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`, `final_date`) VALUES
(1, 50, 25, 15, '/project/uploads/exam/IT242-21105-Final-HighMark.docx', '/project/uploads/exam/IT242-21105-Final-AverageMark.docx', '/project/uploads/exam/IT242-21105-Final-LowMark.docx', 1, 21105, '2017-12-03 09:48:30');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_ID` int(11) NOT NULL,
  `role_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_ID`, `role_name`) VALUES
(1, 'Instructor'),
(2, 'Coordinator'),
(3, 'Quality Assurance Coordinator'),
(4, 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `roles_has_users`
--

CREATE TABLE `roles_has_users` (
  `roles_role_ID` int(11) NOT NULL,
  `users_users_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles_has_users`
--

INSERT INTO `roles_has_users` (`roles_role_ID`, `users_users_ID`) VALUES
(1, 1),
(1, 19),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(2, 2),
(2, 25),
(2, 27),
(2, 28),
(2, 30),
(2, 31),
(3, 3),
(3, 13),
(3, 27),
(4, 1),
(4, 4),
(4, 13);

-- --------------------------------------------------------

--
-- Table structure for table `t5_admin_issues`
--

CREATE TABLE `t5_admin_issues` (
  `t5_admin_org_diff` varchar(45) DEFAULT NULL,
  `t5_admin_cons_diff` varchar(45) DEFAULT NULL,
  `t5_report_t5_report_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_users_users_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_courses_course_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t5_cd_cons_of_non_cov_topics`
--

CREATE TABLE `t5_cd_cons_of_non_cov_topics` (
  `t5_cd_topics_not_fully_covered` varchar(45) DEFAULT NULL,
  `t5_cd_effected_lrn_out` varchar(45) DEFAULT NULL,
  `t5_cd_possible_action` varchar(45) DEFAULT NULL,
  `t5_report_t5_report_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_users_users_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_courses_course_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t5_cd_course_lrn_out_asses`
--

CREATE TABLE `t5_cd_course_lrn_out_asses` (
  `t5_cd_list_lrn_out` varchar(45) DEFAULT NULL,
  `t5_cd_list_asses_lo` varchar(45) DEFAULT NULL,
  `t5_cd_summ` varchar(45) DEFAULT NULL,
  `t5_cd_summ_recom` varchar(45) DEFAULT NULL,
  `t5_report_t5_report_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_users_users_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_courses_course_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t5_cd_coverage_of_planned_prog`
--

CREATE TABLE `t5_cd_coverage_of_planned_prog` (
  `t5_cd_topics_covered` varchar(455) DEFAULT NULL,
  `t5_cd_planned_ch` int(11) DEFAULT NULL,
  `t5_cd_actual_ch` int(11) DEFAULT NULL,
  `t5_cd_variation` varchar(45) DEFAULT NULL,
  `t5_report_t5_report_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_users_users_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_courses_course_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t5_cd_effc_teach_stra`
--

CREATE TABLE `t5_cd_effc_teach_stra` (
  `t5_cd_list_teach_methods` varchar(45) DEFAULT NULL,
  `t5_cd_were_they_effc` varchar(45) DEFAULT NULL,
  `t5_cd_diff_action` varchar(45) DEFAULT NULL,
  `t5_report_t5_report_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_users_users_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_courses_course_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t5_ce_other_eva`
--

CREATE TABLE `t5_ce_other_eva` (
  `t5_ce_list_imp_recom` varchar(45) DEFAULT NULL,
  `t5_ce_response` varchar(45) DEFAULT NULL,
  `t5_report_t5_report_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_users_users_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_courses_course_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t5_ce_students_eva`
--

CREATE TABLE `t5_ce_students_eva` (
  `t5_ce_list_imp_recom` varchar(45) DEFAULT NULL,
  `t5_ce_response` varchar(45) DEFAULT NULL,
  `t5_report_t5_report_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_users_users_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_courses_course_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t5_course_components_contact_hours`
--

CREATE TABLE `t5_course_components_contact_hours` (
  `t5_lecture_ch` int(11) DEFAULT NULL,
  `t5_tutorial_ch` int(11) DEFAULT NULL,
  `t5_lab_ch` int(11) DEFAULT NULL,
  `t5_prac_ch` int(11) DEFAULT NULL,
  `t5_other_ch` int(11) DEFAULT NULL,
  `t5_total_ch` int(11) DEFAULT NULL,
  `t5_report_t5_report_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_users_users_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_courses_course_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t5_course_components_credit_hours`
--

CREATE TABLE `t5_course_components_credit_hours` (
  `t5_lecture_credit_h` int(11) DEFAULT NULL,
  `t5_tutorial_credit_h` int(11) DEFAULT NULL,
  `t5_lab_credit_h` int(11) DEFAULT NULL,
  `t5_prac_credit_h` int(11) DEFAULT NULL,
  `t5_other_credit_h` int(11) DEFAULT NULL,
  `t5_total_credit_h` int(11) DEFAULT NULL,
  `t5_report_t5_report_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_users_users_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_courses_course_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t5_dg_students_grade_ver`
--

CREATE TABLE `t5_dg_students_grade_ver` (
  `t5_dg_method_of_ver` varchar(45) DEFAULT NULL,
  `t5_dg_conclusion` varchar(45) DEFAULT NULL,
  `t5_report_t5_report_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_users_users_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_courses_course_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t5_dg_variation_students_asses_process`
--

CREATE TABLE `t5_dg_variation_students_asses_process` (
  `t5_dg_variation_process` varchar(45) DEFAULT NULL,
  `t5_dg_variation` varchar(45) DEFAULT NULL,
  `t5_dg_variation_reason` varchar(45) DEFAULT NULL,
  `t5_report_t5_report_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_users_users_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_courses_course_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t5_dis_grades`
--

CREATE TABLE `t5_dis_grades` (
  `t5_dg_lg` varchar(45) DEFAULT NULL,
  `t5_dg_no_of_students` int(11) DEFAULT NULL,
  `t5_dg_students_per` int(11) DEFAULT NULL,
  `t5_dg_analysis` varchar(45) DEFAULT NULL,
  `t5_dg_special_factors` varchar(45) DEFAULT NULL,
  `t5_report_t5_report_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_users_users_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_courses_course_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t5_poi_action_plan_for_nxt_sem`
--

CREATE TABLE `t5_poi_action_plan_for_nxt_sem` (
  `t5_poi_action_recom_imp` varchar(45) DEFAULT NULL,
  `t5_poi_intent_action` varchar(45) DEFAULT NULL,
  `t5_poi_start_date` date DEFAULT NULL,
  `t5_poi_comp_date` date DEFAULT NULL,
  `t5_poi_person_resp` varchar(45) DEFAULT NULL,
  `t5_report_t5_report_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_users_users_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_courses_course_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t5_poi_other_actions`
--

CREATE TABLE `t5_poi_other_actions` (
  `t5_poi_list_other_actions` varchar(45) DEFAULT NULL,
  `t5_report_t5_report_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_users_users_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_courses_course_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t5_poi_prog_on_actions`
--

CREATE TABLE `t5_poi_prog_on_actions` (
  `t5_poi_action_recom` varchar(45) DEFAULT NULL,
  `t5_poi_action_taken` varchar(45) DEFAULT NULL,
  `t5_poi_action_results` varchar(45) DEFAULT NULL,
  `t5_poi_action_analysis` varchar(45) DEFAULT NULL,
  `t5_report_t5_report_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_users_users_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_courses_course_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t5_report`
--

CREATE TABLE `t5_report` (
  `t5_report_ID` int(11) NOT NULL,
  `institution` varchar(455) DEFAULT NULL,
  `no_of_students_start` int(11) DEFAULT NULL,
  `no_of_students_finish` int(11) DEFAULT NULL,
  `t5_date_report_comp` date DEFAULT NULL,
  `users_has_courses1_users_users_ID` int(11) NOT NULL,
  `users_has_courses1_courses_course_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t5_resource_facilities`
--

CREATE TABLE `t5_resource_facilities` (
  `t5_rf_diff_in_access` varchar(45) DEFAULT NULL,
  `t5_rf_cons_diff` varchar(45) DEFAULT NULL,
  `t5_report_t5_report_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_users_users_ID` int(11) NOT NULL,
  `t5_report_users_has_courses1_courses_course_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_ID` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `user_password` varchar(45) DEFAULT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `user_email` varchar(45) DEFAULT NULL,
  `user_sign` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_ID`, `username`, `user_password`, `first_name`, `last_name`, `user_email`, `user_sign`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'mohammed', 'ali', 'admin@localhost', '/project/uploads/sign/mohammed-admin.png'),
(2, 'admin_cr', '202cb962ac59075b964b07152d234b70', 'khaled', 'saeed', 'admin@localhost', '/project/uploads/sign/khaled-admin_cr.png'),
(3, 'admin_qa', '202cb962ac59075b964b07152d234b70', 'salem', 'hassan', 'admin@localhost', NULL),
(4, 'admincp', '202cb962ac59075b964b07152d234b70', 'addullah', 'husain', 'admin@localhost', NULL),
(13, 'name', '202cb962ac59075b964b07152d234b70', 'abdullah', 'hassan', 'email@email.com', NULL),
(19, 'salehi', '289dff07669d7a23de0ef88d2f7129e7', 'saleh', 'saleh', 'email@email.com', '/project/uploads/sign/saleh-salehi.jpg'),
(23, 'tommy', '202cb962ac59075b964b07152d234b70', 'tommy', 'turner', 'email@email.com', '/project/uploads/sign/tommy-tommy.png'),
(24, 'lololo', '202cb962ac59075b964b07152d234b70', 'lololol', 'lololololo', 'admin@localhost', '/project/uploads/sign/lololol-lololo.png'),
(25, 'userme', '202cb962ac59075b964b07152d234b70', 'abdullah', 'hassan', 'admin@localhost', '/project/uploads/sign/abdullah-userme.png'),
(26, 'dddddddd', '4d6d955ca289f82e3a6e1f52f40108f3', 'ddddddddddddddd', 'dddddddd', 'admin@localhost', '/project/uploads/sign/ddddddddddddddd-ddddddd'),
(27, 'ffff', '343d9040a671c45832ee5381860e2996', 'Lucy', 'Litton', 'admin@localhost', '/project/uploads/sign/Lucy-ffff.png'),
(28, 'asasasasasas', 'b6d78e18e10fc1aa0b2f3eb068b658da', 'Lucy', 'Litton', 'admin@localhost', '/project/uploads/sign/Lucy-asasasasasas.png'),
(30, 'arwa', '202cb962ac59075b964b07152d234b70', 'Lucy', 'Litton', 'email@email.com', '/project/uploads/sign/Lucy-arwa.png'),
(31, 'stud', '202cb962ac59075b964b07152d234b70', 'abdullah', 'hassan', 'admin@localhost', '/project/uploads/sign/abdullah-stud.png'),
(32, 'tariqm', '202cb962ac59075b964b07152d234b70', 'tariq', 'mohammed', 'admin@localhost', '/project/uploads/sign/tariq-tariqm.png'),
(33, 'salema', '202cb962ac59075b964b07152d234b70', 'salem', 'ali', 'admin@localhost', '/project/uploads/sign/salem-salema.png'),
(34, 'rtrtert', '202cb962ac59075b964b07152d234b70', 'Lucy', 'Litton', 'admin@localhost', '/project/uploads/sign/Lucy-rtrtert.png'),
(35, 'ghghnvbn55', '202cb962ac59075b964b07152d234b70', 'Lucy', 'Litton', 'admin@localhost', '/project/uploads/sign/Lucy-ghghnvbn.png');

-- --------------------------------------------------------

--
-- Table structure for table `users_has_courses1`
--

CREATE TABLE `users_has_courses1` (
  `users_users_ID` int(11) NOT NULL,
  `courses_course_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_has_courses1`
--

INSERT INTO `users_has_courses1` (`users_users_ID`, `courses_course_ID`) VALUES
(1, 21105),
(1, 21106),
(27, 10369),
(28, 21105),
(30, 21105),
(30, 21106),
(31, 21108),
(32, 21130),
(32, 21110123),
(33, 21108),
(33, 21110),
(33, 21113),
(34, 21106),
(35, 10369),
(35, 21105),
(35, 21106);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comments_ID`,`users_has_courses1_users_users_ID`,`users_has_courses1_courses_course_ID`),
  ADD KEY `fk_comments_users_has_courses11_idx` (`users_has_courses1_users_users_ID`,`users_has_courses1_courses_course_ID`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_ID`,`dept_dept_ID`),
  ADD KEY `fk_courses_dept1_idx` (`dept_dept_ID`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`dept_ID`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`exam_ID`,`users_has_courses1_users_users_ID`,`users_has_courses1_courses_course_ID`),
  ADD KEY `fk_exam_marks_users_has_courses11_idx` (`users_has_courses1_users_users_ID`,`users_has_courses1_courses_course_ID`);

--
-- Indexes for table `exams_final`
--
ALTER TABLE `exams_final`
  ADD PRIMARY KEY (`exam_final_ID`,`users_has_courses1_users_users_ID`,`users_has_courses1_courses_course_ID`),
  ADD KEY `fk_exam_marks_users_has_courses11_idx` (`users_has_courses1_users_users_ID`,`users_has_courses1_courses_course_ID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_ID`);

--
-- Indexes for table `roles_has_users`
--
ALTER TABLE `roles_has_users`
  ADD PRIMARY KEY (`roles_role_ID`,`users_users_ID`),
  ADD KEY `fk_roles_has_users_users1_idx` (`users_users_ID`),
  ADD KEY `fk_roles_has_users_roles1_idx` (`roles_role_ID`);

--
-- Indexes for table `t5_admin_issues`
--
ALTER TABLE `t5_admin_issues`
  ADD PRIMARY KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`);

--
-- Indexes for table `t5_cd_cons_of_non_cov_topics`
--
ALTER TABLE `t5_cd_cons_of_non_cov_topics`
  ADD PRIMARY KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`);

--
-- Indexes for table `t5_cd_course_lrn_out_asses`
--
ALTER TABLE `t5_cd_course_lrn_out_asses`
  ADD PRIMARY KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`);

--
-- Indexes for table `t5_cd_coverage_of_planned_prog`
--
ALTER TABLE `t5_cd_coverage_of_planned_prog`
  ADD PRIMARY KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`);

--
-- Indexes for table `t5_cd_effc_teach_stra`
--
ALTER TABLE `t5_cd_effc_teach_stra`
  ADD PRIMARY KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`);

--
-- Indexes for table `t5_ce_other_eva`
--
ALTER TABLE `t5_ce_other_eva`
  ADD PRIMARY KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`);

--
-- Indexes for table `t5_ce_students_eva`
--
ALTER TABLE `t5_ce_students_eva`
  ADD PRIMARY KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`);

--
-- Indexes for table `t5_course_components_contact_hours`
--
ALTER TABLE `t5_course_components_contact_hours`
  ADD PRIMARY KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`);

--
-- Indexes for table `t5_course_components_credit_hours`
--
ALTER TABLE `t5_course_components_credit_hours`
  ADD PRIMARY KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`);

--
-- Indexes for table `t5_dg_students_grade_ver`
--
ALTER TABLE `t5_dg_students_grade_ver`
  ADD PRIMARY KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`);

--
-- Indexes for table `t5_dg_variation_students_asses_process`
--
ALTER TABLE `t5_dg_variation_students_asses_process`
  ADD PRIMARY KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`);

--
-- Indexes for table `t5_dis_grades`
--
ALTER TABLE `t5_dis_grades`
  ADD PRIMARY KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`);

--
-- Indexes for table `t5_poi_action_plan_for_nxt_sem`
--
ALTER TABLE `t5_poi_action_plan_for_nxt_sem`
  ADD PRIMARY KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`);

--
-- Indexes for table `t5_poi_other_actions`
--
ALTER TABLE `t5_poi_other_actions`
  ADD PRIMARY KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`);

--
-- Indexes for table `t5_poi_prog_on_actions`
--
ALTER TABLE `t5_poi_prog_on_actions`
  ADD PRIMARY KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`);

--
-- Indexes for table `t5_report`
--
ALTER TABLE `t5_report`
  ADD PRIMARY KEY (`t5_report_ID`,`users_has_courses1_users_users_ID`,`users_has_courses1_courses_course_ID`),
  ADD KEY `fk_t5_report_users_has_courses11_idx` (`users_has_courses1_users_users_ID`,`users_has_courses1_courses_course_ID`);

--
-- Indexes for table `t5_resource_facilities`
--
ALTER TABLE `t5_resource_facilities`
  ADD PRIMARY KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_ID`);

--
-- Indexes for table `users_has_courses1`
--
ALTER TABLE `users_has_courses1`
  ADD PRIMARY KEY (`users_users_ID`,`courses_course_ID`),
  ADD KEY `fk_users_has_courses1_courses1_idx` (`courses_course_ID`),
  ADD KEY `fk_users_has_courses1_users1_idx` (`users_users_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asgn`
--
ALTER TABLE `asgn`
  MODIFY `asgn_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `asgn_avg`
--
ALTER TABLE `asgn_avg`
  MODIFY `asgn_avg_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `asgn_high`
--
ALTER TABLE `asgn_high`
  MODIFY `asgn_high_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `asgn_low`
--
ALTER TABLE `asgn_low`
  MODIFY `asgn_low_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comments_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `dept_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `exam_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `exams_final`
--
ALTER TABLE `exams_final`
  MODIFY `exam_final_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t5_report`
--
ALTER TABLE `t5_report`
  MODIFY `t5_report_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comments_users_has_courses11` FOREIGN KEY (`users_has_courses1_users_users_ID`,`users_has_courses1_courses_course_ID`) REFERENCES `users_has_courses1` (`users_users_ID`, `courses_course_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `fk_courses_dept1` FOREIGN KEY (`dept_dept_ID`) REFERENCES `dept` (`dept_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `fk_exam_marks_users_has_courses11` FOREIGN KEY (`users_has_courses1_users_users_ID`,`users_has_courses1_courses_course_ID`) REFERENCES `users_has_courses1` (`users_users_ID`, `courses_course_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exams_final`
--
ALTER TABLE `exams_final`
  ADD CONSTRAINT `fk_users_has_courses1_users_users_ID_123` FOREIGN KEY (`users_has_courses1_users_users_ID`,`users_has_courses1_courses_course_ID`) REFERENCES `users_has_courses1` (`users_users_ID`, `courses_course_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `roles_has_users`
--
ALTER TABLE `roles_has_users`
  ADD CONSTRAINT `fk_roles_has_users_roles1` FOREIGN KEY (`roles_role_ID`) REFERENCES `roles` (`role_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_roles_has_users_users1` FOREIGN KEY (`users_users_ID`) REFERENCES `users` (`users_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t5_admin_issues`
--
ALTER TABLE `t5_admin_issues`
  ADD CONSTRAINT `fk_t5_admin_issues_t5_report1` FOREIGN KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`) REFERENCES `t5_report` (`t5_report_ID`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `t5_cd_cons_of_non_cov_topics`
--
ALTER TABLE `t5_cd_cons_of_non_cov_topics`
  ADD CONSTRAINT `fk_t5_cd_cons_of_non_cov_topics_t5_report1` FOREIGN KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`) REFERENCES `t5_report` (`t5_report_ID`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `t5_cd_course_lrn_out_asses`
--
ALTER TABLE `t5_cd_course_lrn_out_asses`
  ADD CONSTRAINT `fk_t5_cd_course_lrn_out_asses_t5_report1` FOREIGN KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`) REFERENCES `t5_report` (`t5_report_ID`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `t5_cd_coverage_of_planned_prog`
--
ALTER TABLE `t5_cd_coverage_of_planned_prog`
  ADD CONSTRAINT `fk_t5_cd_coverage_of_planned_prog_t5_report1` FOREIGN KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`) REFERENCES `t5_report` (`t5_report_ID`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `t5_cd_effc_teach_stra`
--
ALTER TABLE `t5_cd_effc_teach_stra`
  ADD CONSTRAINT `fk_t5_cd_effc_teach_stra_t5_report1` FOREIGN KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`) REFERENCES `t5_report` (`t5_report_ID`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `t5_ce_other_eva`
--
ALTER TABLE `t5_ce_other_eva`
  ADD CONSTRAINT `fk_t5_ce_other_eva_t5_report1` FOREIGN KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`) REFERENCES `t5_report` (`t5_report_ID`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `t5_ce_students_eva`
--
ALTER TABLE `t5_ce_students_eva`
  ADD CONSTRAINT `fk_t5_ce_students_eva_t5_report1` FOREIGN KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`) REFERENCES `t5_report` (`t5_report_ID`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `t5_course_components_contact_hours`
--
ALTER TABLE `t5_course_components_contact_hours`
  ADD CONSTRAINT `fk_t5_course_components_contact_hours_t5_report1` FOREIGN KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`) REFERENCES `t5_report` (`t5_report_ID`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `t5_course_components_credit_hours`
--
ALTER TABLE `t5_course_components_credit_hours`
  ADD CONSTRAINT `fk_t5_course_components_credit_hours_t5_report1` FOREIGN KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`) REFERENCES `t5_report` (`t5_report_ID`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `t5_dg_students_grade_ver`
--
ALTER TABLE `t5_dg_students_grade_ver`
  ADD CONSTRAINT `fk_t5_dg_students_grade_ver_t5_report1` FOREIGN KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`) REFERENCES `t5_report` (`t5_report_ID`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `t5_dg_variation_students_asses_process`
--
ALTER TABLE `t5_dg_variation_students_asses_process`
  ADD CONSTRAINT `fk_t5_dg_variation_students_asses_process_t5_report1` FOREIGN KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`) REFERENCES `t5_report` (`t5_report_ID`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `t5_dis_grades`
--
ALTER TABLE `t5_dis_grades`
  ADD CONSTRAINT `fk_t5_dis_grades_t5_report1` FOREIGN KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`) REFERENCES `t5_report` (`t5_report_ID`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `t5_poi_action_plan_for_nxt_sem`
--
ALTER TABLE `t5_poi_action_plan_for_nxt_sem`
  ADD CONSTRAINT `fk_t5_poi_action_plan_for_nxt_sem_t5_report1` FOREIGN KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`) REFERENCES `t5_report` (`t5_report_ID`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `t5_poi_other_actions`
--
ALTER TABLE `t5_poi_other_actions`
  ADD CONSTRAINT `fk_t5_poi_other_actions_t5_report1` FOREIGN KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`) REFERENCES `t5_report` (`t5_report_ID`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `t5_poi_prog_on_actions`
--
ALTER TABLE `t5_poi_prog_on_actions`
  ADD CONSTRAINT `fk_t5_poi_prog_on_actions_t5_report1` FOREIGN KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`) REFERENCES `t5_report` (`t5_report_ID`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `t5_report`
--
ALTER TABLE `t5_report`
  ADD CONSTRAINT `fk_t5_report_users_has_courses11` FOREIGN KEY (`users_has_courses1_users_users_ID`,`users_has_courses1_courses_course_ID`) REFERENCES `users_has_courses1` (`users_users_ID`, `courses_course_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t5_resource_facilities`
--
ALTER TABLE `t5_resource_facilities`
  ADD CONSTRAINT `fk_t5_resource_facilities_t5_report1` FOREIGN KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`) REFERENCES `t5_report` (`t5_report_ID`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users_has_courses1`
--
ALTER TABLE `users_has_courses1`
  ADD CONSTRAINT `fk_users_has_courses1_courses1` FOREIGN KEY (`courses_course_ID`) REFERENCES `courses` (`course_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_users_has_courses1_users1` FOREIGN KEY (`users_users_ID`) REFERENCES `users` (`users_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
