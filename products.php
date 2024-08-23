<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Our Products</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="product-list">
            <?php
            $sql = "SELECT id, name, price, image FROM products";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="product">';
                    echo '<img src="' . $row["image"] . '" alt="' . $row["name"] . '">';
                    echo '<h3><a href="product.php?id=' . $row["id"] . '">' . $row["name"] . '</a></h3>';
                    echo '<p>$' . $row["price"] . '</p>';
                    echo '</div>';
                }
            } else {
                echo "No products found.";
            }
            ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 My E-Commerce Site</p>
    </footer>
</body>
</html>
