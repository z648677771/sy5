<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title><?=$grpagetitle?>-<?=$public_r['add_www_kaifamei_com_name']?></title>
    <meta name="keywords" content="<?=$ecms_gr[keyboard]?>"/>
    <meta name="description" content="<?=nl2br($ecms_gr[smalltext])?>"/>
    <meta http-equiv="mobile-agent" content="format=xhtml; url=<?=$public_r['add_www_kaifamei_com_m']?><?=$grtitleurl?>">
    <meta http-equiv="mobile-agent" content="format=html5; url=<?=$public_r['add_www_kaifamei_com_m']?><?=$grtitleurl?>">
    <script type="text/javascript">
        (function(){var ua=navigator.userAgent.toLowerCase();var bIsIpad=ua.match(/ipad/i)=="ipad";var bIsIphoneOs=ua.match(/iphone os/i)=="iphone os";var bIsAndroid=ua.match(/android/i)=="android";var bIsWM=ua.match(/windows mobile/i)=="windows mobile";if(bIsIpad||bIsIphoneOs||bIsAndroid||bIsWM){window.location.href="<?=$public_r['add_www_kaifamei_com_m']?><?=$grtitleurl?>"}})();
    </script>
    <!-- seo优化 -->
     <!-- seo优化 -->
    <link rel="stylesheet" type="text/css" href="/public/css/public.css"/>
    <link rel="stylesheet" type="text/css" href="/public/css/index.css"/>
    <script src="/public/js/jquery.js" type="text/javascript"></script>
    <script src="/public/js/qrcode.min.js" type="text/javascript"></script>
</head>
<body>
<div class="head_cb">
    <div class="headb">
        <h1><?=$grpagetitle?></h1>
        <div class="logob fl"><a href="/">
            <img class="lazy_load_on_load" src="/public/images/logo.png"></a>
        </div>
        <div class="navb fl">
            <ul class="menub">
                <li class="menu_itemb">
                    <a href="/" class=" nav_itemb <?if ($nav=='home'){echo 'nav_active';}?> ">首页</a>
                </li>
                <li class="menu_itemb"><a href="/game/" class="nav_itemb <? if ($GLOBALS[navclassid]==1){echo 'nav_active';}?> ">游戏</a>
                    <ul class="sub_menu">
                        <li class="sub_menu_item">
                            <p><a href="/game/1-0-0.html">角色扮演</a></p>
                        </li>
                        <li class="sub_menu_item">
                            <p><a href="/game/2-0-0.html">动作格斗</a></p>
                        </li>
                        <li class="sub_menu_item">
                            <p><a href="/game/3-0-0.html">休闲益智</a></p>
                        </li>
                        <li class="sub_menu_item">
                            <p><a href="/game/4-0-0.html">枪战射击</a></p>
                        </li>
                        <li class="sub_menu_item">
                            <p><a href="/game/5-0-0.html">战争策略</a></p>
                        </li>
                        <li class="sub_menu_item">
                            <p><a href="/game/6-0-0.html">卡牌对战</a></p>
                        </li>
                        <li class="sub_menu_item">
                            <p><a href="/game/7-0-0.html">音乐舞蹈</a></p>
                        </li>
                        <li class="sub_menu_item">
                            <p><a href="/game/8-0-0.html">模拟经营</a></p>
                        </li>
                         <li class="sub_menu_item">
                            <p><a href="/game/9-0-0.html">体育竞技</a></p>
                        </li>
                        <li class="sub_menu_item">
                            <p><a href="/game/10-0-0.html">冒险解谜</a></p>
                        </li>
                         <li class="sub_menu_item">
                            <p><a href="/game/11-0-0.html">其它游戏</a></p>
                        </li>
                    </ul>
                </li>
                <li class="menu_itemb"><a href="/news/" class="nav_itemb <? if ($GLOBALS[navclassid]==3){echo 'nav_active';}?>">新闻资讯</a></li>
                <li class="menu_itemb"><a href="/zhuanti/" class="nav_itemb <? if ($GLOBALS[navclassid]==4){echo 'nav_active';}?>">专题</a></li>
            </ul>

        </div>
        <div class="checkbox login_header"></div>
    </div>

</div>
    <!-- header end -->
    <div class="cb_con"></div>

    <div class="cb"></div>
    <div class="content_c ">
        <div class="page_info">
            <ol>
                <li><a href="<?=$public_r['add_www_kaifamei_com_www']?>">首页</a></li>
                <li> &gt;</li>
                <li>
                    <a href="/game/">游戏</a></li>
                <li> &gt;</li>
                <li><a href="/game/<?=$ecms_gr[type]?>-0-0.html"><?=$ecms_gr[typei]?></a></li>
                <li> &gt;</li>
                <li><?=$ecms_gr[title]?></li>

            </ol>
        </div>
        <div class="appdetail_c">

            <div class="appdetail_l">
                <!-- app简介开始   -->
                <div class="app_introduce prl14">
                    <div class="appicon_intr">
                  <span>
                      <img src="<?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>"/>
                  </span>
                    </div>
                    <div class="name_introduce ml20">
                        <span class="name_appintr"><?=$ecms_gr[title]?></span>
                        <span class="safe_appintr clearfix">
                            <em>无广告</em>
                            <a href="#" class="safe_list_t">
                                <em>安全</em>
                                <ul class="safe_listc">
                                    <li>360安全卫士</li>
                                    <li>腾讯手机管家</li>
                                    <li>百度助手</li>
                                </ul>
                            </a>
                                              </span>
                        <span class="info_appintr clearfix">
                            <span class=" clearfix">
                                <em>大小：<?=$ecms_gr[size]?></em>
                                <em>版本：<?=$ecms_gr[bb]?></em>
                                <em>下载次数：大于2000次 </em>
                            </span>
                            <span class="clearfix">
                                <em>适用：<?=$ecms_gr[xtyq]?></em>
                                <em>更新时间：<?=date('Y-m-d',$ecms_gr[newstime])?></em>
                            </span>
                        </span>
                    </div>
                    <div class="qrcode_introduce">
                        <span class="download_intr">
                    <?
                        $city_arr = explode(',',ReturnPublicAddVar('city_restrictions'));
                        //远程城市数据返回点
                        $filename = "http://api.map.baidu.com/location/ip?ak=F454f8a5efe5e577997931cc01de3974&ip=".egetip()."&coor=bd09ll";
                        //使用file_get_contents返回json数据,确认程序是否开启file_get_contents
                        $json = json_decode(file_get_contents($filename),true);
                        $city = $json['content']['address_detail']['province'];
                        $key = array_search($city,$city_arr,true);
                        if($key !== false){
                            $navinfor['downurl'] = $navinfor['downurl2'];
                            $navinfor['downurli'] = $navinfor['downurli2'];
                        }
                        if($navinfor['downurl']){
                    ?>
                        <a class="downlpc down_event" href="<?=$navinfor['downurl']?>">下载安卓版</a>
                    <?}else{?>
                        <a href="#" rel="nofollow" class="downlpc down_event" style="background-color: #cccccc">安卓版已下架</a>
                    <?}?>
                    <?if($navinfor['downurli']){?>
                        <a class="downlpc down_event" href="<?=$navinfor['downurli']?>">下载苹果版</a>
                    <?}else{?>
                            <a href="#" rel="nofollow" class="downlpc down_event" style="background-color: #cccccc">苹果版已下架</a>
                    <?}?>
                        </span>
                    </div>
                </div>
                <!-- app简介结束   -->
                <!-- 截图轮播开始   -->
                <div class="screenshot mt20 prl14 clearfix">
                    <div class="titlec_introduce">
                        <span class="title_introduce"><?=$ecms_gr[title]?>截图</span>
                    </div>
                    <div class="introd_imgs">
                        <a href="javascript:;" class="introd_pre">前一张</a>
                        <a href="javascript:;" class="introd_next">后一张</a>
                        <div class="introd_imgsc">

                            <ul class="introd_imgs_c clearfix">
                                <?
    		                        $pd_record=explode("\r\n",$navinfor[morepic]);
    		                        for($i=0;$i<count($pd_record);$i++)
    		                        {
                                        $pd_field=explode("::::::",$pd_record[$i]);
                                        if ($pd_field[1]){
                                ?>
                                    <li>
                                        <img src="<?=$pd_field[1]?>"
                                             alt="<?=$ecms_gr[title]?>"
                                             height="390"
                                             width="234" class="silderImg lazy_load_on_load"/>
                                    </li>
                                <?}}?>
                            </ul>
                        </div>
                    </div>

                </div>

                <!-- 截图轮播结束   -->
                <!--礼包开始-->
                <div class="gift_com">
                </div>
                <!--礼包结束-->

                <!-- 简介开始   -->
                <div class="profile_app mt20">
                    <div class="titlec_introduce">
                        <span class="title_introduce"><?=$ecms_gr[title]?>介绍</span>
                    </div>
                    <div class="profilecon profile_f">
                        <div class="profilecon_c">
                            <?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>
                        </div>
                    </div>
                    <a href="javascript:;" class="more_detail"></a>

                </div>

                <!-- 简介结束   -->
                <!--recommend开始-->
                <div class="profile_phone mt20">
                    <div class="titlec_introduce">
                            <span class="title_introduce">
                                <?=$ecms_gr[title]?>相关推荐
                            </span>
                    </div>
                    <div class="game_list_con">
                        <div class="game_list_c">
                            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,6,0,0,"type=$navinfor[type]",'RAND()');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                            <div class="classf_list_items fl ">
                                <div class="classf_list_item_cs">
                                    <a href="<?=$bqsr['titleurl']?>" class="classf_list_img fl" target="_blank">
                                        <img class="lazy" src="<?=$bqr['titlepic']?>"/>
                                    </a>
                                    <span class="classf_list_inf">
                                            <a href="<?=$bqsr['titleurl']?>" class="classf_list_name" target="_blank"><?=$bqr['title']?></a>
                                            <span class="game_forum">下载数：大于2000次</span>
                                        </span>
                                </div>
                            </div>
                            <?php
}
}
?>
                        </div>
                    </div>

                </div>
                <!--recommend结束-->


                <!--游戏相关攻略开始-->
                <?
                    $rel_count=$empire->fetch1("select count(id) as count_data from www_kaifamei_com_ecms_news where game_id=$navinfor[id]");
                    if($rel_count['count_data']){
                ?>
                <div class="profile_app mt20">
                    <div class="titlec_introduce">
                        <span class="title_introduce">
                            相关资讯
                        </span>
                    </div>
                    <ul class="relative_gl_list">
                        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,9,0,1,"game_id=$navinfor[id]",'RAND()');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                        <li><a href="<?=$bqsr[titleurl]?>" target="_blank"><?=$bqr[title]?></a></li>
                        <?php
}
}
?>

                    </ul>
                </div>
                <?}?>
                <!--游戏相关攻略结束-->
            </div>
            <div class="appdetail_r ml20">
                <!--猜你喜欢开始-->
                <div class="like_lable clearfix">
                    <div class="subtitle">
                        <span>猜你喜欢</span>

                    </div>

                    <div class="like_lable_c" id="guess_like">
                        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',10,1,0,'','RAND()');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                        <div class="like_lable_item clearfix">
                            <a href="<?=$bqsr[titleurl]?>" target="_blank" class="like_lable_icon">
                                <img src="<?=$bqr[titlepic]?>">

                            </a>
                            <div class="like_lable_info ">
                                <a href="<?=$bqsr[titleurl]?>" target="_blank" class="like_lable_name"><?=$bqr[title]?></a>
                                <span class="like_lable_classify"><?=$bqr[typei]?></span>
                                <span class="like_lable_down">
                                   <em>大于2000次 下载</em>
                                </span>

                            </div>
                            <a href="<?=$bqsr[titleurl]?>" rel="nofollow" class="like_downbtn down_event" style="display: none;">
                                下载
                            </a>
                        </div>
                        <?php
}
}
?>
                    </div>
                </div>
                <!--猜你喜欢结束-->
                <!--特色游戏开始-->
                <div class="like_lable mt20 clearfix">
                    <div class="subtitle">
                        <span>特色游戏</span>
                    </div>
                    <div class="like_lable_c" id="special_recom">
                        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',2,0,1,"type=$navinfor[type]",'RAND()');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                        <div class="like_lable_item clearfix">
                            <a href="<?=$bqsr[titleurl]?>" target="_blank"
                               class="like_lable_icon">
                                <img class="lazy" src="<?=$bqr[titlepic]?>"/>
                            </a>
                            <div class="like_lable_info ">
                                <a href="<?=$bqsr[titleurl]?>" target="_blank"
                                   class="like_lable_name"><?=$bqr['title']?></a>
                                <span class="like_lable_classify"><?=$bqr['typei']?></span>
                                <span class="like_lable_down">
                                   <em><?=rand(1,3)?>万次下载</em>
                                </span>

                            </div>
                            <a href="<?=$bqsr[titleurl]?>" rel="nofollow" class="like_downbtn down_event">
                                下载
                            </a>
                        </div>
                        <?php
}
}
?>
                    </div>
                </div>
                <!--特色游戏结束-->
            </div>
        </div>
    </div>
    <!--尾部开始-->
    <div class="footer footer_index cb mt20">
    <div class="footer_c  ">
        <div class="comlink mt12 ">
            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]enewslink where checked=1 order by myorder",20,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <a href="<?=$bqr[lurl]?>" target="_blank" title="<?=$bqr[lname]?>"><?=$bqr[lname]?></a>
            <?php
}
}
?>
        </div>

        <hr class="line_footer mt10 ">
        <div class="conpInfo">
            <div class="conpInfo_c mt10">
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select id,title,path as classidi from [!db.pre!]enewspage limit 1,5",10,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <a href="/<?=str_replace('../../','',$bqr[classidi])?>" <?if($bqno > 1){echo 'class="spaceline"';}?>><?=$bqr['classid']?><?=$bqr[title]?></a>
                <?php
}
}
?>
                <a href="/support/about.html" class="spaceline" rel="nofollow">关于我们</a>
                <a href="/link/" class="spaceline" rel="nofollow">商务合作</a>
                <a href="/support/contact.html" class="spaceline" rel="nofollow">联系我们</a>
                <a href="/ruku.html" class="spaceline" rel="nofollow">游戏入库</a>
            </div>
        </div>
        <div class="conp_abt mt10"> © 2020 www.sy5.com 版权所有</div>
        <div class="conp_abt mt10"> 湘ICP备18022188号
        </div>
    </div>
    <div class="back_c">
        <a href="#" class="back"><i></i>返回顶部</a>
    </div>
</div>
<script src="/public/js/public.js" type="text/javascript"></script>
<script src="/public/js/jquery-ui.js" type="text/javascript"></script>
<script>
    window.onload = function () {
        public_index();
        public_history();
        public_otherversion();
        public_banner();
        public_feedback();
    }
</script>

    <!--尾部结束-->
    </body>
</html>

