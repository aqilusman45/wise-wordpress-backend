<?php
  $data = get_field('cards')
?>
<style>
  .star {
    color: #019F44; /* Change star color as needed */
    font-size: 1.5rem; /* Adjust star size as needed */
}
.reviews-badges-card {
    max-width: 1440px;
    margin-left: auto;
    margin-right: auto;
    display: grid;
    grid-template-columns: repeat(5, minmax(0, 1fr));
    justify-content: space-between;
    gap: 1rem;
    overflow: hidden;
    margin-top: 80px;
    margin-bottom: 80px;
}

@media (min-width: 640px) {
    .reviews-badges-card {
        gap: 1.25rem;
    }
}

@media (min-width: 768px) {
    .reviews-badges-card {
        gap: 1.25rem;
    }
}

@media (min-width: 1024px) {
    .reviews-badges-card {
        gap: 1.25rem;
    }
}

@media (min-width: 1280px) {
    .reviews-badges-card {
        gap: 1.25rem;
    }
}

</style>
<div class="reviews-badges-card">
    <?php foreach ($data as $index => $item): ?>
        <div key="<?php echo $index; ?>" class="flex flex-col items-center justify-center gap-2">
            <p class="text-center font-Montserrat font-semibold uppercase not-italic leading-normal tracking-[0.392px] text-black lg:text-2xl">
                <?php echo $item['title']; ?>
            </p>
            <img src="<?php echo $item['logo']['url']; ?>" alt="caption" width="80" height="80" class="object-cover w-10 sm:w-16 lg:w-20" />
            <div class="!whitespace-nowrap sm:min-w-[65px]">
                <?php
                $stars = $item['star'];
                for ($i = 0; $i < $stars; $i++) {
                    echo '<span class="star">&#9733;</span>'; // Unicode character for star
                }
                ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>