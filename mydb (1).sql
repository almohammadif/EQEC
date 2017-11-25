-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2017 at 12:38 PM
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
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `asgn_ID` int(11) NOT NULL,
  `asgn_path` varchar(45) DEFAULT NULL,
  `users_has_courses1_users_users_ID` int(11) NOT NULL,
  `users_has_courses1_courses_course_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(21105, 'Software Engineering ', 'IT242', 3, 60, 1, 'semester 2'),
(21106, 'System Integration', 'IT440', 3, 45, 1, 'Level 7');

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
(1, 'College of computing and informatics / IT');

-- --------------------------------------------------------

--
-- Table structure for table `exam_marks`
--

CREATE TABLE `exam_marks` (
  `exam_marks_ID` int(11) NOT NULL,
  `midterm_mark_high` int(11) DEFAULT NULL,
  `finals_mark_high` int(11) DEFAULT NULL,
  `users_has_courses1_users_users_ID` int(11) NOT NULL,
  `users_has_courses1_courses_course_ID` int(11) NOT NULL,
  `finals_mark_mid` int(11) DEFAULT NULL,
  `finals_mark_low` int(11) DEFAULT NULL,
  `midterm_mark_mid` int(11) DEFAULT NULL,
  `midterm_mark_low` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 6),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(2, 2),
(3, 3),
(3, 13),
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
  `institution` varchar(45) DEFAULT NULL,
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
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'mohammed', 'ali', 'admin@localhost', NULL),
(2, 'admin_cr', '202cb962ac59075b964b07152d234b70', 'khaled', 'saeed', 'admin@localhost', NULL),
(3, 'admin_qa', '202cb962ac59075b964b07152d234b70', 'salem', 'hassan', 'admin@localhost', NULL),
(4, 'admincp', '202cb962ac59075b964b07152d234b70', 'addullah', 'husain', 'admin@localhost', NULL),
(6, 'testuser', '202cb962ac59075b964b07152d234b70', 'Lucy', 'Litton', 'email@email.com', NULL),
(9, 'bob', '202cb962ac59075b964b07152d234b70', 'bob', 'alien', 'email@email.com', NULL),
(10, 'rrrrrrrr', '202cb962ac59075b964b07152d234b70', 'abdullah', 'hassan', 'email@email.com', NULL),
(11, 'sami', '4f8de24d6093ac5d25c7cfafc474d49f', 'sami', 'sami', 'email@email.com', NULL),
(12, 'ffffffffffff', '202cb962ac59075b964b07152d234b70', 'aaaaaaaa', 'aaaaaaaaaaa', 'admin@localhost', NULL),
(13, 'name', '202cb962ac59075b964b07152d234b70', 'abdullah', 'hassan', 'email@email.com', NULL);

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
(1, 21105);

-- --------------------------------------------------------

--
-- Table structure for table `user_course`
--

CREATE TABLE `user_course` (
  `user_course_ID` int(11) NOT NULL,
  `user_ID` int(11) DEFAULT NULL,
  `course_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`asgn_ID`,`users_has_courses1_users_users_ID`,`users_has_courses1_courses_course_ID`),
  ADD KEY `fk_assignments_users_has_courses11_idx` (`users_has_courses1_users_users_ID`,`users_has_courses1_courses_course_ID`);

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
-- Indexes for table `exam_marks`
--
ALTER TABLE `exam_marks`
  ADD PRIMARY KEY (`exam_marks_ID`,`users_has_courses1_users_users_ID`,`users_has_courses1_courses_course_ID`),
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
-- Indexes for table `user_course`
--
ALTER TABLE `user_course`
  ADD PRIMARY KEY (`user_course_ID`),
  ADD KEY `user_ID_idx` (`user_ID`),
  ADD KEY `course_ID_idx` (`course_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `asgn_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comments_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21107;
--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `dept_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `exam_marks`
--
ALTER TABLE `exam_marks`
  MODIFY `exam_marks_ID` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `users_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user_course`
--
ALTER TABLE `user_course`
  MODIFY `user_course_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignments`
--
ALTER TABLE `assignments`
  ADD CONSTRAINT `fk_assignments_users_has_courses11` FOREIGN KEY (`users_has_courses1_users_users_ID`,`users_has_courses1_courses_course_ID`) REFERENCES `users_has_courses1` (`users_users_ID`, `courses_course_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comments_users_has_courses11` FOREIGN KEY (`users_has_courses1_users_users_ID`,`users_has_courses1_courses_course_ID`) REFERENCES `users_has_courses1` (`users_users_ID`, `courses_course_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `fk_courses_dept1` FOREIGN KEY (`dept_dept_ID`) REFERENCES `dept` (`dept_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `exam_marks`
--
ALTER TABLE `exam_marks`
  ADD CONSTRAINT `fk_exam_marks_users_has_courses11` FOREIGN KEY (`users_has_courses1_users_users_ID`,`users_has_courses1_courses_course_ID`) REFERENCES `users_has_courses1` (`users_users_ID`, `courses_course_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `roles_has_users`
--
ALTER TABLE `roles_has_users`
  ADD CONSTRAINT `fk_roles_has_users_roles1` FOREIGN KEY (`roles_role_ID`) REFERENCES `roles` (`role_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_roles_has_users_users1` FOREIGN KEY (`users_users_ID`) REFERENCES `users` (`users_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_t5_report_users_has_courses11` FOREIGN KEY (`users_has_courses1_users_users_ID`,`users_has_courses1_courses_course_ID`) REFERENCES `users_has_courses1` (`users_users_ID`, `courses_course_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `t5_resource_facilities`
--
ALTER TABLE `t5_resource_facilities`
  ADD CONSTRAINT `fk_t5_resource_facilities_t5_report1` FOREIGN KEY (`t5_report_t5_report_ID`,`t5_report_users_has_courses1_users_users_ID`,`t5_report_users_has_courses1_courses_course_ID`) REFERENCES `t5_report` (`t5_report_ID`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users_has_courses1`
--
ALTER TABLE `users_has_courses1`
  ADD CONSTRAINT `fk_users_has_courses1_courses1` FOREIGN KEY (`courses_course_ID`) REFERENCES `courses` (`course_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_has_courses1_users1` FOREIGN KEY (`users_users_ID`) REFERENCES `users` (`users_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_course`
--
ALTER TABLE `user_course`
  ADD CONSTRAINT `course_ID` FOREIGN KEY (`course_ID`) REFERENCES `courses` (`course_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_ID` FOREIGN KEY (`user_ID`) REFERENCES `users` (`users_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
