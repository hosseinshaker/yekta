<html dir="<?php bloginfo('text_direction') ?>" lang="<?php bloginfo('language') ?>">
<head>
    <?php
wp_head();
    ?>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , maximum-scale=1">
</head>
<body class="rtl">
<div class="main_wrap">
<div class="of-site-mask"></div>
<?php
get_template_part('template/menu');
?>