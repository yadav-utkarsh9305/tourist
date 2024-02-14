<?php
include("header.php");
?>
<!-- contact us --> <h3 style="text-align: center;">Contact here</h3>
<p style="text-align: center; ">Hey! Champ you can contact us here</p>
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