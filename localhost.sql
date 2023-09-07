-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- 호스트: localhost
-- 처리한 시간: 23-09-07 13:38 
-- 서버 버전: 5.1.41
-- PHP 버전: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 데이터베이스: `myshop`
--
CREATE DATABASE `myshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `myshop`;

-- --------------------------------------------------------

--
-- 테이블 구조 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '고유키',
  `name` varchar(128) NOT NULL DEFAULT '' COMMENT '이름',
  `uid` varchar(30) NOT NULL DEFAULT '' COMMENT '유저아이디',
  `upw` varchar(256) NOT NULL DEFAULT '' COMMENT '패스워드',
  `uemail` varchar(256) NOT NULL DEFAULT '' COMMENT '이메일',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '관리상태',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='유저테이블' AUTO_INCREMENT=3 ;

--
-- 테이블의 덤프 데이터 `users`
--

INSERT INTO `users` (`id`, `name`, `uid`, `upw`, `uemail`, `status`) VALUES
(1, '홍길동', 'hong', '1234', 'hong@.aa.com', 0);
