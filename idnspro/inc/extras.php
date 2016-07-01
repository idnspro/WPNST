<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package idnspro
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
*/
function idnspro_content_1( $content ) {
	if( is_front_page() ) {
		$html  = '<section class="tiles">';
		$html .= '<article class="style1">
					<span class="image">
						<img src="'.get_stylesheet_directory_uri().'/assets/img/pic01.jpg" alt="" />
					</span>
					<a href="generic.html">
						<h2>Product research</h2>
						<div class="content">
							<p>Extensive brainstorming sessions on different aspects of the product / project containing its features, utilities, user interactivity and business flow.</p>
						</div>
					</a>
				</article>';
		$html .= '<article class="style2">
					<span class="image">
						<img src="'.get_stylesheet_directory_uri().'/assets/img/pic02.jpg" alt="" />
					</span>
					<a href="generic.html">
						<h2>Market research</h2>
						<div class="content">
							<p>The key aspect of any product success is market research, we do feasibility analysis, calculate the business adaptability and suggest various points to increase its success ratio.</p>
						</div>
					</a>
				</article>';
		$html .= '<article class="style3">
					<span class="image">
						<img src="'.get_stylesheet_directory_uri().'/assets/img/pic03.jpg" alt="" />
					</span>
					<a href="generic.html">
						<h2>Product development</h2>
						<div class="content">
							<p>Team of highly skilled professionals are specialized in development of large to mid-level and startup projects. We use latest tools &amp; technologies, best suited for the product development.</p>
						</div>
					</a>
				</article>';
		$html .= '<article class="style4">
					<span class="image">
						<img src="'.get_stylesheet_directory_uri().'/assets/img/pic04.jpg" alt="" />
					</span>
					<a href="generic.html">
						<h2>Digital Branding / Brand Management</h2>
						<div class="content">
							<p>Our motto is client\'s business success. And any success depend on their brand building. We provide all essential services of digital branding materials from logo, banner, emailer to content writing. </p>
						</div>
					</a>
				</article>';
		$html .= '<article class="style5">
					<span class="image">
						<img src="'.get_stylesheet_directory_uri().'/assets/img/pic05.jpg" alt="" />
					</span>
					<a href="generic.html">
						<h2>Online Promotion</h2>
						<div class="content">
							<p>We know better way to promote any Product Launch on top search engine. We provide Search Engine Optimization, Social Media Marketing, Brand Promotion and Online Marketing & Sales Services.</p>
						</div>
					</a>
				</article>';
		$html .= '<article class="style6">
					<span class="image">
						<img src="'.get_stylesheet_directory_uri().'/assets/img/pic06.jpg" alt="" />
					</span>
					<a href="generic.html">
						<h2>Product Support</h2>
						<div class="content">
							<p>Managing a product / project after development may cost you a team salary, but we provide complete support on very nominal AMC (Annual Maintenance Contract) cost. This save thousands of dollars for our developed projects</p>
						</div>
					</a>
				</article>';
		/*
		$html .= '<article class="style2">
					<span class="image">
						<img src="'.get_stylesheet_directory_uri().'/assets/img/pic07.jpg" alt="" />
					</span>
					<a href="generic.html">
						<h2>Ipsum</h2>
						<div class="content">
							<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
						</div>
					</a>
				</article>';
		$html .= '<article class="style3">
					<span class="image">
						<img src="'.get_stylesheet_directory_uri().'/assets/img/pic08.jpg" alt="" />
					</span>
					<a href="generic.html">
						<h2>Dolor</h2>
						<div class="content">
							<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
						</div>
					</a>
				</article>';
		$html .= '<article class="style1">
					<span class="image">
						<img src="'.get_stylesheet_directory_uri().'/assets/img/pic09.jpg" alt="" />
					</span>
					<a href="generic.html">
						<h2>Nullam</h2>
						<div class="content">
							<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
						</div>
					</a>
				</article>';
		$html .= '<article class="style5">
					<span class="image">
						<img src="'.get_stylesheet_directory_uri().'/assets/img/pic10.jpg" alt="" />
					</span>
					<a href="generic.html">
						<h2>Ultricies</h2>
						<div class="content">
							<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
						</div>
					</a>
				</article>';
		$html .= '<article class="style6">
					<span class="image">
						<img src="'.get_stylesheet_directory_uri().'/assets/img/pic11.jpg" alt="" />
					</span>
					<a href="generic.html">
						<h2>Dictum</h2>
						<div class="content">
							<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
						</div>
					</a>
				</article>';
		$html .= '<article class="style4">
					<span class="image">
						<img src="'.get_stylesheet_directory_uri().'/assets/img/pic12.jpg" alt="" />
					</span>
					<a href="generic.html">
						<h2>Pretium</h2>
						<div class="content">
							<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
						</div>
					</a>
				</article>';
		*/
		$html .= '</section>';
		$content .= '<div class="clear"></div>';
		$content .= $html;
	}
	return $content;
}

add_filter( 'the_content', 'idnspro_content_1' );
