<div class="lg:max-w-6xl mx-auto p-5 xl:p-5">
    <div class="grid grid-cols-12 gap-4 md:gap-4">
        <div class="col-span-12 py-5 text-center mx-auto">
            <?php
            $imageBanner = get_sub_field("banner");
            if (!empty($imageBanner)): ?>
                <img class="rounded-xl shadow-xl" src="<?php echo esc_url($imageBanner['url']); ?>"
                     alt="<?php echo esc_attr($imageBanner['alt']); ?>">
            <?php endif; ?>
        </div>

        <div class="col-span-12 pb-5 prose max-w-none text-pretty">
            <?php the_sub_field("all_text"); ?>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-4 md:gap-4">
        <?php
        if (have_rows('images_of_work')):
            while (have_rows('images_of_work')) : the_row();

                $workImage = get_sub_field("image_of_work");
                if (!empty($workImage)): ?>
                    <div class="col-span-12 md:col-span-6">
                        <img class="rounded-xl shadow-xl" src="<?php echo esc_url($workImage['url']); ?>"
                             alt="<?php echo esc_attr($workImage['alt']); ?>">
                    </div>
                <?php endif;
            endwhile;
        endif;
        ?>
    </div>
</div>
