<?php 
  $bgImage = get_field('bgimage');
  $title = get_field('title');
?>
<style>
    .bg-image{
        width: 100%;
    }
    .testimonial-title{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 40px;
        color: white;
        line-height: 50px;
    }
    .testimonial-main-container{
        position: relative;
    }
</style>

<div class="testimonial-main-container">
    <?php console_log($bgImage);?>
    <img src="<?php echo $bgImage['url']; ?>" alt="" class="bg-image"  width="700" height="700"/>
    <p class="testimonial-title"><?php echo $title;?></p>
</div>