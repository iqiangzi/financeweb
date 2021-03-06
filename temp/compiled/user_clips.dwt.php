<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<script type="text/javascript" src="themes/ecmoban_jumei/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="themes/ecmoban_jumei/js/jquery.json.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,common.js,user.js,ancun.js')); ?>
</head>
<body style="font-size: 14px;color: #333;background-color: #f4f4f4;padding: 0;margin: 0;min-width: 1100px;font-family: 微软雅黑 ">
<?php echo $this->fetch('library/page_header.lbi'); ?>

         
         <?php if ($this->_var['action'] == 'default'): ?>
		 <div style="margin-bottom: 30px;box-sizing: border-box;">
			<div style="height: 44px;line-height: 44px;background-color: #edecec;box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.1);box-sizing: border-box;">
				<div class="block">
					<a href="javascript:void(0)" style="line-height: 42px;color: #e84338;border-bottom: 2px solid #e84338;height: 44px;padding: 0 12px;margin-right: 15px;float: left;text-decoration: none;box-sizing: border-box;">
						账户总览
					</a>
					<a href="user.php?act=user_product" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						我的投资
					</a>
					<a href="user.php?act=money_log" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						资金管理
					</a>
					<a href="user.php?act=identify" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						账户设置
					</a>
					<a href="user.php?act=reserve_log" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						预约中心
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div style="margin-top: 20px;" class="block">
				<div style="float: left;width: 837px;box-sizing: border-box;">
					
					<div style="background-color: #fff;border: 1px solid #e0e0e0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;box-sizing: border-box;">
						<div style="padding: 20px;">
							<span style="float: left;font-size: 16px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;">
								我的投资
							</span>
							<span style="float: left;font-size: 14px;margin-left: 15px;margin-top: 5px;color: #666;">
								总资产 = 投资金额 + 可用余额 + 待收收益
							</span>
							<a href="user.php?act=user_product" style="color: #666;float: right;	font-size: 14px;margin-top: 5px;text-decoration: none;box-sizing: border-box;">
								>查看我的投资情况
							</a><div class="clearfix"></div>
						</div>
						
						<div style="padding: 0 20px 20px 20px;margin-bottom: 10px;margin-top: 10px;">
							<div style="width: 198.75px;float: left;box-sizing: border-box;	">
								<p style="text-indent: 20px;margin-top: 5px;color: #666;list-style: none;">		
									总资产（元）
								</p>
								<p style="text-indent: 20px;margin-top: 5px;font-size: 30px;color: #e84338;list-style: none;font-weight:bold;">
									<?php echo $this->_var['formed_total_money']; ?>
								</p>
							</div>
							<div style="width: 198.75px;float: left;">
								<p style="text-indent: 20px;margin-top: 5px;color: #666;list-style: none;">
									投资金额（元）
								</p>
								<p style="text-indent: 20px;margin-top: 5px;font-size: 30px;color: #e84338;list-style: none;font-weight:bold;">
									<?php echo $this->_var['formed_total_inverst_money']; ?>
								</p>								
							</div>
							<div style="width: 198.75px;float: left;">
								<p style="text-indent: 20px;margin-top: 5px;color: #666;list-style: none;">
									已收收益（元）
								</p>
								<p style="text-indent: 20px;margin-top: 5px;font-size: 30px;color: #333333;list-style: none;font-weight:bold;">
									<?php echo $this->_var['formed_total_earn_money']; ?>
								</p>								
							</div>
							<div style="width: 198.75px;float: left;">
								<p style="text-indent: 20px;margin-top: 5px;color: #666;list-style: none;">
									待收收益（元）
								</p>
								<p style="text-indent: 20px;margin-top: 5px;font-size: 30px;color: #333333;list-style: none;font-weight:bold;">
									<?php echo $this->_var['formed_rest_earn_money']; ?>
								</p>								
							</div><div class="clearfix"></div>
						</div>
						
					</div>
					
					<div style="background-color: #fff;border: 1px solid #e0e0e0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;margin-top: 10px;">
						<div style="padding: 20px;" class="clearfix">
							<span style="float: left;font-size: 16px;">
								账户资金
							</span>
							<a style="color: #666;float: right;font-size: 14px;margin-top: 5px;" href="user.php?act=money_log">
								>查看我的资金流水
							</a>
						</div>
						<div style="padding: 0 20px 20px 20px;margin-bottom: 10px;margin-top: 10px;">
							<div style="width: 198.75px;float: left;box-sizing: border-box;">
								<p style="text-indent: 20px;margin-top: 5px;color: #666;">
									可用余额（元）
								</p>
								<p style="font-weight:bold;text-indent: 20px;margin-top: 5px;font-size: 30px;color: #333333;">
									<?php echo $this->_var['user']['user_money']; ?>
								</p>
							</div>
<style>
	.box_shadow1{background: #f75151;color: #fff;border-color: #f75151;}
	.box_shadow1:hover{background: #e84338;color: #fff;border-color: #e84338;}
	.box_shadow2{border: 1px solid #ddd;}
	.box_shadow2:hover{border: 1px solid #f75151;}
	.box_shadow4{color: #f75151;}
	.box_shadow4:hover{color: #fff;background: #f75151;}
</style>
							<?php if ($this->_var['is_seller']): ?>
							<div style="float: right;padding: 0;margin-top: 20px;">
								<?php if ($this->_var['is_bank_card']): ?>
								<a style="width: 110px;height: 40px;line-height: 38px;font-size: 16px;float: left;margin-left: 10px;display: inline-block;text-align: center;padding: 0 10px;margin-right: 5px;outline: none;cursor: pointer;border-radius: 3px;" href="user.php?act=recharge" class="box_shadow1">
									充值
								</a>
								<?php else: ?>
									<?php if ($this->_var['is_id_card']): ?>
									<a style="width: 110px;height: 40px;line-height: 38px;font-size: 16px;float: left;margin-left: 10px;display: inline-block;text-align: center;padding: 0 10px;margin-right: 5px;outline: none;cursor: pointer;border-radius: 3px;" href="javascript:void(0)" onclick="if (confirm('您还没有绑定您的银行卡，立刻前往绑定？')){window.location.href='fuiou.php?action=link_bank_card'}" class="box_shadow1">
									充值
									</a>
									<?php else: ?>
									<a style="width: 110px;height: 40px;line-height: 38px;font-size: 16px;float: left;margin-left: 10px;display: inline-block;text-align: center;padding: 0 10px;margin-right: 5px;outline: none;cursor: pointer;border-radius: 3px;" href="javascript:void(0)" onclick="if (confirm('您还没有进行实名认证，立刻前往认证？')){window.location.href='user.php?act=identify'}" class="box_shadow1">
									充值
									</a>
									<?php endif; ?>
								<?php endif; ?>
								<a style="width: 110px;height: 40px;line-height: 38px;font-size: 16px;float: left;margin-left: 10px;background: #fff;color: #e84338;display: inline-block;text-align: center;padding: 0 10px;margin-right: 5px;outline: none;cursor: pointer;border-radius: 3px;transition: all ease-in-out 0.15s;" href="javascript:void(0)" class="box_shadow2" onclick="<?php if ($this->_var['user']['is_bank_card']): ?>window.location.href='user.php?act=withdraw'<?php else: ?>c=confirm('您需要首先银行卡绑定才可以提现，立刻前往绑定？');if(c){window.location.href='fuiou.php?action=link_bank_card'}<?php endif; ?>">
									提现
								</a><div class="clearfix"></div>
							</div>
							<?php endif; ?>
							<div class="clearfix"></div>
						</div><div class="clearfix"></div>
					</div>
					
					<div style="background-color: #fff;border: 1px solid #e0e0e0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;margin-top: 10px;box-sizing: border-box;">
						<div class="clearfix" style="font-size: 16px;padding: 20px;">
							<p style="float: left;color: #666;">
								<span style="cursor: pointer;margin-right: 10px;color: #333;">
									专享推荐
								</span>
							</p>
							<a href="category.php?id=5" style="color: #666;float: right;font-size: 14px;">
								>更多
							</a>
						</div>
						<ul style="padding: 0;margin: 0;list-style: none;">
						<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
							<li style="padding: 20px;border-bottom: 1px solid #f4f4f4;overflow: hidden;margin: 0;list-style: none;">
								<div style="width: 170px;margin-right: 5px;line-height: 30px;float: left;">
									<p style="font-size: 18px;"><?php echo $this->_var['goods']['goods_name']; ?></p>
									<p style="font-size: 14px;color: #333333;">
										剩余金额：<?php echo $this->_var['goods']['goods_rest_number']; ?>
									</p>
								</div>
								<div style="width: 130px;margin-right: 5px;line-height: 30px;float: left;">
									<p style="font-size: 18px;color: #e84338;">
										<?php echo $this->_var['goods']['goods_interest_rate']; ?>%
									</p>
									<p style="font-size: 14px;color: #333333;">
										预期年化收益率
									</p>
								</div>
								<div style="width: 130px;margin-right: 5px;line-height: 30px;float: left;">
									<p style="font-size: 18px;">
										<?php echo $this->_var['goods']['goods_min_buy']; ?>元
									</p>
									<p style="font-size: 14px;color: #333333;">
										最低投资金额
									</p>
								</div>
								<div style="width: 115px;margin-right: 0px;line-height: 30px;float: left;">
									<p style="font-size: 18px;">
										<?php echo $this->_var['goods']['goods_period']; ?>天
									</p>
									<p style="font-size: 14px;color: #333333;">
										产品期限
									</p>
								</div>
								<div style="width: 105px;margin-right: 0px;line-height: 30px;float: left;">
									<p style="font-size: 18px;">
										<?php echo $this->_var['goods']['goods_level']; ?>
									</p>
									<p style="font-size: 14px;color: #333333;">
										参考评级
									</p>
								</div>
								<div style="line-height: 30px;float: left;">
									<a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" style="width: 100px;height: 32px;line-height: 30px;border-color: #f75151;border: 1px solid #dfdfdf;padding: 0 12px;display: inline-block;text-align: center;outline: none;cursor: pointer;border-radius: 3px;transition: all ease-in-out 0.15s;margin-top: 15px;" class="box_shadow4">
										立即投资
									</a>
								</div>
							</li>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</ul>
					</div>
				</div>
				<div style="float: right;width: 243px;">
					<div style="background-color: #fff;border: 1px solid #e0e0e0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;">
						<div style="padding: 20px;">
							<p style="text-align: center;">
								Hi，欢迎来到政金网
							</p>
							<div style="text-align: center;">
								<img src="themes/ecmoban_jumei/images/user.png" style="margin-top: 25px;">
								<p style="font-size: 18px;margin-top: 10px;">
									<?php echo $this->_var['info']['username']; ?>
								</p>
							</div>
							<div style="text-align: center;margin-top: 20px;">
								<i style="width: 23px;display: inline-block;position: relative;font-size: 13px;font-style: normal;height: 16px;background: url(themes/ecmoban_jumei/images/uc-user-verity.png) no-repeat 0 <?php if ($this->_var['user']['is_id_card']): ?>100%<?php else: ?>0<?php endif; ?>;cursor: pointer;"></i>
								<i style="width: 23px;display: inline-block;position: relative;font-size: 13px;font-style: normal;height: 16px;background: url(themes/ecmoban_jumei/images/uc-user-verity.png) no-repeat -27px 100%;cursor: pointer;"></i>
								<i style="width: 23px;display: inline-block;position: relative;font-size: 13px;font-style: normal;height: 16px;background: url(themes/ecmoban_jumei/images/uc-user-verity.png) no-repeat -54px <?php if ($this->_var['user']['is_bank_card']): ?>100%<?php else: ?>0<?php endif; ?>;cursor: pointer;"></i>
								<i style="width: 23px;display: inline-block;position: relative;font-size: 13px;font-style: normal;height: 16px;background: url(themes/ecmoban_jumei/images/uc-user-verity.png) no-repeat -85px 0;cursor: pointer;"></i>
							</div>
							<div style="text-align: center;font-size: 14px;margin-top: 20px;">
								账户安全性：
								<?php if ($this->_var['user']['is_bank_card']): ?>
								<span style="color: #e84338;">高</span>
								<?php else: ?>
									<?php if ($this->_var['user']['is_id_card']): ?>
									<span style="color: #e84338;">中</span>
									<?php else: ?>
									<span style="color: #e84338;">低</span>
									<?php endif; ?>
								<?php endif; ?>
								<?php if (! $this->_var['user']['is_bank_card']): ?>
								<a href="user.php?act=identify" style="display: inline-block;width: 42px;height: 20px;line-height: 18px;font-size: 13px;text-align: center;color: #888;border: 1px solid #888;-webkit-border-radius: 2px;-moz-border-radius: 2px;border-radius: 2px;margin-left: 10px;text-decoration: none;">
									提升
								</a>
								<?php endif; ?>
								<div style="margin-top: 10px;position: static;border-top: none;background: transparent;width: 100%;height: 31px;line-height: 31px;font-size: 14px;color: #333;text-align: center;left: 0;bottom: 0;z-index: 190;vertical-align: middle;">
									<a href="index.php">
										<span style="margin-right: 5px;">
											<img src="themes/ecmoban_jumei/images/ico-shield.png">
										</span>
										<span>账户安全由人保财险承保</span>
									</a>
								</div>
                            </div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		 </div>
         <?php endif; ?>
         

       
        <?php if ($this->_var['action'] == 'reserve_log'): ?>	 
		<div style="margin-bottom: 30px;box-sizing: border-box;">
<style>
	.box_shadow1{background: #f75151;color: #fff;border-color: #f75151;}
	.box_shadow1:hover{background: #e84338;color: #fff;border-color: #e84338;}
	.box_shadow2{border: 1px solid #ddd;}
	.box_shadow2:hover{border: 1px solid #f75151;}
</style>
			<div style="height: 44px;line-height: 44px;background-color: #edecec;box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.1);box-sizing: border-box;">
				<div class="block">
					<a href="user.php" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						账户总览
					</a>
					<a href="user.php?act=user_product" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						我的投资
					</a>
					<a href="user.php?act=money_log" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						资金管理
					</a>
					<a href="user.php?act=identify" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						账户设置
					</a>
					<a href="javascript:void(0)" style="line-height: 42px;color: #e84338;border-bottom: 2px solid #e84338;height: 44px;padding: 0 12px;margin-right: 15px;float: left;text-decoration: none;box-sizing: border-box;">
						预约中心
					</a>
				</div>
				<div class="clearfix"></div>
			</div>	
			<div style="border: 1px solid #e0e0e0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;background-color: #fdfcf3;margin-top: 20px;width: 1100px;margin-left: auto;margin-right: auto;">
				<p style="border-bottom: 1px solid #f5f5f5;font-size: 18px;margin-left: 10px;padding: 10px;">
					预约中心
				</p>
			</div>
			<div style="background-color: #fff;border: 1px solid #e0e0e0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;margin-top: 10px;width: 1100px;margin-left: auto;margin-right: auto;">
				<table style="width: 100%;border-collapse:collapse;">
					<thead style="border-bottom: 1px solid #e0e0e0;">
						<tr style="background: #fff;">
							<th style="height: 36px;font-size: 13px;color: #888;">
								预约编号
							</th>
							<th style="height: 36px;font-size: 13px;color: #888;">
								产品名称
							</th>
							<th style="height: 36px;font-size: 13px;color: #888;">
								业务经理
							</th>
							<th style="height: 36px;font-size: 13px;color: #888;">
								线下门店
							</th>
							<th style="height: 36px;font-size: 13px;color: #888;">
								预约时间
							</th>
							<th style="height: 36px;font-size: 13px;color: #888;">
								状态
							</th>
						</tr>
					</thead>
					<tbody>
					<?php $_from = $this->_var['reserve_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'reserve');if (count($_from)):
    foreach ($_from AS $this->_var['reserve']):
?>
						<tr style="border-bottom: 1px solid #f5f5f5;">
							<td style="height: 58px;text-align: center;">
								<?php echo $this->_var['reserve']['reserve_id']; ?>
							</td>
							<td style="height: 58px;text-align: center;">
								<?php echo $this->_var['reserve']['goods_name']; ?>
							</td>
							<td style="height: 58px;text-align: center;">
								<?php echo $this->_var['reserve']['seller_name']; ?>
							</td>
							<td style="height: 58px;text-align: center;">
								<?php echo $this->_var['reserve']['store_name']; ?>
							</td>
							<td style="height: 58px;text-align: center;">
								<?php if ($this->_var['reserve']['year']): ?>
								<?php echo $this->_var['reserve']['year']; ?>年<?php echo $this->_var['reserve']['month']; ?>月<?php echo $this->_var['reserve']['day']; ?>日<?php echo $this->_var['reserve']['hour']; ?>时<?php echo $this->_var['reserve']['minute']; ?>分
								<?php else: ?>
								等待确认
								<?php endif; ?>
							</td>
							<td style="height: 58px;text-align: center;">
								<?php if ($this->_var['reserve']['is_cancel']): ?>
									已取消
								<?php else: ?>
									<?php if ($this->_var['reserve']['year']): ?>
										<?php if ($this->_var['reserve']['is_come']): ?>
											已面谈
										<?php else: ?>
											已确认
										<?php endif; ?>
									<?php else: ?>
										等待电话回访
									<?php endif; ?>
								<?php endif; ?>
							</td>
						</tr>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</tbody>
				</table>
			</div>
		</div>		
        <?php endif; ?>
        
		 
        
        <?php if ($this->_var['action'] == 'money_log'): ?>	 
		<div style="margin-bottom: 30px;box-sizing: border-box;">
<style>
	.box_shadow1{background: #f75151;color: #fff;border-color: #f75151;}
	.box_shadow1:hover{background: #e84338;color: #fff;border-color: #e84338;}
	.box_shadow2{border: 1px solid #ddd;}
	.box_shadow2:hover{border: 1px solid #f75151;}
</style>
			<div style="height: 44px;line-height: 44px;background-color: #edecec;box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.1);box-sizing: border-box;">
				<div class="block">
					<a href="user.php" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						账户总览
					</a>
					<a href="user.php?act=user_product" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						我的投资
					</a>
					<a href="javascript:void(0)" style="line-height: 42px;color: #e84338;border-bottom: 2px solid #e84338;height: 44px;padding: 0 12px;margin-right: 15px;float: left;text-decoration: none;box-sizing: border-box;">
						资金管理
					</a>
					<a href="user.php?act=identify" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						账户设置
					</a>
					<a href="user.php?act=reserve_log" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						预约中心
					</a>
				</div>
				<div class="clearfix"></div>
			</div>	
			<div style="border: 1px solid #e0e0e0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;background-color: #fdfcf3;margin-top: 20px;width: 1100px;margin-left: auto;margin-right: auto;">
				<p style="border-bottom: 1px solid #f5f5f5;font-size: 18px;margin-left: 10px;padding: 10px;">
					资金管理
				</p>
			</div>
			<div style="background-color: #fff;border: 1px solid #e0e0e0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;margin-top: 20px;width: 1100px;margin-left: auto;margin-right: auto;">
				<p style="font-size: 16px;padding: 20px;">
					我的账户
				</p>
				<div style="padding: 0 20px 20px 20px;" class="clearfix">
					<div style="width: 264.5px;float: left;">
						<p style="text-indent: 35px;margin-top: 5px;color: #666;">
							总资产（元）
						</p>
						<p style="text-indent: 35px;margin-top: 5px;font-size: 30px;color: #333333;font-weight: bold;">
							<?php echo $this->_var['formed_total_money']; ?>
						</p>
					</div>
					<div style="width: 264.5px;float: left;">
						<p style="text-indent: 35px;margin-top: 5px;color: #666;">
							可用余额（元）
						</p>
						<p style="text-indent: 35px;margin-top: 5px;font-size: 30px;color: #333333;font-weight: bold;">
							<?php echo $this->_var['user']['user_money']; ?>
						</p>
					</div>
					<?php if ($this->_var['is_seller']): ?>
					<div style="float: right;padding: 10px 20px;">
						<?php if ($this->_var['is_bank_card']): ?>
						<a style="width: 110px;height: 40px;line-height: 38px;font-size: 16px;float: left;margin-left: 10px;display: inline-block;text-align: center;padding: 0 10px;margin-right: 5px;outline: none;cursor: pointer;border-radius: 3px;" href="user.php?act=recharge" class="box_shadow1">
							充值
						</a>
						<?php else: ?>
							<?php if ($this->_var['is_id_card']): ?>
							<a style="width: 110px;height: 40px;line-height: 38px;font-size: 16px;float: left;margin-left: 10px;display: inline-block;text-align: center;padding: 0 10px;margin-right: 5px;outline: none;cursor: pointer;border-radius: 3px;" href="javascript:void(0)" onclick="if (confirm('您还没有绑定您的银行卡，立刻前往绑定？')){window.location.href='fuiou.php?action=link_bank_card'}" class="box_shadow1">
								充值
							</a>
							<?php else: ?>
							<a style="width: 110px;height: 40px;line-height: 38px;font-size: 16px;float: left;margin-left: 10px;display: inline-block;text-align: center;padding: 0 10px;margin-right: 5px;outline: none;cursor: pointer;border-radius: 3px;" href="javascript:void(0)" onclick="if (confirm('您还没有进行实名认证，立刻前往认证？')){window.location.href='user.php?act=identify'}" class="box_shadow1">
								充值
							</a>
							<?php endif; ?>
						<?php endif; ?>
						<a style="width: 130px;height: 40px;line-height: 38px;font-size: 16px;float: left;margin-left: 10px;background: #fff;color: #e84338;display: inline-block;text-align: center;padding: 0 10px;margin-right: 5px;outline: none;cursor: pointer;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;-webkit-transition: all ease-in-out 0.15s;-moz-transition: all ease-in-out 0.15s;-ms-transition: all ease-in-out 0.15s;-o-transition: all ease-in-out 0.15s;transition: all ease-in-out 0.15s;" class="box_shadow2" href="user.php?act=withdraw">
							提现
						</a>
					</div>
					<?php endif; ?>
					<div class="clearfix"></div>
				</div>
			</div>
			<div style="background-color: #fff;border: 1px solid #e0e0e0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;margin-top: 10px;width: 1100px;margin-left: auto;margin-right: auto;">
				<table style="width: 100%;border-collapse:collapse;">
					<thead style="border-bottom: 1px solid #e0e0e0;">
						<tr style="background: #fff;">
							<th style="height: 36px;font-size: 13px;color: #888;">
								交易时间
							</th>
							<th style="height: 36px;font-size: 13px;color: #888;">
								资产名称
							</th>
							<th style="height: 36px;font-size: 13px;color: #888;">
								交易类型
							</th>
							<th style="height: 36px;font-size: 13px;color: #888;">
								流水号
							</th>
							<th style="height: 36px;font-size: 13px;color: #888;">
								金额(￥)
							</th>
							<th style="height: 36px;font-size: 13px;color: #888;">
								状态
							</th>
						</tr>
					</thead>
					<tbody>
					<?php $_from = $this->_var['money_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'money');if (count($_from)):
    foreach ($_from AS $this->_var['money']):
?>
						<tr style="border-bottom: 1px solid #f5f5f5;">
							<td style="height: 58px;text-align: center;">
								<?php echo $this->_var['money']['format_txn_date']; ?> <?php echo $this->_var['money']['format_txn_time']; ?>
							</td>
							<td style="height: 58px;text-align: center;">
								<?php echo $this->_var['money']['remark']; ?>
							</td>
							<td style="height: 58px;text-align: center;">
								<?php echo $this->_var['money']['type']; ?>
							</td>
							<td style="height: 58px;text-align: center;">
								<?php echo $this->_var['money']['mchnt_ssn']; ?>
							</td>
							<td style="height: 58px;text-align: center;">
								<span <?php if ($this->_var['money']['sign'] == 0): ?>style="color: #3ab63a;"<?php endif; ?>
									  <?php if ($this->_var['money']['sign'] == 1): ?>style="color: #e84338;"<?php endif; ?>
									   >
									   <?php if ($this->_var['money']['sign'] == 0): ?>-<?php endif; ?>
									   <?php if ($this->_var['money']['sign'] == 1): ?>+<?php endif; ?>
									   <?php echo $this->_var['money']['format_txn_amt']; ?></span>
							</td>
							<td style="height: 58px;text-align: center;">
								已完成
							</td>
						</tr>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</tbody>
				</table>
			</div>
			<div style="text-align:center">
				<div>
					<form action="user.php?act=money_log" method="POST">
						<span style="margin-right:20px">查询更多资金流水记录</span>
						<select name="select_year">
							<option value="2015">2015</option>
							<option value="2016">2016</option>
						</select>年
						<select name="select_month" style="padding-left:5px">
							<option value="01">1</option>
							<option value="02">2</option>
							<option value="03">3</option>
							<option value="04">4</option>
							<option value="05">5</option>
							<option value="06">6</option>
							<option value="07">7</option>
							<option value="08">8</option>
							<option value="09">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						</select>月
						<input style="margin-left:20px" type="submit" value="查询">
					</form>
				</div>
			</div>
		</div>		
        <?php endif; ?>
        
		
        
        <?php if ($this->_var['action'] == 'recharge'): ?>
		 <div style="margin-bottom: 30px;box-sizing: border-box;">
			<div style="height: 44px;line-height: 44px;background-color: #edecec;box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.1);box-sizing: border-box;">
				<div class="block">
					<a href="user.php" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						账户总览
					</a>
					<a href="user.php?act=user_product" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						我的投资
					</a>
					<a href="javascript:void(0)" style="line-height: 42px;color: #e84338;border-bottom: 2px solid #e84338;height: 44px;padding: 0 12px;margin-right: 15px;float: left;text-decoration: none;box-sizing: border-box;">
						资金管理
					</a>
					<a href="user.php?act=identify" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						账户设置
					</a>
					<a href="user.php?act=reserve_log" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						预约中心
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div style="border: 1px solid #e0e0e0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;background-color: #fdfcf3;margin-top: 20px;width: 1100px;margin-left: auto;margin-right: auto;">
				<p style="border-bottom: 1px solid #f5f5f5;font-size: 18px;margin-left: 10px;padding: 10px;margin: 0;list-style: none;">
					充值
				</p>
			</div>
			<form action="fuiou.php?action=recharge" method="POST">
			<div style="background-color: #fff;border: 1px solid #e0e0e0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;margin-top: 20px;width: 1100px;margin-left: auto;margin-right: auto;">
				<div style="padding-top: 30px;padding-bottom: 30px;">
					<div style="position: relative;padding-left: 103px;" class="clearfix">
						<span style="position: absolute;left: 0;top: 0;text-align: right;width: 103px;height: 40px;line-height: 40px;">
							充值金额：
						</span>
						<div>
							<input type="text" placeholder="请输入充值金额" name="recharge_amount" onkeyup="value=value.replace(/[^0-9.]/g,'')" style="width: auto;height: 38px;line-height: 38px;border: 1px solid #ededed;background: #f5f5f5;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;padding: 0 10px;outline: none;transition: all ease-in-out 0.15s;float: left;">
							<span style="float: left;margin-left: 10px;margin-top: 10px;">元</span>
						</div>
					</div>
					<div style="padding-left: 103px;font-size: 16px;margin-top: 5px;">
						<div style=""></div>
					</div>
					<div style="position: relative;padding-left: 103px;margin-top: 20px;">
						<div style="line-height: 24px;">
							<?php if ($this->_var['is_bank_card']): ?>
								<input type="submit" value="提 交" style="width: 110px;height: 38px;line-height: 38px;background: #f75151;color: #fff;display: inline-block;text-align: center;outline: none;cursor: pointer;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;-webkit-transition: all ease-in-out 0.15s;-moz-transition: all ease-in-out 0.15s;-ms-transition: all ease-in-out 0.15s;-o-transition: all ease-in-out 0.15s;transition: all ease-in-out 0.15s;border: none;margin-bottom: 15px;">
							<?php else: ?>
								<?php if ($this->_var['is_id_card']): ?>
									<input type="button" value="提 交" style="width: 110px;height: 38px;line-height: 38px;background: #f75151;color: #fff;display: inline-block;text-align: center;outline: none;cursor: pointer;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;-webkit-transition: all ease-in-out 0.15s;-moz-transition: all ease-in-out 0.15s;-ms-transition: all ease-in-out 0.15s;-o-transition: all ease-in-out 0.15s;transition: all ease-in-out 0.15s;border: none;margin-bottom: 15px;" onclick="if (confirm('您还没有绑定您的银行卡，立刻前往绑定？')){window.location.href='fuiou.php?action=link_bank_card'}">
								<?php else: ?>
									<input type="button" value="提 交" style="width: 110px;height: 38px;line-height: 38px;background: #f75151;color: #fff;display: inline-block;text-align: center;outline: none;cursor: pointer;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;-webkit-transition: all ease-in-out 0.15s;-moz-transition: all ease-in-out 0.15s;-ms-transition: all ease-in-out 0.15s;-o-transition: all ease-in-out 0.15s;transition: all ease-in-out 0.15s;border: none;margin-bottom: 15px;" onclick="if (confirm('您还没有进行实名认证，立刻前往认证？')){window.location.href='user.php?act=identify'}">
								<?php endif; ?>
							<?php endif; ?>
							<p style="color: #666;padding: 0;margin: 0;list-style: none;">
								提示：充值成功后,一般5分钟内到账，最迟24小时内到账。
							</p>
						</div>
					</div>
				</div>
			</div>
			</form>
			<div style="background-color: #fff;border: 1px solid #e0e0e0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;margin-top: 20px;width: 1100px;margin-left: auto;margin-right: auto;">
				<p style="font-size: 16px;padding: 20px;">
					问题指南
				</p>
				<ul style="line-height: 24px;padding: 20px;margin: 0;list-style: none;">
					<li>
						1.怎么用银行卡充值？
					</li>
					<li style="font-size: 14px;color: #666;">					答：需用已开通网银的银行储蓄卡充值。（目前支持的银行包括：工商银行、农业银行、中国银行、建设银行、交通银行、平安银行、光大银行、招商银行、北京银行、中信银行、兴业银行、广发银行、邮储银行、民生银行、华夏银行、浦发银行。）
					</li>
					<li style="margin-top: 20px;">
						2.为什么我要先充值？
					</li>
					<li style="font-size: 14px;color: #666;">					答：因为您的账户需要有足够的资金才能投资，所以建议您尽早充值，才能确保您可以及时进行投资，不会错失良机！
					</li>
					<li style="margin-top: 20px;">
						3.我充值后，何时可以在政金网的账户内看到资金？
					</li>
					<li style="font-size: 14px;color: #666;">					答：个人客户充值一般会在2小时内到账。公司客户充值受银行工作时间的影响，非银行交易时间充值的一般在次交易日到账。
					</li>		
					<li style="margin-top: 20px;">
						4.我账户里的资金安全吗？
					</li>
					<li style="font-size: 14px;color: #666;">
						<p>答：为保证投资人的资金安全，浙金网采用多管齐下的资金管理制度:</p>
						<p>1.您可以实时查询到资金账户的详情，且资金只能转出到您绑定过的银行账号;</p>
						<p>2.内部制定了严格的资金管理流程和完善安全的系统，网站采用国际领先的系统加密及保护技术，24小时监控。由第三方支付或银行为您的资金提供全流程托管服务。</p>
						<p>3.浙金网是一个纯交易撮合平台，不设资金池，不涉及客户资金，并保持充分的独立性。</p>
					</li>							
				</ul>
			</div>
		</div>
        <?php endif; ?>
        
		
        <?php if ($this->_var['action'] == 'withdraw'): ?>
		 <div style="margin-bottom: 30px;box-sizing: border-box;">
			<div style="height: 44px;line-height: 44px;background-color: #edecec;box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.1);box-sizing: border-box;">
				<div class="block">
					<a href="user.php" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						账户总览
					</a>
					<a href="user.php?act=user_product" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						我的投资
					</a>
					<a href="javascript:void(0)" style="line-height: 42px;color: #e84338;border-bottom: 2px solid #e84338;height: 44px;padding: 0 12px;margin-right: 15px;float: left;text-decoration: none;box-sizing: border-box;">
						资金管理
					</a>
					<a href="user.php?act=identify" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						账户设置
					</a>
					<a href="user.php?act=reserve_log" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						预约中心
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div style="border: 1px solid #e0e0e0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;background-color: #fdfcf3;margin-top: 20px;width: 1100px;margin-left: auto;margin-right: auto;">
				<p style="border-bottom: 1px solid #f5f5f5;font-size: 18px;margin-left: 10px;padding: 10px;margin: 0;list-style: none;">
					提现
				</p>
			</div>
			<form action="fuiou.php?action=withdraw" method="POST">
			<div style="background-color: #fff;border: 1px solid #e0e0e0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;margin-top: 20px;width: 1100px;margin-left: auto;margin-right: auto;">
				<div style="padding-top: 30px;padding-bottom: 30px;">
					<div style="position: relative;padding-left:33px;padding-bottom:10px" class="clearfix">
						可用金额：<?php echo $this->_var['user']['format_user_money']; ?>元
					</div>
					<div style="position: relative;padding-left: 103px;" class="clearfix">
						<span style="position: absolute;left: 0;top: 0;text-align: right;width: 103px;height: 40px;line-height: 40px;">
							提现金额：
						</span>
						<div>
							<input type="text" placeholder="可提现金额<?php echo $this->_var['user']['format_user_money']; ?>元" name="withdraw_amount" onkeyup="value=value.replace(/[^0-9.]/g,'')" style="width: auto;height: 38px;line-height: 38px;border: 1px solid #ededed;background: #f5f5f5;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;padding: 0 10px;outline: none;transition: all ease-in-out 0.15s;float: left;" onblur="if (<?php echo $this->_var['user']['user_money']; ?><this.value){alert('余额不足！');this.value =<?php echo $this->_var['user']['user_money']; ?>; }">
							<span style="float: left;margin-left: 10px;margin-top: 10px;">元</span>
						</div>
					</div>
					<div style="padding-left: 103px;font-size: 16px;margin-top: 5px;">
						<div style=""></div>
					</div>
					<div style="position: relative;padding-left: 103px;margin-top: 20px;">
						<div style="line-height: 24px;">
							<input type="submit" value="提 交" style="width: 110px;height: 38px;line-height: 38px;background: #f75151;color: #fff;display: inline-block;text-align: center;outline: none;cursor: pointer;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;-webkit-transition: all ease-in-out 0.15s;-moz-transition: all ease-in-out 0.15s;-ms-transition: all ease-in-out 0.15s;-o-transition: all ease-in-out 0.15s;transition: all ease-in-out 0.15s;border: none;margin-bottom: 15px;">
							<p style="color: #666;padding: 0;margin: 0;list-style: none;">
								提示：提现金额于下一个工作日到账(周末，节假日顺延)
							</p>
						</div>
					</div>
				</div>
			</div>
			</form>
			<div style="background-color: #fff;border: 1px solid #e0e0e0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;margin-top: 20px;width: 1100px;margin-left: auto;margin-right: auto;">
				<p style="font-size: 16px;padding: 20px;">
					问题指南
				</p>
				<ul style="line-height: 24px;padding: 20px;margin: 0;list-style: none;">
					<li>
						1.每日提现有上限吗？
					</li>
					<li style="font-size: 14px;color: #666;">
						答：政金网提现没有上限。
					</li>
					<li style="margin-top: 20px;">
						2.提现后多久能到账？
					</li>
					<li style="font-size: 14px;color: #666;">					答：不同银行到账时间会有差别，请尽量于每个工作日的下午3点前提交申请。 以下银行次日内到账：工商银行、农业银行、建设银行、交通银行、深发银行、光大银行、招商银行、北京银行、中信银行。其他银行1-5个工作日内到账。
					</li>
					<li style="margin-top: 20px;">
						3.提现手续费怎么收取？
					</li>
					<li style="font-size: 14px;color: #666;">						
						答：政金网提现不收取任何手续费用。
					</li>		
					<li style="margin-top: 20px;">
						4.当天充值是否可当天提现？
					</li>
					<li style="font-size: 14px;color: #666;">
						答：当天充值的金额可以进行当天提现。
					</li>							
				</ul>
			</div>
		</div>
        <?php endif; ?>
        
		 
        
         <?php if ($this->_var['action'] == 'identify'): ?>
<style>
	.box_shadow{}
	.box_shadow:hover{background: #fdfcf3;}
	.box_shadow2{background: #f75151;}
	.box_shadow2:hover{background: #f52020;}
	.box_shadow4{background: #f75151;}
	.box_shadow4:hover{background: #f52020;}
</style>

<script src="themes/ecmoban_jumei/js/sms.js"></script>
		<div style="margin-bottom: 30px;box-sizing: border-box;">
			<div style="height: 44px;line-height: 44px;background-color: #edecec;box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.1);box-sizing: border-box;">
				<div class="block">
					<a href="user.php" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						账户总览
					</a>
					<a href="user.php?act=user_product" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						我的投资
					</a>
					<a href="user.php?act=money_log" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						资金管理
					</a>
					<a href="javascript:void(0)" style="line-height: 42px;color: #e84338;border-bottom: 2px solid #e84338;height: 44px;padding: 0 12px;margin-right: 15px;float: left;text-decoration: none;box-sizing: border-box;">
						账户设置
					</a>
					<a href="user.php?act=reserve_log" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						预约中心
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div style="position: relative;background-color: #fdfcf3;margin-bottom: 20px;margin-top: 20px;width: 1100px;margin-left: auto;margin-right: auto;border: 1px solid #e0e0e0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;">
				<p style="border-bottom: 1px solid #f5f5f5;font-size: 18px;margin-left: 10px;padding: 10px;margin: 0;list-style: none;">账户设置</p>
				<div style="position: absolute;right: 0;top: 0;background: transparent;-webkit-box-shadow: none;-moz-box-shadow: none;box-shadow: none;height: 44px;line-height: 44px;" class="clearfix">
					<a href="javascript:void(0)" style="line-height: 42px;color: #e84338;border-bottom: 2px solid #e84338;height: 44px;padding: 0 12px;margin-right: 15px;float: left;text-decoration: none;">
						身份认证
					</a>
					<a href="user.php?act=profile" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;">
						密码管理
					</a>
				</div>
			</div>
			
			<?php if ($this->_var['user']['is_id_card']): ?>
			<dl style="background-color: #fff;border: 1px solid #e0e0e0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;margin-top: 10px;width: 1100px;margin-left: auto;margin-right: auto;">
				<dt style="position: relative;height: 53px;line-height: 53px;padding: 0 20px;cursor: pointer;margin: 0;list-style: none;" class="box_shadow" onclick="if (document.getElementById('tab1').style.display=='none'){document.getElementById('tab1').style.display=''}else{document.getElementById('tab1').style.display='none'}">
					<span style="float: left;font-size: 16px;">
						实名认证
					</span>
					<span style="float: left;font-size: 14px;margin-left: 10px;color: #666;">
						（为了保障您的资金安全，审核您的有效身份）
					</span>
					<div style="float: right;">
						<span style="margin-right: 30px;float:right">
							已认证
						</span>
						<img src="themes/ecmoban_jumei/images/form_ico1.png" style="margin-top:16px;float:right">
					</div>
				</dt>
				
				<dd style="display: block;border-top: 1px solid #f4f4f4;padding: 0;margin: 0;list-style: none;overflow:hidden;" id="tab1">
					<div style="padding: 20px;display: table;width: 100%;">
						<div style="display: table-row;">
							<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
								认证姓名：
							</div>
							<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;">
								<?php echo $this->_var['user']['true_name']; ?>
							</div>
						</div><div class="clearfix"></div>
						<div style="display: table-row;">
							<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
								证件类型：
							</div>
							<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;">
								身份证
							</div>
						</div><div class="clearfix"></div>
						<div style="display: table-row;">
							<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
								证件号码：
							</div>
							<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;">
								<?php echo $this->_var['user']['formed_id_number']; ?>
							</div>
						</div><div class="clearfix"></div>
						<div style="display: table-row;">
							<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
							</div>
							<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;color: #666;">
								<span style="color: #e84338;">注：</span>
								通过认证的实名信息不能修改。提现只能到实名认证同名的银行卡中
							</div>
						</div><div class="clearfix"></div>
					</div>
				</dd>
			</dl>
			<?php if ($this->_var['user']['is_bank_card']): ?>
			<dl style="background-color: #fff;border: 1px solid #e0e0e0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;margin-top: 10px;width: 1100px;margin-left: auto;margin-right: auto;">
				<dt style="position: relative;height: 53px;line-height: 53px;padding: 0 20px;cursor: pointer;margin: 0;list-style: none;" class="box_shadow" onclick="if (document.getElementById('tab2').style.display=='none'){document.getElementById('tab2').style.display=''}else{document.getElementById('tab2').style.display='none'}">
					<span style="float: left;font-size: 16px;">
						第三方支付认证
					</span>
					<span style="float: left;font-size: 14px;margin-left: 10px;color: #666;">
						（资金第三方保全认证）
					</span>
					<div style="float: right;">
						<span style="margin-right: 30px;float:right">
							已认证
						</span>
						<img src="themes/ecmoban_jumei/images/form_ico1.png" style="margin-top:16px;float:right">
					</div>
				</dt>
				
				<dd style="display: block;border-top: 1px solid #f4f4f4;padding: 0;margin: 0;list-style: none;overflow:hidden;" id="tab2">
					<div style="padding: 20px;display: table;width: 100%;position:relative">
						<div style="position:absolute;height:180px;width:360px;top:20px;right:92px;z-index:10;border:2px #468fd1 dashed ">
						<a href="fuiou.php?action=login">
							<img style="width:150px;padding-top:15px;padding-left:20px" src="themes/ecmoban_jumei/images/fuiou_logo.png">
							<span style="color:#468fd1;padding-left:10px">
							查看第三方支付账户>>>	
							</span>
						</a>
							<div style="padding-top:10px;color:#4c4c4c;padding-left:20px;padding-right:20px;">
								温馨提示：<br>
您的第三方支付账户的账号为您的政金网账号（即您的注册手机号），登录密码为您绑定银行卡时所填写的登录密码。
							</div>
						</div>
						<div style="display: table-row;">
							<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
								绑定状态：
							</div>
							<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;">
								已绑定
							</div>
						</div><div class="clearfix"></div>
						<div style="display: table-row;">
							<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
								绑定编号：
							</div>
							<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;">
								<?php echo $this->_var['user']['user_id']; ?>
							</div>
						</div><div class="clearfix"></div>
						<div style="display: table-row;">
							<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
								激活状态：
							</div>
							<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;">
								已激活
							</div>
						</div><div class="clearfix"></div>
						<div style="display: table-row;">
							<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
								会员类型：
							</div>
							<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;">
								个人会员
							</div>
						</div><div class="clearfix"></div>
					</div>
				</dd>
			</dl>
			<?php endif; ?>
			<dl style="background-color: #fff;border: 1px solid #e0e0e0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;margin-top: 10px;width: 1100px;margin-left: auto;margin-right: auto;">
				<dt style="position: relative;height: 53px;line-height: 53px;padding: 0 20px;cursor: pointer;margin: 0;list-style: none;" class="box_shadow" onclick="if (document.getElementById('tab3').style.display=='none'){document.getElementById('tab3').style.display=''}else{document.getElementById('tab3').style.display='none'}">
					<span style="float: left;font-size: 16px;">
						银行卡认证
					</span>
					<span style="float: left;font-size: 14px;margin-left: 10px;color: #666;">
						（为了保证您的资金安全，只能绑定一张银行卡）
					</span>
					<div style="float: right;">
						<span style="margin-right: 30px;float:right">
							<?php if ($this->_var['user']['is_bank_card']): ?>已认证<?php else: ?>未设置<?php endif; ?>
						</span>
						<?php if ($this->_var['user']['is_bank_card']): ?>
						<img src="themes/ecmoban_jumei/images/form_ico1.png" style="margin-top:16px;float:right">
						<?php else: ?>
						<img src="themes/ecmoban_jumei/images/form_ico2.png" style="margin-top:16px;float:right">
						<?php endif; ?>
					</div>
				</dt>
				
				<dd style="display: block;border-top: 1px solid #f4f4f4;padding: 0;margin: 0;list-style: none;overflow:hidden;" id="tab3">
					<div style="padding: 20px;display: table;width: 100%;">
						<?php if ($this->_var['user']['is_bank_card']): ?>
						<div style="display: table-row;">
							<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
								绑定状态：
							</div>
							<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;">
								已绑定
							</div>
						</div><div class="clearfix"></div>
						<div style="display: table-row;">
							<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
								验证状态：
							</div>
							<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;">
								已认证
							</div>
						</div><div class="clearfix"></div>
						<div style="display: table-row;">
							<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
								持卡人：
							</div>
							<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;">
								<?php echo $this->_var['user']['true_name']; ?>
							</div>
						</div><div class="clearfix"></div>
						<div style="display: table-row;">
							<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
								银行卡卡号：
							</div>
							<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;">
								<?php echo $this->_var['user']['formed_fuiou_capacntno']; ?>
							</div>
						</div><div class="clearfix"></div>
						<div style="display: table-row;">
							<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
								开户行：
							</div>
							<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;">
								<?php echo $this->_var['user']['fuiou_bank_nm']; ?>
							</div>
						</div><div class="clearfix"></div>
						<div style="display: table-row;">
							<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
							</div>
							<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;color: #666;">
								<span style="color: #e84338;">注：</span>
								只能绑定一张银行卡，且绑定后不能更换。提现只能到实名认证同名的银行卡中
							</div>
						</div><div class="clearfix"></div>
						<?php else: ?>
						<div style="display: table-row;">
							<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
								 
							</div>
							<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 65px;">
							    <a href="fuiou.php?action=link_bank_card">
									<button style="width: 110px;height: 38px;line-height: 38px;color: #fff;display: inline-block;text-align: center;outline: none;cursor: pointer;-webkit-border-radius: 3px;-moz-border-radius: 3px; border-radius: 3px;-webkit-transition: all ease-in-out 0.15s;-moz-transition: all ease-in-out 0.15s;-ms-transition: all ease-in-out 0.15s;-o-transition: all ease-in-out 0.15s;transition: all ease-in-out 0.15s;border: none;box-sizing: border-box;" class="box_shadow4">
										绑定银行卡
									</button>
								</a>
							</div>
						</div><div class="clearfix"></div>
						<div style="display: table-row;">
							<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
							 
							</div>
							<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 90px;">
								<p style="line-height: 30px;color: #666;font-size: 14px;">
									<span style="color: #e84338;">
										注：
									</span>
									1.只能绑定一张银行卡,绑定后无法解绑和更换其他银行卡
								</p>
								<p style="line-height: 30px;color: #666;font-size: 14px;">
								　　 2.绑定的银行卡必须与实名认证的姓名一致
								</p>
								<p style="line-height: 30px;color: #666;font-size: 14px;">
								　　 3.提现只能到实名认证同名的银行卡中
								</p>
							</div>
						</div><div class="clearfix"></div>
					</div>		
					<?php endif; ?>
				</dd>
			</dl>
			<dl style="background-color: #fff;border: 1px solid #e0e0e0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;margin-top: 10px;width: 1100px;margin-left: auto;margin-right: auto;">
				<dt style="position: relative;height: 53px;line-height: 53px;padding: 0 20px;cursor: pointer;margin: 0;list-style: none;" class="box_shadow" onclick="if (document.getElementById('tab4').style.display=='none'){document.getElementById('tab4').style.display=''}else{document.getElementById('tab4').style.display='none'}">
					<span style="float: left;font-size: 16px;">
						风险测评
					</span>
					<span style="float: left;font-size: 14px;margin-left: 10px;color: #666;">
						（测试您的风险承受程度）
					</span>
					<div style="float: right;">
						<span style="margin-right: 30px;float:right">
							<?php if ($this->_var['user']['is_form']): ?>已认证<?php else: ?>未设置<?php endif; ?>
						</span>
						<?php if ($this->_var['user']['is_form']): ?>
						<img src="themes/ecmoban_jumei/images/form_ico1.png" style="margin-top:16px;float:right">
						<?php else: ?>
						<img src="themes/ecmoban_jumei/images/form_ico2.png" style="margin-top:16px;float:right">
						<?php endif; ?>
					</div>
				</dt>
				<?php if ($this->_var['user']['is_form']): ?>
				<dd style="display: block;border-top: 1px solid #f4f4f4;padding: 0;margin: 0;list-style: none;overflow:hidden;" id="tab4">
					<div style="padding: 20px;display: table;width: 100%;">
						<div style="display: table-row;">
							<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
								经测评你的风险类型为：
							</div>
							<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;">
								<?php echo $this->_var['user']['user_form_comment']; ?>
							</div>
						</div><div class="clearfix"></div>
					</div>
				</dd>
				<?php else: ?>
				<dd style="display: block;border-top: 1px solid #f4f4f4;padding: 0;margin: 0;list-style: none;overflow:hidden;" id="tab4">
					<form action="user.php?act=complete_form" method="post">
					<div style="padding: 20px;display: table;width: 100%;list-style: none;font-size: 14px;color: #333;">
						<div style="box-sizing: border-box;width: 692px;background-color: #fff;padding: 0;margin-left: auto;margin-right: auto;list-style: none;font-size: 14px;color: #333;">
							<div style="padding: 0 100px;text-align: center;box-sizing: border-box;">
								<div style="padding: 0;margin: 0;list-style: none;position: relative;height: 60px;line-height: 60px;font-size: 18px;font-weight: normal;color: #d01a0b;">
									<span style="padding-left: 10px;font-size: 24px;color: #333;background-color: #fff;padding-right: 10px;display: inline-block;position: relative;line-height: 60px;font-weight: normal;text-align: center;">
										投资人风险承受能力测评问卷
									</span>
								</div>
							</div>
							<div style="background-color: #fcfaec;padding: 10px 48px;color: #db1d0e;">
								<p style="font-size: 14px;line-height: 30px;padding: 0;margin: 0;list-style: none;">
									亲爱的投资者：
								</p>
								<p style="font-size: 14px;line-height: 24px;padding: 0;margin: 0;list-style: none;">为了对您的风险承受能力做出评估，请您认真、客观地填写以下问卷。对于您填写的个人信息，浙金网将予以严格保密，未经许可，不向任何第三方透露。因监管部门履行监管职责要求或司法部门依法行使调阅查询权除外。
								</p>
							</div>
						</div>
						<div style="list-style: none;height: 570px;">
							<div style="width:596px;margin-top: 30px;box-sizing: border-box;font-size: 14px;color: #333;" class="clearfix">
								<div style="padding: 0;margin: 0;list-style: none;line-height: 24px;font-size: 16px;font-weight: normal;color: #333;box-sizing: border-box;">
									1、您的年龄
								</div>
								<div>
									<label style="box-sizing: border-box;padding-left: 25px;font-size: 14px;width: 48%;float: left;margin-bottom: 20px;list-style: none;">
										<input style="position: relative;top: 2px;margin-right: 10px;border: none;" type="radio" name="q1" value="1">A.60岁及以上
									</label>
									<label style="box-sizing: border-box;padding-left: 25px;font-size: 14px;width: 48%;float: left;margin-bottom: 20px;list-style: none;">
										<input style="position: relative;top: 2px;margin-right: 10px;border: none;" type="radio" name="q1" value="2">B.45岁~59岁
									</label>
									<label style="box-sizing: border-box;padding-left: 25px;font-size: 14px;width: 48%;float: left;margin-bottom: 20px;list-style: none;">
										<input style="position: relative;top: 2px;margin-right: 10px;border: none;" type="radio" name="q1" value="3">C.26岁~44岁
									</label>
									<label style="box-sizing: border-box;padding-left: 25px;font-size: 14px;width: 48%;float: left;margin-bottom: 20px;list-style: none;">
										<input style="position: relative;top: 2px;margin-right: 10px;border: none;" type="radio" name="q1" value="4">D.25岁及以下
									</label>	
								</div>
							</div>
							<div style="width:596px;box-sizing: border-box;font-size: 14px;color: #333;" class="clearfix">
								<div style="padding: 0;margin: 0;list-style: none;line-height: 24px;font-size: 16px;font-weight: normal;color: #333;box-sizing: border-box;">
									2、您家庭的年收入状况
								</div>
								<div>
									<label style="box-sizing: border-box;padding-left: 25px;font-size: 14px;width: 48%;float: left;margin-bottom: 20px;list-style: none;">
										<input style="position: relative;top: 2px;margin-right: 10px;border: none;" type="radio" name="q2" value="1">A.5万元以下
									</label>
									<label style="box-sizing: border-box;padding-left: 25px;font-size: 14px;width: 48%;float: left;margin-bottom: 20px;list-style: none;">
										<input style="position: relative;top: 2px;margin-right: 10px;border: none;" type="radio" name="q2" value="2">B.5万元（含）～10万元
									</label>
									<label style="box-sizing: border-box;padding-left: 25px;font-size: 14px;width: 48%;float: left;margin-bottom: 20px;list-style: none;">
										<input style="position: relative;top: 2px;margin-right: 10px;border: none;" type="radio" name="q2" value="3">C.10万元（含）～30万元
									</label>
									<label style="box-sizing: border-box;padding-left: 25px;font-size: 14px;width: 48%;float: left;margin-bottom: 20px;list-style: none;">
										<input style="position: relative;top: 2px;margin-right: 10px;border: none;" type="radio" name="q2" value="4">D.30万元（含）以上
									</label>	
								</div>
							</div>
							<div style="width:596px;box-sizing: border-box;font-size: 14px;color: #333;" class="clearfix">
								<div style="padding: 0;margin: 0;list-style: none;line-height: 24px;font-size: 16px;font-weight: normal;color: #333;box-sizing: border-box;">
									3、除了您的自住用房外，您拥有的资产 (包括存款、股票、信托、银行理财及第二套房产的价值等资产) 总额情况
								</div>
								<div>
									<label style="box-sizing: border-box;padding-left: 25px;font-size: 14px;width: 48%;float: left;margin-bottom: 20px;list-style: none;">
										<input style="position: relative;top: 2px;margin-right: 10px;border: none;" type="radio" name="q3" value="1">A.10万元以下
									</label>
									<label style="box-sizing: border-box;padding-left: 25px;font-size: 14px;width: 48%;float: left;margin-bottom: 20px;list-style: none;">
										<input style="position: relative;top: 2px;margin-right: 10px;border: none;" type="radio" name="q3" value="2">B.10万元（含）～50万元
									</label>
									<label style="box-sizing: border-box;padding-left: 25px;font-size: 14px;width: 48%;float: left;margin-bottom: 20px;list-style: none;">
										<input style="position: relative;top: 2px;margin-right: 10px;border: none;" type="radio" name="q3" value="3">C.50万元（含）～200万元
									</label>
									<label style="box-sizing: border-box;padding-left: 25px;font-size: 14px;width: 48%;float: left;margin-bottom: 20px;list-style: none;">
										<input style="position: relative;top: 2px;margin-right: 10px;border: none;" type="radio" name="q3" value="4">D.200万元（含）以上
									</label>	
								</div>
							</div>
							<div style="width:596px;box-sizing: border-box;font-size: 14px;color: #333;" class="clearfix">
								<div style="padding: 0;margin: 0;list-style: none;line-height: 24px;font-size: 16px;font-weight: normal;color: #333;box-sizing: border-box;">
									4、您参与证券、基金、外汇或期货投资的年限（如有多项，限投资年限最长的一项）
								</div>
								<div>
									<label style="box-sizing: border-box;padding-left: 25px;font-size: 14px;width: 48%;float: left;margin-bottom: 20px;list-style: none;">
										<input style="position: relative;top: 2px;margin-right: 10px;border: none;" type="radio" name="q4" value="1">A.2年以下
									</label>
									<label style="box-sizing: border-box;padding-left: 25px;font-size: 14px;width: 48%;float: left;margin-bottom: 20px;list-style: none;">
										<input style="position: relative;top: 2px;margin-right: 10px;border: none;" type="radio" name="q4" value="2">B.2年（含）～5年
									</label>
									<label style="box-sizing: border-box;padding-left: 25px;font-size: 14px;width: 48%;float: left;margin-bottom: 20px;list-style: none;">
										<input style="position: relative;top: 2px;margin-right: 10px;border: none;" type="radio" name="q4" value="3">C.5年（含）～10年
									</label>
									<label style="box-sizing: border-box;padding-left: 25px;font-size: 14px;width: 48%;float: left;margin-bottom: 20px;list-style: none;">
										<input style="position: relative;top: 2px;margin-right: 10px;border: none;" type="radio" name="q4" value="4">D.10年（含）以上
									</label>	
								</div>
							</div>
							<div style="width:596px;box-sizing: border-box;font-size: 14px;color: #333;" class="clearfix">
								<div style="padding: 0;margin: 0;list-style: none;line-height: 24px;font-size: 16px;font-weight: normal;color: #333;box-sizing: border-box;">
									5、您准备投资互联网金融平台的资金，占您拥有的金融资产的比例是多少？
								</div>
								<div>
									<label style="box-sizing: border-box;padding-left: 25px;font-size: 14px;width: 48%;float: left;margin-bottom: 20px;list-style: none;">
										<input style="position: relative;top: 2px;margin-right: 10px;border: none;" type="radio" name="q5" value="1">A.50%（含）以上
									</label>
									<label style="box-sizing: border-box;padding-left: 25px;font-size: 14px;width: 48%;float: left;margin-bottom: 20px;list-style: none;">
										<input style="position: relative;top: 2px;margin-right: 10px;border: none;" type="radio" name="q5" value="2">B.30%（含）～50%
									</label>
									<label style="box-sizing: border-box;padding-left: 25px;font-size: 14px;width: 48%;float: left;margin-bottom: 20px;list-style: none;">
										<input style="position: relative;top: 2px;margin-right: 10px;border: none;" type="radio" name="q5" value="3">C.20%以下
									</label>
								</div>
							</div>
						</div>
						<div style="width:589px;text-align:center;margin-top:20px">
							<input type="submit" style="height:45px;font-size:20px;color: #fff;cursor: not-allowed;display: inline-block;text-align: center;outline: none;cursor: pointer;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px; -webkit-transition: all ease-in-out 0.15s;-moz-transition: all ease-in-out 0.15s;-ms-transition: all ease-in-out 0.15s;-o-transition: all ease-in-out 0.15s;transition: all ease-in-out 0.15s;width: 318px; border-color: #b6b5b6;box-shadow: none;border: none;" value="提 交" class="box_shadow4">
						</div>
					</div>
					</form>
				</dd>
				<?php endif; ?>
			</dl>
			<dl style="background-color: #fff;border: 1px solid #e0e0e0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;margin-top: 10px;width: 1100px;margin-left: auto;margin-right: auto;">
				<dt style="position: relative;height: 53px;line-height: 53px;padding: 0 20px;cursor: pointer;margin: 0;list-style: none;" class="box_shadow" onclick="if (document.getElementById('tab5').style.display=='none'){document.getElementById('tab5').style.display=''}else{document.getElementById('tab5').style.display='none'}">
					<span style="float: left;font-size: 16px;">
						手机号码认证
					</span>
					<span style="float: left;font-size: 14px;margin-left: 10px;color: #666;">
						（手机号码是您在浙金网的重要凭证，也是登录用户名）
					</span>
					<div style="float: right;">
						<span style="margin-right: 30px;float:right">
							已认证
						</span>
						<img src="themes/ecmoban_jumei/images/form_ico1.png" style="margin-top:16px;float:right">
					</div>
				</dt>
				
				<dd style="display: block;border-top: 1px solid #f4f4f4;padding: 0;margin: 0;list-style: none;overflow:hidden;" id="tab5">
					<div style="padding: 20px;display: table;width: 100%;">
						<div style="display: table-row;">
							<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
								绑定状态：
							</div>
							<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;">
								已绑定
							</div>
						</div><div class="clearfix"></div>
						<div style="display: table-row;">
							<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
								绑定手机：
							</div>
							<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;">
								<?php echo $this->_var['user']['formed_mobile']; ?>
							</div>
						</div><div class="clearfix"></div>
						<!--
						<div style="display: table-row;" id="change_mobile_number0">
							<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
								 
							</div>
							<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;">
								<button style="width: 110px;height: 38px;line-height: 38px;color: #fff;display: inline-block;text-align: center;outline: none;cursor: pointer;-webkit-border-radius: 3px;-moz-border-radius: 3px; border-radius: 3px;-webkit-transition: all ease-in-out 0.15s;-moz-transition: all ease-in-out 0.15s;-ms-transition: all ease-in-out 0.15s;-o-transition: all ease-in-out 0.15s;transition: all ease-in-out 0.15s;border: none;box-sizing: border-box;" class="box_shadow4" onclick="document.getElementById('change_mobile_number0').style.display='none';document.getElementById('change_mobile_number1').style.display='';">
									变更号码
								</button>
							</div>
						</div>-->
						</dd>
						<dd>
						<form action="user.php?act=act_change_mobile" method="post">
							<div id ="change_mobile_number1" style="display:none;width: 990px;margin-left: auto;margin-right: auto;margin-bottom: 40px;border: 1px solid #f1efde;background-color: #fdfcf3;font-size: 14px;color: #333;">
								<div style="height: 48px;line-height: 47px;border-bottom: 1px solid #f1efde;padding-left: 20px;box-sizing: border-box;font-size: 14px;color: #333;">
									变更手机号码
								</div>
								<div class="clearfix">
									<div style="width: 500px;padding: 20px;display: table;float: left;">
										<div style="display: table-row;">
											<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;font-size: 14px;color: #333;">
												新绑定手机号码：
											</div>
											<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;font-size: 14px;color: #333;">
												<input type="text" style="width: 235px;height: 36px;line-height: 34px;border: 1px solid #e2e1d6;background: #fff;padding: 0 10px;  outline: none;-webkit-border-radius: 3px;-moz-border-radius: 3px; border-radius: 3px;-webkit-transition: all ease-in-out 0.15s; -moz-transition: all ease-in-out 0.15s;-ms-transition: all ease-in-out 0.15s;-o-transition: all ease-in-out 0.15s;transition: all ease-in-out 0.15s;" name="mobile_phone" id="mobile_phone">
											</div>
											<div class="clearfix"></div>
										</div>
										<div style="display: table-row;">
											<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;font-size: 14px;color: #333;">
												短信验证码：
											</div>
											<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;font-size: 14px;color: #333;">
												<input type="text" style="width: 120px;height: 36px;line-height: 34px;border: 1px solid #e2e1d6;background: #fff;padding: 0 10px;  outline: none;-webkit-border-radius: 3px;-moz-border-radius: 3px; border-radius: 3px;-webkit-transition: all ease-in-out 0.15s; -moz-transition: all ease-in-out 0.15s;-ms-transition: all ease-in-out 0.15s;-o-transition: all ease-in-out 0.15s;transition: all ease-in-out 0.15s;" name="mobile_code">
												<input style="width: 70px;height: 36px;line-height: 36px;padding: 0 14px;border: 1px solid #f8eacb;margin-left: 10px;background-color: #f8eacb;font-size: 14px;color: #ed8a32;-webkit-border-radius: 3px; -moz-border-radius: 3px;border-radius: 3px;display: inline-block; text-align: center;outline: none;cursor: pointer;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;-webkit-transition: all ease-in-out 0.15s; -moz-transition: all ease-in-out 0.15s;-ms-transition: all ease-in-out 0.15s;-o-transition: all ease-in-out 0.15s;transition: all ease-in-out 0.15s;" onclick="sendSms()" value="发送验证码" id="zphone" name="sendsms">
												<input type="hidden" value="change_mobile" name="flag" id="flag">
											</div>
											<div class="clearfix"></div>
										</div>
										<div style="display: table-row;">
											<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;font-size: 14px;color: #333;">
												账号登录密码：
											</div>
											<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;font-size: 14px;color: #333;">
												<input type="password" style="width: 235px;height: 36px;line-height: 34px;border: 1px solid #e2e1d6;background: #fff;padding: 0 10px;  outline: none;-webkit-border-radius: 3px;-moz-border-radius: 3px; border-radius: 3px;-webkit-transition: all ease-in-out 0.15s; -moz-transition: all ease-in-out 0.15s;-ms-transition: all ease-in-out 0.15s;-o-transition: all ease-in-out 0.15s;transition: all ease-in-out 0.15s;" name="password">
											</div>
											<div class="clearfix"></div>
										</div>
										<div style="display: table-row;">
											<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;font-size: 14px;color: #333;">
											</div>
											<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;font-size: 14px;color: #333;">
												<button style="width: 110px;height: 38px;line-height: 38px;color: #fff;    display: inline-block;text-align: center;outline: none;cursor: pointer;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;-webkit-transition: all ease-in-out 0.15s;-moz-transition: all ease-in-out 0.15s;-ms-transition: all ease-in-out 0.15s;-o-transition: all ease-in-out 0.15s;transition: all ease-in-out 0.15s;border: none;" class="box_shadow4">
													提交修改
												</button>
											</div>
											<div class="clearfix"></div>
										</div>											
									</div>
									<div style="float: right;line-height: 30px;margin-right: 20px;margin-top: 20px;">
										<p style="font-size: 14px;color: #333;">
											什么是账号登录密码？
										</p>
										<p style="font-size: 14px;color: #666;">
											账号登录密码就是您登录政金网账号时输入的密码
										</p>	
										<br>
										<p style="font-size: 14px;color: #333;">
											没收到短信验证码怎么办？
										</p>
										<p style="font-size: 14px;color: #666;">
											您可以再次尝试，发送验证码。或者直接联系客服
										</p>
									</div>
								</div>
							</div>
							
							<div class="clearfix"></div>
						</div>
					</form>
				</dd>
			</dl>
			<?php else: ?>
			<dl style="background-color: #fff;border: 1px solid #e0e0e0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;margin-top: 10px;width: 1100px;margin-left: auto;margin-right: auto;">
				<dt style="position: relative;height: 53px;line-height: 53px;padding: 0 20px;cursor: pointer;margin: 0;list-style: none;" class="box_shadow" onclick="if (document.getElementById('tab1').style.display=='none'){document.getElementById('tab1').style.display=''}else{document.getElementById('tab1').style.display='none'}">
					<span style="float: left;font-size: 16px;">
						实名认证
					</span>
					<span style="float: left;font-size: 14px;margin-left: 10px;color: #666;">
						（为了保障您的资金安全，审核您的有效身份）
					</span>
					<div style="float: right;">
						<span style="margin-right: 30px;float:right">
							未认证
						</span>
						<img src="themes/ecmoban_jumei/images/form_ico2.png" style="margin-top:16px;float:right">
					</div>
				</dt>
				<dd style="display: block;border-top: 1px solid #f4f4f4;padding: 0;margin: 0;list-style: none;overflow:hidden;" id="tab1">
				<form action="user.php?act=act_identify_id_card" method="POST">
					<div style="padding: 20px;display: table;width: 100%;">
						<div style="display: table-row;">
							<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
								真实姓名：
							</div>
							<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;">
								<input style="width: 235px;height: 36px;line-height: 34px;border: 1px solid #e2e1d6;background: #fff;padding: 0 10px;outline: none;border-radius: 3px;" name="true_name">
							</div>
						</div><div class="clearfix"></div>
						<div style="display: table-row;">
							<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
								证件类型：
							</div>
							<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;">
								<select style="width: 258px;height: 36px;line-height: 34px;border: 1px solid #e2e1d6;background: #fff;padding-right: 0;border-radius: 2px;padding: 0 10px;outline: none;transition: all ease-in-out 0.15s;" name="idcard_type">
                                    <option value="1">身份证</option>
                                </select>
							</div>
						</div><div class="clearfix"></div>
						<div style="display: table-row;">
							<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
								证件号码：
							</div>
							<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;">
								<input style="width: 235px;height: 36px;line-height: 34px;border: 1px solid #e2e1d6;background: #fff;padding: 0 10px;outline: none;border-radius: 3px;" name="id_number">
							</div>
						</div><div class="clearfix"></div>
						<div style="display: table-row;">
							<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
								重复号码：
							</div>
							<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;">
								<input style="width: 235px;height: 36px;line-height: 34px;border: 1px solid #e2e1d6;background: #fff;padding: 0 10px;outline: none;border-radius: 3px;" name="id_number2">
							</div>
						</div><div class="clearfix"></div>
						<div style="display: table-row;">
							<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
							</div>
							<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;">
								<span style="color: #e84338;">注：</span>
								通过认证的实名信息不能修改。提现只能到实名认证同名的银行卡中
							</div>
						</div><div class="clearfix"></div>
						<div style="display: table-row;">
							<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
							</div>
							<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;">
								<input type="submit" value="立即实名认证并绑定第三方支付账号" style="width: 250px;height: 38px;line-height: 38px;color: #fff;display: inline-block;text-align: center;outline: none;cursor: pointer;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;-webkit-transition: all ease-in-out 0.15s;-moz-transition: all ease-in-out 0.15s;-ms-transition: all ease-in-out 0.15s;-o-transition: all ease-in-out 0.15s;transition: all ease-in-out 0.15s;border: none;" class="box_shadow2">
							</div>
						</div><div class="clearfix"></div>
					</div>
				</form>
				</dd>
			</dl>
			<?php endif; ?>
		</div>
         <?php endif; ?>
         
		 
        
         <?php if ($this->_var['action'] == 'user_product'): ?>
		 <script>
			function wuyou_link(record_no){
				var wyczUrl = "https://www.51cunzheng.com";
				var recordNo = record_no;
				var partnerKey = "89d4a347c99352891ffb2634a4fe3bc0";
				var nonce = new Date().getTime();//随机数
				var tmp = partnerKey+recordNo+nonce;
				var sign = Ancun.md5(tmp);//签名
				
				var url = wyczUrl+'/investment-detail?recordNo=' + recordNo + '&partnerKey=' + partnerKey + '&nonce=' + nonce + '&signature=' + sign;
				window.open(url);
			}
		 </script>
		 <div id="pop" style="position:fixed;top:0;left:0;width:100%;height:100%;z-index:999;display:none">
			<div style="background-color:black;opacity:0.3;width:100%;height:100%;position:absolute;top:0;left:0;z-index:1000">
			</div>
			<div style="width:1200px;margin:0 auto;position:relative">
				<div style="opacity:1;background-color:#fff;width:400px;height:300px;left:400px;top:160px;position:absolute;z-index:1001">
				<form method="POST" action="user.php?act=user_product">
					<input type="hidden" name="flag" value="transfer">
					<input type="hidden" name="order_id" id="order_id" value="">
					<div style="padding:30px">
						<p style="color:#e84338;font-size:18px;font-weight:bold">
							投资转让
						</p>
						<p style="font-size:14px;padding-top:10px">
							项目名称：<span id="transfer_name"></span>
						</p>
						<p style="font-size:14px;padding-top:10px">
							当前价值：<span id="transfer_value"></span><span style="font-size:10px;padding-left:2px">（=项目本金+当期至今收益）</span>
						</p>
						<p style="font-size:14px;padding-top:10px">
							待收收益：<span id="transfer_rest_value"></span>
						</p>
						<p style="font-size:14px;padding-top:10px">
							转让价格：<input type="text" name="transfer_amount" id="transfer_amount"> </input>元
						</p>
						<div style="padding-left:30px;padding-top:40px">
							<input type="submit" value="确认转让" style="background-color:#e84338;color:#fff;padding:10px;padding-left:20px;padding-right:20px;border:1px solid #e84338;border-radius:4px;float:left;margin-left:80px;cursor:pointer">
							<input type="button" value="取消" style="background-color:#fff;color:#e84338;padding:10px;padding-left:32px;padding-right:32px;border:1px solid #e84338;border-radius:4px;float:left;margin-left:20px;cursor:pointer" onclick="document.getElementById('pop').style.display='none'">
							<div class="clearfix"></div>
						</div>
					</div>
				</form>
				</div>
			</div>
		 </div>
		 <div style="margin-bottom: 30px;box-sizing: border-box;">
			<div style="height: 44px;line-height: 44px;background-color: #edecec;box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.1);box-sizing: border-box;">
				<div class="block">
					<a href="user.php" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						账户总览
					</a>
					<a href="javascript:void(0)" style="line-height: 42px;color: #e84338;border-bottom: 2px solid #e84338;height: 44px;padding: 0 12px;margin-right: 15px;float: left;text-decoration: none;box-sizing: border-box;">
						我的投资
					</a>
					<a href="user.php?act=money_log" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						资金管理
					</a>
					<a href="user.php?act=identify" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						账户设置
					</a>
					<a href="user.php?act=reserve_log" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						预约中心
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div style="border: 1px solid #e0e0e0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;background-color: #fdfcf3;margin-top: 20px;width: 1100px;margin-left: auto;margin-right: auto;">
				<p style="border-bottom: 1px solid #f5f5f5;font-size: 18px;padding: 10px;">
					我的投资
				</p>
			</div>
			<div style="border: 1px solid #e0e0e0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;margin-top: 20px;width: 1100px;margin-left: auto;margin-right: auto;">
				<p style="font-size: 16px;padding: 20px;margin: 0;list-style: none;box-sizing: border-box;">
					投资概况
				</p>
				<div style="padding: 0 20px 20px 20px;box-sizing: border-box;display: table;" class="clearfix">
					<div style="width: 264.5px;float: left;box-sizing: border-box;">
						<p style="text-indent: 35px;margin-top: 5px;color: #666;padding: 0;margin: 0;list-style: none;">
							投资金额（元）
						</p>
						<p style="text-indent: 35px;margin-top: 5px;font-size: 30px;color: #333333;padding: 0;margin: 0;list-style: none;font-weight: bold;">
							<?php echo $this->_var['formed_total_inverst_money']; ?>
						</p>
					</div>
					<div style="width: 264.5px;float: left;box-sizing: border-box;">
						<p style="text-indent: 35px;margin-top: 5px;color: #666;padding: 0;margin: 0;list-style: none;">
							已收收益（元）
						</p>
						<p style="text-indent: 35px;margin-top: 5px;font-size: 30px;color: #333333;padding: 0;margin: 0;list-style: none;font-weight: bold;">
							<?php echo $this->_var['formed_total_earn_money']; ?>
						</p>
					</div>
					<div style="width: 264.5px;float: left;box-sizing: border-box;">
						<p style="text-indent: 35px;margin-top: 5px;color: #666;padding: 0;margin: 0;list-style: none;">
							待收收益（元）
						</p>
						<p style="text-indent: 35px;margin-top: 5px;font-size: 30px;color: #333333;padding: 0;margin: 0;list-style: none;font-weight: bold;">
							<?php echo $this->_var['formed_rest_earn_money']; ?>
						</p>
					</div>
					<div style="width: 264.5px;float: left;box-sizing: border-box;">
						<p style="text-indent: 35px;margin-top: 5px;color: #666;padding: 0;margin: 0;list-style: none;">
							当前持有收益（元）                    
						</p>
						<p style="text-indent: 35px;margin-top: 5px;font-size: 30px;color: #333333;padding: 0;margin: 0;list-style: none;color: #e84338;font-weight: bold;">
							<?php echo $this->_var['formed_taking_earn_money']; ?>
						</p>
					</div>
				</div>
			</div>
			<div style="background-color: #fff;border: 1px solid #e0e0e0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;margin-top: 10px;width: 1100px;margin-left: auto;margin-right: auto;">
				<div style="padding: 10px 20px;box-sizing: border-box;">
					<a href="user.php?act=user_product&filter=1" style="<?php if ($this->_var['filter'] == 1): ?>background-color: #fda04e;color: #fff;<?php else: ?>color: #666;<?php endif; ?>display: inline-block;height: 28px;line-height: 28px;text-align: center;padding: 0 10px;outline: none;cursor: pointer;border-radius: 3px;transition: all ease-in-out 0.15s;margin-right: 5px;">
						持有中
					</a>
					<a href="user.php?act=user_product&filter=2" style="<?php if ($this->_var['filter'] == 2): ?>background-color: #fda04e;color: #fff;<?php else: ?>color: #666;<?php endif; ?>display: inline-block;height: 28px;line-height: 28px;text-align: center;padding: 0 10px;outline: none;cursor: pointer;border-radius: 3px;transition: all ease-in-out 0.15s;margin-right: 5px;">
						已结清
					</a>
					<a href="user.php?act=user_product&filter=4" style="<?php if ($this->_var['filter'] == 4): ?>background-color: #fda04e;color: #fff;<?php else: ?>color: #666;<?php endif; ?>display: inline-block;height: 28px;line-height: 28px;text-align: center;padding: 0 10px;outline: none;cursor: pointer;border-radius: 3px;transition: all ease-in-out 0.15s;margin-right: 5px;">
						已转让
					</a>
					<a href="user.php?act=user_product&filter=3" style="<?php if ($this->_var['filter'] == 3): ?>background-color: #fda04e;color: #fff;<?php else: ?>color: #666;<?php endif; ?>display: inline-block;height: 28px;line-height: 28px;text-align: center;padding: 0 10px;outline: none;cursor: pointer;border-radius: 3px;transition: all ease-in-out 0.15s;margin-right: 5px;">
						未完成
					</a>
				</div>
			</div>
			<style>
				.box_shadow1{color: #e84338;background-color:#f4f4f4}
				.box_shadow1:hover{color: #fff;background-color:#e84338}
				.box_shadow2{background: url(themes/ecmoban_jumei/images/uc-print.png)}
				.box_shadow2:hover{background: url(themes/ecmoban_jumei/images/uc-print.png) no-repeat center 100%;}
			</style>
			<?php $_from = $this->_var['order_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'order');if (count($_from)):
    foreach ($_from AS $this->_var['order']):
?>
			<?php if ($this->_var['filter'] == $this->_var['order']['order_status']): ?>
			<div style="width: 1100px;margin-left: auto;margin-right: auto;box-sizing: border-box;">
				<div style="height: 46px;line-height: 46px;padding: 0 20px;box-sizing: border-box;">
					<span style="float: left;font-size: 16px;" id="goods_name_<?php echo $this->_var['order']['order_id']; ?>"><?php echo $this->_var['order']['goods_name']; ?></span>
					<?php if ($this->_var['order']['parent_id']): ?>
					<span style="background-color: #3ab63a;color: #fff;height: 21px;line-height: 21px;font-size: 12px;padding: 0 5px;display: inline-block;margin-top:13px;margin-left:10px">
						转让
					</span>
					<?php endif; ?>
					<div style="float: right;color: #333333;box-sizing: border-box;line-height: 46px;">
						到期时间：<?php echo $this->_var['order']['formed_goods_return_time']; ?>
						<span style="margin-left: 50px;">状态：</span>
						<span style="color: #e84338;<?php if ($this->_var['order']['pay_time'] > 0): ?><?php if ($this->_var['order']['is_return']): ?><?php else: ?>
						<?php if ($this->_var['order']['goods_transfer_flag']): ?><?php else: ?>margin-right:60px<?php endif; ?><?php endif; ?><?php endif; ?>"><?php if ($this->_var['order']['pay_time'] > 0): ?><?php if ($this->_var['order']['is_return']): ?>已结清<?php else: ?><?php if ($this->_var['order']['transfer_flag'] == 2): ?>已转让<?php else: ?>持有中<?php endif; ?><?php endif; ?><?php else: ?>未完成<?php endif; ?></span>
						<?php if ($this->_var['order']['pay_time'] > 0): ?><?php if ($this->_var['order']['is_return']): ?><?php else: ?>
						<?php if ($this->_var['order']['goods_transfer_flag']): ?>
							<?php if ($this->_var['order']['transfer_flag'] == 0): ?>


									<?php if ($this->_var['order']['can_transfer']): ?>
									<a href="javascript:void(0)"style="margin-left: 20px;border-radius:2px;border:1px #e84338 solid;padding:3px;padding-top:1px;padding-bottom:1px" class="box_shadow1" onclick="document.getElementById('pop').style.display='';document.getElementById('order_id').value='<?php echo $this->_var['order']['order_id']; ?>';document.getElementById('transfer_name').innerHTML='<?php echo $this->_var['order']['goods_name']; ?>';document.getElementById('transfer_value').innerHTML='<?php echo $this->_var['order']['taking_earn_money_and_amount']; ?>元';document.getElementById('transfer_rest_value').innerHTML='<?php echo $this->_var['order']['rest_earn_money']; ?>元';">转让</a>
									<?php else: ?>
									<a href="javascript:void(0)"style="margin-left: 20px;border-radius:2px;border:1px #e84338 solid;padding:3px;padding-top:1px;padding-bottom:1px" class="box_shadow1" onclick="alert('需在持有该产品超过5天后，并且在该产品的一个非产品到期日/收益分配日且至少在下一个产品到期日/收益分配日的5天之前转让。')">转让</a>
									<?php endif; ?>

							<?php endif; ?>
							<?php if ($this->_var['order']['transfer_flag'] == 1): ?>
							<a href="javascript:void(0)"style="margin-left: 20px;border-radius:2px;border:1px #e84338 solid;padding:3px;padding-top:1px;padding-bottom:1px" class="box_shadow1" onclick="if(confirm('确认撤销转让请求？')){window.location.href='transfer.php?act=cancel&order_id=<?php echo $this->_var['order']['order_id']; ?>'}">撤销转让</a>
							<?php endif; ?>
						<?php endif; ?><?php endif; ?><?php endif; ?>
					</div>
				</div>
				<div style="padding: 20px 10px;background-color: #fff;">
					<div style="padding:5px">
						<table style="width: 100%;">
							<thead style="color: #888;">
								<tr style="box-sizing: border-box;">
									<td style="line-height: 24px;" width="112">
										投资时间
									</td>
									<td style="line-height: 24px;" width="104">
										实际投资金额
									</td>
									<td style="line-height: 24px;" width="142">
										本金/预期年化收益率
									</td>
									<td style="line-height: 24px;" width="120">
										<?php if ($this->_var['filter'] == 1): ?>产品期限<?php endif; ?>
										<?php if ($this->_var['filter'] == 2): ?>产品期限<?php endif; ?>
										<?php if ($this->_var['filter'] == 3): ?>产品期限<?php endif; ?>
										<?php if ($this->_var['filter'] == 4): ?>持有天数<?php endif; ?>
									</td>
									<td style="line-height: 24px;" width="230">
										<?php if ($this->_var['filter'] == 1): ?>已收收益/待收收益（总）<?php endif; ?>
										<?php if ($this->_var['filter'] == 2): ?>实收收益<?php endif; ?>
										<?php if ($this->_var['filter'] == 3): ?><?php endif; ?>
										<?php if ($this->_var['filter'] == 4): ?>转让时间/转让价格<?php endif; ?>
									</td>
									<td style="line-height: 24px;" width="206">
										<?php if ($this->_var['filter'] == 1): ?>下次收益(元)/时间<?php endif; ?>
										<?php if ($this->_var['filter'] == 2): ?>实收总额<?php endif; ?>
										<?php if ($this->_var['filter'] == 3): ?><?php endif; ?>
										<?php if ($this->_var['filter'] == 4): ?>总收益<?php endif; ?>
									</td>
									<td style="line-height: 24px;text-align: center;" width="40">
										合同
									</td>
									<td style="line-height: 24px;text-align: center;" width="81">
										保全公证
									</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style="line-height: 24px;"><?php echo $this->_var['order']['formed_pay_time']; ?></td>
									<td style="line-height: 24px;">
									<?php if ($this->_var['order']['parent_id']): ?>
										<?php echo $this->_var['order']['buy_transfer_amount']; ?>元
									<?php else: ?>
										<?php echo $this->_var['order']['amount']; ?>元
									<?php endif; ?>
									</td>
									<td style="line-height: 24px;"><?php echo $this->_var['order']['amount']; ?>元/<?php echo $this->_var['order']['goods_interest_rate']; ?>%</td>
									<td style="line-height: 24px;" width="120">
										<?php if ($this->_var['filter'] == 1): ?><?php echo $this->_var['order']['goods_period']; ?>天<?php endif; ?>
										<?php if ($this->_var['filter'] == 2): ?><?php echo $this->_var['order']['goods_period']; ?>天<?php endif; ?>
										<?php if ($this->_var['filter'] == 3): ?><?php echo $this->_var['order']['goods_period']; ?>天<?php endif; ?>
										<?php if ($this->_var['filter'] == 4): ?><?php echo $this->_var['order']['taking_day']; ?>天<?php endif; ?>
									</td>
									<td style="line-height: 24px;">
										<?php if ($this->_var['filter'] == 1): ?><?php echo $this->_var['order']['total_earn_money']; ?>/<?php echo $this->_var['order']['rest_earn_money']; ?>元<?php endif; ?>
										<?php if ($this->_var['filter'] == 2): ?><?php echo $this->_var['order']['total_earn']; ?>元<?php endif; ?>
										<?php if ($this->_var['filter'] == 3): ?><?php endif; ?>
										<?php if ($this->_var['filter'] == 4): ?><?php echo $this->_var['order']['formed_transfer_end_time']; ?>/<?php echo $this->_var['order']['transfer_amount']; ?>元<?php endif; ?>
									</td>
									<td style="line-height: 24px;">
										<?php if ($this->_var['filter'] == 1): ?><?php echo $this->_var['order']['next_earn_money']; ?>/<?php echo $this->_var['order']['formed_next_earn_time']; ?><?php endif; ?>
										<?php if ($this->_var['filter'] == 2): ?><?php echo $this->_var['order']['total_get']; ?>元<?php endif; ?>
										<?php if ($this->_var['filter'] == 3): ?><?php endif; ?>
										<?php if ($this->_var['filter'] == 4): ?><?php echo $this->_var['order']['total_earn_money']; ?>元<?php endif; ?>
									</td>
									<td style="line-height: 24px;text-align:center">
									<?php if (! $this->_var['order']['parent_id']): ?>
										<a href="contact/contact_<?php echo $this->_var['order']['pay_sn']; ?>.pdf" style="display: inline-block;width: 16px;height: 16px;color: #333;text-decoration: none;" class="box_shadow2">
										</a>
									<?php endif; ?>
									</td>
									<td style="line-height: 24px;text-align:center">
									<?php if (! $this->_var['order']['parent_id']): ?>
										<a href="javascript:void(0)" onclick="wuyou_link('<?php echo $this->_var['order']['wuyou_recordno']; ?>')" style="display: inline-block;width: 16px;height: 16px;color: #333;text-decoration: none;" class="box_shadow2">
										</a>
									<?php endif; ?>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		 </div>
         <?php endif; ?>
         
		 
		<?php if ($this->_var['action'] == 'profile'): ?>
<style>
	.box_shadow{}
	.box_shadow:hover{background: #fdfcf3;}
	.box_shadow2{background: #f75151;color: #fff;}
	.box_shadow2:hover{color: #fff;background: #f52020;}
</style>
        <div style="margin-bottom: 30px;box-sizing: border-box;">
			<div style="height: 44px;line-height: 44px;background-color: #edecec;box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.1);box-sizing: border-box;">
				<div class="block">
					<a href="user.php" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						账户总览
					</a>
					<a href="user.php?act=user_product" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						我的投资
					</a>
					<a href="user.php?act=money_log" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						资金管理
					</a>
					<a href="javascript:void(0)" style="line-height: 42px;color: #e84338;border-bottom: 2px solid #e84338;height: 44px;padding: 0 12px;margin-right: 15px;float: left;text-decoration: none;box-sizing: border-box;">
						账户设置
					</a>
					<a href="user.php?act=reserve_log" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;box-sizing: border-box;">
						预约中心
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div style="position: relative;background-color: #fdfcf3;margin-bottom: 20px;margin-top: 20px;width: 1100px;margin-left: auto;margin-right: auto;border: 1px solid #e0e0e0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;">
				<p style="border-bottom: 1px solid #f5f5f5;font-size: 18px;margin-left: 10px;padding: 10px;margin: 0;list-style: none;">账户设置</p>
				<div style="position: absolute;right: 0;top: 0;background: transparent;-webkit-box-shadow: none;-moz-box-shadow: none;box-shadow: none;height: 44px;line-height: 44px;" class="clearfix">
					<a href="user.php?act=identify" style="height: 44px;line-height: 44px;padding: 0 12px;margin-right: 15px;color: #666;float: left;text-decoration: none;">
						身份认证
					</a>
					<a href="user.php?act=profile" style="line-height: 42px;color: #e84338;border-bottom: 2px solid #e84338;height: 44px;padding: 0 12px;margin-right: 15px;float: left;text-decoration: none;">
						密码管理
					</a>
				</div>
			</div>
			<dl style="background-color: #fff;border: 1px solid #e0e0e0;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;margin-top: 10px;width: 1100px;margin-left: auto;margin-right: auto;">
				<dt style="position: relative;height: 53px;line-height: 53px;padding: 0 20px;cursor: pointer;margin: 0;list-style: none;" class="box_shadow" onclick="if (document.getElementById('tab1').style.display=='none'){document.getElementById('tab1').style.display=''}else{document.getElementById('tab1').style.display='none'}">
					<span style="float: left;font-size: 16px;">
						登陆密码
					</span>
					<span style="float: left;font-size: 14px;margin-left: 10px;color: #666;">
					</span>
					<div style="float: right;">
						<span style="margin-right: 30px;">
							<?php if ($this->_var['user']['is_id_card']): ?>已认证<?php else: ?>未认证<?php endif; ?>
						</span>
					</div>
				</dt>

				<dd style="display: block;border-top: 1px solid #f4f4f4;padding: 0;margin: 0;list-style: none;overflow:hidden;" id="tab1">
					<div style="padding: 20px;display: table;width: 100%;" id="tab_pwd_1">
						<div style="display: table-row;">
							<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
							</div>
							<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;">
								<button style="width: 110px;height: 38px;line-height: 38px;display: inline-block;text-align: center;outline: none;cursor: pointer;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;-webkit-transition: all ease-in-out 0.15s;-moz-transition: all ease-in-out 0.15s;-ms-transition: all ease-in-out 0.15s;-o-transition: all ease-in-out 0.15s;transition: all ease-in-out 0.15s;border:none" class="box_shadow2" onclick="document.getElementById('tab_pwd_1').style.display='none';document.getElementById('tab_pwd_2').style.display=''">
									修改登录密码
								</button>
							</div>
						</div><div class="clearfix"></div>
					</div>
					<div style="display: none;width: 990px;margin-left: auto;margin-right: auto;margin-top: 40px;margin-bottom: 40px;border: 1px solid #f1efde;background-color: #fdfcf3;" id="tab_pwd_2">
						<div style="height: 48px;line-height: 47px;border-bottom: 1px solid #f1efde;padding-left: 20px;">
							修改登录密码
						</div>
						<form name="formPassword" action="user.php" method="post">
						<div class="clearfix" style="">
							<input name="act" type="hidden" value="act_edit_password" />
							<div style="width: 500px;padding: 20px;display: table;">
								<div style="display: table-row;">
									<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
										原始密码：
									</div>
									<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;">
										<input type="password" name="old_password" style="width: 235px;height: 36px;line-height: 34px;border: 1px solid #e2e1d6;background: #fff;padding: 0 10px;outline: none;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;-webkit-transition: all ease-in-out 0.15s;-moz-transition: all ease-in-out 0.15s;-ms-transition: all ease-in-out 0.15s;-o-transition: all ease-in-out 0.15s;transition: all ease-in-out 0.15s;">
									</div>
								</div>
								<div style="display: table-row;">
									<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
										新密码：
									</div>
									<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;">
										<input type="password" name="new_password" style="width: 235px;height: 36px;line-height: 34px;border: 1px solid #e2e1d6;background: #fff;padding: 0 10px;outline: none;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;-webkit-transition: all ease-in-out 0.15s;-moz-transition: all ease-in-out 0.15s;-ms-transition: all ease-in-out 0.15s;-o-transition: all ease-in-out 0.15s;transition: all ease-in-out 0.15s;">
									</div>
								</div>
								<div style="display: table-row;">
									<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
										确认新密码：
									</div>
									<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;">
										<input type="password" name="comfirm_password" style="width: 235px;height: 36px;line-height: 34px;border: 1px solid #e2e1d6;background: #fff;padding: 0 10px;outline: none;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;-webkit-transition: all ease-in-out 0.15s;-moz-transition: all ease-in-out 0.15s;-ms-transition: all ease-in-out 0.15s;-o-transition: all ease-in-out 0.15s;transition: all ease-in-out 0.15s;">
									</div>
								</div>
								<div style="display: table-row;">
									<div style="display: table-cell;text-align: right;vertical-align: middle;padding-bottom: 15px;width: 1%;white-space: nowrap;">
									</div>
									<div style="display: table-cell;vertical-align: middle;padding-bottom: 15px;padding-left: 10px;">
										<input type="submit" style="width: 235px;height: 36px;line-height: 34px;padding: 0 10px;outline: none;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;-webkit-transition: all ease-in-out 0.15s;-moz-transition: all ease-in-out 0.15s;-ms-transition: all ease-in-out 0.15s;-o-transition: all ease-in-out 0.15s;transition: all ease-in-out 0.15s;cursor:pointer;border:none" value="提交修改" class="box_shadow2">
									</div>
								</div>
							</div>
						</div>
						</form>
					</div>
				</dd>
			</dl>
		</div>
		
     <?php endif; ?>
     
	 
         
         <?php if ($this->_var['action'] == 'message_list'): ?>
          <h5><span><?php echo $this->_var['lang']['label_message']; ?></span></h5>
          <div class="blank"></div>
           <?php $_from = $this->_var['message_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'message');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['message']):
?>
          <div class="f_l">
          <b><?php echo $this->_var['message']['msg_type']; ?>:</b>&nbsp;&nbsp;<font class="f4"><?php echo $this->_var['message']['msg_title']; ?></font> (<?php echo $this->_var['message']['msg_time']; ?>)
          </div>
          <div class="f_r">
          <a href="user.php?act=del_msg&amp;id=<?php echo $this->_var['key']; ?>&amp;order_id=<?php echo $this->_var['message']['order_id']; ?>" title="<?php echo $this->_var['lang']['drop']; ?>" onclick="if (!confirm('<?php echo $this->_var['lang']['confirm_remove_msg']; ?>')) return false;" class="f6"><?php echo $this->_var['lang']['drop']; ?></a>
          </div>
          <div class="msgBottomBorder">
          <?php echo $this->_var['message']['msg_content']; ?>
           <?php if ($this->_var['message']['message_img']): ?>
           <div align="right">
           <a href="data/feedbackimg/<?php echo $this->_var['message']['message_img']; ?>" target="_bank" class="f6"><?php echo $this->_var['lang']['view_upload_file']; ?></a>
           </div>
           <?php endif; ?>
           <br />
           <?php if ($this->_var['message']['re_msg_content']): ?>
           <a href="mailto:<?php echo $this->_var['message']['re_user_email']; ?>" class="f6"><?php echo $this->_var['lang']['shopman_reply']; ?></a> (<?php echo $this->_var['message']['re_msg_time']; ?>)<br />
           <?php echo $this->_var['message']['re_msg_content']; ?>
           <?php endif; ?>
          </div>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php if ($this->_var['message_list']): ?>
          <div class="f_r">
          <?php echo $this->fetch('library/pages.lbi'); ?>
          </div>
          <?php endif; ?>
          <div class="blank"></div>
          <form action="user.php" method="post" enctype="multipart/form-data" name="formMsg" onSubmit="return submitMsg()">
                  <table width="100%" border="0" cellpadding="3">
                    <?php if ($this->_var['order_info']): ?>
                    <tr>
                      <td align="right"><?php echo $this->_var['lang']['order_number']; ?></td>
                      <td>
                      <a href ="<?php echo $this->_var['order_info']['url']; ?>"><img src="themes/ecmoban_jumei/images/note.gif" /><?php echo $this->_var['order_info']['order_sn']; ?></a>
                      <input name="msg_type" type="hidden" value="5" />
                      <input name="order_id" type="hidden" value="<?php echo $this->_var['order_info']['order_id']; ?>" class="inputBg" />
                      </td>
                    </tr>
                    <?php else: ?>
                    <tr>
                      <td align="right"><?php echo $this->_var['lang']['message_type']; ?>：</td>
                      <td><input name="msg_type" type="radio" value="0" checked="checked" />
                        <?php echo $this->_var['lang']['type']['0']; ?>
                        <input type="radio" name="msg_type" value="1" />
                        <?php echo $this->_var['lang']['type']['1']; ?>
                        <input type="radio" name="msg_type" value="2" />
                        <?php echo $this->_var['lang']['type']['2']; ?>
                        <input type="radio" name="msg_type" value="3" />
                        <?php echo $this->_var['lang']['type']['3']; ?>
                        <input type="radio" name="msg_type" value="4" />
                        <?php echo $this->_var['lang']['type']['4']; ?> </td>
                    </tr>
                    <?php endif; ?>
                    <tr>
                      <td align="right"><?php echo $this->_var['lang']['message_title']; ?>：</td>
                      <td><input name="msg_title" type="text" size="30" class="inputBg" /></td>
                    </tr>
                    <tr>
                      <td align="right" valign="top"><?php echo $this->_var['lang']['message_content']; ?>：</td>
                      <td><textarea name="msg_content" cols="50" rows="4" wrap="virtual" class="B_blue"></textarea></td>
                    </tr>
                    <tr>
                      <td align="right"><?php echo $this->_var['lang']['upload_img']; ?>：</td>
                      <td><input type="file" name="message_img"  size="45"  class="inputBg" /></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><input type="hidden" name="act" value="act_add_message" />
                        <input type="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_bonus" />
                      </td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>
                      <?php echo $this->_var['lang']['img_type_tips']; ?><br />
                      <?php echo $this->_var['lang']['img_type_list']; ?>
                      </td>
                    </tr>
                  </table>
                </form>
         <?php endif; ?>
         
         
          <?php if ($this->_var['action'] == 'comment_list'): ?>
          <h5><span><?php echo $this->_var['lang']['label_comment']; ?></span></h5>
          <div class="blank"></div>
          <?php $_from = $this->_var['comment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment');if (count($_from)):
    foreach ($_from AS $this->_var['comment']):
?>
          <div class="f_l">
          <b><?php if ($this->_var['comment']['comment_type'] == '0'): ?><?php echo $this->_var['lang']['goods_comment']; ?><?php else: ?><?php echo $this->_var['lang']['article_comment']; ?><?php endif; ?>: </b><font class="f4"><?php echo $this->_var['comment']['cmt_name']; ?></font>&nbsp;&nbsp;(<?php echo $this->_var['comment']['formated_add_time']; ?>)
          </div>
          <div class="f_r">
          <a href="user.php?act=del_cmt&amp;id=<?php echo $this->_var['comment']['comment_id']; ?>" title="<?php echo $this->_var['lang']['drop']; ?>" onclick="if (!confirm('<?php echo $this->_var['lang']['confirm_remove_msg']; ?>')) return false;" class="f6"><?php echo $this->_var['lang']['drop']; ?></a>
          </div>
          <div class="msgBottomBorder">
          <?php echo htmlspecialchars($this->_var['comment']['content']); ?><br />
          <?php if ($this->_var['comment']['reply_content']): ?>
          <b><?php echo $this->_var['lang']['reply_comment']; ?>：</b><br />
          <?php echo $this->_var['comment']['reply_content']; ?>
           <?php endif; ?>
          </div>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php if ($this->_var['comment_list']): ?>
          <?php echo $this->fetch('library/pages.lbi'); ?>
          <?php else: ?>
          <?php echo $this->_var['lang']['no_comments']; ?>
          <?php endif; ?>
          <?php endif; ?>
    
    
    <?php if ($this->_var['action'] == 'tag_list'): ?>
    <h5><span><?php echo $this->_var['lang']['label_tag']; ?></span></h5>
    <div class="blank"></div>
     <?php if ($this->_var['tags']): ?>
    <?php $_from = $this->_var['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tag');if (count($_from)):
    foreach ($_from AS $this->_var['tag']):
?>
    <a href="search.php?keywords=<?php echo urlencode($this->_var['tag']['tag_words']); ?>" class="f6"><?php echo htmlspecialchars($this->_var['tag']['tag_words']); ?></a> <a href="user.php?act=act_del_tag&amp;tag_words=<?php echo urlencode($this->_var['tag']['tag_words']); ?>" onclick="if (!confirm('<?php echo $this->_var['lang']['confirm_drop_tag']; ?>')) return false;" title="<?php echo $this->_var['lang']['drop']; ?>"><img src="themes/ecmoban_jumei/images/drop.gif" alt="<?php echo $this->_var['lang']['drop']; ?>" /></a>&nbsp;&nbsp;
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php else: ?>
    <span style="margin:2px 10px; font-size:14px; line-height:36px;"><?php echo $this->_var['lang']['no_tag']; ?></span>
    <?php endif; ?>
    <?php endif; ?>
    
    
    <?php if ($this->_var['action'] == 'collection_list'): ?>
  <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
    <h5><span><?php echo $this->_var['lang']['label_collection']; ?></span></h5>
    <div class="blank"></div>
     <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
      <tr align="center">
        <th width="35%" bgcolor="#ffffff"><?php echo $this->_var['lang']['goods_name']; ?></th>
        <th width="30%" bgcolor="#ffffff"><?php echo $this->_var['lang']['price']; ?></th>
        <th width="35%" bgcolor="#ffffff"><?php echo $this->_var['lang']['handle']; ?></th>
      </tr>
      <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
      <tr>
        <td bgcolor="#ffffff"><a href="<?php echo $this->_var['goods']['url']; ?>" class="f6"><?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?></a></td>
        <td bgcolor="#ffffff"><?php if ($this->_var['goods']['promote_price'] != ""): ?>
          <?php echo $this->_var['lang']['promote_price']; ?><span class="goods-price"><?php echo $this->_var['goods']['promote_price']; ?></span>
          <?php else: ?>
          <?php echo $this->_var['lang']['shop_price']; ?><span class="goods-price"><?php echo $this->_var['goods']['shop_price']; ?></span>
          <?php endif; ?>        </td>
        <td align="center" bgcolor="#ffffff">
          <?php if ($this->_var['goods']['is_attention']): ?>
          <a href="javascript:if (confirm('<?php echo $this->_var['lang']['del_attention']; ?>')) location.href='user.php?act=del_attention&rec_id=<?php echo $this->_var['goods']['rec_id']; ?>'" class="f6"><?php echo $this->_var['lang']['no_attention']; ?></a>
          <?php else: ?>
          <a href="javascript:if (confirm('<?php echo $this->_var['lang']['add_to_attention']; ?>')) location.href='user.php?act=add_to_attention&rec_id=<?php echo $this->_var['goods']['rec_id']; ?>'" class="f6"><?php echo $this->_var['lang']['attention']; ?></a>
          <?php endif; ?>
           <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" class="f6"><?php echo $this->_var['lang']['add_to_cart']; ?></a> <a href="javascript:if (confirm('<?php echo $this->_var['lang']['remove_collection_confirm']; ?>')) location.href='user.php?act=delete_collection&collection_id=<?php echo $this->_var['goods']['rec_id']; ?>'" class="f6"><?php echo $this->_var['lang']['drop']; ?></a>
        </td>
      </tr>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </table>
    <?php echo $this->fetch('library/pages.lbi'); ?>
     <div class="blank5"></div>

    <h5><span><?php echo $this->_var['lang']['label_affiliate']; ?></span></h5>
    <div class="blank"></div>
     <form name="theForm" method="post" action="">
     <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
    <tr>
      <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['label_need_image']; ?></td>
      <td bgcolor="#ffffff">
        <select name="need_image" id="need_image" class="inputBg">
          <option value="true" selected><?php echo $this->_var['lang']['need']; ?></option>
          <option value="false"><?php echo $this->_var['lang']['need_not']; ?></option>
        </select>
      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['label_goods_num']; ?></td>
      <td bgcolor="#ffffff"><input name="goods_num" type="text" id="goods_num" value="6" class="inputBg" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['label_arrange']; ?></td>
      <td bgcolor="#ffffff"><select name="arrange" id="arrange" class="inputBg">
        <option value="h" selected><?php echo $this->_var['lang']['horizontal']; ?></option>
        <option value="v"><?php echo $this->_var['lang']['verticle']; ?></option>
      </select></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['label_rows_num']; ?></td>
      <td bgcolor="#ffffff"><input name="rows_num" type="text" id="rows_num" value="1" class="inputBg" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['label_charset']; ?></td>
      <td bgcolor="#ffffff"><select name="charset" id="charset">
        <?php echo $this->html_options(array('options'=>$this->_var['lang_list'])); ?>
      </select></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#ffffff"><input type="button" name="gen_code" value="<?php echo $this->_var['lang']['generate']; ?>" onclick="genCode()" class="bnt_blue_1" />
			</td>
  </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#ffffff"><textarea name="code" cols="80" rows="5" id="code" class="B_blue"></textarea></td>
  </tr>
  </table>
     </form>
      <script language="JavaScript">
      var elements = document.forms['theForm'].elements;
      var url = '<?php echo $this->_var['url']; ?>';
      var u   = '<?php echo $this->_var['user_id']; ?>';
      /**
       * 生成代码
       */
      function genCode()
      {
          // 检查输入
          if (isNaN(parseInt(elements['goods_num'].value)))
          {
              alert('<?php echo $this->_var['lang']['goods_num_must_be_int']; ?>');
              return;
          }
          if (elements['goods_num'].value < 1)
          {
              alert('<?php echo $this->_var['lang']['goods_num_must_over_0']; ?>');
              return;
          }
          if (isNaN(parseInt(elements['rows_num'].value)))
          {
              alert('<?php echo $this->_var['lang']['rows_num_must_be_int']; ?>');
              return;
          }
          if (elements['rows_num'].value < 1)
          {
              alert('<?php echo $this->_var['lang']['rows_num_must_over_0']; ?>');
              return;
          }

          // 生成代码
          var code = '\<script src=\"' + url + 'goods_script.php?';
          code += 'need_image=' + elements['need_image'].value + '&';
          code += 'goods_num=' + elements['goods_num'].value + '&';
          code += 'arrange=' + elements['arrange'].value + '&';
          code += 'rows_num=' + elements['rows_num'].value + '&';
          code += 'charset=' + elements['charset'].value + '&u=' + u;
          code += '\"\>\</script\>';
          elements['code'].value = code;
          elements['code'].select();
          if (Browser.isIE)
          {
              window.clipboardData.setData("Text",code);
          }
      }
	var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
  var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
  var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
  var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
  </script>
  <?php endif; ?>
    
    
    <?php if ($this->_var['action'] == 'booking_list'): ?>
    <h5><span><?php echo $this->_var['lang']['label_booking']; ?></span></h5>
    <div class="blank"></div>
     <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
      <tr align="center">
        <td width="20%" bgcolor="#ffffff"><?php echo $this->_var['lang']['booking_goods_name']; ?></td>
        <td width="10%" bgcolor="#ffffff"><?php echo $this->_var['lang']['booking_amount']; ?></td>
        <td width="20%" bgcolor="#ffffff"><?php echo $this->_var['lang']['booking_time']; ?></td>
        <td width="35%" bgcolor="#ffffff"><?php echo $this->_var['lang']['process_desc']; ?></td>
        <td width="15%" bgcolor="#ffffff"><?php echo $this->_var['lang']['handle']; ?></td>
      </tr>
      <?php $_from = $this->_var['booking_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
      <tr>
        <td align="left" bgcolor="#ffffff"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank" class="f6"><?php echo $this->_var['item']['goods_name']; ?></a></td>
        <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['goods_number']; ?></td>
        <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['booking_time']; ?></td>
        <td align="left" bgcolor="#ffffff"><?php echo $this->_var['item']['dispose_note']; ?></td>
        <td align="center" bgcolor="#ffffff"><a href="javascript:if (confirm('<?php echo $this->_var['lang']['confirm_remove_account']; ?>')) location.href='user.php?act=act_del_booking&id=<?php echo $this->_var['item']['rec_id']; ?>'" class="f6"><?php echo $this->_var['lang']['drop']; ?></a> </td>
      </tr>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </table>
    <?php endif; ?>
    <div class="blank5"></div>
   
  <?php if ($this->_var['action'] == 'add_booking'): ?>
    <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
    <script type="text/javascript">
    <?php $_from = $this->_var['lang']['booking_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
    <h5><span><?php echo $this->_var['lang']['add']; ?><?php echo $this->_var['lang']['label_booking']; ?></span></h5>
    <div class="blank"></div>
     <form action="user.php" method="post" name="formBooking" onsubmit="return addBooking();">
     <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['booking_goods_name']; ?></td>
        <td bgcolor="#ffffff"><?php echo $this->_var['info']['goods_name']; ?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['booking_amount']; ?>:</td>
        <td bgcolor="#ffffff"><input name="number" type="text" value="<?php echo $this->_var['info']['goods_number']; ?>" class="inputBg" /></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['describe']; ?>:</td>
        <td bgcolor="#ffffff"><textarea name="desc" cols="50" rows="5" wrap="virtual" class="B_blue"><?php echo htmlspecialchars($this->_var['info']['goods_desc']); ?></textarea>
        </td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['contact_username']; ?>:</td>
        <td bgcolor="#ffffff"><input name="linkman" type="text" value="<?php echo htmlspecialchars($this->_var['info']['consignee']); ?>" size="25"  class="inputBg"/>
        </td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['email_address']; ?>:</td>
        <td bgcolor="#ffffff"><input name="email" type="text" value="<?php echo htmlspecialchars($this->_var['info']['email']); ?>" size="25" class="inputBg" /></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['contact_phone']; ?>:</td>
        <td bgcolor="#ffffff"><input name="tel" type="text" value="<?php echo htmlspecialchars($this->_var['info']['tel']); ?>" size="25" class="inputBg" /></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff">&nbsp;</td>
        <td bgcolor="#ffffff"><input name="act" type="hidden" value="act_add_booking" />
          <input name="id" type="hidden" value="<?php echo $this->_var['info']['id']; ?>" />
          <input name="rec_id" type="hidden" value="<?php echo $this->_var['info']['rec_id']; ?>" />
          <input type="submit" name="submit" class="submit" value="<?php echo $this->_var['lang']['submit_booking_goods']; ?>" />
          <input type="reset" name="reset" class="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" />
        </td>
      </tr>
    </table>
     </form>
    <?php endif; ?>
    
    <?php if ($this->_var['affiliate']['on'] == 1): ?>
     <?php if ($this->_var['action'] == 'affiliate'): ?>
      <?php if (! $this->_var['goodsid'] || $this->_var['goodsid'] == 0): ?>
      <h5><span><?php echo $this->_var['lang']['affiliate_detail']; ?></span></h5>
      <div class="blank"></div>
     <?php echo $this->_var['affiliate_intro']; ?>
    <?php if ($this->_var['affiliate']['config']['separate_by'] == 0): ?>
    
    <div class="blank"></div>
    <h5><span><a name="myrecommend"><?php echo $this->_var['lang']['affiliate_member']; ?></a></span></h5>
    <div class="blank"></div>
   <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
    <tr align="center">
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['affiliate_lever']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['affiliate_num']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['level_point']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['level_money']; ?></td>
    </tr>
    <?php $_from = $this->_var['affdb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('level', 'val');$this->_foreach['affdb'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['affdb']['total'] > 0):
    foreach ($_from AS $this->_var['level'] => $this->_var['val']):
        $this->_foreach['affdb']['iteration']++;
?>
    <tr align="center">
      <td bgcolor="#ffffff"><?php echo $this->_var['level']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['val']['num']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['val']['point']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['val']['money']; ?></td>
    </tr>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </table>

<?php else: ?>


<?php endif; ?>

<div class="blank"></div>
<h5><span>分成规则</span></h5>
<div class="blank"></div>
<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
    <tr align="center">
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_number']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['affiliate_money']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['affiliate_point']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['affiliate_mode']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['affiliate_status']; ?></td>
    </tr>
    <?php $_from = $this->_var['logdb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');$this->_foreach['logdb'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['logdb']['total'] > 0):
    foreach ($_from AS $this->_var['val']):
        $this->_foreach['logdb']['iteration']++;
?>
    <tr align="center">
      <td bgcolor="#ffffff"><?php echo $this->_var['val']['order_sn']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['val']['money']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['val']['point']; ?></td>
      <td bgcolor="#ffffff"><?php if ($this->_var['val']['separate_type'] == 1 || $this->_var['val']['separate_type'] === 0): ?><?php echo $this->_var['lang']['affiliate_type'][$this->_var['val']['separate_type']]; ?><?php else: ?><?php echo $this->_var['lang']['affiliate_type'][$this->_var['affiliate_type']]; ?><?php endif; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['affiliate_stats'][$this->_var['val']['is_separate']]; ?></td>
    </tr>
    <?php endforeach; else: ?>
<tr><td colspan="5" align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['no_records']; ?></td>
</tr>
    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php if ($this->_var['logdb']): ?>
    <tr>
    <td colspan="5" bgcolor="#ffffff">
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
  <div id="pager"> <?php echo $this->_var['lang']['pager_1']; ?><?php echo $this->_var['pager']['record_count']; ?><?php echo $this->_var['lang']['pager_2']; ?><?php echo $this->_var['lang']['pager_3']; ?><?php echo $this->_var['pager']['page_count']; ?><?php echo $this->_var['lang']['pager_4']; ?> <span> <a href="<?php echo $this->_var['pager']['page_first']; ?>"><?php echo $this->_var['lang']['page_first']; ?></a> <a href="<?php echo $this->_var['pager']['page_prev']; ?>"><?php echo $this->_var['lang']['page_prev']; ?></a> <a href="<?php echo $this->_var['pager']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?></a> <a href="<?php echo $this->_var['pager']['page_last']; ?>"><?php echo $this->_var['lang']['page_last']; ?></a> </span>
    <select name="page" id="page" onchange="selectPage(this)">
    <?php echo $this->html_options(array('options'=>$this->_var['pager']['array'],'selected'=>$this->_var['pager']['page'])); ?>
    </select>
    <input type="hidden" name="act" value="affiliate" />
  </div>
</form>
    </td>
    </tr>
    <?php endif; ?>
  </table>
 <script type="text/javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script>

<div class="blank"></div>
<h5><span><?php echo $this->_var['lang']['affiliate_code']; ?></span></h5>
<div class="blank"></div>
<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
<tr>
<td width="30%" bgcolor="#ffffff"><a href="<?php echo $this->_var['shopurl']; ?>?u=<?php echo $this->_var['userid']; ?>" target="_blank" class="f6"><?php echo $this->_var['shopname']; ?></a></td>
<td bgcolor="#ffffff"><input size="40" onclick="this.select();" type="text" value="&lt;a href=&quot;<?php echo $this->_var['shopurl']; ?>?u=<?php echo $this->_var['userid']; ?>&quot; target=&quot;_blank&quot;&gt;<?php echo $this->_var['shopname']; ?>&lt;/a&gt;" style="border:1px solid #ccc;" /> <?php echo $this->_var['lang']['recommend_webcode']; ?></td>
</tr>
<tr>
<td bgcolor="#ffffff"><a href="<?php echo $this->_var['shopurl']; ?>?u=<?php echo $this->_var['userid']; ?>" target="_blank" title="<?php echo $this->_var['shopname']; ?>"  class="f6"><img src="<?php echo $this->_var['shopurl']; ?><?php echo $this->_var['logosrc']; ?>" /></a></td>
<td bgcolor="#ffffff"><input size="40" onclick="this.select();" type="text" value="&lt;a href=&quot;<?php echo $this->_var['shopurl']; ?>?u=<?php echo $this->_var['userid']; ?>&quot; target=&quot;_blank&quot; title=&quot;<?php echo $this->_var['shopname']; ?>&quot;&gt;&lt;img src=&quot;<?php echo $this->_var['shopurl']; ?><?php echo $this->_var['logosrc']; ?>&quot; /&gt;&lt;/a&gt;" style="border:1px solid #ccc;" /> <?php echo $this->_var['lang']['recommend_webcode']; ?></td>
</tr>
<tr>
<td bgcolor="#ffffff"><a href="<?php echo $this->_var['shopurl']; ?>?u=<?php echo $this->_var['userid']; ?>" target="_blank" class="f6"><?php echo $this->_var['shopname']; ?></a></td>
<td bgcolor="#ffffff"><input size="40" onclick="this.select();" type="text" value="[url=<?php echo $this->_var['shopurl']; ?>?u=<?php echo $this->_var['userid']; ?>]<?php echo $this->_var['shopname']; ?>[/url]" style="border:1px solid #ccc;" /> <?php echo $this->_var['lang']['recommend_bbscode']; ?></td>
</tr>
<tr>
<td bgcolor="#ffffff"><a href="<?php echo $this->_var['shopurl']; ?>?u=<?php echo $this->_var['userid']; ?>" target="_blank" title="<?php echo $this->_var['shopname']; ?>" class="f6"><img src="<?php echo $this->_var['shopurl']; ?><?php echo $this->_var['logosrc']; ?>" /></a></td>
<td bgcolor="#ffffff"><input size="40" onclick="this.select();" type="text" value="[url=<?php echo $this->_var['shopurl']; ?>?u=<?php echo $this->_var['userid']; ?>][img]<?php echo $this->_var['shopurl']; ?><?php echo $this->_var['logosrc']; ?>[/img][/url]" style="border:1px solid #ccc;" /> <?php echo $this->_var['lang']['recommend_bbscode']; ?></td>
</tr>
</table>

        <?php else: ?>
        
        <style type="text/css">
        .types a{text-decoration:none; color:#006bd0;}
        </style>
    <h5><span><?php echo $this->_var['lang']['affiliate_code']; ?></span></h5>
    <div class="blank"></div>
  <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
    <tr align="center">
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['affiliate_view']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['affiliate_code']; ?></td>
    </tr>
    <?php $_from = $this->_var['types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');$this->_foreach['types'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['types']['total'] > 0):
    foreach ($_from AS $this->_var['val']):
        $this->_foreach['types']['iteration']++;
?>
    <tr align="center">
      <td bgcolor="#ffffff" class="types"><script src="<?php echo $this->_var['shopurl']; ?>affiliate.php?charset=<?php echo $this->_var['ecs_charset']; ?>&gid=<?php echo $this->_var['goodsid']; ?>&u=<?php echo $this->_var['userid']; ?>&type=<?php echo $this->_var['val']; ?>"></script></td>      <td bgcolor="#ffffff">javascript <?php echo $this->_var['lang']['affiliate_codetype']; ?><br>
        <textarea cols=30 rows=2 id="txt<?php echo $this->_foreach['types']['iteration']; ?>" style="border:1px solid #ccc;"><script src="<?php echo $this->_var['shopurl']; ?>affiliate.php?charset=<?php echo $this->_var['ecs_charset']; ?>&gid=<?php echo $this->_var['goodsid']; ?>&u=<?php echo $this->_var['userid']; ?>&type=<?php echo $this->_var['val']; ?>"></script></textarea>[<a href="#" titleTo Clipboard" onClick="Javascript:copyToClipboard(document.getElementById('txt<?php echo $this->_foreach['types']['iteration']; ?>').value);alert('<?php echo $this->_var['lang']['copy_to_clipboard']; ?>');"  class="f6"><?php echo $this->_var['lang']['code_copy']; ?></a>]
<br>iframe <?php echo $this->_var['lang']['affiliate_codetype']; ?><br><textarea cols=30 rows=2 id="txt<?php echo $this->_foreach['types']['iteration']; ?>_iframe"  style="border:1px solid #ccc;"><iframe width="250" height="270" src="<?php echo $this->_var['shopurl']; ?>affiliate.php?charset=<?php echo $this->_var['ecs_charset']; ?>&gid=<?php echo $this->_var['goodsid']; ?>&u=<?php echo $this->_var['userid']; ?>&type=<?php echo $this->_var['val']; ?>&display_mode=iframe" frameborder="0" scrolling="no"></iframe></textarea>[<a href="#" titleTo Clipboard" onClick="Javascript:copyToClipboard(document.getElementById('txt<?php echo $this->_foreach['types']['iteration']; ?>_iframe').value);alert('<?php echo $this->_var['lang']['copy_to_clipboard']; ?>');" class="f6"><?php echo $this->_var['lang']['code_copy']; ?></a>]
<br /><?php echo $this->_var['lang']['bbs']; ?>UBB <?php echo $this->_var['lang']['affiliate_codetype']; ?><br /><textarea cols=30 rows=2 id="txt<?php echo $this->_foreach['types']['iteration']; ?>_ubb"  style="border:1px solid #ccc;"><?php if ($this->_var['val'] != 5): ?>[url=<?php echo $this->_var['shopurl']; ?>goods.php?id=<?php echo $this->_var['goodsid']; ?>&u=<?php echo $this->_var['userid']; ?>][img]<?php if ($this->_var['val'] < 3): ?><?php echo $this->_var['goods']['goods_thumb']; ?><?php else: ?><?php echo $this->_var['goods']['goods_img']; ?><?php endif; ?>[/img][/url]<?php endif; ?>

[url=<?php echo $this->_var['shopurl']; ?>goods.php?id=<?php echo $this->_var['goodsid']; ?>&u=<?php echo $this->_var['userid']; ?>][b]<?php echo $this->_var['goods']['goods_name']; ?>[/b][/url]
<?php if ($this->_var['val'] != 1 && $this->_var['val'] != 3): ?>[s]<?php echo $this->_var['goods']['market_price']; ?>[/s]<?php endif; ?> [color=red]<?php echo $this->_var['goods']['shop_price']; ?>[/color]</textarea>[<a href="#" titleTo Clipboard" onClick="Javascript:copyToClipboard(document.getElementById('txt<?php echo $this->_foreach['types']['iteration']; ?>_ubb').value);alert('<?php echo $this->_var['lang']['copy_to_clipboard']; ?>');"  class="f6"><?php echo $this->_var['lang']['code_copy']; ?></a>]
<?php if ($this->_var['val'] == 5): ?><br /><?php echo $this->_var['lang']['im_code']; ?> <?php echo $this->_var['lang']['affiliate_codetype']; ?><br /><textarea cols=30 rows=2 id="txt<?php echo $this->_foreach['types']['iteration']; ?>_txt"  style="border:1px solid #ccc;"><?php echo $this->_var['lang']['show_good_to_you']; ?> <?php echo $this->_var['goods']['goods_name']; ?>

<?php echo $this->_var['shopurl']; ?>goods.php?id=<?php echo $this->_var['goodsid']; ?>&u=<?php echo $this->_var['userid']; ?></textarea>[<a href="#" titleTo Clipboard" onClick="Javascript:copyToClipboard(document.getElementById('txt<?php echo $this->_foreach['types']['iteration']; ?>_txt').value);alert('<?php echo $this->_var['lang']['copy_to_clipboard']; ?>');"  class="f6"><?php echo $this->_var['lang']['code_copy']; ?></a>]<?php endif; ?></td>
</tr>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </table>
<script language="Javascript">
copyToClipboard = function(txt)
{
 if(window.clipboardData)
 {
    window.clipboardData.clearData();
    window.clipboardData.setData("Text", txt);
 }
 else if(navigator.userAgent.indexOf("Opera") != -1)
 {
   //暂时无方法:-(
 }
 else if (window.netscape)
 {
  try
  {
    netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
  }
  catch (e)
  {
    alert("<?php echo $this->_var['lang']['firefox_copy_alert']; ?>");
    return false;
  }
  var clip = Components.classes['@mozilla.org/widget/clipboard;1'].createInstance(Components.interfaces.nsIClipboard);
  if (!clip)
    return;
  var trans = Components.classes['@mozilla.org/widget/transferable;1'].createInstance(Components.interfaces.nsITransferable);
  if (!trans)
    return;
  trans.addDataFlavor('text/unicode');
  var str = new Object();
  var len = new Object();
  var str = Components.classes["@mozilla.org/supports-string;1"].createInstance(Components.interfaces.nsISupportsString);
  var copytext = txt;
  str.data = copytext;
  trans.setTransferData("text/unicode",str,copytext.length*2);
  var clipid = Components.interfaces.nsIClipboard;
  if (!clip)
  return false;
  clip.setData(trans,null,clipid.kGlobalClipboard);
 }
}
                </script>
            
            <?php endif; ?>
        <?php endif; ?>

    <?php endif; ?>

  

<div class="blank"></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['clips_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
</html>
