<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/style.css">
    <title><?php echo $__env->yieldContent('judul'); ?></title>
    <style>
    body{
        background-color: #343a40;

    }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top ">
    <div class="container">
      <a class="navbar-brand" href="/">
        <span class="font-weight-bold text-dark">DATA MAHASISWA</span>
      </a>
      <button class="navbar-toggler navbar-toggler-right bg-dark" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
          <li class="nav-item active">
            <a class="nav-link text-dark" href="/">HOME</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <div class="main text-black">
        <?php echo $__env->yieldContent('konten'); ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="/main.js"></script>

  </body>
</html>
<?php /**PATH C:\xampp\htdocs\CRUD\resources\views/main.blade.php ENDPATH**/ ?>