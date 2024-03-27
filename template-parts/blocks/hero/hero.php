<?php
  $desktopbackground_url = get_field('desktopbackground');
  $video = get_field('video');
  $button_label = get_field('button');
  $subtext = get_field('subtext');
?>
<style>
  .wise-hero {
    position: relative;
    display: flex;
    height: 100vh;
    width: 100%;
    align-items: center; /* items-center equivalent */
    overflow: hidden;
}
  .wise-hero-bg-image {
    position: absolute;
    left: 0;
    top: 0;
    z-index: 10; /* Assuming z-index 10 *//* Initially hidden */
    height: 100%;
    width: 100%;
    transform: scale(1);
}
.wise-bg-video {
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    object-fit: cover;
}
.style_hero_rich_text{
  font-family: 'Montserrat', sans-serif;
      color: #fff;
      font-size: 20px;
      font-style: normal;
      font-weight: 300;
      line-height: 36px;
      text-align: center;
      @media (min-width: 1024px) {
        font-size: 16px;
      }
    > h1 {
      color: #fff;
      text-align: center;
      font-family: 'Montserrat', sans-serif;
      font-size: 42px;
      font-style: normal;
      font-weight: 700;
      line-height: normal;
      text-align: center;
      @media (min-width: 1024px) {
        font-size: 30px;
      }
      > strong {
        color: #019f44;
      }
    }
}

.wise-hero-button {
    padding: 6px 24px; /* Equivalent to px-6 py-4 */
    border-radius: 9999px; /* Equivalent to rounded-full */
    font-family: 'Lato', sans-serif; /* Equivalent to font-Lato */
    background-color: #34D399; /* Equivalent to bg-green-600 */
    font-size: 14px; /* Equivalent to text-sm */
    line-height: 1.5; /* Equivalent to leading-4 */
    font-weight: 600; /* Equivalent to font-semibold */
    color: #ffffff; /* Equivalent to text-white */
    position: relative;
    overflow: hidden;
    border: none;
}


.wise-hero-content {
    z-index: 20;
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
  }

</style>
<div id="hero-section" class=wise-hero">
    <img src="<?php echo $desktopbackground_url['url']; ?>" width="700" height="700" alt="caption" class="wise-hero-bg-image" />

    <video id="animated-bg-video" autoplay class="wise-bg-videor">
        <source src="<?php echo $video; ?>" />
    </video>

    <div class="wise-hero-content">
        <div class="style_hero_rich_text mb-6"><?php echo $subtext; ?></div>
        <div>
            <!-- RichText component content here -->
        </div>
        <div class="flex items-center justify-center px-[42px] lg:px-0">
            <button class='wise-hero-button'>
                <span class="relative block transition-all duration-200 ease-in group-hover:translate-y-[-40px] group-hover:scale-110 group-hover:opacity-0"><?php echo $button_label['label']; ?></span>
            </button>
        </div>
    </div>
</div>
