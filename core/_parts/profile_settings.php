<?php do_action( 'bpf_before_member_settings_template' ); ?>

	<form action="<?php echo bp_displayed_user_domain() . bp_get_settings_slug() . '/' . BPF_SLUG; ?>" method="post"
	      class="standard-form" id="settings-form">

		<label for="<?php echo BPF_SLUG; ?>-member-url"><?php _e( 'External Feed URL', BPF_I18N ); ?></label>

		<input type="text" name="bpf_feed_url" id="<?php echo BPF_SLUG; ?>-member-url"
		       placeholder="<?php bpf_the_rss_placeholder(); ?>" value="<?php echo bpf_get_member_feed_url(); ?>"
		       class="settings-input">

		<p class="description">
			<?php _e( 'Fill in the address to your personal website in the field above. If your website has a feed (most websites create it automatically) your published posts will automatically be imported to your profile stream for your friends to see.', BPF_I18N ); ?>
		</p>

		<?php do_action( 'bpf_member_settings_template_before_submit' ); ?>

		<div class="submit">
			<input type="submit" name="submit" value="<?php esc_attr_e( 'Save', BPF_I18N ); ?>" id="submit"
			       class="auto"/>
		</div>

		<?php do_action( 'bpf_member_settings_template_after_submit' ); ?>

		<?php wp_nonce_field( 'bp_settings_bpf' ); ?>

	</form>

<?php do_action( 'bpf_after_member_settings_template' ); ?>