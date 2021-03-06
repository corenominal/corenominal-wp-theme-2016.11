<?php
if ( ! defined( 'WPINC' ) ) { die('Direct access prohibited!'); }
/**
 *                                             _             _
 *     ___ ___  _ __ ___ _ __   ___  _ __ ___ (_)_ __   __ _| |
 *    / __/ _ \| '__/ _ \ '_ \ / _ \| '_ ` _ \| | '_ \ / _` | |
 *   | (_| (_) | | |  __/ | | | (_) | | | | | | | | | | (_| | |
 *    \___\___/|_|  \___|_| |_|\___/|_| |_| |_|_|_| |_|\__,_|_|
 *
 *   Webmaster: Philip Newborough
 *   Contact: corenominal [at] corenominal.org
 *   Twitter: @corenominal
 *   From: Lincoln, United Kingdom
 */
require get_template_directory() . '/meta.php';
?>
<div class="corenominal">
<header id="noggin" class="noggin">
    <div class="container barnet">
        <h2>corenominal</h2>
        <a href="<?php echo site_url(); ?>">
            <?xml version="1.0" encoding="UTF-8"?>
            <svg id="logo" class="logo" width="92px" height="89px" viewBox="0 0 92 89" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>Man on a rock, floating in space, waving</title>
                <defs></defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="logo" fill="#141414">
                        <path d="M35.2566616,18.706507 C15.8258716,18.706507 0.0367434565,34.4027028 0.0367434565,53.7191391 C0.0367434565,73.0355859 15.8258716,88.7324609 35.2566616,88.7324609 C54.6874621,88.7324609 70.4765797,73.0355859 70.4765797,53.7191391 C70.4765797,34.4027028 54.6874621,18.706507 35.2566616,18.706507 L35.2566616,18.706507 Z M35.2566616,22.1808964 C52.7986391,22.1808964 66.9816219,36.2803993 66.9816219,53.7191391 C66.9816219,71.157879 52.7986391,85.2580714 35.2566616,85.2580714 C17.7146841,85.2580714 3.53171185,71.157879 3.53171185,53.7191391 C3.53171185,36.2803993 17.7146841,22.1808964 35.2566616,22.1808964 Z" id="path4138-5-7"></path>
                        <path d="M81.7396393,0.17143944 C76.3239616,0.17143944 71.9114286,4.55799348 71.9114286,9.94180933 C71.9114286,15.3256147 76.3239616,19.7128583 81.7396393,19.7128583 C87.1553169,19.7128583 91.5678499,15.3256147 91.5678499,9.94180933 C91.5678499,4.55799348 87.1553169,0.17143944 81.7396393,0.17143944 Z M81.7396393,2.25606474 C86.022021,2.25606474 89.4708731,5.68461974 89.4708731,9.94180933 C89.4708731,14.1989885 86.022021,17.6282226 81.7396393,17.6282226 C77.457247,17.6282226 74.0084054,14.1989885 74.0084054,9.94180933 C74.0084054,5.68461974 77.457247,2.25606474 81.7396393,2.25606474 Z" id="path4172-8-2"></path>
                        <polygon id="path4174-2-6" points="74.4029476 15.7641291 64.9665571 24.1026616 66.3590837 25.6607187 75.7954742 17.3221757 74.4029476 15.7641291"></polygon>

                      <polygon id="waving-arm" points="66.0877354 8.11120099 64.2102313 9.0396328 69.83112 20.2779685 71.7087083 19.3502053"></polygon>

                      <polygon id="path4174-5-6-0-2" points="71.5550889 19.463825 70.651996 21.3455648 82.0454276 26.7532643 82.9485205 24.8715245"></polygon>
                        <polygon id="path4174-5-6-4-6-3" points="65.4425385 23.780358 62.0753567 35.8771149 64.095981 36.433219 67.4638354 24.3365666 65.4425385 23.780358"></polygon>
                        <polygon id="path4174-5-6-4-3-8-3" points="66.3310965 23.2489942 54.0946347 26.3413395 54.6113724 28.3615124 66.8471406 25.2691671"></polygon>
                    </g>
                </g>
            </svg>
        </a>

        <button id="hamburger" class="hamburger" type="button">
            <i class="fa fa-bars" aria-hidden="true"></i> Menu
        </button>

        <ul class="social">
            <li>
                <a href="https://twitter.com/corenominal" target="_blank">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    twitter
                </a>
            </li>
            <li>
                <a href="https://facebook.com/corenominal" target="_blank">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    facebook
                </a>
            </li>
            <li>
                <a href="https://github.com/corenominal" target="_blank">
                    <i class="fa fa-github" aria-hidden="true"></i>
                    github
                </a>
            </li>
            <li>
                <a href="https://codepen.io/corenominal" target="_blank">
                    <i class="fa fa-codepen" aria-hidden="true"></i>
                    codepen
                </a>
            </li>
        </ul>

        <form class="search-form" action="<?php echo site_url(); ?>" method="get">
            <input id="s" class="search-input" autocomplete="off" type="text" name="s" placeholder="" value="<?php the_search_query(); ?>">
            <i class="fa fa-search search-icon" aria-hidden="true"></i>
        </form>

    </div>

    <div class="site-menu-wrapper">
        <div class="container">
            <nav id="site-menu" class="site-menu">
            <?php
            /**
             * The header menu
             */
            wp_nav_menu( array( 'theme_location' => 'header-menu', 'link_before' => '<span>', 'link_after' => '</span>' ) );
            ?>
            </nav>
        </div>
    </div>


</header>
