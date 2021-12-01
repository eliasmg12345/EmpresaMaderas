/*
 Navicat Premium Data Transfer

 Source Server         : mysql80
 Source Server Type    : MySQL
 Source Server Version : 80026
 Source Host           : localhost:3306
 Source Schema         : empresaelarbol

 Target Server Type    : MySQL
 Target Server Version : 80026
 File Encoding         : 65001

 Date: 30/11/2021 22:23:01
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for clientes
-- ----------------------------
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes`  (
  `cod_cli` int(0) NOT NULL AUTO_INCREMENT,
  `ci` int(0) NOT NULL DEFAULT 0,
  `nombre` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0',
  `ape_paterno` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0',
  `ape_materno` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0',
  `correo` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0',
  `telefono` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0',
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` datetime(0) NOT NULL,
  PRIMARY KEY (`cod_cli`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of clientes
-- ----------------------------
INSERT INTO `clientes` VALUES (10, 123, 'admin', 'admin', 'admin', 'admin@gmail.com', '123', '21232f297a57a5a743894a0e4a801fc3', '2021-11-26 13:40:31');
INSERT INTO `clientes` VALUES (17, 12345678, 'ana', 'mamani', 'quispe', 'ana@hotmail.com', '7777777', '25d55ad283aa400af464c76d713c07ad', '2021-11-30 21:56:33');

-- ----------------------------
-- Table structure for productos
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos`  (
  `Cod_pro` int(0) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0',
  `Costo` int(0) NOT NULL DEFAULT 0,
  `Cantidad` int(0) NOT NULL DEFAULT 0,
  `imagen` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`Cod_pro`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 40 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of productos
-- ----------------------------
INSERT INTO `productos` VALUES (1, 'madera_selecta', 10, 580, 'productoMaderas.jpg');
INSERT INTO `productos` VALUES (2, 'tablas', 20, 366, 'productoMaderas1.jpg');
INSERT INTO `productos` VALUES (3, 'puntal', 20, 1149, 'productoMaderas2.jpg');
INSERT INTO `productos` VALUES (4, 'triplay_lupuna', 100, 750, 'productoMaderas3.jpg');
INSERT INTO `productos` VALUES (5, 'trupan', 150, 160, 'productoMaderas4.jpg');
INSERT INTO `productos` VALUES (6, 'triplay', 130, 2013, 'productoMaderas5.jpg');
INSERT INTO `productos` VALUES (7, 'pallets_de_madera', 150, 500, 'productoMaderas6.jpg');
INSERT INTO `productos` VALUES (8, 'postes_de_madera', 80, 673, 'productoMaderas7.jpg');
INSERT INTO `productos` VALUES (9, 'Durmientes_de_madera', 200, 1000, 'productoMaderas8.jpg');
INSERT INTO `productos` VALUES (46, 'comun', 100, 190, 'arbol.jpg');
INSERT INTO `productos` VALUES (47, 'Piso Flotante', 150, 199, '1638323907_flotante.jpg');

-- ----------------------------
-- Table structure for reserva
-- ----------------------------
DROP TABLE IF EXISTS `reserva`;
CREATE TABLE `reserva`  (
  `cod_re` int(0) NOT NULL AUTO_INCREMENT,
  `cod_cli` int(0) NOT NULL,
  `cod_pro` int(0) NOT NULL,
  `cantidad` int(0) NOT NULL,
  `fech_reserva` datetime(0) NOT NULL,
  PRIMARY KEY (`cod_re`) USING BTREE,
  INDEX `cliente`(`cod_cli`) USING BTREE,
  INDEX `producto`(`cod_pro`) USING BTREE,
  CONSTRAINT `cliente` FOREIGN KEY (`cod_cli`) REFERENCES `clientes` (`cod_cli`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `producto` FOREIGN KEY (`cod_pro`) REFERENCES `productos` (`Cod_pro`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 49 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of reserva
-- ----------------------------
INSERT INTO `reserva` VALUES (63, 17, 47, 101, '2021-11-30 21:59:43');
INSERT INTO `reserva` VALUES (64, 17, 46, 500, '2021-11-30 22:00:41');

SET FOREIGN_KEY_CHECKS = 1;
