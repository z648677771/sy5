<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_kaifamei_com_enewspltemp_2`;");
E_C("CREATE TABLE `www_kaifamei_com_enewspltemp_2` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(60) NOT NULL DEFAULT '',
  `temptext` mediumtext NOT NULL,
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tempid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `www_kaifamei_com_enewspltemp_2` values('1',0xe9bb98e8aea4e8af84e8aebae58897e8a1a8e6a8a1e69dbf,0x3c21444f43545950452048544d4c205055424c4943205c222d2f2f5733432f2f4454442048544d4c20342e3031205472616e736974696f6e616c2f2f454e5c223e0d0a3c68746d6c3e0d0a3c686561643e0d0a3c6d65746120687474702d65717569763d5c22436f6e74656e742d547970655c2220636f6e74656e743d5c22746578742f68746d6c3b20636861727365743d7574662d385c223e0d0a3c7469746c653e5b212d2d706167657469746c652d2d5d202d20506f776572656420627920456d70697265434d533c2f7469746c653e0d0a3c6d657461206e616d653d5c226b6579776f7264735c2220636f6e74656e743d5c225b212d2d706167656b65792d2d5d5c22202f3e0d0a3c6d657461206e616d653d5c226465736372697074696f6e5c2220636f6e74656e743d5c225b212d2d706167656465732d2d5d5c22202f3e0d0a3c7374796c6520747970653d5c22746578742f6373735c223e0d0a3c212d2d0d0a626f64792c5461626c657b20636f6c6f723a20233232323b20666f6e742d73697a653a20313270783b207d0d0a61207b20636f6c6f723a20233232323b20746578742d6465636f726174696f6e3a206e6f6e653b207d0d0a613a686f766572207b20636f6c6f723a20236630303b20746578742d6465636f726174696f6e3a20756e6465726c696e653b207d0d0a6831207b20666f6e742d73697a653a333270783b20666f6e742d7765696768743a20626f6c643b207d0d0a6832207b20636f6c6f723a20233165336139653b20666f6e742d73697a653a20323570783b20666f6e742d7765696768743a20626f6c643b20207d0d0a2e796f75207b20636f6c6f723a20233166336138373b20666f6e742d73697a653a20313470783b207d0d0a2e74657874207b20666f6e742d73697a653a20313470783b2070616464696e672d6c6566743a203570783b2070616464696e672d72696768743a203570783b206c696e652d6865696768743a20323070787d0d0a2e72652061207b20636f6c6f723a20233166336138373b207d0d0a2e6e616d65207b20636f6c6f723a20233166336138373b207d0d0a2e6e616d652061207b20636f6c6f723a20233166336138373b20746578742d6465636f726174696f6e3a20756e6465726c696e653b7d0d0a2e726574657874207b206261636b67726f756e642d636f6c6f723a20236633663366333b2077696474683a20313030253b20666c6f61743a206c6566743b2070616464696e672d746f703a20323270783b2070616464696e672d626f74746f6d3a20323270783b20626f726465722d746f703a2031707820736f6c696420236363633b207d0d0a2e726574657874207465787461726561207b2077696474683a2035333570783b206865696768743a2031333070783b20666c6f61743a206c6566743b206d617267696e2d6c6566743a20363070783b20626f726465722d746f702d7374796c653a20696e7365743b20626f726465722d746f702d77696474683a203270783b20626f726465722d6c6566742d7374796c653a20696e7365743b20626f726465722d6c6566742d77696474683a203270783b207d0d0a2e68724c696e657b424f524445522d424f54544f4d3a20233830376437362031707820646f747465643b7d0d0a0d0a2e65636f6d6d656e74207b6d617267696e3a303b70616464696e673a303b7d0d0a2e65636f6d6d656e74207b6d617267696e2d626f74746f6d3a313270783b6f766572666c6f772d783a68696464656e3b6f766572666c6f772d793a68696464656e3b70616464696e672d626f74746f6d3a3370783b70616464696e672d6c6566743a3370783b70616464696e672d72696768743a3370783b70616464696e672d746f703a3370783b6261636b67726f756e643a234646464645453b70616464696e673a3370783b626f726465723a736f6c69642031707820233939393b7d0d0a2e65636f6d6d656e74617574686f72207b666c6f61743a6c6566743b20636f6c6f723a234639363b20666f6e742d7765696768743a626f6c643b7d0d0a2e65636f6d6d656e7474657874207b636c6561723a6c6566743b6d617267696e3a303b70616464696e673a303b7d0d0a2d2d3e0d0a3c2f7374796c653e0d0a3c736372697074207372633d5c225b212d2d6e6577732e75726c2d2d5d652f646174612f6a732f616a61782e6a735c223e3c2f7363726970743e0d0a3c2f686561643e0d0a0d0a3c626f647920746f706d617267696e3d5c22305c223e0d0a3c7461626c652077696474683d5c223736365c2220626f726465723d5c22305c2220616c69676e3d5c2263656e7465725c222063656c6c70616464696e673d5c22335c222063656c6c73706163696e673d5c22315c223e0d0a20203c74723e0d0a202020203c74642077696474683d5c223231305c223e3c6120687265663d5c225b212d2d6e6577732e75726c2d2d5d5c223e3c696d67207372633d5c225b212d2d6e6577732e75726c2d2d5d736b696e2f64656661756c742f696d616765732f6c6f676f2e6769665c2220626f726465723d5c22305c22202f3e3c2f613e3c2f74643e0d0a202020203c74643e3c68313ee7bd91e58f8be8af84e8aeba3c2f68313e3c2f74643e0d0a202020203c74643e3c64697620616c69676e3d5c2272696768745c223e3c6120687265663d5c2223746f736179706c5c223e3c7374726f6e673e3c666f6e7420636f6c6f723d5c22234646303030305c223ee68891e4b99fe8af84e4b8a4e58fa53c2f666f6e743e3c2f7374726f6e673e3c2f613e3c2f6469763e3c2f74643e0d0a20203c2f74723e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d5c223736365c2220626f726465723d5c22305c2220616c69676e3d5c2263656e7465725c222063656c6c70616464696e673d5c22335c222063656c6c73706163696e673d5c22315c22206267636f6c6f723d5c22233232325c223e0d0a20203c74723e0d0a202020203c7464206865696768743d5c22325c223e3c2f74643e0d0a20203c2f74723e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d5c223736365c2220626f726465723d5c22305c2220616c69676e3d5c2263656e7465725c222063656c6c70616464696e673d5c22335c222063656c6c73706163696e673d5c22315c223e0d0a20203c74723e200d0a202020203c7464206865696768743d5c2234325c223e200d0a2020202020203c68323ee8af84e8aebaefbc9a3c6120687265663d5c225b212d2d7469746c6575726c2d2d5d5c22207461726765743d5c225f626c616e6b5c223e3c666f6e7420636f6c6f723d5c22233165336139655c223e5b212d2d7469746c652d2d5d3c2f666f6e743e3c2f613e3c2f68323e3c2f74643e0d0a202020203c74643e3c64697620616c69676e3d5c2272696768745c223e3c6120687265663d5c225b212d2d7469746c6575726c2d2d5d5c22207461726765743d5c225f626c616e6b5c223ee69fa5e79c8be58e9fe696873c2f613e3c2f6469763e3c2f74643e0d0a20203c2f74723e0d0a3c2f7461626c653e0d0a3c687220616c69676e3d5c2263656e7465725c222077696474683d5c223736365c222073697a653d3120636c6173733d68726c696e653e0d0a3c7461626c652077696474683d5c223736365c2220626f726465723d5c22305c2220616c69676e3d5c2263656e7465725c222063656c6c70616464696e673d5c22335c222063656c6c73706163696e673d5c22315c22206267636f6c6f723d5c22233338344541335c223e0d0a20203c666f726d20616374696f6e3d5c222e2e2f656e6577732f696e6465782e7068705c22206d6574686f643d5c22706f73745c22206e616d653d5c22696e666f7066656e666f726d5c223e0d0a202020203c696e70757420747970653d5c2268696464656e5c22206e616d653d5c22656e6577735c222076616c75653d5c22416464496e666f5066656e5c22202f3e0d0a202020203c696e70757420747970653d5c2268696464656e5c22206e616d653d5c22636c61737369645c222076616c75653d5c225b212d2d636c61737369642d2d5d5c22202f3e0d0a202020203c696e70757420747970653d5c2268696464656e5c22206e616d653d5c2269645c222076616c75653d5c225b212d2d69642d2d5d5c22202f3e0d0a202020203c74723e200d0a2020202020203c74642077696474683d5c223530255c22206865696768743d5c2232375c222076616c69676e3d5c226d6964646c655c223e3c666f6e7420636f6c6f723d5c22234646464646465c223e266e6273703be8af84e588863a200d0a20202020202020203c696e70757420747970653d5c22726164696f5c22206e616d653d5c2266656e5c222076616c75653d5c22315c223e0d0a202020202020202031e58886200d0a20202020202020203c696e70757420747970653d5c22726164696f5c22206e616d653d5c2266656e5c222076616c75653d5c22325c223e0d0a202020202020202032e58886200d0a20202020202020203c696e707574206e616d653d5c2266656e5c2220747970653d5c22726164696f5c222076616c75653d5c22335c2220636865636b65643e0d0a202020202020202033e58886200d0a20202020202020203c696e70757420747970653d5c22726164696f5c22206e616d653d5c2266656e5c222076616c75653d5c22345c223e0d0a202020202020202034e58886200d0a20202020202020203c696e70757420747970653d5c22726164696f5c22206e616d653d5c2266656e5c222076616c75653d5c22355c223e0d0a202020202020202035e58886200d0a20202020202020203c696e70757420747970653d5c227375626d69745c22206e616d653d5c225375626d69745c222076616c75653d5c22e68f90e4baa45c223e0d0a20202020202020203c2f666f6e743e3c2f74643e0d0a2020202020203c74642077696474683d5c223530255c222076616c69676e3d5c226d6964646c655c223e3c64697620616c69676e3d5c2263656e7465725c223e3c666f6e7420636f6c6f723d5c22234646464646465c223ee5b9b3e59d87e5be97e588863a200d0a202020202020202020203c7374726f6e673e3c7370616e2069643d5c227066656e6469765c223e5b212d2d70696e666f7066656e2d2d5d3c2f7370616e3e3c2f7374726f6e673e20e58886efbc8ce585b1e69c89203c7374726f6e673e5b212d2d696e666f7066656e6e756d2d2d5d3c2f7374726f6e673e200d0a20202020202020202020e4babae58f82e4b88ee8af84e588863c2f666f6e743e3c2f6469763e3c2f74643e0d0a202020203c2f74723e0d0a20203c2f666f726d3e0d0a3c2f7461626c653e0d0a3c7461626c652077696474683d5c223736365c2220626f726465723d5c22305c2220616c69676e3d5c2263656e7465725c222063656c6c70616464696e673d5c22335c222063656c6c73706163696e673d5c22315c22206267636f6c6f723d5c22234343434343435c223e0d0a20203c74723e200d0a202020203c7464206865696768743d5c2233305c22206267636f6c6f723d5c22234646464646465c223e200d0a2020202020203c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22315c222063656c6c70616464696e673d5c22335c223e0d0a20202020202020203c74723e200d0a202020202020202020203c74642077696474683d5c223137255c223e266e6273703b266e6273703b266e6273703be7bd91e58f8be8af84e8aeba3c2f74643e0d0a202020202020202020203c74642077696474683d5c223833255c223e3c64697620616c69676e3d5c2272696768745c223e5b212d2d6c697374706167652d2d5d266e6273703b266e6273703b266e6273703b3c2f6469763e3c2f74643e0d0a20202020202020203c2f74723e0d0a2020202020203c2f7461626c653e3c2f74643e0d0a20203c2f74723e0d0a20203c74723e200d0a202020203c7464206267636f6c6f723d5c22236638666366665c223e205b212d2d656d706972656e6577732e6c69737474656d702d2d5d200d0a2020202020203c7461626c652077696474683d5c223936255c2220626f726465723d5c22305c2220616c69676e3d5c2263656e7465725c222063656c6c70616464696e673d5c22335c222063656c6c73706163696e673d5c22315c22207374796c653d5c22776f72642d627265616b3a627265616b2d616c6c3b20776f72642d777261703a627265616b2d616c6c3b5c223e0d0a20202020202020203c74723e200d0a202020202020202020203c7464206865696768743d5c2233305c223e3c7370616e20636c6173733d5c226e616d655c223ee69cace7ab99e7bd91e58f8b205b212d2d757365726e616d652d2d5d3c2f7370616e3e203c666f6e7420636f6c6f723d5c22233636363636365c223e69703a5b212d2d706c69702d2d5d3c2f666f6e743e3c2f74643e0d0a202020202020202020203c74643e3c64697620616c69676e3d5c2272696768745c223e3c666f6e7420636f6c6f723d5c22233636363636365c223e5b212d2d706c74696d652d2d5d20e58f91e8a1a83c2f666f6e743e3c2f6469763e3c2f74643e0d0a20202020202020203c2f74723e0d0a20202020202020203c74722076616c69676e3d5c22746f705c223e200d0a202020202020202020203c7464206865696768743d5c2235305c2220636f6c7370616e3d5c22325c2220636c6173733d5c22746578745c223e5b212d2d706c746578742d2d5d3c2f74643e0d0a20202020202020203c2f74723e0d0a20202020202020203c74723e200d0a202020202020202020203c7464206865696768743d5c2233305c223e266e6273703b3c2f74643e0d0a202020202020202020203c74643e3c64697620616c69676e3d5c2272696768745c2220636c6173733d5c2272655c223e3c6120687265663d5c2223746f736179706c5c225b212d2d696e636c7564656c696e6b2d2d5d3ee59b9ee5a48d3c2f613e266e6273703b200d0a20202020202020202020202020203c6120687265663d5c224a6176615363726970743a6d616b6552657175657374285c272e2e2f706c2f646f616374696f6e2e7068703f656e6577733d446f466f72506c26706c69643d5b212d2d706c69642d2d5d26636c61737369643d5b212d2d636c61737369642d2d5d2669643d5b212d2d69642d2d5d26646f706c3d3126646f616a61783d3126616a6178617265613d7a63706c6469765b212d2d706c69642d2d5d5c272c5c274563686f52657475726e6564546578745c272c5c274745545c272c5c275c27293b5c223ee694afe68c813c2f613e5b3c7370616e2069643d5c227a63706c6469765b212d2d706c69642d2d5d5c223e5b212d2d7a636e756d2d2d5d3c2f7370616e3e5d266e6273703b200d0a20202020202020202020202020203c6120687265663d5c224a6176615363726970743a6d616b6552657175657374285c272e2e2f706c2f646f616374696f6e2e7068703f656e6577733d446f466f72506c26706c69643d5b212d2d706c69642d2d5d26636c61737369643d5b212d2d636c61737369642d2d5d2669643d5b212d2d69642d2d5d26646f706c3d3026646f616a61783d3126616a6178617265613d6664706c6469765b212d2d706c69642d2d5d5c272c5c274563686f52657475726e6564546578745c272c5c274745545c272c5c275c27293b5c223ee58f8de5afb93c2f613e5b3c7370616e2069643d5c226664706c6469765b212d2d706c69642d2d5d5c223e5b212d2d66646e756d2d2d5d3c2f7370616e3e5d0d0a2020202020202020202020203c2f6469763e3c2f74643e0d0a20202020202020203c2f74723e0d0a2020202020203c2f7461626c653e0d0a2020202020203c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22315c222063656c6c70616464696e673d5c22335c223e0d0a20202020202020203c74723e0d0a202020202020202020203c7464206261636b67726f756e643d5c225b212d2d6e6577732e75726c2d2d5d736b696e2f64656661756c742f696d616765732f706c687262672e6769665c223e3c2f74643e0d0a20202020202020203c2f74723e0d0a2020202020203c2f7461626c653e0d0a2020202020205b212d2d656d706972656e6577732e6c69737474656d702d2d5d200d0a2020202020203c64697620616c69676e3d5c2272696768745c223e3c6272202f3e0d0a20202020202020205b212d2d6c697374706167652d2d5d266e6273703b266e6273703b266e6273703b3c6272202f3e0d0a20202020202020203c6272202f3e0d0a20202020202020203c666f6e7420636f6c6f723d5c22234646303030305c223ee7bd91e58f8be8af84e8aebae4bb85e4be9be7bd91e58f8be8a1a8e8bebee4b8aae4babae79c8be6b395efbc8ce5b9b6e4b88de8a1a8e6988ee69cace7ab99e5908ce6848fe585b6e8a782e782b9e68896e8af81e5ae9ee585b6e68f8fe8bfb0266e6273703b266e6273703b266e6273703b3c2f666f6e743e3c62723e3c62723e203c2f6469763e3c2f74643e0d0a20203c2f74723e0d0a20203c7363726970743e0d0a202066756e6374696f6e20436865636b506c286f626a290d0a20207b0d0a2020096966286f626a2e736179746578742e76616c75653d3d5c225c22290d0a2020097b0d0a20200909616c657274285c22e99499e8afafefbc8ce8af84e8aebae4b88de883bde4b8bae7a9ba5c22293b0d0a202009096f626a2e736179746578742e666f63757328293b0d0a2020090972657475726e2066616c73653b0d0a2020097d0d0a20200972657475726e20747275653b0d0a20207d0d0a20203c2f7363726970743e0d0a20203c666f726d20616374696f6e3d5c222e2e2f706c2f646f616374696f6e2e7068705c22206d6574686f643d5c22706f73745c22206e616d653d5c22736179706c5c222069643d5c22736179706c5c22206f6e7375626d69743d5c2272657475726e20436865636b506c28646f63756d656e742e736179706c295c223e0d0a20203c74722069643d5c22746f736179706c5c223e200d0a202020203c7464206267636f6c6f723d5c22236638666366665c223e203c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22315c222063656c6c70616464696e673d5c22335c223e0d0a20202020202020203c74723e200d0a2020202020202020202020203c74642077696474683d5c223133255c22206865696768743d5c2232385c223e266e6273703b266e6273703b266e6273703b3c7370616e20636c6173733d5c22796f755c223ee68891e4b99fe8af84e4b8a4e58fa53c2f7370616e3e3c2f74643e0d0a2020202020202020202020203c74642076616c69676e3d5c226d6964646c655c223ee794a8e688b7e5908defbc9a200d0a20202020202020202020202020203c696e707574206e616d653d5c22757365726e616d655c2220747970653d5c22746578745c222069643d5c22757365726e616d655c222073697a653d5c2231325c222076616c75653d5c225b212d2d6c757365726e616d652d2d5d5c22202f3e0d0a202020202020202020202020e5af86e7a081efbc9a200d0a2020202020202020202020203c696e707574206e616d653d5c2270617373776f72645c2220747970653d5c2270617373776f72645c222069643d5c2270617373776f72645c222073697a653d5c2231325c222076616c75653d5c225b212d2d6c70617373776f72642d2d5d5c22202f3e0d0a202020202020202020202020e9aa8ce8af81e7a081efbc9a200d0a2020202020202020202020203c696e707574206e616d653d5c226b65795c2220747970653d5c22746578745c222069643d5c226b65795c222073697a653d5c22365c22202f3e0d0a20202020202020202020202020203c696d67207372633d5c225b212d2d6b65792e75726c2d2d5d5c2220616c69676e3d5c226d6964646c655c22206e616d653d5c22706c4b6579496d675c222069643d5c22706c4b6579496d675c22206f6e636c69636b3d5c22706c4b6579496d672e7372633d5c275b212d2d6e6577732e75726c2d2d5d652f53686f774b65792f3f763d706c26743d5c272b4d6174682e72616e646f6d28295c22207469746c653d5c22e79c8be4b88de6b885e6a59a2ce782b9e587bbe588b7e696b05c22202f3e266e6273703b266e6273703b266e6273703b266e6273703b266e6273703b266e6273703b266e6273703b266e6273703b266e6273703b266e6273703b3c6120687265663d5c225b212d2d6e6577732e75726c2d2d5d652f6d656d6265722f72656769737465722f5c22207461726765743d5c225f626c616e6b5c223ee8bf98e6b2a1e69c89e6b3a8e5868cefbc9f3c2f613e3c2f74643e0d0a20202020202020203c2f74723e0d0a2020202020203c2f7461626c653e3c2f74643e0d0a20203c2f74723e0d0a20203c74723e200d0a202020203c7464206267636f6c6f723d5c22236638666366665c223e203c7461626c652077696474683d5c22313030255c2220626f726465723d5c22305c222063656c6c73706163696e673d5c22315c222063656c6c70616464696e673d5c22335c2220636c6173733d5c227265746578745c223e0d0a20202020202020203c74723e200d0a202020202020202020203c74642077696474683d5c223738255c223e3c64697620616c69676e3d5c2263656e7465725c223e200d0a20202020202020202020202020203c7465787461726561206e616d653d5c22736179746578745c2220636f6c733d5c2235385c2220726f77733d5c22365c222069643d5c22736179746578745c223e3c2f74657874617265613e0d0a2020202020202020202020203c2f6469763e3c2f74643e0d0a202020202020202020203c74642077696474683d5c223232255c2220726f777370616e3d5c22325c223e203c64697620616c69676e3d5c2263656e7465725c223e0d0a20202020202020202020202020203c696e707574206e616d653d5c226e6f6d656d6265725c2220747970653d5c22636865636b626f785c222069643d5c226e6f6d656d6265725c222076616c75653d5c22315c2220636865636b65643d5c22636865636b65645c22202f3e0d0a20202020202020202020202020202020e58cbfe5908de58f91e8a1a83c62723e0d0a202020202020202020202020202020203c6272202f3e0d0a20202020202020202020202020203c696e707574206e616d653d5c22696d6167654669656c645c2220747970653d5c227375626d69745c222069643d5c22696d6167654669656c645c222076616c75653d5c2220e68f9020e4baa4205c22202f3e0d0a2020202020202020202020203c2f6469763e3c2f74643e0d0a20202020202020203c2f74723e0d0a20202020202020203c74723e200d0a202020202020202020203c74643e3c64697620616c69676e3d5c2263656e7465725c223e200d0a20202020202020202020202020203c736372697074207372633d5c225b212d2d6e6577732e75726c2d2d5d642f6a732f6a732f706c666163652e6a735c223e3c2f7363726970743e0d0a2020202020202020202020203c2f6469763e3c2f74643e0d0a20202020202020203c2f74723e0d0a2020202020203c2f7461626c653e203c2f74643e0d0a20203c2f74723e0d0a20203c696e707574206e616d653d5c2269645c2220747970653d5c2268696464656e5c222069643d5c2269645c222076616c75653d5c225b212d2d69642d2d5d5c22202f3e0d0a20203c696e707574206e616d653d5c22636c61737369645c2220747970653d5c2268696464656e5c222069643d5c22636c61737369645c222076616c75653d5c225b212d2d636c61737369642d2d5d5c22202f3e0d0a20203c696e707574206e616d653d5c22656e6577735c2220747970653d5c2268696464656e5c222069643d5c22656e6577735c222076616c75653d5c22416464506c5c22202f3e0d0a20203c696e707574206e616d653d5c2272657069645c2220747970653d5c2268696464656e5c222069643d5c2272657069645c222076616c75653d5c22305c22202f3e0d0a20203c2f666f726d3e0d0a3c2f7461626c653e0d0a5b212d2d74656d702e666f6f7465722d2d5d0d0a3c2f626f64793e0d0a3c2f68746d6c3e,'1');");

@include("../../inc/footer.php");
?>