<?php

/**
 * Clean up the_excerpt()
 */
function blossom_excerpt_length($length) {
  return POST_EXCERPT_LENGTH;
}

function blossom_excerpt_more($more) {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Read More', 'blossom') . '</a>';
}
add_filter('excerpt_length', 'blossom_excerpt_length');
add_filter('excerpt_more', 'blossom_excerpt_more');

?>