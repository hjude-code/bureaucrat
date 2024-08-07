<?php
/**
 * Title: page
 * Slug: bureaucratbranchtest/page
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:navigation {"ref":6} /-->

<!-- wp:paragraph -->
<p>This is text</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This is new text</p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>this is column</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":416,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Glyph_9_1x1-1024x1024.png" alt="" class="wp-image-416"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>this is column</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><!-- wp:list-item -->
<li>This is a list in a column</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading" id="this-is-a-heading-1">This is a heading 1</h1>
<!-- /wp:heading -->

<!-- wp:heading -->
<h2 class="wp-block-heading" id="this-is-a-heading-2">This is a heading 2</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading" id="this-is-a-heading-3">This is a heading 3</h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading" id="this-is-a-heading-4">This is a heading 4</h4>
<!-- /wp:heading -->

<!-- wp:heading {"level":5} -->
<h5 class="wp-block-heading" id="this-is-a-heading-5">This is a heading 5</h5>
<!-- /wp:heading -->

<!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading" id="this-is-a-heading-6">This is a heading 6</h6>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><!-- wp:list-item -->
<li>This is a ting</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>this is another thing</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:image {"id":73,"width":"210px","height":"auto","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Map_W14-1024x614.webp" alt="" class="wp-image-73" style="width:210px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p>This is a quote!</p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:gallery {"columns":4,"linkTo":"none","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|40"}}}} -->
<figure class="wp-block-gallery has-nested-images columns-4 is-cropped"><!-- wp:image {"id":73,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Map_W14-1024x614.webp" alt="" class="wp-image-73"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":72,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Map_SKDK-1024x614.webp" alt="" class="wp-image-72"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":71,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Map_DSNY-1024x614.webp" alt="" class="wp-image-71"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":70,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Map_Adweek-1024x614.webp" alt="" class="wp-image-70"/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery -->

<!-- wp:details -->
<details class="wp-block-details"><summary>This is a details Summary</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
<p>This is details content</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:table -->
<figure class="wp-block-table"><table><tbody><tr><td>This is cell 1x1</td><td>This is cell 2x1</td></tr><tr><td>This is cell 1x2</td><td>This is cell 2x2</td></tr></tbody></table><figcaption class="wp-element-caption">This is caption</figcaption></figure>
<!-- /wp:table -->

<!-- wp:pullquote -->
<figure class="wp-block-pullquote"><blockquote><p>This is pullquote</p><cite>this is citation</cite></blockquote></figure>
<!-- /wp:pullquote -->

<!-- wp:media-text {"mediaId":157,"mediaLink":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/pexels-christina-corno-20099573","mediaType":"image"} -->
<div class="wp-block-media-text is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/pexels-christina-corno-20099573-1024x768.jpg" alt="" class="wp-image-157 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"placeholder":"Content…"} -->
<p>This is media and content</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">This is a button</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">this is an outlined button</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:table-of-contents {"headings":[{"content":"This is a heading 1","level":1,"link":null},{"content":"This is a heading 2","level":2,"link":null},{"content":"This is a heading 3","level":3,"link":null},{"content":"This is a heading 4","level":4,"link":null},{"content":"This is a heading 5","level":5,"link":null},{"content":"This is a heading 6","level":6,"link":null}]} -->
<nav class="wp-block-table-of-contents"><ol><li><span class="wp-block-table-of-contents__entry">This is a heading 1</span><ol><li><span class="wp-block-table-of-contents__entry">This is a heading 2</span><ol><li><span class="wp-block-table-of-contents__entry">This is a heading 3</span><ol><li><span class="wp-block-table-of-contents__entry">This is a heading 4</span><ol><li><span class="wp-block-table-of-contents__entry">This is a heading 5</span><ol><li><span class="wp-block-table-of-contents__entry">This is a heading 6</span></li></ol></li></ol></li></ol></li></ol></li></ol></li></ol></nav>
<!-- /wp:table-of-contents -->

<!-- wp:social-links -->
<ul class="wp-block-social-links"><!-- wp:social-link {"url":"reddit.com","service":"reddit"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:cover {"overlayColor":"vivid-red","isUserOverlayColor":true,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-vivid-red-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">This is a cover</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:code -->
<pre class="wp-block-code"><code><HTML><br><body><br></body><br></HTML></code></pre>
<!-- /wp:code -->