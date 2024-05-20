<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
    <title>Landing page</title>
</head>
<body>
<?php include'navbar.php';?>
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.pexels.com/photos/20582544/pexels-photo-20582544/free-photo-of-waves.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.pexels.com/photos/19602378/pexels-photo-19602378/free-photo-of-hands-holding-pizzas.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.pexels.com/photos/21795425/pexels-photo-21795425/free-photo-of-white-flowers-on-a-tree-branch-in-the-park.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<section class="my-5">
    <div class="about-section py-5">
        <h2 class="text-center">About Us</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 aboutimg py-5">
                <img src="https://images.pexels.com/photos/10295057/pexels-photo-10295057.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt="iamge" class="img-fluid">
                
            </div>
            <div class="col-lg-6 col-md-6 col-12 py-5">
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, iste?</h2>
                <p class="py-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi consequuntur magni voluptas maxime minima quidem iure ad quos porro itaque mollitia excepturi ea quis, nobis magnam aperiam quo harum ex cupiditate necessitatibus quisquam? Exercitationem, unde perspiciatis accusamus sint laudantium distinctio eaque nemo quia cum, similique qui suscipit ipsa neque. Enim ut totam dolore temporibus soluta mollitia, sit fuga incidunt quisquam possimus consequuntur quibusdam aut reprehenderit odit! Modi animi, repellat explicabo iusto quas voluptates minus </p>
                <button type="button" class="btn btn-info">check more</button>
                
            </div>

        </div>
    </div>
    
</section>

<!-- ==============card=================== -->
<section class="my-5 card-section">
    <div class="card-heading py-5 ">
        <h2 class="text-center">Products</h2>
    </div>
    <div class="card-holder container">
      <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
    <div class="card" style="width: 18rem;">
  <img src="images/item.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>

    <div class="col-lg-4 col-md-4 col-12">
    <div class="card" style="width: 18rem;">
  <img src="images/item.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>

        <div class="col-lg-4 col-md-4 col-12">
        <div class="card" style="width: 18rem;">
      <img src="images/item.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
        </div>

          </div>
    </div>   
</section>



<section class="contact-form container" >

  <div class="form-heading py-2 ">
        <h2 class="text-center">Contact Us</h2>
  </div>

  <div class="row formcontainer my-5">
    
      <div class="col-lg-6 col-md-12 col-12">
        <img src="images/item.jpg" alt="contactimage" style="width:100%">
      </div>

    <div class="col-lg-6 col-12">

      <form action="userinfo.php" method="POST">
       <div class="form-group my-2">
        <label>Username</label>
        <input type="text" name="username" autocomplete="off" class="form-control">
       </div>

        <div class="form-group my-2">
        <label>Email Id</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
        </div>

        <div class="form-group my-2">
        <label>Mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>

        <div class="form-group my-2">
        <label>Message Here</label>
        <textarea name="message" class="form-control" autocomplete="off"> </textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>

    </div>
  </div>
</section>

</body>
</html>