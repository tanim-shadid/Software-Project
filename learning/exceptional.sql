-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 04:46 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `admin_mail` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profilePic` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `admin` (`id`, `name`, `admin_mail`, `password`, `profilePic`, `type`) VALUES
(1, 'Admin', 'abc@gmail.com', '6fda7c0b9ba6148a2191ed93d1da83eb', '1625228653.jpg', 'yes');



CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `postContent` text NOT NULL,
  `postDate` varchar(20) NOT NULL,
  `admin` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` text NOT NULL,
  `post` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `blog` (`id`, `postContent`, `postDate`, `admin`, `title`, `status`, `post`) VALUES
(1, '', 'July 02, 2021', 1, 'Website Project in Hindi/Urdu |Using HTML,CSS,Bootstrap,JQuery Ajax,PHP and MySQL Part 1', 'video', 'byLpnGbt3eY');



CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categorie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `categories` (`id`, `categorie`) VALUES
(1, 'Computer Science');


CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `courseId` int(11) NOT NULL,
  `lectureName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `content` (`id`, `content`, `courseId`, `lectureName`) VALUES
(1, '<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"315\" scrolling=\"no\" src=\"https://www.youtube.com/embed/nDAjmLcyiIc\" title=\"YouTube video player\" width=\"560\"></iframe></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:24px\"><span style=\"color:#4e5f70\">Student Registration System Login Panel Part 1</span></span></p>\r\n\r\n<p>Student Management System | Student Registration System in Java Complete Project Complete student registration system. In this project you will learn how to create a project in short time period. How to insert, retrieve, delete, update and search data in java. How to make connection with SQL XAMPP in java? Facebook: https://www.facebook.com/ExceptionalProgrammers/</p>\r\n', 1, 'Student registration system  Login Panel Part One');



CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `cover` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `categorieId` int(11) NOT NULL,
  `instructorId` int(11) NOT NULL,
  `bookId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `categorieId` int(11) NOT NULL,
  `description` text NOT NULL,
  `book` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `library` (`id`, `name`, `categorieId`, `description`, `book`, `image`) VALUES
(2, 'Exceptional Programmers Projects', 1, 'We are a group of exceptional programmers, our aim is to promote programming. \r\nIf you are a programmer then contact us to secure your future.', '1625230555.pdf', '1625230555.png');


CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `teacher` (`id`, `name`, `mail`, `phone`, `image`, `qualification`, `description`) VALUES
(1, 'Tanim Shadid', 'abc@gmail.com', '0300-1234567', '1625161331.jpg', 'Undergrade', 'I am a cse student');



CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `team` (`id`, `name`, `image`, `qualification`) VALUES
(1, 'Tanim Shadid', '1625230980.jpg', 'Undergrade'),
(4, 'Muhammad Saim', '1625231086.jpg', 'Undergrade');


ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

