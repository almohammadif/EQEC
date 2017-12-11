-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2017 at 12:16 PM
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
  `t5_admin_id` int(11) NOT NULL,
  `t5_admin_org_diff` text,
  `t5_admin_cons_diff` text,
  `t5_report_t5_report_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5_admin_issues`
--

INSERT INTO `t5_admin_issues` (`t5_admin_id`, `t5_admin_org_diff`, `t5_admin_cons_diff`, `t5_report_t5_report_ID`) VALUES
(5, 'N.A.', 'N.A.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `t5_cd_cons_of_non_cov_topics`
--

CREATE TABLE `t5_cd_cons_of_non_cov_topics` (
  `t5_cd_cons_id` int(11) NOT NULL,
  `t5_cd_topics_not_fully_covered` text,
  `t5_cd_effected_lrn_out` text,
  `t5_cd_possible_action` text,
  `t5_report_t5_report_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5_cd_cons_of_non_cov_topics`
--

INSERT INTO `t5_cd_cons_of_non_cov_topics` (`t5_cd_cons_id`, `t5_cd_topics_not_fully_covered`, `t5_cd_effected_lrn_out`, `t5_cd_possible_action`, `t5_report_t5_report_ID`) VALUES
(4, 'N.A.', 'N.A.', 'N.A.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `t5_cd_course_lrn_out_asses`
--

CREATE TABLE `t5_cd_course_lrn_out_asses` (
  `t5_cd_lrn_out_id` int(11) NOT NULL,
  `t5_cd_list_lrn_out` text,
  `t5_cd_list_asses_lo` text,
  `t5_cd_summ` text,
  `t5_cd_summ_recom` text,
  `t5_report_t5_report_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5_cd_course_lrn_out_asses`
--

INSERT INTO `t5_cd_course_lrn_out_asses` (`t5_cd_lrn_out_id`, `t5_cd_list_lrn_out`, `t5_cd_list_asses_lo`, `t5_cd_summ`, `t5_cd_summ_recom`, `t5_report_t5_report_ID`) VALUES
(3, 'Understand different software processes and how to choose between them.\r\nElicit requirements from a client and specify them\r\nDesign in the large, including principled choice of a software architecture, the use of modules and interfaces to enable separate development, and design patterns.\r\nUnderstand good coding practices, including documentation, contracts, regression tests and daily builds.\r\nWork with various quality assurance techniques, including unit testing, functional testing, and automated analysis tools.\r\n', '1.1 Discussion forums and Assignments\r\n 1.2 Problem based learning through online quiz \r\n1.3 Self-learning through online Blackboard materials. \r\n1.4 Midterm Exam \r\n1.5 Final Exam', 'Complete.', 'None', 5);

-- --------------------------------------------------------

--
-- Table structure for table `t5_cd_coverage_of_planned_prog`
--

CREATE TABLE `t5_cd_coverage_of_planned_prog` (
  `t5_cd_cov_id` int(11) NOT NULL,
  `t5_cd_week` text,
  `t5_cd_topics_covered` text,
  `t5_cd_planned_ch` int(11) DEFAULT NULL,
  `t5_cd_actual_ch` int(11) DEFAULT NULL,
  `t5_cd_variation` text,
  `t5_report_t5_report_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5_cd_coverage_of_planned_prog`
--

INSERT INTO `t5_cd_coverage_of_planned_prog` (`t5_cd_cov_id`, `t5_cd_week`, `t5_cd_topics_covered`, `t5_cd_planned_ch`, `t5_cd_actual_ch`, `t5_cd_variation`, `t5_report_t5_report_ID`) VALUES
(17, 'week-1', '- Students have access to the textbook and other\r\n\r\nrequired course materials.\r\n\r\n- Become introduced to fellow students and the\r\n\r\nprofessor in this course.', 2, 2, 'No variations', 5),
(18, 'week-2', '- The Nature of Software', 2, 2, 'No variations', 5),
(19, 'week-3', '- Software Engineering\r\n\r\n- Process Models\r\n\r\n- Agile Development', 2, 2, 'No variations', 5),
(20, 'week-4', '- Human Aspects of Software Engineering\r\n\r\n- Principles that Guide Practice', 2, 2, 'No variations', 5),
(21, 'week-5', '- Understanding Requirements', 2, 2, 'No variations', 5),
(22, 'week-6', '- Requirements Modeling: Scenario-Based\r\n\r\nMethods\r\n\r\n- Requirements Modeling: Class-Based Methods\r\n\r\n- Requirements Modeling: Behavior, Patterns', 2, 2, 'No variations', 5),
(23, 'week-7', '- Design Concepts', 2, 2, 'No variations', 5),
(24, 'week-8', 'NA', 0, 0, 'NA', 5),
(25, 'week-9', '- Architectural Design\r\n\r\n- WebApp Design', 2, 2, 'No variations', 5),
(26, 'week-10', '- User Interface Design', 2, 2, 'No variations', 5),
(27, 'week-11', '- Software Testing Strategies', 2, 2, 'No variations', 5),
(28, 'week-12', '- Testing Web Applications', 2, 2, 'No variations', 5),
(29, 'week-13', '- Quality Concepts - Maintenance and Reengineering', 2, 2, 'No variations', 5),
(30, 'week-14', '- Software Process Improvement', 2, 2, 'No variations', 5);

-- --------------------------------------------------------

--
-- Table structure for table `t5_cd_effc_teach_stra`
--

CREATE TABLE `t5_cd_effc_teach_stra` (
  `t5_cd_eff_id` int(11) NOT NULL,
  `t5_cd_list_teach_methods` text,
  `t5_cd_were_they_effc` varchar(45) DEFAULT NULL,
  `t5_cd_diff_action` varchar(455) DEFAULT NULL,
  `t5_report_t5_report_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5_cd_effc_teach_stra`
--

INSERT INTO `t5_cd_effc_teach_stra` (`t5_cd_eff_id`, `t5_cd_list_teach_methods`, `t5_cd_were_they_effc`, `t5_cd_diff_action`, `t5_report_t5_report_ID`) VALUES
(7, 'Face to Face Lectures and Q&A', 'yes', 'none', 5),
(8, 'Virtual Lectures and Q&A', 'yes', 'none', 5),
(9, 'Assignments', 'yes', 'none', 5),
(10, 'Offline activities focused on the student learning and reading tasks', 'yes', 'none', 5),
(11, 'Exams', 'yes', 'none', 5);

-- --------------------------------------------------------

--
-- Table structure for table `t5_ce_other_eva`
--

CREATE TABLE `t5_ce_other_eva` (
  `t5_ce_other_ev_id` int(11) NOT NULL,
  `t5_ce_list_imp_recom` text,
  `t5_ce_response` text,
  `t5_report_t5_report_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5_ce_other_eva`
--

INSERT INTO `t5_ce_other_eva` (`t5_ce_other_ev_id`, `t5_ce_list_imp_recom`, `t5_ce_response`, `t5_report_t5_report_ID`) VALUES
(3, 'N.A.', 'N.A.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `t5_ce_students_eva`
--

CREATE TABLE `t5_ce_students_eva` (
  `t5_ce_std_eva_id` int(11) NOT NULL,
  `t5_ce_list_imp_recom` text,
  `t5_ce_response` text,
  `t5_report_t5_report_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5_ce_students_eva`
--

INSERT INTO `t5_ce_students_eva` (`t5_ce_std_eva_id`, `t5_ce_list_imp_recom`, `t5_ce_response`, `t5_report_t5_report_ID`) VALUES
(3, 'N.A.', 'N.A.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `t5_course_components_contact_hours`
--

CREATE TABLE `t5_course_components_contact_hours` (
  `t5_cc_ch_id` int(11) NOT NULL,
  `t5_lecture_ch` int(11) DEFAULT NULL,
  `t5_tutorial_ch` int(11) DEFAULT NULL,
  `t5_lab_ch` int(11) DEFAULT NULL,
  `t5_prac_ch` int(11) DEFAULT NULL,
  `t5_other_ch` int(11) DEFAULT NULL,
  `t5_total_ch` int(11) DEFAULT NULL,
  `t5_report_t5_report_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5_course_components_contact_hours`
--

INSERT INTO `t5_course_components_contact_hours` (`t5_cc_ch_id`, `t5_lecture_ch`, `t5_tutorial_ch`, `t5_lab_ch`, `t5_prac_ch`, `t5_other_ch`, `t5_total_ch`, `t5_report_t5_report_ID`) VALUES
(3, 30, 0, 0, 0, 30, 60, 5);

-- --------------------------------------------------------

--
-- Table structure for table `t5_course_components_credit_hours`
--

CREATE TABLE `t5_course_components_credit_hours` (
  `t5_cc_cr_id` int(11) NOT NULL,
  `t5_lecture_credit_h` int(11) DEFAULT NULL,
  `t5_tutorial_credit_h` int(11) DEFAULT NULL,
  `t5_lab_credit_h` int(11) DEFAULT NULL,
  `t5_prac_credit_h` int(11) DEFAULT NULL,
  `t5_other_credit_h` int(11) DEFAULT NULL,
  `t5_total_credit_h` int(11) DEFAULT NULL,
  `t5_report_t5_report_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5_course_components_credit_hours`
--

INSERT INTO `t5_course_components_credit_hours` (`t5_cc_cr_id`, `t5_lecture_credit_h`, `t5_tutorial_credit_h`, `t5_lab_credit_h`, `t5_prac_credit_h`, `t5_other_credit_h`, `t5_total_credit_h`, `t5_report_t5_report_ID`) VALUES
(2, 2, 0, 0, 0, 1, 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `t5_dg_students_grade_ver`
--

CREATE TABLE `t5_dg_students_grade_ver` (
  `t5_dg_std_gr_ver_id` int(11) NOT NULL,
  `t5_dg_method_of_ver` text,
  `t5_dg_conclusion` text,
  `t5_report_t5_report_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5_dg_students_grade_ver`
--

INSERT INTO `t5_dg_students_grade_ver` (`t5_dg_std_gr_ver_id`, `t5_dg_method_of_ver`, `t5_dg_conclusion`, `t5_report_t5_report_ID`) VALUES
(2, 'N.A.', 'N.A.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `t5_dg_variation_students_asses_process`
--

CREATE TABLE `t5_dg_variation_students_asses_process` (
  `t5_dg_vari_std_asses_id` int(11) NOT NULL,
  `t5_dg_variation_process` text,
  `t5_dg_variation` text,
  `t5_dg_variation_reason` text,
  `t5_report_t5_report_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5_dg_variation_students_asses_process`
--

INSERT INTO `t5_dg_variation_students_asses_process` (`t5_dg_vari_std_asses_id`, `t5_dg_variation_process`, `t5_dg_variation`, `t5_dg_variation_reason`, `t5_report_t5_report_ID`) VALUES
(3, 'a.Variations (if any) from planned assessment schedule (see course specification)', 'N.A.', 'N.A.', 5),
(4, 'b. Variations (if any) from planned assessment processes in domains of learning (see course specification)', 'N.A.', 'N.A.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `t5_dis_grades`
--

CREATE TABLE `t5_dis_grades` (
  `t5_dg_id` int(11) NOT NULL,
  `t5_dg_lg` varchar(45) DEFAULT NULL,
  `t5_dg_no_of_students` int(11) DEFAULT NULL,
  `t5_dg_students_per` int(11) DEFAULT NULL,
  `t5_dg_analysis` text,
  `t5_dg_special_factors` text,
  `t5_report_t5_report_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5_dis_grades`
--

INSERT INTO `t5_dis_grades` (`t5_dg_id`, `t5_dg_lg`, `t5_dg_no_of_students`, `t5_dg_students_per`, `t5_dg_analysis`, `t5_dg_special_factors`, `t5_report_t5_report_ID`) VALUES
(16, 'A+', 0, 0, 'None', 'About 75% of course evaluation is focused on Midterm and Final examination which basically\r\n\r\ntests the written skills. Students find problems in written expression in English especially for\r\n\r\nlong essay questions. Adding one or two more assignments to the assessment methods and\r\n\r\nreduce the score of the Final exam from 50% to 40% may reduce the failure rate in this course.', 5),
(17, 'A', 0, 0, 'None', 'About 75% of course evaluation is focused on Midterm and Final examination which basically\r\n\r\ntests the written skills. Students find problems in written expression in English especially for\r\n\r\nlong essay questions. Adding one or two more assignments to the assessment methods and\r\n\r\nreduce the score of the Final exam from 50% to 40% may reduce the failure rate in this course.', 5),
(18, 'B+', 1, 4, 'None', 'About 75% of course evaluation is focused on Midterm and Final examination which basically\r\n\r\ntests the written skills. Students find problems in written expression in English especially for\r\n\r\nlong essay questions. Adding one or two more assignments to the assessment methods and\r\n\r\nreduce the score of the Final exam from 50% to 40% may reduce the failure rate in this course.', 5),
(19, 'B', 3, 13, 'Reflected after Final Exam', 'About 75% of course evaluation is focused on Midterm and Final examination which basically\r\n\r\ntests the written skills. Students find problems in written expression in English especially for\r\n\r\nlong essay questions. Adding one or two more assignments to the assessment methods and\r\n\r\nreduce the score of the Final exam from 50% to 40% may reduce the failure rate in this course.', 5),
(20, 'C+', 1, 4, 'None', 'About 75% of course evaluation is focused on Midterm and Final examination which basically\r\n\r\ntests the written skills. Students find problems in written expression in English especially for\r\n\r\nlong essay questions. Adding one or two more assignments to the assessment methods and\r\n\r\nreduce the score of the Final exam from 50% to 40% may reduce the failure rate in this course.', 5),
(21, 'C', 3, 13, 'None', 'About 75% of course evaluation is focused on Midterm and Final examination which basically\r\n\r\ntests the written skills. Students find problems in written expression in English especially for\r\n\r\nlong essay questions. Adding one or two more assignments to the assessment methods and\r\n\r\nreduce the score of the Final exam from 50% to 40% may reduce the failure rate in this course.', 5),
(22, 'D+', 3, 13, 'None', 'About 75% of course evaluation is focused on Midterm and Final examination which basically\r\n\r\ntests the written skills. Students find problems in written expression in English especially for\r\n\r\nlong essay questions. Adding one or two more assignments to the assessment methods and\r\n\r\nreduce the score of the Final exam from 50% to 40% may reduce the failure rate in this course.', 5),
(23, 'D', 4, 17, 'None', 'About 75% of course evaluation is focused on Midterm and Final examination which basically\r\n\r\ntests the written skills. Students find problems in written expression in English especially for\r\n\r\nlong essay questions. Adding one or two more assignments to the assessment methods and\r\n\r\nreduce the score of the Final exam from 50% to 40% may reduce the failure rate in this course.', 5),
(24, 'F', 3, 13, 'None', 'About 75% of course evaluation is focused on Midterm and Final examination which basically\r\n\r\ntests the written skills. Students find problems in written expression in English especially for\r\n\r\nlong essay questions. Adding one or two more assignments to the assessment methods and\r\n\r\nreduce the score of the Final exam from 50% to 40% may reduce the failure rate in this course.', 5),
(25, 'Denied Entry', 2, 9, 'None', 'About 75% of course evaluation is focused on Midterm and Final examination which basically\r\n\r\ntests the written skills. Students find problems in written expression in English especially for\r\n\r\nlong essay questions. Adding one or two more assignments to the assessment methods and\r\n\r\nreduce the score of the Final exam from 50% to 40% may reduce the failure rate in this course.', 5),
(26, 'In progress', 0, 0, 'None', 'About 75% of course evaluation is focused on Midterm and Final examination which basically\r\n\r\ntests the written skills. Students find problems in written expression in English especially for\r\n\r\nlong essay questions. Adding one or two more assignments to the assessment methods and\r\n\r\nreduce the score of the Final exam from 50% to 40% may reduce the failure rate in this course.', 5),
(27, 'Incomplete', 0, 0, 'None', 'About 75% of course evaluation is focused on Midterm and Final examination which basically\r\n\r\ntests the written skills. Students find problems in written expression in English especially for\r\n\r\nlong essay questions. Adding one or two more assignments to the assessment methods and\r\n\r\nreduce the score of the Final exam from 50% to 40% may reduce the failure rate in this course.', 5),
(28, 'Pass', 15, 65, 'None', 'About 75% of course evaluation is focused on Midterm and Final examination which basically\r\n\r\ntests the written skills. Students find problems in written expression in English especially for\r\n\r\nlong essay questions. Adding one or two more assignments to the assessment methods and\r\n\r\nreduce the score of the Final exam from 50% to 40% may reduce the failure rate in this course.', 5),
(29, 'Fail', 3, 13, 'None', 'About 75% of course evaluation is focused on Midterm and Final examination which basically\r\n\r\ntests the written skills. Students find problems in written expression in English especially for\r\n\r\nlong essay questions. Adding one or two more assignments to the assessment methods and\r\n\r\nreduce the score of the Final exam from 50% to 40% may reduce the failure rate in this course.', 5),
(30, 'Withdrawn', 3, 13, 'None', 'About 75% of course evaluation is focused on Midterm and Final examination which basically\r\n\r\ntests the written skills. Students find problems in written expression in English especially for\r\n\r\nlong essay questions. Adding one or two more assignments to the assessment methods and\r\n\r\nreduce the score of the Final exam from 50% to 40% may reduce the failure rate in this course.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `t5_poi_action_plan_for_nxt_sem`
--

CREATE TABLE `t5_poi_action_plan_for_nxt_sem` (
  `t5_poi_action_id` int(11) NOT NULL,
  `t5_poi_action_recom_imp` text,
  `t5_poi_intent_action` text,
  `t5_poi_start_date` date DEFAULT NULL,
  `t5_poi_comp_date` date DEFAULT NULL,
  `t5_poi_person_resp` text,
  `t5_report_t5_report_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5_poi_action_plan_for_nxt_sem`
--

INSERT INTO `t5_poi_action_plan_for_nxt_sem` (`t5_poi_action_id`, `t5_poi_action_recom_imp`, `t5_poi_intent_action`, `t5_poi_start_date`, `t5_poi_comp_date`, `t5_poi_person_resp`, `t5_report_t5_report_ID`) VALUES
(6, 'N.A.', 'N.A.', '2017-12-11', '2017-12-11', 'N.A.', 5),
(7, 'N.A.', 'N.A.', '2017-12-11', '2017-12-11', 'N.A.', 5),
(8, 'N.A.', 'N.A.', '2017-12-11', '2017-12-11', 'N.A.', 5),
(9, 'N.A.', 'N.A.', '2017-12-11', '2017-12-11', 'N.A.', 5),
(10, 'N.A.', 'N.A.', '2017-12-11', '2017-12-11', 'N.A.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `t5_poi_other_actions`
--

CREATE TABLE `t5_poi_other_actions` (
  `t5_other_action_id` int(11) NOT NULL,
  `t5_poi_list_other_actions` text,
  `t5_report_t5_report_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5_poi_other_actions`
--

INSERT INTO `t5_poi_other_actions` (`t5_other_action_id`, `t5_poi_list_other_actions`, `t5_report_t5_report_ID`) VALUES
(2, 'N.A.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `t5_poi_prog_on_actions`
--

CREATE TABLE `t5_poi_prog_on_actions` (
  `t5_poi_prog_action_id` int(11) NOT NULL,
  `t5_poi_action_recom` text,
  `t5_poi_action_taken` text,
  `t5_poi_action_results` text,
  `t5_poi_action_analysis` text,
  `t5_report_t5_report_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5_poi_prog_on_actions`
--

INSERT INTO `t5_poi_prog_on_actions` (`t5_poi_prog_action_id`, `t5_poi_action_recom`, `t5_poi_action_taken`, `t5_poi_action_results`, `t5_poi_action_analysis`, `t5_report_t5_report_ID`) VALUES
(5, 'N.A.', 'N.A.', 'N.A.', 'N.A.', 5),
(6, 'N.A.', 'N.A.', 'N.A.', 'N.A.', 5),
(7, 'N.A.', 'N.A.', 'N.A.', 'N.A.', 5),
(8, 'N.A.', 'N.A.', 'N.A.', 'N.A.', 5);

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

--
-- Dumping data for table `t5_report`
--

INSERT INTO `t5_report` (`t5_report_ID`, `institution`, `no_of_students_start`, `no_of_students_finish`, `t5_date_report_comp`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`) VALUES
(5, ' Suadi Electronic University', 23, 20, '2017-12-11', 1, 21105);

-- --------------------------------------------------------

--
-- Table structure for table `t5_resource_facilities`
--

CREATE TABLE `t5_resource_facilities` (
  `t5_rf_id` int(11) NOT NULL,
  `t5_rf_diff_in_access` text,
  `t5_rf_cons_diff` text,
  `t5_report_t5_report_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t5_resource_facilities`
--

INSERT INTO `t5_resource_facilities` (`t5_rf_id`, `t5_rf_diff_in_access`, `t5_rf_cons_diff`, `t5_report_t5_report_ID`) VALUES
(2, 'N.A.', 'N.A.', 5);

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
  ADD PRIMARY KEY (`t5_admin_id`),
  ADD KEY `t5_report_t5_report_ID` (`t5_report_t5_report_ID`);

--
-- Indexes for table `t5_cd_cons_of_non_cov_topics`
--
ALTER TABLE `t5_cd_cons_of_non_cov_topics`
  ADD PRIMARY KEY (`t5_cd_cons_id`),
  ADD KEY `t5_report_t5_report_ID` (`t5_report_t5_report_ID`);

--
-- Indexes for table `t5_cd_course_lrn_out_asses`
--
ALTER TABLE `t5_cd_course_lrn_out_asses`
  ADD PRIMARY KEY (`t5_cd_lrn_out_id`),
  ADD KEY `t5_report_t5_report_ID` (`t5_report_t5_report_ID`);

--
-- Indexes for table `t5_cd_coverage_of_planned_prog`
--
ALTER TABLE `t5_cd_coverage_of_planned_prog`
  ADD PRIMARY KEY (`t5_cd_cov_id`),
  ADD KEY `t5_report_t5_report_ID` (`t5_report_t5_report_ID`);

--
-- Indexes for table `t5_cd_effc_teach_stra`
--
ALTER TABLE `t5_cd_effc_teach_stra`
  ADD PRIMARY KEY (`t5_cd_eff_id`),
  ADD KEY `t5_report_t5_report_ID` (`t5_report_t5_report_ID`);

--
-- Indexes for table `t5_ce_other_eva`
--
ALTER TABLE `t5_ce_other_eva`
  ADD PRIMARY KEY (`t5_ce_other_ev_id`),
  ADD KEY `t5_report_t5_report_ID` (`t5_report_t5_report_ID`);

--
-- Indexes for table `t5_ce_students_eva`
--
ALTER TABLE `t5_ce_students_eva`
  ADD PRIMARY KEY (`t5_ce_std_eva_id`),
  ADD KEY `t5_report_t5_report_ID` (`t5_report_t5_report_ID`);

--
-- Indexes for table `t5_course_components_contact_hours`
--
ALTER TABLE `t5_course_components_contact_hours`
  ADD PRIMARY KEY (`t5_cc_ch_id`),
  ADD KEY `t5_report_t5_report_ID` (`t5_report_t5_report_ID`);

--
-- Indexes for table `t5_course_components_credit_hours`
--
ALTER TABLE `t5_course_components_credit_hours`
  ADD PRIMARY KEY (`t5_cc_cr_id`),
  ADD KEY `t5_report_t5_report_ID` (`t5_report_t5_report_ID`);

--
-- Indexes for table `t5_dg_students_grade_ver`
--
ALTER TABLE `t5_dg_students_grade_ver`
  ADD PRIMARY KEY (`t5_dg_std_gr_ver_id`),
  ADD KEY `t5_report_t5_report_ID` (`t5_report_t5_report_ID`);

--
-- Indexes for table `t5_dg_variation_students_asses_process`
--
ALTER TABLE `t5_dg_variation_students_asses_process`
  ADD PRIMARY KEY (`t5_dg_vari_std_asses_id`),
  ADD KEY `t5_report_t5_report_ID` (`t5_report_t5_report_ID`);

--
-- Indexes for table `t5_dis_grades`
--
ALTER TABLE `t5_dis_grades`
  ADD PRIMARY KEY (`t5_dg_id`),
  ADD KEY `t5_report_t5_report_ID` (`t5_report_t5_report_ID`);

--
-- Indexes for table `t5_poi_action_plan_for_nxt_sem`
--
ALTER TABLE `t5_poi_action_plan_for_nxt_sem`
  ADD PRIMARY KEY (`t5_poi_action_id`),
  ADD KEY `t5_report_t5_report_ID` (`t5_report_t5_report_ID`);

--
-- Indexes for table `t5_poi_other_actions`
--
ALTER TABLE `t5_poi_other_actions`
  ADD PRIMARY KEY (`t5_other_action_id`),
  ADD KEY `t5_report_t5_report_ID` (`t5_report_t5_report_ID`);

--
-- Indexes for table `t5_poi_prog_on_actions`
--
ALTER TABLE `t5_poi_prog_on_actions`
  ADD PRIMARY KEY (`t5_poi_prog_action_id`),
  ADD KEY `t5_report_t5_report_ID` (`t5_report_t5_report_ID`);

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
  ADD PRIMARY KEY (`t5_rf_id`),
  ADD KEY `t5_report_t5_report_ID` (`t5_report_t5_report_ID`);

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
  MODIFY `exam_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
-- AUTO_INCREMENT for table `t5_admin_issues`
--
ALTER TABLE `t5_admin_issues`
  MODIFY `t5_admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `t5_cd_cons_of_non_cov_topics`
--
ALTER TABLE `t5_cd_cons_of_non_cov_topics`
  MODIFY `t5_cd_cons_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t5_cd_course_lrn_out_asses`
--
ALTER TABLE `t5_cd_course_lrn_out_asses`
  MODIFY `t5_cd_lrn_out_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t5_cd_coverage_of_planned_prog`
--
ALTER TABLE `t5_cd_coverage_of_planned_prog`
  MODIFY `t5_cd_cov_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `t5_cd_effc_teach_stra`
--
ALTER TABLE `t5_cd_effc_teach_stra`
  MODIFY `t5_cd_eff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `t5_ce_other_eva`
--
ALTER TABLE `t5_ce_other_eva`
  MODIFY `t5_ce_other_ev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t5_ce_students_eva`
--
ALTER TABLE `t5_ce_students_eva`
  MODIFY `t5_ce_std_eva_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t5_course_components_contact_hours`
--
ALTER TABLE `t5_course_components_contact_hours`
  MODIFY `t5_cc_ch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t5_course_components_credit_hours`
--
ALTER TABLE `t5_course_components_credit_hours`
  MODIFY `t5_cc_cr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t5_dg_students_grade_ver`
--
ALTER TABLE `t5_dg_students_grade_ver`
  MODIFY `t5_dg_std_gr_ver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t5_dg_variation_students_asses_process`
--
ALTER TABLE `t5_dg_variation_students_asses_process`
  MODIFY `t5_dg_vari_std_asses_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t5_dis_grades`
--
ALTER TABLE `t5_dis_grades`
  MODIFY `t5_dg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `t5_poi_action_plan_for_nxt_sem`
--
ALTER TABLE `t5_poi_action_plan_for_nxt_sem`
  MODIFY `t5_poi_action_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `t5_poi_other_actions`
--
ALTER TABLE `t5_poi_other_actions`
  MODIFY `t5_other_action_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t5_poi_prog_on_actions`
--
ALTER TABLE `t5_poi_prog_on_actions`
  MODIFY `t5_poi_prog_action_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `t5_report`
--
ALTER TABLE `t5_report`
  MODIFY `t5_report_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `t5_resource_facilities`
--
ALTER TABLE `t5_resource_facilities`
  MODIFY `t5_rf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  ADD CONSTRAINT `t5_admin_issues_ibfk_1` FOREIGN KEY (`t5_report_t5_report_ID`) REFERENCES `t5_report` (`t5_report_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t5_cd_cons_of_non_cov_topics`
--
ALTER TABLE `t5_cd_cons_of_non_cov_topics`
  ADD CONSTRAINT `t5_cd_cons_of_non_cov_topics_ibfk_1` FOREIGN KEY (`t5_report_t5_report_ID`) REFERENCES `t5_report` (`t5_report_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t5_cd_course_lrn_out_asses`
--
ALTER TABLE `t5_cd_course_lrn_out_asses`
  ADD CONSTRAINT `t5_cd_course_lrn_out_asses_ibfk_1` FOREIGN KEY (`t5_report_t5_report_ID`) REFERENCES `t5_report` (`t5_report_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t5_cd_coverage_of_planned_prog`
--
ALTER TABLE `t5_cd_coverage_of_planned_prog`
  ADD CONSTRAINT `t5_cd_coverage_of_planned_prog_ibfk_1` FOREIGN KEY (`t5_report_t5_report_ID`) REFERENCES `t5_report` (`t5_report_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t5_cd_effc_teach_stra`
--
ALTER TABLE `t5_cd_effc_teach_stra`
  ADD CONSTRAINT `t5_cd_effc_teach_stra_ibfk_1` FOREIGN KEY (`t5_report_t5_report_ID`) REFERENCES `t5_report` (`t5_report_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t5_ce_other_eva`
--
ALTER TABLE `t5_ce_other_eva`
  ADD CONSTRAINT `t5_ce_other_eva_ibfk_1` FOREIGN KEY (`t5_report_t5_report_ID`) REFERENCES `t5_report` (`t5_report_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t5_ce_students_eva`
--
ALTER TABLE `t5_ce_students_eva`
  ADD CONSTRAINT `t5_ce_students_eva_ibfk_1` FOREIGN KEY (`t5_report_t5_report_ID`) REFERENCES `t5_report` (`t5_report_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t5_course_components_contact_hours`
--
ALTER TABLE `t5_course_components_contact_hours`
  ADD CONSTRAINT `t5_course_components_contact_hours_ibfk_1` FOREIGN KEY (`t5_report_t5_report_ID`) REFERENCES `t5_report` (`t5_report_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t5_course_components_credit_hours`
--
ALTER TABLE `t5_course_components_credit_hours`
  ADD CONSTRAINT `t5_course_components_credit_hours_ibfk_1` FOREIGN KEY (`t5_report_t5_report_ID`) REFERENCES `t5_report` (`t5_report_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t5_dg_students_grade_ver`
--
ALTER TABLE `t5_dg_students_grade_ver`
  ADD CONSTRAINT `t5_dg_students_grade_ver_ibfk_1` FOREIGN KEY (`t5_report_t5_report_ID`) REFERENCES `t5_report` (`t5_report_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t5_dg_variation_students_asses_process`
--
ALTER TABLE `t5_dg_variation_students_asses_process`
  ADD CONSTRAINT `t5_dg_variation_students_asses_process_ibfk_1` FOREIGN KEY (`t5_report_t5_report_ID`) REFERENCES `t5_report` (`t5_report_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t5_dis_grades`
--
ALTER TABLE `t5_dis_grades`
  ADD CONSTRAINT `t5_dis_grades_ibfk_1` FOREIGN KEY (`t5_report_t5_report_ID`) REFERENCES `t5_report` (`t5_report_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t5_poi_action_plan_for_nxt_sem`
--
ALTER TABLE `t5_poi_action_plan_for_nxt_sem`
  ADD CONSTRAINT `t5_poi_action_plan_for_nxt_sem_ibfk_1` FOREIGN KEY (`t5_report_t5_report_ID`) REFERENCES `t5_report` (`t5_report_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t5_poi_other_actions`
--
ALTER TABLE `t5_poi_other_actions`
  ADD CONSTRAINT `t5_poi_other_actions_ibfk_1` FOREIGN KEY (`t5_report_t5_report_ID`) REFERENCES `t5_report` (`t5_report_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t5_poi_prog_on_actions`
--
ALTER TABLE `t5_poi_prog_on_actions`
  ADD CONSTRAINT `t5_poi_prog_on_actions_ibfk_1` FOREIGN KEY (`t5_report_t5_report_ID`) REFERENCES `t5_report` (`t5_report_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t5_report`
--
ALTER TABLE `t5_report`
  ADD CONSTRAINT `fk_t5_report_users_has_courses11` FOREIGN KEY (`users_has_courses1_users_users_ID`,`users_has_courses1_courses_course_ID`) REFERENCES `users_has_courses1` (`users_users_ID`, `courses_course_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t5_resource_facilities`
--
ALTER TABLE `t5_resource_facilities`
  ADD CONSTRAINT `t5_resource_facilities_ibfk_1` FOREIGN KEY (`t5_report_t5_report_ID`) REFERENCES `t5_report` (`t5_report_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_has_courses1`
--
ALTER TABLE `users_has_courses1`
  ADD CONSTRAINT `fk_users_has_courses1_courses1` FOREIGN KEY (`courses_course_ID`) REFERENCES `courses` (`course_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_users_has_courses1_users1` FOREIGN KEY (`users_users_ID`) REFERENCES `users` (`users_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
