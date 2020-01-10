<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?=ReturnZtAddField(0,ztseotitle)?>-<?=$public_r['add_www_kaifamei_com_name']?></title>
    <meta name="keywords" content="[!--class.keywords--]"/>
    <meta name="description"
          content="<?=$public_r['add_www_kaifamei_com_name']?>汇集了[!--pagetitle--]游戏下载资源，每天不停更新最新[!--pagetitle--]手游信息，包括好玩[!--pagetitle--]手游推荐，玩家们可以在[!--pagetitle--]专题找到自己喜欢的[!--pagetitle--]游戏进行免费下载！"/>
    <!-- seo优化 -->
    <meta property="og:type" content="720"/>
    <meta property="og:title"
          content="<?=ReturnZtAddField(0,ztseotitle)?>-<?=$public_r['add_www_kaifamei_com_name']?>"/>
    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select ztpath from [!db.pre!]enewszt where ztid='$GLOBALS[navclassid]'",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
    <meta property="og:url" content="<?=$public_r['add_www_kaifamei_com_www']?>/<?=$bqr[ztpath]?>/"/>
    <?php
}
}
?>
    <meta name="applicable-device" content="pc">
    <link rel="alternate" media="only screen and(max-width: 640px)" href="">
    <meta name="mobile-agent" content="format=html5;url=">
<script type="text/javascript">
    (function(){var ua=navigator.userAgent.toLowerCase();var bIsIpad=ua.match(/ipad/i)=="ipad";var bIsIphoneOs=ua.match(/iphone os/i)=="iphone os";var bIsAndroid=ua.match(/android/i)=="android";var bIsWM=ua.match(/windows mobile/i)=="windows mobile";if(bIsIpad||bIsIphoneOs||bIsAndroid||bIsWM){window.location.href="<?=$public_r['add_www_kaifamei_com_m']?>/<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select ztpath from [!db.pre!]enewszt where ztid='$GLOBALS[navclassid]'",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?><?=$bqr[ztpath]?><?php
}
}
?>/"}})();
</script>
    <link rel="stylesheet" type="text/css" href="/public/css/subject_info.css"/>
     <!-- seo优化 -->
    <link rel="stylesheet" type="text/css" href="/public/css/public.css"/>
    <link rel="stylesheet" type="text/css" href="/public/css/index.css"/>
    <script src="/public/js/jquery.js" type="text/javascript"></script>
    <script src="/public/js/qrcode.min.js" type="text/javascript"></script>
</head>
<body>
<div class="head_cb">
    <div class="headb">
        <h1>[!--pagetitle--]</h1>
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

    <div style="width:100%;height:70px">ppp</div>
    <div class="layoutDiv">
        <div class="homeBgDiv">
            <div class="topContentDiv">
                <div class="topContentLeftDiv">
                    <img class="topContentLeftImg" src="[!--class.classimg--]" alt="[!--pagetitle--]">
                </div>
                <div class="topContentRightDiv"
                     style="background: url('http://c11.eoemarket.com/static/Images/subject/bg3.png') no-repeat;">
                    <p class="specialTitle">[!--pagetitle--]</p>
                    <p class="specialDesc">[!--class.intro--]</p>
                </div>
            </div>
            <div class="bottomContentDiv">
                <div class="bottomContentLeftDiv">
                    [!--empirenews.listtemp--]
                    <!--list.var1-->
                    <!--list.var2-->
                    <!--list.var3-->
                    <!--list.var4-->
                    <!--list.var5-->
                    [!--empirenews.listtemp--]
                </div>
               <!-- <div class="bottomContentRightDiv"></div>-->
                <div class="page_eoe">
                    <div class="page_c_eoe">
                        [!--show.listpage--]
                    </div>
                </div>
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