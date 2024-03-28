<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Website</title>
  <link href="/css/welcome.css" rel="stylesheet" >
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap">


</head>
<body>

  <header class="header">
    <div class="header-content">
      {{-- <h1>Graceful Haven Care Home</h1> --}}
      <h1></h1>
        {{-- <img src="images/cane.png" alt="Image 1"> --}}
      <div class="buttons">
        <a href="/register"><button class="signup" >Sign Up</button></a>
        <a href="/login"><button class="login">Login</button></a>
      </div>
    </div>
  </header>
    <div class="container">
      <div class="left">
        <div class="text">
          <h1>Graceful
            Haven Care Home</h1>
          <p>Where Compassion Meets
            Care in Every Step</p>
        </div>
      </div>
      <div class="right">
        <div class="image-container">
          <!-- Replace these with your image elements -->
          <img src="images/welcome/webpic1.jpeg" alt="Image 1">
          <img src="images/welcome/webpic2.jpeg" alt="Image 2">
        </div>
      </div>
    </div>
    <div class="additional-container">
      <h1>A Perfect Community</h1>
      <div class="icon-row">
        <div class="icon">
          <img src="images/welcome/icons/patient.png" alt="Icon 1">
          <p>Patients</p>
        </div>
        <div class="icon">
          <img src="images/welcome/icons/doc.png" alt="Icon 1">
          <p>Doctors</p>
        </div>
        <div class="icon">
          <img src="images/welcome/icons/caregiver.png" alt="Icon 1">
          <p>CareGivers</p>
        </div>
        <div class="icon">
          <img src="images/welcome/icons/family.png" alt="Icon 1">
          <p>Family</p>
        </div>
        <div class="icon">
          <img src="images/welcome/icons/supervisor.png" alt="Icon 1">
          <p>Supervisors</p>
        </div>
      </div>
    </div>
    <div class="testimonials-container">
      <h1>Testies</h1>

      <div class="testimonial">
        <h2>Missy Miss</h2>
        <img  class="testies" src="images/welcome/testies/selfie1.webp" alt="">
        <p>"The care provided here is exceptional. It's a true home away from home."</p>
      </div>
      <div class="testimonial">
        <h2>Wizzie Smith</h2>
        <img class="testies" src="images/welcome/testies/selfie2.jpeg" alt="">

        <p>"I'm grateful for the compassionate staff who make every day special."</p>
      </div>
      <div class="testimonial">
        <h2>Michael Jordan</h2>
        <img class="testies" src="images/welcome/testies/selfie3.jpeg" alt="">

        <p>"The facilities are excellent, and the atmosphere is welcoming."</p>
      </div>
      <div class="testimonial">
        <h2>Slanky Johnson</h2>
        <img class="testies" src="images/welcome/testies/selfie4.jpeg" alt="">

        <p>"I've found peace of mind knowing my loved ones are in good hands."</p>
      </div>
      <div class="testimonial">
        <h2>Bugga Davis</h2>
        <img class="testies" src="images/welcome/testies/selfie5.jpeg" alt="">

        <p>"This place has become a second family to me. I couldn't ask for more."</p>
      </div>
      <div class="testimonial">
        <h2>Susan Wilson</h2>
        <img class="testies" src="images/welcome/testies/selfie6.jpeg" alt="">

        <p>"The dedication and care shown here are remarkable."(R.I.P(too much caviar))</p>
      </div>

      <div class="buttons">
        <button class="prev">Prev</button>
        <button class="next">Next</button>
      </div>
    </div>

    <div class="main-content">
      <div class="map-container">
        <iframe class="map-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24455.98721465144!2d-75.11471970000001!3d39.98614105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6c82efc37c069%3A0x3edcded5cd62d95a!2sKensington%2C%20Philadelphia%2C%20PA!5e0!3m2!1sen!2sus!4v1701924069879!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="info-content">
        <h1>Location</h1>
        <p>Located in the heart of Kensington, PA. Graceful Haven Care Home is the safest place you could ever call home. </p>
      </div>
    </div>
    <div class="main-content2">
      <div class="info-content">
        <h1>Join Today</h1>
        <p>Discover the unparalleled comfort and compassionate care at Graceful Haven Care Home. Our nurturing environment, personalized support, and dedicated team ensure a home where residents flourish. Experience the warmth of our community and the peace of mind in knowing your loved one is in caring hands. Sign up today to explore how we redefine the meaning of home and care.</p>
        <button class="signup" ><a href="/register">Sign Up</a></button>
      </div>
      <div class="map-container2">
<img src="images/welcome/testies/selfie6.jpeg" alt="">

</div>

    </div>



  <script>
    window.addEventListener('scroll', function() {
      var header = document.querySelector('.header');
      if (window.scrollY > 50) { /* Adjust 50 to the scroll position where you want the color to appear */
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });







    document.addEventListener('DOMContentLoaded', function() {
  const testimonials = document.querySelectorAll('.testimonial');
  let currentIndex = 0;

  function showTestimonial(index) {
    testimonials.forEach((testimonial, i) => {
      if (i === index) {
        testimonial.style.display = 'block';
      } else {
        testimonial.style.display = 'none';
      }
    });
  }

  function prevTestimonial() {
    if (currentIndex > 0) {
      currentIndex--;
    } else {
      currentIndex = testimonials.length - 1;
    }
    showTestimonial(currentIndex);
  }

  function nextTestimonial() {
    if (currentIndex < testimonials.length - 1) {
      currentIndex++;
    } else {
      currentIndex = 0;
    }
    showTestimonial(currentIndex);
  }

  document.querySelector('.prev').addEventListener('click', prevTestimonial);
  document.querySelector('.next').addEventListener('click', nextTestimonial);

  showTestimonial(currentIndex); // Show initial testimonial
});

  </script>
</body>
</html>

<style>


</style>




