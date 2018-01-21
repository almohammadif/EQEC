-- report_type
-- report
-- category
-- point
-- answer
-- instruction_mode
-- topic
-- course_component
-- assessment_task_during_semester
-- national_qualifications_framework


CREATE TABLE `report_type` (
  `rt_id` int(11) NOT NULL AUTO_INCREMENT,
  `rt_code` varchar(45) DEFAULT NULL,
  `rt_name` varchar(500) DEFAULT NULL,
  `rt_short_name` varchar(10) NOT NULL,
  `rt_state` int(11) DEFAULT NULL,
  PRIMARY KEY (`rt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;


CREATE TABLE `report` (
  `report_id` int(11) NOT NULL AUTO_INCREMENT,
  `report_type_id` int(11) DEFAULT NULL,
  `report_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `report_state` int(11) DEFAULT NULL,
  `report_course_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`report_id`),
  KEY `report_type_id_FK_idx` (`report_type_id`),
  KEY `course_id_fk_idx` (`report_course_id`),
  CONSTRAINT `course_id_fk` FOREIGN KEY (`report_course_id`) REFERENCES `courses` (`course_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `report_type_id_FK` FOREIGN KEY (`report_type_id`) REFERENCES `report_type` (`rt_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_code` varchar(45) DEFAULT NULL,
  `category_desc` varchar(500) DEFAULT NULL,
  `category_state` int(11) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;


CREATE TABLE `point` (
  `point_id` int(11) NOT NULL AUTO_INCREMENT,
  `point_category_id` int(11) DEFAULT NULL,
  `point_no` varchar(10) DEFAULT NULL,
  `point_desc` varchar(500) DEFAULT NULL,
  `point_child_id` int(11) DEFAULT NULL,
  `point_state` int(11) DEFAULT NULL,
  PRIMARY KEY (`point_id`),
  KEY `category_id_fk_idx` (`point_category_id`),
  CONSTRAINT `category_id_fk` FOREIGN KEY (`point_category_id`) REFERENCES `category` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;


CREATE TABLE `answer` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer_report_id` int(11) DEFAULT NULL,
  `answer_category_id` int(11) DEFAULT NULL,
  `answer_point_id` int(11) DEFAULT NULL,
  `answer_desc` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`answer_id`),
  KEY `answer_report_type_fk_idx` (`answer_report_id`),
  KEY `category_id_fk_idx` (`answer_category_id`),
  KEY `answer_point_fk_idx` (`answer_point_id`),
  CONSTRAINT `answer_category_id_fk` FOREIGN KEY (`answer_category_id`) REFERENCES `category` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `answer_point_fk` FOREIGN KEY (`answer_point_id`) REFERENCES `point` (`point_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `answer_report_id_fk1` FOREIGN KEY (`answer_report_id`) REFERENCES `report` (`report_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `instruction_mode` (
  `im_id` int(11) NOT NULL AUTO_INCREMENT,
  `im_report_id` int(11) DEFAULT NULL,
  `im_traditional_classroom` int(11) DEFAULT NULL,
  `im_traditional_classroom_percentage` decimal(5,2) DEFAULT NULL,
  `im_blended` int(11) DEFAULT NULL,
  `im_blended_percentage` decimal(5,2) DEFAULT NULL,
  `im_elearning` int(11) DEFAULT NULL,
  `im_elearning_percentage` decimal(5,2) DEFAULT NULL,
  `im_correspondence` int(11) DEFAULT NULL,
  `im_correspondence_percentage` decimal(5,2) DEFAULT NULL,
  `im_other` int(11) DEFAULT NULL,
  `im_other_percentage` decimal(5,2) DEFAULT NULL,
  `im_comment` varchar(500) DEFAULT NULL,
  `im_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `im_state` int(11) DEFAULT NULL,
  PRIMARY KEY (`im_id`),
  KEY `instruction_mode_report_id_fk_idx` (`im_report_id`),
  CONSTRAINT `instruction_mode_report_id_fk` FOREIGN KEY (`im_report_id`) REFERENCES `report` (`report_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `topic` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_report_id` int(11) DEFAULT NULL,
  `topic_list` varchar(500) DEFAULT NULL,
  `topic_week_no` int(11) DEFAULT NULL,
  `topic_contact_hour` int(11) DEFAULT NULL,
  `topic_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `topic_state` int(11) DEFAULT NULL,
  PRIMARY KEY (`topic_id`),
  KEY `topic_report_id_fk_idx` (`topic_report_id`),
  CONSTRAINT `topic_report_id_fk` FOREIGN KEY (`topic_report_id`) REFERENCES `report` (`report_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `course_component` (
  `cc_id` int(11) NOT NULL AUTO_INCREMENT,
  `cc_report_id` int(11) DEFAULT NULL,
  `cc_contact_hour_lecture` int(11) DEFAULT NULL,
  `cc_contact_hour_tutorial` int(11) DEFAULT NULL,
  `cc_contact_hour_studio` int(11) DEFAULT NULL,
  `cc_contact_hour_practical` int(11) DEFAULT NULL,
  `cc_contact_hour_other` int(11) DEFAULT NULL,
  `cc_contact_hour_total` int(11) DEFAULT NULL,
  `cc_credit_lecture` int(11) DEFAULT NULL,
  `cc_credit_tutorial` int(11) DEFAULT NULL,
  `cc_credit_studio` int(11) DEFAULT NULL,
  `cc_credit_practical` int(11) DEFAULT NULL,
  `cc_credit_other` int(11) DEFAULT NULL,
  `cc_credit_total` int(11) DEFAULT NULL,
  `cc_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cc_state` int(11) DEFAULT NULL,
  PRIMARY KEY (`cc_id`),
  KEY `cc_report_id_fk_idx` (`cc_report_id`),
  CONSTRAINT `cc_report_id_fk` FOREIGN KEY (`cc_report_id`) REFERENCES `report` (`report_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `assessment_task_during_semester` (
  `atds_id` int(11) NOT NULL AUTO_INCREMENT,
  `atds_report_id` int(11) DEFAULT NULL,
  `atds_sn_no` int(11) DEFAULT NULL,
  `atds_assessment_task` varchar(500) DEFAULT NULL,
  `atds_week_due` varchar(50) DEFAULT NULL,
  `atds_total_Assessment` int(11) DEFAULT NULL,
  PRIMARY KEY (`atds_id`),
  KEY `atds_report_id_fk` (`atds_report_id`),
  CONSTRAINT `atds_report_id_fk` FOREIGN KEY (`atds_report_id`) REFERENCES `report` (`report_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `national_qualifications_framework` (
  `nqf_id` int(11) NOT NULL AUTO_INCREMENT,
  `nqf_report_id` int(11) DEFAULT NULL,
  `nqf_code` varchar(11) DEFAULT NULL,
  `nqf_type` varchar(50) DEFAULT NULL,
  `nqf_learning_domain` varchar(500) DEFAULT NULL,
  `nqf_course_teaching_strategy` varchar(500) DEFAULT NULL,
  `nqf_course_assessment_method` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`nqf_id`),
  KEY `nqf_report_id_fk_idx` (`nqf_report_id`),
  CONSTRAINT `nqf_report_id_fk` FOREIGN KEY (`nqf_report_id`) REFERENCES `report` (`report_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `report` (`report_id`, `report_type_id`, `report_created_date`, `report_state`, `report_course_id`) VALUES
(1, 1, '2017-12-09 14:55:12', 0, 10369);

INSERT INTO `report_type` (`rt_id`, `rt_code`, `rt_name`, `rt_short_name`, `rt_state`, `rt_timestamp`) VALUES
(1, 'T6', 'COURSE SPECIFICATIONS', 'CS', '0', NULL),
(2, 'T5', 'COURSE REPORT', 'CR', '0', NULL);

INSERT INTO `category` (`category_id`, `category_code`, `category_desc`, `category_prototype_id`, `category_state`) VALUES
(1, 'A', 'A. Course Identification and General Informat', NULL, 0),
(2, 'B', 'B. Objectives', NULL, 0),
(3, 'C', 'C. Course Description (Note: General description in the form used in Bulletin or handbook)', NULL, 0),
(4, 'D', 'D. Student Academic Counseling and Support', NULL, 0),
(5, 'E', 'E. Learning Resources', NULL, 0),
(6, 'F', 'F. Facilities Required', NULL, 0),
(7, 'G', 'G. Course Evaluation and Improvement Processe', NULL, 0);

INSERT INTO `point` (`point_id`, `point_category_id`, `point_no`, `point_desc`, `point_child_id`, `point_state`) VALUES
(1, 1, '6', '6. Pre-requisites for this course (if any)', NULL, 0),
(2, 1, '1', '1. Course title and code:', NULL, 0),
(3, 1, '2', '2. Credit hours', NULL, 0),
(4, 1, '3', '3. Program(s) in which the course is offered.\n(If general elective available in many programs indicate this rather than list programs)', NULL, 0),
(5, 1, '4', '4. Name of faculty member responsible for the course', NULL, 0),
(6, 1, '5', '5. Level/year at which this course is offered', NULL, 0),
(8, 1, '7', '7. Co-requisites for this course (if any)', NULL, 0),
(9, 1, '8', '8. Location if not on main campus', NULL, 0),
(10, 1, '9', '9. Mode of Instruction (mark all that apply)', NULL, 0),
(11, 2, '1', '1. What is the main purpose for this course?', NULL, 0),
(12, 2, '2', '2. Briefly describe any plans for developing and improving the course that are being implemented. (e.g. increased use of IT or web based reference material, changes in content as a result of new resea', NULL, 0),
(13, 3, NULL, 'Course Description:', NULL, 0),
(14, 3, '3', '3. Additional private study/learning hours expected for students per week.', NULL, 0),
(15, 3, '4', '4. Course Learning Outcomes in NQF Domains of Learning and Alignment with Assessment Methods and Teaching Strategy', NULL, 0),
(16, 3, '5', '5.  Map course LOs with the program LOs. (Place course LO #s in the left column and program LO #s across the top.)', NULL, 0),
(17, 3, '6', '6. Schedule of Assessment Tasks for Students During the Semester', NULL, 0),
(18, 4, '1', '1. Arrangements for availability of faculty and teaching staff for individual student consultations and academic advice. (include amount of time teaching staff are expected to be available each week)', NULL, 0),
(19, 5, '1', '1. List Required Textbooks', NULL, 0),
(20, 5, '2', '2. List Essential References Materials (Journals, Reports, etc.)', NULL, 0),
(21, 5, '3', '3. List Recommended Textbooks and Reference Material (Journals, Reports, etc.)', NULL, 0),
(22, 5, '4', '4. List Electronic Materials, Web Sites, Facebook, Twitter, etc.', NULL, 0),
(23, 5, '5', '5. Other learning material such as computer-based programs/CD, professional standards or regulations and software.', NULL, 0),
(24, 6, '1', '1. Accommodation (Classrooms, laboratories, demonstration rooms/labs, etc.)', NULL, 0),
(25, 6, '2', '2. Computing resources (AV, data show, Smart Board, software, etc.)', NULL, 0),
(26, 6, '3', '3. Other resources (specify, e.g. if specific laboratory equipment is required, list requirements or attach list)', NULL, 0),
(27, 7, '1', '1 Strategies for Obtaining Student Feedback on Effectiveness of Teaching', NULL, 0),
(28, 7, '2', '2 Other Strategies for Evaluation of Teaching by the Instructor or by the Department', NULL, 0),
(29, 7, '3', '3. Processes for Improvement of Teaching', NULL, 0),
(30, 7, '4', '4. Processes for Verifying Standards of Student Achievement (e.g. check marking by an independent member teaching staff of a sample of student work, periodic exchange and remarking of tests or a sample of assignments with staff at another institution)', NULL, 0),
(31, 7, '5', '5 Describe the planning arrangements for periodically reviewing course effectiveness and planning for improvement.', NULL, 0);


