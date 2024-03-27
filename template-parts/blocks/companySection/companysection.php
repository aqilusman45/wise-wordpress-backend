<?php
    $title = get_field('title');
    $heading = get_field('heading');
    $data = get_field('card');
?>
<div class="company-container">
    <div class="w-full px-4 lg:px-0">
        <div class="w-full">
            <span class="block text-center font-Lato text-sm font-bold tracking-[3.383px] text-black/20" style="width: 100%; text-align: center; display: block;">
                <?php echo $title; ?>
            </span>
            <h2 type="h2" class="heading-style">
                <?php echo $heading; ?>
            </h2>
            <div class="image_nth_child">
                <?php foreach ($data as $index => $item): ?>
                    <div class="group mb-10 hidden last:mb-0 lg:block">
                        <img src="<?php echo $item['bgimage']['url']; ?>" width="700" height="700" class="image-transition" />
                        <div class="content cursor-pointer">
                            <h3 class="font-Monteserrat text-[34px] leading-[44px] text-center font-light mb-2 group-hover:text-green-600 z-30" id="active-heading<?php echo $index; ?>">
                                <?php echo $item['title']; ?>
                            </h3>
                            <p class="z-30 opacity-0 company_rich_text group-hover:opacity-100 group-hover:text-green-600">
                                <?php echo $item['subtext']; ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="grid gap-11 md:grid-cols-2 lg:hidden">
                <?php foreach ($data as $index => $item): ?>
                    <div class="flex flex-col items-center rounded-2xl bg-gray-50 px-8 py-12">
                        <img src="<?php echo $item['bgimage']['url']; ?>" width="700" height="700" class="mb-8" />
                        <h3 class="font-Montserrat text-[26px] leading-[36px] font-light mb-2 text-center">
                            <?php echo $item['title']; ?>
                        </h3>
                        <p class="company_rich_text">
                            <?php echo $item['subtext']; ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<style>
.company-container {
  padding-top: 92px;
  padding-bottom: 200px;
  position: relative;
}
.heading-style {
    font-family: "Montserrat", sans-serif;
    font-size: 30px;
    line-height: 10;
    font-weight: 600;
    color: #051011;
    text-align: center;
    margin-top: 10px;
    margin-bottom: 20px;
}

@media (min-width: 1024px) {
    .heading-style {
        font-size: 40px;
        line-height: 52px;
        margin-bottom: 20px;
    }
}
  .content{
    position: relative;
    z-index: 30;
  }
  .image-transition{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    z-index: 10;
    width: 100%;
    opacity: 0;
    margin-top: 20px;
  }

.image_nth_child {
    > div:nth-child(1) > img {
      width: auto;
      opacity: 1;
      @media (min-width: 1024px) {
        width: 900px !important;
      }
    }
    > div:nth-child(2) > img {
      width: auto;
      @media (min-width: 1024px) {
        width: 1600px;
      }
    }
  }
  .company_rich_text {
      font-family: 'Lato', sans-serif;
      font-size: 16px;
      font-style: normal;
      font-weight: 400;
      line-height: 24px;
      color: #6b7280;
      text-align: center;
  }
</style>
