<?php 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly 
?>  

<div id="optincontent" style="display:none">
<div class="optindescription">
	<div class="optinimage">
	<img src="<?php echo esc_url(plugin_dir_url( __FILE__ ) . 'images/lab.png'); ?>" border="0" />
	</div>
	
	<h2>Sign up for exclusive content</h2>
	Enter your email address below to receive exclusive scripts not found on the site. Also, get our monthly newsletter packed with tricks and bonus goodies.
</div>


<div class="optinform">
	<form method="post" action="">
	<input type="email" name="youremail" pattern="\S+@\S+\.\S+" placeholder="Enter Email Address" required /> <input type="submit" value="Subscribe!" />
	</form>
</div>
</div>
<?php 