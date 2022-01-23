<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <title><?php 
        wp_title('|', true, 'right');
        bloginfo('name');
    ?></title>

    <meta name="title" content="" />
    <meta name="description" content="" />
    <meta property="og:locale" content="vi" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Trang chủ" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="THUỐC Y HỌC" />
    <meta property="og:title" content="THUỐC Y HỌC">
    <meta property="og:image" content="<?php echo DTTL_THEME_URL_IMG; ?>/webImage.jpg" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <?php wp_head(); ?>
    <?php $default_posts_per_page = get_option( 'posts_per_page' ); ?>

</head>

<body>
<a name='gotop'></a>
<?php
wp_body_open();
?>
