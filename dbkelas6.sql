/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50739 (5.7.39)
 Source Host           : localhost:3306
 Source Schema         : kelas6

 Target Server Type    : MySQL
 Target Server Version : 50739 (5.7.39)
 File Encoding         : 65001

 Date: 26/06/2024 21:23:07
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for mahasiswa
-- ----------------------------
DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `npm` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mahasiswa
-- ----------------------------
BEGIN;
INSERT INTO `mahasiswa` (`id`, `npm`, `nama`, `jurusan`) VALUES (1, '2110010460', 'Ahmad Jaya', 'SI');
INSERT INTO `mahasiswa` (`id`, `npm`, `nama`, `jurusan`) VALUES (5, '34536554', 'Andi', 'TI');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `level` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `nama`, `username`, `password`, `created_at`, `updated_at`, `level`) VALUES (1, 'superadmin', 'superadmin', '$2y$12$.9E.bX212h6Gt.kT6CPHOu0i.uP4vinX/asMJtdPqUtPPFnkyHH6C', '2024-06-26 21:20:41', '2024-06-26 13:20:41', 'superadmin');
INSERT INTO `users` (`id`, `nama`, `username`, `password`, `created_at`, `updated_at`, `level`) VALUES (2, 'user', 'user', '$2y$12$xT1o5Lw6nVnGeEIuYtLWvOjj.dsP7Sbe5ORkwCATVB7CJqkSYb.gK', '2024-06-26 21:21:30', '2024-06-26 13:21:30', 'user');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
