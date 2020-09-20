<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"  type="text/css" href="home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- CDN for Font Awesome Icons -->
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">

    <title>Document</title>
</head>
<body>
<div>
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="gallery/highbury_logo.jpeg" alt="logo" width="110" heigh="100"></a>

    <div class="collapse navbar-collapse w-100 flex-md-column" id="navbarCollapse">
        <ul class="navbar-nav ml-auto small mb-2 mb-md-0">
            <li class="nav-item p-3">
              <h6><i class="fab fa-whatsapp"  style="font-size:18px;color:blue"></i>  WhatsApp Us: +27 72 051 3490</h6>
            </li>
            <li class="nav-item p-3">
            <h6><i class="fa fa-phone" style="font-size:18px;color:blue"></i>  GP: +27 11 262 5115</h6>
            </li>
            <li class="nav-item p-3">
            <h6><i class="fa fa-phone" style="font-size:18px;color:blue"></i>  CTN: +27 21 202 7890</h6>
            </li>
            <li class="nav-item p-3">
            <h6><i class="fa fa-envelope" style="font-size:18px;color:blue"></i>  info@aie.ac</h6>
            </li>
        </ul>
        <form class="form-inline ml-auto">
            <div class="input-group">
               <button class="btn btn-primary" type="button">Rate Our Service, let Our CEO Know</button> 
            </div>
        </form>
    </div>
</nav>


<nav class="navbar navbar-expand-lg navbar-light " id="main-Nav">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Our Schools</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Enrolment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Student Portal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Learning Methods</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Open Days & Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Recruit Graduates</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Corporate Affairs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact us</a>
      </li>
    </ul>
  </div>
</nav>
</div>
<!--/.Navbar-->


  <!-- ======= Hero Section ======= -->
  <div>
  <div class="card">
  <img class="card-img" src="gallery/hero-image.jpg" alt="Card image">
  <div class="card-img-overlay">
    <div class="container">
  <div class="row">
    <div class="col-md-4" id="hCol">
    <div class="content">
   <h4>Late Registration in Progress!</h4>
   <div class="seprator"></div>
   <p>If you are interested in studying Engineering N1-N6, be sure to contact your student advisor to book your seat.</p>
   <div class="text-center">
   <button type="button" class="btn btn-primary btn-lg btn-block">READ MORE</button>
            </div>
   </div>
  </div>
    <div class="col-md-4 offset-md-4"  id="hero-reg-form"><div>
    <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="text" class="form-control" placeholder="First Name" id="inpuFname4">
    </div>
    <div class="form-group col-md-6">
      <input type="Surname" class="form-control" id="inputSurname4" placeholder="Surname">
    </div>
  </div>
  
  <div class="form-row">
  <div class="form-group col-md-6">
      <input type="number" class="form-control" id="inputMobileno4" placeholder="Mobile Number">
    </div>
  <div class="form-group col-md-6">
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
      <select id="inputLocation" class="form-control">
        <option selected>Choose your Location</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <select id="inputQualification" class="form-control">
        <option selected>Qualification</option>
        <option>...</option>
      </select>
    </div>
    </div>

    <div class="form-row">
    <label for="Delivery Method">Delivery Method</label>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">Full Time</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">Part Time</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
  <label class="form-check-label" for="inlineCheckbox3">Online</label>
</div>
</div>

  <div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Enter your Message" rows="1"></textarea>
  </div>
  
<script src="gulpfile.js"></script>
  <button type="submit" class="btn btn-danger">SUBMIT</button>
</form>
</div>
    </div>
  </div>
  </div> 
  </div>
  </div>
  </div>
 
  <!--/. Hero Section -->
  <div class="scroll-down" style="background-color:#c1272d !important;">
     <center><h2 style="color: #ffffff">#WhereFUTURESAreMade</h2></center>
    
<a href="#content-full-width" ><i class="fa fa-angle-down" aria-hidden="true"></i></a> <!-- style="color: !important;" -->
</div>
     




    



  
<!--/.Hero Section-->

<!--<div class="card bg-dark text-white">
  <img class="card-img" src="gallery/hero-image.jpg" alt="Card image">
  <div class="card-img-overlay">
<div class="container">
   <div class="row">
    <div class="col-md-4" id="hCol">
    <div class="content">
    <h4>Study at Highbury College in 2021</h4>
   <div class="seprator"></div>
   <p>Known for our innovative approach to quality education, our excellence in delivery and modern technological 
     approach, we are a family proud of our brands, people and students.</p>
   </div>
   <div>
   <button type="button button-primary" class="btn btn-lg btn-block" id="hI-btn">READ MORE</button>
   </div>
  </div>
  
    <div class="col-md-4 offset-md-4" id="hero-reg-form">
      <div class="content-2">
    <form action="forms/appointment.php" method="post" role="form" class="php-reg-form">
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="First Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="text" name="date" class="form-control datepicker" id="date" placeholder="Choose Your Location" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <select name="location" id="location" class="form-control">
                <option value="">Select Location</option>
                <option value="Durban">Durban</option>
                <option value="Johannesburg">Johannesburg</option>
                <option value="Pretoria">Pretoria</option>
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <select name="qualification" id="qualification" class="form-control">
                <option value="">Select Qualification</option>
                <option value="School of Business/Finance">School of Business/Finance</option>
                <option value="ACCA Strategic Professional Level 3 Certificate">ACCA Strategic Professional Level 3 Certificate</option>
                <option value="ACCA Apllied Knowledge Level1 Certificate">ACCA Apllied Knowledge Level1 Certificate</option>
              </select>
              <div class="validate"></div>
            </div>
          </div>

          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Enter your message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">SUBMIT</button></div>
        </form>
    </div>
  </div>
  </div> 
  </div>
  </div>
  <!--/. Hero Section -->
  

  <!-- ======= Alert Button Section ======= -->
<!--<div class="alert alert-danger" role="alert">
#WhereFUTURESAreMade!
 <section id="section03" class="demo">
  <a href="#section04"><span></span>Scroll</a>
</section>
</div>
</div>
 <!--/.Alert Section-->


<br><br><br>
 <!-- ======= Main Layout ======= -->
 <!--Academic Institute Section-->
<div class="container">
<div class="row">
  <div class="col-lg-8">
  <h1>Academic Institute of Excellence</h1>
      <div class="seprator"></div>
      <br><br><br>
    <p>The Academic Institute of Excellence (AIE) family of educational brands, we represent some of SA’s leading learning institutes. Known for our innovative approach to quality education, our excellence in delivery and modern technological approach, we are a family proud of our brands, people and students.</p>
</div>
  <div class="col-lg-4"><img src="gallery/building-2.png" alt="academic-building-image" width="400" height="140"></div>
</div>
</div>  
 <!--/.Academic Institute Section-->

 <!--Choose Qualification Section-->
<div class="container">
  <h1>Choose Your Qualification</h1>
  <div class="seprator"></div>
<div class="row">
  <div class="col-6 col-md-4">
    <img src="gallery/choose1.jpg" alt="">
    <h5>School of Draughting & Technical Design</h5>
  <p>Behind every product, building, or process are drawings and models created b
    someone using the techniqu+es and principles taught in draughting programmes. If you study draughting...</p>
<ul>
  <li><a href="">Multi-Disciplinary Draughting</a></li>
  <li><a href="">Architectual Technology</a></li>
  <li><a href="">Technical Bridging Courses</a></li>
  <li><a href="">Structural Skill Detailing Diploma</a></li>
</ul>
<button type="button" class="btn btn-light btn-lg btn-block">LEARN MORE</button>
  </div>
  <div class="col-6 col-md-4">
  <img src="gallery/choose2.jpg" alt="">
    <h5>School of Engineering & Science</h5>
  <p>Our courses support the most diverse engineering workforce and provide your technical teams and
     individuals with the highly specialised skills they need within the boundaries of engineering.<ul>
  <li>
    <a href="">Mechanical Engineering National Diploma</a>
  </li>
  <li><a href="">Electrical Engineering National Diploma</a></li>
  <li><a href="">Chemical Engineering National Diploma</a></li>
  <li><a href="">Civil/Build Engineering National Diploma</a></li>
  <li><a href="">National Diploma: Management of Civil Engineering Construction Processes NQF5</a></li>
</ul>
<button type="button" class="btn btn-light btn-lg btn-block">LEARN MORE</button>
</div>
  <div class="col-6 col-md-4">
  <img src="gallery/choose4.jpg" alt="">
    <h5>School of Business, Entrepreneurship & Finance</h5>
  <p>Our range of business studies include finance, administration, management through to human resources.
     For students who wish to broaden their knowledge and achieve a recognised qualification.<ul>
  <li>
    <a href="">Accounting & Bookkeeping</a>
  </li>
  <li><a href="">Business Management & Entrepreneurship</a></li>
  <li><a href="">Sales & Marketing</a></li>
  <li><a href="">Executive Assistant & Office Administration</a></li>
  <li><a href="">Project Management</a></li>
</ul>
<button type="button" class="btn btn-light btn-lg btn-block">LEARN MORE</button>
</div>
</div>
<!--/.Choose Qualification Section-->

<!--Our Learning Methods Section-->
<div class="container">
  <h1>Our Learning Methods</h1>
  <div class="seprator"></div>
  <p>At The Academic Institute of Excellence (AIE) we understand that each person prefers different learning styles and techniques. This is influenced by many factors including, circumstances, location, field of study and learning preference. It is for this reason that we have developed our myWay learning methodology, a unique and modern approach
     to blended learning that encompasses multiple delivery methods, involving our three main channels.</p>
<div class="container">
  <div class="row">
    <div class="col-md">
    <img src="gallery/ic-wall-clock.png" alt="">
      <h3>Full Time</h3>
      <p>Reach your full potential through our myWay Instructor-led or 
        Mentorship based classes combined with interactive lessons, practical assignments and 
        in-field experience, combined with our blended platform to make up a full day or selective days within a week.</p>
        <button type="button" class="btn btn-light">LEARN MORE</button>
      </div>
    <div class="col-md">
    <img src="gallery/ic-wall-clock2.png" alt="">
      <h3>Part Time</h3>
      <p>Designed for the working professional, our part time programmes provides you with the flexibility and benefit of our myWay Blended Learning with 
        at home exercises/assignments and mentored or in-class lectures at a manageable schedule and pace.</p>
        <button type="button" class="btn btn-light">LEARN MORE</button>
      </div>
    <div class="col-md">
    <img src="gallery/ic-correspondence.png" alt="">
      <h3>Online</h3>
      <p>We have re-defined online learning. Our myWay Online Learning ensures that the student is supported by technology and people throughout his academic journey. We focus on a blended learning approach, combining online Virtual Classrooms, at home exercises, activities and project-based assignments
         bundled with fully developed video lectures, all managed by our student learning platform.</p>
         <button type="button" class="btn btn-light">LEARN MORE</button>
        </div>
  </div>
</div>
</div>

<br><br>
<!--/.Our Learning Methods Section-->

<!--Upcoming Events Section-->
<div class="card bg-dark text-white">
  <img class="card-img" src="gallery/header.jpg" alt="Card image">
  <div class="card-img-overlay">
  <h1 class="card-title">Upcoming Events and Open Days</h1>
      <div class="seprator"></div>
<div class="container">
  <div class="row">
    <div class="col">
    <h5>29</h5>
      <p>August '20</p>
      <p>09:00</p>
    </div>
    <div class="col-6">
    <h5>August  2020 Intake  @ 09:00</h5>
    <p>Academic Institute of Excellence will be hosting an online open day for all students who are interested in a career in Engineering N1-N6, and would like to enrol to start their studies in August for any one of their programs. Students will discover how classes will be presented, what subjects they will have and if they would like to book a campus tour for the day they can speak to one 
      of our advisors to book a tour on the day to see what the campus looks like. Bookings required.</p>
    </div>
    <div class="col">
    <button type="button" class="btn btn-light">LEARN MORE</button>
   </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <!--/.Upcoming Events Section-->

<!-- ======= Carousel: Tetimonials ======= -->
<section class="testimonials-section">
	<div class="container">
		<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 testimonials">
			<div class="training-title">
				<h4 class="aoe-title">Testimonials</h4>
				<div class="line"></div>
			</div>			

		<div class="col-center m-auto">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
 
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="item carousel-item active">
						<div class="img-box"><img src="https://www.eharmony.com/dating-advice/wp-content/uploads/images/goodsmile.jpg" alt=""></div>
						<h4 class="carousel-title">Best Institute!</h4>
						<div class="carousel-line"></div>

						<p class="testimonial"><span>"</span><p>I would like to thank the AIE team for their excellent support.&nbsp;</p>
            This makes it really worth to say that my child is studying at AIE.
            Keep up the good work!</p>
						<p class="overview"><b>- Cris Wilson</b></p>
						<h6 class="company-name">Parent</h6>
					</div>

					<div class="item carousel-item">
						<div class="img-box"><img src="https://www.eharmony.com/dating-advice/wp-content/uploads/images/goodsmile.jpg" alt=""></div>
						<h4 class="carousel-title">Amazing Environment!</h4>
            <div class="carousel-line"></div>
            
            <p class="testimonial"><span>"</span><p>Thank you for making my experience at the
               Academy so memorable! As someone that had no draughting experience prior to attending the academy, I felt very comfortable and truly mentored throughout the course. I learnt a tremendous amount thanks to all the lecturers&#39;
             patience and guidance, and am now in a position I could never have dreamed of. Thank You!</p><p class="overview"><b>- Antonio Moreno</b></p>
						<h6 class="company-name">Student</h6>
					</div>

					<div class="item carousel-item">
						<div class="img-box"><img src="https://www.eharmony.com/dating-advice/wp-content/uploads/images/goodsmile.jpg" alt=""></div>
						<h4 class="carousel-title">Hello, I am employed!</h4>
            <div class="carousel-line"></div>
            
            <p class="testimonial"><span>"</span><p>I would like to mention that if it was not for AIE, I would not have been able to get a job and open my own Business, one that I dream about for 15 years. This means more to me than you will ever understand. AIe is the absolute best and this is where leaders are born. SA needs AIE branches everywhere. If my company could design and build them, why not? We need to get more AIE branches up, no jokes. 
        </p>
            <p class="overview"><b>- Mbali Msibi</b></p>
						<h6 class="company-name">Graduate</h6>
					</div>

				</div>
				<!-- Carousel controls -->
				<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev"><span>Prev</span>
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next"><span>Next</span>
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
		</div>
	</div>

	</div>
</div>
</section>
<!--/.Carousel-->

<!-- ======= Contact Form ======= -->
<div class="container">
<h1><span>Get</span> in Touch</h1>
<div class="seprator"></div>
<div class="row">
<div class="col-sm-4">
  <div>
  <h6><i class="fa fa-phone fa-sm"></i>OFFICE NUMBER</h6>
  <p>JHB +27 (0)11 262 5115</p>
  <p>CT +27 (0)21 000 0462</p>
</div>

<div>
<h6><i class="fa fa-envelope fa-sm"></i>EMAIL</h6>
  <p>info@aie.ac</p>
</div>

<div>
<h6><i class="fa fa-home fa-sm"></i>ADDRESS</h6>
  <p>Oracle Close, Halfway Gardens, Midrand</p>
</div>

</div>
  <div class="col-sm-8"><form>
  <div class="form-row">
    <div class="col-sm-6">
        <input type="text" class="form-control" id="inputFirstname" placeholder="First name">
          </div>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="inputLastname" placeholder="Last name">
                  </div>
                </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="number" class="form-control" id="inputPassword4" placeholder="Mobile Number">
    </div>
    <div class="form-group col-md-6">
      
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputLocation">Location</label>
      <select id="inputLocation" class="form-control">
        <option selected>Choose your Location</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>
</div>
</div>
<!--/.Contact -->


<!-- ======= Footer======= -->
<footer class="page-footer font-small indigo">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Very long link 1</a>
          </li>
          <li>
            <a href="#!">Very long link 2</a>
          </li>
          <li>
            <a href="#!">Very long link 3</a>
          </li>
          <li>
            <a href="#!">Very long link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://muketegroup.co.za/"> Mukete Group</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

</body>
</html>