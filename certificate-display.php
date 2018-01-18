<?php 
$uid = $_GET['uid'];
$args = array( 'post_type' => 'certificate', 'posts_per_page' => -1 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();

  $LID = get_post_meta(get_the_ID(), 'learner_id', true);

  if ($uid == $LID) {
    ?>
    <a class="dt-sc-button   large  filled" href='https://cappagh-induction.co.uk/certificate/<?php the_title();?>'>Download this users Certificate</a>
    <?php
  }
  ?>
<?php
endwhile;
?>
