<?php
$terms = get_terms(array(
  'taxonomy' => 'photo_type',
  'orderby' => 'term_order',
  'hide_empty' => false,
));

?>
<div id="code-box-3">
  <div class="mutk3">
    <?php
    foreach ($terms as $term) {
    ?>
      <button class="tablinks airline" onclick="openTab(event, '<?php echo $term->slug  ?>','code-box-3')"><?php echo $term->name ?></button>
    <?php
    }
    ?>
  </div>
  <?php
  foreach ($terms as $term) {

    $query_images_args = array(
      'post_type'      => 'attachment',
      'post_mime_type' => 'image',
      'post_status'    => 'inherit',
      'posts_per_page' => -1,
      'tax_query' => array(
        array(
          'taxonomy' => 'photo_type',
          'field' => 'slug',
          'terms' => array($term->slug)
        )
      )
    );

    $query_images = new WP_Query($query_images_args);
  ?>
    <div class="tabcontent rules3" id="<?php echo $term->slug ?>">
      <ul id="thumbs">
        <?php
        foreach ($query_images->posts as $post) {
        ?>
          <li class="item-thumbs span3 design">
            <a data-caption="<?php $post->caption ?>" class="hover-wrap fanphoto" data-fancybox="my-images-1" href="<?php echo $post->guid ?>">
              <span class="overlay-img"></span>
              <span class="overlay-img-thumb font-icon-plus"></span>
            </a>
            <img src="<?php echo $post->guid ?>" alt="<?php $post->caption ?>">
          </li>
        <?php } ?>
      </ul>
    </div>
    <div class=clear></div>
  <?php } ?>
</div>