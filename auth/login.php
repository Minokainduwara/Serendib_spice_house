<?php require "../includes/header.php" ?>
<?php require "../config/config.php" ?>

<?php
if (isset($_SESSION['username'])) {
    header("location: " . APPURL . "");
    exit;
}

if (isset($_POST['submit'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        echo "<script>alert('One or more inputs are empty');</script>";
    } else {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $login = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $login->execute([':email' => $email]);
        $fetch = $login->fetch(PDO::FETCH_ASSOC);

        if ($login->rowCount() > 0) {
            if (password_verify($password, $fetch['mypassword'])) {
                $_SESSION['username'] = $fetch['username'];
                $_SESSION['user_id'] = $fetch['id'];
                header("location: " . APPURL . "");
                exit;
            } else {
                echo "<script>alert('Password or email is incorrect');</script>";
            }
        } else {
            echo "<script>alert('Password or email is incorrect');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
        }

        .page-wrapper {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .page-content {
            flex: 1;
        }
    </style>
</head>
<body>
<div class="page-wrapper">
    <div class="page-content container d-flex align-items-center justify-content-center">
        <div class="row w-100">
            <div class="col-md-6 offset-md-3">
                <form class="form-control mt-5" method="POST" action="login.php">
                    <h4 class="text-center mt-3">Login</h4>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword" required>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mb-4" name="submit" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>

    <?php require "../includes/footer.php"; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
