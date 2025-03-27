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
            <?php include 'includes/steps.php';?>
            <?php include 'includes/advantages.php';?>
            <?php include 'includes/info.php';?>
            <?php include 'includes/platforms.php';?>
            <?php include 'includes/trusted.php';?>
            <?php include 'includes/api2cart-info.php';?>
            <?php include 'includes/slider.php';?>
            <?php include 'includes/experience.php';?>
            <div class="support-ukraine">
                <div class="support-ukraine__text">Support Ukraine in its struggle against Russia’s invasion</div>
                <a href="#" class="support-ukraine__btn">Support Ukraine</a>
            </div>
        </main>
        <?php include 'includes/footer.php' ?>
    </div>
    <?php wp_footer(); ?>
</body>
</html>