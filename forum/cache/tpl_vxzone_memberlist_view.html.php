<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>


<h2><?php echo (isset($this->_rootref['PAGE_TITLE'])) ? $this->_rootref['PAGE_TITLE'] : ''; ?></h2>

<form method="post" action="<?php echo (isset($this->_rootref['S_PROFILE_ACTION'])) ? $this->_rootref['S_PROFILE_ACTION'] : ''; ?>" id="viewprofile">
<div class="panel bg1<?php if ($this->_rootref['S_ONLINE']) {  ?> online<?php } ?>">
	<div class="inner"><span class="corners-top"><span></span></span>

	<?php if ($this->_rootref['AVATAR_IMG']) {  ?>

		<dl class="left-box">
			<dt><?php echo (isset($this->_rootref['AVATAR_IMG'])) ? $this->_rootref['AVATAR_IMG'] : ''; ?></dt>
			<?php if ($this->_rootref['RANK_TITLE']) {  ?><dd style="text-align: center;"><?php echo (isset($this->_rootref['RANK_TITLE'])) ? $this->_rootref['RANK_TITLE'] : ''; ?></dd><?php } if ($this->_rootref['RANK_IMG']) {  ?><dd style="text-align: center;"><?php echo (isset($this->_rootref['RANK_IMG'])) ? $this->_rootref['RANK_IMG'] : ''; ?></dd><?php } ?>

		</dl>
	<?php } ?>


	<dl class="left-box details" style="width: 80%;">
		<dt><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>:</dt>
		<dd>
			<?php if ($this->_rootref['USER_COLOR']) {  ?><span style="color: <?php echo (isset($this->_rootref['USER_COLOR'])) ? $this->_rootref['USER_COLOR'] : ''; ?>; font-weight: bold;"><?php } else { ?><span><?php } echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?></span>
			<?php if ($this->_rootref['U_USER_ADMIN']) {  ?> [ <a href="<?php echo (isset($this->_rootref['U_USER_ADMIN'])) ? $this->_rootref['U_USER_ADMIN'] : ''; ?>"><?php echo ((isset($this->_rootref['L_USER_ADMIN'])) ? $this->_rootref['L_USER_ADMIN'] : ((isset($user->lang['USER_ADMIN'])) ? $user->lang['USER_ADMIN'] : '{ USER_ADMIN }')); ?></a> ]<?php } if ($this->_rootref['U_USER_BAN']) {  ?> [ <a href="<?php echo (isset($this->_rootref['U_USER_BAN'])) ? $this->_rootref['U_USER_BAN'] : ''; ?>"><?php echo ((isset($this->_rootref['L_USER_BAN'])) ? $this->_rootref['L_USER_BAN'] : ((isset($user->lang['USER_BAN'])) ? $user->lang['USER_BAN'] : '{ USER_BAN }')); ?></a> ]<?php } if ($this->_rootref['U_SWITCH_PERMISSIONS']) {  ?> [ <a href="<?php echo (isset($this->_rootref['U_SWITCH_PERMISSIONS'])) ? $this->_rootref['U_SWITCH_PERMISSIONS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_USE_PERMISSIONS'])) ? $this->_rootref['L_USE_PERMISSIONS'] : ((isset($user->lang['USE_PERMISSIONS'])) ? $user->lang['USE_PERMISSIONS'] : '{ USE_PERMISSIONS }')); ?></a> ]<?php } ?>

		</dd>
		<?php if (! $this->_rootref['AVATAR_IMG']) {  if ($this->_rootref['RANK_TITLE']) {  ?><dt><?php echo ((isset($this->_rootref['L_RANK'])) ? $this->_rootref['L_RANK'] : ((isset($user->lang['RANK'])) ? $user->lang['RANK'] : '{ RANK }')); ?>:</dt> <dd><?php echo (isset($this->_rootref['RANK_TITLE'])) ? $this->_rootref['RANK_TITLE'] : ''; ?></dd><?php } if ($this->_rootref['RANK_IMG']) {  ?><dt><?php if ($this->_rootref['RANK_TITLE']) {  ?>&nbsp;<?php } else { echo ((isset($this->_rootref['L_RANK'])) ? $this->_rootref['L_RANK'] : ((isset($user->lang['RANK'])) ? $user->lang['RANK'] : '{ RANK }')); ?>:<?php } ?></dt> <dd><?php echo (isset($this->_rootref['RANK_IMG'])) ? $this->_rootref['RANK_IMG'] : ''; ?></dd><?php } } if ($this->_rootref['S_USER_INACTIVE']) {  ?><dt><?php echo ((isset($this->_rootref['L_USER_IS_INACTIVE'])) ? $this->_rootref['L_USER_IS_INACTIVE'] : ((isset($user->lang['USER_IS_INACTIVE'])) ? $user->lang['USER_IS_INACTIVE'] : '{ USER_IS_INACTIVE }')); ?>:</dt> <dd><?php echo (isset($this->_rootref['USER_INACTIVE_REASON'])) ? $this->_rootref['USER_INACTIVE_REASON'] : ''; ?></dd><?php } if ($this->_rootref['LOCATION']) {  ?><dt><?php echo ((isset($this->_rootref['L_LOCATION'])) ? $this->_rootref['L_LOCATION'] : ((isset($user->lang['LOCATION'])) ? $user->lang['LOCATION'] : '{ LOCATION }')); ?>:</dt> <dd><?php echo (isset($this->_rootref['LOCATION'])) ? $this->_rootref['LOCATION'] : ''; ?></dd><?php } if ($this->_rootref['AGE']) {  ?><dt><?php echo ((isset($this->_rootref['L_AGE'])) ? $this->_rootref['L_AGE'] : ((isset($user->lang['AGE'])) ? $user->lang['AGE'] : '{ AGE }')); ?>:</dt> <dd><?php echo (isset($this->_rootref['AGE'])) ? $this->_rootref['AGE'] : ''; ?></dd><?php } if ($this->_rootref['OCCUPATION']) {  ?><dt><?php echo ((isset($this->_rootref['L_OCCUPATION'])) ? $this->_rootref['L_OCCUPATION'] : ((isset($user->lang['OCCUPATION'])) ? $user->lang['OCCUPATION'] : '{ OCCUPATION }')); ?>:</dt> <dd><?php echo (isset($this->_rootref['OCCUPATION'])) ? $this->_rootref['OCCUPATION'] : ''; ?></dd><?php } if ($this->_rootref['INTERESTS']) {  ?><dt><?php echo ((isset($this->_rootref['L_INTERESTS'])) ? $this->_rootref['L_INTERESTS'] : ((isset($user->lang['INTERESTS'])) ? $user->lang['INTERESTS'] : '{ INTERESTS }')); ?>:</dt> <dd><?php echo (isset($this->_rootref['INTERESTS'])) ? $this->_rootref['INTERESTS'] : ''; ?></dd><?php } if ($this->_rootref['S_GROUP_OPTIONS']) {  ?><dt><?php echo ((isset($this->_rootref['L_USERGROUPS'])) ? $this->_rootref['L_USERGROUPS'] : ((isset($user->lang['USERGROUPS'])) ? $user->lang['USERGROUPS'] : '{ USERGROUPS }')); ?>:</dt> <dd><select name="g"><?php echo (isset($this->_rootref['S_GROUP_OPTIONS'])) ? $this->_rootref['S_GROUP_OPTIONS'] : ''; ?></select> <input type="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" class="button2" /></dd><?php } $_custom_fields_count = (isset($this->_tpldata['custom_fields'])) ? sizeof($this->_tpldata['custom_fields']) : 0;if ($_custom_fields_count) {for ($_custom_fields_i = 0; $_custom_fields_i < $_custom_fields_count; ++$_custom_fields_i){$_custom_fields_val = &$this->_tpldata['custom_fields'][$_custom_fields_i]; ?><dt><?php echo $_custom_fields_val['PROFILE_FIELD_NAME']; ?>:</dt> <dd><?php echo $_custom_fields_val['PROFILE_FIELD_VALUE']; ?></dd><?php }} if ($this->_rootref['S_USER_LOGGED_IN'] && $this->_rootref['S_ZEBRA']) {  if ($this->_rootref['U_REMOVE_FRIEND']) {  ?>

				<dt>&nbsp;</dt> <dd><a href="<?php echo (isset($this->_rootref['U_REMOVE_FRIEND'])) ? $this->_rootref['U_REMOVE_FRIEND'] : ''; ?>"><strong><?php echo ((isset($this->_rootref['L_REMOVE_FRIEND'])) ? $this->_rootref['L_REMOVE_FRIEND'] : ((isset($user->lang['REMOVE_FRIEND'])) ? $user->lang['REMOVE_FRIEND'] : '{ REMOVE_FRIEND }')); ?></strong></a></dd>
			<?php } else if ($this->_rootref['U_REMOVE_FOE']) {  ?>

				<dt>&nbsp;</dt> <dd><a href="<?php echo (isset($this->_rootref['U_REMOVE_FOE'])) ? $this->_rootref['U_REMOVE_FOE'] : ''; ?>"><strong><?php echo ((isset($this->_rootref['L_REMOVE_FOE'])) ? $this->_rootref['L_REMOVE_FOE'] : ((isset($user->lang['REMOVE_FOE'])) ? $user->lang['REMOVE_FOE'] : '{ REMOVE_FOE }')); ?></strong></a></dd>
			<?php } else { if ($this->_rootref['U_ADD_FRIEND']) {  ?>

					<dt>&nbsp;</dt> <dd><a href="<?php echo (isset($this->_rootref['U_ADD_FRIEND'])) ? $this->_rootref['U_ADD_FRIEND'] : ''; ?>"><strong><?php echo ((isset($this->_rootref['L_ADD_FRIEND'])) ? $this->_rootref['L_ADD_FRIEND'] : ((isset($user->lang['ADD_FRIEND'])) ? $user->lang['ADD_FRIEND'] : '{ ADD_FRIEND }')); ?></strong></a></dd>
				<?php } if ($this->_rootref['U_ADD_FOE']) {  ?>

					<dt>&nbsp;</dt> <dd><a href="<?php echo (isset($this->_rootref['U_ADD_FOE'])) ? $this->_rootref['U_ADD_FOE'] : ''; ?>"><strong><?php echo ((isset($this->_rootref['L_ADD_FOE'])) ? $this->_rootref['L_ADD_FOE'] : ((isset($user->lang['ADD_FOE'])) ? $user->lang['ADD_FOE'] : '{ ADD_FOE }')); ?></strong></a></dd>
				<?php } } } ?>

	</dl>

	<span class="corners-bottom"><span></span></span></div>
</div>

<div class="panel bg2">
	<div class="inner"><span class="corners-top"><span></span></span>
	<div class="column1">

		<h3><?php echo ((isset($this->_rootref['L_CONTACT_USER'])) ? $this->_rootref['L_CONTACT_USER'] : ((isset($user->lang['CONTACT_USER'])) ? $user->lang['CONTACT_USER'] : '{ CONTACT_USER }')); ?> <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?></h3>

		<dl class="details">
		<?php if ($this->_rootref['U_EMAIL']) {  ?><dt><?php echo ((isset($this->_rootref['L_EMAIL_ADDRESS'])) ? $this->_rootref['L_EMAIL_ADDRESS'] : ((isset($user->lang['EMAIL_ADDRESS'])) ? $user->lang['EMAIL_ADDRESS'] : '{ EMAIL_ADDRESS }')); ?>:</dt> <dd><a href="<?php echo (isset($this->_rootref['U_EMAIL'])) ? $this->_rootref['U_EMAIL'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEND_EMAIL_USER'])) ? $this->_rootref['L_SEND_EMAIL_USER'] : ((isset($user->lang['SEND_EMAIL_USER'])) ? $user->lang['SEND_EMAIL_USER'] : '{ SEND_EMAIL_USER }')); ?> <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?></a></dd><?php } if ($this->_rootref['U_WWW']) {  ?><dt><?php echo ((isset($this->_rootref['L_WEBSITE'])) ? $this->_rootref['L_WEBSITE'] : ((isset($user->lang['WEBSITE'])) ? $user->lang['WEBSITE'] : '{ WEBSITE }')); ?>:</dt> <dd><a href="<?php echo (isset($this->_rootref['U_WWW'])) ? $this->_rootref['U_WWW'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_VISIT_WEBSITE'])) ? $this->_rootref['L_VISIT_WEBSITE'] : ((isset($user->lang['VISIT_WEBSITE'])) ? $user->lang['VISIT_WEBSITE'] : '{ VISIT_WEBSITE }')); ?>: <?php echo (isset($this->_rootref['U_WWW'])) ? $this->_rootref['U_WWW'] : ''; ?>"><?php echo (isset($this->_rootref['U_WWW'])) ? $this->_rootref['U_WWW'] : ''; ?></a></dd><?php } if ($this->_rootref['U_PM']) {  ?><dt><?php echo ((isset($this->_rootref['L_PM'])) ? $this->_rootref['L_PM'] : ((isset($user->lang['PM'])) ? $user->lang['PM'] : '{ PM }')); ?>:</dt> <dd><a href="<?php echo (isset($this->_rootref['U_PM'])) ? $this->_rootref['U_PM'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEND_PRIVATE_MESSAGE'])) ? $this->_rootref['L_SEND_PRIVATE_MESSAGE'] : ((isset($user->lang['SEND_PRIVATE_MESSAGE'])) ? $user->lang['SEND_PRIVATE_MESSAGE'] : '{ SEND_PRIVATE_MESSAGE }')); ?></a></dd><?php } if ($this->_rootref['U_MSN'] || $this->_rootref['USER_MSN']) {  ?><dt><?php echo ((isset($this->_rootref['L_MSNM'])) ? $this->_rootref['L_MSNM'] : ((isset($user->lang['MSNM'])) ? $user->lang['MSNM'] : '{ MSNM }')); ?>:</dt> <dd><?php if ($this->_rootref['U_MSN']) {  ?><a href="<?php echo (isset($this->_rootref['U_MSN'])) ? $this->_rootref['U_MSN'] : ''; ?>" onclick="popup(this.href, 550, 320); return false;"><?php echo ((isset($this->_rootref['L_SEND_MSNM_MESSAGE'])) ? $this->_rootref['L_SEND_MSNM_MESSAGE'] : ((isset($user->lang['SEND_MSNM_MESSAGE'])) ? $user->lang['SEND_MSNM_MESSAGE'] : '{ SEND_MSNM_MESSAGE }')); ?></a><?php } else { echo (isset($this->_rootref['USER_MSN'])) ? $this->_rootref['USER_MSN'] : ''; } ?></dd><?php } if ($this->_rootref['U_YIM'] || $this->_rootref['USER_YIM']) {  ?><dt><?php echo ((isset($this->_rootref['L_YIM'])) ? $this->_rootref['L_YIM'] : ((isset($user->lang['YIM'])) ? $user->lang['YIM'] : '{ YIM }')); ?>:</dt> <dd><?php if ($this->_rootref['U_YIM']) {  ?><a href="<?php echo (isset($this->_rootref['U_YIM'])) ? $this->_rootref['U_YIM'] : ''; ?>" onclick="popup(this.href, 780, 550); return false;"><?php echo ((isset($this->_rootref['L_SEND_YIM_MESSAGE'])) ? $this->_rootref['L_SEND_YIM_MESSAGE'] : ((isset($user->lang['SEND_YIM_MESSAGE'])) ? $user->lang['SEND_YIM_MESSAGE'] : '{ SEND_YIM_MESSAGE }')); ?></a><?php } else { echo (isset($this->_rootref['USER_YIM'])) ? $this->_rootref['USER_YIM'] : ''; } ?></dd><?php } if ($this->_rootref['U_AIM'] || $this->_rootref['USER_AIM']) {  ?><dt><?php echo ((isset($this->_rootref['L_AIM'])) ? $this->_rootref['L_AIM'] : ((isset($user->lang['AIM'])) ? $user->lang['AIM'] : '{ AIM }')); ?>:</dt> <dd><?php if ($this->_rootref['U_AIM']) {  ?><a href="<?php echo (isset($this->_rootref['U_AIM'])) ? $this->_rootref['U_AIM'] : ''; ?>" onclick="popup(this.href, 550, 320); return false;"><?php echo ((isset($this->_rootref['L_SEND_AIM_MESSAGE'])) ? $this->_rootref['L_SEND_AIM_MESSAGE'] : ((isset($user->lang['SEND_AIM_MESSAGE'])) ? $user->lang['SEND_AIM_MESSAGE'] : '{ SEND_AIM_MESSAGE }')); ?></a><?php } else { echo (isset($this->_rootref['USER_AIM'])) ? $this->_rootref['USER_AIM'] : ''; } ?></dd><?php } if ($this->_rootref['U_ICQ'] || $this->_rootref['USER_ICQ']) {  ?><dt><?php echo ((isset($this->_rootref['L_ICQ'])) ? $this->_rootref['L_ICQ'] : ((isset($user->lang['ICQ'])) ? $user->lang['ICQ'] : '{ ICQ }')); ?>:</dt> <dd><?php if ($this->_rootref['U_ICQ']) {  ?><a href="<?php echo (isset($this->_rootref['U_ICQ'])) ? $this->_rootref['U_ICQ'] : ''; ?>" onclick="popup(this.href, 550, 320); return false;"><?php echo ((isset($this->_rootref['L_SEND_ICQ_MESSAGE'])) ? $this->_rootref['L_SEND_ICQ_MESSAGE'] : ((isset($user->lang['SEND_ICQ_MESSAGE'])) ? $user->lang['SEND_ICQ_MESSAGE'] : '{ SEND_ICQ_MESSAGE }')); ?></a><?php } else { echo (isset($this->_rootref['USER_ICQ'])) ? $this->_rootref['USER_ICQ'] : ''; } ?></dd><?php } if ($this->_rootref['U_JABBER'] && $this->_rootref['S_JABBER_ENABLED']) {  ?><dt><?php echo ((isset($this->_rootref['L_JABBER'])) ? $this->_rootref['L_JABBER'] : ((isset($user->lang['JABBER'])) ? $user->lang['JABBER'] : '{ JABBER }')); ?>:</dt> <dd><a href="<?php echo (isset($this->_rootref['U_JABBER'])) ? $this->_rootref['U_JABBER'] : ''; ?>" onclick="popup(this.href, 550, 320); return false;"><?php echo ((isset($this->_rootref['L_SEND_JABBER_MESSAGE'])) ? $this->_rootref['L_SEND_JABBER_MESSAGE'] : ((isset($user->lang['SEND_JABBER_MESSAGE'])) ? $user->lang['SEND_JABBER_MESSAGE'] : '{ SEND_JABBER_MESSAGE }')); ?></a></dd><?php } else if ($this->_rootref['USER_JABBER']) {  ?><dt><?php echo ((isset($this->_rootref['L_JABBER'])) ? $this->_rootref['L_JABBER'] : ((isset($user->lang['JABBER'])) ? $user->lang['JABBER'] : '{ JABBER }')); ?>:</dt> <dd><?php echo (isset($this->_rootref['USER_JABBER'])) ? $this->_rootref['USER_JABBER'] : ''; ?></dd><?php } if ($this->_rootref['S_PROFILE_FIELD1']) {  ?><!-- NOTE: Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
			<dt><?php echo $_postrow_val['PROFILE_FIELD1_NAME']; ?>:</dt> <dd><?php echo $_postrow_val['PROFILE_FIELD1_VALUE']; ?></dd>
		<?php } ?>

		</dl>
	</div>

	<div class="column2">
		<h3><?php echo ((isset($this->_rootref['L_USER_FORUM'])) ? $this->_rootref['L_USER_FORUM'] : ((isset($user->lang['USER_FORUM'])) ? $user->lang['USER_FORUM'] : '{ USER_FORUM }')); ?></h3>
		<dl class="details">
			<dt><?php echo ((isset($this->_rootref['L_JOINED'])) ? $this->_rootref['L_JOINED'] : ((isset($user->lang['JOINED'])) ? $user->lang['JOINED'] : '{ JOINED }')); ?>:</dt> <dd><?php echo (isset($this->_rootref['JOINED'])) ? $this->_rootref['JOINED'] : ''; ?></dd>
			<dt><?php echo ((isset($this->_rootref['L_VISITED'])) ? $this->_rootref['L_VISITED'] : ((isset($user->lang['VISITED'])) ? $user->lang['VISITED'] : '{ VISITED }')); ?>:</dt> <dd><?php echo (isset($this->_rootref['VISITED'])) ? $this->_rootref['VISITED'] : ''; ?></dd>
			<?php if ($this->_rootref['S_WARNINGS']) {  ?>

			<dt><?php echo ((isset($this->_rootref['L_WARNINGS'])) ? $this->_rootref['L_WARNINGS'] : ((isset($user->lang['WARNINGS'])) ? $user->lang['WARNINGS'] : '{ WARNINGS }')); ?>: </dt>
			<dd><strong><?php echo (isset($this->_rootref['WARNINGS'])) ? $this->_rootref['WARNINGS'] : ''; ?></strong><?php if ($this->_rootref['U_NOTES'] || $this->_rootref['U_WARN']) {  ?> [ <?php if ($this->_rootref['U_NOTES']) {  ?><a href="<?php echo (isset($this->_rootref['U_NOTES'])) ? $this->_rootref['U_NOTES'] : ''; ?>"><?php echo ((isset($this->_rootref['L_VIEW_NOTES'])) ? $this->_rootref['L_VIEW_NOTES'] : ((isset($user->lang['VIEW_NOTES'])) ? $user->lang['VIEW_NOTES'] : '{ VIEW_NOTES }')); ?></a><?php } if ($this->_rootref['U_WARN']) {  if ($this->_rootref['U_NOTES']) {  ?> | <?php } ?><a href="<?php echo (isset($this->_rootref['U_WARN'])) ? $this->_rootref['U_WARN'] : ''; ?>"><?php echo ((isset($this->_rootref['L_WARN_USER'])) ? $this->_rootref['L_WARN_USER'] : ((isset($user->lang['WARN_USER'])) ? $user->lang['WARN_USER'] : '{ WARN_USER }')); ?></a><?php } ?> ]<?php } ?></dd>
			<?php } ?>

			<dt><?php echo ((isset($this->_rootref['L_TOTAL_POSTS'])) ? $this->_rootref['L_TOTAL_POSTS'] : ((isset($user->lang['TOTAL_POSTS'])) ? $user->lang['TOTAL_POSTS'] : '{ TOTAL_POSTS }')); ?>:</dt>
				<dd><?php echo (isset($this->_rootref['POSTS'])) ? $this->_rootref['POSTS'] : ''; ?> <?php if ($this->_rootref['S_DISPLAY_SEARCH']) {  ?>| <strong><a href="<?php echo (isset($this->_rootref['U_SEARCH_USER'])) ? $this->_rootref['U_SEARCH_USER'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_USER_POSTS'])) ? $this->_rootref['L_SEARCH_USER_POSTS'] : ((isset($user->lang['SEARCH_USER_POSTS'])) ? $user->lang['SEARCH_USER_POSTS'] : '{ SEARCH_USER_POSTS }')); ?></a></strong><?php } if ($this->_rootref['POSTS_PCT']) {  ?><br />(<?php echo (isset($this->_rootref['POSTS_PCT'])) ? $this->_rootref['POSTS_PCT'] : ''; ?> / <?php echo (isset($this->_rootref['POSTS_DAY'])) ? $this->_rootref['POSTS_DAY'] : ''; ?>)<?php } if ($this->_rootref['POSTS_IN_QUEUE'] && $this->_rootref['U_MCP_QUEUE']) {  ?><br />(<a href="<?php echo (isset($this->_rootref['U_MCP_QUEUE'])) ? $this->_rootref['U_MCP_QUEUE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_POSTS_IN_QUEUE'])) ? $this->_rootref['L_POSTS_IN_QUEUE'] : ((isset($user->lang['POSTS_IN_QUEUE'])) ? $user->lang['POSTS_IN_QUEUE'] : '{ POSTS_IN_QUEUE }')); ?></a>)<?php } else if ($this->_rootref['POSTS_IN_QUEUE']) {  ?><br />(<?php echo ((isset($this->_rootref['L_POSTS_IN_QUEUE'])) ? $this->_rootref['L_POSTS_IN_QUEUE'] : ((isset($user->lang['POSTS_IN_QUEUE'])) ? $user->lang['POSTS_IN_QUEUE'] : '{ POSTS_IN_QUEUE }')); ?>)<?php } ?>

				</dd>
			<?php if ($this->_rootref['S_REPUTATION']) {  ?>

			<dt><?php echo ((isset($this->_rootref['L_RP_TOTAL_POINTS'])) ? $this->_rootref['L_RP_TOTAL_POINTS'] : ((isset($user->lang['RP_TOTAL_POINTS'])) ? $user->lang['RP_TOTAL_POINTS'] : '{ RP_TOTAL_POINTS }')); ?>:</dt> <dd><?php echo (isset($this->_rootref['REPUTATION'])) ? $this->_rootref['REPUTATION'] : ''; ?></dd>
			<dt><?php echo ((isset($this->_rootref['L_RP_POWER'])) ? $this->_rootref['L_RP_POWER'] : ((isset($user->lang['RP_POWER'])) ? $user->lang['RP_POWER'] : '{ RP_POWER }')); ?>:</dt> <dd><?php echo (isset($this->_rootref['REP_POWER'])) ? $this->_rootref['REP_POWER'] : ''; ?></dd>
			<?php } if ($this->_rootref['S_SHOW_ACTIVITY'] && $this->_rootref['POSTS']) {  ?>

				<dt><?php echo ((isset($this->_rootref['L_ACTIVE_IN_FORUM'])) ? $this->_rootref['L_ACTIVE_IN_FORUM'] : ((isset($user->lang['ACTIVE_IN_FORUM'])) ? $user->lang['ACTIVE_IN_FORUM'] : '{ ACTIVE_IN_FORUM }')); ?>:</dt> <dd><?php if ($this->_rootref['ACTIVE_FORUM']) {  ?><strong><a href="<?php echo (isset($this->_rootref['U_ACTIVE_FORUM'])) ? $this->_rootref['U_ACTIVE_FORUM'] : ''; ?>"><?php echo (isset($this->_rootref['ACTIVE_FORUM'])) ? $this->_rootref['ACTIVE_FORUM'] : ''; ?></a></strong><br />(<?php echo (isset($this->_rootref['ACTIVE_FORUM_POSTS'])) ? $this->_rootref['ACTIVE_FORUM_POSTS'] : ''; ?> / <?php echo (isset($this->_rootref['ACTIVE_FORUM_PCT'])) ? $this->_rootref['ACTIVE_FORUM_PCT'] : ''; ?>)<?php } else { ?> - <?php } ?></dd>
				<dt><?php echo ((isset($this->_rootref['L_ACTIVE_IN_TOPIC'])) ? $this->_rootref['L_ACTIVE_IN_TOPIC'] : ((isset($user->lang['ACTIVE_IN_TOPIC'])) ? $user->lang['ACTIVE_IN_TOPIC'] : '{ ACTIVE_IN_TOPIC }')); ?>:</dt> <dd><?php if ($this->_rootref['ACTIVE_TOPIC']) {  ?><strong><a href="<?php echo (isset($this->_rootref['U_ACTIVE_TOPIC'])) ? $this->_rootref['U_ACTIVE_TOPIC'] : ''; ?>"><?php echo (isset($this->_rootref['ACTIVE_TOPIC'])) ? $this->_rootref['ACTIVE_TOPIC'] : ''; ?></a></strong><br />(<?php echo (isset($this->_rootref['ACTIVE_TOPIC_POSTS'])) ? $this->_rootref['ACTIVE_TOPIC_POSTS'] : ''; ?> / <?php echo (isset($this->_rootref['ACTIVE_TOPIC_PCT'])) ? $this->_rootref['ACTIVE_TOPIC_PCT'] : ''; ?>)<?php } else { ?> - <?php } ?></dd>
			<?php } ?>

		</dl>
	</div>
	<span class="corners-bottom"><span></span></span></div>
</div>

<?php if ($this->_rootref['SIGNATURE']) {  ?>

<div class="panel bg1">
	<div class="inner"><span class="corners-top"><span></span></span>

		<h3><?php echo ((isset($this->_rootref['L_SIGNATURE'])) ? $this->_rootref['L_SIGNATURE'] : ((isset($user->lang['SIGNATURE'])) ? $user->lang['SIGNATURE'] : '{ SIGNATURE }')); ?></h3>

		<div class="postbody"><div class="signature" style="border-top:none; margin-top: 0;"><?php echo (isset($this->_rootref['SIGNATURE'])) ? $this->_rootref['SIGNATURE'] : ''; ?></div></div>

	<span class="corners-bottom"><span></span></span></div>
</div>
<?php } if (sizeof($this->_tpldata['user'])) {  ?>

<div>
<div class="panel bg2">
	<div class="inner"><span class="corners-top"><span></span></span>
		<h3><?php echo ((isset($this->_rootref['L_WARNINGS'])) ? $this->_rootref['L_WARNINGS'] : ((isset($user->lang['WARNINGS'])) ? $user->lang['WARNINGS'] : '{ WARNINGS }')); ?></h3>
		<table class="table1" cellspacing="0">
			<thead>
				<tr>
					<th class="simplename"><?php echo ((isset($this->_rootref['L_AUTHOR'])) ? $this->_rootref['L_AUTHOR'] : ((isset($user->lang['AUTHOR'])) ? $user->lang['AUTHOR'] : '{ AUTHOR }')); ?></th>
					<th class="simplename"><?php echo ((isset($this->_rootref['L_WARNING_TIME'])) ? $this->_rootref['L_WARNING_TIME'] : ((isset($user->lang['WARNING_TIME'])) ? $user->lang['WARNING_TIME'] : '{ WARNING_TIME }')); ?></th>
					<th class="simplename"><?php echo ((isset($this->_rootref['L_WARNING_EXPIRES'])) ? $this->_rootref['L_WARNING_EXPIRES'] : ((isset($user->lang['WARNING_EXPIRES'])) ? $user->lang['WARNING_EXPIRES'] : '{ WARNING_EXPIRES }')); ?></th>
					<th class="simplename"><?php echo ((isset($this->_rootref['L_REASON'])) ? $this->_rootref['L_REASON'] : ((isset($user->lang['REASON'])) ? $user->lang['REASON'] : '{ REASON }')); ?></th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>

			<?php $_user_count = (isset($this->_tpldata['user'])) ? sizeof($this->_tpldata['user']) : 0;if ($_user_count) {for ($_user_i = 0; $_user_i < $_user_count; ++$_user_i){$_user_val = &$this->_tpldata['user'][$_user_i]; ?>

				<tr class="<?php if (!($_user_val['S_ROW_COUNT'] & 1)  ) {  ?>bg1<?php } else { ?>bg2<?php } ?>">
					<td><?php echo $_user_val['USERNAME_FULL']; ?></td>
					<td><?php echo $_user_val['WARNINGS']; ?></td>
					<td><?php echo $_user_val['WARNING_TIME']; ?></td>
					<td style="width:40%;"><?php echo $_user_val['WARNING']; ?></td>
					<td><?php if ($_user_val['U_WARNING_POST_URL']) {  ?><a href="<?php echo $_user_val['U_WARNING_POST_URL']; ?>"><?php echo ((isset($this->_rootref['L_WARNING_POST'])) ? $this->_rootref['L_WARNING_POST'] : ((isset($user->lang['WARNING_POST'])) ? $user->lang['WARNING_POST'] : '{ WARNING_POST }')); ?></a><?php } else { } ?></td>
					<td><?php if ($_user_val['WARNING_STATUS']) {  ?><a href="<?php echo $_user_val['U_EDIT']; ?>"><?php echo ((isset($this->_rootref['L_EDIT_WARNING'])) ? $this->_rootref['L_EDIT_WARNING'] : ((isset($user->lang['EDIT_WARNING'])) ? $user->lang['EDIT_WARNING'] : '{ EDIT_WARNING }')); ?></a><?php } else { echo ((isset($this->_rootref['L_WARNING_EXPIRED'])) ? $this->_rootref['L_WARNING_EXPIRED'] : ((isset($user->lang['WARNING_EXPIRED'])) ? $user->lang['WARNING_EXPIRED'] : '{ WARNING_EXPIRED }')); } ?></td>
				</tr>
			<?php }} ?>

			</tbody>
		</table>
	
	<span class="corners-bottom"><span></span></span></div>
</div>
</div>
<?php } ?>


</form>

<?php $this->_tpl_include('jumpbox.html'); $this->_tpl_include('overall_footer.html'); ?>