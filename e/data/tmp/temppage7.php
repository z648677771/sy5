<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>搜索 - <?=$public_r['add_www_kaifamei_com_name']?></title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="applicable-device" content="mobile">
<meta http-equiv="Cache-Control" content="no-transform" />
<meta name="format-detection" content="telephone=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1, user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="yes" name="apple-touch-fullscreen" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="/kaifamei/css/index.css" />
<link rel="stylesheet" type="text/css" href="/kaifamei/css/swiper.min.css" />
<script src="/kaifamei/js/main.js" type="text/javascript"></script>
</head>
<body>
<div class="wrap"> 
  <!-- 顶部 -->
  <header class="green_bg flex"> <a href="javascript:history.go(-1)" class="back"><i class="icon"></i></a>
    <div class="search_txt flex flex_grow">
      <input type="text" class="text flex_grow" id="searchKey" onkeyup="if(event.keyCode==13){Javascript:search();}else{Javascript:liftSearch();}" value="" />
      <span class="close_txt" id="closeTxt"><i class="icon"></i></span>
      <div class="search_ul hide">
        <ul class="search_ul_txt">
          <li>王者荣耀</li>
          <li>绝地求生刺激战场</li>
          <li>阴阳师</li>
        </ul>
      </div>
    </div>
    <input type="hidden" id="baseUrl" value="/">
    <a href="javascript:void(0)" class="search2" id="dosearch"><i class="icon"></i></a> </header>
  <!-- 搜索首页 -->
  <div class="search_wrap bg">
    <div class="near_fridends">附近好友在玩：
	<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,3,12,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
    <a href="<?=$bqsr['titleurl']?>"><?=$bqr['title']?></a>
	<?php
}
}
?>
    </div>
    <div class="tit flex">
      <h3 class="flex_grow">热门</h3>
      <a href="/game/" class="more">更多 &gt;</a> </div>
    <ul class="img_list flex">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,5,1,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      <li><a href="<?=$bqsr['titleurl']?>"> <img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
        <p class="name"><?=$bqr['title']?></p>
        <p class="size"><?=$bqr['size']?></p>
        </a></li>
<?php
}
}
?>
    </ul>
    <ul class="txt_list flex">
    </ul>
    <div class="green_line"></div>
    <div class="tit flex">
      <h3 class="flex_grow">手机应用</h3>
    </div>
    <ul class="txt_list flex">
	<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(2,3,2,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      <li><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><?=$bqr['title']?></a></li>
	<?php
}
}
?>
    </ul>
    <div class="green_line"></div>
    <div class="tit flex">
      <h3 class="flex_grow">手机游戏</h3>
    </div>
    <ul class="txt_list flex">
	<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,3,2,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      <li><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><?=$bqr['title']?></a></li>
	<?php
}
}
?>
    </ul>
    <div class="green_line"></div>
    <div class="tits"> <a href="/game/" target="_blank"><i class="icon_i"></i> 更多游戏</a> </div>
  </div>
  
  <!-- 搜索列表 -->
  <div class="search_list_wrap_div bg hide">
    <ul class="search_list_wrap">
    </ul>
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

</div>
<script src="/kaifamei/js/zepto.min.js" type="text/javascript" charset="utf-8"></script> 
<script src="/kaifamei/js/fastclick.min.js" type="text/javascript"></script> 
<script src="/kaifamei/js/swiper.min.js" type="text/javascript"></script> 
<script src="/kaifamei/js/index.js" type="text/javascript"></script>
</body>
</html>