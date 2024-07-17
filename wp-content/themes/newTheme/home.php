<?php get_header() ?>
<?php 

if(have_posts()){
        while(have_posts()){
            the_post();
            the_title('<h3>',"</h3>");
            the_content();
            //you can use the_excerpt() instead of the_content();
        }
    }

?>
<?php get_footer() ?>