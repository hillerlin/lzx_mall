<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:35:"./template/pc/rainbow/user\reg.html";i:1568702284;s:61:"D:\TPshop_tp5_20210401\template\pc\rainbow\public\footer.html";i:1568702283;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">   
    <title>注册-<?php echo $tpshop_config['shop_info_store_title']; ?></title>
    <meta name="keywords" content="<?php echo $tpshop_config['shop_info_store_keyword']; ?>" />
    <meta name="description" content="<?php echo $tpshop_config['shop_info_store_desc']; ?>" />
   
    <link href="/template/pc/rainbow/static/css/reg3.css" rel="stylesheet" />
 <link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/base.css"/>
    <script type="text/javascript" src="/public/js/jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/tpshop.css" />
	<script src="/public/js/layer/layer.js"></script><!--弹窗js 参考文档 http://layer.layui.com/-->    
    <script src="/public/js/global.js"></script>
    <script src="/public/js/md5.min.js"></script>
</head>
<body>
    <div class="regcon">
        <a class="m-fnlogoa fn-fl" href="/" ><img src="<?php echo (isset($tpshop_config['shop_info_store_logo']) && ($tpshop_config['shop_info_store_logo'] !== '')?$tpshop_config['shop_info_store_logo']:'/public/static/images/logo/pc_home_logo_default.png'); ?>" style="width: 159px;height: 58px;"/></a>
        <span class="m-fntit">欢迎注册</span>
        <div class="ui_tab">
            <ul class="ui_tab_nav regnav">
                <li class="uli <?php if(I('get.t') == ''): ?>active<?php endif; ?> "><a href="<?php echo U('Home/User/reg'); ?>" >手机注册</a></li>
                <li class="uli <?php if(I('get.t') == 'email'): ?>active<?php endif; ?> "><a href="<?php echo U('Home/User/reg',array('t'=>'email')); ?>">邮箱注册</a></li>
                <li class="no fn-fr loginbtn">我已注册，马上<a href="<?php echo U('Home/User/login'); ?>">登录></a></li>
            </ul>
            
<?php if(\think\Request::instance()->param('t') == ''): ?>
		<form id="reg_form2"  method="post" action="">
            <input type="hidden" name="auth_code" value="<?php echo \think\Config::get('AUTH_CODE'); ?>"/>
			<input type="hidden" name="scene" value="1">    
            <div class="ui_tab_content">
                <div class="m-fnbox ui_panel" style="display: block;">
                    <div class="fnlogin clearfix">
                    
                        <div class="line">
                            <label class="linel"><em>*</em><span class="dt">手机号码：</span></label>
                            <div class="liner">
                                <input type="text" class="inp fmobile J_cellphone" placeholder="请输入手机号码"  name="username" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" id="username" required=""/>
                            </div>
                        </div>
                        <div class="line">
                            <label class="linel"><em>*</em><span class="dt">图像验证码：</span></label>
                            <div class="liner">
                                <input type="text" class="inp imgcode J_imgcode" placeholder="图像验证码"  name="verify_code" required=""/>
                                <img width="100" height="35" src="/index.php/Home/User/verify/type/user_reg.html" id="reflsh_code2" class="po-ab to0">
                                    <a><img onclick="verify('reflsh_code2')" src="/template/pc/rainbow/static/images/chg_image.png" class="ma-le-210"></a>
                            </div>
                            <div id="show-voice" class="show-voice"></div>
                        </div>
                   <?php if($tpshop_config['sms_regis_sms_enable'] == 1): ?>
                        <div class="line">
                            <label class="linel"><em>*</em><span class="dt">手机验证码：</span></label>
                            <div class="liner">
                                <input type="text" class="inp imgcode J_imgcode" placeholder="手机验证码" id="code" name="code" required=""/>                                
                                <button class="fn-fl icode" onclick="send_sms_reg_code()" type="button" id="count_down">发送</button>
                            </div>
                            <div id="show-voice" class="show-voice"></div>
                        </div>
                   <?php endif; ?>
                        <div class="line">
                            <label class="linel"><em>*</em><span class="dt">设置密码：</span></label>
                            <div class="liner">
                                <input type="password" class="inp fpass J_password"  placeholder="6-16位大小写英文字母、数字或符号的组合" autocomplete="off" maxlength="16"  id="password" value="" required=""/>
                                <input name="password" type="hidden" value=""/>
                            </div>
                        </div>
                        <div class="line">
                            <label class="linel"><em>*</em><span class="dt">确认密码：</span></label>
                            <div class="liner">
                                <input type="password" class="inp fsecpass J_password2" placeholder="请再次输入密码" autocomplete="off" maxlength="16" id="password2" required="" value=""/>
                                <input name="password2" type="hidden" value=""/>
                            </div>
                        </div>
                        <?php if($tpshop_config['integral_invite'] == 1): ?>
                        <div class="line">
                            <label class="linel"><span class="dt">推荐人手机：</span></label>
                            <div class="liner">
                                <input type="text"  class="inp fmobile J_cellphone" placeholder="请输入手机号码" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" name="invite"/>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="line liney clearfix">
                            <label class="linel">&nbsp;</label>
                            <div class="liner">
                                <div class="clearfix checkcon">
                                    <p class="fn-fl checktxt"><input type="checkbox" id="checktxt"  class="iyes fn-fl J_protocal" checked />
                                    <span class="fn-fl">我已阅读并同意</span><a class="itxt fn-fl" href="javascript:open_agreement()" targets="_blank"><?php if(empty($doc_title) || (($doc_title instanceof \think\Collection || $doc_title instanceof \think\Paginator ) && $doc_title->isEmpty())): ?>《服务协议》
                                            <?php else: ?>《<?php echo $doc_title; ?>》<?php endif; ?></a>
                                    </p>
                                      <p class="fn-fl errorbox v-txt" id="protocalBox"></p>
                                </div>
                                <a class="regbtn J_btn_agree" href="javascript:void(0);" onClick="check_submit();">同意协议并注册</a>
                                <p class="v-txt" id="err_check_code">
                                    <span class="fnred">请勾选</span>我已阅读并同意<a class="itxt" href="javascript:open_agreement()" targets="_blank"><?php if(empty($doc_title) || (($doc_title instanceof \think\Collection || $doc_title instanceof \think\Paginator ) && $doc_title->isEmpty())): ?>《服务协议》
                                    <?php else: ?>《<?php echo $doc_title; ?>》<?php endif; ?></a>
                                </p>
                        </div>
                    </div>
                    </div>
                    </div>
            </div>
            </form>
<?php endif; if(\think\Request::instance()->param('t') == 'email'): ?>
		<form id="reg_form2"  method="post" action="">
            <input type="hidden" name="auth_code" value="<?php echo \think\Config::get('AUTH_CODE'); ?>"/>
            <div class="ui_tab_content">
                <div class="m-fnbox ui_panel" style="display: block;">
                    <div class="fnlogin clearfix">
                    
                        <div class="line">
                            <label class="linel"><em>*</em><span class="dt">邮箱：</span></label>
                            <div class="liner">
                                <input type="text" class="inp J_cellphone" placeholder="请输入邮箱"  name="username" id="username" required=""/>
                            </div>
                        </div>
                        <div class="line">
                            <label class="linel"><em>*</em><span class="dt">图像验证码：</span></label>
                            <div class="liner">
                                <input type="text" class="inp imgcode J_imgcode" placeholder="图像验证码" id="verify_code2" name="verify_code" required=""/>
                                <img width="100" height="35" src="/index.php/Home/User/verify/type/user_reg.html" id="reflsh_code2" class="po-ab to0">
                                <a><img onclick="verify('reflsh_code2')" src="/template/pc/rainbow/static/images/chg_image.png" class="ma-le-210"></a>
                            </div>
                            <div id="show-voice" class="show-voice"></div>
                        </div>
                        <?php if($regis_smtp_enable == 1): ?>
                            <div class="line">
                                <label class="linel"><em>*</em><span class="dt">邮箱验证码：</span></label>
                                <div class="liner">
                                    <input type="text" class="inp imgcode J_imgcode" placeholder="邮箱验证码" id="code" name="code" required=""/>
                                    <button class="fn-fl icode" onclick="send_smtp_reg_code()" type="button" id="count_down">发送</button>
                                </div>
                                <div id="show-voice" class="show-voice"></div>
                            </div>
                        <?php endif; ?>
                        <div class="line">
                            <label class="linel"><em>*</em><span class="dt">设置密码：</span></label>
                            <div class="liner">
                                <input type="password" class="inp fpass J_password" placeholder="6-16位大小写英文字母、数字或符号的组合" autocomplete="off" maxlength="16"  id="password" value="" required=""/>
                                <input name="password" type="hidden" value=""/>
                            </div>
                        </div>
                        <div class="line">
                            <label class="linel"><em>*</em><span class="dt">确认密码：</span></label>
                            <div class="liner">
                                <input type="password" class="inp fsecpass J_password2" placeholder="请再次输入密码" autocomplete="off" maxlength="16" id="password2" required="" value=""/>
                                <input name="password2" type="hidden" value=""/>
                            </div>
                        </div>
                        <?php if($tpshop_config['integral_invite'] == 1): ?>
                        <div class="line">
                            <label class="linel"><span class="dt">推荐人手机：</span></label>
                            <div class="liner">
                                <input type="text"  class="inp fmobile J_cellphone" placeholder="请输入手机号码" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" name="invite"/>
                            </div>
                        </div><?php endif; ?>
                        <div class="line liney clearfix">
                            <label class="linel">&nbsp;</label>
                            <div class="liner">
                                <div class="clearfix checkcon">
                                    <p class="fn-fl checktxt"><input type="checkbox"  id="checktxt" class="iyes fn-fl J_protocal" checked />
                                    <span class="fn-fl">我已阅读并同意</span><a class="itxt fn-fl" href="javascript:open_agreement()" targets="_blank"><?php if(empty($doc_title) || (($doc_title instanceof \think\Collection || $doc_title instanceof \think\Paginator ) && $doc_title->isEmpty())): ?>《服务协议》
                                            <?php else: ?>《<?php echo $doc_title; ?>》<?php endif; ?></a>
                                    </p>
                                      <p class="fn-fl errorbox v-txt" id="protocalBox"></p>
                                </div>
                                <a class="regbtn J_btn_agree" href="javascript:void(0);" onClick="check_submit();">同意协议并注册</a>
                                <p class="v-txt"><span class="fnred">请勾选</span>我已阅读并同意<a class="itxt" href="javascript:open_agreement()" targets="_blank"><?php if(empty($doc_title) || (($doc_title instanceof \think\Collection || $doc_title instanceof \think\Paginator ) && $doc_title->isEmpty())): ?>《服务协议》
                                    <?php else: ?>《<?php echo $doc_title; ?>》<?php endif; ?></a></p>
                        </div>
                    </div>
                    </div>
                    </div>
            </div>
            </form>
<?php endif; ?>
        </div>
    </div>    
</div>
    <!--footer-s-->
    <div class="footer p">
        <div class="tpshop-service">
	<ul class="w1224 clearfix">
		<li>
			<i class="ico ico-day7"><?php echo $tpshop_config['shopping_auto_service_date']; ?></i>
			<p class="service"><?php echo $tpshop_config['shopping_auto_service_date']; ?>天无理由退货</p>
		</li>
		<li>
			<i class="ico ico-day15"><?php echo $tpshop_config['shopping_auto_service_date']; ?></i>
			<p class="service"><?php echo $tpshop_config['shopping_auto_service_date']; ?>天免费换货</p>
		</li>
		<li>
			<i class="ico ico-quality"></i>
			<p class="service">正品行货 品质保障</p>
		</li>
		<li>
			<i class="ico ico-service"></i>
			<p class="service">专业售后服务</p>
		</li>
	</ul>
</div>
<div class="footer">
	<div class="w1224 clearfix" style="padding-bottom: 10px;">
		<div class="left-help-list">
			<div class="help-list-wrap clearfix">
				<?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article_cat` where cat_id < 6  order by sort_order asc");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("select * from `__PREFIX__article_cat` where cat_id < 6  order by sort_order asc"); 
                                    S("sql_".$md5_key,$sql_result_v,31104000);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>
					<dl>
						<dt><?php echo $v[cat_name]; ?></dt>
						<?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article` where cat_id = $v[cat_id]  and is_open=1 limit 5");
                                $result_name = $sql_result_v2 = S("sql_".$md5_key);
                                if(empty($sql_result_v2))
                                {                            
                                    $result_name = $sql_result_v2 = \think\Db::query("select * from `__PREFIX__article` where cat_id = $v[cat_id]  and is_open=1 limit 5"); 
                                    S("sql_".$md5_key,$sql_result_v2,31104000);
                                }    
                              foreach($sql_result_v2 as $k2=>$v2): ?>
						<dd><a href="<?php echo U('Home/Article/detail',array('article_id'=>$v2[article_id])); ?>"><?php echo $v2[title]; ?></a></dd>
						<?php endforeach; ?>
					</dl>
				<?php endforeach; ?>
			</div>
			<div class="friendship-links clearfix">
	            <span>友情链接 : </span>
                <div class="links-wrap-h clearfix">
                <?php
                                   
                                $md5_key = md5("select * from `__PREFIX__friend_link` where is_show=1");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("select * from `__PREFIX__friend_link` where is_show=1"); 
                                    S("sql_".$md5_key,$sql_result_v,31104000);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>
                    <a href="<?php echo $v[link_url]; ?>" <?php if($v['target'] == 1): ?>target="_blank"<?php endif; ?> ><?php echo $v[link_name]; ?></a>
                <?php endforeach; ?>
                </div>
	        </div>	
		</div>
		<div class="right-contact-us">
			<h3 class="title">联系我们</h3>
			<span class="phone"><?php echo $tpshop_config['shop_info_phone']; ?></span>
			<p class="tips">周一至周日8:00-18:00<br />(仅收市话费)</p>
			<!--<div class="qr-code-list clearfix">-->
				<!--<a class="qr-code" href="javascript:;"><img class="w-100" src="/template/pc/rainbow/static/images/qrcode.png" alt="" /></a>-->
				<!--<a class="qr-code qr-code-tpshop" href="javascript:;"><img class="w-100" src="/template/pc/rainbow/static/images/qrcode.png" alt="" /></a>-->
			<!--</div>-->
		</div>
	</div>
    <div class="mod_copyright p">
        <div class="grid-top">
            <?php
                                   
                                $md5_key = md5("SELECT * FROM `__PREFIX__navigation` where is_show = 1 AND position = 'bottom' ORDER BY `sort` DESC");
                                $result_name = $sql_result_vv = S("sql_".$md5_key);
                                if(empty($sql_result_vv))
                                {                            
                                    $result_name = $sql_result_vv = \think\Db::query("SELECT * FROM `__PREFIX__navigation` where is_show = 1 AND position = 'bottom' ORDER BY `sort` DESC"); 
                                    S("sql_".$md5_key,$sql_result_vv,31104000);
                                }    
                              foreach($sql_result_vv as $kk=>$vv): ?>
                <a href="<?php echo $vv[url]; ?>" <?php if($vv[is_new] == 1): ?> target="_blank" <?php endif; ?> ><?php echo $vv[name]; ?></a><span>|</span>
            <?php endforeach; ?>
            <!--<a href="javascript:void (0);">关于我们</a><span>|</span>-->
            <!--<a href="javascript:void (0);">联系我们</a><span>|</span>-->
            <!--<?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article` where cat_id = 5 and is_open=1");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("select * from `__PREFIX__article` where cat_id = 5 and is_open=1"); 
                                    S("sql_".$md5_key,$sql_result_v,31104000);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>-->
                <!--<a href="<?php echo U('Home/Article/detail',array('article_id'=>$v[article_id])); ?>"><?php echo $v[title]; ?></a>-->
                <!--<span>|</span>-->
            <!--<?php endforeach; ?>-->
        </div>
        <p>Copyright © 2016-2025 <?php echo (isset($tpshop_config['shop_info_store_name']) && ($tpshop_config['shop_info_store_name'] !== '')?$tpshop_config['shop_info_store_name']:\think\Config::get('shop_info.copyright')); ?> 版权所有 保留一切权利 备案号:<a href="http://www.miitbeian.gov.cn" ><?php echo $tpshop_config['shop_info_record_no']; ?></a></p>
        <p class="mod_copyright_auth">
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_1" href="" target="_blank">经营性网站备案中心</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_2" href="" target="_blank">可信网站信用评估</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_3" href="" target="_blank">网络警察提醒你</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_4" href="" target="_blank">诚信网站</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_5" href="" target="_blank">中国互联网举报中心</a>
        </p>
    </div>
</div>
<style>
    .mod_copyright {
        border-top: 1px solid #EEEEEE;
    }
    .grid-top {
        margin-top: 20px;
        text-align: center;
    }
    .grid-top span {
        margin: 0 10px;
        color: #ccc;
    }
    .mod_copyright > p {
        margin-top: 10px;
        color: #666;
        text-align: center;
    }
    .mod_copyright_auth_ico {
        overflow: hidden;
        display: inline-block;
        margin: 0 3px;
        width: 103px;
        height: 32px;
        background-image: url(/template/pc/rainbow/static/images/ico_footer.png);
        line-height: 1000px;
    }
    .mod_copyright_auth_ico_1 {
        background-position: 0 -151px;
    }
    .mod_copyright_auth_ico_2 {
        background-position: -104px -151px;
    }
    .mod_copyright_auth_ico_3 {
        background-position: 0 -184px;
    }
    .mod_copyright_auth_ico_4 {
        background-position: -104px -184px;
    }
    .mod_copyright_auth_ico_5 {
        background-position: 0 -217px;
    }
</style>
<script>
    // 延时加载二维码图片
    jQuery(function($) {
        $('img[img-url]').each(function() {
            var _this = $(this),
                    url = _this.attr('img-url');
            _this.attr('src',url);
        });
    });
</script>
    </div>
    <!--footer-e-->
<script>
    function  open_agreement(){
        layer.open({
            title:'用户服务协议',
            type:2,
            area: ['985px', '600px'],
            content:"<?php echo U('Home/Article/agreement',['doc_code'=>'agreement']); ?>",
            btn: ['取消', '同意'],
            btnAlign: 'c',
            success: function(layero, index){
                /*layer.style(index, {
                    top: '50px'
                });*/
                console.log(index)
                var lay = '#layui-layer'+index
                $(lay).find('.layui-layer-btn').css("text-align","center")
                $(lay).find('.layui-layer-btn').find('.layui-layer-btn0').removeClass('layui-layer-btn0')
                $(lay).find('.layui-layer-btn').find('.layui-layer-btn1').addClass('layui-layer-btn0')
            },
            yes: function(index, layero){
                //按钮【按钮一】的回调
                layer.close(index)
                $("#checktxt").prop('checked', false)
            },
            btn2: function(index, layero){
                //按钮【按钮二】的回调
                $("#checktxt").prop('checked', true)
                //return false 开启该代码可禁止点击该按钮关闭
            },
            cancel: function(){

            }
        })
    }
    // 提交订单
    var ajax_return_status = 1; // 标识ajax 请求是否已经回来 可以进行下一次请求
    var t ="<?php echo \think\Request::instance()->param('t'); ?>";
    $(document).ready(function(){
		 $('input').click(function(){
		      $(this).siblings('p').hide();
		 });
	  	
	});
    $('input[type="password"]').on('blur',function(){
        var password = $(this).val();
        if(password.length < 6 || password.length>16){
            layer.alert('密码有效长度为6-16位！', {icon: 2});
            return  false;
        }
	});

	// 普通 图形验证码 
    function verify(id){
        $('#'+id).attr('src','/index.php?m=Home&c=User&a=verify&type=user_reg&r='+Math.random());
    }
    function check_submit(){
        var password = $.trim($('#password').val());
        if(password.length < 6 || password.length>16){
            layer.alert('密码有效长度为6-16位,并且不得有空格！', {icon: 2});
            return  false;
        }
        if(!$('#checktxt').is(':checked')){
            layer.alert('请认真阅读并勾选服务协议！', {icon: 2});
            return  false;
        }
        var username = $('#username').val();
        if (t == 'email'){
            if (!checkEmail(username)){
                layer.alert('请输入正确邮箱', {icon: 2});
                return false;
            }
        }else if (!checkMobile(username)){
            layer.alert('请输入正确手机号', {icon: 2});
            return false;
        }

        if (ajax_return_status == 0) {
            return false;
        }
        ajax_return_status = 0;
        $.ajax({
            type : "POST",
            url:"<?php echo U('Home/User/reg'); ?>",
            dataType: "json",
            data: $('#reg_form2').serialize(),
            success: function(data){
                ajax_return_status = 1;
                if(data.status == 1){
                    layer.msg(data.msg, {icon: 1},function(){
                        if(data.url == ''){
                            window.location.href = "<?php echo U('Home/Index/index'); ?>";
                        }else{
                            window.location.href = data.url;
                        }
                    });
                }else{
                    verify('reflsh_code2');
                    layer.alert(data.msg, {icon: 2},function(index){
                        $('.verifyImg').trigger('click');
                        layer.close(index);
                    });
                }
            },
            error:function () {
                layer.alert('网络忙请稍后再试！', {icon: 2});
                ajax_return_status = 1;
            }
        });

    }
	// 电子邮件注册  和 手机号码注册 切换
    function reg_tab(id,id2){
        $('#'+id).addClass('ema-tab');
        $('#'+id2).removeClass('ema-tab');
        $('#'+id+'_div').show();
        $('#'+id2+'_div').hide();
    }
	// 发送手机短信
    function send_sms_reg_code(){
        var mobile = $('input[name="username"]').val();
        var verify_code = $('input[name="verify_code"]').val();
        if(!checkMobile(mobile)){
            layer.alert('请输入正确的手机号码', {icon: 2});//alert('请输入正确的手机号码');
            return;
        }
        if(verify_code == ''){
            layer.alert('请输入图像验证码', {icon: 2});//alert('请输入正确的手机号码');
            return;
        }
        var url = "/index.php?m=Home&c=Api&a=send_validate_code&scene=1&type=mobile&mobile="+mobile+"&verify_code="+verify_code;
        $.ajax({
            url:url,
            dataType: "json",
            success: function(res){
            	if(res.status == 1)
    			{
    				$('#count_down').attr("disabled","disabled");
    				intAs = <?php echo (isset($tpshop_config['sms_sms_time_out']) && ($tpshop_config['sms_sms_time_out'] !== '')?$tpshop_config['sms_sms_time_out']:60); ?>; // 手机短信超时时间
                    jsInnerTimeout('count_down',intAs);
                    layer.alert(res.msg, {icon: 1});
    			}else{
                    layer.alert(res.msg, {icon: 2});
                    verify('reflsh_code2')
                }
            }
        });
    }

    // 发送邮箱
    function send_smtp_reg_code(){
        if (ajax_return_status == 0) {
            return false;
        }
        ajax_return_status = 0;
        var email = $('input[name="username"]').val();
        var verify_code = $('input[name="verify_code"]').val();
        if(!checkEmail(email)){
            ajax_return_status = 1;
            layer.alert('请输入正确的邮箱', {icon: 2});
            return;
        }
        if(verify_code == ''){
            ajax_return_status = 1;
            layer.alert('请输入图像验证码', {icon: 2});
            return;
        }
        $.ajax({
            type : "POST",
            url:"<?php echo U('Home/Api/send_validate_code'); ?>",
            data : {type:'email',send:email,scene:1,verify_code:verify_code},// 你的formid
            dataType: "json",
            success: function(data){
                ajax_return_status = 1;
                if(data.status == 1){
                    $('#count_down').attr("disabled","disabled");
                    intAs = 60; // 发送邮箱超时时间
                    jsInnerTimeout('count_down',intAs);
                    layer.alert(data.msg, {icon: 1});
                }else{
                    layer.alert(data.msg, {icon: 2});
                    verify('reflsh_code2')
                }
            }
        });
    }

    $('#count_down').removeAttr("disabled");
    //倒计时函数
    function jsInnerTimeout(id,intAs)
    {
        var codeObj=$("#"+id);
        intAs--;
        if(intAs<=-1)
        {
            codeObj.removeAttr("disabled");
            codeObj.text("发送");
            return true;
        }
        codeObj.text(intAs+'秒');
        setTimeout("jsInnerTimeout('"+id+"',"+intAs+")",1000);
    };

    function checkMobile(tel) {
//        var reg = /(^1[3|4|5|7|8][0-9]{9}$)/;
        var reg = /^1[0-9]{10}$/;
        if (reg.test(tel)) {
            return true;
        }else{
            return false;
        };
    }
    
    function checkEmail(str){
        var reg = /^([a-zA-Z0-9]+[_|\-|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\-|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
        if(reg.test(str)){
            return true;
        }else{
            return false;
        }
    }
    $(document).on('keyup', '#password', function() {
        var password = md5($("input[name='auth_code']").val() + this.value);
        $('input[name="password"]').val(password);
    })
    $(document).on('keyup', '#password2', function() {
        var password2 = md5($("input[name='auth_code']").val() + this.value);
        $('input[name="password2"]').val(password2);
    })
</script>
</body> 
</html>
