<?php

/**

 * The template for displaying the footer

 *

 * Contains footer content and the closing of the #main and #page div elements.

 *

 * @package WordPress

 * @subpackage Twenty_Thirteen

 * @since Twenty Thirteen 1.0

 */

?>



		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'main' ); ?>	

<div class="widget-area">				
<div class="copy-right">
					<div class="footer-left">Chemical Translator  &copy;right 2015 All rights reserved.   German pages translated by Jessica Lucio <a href="http://doubledottranslations.com" target="_blank">http://doubledottranslations.com</a></div>
					<div class="footer-right">
<ul>
                        	
                            <li><a href="https://www.linkedin.com/in/sarahsilvatranslator" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/s1.png" alt=""/></a></li>
                            <li><a href="https://plus.google.com/u/0/+SarahSilvaChemicalTranslator/posts/p/pub" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/s2.png" alt=""/></a></li>
                            <li><a href="https://twitter.com/ChemicalTrans" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/s3.png" alt=""/></a></li>
                            <li><a href="https://www.xing.com/profile/Sarah_Silva?sc_o=mxb_p" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/s4.png" alt=""/></a></li>
                        </ul>
</div>
				</div>
			
</div>
		</footer><!-- #colophon -->

	</div><!-- #page -->



	<?php wp_footer(); ?>

</body>

</html>