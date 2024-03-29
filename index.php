<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Phone Website</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
  <!-- <link rel="stylesheet" href="style.css"> -->
  <!-- <script src="https://kit.fontawesome.com/0c01c100fb.js" crossorigin="anonymous"></script> -->
  <link rel="stylesheet" href="/assets/css/all.min.css">
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/fontawesome.min.css">
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
  <div>
    <header>
       <!--  --------------------------------------------------------------------
                                   NAVBAR SECTION
        ----------------------------------------------------------------------->
      <nav class="container-fluid navbar navbar-expand-lg bg-body-tertiary fixed-top  ">
        <div class="container-fluid">
          <a class="navbar-brand kudas ms-5" href="#">Kudas</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarScroll">
            <ul class="navbar-nav  me-auto my-2 my-lg-4 navbar-nav-scroll text-uppercase text-bold m-auto fw-bold "
              id="navbar" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" id="home" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="link1" href="#">about</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="link2" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  project
                </a>

                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Calculator</a></li>
                  <li><a class="dropdown-item" href="#">Student Form</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Portfolio</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="link1" href="#">service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="link1" href="contact.html">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="link1" href="contact.php">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="link1" href="#">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="link1" href="#">Login</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
              <button id="search" class="btn btn-outline-info" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <!--  --------------------------------------------------------------------
                                   CAROUSEL SECTION
        ----------------------------------------------------------------------->
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/assets/image/studentABOUT.jpg" class="d-block w-100" alt="..." id="image_1">
          </div>
          <div class="carousel-item">
            <img src="/assets/image/studentHOME.jpg" class="d-block w-100 image-fluid " alt="..." id="image_1">
          </div>
          <div class="carousel-item">
            <img src="/assets/image/studentMARKETSTRATEGIES.jpg" class="d-block w-100" alt="..." id="image_1">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="prev">
          <span id="carousel" class="carousel-control-prev-icon  btn btn-primary p-3 rounded-circle"
            aria-hidden="true"></span>
          <span id="carousel" class="visually-hidden ">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="next">
          <span id="carousel" class="carousel-control-next-icon btn btn-primary p-4 rounded-circle "
            aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        <div class="carousel-caption d-none d-md-block d-inline-block" id="kudas">
          <h5 class="fs-4">Welcome to Kudas Website</h5>
          <p class="fs-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam incidunt nisi, sapiente sit accusamus
            perspiciatis doloribus reiciendis eius libero cumque laborum provident? Eveniet impedit vero, earum nam
            corrupti voluptatum in.</p>
            <div>
              <button id="ReadMore" type="submit">Read more</button>
            </div>
        </div>
      </div>
  </div>
  <div></div>
  </main>
   <!--  --------------------------------------------------------------------
                                   FOOTER SECTION
        ----------------------------------------------------------------------->

  <footer id="footer" class="bg-primry text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="http://www.facebook.com/isaiah.olumide.58"
          role="button"><i class="fab fa-facebook-f"></i></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/@Success32173931" role="button"><i
            class="fa fa-twitter"></i></a>

        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
          <i class="fa fa-google"></i></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
          <i class="fab fa-instagram"></i></a>

        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
          <i class="fa fa-linkedin-in"></i></a>

        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
          <i class="fa fa-github"></i></a>
      </section>
      <!-- Section: Social media -->

      <!-- Section: Form -->
      <section class="">
        <form action="">
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-auto">
              <p class="pt-2">
                <strong>Sign up for our newsletter</strong>
              </p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-5 col-12">
              <!-- Email input -->
              <div class="form-outline form-white mb-4">
                <input type="email" id="form5Example21" class="form-control" placeholder="Please Enter your Email" />
                <label class="form-label" for="form5Example21">Email address</label>
              </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-auto">
              <!-- Submit button -->
              <button type="submit" class="btn btn-outline-light mb-4">
                Subscribe
              </button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </form>
      </section>
      <!-- Section: Form -->

      <!-- Section: Text -->
      <section class="mb-4">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
          repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
          eum harum corrupti dicta, aliquam sequi voluptate quas.
        </p>
      </section>
      <!-- Section: Text -->

      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Our Service</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Kudas</a>
              </li>
              <li>
                <a href="#!" class="text-white">Kudas</a>
              </li>
              <li>
                <a href="#!" class="text-white">Kudas</a>
              </li>
              <li>
                <a href="#!" class="text-white">Kudas</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Blogs</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Kudas</a>
              </li>
              <li>
                <a href="#!" class="text-white">Kudas</a>
              </li>
              <li>
                <a href="#!" class="text-white">Kudas</a>
              </li>
              <li>
                <a href="#!" class="text-white">Kudas</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Project</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Kudas</a>
              </li>
              <li>
                <a href="#!" class="text-white">Kudas</a>
              </li>
              <li>
                <a href="#!" class="text-white">Kudas</a>
              </li>
              <li>
                <a href="#!" class="text-white">Kudas</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Kudas</a>
              </li>
              <li>
                <a href="#!" class="text-white">Kudas</a>
              </li>
              <li>
                <a href="#!" class="text-white">Kudas</a>
              </li>
              <li>
                <a href="#!" class="text-white">Kudas</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->


  </footer>
  <!-- Footer -->
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</body>

</html>
