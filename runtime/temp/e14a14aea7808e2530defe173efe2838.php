<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:40:"./template/pc/rainbow/user\recharge.html";i:1568702284;s:59:"D:\TPshop_tp5_20210401\template\pc\rainbow\user\header.html";i:1568702284;s:57:"D:\TPshop_tp5_20210401\template\pc\rainbow\user\menu.html";i:1568702284;s:61:"D:\TPshop_tp5_20210401\template\pc\rainbow\public\footer.html";i:1568702283;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>账户余额</title>
		<link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/tpshop.css" />
		<link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/myaccount.css" />
		<link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/jh.css" />
		<script src="/template/pc/rainbow/static/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<style>
		.topup-money {
			background-color: #ffffff;
			padding: 15px;
		}
		.usermoney {
			border: 1px solid #dedede;
			overflow: hidden;
		}
		.userdown-top {
			width:100%;
		}
		.userdown-top span{
			display:inline-block;
			 cursor: pointer;
			 width: 120px;
			 height:36px;
			 line-height:36px;
			 text-align: center;
			 border: 1px solid #dedede;
			 border-bottom:1px solid #fff;
			 color:#333;
			 font-size:16px;
			 font-weight:bold;
			 letter-spacing:3px;
		 }
		.choicetu {
			overflow: hidden;
			padding: 10px;
			margin-top: 16px;
		}
		.fop-main {
			overflow: hidden;
			margin-bottom: 50px;
		}
		

		.m-tagbox {
			margin-top:20px;
			overflow:hidden;
		}
		.m-tagbox .tag-define, .m-tagbox .tag-item {
			float: left;
			width: 98px;
			height: 38px;
			line-height: 38px;
			border: 1px solid #e0e0e0;
			margin-right: 20px;
			text-align: center;
			color: #333;
		}
		.m-tagbox .tag-item {
			position: relative;
			overflow: hidden;
			white-space: nowrap;
			text-overflow: ellipsis;
		}
		.m-tagbox .t-check {
			display: none;
			position: absolute;
			right: 0;
			bottom: 0;
			width: 16px;
			height: 16px;
			background-position: -40px 0;
		}
		.m-tagbox .tptig {
			display: inline-block;
			background-image: url(/template/pc/rainbow/static/images/sprite-operate.png);
			background-repeat: no-repeat;
		}
		.orde-sjyy {
			font-family: 'Tahoma','\5FAE\8F6F\96C5\9ED1';
		}
		.titls {
			font-size: 14px;
			border-left: 3px solid #e5e5e5;
			padding-left: 6px;
			line-height: 20px;
			margin-bottom: 20px;
		}
		.bsjy-g dl {
			border: 1px solid #dedede;
			border-bottom: 0 none;
		}
	</style>
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
			       	<span>账户余额</span>
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
						<div class="menumain p mywallets" style="display: block;">
							<div class="goodpiece">
								<h1>账户余额</h1>
								<!--<a href=""><span class="co_blue">账户余额说明</span></a>-->
							</div>
							<div class="shopcard frozen-cha ma-to-20 p">
								<div class="cuschan">
									<span class="kycha"><i class="money"></i>可用余额</span><br />
									<span class="co"><em>￥</em><?php echo $user['user_money']; ?></span>
								</div>
								<div class="cuschan">
									<span class="kycha"><i class="frozen"></i>冻结金额</span><br />
									<span class="co"><em>￥</em><?php echo $user['frozen_money']; ?></span>
								</div>
                                <div class="cuschan">
                                    <span class="kycha"><i class="frozen"></i>可提现</span><br />
                                    <span class="co"><em>￥</em><?php echo $user['user_money']; ?></span>
                                </div>

								<div class="cuschan tc-uic">
									<a class="topup-mom" href="<?php echo U('Home/User/withdrawals'); ?>">提现</a>
									<a class="topup-mom" href="javascript:" onclick="mywalletstopup()">充值</a>
								</div>

                                <div class="cuschan">
                                    <span class="kycha"><i class="frozen"></i>累计充值</span><br />
                                    <span class="co"><em>￥</em><?php echo $user['user_total_money']; ?></span>
                                </div>
                                <div class="cuschan">
                                    <span class="kycha"><i class="frozen"></i>累计提现</span><br />
                                    <span class="co"><em>￥</em><?php echo $user['withdrawal_total_money']; ?></span>
                                </div>
                                <div class="cuschan">
                                    <span class="kycha"><i class="frozen"></i>提现中</span><br />
                                    <span class="co"><em>￥</em><?php echo $user['cash_in']; ?></span>
                                </div>

                                <div class="cuschan jhove">
									<span class="kycha">
										账户状态：<em><?php if($user['is_lock'] == 1): ?>被冻结<?php else: ?>已激活<?php endif; ?></em>
									</span>
                                </div>
							</div>
							<div class="time-sala">
								<ul>
                                    <li <?php if(\think\Request::instance()->param('type') == ''): ?>class="red"<?php else: ?>class="mal-l"<?php endif; ?>><a href="<?php echo U('Home/User/recharge',array('')); ?>">充值记录</a></li>
                                    <li <?php if(\think\Request::instance()->param('type') == 1): ?>class="red"<?php else: ?>class="mal-l"<?php endif; ?>><a href="<?php echo U('Home/User/recharge',array('type'=>1)); ?>">消费记录</a></li>
                                    <li <?php if(\think\Request::instance()->param('type') == 2): ?>class="red"<?php else: ?>class="mal-l"<?php endif; ?>><a href="<?php echo U('Home/User/recharge',array('type'=>2)); ?>">提现记录</a></li>
								</ul>
							</div>
							<div class="he"></div>
							<div class="card-list accbala">
								<ul>
									<li><a href="javascript:void(0);">日期</a></li>
									<li><a href="javascript:void(0);">金额</a></li>
									<?php if(\think\Request::instance()->get('type') == '2'): ?><li><a href="javascript:void(0);">手续费</a></li><?php else: endif; if(\think\Request::instance()->get('type') == ''): ?><li><a href="javascript:void(0);">状态</a></li><?php else: ?><li><a href="javascript:void(0);">订单号</a></li><?php endif; ?>
									<li><a href="javascript:void(0);">备注</a></li>
								</ul>
							</div>
							<?php if(\think\Request::instance()->get('type') == ''): ?>
                                <!--无记录时-s-->
                                <?php if(empty($lists) || (($lists instanceof \think\Collection || $lists instanceof \think\Paginator ) && $lists->isEmpty())): ?>
                                    <p class="ncyekjl">--暂无记录--</p>
                                <?php endif; ?>
                                <!--无记录时-e-->
								<?php if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): if( count($lists)==0 ) : echo "" ;else: foreach($lists as $key=>$vo): ?>
									<div class="card-list c_contan accbala-list">
										<ul>
											<li><a href="javascript:void(0);"><?php echo date('Y-m-d H:i:s',$vo['ctime']); ?></a></li>
											<li><a href="javascript:void(0);"><?php echo $vo['account']; ?></a></li>
											<li><a href="javascript:void(0);"><?php echo $status[$vo['pay_status']]; ?></a></li>
											<li><a href="javascript:void(0);"><?php echo $vo['pay_name']; ?></a></li>
										</ul>
									</div>
								<?php endforeach; endif; else: echo "" ;endif; endif; ?>
                        <!--消费记录-s-->
							<?php if(\think\Request::instance()->get('type') == 1): ?>

                                <!--无记录时-s-->
                                <?php if(empty($lists) || (($lists instanceof \think\Collection || $lists instanceof \think\Paginator ) && $lists->isEmpty())): ?>
                                    <p class="ncyekjl">--暂无记录--</p>
                                <?php endif; ?>
                                <!--无记录时-e-->
								<?php if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): if( count($lists)==0 ) : echo "" ;else: foreach($lists as $key=>$account): ?>
									<div class="card-list c_contan accbala-list">
										<ul>
											<li><a href="javascript:void(0);"><?php echo date('Y-m-d H:i:s',$account['change_time']); ?></a></li>
											<li><a href="javascript:void(0);"><?php echo $account['user_money']; ?></a></li>
											<li><a href="javascript:void(0);"><?php echo (isset($account['order_sn']) && ($account['order_sn'] !== '')?$account['order_sn']:"--"); ?></a></li>
											<li><a href="javascript:void(0);"><?php echo $account['desc']; ?></a></li>
										</ul>
									</div>
								<?php endforeach; endif; else: echo "" ;endif; endif; ?>
                        <!--消费记录-e-->

                        <!--提现记录-s-->
                            <?php if(\think\Request::instance()->param('type') == 2): ?>
                                <!--无记录时-s-->
                                <?php if(empty($lists) || (($lists instanceof \think\Collection || $lists instanceof \think\Paginator ) && $lists->isEmpty())): ?>
                                    <p class="ncyekjl">--暂无记录--</p>
                                <?php endif; ?>
                                <!--无记录时-e-->
                                <?php if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): if( count($lists)==0 ) : echo "" ;else: foreach($lists as $key=>$withdrawals): ?>
                                    <div class="card-list c_contan accbala-list">
                                        <ul>
                                            <li><a href="javascript:void(0);"><?php echo date('Y-m-d H:i:s',$withdrawals['create_time']); ?></a></li>
                                            <li><a href="javascript:void(0);"><?php echo $withdrawals['money']; ?></a></li>
                                            <li><a href="javascript:void(0);"><?php echo $withdrawals['taxfee']; ?></a></li>
                                            <li><a href="javascript:void(0);"><?php echo $withdrawals['id']; ?></a></li>
                                            <li><a href="javascript:void(0);"><?php echo $withdrawals['remark']; ?></a></li>
                                            <li><a href="javascript:void(0);"><?php echo $status[$withdrawals['status']]; ?></a></li>
                                        </ul>
                                    </div>
                                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                        <!--提现记录-e-->
						</div>
                        <!--充值-s-->
						<div class="aboutmoney addmon" style="display:none">
							<div class="usermoney topup-money">
								<div class="userdown-top"><span>充值</span></div>
								<hr style="height: 1px; background: #dedede; border: none; margin-top: -1px;" />
								<div class="choicetu">
                                    <form method="post"  id="recharge_form" action="">
									<div class="monettu">
										<div class="fop-main">
                                        	<div class="remain-cash">
                                            	当前余额：<em>￥</em><b><?php echo $user['user_money']; ?></b>
                                            </div>
                                        	<div class="tag-define" data_id="tag_157">
												<span class="define-label">充值金额：<em>￥</em></span>
												<input type="text" name="account" class="define-input" value="" placeholder="请输入充值金额" id="input_val">
                                                <i></i>
											</div>
											<div class="m-tagbox m-multi-tag">
												<a href="javascript:void(0)" rel="50" class="tag-item">￥50.00<i class="t-check "></i></a>
												<a href="javascript:void(0)" rel="100" class="tag-item">￥100.00<i class="t-check"></i></a>
												<a href="javascript:void(0)" rel="200" class="tag-item">￥200.00<i class="t-check"></i></a>
												<a href="javascript:void(0)" rel="500" class="tag-item">￥500.00<i class="t-check"></i></a>
											</div>
										</div>
                                    <div class="fop-choice">
                                            <div class="orde-sjyy">
                                                <h3 class="titls">选择支付方式</h3>
                                                <div class="bsjy-g">
                                                    <dl>
                                                        <dd>
                                                            <div class="order-payment-area">
                                                                <div class="po-re dsfzf-ee">
                                                                    <ul>
                                                                        <?php if(is_array($paymentList) || $paymentList instanceof \think\Collection || $paymentList instanceof \think\Paginator): if( count($paymentList)==0 ) : echo "" ;else: foreach($paymentList as $k=>$v): ?>
                                                                            <li>
                                                                                <div class="payment-area">
                                                                                    <input type="radio"  value="pay_code=<?php echo $v['code']; ?>" class="radio vam" name="pay_radio" <?php if($k == $alipay): ?>checked<?php endif; ?>>
                                                                                    <label for="">
                                                                                        <img src="/plugins/<?php echo $v['type']; ?>/<?php echo $v['code']; ?>/<?php echo $v['icon']; ?>" width="120" height="40" onClick="change_pay(this);" />
                                                                                    </label>
                                                                                </div>
                                                                            </li>
                                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!--第三方网银支付 start-->
                                                            <?php if(is_array($bankCodeList) || $bankCodeList instanceof \think\Collection || $bankCodeList instanceof \think\Paginator): if( count($bankCodeList)==0 ) : echo "" ;else: foreach($bankCodeList as $k=>$v): ?>
                                                                <div class="order-payment-area">
                                                                    <div class="dsfzfpte">
                                                                        <b><?php echo $paymentList[$k]['name']; ?></b>
                                                                        <em>网银支付</em>
                                                                    </div>
                                                                    <div class="po-re dsfzf-ee">
                                                                        <ul>
                                                                            <?php if(is_array($v) || $v instanceof \think\Collection || $v instanceof \think\Paginator): if( count($v)==0 ) : echo "" ;else: foreach($v as $k2=>$v2): ?>
                                                                                <li>
                                                                                    <div class="payment-area">
                                                                                        <input type="radio" name="pay_radio" class="radio vam" value="pay_code=<?php echo $k; ?>&bank_code=<?php echo $v2; ?>" id="input-ALIPAY-1">
                                                                                        <label for="">
                                                                                            <img src="/template/pc/rainbow/static/images/images-out/<?php echo $bank_img[$k2]; ?>" width="120" height="40" onClick="change_pay(this);"/>
                                                                                        </label>
                                                                                    </div>
                                                                                </li>
                                                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                                            <!--第三方网银支付 end -->
                                                        </dd>
                                                    </dl>
                                                    <input type="hidden" name="account" id="add_money" value="50">
                                                    <div class="order-payment-action-area">
                                                    	<a href="javascript:void(0);" class="return-wallet" onclick="mywalletsa();">取消并返回</a>
                                                        <a class="button-style-5 button-confirm-payment" href="javascript:void(0);" onclick="recharge_submit();">立即支付</a>
                                                    </div>
                                                </div>
                                        </div>
										</div>
									</div>
                                    </form>
								</div>
							</div>
						</div>
                        <!--充值-e-->
						<div class="operating fixed consume_log" id="bottom">
							<div class="fn_page clearfix">
                                <?php echo $page; ?>
							</div>
						</div>
			    	</div>
			    </div>
			</div>
		</div>
		<!--footer-s-->
		<div class="footer p"><div class="tpshop-service">
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
</script> </div>
		<!--footer-e-->
		<script type="text/javascript">
            //切换充值记录，消费记录
			$(function(){
				$('.time-sala ul li').click(function(){
					$(this).addClass('red').siblings().removeClass('red');
				})
                //选择充值金额
                $('.m-multi-tag a').click(function(){
                    $('#input_val').val($(this).attr('rel'));
					show_delete_btn();
					$("#input_val").focus();
                })
			})

			$(document).ready(function() {
				$(document).on('click','.tag-item',function(){
					$(this).find('.t-check').addClass('tptig').parent().siblings().find('.t-check').removeClass('tptig');
					$('#add_money').val($(this).attr('rel'));
				});
//				$('.tag-define').click(function(){
//					var goods_id = $(this).attr('data_id').substr(4);
//					$(this).find('.define-input').show().focus();
//					$(this).find('.define-input').blur(function(){
//						var ce = $(this).val();
//						ce = ce.replace(/\D|^0/g,'')
//
//						$(this).parent('.tag-define').siblings('.tag-item').each(function(){
//							var a_text = $(this).text();
//							if(ce == a_text && ce != ''){
//								layer.alert('已有该标签!',{icon:2});
//								ce = '';
//							}
//						});
//					})
//				});
			});
			// 点充值时
            function mywalletstopup() {
                $('.addmon').show();
                $('.mywallets').hide();
                $('#bottom').hide()
				$("#input_val").focus();
				var input_val = Number($('#input_val').val());
				if (input_val > 0){
					show_delete_btn();
				}
            }
            //返回我的钱包
            function mywalletsa() {
                $('.mywallets').show();
                $('#bottom').show();
                $('.addmon').hide();
            }
			function recharge_submit(){
				// 直接判断输入金额
				var input_val = $('#input_val').val();
				if ( input_val == ''){
					layer.alert('充值金额不能为空',{icon:2});
					return false;
				}

				if(isNaN(input_val) || Number(input_val) <= 0){
					layer.alert('请输入正确的充值金额',{icon:2});
					return false;
				}else{
					$('#add_money').val(Number(input_val));
				}

				$('#recharge_form').submit();
			}
            //选择支付方式
            function change_pay(obj)
            {
                $(obj).parent().siblings('input[name="pay_radio"]').trigger('click');
            }

			// 输入金额时：显示（￥ + 输入的金额 + 光标 + 清除）
		    $("#input_val").keydown(function(){
		        show_delete_btn();
		        $('.t-check').removeClass('tptig');
		    });
		    $("#input_val").keyup(function(){
		        if ($('#input_val').val()=="") {
		            $(".tag-define i").hide();
		        }else{
		            show_delete_btn();
		        }
		    });
			function show_delete_btn(){
				$(".tag-define i").show();
				$(".tag-define i").unbind('click');
				$(".tag-define i").click(function(){
					$('#input_val').val('').focus();
					$(".tag-define i").hide();
					$('.t-check').removeClass('tptig');

				})
			}

		</script>
	</body>
</html>