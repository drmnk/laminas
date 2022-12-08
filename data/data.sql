DROP TABLE IF EXISTS `cities`;
CREATE TABLE `cities` (
  `id` integer AUTO_INCREMENT,
  `name` text,
  `state` text,
  PRIMARY KEY (`id`)
);

INSERT INTO `cities` (`id`,`name`,`state`) VALUES (1,'Бангор','Мэн');
INSERT INTO `cities` (`id`,`name`,`state`) VALUES (2,'Дерри','Мэн');
INSERT INTO `cities` (`id`,`name`,`state`) VALUES (3,'Касл-Рок','Мэн');
INSERT INTO `cities` (`id`,`name`,`state`) VALUES (4,'Джерусалемс-Лот','Мэн');
INSERT INTO `cities` (`id`,`name`,`state`) VALUES (5,'Безнадёга','Невада');
DROP TABLE IF EXISTS `department_employee`;
CREATE TABLE `department_employee` (
  `department_id` int NOT NULL,
  `employee_id` int NOT NULL
);

INSERT INTO `department_employee` (`department_id`,`employee_id`) VALUES (3,4);
INSERT INTO `department_employee` (`department_id`,`employee_id`) VALUES (2,3);
INSERT INTO `department_employee` (`department_id`,`employee_id`) VALUES (2,2);
INSERT INTO `department_employee` (`department_id`,`employee_id`) VALUES (1,1);
DROP TABLE IF EXISTS `departments`;
CREATE TABLE `departments` (
  `id` integer,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `departments` (`id`,`name`) VALUES (1,'Охрана правопорядка');
INSERT INTO `departments` (`id`,`name`) VALUES (2,'Сфера гостеприимства');
INSERT INTO `departments` (`id`,`name`) VALUES (3,'Защита семьи и материнства');
DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees` (
  `id` integer,
  `name` text,
  `birthdate` datetime,
  `birthplace_id` integer,
  PRIMARY KEY (`id`)
);

INSERT INTO `employees` (`id`,`name`,`birthdate`,`birthplace_id`) VALUES (1,'Корри Энтрегьян','29-02-1960',5);
INSERT INTO `employees` (`id`,`name`,`birthdate`,`birthplace_id`) VALUES (2,'Джек Торранс','15-03-1967',3);
INSERT INTO `employees` (`id`,`name`,`birthdate`,`birthplace_id`) VALUES (3,'Энни Уилкс','01-11-1963',1);
INSERT INTO `employees` (`id`,`name`,`birthdate`,`birthplace_id`) VALUES (4,'Дэвид Дрэйтон','17-03-1985',2);