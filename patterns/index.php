<?php
/**
 * Title: index
 * Slug: bureaucrat/index
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:site-title /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"75%"} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:75%"><!-- wp:navigation {"ref":7,"layout":{"type":"flex","justifyContent":"right"}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading" id="this-is-an-h1">This is an H1</h1>
<!-- /wp:heading -->

<!-- wp:heading -->
<h2 class="wp-block-heading" id="this-is-a-test">This is a test!</h2>
<!-- /wp:heading -->

<!-- wp:image {"scale":"cover","sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/300" alt="" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":52,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/image.jpeg" alt="" class="wp-image-52" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>This is column 1</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>this is another item</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"100%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:100%"><!-- wp:paragraph -->
<p>This is column 2</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>this is another item</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-default"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-default"/>
<!-- /wp:separator -->

<!-- wp:details -->
<details class="wp-block-details"><summary>This is a test of someting</summary><!-- wp:heading -->
<h2 class="wp-block-heading" id="this-is-hidden">This is hidden!</h2>
<!-- /wp:heading --></details>
<!-- /wp:details --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"100%"} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:100%"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/300","hasParallax":true,"dimRatio":0,"minHeight":100,"minHeightUnit":"%","layout":{"type":"default"}} -->
<div class="wp-block-cover has-parallax" style="min-height:100%"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/300)"></div><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"style":{"border":{"radius":"0px"}},"className":"is-style-fill"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link wp-element-button" style="border-radius:0px">Button 1</a></div>
<!-- /wp:button -->

<!-- wp:button {"width":100,"style":{"border":{"radius":"0px"}},"className":"is-style-fill"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link wp-element-button" style="border-radius:0px">Button 2</a></div>
<!-- /wp:button -->

<!-- wp:button {"width":100,"style":{"border":{"radius":"0px"}},"className":"is-style-fill"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link wp-element-button" style="border-radius:0px">Button 3</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading" id="this-is-an-h1">This is an H1</h1>
<!-- /wp:heading -->

<!-- wp:heading -->
<h2 class="wp-block-heading" id="this-is-an-h2">This is an h2</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading" id="this-is-an-h3">This is an h3</h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading" id="this-is-an-h4">This is an h4</h4>
<!-- /wp:heading -->

<!-- wp:heading {"level":5} -->
<h5 class="wp-block-heading" id="this-is-an-h5">this is an h5</h5>
<!-- /wp:heading -->

<!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading" id="this-is-an-h6">this is an h6</h6>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph -->
<p>In the midst of winter, I found there was, within me, an invincible summer. And that makes me happy. For it says that no matter how hard the world pushes against me, within me, there’s something stronger – something better, pushing right back.</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:social-links {"openInNewTab":true,"size":"has-normal-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"className":"is-style-logos-only","layout":{"type":"flex","orientation":"horizontal","justifyContent":"left","flexWrap":"wrap"}} -->
<ul class="wp-block-social-links has-normal-icon-size is-style-logos-only"><!-- wp:social-link {"url":"#","service":"instagram","label":"Instagram"} /-->

<!-- wp:social-link {"url":"#","service":"github"} /-->

<!-- wp:social-link {"url":"#","service":"dribbble"} /-->

<!-- wp:social-link {"url":"#","service":"mail","label":"Email"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"codepen"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>test</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>test</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<p>This is a row group Item</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This is a row group Item</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This is a row group Item</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This is a row group Item</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This is a row group Item</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This is a row group Item</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This is a row group Item</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This is a row group Item</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This is a row group Item</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This is a row group Item</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This is a row group Item</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This is a row group Item</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p>This is a stack group item</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This is a stack group item</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:media-text {"mediaPosition":"right","mediaId":52,"mediaLink":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/?attachment_id=52","mediaType":"image","mediaWidth":72,"verticalAlignment":"bottom","imageFill":false} -->
<div class="wp-block-media-text has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-bottom" style="grid-template-columns:auto 72%"><div class="wp-block-media-text__content"><!-- wp:heading -->
<h2 class="wp-block-heading" id="this-is-media-content">This is media & Content</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>This is some filler copy under that headline</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/image.jpeg" alt="" class="wp-image-52 size-full"/></figure></div>
<!-- /wp:media-text -->