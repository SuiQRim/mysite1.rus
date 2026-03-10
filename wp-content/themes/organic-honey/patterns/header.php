<?php
/**
 * Title: Header
 * Slug: organic-honey/header
 * Categories: header
 * Block Types: core/template-part/header
 */
?>

<!-- wp:group {"className":"header-box-upper","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"10px","bottom":"0"},"blockGap":"var:preset|spacing|30"},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained","contentSize":"80%","justifyContent":"center"}} -->
<div class="wp-block-group header-box-upper" style="border-style:none;border-width:0px;margin-top:10px;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"general-header-middle","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"10px","bottom":"10px","left":"20px","right":"30px"}},"border":{"radius":"10px","width":"1px"}},"backgroundColor":"base","borderColor":"primary","layout":{"type":"constrained","contentSize":"100%","justifyContent":"center"}} -->
<div class="wp-block-group general-header-middle has-border-color has-primary-border-color has-base-background-color has-background" style="border-width:1px;border-radius:10px;margin-top:0;margin-bottom:0;padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:20px"><!-- wp:columns {"verticalAlignment":"center","className":"header-box","style":{"border":{"radius":"0px","width":"0px","style":"none"},"spacing":{"padding":{"bottom":"0px","top":"0px","left":"0px","right":"0px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center header-box" style="border-style:none;border-width:0px;border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","width":"20%","className":"header-logo"} -->
<div class="wp-block-column is-vertically-aligned-center header-logo" style="flex-basis:20%"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"30px","textTransform":"capitalize"}},"textColor":"contrast","fontFamily":"sora"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%","className":"header-inner-menu"} -->
<div class="wp-block-column is-vertically-aligned-center header-inner-menu" style="flex-basis:70%"><!-- wp:navigation {"textColor":"contrast","overlayTextColor":"contrast","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"className":"is-head-menu","style":{"typography":{"textTransform":"capitalize","fontSize":"15px","fontStyle":"normal","fontWeight":"600"},"spacing":{"blockGap":"var:preset|spacing|30"}},"fontFamily":"sora","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Shop","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Pages","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"10%","className":"header-inner-meta"} -->
<div class="wp-block-column is-vertically-aligned-center header-inner-meta" style="flex-basis:10%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"backgroundColor":"base","textColor":"contrast"} /-->

<!-- wp:group {"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group"><!-- wp:group {"className":"toggle-btn-main","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group toggle-btn-main has-primary-color has-text-color has-link-color"><!-- wp:html -->
<a href="#"><i class="fas fa-bars"></i></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sidebar is-hidden","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group sidebar is-hidden"><!-- wp:template-part {"slug":"sidebar","theme":"organic-honey","area":"uncategorized"} /-->

<!-- wp:image {"lightbox":{"enabled":false},"id":12,"scale":"cover","sizeSlug":"full","linkDestination":"custom","align":"right","className":"cross-btn-main"} -->
<figure class="wp-block-image alignright size-full cross-btn-main"><a href="#"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/cross.png" alt="" class="wp-image-12" style="object-fit:cover"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->