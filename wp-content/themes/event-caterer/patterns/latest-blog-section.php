<?php
/**
 * Title: Latest Blog Section
 * Slug: event-caterer/latest-blog-section
 * Categories: template
 */
?>
<!-- wp:group {"className":"blog-sec","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"5em","bottom":"5em","left":"0","right":"0"}}},"backgroundColor":"secondary","layout":{"type":"constrained","contentSize":"80%","wideSize":"100%"}} -->
<div class="wp-block-group blog-sec has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:5em;padding-right:0;padding-bottom:5em;padding-left:0"><!-- wp:group {"className":"blog-small-title-group","layout":{"type":"constrained"}} -->
<div class="wp-block-group blog-small-title-group"><!-- wp:paragraph {"align":"center","className":"blog-small-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","fontSize":"17px","fontStyle":"Black","fontWeight":"600","letterSpacing":"3px"}},"textColor":"primary","fontFamily":"Work Sans"} -->
<p class="has-text-align-center blog-small-title has-primary-color has-text-color has-link-color has-work-sans-font-family" style="font-size:17px;font-style:Black;font-weight:600;letter-spacing:3px;text-transform:uppercase"><?php esc_html_e('Our Blog','event-caterer'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","className":"blog-heading","style":{"color":{"text":"#1f242e"},"elements":{"link":{"color":{"text":"#1f242e"}}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"20px","top":"10px"}},"typography":{"textTransform":"capitalize","fontStyle":"Light","fontWeight":"700","fontSize":"35px"}},"fontFamily":"Lexend"} -->
<h2 class="wp-block-heading has-text-align-center blog-heading has-text-color has-link-color has-lexend-font-family" style="color:#1f242e;margin-top:0;margin-bottom:0;padding-top:10px;padding-bottom:20px;font-size:35px;font-style:Light;font-weight:700;text-transform:capitalize"><?php esc_html_e('Our Latest Blog &amp; News','event-caterer'); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"20px","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:20px;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":16,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"owl-carousel","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"post-box-edit","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"20px"}},"layout":{"inherit":false}} -->
<div class="wp-block-group post-box-edit" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"width":"100%","height":"500px","style":{"border":{"radius":"20px"}}} /-->

<!-- wp:group {"className":"blog-post-content","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"10px","bottom":"10px","left":"20px","right":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group blog-post-content" style="margin-top:0;margin-bottom:0;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><!-- wp:post-date {"className":"edit-meta-date","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"15px","fontStyle":"Black","fontWeight":"400","textTransform":"capitalize"}},"textColor":"background","fontFamily":"Work Sans"} /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"textTransform":"capitalize","fontSize":"20px"},"spacing":{"padding":{"top":"10px","bottom":"10px"}}},"textColor":"background","fontFamily":"Lexend"} /-->

<!-- wp:post-excerpt {"excerptLength":15,"className":"post-content","style":{"elements":{"link":{"color":{"text":"#5c6574"}}},"color":{"text":"#5c6574"},"typography":{"fontSize":"14px","fontStyle":"Thin","fontWeight":"400"}},"fontFamily":"Work Sans"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->