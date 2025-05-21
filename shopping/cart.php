<?php
require "../includes/header.php";
require "../config/config.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // redirect if not logged in
    exit;
}

$user_id = $_SESSION['user_id'];

// Fetch all cart items for this user
$stmt = $conn->prepare("SELECT * FROM cart WHERE user_id = :user_id");
$stmt->execute([':user_id' => $user_id]);
$cartItems = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<div class="container mt-5">
    <h2>Your Shopping Cart</h2>
    <?php if (count($cartItems) == 0): ?>
        <p>Your cart is empty.</p>
    <?php else: ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $grandTotal = 0;
                foreach ($cartItems as $item): 
                    $total = $item->pro_price * $item->pro_amount;
                    $grandTotal += $total;
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($item->pro_name); ?></td>
                    <td><img src="../images/<?php echo htmlspecialchars($item->pro_image); ?>" width="70" alt=""></td>
                    <td>$<?php echo number_format($item->pro_price, 2); ?></td>
                    <td>
                        <form method="post" action="update-item.php" style="display:inline-block;">
                            <input type="hidden" name="cart_id" value="<?php echo $item->id; ?>">
                            <input type="number" name="pro_amount" value="<?php echo $item->pro_amount; ?>" min="1" style="width:60px;">
                            <button type="submit" class="btn btn-sm btn-primary">Update</button>
                        </form>
                    </td>
                    <td>$<?php echo number_format($total, 2); ?></td>
                    <td>
                        <form method="post" action="delete-item.php" onsubmit="return confirm('Remove this item?');" style="display:inline-block;">
                            <input type="hidden" name="cart_id" value="<?php echo $item->id; ?>">
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="4" class="text-right"><strong>Grand Total:</strong></td>
                    <td colspan="2"><strong>$<?php echo number_format($grandTotal, 2); ?></strong></td>
                </tr>
            </tbody>
        </table>

        <form method="post" action="delete-all-item.php" onsubmit="return confirm('Clear entire cart?');">
            <button type="submit" class="btn btn-danger">Clear Cart</button>
        </form>
    <?php endif; ?>
</div>

<?php require "../includes/footer.php"; ?>
