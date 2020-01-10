<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>[!--pagetitle--] - <?=$public_r['add_www_kaifamei_com_name']?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
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
            <img class="lazy_load_on_load" src="http://c15.eoemarket.net/static/Images/logo.png"></a>
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
<style>
    .Sright, .ruku_content, .Bright {
        width: 768px;
        float: left;
        margin-left: 20px;
    }
</style>
<!-- header end -->
<div class="cb_con"></div>

<link href='/public/css/about.css' type='text/css' rel='stylesheet' />
<div class="Amain" style="height:510px;">
    <?php
        $pageid=str_replace("page","",$classid);
    ?>
    <div class="Cleft about">
        <ol>
            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select id,title,path as classidi from [!db.pre!]enewspage limit 1,5",10,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li class="<?if ($bqr['id']==$pageid){ echo 'geton';}else{echo 'color';}?>">
                <a href="/<?=str_replace('../../','',$bqr[classidi])?>">
                    <?=$bqr['classid']?><?=$bqr[title]?>
                </a>
            </li>
            <?php
}
}
?>
        </ol>
    </div>
    <div class="ruku_content">
        <div class="content">
            <div class="about_wrap">
                <div class="about_cont">
                    <p>入库提醒：</p>

                    <p>1、带*号为必填项，否者将会入库失败！&nbsp;</p>

                    <p>2、含不良信息及对用户造成不良影响的游戏不收录，一经发现录入的游戏含不良信息，下载59网有权立即删除！</p>

                    <p>3、请在官网首页添加本站的单向友情链接地址，未添加的一律不会入库！</p>

                </div>
            </div>
            <div class="ruku_wrap">
                <form id="info" method="post" action="/extension/rukuGetInfo.php" enctype="multipart/form-data">
                    <div class="item_wrap">
                        <h2>游戏上传</h2>
                        <p><strong>游戏信息</strong></p>

                        <div class="list">
                            <div class="left_txt"><i class="required">*</i>应用名称：</div>
                            <input type="text" name="title" class="Item_input" required="required" id="title">
                        </div>
                        <div class="list">
                            <div class="left_txt"><i class="required">*</i>应用大小：</div>
                            <input type="text" name="size" class="Item_input" required="required" id="size">
                        </div>
                        <div class="list">
                            <div class="left_txt"><i class="required">*</i>应用版号：</div>
                            <input type="text" name="bb" class="Item_input" required="required" id="bb">
                        </div>
                        <div class="list">
                            <div class="left_txt"><i class="required">*</i>安卓地址：</div>
                            <input type="text" name="downurl" class="Item_input" required="required" id="downurl">
                        </div>
                        <div class="list">
                            <div class="left_txt">IOS地址：</div>
                            <input type="text" name="downurli" class="Item_input" id="downurli">
                        </div>
                        <div class="list">
                            <div class="left_txt"><i class="required">*</i>应用图标：</div>
                            <div class="up_wrap up_wrap2">
                                <input type="file" name="icon" id="icon" required="required" accept="image/png,image/jpg,image/jpeg">
                                <img src="" alt="">
                            </div>
                        </div>
                        <div class="list">
                            <div class="left_txt"><i class="required">*</i>截图地址：</div>
                            <div class="up_wrap up_wrap2">
                                <input type="file" multiple="" name="jietu0" required="required" id="net_jietu0"
                                       accept="image/png,image/jpg,image/jpeg">
                                <img src="" alt="">
                            </div>
                            <div class="up_wrap up_wrap2">
                                <input type="file" multiple="" name="jietu1" id="net_jietu1"
                                       accept="image/png,image/jpg,image/jpeg">
                                <img src="" alt="">
                            </div>
                            <div class="up_wrap up_wrap2">
                                <input type="file" multiple="" name="jietu2" id="net_jietu2"
                                       accept="image/png,image/jpg,image/jpeg">
                                <img src="" alt="">
                            </div>
                            <div class="up_wrap up_wrap2">
                                <input type="file" multiple="" name="jietu3" id="net_jietu3"
                                       accept="image/png,image/jpg,image/jpeg">
                                <img src="" alt="">
                            </div>
                        </div>
                        <div style="color:red;font-size: 14px;padding-left: 200px">上传不超过150kb的jpg或png图片(最多上传4张最少1张)</div>
                        <div class="list">
                            <div class="left_txt"><i class="required">*</i>应用介绍：</div>
                            <textarea cols="100" rows="100" name="smalltext" style="margin: 10px 0px;height: 432px;width: 591px;" class="Item_input" id="smalltext"></textarea>
                        </div>
                        <div class="list">
                            <div class="left_txt"><i class="required">*</i>上传者：</div>
                            <input type="text" name="writer" class="Item_input" required="required" id="writer">
                        </div>
                        <div class="list">
                            <div class="left_txt"><i class="required">*</i>开发商：</div>
                            <select class="Item_input" name="kfs" required="required" id="net_company" style="height: 40px;">
                                <option value="1">个人</option>
                                <option value="2">企业</option>
                            </select>
                        </div>
                    </div>
                    <p style="margin-bottom: 20px;">注：应用开发商为个人需要填写下方个人信息，应用开发商为公司则需要填写公司相关信息。</p>
                    <div id="geren">
                        <p><strong>个人信息</strong></p>
                        <div class="item_wrap">
                            <div class="list">
                                <div class="left_txt"><i class="required">*</i>真实姓名：</div>
                                <input type="text" name="real_name" class="Item_input" required="required" id="real_name">
                            </div>
                            <div class="list">
                                <div class="left_txt">联系方式：</div>
                                <input type="text" name="phone" class="Item_input">
                            </div>
                            <div class="list">
                                <div class="left_txt">邮箱：</div>
                                <input type="text" name="email" class="Item_input">
                            </div>

                            <div class="list">
                                <div class="left_txt"><i class="required">*</i>手持身份证照：</div>
                                <div class="up_wrap">
                                    <input type="file" id="idcard" name="idcard" required="required" accept="image/png,image/jpg,image/jpeg">
                                    <img src="" alt="">
                                </div>
                                <div style="clear: both;"></div>
                                <div style="color:red;font-size: 14px;width: 100%; text-align: center;">上传不超过300kb的jpg或png图片
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="qiye" style="display: none;">
                        <p><strong>公司信息</strong></p>
                        <div class="item_wrap">
                            <div class="list">
                                <div class="left_txt">公司名称：</div>
                                <input type="text" name="company" class="Item_input">
                            </div>
                            <div class="list">
                                <div class="left_txt">公司信息：</div>
                                <input type="text" name="company_desc" class="Item_input">
                            </div>
                            <div class="list">
                                <div class="left_txt">公司地址：</div>
                                <input type="text" name="company_address" class="Item_input">
                            </div>
                            <div class="list">
                                <div class="left_txt">组织机构代码：</div>
                                <input type="text" name="company_code" class="Item_input">
                            </div>
                            <div class="list">
                                <div class="left_txt">联系人：</div>
                                <input type="text" name="company_nickname" class="Item_input">
                            </div>
                            <div class="list">
                                <div class="left_txt">联系方式：</div>
                                <input type="text" name="company_phone" class="Item_input">
                            </div>
                            <div class="list">
                                <div class="left_txt">邮箱：</div>
                                <input type="text" name="company_email" class="Item_input">
                            </div>

                            <div class="list">
                                <div class="left_txt"><i class="required">*</i>营业执照扫描件：</div>
                                <div class="up_wrap">
                                    <input type="file" id="company_icon" name="company_icon" accept="image/png,image/jpg,image/jpeg">
                                    <img src="" alt="">
                                </div>
                                <div style="clear: both;"></div>
                                <div style="color:red;font-size: 14px;width: 100%; text-align: center;">上传不超过300kb的jpg或png图片
                                </div>
                            </div>
                            <div class="list">
                                <div class="left_txt">公司官网：</div>
                                <input type="text" name="company_site" class="Item_input">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="up_btn">确定上传</button>
                </form>
            </div>
        </div>
        <script>

            $(function () {
                $('#net_company').change(function () {
                    var type = $(this).val();
                    if (type == 2) {
                        $('#geren').css('display', 'none');
                        $('#qiye').css('display', 'block');
                        $('#real_name').removeAttr("required");
                        $('#idcard').removeAttr("required");
                        $('#company_icon').attr('required', 'required');
                    } else {
                        $('#geren').css('display', 'block');
                        $('#qiye').css('display', 'none');
                        $('#real_name').attr('required', 'required');
                        $('#idcard').attr('required', 'required');
                        $('#company_icon').removeAttr("required");
                    }
                });

            });
            $('.up_wrap input').on('change', function (event) {
                var img_ = $(this).next('img');
                var reader = new FileReader();
                reader.onload = function (e) {
                    img_src = reader.result // 预览base64
                    img_.attr('src', img_src)

                }
                reader.readAsDataURL(this.files[0])
            });
            function clickme() {
                var form = new FormData(document.getElementById("info"));
                var icon = form.get('icon');
                if (icon.size > 0) {
                    if (icon.size > 1024 * 150) {
                        layer.msg("图标过大");
                        return false;
                    }
                    if (icon.type != 'image/png' && icon.type != 'image/jpeg' && icon.type != 'image/jpg') {
                        layer.msg("图标格式不正确");
                        return false;
                    }
                } else {
                    layer.msg("请上传图标");
                    return false;
                }
                let files = [0].files[0];
                console.log(files);
                var jietu = '';
                for (var i = 0; i <= 3; i++) {
                    jietu = $('#net_jietu' +i)[0].files[0];
                    if (jietu.size > 0) {
                        if (jietu.size > 1024 * 150) {
                            layer.msg("第" + (i + 1) + "张截图过大");
                            return false;
                        }
                        if (jietu.type != 'image/png' && jietu.type != 'image/jpeg' && jietu.type != 'image/jpg') {
                            layer.msg("图标格式不正确");
                            return false;
                        }
                    } else if (i == 0) {
                        layer.msg("请上传截图");
                        return false;
                    }
                }

                var idcard = form.get('idcard');
                if (idcard.size > 0) {
                    if (idcard.size > 1024 * 300) {
                        layer.msg("身份证图片超过300kb");
                        return false;
                    }
                    if (idcard.type != 'image/png' && idcard.type != 'image/jpeg' && idcard.type != 'image/jpg') {
                        layer.msg("身份证图片格式不正确");
                        return false;
                    }
                }
                var company_icon = form.get('company_icon');
                if (company_icon.size > 0) {
                    if (company_icon.size > 1024 * 300) {
                        layer.msg("营业执照图片超过300kb");
                        return false;
                    }
                    if (company_icon.type != 'image/png' && company_icon.type != 'image/jpeg' && company_icon.type != 'image/jpg') {
                        layer.msg("营业执照图片格式不正确");
                        return false;
                    }
                }
                return false;
            }
        </script>

    </div>
    <p style="clear: both;">
    </p>
</div>


<!-- footer -->
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

</body>
</html>

