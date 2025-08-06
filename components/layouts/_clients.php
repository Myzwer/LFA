<div class="bg-sage text-black p-10">
    <div class="lg:max-w-6xl lg:mx-auto">
        <div class="grid grid-cols-12 gap-4 md:gap-10 ">
            <div class="col-span-12 text-center mx-auto">
                <div class="pb-20 max-w-none">
                    <h2 class="playfair text-3xl font-bold uppercase pb-5"><?php the_field('tc_header'); ?></h2>
                    <p><?php the_field('tc_subtext'); ?></p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-12 gap-4 md:gap-10">
            <?php
            if( have_rows('target_client') ):
                while( have_rows('target_client') ) : the_row();
            ?>
                    <div class="col-span-12 md:col-span-4">
                        <div class="pb-10 text-center">
                            <i class="<?php the_sub_field('icon'); ?> text-6xl pb-10"></i>
                            <h4 class = "text-xl font-bold uppercase"><?php the_sub_field('client_type'); ?></h4>
                            <p class = "text-left""><?php the_sub_field('more_details'); ?></p>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>


        </div>
    </div>
</div>
