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

			<div id="contact-form">

				<h3 id="receive-updates">Receive Updates</h3>

				<!-- Begin MailChimp Signup Form -->
				<link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
				<style type="text/css">
				#mc_embed_signup{
					clear: left;
					font:14px Helvetica,Arial,sans-serif;
					/*width:500px;*/
					/*margin: 0 auto;
					padding: 10px;*/
				}
				#mc-embedded-subscribe-form {
					padding: 0 !important;
				}
				#mce-EMAIL {
					width: 100% !important;
				}
				#mc-embedded-subscribe {
					width: 100% !important;
				}
				/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
				We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
				</style>
				<div id="mc_embed_signup">
					<form action="//cash.us12.list-manage.com/subscribe/post?u=343b1cde8705eb7081d468bdd&amp;id=d4d73805a5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
						<div id="mc_embed_signup_scroll">
							<input value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required="" type="email">
							<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							<div style="position: absolute; left: -5000px;" aria-hidden="true"><input name="b_343b1cde8705eb7081d468bdd_d4d73805a5" tabindex="-1" value="" type="text"></div>
							<div class="clear"><input value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button" type="submit"></div>
						</div>
					</form>
				</div>

				<!--End mc_embed_signup-->
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
