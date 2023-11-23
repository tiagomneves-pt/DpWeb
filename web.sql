/*
MySQL Data Transfer
Source Host: localhost
Source Database: web
Target Host: localhost
Target Database: web
Date: 19/11/2023 22:36:23
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for areas
-- ----------------------------
DROP TABLE IF EXISTS `areas`;
CREATE TABLE `areas` (
  `id` tinyint(10) unsigned NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sigla` varchar(64)  DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `visivel` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `color` varchar(16) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for licenciaturas
-- ----------------------------
DROP TABLE IF EXISTS `licenciaturas`;
CREATE TABLE `licenciaturas` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(5) NOT NULL,
  `nome` varchar(256)  NOT NULL,
  `sigla` varchar(10) NOT NULL,
  `ficheiro` varchar(256) DEFAULT NULL,
  `visivel` bit(1) NOT NULL DEFAULT b'1',
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ;

-- ----------------------------
-- Table structure for posgraduacoes
-- ----------------------------
DROP TABLE IF EXISTS `posgraduacoes`;
CREATE TABLE `posgraduacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `areaid` tinyint(4) DEFAULT NULL,
  `nome` varchar(256)  NOT NULL,
  `sigla` varchar(64)  NOT NULL,
  `edicao` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `informacao` varchar(256)  DEFAULT NULL,
  `visivel` bit(1) NOT NULL DEFAULT b'1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updaqted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `areas` VALUES ('1', 'Auditoria e Sistemas de Informação', 'ASI', 'AuditoriaSistemasInformacao', '1', 'color-area1', '2016-12-02 13:30:21', '2023-11-19 22:18:14');
INSERT INTO `areas` VALUES ('2', 'Contabilidade e Fiscalidade', 'CF', 'ContabilidadeFiscalidade', '1', 'color-area2', '2016-07-20 14:20:30', '2023-11-19 22:18:19');
INSERT INTO `areas` VALUES ('3', 'Direito', 'DIR', 'Direito', '1', 'color-area3', '2016-07-20 14:21:22', '2023-11-19 22:18:22');
INSERT INTO `areas` VALUES ('4', 'Gestão e Administração', 'GA', 'GestaoAdministracao', '1', 'color-area4', '2016-07-20 14:22:17', '2023-11-19 22:18:27');
INSERT INTO `areas` VALUES ('5', 'Marketing', 'MARK', 'Marketing', '1', 'color-area5', '2021-10-28 14:29:27', '2023-11-19 22:08:04');
INSERT INTO `licenciaturas` VALUES ('1', '8086', 'Informática de Gestão', 'LIG', null, '', '2023-11-14 18:09:37');
INSERT INTO `licenciaturas` VALUES ('2', '8054', 'Ciência de Dados', 'LCD', null, '', '2023-11-14 18:53:58');
INSERT INTO `posgraduacoes` VALUES ('1', '1', 'Auditoria, Risco e Controlo de Sistemas de Informação', 'ARCSI', '12', 'EM SISTEMA LIVE TRAINING, PRESENCIAL E/OU ONLINE', '', '2023-11-19 22:21:27', null);
INSERT INTO `posgraduacoes` VALUES ('2', '1', 'Cibersegurança', 'CIBER', '4', 'EM SISTEMA LIVE TRAINING, PRESENCIAL E/OU ONLINE', '', '2023-11-19 22:21:41', null);
INSERT INTO `posgraduacoes` VALUES ('3', '2', 'Contabilidade e Fiscalidade Empresarial ', 'CFE', '1', '100% ONLINE, exceto as avaliações | acreditado junto da OCC', '', '2023-11-19 22:21:47', null);
INSERT INTO `posgraduacoes` VALUES ('4', '2', 'Contabilidade Pública, especialização SNC-AP', 'CP-SNC', '1', 'EM SISTEMA LIVE TRAINING, PRESENCIAL E/OU ONLINE', '', '2023-11-19 22:22:02', null);
INSERT INTO `posgraduacoes` VALUES ('5', '3', 'Direito Laboral', 'DIR-LAB', '1', 'EM SISTEMA LIVE TRAINING, PRESENCIAL E/OU ONLINE', '', '2023-11-19 22:32:28', null);
INSERT INTO `posgraduacoes` VALUES ('6', '3', 'Práticas da Contratação Pública', 'PCP', '1', 'EM SISTEMA LIVE TRAINING, PRESENCIAL E/OU ONLINE', '', '2023-11-19 22:32:29', null);
INSERT INTO `posgraduacoes` VALUES ('7', '4', 'Avaliação e Gestão na Actividade Imobiliária', 'AGAI', '1', 'EM SISTEMA LIVE TRAINING, PRESENCIAL E/OU ONLINE', '', '2023-11-19 22:32:46', null);
INSERT INTO `posgraduacoes` VALUES ('8', '4', 'Logística e Gestão de Transportes', 'LGT', '1', '100% ONLINE', '', '2023-11-19 22:33:09', null);
INSERT INTO `posgraduacoes` VALUES ('9', '5', 'Artificial Intelligence for Marketing & Sales', 'AIMS', '1', 'EM SISTEMA LIVE TRAINING, PRESENCIAL E/OU ONLINE', '', '2023-11-19 22:33:26', null);
INSERT INTO `posgraduacoes` VALUES ('10', '5', 'Marketing Digital', 'MD', '1', 'EM SISTEMA LIVE TRAINING, PRESENCIAL E/OU ONLINE', '', '2023-11-19 22:33:29', null);
