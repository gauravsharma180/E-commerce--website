<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

include 'db.php';

// The rest of code for fetching product details and rendering the page
$productId = intval($_GET['id']);
$sql = "SELECT * FROM products WHERE id = $productId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $product = $result->fetch_assoc();
} else {
    echo "Product not found.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($product['name']); ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Product Detail</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="product-detail">
            <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
            <h2><?php echo htmlspecialchars($product['name']); ?></h2>
            <p>$<?php echo htmlspecialchars($product['price']); ?></p>
            <p><?php echo htmlspecialchars($product['description']); ?></p>
            <button>Add to Cart</button>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 My E-Commerce Site</p>
    </footer>
</body>
</html>
