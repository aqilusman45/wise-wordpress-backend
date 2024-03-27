<?php
 $title = get_field('title');
 $subtext = get_field('subtext');
 $button = get_field('button');
 $data = get_field('cards');
 $heading = get_field('heading');
 ?>
 <style>
 .our-work-item{
    width: 50%;
 }
  .our-work-first{
    width: 50%;
    justify-content: flex-start;
    align-items: baseline;
  }
  .site_logo{
    position: absolute;
    top: 11.5rem;
    right: 8.5rem;
  }

  .our-work-hover-button {
    padding: 1rem;
    border-radius: 9999px;
    display: flex;
    font-family: "Lato", sans-serif;
    align-items: center;
    gap: 0.5rem;
    line-height: 1rem;
    font-size: 0.875rem;
    color: var(--button-black); /* Assuming you have defined a custom CSS variable */
    position: relative;
    border: none;
    background: transparent;
}

.our-work-hover-button::after {
    content: "";
    display: block;
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 3rem; /* Adjust as needed */
    height: 3rem; /* Adjust as needed */
    border-radius: 9999px;
    background-color: rgba(0, 128, 0, 0.2); /* Adjust as needed */
    transition: all 0.3s ease-in-out;
    opacity: 0;
}

.our-work-hover-button:hover::after {
    width: 100%;
    opacity: 1;
}

 </style>

 <section class="w-full flex items-center justify-center lg:my-128 mt-63 mb-24" style="margin-top: 40px; margin-bottom: 80px;">
    <div class="flex">
        <div class="our-work-first ">
            <p class="font-Lato text-sm font-bold uppercase tracking-[3.383px] text-black opacity-20">
                <?php echo $title; ?>
            </p>
            <h2 class="w-full font-Montserrat text-[30px] leading-[40px] lg:text-[40px] font-semibold lg:leading-[52px] text-black ">
                <?php echo $heading; ?>
            </h2>
           
            <p><?php echo $subtext;?></p>
            <button class="our-work-hover-button">
                <p><?= $button ?></p>
                <span class="text-lg">+</span>
            </button>
        </div>
        <div class=" mx-auto flex w-full items-center lg:!w-2/4" style="justify-content: end;">
    <div class="our-work-item">
        <div class="w-full relative group transition-all duration-300 ease-in-out">
            <div class="outline-opacity-20 relative flex w-full flex-col items-center justify-end bg-white outline outline-[1px] outline-gray-300">
                <div class="flex w-full flex-col">
                    <div class="relative w-full">
                        <img src="<?php echo $data[0]['mainimage']['url']; ?>" alt="caption" width="300" height="300" class="!w-full object-cover relative h-[201.687px] lg:h-[248px]" style="width: 100%;"/>
                        <img src="<?php echo $data[0]['icon']['url']; ?>" alt="caption" width="48" height="48" class="site_logo" />
                    </div>
                    <h6 class="my-2 px-6 text-black" style="font-size: medium;">
                        <?php echo $data[0]['businessname']; ?>
                    </h6>
                </div>
                <div class="mb-5 h-[1px] w-full bg-gray-600 opacity-20"></div>
                <div class="mb-5 flex w-full items-center justify-between px-6">
                    <p class="w-fit font-Lato text-sm leading-4 text-[#7A7A7A]"><?php echo $data[0]['businesscategory']; ?></p>
                    <div class="flex items-center justify-center gap-3">
                        <img src="<?php echo $data[0]['statsicon']['url']; ?>" alt="caption" width="24" height="24" class="w-6 h-6 object-cover" />
                        <img src="<?php echo $data[0]['techicon']['url']; ?>" alt="caption" width="24" height="24" class="w-6 h-6 object-cover" />
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
</section>
