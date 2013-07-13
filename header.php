<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6 no-js" lang="de"> <![endif]-->
<!--[if IE 7]><html class="ie7 no-js" lang="de"> <![endif]-->
<!--[if IE 8]><html class="ie8 no-js" lang="de"> <![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="de"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="de"> <!--<![endif]-->
<head>

    <meta charset="utf-8">

    <!-- If you want develop for mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title("",true); ?> - <?php bloginfo('name');?></title>

    <?php wp_head(); ?>

</head>

<body <?php body_class();?>>

<?php require_once(TEMPLATEPATH . '/partials/navigation.php'); ?>