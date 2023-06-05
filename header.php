<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Personal Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <?php wp_head();?>
</head>
<body>
    <header class="header bg-gray border-b-2 fixed w-full z-10">
        <div class="container">
            <div class="header__wrapper flex items-center justify-between z-[-1]">
                <div class="branding">
                    <img src="<?php echo get_template_directory_uri(); ?>./img/Logo Desktop.png" alt="" class="w-[5rem]">
                </div>
                    <div class="header__nav">
                        <ul class="lg:flex lg:items-center z-10">
                            <?php wp_menu_li(); ?>
                        </ul>
                    </div>
                    <div class="toggle__menu z-50 lg:hidden">
                        <span></span>
                        <span></span>
                        <span></span>   
                    </div>
            </div>
        </div>
    </header>

    