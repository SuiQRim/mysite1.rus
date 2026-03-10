<?php
/**
 * Title: Blog
 * Slug: organic-honey/blog
 * Categories: blog
 * Block Types: core/template-part/blog
 */
?>

<!-- wp:group {"className":"our-blog","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"50px","bottom":"50px"}}}} -->
<div class="wp-block-group our-blog" style="margin-top:0;margin-bottom:0;padding-top:50px;padding-right:0;padding-bottom:50px;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"blog-heading","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group blog-heading" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"center","level":6,"className":"short-heading-banner","style":{"elements":{"link":{"color":{"text":"#eb662b"}}},"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"},"spacing":{"margin":{"top":"0","bottom":"0px","left":"0","right":"0"}},"border":{"radius":"4px"}},"textColor":"contrast","fontFamily":"sora"} -->
<h6 class="wp-block-heading has-text-align-center short-heading-banner has-contrast-color has-text-color has-link-color has-sora-font-family" style="border-radius:4px;margin-top:0;margin-right:0;margin-bottom:0px;margin-left:0;font-size:25px;font-style:normal;font-weight:700;text-transform:capitalize"><?php esc_html_e('Our Blogs','organic-honey'); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"managerclass","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"textColor":"contrast","fontFamily":"inter"} -->
<p class="has-text-align-center managerclass has-contrast-color has-text-color has-link-color has-inter-font-family" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;font-size:15px;font-style:normal;font-weight:400"><?php esc_html_e('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','organic-honey'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":12,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"post-column-div","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
<!-- wp:group {"className":"service-box-single","style":{"border":{"radius":"20px","color":"#9c9c9c","width":"1px"}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group service-box-single has-border-color has-base-background-color has-background" style="border-color:#9c9c9c;border-width:1px;border-radius:20px"><!-- wp:group {"className":"blog-image","style":{"dimensions":{"minHeight":"280px"},"border":{"radius":"20px"}},"backgroundColor":"contrast","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group blog-image has-contrast-background-color has-background" style="border-radius:20px;min-height:280px"><!-- wp:post-featured-image {"isLink":true,"height":"280px","overlayColor":"contrast","align":"wide","style":{"border":{"radius":"20px"}}} /-->

<!-- wp:group {"className":"post-date","style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"25px","right":"25px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group post-date has-primary-background-color has-background" style="border-radius:10px;margin-top:0;margin-bottom:0;padding-top:6px;padding-right:25px;padding-bottom:6px;padding-left:25px"><!-- wp:post-date {"format":"M j, Y","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400"}},"textColor":"base","fontFamily":"inter"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"20px","bottom":"20px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div id="service-content-single" class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"sora"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"10px","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:10px;margin-bottom:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-author {"showBio":false,"style":{"border":{"radius":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400"}},"textColor":"contrast","fontFamily":"sora"} /-->

<!-- wp:comments -->
<div class="wp-block-comments"><!-- wp:comments-title {"showPostTitle":false,"style":{"color":{"text":"#707070"},"elements":{"link":{"color":{"text":"#707070"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"fontFamily":"inter"} /--></div>
<!-- /wp:comments --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"Know More","style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400"}},"fontFamily":"inter"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->