<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:44:"./template/pc/rainbow/user\address_list.html";i:1568702284;s:59:"D:\TPshop_tp5_20210401\template\pc\rainbow\user\header.html";i:1568702284;s:57:"D:\TPshop_tp5_20210401\template\pc\rainbow\user\menu.html";i:1568702284;s:61:"D:\TPshop_tp5_20210401\template\pc\rainbow\public\footer.html";i:1568702283;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>地址管理-<?php echo $tpshop_config['shop_info_store_title']; ?></title>
    <link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/tpshop.css"/>
    <link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/myaccount.css"/>
    <script src="/template/pc/rainbow/static/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/public/js/layer/layer.js"></script>
</head>
<body class="bg-f5">
<script src="/public/js/global.js" type="text/javascript"></script>
<link rel="stylesheet" href="/template/pc/rainbow/static/css/location.css" type="text/css"><!-- 收货地址，物流运费 -->
<script src="/public/static/js/layer/layer.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/base.css"/>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo (isset($tpshop_config['shop_info_store_ico']) && ($tpshop_config['shop_info_store_ico'] !== '')?$tpshop_config['shop_info_store_ico']:'/public/static/images/logo/storeico_default.png'); ?>" media="screen"/>
<style>
	.list1 li{float:left;}
</style>
<div class="tpshop-tm-hander home-index-top p">
	<div class="top-hander clearfix">
		<div class="w1224 pr clearfix">
			<div class="fl">
				<div class="sendaddress pr fl">
				  <span>送货至：</span>
				  <!-- <span>深圳<i class="share-a_a1"></i></span>-->
				  <span>
					  <ul class="list1">
						  <li class="summary-stock though-line">
							  <div class="dd" style="border-right:0px;width:200px;">
								  <div class="store-selector add_cj_p">
									  <div class="text"><div></div><b></b></div>
									  <div onclick="$(this).parent().removeClass('hover')" class="close"></div>
								  </div>
							  </div>
						  </li>
					  </ul>
				  </span>
				</div>
				<div class="fl nologin">
					<a class="red" href="<?php echo U('Home/user/login'); ?>">登录</a>
					<a href="<?php echo U('Home/user/reg'); ?>">注册</a>
				</div>
				<div class="fl islogin hide">
					<a class="red userinfo" href="<?php echo U('Home/user/index'); ?>"></a>
					<a  href="<?php echo U('Home/user/logout'); ?>"  title="退出" target="_self">安全退出</a>
				</div>
			</div>
			<ul class="top-ri-header fr clearfix">
				<li><a target="_blank" href="<?php echo U('Home/Order/order_list'); ?>">我的订单</a></li>
				<li class="spacer"></li>
				<li><a target="_blank" href="<?php echo U('Home/User/visit_log'); ?>">我的浏览</a></li>
				<li class="spacer"></li>
				<li><a target="_blank" href="<?php echo U('Home/User/goods_collect'); ?>">我的收藏</a></li>
				<li class="spacer"></li>
				<li>客户服务</li>
				<li class="spacer"></li>
				<li class="hover-ba-navdh">
					<div class="nav-dh">
						<span>网站导航</span>
						<i class="share-a_a1"></i>
					</div>
					<ul class="conta-hv-nav clearfix">
						<li>
							<a href="<?php echo U('Home/Activity/promoteList'); ?>">优惠活动</a>
						</li>
						<li>
							<a href="<?php echo U('Home/Activity/pre_sell_list'); ?>">预售活动</a>
						</li>
						<!--<li>
							<a href="<?php echo U('Home/Goods/integralMall'); ?>">拍卖活动</a>
						</li>-->
						<li>
							<a href="<?php echo U('Home/Goods/integralMall'); ?>">兑换中心</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="nav-middan-z p home-index-head">
	<div class="header w1224">
		<div class="ecsc-logo" >
			<a href="/" class="logo">
                <img src="<?php echo (isset($tpshop_config['shop_info_store_user_logo']) && ($tpshop_config['shop_info_store_user_logo'] !== '')?$tpshop_config['shop_info_store_user_logo']:'/public/static/images/logo/pc_home_user_logo_default.png'); ?>" style="width: 159px;height: 58px">
            </a>
		</div>
		<div class="m-index">
			<a href="<?php echo U('Home/User/index'); ?>" class="index">我的商城</a>
			<a href="/" class="home">返回商城首页</a>
		</div>
		<div class="m-navitems">
			<ul class="fixed p">
				<li><a href="<?php echo U('Home/Index/index'); ?>">首页</a></li>
				<li>
					<div class="u-dl">
						<div class="u-dt">
							<span>账户设置</span>
							<i></i>
						</div>
						<div class="u-dd">
							<a href="<?php echo U('Home/User/info'); ?>">个人信息</a>
							<!--<a href="<?php echo U('Home/User/safety_settings'); ?>">安全设置</a>-->
							<a href="<?php echo U('Home/User/address_list'); ?>">收货地址</a>
						</div>
					</div>
				</li>
				<li class="u-msg"><a class="J-umsg" href="<?php echo U('Home/User/message_notice'); ?>">消息<span><?php if($user_message_count > 0): ?><?php echo $user_message_count; endif; ?></span></a></li>
				<li><a href="<?php echo U('Home/Goods/integralMall'); ?>">积分商城</a></li>
				<li class="search_li">
				   <form id="sourch_form" id="sourch_form" method="post" action="<?php echo U('Home/Goods/search'); ?>">
		           	<input class="search_usercenter_text" name="q" id="q" type="text" value="<?php echo \think\Request::instance()->param('q'); ?>"/>
		           	<a class="search_usercenter_btn" href="javascript:;" onclick="if($.trim($('#q').val()) != '') $('#sourch_form').submit();">搜索</a>
		           </form>
		        </li>
			</ul>
		</div>
		<div class="u-g-cart fr" id="hd-my-cart">
			<a href="<?php echo U('Home/Cart/index'); ?>">
			<div class="c-n fl">
				<i class="share-shopcar-index"></i>
				<span>我的购物车</span>
				<em class="shop-nums" id="cart_quantity"></em>
			</div>
			</a>
			<div class="u-fn-cart" id="show_minicart">
				<div class="minicartContent" id="minicart">
				</div>
			</div>
		</div>
	</div>
</div>
<script src="/template/pc/rainbow/static/js/common.js"></script>
<!--------收货地址，物流运费-开始-------------->
<script src="/public/js/locationJson.js"></script>
<script src="/template/pc/rainbow/static/js/location.js"></script>
<script>doInitRegion();</script>


<div class="home-index-middle">
    <div class="w1224">
        <div class="g-crumbs">
            <a href="<?php echo U('Home/User/index'); ?>">我的商城</a>
            <i class="litt-xyb"></i>
            <span>地址管理</span>
        </div>
        <div class="home-main">
            <div class="le-menu fl">
	<div class="menu-ul">
		<ul>
			<li class="ma"><i class="account-acc1"></i>交易中心</li>
			<li><a href="<?php echo U('Home/Order/order_list'); ?>">我的订单</a></li>
			<li><a href="<?php echo U('Home/Virtual/virtual_list'); ?>">虚拟订单</a></li>
			<!--<li><a href="">我的预售</a></li>-->
			<li><a href="<?php echo U('Home/Order/comment'); ?>">我的评价</a></li>
		</ul>
		<ul>
			<li class="ma"><i class="account-acc2"></i>资产中心</li>
			<li><a href="<?php echo U('Home/User/coupon'); ?>">我的优惠券</a></li>
			<!--<li><a href="">我的购物卡</a></li>-->
			<li><a href="<?php echo U('Home/User/recharge'); ?>">账户余额</a></li>
			<li><a href="<?php echo U('Home/User/account'); ?>">我的积分</a></li>
			<!--<li><a href="">积分换券明细</a></li>-->
		</ul>
		<ul>
			<li class="ma"><i class="account-acc3"></i>关注中心</li>
			<li><a href="<?php echo U('Home/User/goods_collect'); ?>">我的收藏</a></li>
			<!--<li><a href="">曾经购买</a></li>-->
			<li><a href="<?php echo U('Home/User/visit_log'); ?>">我的足迹</a></li>
		</ul>
		<ul>
			<li class="ma"><i class="account-acc4"></i>个人中心</li>
			<li><a href="<?php echo U('Home/User/info'); ?>">个人信息</a></li>
			<li><a href="<?php echo U('Home/User/bind_auth'); ?>">账号绑定</a></li>
			<li><a href="<?php echo U('Home/User/address_list'); ?>">地址管理</a></li>
			<li><a href="<?php echo U('Home/User/safety_settings'); ?>">安全设置</a></li>
		</ul>
		<ul>
			<li class="ma"><i class="account-acc5"></i>服务中心</li>
			<!--<li><a href="">我的咨询</a></li>-->
			<li><a href="<?php echo U('Home/Order/return_goods_list'); ?>">退货管理</a></li>
			<li><a href="<?php echo U('Home/User/message_notice'); ?>">消息通知</a></li>
		</ul>
		<ul>
			<li class="ma"><i class="account-acc6"></i>分销中心</li>
			<li><a href="<?php echo U('Home/Order/lower_list'); ?>">我的推广</a></li>
			<li><a href="<?php echo U('Home/Order/income'); ?>">我的收益</a></li>
		</ul>
	</div>
</div>
            <div class="ri-menu fr">
                <div class="menumain p">
                    <div class="goodpiece">
                        <h1>地址管理</h1>
                        <a class="address" href="javascript:;"><span class="co_blue">增加新地址</span></a>
                    </div>
                    <div class="grou_num_list address_list_jl ma-to-20">
                        <ul class="grou_tite">
                            <li class="sx2"><span>收货人</span></li>
                            <li class="sx1"><span>收货地址</span></li>
                            <li class="sx3"><span>联系电话</span></li>
                            <li class="sx5"><span>操作</span></li>
                        </ul>
                        <?php if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                            <ul class="add_conta">
                                <li class="sx2">
                                    <span><?php echo $list['consignee']; ?></span>
                                </li>
                                <li class="sx1"><span><?php echo $region_list[$list['province']]; ?></span><span><?php echo $region_list[$list['city']]; ?></span><span><?php echo $region_list[$list['district']]; ?></span><span><?php echo $region_list[$list['twon']]; ?><?php echo $list['address']; ?></span>
                                </li>
                                <li class="sx3"><span><?php echo $list['mobile']; ?></span></li>
                                <li class="sx5">
                                    <?php if($list['is_default'] != 1): ?>
                                        <span><a class="address_set_default" data-address-id="<?php echo $list['address_id']; ?>">设为默认</a></span>
                                        <?php else: ?>
                                        <span style="font-size:14px;background:#ffaa45;padding:2px;font-weight:400;"><a>默认地址</a></span>
                                    <?php endif; ?>
                                    <a class="address co_blue" data-address-id="<?php echo $list['address_id']; ?>">修改</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a class="address_delete co_blue" data-address-id="<?php echo $list['address_id']; ?>">删除</a></li>
                            </ul>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    <p class="gp_num2">已保存<em class="red"><?php echo count($lists); ?></em>条地址，还可以保存<em class="red">
                        <?php echo 20-count($lists); ?>
                    </em>条地址
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--编辑地址弹窗-s--->
<div class="ui-dialog infom-dia" style="width: 700px">
    <form id="address_form">
        <input name="address_id" type="hidden" value="0">

        <div class="ui-dialog-title">
            <span>新增收货地址</span>
            <a class="ui-dialog-close" title="关闭">
                <span class="ui-icon ui-icon-delete"></span>
            </a>
        </div>
        <div class="ui-dialog-content" style="height: 600px;width: 700px">
            <div class="invoice-dialog">
                <div class="zinvoice-tips">
                    <!--<span class="tip-cont">错误信息</span>-->
                </div>
                <div class="ui-switchable-panel">
                    <div class="invoice_title p">
                        <span class="label"><span class="red">*</span>收货人：</span>

                        <div class="fl">
                            <input class="invoice_tt" name="consignee" type="text" value="" maxlength="12"/>
                            <span class="err" id="err_consignee"></span>
                        </div>
                    </div>
                    <div class="invoice_title p">
                        <span class="label"><span class="red">*</span>手机或固定电话：</span>

                        <div class="fl">
                            <input class="invoice_tt" name="mobile" type="text" value=""
                                   placeholder="固话号码格式:xx-xx(例如: 0755-86140485)" onblur="verifyMobile()"  maxlength="15"/>
                            <span class="err" id="err_mobile"></span>
                        </div>
                    </div>
                    <div class="invoice_title p">
                        <span class="label"><span class="red">*</span>收货地址：</span>
                        <span class="err" id="err_province"></span>
                        <span class="err" id="err_city"></span>
                        <span class="err" id="err_district"></span>
                        <select class="di-bl fl seauii" name="province" id="province" onChange="get_city(this,0)">
                            <option value="0">请选择</option>
                        </select>

                        <select class="di-bl fl seauii" name="city" id="city" onChange="get_area(this)">
                            <option value="0">请选择</option>
                        </select>

                        <select class="di-bl fl seauii" name="district" id="district" onChange="get_twon(this)">
                            <option value="0">请选择</option>
                        </select>

                        <select class="di-bl fl seauii" name="twon" id="twon" style="display:none;">
                        </select>
                    </div>
                    <div class="invoice_title p">
                        <span class="label"><span class="red">*</span>详细地址：</span>
                        <span class="err" id="err_address"></span>

                        <div class="fl">
                            <input class="invoice_tt" name="address" type="text" placeholder="详细地址" maxlength="100"/>
                        </div>
                    </div>
                    <div class="invoice_title p">
                        <span class="label">邮编：</span>

                        <div class="fl">
                            <input class="invoice_tt" name="zipcode" type="text" value=""
                                   onKeyUp="this.value=this.value.replace(/[^\d]/g,'')" maxlength="6"/>
                            <span class="err" id="err_zipcode"></span>
                        </div>
                    </div>
                    <div class="invoice_title p">
                        <span class="label">&nbsp;</span>

                        <div class="fl">
                            <div class="op-btns  invoice_sendwithgift">
                                <button  id="address_submit" type="button" class="btn-1">保存</button>
                                <a onclick="$('.ui-dialog-close').trigger('click');" class="btn-9">取消</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!--编辑地址弹窗-e--->
<div class="ui-mask"></div>
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
<script type="text/javascript">
    $(document).ready(function () {
        get_province();
    });
    //验证手机
    function verifyMobile(){
        var phone = $("input[name='mobile']").val();
        var isPhone = /^1[34578]\d{9}$/;//手机号码
        var isMob= /^0?1[3|4|5|8][0-9]\d{8}$/;// 座机格式
        if(!isMob.test(phone) && !isPhone.test(phone)){
            $('#err_mobile').text('号码有误，请重填');
            return false;
        }else{
            $('#err_mobile').text('');
        }

    }
    //新增编辑地址
    $(function () {
        //新增编辑弹窗事件
        $(document).on("click", '.address', function (e) {
            var dh = $(document).height();
            var dw = $(document).width();
            $('.ui-mask').height(dh).width(dw).show();
            $('.ui-dialog').show();
            var address_id = $(this).data('address-id');
            if (address_id > 0) {
                $("input[name='address_id']").val(address_id);
                $.ajax({
                    type: "POST",
                    url: "<?php echo U('Home/User/address'); ?>",
                    data: {address_id: address_id},
                    dataType: 'json',
                    success: function (data) {
                        if (data.status == 1) {
                            $("input[name='consignee']").val(data.result.user_address.consignee);
                            $("input[name='address']").val(data.result.user_address.address);
                            $("input[name='mobile']").val(data.result.user_address.mobile);
                            $("input[name='zipcode']").val(data.result.user_address.zipcode);
                            var city_list_option_html = '<option value="0">请选择</option>';
                            var district_list_option_html = '<option value="0">请选择</option>';
                            var twon_list_option_html = '<option value="0">请选择</option>';
                            $.each(data.result.city_list, function (n, value) {
                                city_list_option_html += '<option value="' + value.id + '">' + value.name + '</option>';
                            });
                            $('#city').html(city_list_option_html).val(data.result.user_address.city);
                            $.each(data.result.district_list, function (n, value) {
                                district_list_option_html += '<option value="' + value.id + '">' + value.name + '</option>';
                            });
                            $('#district').html(district_list_option_html).val(data.result.user_address.district);
                            $.each(data.result.twon_list, function (n, value) {
                                twon_list_option_html += '<option value="' + value.id + '">' + value.name + '</option>';
                            });
                            if (data.result.twon_list.length > 0) {
                                $('#twon').html(twon_list_option_html).val(data.result.user_address.twon).show();
                            }
                            $("#province").val(data.result.user_address.province);
                        } else {
                            layer.open({icon: 2, content: data.msg, time: 1000});
                        }
                    }
                });
            } else {
                $("input[name='address_id']").val(0);
                $("input[name='consignee']").val('');
                $("input[name='address']").val('');
                $("input[name='mobile']").val('');
                $("input[name='zipcode']").val('');
                $("#province").val(0);
                $("#city").empty().html('<option value="0">请选择</option>');
                $("#district").empty().html('<option value="0">请选择</option>');
                $("#twon").empty().html('<option value="0">请选择</option>').hide();
            }
        })
        //关闭弹窗事件
        $(document).on("click", '.ui-dialog-close', function (e) {
            $('.ui-mask').hide();
            $('.ui-dialog').hide();
            $('.err').hide();
        })
        //地址提交
        $(document).on("click", '#address_submit', function (e) {
        	$(this).prop('disabled',true);
        	var that = $(this);
            $.ajax({
                type: "POST",
                url: "<?php echo U('Home/User/addressSave'); ?>",
                data: $('#address_form').serialize(),
                dataType: 'json',
                success: function (data) {
                    that.prop('disabled',false);
                    if (data.status == 1) {
                        location.reload();
                    } else {
                        layer.open({
                            icon: 2, content: data.msg, time: 1000, end: function () {
                                $.each(data.result, function (index, item) {
                                    $('#err_' + index).text(item).show();
                                });
                            }
                        });
                    }
                }
            });
        })

    })
    //设置默认地址
    $(function () {
        $(document).on("click", '.address_set_default', function (e) {
            var address_id = $(this).data('address-id');
            $.ajax({
                type: "POST",
                url: "<?php echo U('Home/User/addressSetDefault'); ?>",
                data: {address_id: address_id},
                dataType: 'json',
                success: function (data) {
                    if (data.status == 1) {
                        location.reload();
                    } else {
                        layer.open({icon: 2, content: data.msg, time: 1000});
                    }
                }
            });
        })
    })
    //删除地址
    $(function () {
        $(document).on("click", '.address_delete', function (e) {
            var address_id = $(this).data('address-id');
            $.ajax({
                type: "POST",
                url: "<?php echo U('Home/User/addressDelete'); ?>",
                data: {address_id: address_id},
                dataType: 'json',
                success: function (data) {
                    if (data.status == 1) {
                        location.reload();
                    } else {
                        layer.open({icon: 2, content: data.msg, time: 1000});
                    }
                }
            });
        })
    })

    //获取省列表
    function get_province() {
        $.ajax({
            type: "GET",
            url: "<?php echo U('Home/Api/getProvince'); ?>",
            dataType: 'json',
            success: function (data) {
                if (data.status == 1) {
                    var option_html = '<option value="0">请选择</option>';
                    $.each(data.result, function (n, value) {
                        option_html += '<option value="' + value.id + '">' + value.name + '</option>';
                    });
                    $('#province').html(option_html);
                } else {
                    layer.msg(data.msg, {icon: 2});
                }
            }
        });
    }

</script>
</body>
</html>