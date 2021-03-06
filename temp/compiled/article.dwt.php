<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body style="font-family: Helvetica, Tahoma, Arial, 'Microsoft YaHei', '微软雅黑', SimSun, '宋体', Heiti, '黑体', sans-serif;background-color: #ecedee;font-size: 16px;">

<div id="cat_name" style="display:none;"><?php echo $this->_var['article']['cat_name']; ?></div>
<div id="title" style="display:none;"><?php echo $this->_var['article']['title']; ?></div>
<div id="con" style="display:none;"><?php echo $this->_var['article']['content']; ?></div>
<div id="article_type" style="display:none;"><?php echo $this->_var['article_type']; ?></div>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<?php if ($this->_var['article_type'] == 1): ?>
	<div id="at_1" class="block clearfix">
		<?php echo $this->_var['article']['content']; ?>
	</div>
<?php endif; ?>

<?php if ($this->_var['article_type'] == 2): ?>
	<div style="margin-bottom: 20px;width: 1100px;margin-left: auto;margin-right: auto;">
		<div style="height: 50px;line-height: 50px;font-size: 14px;color: #666;">
			<a href="index.php" style="color: #666;text-decoration: none;line-height: 50px;font-size: 14px;">政金网</a>
			   >   新手指南
		</div>
		<div style="height: 250px;background: url(themes/ecmoban_jumei/images/guideline-head.png) no-repeat center center;">
		</div>
		<div style="background-color: #fff;border: 1px solid #e1e1e1;border-radius: 2px;">
			<div style="text-align: center;">
				<a href="article.php?id=36" style="<?php if ($this->_var['article_small_type'] == 1): ?>color: #ff5230;<?php else: ?>color: #666;<?php endif; ?>font-size: 24px;position: relative;padding-left: 106px;display: inline-block;height: 58px;line-height: 58px;margin: 0 75px;">
					<em style="<?php if ($this->_var['article_small_type'] == 1): ?>background-color: #ff5230;<?php else: ?>background-color: #c3c4c4;<?php endif; ?>width: 91px;height: 60px;line-height: 30px;border-radius: 50%;position: absolute;text-align: center;font-size: 24px;font-style: italic;color: #fff;top: -35px;left: 0;padding-top: 31px;">
						PART<br>1
					</em>关于我们
				</a>
				<a href="article.php?id=72" style="<?php if ($this->_var['article_small_type'] == 2): ?>color: #ff5230;<?php else: ?>color: #666;<?php endif; ?>font-size: 24px;position: relative;padding-left: 106px;display: inline-block;height: 58px;line-height: 58px;margin: 0 75px;">
					<em style="<?php if ($this->_var['article_small_type'] == 2): ?>background-color: #ff5230;<?php else: ?>background-color: #c3c4c4;<?php endif; ?>width: 91px;height: 60px;line-height: 30px;border-radius: 50%;position: absolute;text-align: center;font-size: 24px;font-style: italic;color: #fff;top: -35px;left: 0;padding-top: 31px;">
						PART<br>2
					</em>操作图示
				</a>
				<a href="article.php?id=48" style="<?php if ($this->_var['article_small_type'] == 3): ?>color: #ff5230;<?php else: ?>color: #666;<?php endif; ?>font-size: 24px;position: relative;padding-left: 106px;display: inline-block;height: 58px;line-height: 58px;margin: 0 75px;">
					<em style="<?php if ($this->_var['article_small_type'] == 3): ?>background-color: #ff5230;<?php else: ?>background-color: #c3c4c4;<?php endif; ?>width: 91px;height: 60px;line-height: 30px;border-radius: 50%;position: absolute;text-align: center;font-size: 24px;font-style: italic;color: #fff;top: -35px;left: 0;padding-top: 31px;">
						PART<br>3
					</em>常见问题
				</a>
			</div> 
			<?php if ($this->_var['article_small_type'] == 1): ?>
			<div style="height: 36px;font-size: 16px;margin-top: 45px;border-bottom: 1px solid #ecedee;text-align: center;position: relative;">
				<a href="article.php?id=36" style="<?php if ($this->_var['article']['article_id'] == 36): ?>color: #e11b0b;<?php else: ?>color: #333;<?php endif; ?>margin: 0 40px;text-align: center;text-decoration: none;">
					平台简介
				</a>
				<a href="article.php?id=37" style="<?php if ($this->_var['article']['article_id'] == 37): ?>color: #e11b0b;<?php else: ?>color: #333;<?php endif; ?>text-decoration: none;margin: 0 40px;text-align: center;">
					运营模式
				</a>
				<a href="article.php?id=38" style="<?php if ($this->_var['article']['article_id'] == 38): ?>color: #e11b0b;<?php else: ?>color: #333;<?php endif; ?>text-decoration: none;margin: 0 40px;text-align: center;">
					平台证照
				</a>
				<a href="article.php?id=52" style="<?php if ($this->_var['article']['article_id'] == 52): ?>color: #e11b0b;<?php else: ?>color: #333;<?php endif; ?>text-decoration: none;margin: 0 40px;text-align: center;">
					联系我们
				</a>
				<i style="	<?php if ($this->_var['article']['article_id'] == 36): ?>left: 321.33203125px;<?php endif; ?>
							<?php if ($this->_var['article']['article_id'] == 37): ?>left: 469.77734375px;<?php endif; ?>
							<?php if ($this->_var['article']['article_id'] == 38): ?>left: 618.22265625px;<?php endif; ?>
							<?php if ($this->_var['article']['article_id'] == 52): ?>left: 766.66796875px;<?php endif; ?>
				width: 11px;height: 11px;background-color: #ff5230;border-radius: 50%;position: absolute;top: 31px;"></i>	
			</div>
			<?php endif; ?>
			<?php if ($this->_var['article_small_type'] == 2): ?>
			<div style="height: 36px;font-size: 16px;margin-top: 45px;border-bottom: 1px solid #ecedee;text-align: center;position: relative;">
				<a href="article.php?id=72" style="<?php if ($this->_var['article']['article_id'] == 72): ?>color: #e11b0b;<?php else: ?>color: #333;<?php endif; ?>margin: 0 40px;text-align: center;text-decoration: none;">
					如何注册？
				</a>
				<a href="article.php?id=73" style="<?php if ($this->_var['article']['article_id'] == 73): ?>color: #e11b0b;<?php else: ?>color: #333;<?php endif; ?>text-decoration: none;margin: 0 40px;text-align: center;">
					忘记密码？
				</a>
				<a href="article.php?id=74" style="<?php if ($this->_var['article']['article_id'] == 74): ?>color: #e11b0b;<?php else: ?>color: #333;<?php endif; ?>text-decoration: none;margin: 0 40px;text-align: center;">
					如何充值？
				</a>
				<a href="article.php?id=75" style="<?php if ($this->_var['article']['article_id'] == 75): ?>color: #e11b0b;<?php else: ?>color: #333;<?php endif; ?>text-decoration: none;margin: 0 40px;text-align: center;">
					如何提现？
				</a>
				<a href="article.php?id=76" style="<?php if ($this->_var['article']['article_id'] == 76): ?>color: #e11b0b;<?php else: ?>color: #333;<?php endif; ?>text-decoration: none;margin: 0 40px;text-align: center;">
					怎么投资？
				</a>
				<a href="article.php?id=77" style="<?php if ($this->_var['article']['article_id'] == 77): ?>color: #e11b0b;<?php else: ?>color: #333;<?php endif; ?>text-decoration: none;margin: 0 40px;text-align: center;">
					如何查看第三方保全？
				</a>
				<i style="	<?php if ($this->_var['article']['article_id'] == 72): ?>left: 86px;<?php endif; ?>
							<?php if ($this->_var['article']['article_id'] == 73): ?>left: 250px;<?php endif; ?>
							<?php if ($this->_var['article']['article_id'] == 74): ?>left: 414px;<?php endif; ?>
							<?php if ($this->_var['article']['article_id'] == 75): ?>left: 579px;<?php endif; ?>
							<?php if ($this->_var['article']['article_id'] == 76): ?>left: 744px;<?php endif; ?>
							<?php if ($this->_var['article']['article_id'] == 77): ?>left: 952px;<?php endif; ?>
				width: 11px;height: 11px;background-color: #ff5230;border-radius: 50%;position: absolute;top: 31px;"></i>	
			</div>
			<?php endif; ?>
			<?php if ($this->_var['article_small_type'] == 3): ?>
			<div style="height: 36px;font-size: 16px;margin-top: 45px;border-bottom: 1px solid #ecedee;text-align: center;position: relative;">
				<a href="article.php?id=48" style="<?php if ($this->_var['article']['article_id'] == 48): ?>color: #e11b0b;<?php else: ?>color: #333;<?php endif; ?>margin: 0 40px;text-align: center;text-decoration: none;">
					账户管理
				</a>
				<a href="article.php?id=49" style="<?php if ($this->_var['article']['article_id'] == 49): ?>color: #e11b0b;<?php else: ?>color: #333;<?php endif; ?>text-decoration: none;margin: 0 40px;text-align: center;">
					资金管理
				</a>
				<a href="article.php?id=50" style="<?php if ($this->_var['article']['article_id'] == 50): ?>color: #e11b0b;<?php else: ?>color: #333;<?php endif; ?>text-decoration: none;margin: 0 40px;text-align: center;">
					投资管理
				</a>
				<a href="article.php?id=85" style="<?php if ($this->_var['article']['article_id'] == 85): ?>color: #e11b0b;<?php else: ?>color: #333;<?php endif; ?>text-decoration: none;margin: 0 40px;text-align: center;">
					转让规则
				</a>
				<a href="article.php?id=51" style="<?php if ($this->_var['article']['article_id'] == 51): ?>color: #e11b0b;<?php else: ?>color: #333;<?php endif; ?>text-decoration: none;margin: 0 40px;text-align: center;">
					费用标准
				</a>
				<i style="	<?php if ($this->_var['article']['article_id'] == 48): ?>left: 247px;<?php endif; ?>
							<?php if ($this->_var['article']['article_id'] == 49): ?>left: 395px;<?php endif; ?>
							<?php if ($this->_var['article']['article_id'] == 50): ?>left: 543px;<?php endif; ?>
							<?php if ($this->_var['article']['article_id'] == 85): ?>left: 692px;<?php endif; ?>
							<?php if ($this->_var['article']['article_id'] == 51): ?>left: 840px;<?php endif; ?>
				width: 11px;height: 11px;background-color: #ff5230;border-radius: 50%;position: absolute;top: 31px;"></i>	
			</div>
			<?php endif; ?>
			<div id="at_2" style="position: relative;padding: 60px;line-height: 30px;">
				<?php echo $this->_var['article']['content']; ?>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php if ($this->_var['article_type'] == 3): ?>
	<div style="height: 50px;line-height: 50px;font-size: 14px;color: #666;width: 1100px;margin-left: auto;margin-right: auto;">
		<a href="index.php" style="color: #666;line-height: 50px;font-size: 14px;">
			政金网
		</a> > 
		<a href="article_cat.php?id=20">
			资讯中心
		</a> >
		<a href="article_cat.php?id=<?php echo $this->_var['article']['cat_id']; ?>" id="ck">
			<?php echo $this->_var['article']['cat_name']; ?>
		</a>		
	</div>
	<div style="width: 1100px;margin-left: auto;margin-right: auto;margin-bottom: 20px;" class="clearfix">
		<div style="width: 782px;float: left;font-size: 14px;">
			<div style="min-height: 593px;border: 1px solid #e1e1e1;border-radius: 3px;background-color: #fff;font-size:14px">
				<div style="font-size: 24px;font-weight: normal;padding: 25px 25px 0 25px;" id="sk">
					<?php echo $this->_var['article']['title']; ?>
				</div>
				<p style="font-size: 12px;color: #888;padding: 10px 25px 0 25px;">
				更新时间：<?php echo $this->_var['formed_add_time']; ?>    &nbsp;&nbsp;&nbsp;&nbsp;
                文章作者：<?php echo $this->_var['article']['author']; ?>
				</p>
				<div style="background-color:white;padding:30px" id="dk">
				  <?php echo $this->_var['article']['content']; ?>
				</div>
			</div>
		</div>
		<div style="float:right;width: 308px;font-size: 14px;">
			<dl style="border: 1px solid #e1e1e1;border-radius: 3px;background-color: #fff;padding: 20px 20px 10px 20px;">
				<dt style="height:50px">
					<span style="font-size: 18px;">
						本类资讯
					</span>
					<a href="article_cat.php?id=<?php echo $this->_var['article']['cat_id']; ?>" style="color: #1155a2;font-size: 12px;float: right;">
						更多
					</a>
				</dt>
				<dd style="list-style: none;font-size: 14px;">
					<ul style="list-style: none;">
					<?php $_from = $this->_var['article_list10']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article_0_13180700_1477377252');if (count($_from)):
    foreach ($_from AS $this->_var['article_0_13180700_1477377252']):
?>
						<li style="font-size: 14px;line-height:36px;height: 36px;overflow:hidden">
							<a href="article.php?id=<?php echo $this->_var['article_0_13180700_1477377252']['article_id']; ?>"style="color: #333;text-decoration: none;">
								<?php echo $this->_var['article_0_13180700_1477377252']['title']; ?>
							</a>
						</li>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</ul>
				</dd>
			</dl>
			<?php if ($this->_var['article']['cat_id'] != 20): ?>
			<dl style="border: 1px solid #e1e1e1;border-radius: 3px;background-color: #fff;padding: 20px 20px 0 20px;margin-top: 10px;">
				<dt style="height: 50px;">
					<span style="font-size: 18px;">
						最近公告
					</span>
					<a href="article_cat.php?id=20" style="color: #1155a2;font-size: 12px;float: right;">
						更多
					</a>
				</dt>
				<dd style="font-size: 14px;">
					<ul style="list-style: none;">
					<?php $_from = $this->_var['article_list20']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article_0_13194200_1477377252');if (count($_from)):
    foreach ($_from AS $this->_var['article_0_13194200_1477377252']):
?>
						<li style="font-size: 14px;line-height:36px;height: 36px;overflow:hidden">
							<a href="article.php?id=<?php echo $this->_var['article_0_13194200_1477377252']['article_id']; ?>" style="color: #333;text-decoration: none;font-size: 14px;">
								<?php echo $this->_var['article_0_13194200_1477377252']['title']; ?>
							</a>
						</li>
					</ul>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</dd>
			</dl>
			<?php endif; ?>
		</div>
	</div>

<?php endif; ?>

<div class="blank"></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>

<script type="text/javascript">
    window.onload=function(){
		var article_type = document.getElementById("article_type").innerHTML;
	
		if(article_type==3){
			document.getElementById("ck").innerHTML=document.getElementById("cat_name").innerHTML;
			document.getElementById("sk").innerHTML=document.getElementById("title").innerHTML;
			document.getElementById("dk").innerHTML=document.getElementById("con").innerHTML;
		}
		else if(article_type==2){
			document.getElementById("at_2").innerHTML=document.getElementById("con").innerHTML;
		}
		else if(article_type==1){
			document.getElementById("at_1").innerHTML=document.getElementById("con").innerHTML;
		}
		
		
		
	}
</script>




</html>
