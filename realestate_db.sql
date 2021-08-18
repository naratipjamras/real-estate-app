/*
 Navicat Premium Data Transfer

 Source Server         : local_mysql
 Source Server Type    : MySQL
 Source Server Version : 100420
 Source Host           : localhost:3306
 Source Schema         : realestate_db

 Target Server Type    : MySQL
 Target Server Version : 100420
 File Encoding         : 65001

 Date: 18/08/2021 09:08:38
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.jpg',
  `issuper` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `admins_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES (1, 'admin', 'doctor@gmail.com', '$2y$10$ZltJ4wSqaOy1Nd0TnDI.uezIl/cAFEs2IAsXbD5IyJPkKCjm08Plu', '1628741801.jpg', 0, NULL, '2021-08-06 18:50:03', '2021-08-12 04:16:41');

-- ----------------------------
-- Table structure for apartments
-- ----------------------------
DROP TABLE IF EXISTS `apartments`;
CREATE TABLE `apartments`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `property_id` bigint UNSIGNED NOT NULL,
  `noOfRooms` int NOT NULL,
  `noOfKitchen` int NOT NULL,
  `noOfWashrooms` int NOT NULL,
  `size` int NOT NULL,
  `nearestSchool` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nearestRailway` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nearestBusStop` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `apartments_property_id_foreign`(`property_id`) USING BTREE,
  CONSTRAINT `apartments_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of apartments
-- ----------------------------
INSERT INTO `apartments` VALUES (1, 10, 4, 4, 1, 100, 'สันกำแพง', 'สันกำแพง', 'สันกำแพง', '2021-08-15 12:43:10', '2021-08-15 12:43:10');

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `articles_admin_id_foreign`(`admin_id`) USING BTREE,
  CONSTRAINT `articles_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of articles
-- ----------------------------

-- ----------------------------
-- Table structure for buildings
-- ----------------------------
DROP TABLE IF EXISTS `buildings`;
CREATE TABLE `buildings`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `property_id` bigint UNSIGNED NOT NULL,
  `agreement` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noOfFloors` int NOT NULL,
  `lift` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `carPark` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `floorSize` int NOT NULL,
  `nearestSchool` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nearestRailway` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nearestBusStop` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `buildings_property_id_foreign`(`property_id`) USING BTREE,
  CONSTRAINT `buildings_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of buildings
-- ----------------------------
INSERT INTO `buildings` VALUES (1, 9, 'lease', 2, 'Available', 'Available', 100, 'สันกำแพง', 'สันกำแพง', 'สันกำแพง', '2021-08-15 10:51:17', '2021-08-15 10:51:17');

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `article_id` int NOT NULL,
  `comment` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of comments
-- ----------------------------

-- ----------------------------
-- Table structure for favorites
-- ----------------------------
DROP TABLE IF EXISTS `favorites`;
CREATE TABLE `favorites`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `property_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `house_id` bigint UNSIGNED NULL DEFAULT NULL,
  `land_id` bigint UNSIGNED NULL DEFAULT NULL,
  `building_id` bigint UNSIGNED NULL DEFAULT NULL,
  `apartment_id` bigint UNSIGNED NULL DEFAULT NULL,
  `warehouse_id` bigint UNSIGNED NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `favorites_property_id_foreign`(`property_id`) USING BTREE,
  INDEX `favorites_user_id_foreign`(`user_id`) USING BTREE,
  INDEX `favorites_house_id_foreign`(`house_id`) USING BTREE,
  INDEX `favorites_land_id_foreign`(`land_id`) USING BTREE,
  INDEX `favorites_building_id_foreign`(`building_id`) USING BTREE,
  INDEX `favorites_apartment_id_foreign`(`apartment_id`) USING BTREE,
  INDEX `favorites_warehouse_id_foreign`(`warehouse_id`) USING BTREE,
  CONSTRAINT `favorites_apartment_id_foreign` FOREIGN KEY (`apartment_id`) REFERENCES `apartments` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `favorites_building_id_foreign` FOREIGN KEY (`building_id`) REFERENCES `buildings` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `favorites_house_id_foreign` FOREIGN KEY (`house_id`) REFERENCES `houses` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `favorites_land_id_foreign` FOREIGN KEY (`land_id`) REFERENCES `lands` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `favorites_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `favorites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `favorites_warehouse_id_foreign` FOREIGN KEY (`warehouse_id`) REFERENCES `warehouses` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of favorites
-- ----------------------------
INSERT INTO `favorites` VALUES (2, 7, 1, 6, NULL, NULL, NULL, NULL, '2021-08-13 05:54:25', '2021-08-13 05:54:25');

-- ----------------------------
-- Table structure for houses
-- ----------------------------
DROP TABLE IF EXISTS `houses`;
CREATE TABLE `houses`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `property_id` bigint UNSIGNED NOT NULL,
  `noOfRooms` int NOT NULL,
  `noOfKitchen` int NOT NULL,
  `noOfFloors` int NOT NULL,
  `noOfWashrooms` int NOT NULL,
  `size` int NOT NULL,
  `swimmingPool` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `garden` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nearestSchool` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nearestRailway` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nearestBusStop` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `houses_property_id_foreign`(`property_id`) USING BTREE,
  CONSTRAINT `houses_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of houses
-- ----------------------------
INSERT INTO `houses` VALUES (6, 7, 4, 1, 1, 1, 98, 'Available', 'Available', 'รร.สันกำแพง', 'สถานีรถไฟเมืองเชียงใหม่', 'ป้ายตลาดเจริญ', '2021-08-12 04:56:04', '2021-08-12 04:56:04');

-- ----------------------------
-- Table structure for lands
-- ----------------------------
DROP TABLE IF EXISTS `lands`;
CREATE TABLE `lands`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `property_id` bigint UNSIGNED NOT NULL,
  `electricity` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tapwater` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int NOT NULL,
  `nearestSchool` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nearestRailway` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nearestBusStop` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `lands_property_id_foreign`(`property_id`) USING BTREE,
  CONSTRAINT `lands_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of lands
-- ----------------------------
INSERT INTO `lands` VALUES (1, 8, '3 เฟส', 'Available', 100, 'บ้านใหม่ทดสอบ', 'บ้านใหม่ทดสอบ', 'บ้านใหม่ทดสอบ', '2021-08-15 06:48:47', '2021-08-15 06:48:47');

-- ----------------------------
-- Table structure for messages
-- ----------------------------
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of messages
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000004_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_03_09_103124_create_contactmessages_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_04_05_100815_create_admins_table', 1);
INSERT INTO `migrations` VALUES (5, '2019_04_08_155443_create_comments_table', 1);
INSERT INTO `migrations` VALUES (6, '2019_04_08_155549_create_articles_table', 1);
INSERT INTO `migrations` VALUES (7, '2019_04_08_160000_create_properties_table', 1);
INSERT INTO `migrations` VALUES (8, '2019_04_08_160040_create_lands_table', 1);
INSERT INTO `migrations` VALUES (9, '2019_04_08_160053_create_warehouses_table', 1);
INSERT INTO `migrations` VALUES (10, '2019_04_08_160109_create_buildings_table', 1);
INSERT INTO `migrations` VALUES (11, '2019_04_08_160126_create_apartments_table', 1);
INSERT INTO `migrations` VALUES (12, '2019_04_08_160133_create_houses_table', 1);
INSERT INTO `migrations` VALUES (13, '2019_04_08_245806_create_offers_table', 1);
INSERT INTO `migrations` VALUES (14, '2019_04_08_245921_create_favorites_table', 1);
INSERT INTO `migrations` VALUES (15, '2019_05_04_125148_create_user_emails_table', 1);
INSERT INTO `migrations` VALUES (16, '2019_05_04_230409_create_report_properties_table', 1);

-- ----------------------------
-- Table structure for offers
-- ----------------------------
DROP TABLE IF EXISTS `offers`;
CREATE TABLE `offers`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `property_id` bigint UNSIGNED NOT NULL,
  `house_id` bigint UNSIGNED NULL DEFAULT NULL,
  `land_id` bigint UNSIGNED NULL DEFAULT NULL,
  `building_id` bigint UNSIGNED NULL DEFAULT NULL,
  `apartment_id` bigint UNSIGNED NULL DEFAULT NULL,
  `warehouse_id` bigint UNSIGNED NULL DEFAULT NULL,
  `offeredUser` bigint UNSIGNED NOT NULL,
  `offerAmount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `offers_property_id_foreign`(`property_id`) USING BTREE,
  INDEX `offers_offereduser_foreign`(`offeredUser`) USING BTREE,
  INDEX `offers_house_id_foreign`(`house_id`) USING BTREE,
  INDEX `offers_land_id_foreign`(`land_id`) USING BTREE,
  INDEX `offers_building_id_foreign`(`building_id`) USING BTREE,
  INDEX `offers_apartment_id_foreign`(`apartment_id`) USING BTREE,
  INDEX `offers_warehouse_id_foreign`(`warehouse_id`) USING BTREE,
  CONSTRAINT `offers_apartment_id_foreign` FOREIGN KEY (`apartment_id`) REFERENCES `apartments` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `offers_building_id_foreign` FOREIGN KEY (`building_id`) REFERENCES `buildings` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `offers_house_id_foreign` FOREIGN KEY (`house_id`) REFERENCES `houses` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `offers_land_id_foreign` FOREIGN KEY (`land_id`) REFERENCES `lands` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `offers_offereduser_foreign` FOREIGN KEY (`offeredUser`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `offers_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `offers_warehouse_id_foreign` FOREIGN KEY (`warehouse_id`) REFERENCES `warehouses` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of offers
-- ----------------------------

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for properties
-- ----------------------------
DROP TABLE IF EXISTS `properties`;
CREATE TABLE `properties`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `city` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `postalCode` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `availability` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `contactNo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `contatctEmail` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of properties
-- ----------------------------
INSERT INTO `properties` VALUES (7, 1, 'หมู่บ้านเดอะฟรีโก้', '10', '10', 'House', 3500000, 'Ambalangoda', '50130', 'Central', '<p>หมู่บ้านเดอะฟรีโก้</p>', '[\"real_6114a9e0f2bd8.jpg\",\"real_6114a9e26b81a.jpg\"]', '', '0856159091', 'mr.naratip.jamras@gmail.com', '2021-08-12 04:56:04', '2021-08-12 04:56:04');
INSERT INTO `properties` VALUES (8, 1, 'หมู่บ้านเดอะฟรีโก้', '9', '9', 'Land', 1000000, 'เชียงใหม่', '50130', 'Eastern', '<p>หมู่บ้านเดอะฟรีโก้</p>', '[\"real_6118b8cc04b86.jpg\",\"real_6118b8cd846d5.jpg\"]', '', '0856159091', 'mr.naratip.jamras@gmail.com', '2021-08-15 06:48:47', '2021-08-15 06:48:47');
INSERT INTO `properties` VALUES (9, 1, 'หมู่บ้านเดอะฟรีโก้', '8', '8', 'Building', 1000000, 'ขอนแก่น', '50130', 'Central', '<p>หมู่บ้านเดอะฟรีโก้</p>', '[\"real_6118f1a29f90e.jpg\",\"real_6118f1a444c4b.jpg\"]', '', '0856159091', 'mr.naratip.jamras@gmail.com', '2021-08-15 10:51:17', '2021-08-15 10:51:17');
INSERT INTO `properties` VALUES (10, 1, 'หมู่บ้านเดอะฟรีโก้', '7', '7', 'Apartment', 1000000, 'กำแพงเพชร', '50130', 'Central', '<p>หมู่บ้านเดอะฟรีโก้</p>', '[\"real_61190bdb33a3f.jpg\",\"real_61190bdca4f12.jpg\"]', '', '0856159091', 'mr.naratip.jamras@gmail.com', '2021-08-15 12:43:10', '2021-08-15 12:43:10');

-- ----------------------------
-- Table structure for report_properties
-- ----------------------------
DROP TABLE IF EXISTS `report_properties`;
CREATE TABLE `report_properties`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `property_id` bigint UNSIGNED NOT NULL,
  `house_id` bigint UNSIGNED NULL DEFAULT NULL,
  `land_id` bigint UNSIGNED NULL DEFAULT NULL,
  `building_id` bigint UNSIGNED NULL DEFAULT NULL,
  `apartment_id` bigint UNSIGNED NULL DEFAULT NULL,
  `warehouse_id` bigint UNSIGNED NULL DEFAULT NULL,
  `reporterEmail` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Reason` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `report_properties_property_id_foreign`(`property_id`) USING BTREE,
  INDEX `report_properties_house_id_foreign`(`house_id`) USING BTREE,
  INDEX `report_properties_land_id_foreign`(`land_id`) USING BTREE,
  INDEX `report_properties_building_id_foreign`(`building_id`) USING BTREE,
  INDEX `report_properties_apartment_id_foreign`(`apartment_id`) USING BTREE,
  INDEX `report_properties_warehouse_id_foreign`(`warehouse_id`) USING BTREE,
  CONSTRAINT `report_properties_apartment_id_foreign` FOREIGN KEY (`apartment_id`) REFERENCES `apartments` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `report_properties_building_id_foreign` FOREIGN KEY (`building_id`) REFERENCES `buildings` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `report_properties_house_id_foreign` FOREIGN KEY (`house_id`) REFERENCES `houses` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `report_properties_land_id_foreign` FOREIGN KEY (`land_id`) REFERENCES `lands` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `report_properties_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `report_properties_warehouse_id_foreign` FOREIGN KEY (`warehouse_id`) REFERENCES `warehouses` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of report_properties
-- ----------------------------
INSERT INTO `report_properties` VALUES (1, 7, 6, NULL, NULL, NULL, NULL, 'njamras@hotmail.com', 'ทดสอบ', '2021-08-13 06:15:17', '2021-08-13 06:15:17');

-- ----------------------------
-- Table structure for user_emails
-- ----------------------------
DROP TABLE IF EXISTS `user_emails`;
CREATE TABLE `user_emails`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `receiver_id` bigint UNSIGNED NOT NULL,
  `sender_id` bigint UNSIGNED NOT NULL,
  `senderName` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `senderMail` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `subject` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_url` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unread',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_emails
-- ----------------------------
INSERT INTO `user_emails` VALUES (1, 1, 0, 'Naratip Jamras', 'njamras@hotmail.com', '618263338', 'test', 'test', 'house/6', 'unread', '2021-08-13 03:35:33', '2021-08-13 03:35:33');
INSERT INTO `user_emails` VALUES (2, 1, 0, 'Naratip Jamras', 'njamras@hotmail.com', '618263338', 'test', 'test', 'house/6', 'unread', '2021-08-13 03:37:12', '2021-08-13 03:37:12');
INSERT INTO `user_emails` VALUES (3, 1, 0, 'Naratip Jamras', 'njamras@hotmail.com', '618263338', 'test', 'test', 'house/6', 'unread', '2021-08-13 03:43:29', '2021-08-13 03:43:29');
INSERT INTO `user_emails` VALUES (4, 1, 0, 'Naratip Jamras', 'mr.naratip.jamras@gmail.com', '618263338', 'test', 'test', 'house/6', 'read', '2021-08-13 03:50:30', '2021-08-14 08:47:53');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.jpg',
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `NIC` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `city` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `gender` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `birthday` date NULL DEFAULT NULL,
  `phoneNo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Naratip Jamras', 'mr.naratip.jamras@gmail.com', '2021-08-06 18:30:15', '$2y$10$gQSDarru.2wb67bQtECwLOvzqg3p7MQiU2is0sOziLEmvFwCCEgIy', '1628752117.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-06 10:58:17', '2021-08-12 07:08:37');
INSERT INTO `users` VALUES (9, 'Naowarat Jamras', 'njamras@hotmail.com', NULL, '$2y$10$ZltJ4wSqaOy1Nd0TnDI.uezIl/cAFEs2IAsXbD5IyJPkKCjm08Plu', 'user.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-09 06:49:53', '2021-08-09 06:49:53');

-- ----------------------------
-- Table structure for warehouses
-- ----------------------------
DROP TABLE IF EXISTS `warehouses`;
CREATE TABLE `warehouses`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `property_id` bigint UNSIGNED NOT NULL,
  `electricity` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parkingArea` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `agreement` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `warehouses_property_id_foreign`(`property_id`) USING BTREE,
  CONSTRAINT `warehouses_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of warehouses
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
