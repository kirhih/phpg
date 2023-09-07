# slack
    * https://shorturl.at/stHJW

    * https://join.slack.com/t/thep9/shared_invite/zt-22jdlbdpi-pvDvq8UyC7SiqZaS22Kh9Q
# php
    * HTML 
      - hyper text markup language
    * <시작태그></종료태그>
    * <시작태그/>
        - 태그의 종류
    * 태그
        - <!DOCTYPE html>
        - <HTML>
            - <head>
                - <meta ...
                - <title ...
                - <style ...
                - <script ...
            - body 
                - <h1~h6 제목
                - <div 블럭
                - <p 문단
                - <ul~li
                - <ol~li
                - <span 인라인
                - <label 인라인
                - 폼관련 태그
                    - <form
                    - <input 인라인
                    - <checkbox 인라인
                    - <select 인라인
                    - <radio 인라인
            - 기타태그
                - <address
                - <article
                - <section
* image 로드 안될때
    - ctrl+shift+r
* DATABASE -mysql
 - 데이터베이스 생성
 ```SQL
    CREATE DATABASE `myshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
```    
* 테이블생성
```SQL
    CREATE TABLE `myshop`.`users` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT '고유키',
    `name` VARCHAR( 128 ) NOT NULL DEFAULT '' COMMENT '이름',
    `uid` VARCHAR( 30 ) NOT NULL DEFAULT '' COMMENT '유저아이디',
    `upw` VARCHAR( 256 ) NOT NULL DEFAULT '' COMMENT '패스워드',
    `uemail` VARCHAR( 256 ) NOT NULL DEFAULT '' COMMENT '이메일',
    `status` INT NOT NULL DEFAULT '0' COMMENT '관리상태'
    ) ENGINE = INNODB COMMENT = '유저테이블';
```
* 테이블에서 컬럼추가
```SQL
    ALTER TABLE `users` ADD `status1` TINYINT UNSIGNED NOT NULL DEFAULT '0'
```
* 컬럼삭제
```SQL
    ALTER TABLE `users` DROP `status1` ;
```
* 추가 insert
```SQL
    INSERT INTO `myshop`.`users` (
    `id` ,`name` ,`uid` ,`upw` ,`uemail` ,`status`
    )
    VALUES (
    NULL , '홍길동', 'hong', '1234', 'hong@.aa.com', '0'
    );

```
* 데이터가져오기 select
```SQL
    SELECT id, name, uid, upw
    FROM `users`
    LIMIT 0 , 30
```
* 데이터 수정
```SQL
    UPDATE `myshop`.`users` SET `name` = '박달재' WHERE `users`.`id` =2 LIMIT 1 ;
```
* 데이터삭제
```SQL
 DELETE FROM `myshop`.`users` WHERE `users`.`id` =2 LIMIT 1 ;
```
