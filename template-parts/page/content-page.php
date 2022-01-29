<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>

<article>
 
 <?php the_title();?>
 <?php the_content();?>
 
 
 
 <?php wp_link_pages(array( 
 'before' => '<div class="page-links">' . __( 'Pages:', 'hello' ),
 'after'  => '</div>',
 
 
 
 
 ));?>






</article>