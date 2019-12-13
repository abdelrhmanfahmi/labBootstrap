<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap2</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style type="text/css">
  .navbar-nav .nav-item .nav-link:hover {
    color: yellow;
  }
  @media (max-width: 757px){
    .navbar{
      background-color: black !important;
    }
  }

</style>
<script type="text/javascript">
   $(document).ready(function(){
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if (scroll > 300) {
      $(" .navbar-dark").css("background" , "blue");
    }

    else{
      $(".navbar-dark").css("background" , "#333");   
    }
  })
})
</script>
</script>
</head>
<body>
	
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/hero_2.jpg" class="d-block w-100" style="filter: brightness(60%);" alt="...">
      <div class="carousel-caption d-none d-md-block">
      	<div class="font-weight-bolder">
      	<p>A Website Template By Colorlib</p>
        <h1 style="margin-bottom: 250px">We Create Awesome Stuff</h1>

    </div>
      </div>
    </div>
    <!--Start Navigation Bar-->
   		<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-transparent">
  <a class="navbar-brand" href="#">CARDBOARD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto mx-auto">
      <li class="nav-item active text-warning">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a id="links" class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SERVICES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">PROJECTS</a>
      </li>
       <li class="nav-item">
        <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">CONTACT_US</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0 d-none d-md-block">
      <input class="form-control border-top-0 border-right-0 border-left-0 mr-sm-2 bg-transparent" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    <!--End Navigation Bar-->
    <div class="carousel-item">
      <img src="images/person_2.jpg" class="d-block w-100" style="filter: brightness(60%)" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div class="font-weight-bolder">
      	<p>A Website Template By Colorlib <br> In Second Page</p>
        <h1 style="margin-bottom: 250px">We Create Awesome Stuff In Second Page</h1>
    </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/work_2.jpg" class="d-block w-100" style="filter: brightness(60%)" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div class="font-weight-bolder">
      	<p>A Website Template By Colorlib<br>In Third Page</p>
        <h1 style="margin-bottom: 250px">We Create Awesome Stuff In Third Page</h1>
    </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/work_1.jpg" class="d-block w-100" style="filter: brightness(60%)" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div class="font-weight-bolder">
      	<p>A Website Template By Colorlib<br>In Fourth Page</p>
        <h1 style="margin-bottom: 300px">We Create Awesome Stuff In Fourth Page</h1>
    </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<br>

<div class="container">
	<div class="row">
		<div class="col-md-12 text-center font-weight-bolder">
			<h1>Latest Work</h1>
		</div>
		<div class="col-md-12 text-center ">
			<p>Lorem Ipsum dolor sit amet consectetur adipicing elite . blandities accumsamus <br>perferendis libero accumsamus nisi</p>
		</div>
		<div class="col-md-12 text-center text-warning">
			<h6>View All Portfolio</h6>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row p-3">
		<div class="col-md-6">
			<img src="images/work_1.jpg" class="img-fluid">
		</div>
		<div class="col-md-6">
			<img src="images/work_2.jpg" class="img-fluid">
		</div>
	</div>
	<div class="row p-3">
		<div class="col-md-6">
			<img src="images/work_3.jpg" class="img-fluid">
		</div>
		<div class="col-md-6">
			<img src="images/work_4.jpg" class="img-fluid">
		</div>
	</div>
</div>
<br>
<br>



<div class="container">
  <div class="row">
    <div class="col-md-6">
      <img src="images/about_1.jpg " class="img-fluid">
    </div>
    <div class="col-md-6">
      <div class="card-block">
        <h5 class="card-title text-warning">Who We Are</h5>
        <h5 class="card-text">Do Things That Matters.Plan Great Grow</h5>
        <p class="card-text"><small class="text-muted">ikhfdjihdsiknksdndsjndsksdnojdodjsdkonsd<br> ksnsdknsdksdnksdnksdbnsdkbdskbsdksdbksbsd<br>dshsdikshdkibksjbskjbsdjdsbjsdbsdjbsdjsdbsdj</small></p>
        <button class="btn btn-outline-dark">Learn More</button>
      </div>
    </div>
  </div>
</div>

<br>
<br>


<!-- <div class="container-fluid">
	<div class="row">
		<img src="images/dotted.jpg" width="60px" height="200px;">
<div class="card mb-12 border-0" style="max-width: 540px;">

  <div class="row">

    <div class="col-md-4">
      <img src="images/about_1.jpg" class="card-img">
    </div>
    <div class="col-md-8">
      <div class="card-block">
        <h5 class="card-title text-warning">Who We Are</h5>
        <h5 class="card-text">Do Things That Matters.Plan Great Grow</h5>
        <p class="card-text"><small class="text-muted">ikhfdjihdsiknksdndsjndsksdnojdodjsdkonsd<br> ksnsdknsdksdnksdnksdbnsdkbdskbsdksdbksbsd<br>dshsdikshdkibksjbskjbsdjdsbjsdbsdjbsdjsdbsdj</small></p>
        <button class="btn btn-outline-dark">Learn More</button>
      </div>
    </div>
  </div>
</div>
</div>
</div> -->
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <img src="iconfinder_drinks__glass__cheers__food__3653391.png">
      <h3 class="text-danger">Drinks</h3>
      <p>Hi hello how are</p>
    </div>
    <div class="col-md-3">
      <img src="iconfinder_drinks__glass__cheers__food__3653391.png">
      <h3 class="text-danger">Drinks</h3>
      <p>Hi hello how are</p>
    </div>
    <div class="col-md-3">
      <img src="iconfinder_drinks__glass__cheers__food__3653391.png">
      <h3 class="text-danger">Drinks</h3>
      <p>Hi hello how are</p>
    </div>
    <div class="col-md-3">
      <img src="iconfinder_drinks__glass__cheers__food__3653391.png">
      <h3 class="text-danger">Drinks</h3>
      <p>Hi hello how are</p>
    </div>
  </div>
</div>
<br>
<br>

<div class="bg-light">
  <div class="container p-5">
    <div class="row">
        <div class="col-md-12 text-center">
          <h1>Testimonial</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
          <div class="card mb-3 border-0 bg-light" style="max-width: 540px;">
  <div class="row">
    <div class="col-md-4">
      <img src="images/person_2.jpg"  class="card-img rounded-circle" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
        </div>
         <div class="col-md-6">
            <div class="card mb-3 border-0 bg-light" style="max-width: 540px;">
  <div class="row">
    <div class="col-md-4">
      <img src="images/person_1.jpg"  class="card-img rounded-circle" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
        </div>
        </div>
    </div>
  </div>
</div>

<div class="bg-warning">
<div class="container p-5">
  <div class="row p-2">
    <div class="col-md-12 text-center text-light">
      <h3 class="font-weight-bolder">Let's Do More Together</h3>
    </div>
  </div>
  <div class="row p-2">
    <div class="col-md-12 text-center text-light">
      <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
    </div>
  </div>
  <div class="row p-2">
    <div class="col-md-12 text-center">
      <button class="btn btn-outline-light">Get IN Touch</button>
    </div>
  </div>
</div>
</div>
<div style="background-color: #FFD700">
  <div class="container p-5">
    <div class="row">
      <div class="col-md-4 ">
        <h5 class="font-weight-bold p-4">about craft</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,nsaklnkdnksdnksdndsknsdkjnsdksdnksdn</p>
      </div>
      <div class="col-md-4">
        <h5 class="font-weight-bold p-4">contact_info</h5>
        <p>Address:<br>
          34 Alasfra qbly, Alexandria state
          <br>Telephone:<br>
          +1 242 4942 290
          <br>Email:<br>
          info@salamsoftware.com
        </p>
      </div>
      <div class="col-md-4 ">
        <h5 class="font-weight-bold p-4">Quick links</h5>
        <a href="#" class="text-dark">About</a>
        <br>
        <a href="#" class="text-dark">Terms of use</a>
        <br>
        <a href="#" class="text-dark">Disclaimers</a>
        <br>
        <a href="#" class="text-dark">Contact</a>

      </div>
    </div>
    <div class="row p-5 mt-5">
      <div class="col-md-12 text-dark text-center">
        <p>Copyright @2019 All rights reserved | This Template Was Made With By <u>Colorlib</u></p>
      </div>
    </div>
  </div>
</div>
</body>
</html>