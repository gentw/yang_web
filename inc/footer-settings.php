<?php

function ffl_options_menu_link() {
	
	add_menu_page('Footer Content', 'Footer Content', 'moderate_comments', 'ffl-options', 'ffl_options_content', 'dashicons-welcome-write-blog', 25);
}

function ffl_options_content() {
		// Init Options Global
		global $ffl_options;
		ob_start(); ?>
			<div class="wrap">
				<h2><?php _e('Footer Settings', 'ffl_domain'); ?></h2>
				<p>
					<?php _e('Settings for the Facebook Footer', 'ffl_domain'); ?>
				</p>
				<form method="post" action="options.php">
					<?php settings_fields('ffl_settings_group'); ?>

					<table class="form-table">
						<tbody>
							<tr>
								<h1>Socials</h1>
								<hr />
							</tr>
							<tr>
								<th scope="row">
									<label for="ffl_settings[facebook_url]">
										<?php _e('Facebook Profile URL', 'ffl_domain'); ?>
									</label>
								</th>
								<td>
									<input name="ffl_settings[facebook_url]" id="ffl_settings[facebook_url]" type="text" value="<?php echo $ffl_options['facebook_url']; ?>" class="regular-text">
									<p class="description">
										<?php _e('Enter your Facebook profile URL', 'ffl_domain'); ?>
									</p>
								</td>
							</tr>

							<tr>
								<th scope="row">
									<label for="ffl_settings[instagram_url]">
										<?php _e('Instagram Profile URL', 'ffl_domain'); ?>
									</label>
								</th>
								<td>
									<input name="ffl_settings[instagram_url]" id="ffl_settings[instagram_url]" type="text" value="<?php echo $ffl_options['instagram_url']; ?>" class="regular-text">
									<p class="description">
										<?php _e('Enter your Instagram profile URL', 'ffl_domain'); ?>
									</p>
								</td>
							</tr>

							<tr>
								<th scope="row">
									<label for="ffl_settings[twitter_url]">
										<?php _e('Twitter Profile URL', 'ffl_domain'); ?>
									</label>
								</th>
								<td>
									<input name="ffl_settings[twitter_url]" id="ffl_settings[twitter_url]" type="text" value="<?php echo $ffl_options['twitter_url']; ?>" class="regular-text">
									<p class="description">
										<?php _e('Enter your Twitter profile URL', 'ffl_domain'); ?>
									</p>
								</td>
							</tr>

							<tr>
								<th scope="row">
									<label for="ffl_settings[linkedin_url]">
										<?php _e('LinkedIn Profile URL', 'ffl_domain'); ?>
									</label>
								</th>
								<td>
									<input name="ffl_settings[linkedin_url]" id="ffl_settings[linkedin_url]" type="text" value="<?php echo $ffl_options['linkedin_url']; ?>" class="regular-text">
									<p class="description">
										<?php _e('Enter your LinkedIn profile URL', 'ffl_domain'); ?>
									</p>
								</td>
							</tr>
							

						</tbody>


					</table>
					<br><br>
					<table class="form-table">
						<tbody>
							<tr>
								<h1>Contacts</h1>
								<hr />
							</tr>
							<tr>
								<th scope="row">
									<label for="ffl_settings[phone]">
										<?php _e('Phone', 'ffl_domain'); ?>
									</label>
								</th>
								<td>
									<input name="ffl_settings[phone]" id="ffl_settings[phone]" type="text" value="<?php echo $ffl_options['phone']; ?>" class="regular-text">
									<p class="description">
										<?php _e('Enter your phone number', 'ffl_domain'); ?>
									</p>
								</td>
							</tr>

							<tr>
								<th scope="row">
									<label for="ffl_settings[phone]">
										<?php _e('Fax Number', 'ffl_domain'); ?>
									</label>
								</th>
								<td>
									<input name="ffl_settings[fax]" id="ffl_settings[fax]" type="text" value="<?php echo $ffl_options['fax']; ?>" class="regular-text">
									<p class="description">
										<?php _e('Enter your fax number', 'ffl_domain'); ?>
									</p>
								</td>
							</tr>

							<tr>
								<th scope="row">
									<label for="ffl_settings[email]">
										<?php _e('Email', 'ffl_domain'); ?>
									</label>
								</th>
								<td>
									<input name="ffl_settings[email]" id="ffl_settings[email]" type="text" value="<?php echo $ffl_options['email']; ?>" class="regular-text">
									<p class="description">
										<?php _e('Enter your e-mail', 'ffl_domain'); ?>
									</p>
								</td>
							</tr>

							<tr>
								<th scope="row">
									<label for="ffl_settings[location]">
										<?php _e('Location', 'ffl_domain'); ?>
									</label>
								</th>
								<td>
									<input name="ffl_settings[location]" id="ffl_settings[location]" type="text" value="<?php echo $ffl_options['location']; ?>" class="regular-text">
									<p class="description">
										<?php _e('Enter your Location', 'ffl_domain'); ?>
									</p>
								</td>
							</tr>
							
						</tbody>


					</table>
					<br><br>
					<table class="form-table">
						<tbody>
							<tr>
								<h1>More content</h1>
								<hr />
							</tr>
							<tr>
								<th scope="row">
									<label for="ffl_settings[about_text]">
										<?php _e('About short-text', 'ffl_domain'); ?>
									</label>
								</th>
								<td>
									<textarea rows="5" name="ffl_settings[about_text]" id="ffl_settings[about_text]" class="regular-text"><?php echo $ffl_options['about_text']; ?></textarea>
								</td>
							</tr>
							

						</tbody>


					</table>
					<p class="submit">
						<input type="submit" name="submit" id="submit" class="buton button-primary" value="<?php _e('Save Changes', 'ffl_domain');?>">
					</p>
				</form>
			</div>
		<?php
		echo ob_get_clean();
	}

add_action('admin_menu', 'ffl_options_menu_link');

// Register Settings
function ffl_register_settings() {
	register_setting('ffl_settings_group', 'ffl_settings');
}
add_action('admin_init', 'ffl_register_settings');

add_filter( 'option_page_capability_ffl_settings_group', 'my_settings_permissions', 10, 1 );
function my_settings_permissions( $capability ) {
    return 'edit_pages';
}
