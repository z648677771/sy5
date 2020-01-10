<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_kaifamei_com_enewsztinfo`;");
E_C("CREATE TABLE `www_kaifamei_com_enewsztinfo` (
  `zid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ztid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `cid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `mid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `isgood` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`zid`),
  KEY `ztid` (`ztid`),
  KEY `cid` (`cid`),
  KEY `classid` (`classid`),
  KEY `id` (`id`),
  KEY `newstime` (`newstime`),
  KEY `mid` (`mid`),
  KEY `isgood` (`isgood`)
) ENGINE=MyISAM AUTO_INCREMENT=311 DEFAULT CHARSET=utf8");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('1','1','0','1','193','1567334552','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('2','1','0','1','309','1567334327','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('3','1','0','1','472','1567333975','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('4','1','0','1','607','1567333694','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('5','1','0','1','759','1567333354','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('6','1','0','1','852','1567333219','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('7','1','0','1','1061','1567332935','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('8','1','0','1','1116','1567332859','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('9','1','0','1','1210','1567332724','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('10','1','0','1','1291','1567332616','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('11','1','0','1','1421','1567332426','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('12','1','0','1','1853','1567331840','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('13','2','0','1','512','1567333901','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('14','2','0','1','78','1567334762','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('15','2','0','1','264','1567334420','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('16','2','0','1','525','1567333862','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('17','2','0','1','647','1567333605','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('18','2','0','1','661','1567333566','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('19','2','0','1','709','1567333463','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('20','2','0','1','826','1567333251','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('21','2','0','1','830','1567333219','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('22','2','0','1','888','1567333163','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('23','2','0','1','978','1567333039','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('24','2','0','1','1076','1567332908','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('25','2','0','1','1078','1567332908','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('26','2','0','1','1099','1567332886','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('27','2','0','1','1172','1567332774','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('28','2','0','1','1313','1567332585','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('29','2','0','1','1331','1567332548','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('30','2','0','1','1561','1567332243','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('31','2','0','1','1663','1567332108','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('32','2','0','1','1667','1567332102','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('33','2','0','1','1672','1567332093','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('34','2','0','1','1678','1567332083','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('35','2','0','1','1687','1567332074','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('36','2','0','1','1690','1567332072','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('37','2','0','1','1696','1567332065','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('38','2','0','1','1699','1567332061','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('39','2','0','1','1807','1567331909','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('40','2','0','1','1854','1567331809','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('41','3','0','1','1765','1567331970','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('42','3','0','1','1345','1567332505','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('43','3','0','1','1232','1567332689','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('44','3','0','1','502','1567333921','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('45','3','0','1','513','1567333895','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('46','3','0','1','596','1567333714','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('47','3','0','1','874','1567333176','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('48','4','0','1','147','1567334636','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('49','4','0','1','185','1567334561','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('50','4','0','1','401','1567334082','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('51','4','0','1','428','1567334066','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('52','4','0','1','447','1567334031','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('53','4','0','1','543','1567333834','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('54','4','0','1','569','1567333780','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('55','4','0','1','601','1567333658','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('56','4','0','1','651','1567333542','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('57','4','0','1','656','1567333581','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('58','4','0','1','815','1567333272','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('59','4','0','1','875','1567333180','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('60','4','0','1','977','1567333008','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('61','4','0','1','1173','1567332772','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('62','4','0','1','1422','1567332422','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('63','4','0','1','1683','1567332052','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('64','4','0','1','1695','1567332035','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('65','4','0','1','1704','1567332061','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('66','4','0','1','1833','1567331833','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('67','4','0','1','1851','1567331812','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('68','5','0','1','611','1567333686','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('69','5','0','1','619','1567333662','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('70','5','0','1','724','1567333421','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('71','6','0','1','382','1567334177','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('72','6','0','1','1322','1567332566','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('73','6','0','1','1342','1567332508','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('74','6','0','1','1561','1567332243','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('75','6','0','1','1807','1567331909','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('76','7','0','1','1224','1567332698','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('77','7','0','1','1820','1567331885','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('78','8','0','1','75','1567334766','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('79','8','0','1','107','1567334712','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('80','8','0','1','108','1567334712','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('81','8','0','1','119','1567334688','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('82','8','0','1','121','1567334684','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('83','8','0','1','130','1567334625','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('84','8','0','1','160','1567334617','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('85','8','0','1','163','1567334609','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('86','8','0','1','219','1567334503','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('87','8','0','1','241','1567334458','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('88','8','0','1','245','1567334413','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('89','8','0','1','247','1567334451','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('90','8','0','1','250','1567334447','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('91','8','0','1','257','1567334435','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('92','8','0','1','259','1567334427','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('93','8','0','1','261','1567334421','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('94','8','0','1','263','1567334413','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('95','8','0','1','270','1567334399','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('96','8','0','1','278','1567334376','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('97','8','0','1','285','1567334367','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('98','8','0','1','343','1567334257','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('99','8','0','1','346','1567334251','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('100','8','0','1','351','1567334203','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('101','8','0','1','354','1567334240','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('102','8','0','1','361','1567334225','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('103','8','0','1','362','1567334220','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('104','8','0','1','365','1567334214','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('105','8','0','1','387','1567334144','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('106','8','0','1','401','1567334082','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('107','8','0','1','407','1567334110','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('108','8','0','1','424','1567334063','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('109','8','0','1','431','1567334057','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('110','8','0','1','447','1567334031','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('111','8','0','1','498','1567333887','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('112','8','0','1','500','1567333929','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('113','8','0','1','502','1567333921','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('114','8','0','1','503','1567333925','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('115','8','0','1','510','1567333907','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('116','8','0','1','513','1567333895','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('117','8','0','1','516','1567333890','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('118','8','0','1','541','1567333837','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('119','8','0','1','550','1567333824','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('120','8','0','1','552','1567333823','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('121','8','0','1','584','1567333732','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('122','8','0','1','665','1567333555','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('123','8','0','1','668','1567333552','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('124','8','0','1','670','1567333544','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('125','8','0','1','675','1567333525','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('126','8','0','1','677','1567333475','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('127','8','0','1','734','1567333390','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('128','8','0','1','747','1567333380','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('129','8','0','1','755','1567333359','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('130','8','0','1','763','1567333346','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('131','8','0','1','815','1567333272','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('132','8','0','1','820','1567333262','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('133','8','0','1','864','1567333201','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('134','8','0','1','869','1567333191','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('135','8','0','1','881','1567333173','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('136','8','0','1','886','1567333139','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('137','8','0','1','903','1567333150','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('138','8','0','1','909','1567333146','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('139','8','0','1','960','1567333067','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('140','8','0','1','962','1567333063','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('141','8','0','1','966','1567333055','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('142','8','0','1','991','1567333020','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('143','8','0','1','994','1567333018','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('144','8','0','1','1002','1567333012','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('145','8','0','1','1014','1567332992','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('146','8','0','1','1031','1567332967','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('147','8','0','1','1035','1567332966','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('148','8','0','1','1036','1567332936','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('149','8','0','1','1046','1567332953','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('150','8','0','1','1054','1567332949','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('151','8','0','1','1089','1567332865','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('152','8','0','1','1115','1567332863','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('153','8','0','1','1117','1567332859','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('154','8','0','1','1157','1567332799','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('155','8','0','1','1161','1567332790','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('156','8','0','1','1162','1567332789','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('157','8','0','1','1169','1567332778','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('158','8','0','1','1180','1567332736','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('159','8','0','1','1186','1567332729','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('160','8','0','1','1189','1567332724','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('161','8','0','1','1190','1567332755','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('162','8','0','1','1193','1567332751','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('163','8','0','1','1222','1567332703','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('164','8','0','1','1225','1567332698','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('165','8','0','1','1251','1567332643','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('166','8','0','1','1262','1567332656','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('167','8','0','1','1296','1567332608','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('168','8','0','1','1311','1567332587','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('169','8','0','1','1361','1567332510','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('170','8','0','1','1377','1567332455','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('171','8','0','1','1383','1567332450','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('172','8','0','1','1393','1567332469','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('173','8','0','1','1427','1567332387','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('174','8','0','1','1431','1567332413','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('175','8','0','1','1437','1567332405','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('176','8','0','1','1447','1567332396','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('177','8','0','1','1462','1567332374','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('178','8','0','1','1468','1567332360','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('179','8','0','1','1469','1567332359','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('180','8','0','1','1471','1567332357','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('181','8','0','1','1472','1567332354','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('182','8','0','1','1476','1567332346','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('183','8','0','1','1482','1567332339','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('184','8','0','1','1483','1567332313','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('185','8','0','1','1486','1567332310','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('186','8','0','1','1492','1567332306','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('187','8','0','1','1494','1567332330','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('188','8','0','1','1502','1567332320','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('189','8','0','1','1546','1567332263','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('190','8','0','1','1551','1567332230','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('191','8','0','1','1555','1567332255','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('192','8','0','1','1556','1567332251','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('193','8','0','1','1570','1567332229','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('194','8','0','1','1571','1567332229','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('195','8','0','1','1579','1567332217','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('196','8','0','1','1590','1567332204','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('197','8','0','1','1593','1567332202','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('198','8','0','1','1602','1567332192','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('199','8','0','1','1605','1567332192','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('200','8','0','1','1628','1567332154','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('201','8','0','1','1629','1567332151','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('202','8','0','1','1639','1567332106','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('203','8','0','1','1657','1567332119','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('204','8','0','1','1658','1567332120','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('205','8','0','1','1661','1567332112','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('206','8','0','1','1671','1567332097','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('207','8','0','1','1679','1567332084','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('208','8','0','1','1687','1567332074','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('209','8','0','1','1696','1567332065','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('210','8','0','1','1703','1567332026','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('211','8','0','1','1706','1567332057','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('212','8','0','1','1710','1567332050','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('213','8','0','1','1721','1567332028','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('214','8','0','1','1726','1567332020','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('215','8','0','1','1732','1567332012','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('216','8','0','1','1739','1567331971','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('217','8','0','1','1741','1567332003','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('218','8','0','1','1748','1567331963','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('219','8','0','1','1751','1567331960','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('220','8','0','1','1758','1567331978','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('221','8','0','1','1764','1567331970','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('222','8','0','1','1772','1567331956','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('223','8','0','1','1779','1567331945','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('224','8','0','1','1780','1567331919','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('225','8','0','1','1783','1567331911','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('226','8','0','1','1786','1567331906','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('227','8','0','1','1788','1567331935','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('228','8','0','1','1794','1567331929','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('229','8','0','1','1796','1567331927','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('230','8','0','1','1798','1567331891','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('231','8','0','1','1811','1567331903','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('232','8','0','1','1814','1567331893','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('233','8','0','1','1817','1567331894','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('234','8','0','1','1821','1567331886','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('235','8','0','1','1824','1567331880','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('236','8','0','1','1826','1567331878','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('237','8','0','1','1832','1567331872','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('238','8','0','1','1833','1567331833','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('239','8','0','1','1838','1567331866','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('240','8','0','1','1842','1567331823','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('241','8','0','1','1847','1567331851','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('242','8','0','1','1855','1567331847','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('243','8','0','1','1856','1567331836','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('244','8','0','1','1862','1567331828','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('245','8','0','1','1870','1567331812','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('246','8','0','1','1872','1567331810','9','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('247','9','0','2','24','1567333729','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('248','9','0','2','227','1567333434','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('249','9','0','2','18','1567333738','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('250','9','0','2','66','1567333611','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('251','9','0','2','78','1567333595','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('252','9','0','2','82','1567333589','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('253','9','0','2','84','1567333586','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('254','9','0','2','86','1567333615','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('255','9','0','2','88','1567333612','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('256','9','0','2','90','1567333607','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('257','9','0','2','94','1567333601','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('258','9','0','2','98','1567333593','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('259','9','0','2','99','1567333592','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('260','9','0','2','100','1567333590','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('261','9','0','2','101','1567333588','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('262','9','0','2','102','1567333586','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('263','9','0','2','105','1567333582','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('264','9','0','2','108','1567333581','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('265','9','0','2','111','1567333578','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('266','9','0','2','114','1567333576','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('267','9','0','2','125','1567333535','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('268','9','0','2','128','1567333531','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('269','9','0','2','131','1567333528','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('270','9','0','2','132','1567333521','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('271','9','0','2','134','1567333554','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('272','9','0','2','136','1567333552','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('273','9','0','2','138','1567333548','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('274','9','0','2','140','1567333544','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('275','9','0','2','145','1567333536','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('276','9','0','2','147','1567333531','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('277','9','0','2','149','1567333528','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('278','9','0','2','150','1567333525','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('279','9','0','2','151','1567333523','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('280','9','0','2','152','1567333495','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('281','9','0','2','158','1567333515','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('282','9','0','2','159','1567333514','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('283','9','0','2','161','1567333512','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('284','9','0','2','162','1567333512','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('285','9','0','2','164','1567333510','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('286','9','0','2','165','1567333508','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('287','9','0','2','167','1567333507','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('288','9','0','2','170','1567333505','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('289','9','0','2','174','1567333500','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('290','9','0','2','519','1567332968','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('291','9','0','2','662','1567332803','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('292','9','0','2','917','1567332448','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('293','9','0','2','949','1567332406','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('294','10','0','2','659','1567332806','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('295','10','0','2','713','1567332698','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('296','10','0','2','736','1567332699','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('297','10','0','2','763','1567332633','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('298','10','0','2','1038','1567332292','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('299','10','0','2','1046','1567332277','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('300','10','0','2','1050','1567332270','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('301','11','0','2','112','1567333579','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('302','11','0','2','410','1567333114','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('303','11','0','2','746','1567332685','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('304','11','0','2','752','1567332674','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('305','11','0','2','781','1567332614','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('306','11','0','2','1036','1567332295','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('307','11','0','2','1044','1567332280','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('308','11','0','2','1051','1567332267','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('309','11','0','2','1053','1567332264','10','0');");
E_D("replace into `www_kaifamei_com_enewsztinfo` values('310','11','0','2','1377','1567331876','10','0');");

@include("../../inc/footer.php");
?>