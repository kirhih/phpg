SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS `User`;
DROP TABLE IF EXISTS `LogHistory`;
DROP TABLE IF EXISTS `item`;
DROP TABLE IF EXISTS `Mart`;
DROP TABLE IF EXISTS `Cart`;
DROP TABLE IF EXISTS `Order`;
DROP TABLE IF EXISTS `Payment`;
DROP TABLE IF EXISTS `Delivery`;
DROP TABLE IF EXISTS `Finance`;
DROP TABLE IF EXISTS `Session`;
SET FOREIGN_KEY_CHECKS = 1;

CREATE TABLE `User` (
    `id` INTEGER NOT NULL,
    `Name` INTEGER NOT NULL,
    `Logid` INTEGER NOT NULL,
    `Logpw` INTEGER NOT NULL,
    `Tel` INTEGER NOT NULL,
    `Email` INTEGER NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE (`Logid`)
);

CREATE TABLE `LogHistory` (
    `id` INTEGER NOT NULL,
    `uid` INTEGER NOT NULL,
    `date` INTEGER NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `item` (
    `id` INTEGER NOT NULL,
    `mcorner` INTEGER NOT NULL,
    `Name` INTEGER NOT NULL,
    `Price` INTEGER NOT NULL,
    `Desc` INTEGER NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `Mart` (
    `id` INTEGER NOT NULL,
    `corner` INTEGER NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `Cart` (
    `id` INTEGER NOT NULL,
    `itemid` INTEGER NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `Order` (
    `id` INTEGER NOT NULL,
    `itemid` INTEGER NOT NULL,
    `qty` INTEGER NOT NULL,
    `discount` INTEGER NOT NULL,
    `price` INTEGER NOT NULL,
    `oderNo` INTEGER NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `Payment` (
    `id` INTEGER NOT NULL,
    `ordno` INTEGER NOT NULL,
    `orderprice` INTEGER NOT NULL,
    `oderdate` INTEGER NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `Delivery` (
    `id` INTEGER NOT NULL,
    `address` INTEGER NOT NULL,
    `paycode` INTEGER NOT NULL,
    `info` INTEGER NOT NULL,
    `uid` INTEGER NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `Finance` (
);

CREATE TABLE `Session` (
    `id` INTEGER NOT NULL,
    `uid` INTEGER NOT NULL,
    PRIMARY KEY (`id`)
);
