<?php include '../view/header.php'; ?>
<main>
    <aside>
        <!-- display a list of categories -->
        <?php include '../view/categories_nav.php'; ?>
    </aside>

    <section>
        <h1><?php echo htmlspecialchars($product_name); ?></h1>
        <p><b>List Price:</b> $<?php echo number_format($list_price, 2); ?></p>
        <p><img src="<?php echo $image_filename; ?>"
                alt="<?php echo htmlspecialchars($product_name); ?>"></p>
    </section>
</main>
<?php include '../view/footer.php'; ?>