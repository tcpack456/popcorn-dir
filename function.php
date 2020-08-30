function allow_onclick_content() {
  global $allowedposttags, $allowedtags;
  $newattribute = "onclick";

  $allowedposttags["a"][$newattribute] = true;
  $allowedtags["a"][$newattribute] = true; //unnecessary?
}
add_action( 'init', 'allow_onclick_content' );
function allow_button_onclick_mce($settings) {
  $settings['extended_valid_elements'] =  "a[rel|rev|charset|hreflang|tabindex|accesskey|type|name|href|target|title|class|onfocus|onblur|onclick]";
  return $settings;
}
add_filter('tiny_mce_before_init', 'allow_button_onclick_mce');
