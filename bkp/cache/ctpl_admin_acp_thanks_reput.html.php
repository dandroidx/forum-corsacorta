<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<a name="maincontent"></a>

<h1><?php echo ((isset($this->_rootref['L_TITLE'])) ? $this->_rootref['L_TITLE'] : ((isset($user->lang['TITLE'])) ? $user->lang['TITLE'] : '{ TITLE }')); ?></h1>
<p><?php echo ((isset($this->_rootref['L_TITLE_EXPLAIN'])) ? $this->_rootref['L_TITLE_EXPLAIN'] : ((isset($user->lang['TITLE_EXPLAIN'])) ? $user->lang['TITLE_EXPLAIN'] : '{ TITLE_EXPLAIN }')); ?></p>
<?php if ($this->_rootref['S_ERROR']) {  ?>

	<div class="errorbox">
		<h3><?php echo ((isset($this->_rootref['L_WARNING'])) ? $this->_rootref['L_WARNING'] : ((isset($user->lang['WARNING'])) ? $user->lang['WARNING'] : '{ WARNING }')); ?></h3>
		<p><?php echo (isset($this->_rootref['ERROR_MSG'])) ? $this->_rootref['ERROR_MSG'] : ''; ?></p>
	</div>
<?php } ?>


<form id="acp_thanks" method="post" action="<?php echo (isset($this->_rootref['U_ACTION'])) ? $this->_rootref['U_ACTION'] : ''; ?>">

<?php $_options_count = (isset($this->_tpldata['options'])) ? sizeof($this->_tpldata['options']) : 0;if ($_options_count) {for ($_options_i = 0; $_options_i < $_options_count; ++$_options_i){$_options_val = &$this->_tpldata['options'][$_options_i]; if ($_options_val['S_LEGEND']) {  if (! $_options_val['S_FIRST_ROW']) {  ?>

			</fieldset>
		<?php } ?>

		<fieldset>
			<legend><?php echo $_options_val['LEGEND']; ?></legend>
	<?php } else { ?>

		<dl>
			<dt><label for="<?php echo $_options_val['KEY']; ?>"><?php echo $_options_val['TITLE']; ?>:</label><?php if ($_options_val['S_EXPLAIN']) {  ?><br /><span><?php echo $_options_val['TITLE_EXPLAIN']; ?></span><?php } ?></dt>
			<dd><?php echo $_options_val['CONTENT']; ?></dd>
		</dl>

	<?php } }} ?>

	<dl>
		<dt><?php echo ((isset($this->_rootref['L_THANKS_REPUT_IMAGE_DEFAULT'])) ? $this->_rootref['L_THANKS_REPUT_IMAGE_DEFAULT'] : ((isset($user->lang['THANKS_REPUT_IMAGE_DEFAULT'])) ? $user->lang['THANKS_REPUT_IMAGE_DEFAULT'] : '{ THANKS_REPUT_IMAGE_DEFAULT }')); ?>:<br /><span><?php echo ((isset($this->_rootref['L_THANKS_REPUT_IMAGE_DEFAULT_EXPLAIN'])) ? $this->_rootref['L_THANKS_REPUT_IMAGE_DEFAULT_EXPLAIN'] : ((isset($user->lang['THANKS_REPUT_IMAGE_DEFAULT_EXPLAIN'])) ? $user->lang['THANKS_REPUT_IMAGE_DEFAULT_EXPLAIN'] : '{ THANKS_REPUT_IMAGE_DEFAULT_EXPLAIN }')); ?></span></dt>
         <dd><img src="<?php echo (isset($this->_rootref['GRAPHIC_STAR_BLUE_EXAMPLE'])) ? $this->_rootref['GRAPHIC_STAR_BLUE_EXAMPLE'] : ''; ?>" alt="<?php echo ((isset($this->_rootref['L_THANKS_REPUT_IMAGE_BACK'])) ? $this->_rootref['L_THANKS_REPUT_IMAGE_BACK'] : ((isset($user->lang['THANKS_REPUT_IMAGE_BACK'])) ? $user->lang['THANKS_REPUT_IMAGE_BACK'] : '{ THANKS_REPUT_IMAGE_BACK }')); ?>" />&nbsp;<?php echo ((isset($this->_rootref['L_GRAPHIC_STAR_BLUE'])) ? $this->_rootref['L_GRAPHIC_STAR_BLUE'] : ((isset($user->lang['GRAPHIC_STAR_BLUE'])) ? $user->lang['GRAPHIC_STAR_BLUE'] : '{ GRAPHIC_STAR_BLUE }')); ?></dd>
         <dd><img src="<?php echo (isset($this->_rootref['GRAPHIC_STAR_GOLD_EXAMPLE'])) ? $this->_rootref['GRAPHIC_STAR_GOLD_EXAMPLE'] : ''; ?>" alt="<?php echo ((isset($this->_rootref['L_THANKS_REPUT_IMAGE_BACK'])) ? $this->_rootref['L_THANKS_REPUT_IMAGE_BACK'] : ((isset($user->lang['THANKS_REPUT_IMAGE_BACK'])) ? $user->lang['THANKS_REPUT_IMAGE_BACK'] : '{ THANKS_REPUT_IMAGE_BACK }')); ?>" />&nbsp;<?php echo ((isset($this->_rootref['L_GRAPHIC_STAR_GOLD'])) ? $this->_rootref['L_GRAPHIC_STAR_GOLD'] : ((isset($user->lang['GRAPHIC_STAR_GOLD'])) ? $user->lang['GRAPHIC_STAR_GOLD'] : '{ GRAPHIC_STAR_GOLD }')); ?></dd>
         <dd><img src="<?php echo (isset($this->_rootref['GRAPHIC_STAR_BACK_EXAMPLE'])) ? $this->_rootref['GRAPHIC_STAR_BACK_EXAMPLE'] : ''; ?>" alt="<?php echo ((isset($this->_rootref['L_THANKS_REPUT_IMAGE_BACK'])) ? $this->_rootref['L_THANKS_REPUT_IMAGE_BACK'] : ((isset($user->lang['THANKS_REPUT_IMAGE_BACK'])) ? $user->lang['THANKS_REPUT_IMAGE_BACK'] : '{ THANKS_REPUT_IMAGE_BACK }')); ?>" />&nbsp;<?php echo ((isset($this->_rootref['L_GRAPHIC_STAR_BACK'])) ? $this->_rootref['L_GRAPHIC_STAR_BACK'] : ((isset($user->lang['GRAPHIC_STAR_BACK'])) ? $user->lang['GRAPHIC_STAR_BACK'] : '{ GRAPHIC_STAR_BACK }')); ?></dd>
         <dd><img src="<?php echo (isset($this->_rootref['GRAPHIC_BLOCK_RED_EXAMPLE'])) ? $this->_rootref['GRAPHIC_BLOCK_RED_EXAMPLE'] : ''; ?>" alt="<?php echo ((isset($this->_rootref['L_THANKS_REPUT_IMAGE_BACK'])) ? $this->_rootref['L_THANKS_REPUT_IMAGE_BACK'] : ((isset($user->lang['THANKS_REPUT_IMAGE_BACK'])) ? $user->lang['THANKS_REPUT_IMAGE_BACK'] : '{ THANKS_REPUT_IMAGE_BACK }')); ?>" />&nbsp;<?php echo ((isset($this->_rootref['L_GRAPHIC_BLOCK_RED'])) ? $this->_rootref['L_GRAPHIC_BLOCK_RED'] : ((isset($user->lang['GRAPHIC_BLOCK_RED'])) ? $user->lang['GRAPHIC_BLOCK_RED'] : '{ GRAPHIC_BLOCK_RED }')); ?></dd>
         <dd><img src="<?php echo (isset($this->_rootref['GRAPHIC_BLOCK_BACK_EXAMPLE'])) ? $this->_rootref['GRAPHIC_BLOCK_BACK_EXAMPLE'] : ''; ?>" alt="<?php echo ((isset($this->_rootref['L_THANKS_REPUT_IMAGE_BACK'])) ? $this->_rootref['L_THANKS_REPUT_IMAGE_BACK'] : ((isset($user->lang['THANKS_REPUT_IMAGE_BACK'])) ? $user->lang['THANKS_REPUT_IMAGE_BACK'] : '{ THANKS_REPUT_IMAGE_BACK }')); ?>" />&nbsp;<?php echo ((isset($this->_rootref['L_GRAPHIC_BLOCK_BACK'])) ? $this->_rootref['L_GRAPHIC_BLOCK_BACK'] : ((isset($user->lang['GRAPHIC_BLOCK_BACK'])) ? $user->lang['GRAPHIC_BLOCK_BACK'] : '{ GRAPHIC_BLOCK_BACK }')); ?></dd>
 	</dl>
	<p class="submit-buttons">
		<input class="button1" type="submit" id="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />&nbsp;
		<input class="button2" type="reset" id="reset" name="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" />
	</p>
	<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

</fieldset>
</form>

<?php $this->_tpl_include('overall_footer.html'); ?>