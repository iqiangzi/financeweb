<?php if ($this->_var['full_page']): ?>
<!-- $Id: users_list.htm 17053 2010-03-15 06:50:26Z sxc_shop $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>


<form method="POST" action="" name="listForm" onsubmit="return confirm_bath()">

<!-- start users list -->
<div class="list-div" id="listDiv">
<?php endif; ?>
<!--用户列表部分-->
<table cellpadding="3" cellspacing="1">
  <tr>
    <th><?php echo $this->_var['lang']['record_id']; ?></th>
    <th>会员名称</th>
    <th>可用余额</th>
	<th>总资产</th>
    <th>投资金额</th>
	<th>已收收益</th>
	<th>待收收益</th>
    <th>注册时间</th>
  <tr>
  <?php $_from = $this->_var['user_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'user');if (count($_from)):
    foreach ($_from AS $this->_var['user']):
?>
  <tr>
    <td align="center"><?php echo $this->_var['user']['user_id']; ?></td>
    <td align="center" class="first-cell"><?php echo htmlspecialchars($this->_var['user']['user_name']); ?></td>
    <td align="center"><?php echo $this->_var['user']['user_money']; ?></td>
	<td align="center"><?php echo $this->_var['user']['total_money']; ?></td>
    <td align="center"><?php echo $this->_var['user']['total_inverst_money']; ?></td>
	<td align="center"><?php echo $this->_var['user']['total_earn_money']; ?></td>
	<td align="center"><?php echo $this->_var['user']['rest_earn_money']; ?></td>
    <td align="center"><?php echo $this->_var['user']['reg_time']; ?></td>
  </tr>
  <?php endforeach; else: ?>
  <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
  <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <tr>
      <td colspan="2">
	  </td>
      <td align="right" nowrap="true" colspan="8">
      <?php echo $this->fetch('page.htm'); ?>
      </td>
  </tr>
</table>

<?php if ($this->_var['full_page']): ?>
</div>
<!-- end users list -->
</form>
<script type="text/javascript" language="JavaScript">
<!--
listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
listTable.pageCount = <?php echo $this->_var['page_count']; ?>;

<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>


onload = function()
{
    document.forms['searchForm'].elements['keyword'].focus();
    // 开始检查订单
    startCheckOrder();
}

/**
 * 搜索用户
 */
function searchUser()
{
    listTable.filter['keywords'] = Utils.trim(document.forms['searchForm'].elements['keyword'].value);
    listTable.filter['rank'] = document.forms['searchForm'].elements['user_rank'].value;
    listTable.filter['pay_points_gt'] = Utils.trim(document.forms['searchForm'].elements['pay_points_gt'].value);
    listTable.filter['pay_points_lt'] = Utils.trim(document.forms['searchForm'].elements['pay_points_lt'].value);
    listTable.filter['page'] = 1;
    listTable.loadList();
}

function confirm_bath()
{
  userItems = document.getElementsByName('checkboxes[]');

  cfm = '<?php echo $this->_var['lang']['list_remove_confirm']; ?>';

  for (i=0; userItems[i]; i++)
  {
    if (userItems[i].checked && userItems[i].notice == 1)
    {
      cfm = '<?php echo $this->_var['lang']['list_still_accounts']; ?>' + '<?php echo $this->_var['lang']['list_remove_confirm']; ?>';
      break;
    }
  }

  return confirm(cfm);
}
//-->
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>
<?php endif; ?>