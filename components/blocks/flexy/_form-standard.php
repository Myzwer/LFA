<div class="lg:max-w-4xl lg:mx-auto py-10">
    <div class="grid grid-cols-12 gap-4 md:gap-4">
        <div class="col-span-12 py-5 prose max-w-none text-pretty">
            <?php the_sub_field( "header" ); ?>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-4 md:gap-4">
        <div class="col-span-12 py-5 max-w-none">
            <?php
            // Get the form ID from ACF subfield
            $form_id = get_sub_field('form_id');

            // Make sure we have a valid ID and it's numeric
            if (!empty($form_id) && is_numeric($form_id)) {
                echo do_shortcode('[gravityform id="' . intval($form_id) . '" title="false" description="false" ajax="true"]');
            } else {
                echo '<p class="text-red-500">Form ID not set or invalid.</p>';
            }
            ?>
        </div>
    </div>
</div>
