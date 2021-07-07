
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-3 pt-1">
            <a class="text-muted" href="index.php"><img src="assets/images/logo.png" width="50px"></a>
          </div>
          <div class="col-6 text-center">
            <nav class="nav d-md-flex justify-content-between d-none">
              <a class="p-2 text-muted" href="index.php">Home</a>
              <a class="p-2 text-muted" href="index.php?halaman=services">Services</a>
              <a class="p-2 text-muted" href="index.php?halaman=about">About Us</a>
              <a class="p-2 text-muted" href="index.php?halaman=contact">Contact Us</a>
            </nav>
          </div>
          <div class="col-3 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2 d-block d-md-none">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="#">Home</a>
          <a class="p-2 text-muted" href="#">Services</a>
          <a class="p-2 text-muted" href="#">About Us</a>
          <a class="p-2 text-muted" href="#">Contact Us</a>
        </nav>
      </div>

      <div class="space_top pb-3 mb-1" style="width: 100%; border-top:1px solid #dedede;">
      </div>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          
      <?php
      
        $halaman = @$_GET['halaman'];

        if ($halaman == 'services') {
          include ('services.php');
        }
        elseif ($halaman == 'contact') {
          include ('contact.php');
        }
        elseif ($halaman == 'about') {
          include ('about.php');
        }
        else {
          include ('home.php');
        }

      ?>

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar pb-3">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic mb-3">Siapakah Kami?</h4>
            <p class="mb-0 text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Artikel Berdasarkan Kategori</h4>
            <ol class="list-unstyled">
              <li><a href="#">HTML dan CSS</a></li>
              <li><a href="#">Javascript</a></li>
              <li><a href="#">Photoshop</a></li>
              <li><a href="#">Inspirasi</a></li>
              <li><a href="#">Berita</a></li>
              <li><a href="#">Off Topic</a></li>
            </ol>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Arsip</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">July 2021</a></li>
              <li><a href="#">June 2021</a></li>
              <li><a href="#">May 2021</a></li>
              <li><a href="#">April 2021</a></li>
              <li><a href="#">March 2021</a></li>
              <li><a href="#">February 2021</a></li>
              <li><a href="#">January 2021</a></li>
            </ol>
          </div>

        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->
  </div>

    <footer class="blog-footer pb-1 pt-3 text-center" style="background-color: rgba(62, 62, 62, 1); color: rgba(200, 200, 200, 1);">
      <p>Faiz Ulin Nuha © 2021</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
