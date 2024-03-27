<?php
   $logo = get_field('logo');
   $darklogo = get_field('logodark');
   $navlinks = get_field('navlinks');
   $buttons = get_field('buttons');
   $transparentNav = get_field('transparentNav');
?>

<style>
    .nav-link {
        display: flex;
    }
.logo{
    width: 300px;
}
.nav_main_container_menu{
    display: flex;
    align-items: center;
    justify-content: center;
  
    > a {
      color: black;
      font-style: none;
      font-size: 16px;
      position: relative;
      list-style: none;
    text-decoration: none;
      &::after {
        content: '';
        background-color: #019f44;
        bottom: -8px;
        height: 1px;
        left: auto;
        margin-left: auto;
        margin-right: auto;
        position: absolute;
        right: 0;
        transition-duration: 0.2s;
        transition-property: all;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-timing-function: linear;
        width: 0;
      }
    }
    &:hover {
      > a {
        &::after {
          left: 0;
          right: auto;
          width: 100%;
        }
      }
    }
}

.wise-navbar-content{
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 40px;
  >ul{
    display: flex;
    gap: 10px;
    align-items: center;
  }
}

.nav-button-secondary{
  padding: 6px 16px;
    border-radius: 9999px; /* Rounded full */
    font-family: 'Lato', sans-serif;
    background-color: transparent; /* bg-transparent */
    font-size: 14px; /* text-sm */
    line-height: 1.5rem; /* leading-4 */
    font-weight: 600; /* font-semibold */
    border: 1px solid black; /* border border-white */
    color: black; /* text-white */
    position: relative;
    overflow: hidden;
    white-space: nowrap;
}

.nav-button-primary{
  padding: 6px 16px;
    border-radius: 9999px; /* Rounded full */
    font-family: 'Lato', sans-serif;
    background-color: #16a34a; /* bg-green-600 */
    font-size: 14px; /* text-sm */
    line-height: 1.5rem; /* leading-4 */
    font-weight: 600; /* font-semibold */
    color: #FFFFFF; /* text-white */
    position: relative;
    border: none;
    white-space: nowrap;
}
    </style>


   <nav class="">
  <div class="mx-auto flex w-full max-w-1440 items-center justify-between px-4 lg:px-14 xl:px-120">
    <a aria-label="home" href="/" class="block h-[32.7px] w-[147px] lg:h-12 lg:w-[157px] xl:w-[216px]">
      <img src="<?php echo $darklogo['url'];?>" class="logo"/>
    </a>
    <div class="wise-navbar-content">
      <ul class="">

<?php foreach ($navlinks as $node): ?>
                <li class="nav_main_container_menu group relative  font-Lato text-sm font-semibold leading-4 text-black">
                    <a href="<?php echo $node['link']; ?>"  class="">
                    <?php echo $node['title'];?>
                </a>
                </li>
            <?php endforeach; ?>

      </ul>
      <div class="" style="display: flex; align-items: center; gap: 16px;">
      <?php foreach ($buttons as $node): ?>
                    <button class="<?php echo $node["boolean"] == 1 ? 'nav-button-primary' : 'nav-button-secondary' ?>">
                        <span class="relative block transition-all duration-200 ease-in group-hover:translate-y-[-40px] group-hover:scale-110 group-hover:opacity-0 ">
                            <?php echo $node["label"] ?>
                        </span>
                <?php endforeach; ?>
      </div>
    </div>
  </div>
</nav>

