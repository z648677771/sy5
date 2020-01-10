<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta name="save" content="history"/>
<title>热门游戏排行榜_游戏排行榜大全_最好玩的游戏排行榜 - <?=$public_r['add_www_kaifamei_com_name']?></title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta http-equiv="mobile-agent" content="format=xhtml; url=<?=$public_r['add_www_kaifamei_com_m']?>">
<meta http-equiv="mobile-agent" content="format=html5; url=<?=$public_r['add_www_kaifamei_com_m']?>">
<link rel="shortcut icon" href="/favicon.ico"/>
<link type="text/css" rel="stylesheet" href="/kaifamei/css/index.css"/>
<script type="text/javascript">
    (function(){var ua=navigator.userAgent.toLowerCase();var bIsIpad=ua.match(/ipad/i)=="ipad";var bIsIphoneOs=ua.match(/iphone os/i)=="iphone os";var bIsAndroid=ua.match(/android/i)=="android";var bIsWM=ua.match(/windows mobile/i)=="windows mobile";if(bIsIpad||bIsIphoneOs||bIsAndroid||bIsWM){window.location.href="<?=$public_r['add_www_kaifamei_com_m']?>/rank.html"}})();
</script>
</head>
<body>
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
<div class="crumb">
  <div class="w1200"><i class="icon"></i> 所在位置：<a href="/" target="_blank">首页</a>&nbsp;&gt;&nbsp;排行榜 </div>
</div>
<div class="ranking_list_wrap w1200 clearfix tab_box">
  <div class="ranking_list_f fl bg">
    <div class="rank_menu">
      <ul>
        <li>
          <h2 class="current"><i class="icon ico_l"></i> <a target="_self" href="/rank.html">热门游戏排行榜</a> <i class="icon ico_r"></i> </h2>
        </li>
        <li>
          <h2><i class="icon ico_l"></i><a target="_self" href="#">手机游戏排行榜</a> <i class="icon ico_r"></i> </h2>
          <div class="game_type clearfix"> <a target="_blank" href="/rank/game/">手游排行榜</a> <a target="_blank" href="/rank/hgame/">手游推荐榜</a> </div>
        </li>
      </ul>
    </div>
  </div>
  <div class="ranking_list_r tab_cont fr">
    <ul class="sub_box  clearfix">
      <li class="ranking_lists">
        <div class="title_p clearfix">
          <h3>手游排行榜</h3>
          <a class="more fr" target="_blank" href="/rank/game/">更多&nbsp;&gt;&gt;</a> </div>
        <ul>
		<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,10,1,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <li> <i class="icon num<?=$bqno?>"><em><?=$bqno?></em></i> <a href="<?=$bqsr['titleurl']?>" target="_blank" class="fl"> <img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"> </a>
            <div> <a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
              <p class="descri"><?=$bqr['title']?></p>
              <p class="intro"><?=$bqr['smalltext']?>  </p>
            </div>
          </li>		  
		<?php
}
}
?>
        </ul>
      </li>
      <li class="ranking_lists">
        <div class="title_p clearfix">
          <h3>手游推荐榜</h3>
          <a class="more fr" target="_blank" href="/rank/hgame/">更多&nbsp;&gt;&gt;</a> </div>
        <ul>
		<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,10,1,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <li> <i class="icon num<?=$bqno?>"><em><?=$bqno?></em></i> <a href="<?=$bqsr['titleurl']?>" target="_blank" class="fl"> <img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"> </a>
            <div> <a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
              <p class="descri"><?=$bqr['title']?></p>
              <p class="intro"><?=$bqr['smalltext']?>  </p>
            </div>
          </li>		  
		<?php
}
}
?>
        </ul>
      </li>
      <li class="ranking_lists">
        <div class="title_p clearfix">
          <h3>棋牌游戏大全</h3>
          <a class="more fr" target="_blank" href="/rank/qpdq/">更多&nbsp;&gt;&gt;</a> </div>
        <ul>
		<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,10,1,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <li> <i class="icon num<?=$bqno?>"><em><?=$bqno?></em></i> <a href="<?=$bqsr['titleurl']?>" target="_blank" class="fl"> <img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"> </a>
            <div> <a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
              <p class="descri"><?=$bqr['title']?></p>
              <p class="intro"><?=$bqr['smalltext']?>  </p>
            </div>
          </li>		  
		<?php
}
}
?>
        </ul>
      </li>
    </ul>
  </div>
</div>
<div class="h20"></div>
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

<script type="text/javascript" src="/kaifamei/js/jquery1.9.1.min.js"></script> 
<script type="text/javascript" src="/kaifamei/js/index.js"></script> 
</body>
</html>