<?php
$site_info = hoot_get_option( 'site_info' );
if ( !empty( $site_info ) ) :
?>
	<div id="post-footer" class="grid-stretch contrast-typo">
		<div class="grid">
			<div class="grid-row">
				<div class="grid-span-12">
					<p class="credit small">
						<?php
						if ( $site_info == '<!--default-->' ) {
							printf(
								/* Translators: 1 is Theme name/link, 2 is WordPress name/link, 3 is site name/link */
								__( 'Designed using %1$s. Powered by %2$s.', 'dispatch' ), 
								hoot_get_wp_theme_link(), hoot_get_wp_link(), hoot_get_theme_link()
							);
						} else {
							echo $site_info;
						} ?>
					</p><!-- .credit -->
				</div>
			</div>
		</div>
	</div>
<?php
endif;
?>