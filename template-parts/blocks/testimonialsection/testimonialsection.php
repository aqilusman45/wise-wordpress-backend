<?php
  echo 'testimonial section';
  $subtitle = get_field('subtitle');
  $title = get_field('title');
  $reviews = get_field('reviews');
  ?>
<style>
    .grid-container {
    display: flex;
    gap: 10px;
}
.review-container-truncate {
    max-height: 12em;
    overflow: hidden;
}
</style>

<div class="w-full my-20 lg:my-[128px]">
    <div class="w-full max-w-[1440px] mx-auto">
        <span class="block text-left font-Lato text-sm font-bold tracking-[3.383px] text-black/20"><?php echo $subtitle; ?></span>
        <h2 class="font-Montserrat text-[30px] leading-10 lg:text-[40px] font-semibold lg:leading-[52px] text-[#051011] text-left my-5"><?php echo $title; ?></h2>
        
        <div class="grid-container"> <!-- Grid layout with three columns -->
            <?php
            $slicedReviews = array_slice($reviews, 0, 3);
            
            foreach ($slicedReviews as $index => $review) {
              console_log($review);
              $review_title = get_the_title($review->ID);
              $review_content = get_post_field('post_content', $review->ID);
                ?>
                <div class="pr-5 py-10 <?php if($index == 2) echo 'hidden lg:block'; ?>"> <!-- Hide the third review on large screens -->
                    <div class="shadow-lg">
                        
                        <h3><?php echo $review_title; ?></h3>
                        <p class="review-container-truncate "><?php echo  $review_content; ?></p>
                      
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>