<?php
/**
 * Created by PhpStorm.
 * User: shota
 * Date: 2019-07-16
 * Time: 23:40
 */

function enqueueStylesScripts() {
  wp_deregister_script('jquery'); // デフォルトのjquery消す
  wp_enqueue_style( 'theme-define-style', get_stylesheet_uri() ); // wpのテーマ定義のスタイルシート読む
  wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/dist/style.css' );
  wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '20181111', true );
  wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/dist/main.js', array('plugin-vega-scripts'), '20181111', true );

}
add_action( 'wp_enqueue_scripts', 'enqueueStylesScripts' );

// サムネイル機能の追加
add_theme_support( 'post-thumbnails' );