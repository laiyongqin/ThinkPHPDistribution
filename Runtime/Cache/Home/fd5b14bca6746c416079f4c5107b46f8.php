<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo Title();?></title>
<script type='text/javascript' src='__PUBLIC__/Home/js/jquery.js'></script>
<link href="__PUBLIC__/Home/css/style.css" type="text/css" rel="stylesheet" />
<script type='text/javascript' >
	function Delete(Uid_Pid,Sum_Pid){
		var Uid=$(Uid_Pid).val(); //ID
		var Sum=$(Sum_Pid).val(); //New Sum
		$.post("<?php echo U('Home/Cart/Delete/');?>",{id:Uid,newSum:Sum},function(result){
			if(result=='True'){
				window.location.href="<?php echo U('Home/Cart/Cart/');?>";
			}
		});
		
	}

	function EditCart(Uid_Pid,Sum_Pid){
		var Uid=$(Uid_Pid).val(); //ID
		var Sum=$(Sum_Pid).val(); //New Sum
		$.post("<?php echo U('Home/Cart/EditCart/');?>",{id:Uid,newSum:Sum},function(result){
			if(result=='True'){

				window.location.href="<?php echo U('Home/Cart/Cart/');?>";

			}
		});
		
	}
</script>
</head>

<body>
<div class="head_bg">
<div class="head">
	<div class="logo"><img src="__PUBLIC__/Home/images/logo.jpg" width="220" height="85" /></div>
	<div class="head_tel">
		<p><span style="font-size:14px;">服务热线：</span>86-010-51297708</p>
	</div>
</div>
</div>

<div class="main">
	<div class="d_nav">您确认兑换的礼品</div>
<div class="lp_table">



<form action="<?php echo U('Home/Play/Play');?>" method='POST' name='form1'>
<table width="998" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td width="108" class="sp_n">商品编号</td>
		<td  class="sp_n">商品名称</td>
		<td  class="sp_n">描述</td>
		<td width='100' class="sp_n">单价</td>
		<td width='100' class="sp_n">数量</td>
		<td width='100' class='sp_n'>总价</td>
		<td width='180' class='sp_n'>合计(总金额)</td>
		<td width='100' class='sp_n'>操作</td>
	</tr>

	<?php if(is_array($CartList)): $i = 0; $__LIST__ = $CartList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
		<td style="border-right:1px solid #e8e8e8;">
			<?php echo ($vo["id"]); ?>
			<input type="hidden" value='<?php echo ($vo["id"]); ?>' id='SP_ID_<?php echo ($vo["id"]); ?>' />
		</td>
		<td width="107"><img src="<?php echo ($vo["img"]); ?>" width="45" height="40" /></td>
		<td width="783" style="text-align:left;">
			<?php echo ($vo["title"]); ?>
		</td>
		<td>
			<?php echo ($vo["Pre"]); ?>元
			<input type="hidden" name='Pre[]' value='<?php echo ($vo["Pre"]); ?>' />
		</td>
		<td>
			<input type="text" value='<?php echo ($vo["num"]); ?>' id='goodsnum_new_<?php echo ($vo["id"]); ?>' style='width:20px' />
		</td>
		<td><?php echo ($vo["Total"]); ?>元</td>
		<td></td>
		<td style="border-left:1px solid #e8e8e8;">
			<a href="javascript:void(0);" onClick='Delete("#SP_ID_<?php echo ($vo["id"]); ?>","#goodsnum_new_<?php echo ($vo["id"]); ?>");'>删除</a>

			<a href="javascript:void(0);" onClick='EditCart("#SP_ID_<?php echo ($vo["id"]); ?>","#goodsnum_new_<?php echo ($vo["id"]); ?>");'>修改</a>
		</td>


	</tr><?php endforeach; endif; else: echo "" ;endif; ?>

	<tr>
		<td style="border-right:1px solid #e8e8e8;">
			
		</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td><?php echo ($AllTotal); ?>元</td>
		<td style="border-left:1px solid #e8e8e8;"></td>
	</tr>
</table>

</div>

<div class="lp_b">
<table width="1000" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td width="671"><a href="<?php echo U('Home/Home/AllData/');?>" title='确认,修改购物车'><img src="__PUBLIC__/Home/images/qr.jpg" width="61" height="21" /></a></td>
		<td width="329"><img src="__PUBLIC__/Home/images/tel.jpg" width="329" height="35" /></td>
	</tr>
</table>
</volist>
</form>

</div>
</div>

<div class="bottom_bg">
	<div class="bottom">
		<p> <a href="#">北京网站建设：联合易网</a> <br />
Copyright ©2013 www. ruidexuan.com All Reserved. &nbsp;&nbsp;|&nbsp;&nbsp;京ICP备01028629号-1</p>
	</div>
</div>

</body>
</html>