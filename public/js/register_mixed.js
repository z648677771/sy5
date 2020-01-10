/**
 * @filename loginAlert.js
 * @encoding UTF-8
 * @author 张聪慧 <zhangconghui@eoemarket.com>
 * @datetime 2015-8-14  9:52:03
 * @Descriptione
 */

var alerts_load = {
    init: function () {
        this.login_reg();
        this.checkBox();
        this.login_hover();
        this.clean_input();
        this.hide_passwd();
        this.add_warnAlert();
        this.alert_hide();
        this.mail_regshow();
        this.phone_regshow();
        this.operat_usershow();
        this.getback_passwshow();
        this.reback_psw();
        this.reset_passwshow();
        this.check_sucesshide();
        this.check_sucessshow();
        this.checkbtn_color();
        this.guide_regshow();
        this.guide_reghide();
        this.alert_top();
        this.pic_verify();
    },
    pic_verify: function() {
        $(".verify").live("click", function(){
            $(this).attr("src", "http://user.eoemarket.com/user/get-pic-verify");
        });
    },
    checkBox: function () {
        //模仿复选框
        $(".alertlogin_automatic,.rememberbtn").live("click", function () {
            if ($(this).find("img").attr("src") == "http://c12.eoemarket.net/static/Images/check_offlogin.png")
            {
                $(this).find('input').val(1);
                $(this).find("img").attr("src", "http://c12.eoemarket.net/static/Images/check_onlogin.png");
            } else {
                $(this).find('input').val(0);
                $(this).find("img").attr("src", "http://c12.eoemarket.net/static/Images/check_offlogin.png");
            }
        });
    },
    login_reg: function () {
        //登录弹框显示
        $(".loginalerts,.alertreg_login span,.loginalert_show,.login_btn,.getback_login").live("click", function () {
            $(window).scrollTop(0);
            $(".alertlogin_warn").html("");
            $(".reg_c").html("");
            var alertreg_reg = $("#login_show").html();
            $(".reg_c").append(alertreg_reg);
            //$(".reg_c").show().animate({"opacity": "1", "margin-top": "0px"});
            $(".reg_c").show();
            return alerts_load._login_show();
        });

        //注册显示
        $(".regalerts,.alertlogin_reg span,.regalert_show,.regbtn,.reg_fast").live("click", function () {
            $(window).scrollTop(0);
            $(".alertlogin_warn").html("");
            var alertreg_reg = $("#login_show").html();
            $(".reg_c").html('');
            $(".reg_c").append(alertreg_reg);
            //$(".reg_c").show().animate({"opacity": "1", "margin-top": "0px"});
            $(".reg_c").show();
            // userApi.unlock();
            $(".alertlogin_c .regalerts").addClass("select_alert").siblings("span").removeClass("select_alert");
            $(".alertlogin_log").hide();
            $(".alertreg_reg").show();
            alerts_load.shade_show();
        });

        //关闭
        $(".shade,.alert_close").live("click",function(){
            return alerts_load._login_hide();
        });
    },
    login_hover: function () {
        //鼠标划过的登录框
        $(".login_hoverc").hover(function () {
            $(this).css("background", "#23303c");
            $(".login_hover").show();

            var errorTime = cookie_fun.get_cookie('errorTime');
            if (errorTime) {
                $(".login_pin").eq(0).find('img').click().end().show();
            }

        }, function () {
            $(this).css("background", "#2c3e50");
            $(".login_hover").hide();
        });
    },
    clean_input: function () {
        //清除输入框的默认值
        $(".clearcon").live("click", function () {
            var text_value = $(this).val();
            if (text_value == this.defaultValue) {
                $(this).val('');
            }
        });
        $(".clearcon").live("blur", function () {
            var text_value = $(this).val();
            if (text_value == "") {
                $(this).val(this.defaultValue);
            }
        });
    },
    hide_passwd: function () {
        //隐藏密码输入框
        $(".password,.alert_input_con input").live("focus", function () {
            $(this).siblings(".showPwd").hide();
            $(this).siblings("span").hide();
            $(this).siblings("em").hide();
        });
        $(".showPwd,.alert_input_con span,.alert_input_con em").live("click", function () {
            $(this).hide();
            $(this).siblings(".password").focus();
            $(this).siblings("input").focus();
        });
        $(".password,.alert_input_con input").live("blur", function () {
            var text_value = $(this).val();
            if (text_value == "") {
                $(this).siblings(".showPwd").show();
                $(this).siblings("span").show();
                $(this).siblings("em").show();
            }
        });

    },
    add_warnAlert: function () {
        //动态添加弹框
        var warn_con = $("").html();
        $(".content_c").append(warn_con);
        //alerts_load.shade_show();

    },
    shade_show: function () {
        //遮罩层显示
        $(".shade").show();

    },
    shade_hide: function () {
        //遮罩层隐藏
        $(".shade").hide();

    },
    alert_hide: function () {
        //弹框隐藏动画
        $(".wranalert_close").click(function () {
            $(".wranalert_c").animate({"margin-top": "-200px", opacity: "0"}, 1500, function () {
                $(this).remove();
            });
        });

    },
    alert_top:function(){
        //根据网页可显示区域高度设置弹框位置
        var doc_height=$(window).height();
        /* if(doc_height>554){
         $(".reg_c").css("top","138px");
         }else{
         $(".reg_c").css("top","35px");
         } */
        $(".reg_c").css("top","35px");
    },
    guide_reghide:function(){
        $(".guide_close").live("click",function(){
            $(".guide_regc").hide();
            cookie_fun.setCookie('guide_reg','hide','6');
        });
    },
    guide_regshow:function(){
        var guide_reg = cookie_fun.get_cookie('guide_reg');
        if (guide_reg) {
            return;
        }
        $(".guide_regc").show();
    },

    _login_show: function () {
        // $(window).scrollTop(0);
        // $(".reg_c").html("");
        // if("undefined" != typeof developer){
        //     $(".alertlogin_phone span").eq(0).html("请输入用户名或手机号或邮箱");
        // }
        // $(".alertlogin_c .loginalerts").addClass("select_alert").siblings("span").removeClass("select_alert");
        // $(".alertlogin_log").show();
        // $(".alertreg_reg").hide();
        $(".reg_c").children().remove();
        if("undefined" != typeof developer){
            $(".alertlogin_phone span").eq(0).html("请输入用户名或手机号或邮箱");
        }
        var login = $("#login_show").html();
        $(".reg_c").append(login);
        $(".reg_c").show();
        var errorTime = cookie_fun.get_cookie('errorTime');
        if (errorTime) {
            $(".login_pin").eq(1).find('img').click().end().show();
        }
         alerts_load.shade_show();
    },
    _login_hide:function(){
        $(".alertlogin_c").hide();
        /*$(".reg_c").animate({"margin-top": "-200px", opacity: "0"}, 800, function () {
         $(this).hide();
         });*/
        $(".reg_c").hide();
        alerts_load.shade_hide();
    },
    mail_regshow: function () {
        //邮箱注册弹框显示
        $(".mail_regbtn").live("click", function () {
            $(".reg_c").children().remove();
            var mail_reg = $("#mail_reg").html();
            $(".reg_con").hide();
            $(".reg_c").append(mail_reg);

        });
    },
    phone_regshow: function () {
        //手机注册弹框切换
        $(".phone_regbtn").live("click", function () {
            $(".reg_c").children().remove();
            var phone_reg = $("#phone_reg").html();
            $(".reg_c").append(phone_reg);

        });
    },
    getback_passwshow: function () {
        //密码找回页面展示
        $(".forgetpwd,.forget,.alertlogin_forget").live("click", function () {
            $(".alertlogin_c").hide();
            return alerts_load._getback_passwshow();
        });
        $(".reset_login").live("click", function () {
            var errorval = $(".reset_mail input").val();
            alerts_load._getback_passwshow();
            $(".getback_phone input").val(errorval);

        });
    },
    _getback_passwshow: function () {
        //密码找回页面展示
        $(".reg_c").children().remove();
        var getback_passw = $("#getback_passw").html();
        $(".reg_c").append(getback_passw);
        //$(".reg_c").show().animate({"opacity": "1", "margin-top": "0px"});
        $(".reg_c").show();
        var uid = cookie_fun.get_cookie('uid');
        if (uid) {
            $(".getback_login").die().text('');
        } else {
            $(".getback_login").live("click", function () {
                return alerts_load._login_show();
            }).text('登录');
        }

        alerts_load.shade_show();

        $(".getback_phone input").live('blur', function () {
            $(this).next("b").text("");
            var reg_mobile = $(this).val();
            var reg_p = userApi.check_mobile(reg_mobile);
            var reg_e = userApi.check_email(reg_mobile);
            if (!reg_p && !reg_e) {
                if (reg_mobile == "手机号或邮箱") {
                    $(this).next("b").text("请输入账号");
                } else {
                    $(this).next("b").text("账号格式错误");
                }
            }
        });

    },
    reback_psw:function(){
        $("#reback_psw").click(function(){
            alerts_load._getback_passwshow();
        });
    },
    reset_passwshow: function () {
        //密码重置页面展示
        $(".getback_btn").live("click", function () {
            var getback_phone = $(".getback_phone input").val();
            var datat = '';
            if (userApi.check_mobile(getback_phone)) {
                datat = "phone";
            } else if (userApi.check_email(getback_phone)) {
                datat = "mail";
            } else if (getback_phone == "手机号或邮箱") {
                $(".getback_phone input").next("b").text("请输入账号");
                setTimeout(function () {
                    $(".getback_phone input").next("b").text('');
                }, 3000)
                return false;
            } else {
                $(".getback_phone input").next("b").text("账号格式错误");
                setTimeout(function () {
                    $(".getback_phone input").next("b").text('');
                }, 3000)
                return false;
            }
            $(".reg_c").children().remove();
            var reset_passwp = $("#reset_passwp").html();
            $(".reg_c").append(reset_passwp);
            // userApi.unlock();
            $(".reset_mail input").attr("data-type", "phone");
            $(".reset_mail input").val(getback_phone);
            var resetc = $(".reset_mail input");
            var reset_mail = resetc.val();
            userApi.check_name(reset_mail, resetc, "");
            //$(".reg_c").show().animate({"opacity": "1", "margin-top": "0px"});
            $(".reg_c").show();
            alerts_load.shade_show();
            return false;
        });
        $(".reset_mail input").live("blur", function () {
            var reset_mail = $(this).val();
            userApi.check_name(reset_mail, $(this), "");

        });

    },
    resetpwds_show: function () {
        //密码重置成功页面展示
        $(".reg_c").hide();
        $(".reg_c").children().remove();
        alerts_load.shade_hide();
        $(".resetpwd_s").show();
        setTimeout(function () {
            $('.resetpwd_s').fadeOut();
        }, 1500);

        return false;
    },
    operat_usershow: function () {
        //鼠标放到头像下拉菜单显示
        $(".faceheader,.operat_user").hover(
            function () {
                $(".operat_user").show();
            },
            function () {
                $(".operat_user").hide();
            }
        )
    },
    check_sucessshow: function () {
        //签到弹框显示
        $(".checkbtn").live("click", function () {
            var uid = cookie_fun.get_cookie('uid');
            if (!uid) {
                alerts_load._login_show();
                return;
            }
            var user_sign = cookie_fun.get_cookie('u_sign_' + uid);
            if (user_sign) {
                sign_show(user_sign);
            } else {

                $(".check_sucess").fadeIn();
                alerts_load.shade_show();
                $(this).text("已签到");
                $.get('index.php?r=sign', {}, function (json) {
                    sign_show(json);
                    $(".check_warn").show();
                })
                setTimeout(function () {
                    $(".check_warn").fadeOut();
                }, 3000);
            }
            $("img.lazy_alert").lazyload();
            alerts_load.checkbtn_color();
            return false;
        });

        var sign_show = function (json) {
            var json = eval('(' + json + ')');
            console.log(json);
            var msg = json.status==0 ? '活动将于10月1日正式开始，敬请关注！' : (json.status==-1 ? '本次活动已结束，敬请期待下次活动！' : '');
            $(".checkwran").html(msg);
            if(json.dateLine > 20151007 && json.dateLine < 20151010){
                //领取按钮
                $('#sign_receive_hide').hide();
                $('#sign_receive_show').show();
            }
            if(json.status==1 || json.status==-1 ){
                $(".check_dayc span").each(function(i,k){
                    var sd = $(this).attr('data-day');
                    if(json.data[sd]==1){
                        $(this).addClass('on');
                    }else if(json.data[sd]==-1){
                        $(this).addClass('off');
                    }
                });
            }
            $(".check_sucess").fadeIn();
            alerts_load.shade_show();
        }
    },
    checkbtn_color: function () {
        var check_m = $(".checkbtn").text();
        if (check_m == "已签到") {
            $(".checkbtn").css({"background": "#fff", "color": "#000"});
        } else {
            $(".checkbtn").css({"background": "#2fa4ff", "color": "#fff"});
        }


    },
    check_sucesshide: function () {
        //签到弹框隐藏
        $(".check_close").live("click", function () {
            $(".check_sucess").fadeOut();
            alerts_load.shade_hide();
        });
    }

}
var domain = document.domain;
var part = new RegExp("eoemarket.com$");
var url='http://user.eoemarket.com/';
if(!part.test(domain))
{
    url= 'http://user.'+domain.split('.').slice(-2).join('.')+'/';
}
// * 检测手机邮箱唯一性 user/check-name  name=123@qq.com
// * 注册验证码 user/get-code name=123@qq.com ac=reg
// * 注册 user/reg name,code,psw
// * 登陆 user/login name psw
// * 退出 user/logout
// * 找回密码 user/forget-psw name code psw
var userApi = {
    base_url: url,
    login_url: 'user/login',
    logout_url: 'user/logout',
    reg_url: 'user/reg',
    check_url: 'user/check-name',
    get_code: 'user/get-code',
    get_verify:'user/verifytoken',
    forget_psw: 'user/forget-psw',
    update_psw_url: 'user/update-psw',
    activate_url: 'user/activate',
    go_url: '',
    clear: '',
    init: function () {
        this._init();
        this.set_header();
        this.login();
        this.reg();
        this.get_code_click();
        this.find_psw();
        this.update_psw();
        this.activate();
    },
    unlock:function(){
        var nc = new noCaptcha();
        var nc_appkey = 'FFFF00000000016B5DAA';  // 应用标识,不可更改
        var nc_scene = 'register';  //场景,不可更改
        var nc_token = [nc_appkey, (new Date()).getTime(), Math.random()].join(':');
        var nc_option = {
            renderTo: '#dom_id',//渲染到该DOM ID指定的Div位置
            appkey: nc_appkey,
            scene: nc_scene,
            token: nc_token,
            //trans: '{"name1":"code300"}',//测试用，特殊nc_appkey时才生效，正式上线时请务必要删除；code0:通过;code100:点击验证码;code200:图形验证码;code300:恶意请求拦截处理
            callback: function (data) {// 校验成功回调
                //console.log(data.csessionid);
                //console.log(data.sig);
                //console.log(nc_token);

                document.getElementById('csessionid').value = data.csessionid;
                document.getElementById('sig').value = data.sig;
                document.getElementById('token').value = nc_token;
                document.getElementById('scene').value = nc_scene;
            }
        };
        nc.init(nc_option);
    },
    go: function () {
        if (userApi.go_url) {
            window.location.href = userApi.go_url;
        }
    },
    get_error: function (json) {
        if(!json.data){
            return '';
        }
        var msg = '';
        if (json.data.msg == 100) {
            msg = '请输入账号和密码';
        }
        else if (json.data.msg == 1) {
            msg = '账号格式错误';
        }
        else if (json.data.msg == 2) {
            msg = '用户已存在';
        }
        else if (json.data.msg == 3) {
            msg = '验证码错误';
        }
        else if (json.data.msg == 4) {
            msg = '密码不少于6位';
        }
        else if (json.data.msg == 5) {
            msg = '用户名不存在';
        }
        else if (json.data.msg == 6) {
            msg = '密码错误';
        }
        else if (json.data.msg == 9) {
            msg = '账号被禁用';
        }
        else if (json.data.msg == 10) {
            msg = '两次输入不一致';
        }
        else if (json.data.msg == 11) {
            msg = '验证码错误';
        }
        else if (json.data.msg == 12) {
            msg = '验证码错误';
        }
        else if (json.data.msg == 20) {
            msg = '用户正在注册';
        }
        else if (json.data.msg == 0) {
            msg = '用户已在登陆状态';
        }
        return msg;
    },
    set_error_html: function (obj, error) {
        $(obj).next('b').text(error);
    },
    get_error_html: function (obj) {
        return $(obj).next('b').text();
    },
    _init: function () {
        $(".user_code").live("blur",function () {
            var str = $(this).val();
            var obj = $(this);
            if (!str || str == $(obj)[0].defaultValue) {
                userApi.set_error_html(obj, '请输入验证码');
                setTimeout(function () {
                    userApi.set_error_html(obj, '');
                }, 1000);
                return false;
            }
            if (str.length < 6) {
                userApi.set_error_html(obj, '6位数验证码');
                return false;
            }
            userApi.set_error_html(obj, '');
            return true;
        });
    },
    //登录
    login: function () {
        $(".alertlogin_btn").live('click',function(){
            $(".alertlogin_warn").html("");
            var form_obj = $(this).parent();
            var data = $(this).parent().serializeObject();
            if(!data.name){
                $(".alertlogin_phone b").html("账号不能为空");
                return false;
            }
            if("undefined" == typeof developer){
                if(!userApi.check_mobile(data.name) && !userApi.check_email(data.name)){
                    $(".alertlogin_phone b").html("账号格式错误");
                    return false;
                }
            }
            if(!data.psw){
                $(".alertlogin_paw b").html("密码为空");
                return false;
            }
            if (data.psw.length < 6) {
                $(".alertlogin_paw b").html("密码少于6位");
                return false;
            }

            if($(".login_pin :visible").length && !data.verify){
                $(".alertlogin_code b").html("验证码为空");
                alert('验证码为空');
                return false;
            }
            var url = userApi.base_url + userApi.login_url;
            var func = function (json) {
                var msg;
                if (msg = userApi.get_error(json)) {
                    if (json.data.errorTime > 2) {
                        $(".login_pin", form_obj).show().find("img").click();
                    }
                    if (json.data.msg == 5) {
                        $(".alertlogin_phone b").html("用户不存在");
                        return false;
                    }
                    else if (json.data.msg == 6) {
                        $(".alertlogin_paw b").html("密码错误");
                        return false;
                    }
                    else if (json.data.msg == 9) {
                        $(".alertlogin_phone b").html("帐号被禁用");
                        return false;
                    }
                    else if (json.data.msg == 11) {
                        $(".alertlogin_code b").html("验证码错误");
                        return false;
                    }
                    else if (json.data.msg == 0){
                        alert(msg);
                        return false;
                    }
                } else {
                    alerts_load._login_hide();
                    userApi.set_header();
                    userApi.go();
                    $(".suspended_advertising").hide();
                }
            }
            var param = $(this).parent().serialize();
            userApi.tx_verify(url,param,func);
            return false;
        });
        $(".loginbtn,.loginh_btn").live('click', function () {
            var form_obj = $(this).parent();
            var data = $(this).parent().serializeObject();
            var error_func = function (msg) {
                $(".wranning_login").html(msg);
                setTimeout(function () {
                    $(".wranning_login").html("");
                }, 8000);
            }
            if (!data.name || data.name == "手机号或邮箱") {
                error_func("请输入账号");
                return false;
            }
            var logine = userApi.check_email(data.name);
            var loginm = userApi.check_mobile(data.name);
            if (!logine && !loginm) {
                error_func("账号格式错误");
                return false;
            }
            if (!data.psw) {
                error_func("请输入密码");
                return false;
            }
            if (data.psw.length < 6) {
                error_func("密码不少于6位");
                return false;
            }

            var url = userApi.base_url + userApi.login_url;

            var func = function (json) {
                var msg;
                if (msg = userApi.get_error(json)) {
                    error_func(msg);
                    if (json.data.errorTime > 2) {
                        $(".login_pin", form_obj).show().find("img").click();
                    }
                } else {
                    alerts_load._login_hide();
                    userApi.set_header();
                    userApi.go();
                }
            };
            var param = $(this).parent().serialize();
            userApi.tx_verify(url,param,func);
            return false;
        });
    },
    logout: function () {
        var url = userApi.base_url + userApi.logout_url;
        window.location.href = url;
    },
    //注册
    reg: function () {
        $(".alertreg_btn").live('click', function () {
            $(".alertlogin_warn").html("");
            var form = $(this).parent();
            var data = $(this).parent().serializeObject();
            if(parseInt(data.agree)==0){
                alert('请阅读优亿用户协议');
                return false;
            }
            if(!userApi.check_mobile(data.name)){
                $(".alertlogin_phone b").html("手机号错误");
                return false;
            }
            if(!data.psw){
                $(".alertlogin_paw b").html("密码为空");
                return false;
            }
            if(!data.code){
                $(".alertreg_code b").html("验证码为空");
                return false;
            }
            if (data.psw.length < 6 || data.psw.length > 16) {
                $(".alertlogin_paw b").html("密码为6-16位字符");
                return false;
            }

            var url = userApi.base_url + userApi.reg_url;
            var func = function (json) {
                var msg;
                if (msg = userApi.get_error(json)) {
                    if (json.data.msg == 3) {
                        $(".alertreg_code b").html(msg);
                    }
                    else if (json.data.msg == 2) {
                        $(".alertlogin_phone b").html(msg);
                    }
                    else if (json.data.msg == 20) {
                        $(".alertlogin_phone b").html(msg);
                    }
                    else if (json.data.msg == 0){
                        alert(msg);
                        return false;
                    }
                } else {
                    alerts_load._login_hide();
                    userApi.set_header();
                    userApi.go();
                }
            }
            userApi.ajax(url, $(this).parent().serialize(), func);
            return false;
        });
    },
    //找回密码
    find_psw: function () {
        $(".newpasw .password").live('blur', function () {
            userApi.check_psw_obj($(this));
        });
        $('.reset_phone .re_phone').live('blur',function () {
            var url = userApi.base_url + userApi.forget_psw;
            var phone = $(this).val();
            if (phone === ''){
                userApi.set_error_html($(this),'手机号不能为空');
                return false;
            } else if (!userApi.check_mobile(phone)){
                userApi.set_error_html($(this),'手机号格式错误');
                return false;
            }else {
                userApi.set_error_html($(this),'');
            }
            var func = function (json) {
                var msg = userApi.get_error(json);
                if (json.data.msg === 5) {
                    $(".reset_phone b").text(msg);
                }
            }
            userApi.ajax(url, {name:phone}, func);
            return false;
        });
        $(".newpaswt .password").live('blur', function () {
            var passwordt = $(this).val();
            var password = $(".newpasw .password").val();
            if (passwordt != password) {
                userApi.set_error_html($(this), '两次输入不一致');
                return false;
            }
            userApi.set_error_html($(this), '');
        });

        $(".reset_btn").live('click', function () {
            var form = $(this).parent();

            $("input[name!='name']", form).blur();
            if ($("b", form).text()) {
                setTimeout(function(){
                    $(".reset_pin b,.reset_newpasw b").text("");
                },3000);
                return false;
            }
            var url = userApi.base_url + userApi.forget_psw;
            var func = function (json) {
                if (json.flag == 1) {
                    alerts_load.resetpwds_show();
                    userApi.logout();
                    return;
                }
                var msg = userApi.get_error(json);
                if (json.data.msg == 100) {
                    //请输入账号和密码
                } else if (json.data.msg == 1) {
                    $(".reset_mail b").text(msg);
                } else if (json.data.msg == 5) {
                    $(".reset_mail b").text(msg);
                } else if (json.data.msg == 4) {
                    $(".newpasw b").text(msg);
                } else if (json.data.msg == 10) {
                    $(".newpaswt b").text(msg);
                }
                else if (json.data.msg == 3) {
                    $(".reset_pin b").text(msg);

                } else if (json.data.msg == 0) {
                    alert("已经登陆");
                    userApi.set_header();
                }
            }
            userApi.ajax(url, form.serialize(), func);
            return false;
        });
    },
    //修改密码
    update_psw: function () {
        $("#psw_old_psw").blur(function () {
            userApi.check_psw_obj($(this));
        })
        $("#psw_psw").blur(function () {
            if (userApi.check_psw_obj($(this))) {
                var v = $(this).val();
                if ($("#psw_old_psw").val() == v) {
                    userApi.set_error_html($(this), '新密码不能与原密码相同');
                } else {
                    userApi.set_error_html($(this), '');
                }
            }
        })
        $("#psw_new_psw").blur(function () {
            if (userApi.check_psw_obj($(this))) {
                var v = $(this).val();
                if ($("#psw_psw").val() != v) {
                    userApi.set_error_html($(this), '两次输入不一致');
                } else {
                    userApi.set_error_html($(this), '');
                }
            }
        })
        $("#update_psw").click(function () {
            //检测空 提示信息
            var form = $(this).parent();
            $("input", form).blur();
            if ($("b", form).text()) {
                return false;
            }
            var url = userApi.base_url + userApi.update_psw_url;
            var func = function (json) {
                if (json.flag == 1) {
                    $(".resetpwd_s").show().fadeOut(3000);
                    setTimeout(function () {
                        $(".resetpaw_c").hide();
                        $(".resetpaw_suc").show();
                    }, 3000);
                    form[0].reset();
                } else {
                    if (json.data.msg == 8) {
                        userApi.set_error_html($("#psw_old_psw"), '旧密码错误');
                    }
                }
            }
            userApi.ajax(url, $(this).parent().serialize(), func);
            return false;
        });
    },
    //获取验证码
    get_code_click: function () {
        $(".get_code").live("click", function () {
            $(".alertlogin_warn").text('');
            userApi.get_code_fun(this, 0);
        });
    },
    //手机 邮箱激活
    activate: function () {
        $(".phone_activebtn").live("click", function () {
            var url = userApi.base_url + userApi.activate_url;
            var obj = $(this);
            var form = obj.parent().parent();
            var form_data = form.serializeObject();
            var form_code =form_data.code;
            var form_pin = form.find('input');
            if (!form_code|| form_code == $(form_pin)[0].defaultValue) {
                form.find('b').html('请输入验证码').show();
                setTimeout(function(){
                    form.find('b').html('');
                },3000);
                return false;
            }
            var func = function (json) {
                if (json.flag == 1) {
                    $("." + obj.attr('data-em')).html('已激活');
                    $(".phone_active").fadeOut();
                    $(".shade").hide();
                    return;
                }
                if (json.data.msg == 11) {
                    form.find('b').html('验证码错误').show();
                    setTimeout(function(){
                        form.find('b').html("");
                    },3000);
                }
            }
            userApi.ajax(url, form.serialize(), func);
            return false;
        });
    },
    get_code_fun: function (obj, resend) {
        if ($(obj).attr('data-disable') == 1) {
            return;
        }
        var name_obj = $(obj).parents().find('input[name=name]');
        var name = name_obj.val();
        var csessionid = $("#csessionid").val();
        var token = $("#token").val();
        var sig = $("#sig").val();
        var type = $(obj).attr('data-type');
        var ac = $(obj).attr('data-ac');
        var actwran=$(".actwran").text();
        $(".alertlogin_phone b").text("");
        if (name_obj.next('b').text()) {
            return false;
        }
        if(ac=="activate" && actwran!=""){
            return false;

        }
        if (type == 'email') {

            if(ac!="activate" && !userApi.check_email_obj(name, name_obj)){
                return false;
            }
            if (resend == 0) {
                $(obj).hide();
                var arr = name.split("@");
                var email_url = 'http://mail.' + arr[1];
                $(obj).next('a').attr("href", email_url).show();
            }

        } else {
            if (ac!="activate" && !userApi.check_mobile_obj(name, name_obj)) {
                return false;
            }
        }
        var url = userApi.base_url + userApi.get_code;
        var func = function (json) {
            if (json.flag == 1) {
                $(".trafnumbtn b").text("");
                $(".alertlogin_phone b").text("");
            } else {
                if (type == "mobile") {
                    userApi.clear_timer(obj);
                } else {
                    if (resend == 0) {
                        $(obj).show().next('a').hide();
                    }
                }
                if (json.data.msg == 100) {
                    //空
                    $("#reg_mobile").next("b").text("请输入手机号");
                    $(".alertlogin_phone b").text("请输入手机号");
                    $("#reg_email").next("b").text("请输入邮箱");
                } else if (json.data.msg == 1) {
                    //账号格式错误
                    $("#reg_mobile,.trafnumbtn").next("b").text("手机号格式错误");
                    $(".alertlogin_phone b").text("手机号格式错误")
                    $("#reg_email").next("b").text("邮箱格式错误");
                } else if (json.data.msg == 5) {
                    //用户名不存在
                    $(".reset_mail").find("b").text("用户不存在");
                    setTimeout(function () {
                        $(".reset_mail").find("b").text("");
                    }, 3000);
                } else if (json.data.msg == 2) {
                    //用户名已存在
                    $("#reg_mobile,#reg_email").next("b").text("用户已存在");
                    $(".alertlogin_phone b").text("用户已存在");
                } else if (json.data.msg == 12) {
                    $(".reset_mail b,.alertlogin_phone b,.reg_wran,.trafwran,.actwran").text('操作太快了 休息几分钟再试');
                    setTimeout(function(){
                        $(".reset_mail b,.reg_wran,.trafwran,.actwran").html("");

                    },3000);
                } else if (json.data.msg == 13) {
                    $(".reset_mail b,.alertlogin_phone b,.reg_wran,.trafwran,.actwran").text('该手机号获取验证码次数已达今日上限制');
                    setTimeout(function(){
                        $(".reset_mail b,.reg_wran,.trafwran,.actwran").html("");

                    },3000);
                } else if (json.data.msg == 14) {
                    userApi.set_error_html($(".verify"), '图片验证码错误');
                } else if (json.data.msg == 16) {
                    $(".juanquan b").text('验证错误');
                }
            //    else if (json.data.msg == 15) {
                //                     $(".juanquan b").text('验证码错误');
                //                 }
            }
        }
        var params = "&name=" + name + "&ac=" + ac + "&csessionid=" + csessionid + "&token=" + token + "&sig=" + sig;
        var captcha1 = new TencentCaptcha('2068576328', function(res) {
            if (res.ret === 0) {
                userApi.timer(obj);
                var http_uri = "&ticket=" + res.ticket + "&randstr=" + res.randstr;
                userApi.ajax(url, params + http_uri, func);
            }
        });
        captcha1.show();
        return false;
    },
    ajax: function (url, data, fun) {
        // eoe_ss=3;
        // eoe_aa=8;
        // eoe_bb=27;
        // 绑定一个元素并手动传入场景Id和回调
        $.ajax({
            url: url,
            data: data,
            type: "post",
            timeout: 3000,
            dataType: "jsonp",
            jsonp: "callback", //服务端用于接收callback调用的function名的参数
            jsonpCallback: "success", //callback的function名称
            success: function (json) {
                fun(json);
            },
            error: function (XHR, textStatus, errorThrown) {
                console.log(XHR);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });
    },
    ajax_name: function (url, data, fun) {
        $.ajax({
            url: url,
            data: data,
            type: "post",
            timeout: 3000,
            dataType: "jsonp",
            jsonp: "callback", //服务端用于接收callback调用的function名的参数
            jsonpCallback: "n", //callback的function名称
            success: function (json) {
                fun(json);
            },
            error: function (XHR, textStatus, errorThrown) {
                console.log(XHR);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });
    },
    //根据cookie设置登陆状态
    set_header: function () {
        var uid = cookie_fun.get_cookie('uid');
        if (!uid) {
            $(".login_header").eq(1).show();
            $(".suspended_advertising").show();
            return;
        }
        $("#avatar").attr('src', cookie_fun.get_cookie('avatar'));
        $(".login_header").eq(0).show();
        $(".login_header").eq(1).hide();
        $(".suspended_advertising").hide();

    },
    check_psw_obj: function (obj) {
        var password = $(obj).val();
        if (!password || password == $(obj)[0].defaultValue) {
            this.set_error_html(obj, '请输入密码');
            return false;
        }
        if (password.length < 6) {
            this.set_error_html(obj, '密码不少于6位');
            return false;
        }
        this.set_error_html(obj, '');
        return true;
    },
    check_email_obj: function (str, obj) {
        if (!str || str == $(obj)[0].defaultValue) {
            this.set_error_html(obj, '请输入邮箱');
            return false;
        }
        if (!this.check_email(str)) {
            this.set_error_html(obj, '邮箱格式错误');
            return false;
        }
        this.set_error_html(obj, '');
        return true;
    },
    check_email: function (str) {
        if (!str) {
            return false;
        }
        var reg = /^[a-zA-Z0-9_-|\.]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/;
        return reg.test(str);
    },
    check_temp_id_card:function(num){
        num = num.toUpperCase();           //身份证号码为15位或者18位，15位时全为数字，18位前17位为数字，最后一位是校验位，可能为数字或字符X。
        if (!(/(^\d{15}$)|(^\d{17}([0-9]|X)$)/.test(num))) {
            //alert('输入的身份证号长度不对，或者号码不符合规定！\n15位号码应全为数字，18位号码末位可以为数字或X。');
            return false;
        }
        //验证前2位，城市符合
        var aCity = {11: "北京", 12: "天津", 13: "河北", 14: "山西", 15: "内蒙古", 21: "辽宁", 22: "吉林", 23: "黑龙江 ", 31: "上海", 32: "江苏", 33: "浙江", 34: "安徽", 35: "福建", 36: "江西", 37: "山东", 41: "河南", 42: "湖北", 43: "湖南", 44: "广东", 45: "广西", 46: "海南", 50: "重庆", 51: "四川", 52: "贵州", 53: "云南", 54: "西藏", 61: "陕西", 62: "甘肃", 63: "青海", 64: "宁夏", 65: "新疆", 71: "台湾", 81: "香港", 82: "澳门", 91: "国外"};
        if (aCity[parseInt(num.substr(0, 2))] == null) {
            return false;
        }
        //alert('城市:'+aCity[parseInt(num.substr(0,2))]);

        //下面分别分析出生日期和校验位
        var len, re;
        len = num.length;
        if (len == 15) {
            re = new RegExp(/^(\d{6})(\d{2})(\d{2})(\d{2})(\d{3})$/);
            var arrSplit = num.match(re);  //检查生日日期是否正确
            var dtmBirth = new Date('19' + arrSplit[2] + '/' + arrSplit[3] + '/' + arrSplit[4]);
            var bGoodDay;
            bGoodDay = (dtmBirth.getYear() == Number(arrSplit[2])) && ((dtmBirth.getMonth() + 1) == Number(arrSplit[3])) && (dtmBirth.getDate() == Number(arrSplit[4]));
            if (!bGoodDay) {
                return false;
            } else { //将15位身份证转成18位 //校验位按照ISO 7064:1983.MOD 11-2的规定生成，X可以认为是数字10。
                var arrInt = new Array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);
                var arrCh = new Array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2');
                var nTemp = 0, i;
                num = num.substr(0, 6) + '19' + num.substr(6, num.length - 6);
                for (i = 0; i < 17; i++) {
                    nTemp += num.substr(i, 1) * arrInt[i];
                }
                num += arrCh[nTemp % 11];
                return true;
            }
        }
        if (len == 18) {
            re = new RegExp(/^(\d{6})(\d{4})(\d{2})(\d{2})(\d{3})([0-9]|X)$/);
            var arrSplit = num.match(re);  //检查生日日期是否正确
            var dtmBirth = new Date(arrSplit[2] + "/" + arrSplit[3] + "/" + arrSplit[4]);
            var bGoodDay;
            bGoodDay = (dtmBirth.getFullYear() == Number(arrSplit[2])) && ((dtmBirth.getMonth() + 1) == Number(arrSplit[3])) && (dtmBirth.getDate() == Number(arrSplit[4]));
            if (!bGoodDay) {
                return false;
            }
            else { //检验18位身份证的校验码是否正确。 //校验位按照ISO 7064:1983.MOD 11-2的规定生成，X可以认为是数字10。
                var valnum;
                var arrInt = new Array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);
                var arrCh = new Array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2');
                var nTemp = 0, i;
                for (i = 0; i < 17; i++) {
                    nTemp += num.substr(i, 1) * arrInt[i];
                }
                valnum = arrCh[nTemp % 11];
                if (valnum != num.substr(17, 1)) {
                    return false;
                }
                return true;
            }
        }
        return false;
    },
    check_mobile_obj: function (str, obj) {
        if (!str || str == $(obj)[0].defaultValue) {
            this.set_error_html(obj, '请输入手机号');
            return false;
        }
        if (!this.check_mobile(str)) {
            this.set_error_html(obj, '手机号格式错误');
            return false;
        }
        this.set_error_html(obj, '');
        return true;
    },
    check_mobile: function (str) {
        if (!str||str.length>11) {
            return false;
        }
        var reg = /0?(13|14|15|17|18)[0-9]{9}/;
        return reg.test(str);
    },
    //检测手机号 邮箱是否存在
    check_name: function (name, obj, flag) {
        var url = userApi.base_url + userApi.check_url;
        var func = function (json) {
            if (json.data.msg == 2) {
                if (flag == "reg") {
                    userApi.set_error_html(obj, '用户已存在');
                }
                if (flag == "checkp") {
                    $(".actwran").text("该手机号已绑定其它账户");
                    $(".resetinfo_phone b").text("手机号已绑定");
                    $(".phone_actbtn").hide();
                }
                if (flag == "checkm") {
                    $(".actwran").text("该邮箱已绑定其它账户");
                    $(".resetinfo_mail b").text("邮箱已绑定");
                    $(".mail_actbtn").hide();

                }
            } else if (json.data.msg == 5) {
                if (flag != "reg") {
                    if (flag == "checkp") {
                        $(".resetinfo_phone").find("b").text("");
                        $(".phone_actbtn").show();
                    }
                    else if (flag == "checkm") {
                        $(".resetinfo_mail").find("b").text("");
                        $(".mail_actbtn").show();
                    }
                    else {
                        userApi.set_error_html(obj, '用户不存在');
                    }
                }
            } else {
                userApi.set_error_html(obj, '账号格式错误');
            }
        }
        userApi.ajax_name(url, {name: name}, func);
    },
    //倒计时
    timer: function (obj) {
        var t = parseInt($(obj).find("em").html());
        if (t) {
            return;
        }
        $(obj).attr('data-disable', 1);
        $(obj).html("<em>60</em>s后重发");
        $(obj).css("background", "#ccc");
        userApi.clear = setInterval(function () {
            var t = parseInt($(obj).find("em").html());
            if (t > 0) {
                $(obj).find("em").html(--t);
            } else {
                userApi.clear_timer(obj);
            }

        }, 1000);

    },
    clear_timer: function (obj) {

        clearInterval(userApi.clear);
        var trafflag = $(obj).attr('data-type');
        if (trafflag == "receive") {
            $(obj).html("重新发送").attr('data-disable', 0);
            $(obj).css("background", "#3399ff");
        } else {
            $(obj).html("重新发送").attr('data-disable', 0);
            $(obj).css("background", "#919191");
        }


    },
    //腾讯验证码
    tx_verify:function(url,param,func){
        var captcha1 = new TencentCaptcha('2068576328', function(res) {
            if (res.ret === 0) {
                var http_uri = "&ticket=" + res.ticket + "&randstr=" + res.randstr;
                userApi.ajax(url, param + http_uri, func);
            }
        });
        captcha1.show();
    },
}
//获取cookie
var cookie_fun = {
    get_cookie: function (name) {
        var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
        if (arr = document.cookie.match(reg))
            return unescape(arr[2]);
        else
            return null;
    },
    setCookie: function (name, value,hour)
    {
        var exp = new Date();
        exp.setTime(exp.getTime() + hour * 60 * 60 * 1000);
        document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
    }
}
//序列化转obj
$.fn.serializeObject = function ()
{
    var o = {};
    var a = this.serializeArray();
    $.each(a, function () {
        if (o[this.name]) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
}
