<?php
  $title = get_field("title");
  $blogcard = get_field("blogcard")
?>  

<style>
/* One class to style the first-container */
#wise-blog .first-container {
    width: 100%;
    max-width: 1440px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 20px;
    margin-bottom: 20px;
    padding-left: 16px;
    padding-right: 16px;
}

/* Styling for title inside first-container */
#wise-blog  .first-container .title {
    font-weight: 600;
    color: #111827;
    font-family: Montserrat, sans-serif;
    font-size: 30px;
    line-height: 40px;
    margin-bottom: 40px;
}

/* Styling for grid inside first-container */
.blog_section_grid {
    display: flex;
    gap: 12px;
}

/* Styling for card link inside first-container */
#wise-blog  .first-container .card-link {
    transition-property: all;
    transition-duration: 0.3s;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}

/* Hover effect for card link inside first-container */
#wise-blog  .first-container .card-link:hover {
    transform: scale(1.1);
}

/* Styling for image inside first-container */
#wise-blog  .first-container .image {
    width: 100%;
    height: 236px;
    margin-bottom: 16px;
}

/* Styling for button inside first-container */
#wise-blog .first-container .button {
    padding-top: 8px;
    padding-bottom: 8px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 9999px;
    border-width: 1px;
    border-style: solid;
    border-color: #000000;
    margin-bottom: 16px;
}

/* Styling for post title inside first-container */
#wise-blog  .first-container .post-title {
    font-family: 'Lato', sans-serif;
    font-size: 20px;
    line-height: 28px;
    font-weight: 500;
    color: #000000;
}

</style>

<div class="first-container" id="wise-blog" style="margin-top: 80px; margin-bottom: 80px;">
    <?php if ($title): ?>
        <h2 class="title" style="margin-bottom: 24px;"><?php echo $title ?></h2>
    <?php endif; ?>
   
    <div class="blog_section_grid">
    <?php foreach ($blogcard as $card): ?>
    <?php 
    $featured_img_url = get_the_post_thumbnail_url($card->ID, 'large');
    $post_title = get_the_title($card->ID);
    ?>
    <div class="transition ease-in-out duration-300 hover:scale-110 cursor-pointer">
        <img src="<?php echo $featured_img_url; ?>"  alt="caption" class="" style=" min-height: 200px; object-fit: cover;"/>
        <button style="border: 1px solid black; padding-top: 8px; padding-bottom: 8px; padding-left: 24px; padding-right: 24px; border-radius: 80px; background: transparent; color: black; margin-top: 8px;">Seo</button>
        <p class="font-Lato text-xl leading-7 font-medium text-black" style="color: #000000;"><?php echo $post_title; ?></p>
    </div>
<?php endforeach; ?>
    </div>
</div>
