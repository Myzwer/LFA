<div class="bg-apricot text-white">
    <div class="lg:max-w-6xl  mx-auto p-5 xl:p-5">
        <div class="grid grid-cols-12 gap-4 md:gap-4">
            <div class="col-span-12 py-5 text-center mx-auto">
                <?php
                $imageBanner = get_field("image_banner");
                if (!empty($imageBanner)): ?>
                    <img class="rounded-xl shadow-xl" src="<?php echo esc_url($imageBanner['url']); ?>"
                         alt="<?php echo esc_attr($imageBanner['alt']); ?>">
                <?php endif; ?>
            </div>
        </div>

        <div class="grid grid-cols-12 gap-4 md:gap-4 pb-10">

            <div class="col-span-12 pt-5 prose max-w-none text-pretty">
                <?php the_field("impact_header"); ?>
            </div>

            <div class="col-span-12 md:col-span-6 prose max-w-none text-pretty">
                <?php the_field("text_left"); ?>
            </div>
            <div class="col-span-12 md:col-span-6 prose max-w-none text-pretty">
                <?php the_field("text_right"); ?>
            </div>
        </div>
    </div>
</div>