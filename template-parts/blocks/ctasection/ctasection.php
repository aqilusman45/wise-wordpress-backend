<?php
$subtext = get_field("subtext");
$data = get_field("buttons");
?>

<style>

.cta-button-primary {
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
    margin-bottom: 10px;
}
.cta-button-secondary {
    padding: 6px 16px;
    border-radius: 9999px; /* Rounded full */
    font-family: 'Lato', sans-serif;
    background-color: transparent; /* bg-transparent */
    font-size: 14px; /* text-sm */
    line-height: 1.5rem; /* leading-4 */
    font-weight: 600; /* font-semibold */
    border: 1px solid #FFFFFF; /* border border-white */
    color: #FFFFFF; /* text-white */
    position: relative;
    overflow: hidden;
    white-space: nowrap;
}
.text_styling {
      color: #fff;
      font-family: 'Lato', sans-serif;
      font-size: 16px;
      font-style: normal;
      font-weight: 400;
      line-height: 24px;
      opacity: 0.9;
    h2 {
      color: #fff;
      font-family: 'Montserrat', sans-serif;
      font-size: 35px;
      font-style: normal;
      font-weight: 600;
      line-height: 46px;

      @media (min-width: 1024px) {
        font-size: 56px;
        line-height: 69px;
      }
  
      strong {
        @media (min-width: 1024px) {
          font-size: 56px;
        }
  
        font-size: 35px;
  
        font-weight: 600;
        font-style: normal;
        color: green;
      }
    }
  }
  .wise-cta-main-container {
    margin-left: auto; /* mx-auto */
    display: flex;
    max-width: 1440px; /* max-w-1440 */
    flex-direction: column; /* flex-col */
    justify-content: space-between; /* justify-between */
    gap: 3.5rem; /* gap-14 */
    padding: 0px 40px; /* px-4 py-20 */
}

@media (min-width: 1024px) {
    .wise-cta-main-container {
        flex-direction: row; /* lg:flex-row */
        gap: 1.5rem; /* lg:gap-6 */
        padding: 32px 0px; /* lg:py-32 lg:px-10 */
    }
}

</style>
<div class='' style="background-color: black;">
    <div class="w-full max-w-[1440px] mx-auto">
        <div class="wise-cta-main-container ">
            <div class="flex max-w-680 flex-col items-start gap-6 px-4 md:px-0">
              
                    <div class="text_styling flex flex-col gap-6">
                        <?php echo $subtext ?>
                    </div>
            </div>
            <div class="flex flex-col items-center justify-center gap-6 px-4 md:flex-row lg:flex-col">
                <?php foreach ($data as $index => $node): ?>
                    <button class="<?php echo $node["boolean"] == 1 ? 'cta-button-primary' : 'cta-button-secondary' ?>">
                        <span class="relative block transition-all duration-200 ease-in group-hover:translate-y-[-40px] group-hover:scale-110 group-hover:opacity-0 ">
                            <?php echo $node["label"] ?>
                        </span>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
