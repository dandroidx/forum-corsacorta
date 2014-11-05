<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<a name="maincontent"></a>

<h1><?php echo ((isset($this->_rootref['L_TRUNCATE_THANKS'])) ? $this->_rootref['L_TRUNCATE_THANKS'] : ((isset($user->lang['TRUNCATE_THANKS'])) ? $user->lang['TRUNCATE_THANKS'] : '{ TRUNCATE_THANKS }')); ?></h1>

<form id="acp_thanks_truncate" method="post" action="<?php echo (isset($this->_rootref['U_ACTION'])) ? $this->_rootref['U_ACTION'] : ''; ?>">
<fieldset>
	<legend><?php echo ((isset($this->_rootref['L_TRUNCATE_THANKS'])) ? $this->_rootref['L_TRUNCATE_THANKS'] : ((isset($user->lang['TRUNCATE_THANKS'])) ? $user->lang['TRUNCATE_THANKS'] : '{ TRUNCATE_THANKS }')); ?></legend>
	<?php if (! $this->_rootref['S_TRUNCATE']) {  ?>

	<div class="errorbox">
		<h3><?php echo ((isset($this->_rootref['L_WARNING'])) ? $this->_rootref['L_WARNING'] : ((isset($user->lang['WARNING'])) ? $user->lang['WARNING'] : '{ WARNING }')); ?></h3>
		<p><?php echo ((isset($this->_rootref['L_TRUNCATE_THANKS_EXPLAIN'])) ? $this->_rootref['L_TRUNCATE_THANKS_EXPLAIN'] : ((isset($user->lang['TRUNCATE_THANKS_EXPLAIN'])) ? $user->lang['TRUNCATE_THANKS_EXPLAIN'] : '{ TRUNCATE_THANKS_EXPLAIN }')); ?></p>
	</div>
	<?php } else { ?>

	<div class="successbox">
		<h3><?php echo ((isset($this->_rootref['L_NOTIFY'])) ? $this->_rootref['L_NOTIFY'] : ((isset($user->lang['NOTIFY'])) ? $user->lang['NOTIFY'] : '{ NOTIFY }')); ?></h3>
		<p><?php echo ((isset($this->_rootref['L_TRUNCATE_THANKS_MSG'])) ? $this->_rootref['L_TRUNCATE_THANKS_MSG'] : ((isset($user->lang['TRUNCATE_THANKS_MSG'])) ? $user->lang['TRUNCATE_THANKS_MSG'] : '{ TRUNCATE_THANKS_MSG }')); ?></p>
	</div>
	<?php } ?>

	<dl>
		<dt>
			<?php if (! $this->_rootref['S_TRUNCATE']) {  echo ((isset($this->_rootref['L_ACP_ALLTHANKS'])) ? $this->_rootref['L_ACP_ALLTHANKS'] : ((isset($user->lang['ACP_ALLTHANKS'])) ? $user->lang['ACP_ALLTHANKS'] : '{ ACP_ALLTHANKS }')); ?>:<br /><br /><?php echo ((isset($this->_rootref['L_ACP_USERSTHANKS'])) ? $this->_rootref['L_ACP_USERSTHANKS'] : ((isset($user->lang['ACP_USERSTHANKS'])) ? $user->lang['ACP_USERSTHANKS'] : '{ ACP_USERSTHANKS }')); ?>:<br /><br /><?php echo ((isset($this->_rootref['L_ACP_POSTSTHANKS'])) ? $this->_rootref['L_ACP_POSTSTHANKS'] : ((isset($user->lang['ACP_POSTSTHANKS'])) ? $user->lang['ACP_POSTSTHANKS'] : '{ ACP_POSTSTHANKS }')); ?>:
			<?php } else { echo ((isset($this->_rootref['L_ACP_THANKSEND'])) ? $this->_rootref['L_ACP_THANKSEND'] : ((isset($user->lang['ACP_THANKSEND'])) ? $user->lang['ACP_THANKSEND'] : '{ ACP_THANKSEND }')); ?>:<br /><br /><?php echo ((isset($this->_rootref['L_ACP_USERSEND'])) ? $this->_rootref['L_ACP_USERSEND'] : ((isset($user->lang['ACP_USERSEND'])) ? $user->lang['ACP_USERSEND'] : '{ ACP_USERSEND }')); ?>:<br /><br /><?php echo ((isset($this->_rootref['L_ACP_POSTSEND'])) ? $this->_rootref['L_ACP_POSTSEND'] : ((isset($user->lang['ACP_POSTSEND'])) ? $user->lang['ACP_POSTSEND'] : '{ ACP_POSTSEND }')); ?>:<?php } ?>

		</dt>
		<dd>
			<?php if (! $this->_rootref['S_TRUNCATE']) {  echo (isset($this->_rootref['ALLTHANKS'])) ? $this->_rootref['ALLTHANKS'] : ''; ?><br /><br /><?php echo (isset($this->_rootref['USERSTHANKS'])) ? $this->_rootref['USERSTHANKS'] : ''; ?><br /><br /><?php echo (isset($this->_rootref['POSTSTHANKS'])) ? $this->_rootref['POSTSTHANKS'] : ''; ?>

			<?php } else { echo (isset($this->_rootref['THANKSEND'])) ? $this->_rootref['THANKSEND'] : ''; ?><br /><br /><?php echo (isset($this->_rootref['USERSEND'])) ? $this->_rootref['USERSEND'] : ''; ?><br /><br /><?php echo (isset($this->_rootref['POSTSEND'])) ? $this->_rootref['POSTSEND'] : ''; } ?>

		</dd>
	</dl>
</fieldset>
<?php if (! $this->_rootref['S_TRUNCATE']) {  ?>

<fieldset class="submit-buttons">
	<legend><?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?></legend>
	<input class="button1" type="submit" id="truncate" name="truncate" value="<?php echo ((isset($this->_rootref['L_TRUNCATE'])) ? $this->_rootref['L_TRUNCATE'] : ((isset($user->lang['TRUNCATE'])) ? $user->lang['TRUNCATE'] : '{ TRUNCATE }')); ?>" />
</fieldset>
<?php } ?>

</form>

<?php $this->_tpl_include('overall_footer.html'); ?>