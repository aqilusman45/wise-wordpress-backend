<?php 
  $reviews = get_field('reviews');

  $halfWayIndex = ceil(count($reviews) / 2);
$firstHalfOfArray = array_slice($reviews, 0, $halfWayIndex);
$secondHalfOfArray = array_slice($reviews, $halfWayIndex);
?>
<style>
  .review_card_shadow{
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1),
              0 10px 10px -5px rgba(0, 0, 0, 0.04);
  }
</style>

<div class="" style="display: flex; align-items: center; gap: 40px; margin-top: 20px; margin-bottom: 80px;">
      <div class="" style="width: 50%; display: flex; flex-direction: column; gap: 20px;">
        <?php foreach ($firstHalfOfArray as $index => $item): ?>
          <?php   
          $post_title = get_the_title($item->ID);
          $post_content = get_post_field('post_content', $item->ID);
          $featured_img_url = get_the_post_thumbnail_url($item->ID, 'large');
          $logo = get_field('logo', $item->ID);
          ?>
          <div class="review_card_shadow" style="padding: 16px; border-radius: 8px;">
    <div class="flex items-center justify-between mb-6">
        <div class="flex items-center gap-3">
            <img src="<?php echo $featured_img_url; ?>" alt="caption" width="40" height="40" class="rounded-full min-w-[40px] min-h-[40px] w-10 h-10">
            <p class="text-base lg:text-[22px] font-inter leading-6 lg:leading-[30px] text-black">
                <?php echo $post_title; ?>
            </p>
        </div>
        <img src="<?php echo $logo['url']; ?>" width="125" height="60" alt="caption" class="w-20 lg:w-[125px]">
    </div>
    <?php echo $post_content; ?>
</div>
        <?php endforeach; ?>
      </div>
      <div class="" style="width: 50%; display: flex; flex-direction: column; gap: 20px;">
        <?php foreach ($secondHalfOfArray as $index => $item): ?>
          <?php  
               $post_title = get_the_title($item->ID);
               $post_content = get_post_field('post_content', $item->ID);
               $featured_img_url = get_the_post_thumbnail_url($item->ID, 'large');
               $logo = get_field('logo', $item->ID);
          ?>
          <div class="review_card_shadow" style="padding: 16px; border-radius: 8px;">
    <div class="flex items-center justify-between mb-6">
        <div class="flex items-center gap-3">
            <img src="<?php echo $featured_img_url; ?>" alt="caption" width="40" height="40" class="rounded-full min-w-[40px] min-h-[40px] w-10 h-10">
            <p class="text-base lg:text-[22px] font-inter leading-6 lg:leading-[30px] text-black">
                <?php echo $post_title; ?>
            </p>
        </div>
        <img src="<?php echo $logo['url']; ?>" width="125" height="60" alt="caption" class="w-20 lg:w-[125px]">
    </div>
    <?php echo $post_content; ?>
</div>
        <?php endforeach; ?>
      </div>
</div>
