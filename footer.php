<?php wp_footer(); ?>

<section class="footer bg-gray border-t-2 lg:flex">
        <div class="container">
            <div class="footer__wrapper flex flex-col items-center text-white lg:flex lg:flex-row lg:justify-between">
                <h3 class="uppercase font-semibold">find with me</h3>
                <ul class="flex gap-3">
                <?php 
                                if( have_rows('icons') ):

                                    // Loop through rows.
                                    while( have_rows('icons') ) : the_row();
                                
                                        // Load sub field value.
                                        $icons = get_sub_field('icons');
                                        $icons_link = get_sub_field('icons_link');
                                        // Do something...?>
                                        <li>
                                        <a href="<?php echo $icons_link ?>" class=""><i class=" text-[1.5rem] text-white lg:hover:text-yellow <?php echo $icons ?>"></i></a>
                                        </li>
                                <?php
                                    // End loop.
                                    endwhile;
                                // No value.
                                else :
                                    // Do something...
                                endif;
                            ?>
                </ul>
                <p>©Copyright. All right reserved.</p>
            </div>
        </div>
    </section>