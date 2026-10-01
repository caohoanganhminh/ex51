<?php include('../view/header.php'); ?>
<main>
    <h2>Update Category</h2>

    <form action="." method="post">
        <input type="hidden" name="action" value="update_category">
        <input type="hidden" name="category_id"
               value="<?php echo $category['categoryID']; ?>">

        <label>Name:</label>
        <input type="text" name="category_name"
               value="<?php echo htmlspecialchars($category['categoryName']); ?>" required>
        <input type="submit" value="Update Category">
    </form>

    <p><a href=".?action=list_categories">Back to Category List</a></p>
</main>
<?php include('../view/footer.php'); ?>
