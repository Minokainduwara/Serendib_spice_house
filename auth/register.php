<?php require "../includes/header.php" ?>
<?php require "../config/config.php" ?>

<?php
if (isset($_SESSION['username'])) {
    header("location: " . APPURL . "");
}

if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])) {
        echo "<script>alert('One or more inputs are empty');</script>";
    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $insert = $conn->prepare("INSERT INTO users (username, email, mypassword) 
            VALUES (:username, :email, :mypassword)");

        $insert->execute([
            ':username' => $username,
            ':email' => $email,
            ':mypassword' => password_hash($password, PASSWORD_DEFAULT),
        ]);

        header("location: login.php");
    }
}
?>

<div class="container mt-5">
    <section class="mb-4">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Register</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Create your account to get started. Fill in the information below.</p>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="register.php">

                    <!-- Username -->
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" id="username" name="username" class="form-control" required>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input type="password" name="password" id="inputPassword" class="form-control" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary w-100">Register</button>
                    </div>

                </form>
            </div>
        </div>

    </section>
</div>

<?php require "../includes/footer.php" ?>
