<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:37:"./template/pc/rainbow/cart\cart2.html";i:1616701750;s:59:"H:\www\lzx_mall\template\pc\rainbow\public\sign-header.html";i:1616701750;s:54:"H:\www\lzx_mall\template\pc\rainbow\public\footer.html";i:1616701750;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>购物车结算-<?php echo $tpshop_config['shop_info_store_title']; ?></title>
    <link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/tpshop.css"/>
    <link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/myaccount.css"/>
    <link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/jh.css"/>
    <link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/jquery.datetimepicker.css"/>
    <script src="/template/pc/rainbow/static/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/template/pc/rainbow/static/js/jquery.datetimepicker.full.js" type="text/javascript" charset="utf-8"></script>
    <script src="/public/js/layer/layer.js"></script>
    <script src="/public/js/global.js" type="text/javascript" charset="utf-8"></script>
    <script src="/public/js/md5.min.js"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=<?php echo $tpshop_config['basic_bd_ak']; ?>"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.js"></script>
    <link rel="stylesheet" href="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.css" />
</head>
<body>
<!--顶部广告-s-->
<?php $pid =1;$ad_position = M("ad_position")->cache(true,TPSHOP_CACHE_TIME)->column("position_id,position_name,ad_width,ad_height","position_id");$result = M("ad")->where("pid=$pid  and enabled = 1 and start_time <= 1617105600 and end_time >= 1617105600 ")->order("orderby desc")->cache(true,TPSHOP_CACHE_TIME)->limit("1")->select();
if(is_array($ad_position) && !in_array($pid,array_keys($ad_position)) && $pid)
{
  M("ad_position")->insert(array(
         "position_id"=>$pid,
         "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ",
         "is_open"=>1,
         "position_desc"=>CONTROLLER_NAME."页面",
  ));
  delFile(RUNTIME_PATH); // 删除缓存
  \think\Cache::clear();  
}


$c = 1- count($result); //  如果要求数量 和实际数量不一样 并且编辑模式
if($c > 0 && I("get.edit_ad"))
{
    for($i = 0; $i < $c; $i++) // 还没有添加广告的时候
    {
      $result[] = array(
          "ad_code" => "/public/images/not_adv.jpg",
          "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid",
          "title"   =>"暂无广告图片",
          "not_adv" => 1,
          "target" => 0,
      );  
    }
}
foreach($result as $key=>$v):       
    
    $v[position] = $ad_position[$v[pid]]; 
    if(I("get.edit_ad") && $v[not_adv] == 0 )
    {
        $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; // 广告半透明的样式
        $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]";        
        $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name];
        $v[target] = 0;
    }
    ?>
    <div class="topic-banner" style="background: #f37c1e;">
        <div class="w1224">
            <a href="<?php echo $v['ad_link']; ?>">
                <img src="<?php echo $v[ad_code]; ?>"/>
            </a>
            <i onclick="$('.topic-banner').hide();"></i>
        </div>
    </div>
<?php endforeach; ?>
<!--顶部广告-e-->
<!--header-s-->
<div class="sett_hander p">
    <link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/base.css" />
<div class="top-hander" moduleid="1539923">
    <div class="w1224 clearfix">
      <div class="fl">
          <!--<?php if($user[user_id] > 0): ?>-->
              <!--<li class="fl J_login_status"><a href="<?php echo U('Home/user/index'); ?>" alt="" title="" target="_self"><?php echo $user['nickname']; ?></a>-->
                  <!--<a  href="<?php echo U('Home/user/logout'); ?>" style="margin:0 10px;" title="退出" target="_self">退出</a></li>-->
              <!--</li>-->
              <!--<?php else: ?>-->
              <!--<li class="fl J_login_status"><a class="menu-item fl J_do_login J_chgurl" href="<?php echo U('Home/user/login'); ?>">-->
                  <!--<span>Hi，请登录</span> </a><a class="menu-item fl ht" href="<?php echo U('Home/user/reg'); ?>">免费注册</a>-->
          <!--<?php endif; ?>-->
          <div class="ls-dlzc fl nologin">
              <a href="<?php echo U('Home/user/login'); ?>">Hi,请登录</a>
              <a class="red" href="<?php echo U('Home/user/reg'); ?>">免费注册</a>
          </div>
          <div class="ls-dlzc fl islogin">
              <a class="red userinfo" href="<?php echo U('Home/user/index'); ?>"></a>
              <a href="<?php echo U('Home/user/logout'); ?>">退出</a>
          </div>
          <script>
              $(function (){
                      var uname = getCookie('uname');
                      if (uname == '') {
                          $('.islogin').remove();
                          $('.nologin').show();
                      } else {
                          $('.nologin').remove();
                          $('.islogin').show();
                          $('.userinfo').html(decodeURIComponent(uname).substring(0,11));
                      }
              })

          </script>
        <!-- <li class="fl sep"></li> -->
        <!--<li class="fl select-city dropdown">
          <span class="menu-item">
          <span>送货至：</span>
          <a title="" alt="" href="" class="J_cur_place"></a><i class="dd"></i></span>
        </li>-->
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


    <div class="nav-middan-z p">
        <div class="header w1224">
            <div class="ecsc-logo fon_gwcshcar">
                <a href="/" class="logo"> <img src="<?php echo (isset($tpshop_config['shop_info_store_logo']) && ($tpshop_config['shop_info_store_logo'] !== '')?$tpshop_config['shop_info_store_logo']:'/public/static/images/logo/pc_home_logo_default.png'); ?>" style="width: 161px;height: 58px;"></a>
                <span>购物车</span>
            </div>
            <div class="liucsell">
                <div class="line-flowpath">
                    <span class="green"><i class="las-flo"></i><em>1、我的购物车</em></span>
                    <span class="green now"><i class="las-flo2"></i><em>2、填写核对订单信息</em></span>
                    <span><i class="las-flo3"></i><em>3、成功提交订单</em></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--header-e-->
<form name="cart2_form" id="cart2_form" method="post" autocomplete="off">
    <input type="hidden" name="is_virtual" value="<?php echo !empty($cartList[0]['goods']['is_virtual'])?$cartList[0]['goods']['is_virtual']:0; ?>">
    <input type="hidden" id="order_invoice_title" name="invoice_title" value="">
    <input type="hidden" id="order_taxpayer" name="taxpayer" value="">
    <input type="hidden" id="address_id" name="address_id" value="">
    <input type="hidden" name="pay_points" value="">
    <input type="hidden" name="user_money" value="">
    <!--立即购买才会用到-s-->
    <input type="hidden" name="action" value="<?php echo \think\Request::instance()->param('action'); ?>">
    <input type="hidden" name="goods_id" value="<?php echo \think\Request::instance()->param('goods_id'); ?>">
    <input type="hidden" name="item_id" value="<?php echo \think\Request::instance()->param('item_id'); ?>">
    <input type="hidden" name="goods_num" value="<?php echo \think\Request::instance()->param('goods_num'); ?>">
    <input type="hidden" name="auth_code" value="<?php echo \think\Config::get('AUTH_CODE'); ?>"/>
    <!--立即购买才会用到-e-->
    <input type="hidden" name="pay_pwd" value="">
    <input type="hidden" name="user_note" value="">
    <input type="hidden" name="consignee" value="">
    <input type="hidden" name="mobile" value="">
    <input type="hidden" name="shop_id" value="">
    <input type="hidden" name="take_time" value="">
</form>
<div class="fillorder shipping_div">
    <div class="w1224">
        <p class="tit">填写并核对订单信息</p>

        <div class="spriteform" id="ajax_address"></div>
    </div>
</div>
<!--编辑地址弹窗-s--->
<div class="ui-dialog infom-dia" id="address_dialog" style="width: 700px">
    <form id="address_form">
        <input name="address_id" type="hidden" value="0">

        <div class="ui-dialog-title">
            <span>新增收货地址</span>
            <a class="ui-dialog-close" id="address_dialog_close" title="关闭">
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
                                   placeholder="固话号码格式:xx-xx(例如: 0755-86140485)" maxlength="15"/>
                            <span class="err" id="err_mobile"></span>
                        </div>
                    </div>
                    <div class="invoice_title p">
                        <span class="label"><span class="red">*</span>收货地址：</span>
                        <span class="err" id="err_province"></span>
                        <span class="err" id="err_city"></span>
                        <span class="err" id="err_district"></span>
                        <select class="di-bl fl seauii" name="province" id="province" onChange="get_city(this)">
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
                                <a id="address_submit" class="btn-1">保存</a>
                                <a onclick="$('#address_dialog_close').trigger('click');" class="btn-9">取消</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!--编辑地址弹窗-e--->
<div class="ui-mask" id="address_dialog_mask"></div>
<!--上门自提和快速配送切换 s-->
<div class="w1224 z-parkage-pc p">
    <span class="paragraph shipping_div"><i class="ddd"></i> 配送方式</span>
    <ul class="z-parkage-pc-ul p shipping_div">
        <li class="fl z-parkage-li" id="express_delivery">快递配送<span></span></li>
        <li class="fl" id="door_to_door" style="display: none">上门自提<span></span></li>
    </ul>
    <div class="dis-modes-li p" id="express_delivery_modes">
        <div class="shipment shipping_div">
            <div class="fore1 p">
                <span class="mode-label">配送时间：</span>

                <div class="mode-infor hover-y">
                    <p><label>工作日、双休日与节假日均可送货</label></p>
                    <!--<p><label><input type="checkbox" name="" value="" /> 双休日、假日送</label></p>-->
                </div>
            </div>
        </div>
        <div class="standard_wei buy-remarks no_shipping_div" style="display: none;">
            <span>手机 : </span><input style="width: 248px; height:48px; margin-bottom: 20px; border: 1px solid #f5F5F5;" id="phone" maxlength="13" placeholder="请输入手机号码,接受兑换码"/>
        </div>
        <div class="standard_wei buy-remarks p">
            <span>备&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注 :</span>
            <textarea class="user_note_txt fl" maxlength="50" placeholder="最多输入50个字"></textarea>
        </div>
    </div>
    <div class="dis-modes-li modes-li-two p shipping_div" id="door_to_door_modes" style="display: none;">
        <p class="modes-li-title">附近自提点 <span>免运费</span></p>

        <div class="modes-li-select">选择自提点并下单 > 收到提货短信 > 到自提点提货</div>
        <div class="modes-li-cont">
            <div class="modes-li-list p" style="margin-bottom: 10px;">
                <div class="modes-li-input fl">
                    自提时间：
                </div>
                <div class="modes-li-dev fl">
                    <input type="text" id="date_time_picker_mask" value="<?php echo date('Y-m-d H:00',strtotime('+1 day')); ?>" />
                </div>
                <div class="modes-li-ups fl" id="modify_take_time" onclick=" $('#date_time_picker_mask').datetimepicker('show');">
                    修改自提时间
                </div>
            </div>
        </div>
        <div class="modes-li-cont">
            <div class="modes-li-list p">
                <div class="modes-li-input fl">
                    <input type="radio" checked name="modes-radio" id="modes-cked1" value=""/>
                    <label for="modes-cked1"></label>
                </div>
                <div class="modes-li-dev fl">
                    <span id="shop_address_desc"></span>
                    <span class="modes-li-pone" id="shop_mobile"></span>
                </div>
                <div class="modes-li-distance fl">
                    <i class="li-distance-i"></i>距离：<span id="shop_distance"></span><em id="distance_near" style="display: none;">距离最近</em>
                </div>
            </div>
        </div>
        <div class="modes-li-instead">
            <a href="javascript:void(0)" id="replace_shop">更换自提点>></a>
        </div>
    </div>
</div>
<script>
    $.datetimepicker.setLocale('zh');
    $('#date_time_picker_mask').datetimepicker({
        mask:'',
        format: "Y-m-d H:i",
        minDate: new Date()
    }).on('change', function(ev){
        init_take_time();
    });
    init_take_time();
    function init_take_time()
    {
        var take_time_date = $('#date_time_picker_mask').val();
        take_time_date += ':00';
        var timestamp = Date.parse(new Date(take_time_date));
        timestamp = timestamp / 1000;
        $("input[name='take_time']").val(timestamp);
    }
</script>
<!--更改自提点 s-->
<div class="z-instead-bg">
</div>
<div class="z-instead-cont">
    <div class="z-instead-head p">
        <div class="fl z-instead-title"><i></i>选择自提点</div>
        <div class="fr z-instead-close" id="shop_dialog_close">关闭</div>
    </div>
    <div class="z-instead-nav p">
        <ul class="fl p">
            <li class="fl p">
                <div class="instead-num">1</div>
                <div class="instead-name">选择自提点并下单</div>
                <div class="instead-icon"></div>
            </li>
            <li class="fl p">
                <div class="instead-num">2</div>
                <div class="instead-name">收到提货短信</div>
                <div class="instead-icon"></div>
            </li>
            <li class="fl p">
                <div class="instead-num">3</div>
                <div class="instead-name">到自提点提货</div>
            </li>
        </ul>
        <dl class="fr">
            <dt class="p">
                <div class="insteads instead-icon-money fr">安全保管</div>
                <div class="insteads instead-icon-any fr">随时自提</div>
                <div class="insteads instead-icon-compensate fr">丢失赔付</div>
            </dt>
        </dl>
    </div>
    <div class="select-region-wrap">
        <div class="select-region-nav">
            <table style="max-width: 70%;" border="0" cellspacing="0" cellpadding="0" class="fl">
                <tr class="select-tr">
                    <td class="select-qu"><span class="xh"></span>选择区域：</td>
                    <td>
                        <select class="di-bl fl seauii" name="province" id="address_province" onChange="get_city(this,'address_city','address_district')">
                            <option value="0">请选择</option>
                        </select>

                        <select class="di-bl fl seauii" name="city" id="address_city" onChange="get_area(this,'address_district')">
                            <option value="0">请选择</option>
                        </select>

                        <select class="di-bl fl seauii" name="district" id="address_district" onChange="get_twon(this)">
                            <option value="0">请选择</option>
                        </select>
                        <br>
                    </td>
                </tr>
            </table>
            <div class="region-search-wrap fl p">
                <div class="select-region-search fl">
                    <input type="text" id="shop_address" placeholder="输入地址或者店名搜索"/>
                    <label></label>
                </div>
                <div class="select-region-btn fl">
                    <input type="button" id="search_shop" value="搜索"/>
                    <label></label>
                </div>
            </div>
            <div class="select-business-wrap p">
                <div style="height: 25px;"></div>
                <div class="select-business-map fl p">
                    <div id="container" style="width: 100%;height:100%;"></div>
                </div>
                <div class="select-business-list fr" id="shop_list">
                </div>
            </div>
            <div class="select-business-foot p">
                <div class="business-foot fl">
                    *<span class="business-foot-name">
                            提货人 :
                        </span>
                    <input id="consignee" type="text" placeholder="请输入提货人" maxlength="30"/>
                    <label></label>
                </div>
                <div class="business-foot fl">
                    *<span class="business-foot-name">
                            联系方式 :
                        </span>
                    <input id="mobile" type="text" placeholder="请输入联系方式" maxlength="11"/>
                    <label></label>
                </div>
            </div>
        </div>
    </div>
    <div class="business-bottom-wrap p">
        <div class="business-bottom fl" id="shop_dialog_cancle">
            <a>取消</a>
        </div>
        <div class="business-bottom fr">
            <input type="button" id="shop_submit" value="确定"/>
            <label></label>
        </div>
    </div>
</div>
<!--更改自提点 e-->
<div class="sendgoodslist z-parkage-cont">
    <div class="w1224">
        <div class="top_leg p ma-to-20">
            <span class="paragraph fl"><i class="ddd"></i>送货清单</span>
            <?php if(\think\Request::instance()->param('action') != 'buy_now'): ?>
                <a class="newadd fr" href="<?php echo U('Home/Cart/index'); ?>">返回修改购物车</a>
            <?php endif; ?>
            <a class="newadd fr hover-y">
                <i class="las-warning"></i>价格说明
                <div class="pairgoods">
                    <p class="tit">因可能存在系统缓存、页面更新导致价格变动异常等不确定性情况出现，商品售价以本结算页商品价格为准；如有疑问，请您立即联系销售商咨询</p>
                </div>
            </a>
        </div>
        <!--商品列表-s-->
        <div class="shopping-listpay">
            <div class="goods-list-ri">
                <div class="goodsforma">
                    <div class="goods-last-suit ma-to-10 p">
                        <div class="goods-suit-tit" style="display: none">
                            <span class="sales-icon">订单优惠</span>
                            <strong id="store_order_prom_title"></strong>
                            <!--<span class="mlstran">&nbsp;返现：<em>￥20.00</em></span>-->
                        </div>
                    </div>
                    <ul class="buy-shopping-list">
                        <?php if(is_array($cartList) || $cartList instanceof \think\Collection || $cartList instanceof \think\Paginator): $i = 0; $__LIST__ = $cartList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cart): $mod = ($i % 2 );++$i;?>
                            <li>
                                <div class="goods-extra clearfix">
                                    <div class="p-img">
                                        <a target="_blank"
                                           href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$cart['goods_id'])); ?>">
                                            <img src="<?php echo goods_thum_images($cart['goods_id'],102,102,$cart[item_id]); ?>" alt="">
                                        </a>

                                        <div class="p-img-tips" id="goods_shipping_img_<?php echo $cart[goods_id]; ?>"
                                             style="display: none">暂无商品
                                        </div>
                                    </div>
                                    <div class="goods-msg clearfix">
                                        <div class="goods-msg-gel">
                                            <div class="tp-cart-goods-name">
                                                <a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$cart['goods_id'])); ?>"
                                                   target="_blank"><?php echo $cart['goods_name']; ?></a>
                                            </div>
                                            <ul class="tp-cart-goods-mes">
                                                <li class="tp-c-red1"><?php echo $cart[spec_key_name]; ?></li>
                                                <li>
                                                    <span>x<?php echo $cart['goods_num']; ?></span>
                                                    <span class="tp-bold tp-c-red1">￥ <?php echo $cart['member_goods_price']; ?></span>
                                                </li>
                                                <li>
                                                    <span class="p-state"
                                                          id="goods_shipping_title_<?php echo $cart[goods_id]; ?>">有货</span>
                                                    <span class="tp-c-red1 shipping_div"><?php echo $cart[goods][weight]; ?>g</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="msp_return">
                                        <p class="guarantee-item">
                                            <!--   <i class="return7"></i><span class="f_blue">支持七天无理由退货</span>
                                               <i class="return7 return7-dark"></i><span class="f_dark">不支持七天无理由退货</span>-->
                                        </p>
                                        <!--<p class="btn-check-date"><i class="yb-h-gwc return7"></i><span class="f_blue f-999">选延保</span></p>-->
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <!--商品列表-e-->
    </div>
</div>

<div class="addremark">
    <div class="w1224">
        <div class="top_leg p ma-to-20">
            <span class="paragraph fl"><i class="ddd"></i>发票信息</span>
        </div>
        <div class="invoice-cont ma-to-20" id="changeinfo">
            <span id="span1">普通发票（纸质）</span>
            <span id="span2">个人</span>
            <span id="span3">明细</span>
            <span id="span4" style="display:none">不开发票</span>
            <a onclick="invoice_dialog();" href="javascript:void(0);">修改</a>
        </div>
    </div>
</div>
<div class="usecou-step-tit" id="usecou-step-tit">
    <div class="w1224">
        <div class="top_leg p ma-to-20">
            <span class="paragraph usewhilejs fl"><i class="ddd"></i>使用优惠券/抵用</span>

            <p class="coupon-des">(可用优惠券<i class="coupon-num">0</i>张)</p>
        </div>
        <div class="coupon-detail">
            <div class="detail-title clearfix">
                <ul class="available-title">
                    <li class="active"><a href="javascript:;">可用优惠券 ( <i class="available-num">0</i> )</a></li>
                    <li><a href="javascript:;">不可用优惠券 ( <i class="unavailable-num">2</i> )</a></li>
                </ul>
                <!--<a class="for-details" href="javascript:;">了解优惠券使用规则</a>-->
            </div>
            <div class="detail-cont">
                <ul class="available">
                    <li>
                        <div class="coupon-list coupon-able-list p">
                            <?php if(is_array($userCartCouponList) || $userCartCouponList instanceof \think\Collection || $userCartCouponList instanceof \think\Paginator): $i = 0; $__LIST__ = $userCartCouponList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$userCoupon): $mod = ($i % 2 );++$i;if($userCoupon[coupon][able] == 1): ?>
                                    <div class="coupon-item" data-date="<?php echo $userCoupon[coupon][is_expiring]; ?>"
                                         data-coupon-id="<?php echo $userCoupon[id]; ?>"
                                         data-shopid="<?php echo $userCoupon[coupon][store_id]; ?>">
                                        <p class="direct"><?php echo $userCoupon[coupon][name]; ?></p>

                                        <p class="total"><sub>￥</sub><?php echo $userCoupon[coupon][money]; ?></p>

                                        <p class="des">满<sub>￥</sub><?php echo $userCoupon[coupon][condition]; ?>使用</p>

                                        <p class="shop-name des"><?php echo $userCoupon[coupon][store][store_name]; ?></p>

                                        <p class="time-over">
                                            有效期:<?php echo date('Y.m.d',$userCoupon[coupon][use_start_time]); ?>-<?php echo date('Y.m.d',$userCoupon[coupon][use_end_time]); ?></p>
                                        <i class="checked-ico"></i>
                                    </div>
                                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        <p class="coupon-list-des"><i class="ico-warn"></i>部分优惠券不可叠加使用</p>
                    </li>
                    <li>
                        <div class="coupon-list p">
                            <?php if(is_array($userCartCouponList) || $userCartCouponList instanceof \think\Collection || $userCartCouponList instanceof \think\Paginator): $i = 0; $__LIST__ = $userCartCouponList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$userCoupon): $mod = ($i % 2 );++$i;if($userCoupon[coupon][able] == 0): ?>
                                    <div class="coupon-item <?php if($userCoupon[coupon][is_expire] == 1): ?>coupon-invalid<?php else: ?>coupon-useless<?php endif; ?>"
                                         data-date="0" data-coupon-id="<?php echo $userCoupon[id]; ?>" data-shopid="1">
                                        <p class="direct"><?php echo $userCoupon[coupon][name]; ?></p>

                                        <p class="total"><sub>￥</sub><?php echo $userCoupon[coupon][money]; ?></p>

                                        <p class="des">满<sub>￥</sub><?php echo $userCoupon[coupon][condition]; ?>使用</p>

                                        <p class="shop-name des"><?php echo $userCoupon[coupon][store][store_name]; ?></p>

                                        <p class="time-over">
                                            有效期:<?php echo date('Y.m.d',$userCoupon[coupon][use_start_time]); ?>-<?php echo date('Y.m.d',$userCoupon[coupon][use_end_time]); ?></p>
                                        <i class="checked-ico"></i>
                                    </div>
                                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="score-list">
                <p class="item">
                    <label>
                        <input id="pay_points_checkbox" type="checkbox" <?php if($user['pay_points'] == 0): ?>disabled="disabled"<?php endif; ?>>
                        使用积分余额 :
                        <input id="pay_points" type="text" disabled="disabled"
                               onpaste="this.value=this.value.replace(/[^\d]/g,'')"
                               onkeyup="this.value = this.value.replace(/[^\d]/g, '')">
                        点（您当前积分<span><?php echo $user['pay_points']; ?></span>点）
                    </label>
                    <!--<a href="javascript:;">了解什么是积分？</a>-->
                </p>
                <p class="item">
                    <label>
                        <input id="user_money_checkbox" type="checkbox" <?php if($user['user_money'] == 0): ?>disabled="disabled"<?php endif; ?>>
                        使用账户余额 :
                        <input id="user_money" type="text" disabled="disabled"
                               onpaste="this.value=this.value.replace(/[^\d\.]/g,'')"
                               onkeyup="this.value = /^\d+\.?\d{0,2}$/.test(this.value) ? this.value : ''">
                        元（您当前余额<span><?php echo $user['user_money']; ?></span>元）
                    </label>
                </p>
                <p class="item">
                    <!--label>
                        <input type="checkbox" id="coupon_code_checkbox">
                        使用优惠券码 :
                        <input type="text" id="coupon_code" disabled="disabled">
                        <!--防止自动填充账户密码-->
                    <!--input type="text" style="width: 0;height:0;filter:'alpha(opacity=0)';opacity:0;">
                    <button class="exchange" id="coupon_exchange">
                        兑换
                    </button>
                </label-->
                </p>
                <p class="item">
                    <label>
                        支　付　密　码 :
                        <input type="password" id="pay_pwd">
                        <?php if(empty($user['paypwd'])): ?>
                            请先<a href="<?php echo U('User/paypwd'); ?>" style="color: #e23435;">设置支付密码</a>
                            <?php else: ?>
                            <a href="<?php echo U('User/paypwd'); ?>" target="view_window" style="color: #005ea7;">忘记支付密码？</a>
                        <?php endif; ?>
                    </label>
                </p>
            </div>
        </div>
    </div>
    <script>
        /*
         * 优惠券列表切换
         *1、优惠券数量: 根据列表里面的列表项的数量自动填充
         *2、优惠券选中：优惠券默认可以多选，当时同一种商品优惠券只选一种，默认根据其id判断，页面
         * 暂时用<div class="coupon-item coupon-invalid" data-date="0" data-shopid="1"> 中的
         * data-shopid="1"来表示id的值
         * 3、快过期优惠券和正常优惠券样式区别很大，还自带选中效果，如果是同一个一列表循环出来的
         * 数据需要带一快过期的标志过来页面暂时用<div class="coupon-item coupon-invalid"
         * data-date="0" data-shopid="1"> 中的 data-date="0" 来表示，值是1代表是快过期的				 *
         * */
        function couponChange() {
            //优惠券列表切换
            //优惠券数量
            var $_couponWrap = $('#usecou-step-tit');
            var couponNum1 = $_couponWrap.find('.available li').eq(0).find('.coupon-item').length;  //获取能使用的优惠券数量
            var couponNum2 = $_couponWrap.find('.available li').eq(1).find('.coupon-item').length;  //获取不能使用的优惠券数量
            $_couponWrap.find('.coupon-num').text(couponNum1);
            $_couponWrap.find('.available-num').text(couponNum1);
            $_couponWrap.find('.unavailable-num').text(couponNum2);
            $_couponWrap.find('.available li').eq(0).find('.coupon-item[data-date="1"]').addClass('coupon-invaliding');
            $_couponWrap.find('.available li').eq(0).unbind('click').on("click", '.coupon-item', function () {
                //点击可用优惠券事件
                $(this).toggleClass('checked');
                if ($(this).hasClass('checked')) {
                    var id = $(this).attr('data-shopid');
                    $(this).siblings().each(function () {  //同一个商品只能选一个优惠券
                        if ($(this).attr('data-shopid') == id) {
                            $(this).removeClass('checked')
                        }
                    })
                }
                $('#cart2_form').find("input[name^='coupon_id']").remove();
                if ($(this).hasClass('checked')) {
                    var store_coupon = $("input[name='coupon_id");
                    if (store_coupon > 0) {
                        store_coupon.attr('value', $(this).attr('data-coupon-id'));
                    } else {
                        var input = document.createElement('input');  //创建input节点
                        input.setAttribute('type', 'hidden');  //定义类型是文本输入
                        input.setAttribute('value', $(this).attr('data-coupon-id'));
                        input.setAttribute('name', "coupon_id");
                        document.getElementById('cart2_form').appendChild(input); //添加到form中显示
                    }
                }
                ajax_order_price();
            });
            //切换优惠券列表
            $_couponWrap.find('.available li').eq(0).show();
            $_couponWrap.find('.available-title li').click(function () {
                $(this).addClass('active').siblings().removeClass('active');
                $_couponWrap.find('.available li').eq($(this).index()).show().siblings().hide();
            })
            //数字输入框智能判断
            $_couponWrap.find('.score-list').find('.txt').blur(function () {
                var val = $(this).val();
                if (isNaN(val)) {
                    $(this).val('0');
                } else {
                    if (val < 0) {
                        $(this).val('0');
                    } else {
                        val = Math.round(val * 100) / 100;
                        $(this).val(val);
                    }
                }
            });
        }
        couponChange();
    </script>
</div>
<div class="order-summary p">
    <div class="w1224">
        <div class="statistic fr">
            <div class="list">
                <span><em class="ftx-01"><?php echo $cartGoodsTotalNum; ?></em> 件商品，总商品金额：</span>
                <em class="price">￥<?php echo $cartPriceInfo['total_fee']; ?></em>
            </div>
            <div class="list">
                <span>优惠券：</span>
                <em class="price" id="couponFee"> -￥0.00</em>
            </div>
            <div class="list">
                <span>优惠：</span>
                <em class="price" id="order_prom_amount"> -￥0.00</em>
            </div>
            <div class="list shipping_div">
                <span>运费：</span>
                <em class="price" id="postFee">￥0.00</em>
            </div>
            <div class="list">
                <span>余额支付：</span>
                <em class="price" id="balance">-￥0.00</em>
            </div>
            <div class="list">
                <span>积分支付：</span>
                <em class="price" id="pointsFee">-￥0.00</em>
            </div>
        </div>
    </div>
</div>
<div class="trade-foot p">
    <div class="w1224">
        <div class="trade-foot-detail-com">
            <div class="fc-price-info">
                <span class="price-tit">应付总额：</span>
                <span class="price-num" id="payables">￥0.00</span>
            </div>
            <div class="fc-consignee-info shipping_div">
                <span class="mr20">寄送至： <span id="address_info"></span></span>
                <span id="sendMobile">收货人：<span id="address_user"></span></span>
            </div>
        </div>
    </div>
</div>
<div class="submitorder_carpay p">
    <div class="w1224">
        <button type="submit" id="submit_order" class="checkout-submit" onclick="submit_order();">
            提交订单
        </button>
    </div>
</div>
<!--发票信息弹窗-s--->
<div class="ui-dialog infom-dia" id="invoice_dialog">
    <div class="ui-dialog-title">
        <span>发票信息</span>
        <a class="ui-dialog-close" id="invoice_dialog_close" title="关闭">
            <span class="ui-icon ui-icon-delete"></span>
        </a>
    </div>
    <div class="ui-dialog-content" style="height: 600px">
        <div class="invoice-dialog">
            <div class="draw-a-bill">
                <div class="tab-nav tab-nav-border  p" style="border-top:0px;">
                    <ul>
                        <div class="tab-nav-titles">
                            发票类型
                        </div>
                        <li>
                            <div class="item_select_t curtr">
                                <span>普通发票</span>
                                <b></b>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="zinvoice-tips zinvoice-conts">
                    <i>1</i>
                    <span class="tip-cont">开票金额不包优惠券和积分支付部分。
                        <!--<a target="_blank" class="newadd" href="">发票信息相关问题&gt;&gt;</a>--></span>
                    <i>2</i>
                    <span class="tip-cont">开单位抬头发票须填写纳税人识别号，以免影响报销</span>
                </div>
                <div class="ui-switchable-panel">
                    <div class="switchable-wrap" >
                        <div class="invoice_title p">
                            <span class="label">发票抬头：</span>
                            <div class="fl">
                                <a onclick="hidediv()"  class="setlesbtn setles-bg" id="personage">个人 <b></b></a>
                                <a onclick="togglediv()" class="setlesbtn" id="addinvoice" href="javascript:void(0);" >单位<b></b></a>
                            </div>
                        </div>
                        <div class="invoice_title p">

                            <div id="ratepaying" style="display:none" class="invoice_title ">
                                <div class="p">
                                    <span class="label">抬头内容&nbsp;&nbsp;&nbsp;：</span>
                                    <div class="fl">
                                        <input class="invoice_tt m-b-20" type="text" placeholder="请输入单位名称" value="" id="invoice_title"/>
                                    </div>
                                </div>
                                <div class="p">
                                    <span class="label">纳税人识别号：</span>
                                    <div class="fl">
                                        <input class="invoice_tt" placeholder="请输入纳税识别号" type="text" value="" id="taxpayer"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="invoice_title p">
                        <span class="label">发票内容：</span>
                        <input type="hidden" name="invoice_desc" id="invoice_desc" value="">

                        <div class="fl">
                            <div class="tab-nav p">
                                <ul id="invoice_class">
                                    <li>
                                        <div class="item_select_t curtr" id="detail_invoice">
                                            <span>商品明细</span>
                                            <b></b>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item_select_t" id="type_invoice">
                                            <span>商品类别</span>
                                            <b></b>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item_select_t" id="no_invoice">
                                            <span>不开发票</span>
                                            <b></b>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="invoice_title p">
                <div class="op-btns-warp">
                    <div class="op-btns  invoice_sendwithgift">
                        <a id="invoiceBtn" class="btn-1">保存</a>
                        <a onclick="$('#invoice_dialog_close').trigger('click');" class="btn-9">取消</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--发票信息弹窗-e--->
<div class="ui-mask" id="invoice_mask"></div>
<!--footer-s-->
<img class="rabbit" src="/public/images/qw.gif" alt="">

<div class="mask-filter-div"></div>
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
<!--footer-e-->
<script type="text/javascript">
    var last_select_address_arr,is_shipping_able = true,shop_list_data = [];
    $(document).ready(function () {
        var is_virtual = $("input[name='is_virtual']").val();
        if(is_virtual == 0){
            $('.no_shipping_div').hide();
            ajax_address();
        }else{
            $('.shipping_div').hide();
            $('.no_shipping_div').show();
            ajax_order_price();
        }
        get_province();
        self_motion_load();
    });
    ;
    (function ($) {
        $.fn.extend({
            donetyping: function (callback, timeout) {
                timeout = timeout || 1e3;
                var timeoutReference,
                    doneTyping = function (el) {
                        if (!timeoutReference)
                            return;
                        timeoutReference = null;
                        callback.call(el);
                    };
                return this.each(function (i, el) {
                    var $el = $(el);
                    $el.is(':input') && $el.on('keyup keypress', function (e) {
                        if (e.type == 'keyup' && e.keyCode != 8)
                            return;
                        if (timeoutReference)
                            clearTimeout(timeoutReference);
                        timeoutReference = setTimeout(function () {
                            doneTyping(el);
                        }, timeout);
                    }).on('blur', function () {
                        doneTyping(el);
                    });
                });
            }
        });
    })(jQuery);
    //积分选项框点击事件
    $(function () {
        $(document).on("click", '#pay_points_checkbox', function (e) {
            if ($(this).is(':checked')) {
                var input = $(this).parent().find("input[type='text']");
                input.removeAttr('disabled');
                $("input[name='pay_points']").attr('value', input.val());
                if (input.val() != '') {
                    ajax_order_price();
                }
            } else {
                $(this).parent().find("input[type='text']").attr('disabled', 'disabled');
            }
        })
        $(document).on("click", '#user_money_checkbox', function (e) {
            if ($(this).is(':checked')) {
                var input = $(this).parent().find("input[type='text']");
                input.removeAttr('disabled');
                $("input[name='user_money']").attr('value', input.val());
                if (input.val() != '') {
                    ajax_order_price();
                }
            } else {
                $(this).parent().find("input[type='text']").attr('disabled', 'disabled');
            }
        })
        //优惠券选项框选中事件
        $(document).on("click", '#coupon_code_checkbox', function (e) {
            if ($(this).is(':checked')) {
                $(this).parent().find("input[type='text']").removeAttr('disabled');
            } else {
                $(this).parent().find("input[type='text']").attr('disabled', 'disabled');
            }
        })
    })
    //积分输入框keyUp事件
    $(function () {
        $('#pay_points').donetyping(function () {
            if ($(this).parent().find("input[type='checkbox']").is(':checked')) {
                $("input[name='pay_points']").attr('value', $(this).val());
                ajax_order_price();
            }
        }, 500);
        $('#user_money').donetyping(function () {
            if ($(this).parent().find("input[type='checkbox']").is(':checked')) {
                $("input[name='user_money']").attr('value', $(this).val());
                ajax_order_price();
            }
        }, 500);
        $(document).on("click", '#coupon_exchange', function (e) {
            if ($('#coupon_code_checkbox').is(':checked')) {
                var coupon_code = $('#coupon_code').val();
                if (coupon_code != '') {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo U('Home/Cart/cartCouponExchange'); ?>",
                        dataType: 'json',
                        data: {coupon_code: coupon_code},
                        success: function (data) {
                            if (data.status == 1) {
                                window.location.reload();
                            } else {
                                layer.msg(data.msg, {icon: 2});
                            }
                        }
                    });
                }
            }
        })
    })
    //点击收货地址
    $(function () {
        $(document).on("click", '.addressItem .item_select_t', function (e) {
            $('#express_delivery').trigger('click');
            //如果本来没被选中
            if (!$(this).hasClass('curtr')) {
                $('.addressItem').find('.item_select_t').each(function () {
                    $(this).removeClass('curtr');
                })
                $(this).addClass('curtr');
                initAddress();
            }
            last_select_address_arr.province_id = $(this).data('province-id');
            last_select_address_arr.city_id = $(this).data('city-id');
            last_select_address_arr.district_id = $(this).data('district-id');
            last_select_address_arr.town_id = $(this).data('town-id');
            last_select_address_arr.longitude = $(this).data('longitude');
            last_select_address_arr.latitude = $(this).data('latitude');
            last_select_address_arr.consignee = $(this).parent().find('.addr-name').attr('title');
            last_select_address_arr.mobile = $(this).parent().find('.addr-tel').attr('title');
        })
    })
    //支付方式更多
    $(function () {
        $('.lastist').click(function () {
            if ($(this).hasClass('addlastist')) {
                $(this).removeClass('addlastist');
                $(this).find('span').text('更多');
                $(this).parents('.payment-list').find('.solwpah').removeClass('moreshow');
            } else {
                $(this).addClass('addlastist');
                $(this).find('span').text('收起');
                $(this).parents('.payment-list').find('.solwpah').addClass('moreshow');
            }
        })
    })

    //对应商品
    $(function () {
        $(document).on('click', '.hover-y', function () {
            if ($(this).find('.pairgoods').is(":hidden")) {
                $(this).find('.pairgoods').show();
            } else {
                $(this).find('.pairgoods').hide();
            }

        });
    })
    //使用优惠券导航切换
    $(function () {
        $('.usewhilejs').click(function () {
            $('.step-cont-virtual').toggle();
            $(this).toggleClass('edg180');
            if ($(this).hasClass('edg180')) {
                $('.hehr').hide();
            } else {
                $('.hehr').show();
            }
        })
        $('.order-virtual-tabs li').click(function () {
            $(this).addClass('curr').siblings().removeClass('curr');
            var le = $('.order-virtual-tabs li').index(this);
            $('.contac-virtuar').eq(le).show().siblings('.contac-virtuar').hide();
        })
    })

    /**
     * ajax 获取当前用户的收货地址列表
     */
    function ajax_address() {
        $.ajax({
            url: "<?php echo U('Home/Cart/ajaxAddress'); ?>", //+tab,
            success: function (data) {
                $("#ajax_address").empty().append(data);
                if (data != '') {
                    initAddress();
                }
            }
        });
    }
    //设置收货地址
    function initAddress() {
        var address_item = $('.addressItem').find('.curtr').parents('.addressItem');
        var address_id = address_item.attr('data-address-id');
        var address_name = address_item.find('.addr-name').attr('title');
        var address_tel = address_item.find('.addr-tel').attr('title');

        $('#address_info').html(address_item.find('.addr-info').attr('title'));
        if (address_name && address_tel) {
            $('#address_user').html(address_name + ' ' + address_tel);
        }
        $("input[name='address_id']").attr('value', address_id);
        if (address_item.length == 0) {
            $('#addNewAddress').trigger('click');
        } else {
            var address_item_select = address_item.find('.item_select_t');
            var province_id = address_item_select.data('province-id');
            var city_id = address_item_select.data('city-id');
            var district_id = address_item_select.data('district-id');
            var town_id = address_item_select.data('town-id');
            var longitude = address_item_select.data('longitude');
            var latitude = address_item_select.data('latitude');
            last_select_address_arr = new last_select_address(province_id,city_id,district_id,town_id,address_name,address_tel,longitude,latitude);
            get_shop_list(province_id, city_id, district_id, '', longitude, latitude);
            ajax_order_price(); // 计算订单价钱
        }
    }

    /**
     * 获取订单价格
     */
    function ajax_order_price() {
        $.ajax({
            type: "POST",
            url: "<?php echo U('Home/Cart/cart3'); ?>",
            dataType: 'json',
            data: $('#cart2_form').serialize(),
            success: function (data) {
                is_shipping_able = true;
                if(data.hasOwnProperty('code') && data.code == 301){
                    is_shipping_able = false;
                }
                door_to_door_hide_or_show();
                if (data.status != 1) {
                    layer.msg(data.msg, {icon: 2, time: 2000},function(){
                        // 登录超时
                        if (data.status == -100) {
                            location.href = "<?php echo U('Home/User/login'); ?>";
                        }
                    });
                    // 显示商品有货无货配送
                    for (v in data.result.goods_shipping) {
                        if (data.result.goods_shipping[v] != '' && data.result.goods_shipping[v] != null) {
                            if (data.result.goods_shipping[v].status == 1) {
                                goods_shipping(v, true);
                            } else {
                                goods_shipping(v, false);
                            }
                        }
                    }
                    return false;
                }
                $("#postFee").text('￥' + data.result.shipping_price); // 物流费
                if (data.result.coupon_price == null) {
                    $("#couponFee").text('-￥0');// 优惠券
                } else {
                    $("#couponFee").text('-￥' + data.result.coupon_price);// 优惠券
                }
                $("#balance").text('-￥' + data.result.user_money);// 余额
                $("#pointsFee").text('-￥' + data.result.integral_money);// 积分支付
                $("#payables").text('￥' + data.result.order_amount);// 应付
                $("#order_prom_amount").text('-￥' + data.result.order_prom_amount);// 订单 优惠活动
            }
        });
    }

    function submit_order() {
        $('#submit_order').attr('disabled','disabled');
        $('.user_note_txt').each(function () {
            $("input[name='user_note']").attr('value', $(this).val());
        })
        var invoice_desc = $("#invoice_desc").val();
        $.ajax({
            type: "POST",
            url: "<?php echo U('Home/Cart/cart3'); ?>", //+tab,
            data: $('#cart2_form').serialize() + "&act=submit_order&invoice_desc="+invoice_desc, //
            dataType: "json",
            success: function (data) {
                // 当前人数过多 排队中
                if (data.status == -99) {
                    $('.mask-filter-div').show();
                    $('.rabbit').show();
                    setTimeout("submit_order()", 5000);
                    return false;
                } else {
                    // 隐藏排队
                    $('.mask-filter-div').hide();
                    $('.rabbit').hide();
                }

                if (data.status != 1) {
                    $('#submit_order').attr('disabled',false);
                    layer.msg(data.msg, {
                        icon: 2,
                        time: 1000 //2秒关闭（如果不配置，默认是3秒）
                    });
                    // 登录超时
                    if (data.status == -100) {
                        location.href = "<?php echo U('Home/User/login'); ?>";
                    }
                    return false;
                }
                layer.msg('订单提交成功!', {
                    icon: 1, // 成功图标
                    time: 2000 //2秒关闭（如果不配置，默认是3秒）
                }, function () { // 关闭后执行的函数
                    location.href = "/index.php?m=Home&c=Cart&a=cart4&order_sn=" + data.result; // 跳转到结算页
                });
            }
        });
    }
    //设置商品有货无货
    function goods_shipping(goods_id, is_have) {
        if (is_have == true) {
            $('#goods_shipping_img_' + goods_id).hide();
            $('goods_shipping_title_' + goods_id).removeClass('red').text('有货');
        } else {
            $('#goods_shipping_img_' + goods_id).show();
            $('#goods_shipping_title_' + goods_id).addClass('red').text('无货');
        }
    }

    $(document).on('keyup', '#pay_pwd', function () {
        var pay_pwd = md5($("input[name='auth_code']").val() + this.value);
        $('input[name="pay_pwd"]').val(pay_pwd);
    });

    //收货人信息
    $(function () {
        $(document).on("click", '.addr-switch', function (e) {
            if ($(this).hasClass('switch-on')) {
                $(this).removeClass('switch-on');
                $(this).find('span').text('更多地址');
                $('.consignee-list').css('height', '42px');
                var addressItem = $('.consignee-list').find('.curtr').parents('.addressItem');
                $('.consignee-list').find('ul').prepend(addressItem.clone(true));
                addressItem.remove();
            } else {
                $(this).addClass('switch-on');
                $(this).find('span').text('收起地址');
                $('.consignee-list').css('height', 'inherit');
            }
        })
    })
    //上门自提按钮显示
    function door_to_door_hide_or_show(){
        var door_to_door_div = $('#door_to_door');
        if(is_shipping_able == true && shop_list_data.length > 0){
            door_to_door_div.show();
            $('#door_to_door_modes').show();
        }else{
            door_to_door_div.hide();
            $('#door_to_door_modes').hide();
        }
        if($("#express_delivery").hasClass('z-parkage-li')){
            $('#door_to_door_modes').hide();
        }
    }
    /**
     * 获取自提点
     */
    function get_shop_list(province_id, city_id, district_id, shop_address, longitude, latitude) {
        $.ajax({
            type: "POST",
            url: "<?php echo U('Home/Api/shop'); ?>",
            dataType: 'json',
            data: {
                province_id: province_id,
                city_id: city_id,
                district_id: district_id,
                shop_address: shop_address,
                longitude: longitude,
                latitude: latitude
            },
            success: function (data) {
                if(data.result.length > 0){
                    shop_list_data = data.result;
                    set_shop_list();
                }else{
                    shop_list_data = [];
                }
                door_to_door_hide_or_show();
            }
        });
    }
    function set_shop_list() {
        var shop_html = '';
        for (var i = 0; i < shop_list_data.length; i++) {
            shop_html += '<div class="business-list p" data-shop-id="'+shop_list_data[i].shop_id+'"> ' +
                '<div class="business-cheng fl" data-address="'+shop_list_data[i].area_list[0].name+shop_list_data[i].area_list[1].name+shop_list_data[i].area_list[2].name+ shop_list_data[i].shop_address +'" ' +
                'data-phone="'+shop_list_data[i].phone+'" data-work-day="'+shop_list_data[i].work_day+'" data-work-time="'+shop_list_data[i].work_time+'"' +
                ' data-longitude="'+shop_list_data[i].longitude+'" data-latitude="'+shop_list_data[i].latitude+'"> ' +
                '<label></label></div> <div class="business-cont fl"> <div class="business-title">' + shop_list_data[i].shop_name + ' </div> ' +
                '<div class="business-dev">' + shop_list_data[i].shop_address + ' </div> <div class="business-honp">电话：' + shop_list_data[i].phone + ' </div> </div> ' +
                '<div class="business-distance">距离:<span>' + shop_list_data[i].distance_text + '</span> </div> <div class="business-icon">距离最近</div> </div>';
        }
        $("#shop_list").empty().append(shop_html).find('.business-list').eq(0).children(".business-icon").show();
    }
    function initShop() {
        var shop_list = $("#shop_list");
        if(shop_list.find('class-labels').length == 0){
            shop_list.find('label').eq(0).trigger('click');
        }
        initShopInfo();
    }
    function initShopInfo() {
        var consignee = $("input[name='consignee']");
        var mobile = $("input[name='mobile']");
        if(consignee.val() == ''){
            consignee.val(last_select_address_arr.consignee);
            $('#consignee').val(last_select_address_arr.consignee);
        }
        if(mobile.val() == ''){
            mobile.val(last_select_address_arr.mobile);
            $('#mobile').val(last_select_address_arr.mobile);
        }
        var shop_label = $('.class-labels');
        $("input[name='shop_id']").val(shop_label.parents('.business-list').data('shop-id'));
        $('#shop_address_desc').html(shop_label.parents('.business-list').find('.business-title').html() + '  ' +shop_label.parent().data('address'));
        $('#shop_mobile').html(shop_label.parents('.business-list').find('.business-honp').html());
        $('#shop_distance').html(shop_label.parents('.business-list').find('.business-distance span').html());
        if(shop_label.parents('.business-list').find('.business-icon').is(":visible")){
            $("#distance_near").show();
        }else{
            $("#distance_near").hide();
        }
    }
    /**
     * 存放最后一次选择的地址
     */
    function last_select_address(province_id, city_id, district_id, town_id, consignee, mobile, longitude, latitude) {
        this.province_id = province_id;
        this.city_id = city_id;
        this.district_id = district_id;
        this.town_id = town_id;
        this.consignee = consignee;
        this.mobile = mobile;
        this.longitude = longitude;
        this.latitude = latitude;
    }
    //新增编辑地址
    $(function () {
        //新增编辑弹窗事件
        $(document).on("click", '.address_item', function (e) {
            var dh = $(document).height();
            var dw = $(document).width();
            $('#address_dialog_mask').height(dh).width(dw).show();
            $('#address_dialog').show();
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
        $(document).on("click", '#address_dialog_close', function (e) {
            $('#address_dialog_mask').hide();
            $('#address_dialog').hide();
            $('.err').hide();
        })
        //地址提交
        $(document).on("click", '#address_submit', function (e) {
            $.ajax({
                type: "POST",
                url: "<?php echo U('Home/User/addressSave'); ?>",
                data: $('#address_form').serialize(),
                dataType: 'json',
                success: function (data) {
                    if (data.status == 1) {
                        $('#address_dialog_close').trigger('click');
                        ajax_address();
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
        //设置默认地址
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
        //删除收货地址
        $(document).on("click", '.address_delete', function (e) {
            var address_id = $(this).data('address-id');
            $.ajax({
                type: "POST",
                url: "<?php echo U('Home/User/addressDelete'); ?>",
                data: {address_id: address_id},
                dataType: 'json',
                success: function (data) {
                    if (data.status == 1) {
                        ajax_address();
                    } else {
                        layer.open({icon: 2, content: data.msg, time: 1000});
                    }
                }
            });
        })
    })
    //自提点
    $(function () {
        //更换自提点
        $(document).on("click", '#replace_shop', function (e) {
            $(".z-instead-bg").show();
            $(".z-instead-cont").show();
            widget_area(last_select_address_arr.province_id,last_select_address_arr.city_id,last_select_address_arr.district_id,last_select_address_arr.town_id,'address_province','address_city','address_district');
            show_map();
        })
        //点击快递配送
        $(document).on("click", '#express_delivery', function (e) {
            if(!$(this).hasClass('z-parkage-li')){
                $('#door_to_door').removeClass("z-parkage-li");
                $(this).addClass("z-parkage-li");
                $('#door_to_door_modes').hide();
                $('#express_delivery_modes').show();
                $("input[name='shop_id']").val('');
                $('.addressItem').find('.item_select_t').eq(0).trigger('click');
            }
        })
        //点击上门自提
        $(document).on("click", '#door_to_door', function (e) {
            if(!$(this).hasClass('z-parkage-li')){
                $('#express_delivery').removeClass("z-parkage-li");
                $(this).addClass("z-parkage-li");
                $('#express_delivery_modes').hide();
                $('#door_to_door_modes').show();
                $('.addressItem').find('.item_select_t').removeClass('curtr');
                initShop();
                ajax_order_price();
            }
        })
        //关闭自提点弹窗
        $(document).on("click", '#shop_dialog_close', function (e) {
            $(".z-instead-bg").hide();
            $(".z-instead-cont").hide();
        })
        //点击自提点弹窗确认
        $(document).on("click", '#shop_submit', function (e) {
            var shop_label = $('.class-labels');
            if(shop_label.length == 0){
                layer.open({icon: 2, time: 2000, content: "请选择自提点"});
            }
            initShopInfo();
            $('#shop_dialog_close').trigger('click');
        })
        //点击自提点弹窗取消
        $(document).on("click", '#shop_dialog_cancle', function (e) {
            $('#shop_dialog_close').trigger('click');
        })
        //点击搜索
        $(document).on("click", '#search_shop', function (e) {
            var province_id = $("#address_province");
            var city_id = $("#address_city");
            var district_id = $("#address_district");
            var shop_address = $("#shop_address").val();
            if(province_id.val() == 0){
                layer.open({icon:2,time:2000,content:"请选择省份"});
                return;
            }
            if(city_id.val() == 0){
                layer.open({icon:2,time:2000,content:"请选择市"});
                return;
            }
            if(district_id.val() == 0){
                layer.open({icon:2,time:2000,content:"请选择镇/区"});
                return;
            }
            if(shop_address == ''){
                layer.open({icon:2,time:2000,content:"请填写地址或者店名"});
                return;
            }
            get_shop_list(province_id.val(), city_id.val(), district_id.val(), shop_address, last_select_address_arr.longitude, last_select_address_arr.latitude);
        })
        //点击自提点
        $(document).on("click", ".business-list label", function (e) {
            $(".select-business-list .business-list label").removeClass("class-labels");
            $(this).addClass("class-labels");
            show_map();
        })
        //自提点联系人和联系方式
        $(document).on('keyup', '#mobile', function () {
            $('input[name="mobile"]').val(this.value);
        })
        $(document).on('keyup', '#consignee', function () {
            $('input[name="consignee"]').val(this.value);
        })
    })
    var map;
    function show_map()
    {

        var shop_label = $('.class-labels');
        var content = '<div style="margin:0;line-height:20px;padding:2px;">' +
            '<div class="map-dizs p"><i class="fl"></i><span class="fl"> '+shop_label.parent().data("address")+'</span></div>' +
            '<div class="ipone-devs p"><i class="fl"></i><span class="fl">'+shop_label.parent().data("phone")+'</span></div>' +
            '<div class="map-sjs p"><i class="fl"></i> <span>'+shop_label.parent().data("work-day")+'<span></div><div>' +
            '<div style="padding-left: 24px;color:#333;font-size: 13px;">'+shop_label.parent().data("work-time")+'</div>' +
            '</div>';
        var lnt = shop_label.parent().data('longitude');
        var lat = shop_label.parent().data('latitude');
        map = new BMap.Map("container");//在百度地图容器中创建一个地图
        var poi = new BMap.Point(lnt, lat);//定义一个中心点坐标
        map.centerAndZoom(poi, 17);//设定地图的中心点和坐标并将地图显示在地图容器中
        //创建检索信息窗口对象
        var searchInfoWindow = new BMapLib.SearchInfoWindow(map, content, {
            title : shop_label.parents('business-list').find('.business-title').html(),      //标题
            width  :240,             //宽度
            height : 140,              //高度
            enableAutoPan : true,     //自动平移
            searchTypes   :[
            ]
        });
        //创建检索信息窗口对象
        var marker = new BMap.Marker(poi); //创建marker对象
        marker.enableDragging(); //marker可拖拽
        searchInfoWindow.open(marker);
        map.addOverlay(marker); //在地图中添加marker
        map.enableScrollWheelZoom(true);
    }
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
                    $('#address_province').html(option_html);
                } else {
                    layer.msg(data.msg, {icon: 2});
                }
            }
        });
    }
</script>
<script type="text/javascript">
    //发票相关js效果
    function hidediv() {
        $("#addinvoice").removeClass("setles-bg");
        $("#personage").addClass("setles-bg");
        $('#adddiv').hide();
        $("#ratepaying").hide();
    }
    function togglediv() {
        $("#addinvoice").addClass("setles-bg");
        $("#personage").removeClass("setles-bg");
        $('#adddiv').toggle();
        $("#ratepaying").toggle();
    }
    $(document).on("click","#invoice_class li",function  () {
        $("#invoice_class li").find(".item_select_t ").removeClass("curtr");
        $(this).children(".item_select_t ").addClass("curtr");
        $("#invoice_desc").val($(this).find('span').text());
        if($("#no_invoice").hasClass("curtr")){
            $(".switchable-wrap").hide();
        }else {
            if($("#personage").hasClass("setles-bg")){
                $("#ratepaying").hide();
            }else{
                $("#ratepaying").show();
            }
            $(".switchable-wrap").show();
        }
    });

    //发票弹窗
    function invoice_dialog() {
        var dh = $(document).height();
        var dw = $(document).width();
        $('#invoice_mask').height(dh).width(dw);
        $('#invoice_dialog').show();
        $('#invoice_mask').show();
        self_motion_load();
    }
    function self_motion_load() {
        $.get("<?php echo U('Cart/invoice'); ?>", function (json) {
            var data = eval("(" + json + ")");
            if (data.status > 0) {
                if (data.result.invoice_title != "个人") {
                    $('#order_invoice_title').val(data.result.invoice_title);
                    $("#order_taxpayer").val(data.result.taxpayer);
                    $('#invoice_title').val(data.result.invoice_title);
                    $("#invoice_desc").val(data.result.invoice_desc);
                    $("#taxpayer").val(data.result.taxpayer);
                    $('#adddiv').show();
                    $("#addinvoice").addClass("setles-bg");
                    $("#personage").removeClass("setles-bg");
                    $("#ratepaying").css("display","block");
                }
                if (data.result.invoice_title == "个人") {
                    $("#addinvoice").removeClass("setles-bg");
                    $("#personage").addClass("setles-bg");
                    $("#ratepaying").css("display","none");
                }
                if (data.result.invoice_desc == "不开发票") {
                    $('#order_invoice_title').val("");
                    $("#order_taxpayer").val("");
                    $(".switchable-wrap").hide();
                    $("#span1,#span2,#span3").hide();
                    $("#span4").show();
                    $("#invoice_class li").find(".item_select_t ").removeClass("curtr");
                    $("#no_invoice").addClass("curtr");
                } else {
                    if(data.result.invoice_desc == "商品明细"){
                        $("#invoice_class li").find(".item_select_t ").removeClass("curtr");
                        $("#detail_invoice").addClass("curtr");
                    }else{
                        $("#invoice_class li").find(".item_select_t ").removeClass("curtr");
                        $("#type_invoice").addClass("curtr");
                    }
                    if (data.result.invoice_title != "") {
                        $('#order_invoice_title').val(data.result.invoice_title);
                        $("#order_taxpayer").val(data.result.taxpayer);
                        $('#invoice_desc').val(data.result.invoice_desc);
                        $('#span2').text(data.result.invoice_title);
                        $('#span3').text(data.result.invoice_desc);
                        $("#span4").hide();
                        $("#span1,#span2,#span3").show();
                    }
                    $("#invoice_title").css({"border": "2px solid #e4393c"});
                    $(".switchable-wrap").show();
                }
            } else {
                $('#order_invoice_title').val("");
                $("#order_taxpayer").val("");
                $("#span1,#span2,#span3").hide();
                $("#span4").show();
            }
        });
    }

    //关闭发票弹窗
    $(function () {
        $('#invoice_dialog_close').click(function () {
            $('#invoice_dialog').hide();
            $('#invoice_mask').hide()
        })
    });

    //保存发票
    $(function () {
        $(document).on('click', '#invoiceBtn', function () {
            save_invoice() && $('#invoice_dialog_close').trigger('click');
        });
    });

    function save_invoice() {
        var invoice_title = $("#personage").val();
        var invoice_desc = $("#invoice_desc").val();
        var data = {invoice_title: "个人", invoice_desc: invoice_desc};
        if (!$('#ratepaying').is(":hidden") && invoice_desc != "不开发票") {
            invoice_title = $("#invoice_title").val();
            if (invoice_title.length == 0) {
                layer.msg("发票抬头不能为空", {icon: 2});
                return false;
            }
            var taxpayer = $("#taxpayer").val();
            if ((taxpayer.length == 15) || (taxpayer.length == 18) || (taxpayer.length == 20)) {
            } else {
                layer.msg("请输入正确的纳税人识别号！", {icon: 2});
                return;
            }
            var addressCode = taxpayer.substring(0, 6);
            // 校验地址码
            var check = checkAddressCode(addressCode);
            if (!check) {
                layer.msg("请输入正确的纳税人识别号(地址码)！", {icon: 2});
                return;
            }
            // 校验组织机构代码
            var orgCode = taxpayer.substring(6, 9);
            check = orgcodevalidate(orgCode);
            if (!check) {
                layer.msg("请输入正确的纳税人识别号(组织机构代码) ！", {icon: 2});
                return;
            }
            $('#order_taxpayer').val(taxpayer);
            $('#order_invoice_title').val(invoice_title);
            var data = {invoice_title: invoice_title, taxpayer: taxpayer, invoice_desc: invoice_desc};
        } else {
            $('#order_taxpayer').val("");
            $('#order_invoice_title').val("个人");
        }
        $.post("<?php echo U('Cart/save_invoice'); ?>", data, function (json) {
            var data = eval("(" + json + ")");
            if(data.status==1){
                if (invoice_desc == "不开发票") {
                    $('#order_invoice_title').val("");
                    $('#order_taxpayer').val("");
                    $("#span1,#span2,#span3").hide();
                    $("#span4").show();
                } else {
                    $('#span2').text($('#order_invoice_title').val());
                    $('#span3').text(invoice_desc);
                    $("#span4").hide();
                    $("#span1,#span2,#span3").show();
                }
                layer.open({icon: 1, content:'保存成功', time: 1000});
            }else{
                layer.open({icon: 2, content: '保存失败', time: 1000});
            }
        });
        return true;
    }

    $(document).on('keyup', '#phone', function() {
        $('input[name="mobile"]').val(this.value);
    })
</script>
</body>
</html>