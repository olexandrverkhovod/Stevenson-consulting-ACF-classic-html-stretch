<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stevenson-consulting
 */

?>
	<!--variables-->
	<?php 
    $meta_values = get_fields();

	$logo_image    		= ( isset( $meta_values['logo']['logo_image'] ) ) ? $meta_values['logo']['logo_image'] : null;
	$logo_title    		= ( isset( $meta_values['logo']['logo_title'] ) ) ? $meta_values['logo']['logo_title'] : null;
	$socials	   		= ( isset( $meta_values['socials'] ) ) ? $meta_values['socials'] : null;
	$socials	   		= ( isset( $meta_values['socials'] ) ) ? $meta_values['socials'] : null;
	$contact_phone 		= ( isset( $meta_values['contact_phone'] ) ) ? $meta_values['contact_phone'] : null;
	$contact_fax   		= ( isset( $meta_values['contact_fax'] ) ) ? $meta_values['contact_fax'] : null;
	$contact_mail  		= ( isset( $meta_values['contact_mail'] ) ) ? $meta_values['contact_mail'] : null;
	$join_block    		= ( isset( $meta_values['join_block'] ) ) ? $meta_values['join_block'] : null;
	$join_button_link   = ( isset( $meta_values['join_button']['link'] ) ) ? $meta_values['join_button']['link'] : null;
	$join_button_text   = ( isset( $meta_values['join_button']['text'] ) ) ? $meta_values['join_button']['text'] : null;
	$copyright_year    	= ( isset( $meta_values['copyright_year'] ) ) ? $meta_values['copyright_year'] : null;
	$copyright_link  	= ( isset( $meta_values['copyright_link']['link'] ) ) ? $meta_values['copyright_link']['link'] : null;
	$copyright_text  	= ( isset( $meta_values['copyright_link']['text'] ) ) ? $meta_values['copyright_link']['text'] : null;

    ?>
    <!--variables end-->
	<!--footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-inner">
				<div class="row">
					<div class="col-sm-5 col-md-5">
						<div class="contact-block">
							<p><a href="tel:<?php echo $contact_phone; ?>">Phone: <?php echo $contact_phone; ?></a></p>
							<p><a href="tel:<?php echo $contact_fax; ?>">Fax: <?php echo $contact_fax; ?></a></p>
							<p><a href="mailto:info@scconsulting.com"><?php echo $contact_mail; ?></a></p>
							<ul class="link-list">
							<?php
							if ( !is_null( $socials ) ) {
								foreach( $socials as $value ) {
								$link = $value['social_link'];
								$icon = $value['social_icon'];

								echo '<li class="link-list-item"><a href="' .$link. '" class="list-item-link"><i class="fab fa-' .$icon. '"></i></a></li>';
								}
							}
							?>
							</ul>
						</div>
					</div>
					<div class="col-sm-2 col-md-2">
						<div class="logo-block">
							<div class="logo-col"><a href="<?php echo home_url() ?>">
								<img src="<?php echo $logo_image?>" alt="logo" class="logo-img">
								<img src="<?php echo $logo_title?>" alt="logo title" class="logo-img-title">
							</div>
						</div>
					</div>
					<div class="col-sm-5 col-md-5">
						<div class="join-block">
							<?php
							if ( !is_null( $join_block ) ) {
								foreach( $join_block as $value ) {
								$text = $value['text'];

								echo '<p>' .$text. '</p>';
								}
							}
							?>
							<div class="join-btn"><a href="<?php echo $join_button_link; ?>" class="btn"><?php echo $join_button_text; ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright-block">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xs-8 col-md-12">
						<div class="copyright-content">
							<p>© <?php echo $copyright_year ?> Copyright Steveson Consulting, Inc.<span class="hidden-sm">|</span> Site by <a href="<?php echo $copyright_link ?>" target="_blank"><?php echo $copyright_text ?></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
</body>

</html>