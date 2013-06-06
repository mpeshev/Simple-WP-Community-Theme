
		</div> <!-- #container -->

		<?php do_action( 'bp_after_container' ) ?>
		<?php do_action( 'bp_before_footer' ) ?>

		<div id="footer">
			<p>Kindly supported by <a href="http://devwp.eu" target="_blank" title="Mario Peshev" alt="Mario Peshev">DevWP</a>
			<p><?php printf( __( '%s is proudly powered by <a href="http://wordpress.org">WordPress</a> and <a href="http://buddypress.org">BuddyPress</a>', 'buddypress' ), bloginfo('name') ); ?></p>

			<?php do_action( 'bp_footer' ) ?>
		</div><!-- #footer -->

		<?php do_action( 'bp_after_footer' ) ?>

</div>
</div>
		<?php wp_footer(); ?>
	</body>
</html>