<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="frontpage.css" />
  </head>
  <body>
    <header>
      <a href="#" class="logo"><img src="./assets/logo.png" alt=""></a>
      <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#">Register</a>
          <ul>
              <li><a href="patientSignup.php">Patient</a></li>
              <li><a href="nurseSignup.php">Staff</a></li>
          </ul>
          </li>
          <li><a href="#">Sign In</a>
          <ul>
              <li><a href="patientSignin.php">Patient</a></li>
              <li><a href="nurseSignin.php">Staff</a></li>
          </ul></li>
          <li><a href="#contact">Contact</a></li>
      </ul>
  </header>
  <section class="banner" id="home">
        <div class="imgBx">
            <img src="./assets/1.jpg" class="active">
            <img src="./assets/2.jpg">
            <img src="./assets/3.jpg">
            <img src="./assets/4.jpg">
        </div>
        <div class="contentBx">
            <div class="active">
                <h2>Slide Text One</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, consequatur! Molestiae, soluta iste!</p>
                <a href="#">Details</a>
            </div>
            <div>
                <h2>Slide Text Two</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, consequatur! Molestiae, soluta iste!</p>
                <a href="#">Details</a>
            </div>
            <div>
                <h2>Slide Text Three</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, consequatur! Molestiae, soluta iste!</p>
                <a href="#">Details</a>
            </div>
            <div>
                <h2>Slide Text Four</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, consequatur! Molestiae, soluta iste!</p>
                <a href="#">Details</a>
            </div>
        </div>
        <ul class="controls">
            <li onclick="prevSlide();prevSlideText()"></li>
            <li onclick="nextSlide();nextSlideText()"></li>
        </ul>
    </section>
 <section>
 <section class="about" id="about">
        <div class="row">
            <div class="col50">
                <h2 class="titleText"><span>A</span>bout Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae dolorem dicta esse totam voluptate assumenda minima doloremque obcaecati recusandae voluptatem, ratione molestias repellendus repellat? Dolore recusandae sed distinctio officiis tempora porro nulla ipsa itaque debitis dolorem et, ex dolor omnis explicabo totam ipsam modi repellendus! Beatae, aperiam illum nulla sint atque, reiciendis enim quidem alias quos, vero mollitia dolores error? Dolore sed consequuntur rerum porro, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquid optio veniam, accusamus sed, voluptates dicta at ipsa animi quas, numquam provident nostrum!<br><br> quisquam harum est in odio tempora unde atque nihil iusto similique aspernatur eum reprehenderit! Perspiciatis at laudantium voluptate odit fugit delectus, possimus quod minima quam? Maiores corrupti iure odit amet aut doloribus perferendis doloremque eius! Lorem ipsum dolor sit amet consectetur adipisicing elit. Id officiis fuga a nobis asperiores explicabo neque nihil facere dolore maxime!</p>
            </div>
            <div class="col50">
                <div class="imgBx">
                    <img src="./assets/1.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
 <section id="services">
        <div class="row mt-3 anotherbg" id="services">
           <div class="title">
            <h2 class="titleText">Our <span>S</span>ervices</h2>
            <p class="up">We Offers the following services at the best of our efforts to save humanity at a minute price even for the less oppurtuned </p>
           </div>
        </div>
        <div class="row service">
          <div class="col-4">
          <ul class="">
            <li>Demographics</li>
            <li>Diagnosis</li>
            <li>Stress Testing</li>
            <li>Ultrasound</li>
            <li>IV Therapy</li>
            <li>Cardiopulmonary Services </li>
          </ul>
          </div>
          <div class="col-4">
            <ul>
              <li>Aftercare</li>
              <li>Emergency</li>
              <li>Nutrition</li>
              <li>Women's Health Surgery</li>
              <li>Pacemaker Monitoring</li>
              <li>Appendix Surgery</li>
            </ul>
            </div>
            <div class="col-4">
                <ul>
                  <li>Bone Density Testing</li>
                  <li>Colon & Rectal Surgery</li>
                  <li>Gall Bladder Surgery</li>
                  <li>Sleep Lab</li>
                  <li>Rehabilitation Services</li>
                  <li>Educational Seminars</li>
                </ul>
            </div>
        </div>
        </div>
    </div>
</div>
 </section>
 <section class="contact" id="contact">
        <div class="title">
            <h2 class="titleText">Our <span>C</span>ontacts</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="contactForm">
            <h3>Send Message</h3>
            <div class="inputBox">
                <input type="text" placeholder="Name">
            </div>
            <div class="inputBox">
                <input type="email" placeholder="Email">
            </div>
            <div class="inputBox">
                <textarea></textarea>
            </div>
            <div class="inputBox">
                <input type="submit" value="Submit">
            </div>
        </div>
    </section>
    <script type="text/javascript">
        const imgBx = document.querySelector('.imgBx');
        const slides = imgBx.getElementsByTagName('img');
        var i = 0;
        function nextSlide(){
            slides[i].classList.remove('active');
            i = (i + 1) % slides.length;
            slides[i].classList.add('active');
        }
        function prevSlide(){
            slides[i].classList.remove('active');
            i = (i - 1 + slides.length) % slides.length;
            slides[i].classList.add('active');
        }

        const contentBx = document.querySelector('.contentBx');
        const slidesText = contentBx.getElementsByTagName('div');
        var j = 0;
        function nextSlideText(){
            slidesText[j].classList.remove('active');
            j = (j + 1) % slidesText.length;
            slidesText[j].classList.add('active');
        }
        function prevSlideText(){
            slidesText[j].classList.remove('active');
            j = (j - 1 + slidesText.length) % slidesText.length;
            slidesText[j].classList.add('active');
        }
    </script>
  </body>
</html>
