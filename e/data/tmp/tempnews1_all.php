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
    <meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
    <meta name="description" content="<?=nl2br($ecms_gr[smalltext])?>" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url=<?=$public_r['add_www_kaifamei_com_m']?><?=$grtitleurl?>">
    <meta http-equiv="mobile-agent" content="format=html5; url=<?=$public_r['add_www_kaifamei_com_m']?><?=$grtitleurl?>">
    <link rel="stylesheet" type="text/css" href="/public/css/gonglue.css"/>
    <meta name="applicable-device" content="pc">
    <script type="text/javascript">
        (function(){var ua=navigator.userAgent.toLowerCase();var bIsIpad=ua.match(/ipad/i)=="ipad";var bIsIphoneOs=ua.match(/iphone os/i)=="iphone os";var bIsAndroid=ua.match(/android/i)=="android";var bIsWM=ua.match(/windows mobile/i)=="windows mobile";if(bIsIpad||bIsIphoneOs||bIsAndroid||bIsWM){window.location.href="<?=$public_r['add_www_kaifamei_com_m']?><?=$grtitleurl?>"}})();
    </script>
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

    <div class="Remain">
        <div class="Rnav">
            <ol>
                <li>
                    <a href="">
                        首页
                    </a>
                </li>
                <li>
                    >
                </li>
                <li>
                    <a href="/news/">
                        新闻资讯
                    </a>
                </li>
                <li>
                    >
                </li>
                <li class="glShowTitle">
                    <?=$ecms_gr[title]?>
                </li>
            </ol>
        </div>
        <div class="container">
            <div class="containerLeft">
                <div class="containerLeftBody">
                    <div id="contentHead">
                        <h1 id="contentTitle">
                            <?=$ecms_gr[title]?>
                        </h1>
                        <span id="createDate">
                        发布日期：<?=date('Y-m-d H:i:s',$ecms_gr[newstime])?>
                    </span>
                    </div>
                    <div id="contentMain">
                        <?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>
                    </div>
                    <?
                    $game = $empire->fetch1("select * from www_kaifamei_com_ecms_game where id=$navinfor[game_id]");
                    if($game){
                    ?>
                    <div class="containerLeftHead" style="margin-top: 20px;">
                        <div class="glAppIcon">
                            <a href="<?=$game['titleurl']?>" target="_blank">
                                <img src="<?=$game['titlepic']?>" alt="<?=$game['title']?>" />
                            </a>
                        </div>
                        <div class="glAppInfo">
                            <div class="glAppInfoHead">
                                <ol class="RlistName">
                                    <li>
                                    <span>
                                      <a href="<?=$game['titleurl']?>" target="_blank">
                                        <?=$game['title']?>
                                      </a>
                                    </span>
                                    </li>
                                    <li class="RlistA">
                                        <?=$game['bb']?>
                                    </li>
                                    <li class="RlistA" style="margin-top:-4px;">
                                    <span  class='starSpans' style='width:70px; height:12px; display:inline-block; background-image:url(/Images/star_small.png); '>
        <span style='width:42px; height:12px; display:inline-block; background-image:url(/Images/star_small.png); background-position:0px 12px;'></span>
                                    </span>
                                    </li>
                                </ol>
                            </div>
                            <div class="glAppInfoDesc">
                                <p class="smalltext_hide">
                                    　<?=$game['smalltext']?>
                                </p>
                            </div>
                            <div class="glAppInfoBottom">
                            <span>
                              分类：
                              <a href="/game/<?=$game['type']?>-0-0.html" title="<?=$game['typei']?>" target="_blank">
                                <?=$game['typei']?>
                              </a>
                            </span>
                                <span>
                              下载：大于2000次
                            </span>
                                <span>
                              大小：<?=$game['size']?>
                            </span>
                            </div>
                        </div>
                        <div class="glAppDown">
                            <a href="<?=$game['titleurl']?>" title="_下载"  rel="nofollow" >
                                 <span class="downSpan">
                                   <img src="http://c12.eoemarket.net/static/Images/d.png" class="showImg" />
                                   <img src="http://c12.eoemarket.net/static/Images/downBtnHover.png" class="hoverImg down_event" style=" display:none;" />
                                 </span>
                            </a>
                        </div>
                    </div>
                    <?}?>
                    <!--相关推荐开始 -->
                    <div class="profile_phone mt20">
                        <div class="titlec_introduce">
                            <span class="title_introduce">
                                猜你喜欢
                            </span>
                        </div>
                        <div class="game_list_con">
                            <div class="game_list_c">
                                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,9,1,0,'','RAND()');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                <div class="classf_list_items fl " >
                                    <div class="classf_list_item_cs">
                                        <a href="<?=$bqsr['titleurl']?>" class="classf_list_img fl" target="_blank">
                                            <img class="lazy" src="<?=$bqr['titlepic']?>"/>
                                        </a>
                                        <span class="classf_list_inf">
                                            <a href="<?=$bqsr['titleurl']?>" class="classf_list_name" target="_blank"><?=$bqr['title']?></a>
                                            <span class="game_forum">
                                                下载数：大于2000次
                                            </span>
                                         <a href="<?=$bqsr['titleurl']?>" target="_blank" class="game_down_btn" rel="nofollow">
                                             点击下载
                                         </a>
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
                    <!-- 相关推荐结束 -->
                </div>
            </div>
            <!-- 右边栏开始 -->
            <div class="containerRight">
                <div class="hotGonglue">
                    <div class="hotGonglueImg">
                        <img src="http://c12.eoemarket.net/static/Images/releative_gl.png" alt="热门资讯" />
                    </div>
                    <div class="hotGonglueList">
                        <ol>
                            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,10,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                            <li>
                                <a href="<?=$bqsr['titleurl']?>" class="glTitleA" title="<?=$bqr['title']?>" target="_self">
                                    <?=$bqr['title']?>
                                </a>
                            </li>
                            <?php
}
}
?>
                        </ol>
                    </div>
                </div>

                <div class="advertisements">
                    <ol>
                        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,3,2,0,'','RAND()');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                        <li>
                            <a href="<?=$bqsr['titleurl']?>" target="1" title="<?=$bqr['title']?>">
                                <?$pd_record=explode("\r\n",$bqr[morepic]);$pd_field=explode("::::::",$pd_record[0]);?>
                                <img src="<?=$pd_field[1]?>"  alt="<?=$bqr['title']?>" title="<?=$bqr['title']?>" width="170" height="79"  />
                            </a>
                        </li>
                        <?php
}
}
?>
                    </ol>
                </div>
                <br />
                <div class="hotGonglue">
                    <div class="hotGonglueImg">
                        <img src="http://c12.eoemarket.net/static/Images/hotGonglue.png" alt="最新资讯" />
                    </div>
                    <div class="hotGonglueList">
                        <ol>
                            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,10,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                            <li>
                                <a href="<?=$bqsr['titleurl']?>" class="glTitleA" title="<?=$bqr['title']?>" target="_self">
                                    <?=$bqr['title']?>
                                </a>
                            </li>
                            <?php
}
}
?>
                        </ol>
                    </div>
                </div>
            </div>
            <!--右边栏结束-->
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