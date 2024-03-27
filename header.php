<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
   
</head>
<body>


<header>

<?php
wp_nav_menu(
    array(
        'theme_location' => 'top-menu', // Specify the menu location
        'menu_class'     => 'top-menu', // Add the custom class
    )
);
?>


</header>

    
