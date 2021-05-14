<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/products.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Products</title>
</head>
<!-- <body style="background-color: #212529; color: white;"> -->
    <body>
      <?php
      include 'header.php';
      ?>
      <div id="navbar">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark py-3">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.html">FSWD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container ml-auto">
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="products.html">Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="javascript.html">Javascript</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
              </ul>
            </div>
          </div>
          </div>
        </nav>
      </div>
    
      <!-- Slides -->
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img style="width: 1080px; height: 720px;" src="../assets/img/1.jpg" class="d-block w-100" alt="Slide Images">
          </div>
          <div class="carousel-item">
            <img style="width: 1080px; height: 720px;" src="/assets/img/2.jpg" class="d-block w-100" alt="Slide Images">
          </div>
          <div class="carousel-item">
            <img style="width: 1080px; height: 720px;" src="/assets/img/3.jpg" class="d-block w-100" alt="Slide Images">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- Slides End -->

      <!-- Main Content Start -->

    <div class="container py-3 text-center">
        <h2>Why choose us ?</h2>
        <div style="color: black;" class="row">
            <div class="col-lg-4">   
                <div class="card">
                    <img src="/assets/img/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <img src="/assets/img/2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <img src="/assets/img/3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                  <img src="/assets/img/3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
              </div>
          </div>
        </div>
    </div>

        <div class="container-fluid">
            <hr>
        </div>
    
    
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-6">
                <h3>This is about us</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum repellat libero asperiores exercitationem officia velit beatae! Dignissimos, ipsam fugiat dolor deserunt at consequatur inventore quia, quaerat alias officiis consequuntur corrupti doloribus nemo nisi repudiandae, minus voluptatum cumque omnis assumenda quam? Quas, officia fugit. Minima ut tenetur rem, architecto facere laboriosam eum unde quisquam nihil repudiandae consequatur expedita nulla, voluptas dicta? Eius at similique aliquid id blanditiis? Ea voluptate doloribus dolorum dignissimos. Doloribus omnis perferendis at veniam ipsa quas esse natus eligendi laudantium, assumenda accusantium, nam iste fugiat officia asperiores unde vero, voluptatum similique sed rerum dolorum velit! Aperiam, saepe natus?</p>
            </div>
            <div class="col-lg-6">
                <img style="width: 300px; height: 300px;" src="assets/img/faq.jpg">
            </div>
        </div>
    </div>


    <div class="container mt-5 mb-5">
        <iframe width="1080" height="720" src="https://www.youtube.com/embed/C7Nu7fdSXl0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="container-fluid sticky-img mt-5 mb-5 text-center">
        <h1>Thank You for visiting our Website</h1>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-6">
                <form action="products.php" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="fswd@example.com">
                      </div>
                      <div class="mb-3">
                        <label for="message" class="form-label">Example textarea</label>
                        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <div class="mb-3">
                          <label for="name" class="form-lable">Your Full Name</label>
                          <input name="name" class="form-control" type="text" for="name">
                      </div>
                      <div class="mb-3">
                          <button class=" btn-thm" type="submit" > Submit your form</button>
                      </div>
                    </form>
            </div>
            <div class="col-lg-6">
                <h3>Fill your Contact Form</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quae eveniet, sunt voluptates nobis quod ducimus nihil accusantium dolorem aliquam officiis quisquam quia ipsum fugiat nisi odit eius debitis, error facilis aut doloribus eos. Porro tenetur obcaecati quam aperiam libero, ipsam, praesentium rem quia totam dolorem dolore vero et cum!</p>
            </div>
        </div>
        
    </div>
    
<!-- <script>
  window.onscroll = function() {myfunction()};
  var navbar = document.getelementById("navbar");

  var sticky = navbar.offsetTop;

  function myfunction() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky")
    }
    else {navbar.classList.remove("sticky");
    }
  }
</script> -->
<script src="assets/js/products.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
</body>
</html>