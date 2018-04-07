<?php

function wp_bs_pagination($pages = '', $range = 4) {
    global $paged;

    $showitems = ($range * 2) + 1;
    if(empty($paged)) $paged = 1;

    if($pages == '') {
        global $wp_query;

        $pages = $wp_query->max_num_pages;
        if(!$pages) {
            $pages = 1;
        }
    }

    if(1 != $pages) {

        echo '<nav><ul class="pagination justify-content-center mb-5">';

        if($paged > 2 && $paged > $range+1 && $showitems < $pages)
            echo "<li class='page-item'><a class='page-link' href='".get_pagenum_link(1)."' aria-label='First'>&laquo;<span class='hidden-xs'> First</span></a></li>";

        if($paged > 1 && $showitems < $pages)
            echo "<li class='page-item'><a class='page-link' href='".get_pagenum_link($paged - 1)."' aria-label='Previous'>&lsaquo;<span class='hidden-xs'> Previous</span></a></li>";

        for ($i=1; $i <= $pages; $i++) {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
                echo ($paged == $i)? "<li class=\"page-item active\"><span class='page-link'>".$i." <span class=\"sr-only\">(current)</span></span></li>":"<li class='page-item'><a class='page-link' href='".get_pagenum_link($i)."'>".$i."</a></li>";
            }
        }

        if ($paged < $pages && $showitems < $pages)
            echo "<li class='page-item'><a class='page-link' href=\"".get_pagenum_link($paged + 1)."\"  aria-label='Next'><span class='hidden-xs'>Next </span>&rsaquo;</a></li>";

        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages)
            echo "<li class='page-item'><a class='page-link' href='".get_pagenum_link($pages)."' aria-label='Last'><span class='hidden-xs'>Last </span>&raquo;</a></li>";

        echo "</ul></nav>";
    }
}
