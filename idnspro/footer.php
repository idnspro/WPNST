<?php
/**
 * The template for displaying the header
 *
 * Displays all of the footer element and everything after closing of the "site-content" div.
 *
 * @link https://wptheme.idns-technologies.com/idnspro/
 *
 * @package idnspro
 * @subpackage Wptheme_idnspro
 * @since Wptheme idnspro 1.0
 */

?>
	<!-- Footer -->
	<footer id="footer" class="site-footer" role="contentinfo">
		<div class="inner">
			<section>
				<h2>Get in touch</h2>
				<form method="post" action="#">
					<div class="field half first">
						<input type="text" name="name" id="name" placeholder="Name" />
					</div>
					<div class="field half">
						<input type="email" name="email" id="email" placeholder="Email" />
					</div>
					<div class="field">
						<textarea name="message" id="message" placeholder="Message"></textarea>
					</div>
					<ul class="actions">
						<li><input type="submit" value="Send" class="special" /></li>
					</ul>
				</form>
			</section>
			<section>
				<h2>Follow</h2>
				<ul class="icons">
					<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
					<li><a href="#" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>
					<li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
					<li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
					<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
				</ul>
			</section>
			<ul class="copyright">
				<li>&copy; <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">IDNS Technologies</a>. All rights reserved</li><li>Design by: <a href="<?php echo esc_url( __( 'https://wptheme.idns-technologies.com/idnspro/', 'idnspro' ) ); ?>"><?php printf( __( '%s', 'idnspro' ), 'Wptheme idnspro' ); ?></a></li>
			</ul>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
