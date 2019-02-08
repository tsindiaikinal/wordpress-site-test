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

        return $content . $view_film_field;
}
?>
