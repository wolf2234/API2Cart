<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?></title>
</head>
<body>
    <div class="wrapper">
        <?php include 'includes/header.php';?>
        <?php include 'includes/sub-header.php';?>
        <main class="main">
            <?php include 'includes/advantages.php';?>
        </main>
        <?php include 'includes/footer.php' ?>
    </div>
    <?php wp_footer(); ?>
</body>
</html>