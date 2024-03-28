<?php
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
    font-size: 14px !important;
}
.review_card_shadow{
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1),
              0 10px 10px -5px rgba(0, 0, 0, 0.04);
  }
</style>

<div class="w-full my-20 lg:my-[128px]" style="margin-bottom: 80px;">
    <div class="w-full">
        <span class="block text-left font-Lato text-sm font-bold tracking-[3.383px] text-black/20"><?php echo $subtitle; ?></span>
        <h2 class="font-Montserrat text-[30px] leading-10 lg:text-[40px] font-semibold lg:leading-[52px] text-[#051011] text-left my-5"><?php echo $title; ?></h2>
        
        <div class="grid-container"> <!-- Grid layout with three columns -->
            <?php
            $slicedReviews = array_slice($reviews, 0, 3);
            
            foreach ($slicedReviews as $index => $review) {
                $post_title = get_the_title($review->ID);
                $post_content = get_post_field('post_content', $review->ID);
                $featured_img_url = get_the_post_thumbnail_url($review->ID, 'large');
                $logo = get_field('logo', $review->ID);
                ?>
               <div class="review_card_shadow" style="padding: 16px; border-radius: 8px;">
    <div class="flex items-center justify-between mb-6">
        <div class="flex items-center gap-3" style="gap: 8px;">
            <img src="<?php echo $featured_img_url; ?>" alt="caption" width="40" height="40" class="rounded-full min-w-[40px] min-h-[40px] w-10 h-10">
            <p class="text-base lg:text-[22px] font-inter leading-6 lg:leading-[30px] text-black">
                <?php echo $post_title; ?>
            </p>
        </div>
        <img src="<?php echo $logo['url']; ?>" width="125" height="60" alt="caption" class="" style="width: 80px;">
    </div>
    <div class="review-container-truncate">
     <?php echo $post_content; ?>   
    </div>
    
</div>
            <?php
            }
            ?>
        </div>
    </div>
</div>