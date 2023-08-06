<html dir="<?php bloginfo('text_direction') ?>" lang="<?php bloginfo('language') ?>">
<head>
    <?php
wp_head();
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , maximum-scale=1">
    <link href="Css/Main.css" rel="stylesheet" />
    <link href="Css/Menu.css" rel="stylesheet" />
    <link href="Css/Style.css" rel="stylesheet" />
    <link href="Css/owl.carousel.min.css" rel="stylesheet" />
    <link href="Css/owl.theme.min.css" rel="stylesheet" />
</head>
<body class="rtl">
<div class="main_wrap">
<div class="of-site-mask"></div>
<?php
get_template_part('template/menu');
?>