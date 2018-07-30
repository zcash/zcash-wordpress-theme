<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">

		<div class="footer-menu">
			<div class="menu-items grid-flex-container">
				<div class="grid-flex-cell">
					<ul>
						<li class="menu-title">
About						</li>
						<li><a href="https://z.cash/team.html">Team</a></li>
						<!-- <li>Careers</li> -->
						<li><a href="/">Blog</a></li>
						<li><a href="https://z.cash/buzz.html">Buzz</a></li>
						<li><a href="https://z.cash/jobs/">Jobs</a></li>
						<li><a href="https://z.cash/contact.html">Contact Us</a></li>
					</ul>
				</div>

				<div class="grid-flex-cell">
					<ul>
						<li class="menu-title">
Technology						</li>
						<li><a href="https://z.cash/download.html">Download Zcash</a></li>
						<li><a href="https://zcash.readthedocs.io/en/latest/rtd_pages/rtd_docs/user_guide.html">User Guide</a></li>
						<li><a href="https://github.com/zcash/zcash">GitHub</a></li>
						<li><a href="https://github.com/zcash/zcash/issues">Report a bug</a></li>
						<li><a href="https://z.cash/technology/paramgen.html">Paramgen</a></li>
						<!-- <li><a href="https://github.com/zcash/zcash/wiki/specification">Developer Wiki</a></li> -->
						<li><a href="https://github.com/zcash/zips/blob/master/protocol/protocol.pdf">Protocol Specification</a></li>
						<li><a href="https://z.cash/support/zig.html">Integration Guide</a></li>
					</ul>
				</div>

				<div class="grid-flex-cell">
					<ul>
						<li class="menu-title">
Resources						</li>
						<li><a href="https://z.cash/support/faq.html">FAQ</a></li>
						<li><a href="https://z.cash/support/security.html">Security</a></li>
						<li><a href="https://z.cash/support/pubkeys.html">Public Keys</a></li>
						<li><a href="https://z.cash/press.html">Media Kit</a></li>
						<li><a href="https://z.cash/copyright-policy.html">Copyright Policy</a></li>
						<li><a href="https://z.cash/trademark-policy.html">Trademark Policy</a></li>
					</ul>
				</div>

				<div class="grid-flex-cell">
					<ul>
						<li class="menu-title">
Community						</li>
						<li>
							<a href="https://forum.z.cash/"><i class="fa fa-smile-o"></i>&nbsp;&nbsp;Forum</a>
						</li>
						<li>
							<a href="https://chat.zcashcommunity.com/"><i class="fa fa-comments"></i>&nbsp;&nbsp;Community Dev Chat</a>
						</li>
						<li>
							<a href="https://twitter.com/zcashco"><i class="fa fa-twitter"></i>&nbsp;&nbsp;Twitter </a>
						</li>
						<li>
							<a href="https://chat.zcashcommunity.com/">IRC: &nbsp;&nbsp;irc.oftc.net #zcash</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="footer-bottom-text">
			<div class="hidden-services">
				<div class="i2p">
					<a href="https://geti2p.net"><img style="height: 32px;" src="<?php echo get_stylesheet_directory_uri(); ?>/images/i2p-logo.png" height="32"></a><span class="text">&nbsp;   zcash.i2p</span>
				</div>
				<div class="tor">
					<a href="https://www.torproject.org/"><img style="height: 32px;" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tor.png" height="32"></a><span class="text">&nbsp;   zcashph5mxqjjby2.onion</span>
				</div>
			</div>
			<p><span class="copy">© 2017 Zerocoin Electric Coin Company</span></p>
		</div>

			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
