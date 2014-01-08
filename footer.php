<div id="footer">
	<div class="footer1 f_bq">
		Copyright &copy; 2013-2016 All Rights Reserved
		版权所有 &copy;<?php bloginfo('name'); ?>

		<?php if (get_option('mytheme_beian')!=""): ?>
		<?php echo get_option('mytheme_beian'); ?>
		<?php else : ?>
		京ICP备（123456）
		<?php endif; ?>
		<br />

		<?php if (get_option('mytheme_lianx1')!=""): ?>
		联系电话：
		<?php echo get_option('mytheme_lianx1'); ?>
		<?php else : ?>
		联系电话：0731-1234567
		<?php endif; ?>

		<?php if (get_option('mytheme_lianx2')!=""): ?>
		&nbsp;&nbsp;联系人：
		<?php echo get_option('mytheme_lianx2'); ?>
		<?php else : ?>
		联系人：XXX
		<?php endif; ?>

	</div>
	<div class="footer2">
		<?php if (get_option('mytheme_logo2')!=""): ?>
		<img src="<?php echo get_option('mytheme_logo2'); ?>" />
		<?php else : ?>
		<img src="<?php bloginfo('template_url'); ?>
		/images/logo2.png" />
		<?php endif; ?>
	</div>
	<div style=" text-align:center;">
		<?php echo get_option('mytheme_analytics'); ?>
	</div>
</div>

<?php wp_footer(); ?></body>

</html>