<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<a name="maincontent"></a>

<h1><?php echo ((isset($this->_rootref['L_THANKS_REFRESH'])) ? $this->_rootref['L_THANKS_REFRESH'] : ((isset($user->lang['THANKS_REFRESH'])) ? $user->lang['THANKS_REFRESH'] : '{ THANKS_REFRESH }')); ?></h1>

<p><?php echo ((isset($this->_rootref['L_THANKS_REFRESH_EXPLAIN'])) ? $this->_rootref['L_THANKS_REFRESH_EXPLAIN'] : ((isset($user->lang['THANKS_REFRESH_EXPLAIN'])) ? $user->lang['THANKS_REFRESH_EXPLAIN'] : '{ THANKS_REFRESH_EXPLAIN }')); ?></p>

<fieldset>
	<legend><?php echo ((isset($this->_rootref['L_THANKS_REFRESH'])) ? $this->_rootref['L_THANKS_REFRESH'] : ((isset($user->lang['THANKS_REFRESH'])) ? $user->lang['THANKS_REFRESH'] : '{ THANKS_REFRESH }')); ?></legend>
	<?php if (! $this->_rootref['S_REFRESH']) {  ?>

	<div class="errorbox">
		<h3><?php echo ((isset($this->_rootref['L_WARNING'])) ? $this->_rootref['L_WARNING'] : ((isset($user->lang['WARNING'])) ? $user->lang['WARNING'] : '{ WARNING }')); ?></h3>
		<p><?php echo ((isset($this->_rootref['L_THANKS_REFRESH_MSG'])) ? $this->_rootref['L_THANKS_REFRESH_MSG'] : ((isset($user->lang['THANKS_REFRESH_MSG'])) ? $user->lang['THANKS_REFRESH_MSG'] : '{ THANKS_REFRESH_MSG }')); ?></p>
	</div>
	<?php } else { ?>

	<div class="successbox">
		<h3><?php echo ((isset($this->_rootref['L_NOTIFY'])) ? $this->_rootref['L_NOTIFY'] : ((isset($user->lang['NOTIFY'])) ? $user->lang['NOTIFY'] : '{ NOTIFY }')); ?></h3>
		<p><?php echo ((isset($this->_rootref['L_THANKS_REFRESHED_MSG'])) ? $this->_rootref['L_THANKS_REFRESHED_MSG'] : ((isset($user->lang['THANKS_REFRESHED_MSG'])) ? $user->lang['THANKS_REFRESHED_MSG'] : '{ THANKS_REFRESHED_MSG }')); ?></p>
	</div>
	<?php } ?>

	<dl>
		<dt><?php echo ((isset($this->_rootref['L_ACP_POSTS'])) ? $this->_rootref['L_ACP_POSTS'] : ((isset($user->lang['ACP_POSTS'])) ? $user->lang['ACP_POSTS'] : '{ ACP_POSTS }')); ?>:<br /><br /><br /><?php echo ((isset($this->_rootref['L_ACP_POSTSTHANKS'])) ? $this->_rootref['L_ACP_POSTSTHANKS'] : ((isset($user->lang['ACP_POSTSTHANKS'])) ? $user->lang['ACP_POSTSTHANKS'] : '{ ACP_POSTSTHANKS }')); ?>:<br /><br /><?php echo ((isset($this->_rootref['L_ACP_USERSTHANKS'])) ? $this->_rootref['L_ACP_USERSTHANKS'] : ((isset($user->lang['ACP_USERSTHANKS'])) ? $user->lang['ACP_USERSTHANKS'] : '{ ACP_USERSTHANKS }')); ?>:<br /><br /><?php echo ((isset($this->_rootref['L_ACP_ALLTHANKS'])) ? $this->_rootref['L_ACP_ALLTHANKS'] : ((isset($user->lang['ACP_ALLTHANKS'])) ? $user->lang['ACP_ALLTHANKS'] : '{ ACP_ALLTHANKS }')); ?>:<br /><br /><br /><?php echo ((isset($this->_rootref['L_ACP_UPDATETHANKS'])) ? $this->_rootref['L_ACP_UPDATETHANKS'] : ((isset($user->lang['ACP_UPDATETHANKS'])) ? $user->lang['ACP_UPDATETHANKS'] : '{ ACP_UPDATETHANKS }')); ?>:<br /><br /><?php echo ((isset($this->_rootref['L_ACP_DELTHANKS'])) ? $this->_rootref['L_ACP_DELTHANKS'] : ((isset($user->lang['ACP_DELTHANKS'])) ? $user->lang['ACP_DELTHANKS'] : '{ ACP_DELTHANKS }')); ?>:<br /><br /><br /><?php echo ((isset($this->_rootref['L_ACP_POSTSEND'])) ? $this->_rootref['L_ACP_POSTSEND'] : ((isset($user->lang['ACP_POSTSEND'])) ? $user->lang['ACP_POSTSEND'] : '{ ACP_POSTSEND }')); ?>:<br /><br /><?php echo ((isset($this->_rootref['L_ACP_USERSEND'])) ? $this->_rootref['L_ACP_USERSEND'] : ((isset($user->lang['ACP_USERSEND'])) ? $user->lang['ACP_USERSEND'] : '{ ACP_USERSEND }')); ?>:<br /><br /><?php echo ((isset($this->_rootref['L_ACP_THANKSEND'])) ? $this->_rootref['L_ACP_THANKSEND'] : ((isset($user->lang['ACP_THANKSEND'])) ? $user->lang['ACP_THANKSEND'] : '{ ACP_THANKSEND }')); ?></dt>
		<dd><?php echo (isset($this->_rootref['POSTS'])) ? $this->_rootref['POSTS'] : ''; ?><br /><br /><br /><?php echo (isset($this->_rootref['POSTSTHANKS'])) ? $this->_rootref['POSTSTHANKS'] : ''; ?><br /><br /><?php echo (isset($this->_rootref['USERSTHANKS'])) ? $this->_rootref['USERSTHANKS'] : ''; ?><br /><br /><?php echo (isset($this->_rootref['ALLTHANKS'])) ? $this->_rootref['ALLTHANKS'] : ''; ?><br /><br /><br /><span style="color:red"><?php echo (isset($this->_rootref['UPDATETHANKS'])) ? $this->_rootref['UPDATETHANKS'] : ''; ?></span><br /><br /><span style="color:red"><?php echo (isset($this->_rootref['DELTHANKS'])) ? $this->_rootref['DELTHANKS'] : ''; ?></span><br /><br /><br /><span style="color:green"><?php echo (isset($this->_rootref['POSTSEND'])) ? $this->_rootref['POSTSEND'] : ''; ?></span><br /><br /><span style="color:green"><?php echo (isset($this->_rootref['USERSEND'])) ? $this->_rootref['USERSEND'] : ''; ?></span><br /><br /><span style="color:green"><?php echo (isset($this->_rootref['THANKSEND'])) ? $this->_rootref['THANKSEND'] : ''; ?></span></dd>
	</dl>
</fieldset>
<?php if (! $this->_rootref['S_REFRESH']) {  ?>

<form id="acp_thanks_refresh" method="post" action="<?php echo (isset($this->_rootref['U_ACTION'])) ? $this->_rootref['U_ACTION'] : ''; ?>">
	<fieldset class="submit-buttons">
		<legend><?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?></legend>
		<input class="button1" type="submit" id="refresh" name="refresh" value="<?php echo ((isset($this->_rootref['L_REFRESH'])) ? $this->_rootref['L_REFRESH'] : ((isset($user->lang['REFRESH'])) ? $user->lang['REFRESH'] : '{ REFRESH }')); ?>" />
	</fieldset>
</form>
<?php } $this->_tpl_include('overall_footer.html'); ?>