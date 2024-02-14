<?php
include("header.php");
?>
        <!-- navbar end -->
          <!-- scroller start -->
          <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active ">
                <img src="images/WhatsApp Image 2024-02-10 at 21.15.57_6ca4adb0.jpg" class="d-block w-100" alt="..." >
              </div>
              <div class="carousel-item  ">
                <img src="images/WhatsApp Image 2024-02-10 at 21.15.58_e5411402.jpg" class="d-block w-100" alt="..." >
              </div>
              <div class="carousel-item">
                <img src="images/slider-image-2-1920x700.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/slider-image-3-1920x700.jpg" class="d-block w-100" alt="...">
              </div>
              
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <!-- scroller end -->
<!-- about us -->
<div class="container mt-4 ">
  <div class="row text-center p-3 about ">
    <h1 class="fw-bold fs-1">About us </h1>
<p class="">New Kashi tourist company is a leading digital marketplace and solutions provider for the automotive industry that connects with vehical and tours services. Launched in 2012 and headquartered in varanasi, the Company empowers shoppers with the data, resources and digital tools needed to make informed buying decisions and seamlessly connect with automotive Travels.</p>
  </div>
</div>

<!-- about us end -->
<!-- offers -->
<div class="container-fluid ">
  <div class="row offer text-center justify-content-center" style="background-color:#F8F8F8 ;">
    <h1 class="mt-4">Offer</h1>
    <p class="">we provides Offer in the Every fairy season</p>
    <div class="col-md-4 ">
      
      <div class="card mt-4" style="width: 21rem; ">
      <img src="images/offer-1-720x480.jpg" class="card-img-top" alt="..." style="width: 16rem; ">
      <div class="card-body">
       
      <ul class="list-group list-group-flush">
        <li class="list-group-item">FAMILY CARS</li>
        <li class="list-group-item">from <span class="text-success fw-bold">$120</span> per weekend</li>
        <li class="list-group-item">He there you can enjoy your tour with your family happyly.</li>
      </ul>
      <div class="card-body">
        <a href="offer.php" class="offer-btn"><button>View Offer</button></a>
      </div>
    </div></div>
  </div>

  <div class="col-md-4">
      
    <div class="card mt-4" style="width: 21rem;">
    <img src="images/offer-2-720x480 .jpg" class="card-img-top" alt="...">
    <div class="card-body">
     
    <ul class="list-group list-group-flush">
      <li class="list-group-item">LUXURY & PRESTIGE CARS</li>
      <li class="list-group-item">from <span class="text-success fw-bold">$99</span> per weekend</li>
      <li class="list-group-item">We offers a luxurious van for you and for your trip...</li>
    </ul>
    <div class="card-body">
      <a href="offer.php" class="offer-btn"><button>View Offer</button></a>
    </div>
  </div></div>
</div>
<div class="col-md-3">
      
  <div class="card mt-4" style="width: 21rem;">
  <img src="images/offer-3-720x480.jpg" class="card-img-top" alt="..." style="width: 16rem; ">
  <div class="card-body">
   
  <ul class="list-group list-group-flush">
    <li class="list-group-item">TOP SELLERS</li>
    <li class="list-group-item">from <span class="text-success fw-bold">$110</span> per weekend</li>
    <li class="list-group-item">If clients want to take a booked car than, we are provide a car for your,.....</li>
  </ul>
  <div class="card-body">
    <a href="offer.php" class="offer-btn"><button>View Offer</button></a>
  </div>
</div></div>
</div>
  </div>
</div>
<!-- contact us -->
<div class="container-fluid contact">
           
  <div class="row mt-4 text-white justify-content-center"><div class="col-md-5">
    <h2 class="fw-bold mt-4">Contact us</h2>
    <h4>we love conversations. let us talk!</h4>
    <form action="javascript:sendmail()" method="post" class="form">
      <input type="text" name="Name" id="Name" placeholder="Enter Your full name"> <br> <br>
      <input type="number" name="Number" id="Number" placeholder="Enter your Phone No:"><br> <br>

       <input type="text" name="Email" id="Email" placeholder="Enter your Email"><br> <br>
      <textarea name="Message" id="Message" cols="30" rows="10" placeholder="Write your message!!"></textarea> <br> <br>
      <button type="submit">Send Message</button>
    </form>
  </div>
  <div class="col-md-5 mt-4 "> 
    <img src="images/contact-1-600x400.jpg" alt="" style="width: 90%;">
  </div></div>
</div>

<?php
include("footer.php");


?>