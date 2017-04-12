<?php $tags = get_tags();
$html = '<ul class="sidebar-tag">';
foreach ( $tags as $tag ) {
  $tag_link = get_tag_link( $tag->term_id );
      
  $html .= "<li><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
  $html .= "{$tag->name}</a></li>";
}
$html .= '</ul>';
echo $html; ?>
