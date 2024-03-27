<?php
    $blockName = 'twocolumnsection';
    $sideimg = get_field('sideImage');
    $title = get_field('title');
    $heading = get_field('heading');
    $subtext = get_field('subtext');
    $data = get_field('sub_industries');
?>
<div class="container">
    <img alt="caption" src="<?php echo $sideimg; ?>" class="side_image"/>
    <div class="w-full lg:w-2/4 px-4 lg:px-0">
        <span class="font-lato text-sm font-bold tracking-[3.383px] text-gray-900 opacity-30 uppercase block mb-10"><?php echo $title; ?></span>
        <h2 class="font-Montessrat text-30px leading-40px text-gray-900 lg:text-40px font-semibold lg:leading-52px mb-8"><?php echo $heading; ?></h2>
        <?php echo $subtext; ?>
        <div class="grid_container">
            <?php foreach ($data as $item) { ?>
                <li class="list relative mb-3 flex gap-4 px-4 py-2 font-Lato text-sm font-semibold after:absolute after:left-0 after:top-2/4 after:block after:h-8 after:w-0 after:-translate-y-2/4 after:rounded-full after:bg-green-600/[0.20] after:transition-all after:duration-300 hover:after:w-full cursor-pointer">
                    <img src="<?php echo $item['sub_industry']['icon']['url']; ?>"class="icon" id='icon'/>
                    <p class="font-Lato text-sm font-semibold leading-4 text-black">
                        <?php echo $item['sub_industry']['industry_name']; ?>
                    </p>
                </li>
            <?php } ?>
        </div>
    </div>
</div>
<style>
  .container{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-direction: column;
    gap: 5rem/* 80px */;
    @media(min-width: 1024px){
     padding-top: 128px;
    padding-bottom: 128px;
    flex-direction: row;
    }
    
  }
  .side_image{
    width: 100%;
    @media(min-width: 1024px){
      width: 50%;
    }
  }
  .grid_container{
    display: grid;
    column-gap: 2rem;
    @media (min-width: 768px) {
        grid-template-columns: repeat(2, minmax(0, 1fr));
}
  }
  #icon{
    width: 16px;
    object-fit: contain;
  }
  .list {
    position: relative;
    margin-bottom: 0.75rem; /* 3 */
    display: flex;
    align-items: center;
    gap: 1rem; /* 4 */
    padding-left: 1rem; /* 4 */
    padding-right: 1rem; /* 4 */
    padding-top: 0.5rem; /* 2 */
    padding-bottom: 0.5rem; /* 2 */
    font-family: 'Lato', sans-serif;
    font-size: 0.875rem; /* 14 */
    font-weight: 600;
    cursor: pointer;
    white-space: nowrap;
}

.list::after {
    content: "";
    position: absolute;
    left: 0;
    top: 50%;
    display: block;
    height: 2rem; /* 8 */
    width: 0;
    transform: translateY(-50%);
    border-radius: 9999px; /* Rounded-full */
    background-color: rgba(16, 185, 129, 0.2); /* bg-green-600/[0.20] */
    transition-property: width;
    transition-duration: 300ms; /* transition-all */
}

.list:hover::after {
    width: 100%; /* hover:after:w-full */
}

</style>