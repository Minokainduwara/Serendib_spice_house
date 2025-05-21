<?php

require "../includes/header.php";
require "../config/config.php";
session_start();
$payment_success = false;
$card_number = $expiry_date = $cvv = $card_name = $price = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $card_number = htmlspecialchars($_POST['card_number']);
    $expiry_date = htmlspecialchars($_POST['expiry_date']);
    $cvv = htmlspecialchars($_POST['cvv']);
    $card_name = htmlspecialchars($_POST['card_name']);
    $price = htmlspecialchars($_POST['price']);
    $payment_success = true;
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Card Payment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f4f6f8;
    }
    .payment-box {
      background: white;
      border-radius: 10px;
      padding: 30px;
      max-width: 500px;
      margin: 50px auto;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    .card-icons img {
      height: 32px;
      margin-right: 10px;
    }
    .form-control:valid {
      border-color: green;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="payment-box border">
    <?php if ($payment_success): ?>
      <div class="alert alert-success text-center">
        <h4 class="alert-heading">Payment Successfully!</h4>
        <p>Thank you, <strong><?= $card_name ?></strong>. Your payment of <strong>$<?= $price ?></strong> has been submitted.</p>
        <hr>
        <p class="mb-1"><strong>Card Number:</strong> <?= $card_number ?></p>
        <p class="mb-1"><strong>Expiry Date:</strong> <?= $expiry_date ?></p>
        <p class="mb-1"><strong>CVV:</strong> <?= $cvv ?></p>
      </div>
      <div class="text-center mt-3">
        <a href="<?= $_SERVER['PHP_SELF'] ?>" class="btn btn-primary">Make Another Payment</a>
      </div>
    <?php else: ?>
      <h5 class="fw-bold mb-3">PAYMENT METHOD</h5>
      <div class="mb-3">
        <label class="fw-semibold mb-1">CREDIT / DEBIT CARD</label>
        <div class="card-icons mb-2">
          <img src="https://img.icons8.com/color/48/visa.png"/>
          <img src="https://img.icons8.com/color/48/mastercard.png"/>
          <img src="https://img.icons8.com/color/48/amex.png"/>
        </div>
        <p class="text-muted small">You may be directed to your bank's 3D secure process to authenticate your information.</p>
      </div>

      <form method="POST">
        <div class="mb-3">
          <label class="form-label">Price (USD)</label>
          <input type="number" step="0.01" name="price" class="form-control" placeholder="Enter amount" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Card number</label>
          <input type="text" name="card_number" class="form-control" maxlength="19" required placeholder="•••• •••• •••• ••••">
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label class="form-label">Expiry date</label>
            <input type="text" name="expiry_date" class="form-control" placeholder="MM/YY" required>
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">CVC / CVV</label>
            <input type="text" name="cvv" class="form-control" maxlength="4" required>
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Name on card</label>
          <input type="text" name="card_name" class="form-control" required>
        </div>

        <div class="d-grid">
          <button type="submit" class="btn btn-primary">Pay Now</button>
        </div>
      </form>
    <?php endif; ?>
  </div>
</div>
<?php include "../includes/footer.php"; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>