/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : db_psb

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 10/10/2021 13:29:20
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_peserta
-- ----------------------------
DROP TABLE IF EXISTS `tbl_peserta`;
CREATE TABLE `tbl_peserta`  (
  `id_peserta` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_kelamin` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nik` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no_kk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tempat_lahir` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_lahir` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `agama` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no_hp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_pendaftaran` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `asal_sekolah` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jalur_pendaftaran` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_thnajaran` int(11) NULL DEFAULT NULL,
  `nama_ayah` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_ibu` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `thn_lahir_ayah` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `thn_lahir_ibu` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pekerjaan_ayah` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pekerjaan_ibu` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pendidikan_ayah` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pendidikan_ibu` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_peserta`) USING BTREE,
  INDEX `id_thnajaran`(`id_thnajaran`) USING BTREE,
  CONSTRAINT `tbl_peserta_ibfk_1` FOREIGN KEY (`id_thnajaran`) REFERENCES `tbl_tahunajaran` (`id_thnajaran`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 41 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_peserta
-- ----------------------------
INSERT INTO `tbl_peserta` VALUES (35, 'karti', 'Perempuan', '324545678780002', '32245445676001', 'bitung', '1999-08-09', 'Islam', 'kp.pabengharan Rt 02 Rw 07 Des. Citepus kab. Rangkas Tangerang 334344', '085565666678', 'c3.jpg', 'Siswa Baru', 'SD 1 Bitung', 'Badan Misi', 'Proses seleksi', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_peserta` VALUES (36, 'Anggi', 'Laki-Laki', '3202250330960001', '320224355567689001', 'Bogor', '1996-07-07', 'Islam', 'jl.caringin Km 12. Des.caringin Bogor Jawa Barat', '08777545666567', 'c5.jpg', 'Pindahan', 'SLTP 1 marga', 'Badan Umum', 'Lulus', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_peserta` VALUES (37, 'rudi', 'Laki-Laki', '32022510138670001', '3202251389567001201', 'sukabumi', '1992-08-03', 'Islam', 'kp.cibinong Rt 11 Rw 07 Des.cinagen kec.cinagen Kab.sukabumi Jawa Barat 34443', '0855545677878', 'cat-post-2.jpg', 'Siswa Baru', 'SLTA 1 marga', 'Biasiswa', 'Lulus', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_peserta` VALUES (38, 'rudi', 'Laki-Laki', '2345', '2454', 'sukabumi', '2021-08-11', 'Islam', 'fbadfnb', '34636', 'cat-post-2.jpg', 'Siswa Baru', 'SMA 7 Bogor', 'Afirmasi', 'Proses seleksi', NULL, 'kodir', 'omah', '1980', '1990', ' Polri', ' Buruh', ' S1', ' D3');
INSERT INTO `tbl_peserta` VALUES (39, 'sasas', 'Laki-Laki', '12323', '132323', 'Sukabumi', '2021-10-13', 'Islam', 'asdasdasdas', '234234', 'as.jpg', 'Siswa Baru', '2sdfsdf', 'Prestasi', 'Proses seleksi', 1, 'asdasdas', 'sdfsdf', '232', '23232', ' Tani', ' Buruh', ' SLTA', ' STLTP');

-- ----------------------------
-- Table structure for tbl_tahunajaran
-- ----------------------------
DROP TABLE IF EXISTS `tbl_tahunajaran`;
CREATE TABLE `tbl_tahunajaran`  (
  `id_thnajaran` int(255) NOT NULL,
  `tahunAjaran` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_thnajaran`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_tahunajaran
-- ----------------------------
INSERT INTO `tbl_tahunajaran` VALUES (1, '2020/2021', 'aktif');

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user`  (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_user` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES (1, 'admin', 'admin', 'admin');
INSERT INTO `tbl_user` VALUES (3, 'almuridiya', 'admin', 'almuridiah');

SET FOREIGN_KEY_CHECKS = 1;
