<!-- $Id: convert_main.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<div class="list-div">
<form name="theForm">
<table cellpadding="3" cellspacing="1">
  <tr>
    <td colspan="4"><span style="color:#FF0000;"><strong><?php echo $this->_var['lang']['confirm_convert']; ?></strong></span><br />
    <?php echo $this->_var['lang']['backup_data']; ?><a href="database.php?act=backup"><strong><?php echo $this->_var['lang']['backup']; ?></strong></a></td>
  </tr>
  <tr>
    <td colspan="4"><?php echo $this->_var['lang']['select_system']; ?>
      <select name="selModule" id="selModule">
        <?php $_from = $this->_var['module_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'module');if (count($_from)):
    foreach ($_from AS $this->_var['module']):
?>
          <option value="<?php echo $this->_var['module']['code']; ?>"><?php echo $this->_var['module']['desc']; ?></option>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </select>
      <?php echo $this->_var['lang']['note_select_system']; ?></td>
    </tr>
  <tr>
    <td colspan="4"><?php echo $this->_var['lang']['select_charset']; ?>
      <select name="selCharset" id="selCharset">
        <?php echo $this->html_options(array('options'=>$this->_var['charset_list'])); ?>
      </select>
      <?php echo $this->_var['lang']['note_select_charset']; ?></td>
  </tr>
  <tr>
    <td colspan="4"><strong><?php echo $this->_var['lang']['your_config']; ?></strong><br /><?php echo $this->_var['lang']['dir_notes']; ?></td>
    </tr>
  <tr>
    <td><div align="right"><strong><?php echo $this->_var['lang']['your_host']; ?></strong></div></td>
    <td><input name="host" type="text" id="host" value="<?php echo $this->_var['def_val']['host']; ?>" /></td>
    <td><div align="right"><strong><?php echo $this->_var['lang']['your_db']; ?></strong></div></td>
  <td><input name="db" type="text" id="db" value="<?php echo $this->_var['def_val']['db']; ?>" /></td>
  </tr>
  <tr>
    <td><div align="right"><strong><?php echo $this->_var['lang']['your_user']; ?></strong></div></td>
    <td><input name="user" type="text" id="user" value="<?php echo $this->_var['def_val']['user']; ?>" /></td>
    <td><div align="right"><strong><?php echo $this->_var['lang']['your_pass']; ?></strong></div></td>
    <td><input name="pass" type="password" id="pass" value="<?php echo $this->_var['def_val']['pass']; ?>" /></td>
  </tr>
  <tr>
    <td><div align="right"><strong><?php echo $this->_var['lang']['your_prefix']; ?></strong></div></td>
    <td><input name="prefix" type="text" id="prefix" value="<?php echo $this->_var['def_val']['prefix']; ?>" /></td>
    <td><div align="right"><strong><?php echo $this->_var['lang']['your_path']; ?></strong></div></td>
    <td><input name="path" type="text" id="path" value="<?php echo $this->_var['def_val']['path']; ?>" /></td>
  </tr>
  <tr>
    <td colspan="4"><div align="center">
        <input name="convert" type="button" class="button" id="convert" onclick="convertData()" value="<?php echo $this->_var['lang']['convert']; ?>" />
    </div></td>
    </tr>
  <tr>
    <td colspan="4"><span id="status_1"></span><br /><span id="status_2"></span><br /><span id="status_3"></span></td>
  </tr>
  <tr>
    <td colspan="4"><strong><?php echo $this->_var['lang']['remark']; ?></strong><br /><?php echo $this->_var['lang']['remark_info']; ?></td>
  </tr>
</table>
</form>
</div>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,validator.js')); ?>

<script language="javascript">
  /**
   * 检查可选系统
   */
  function checkSystem()
  {
    var sel = document.forms['theForm'].elements['selModule'];
    if (sel.options.length <= 0)
    {
      alert(no_system);
      return false;
    }
    return true;
  }

  /**
   * 检查设置
   */
  function checkConfig()
  {
    if (!checkSystem())
    {
      return false;
    }
    var validator = new Validator('theForm');
    validator.required('host', host_not_null);
    validator.required('db', db_not_null);
    validator.required('user', user_not_null);
    validator.required('path', path_not_null);
    return validator.passed();
  }

  /**
   * 转换
   */
  function convertData()
  {
    // 检查设置
    if (!checkConfig())
    {
      return;
    }

    // 取得设置
    var config = new Object();
    var ele = document.forms['theForm'].elements;
    config.host    = ele['host'].value;
    config.db      = ele['db'].value;
    config.user    = ele['user'].value;
    config.pass    = ele['pass'].value;
    config.prefix  = ele['prefix'].value;
    config.code    = ele['selModule'].value;
    config.path    = ele['path'].value;
    config.charset = ele['selCharset'].value;

    // 测试数据库链接，检查表，检查目录
    output(check_your_db);
    Ajax.call('convert.php?is_ajax=1&act=check', config, response, 'POST', 'JSON');
  }

  function response(result)
  {
    if (!result.error)
    {
      if (result.content.length > 0)
      {
        output(result.message);
        Ajax.call('convert.php?is_ajax=1&act=process', 'step=' + result.content, response, 'POST', 'JSON');
      }
      else
      {
        output(act_ok);
        alert(act_ok);
      }
    }
    else
    {
      output(result.message);
      alert(result.message);
    }
  }

  /**
   * 输出信息
   * @param string msg
   */
  function output(msg)
  {
    today = new Date();
    msg = today.getHours() + ':' + today.getMinutes() + ':' + today.getSeconds() + '   ' + msg;
    for (i = 3; i > 1; i--)
    {
      document.getElementById('status_' + i).innerHTML = document.getElementById('status_' + (i - 1)).innerHTML;
    }
    document.getElementById('status_1').innerHTML = msg;
  }
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>