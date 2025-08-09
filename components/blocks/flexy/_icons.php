
    <div class="lg:max-w-6xl lg:mx-auto">
        <div class="grid grid-cols-12 gap-4 md:gap-10 ">
            <div class="col-span-12 text-center mx-auto">
                <div class="py-10 max-w-none prose">
                    <?php the_sub_field('header'); ?>
                </div>
            </div>
        </div>

        <?php
        $rows   = get_sub_field('icon');
        $count  = is_array($rows) ? count($rows) : 0;
        $map    = [1 => 12, 2 => 6, 3 => 4];
        $span   = $map[$count] ?? 3; // default to 3 for 4+

        ?>
        <div class="grid grid-cols-12 gap-4 md:gap-10">
            <?php if (have_rows('icon')): ?>
                <?php while (have_rows('icon')): the_row();
                    $icon_class = trim((string) get_sub_field('icon_single'));
                    $copy       = get_sub_field('copy');
                    $item_class = 'col-span-12 md:col-span-' . $span;
                    ?>
                    <div class="<?php echo esc_attr($item_class); ?>">
                        <div class="pb-10 text-center">
                            <?php if ($icon_class): ?>
                                <i class="<?php echo esc_attr($icon_class . ' text-6xl pb-10'); ?>" aria-hidden="true"></i>
                            <?php endif; ?>

                            <?php if (!empty($copy)): ?>
                                <div class="prose">
                                    <?php echo wp_kses_post(is_string($copy) ? $copy : ''); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </div>