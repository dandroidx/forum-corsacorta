<?php if (!defined('IN_PHPBB')) exit; ?><div class="forumlist">
<?php $_forumrow_count = (isset($this->_tpldata['forumrow'])) ? sizeof($this->_tpldata['forumrow']) : 0;if ($_forumrow_count) {for ($_forumrow_i = 0; $_forumrow_i < $_forumrow_count; ++$_forumrow_i){$_forumrow_val = &$this->_tpldata['forumrow'][$_forumrow_i]; if (( $_forumrow_val['S_IS_CAT'] && ! $_forumrow_val['S_FIRST_ROW'] ) || $_forumrow_val['S_NO_CAT']) {  ?>

			</ul>
			<div class="mainfoot-m">
				<div class="mainfoot-l"></div>
					<div class="mainfoot-r"></div>	
			</div>	
			</div>
			<br />
	<?php } if ($_forumrow_val['S_IS_CAT'] || $_forumrow_val['S_FIRST_ROW'] || $_forumrow_val['S_NO_CAT']) {  ?>

			<div class="maintitle-m">
				<div class="maintitle-l"></div>
					<div class="maintitle-r"></div>	
			<ul class="topiclist">
				<li class="header">
					<dl class="icon">
						<dt style="margin-top: 10px;"><?php if ($_forumrow_val['S_IS_CAT']) {  ?><a href="<?php echo $_forumrow_val['U_VIEWFORUM']; ?>"><?php echo $_forumrow_val['FORUM_NAME']; ?></a><?php } else { echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); } ?></dt>
					</dl>
				</li>
			</ul>
			</div>			
            <?php if ($this->_rootref['SCRIPT_NAME'] == ('index') && $this->_tpldata['DEFINE']['.']['COLLAPSIBLE_CATEGORIES'] == ('on')) {  ?><div class="trigger active"></div><?php } ?>

            <div class="collapsethis">			
			<ul class="topiclist forums">
	<?php } if (! $_forumrow_val['S_IS_CAT']) {  ?>

		<li class="row">
			<dl class="icon graand-fl-marker" style="background-image: url(<?php echo $_forumrow_val['FORUM_FOLDER_IMG_SRC']; ?>); background-repeat: no-repeat; <?php if ($this->_rootref['SCRIPT_NAME'] == ('index') || ('viewforum')) {  ?>padding-left: 40px;<?php } ?>">
				<dt title="<?php echo $_forumrow_val['FORUM_FOLDER_IMG_ALT']; ?>">
				<?php if ($this->_rootref['S_ENABLE_FEEDS'] && $_forumrow_val['S_FEED_ENABLED']) {  ?><!-- <a class="feed-icon-forum" title="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo $_forumrow_val['FORUM_NAME']; ?>" href="<?php echo (isset($this->_rootref['U_FEED'])) ? $this->_rootref['U_FEED'] : ''; ?>?f=<?php echo $_forumrow_val['FORUM_ID']; ?>"><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/feed.gif" alt="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo $_forumrow_val['FORUM_NAME']; ?>" /></a> --><?php } if ($_forumrow_val['FORUM_IMAGE']) {  ?><span class="forum-image"><?php echo $_forumrow_val['FORUM_IMAGE']; ?></span><?php } ?>

					<a href="<?php echo $_forumrow_val['U_VIEWFORUM']; ?>" class="forumtitle"><?php echo $_forumrow_val['FORUM_NAME']; ?></a><br />
					<?php echo $_forumrow_val['FORUM_DESC']; ?>

					<?php if ($_forumrow_val['MODERATORS']) {  ?>

						<br /><strong><?php echo $_forumrow_val['L_MODERATOR_STR']; ?>:</strong> <?php echo $_forumrow_val['MODERATORS']; ?>

					<?php } if ($_forumrow_val['SUBFORUMS'] && $_forumrow_val['S_LIST_SUBFORUMS']) {  ?><br /><strong><?php echo $_forumrow_val['L_SUBFORUM_STR']; ?></strong> <?php echo $_forumrow_val['SUBFORUMS']; } ?>

				</dt>
				<?php if ($_forumrow_val['CLICKS']) {  ?>

					<dd class="redirect"><span><?php echo ((isset($this->_rootref['L_REDIRECTS'])) ? $this->_rootref['L_REDIRECTS'] : ((isset($user->lang['REDIRECTS'])) ? $user->lang['REDIRECTS'] : '{ REDIRECTS }')); ?>: <?php echo $_forumrow_val['CLICKS']; ?></span></dd>
				<?php } else if (! $_forumrow_val['S_IS_LINK']) {  ?>

					<dd class="topics"><span><?php echo $_forumrow_val['TOPICS']; ?></span><br /><?php echo ((isset($this->_rootref['L_TOPICS'])) ? $this->_rootref['L_TOPICS'] : ((isset($user->lang['TOPICS'])) ? $user->lang['TOPICS'] : '{ TOPICS }')); ?></dd>
					<dd class="posts"><span><?php echo $_forumrow_val['POSTS']; ?></span><br /><?php echo ((isset($this->_rootref['L_POSTS'])) ? $this->_rootref['L_POSTS'] : ((isset($user->lang['POSTS'])) ? $user->lang['POSTS'] : '{ POSTS }')); ?></dd>
					<dd class="lastpost"><span>
						<?php if ($_forumrow_val['U_UNAPPROVED_TOPICS']) {  ?><a href="<?php echo $_forumrow_val['U_UNAPPROVED_TOPICS']; ?>"><?php echo (isset($this->_rootref['UNAPPROVED_IMG'])) ? $this->_rootref['UNAPPROVED_IMG'] : ''; ?></a><?php } if ($_forumrow_val['LAST_POST_TIME']) {  ?><dfn><?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?></dfn> <?php echo ((isset($this->_rootref['L_POST_BY_AUTHOR'])) ? $this->_rootref['L_POST_BY_AUTHOR'] : ((isset($user->lang['POST_BY_AUTHOR'])) ? $user->lang['POST_BY_AUTHOR'] : '{ POST_BY_AUTHOR }')); ?> <?php echo $_forumrow_val['LAST_POSTER_FULL']; ?>

						<?php if (! $this->_rootref['S_IS_BOT']) {  ?><a href="<?php echo $_forumrow_val['U_LAST_POST']; ?>"><?php echo (isset($this->_rootref['LAST_POST_IMG'])) ? $this->_rootref['LAST_POST_IMG'] : ''; ?></a> <?php } ?><br /><?php echo $_forumrow_val['LAST_POST_TIME']; } else { echo ((isset($this->_rootref['L_NO_POSTS'])) ? $this->_rootref['L_NO_POSTS'] : ((isset($user->lang['NO_POSTS'])) ? $user->lang['NO_POSTS'] : '{ NO_POSTS }')); ?><br />&nbsp;<?php } ?></span>
					</dd>
				<?php } ?>

			</dl>
		</li>
	<?php } if ($_forumrow_val['S_LAST_ROW']) {  ?>

			</ul>
			<div class="mainfoot-m">
				<div class="mainfoot-l"></div>
					<div class="mainfoot-r"></div>	
			</div>	
			</div>
			<br />
	<?php } }} else { ?>

	<div class="panel">
		<div class="inner"><span class="corners-top"><span></span></span>
		<strong><?php echo ((isset($this->_rootref['L_NO_FORUMS'])) ? $this->_rootref['L_NO_FORUMS'] : ((isset($user->lang['NO_FORUMS'])) ? $user->lang['NO_FORUMS'] : '{ NO_FORUMS }')); ?></strong>
		<span class="corners-bottom"><span></span></span></div>
	</div>
<?php } ?>

</div>

<?php if ($this->_tpldata['DEFINE']['.']['COLLAPSIBLE_CATEGORIES'] == ('on')) {  ?>

<script type="text/javascript">
        // <![CDATA[
		$(".forumlist").collapse({show: function(){
                this.animate({
                    opacity: 'toggle',
                    height: 'toggle'
                }, 300);
            },
            hide : function() {
                   
                this.animate({
                    opacity: 'toggle',
                    height: 'toggle'
                }, 300);
            }
        });
		// ]]>
</script>
<?php } ?>