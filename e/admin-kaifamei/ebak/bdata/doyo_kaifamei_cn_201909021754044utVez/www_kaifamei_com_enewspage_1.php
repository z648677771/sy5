<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_kaifamei_com_enewspage`;");
E_C("CREATE TABLE `www_kaifamei_com_enewspage` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(120) NOT NULL DEFAULT '',
  `pagetext` mediumtext NOT NULL,
  `path` varchar(255) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pagetitle` varchar(120) NOT NULL DEFAULT '',
  `pagekeywords` varchar(255) NOT NULL DEFAULT '',
  `pagedescription` varchar(255) NOT NULL DEFAULT '',
  `tempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `www_kaifamei_com_enewspage` values('1',0xe58aa8e68081e9a1b5e5b0bee983a8,0x5b212d2d74656d702e666f6f7465722d2d5d,0x2e2e2f2e2e2f68746d6c2f666f6f7465722e68746d6c,'0','','','','0');");
E_D("replace into `www_kaifamei_com_enewspage` values('2',0xe585b3e4ba8ee69cace7ab99,0xe4bbbfe98097e6b8b8e7bd91efbc883c6120687265663d5c2268747470733a2f2f7777772e6b616966616d65692e636f6d5c223e646f796f2e6b616966616d65692e636e3c2f613eefbc89e698afe6b8b8e6888fe7bbbce59088e997a8e688b7e38081e58d8ee8afade6b8b8e6888fe783ade997a8e4b88be8bdbde4b8ade5bf83efbc8ce696b0e6b8b8e6888fe68ea8e5b9bfe6a0b8e5bf83e5aa92e4bd93e38081e9878de5baa6e6898be6b8b8e68ea8e5b9bfe696b0e998b5e59cb0e38081e6b39be5a8b1e4b990e58685e5aeb9e8b584e8aeafe5b9b3e58fb0efbc8ce698afe5b9bfe5a4a7e6b8b8e6888fe78ea9e5aeb6e5928ce6b39be5a8b1e4b990e794a8e688b7e8819ae99b86e79a84e6b8b8e6888fe5aa92e4bd93e79fa9e998b5e5b9b3e58fb0e380823c6272202f3e3c6272202f3ee6af8fe697a5e68f90e4be9be585a8e79083e88c83e59bb4e58685e783ade997a8e6b8b8e6888fe8b584e8aeafe79a84e696b0e6b8b8e9a291e98193efbc8ce4b8bae78ea9e5aeb6e68f90e4be9be783ade997a8e79a84e6b8b8e6888fe4b893e9a298e5928ce79bb8e585b3e4bb8be7bb8defbc8ce5bc95e5afbce79d80e794a8e688b7e5afb9e696b0e6b8b8e6888fe8bf9be8a18ce98089e68ba9e38082e68891e4bbace794a8e69c80e5a5bde79a84e69c8de58aa1efbc8ce8aea9e78ea9e5aeb6e4ba86e8a7a3e696b0e6b8b8e6888fe38081e585b3e6b3a8e696b0e6b8b8e6888fefbc8ce4b8bae696b0e6b8b8e6888fe79a84e68ea8e5b9bfe68f90e4be9be4bc98e8b4a8e5aea3e4bca0e5b9b3e58fb0e380823c6272202f3e3c6272202f3e266e6273703b,0x2e2e2f2e2e2f737570706f72742f61626f75742e68746d6c,'0',0xe585b3e4ba8ee69cace7ab99,0xe585b3e4ba8ee69cace7ab99,0xe585b3e4ba8ee69cace7ab99,'1');");
E_D("replace into `www_kaifamei_com_enewspage` values('3',0xe58f8be68385e993bee68ea5,0x3c703ee58f8be68385e993bee68ea5e59088e4bd9c3c2f703e0d0a3c703ee88194e7b3bb5151efbc9a3230383131353336353c2f703e0d0a3c703e5053efbc9ae6ada45151e58faae68ea5e58f97e58f8be993bee59088e4bd9cefbc8ce58aa0e5a5bde58f8be697b6e8afb7e5a487e6b3a8e7bd91e7ab99e58f8ae69d83e9878defbc813c2f703e0d0a3c703ee59088e4bd9ce8a681e6b1823c2f703e0d0a3c703e312e73656fe695b0e68daee79bb8e5bd93efbc8ce59084e6909ce7b4a2e5bc95e6938ee694b6e5bd95e889afe5a5bde38081e8a18ce4b89ae79fa5e5908de7bd91e7ab99e4bc98e58588e380823c2f703e0d0a3c703e322ee8a18ce4b89ae59fbae69cace79bb8e585b3efbc8ce781b0e889b2e8a18ce4b89ae38081e693a6e8beb9e8a18ce4b89ae7ad89e58bbfe689b0e38082e6b8b8e6888fe79bb8e585b3e7ab99e782b9e4bc98e58588e380823c2f703e0d0a3c703e332ee8af9ae4bfa1e4b8bae69cacefbc8ce5a682e99c80e692a4e99480e58f8be68385e993bee68ea5efbc8ce79086e5ba94e68f90e5898de5918ae79fa5efbc8ce7a781e4b88be692a4e99480e58f91e78eb0e88085efbc8ce5b086e6b0b8e4b88de59088e4bd9cefbc81266e6273703b3c2f703e,0x2e2e2f2e2e2f6c696e6b2f696e6465782e68746d6c,'0',0xe58f8be68385e993bee68ea5,0xe58f8be68385e993bee68ea5,0xe58f8be68385e993bee68ea5,'1');");
E_D("replace into `www_kaifamei_com_enewspage` values('4',0xe88194e7b3bbe68891e4bbac,0x3c703ee88194e7b3bb5151efbc9a3230383131353336353c2f703e,0x2e2e2f2e2e2f737570706f72742f636f6e746163742e68746d6c,'0',0xe88194e7b3bbe68891e4bbac,0xe88194e7b3bbe68891e4bbac,0xe88194e7b3bbe68891e4bbac,'1');");
E_D("replace into `www_kaifamei_com_enewspage` values('5',0xe5aeb6e995bfe79b91e68aa4,0x3c703ee7bd91e7bb9ce6b8b8e6888fe69caae68890e5b9b4e4babae5aeb6e995bfe79b91e68aa4e5b7a5e7a88be698afe4b880e9a1b9e794b1e59bbde58685e7bd91e7bb9ce6b8b8e6888fe4bc81e4b89ae585b1e5908ce58f91e8b5b7e5b9b6e58f82e4b88ee5ae9ee696bdefbc8ce794b1e4b8ade58d8ee4babae6b091e585b1e5928ce59bbde69687e58c9620e983a8e68c87e5afbcefbc8ce697a8e59ca8e58aa0e5bcbae5aeb6e995bfe5afb9e69caae68890e5b9b4e4babae58f82e4b88ee7bd91e7bb9ce6b8b8e6888fe79a84e79b91e68aa4efbc8ce5bc95e5afbce69caae68890e5b9b4e4babae581a5e5bab7e38081e7bbbfe889b2e58f82e4b88ee7bd91e7bb9ce6b8b8e6888fefbc8ce5928ce8b090e5aeb6e5baade585b3e7b3bbe79a84e7a4bee4bc9ae680a7e585ace79b8ae8a18ce58aa8e38082e5ae83e68f90e4be9be4ba86e4b880e7a78de58887e5ae9ee58fafe8a18ce79a84e696b9e6b395efbc8c20e4b880e7a78de5aeb6e995bfe5ae9ee696bde79b91e68ea7e79a84e7aea1e98193efbc8ce4bdbfe5aeb6e995bfe7baa0e6ada3e983a8e58886e69caae68890e5b9b4e5ad90e5a5b3e6b289e8bfb7e6b8b8e6888fe79a84e8a18ce4b8bae68890e4b8bae58fafe883bde380823c2f703e0d0a3c703ee8afa5e9a1b9e7a4bee4bc9ae585ace79b8ae8a18ce58aa8e58585e58886e58f8de698a0e4ba86e4b8ade59bbde7bd91e7bb9ce6b8b8e6888fe8a18ce4b89ae9ab98e5baa6e79a84e7a4bee4bc9ae8b4a3e4bbbbe6849fefbc8ce5afb9e69caae68890e5b9b4e78ea9e5aeb6e59088e6b395e69d83e79b8ae79a84e585b3e6b3a8e58f8ae5afb9e794a8e5ae9ee99985e8a18ce58aa8e890a5e980a0e5928ce8b090e7a4bee4bc9ae79a84e684bfe69c9be380823c2f703e0d0a3c703e2671756f743be5aeb6e995bfe79b91e68aa4e69cbae588b62671756f743be698afe4bbbfe98097e6b8b8e7bd91e5b9b3e58fb0e59ca8e8bf99e4b880e585ace79b8ae8a18ce58aa8e4b8adefbc8ce99288e5afb9e79baee5898de69caae68890e5b9b4e4babae7bcbae4b98fe887aae68ea7e58f8ae887aae5be8be883bde58a9befbc8ce5aeb9e69893e999b7e585a5e6b289e8bfb7efbc9be5b09120e695b0e79b91e68aa4e4babae7bcbae5b091e697b6e997b4e785a7e9a1bee69caae68890e5b9b4e4babaefbc8ce4b88de883bde58f8ae697b6e79b91e79da3e69caae68890e5b9b4e4babae6b8b8e6888fe697b6e997b4e79a84e78eb0e78ab6efbc8ce8808ce68ea8e587bae79a84e4b880e7a78de58fafe794b1e5aeb6e995bfe5ae9ee696bde79b91e68ea7efbc8ce7baa0e6ada3e983a8e58886e69caae68890e5b9b4e5ad90e5a5b3e6b289e8bfb7e6b8b8e6888fe79a84e4bf9de68aa4e69cbae588b6e380823c2f703e0d0a3c703e3c7374726f6e673ee3808ae69caae68890e5b9b4e4babae581a5e5bab7e58f82e4b88ee7bd91e7bb9ce6b8b8e6888fe68f90e7a4bae3808b3c2f7374726f6e673e3c2f703e0d0a3c703ee99a8fe79d80e7bd91e7bb9ce59ca8e99d92e5b091e5b9b420e4b8ade79a84e699aee58f8aefbc8ce69caae68890e5b9b4e4babae68ea5e8a7a6e7bd91e7bb9ce6b8b8e6888fe5b7b2e7bb8fe68890e4b8bae699aee9818de78eb0e8b1a1e38082e4b8bae4bf9de68aa4e69caae68890e5b9b4e4babae581a5e5bab7e58f82e4b88ee6b8b8e6888fefbc8ce59ca8e694bfe5ba9ce8bf9be4b880e6ada5e58aa0e5bcbae8a18ce4b89ae7aea1e79086e79a84e5898de68f90e4b88befbc8ce5aeb6e995bfe4b99fe5ba94e5bd93e58aa0e5bcbae79b91e68aa4e5bc95e5afbce38082e4b8bae6ada4efbc8ce68891e4bbac20e4b8bae69caae68890e5b9b4e4babae58f82e4b88ee7bd91e7bb9ce6b8b8e6888fe68f90e4be9be4bba5e4b88be6848fe8a781efbc9a3c2f703e0d0a3c703ee4b880e38081e4b8bbe58aa8e68ea7e588b6e6b8b8e6888fe697b6e997b4e38082e6b8b8e6888fe58faae698afe5ada6e4b9a0e38081e7949fe6b4bbe79a84e8b083e58982efbc8ce8a681e7a7afe69e81e58f82e4b88ee7babfe4b88be79a84e59084e7b1bbe6b4bbe58aa8efbc8ce5b9b6e8aea9e788b6e6af8de4ba86e8a7a3e887aae5b7b1e59ca8e7bd91e7bb9ce6b8b8e6888fe4b8ade79a84e8a18ce4b8bae5928ce4bd93e9aa8ce380823c2f703e0d0a3c703ee4ba8ce38081e4b88de58f82e4b88ee58fafe883bde88097e8b4b9e8be83e5a49ae697b6e997b4e79a84e6b8b8e6888fe8aebee7bdaee38082e4b88de78ea9e5a4a7e59e8be8a792e889b2e689aee6bc94e7b1bbe6b8b8e6888fefbc8ce4b88de78ea9e69c89504be7b1bbe8aebee7bdaee79a84e6b8b8e6888fe38082e59ca8e6a0a1e5ada6e7949fe6af8fe591a8e78ea9e6b8b8e6888fe4b88de8b685e8bf8732e5b08fe697b6efbc8ce6af8fe69c88e59ca8e6b8b8e6888fe4b8ade79a84e88ab1e8b4b9e4b88de8b685e8bf873130e58583e380823c2f703e0d0a3c703ee4b889e38081e4b88de8a681e5b086e6b8b8e6888fe5bd93e4bd9ce7b2bee7a59ee5af84e68998e38082e5b0a4e585b6e59ca8e78eb0e5ae9ee7949fe6b4bbe4b8ade98187e588b0e58e8be58a9be5928ce68cabe68a98e697b6efbc8ce5ba94e5a49ae4b88ee5aeb6e4babae69c8be58f8be4baa4e6b581e580bee8af89efbc8ce4b88de8a681e58faae4be9de99da0e6b8b8e6888fe69da5e7bc93e8a7a3e58e8be58a9be380823c2f703e0d0a3c703ee59b9be38081e585bbe68890e7a7afe69e81e581a5e5bab7e79a84e6b8b8e6888fe5bf83e68081e38082e5858be69c8de69480e6af94e38081e782abe88080e38081e4bb87e681a8e5928ce68aa5e5a48de7ad89e5bf83e79086efbc8ce981bfe5858de5bda2e68890e6acbae5878ce5bcb1e5b08fe38081e68aa2e58aabe4bb96e4babae7ad89e4b88de889afe7bd91e7bb9ce8a18ce4b8bae4b9a0e683afe380823c2f703e0d0a3c703ee4ba94e38081e6b3a8e6848fe4bf9de68aa4e4b8aae4babae4bfa1e681afe38082e58c85e68bace4b8aae4babae5aeb6e5baade38081e69c8be58f8be8baabe4bbbde4bfa1e681afefbc8ce5aeb6e5baade38081e5ada6e6a0a1e38081e58d95e4bd8de59cb0e59d80efbc8ce794b5e8af9de58fb7e7a081e7ad89efbc8ce998b2e88c83e7bd91e7bb9ce999b7e998b1e5928ce7bd91e7bb9ce78aafe7bdaae380823c2f703e0d0a3c703e3c7374726f6e673ee5aeb6e995bfe79b91e68aa4e69c8de58aa1e8afb4e6988eefbc9a3c2f7374726f6e673e3c2f703e0d0a3c703ee5aeb6e995bfe79b91e68aa4e7b3bbe7bb9fe58585e58886e88083e89991e5aeb6e995bfe79a84e5ae9ee99985e99c80e6b182efbc8ce5bd93e5aeb6e995bf20e58f91e78eb0e887aae5b7b1e79a84e5ada9e5ad90e78ea9e6b8b8e6888fe8bf87e4ba8ee6b289e8bfb7e79a84e697b6e58099efbc8ce794b1e5aeb6e995bfe68f90e4be9be59088e6b395e79a84e79b91e68aa4e4babae8b584e8b4a8e8af81e6988ee38081e6b8b8e6888fe5908de7a7b0e8b4a6e58fb7e38081e4bba5e58f8ae5aeb6e995bfe5afb9e4ba8ee99990e588b6e5bcbae5baa6e79a84e684bfe69c9be7ad89e4bfa1e681afefbc8ce58fafe5afb9e5a484e4ba8ee5ada9e5ad90e6b8b8e6888fe6b289e8bfb7e78ab6e68081e79a84e8b4a620e58fb7e98787e58f96e587a0e7a78de99990e588b6e68eaae696bdefbc8ce8a7a3e586b3e69caae68890e5b9b4e4babae6b289e8bfb7e6b8b8e6888fe79a84e4b88de889afe78eb0e8b1a1efbc8ce5a682e99990e588b6e69caae68890e5b9b4e4babae6af8fe5a4a9e78ea9e6b8b8e6888fe79a84e697b6e997b4e58cbae997b4e5928ce995bfe5baa6efbc8ce4b99fe58fafe4bba5e99990e588b6e58faae69c89e88a82e58187e697a5e6898de58fafe4bba5e6b8b8e6888fefbc8ce68896e88085e5ae8ce585a8e7a681e6ada2e380823c2f703e0d0a3c703ee5aeb6e995bfe79b91e68aa4e69c8de58aa1e8bf9be5baa6e69fa5e8afa2efbc9ae5a682e69e9ce682a8e5b7b2e7bb8fe794b3e8afb7e5aeb6e995bfe79b91e68aa4e69c8de58aa1efbc8ce59ca8e69c8de58aa1e69c9fe997b4efbc8ce5bd93e682a8e5afb9e99c80e8a681e68f90e4baa4e79a84e4bfa1e681afe38081e5a484e79086e7bb93e69e9ce69c89e79691e997aeefbc8ce68896e88085e585b6e4bb96e4bbbbe4bd95e997aee9a298efbc8ce682a8e59d87e58fafe4bba5e59ca8e5b7a5e4bd9ce697b6e997b4e88194e7b3bbe68891e4bbacefbc8ce68891e4bbace5b086e794b1e4b893e997a8e8b49fe8b4a3e79a84e58f97e79086e4b893e59198e4b8bae682a8e68f90e4be9be592a8e8afa2e8a7a3e7ad94e69c8de58aa1efbc8ce68896e88085e9858de59088e38081e68c87e5afbce682a8e8a7a3e586b3e997aee9a298e380823c2f703e,0x2e2e2f2e2e2f737570706f72742f6a7a6a682e68746d6c,'0',0xe5aeb6e995bfe79b91e68aa4,0xe5aeb6e995bfe79b91e68aa4,0xe5aeb6e995bfe79b91e68aa4,'1');");
E_D("replace into `www_kaifamei_com_enewspage` values('6',0xe585a5e5ba93e794b3e8afb7,0x3c703ee585a5e5ba93e88194e7b3bb5151efbc9a3230383131353336353c2f703e0d0a3c703ee585a5e5ba93e68f90e98692efbc9a3c2f703e0d0a3c703e31e38081e5b8a62ae58fb7e4b8bae5bf85e5a1abe9a1b9efbc8ce590a6e88085e5b086e4bc9ae585a5e5ba93e5a4b1e8b4a5efbc81266e6273703b3c2f703e0d0a3c703e32e38081e590abe4b88de889afe4bfa1e681afe58f8ae5afb9e794a8e688b7e980a0e68890e4b88de889afe5bdb1e5938de79a84e6b8b8e6888fe4b88de694b6e5bd95efbc8ce4b880e7bb8fe58f91e78eb0e5bd95e585a5e79a84e6b8b8e6888fe590abe4b88de889afe4bfa1e681afefbc8ce4bbbfe98097e6b8b8e7bd91e69c89e69d83e7ab8be58db3e588a0e999a4efbc813c2f703e0d0a3c703e33e38081e8afb7e59ca8e5ae98e7bd91e9a696e9a1b5e6b7bbe58aa0e69cace7ab99e79a84e58d95e59091e58f8be68385e993bee68ea5e59cb0e59d80efbc8ce69caae6b7bbe58aa0e79a84e4b880e5be8be4b88de4bc9ae585a5e5ba93efbc81e6b7bbe58aa0e58f8be993bee4bba3e7a081e5a682e4b88befbc9a266c743b6120687265663d2671756f743b68747470733a2f2f7777772e6b616966616d65692e636f6d2671756f743b207461726765743d2671756f743b5f626c616e6b2671756f743b2667743be4bbbfe98097e6b8b8e7bd91266c743b2f612667743b3c2f703e,0x2e2e2f2e2e2f72756b752e68746d6c,'0',0xe585a5e5ba93e794b3e8afb7,0xe585a5e5ba93e794b3e8afb7,0xe585a5e5ba93e794b3e8afb7,'1');");
E_D("replace into `www_kaifamei_com_enewspage` values('7',0xe6898be69cbae6909ce7b4a2,0x3c21444f43545950452068746d6c3e0d0a3c68746d6c3e0d0a3c686561643e0d0a3c6d65746120636861727365743d5c227574662d385c22202f3e0d0a3c7469746c653ee6909ce7b4a2202d203c3f3d247075626c69635f725b5c276164645f7777775f6b616966616d65695f636f6d5f6e616d655c275d3f3e3c2f7469746c653e0d0a3c6d657461206e616d653d5c226465736372697074696f6e5c2220636f6e74656e743d5c225c223e0d0a3c6d657461206e616d653d5c226b6579776f7264735c2220636f6e74656e743d5c225c223e0d0a3c6d657461206e616d653d5c226170706c696361626c652d6465766963655c2220636f6e74656e743d5c226d6f62696c655c223e0d0a3c6d65746120687474702d65717569763d5c2243616368652d436f6e74726f6c5c2220636f6e74656e743d5c226e6f2d7472616e73666f726d5c22202f3e0d0a3c6d657461206e616d653d5c22666f726d61742d646574656374696f6e5c2220636f6e74656e743d5c2274656c6570686f6e653d6e6f5c22202f3e0d0a3c6d657461206e616d653d5c226170706c652d6d6f62696c652d7765622d6170702d63617061626c655c2220636f6e74656e743d5c227965735c22202f3e0d0a3c6d657461206e616d653d5c226170706c652d6d6f62696c652d7765622d6170702d7374617475732d6261722d7374796c655c2220636f6e74656e743d5c22626c61636b5c22202f3e0d0a3c6d657461206e616d653d5c2276696577706f72745c2220636f6e74656e743d5c2277696474683d6465766963652d77696474682c696e697469616c2d7363616c653d312e302c206d6178696d756d2d7363616c653d312e302c206d696e696d756d2d7363616c653d312c20757365722d7363616c61626c653d6e6f5c22202f3e0d0a3c6d65746120687474702d65717569763d5c2243616368652d436f6e74726f6c5c2220636f6e74656e743d5c226e6f2d736974656170705c22202f3e0d0a3c6d65746120636f6e74656e743d5c227965735c22206e616d653d5c226170706c652d6d6f62696c652d7765622d6170702d63617061626c655c22202f3e0d0a3c6d65746120636f6e74656e743d5c227965735c22206e616d653d5c226170706c652d746f7563682d66756c6c73637265656e5c22202f3e0d0a3c6c696e6b2072656c3d5c2273686f72746375742069636f6e5c2220687265663d5c222f66617669636f6e2e69636f5c2220747970653d5c22696d6167652f782d69636f6e5c22202f3e0d0a3c6c696e6b2072656c3d5c227374796c6573686565745c2220747970653d5c22746578742f6373735c2220687265663d5c222f6b616966616d65692f6373732f696e6465782e6373735c22202f3e0d0a3c6c696e6b2072656c3d5c227374796c6573686565745c2220747970653d5c22746578742f6373735c2220687265663d5c222f6b616966616d65692f6373732f7377697065722e6d696e2e6373735c22202f3e0d0a3c736372697074207372633d5c222f6b616966616d65692f6a732f6d61696e2e6a735c2220747970653d5c22746578742f6a6176617363726970745c223e3c2f7363726970743e0d0a3c2f686561643e0d0a3c626f64793e0d0a3c64697620636c6173733d5c22777261705c223e200d0a20203c212d2d20e9a1b6e983a8202d2d3e0d0a20203c68656164657220636c6173733d5c22677265656e5f626720666c65785c223e203c6120687265663d5c226a6176617363726970743a686973746f72792e676f282d31295c2220636c6173733d5c226261636b5c223e3c6920636c6173733d5c2269636f6e5c223e3c2f693e3c2f613e0d0a202020203c64697620636c6173733d5c227365617263685f74787420666c657820666c65785f67726f775c223e0d0a2020202020203c696e70757420747970653d5c22746578745c2220636c6173733d5c227465787420666c65785f67726f775c222069643d5c227365617263684b65795c22206f6e6b657975703d5c226966286576656e742e6b6579436f64653d3d3133297b4a6176617363726970743a73656172636828293b7d656c73657b4a6176617363726970743a6c69667453656172636828293b7d5c222076616c75653d5c225c22202f3e0d0a2020202020203c7370616e20636c6173733d5c22636c6f73655f7478745c222069643d5c22636c6f73655478745c223e3c6920636c6173733d5c2269636f6e5c223e3c2f693e3c2f7370616e3e0d0a2020202020203c64697620636c6173733d5c227365617263685f756c20686964655c223e0d0a20202020202020203c756c20636c6173733d5c227365617263685f756c5f7478745c223e0d0a202020202020202020203c6c693ee78e8be88085e88da3e880803c2f6c693e0d0a202020202020202020203c6c693ee7bb9de59cb0e6b182e7949fe588bae6bf80e68898e59cba3c2f6c693e0d0a202020202020202020203c6c693ee998b4e998b3e5b8883c2f6c693e0d0a20202020202020203c2f756c3e0d0a2020202020203c2f6469763e0d0a202020203c2f6469763e0d0a202020203c696e70757420747970653d5c2268696464656e5c222069643d5c226261736555726c5c222076616c75653d5c222f5c223e0d0a202020203c6120687265663d5c226a6176617363726970743a766f69642830295c2220636c6173733d5c22736561726368325c222069643d5c22646f7365617263685c223e3c6920636c6173733d5c2269636f6e5c223e3c2f693e3c2f613e203c2f6865616465723e0d0a20203c212d2d20e6909ce7b4a2e9a696e9a1b5202d2d3e0d0a20203c64697620636c6173733d5c227365617263685f777261702062675c223e0d0a202020203c64697620636c6173733d5c226e6561725f66726964656e64735c223ee99984e8bf91e5a5bde58f8be59ca8e78ea9efbc9a0d0a095b653a6c6f6f703d7b312c332c31322c307d5d0d0a202020203c6120687265663d5c223c3f3d24627173725b5c277469746c6575726c5c275d3f3e5c223e3c3f3d246271725b5c277469746c655c275d3f3e3c2f613e0d0a095b2f653a6c6f6f705d0d0a202020203c2f6469763e0d0a202020203c64697620636c6173733d5c2274697420666c65785c223e0d0a2020202020203c683320636c6173733d5c22666c65785f67726f775c223ee783ade997a83c2f68333e0d0a2020202020203c6120687265663d5c222f67616d652f5c2220636c6173733d5c226d6f72655c223ee69bb4e5a49a202667743b3c2f613e203c2f6469763e0d0a202020203c756c20636c6173733d5c22696d675f6c69737420666c65785c223e0d0a5b653a6c6f6f703d7b312c352c312c317d5d0d0a2020202020203c6c693e3c6120687265663d5c223c3f3d24627173725b5c277469746c6575726c5c275d3f3e5c223e203c696d67207372633d5c223c3f3d246271725b5c277469746c657069635c275d3f3e5c2220616c743d5c223c3f3d246271725b5c277469746c655c275d3f3e5c223e0d0a20202020202020203c7020636c6173733d5c226e616d655c223e3c3f3d246271725b5c277469746c655c275d3f3e3c2f703e0d0a20202020202020203c7020636c6173733d5c2273697a655c223e3c3f3d246271725b5c2773697a655c275d3f3e3c2f703e0d0a20202020202020203c2f613e3c2f6c693e0d0a5b2f653a6c6f6f705d0d0a202020203c2f756c3e0d0a202020203c756c20636c6173733d5c227478745f6c69737420666c65785c223e0d0a202020203c2f756c3e0d0a202020203c64697620636c6173733d5c22677265656e5f6c696e655c223e3c2f6469763e0d0a202020203c64697620636c6173733d5c2274697420666c65785c223e0d0a2020202020203c683320636c6173733d5c22666c65785f67726f775c223ee6898be69cbae5ba94e794a83c2f68333e0d0a202020203c2f6469763e0d0a202020203c756c20636c6173733d5c227478745f6c69737420666c65785c223e0d0a095b653a6c6f6f703d7b322c332c322c307d5d0d0a2020202020203c6c693e3c6120687265663d5c223c3f3d24627173725b5c277469746c6575726c5c275d3f3e5c22207469746c653d5c223c3f3d246271725b5c277469746c655c275d3f3e5c223e3c3f3d246271725b5c277469746c655c275d3f3e3c2f613e3c2f6c693e0d0a095b2f653a6c6f6f705d0d0a202020203c2f756c3e0d0a202020203c64697620636c6173733d5c22677265656e5f6c696e655c223e3c2f6469763e0d0a202020203c64697620636c6173733d5c2274697420666c65785c223e0d0a2020202020203c683320636c6173733d5c22666c65785f67726f775c223ee6898be69cbae6b8b8e6888f3c2f68333e0d0a202020203c2f6469763e0d0a202020203c756c20636c6173733d5c227478745f6c69737420666c65785c223e0d0a095b653a6c6f6f703d7b312c332c322c307d5d0d0a2020202020203c6c693e3c6120687265663d5c223c3f3d24627173725b5c277469746c6575726c5c275d3f3e5c22207469746c653d5c223c3f3d246271725b5c277469746c655c275d3f3e5c223e3c3f3d246271725b5c277469746c655c275d3f3e3c2f613e3c2f6c693e0d0a095b2f653a6c6f6f705d0d0a202020203c2f756c3e0d0a202020203c64697620636c6173733d5c22677265656e5f6c696e655c223e3c2f6469763e0d0a202020203c64697620636c6173733d5c22746974735c223e203c6120687265663d5c222f67616d652f5c22207461726765743d5c225f626c616e6b5c223e3c6920636c6173733d5c2269636f6e5f695c223e3c2f693e20e69bb4e5a49ae6b8b8e6888f3c2f613e203c2f6469763e0d0a20203c2f6469763e0d0a20200d0a20203c212d2d20e6909ce7b4a2e58897e8a1a8202d2d3e0d0a20203c64697620636c6173733d5c227365617263685f6c6973745f777261705f64697620626720686964655c223e0d0a202020203c756c20636c6173733d5c227365617263685f6c6973745f777261705c223e0d0a202020203c2f756c3e0d0a20203c2f6469763e0d0a20203c64697620636c6173733d5c226832305c223e3c2f6469763e0d0a5b212d2d74656d702e666f6f7465722d2d5d0d0a3c2f6469763e0d0a3c736372697074207372633d5c222f6b616966616d65692f6a732f7a6570746f2e6d696e2e6a735c2220747970653d5c22746578742f6a6176617363726970745c2220636861727365743d5c227574662d385c223e3c2f7363726970743e200d0a3c736372697074207372633d5c222f6b616966616d65692f6a732f66617374636c69636b2e6d696e2e6a735c2220747970653d5c22746578742f6a6176617363726970745c223e3c2f7363726970743e200d0a3c736372697074207372633d5c222f6b616966616d65692f6a732f7377697065722e6d696e2e6a735c2220747970653d5c22746578742f6a6176617363726970745c223e3c2f7363726970743e200d0a3c736372697074207372633d5c222f6b616966616d65692f6a732f696e6465782e6a735c2220747970653d5c22746578742f6a6176617363726970745c223e3c2f7363726970743e0d0a3c2f626f64793e0d0a3c2f68746d6c3e,0x2e2e2f2e2e2f736f2f696e6465782e68746d6c,'0',0xe6909ce7b4a2,0xe6909ce7b4a2,0xe6909ce7b4a2,'0');");

@include("../../inc/footer.php");
?>