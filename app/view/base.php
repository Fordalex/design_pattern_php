
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../app/static/css/style.css">
    <title><?php echo $title; ?></title>
</head>
<body>

    <nav>
        <ul>
            <li class="<?php echo isActive($page,'home'); ?>"><a href="?page=home">Home</a></li>
            <li class="<?php echo isActive($page,'contact'); ?>"><a href="?page=contact">Contact</a></li>
        </ul>
    </nav>

    <h3><?php echo $header_title; ?></h3>

    <main>
    <?php echo $main_content; ?>
    </main>
    
    <footer>
        <p>Footer</p>
    </footer>

</body>
</html>