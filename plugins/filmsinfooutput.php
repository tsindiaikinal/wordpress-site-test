<?php
/*
*Plugin Name: Film info output
*Plugin URI: http://страница_с_описанием_плагина_и_его_обновлений
*Description: Краткое описание плагина.
*Version: 1.0
*Author: Alekseii Ts.
*Author URI: http://**************++++
*License: GPLv2
*/
add_action('the_content', 'film_info_output' );
// Выводит информацию к фильму (цена, дата выхода)
function film_info_output($content) {
    $post_id = get_the_ID(); 
    if(($post_id != 159) && ($post_id != 158) && ($post_id != 153)) {
        $my_field_1 = get_field("price_of_session"); 
        $my_field_2 = get_field("date_release");
        $view_film_field = 
        '<div style="display: block;"><p class="price-of-session">Стоимость сеанса: <span class="price-of-session_cena">'.$my_field_1.'</span></p>'.'<p class="date-release">Дата выхода в прокат: <span class="data-release_date">'.$my_field_2.'</span></p>
        </div>';
        }
        // Вывод всех id и типов постов
//  $q = new WP_Query('posts_per_page=-1&post_type=any');
// if($q->have_posts()) :
// 	echo '<table><tr><th>ID</th><th>Тип поста</th></tr>';
// 	while($q->have_posts()) : $q->the_post();
// 		echo '<tr><td>' . $q->post->ID . '</td><td>' . get_post_type( $q->post->ID ) . '</td></tr>';
// 	endwhile;
// 	echo '</table>';
// endif;

// $post_id - ВЫВОДИТ id КАЖДЫЙ НА СВОЕЙ СТРАНИЦЕ КАК НОМЕР СТРАНИЦЫ если добавить в return

if($post_id == 91) {
    $post207 = get_post( 207 );
    $text207 = $post27->post_mime_type;
    $post98 = get_post( 98 );
    $text98 = $post98->post_content;
    $post96 = get_post( 96 );
    $text96 = $post96->post_content;
    $post76 = get_post( 76 );
    $text76 = $post76->post_content;
    $post74 = get_post( 74 );
    $text74 = $post74->post_content;
    $post71 = get_post( 71 );
    $text71 = $post71->post_content;
    $post44 = get_post( 44 );
    $text44 = $post44->post_content;
    $post37 = get_post( 37 );
    $text37 = $post37->post_content;
    $post33 = get_post( 33 );
    $text33 = $post33->post_content;
    
    // $posts = get_posts( array(
    //     'numberposts' => 20,
    //     'offset' => 1,
    //     'category'    => 'Фильмы',
    //     'category_name' => array('slug' => 'films'),
    //     'orderby'     => 'date',
    //     'order'       => 'DESC',
    //     'include'     => 207,98,96,76,74,71,44,37,33,
    //     'exclude'     => array(),
    //     'meta_key'    => '',
    //     'meta_value'  =>'',
    //     'post_type'   => 'cinema',
    //     'post_status' => 'inherit',
    //     'suppress_filters' => false,
    //     ) );
        
        return $text207 . $text98 . $text96 . $text76 . $text74 . $text71 . $text44 . $text37 . $text33;
    }
    
    return $content . $view_film_field; // $post_id
}

?>
