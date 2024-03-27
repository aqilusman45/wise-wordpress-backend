<?php
   $title = get_field('title');
   $heading = get_field('heading');
   $subtext = get_field('subtext');
   $video = get_field('video');
   $thumbnail = get_field('thumbnail');
   $playicon = get_field('playicon');
   $owl = get_field('owl');
   $text= get_field('text');
?>
<section>
   <style>
      .animation-container-main{
         position: relative;
    float: right;
    display: none; /* Initially hidden */
    height: 168px;
    width: 168px;
    transform: translateY(-30%);
    cursor: pointer;  
      }     
      @media (min-width: 1024px) {
    .animation-container-main {
        display: block; /* Displayed on larger screens */
        margin-right: 1rem;
    }
}
@keyframes rotate_circle {
    from {
      transform: rotate(-360deg);
    }
    to {
      transform: rotate(360deg);
    }
  }

.owl-img {
   position: absolute;
    right: -5%;
    transform: translateX(-50%) translateY(-50%);
    bottom: -9px;
}
.text-img{
   animation-name: rotate_circle;
    animation-duration: 20s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    position: relative;
}
.wise-content{
    p:nth-child(2){
        margin-bottom: 60px !important;
    }
}

   </style>
<div class="mx-auto max-w-1440 px-4 lg:px-0" style="margin-top: 20px; margin-bottom: 20px;">
    <div class="mb-20 flex flex-col gap-8">
        <div class="mx-auto flex max-w-[1000px] flex-col gap-14 text-center">
            <p class="font-Lato text-sm font-bold uppercase not-italic leading-normal tracking-[3.383px] text-black opacity-20">
                <?php echo $title; ?>
            </p>
            <h2 class="font-Montserrat lg:text-[56px] text-[35px] leading-[46px] text-black font-semibold lg:leading-[69px] text-center">
                <?php echo $heading; ?>
            </h2>
        </div>
        <div class="wise-content max-w-[882px] mx-auto text-center">
            <?php echo $subtext; ?>
        </div>
    </div>

    <div class="relative mx-auto w-full rounded-[20px] lg:px-[200px] xl:px-[260px]" style="margin-bottom: 20px;">
    <iframe src="https://www.youtube.com/embed/U5vt0LsC3r8?si=PZ2xVQiEnaaj2GZm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="aspect-ratio: 16/9; width: 100%;"></iframe>

    </div>
    <div class="animation-container-main" style="margin-top: 80px;">
        <img src="<?php echo $owl['url']; ?>" width="104" height="104" alt="caption" class="owl-img"/>
        <img src="<?php echo $text['url']; ?>" width="150" height="150" alt="caption" class="text-img"/>
    </div>
</div>
</section>
