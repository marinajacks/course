-- 这是该数据库的创建脚本等信息

-- create database school;
use school;

-- 1.管理员信息表admins
create table admins
(
	`username` varchar(20) NOT NULL,
	`password` varchar(50) default NULL,
	 PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- 2.课程信息表 courses
create table courses
(
	`id` int(5) NOT NULL auto_increment,
	`no` varchar(50) NOT NULL COMMENT '课程编号',
	`name` varchar(50) NOT NULL COMMENT '课程名',
	`teacher_id` varchar(50) NOT NULL,
	`teacher_name` varchar(50) NOT NULL COMMENT '教师名',
	`selectedMan` int(11) default '0' COMMENT '已选人数',
	`capacity` int(11) default NULL COMMENT '容量',
	`time` varchar(50) default NULL COMMENT '上课时间',
	`place` varchar(50) default NULL COMMENT '上课地点',
	`credit` float default NULL COMMENT '学分',
	 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
-- 3.选课信息表 selects
create table selects
(
	`stu_id` varchar(50) NOT NULL,
	`course_id` int(11) NOT NULL,
	 PRIMARY KEY (`stu_id`,`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- 4.学生信息表 students
create table students
(
	`id` varchar(50) NOT NULL COMMENT '学号',
	`name` varchar(20) NOT NULL COMMENT '姓名',
	`dept` varchar(40) NOT NULL COMMENT '系名',
	`major` varchar(40) NOT NULL COMMENT '专业',
	`sex` char(4) NOT NULL COMMENT '性别',
	`class` varchar(20) NOT NULL COMMENT '班级',
	`password` varchar(50) NOT NULL default 'e10adc3949ba59abbe56e057f20f883e' COMMENT '密码',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- 5.教师信息表 teachers
create table teachers
(
	`id` varchar(50) NOT NULL COMMENT '工号',
	`name` varchar(20) NOT NULL COMMENT '姓名',
	`dept` varchar(40) default NULL COMMENT '系名',
	`sex` char(4) default NULL COMMENT '性别',
	`zhicheng` varchar(30) default NULL COMMENT '职称',
	`password` varchar(50) NOT NULL default 'e10adc3949ba59abbe56e057f20f883e' COMMENT '密码',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 下面是脚本的插入信息,这里做的是将一条管理员信息,一条学生的信息和一条教师的信息插入进去,作为测试数据.

INSERT INTO `admins` (`username`, `password`) VALUES('admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `students` (`id`, `name`, `dept`, `major`, `sex`, `class`, `password`) VALUES
('2007052476', '陈勇文', '计算机', '电子商务', '男', '07 电商', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `teachers` (`id`, `name`, `dept`, `sex`, `zhicheng`, `password`) VALUES
('2010', '高平', '计算机', '女', '教授', 'e10adc3949ba59abbe56e057f20f883e');