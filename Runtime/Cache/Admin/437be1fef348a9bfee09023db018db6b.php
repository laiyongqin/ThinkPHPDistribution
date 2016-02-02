<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>后台管理系统</title>
<meta name="keywords" content="">
<meta name="description" content="">

<link rel="stylesheet" type="text/css" href="__PUB__style/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="__PUB__style/bootstrap-responsive.min.css">
<style type="text/css">
.input-xxlarge{ margin-bottom: 0px;}
.long{ width: 530px;}
.input-xxlarge1 {margin-bottom: 0px;}
</style>
<script type="text/javascript" src="__PUB__js/bootstrap.min.js"></script>
<script type="text/javascript" src="__PUB__js/jquery.min.js"></script>
<script type="text/javascript" src="__PUB__js/globe.js"></script>
<link rel="stylesheet" href="__ROOTPUB__kindeditor/themes/default/default.css" />
<script charset="utf-8" src="__ROOTPUB__kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="__ROOTPUB__kindeditor/lang/zh_CN.js"></script>

<script>
        KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id');
        });
		
		function Submit(){
			editor.sync();
			html = $('#editor_id').val();
			$("#texts").val(html);
			
			document.form1.submit();
			
			
		}
		
</script>

<script>
KindEditor.ready(function(K){
		var editor1 = K.editor({
			uploadJson : "<?php echo U('Kind/upload_json');?>",
			fileManagerJson : "<?php echo U('Kind/file_manager_json');?>",
			allowFileManager : true
		});
		K(".edit_image").click(function(){
			var img_id=jQuery(this).attr("varid");
			editor1.loadPlugin("image", function(){
				editor1.plugin.imageDialog({
					imageUrl : K("#"+img_id).val(),
					clickFn : function(url, title, width, height, border, align) {
						K("#"+img_id).val(url);
						jQuery("."+img_id).attr('src',url);
						editor1.hideDialog();
					}
				});
			});
		});

});


</script>
</head>
<body style="margin: 10px 0px;">
<div style="margin:0 auto; width:98%;">

	<table class="table table-condensed table-bordered table-hover">
	<tbody>
		<?php if(is_array($Info)): $i = 0; $__LIST__ = $Info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			<th colspan="3" style="text-align:center;">详细信息</th>
			
		</tr>

		
	
		
		<tr>
			<td width="10%" style="text-align:center;">收货人：</th>
			
			<td width="30%">
			
				<input type='text' name='title' value='<?php echo ($vo["Name"]); ?>'/>
			
			</th>
			
		</tr>
		
		<tr>
			<td style="text-align:center;">固定电话:</td>
			<td><input type='text' name='model' value='<?php echo ($vo["Call"]); ?>'/></td>
		</tr>
		<tr>
			<td style="text-align:center;">手机:</td>
			<td><input type='text' name='mall' value='<?php echo ($vo["Phone"]); ?>'/></td>
		</tr>
		<tr>
			<td style="text-align:center;">传真:</td>
			<td>
			
			<input type='text' name='Netfile' value='<?php echo ($vo["CallTrue"]); ?>' id='NetWork'  />
		
			</td>
		
		</tr>
  
	<tr>
			<td style="text-align:center;">邮件：</td>
			<td>
				<input type="text" name="upfile" value='<?php echo ($vo["Mail"]); ?>' id="Host" >
			</td>
	</tr>
	
	<tr>
			<td style="text-align:center;">QQ:</td>
			<td>
				<input type="text" name="Size" id="Host" value='<?php echo ($vo["Tm"]); ?>' >
			</td>
		</tr>
		
		<tr>
			<td style="text-align:center;">地址:</td>
			<td>
				<input type="text" name="Color" id="Host" value='<?php echo ($vo["Address"]); ?>'>
			</td>
		</tr>
		
		<tr>
			<td style="text-align:center;">订单号：</td>
			<td>
				<input type="text" name="CZ" id="Host" value='<?php echo ($vo["ordernum"]); ?>' >
			</td>
		</tr>

		<tr>
			<td style="text-align:center;">消费金额:</td>
			<td>
				<input type="text" name="CZ" id="Host" value='<?php echo ($vo["countpre"]); ?>' >[<small style='color:red'>元</small>]
			</td>
		</tr>
		<tr>
			<td style="text-align:center;">分销商:</td>
			<td>
				<input type="text" name="CZ" id="Host" value='<?php echo ($vo["username"]); ?>' >
			</td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		
		<tr>
			<table class="table table-condensed table-bordered table-hover">
				<tbody>
					<tr>
						<td>商品名称</td>
						<td>颜色</td>
						<td>尺寸</td>
						<td>数量</td>
					</tr>
					<?php if(is_array($SP_Info)): $i = 0; $__LIST__ = $SP_Info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
						<td><?php echo ($vo["title"]); ?></td>
						<td><?php echo ($vo["Color"]); ?></td>
						<td><?php echo ($vo["Size"]); ?></td>
						<td><?php echo ($vo["goodsnum"]); ?></td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>

		</tr>
	</form>
	</tbody>
	</table>

</div>


</body>
</html>