<?php

  /**
   * template name: home
   */
?>

<?php get_header(); ?>
<section class="banner bg-gray  pt-[7rem]" id="home">
        <div class="container">
            <div class="banner__wrapper lg:flex lg:flex-row-reverse lg:justify-between">
                <div class="banner__img flex items-center justify-center">
                <div class="image w-[15rem] lg:w-[30rem]">
                <?php if( get_field('banner_image') ): ?>
                    <img src="<?php the_field('banner_image'); ?>" />
                    <?php endif; ?>
                </div>
                </div>
                
                <div class="banner__text text-center my-[.5rem] lg:text-left lg:py-[5rem]">
                    <p class="text-white text-[2rem] my-[.3rem]lg:text-[10rem] lg:hidden"><?php echo get_field('p_hello');?></p>
                    <h1 class="text-yellow font-bold text-[3.5rem] leading-[2.8rem] lg:leading-[2.5rem] pt-[.5rem] lg:text-[6rem] "><?php echo get_field('h1_name'); ?></h1>
                    <p class="text-white pt-[.5rem] lg:pt-[2rem] lg:uppercase lg:font-bold lg:text-[1.5rem]"> <?php echo get_field('p_aspiring');?></p>

                    <h3 class="text-white text-[1rem]text-justify my-[3.5rem] max-w-[25rem] m-auto lg:mx-0 lg:text-[1.3rem] lg:py-[2rem] lg:max-w-[40rem]"> <?php echo get_field('h3_about me');?></h3>

                    <div class="banner__button">
                        <a href="javascript:void(0)" class="btn text-[1.2rem] text-black font-bold bg-white uppercase rounded-[2rem] focus:bg-yellow focus:text-white lg:hover:bg-yellow lg:hover:text-white shadow-md lg:hover:shadow-cyan-50"><?php echo get_field('button_hire');?></a>
                    </div>

                    <div class="socmed flex items-center justify-center pt-[3rem] lg:justify-start ">
                        <ul class="flex gap-3 lg:pt-[1rem]">
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
                    </div>
                </div>
            </div>
        </div>
</section>
    
<section class="projects bg-gray lg:bg-lgray" id="projects">
        <div class="container">
            <div class="projects__wrapper">
                <div class="projects__content">
                    <div class="projects__title text-center">
                        <h1 class="text-[3rem] text-yellow font-semibold"><?php echo get_field('h1_title');?></h1>
                    </div>
                    <ul class="flex gap-10 justify-center items-center" >
                        <li id="prev-proj-1" class="text-white text-[1.4rem] lg:text-[1.9rem] font-semibold proj-link active"><a href="javascript:void(0)">Tailwind</a></li>
                        <li id="prev-proj-2" class="text-white text-[1.4rem] lg:text-[1.9rem] font-semibold proj-link"><a href="javascript:void(0)" >SASS</a></li>
                        <li id="prev-proj-3" class="text-white text-[1.4rem] lg:text-[1.9rem] font-semibold proj-link"><a href="javascript:void(0)">Wordpress</a></li>
                    </ul>
                </div>
                <!-- ----TAILWIND---- -->
                <div class="projects_slider text-center">
                    <div id="prev-proj-1-content" class="proj-display active py-[1rem]">
                        <?php 

                            $args = array(
                            'post_type' => 'Projectspost',
                            'posts_per_page' => 3,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'slug',
                                    'terms' => 'tailwind',
                                ),
                            ),
                            
                            );

                        $newQuery = new WP_Query($args)

                        ?>
                        <?php  

                        if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();
                        ?>

                                <?php
                                            $image = get_field('project_image');
                                                if(!empty($image)):
                                            ?>
                                                <img src="<?php echo esc_url($image['url']) ?>"  alt="">
                                <?php endif; ?>

                        <?php 

                        endwhile;
                            else:
                            echo "no available content";
                            endif;
                            wp_reset_postdata();

                        ?>
                    </div>
                    <!-- ----SASS---- -->
                    <div id="prev-proj-2-content" class="proj-display my-slider py-[1rem]">
                    <?php 
                        $args = array(
                        'post_type' => 'Projectspost',
                        'posts_per_page' => 3,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms' => 'sass',
                            ),
                        ),

                        );

                        $newQuery = new WP_Query($args)

                        ?>
                    <?php  

                    if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();
                    ?>

                    <?php
                            $image = get_field('project_image');
                                 if(!empty($image)):
                    ?>
                            <img src="<?php echo esc_url($image['url']) ?>"  alt="">
                    <?php endif; ?>

                    <?php 

                    endwhile;
                    else:
                    echo "no available content";
                    endif;
                    wp_reset_postdata();

                    ?>
                    </div>
                    <!-- ----Wordpress---- -->
                    <div id="prev-proj-3-content" class="proj-display my-slider1 py-[1rem]">
                    <?php 
                    $args = array(
                    'post_type' => 'Projectspost',
                    'posts_per_page' => 3,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'category',
                            'field'    => 'slug',
                            'terms' => 'wordpress',
                        ),
                    ),

                    );

                    $newQuery = new WP_Query($args)

                    ?>
                    <?php  

                    if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();
                    ?>

                    <?php
                            $image = get_field('project_image');
                                  if(!empty($image)):
                    ?>
                            <img src="<?php echo esc_url($image['url']) ?>"  alt="">
                    <?php endif; ?>

                    <?php 

                    endwhile;
                    else:
                    echo "no available content";
                    endif;
                    wp_reset_postdata();

                    ?>
                    </div>
                    
                     <a href="javascript:void(0)" class="text-[.9rem] font-semibold bg-white rounded-[2rem] inline-block focus:bg-yellow py-[.3rem] px-[.8rem] lg:py-[.8rem] lg:px-[1.5rem] lg:text-[1.1rem] lg:hover:bg-yellow lg:hover:text-white"><?php echo get_field('button_live');?></a>
                </div>
            </div>
        </div>
</section>

<section class="skills relative z-0 bg-gray p-[2rem]" id="skills">
        <div class="container">
            <div class="skills_title flex items-center justify-center">
                <h1 class="text-yellow text-[3rem] font-semibold pb-[3rem]"><?php echo get_field('h1_skills');?></h1>
            </div>
         <div class="skills__wrapper max-w-[60rem] m-auto gap-[1rem]">
            <div class="icons flex gap-[2rem]">

            <?php 
                                if( have_rows('skills_repeater') ):

                                    // Loop through rows.
                                    while( have_rows('skills_repeater') ) : the_row();
                                
                                        // Load sub field value.
                                        $default_image = get_sub_field('default_image');
                                        $hover_image = get_sub_field('hover_image');
                                        $skills_text = get_sub_field('skills_text');
                                        // Do something...
                        ?>

                                        
                                 

                <div class="imageskills bg-yellow hover:lg:bg-lgray w-[6.8rem] h-[6.8rem] lg:w-[8rem] lg:h-[8rem] rounded-[50%] flex items-center justify-center lg:rounded-none relative">
                    <img class ="image w-[4.8rem] lg:w-[5.5rem]" src="<?php echo $default_image; ?>" alt="">
                    <div class="hover text-center opacity-0 absolute">
                        <img class = "" src="<?php echo $hover_image; ?>" alt="">
                        <h4 class="text-white text-[1.2rem] font-semibold "><?php echo $skills_text; ?></h4>
                    </div>
                </div>

                <?php
                        // End loop.
                        endwhile;
                    // No value.
                    else :
                        // Do something...
                    endif;
                ?>

                </div>
        </div>
        </div>
</section>

<section class="services bg-lgray"  id="services">
        <div class="container">
                <div class="services__title flex items-center justify-center">
                     <h1 class="text-yellow text-[3rem] font-semibold">Services</h1>
                </div>
            <div class="services__wrapper">
                
                <div class="full__service lg:flex ">
                  
                    <div class="fullcard"> 
                    <?php 

                            $args = array(
                            'post_type' => 'Servicespost',
                            'posts_per_page' => 3,
                            
                            );

                            $newQuery = new WP_Query($args)

                            ?>
                            <?php  

                            if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();
                    ?>
                <div class="services__content border border-yellow gap-[2rem] flex justify-center items-center p-[1rem] m-[2rem] lg:bg-yellow lg:max-w-[30rem] lg:h-[28rem] lg:flex-col lg:gap-[0] lg:m-[.8rem] lg:hover:bg-[rgb(250,250,250,.5)] lg:transition-all lg:border-none">
                    <div class="services_image flex justify-center items-center">
                        <span class="text-white text-[3.5rem] lg:text-[4.5rem]"><i class="<?php echo get_field('icon');?>"></i></span>
                    </div>
                    <div class="services__text ">
                        <h2 class="text-white text-[1.7rem] font-semibold uppercase lg:text-center lg:text-[1.7rem]  lg:p-[.5rem]"> <?php the_title();?></h2>
                        <p class ="text-white text-justify max-w-[20rem] lg:text-center lg:text-[1.1rem]"> <?php echo get_the_excerpt(); ?></p>
                    </div>
                </div>
                <?php 
                    endwhile;
                        else:
                        echo "no available content";
                        endif;
                        wp_reset_postdata();

                 ?>
                    </div>
            </div>
            </div>
        </div>
</section>

<section class="contact bg-gray lg:bg-[url('<?php echo get_template_directory_uri(); ?>img/background.png')] bg-no-repeat bg-cover" id="contact">
        <div class="lg:bg-[rgb(36,36,36,0.5)]">
            <div class="container">
                <div class="contact__title flex items-center justify-center">
                    <h1 class="text-yellow text-[3rem] font-semibold"><?php echo get_field('h1_contact'); ?></h1>
                </div>
                <div class="contact__wrapper lg:flex lg:gap-[3rem]">
                    <div class="contact__left">
                        <small class="text-yellow text-[1.5rem] font-semibold mx-[1rem]"><?php echo get_field('small_hire'); ?></small>
                    <p class="text-white text-[1.2rem] mx-[1rem] lg:max-w-[40rem]"><?php echo get_field('contact_content'); ?></p>
                    <div class="socmed py-[2rem] mx-[1rem] lg:py-[8rem]">
                      <ul class="flex flex-col text-white">
                        <li class="text-[1.5rem]"><i class="fa-solid fa-phone"></i><span class="text-[1.2rem] mx-[1rem]"><?php echo get_field('contact_number'); ?></span></li>
                        <li class="text-[1.5rem] py-[.5rem] lg:my-[3rem]"><i class="fa-solid fa-envelope"></i><span class="text-[1.2rem] mx-[1rem]"><?php echo get_field('email'); ?></span></li>
                        <li class="text-[1.5rem]"><i class="fa-solid fa-location-dot"></i><span class="text-[1.2rem] mx-[1.2rem]"><?php echo get_field('address'); ?></span></li>
                      </ul>
                    </div>
                    </div>
                    <div class="send__message">
                    <h1 class="text-yellow text-[1.5rem] font-semibold text-center lg:text-left"><?php echo get_field('contact_sendmess'); ?></h1>
                            <div class="info items-center py-[1rem] gap-[1rem]">
                                <form action="" class="lg:flex lg:flex-col  ">
                                        <?php echo do_shortcode('[contact-form-7 id="113" title="Untitled"]')?>
                                </form>
                            </div>
                    </div>
            </div>
            </div>
        </div>
</section>

<?php get_footer(); ?>   

<button id="to-top-button" onclick="goToTop()" title="Go To Top"
    class="hidden fixed z-50 bottom-10 right-10 p-4 border-0 w-14 h-14 rounded-full shadow-md  bg-white lg:hover:bg-yellow text-black text-lg font-semibold transition-colors duration-300">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
        <path d="M12 4l8 8h-6v8h-4v-8H4l8-8z" />
    </svg>
    <span class="sr-only">Go to top</span>
</button>

<script>
    var slider = tns({
      container: '.my-slider',
      items: 1,
      responsive: {
        640: {
          edgePadding: 20,
          gutter: 20,
          items: 2
        },
        700: {
          gutter: 30
        },
        900: {
          items: 3
        }
      }
    });
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<script type="module">
  import {tns} from './src/tiny-slider.js';

  var slider = tns({
    container: '.my-slider',
    items: 3,
    slideBy: 'page',
    autoplay: true
  });
</script>

<script>
    const proj_nav =document.querySelectorAll(".proj-link");
    const proj_content =document.querySelectorAll(".proj-display");
proj_nav.forEach((star) => {
    star.addEventListener("click", () => {
    removeActiveStar();
    star.classList.add("active");
    const activeContent= document.querySelector(`#${star.id}-content`);
    removeActiveContent();
    activeContent.classList.add("active");
  })
})

function removeActiveStar(){
    proj_nav.forEach((star) => {
    star.classList.remove("active");
  })
}

function removeActiveContent(){
    proj_content.forEach((star) => {
    star.classList.remove("active");
  })
}

const toggleMenu = document.querySelector(".toggle__menu");
const headerBot = document.querySelector(".header__nav ul");
const closing = document.querySelector(".header__nav ul li a")
toggleMenu.addEventListener("click", () => {
toggleMenu.classList.toggle("open");
headerBot.classList.toggle("open");
headerBot.style=("transition: .5s ease");
});

const actclosing = document.querySelectorAll(".closed");
actclosing.forEach((sara) => {
    sara.addEventListener("click", () => {
    removeActiveclose();
    sara.classList.add("active");
    headerBot.classList.remove("open");
    toggleMenu.classList.remove("open");
    headerBot.style=("transition: .5s ease");
  })
});
function removeActiveclose(){
    actclosing.forEach((sara) => {
    sara.classList.remove("active");
  })
};




const spotify = document.querySelectorAll(".footer__item h4")
spotify.forEach((song) => {
        song.addEventListener("click", () => {
        song.nextElementSibling.classList.toggle("open");
        song.querySelector("i").classList.toggle("open");
    })
});

var slider = tns({
    container: '.my-slider',
    items: 1,
    slideBy: 'page',
    autoplay: true,
    controls: false,
  });

  var slider = tns({
    container: '.my-slider1',
    items: 1,
    slideBy: 'page',
    autoplay: true,
    controls: false,
  });

var toTopButton = document.getElementById("to-top-button");

    // When the user scrolls down 200px from the top of the document, show the button
    window.onscroll = function () {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            toTopButton.classList.remove("hidden");
        } else {
            toTopButton.classList.add("hidden");
        }
    }

    // When the user clicks on the button, smoothy scroll to the top of the document
    function goToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth', });
        removeActiveclose();
        const home = document.querySelector('.home_link');
        home.classList.add('active');
    }
</script>
