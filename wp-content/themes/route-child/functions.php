<?php

/*** Add Google Tag Manager Code to the head set code at #### **/
add_action( 'wp_head', 'cazarin_gtm_head', 1);
function cazarin_gtm_head() { ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5ZSHH77');</script>
<!-- End Google Tag Manager -->
<?php 
} 

/*** Add Google Tag Manager Code after opening body tag **/
add_action( 'wp_body_open', 'cazarin_gtm_body', 1 );

function cazarin_gtm_body() {
  ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5ZSHH77"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <?php
}