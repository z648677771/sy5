
var public_index = function() {
    //首页 装机必备
    function zjbb_hover(i){
        $(".tab_title li").removeClass().eq(i).addClass("on"+i);
        $(".tab_con").hide().eq(i).show();
        $(".tab_con img.lazy").lazyload();
    }
    $(".tab_title li").each(function(i){
        $(this).hover(function () {
            zjbb_hover(i);
        });
    });
    zjbb_hover(0);

    $(".tab_con li").each(function () {
        $(".tab_con li").hover(function () {
            $("strong",$(this)).css("display","none");
            $(".app_down",$(this)).css("display","block");
        }, function () {
            $(this).find("strong").hide();
            $("strong",$(this)).css("display","block");
            $(".app_down",$(this)).css("display","none");
        });
    });

    //首页 热门专区
    function app_show(next, pre) {

        var page = 1;
        var i = 5;   //每版放4张图片

        var parent = $(".flow_box");  //获得父元素
        var v_show = $(".flow_div ul",parent); //寻找视频内容展示区域
        var v_content = $(".flow_div",parent); //寻找视频内容展示区域外围div

        var v_width = v_content.width();
        var len = $("li",v_show).length;
        var page_count = Math.ceil(len / i);  //只要不是整数，就往大的方向取最小的整数

        $("img.lazy",v_show).lazyload();
        $(next).click(function () {  //绑定click图片
            if (!v_show.is(":animated")) {   //判断视频内容展示区域是否正处于动画
                //已经到了最后一个版面了，如果再向后，必须跳转到第一个版面
                if (page == page_count) {
                    v_show.animate({left: "0"}, "slow");
                    page = 1;
                } else {
                    //通过改变left值，达到每次换一个版面
                    v_show.animate({left: "-=" + v_width}, "slow");
                    page++;
                }
            }
        });

        $(pre).click(function () {
            if (!v_show.is(":animated")) {    //判断视频内容展示区域是否正处于动画
                if (page == 1) {  //已经到了第一个版面了，如果再向前，必须跳转到最后一个版面
                    v_show.animate({left: "-=" + v_width * (page_count - 1)}, "slow");
                    page = page_count;
                } else {
                    v_show.animate({left: "+=" + v_width}, "slow");
                    page--;
                }

            }
        });

    }
    $(function () {
        app_show(".next_a",".pre_a");
    });

//精品游戏图片
    $('.Recommend_game_box li').hover(function () {
        $(this).children('.Racoment_down').slideDown();

    }, function () {
        $(this).children('.Racoment_down').slideUp();
    })
//精品游戏下载按钮
    $('.Recommend_list_item').hover(function () {
        $(this).css({"border-color": "#65d1f8", "background": "#65d1f8"});
        $(this).find("b").hide();
        $(this).find(".reco_listD").show();

    }, function () {
        $(this).css({"border-color": "#cfcfcf", "background": "#ffffff"});
        $(this).find("b").show();
        $(this).find(".reco_listD").hide();
    })
//最新更新
    $('.napp_list_item').hover(function () {
        $(this).css({"border-color": "#65d1f8", "background": "#65d1f8"});
    }, function () {
        $(this).css({"border-color": "#cfcfcf", "background": "#ffffff"});
    })


//主页轮播
    $(function () {
        var slidePlay = {
            slider: function (wrapId, wrapBig, wrapSmall, hov_f) {
                var len = $(wrapId + " " + wrapBig + " " + "li").length;
                var index = 0;
                var picTimer;
                //图片切换方法
                function tab(index) {
                    // 	$(wrapBig+" "+'li').hide().eq(index).show();
                    $(wrapBig + " " + 'li').eq(index).fadeIn(1500).siblings().fadeOut(1500);//从这里可以改变切换的效果
                    $(wrapSmall + " " + 'li').removeClass(hov_f).eq(index).addClass(hov_f);
                }
                //点击下一个方法
                $(wrapId + " " + '.next').click(function () {
                    index++;
                    if (index == len) {
                        index = 0;
                    }
                    tab(index);
                });
                //点击上一个方法
                $(wrapId + " " + '.pre').click(function () {
                    index--;
                    if (index == -1) {
                        index = len - 1;
                    }
                    tab(index);
                });
                //定时器，自动播放
                var picTimer = setInterval(function () {
                    index++;
                    if (index == len) {
                        index = 0;
                    }
                    tab(index);
                }, 3000);
                //鼠标移入显示区域，停止切换，移出区域，继续播放
                $(wrapId).hover(function () {
                    clearInterval(picTimer);
                }, function () {
                    picTimer = setInterval(function () {
                        index++;
                        if (index == len) {
                            index = 0;
                        }
                        tab(index);
                    }, 3000);
                });
                //鼠标悬浮下面的li,上面显示对应的图片
                $(wrapSmall + " " + 'li').hover(function () {
                    clearInterval(picTimer);
                    index = $(this).index();
                    tab(index);
                }, function () {
                });

            }

        }
        slidePlay.slider(".game_box", ".game_imgb", ".game_imgs", "hoverd");
        slidePlay.slider(".game_boxs", ".game_imgbs", ".game_imgss", "hoverd");
        //slidePlay.slider("#focus",".big",".small","hov");
    });

//导航变窄和返回按钮
    $(function () {
        $(".back").hide();
        $(window).scroll(function () {
            if ($(window).scrollTop() > 100) {
                $(".back").fadeIn(1500);
                $(".head_cb,.headb,.nav_itemb,.checkbox,.login_c ").css({"height": "70px", "line-height": "70px"});
                // $(".logob img").css({"margin-top": "4px"});
                $(".searchb").css({"margin-top": "10px"});
                $(".checkbtn").css({"margin-top": "12px"});
                $(".faceheader").css({"padding-top": "8px", "padding-bottom": "8px"});
                $(".operat_user,.login_hover").css({"top": "70px"});
                $(".ui-autocomplete").css({"top": "40px"});

            } else {
                $(".back").fadeOut(100);
                $(".head_cb,.headb,.nav_itemb,.checkbox,.login_c ").css({"height": "70px", "line-height": "70px"});
                // $(".logob img").css({"margin-top": "14px"});
                $(".searchb").css({"margin-top": "20px"});
                $(".checkbtn").css({"margin-top": "22px"});
                $(".faceheader").css({"padding-top": "18px", "padding-bottom": "18px"});
                $(".operat_user,.login_hover").css({"top": "70px"});
                $(".ui-autocomplete").css({"top": "50px"});

            }
        });
        // 这个是头部点击返回到顶部的事件
        $(function () {
            // 当点击跳转链接后，回到页面顶部位置
            $(".back").click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 300);
                return false;
            });
        });
        // 这个是点击意见反馈时候的
        /* 在这里让那个关闭的调用一次（slideDown） */
        $(".hoverFeedback,.closeSS").click(function () {
            if ($(".Feedback").is(":hidden")) {
                /* $(".Feedback").show(); */
                /* $('.Feedback').animate({"right":100+ "px"},2000); */
                $('.Feedback').stop().slideDown('show');
            } else {
                $(".Feedback").stop().slideUp('fast');
                $("#feedContents").val(oldMsg);
                $("#email").val(oldEmail);
                $('#warning').html('');
                $("#yanzhengma").val('');
                toShareMouseEvent();
                return false;
            }
        });

        /* 然后才能运行这句话 */
        $('.closeSS').click(function () {
            $('.Feedback').stop(true, true).slideUp('fast');

            /* $('.Feedback').animate({top : '280'}, 'fast' ).show();//使用动画效果能运动 */
        });

        $(".feedbackAds").mouseover(function () {
            //alert($(".showAds").length);
            if ($(".showAds").css("display") == "none") {
                $(".showAds").slideDown('show');
            }
        });

        $(".adBox2,.showAds").hover(function () {
            $(this).find(".close").stop().slideDown("fast");
        }, function () {
            $(this).find(".close").stop().slideUp("fast");
        });


    });

//这是模拟复选框
    $(".check_no").click(function () {
        if ($(this).attr("src") == "Images/check.png")
        {
            $(this).attr("src", "Images/check_on.png");
        } else {
            $(this).attr("src", "Images/check.png");
        }
    });

 //这是首页输入框
    $(function () {
        var oldv = $(".sear_t").val();
        $(".sear_t").focus(function () {
            var newVal = $(this).val();
            if (newVal == oldv) {
                $(this).val('');
                $(this).css({"color": "#666"});
            }
        });
        $(".sear_t").blur(function () {
            var newVal = $(this).val();
            if (newVal == '') {
                $(this).val(oldv);
                $(this).css({"color": "#c2c2c2"});
            }
        });

    });

//列表页下载按钮
    $('.classf_list_item').hover(function () {
        $(this).css({"border-color": "#65d1f8", "background": "#65d1f8"});
        $(this).find("b").hide();
        $(this).find(".classf_list_listD").show();

    }, function () {
        $(this).css({"border-color": "#ececec", "background": "#ffffff"});
        $(this).find("b").show();
        $(this).find(".classf_list_listD").hide();
    })

//攻略页下载按钮
    $(function () {
        $(".fastest li").hover(function () {
            $(this).addClass("on").siblings("li").removeClass("on");
        });
        $(".downSpan").hover(
                function () {
                    $(this).children(".showImg").hide();
                    $(this).children(".hoverImg").show();
                }, function () {
                    $(this).children(".showImg").show();
                    $(this).children(".hoverImg").hide();
        }
        );
    });
//详情页扫描二维码
    $(function () {
        $(".qrcode").hover(function () {
            $(".qrcode_c").fadeIn('slow');
        }, function () {
            $(".qrcode_c").fadeOut('slow');
        }
        );
    });

//详情页轮播
    $(function () {
        var box = 822; //容器宽度
        var margin = 15; //填充
        var pos = 0; //当前位置
        var allWidth = 0; //总宽度
        var picNum = ($(".introd_imgs_c img").length) - 1;//图片总数

        $(".introd_pre").hide();
        for (i = 0; i <= picNum; i++) {
            allWidth += $('.introd_imgs_c img:eq(' + i + ')').width() + margin;
        }
        if (allWidth < box) {
            $(".introd_next").hide(); //如果图片没有容器大则不显示滚动
        }
        $(".introd_imgs_c").css({'width': allWidth + "px"});
        $(".introd_next").bind("click", function () {
            var sumWidth = 0;
            for (i = 0; i <= pos; i++) {
                sumWidth += $('.introd_imgs_c img:eq(' + i + ')').width() + margin;
            }
            if (sumWidth + box > allWidth) {
                sumWidth = allWidth - box;
                $(".introd_next").hide();
            }
            $(".introd_imgs_c").stop(true, true).animate({marginLeft: '-' + sumWidth + 'px'}, 200);
            pos = pos + 1;
            $(".introd_pre").show();
        });

        $(".introd_pre").bind("click", function () {
            var sumWidth = 0;
            for (i = 0; i <= pos - 2; i++) {
                sumWidth += $('.introd_imgs_c img:eq(' + i + ')').width() + margin;
            }
            $(".introd_imgs_c").stop(true, true).animate({marginLeft: '-' + sumWidth + 'px'}, 200);
            pos = pos - 1;
            if (pos == 0) {
                $(".introd_pre").hide();
            }
            $(".introd_next").show();
        });

    });


//详情页下载按钮
    $(function () {
        $(".like_lable_item").hover(function () {
            $(this).find(".like_downbtn").show();
        }, function () {
            $(this).find(".like_downbtn").hide();
        }
        );
    });

//详情页快速安装按钮
   /* $(".downlfast").mouseenter(function () {
        $(".qrcode_introduce ol").slideDown('show');
    });
    $(".downlfast_c").mouseleave(function () {
        $(".qrcode_introduce ol").slideUp('fast');
    });*/
    $(".downlfast_hover").hover(function(){
        $(".qrcode_introduce ol").slideDown('show');
    },function(){
        $(".qrcode_introduce ol").slideUp('fast');
    });



//详情页展开显示代码
    $(function () {
        function more_show(height_con){
            var obj=$(height_con);
            var operation=obj.siblings(".more_detail");
            var pro_h=obj.height();
            var proc_h=obj.find(".profilecon_c").height();

            if (proc_h <= pro_h) {
                operation.removeClass("more_details").hide();

            }else{
                operation.show();
            }
        }
        more_show(".profile_s");
        more_show(".profile_f");
        more_show(".profile_t");
        $(".more_detail").toggle(
            function () {
                $(this).addClass("more_details").show().prev(".profilecon").css("height", "auto");
            },
            function () {
                $(this).show().removeClass("more_details").prev(".profilecon").css("height", "75px");
            }
        );

    });
//详情页权限展开
    $(function () {
        $(".authority_app").mouseenter(function () {
            $(".authorityc_app").show();
        });
        $(".authorityc_app").mouseleave(function () {
            $(".authorityc_app").hide();
        });
    });
//详情页回复评论
    var pnick_name = '';
    $(".sub_comment_reply").live('click', function () {

        var reply_text = $(this).text();
        if (reply_text == "回复") {
            cacel_replay();
            $(this).text("取消回复");
            var pid = $(this).attr("id");
            var app_id = $("#app_id").val();
            var special_mark = 'second_comment';
            pnick_name = $("#" + pid + "_nick_name").val();
            var sub_comment_megc = $(" <form class='sub_comment_megc sub_comment_same' method='post' > <input type='text' id='" + pid + "_se_comment' class='subcomment_con' style='color:#d9d9d9;font-size: 14px;' value='回复" + pnick_name + "' ><span class='result_det'></span><button  class='se_sub' id='third_sub_" + pid + "'>确认回复</button> </form>").appendTo($(this).parents(".sub_comment_item"));
            focus();
        }
        else {
            $(this).text("回复");
            $(this).parents(".sub_comment_item").find(".sub_comment_megc").remove();

        }


    });

    function cacel_replay() {
        $(".sub_comment_reply").each(function () {
            if ($(this).text() == '取消回复') {
                $(this).text("回复");
                $(this).parents(".sub_comment_item").find(".sub_comment_megc").remove();
            }
        });
        $(".comment_reply").each(function () {
            $(this).text("回复");
            $(this).parents(".comment_info").find(".comment_megcon").remove();
        });
    }

    $(function () {
        $(".comment_reply").live('click', function () {
            var reply_text = $(this).text();
            if (reply_text == "回复") {
                cacel_replay();
                $(this).text("取消回复");
                var pid = $(this).attr("id");
                var app_id = $("#app_id").val();
                var special_mark = 'first_comment';
                pnick_name = $("#" + pid + "_nick_name").val();
                var sub_comment_megc = $(" <form class='comment_megcon sub_comment_same' method='post' > <input type='text' id='" + pid + "_se_comment' class='subcomment_con' style='color:#d9d9d9;font-size: 14px;' value='回复" + pnick_name + "' ><span class='result_det'></span><button class='se_sub' id='second_sub_" + pid + "'>确认回复</button> </form>").appendTo($(this).parents(".comment_info"));
                focus();
            }
            else {
                $(this).text("回复");
                $(this).parents(".comment_info").find(".comment_megcon").remove();
            }
        });
//二级/三级评论验证码
        $(".verify_js").live("click", function () {
            $(this).attr("src", '/index.php?r=show/verify/&a=' + Math.random());
        })

//二级/三级评论回复
        var _comment = '';
        $(".se_sub").live("click", function () {
            var id = $(this).attr("id");
            var biaoshi = '';
            if (id.indexOf('second') != -1) {
                pid = id.substr(11);
                pnick_name = '';

            } else if (id.indexOf('third') != -1) {
                pid = id.substr(10);
            }

            var app_id = $("#app_id").val();
            //var pnick_name = $("#"+pid+"_nick_name").val();
            //alert(pnick_name);return false;
            var commentObj = $("#" + pid + '_se_comment');
            var comment = commentObj.val();
            var aid = $("#aid").val();
            if (!comment || comment == commentObj[0].defaultValue) {
                $(".result_det").html("评论不能为空");
            } else {
                if (_comment == comment) {
                    $(".result_det").html("评论不能重复");
                    return false;
                }
                _comment = comment;
                if (id.indexOf('third') != -1) {
                    pid = $("#third_sub_" + pid).parent().parent().parent().parent().parent().find('.comment_reply').attr('id');
                }
                $.ajax({
                    url: '/index.php?r=show/comment-submit',
                    type: 'POST',
                    data: {appId: app_id, pid: pid, aid: aid, pnick_name: pnick_name, comment: comment, biaoshi: 'sonLevel'},
                    success: function (msg) {
                        _comment = '';
                        //$("#warning").html(msg);
                        if (msg == '-1') {
                            //alert(biaoshi);
                            $(".result_det").html("评论不能为空");
                        }
                        else if (msg == '-100') {
                            alerts_load._login_show();
                        } else if (msg == '-2') {
                            $(".result_det").html("验证码错误");
                        } else if (msg == '-3') {
                            $(".result_det").html("您今天提交的评论数已经超过限制");
                        } else {
                            if (msg.indexOf("为敏感词汇,请修改") != -1) {
                                $(".result_det").html(msg);
                            } else {
                                _comment = comment;
                                $(".result_det").html('');
                                $(".comment_reply").text("回复");
                                $(".sub_comment_reply").text("回复");
                                $(".sub_comment_same").remove();
                                var is_reply = '';
                                is_reply = $("#reply_count" + pid).val();
                                if (is_reply == 'reply_count') {
                                    $(msg).appendTo("#comment_item_" + pid);
                                    $("#reply_count" + pid).val('');
                                } else {
                                    $(msg).appendTo("#sub_comment_c" + pid);
                                }

                            }
                        }
                    }
                    /*  success:function(msg){

                     if(msg!='0'){
                     $(msg).appendTo("#sub_comment_c"+pid);
                     //$(".sub_comment_megc").attr("display:hidden");
                     }

                     }*/
                })
            }
            return false;
        })
    });


//详情页评论框
    function focus() {
        var oldsubcom = $(".subcomment_con").val();
        $(".subcomment_con ").focus(function () {
            var newsubcom = $(this).val();
            if (newsubcom == oldsubcom) {
                $(this).val('');
                $(this).css("color", "#555555");
                $("#warning").html('');
            }
        });
        $(".subcomment_con").blur(function () {
            var newsubcom = $(this).val();
            if (newsubcom == '') {
                $(this).val(oldsubcom);
                $(this).css("color", "#d9d9d9");
            }
        });
    }
    ;

    // 这个是哪个一键安装的js效果
    $(".rzhovers").mouseenter(function () {
        $(".diss").css({"height": "auto", "_position": "absolute"});
        $(this).find("ol").stop().slideDown('show');
    });
    $(".rzhovers").mouseleave(function () {
        $(this).find("ol").stop().slideUp('fast');
    });

    // 这个是二级菜单
    $(".hovers").mouseenter(function () {
        $(".dis").css("height", "97px");
        $(this).find("ol").stop().slideDown('show');
    });
    $(".hovers").mouseleave(function () {
        $(this).find("ol").stop().slideUp('fast');
    });

    //下架页面下载按钮
    $('.recomore_item').hover(function () {
        $(this).css({"border-color": "#65d1f8", "background": "#65d1f8"});
        $(this).find(".remapp_down").show();

    }, function () {
        $(this).css({"border-color": "#ececec", "background": "#ffffff"});
        $(this).find(".remapp_down").hide();
    })
    //举报弹框显示
    $(".titlec_introduce em").click(function () {
        $(".report_alert").fadeIn();
        $(".shade").show();

    });

    $(".report_cancel,.report_tr").click(function () {
        $(".report_alert,.shade").fadeOut();
        return false;
    });

    $(".report_confirm").click(function () {
        $("#reportWarning").text("");
        var url = "/index.php?r=show/add-report";
        var chk_val = '';
        $('input[name="reportBox"]:checked').each(function () {
            chk_val += ',' + $(this).val();
        });
        var appId = $("#appId").val();
        var apkId = $("#apkId").val();
        //alert(chk_val);
        if (!chk_val)
        {
            $("#reportWarning").text("举报内容不能为空!");
            setTimeout(function () {
                $("#reportWarning").text("");
            }, 1000);
            return false;
        }
        $.ajax({
            cache: false,
            type: "POST",
            url: url,
            data: {name: chk_val, appId: appId, apkId: apkId},
            async: true,
            error: function (request) {
                alert("Connection error");
            },
            success: function (data) {//alert(data);
                $("#reportWarning").text("");
                if (data == 'success')
                {
                    $(".report_alert").hide();
                    $(".report_suc").fadeIn();
                    setTimeout(function () {
                        $(".report_suc,.shade").hide();
                    }, 3000);
                }
                else
                {
                    $("#reportWarning").text("您已经举报过了！");
                }
            }
        });
        return false;
    });

    //新增tab切换；
    menu_switch_brand();
    function menu_switch_brand(){
        $(".tab_lable_title span").each(function(index){
            $(this).click(function(){
                $(this).addClass("chose_lable").siblings().removeClass("chose_lable");
                $(".like_lable_c").eq(index).removeClass("tab_hide").siblings(".like_lable_c").addClass("tab_hide");
            })
        })
    }
};

//历史版本下载 应用下载走此处
var public_history = function () {
    $(".historyversion li").live("click", function () {
        var id_str = $(this).attr("id");
        str_arr = id_str.split("_");
        $(".version_alert").show();
        $(".eoe_zs_title").html(str_arr[4] + '历史版本下载');
        $(".version_content_line1").html("点击下面的按钮下载" + str_arr[4] + str_arr[2] + "版本");
        var url = "http://download.eoemarket.com/app?id=" + str_arr[0] + "&channel_id=426&apk_id=" + str_arr[1] + "&apk_md5=" + str_arr[3];
        $(".version_url").attr("href", url);
    });
    $(".version_close").live("click", function () {
        $(".version_alert").hide();
    });
};

//其它版本下载 游戏下载走此处
var public_otherversion = function () {
    $(".otherversion li").live("click", function () {
        var id_str = $(this).attr("id");
        str_arr = id_str.split("_");
        $(".version_alert").show();
        $(".eoe_zs_title").html(str_arr[2] + str_arr[1] + '下载');
        $(".version_content_line1").html("点击下面的按钮下载" + str_arr[1]);
        var url = "http://download.eoemarket.com/app?id=" + str_arr[0] + "&channel_id=426";
        $(".version_url").attr("href", url);
    });
    $(".version_close").live("click", function () {
        $(".version_alert").hide();
    });
};


//主页大图轮播
var index_banner_lunbo;
var public_banner = function(){

  $("div[data-scro='controler'] b,div[data-scro='controler2'] a").click(function(){
    var T = $(this);
    if(T.attr("class")=="down") return false;
    J2ROLLING_ANIMATION.st({
      findObject : T,
      main : T.parent().parent().find("div[data-scro='list']"),
      pagSource : T.parent().parent().find("div[data-scro='controler'] b"),
      className : "down",
      duration : "slow",
      on : $(this)[0].tagName=="A" ? true : false
    });
    return false;
  });

  var J2SETTIME="", J2Time=true,J2ROLLING_ANIMATION = {
    init : function(){
      this.start();
      this.time();
    },
    st : function(o){
      if(J2Time){
        this.animate(o.findObject,o.main,o.className,o.duration,o.pagSource,o.on);
        J2Time = false;
      }
    },
    animate : function(T,M,C,S,P,O){
        var _prevDown = O ? P.parent().find("*[class='"+C+"']") : T.parent().find(T[0].tagName+"[class='"+C+"']"),
          _prevIndex = _prevDown.index(),
          _thisIndex = O ? (T.attr("class")=="next" ? _prevIndex+1 : _prevIndex-1) : T.index(),
          _list = M.find(".item"),
          p2n = 1;
        _prevDown.removeClass(C);
        if(O){
          if(_thisIndex==-1) _thisIndex=_list.size()-1;
          if(_thisIndex==_list.size()) _thisIndex=0;
          P.eq(_thisIndex).addClass(C);
        }else{
          T.addClass(C);
        }
        if(T.attr("class")=="prev" || _thisIndex<_prevIndex) p2n = false;
        if((T.attr("class")=="next" || _thisIndex>_prevIndex)&&T.attr("class")!="prev") p2n = true;

        !p2n ? _list.eq(_thisIndex).css("left",-M.width()) : '';
        _list.eq(_prevIndex).animate({left:p2n ? -M.width() : M.width()},S,function(){
          $(this).removeAttr("style");
          J2Time = true;
        });
        _list.eq(_thisIndex).animate({left:"0px"},S);
    },
    start : function(){
      $("#focus div[data-scro='controler'] b,#focus div[data-scro='controler2'] a").mouseover(function(){
        window.clearInterval(J2SETTIME);
      }).mouseout(function(){
        J2ROLLING_ANIMATION.time();
      });
    },
    time : function(){
      J2SETTIME = window.setInterval(function(){
        var num = $("#focus div[data-scro='controler'] b[class='down']").index(),
          _list = $("#focus div[data-scro='list'] li");
        _list.eq(num).animate({"left":-$("#focus div[data-scro='list']").width()},"slow",function(){
          $(this).removeAttr("style");
          $("#focus div[data-scro='controler'] b").removeClass("down").eq(num).addClass("down");
        });
        num++;
        if(num==_list.size()){
          num=0;
        }
        _list.eq(num).animate({"left":"0px"},"slow");
      },4000);
    }
  };
  $("a").click(function(){

    $(this).blur();

  });
  index_banner_lunbo = J2ROLLING_ANIMATION;
  J2ROLLING_ANIMATION.init();
};
//feedback.js
var public_feedback = function(){$(".feedb_priz_c").hover(function(event){event.preventDefault();$(".feedb_prizc").stop(true).animate({"margin-left":"0px"},200);$(".feedb_priz_c").stop(true).animate({"width":"390px"},100)},function(){$(".feedb_prizc").stop(true).animate({"margin-left":"-384px"},200);$(".feedb_priz_c").stop(true).animate({"width":"26px"},300)});var oldMsg=$(".feedback_meg").val();var oldEmail=$(".feedback_con").val();$(".feedback_meg").focus(function(){var newVal=$(this).val();if(newVal==oldMsg){$(this).val("")}});$(".feedback_meg").blur(function(){var newVal=$(this).val();if(newVal==""){$(this).val(oldMsg)}});$(".feedback_con").focus(function(){var newVal=$(this).val();if(newVal==oldEmail){$(this).val("")}});$(".feedback_con").blur(function(){var newVal=$(this).val();if(newVal==""){$(this).val(oldEmail)}});$("#feedbackinfo").bind("click",function(){var url="/index.php?r=feedback/add-feedback";$.ajax({cache:false,type:"POST",url:url,data:$("#guest_feedback").serialize()+"&loc="+window.location.href,async:true,success:function(data){if(data=="d"){alert("您已经提交过，谢谢。")}else{if(data=="yzmWrong"){$("#warning").text("验证码错误！")}else{if(data=="emailWrong"){alert("邮箱格式不正确！")}else{if(data=="contentNull"){alert("留言内容不能为空！")}else{$("#feedContents").val(oldMsg);$("#email").val(oldEmail);alert("提交成功!")}}}}}});return false})};


//列表页下载地址重写
$(".categories_apps_list").bind("click",function (){
    var linkIn = $(this).parent('span').parent('span').find("a").attr("href").split("/");
    var id = parseInt(linkIn[2].replace(".html",""));
    url = 'http://download.eoemarket.com/app?id='+id+'&channel_id=426';
    location.href = url;
})