<?php
if (!session_id()) {
    session_start();
}

remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action('wp_head', 'wp_generator');



add_action( 'admin_menu', 'default_published_oprf' );
function default_published_oprf() 
{
    global $submenu;
    foreach( $submenu['edit.php'] as $key => $value )
    {
        if( in_array( 'edit.php', $value ) )
        {
            $submenu['edit.php'][ $key ][2] = 'edit.php?post_status=publish&post_type=post';
        }
    }
}

if (!current_user_can('edit_others_posts')) { add_filter('show_admin_bar', '__return_false'); }




function post_remove ()      //creating functions post_remove for removing menu item
{ 
   remove_menu_page('edit.php');
   remove_menu_page('edit-comments.php');
}

add_action('admin_menu', 'post_remove');




function remove_page_attribute_meta_box()
{
    if( is_admin() ) {
        if( current_user_can('editor') ) {
            remove_meta_box('pageparentdiv', 'page', 'normal');
        }
    }
}
add_action( 'admin_menu', 'remove_page_attribute_meta_box' );

/*-------------------------------------------------------------------------------
	Custom Columns
-------------------------------------------------------------------------------*/
/*
function my_page_columns($columns)
{
    $columns = array(
        'cb'	 	=> '<input type="checkbox" />',
        'thumbnail'	=>	'Thumbnail',
        'title' 	=> 'Title',
        'featured' 	=> 'Featured',
        'author'	=>	'Author',
        'date'		=>	'Date',
    );
    return $columns;
}

function my_custom_columns($column)
{
    global $post;
    if($column == 'thumbnail')
    {
        echo wp_get_attachment_image( get_field('main_img', $post->ID), array(200,200) );
    }
    elseif($column == 'featured')
    {
        if(get_field('featured'))
        {
            echo 'Yes';
        }
        else
        {
            echo 'No';
        }
    }
}

add_action("manage_pages_custom_column", "my_custom_columns");
add_filter("manage_edit-page_columns", "my_page_columns");
*/



$trans = array("Январь" => "января",
               "Февраль" => "февраля",
               "Март" => "марта",
               "Апрель" => "апреля",
               "Май" => "мая",
               "Июнь" => "июня",
               "Июль" => "июля",
               "Август" => "августа",
               "Сентябрь" => "сентября",
               "Октябрь" => "октября",
               "Ноябрь" => "ноября",
               "Декабрь" => "декабря");


/* Remove Contact Form 7 Links from dashboard menu items if not admin */
    if (!(current_user_can('administrator'))) {
	function remove_wpcf7() {
	    remove_menu_page( 'wpcf7' ); 
	}

	add_action('admin_menu', 'remove_wpcf7');
     }



function remove_menus(){
  
  remove_menu_page( 'index.php' );                  //Dashboard
  remove_menu_page( 'edit.php' );                   //Posts


  remove_menu_page( 'edit-comments.php' );          //Comments
 // remove_menu_page( 'themes.php' );                 //Appearance


 // remove_menu_page( 'tools.php' );                  //Tools

  
}
add_action( 'admin_menu', 'remove_menus' );


function NewsConvertDate($date)
{
    list($y, $m, $d)  = explode('-', $date);
    $month_str = array(
        'января', 'февраля', 'марта',
        'апреля', 'мая', 'июня',
        'июля', 'августа', 'сентября',
        'октября', 'ноября', 'декабря'
    );
    $month_int = array(
        '01', '02', '03',
        '04', '05', '06',
        '07', '08', '09',
        '10', '11', '12'
    );

    // Замена числового обозначения месяца на словесное (склоненное в падеже)
    $m = str_replace($month_int, $month_str, $m);
    // Формирование окончательного результата
    if ($d[0] == 0) $d = $d[1];
    return $d.' '.$m.' '.$y.' г.';

}




function custom_pagination($numpages = '', $pagerange = '', $paged='') {

    if (empty($pagerange)) {
        $pagerange = 2;
    }

    /**
     * This first part of our function is a fallback
     * for custom pagination inside a regular loop that
     * uses the global $paged and global $wp_query variables.
     *
     * It's good because we can now override default pagination
     * in our theme, and use this function in default quries
     * and custom queries.
     */
    global $paged;
    if (empty($paged)) {
        $paged = 1;
    }
    if ($numpages == '') {
        global $wp_query;
        $numpages = $wp_query->max_num_pages;
        if(!$numpages) {
            $numpages = 1;
        }
    }

    /**
     * We construct the pagination arguments to enter into our paginate_links
     * function.
     */
    $pagination_args = array(
        'base'            => get_pagenum_link(1) . '%_%',
        'format'          => 'page/%#%',
        'total'           => $numpages,
        'current'         => $paged,
        'show_all'        => False,
        'end_size'        => 1,
        'mid_size'        => $pagerange,
        'prev_next'       => True,
        'prev_text'       => __('&laquo;'),
        'next_text'       => __('&raquo;'),
        'type'            => 'plain',
        'add_args'        => false,
        'add_fragment'    => ''
    );

    $paginate_links = paginate_links($pagination_args);

    if ($paginate_links) {
        ?>
        <div class="paging">
            <ul class="paging-list">
               <!-- <li class="disabled"><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>

                -->
                <?php echo $paginate_links;?>
            </ul>
              <span class="caption">Показано <?php echo $paged; ?> из <?php echo $numpages;?></span>
        </div>
<?php

    }

}