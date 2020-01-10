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
                      <img src="http://c14.eoemarket.net/app0/791/791251/icon/1645555_480.png"/>
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
                                <em>更新时间：<?=date('Y-m-d H:i:s',$ecms_gr[newstime])?></em>
                            </span>
                        </span>
                    </div>
                    <div class="qrcode_introduce">
                        <span class="download_intr">
                            <a href="#" rel="nofollow" class="downlpc down_event" style="background-color: #cccccc">手机版已下架</a>
                            <a class="downlpc down_event" href="http://adurl.eoemarket.com/ddz_yyzd_exe_ycl">下载电脑版</a>
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
                        <span class="title_introduce"><?=$ecms_gr[title]?></span>
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

                            <div class="classf_list_items fl ">

                                <div class="classf_list_item_cs">
                                    <a href="/game/921010.html" class="classf_list_img fl" target="_blank">
                                        <img class="lazy"
                                             data-original="http://c14.eoemarket.net/app0/921/921010/icon/1905076_480.png"/>
                                    </a>
                                    <span class="classf_list_inf">
                                            <a href="/game/921010.html" class="classf_list_name" target="_blank">欢乐真人斗地主赢话费2017</a>
                                            <span class="game_forum">下载数：大于2000次                                            </span>
                                        <!-- <a href="<?/*=func::getDLURI($v['id'])*/?>" target="_blank" class="game_down_btn" rel="nofollow">
                                             点击下载
                                         </a>-->
                                        </span>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!--recommend结束-->


                <!--游戏相关攻略开始-->
                <?
                    $rel_count=$empire->fetch1("select count(id) as count_data from www_kaifamei_com_ecms_news where game_id=$navinfor[id]");
                    var_dump($rel_count);
                    if($rel_count['count_data']){
                ?>
                <div class="profile_app mt20">
                    <div class="titlec_introduce">
                    <span class="title_introduce">
                        相关资讯
                    </span>
                    </div>
                    <ul class="relative_gl_list">
                        <?

                        $rel_news=$empire->query("select titleurl,title from www_kaifamei_com_ecms_news where game_id=$navinfor[id] limit 5");
                        while($res=$empire->fetch($rel_news))
                        {
                        ?>
                            <li><a href="<?=$res[titleurl]?>" target="_blank"><?=$res[title]?></a></li>
                        <?}?>
                    </ul>
                </div>
                <?}?>
                <!--游戏相关攻略结束-->
            </div>
            <div class="appdetail_r ml20">
                <!-- 客户端下载开始   -->
                <!--详情页客户端广告-->
                <div class="client_down">
                    <span></span>
                    <div class="client_down_c">
                        <a href="http://www.eoemarket.com/soft/30970.html" target="_blank">
                            <img src="http://c12.eoemarket.net/static/Images/details_ad.png" />
                        </a>

                    </div>
                    <a href="http://download.eoemarket.com/app?id=30970&channel_id=426">
                        <img src="http://c12.eoemarket.net/static/Images/dw.png">
                    </a>
                </div>            <!-- 客户端下载结束   -->
                <!-- 热门标签开始   -->
                <div class="detail_hot_lable mt20 ">

                    <div class="detailhot_lable_t " id="detailhot_replace"><span class="detail_lable_h">热门标签</span> <a
                            class="detail_reload_lab" id="reload_lab"></a></div>
                    <div id="reload_div">
                        <div class="detailhot_lable_c clearfix">
                            <a href="/soft/t_20_1.html" class="hot_lable_item  clearfix">
                                <em onClick="ga('send','event','点击标签','打开详情','热门标签');">投资</em>
                                <b>1</b>
                            </a>
                            <a href="/soft/t_21_1.html" class="hot_lable_item  clearfix">
                                <em onClick="ga('send','event','点击标签','打开详情','热门标签');">计算器</em>
                                <b>1</b>
                            </a>
                            <a href="/soft/t_17_1.html" class="hot_lable_item  clearfix">
                                <em onClick="ga('send','event','点击标签','打开详情','热门标签');">电话</em>
                                <b>1</b>
                            </a>
                            <a href="/game/t_78_1.html" class="hot_lable_item  clearfix">
                                <em onClick="ga('send','event','点击标签','打开详情','热门标签');">智力开发</em>
                                <b>1</b>
                            </a>
                            <a href="/soft/t_36_1.html" class="hot_lable_item  clearfix">
                                <em onClick="ga('send','event','点击标签','打开详情','热门标签');">搜索·下载</em>
                                <b>1</b>
                            </a>
                            <a href="/soft/t_29_1.html" class="hot_lable_item  clearfix">
                                <em onClick="ga('send','event','点击标签','打开详情','热门标签');">美食·菜谱</em>
                                <b>1</b>
                            </a>
                            <a href="/soft/t_92_1.html" class="hot_lable_item  clearfix">
                                <em onClick="ga('send','event','点击标签','打开详情','热门标签');">邮箱</em>
                                <b>1</b>
                            </a>
                            <a href="/soft/t_33_1.html" class="hot_lable_item  clearfix">
                                <em onClick="ga('send','event','点击标签','打开详情','热门标签');">电影</em>
                                <b>1</b>
                            </a>
                            <a href="/game/t_75_1.html" class="hot_lable_item  clearfix">
                                <em onClick="ga('send','event','点击标签','打开详情','热门标签');">3D</em>
                                <b>1</b>
                            </a>
                            <a href="/soft/t_31_1.html" class="hot_lable_item  clearfix">
                                <em onClick="ga('send','event','点击标签','打开详情','热门标签');">视频</em>
                                <b>1</b>
                            </a>
                            <a href="/soft/t_25_1.html" class="hot_lable_item  clearfix">
                                <em onClick="ga('send','event','点击标签','打开详情','热门标签');">电台</em>
                                <b>1</b>
                            </a>
                            <a href="/soft/t_16_1.html" class="hot_lable_item  clearfix">
                                <em onClick="ga('send','event','点击标签','打开详情','热门标签');">电话通讯</em>
                                <b>1</b>
                            </a>
                            <a href="/soft/t_86_1.html" class="hot_lable_item  clearfix">
                                <em onClick="ga('send','event','点击标签','打开详情','热门标签');">租房·短租</em>
                                <b>1</b>
                            </a>
                        </div>
                        <script>
                            var appId = 0;
                            if (appId) {
                                $("#detailhot_replace").html('<span class="detail_lable_h">标签</span>');
                            }
                        </script>
                    </div>
                </div>
                <!--热门标签结束-->
                <!--猜你喜欢开始-->

                <!--猜你喜欢结束-->
                <!--广告栏开始-->

                <div class="detail_ad mt20">
                    <a href="http://www.eoemarket.com/soft/8004.html" target="1" title="手机淘宝">
                        <img src="http://c16.eoemarket.net/upload/images/newcricle/1/20170816143638.png"
                             alt="手机淘宝" title="手机淘宝" onClick="ga('send','event','详情页','点击广告','右侧小图','位置0');"/>
                    </a>
                    <a href="http://www.eoemarket.com/soft/8004.html" target="1" title="手机淘宝"><em>手机淘宝</em></a>
                </div>
                <div class="detail_ad mt20">
                    <a href="/game/125179.html" target="1" title="霸三国">
                        <img src="http://c13.eoemarket.net/upload/images/newcricle/1/20150330141245.jpg"
                             alt="霸三国" title="霸三国" onClick="ga('send','event','详情页','点击广告','右侧小图','位置1');"/>
                    </a>
                    <a href="/game/125179.html" target="1" title="霸三国"><em>霸三国</em></a>
                </div>
                <div class="detail_ad mt20">
                    <a href="/game/377954.html" target="1" title="雷电2014（雷霆版）">
                        <img src="http://c15.eoemarket.net/upload/images/newcricle/1/20150330141307.jpg"
                             alt="雷电2014（雷霆版）" title="雷电2014（雷霆版）"
                             onClick="ga('send','event','详情页','点击广告','右侧小图','位置2');"/>
                    </a>
                    <a href="/game/377954.html" target="1" title="雷电2014（雷霆版）"><em>雷电2014（雷霆版）</em></a>
                </div>
                <!--广告栏结束-->
                <!--特色应用开始-->
                <div class="like_lable mt20 clearfix">
                    <div class="subtitle">
                        <span>特色应用</span>

                    </div>

                    <div class="like_lable_c" id="special_recom">
                        <div class="like_lable_item clearfix">
                            <a href="/game/767608.html" target="_blank"
                               class="like_lable_icon">
                                <img class="lazy"
                                     data-original="http://c12.eoemarket.net/app0/767/767608/icon/2101720_480.png"/>

                            </a>
                            <div class="like_lable_info ">
                                <a href="/game/767608.html" target="_blank"
                                   class="like_lable_name">开心消消乐®</a>
                                <span class="like_lable_classify">益智休闲</span>
                                <span class="like_lable_down">
                                   <em>4万次下载</em>
                                </span>

                            </div>
                            <a href="http://download.eoemarket.com/app?id=767608&channel_id=426" rel="nofollow"
                               class="like_downbtn down_event">
                                下载
                            </a>
                        </div>
                        <div class="like_lable_item clearfix">
                            <a href="/game/800377.html" target="_blank"
                               class="like_lable_icon">
                                <img class="lazy"
                                     data-original="http://c15.eoemarket.net/app0/800/800377/icon/1960196_480.png"/>

                            </a>
                            <div class="like_lable_info ">
                                <a href="/game/800377.html" target="_blank"
                                   class="like_lable_name">地牢猎手5</a>
                                <span class="like_lable_classify">动作冒险</span>
                                <span class="like_lable_down">
                                   <em>3万次下载</em>
                                </span>

                            </div>
                            <a href="http://download.eoemarket.com/app?id=800377&channel_id=426" rel="nofollow"
                               class="like_downbtn down_event">
                                下载
                            </a>
                        </div>


                    </div>


                </div>
                <!--特色应用结束-->


            </div>


        </div>
        <!--历史版本下载弹框开始-->
        <div class="version_alert">
            <div class="version_alert">
                <div class="eoe_zs_head version_head">
                <span class="eoe_zs_title version_title">
                    历史版本下载
                </span>
                    <span class="eoe_zs_close version_close">
                    <img src="http://c11.eoemarket.com/static/Images/report_close.png">
                </span>
                </div>
                <div class="version_content">
                    <div class="eoe_zs_left">
                        <div class="version_content_line1">
                            点击下面的按钮下载4.7.4版本
                        </div>
                        <div class="eoe_zs_line3">
                            <a href="#" class="version_url">
                                <img src="http://api.eoemarket.com/public/zhushou/eoedown.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--历史版本下载弹框结束-->
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

