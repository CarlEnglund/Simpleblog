<h1>Create account<h1>

	<fieldset>
		<legend>Personal info</legend>

		<?php

			echo form_open('login/create_user');
			echo form_input('first_name', set_value('first_name', 'First Name'));
			echo form_input('last_name', set_value('last_name', 'Last Name'));
			
		?>
	</fieldset>

	<fieldset>

		<legend>Login Info </legend>

	<?php

		echo form_input('username', set_value('user_name', 'Username'));
		echo form_input('password', set_value('password', 'Password'));
		echo form_input('password2', set_value('password2', 'Password Confirm'));

		echo form_submit('submit', 'Create Account');
	?>

	<?php echo validation_errors('<p class="error">');