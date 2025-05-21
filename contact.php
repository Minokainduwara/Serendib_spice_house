<?php require "includes/header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us</title>
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
  <div class="page-content container py-5">

    <section class="mb-4">
      <!--Section heading-->
      <h2 class="h1-responsive font-weight-bold text-center my-4">Contact Us</h2>

      <!--Section description-->
      <p class="text-center w-responsive mx-auto mb-5">
        Do you have any questions? Please do not hesitate to contact us directly. Our team will get back to you within
        a matter of hours to help you.
      </p>

      <div class="row">
        <!-- Contact form column -->
        <div class="col-md-9 mb-md-0 mb-5">
          <form id="contact-form" name="contact-form" action="mail.php" method="POST">

            <div class="row mb-3">
              <div class="col-md-6 mb-3">
                <label for="name" class="form-label">Your name</label>
                <input type="text" id="name" name="name" class="form-control" required>
              </div>

              <div class="col-md-6 mb-3">
                <label for="email" class="form-label">Your email</label>
                <input type="email" id="email" name="email" class="form-control" required>
              </div>
            </div>

            <div class="mb-3">
              <label for="subject" class="form-label">Subject</label>
              <input type="text" id="subject" name="subject" class="form-control" required>
            </div>

            <div class="mb-3">
              <label for="message" class="form-label">Your message</label>
              <textarea id="message" name="message" rows="4" class="form-control" required></textarea>
            </div>

            <div class="text-start mt-4">
              <button type="submit" class="btn btn-primary">Send</button>
            </div>
          </form>
        </div>

        <!-- Contact info column -->
        <div class="col-md-3 text-center">
          <ul class="list-unstyled mb-0">
            <li><i class="fas fa-map-marker-alt fa-2x"></i>
              <p>San Francisco, CA 94126, USA</p>
            </li>
            <li><i class="fas fa-phone mt-4 fa-2x"></i>
              <p>+01 234 567 89</p>
            </li>
            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
              <p>contact@mdbootstrap.com</p>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Elfsight Banner | Untitled Banner -->
<script src="https://static.elfsight.com/platform/platform.js" async></script>
<div class="elfsight-app-073a2d86-581d-4df1-8746-0a8583b74ed8" data-elfsight-app-lazy></div>

  </div>

  <?php require "includes/footer.php"; ?>
</div>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
