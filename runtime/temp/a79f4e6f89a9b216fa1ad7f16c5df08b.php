<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:38:"./template/pc/rainbow/user\coupon.html";i:1568702284;s:59:"D:\TPshop_tp5_20210401\template\pc\rainbow\user\header.html";i:1568702284;s:57:"D:\TPshop_tp5_20210401\template\pc\rainbow\user\menu.html";i:1568702284;s:61:"D:\TPshop_tp5_20210401\template\pc\rainbow\public\footer.html";i:1568702283;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>我的优惠券</title>
    <link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/tpshop.css" />
    <link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/myaccount.css" />
    <script src="/template/pc/rainbow/static/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
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
            <span>我的优惠券</span>
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
                    <div class="coup-tit p">
                        <h1>我的优惠券</h1>
                        <div class="tu">
                            <!--div class="sclq lqs">
                                <i class="top-up"></i>
                                <span><a href="">充值优惠券</a></span>
                            </div-->
                            <div class="sclq lqs" id="sclq-pop">
                                <i class="top-up"></i>
                                <span><a href="javascript:void(0);">兑换优惠券</a></span>
                            </div>
                            <div class="sclq">
                                <i class="top-up lq"></i>
                                <span><a href="<?php echo U('Home/Activity/coupon_list'); ?>">领取更多优惠券</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--兑换优惠券弹窗 s-->
                <div class="z-bind-bg">
                </div>
                <div class="z-bind-pop z-bind-duih" >
                    <form>
                        <div class="z-bind-head">
                            <i class="z-bind-cosle"></i>
                            <h5>兑换优惠券</h5>
                        </div>
                        <div class="z-bind-li">
                            <ul>
                                <li class="p">
                                    <span class="fl">
                                        输入兑换券号码
                                    </span>
                                    <div class="z-bind-text fl">
                                        <input type="text" id="coupon_code" value=""placeholder="输入兑换券号码"  />
                                        <label></label>
                                    </div>
                                </li>           
                            </ul>
                        </div>
                        <div class="z-bind-btn p">
                            <div class="z-bind-qx fl">
                                取消
                            </div>
                            <div class="z-bind-qd fr">
                                <input type="button" id="coupon_exchange" value="确定" />
                                <label></label>
                            </div>
                        </div>
                    </form> 
                </div> 
                <script type="text/javascript">
                    $(document).on('click','#sclq-pop', function(){
                        $(".z-bind-bg,.z-bind-duih").show();
                    });
                    $(document).on('click','.z-bind-qx', function(){
                        $(".z-bind-bg,.z-bind-duih").hide();
                    })

                    $('#coupon_exchange').click(function(){
                        var coupon_code = $('#coupon_code').val();
                        if (coupon_code != '') {
                            $.ajax({
                                type: "POST",
                                url: "<?php echo U('Home/Cart/cartCouponExchange'); ?>",
                                dataType: 'json',
                                data: {coupon_code: coupon_code},
                                success: function (data) {
                                    if (data.status == 1) {
                                        $(".z-bind-bg,.z-bind-duih").hide();
                                        window.location.reload();
                                    } else {
                                        layer.msg(data.msg, {icon: 2});
                                    }
                                }
                            });
                        }else{
                            layer.msg('请输入兑换券号码', {icon: 2});
                        }
                    })
                </script> 
                <div class="menumain p me-matin">
                    <div class="cp-type-tit p">
                        <div class="type p">
                            <ul class="ty-fir">
                                <li>优惠券类型：</li>
                                <!--<li class="coupon-t-s">-->
                                    <!--<a href="javascript:void(0);"><span class="alltype">全部类型</span><i class="jt-x"></i></a>-->
                                    <!--<ul class="sec-ul">-->
                                        <!--<li class="red">-->
                                            <!--<a href="javascript:void(0);">全部类型</a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                            <!--<a href="javascript:void(0);">自营</a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                            <!--<a href="javascript:void(0);">商城</a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                            <!--<a href="javascript:void(0);">环球购</a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                            <!--<a href="javascript:void(0);">抵用券</a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                            <!--<a href="javascript:void(0);">免邮券</a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                            <!--<a href="javascript:void(0);">礼品券</a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                            <!--<a href="javascript:void(0);">以旧换新券</a>-->
                                        <!--</li>-->
                                    <!--</ul>-->
                                <!--</li>-->
                                <li class="coupon-t-s sbs">
                                    <a href="javascript:void(0);"><span class="alltype"><?php if(\think\Request::instance()->param('type') == 1): ?>已使用<?php elseif(\think\Request::instance()->param('type') == 2): ?>已失效<?php else: ?>未使用<?php endif; ?></span><i class="jt-x"></i></a>
                                    <ul class="sec-ul">
                                        <li <?php if(\think\Request::instance()->param('type') == ''): ?>class="red"<?php endif; ?>>
                                        <a href="<?php echo U('Home/User/coupon'); ?>">未使用</a>
                                        </li>
                                        <li <?php if(\think\Request::instance()->param('type') == 1): ?>class="red"<?php endif; ?>>
                                            <a href="<?php echo U('Home/User/coupon',array('type'=>1)); ?>">已使用</a>
                                        </li>
                                        <li <?php if(\think\Request::instance()->param('type') == 2): ?>class="red"<?php endif; ?>>
                                            <a href="<?php echo U('Home/User/coupon',array('type'=>2)); ?>">已失效</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="ty-las">
                                <!--<li class="red">-->
                                    <!--<a href="javascript:void(0);">默认</a>-->
                                <!--</li>-->
                                <!--<li>-->
                                    <!--<a href="javascript:void(0);">最近到账</a>-->
                                <!--</li>-->
                                <!--<li>-->
                                    <!--<a href="javascript:void(0);">即将过期</a>-->
                                <!--</li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="howuse">
                        <a href="" style="display: none">如何使用优惠券？</a>
                    </div>
                    <?php if(empty($coupon_list) || (($coupon_list instanceof \think\Collection || $coupon_list instanceof \think\Paginator ) && $coupon_list->isEmpty())): ?>
                        <p class="norecode" style="font-size: 12px;color: #999999;padding: 50px 0;text-align: center;">没有记录！</p>
                    <?php endif; ?>
                    <div class="coupon-items">
                        <?php if(is_array($coupon_list) || $coupon_list instanceof \think\Collection || $coupon_list instanceof \think\Paginator): $i = 0; $__LIST__ = $coupon_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$coupon): $mod = ($i % 2 );++$i;?>
                        <div class="coupon-item <?php if(\think\Request::instance()->param('type') == ''): ?>coupon-item-d<?php else: ?>coupon-item-dgray<?php endif; ?>">
                            <div class="c-type">
                                <div class="c-price">
                                    <em>¥</em>
                                    <strong><?php echo $coupon['money']; ?></strong>
                                </div>
                                <div class="c-limit">
                                    【<?php echo $coupon['name']; ?>】
                                </div>
                                <div class="c-time">&nbsp;&nbsp;</div>
                                <div class="c-time">
                                    <?php if(\think\Request::instance()->param('type') == 1): ?>
                                        使用时间：<?php echo date("Y.m.d",$coupon['use_time']); else: ?>
                                        有效期至：<?php echo date("Y.m.d",$coupon['use_end_time']); endif; ?>

                                </div>
                                <div class="c-type-top"></div>
                                <div class="c-type-bottom"></div>
                            </div>
                            <div class="c-msg">
                                <div class="c-range">
                                    <div class="range-item">
                                        <span class="label">限条件：</span>
                                        <span class="txt">订单满<?php echo $coupon['condition']; ?>使用</span>
                                    </div>
                                    <div class="range-item">
                                        <span class="label">限品类：</span>
                                        <span class="txt"><?php echo $coupon['use_scope']; ?></span>
                                    </div>
                                    <div class="range-item" style="display: none">
                                        <span class="label">券编号：</span>
                                        <span class="txt"><?php echo $coupon['code']; ?></span>
                                    </div>
                                    <div class="range-item">
                                        <span class="label">&nbsp;&nbsp;</span>
                                        <span class="txt">&nbsp;&nbsp;</span>
                                    </div>
                                </div>
                                <div class="op-btns">
                                    <?php if(\think\Request::instance()->param('type') == 1): ?>
                                        <a class="btncoupon" ><span class="txt">已使用</span><b></b></a>
                                    <?php elseif(\think\Request::instance()->param('type') == 2): ?>
                                        <a class="btncoupon" ><span class="txt">已失效</span><b></b></a>
                                    <?php else: if($coupon['use_type'] == 2): ?>
                                            <a class="btncoupon" href="<?php echo U('Goods/goodsList',['id'=>$coupon['category_id']]); ?>">
                                        <?php elseif($coupon['use_type'] == 1): ?>
                                            <a class="btncoupon" href="<?php echo U('Goods/goodsInfo',['id'=>$coupon['goods_id']]); ?>">
                                        <?php else: ?>
                                            <a class="btncoupon" href="/">
                                        <?php endif; ?>
                                            <span class="txt">立即使用</span><b></b>
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <?php if(\think\Request::instance()->param('type') == 1): ?>
                                    <div class="ftx-03 ac mt5">此优惠券已使用</div>
                                <?php elseif(\think\Request::instance()->param('type') == 2): ?>
                                    <div class="ftx-03 ac mt5">此优惠券已失效</div>
                                <?php else: ?>
                                    <div class="ftx-03 ac mt5">此优惠券可以使用</div>
                                <?php endif; ?>
                            </div>
                            <div class="c-del"></div>
                        </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
                <div class="page p">
                    <?php echo $page; ?>
                </div>
                <!--好券推荐-s-->
                <!--<div class="menumain ma-to-20 p">
                    <div class="goodpiece">
                        <h1>好卷推荐</h1>
                        <a href=""><span>更多<i class="top-up tu_more"></i></span></a>
                    </div>
                    <div class="coupon-items ma-to-20">
                        <div class="coupon-item coupon-item-d">
                            <div class="c-type">
                                <div class="c-price">
                                    <em>¥</em>
                                    <strong>20</strong>
                                </div>
                                <div class="c-limit">
                                    【满21可用】
                                </div>
                                <div class="c-time">&nbsp;&nbsp;</div>
                                <div class="c-time">2017.03.28-2017.03.30</div>
                                <div class="c-type-top"></div>
                                <div class="c-type-bottom"></div>
                            </div>
                            <div class="c-msg">
                                <div class="c-range">
                                    <div class="range-item">
                                        <span class="label">限品类：</span>
                                        <span class="txt">全平台</span>
                                    </div>
                                    <div class="range-item">
                                        <span class="label">限平台：</span>
                                        <span class="txt">全平台</span>
                                    </div>
                                    <div class="range-item">
                                        <span class="label">券编号：</span>
                                        <span class="txt">9754238363</span>
                                    </div>
                                    <div class="range-item">
                                        <span class="label">&nbsp;&nbsp;</span>
                                        <span class="txt">&nbsp;&nbsp;</span>
                                    </div>
                                </div>
                                <div class="op-btns">
                                    <a class="btncoupon" href=""><span class="txt">立即领取</span><b></b></a>
                                </div>
                            </div>
                        </div>
                        <div class="coupon-item coupon-item-d">
                            <div class="c-type">
                                <div class="c-price">
                                    <em>¥</em>
                                    <strong>20</strong>
                                </div>
                                <div class="c-limit">
                                    【满21可用】
                                </div>
                                <div class="c-time">&nbsp;&nbsp;</div>
                                <div class="c-time">2017.03.28-2017.03.30</div>
                                <div class="c-type-top"></div>
                                <div class="c-type-bottom"></div>
                            </div>
                            <div class="c-msg">
                                <div class="c-range">
                                    <div class="range-item">
                                        <span class="label">限品类：</span>
                                        <span class="txt">全平台</span>
                                    </div>
                                    <div class="range-item">
                                        <span class="label">限平台：</span>
                                        <span class="txt">全平台</span>
                                    </div>
                                    <div class="range-item">
                                        <span class="label">券编号：</span>
                                        <span class="txt">9754238363</span>
                                    </div>
                                    <div class="range-item">
                                        <span class="label">&nbsp;&nbsp;</span>
                                        <span class="txt">&nbsp;&nbsp;</span>
                                    </div>
                                </div>
                                <div class="op-btns">
                                    <a class="btncoupon" href=""><span class="txt">立即领取</span><b></b></a>
                                </div>
                            </div>
                        </div>
                        <div class="coupon-item coupon-item-d">
                            <div class="c-type">
                                <div class="c-price">
                                    <em>¥</em>
                                    <strong>20</strong>
                                </div>
                                <div class="c-limit">
                                    【满21可用】
                                </div>
                                <div class="c-time">&nbsp;&nbsp;</div>
                                <div class="c-time">2017.03.28-2017.03.30</div>
                                <div class="c-type-top"></div>
                                <div class="c-type-bottom"></div>
                            </div>
                            <div class="c-msg">
                                <div class="c-range">
                                    <div class="range-item">
                                        <span class="label">限品类：</span>
                                        <span class="txt">全平台</span>
                                    </div>
                                    <div class="range-item">
                                        <span class="label">限平台：</span>
                                        <span class="txt">全平台</span>
                                    </div>
                                    <div class="range-item">
                                        <span class="label">券编号：</span>
                                        <span class="txt">9754238363</span>
                                    </div>
                                    <div class="range-item">
                                        <span class="label">&nbsp;&nbsp;</span>
                                        <span class="txt">&nbsp;&nbsp;</span>
                                    </div>
                                </div>
                                <div class="op-btns">
                                    <a class="btncoupon" href=""><span class="txt">立即领取</span><b></b></a>
                                </div>
                            </div>
                        </div>
                        <div class="coupon-item coupon-item-d">
                            <div class="c-type">
                                <div class="c-price">
                                    <em>¥</em>
                                    <strong>20</strong>
                                </div>
                                <div class="c-limit">
                                    【满21可用】
                                </div>
                                <div class="c-time">&nbsp;&nbsp;</div>
                                <div class="c-time">2017.03.28-2017.03.30</div>
                                <div class="c-type-top"></div>
                                <div class="c-type-bottom"></div>
                            </div>
                            <div class="c-msg">
                                <div class="c-range">
                                    <div class="range-item">
                                        <span class="label">限品类：</span>
                                        <span class="txt">全平台</span>
                                    </div>
                                    <div class="range-item">
                                        <span class="label">限平台：</span>
                                        <span class="txt">全平台</span>
                                    </div>
                                    <div class="range-item">
                                        <span class="label">券编号：</span>
                                        <span class="txt">9754238363</span>
                                    </div>
                                    <div class="range-item">
                                        <span class="label">&nbsp;&nbsp;</span>
                                        <span class="txt">&nbsp;&nbsp;</span>
                                    </div>
                                </div>
                                <div class="op-btns">
                                    <a class="btncoupon" href=""><span class="txt">立即领取</span><b></b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!--好券推荐-s-->
            </div>
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
<script type="text/javascript">
    $(function() {
        $('.sec-ul li').click(function() {
            var text = $(this).find('a').text();
            $(this).parent().siblings().find('.alltype').text(text);
            $(this).addClass('red').siblings().removeClass('red');
        })
        $('.ty-las li').click(function() {
            $(this).addClass('red').siblings().removeClass('red');
        })
    })
    $(function(){
        $('.coupon-items .coupon-item').hover(function(){
            $(this).addClass('coupon-item-hover');
        },function(){
            $(this).removeClass('coupon-item-hover');
        })
    })
</script>
</body>
</html>