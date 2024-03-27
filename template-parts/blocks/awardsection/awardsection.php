<?php
$title = get_field('title');
$awardsData = get_field('awardsimages');
$socialsData = get_field('socialicons');
?>

<section class="max-w-[1440px] relative z-10 mx-auto w-full my-20 lg:my-32 px-4 lg:px-10" data-testid="awards-affiliation-section overflow-hidden">
    <h2 class="font-semibold text-gray-900 text-center font-Montserrat text-[30px] leading-[40px] lg:text-[40px] lg:leading-[52px]">
        <?php echo $title; ?>
    </h2>

    <div class="mt-20 w-full">
        <div class="flex items-center gap-20 overflow-x-scroll lg:overflow-hidden">
            <?php foreach ($awardsData as $index => $award): ?>
                <div>
                    <img src="<?php echo esc_url($award['award']['url']); ?>" width="128" height="128" class="w-32 pr-2">
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="item-center mt-8 hidden justify-center gap-10 lg:flex">
        <?php foreach ($socialsData as $index => $social): ?>
            <div class="flex items-center gap-20">
                <img src="<?php echo esc_url($social['social']['url']); ?>" width="128" height="128">
            </div>
        <?php endforeach; ?>
    </div>

    <div class="mt-10 lg:hidden">
        <div class="flex items-center overflow-x-scroll gap-20">
            <?php foreach ($socialsData as $index => $social): ?>
                <div class="!flex justify-center !justify-items-center gap-8 pr-5 outline-0">
                    <img src="<?php echo esc_url($social['social']['url']); ?>" width="128" height="128" class="object-cover pr-4">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
