<!-- display a list of categories -->
<nav>
    <h2>Categories</h2>
    <ul>
    <?php foreach ($categories as $category) : ?>
        <li>
            <a href="?category_id=<?php echo $category['categoryID']; ?>">
                <?php echo htmlspecialchars($category['categoryName']); ?>
            </a>
        </li>
    <?php endforeach; ?>
    </ul>
</nav>