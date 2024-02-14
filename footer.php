 
<!-- footer -->
<footer>
  <div class="container-fluid">
    <div class="row text-white footer-pannel">
      <div class="col-md-4 ">
      
        <ul>
          <h3>Headquarter</h3>
          <li>Varanasi ,city
          </li>
          <li> Uttar-Pradesh, 221104</li>
          <li class=""><a href="https://www.facebook.com/profile.php?id=100017695688661&mibextid=rS40aB7S9Ucbxw6v" style="margin-left: 15px; text-decoration: none; font-size: 1.8rem; color: greenyellow;"><i class="ri-facebook-circle-fill"></i></a> <a href="https://www.instagram.com/ashishyadavyadav478?utm_source=qr&igsh=ODJ3bDYzaGl6cXo=" style="margin-left: 15px; text-decoration: none; font-size: 1.8rem; color: greenyellow;"><i class="ri-instagram-fill"></i></a></li>
          <li>Copyright © 2024 New Kashi Tours&Travels pvt.Ltd</li>
        </ul>

      </div>
      <div class="col-md-4">
      <ul>
        <h3>Contact Info</h3>
        <li>+91-7380542667,8565914936</li>
        <li>asyadav25498@gmail.com</li>
      </ul>
      </div>
      <div class="col-md-4">
       
        <ul> <h2>newsletter</h2>
          <li>
            <form action="">
              <input type="email" style="border: none; background-color: #252020; border-bottom: 2px solid yellow;" placeholder="Enter your Email"> <br><br>
              <button style="padding:12px 45px; border-radius: 20px;">Send</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>
 
<script>  

     function sendmail(){
			var name = $('#Name').val();
			var phone = $('#Number').val();
			var email = $('#Email').val();
      var message = $('#Message').val();

			// var body = $('#body').val();

			var Body='Name: '+name+'<br>Number: '+phone+'<br>Email: '+email+'<br>Message: '+message;
			//console.log(name, phone, email, message);

			Email.send({
        Host : "smtp.elasticemail.com",
        Username : "utkarshyadav9305@gmail.com",
        Password : "985DF566B8741E976722AB629CD16A922D28",

        SecureToken:"fbf31702-bb7f-4a4e-9c1c-4ccf17ee777f",
				To: 'asyadav25498@gmail.com',
				From: "utkarshyadav9305@gmail.com",
				Subject: "New message on contact from "+name,
				Body: Body
			}).then(
				message =>{
					//console.log (message);
					if(message=='OK'){
					alert('Your mail has been send. Thank you for connecting.');
					}
					else{
						console.error (message);
						alert('There is error at sending message. ')
						
					}

				}
			);



		}


    </script>
 </script>
  </body>
</html>