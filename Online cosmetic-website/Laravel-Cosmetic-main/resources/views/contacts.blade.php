<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cosmetic Product website</title>

    <!-- ICONSCOUT CDN -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="contact.css">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <nav>
      <div class="container">
        <a href="index.html" class="logo"><h2>Sunny</h2></a>

        <ul>
          <li><a href="index.html" >Home</a></li>
          <li><a href="index.html#products">Products</a></li>
          <li><a href="index.html#why-choose-us">Why Choose US?</a></li>
          <li><a href="faqs.html">FAQs</a></li>
          <li><a href="contacts.html" class="active">let's Talk</a></li>
        </ul>

        <div class="icon">
          <a><i class="uil uil-search"></i></a>
          <a><i class="uil uil-shopping-basket"></i></a>
          <a><i class="uil uil-user"></i></a>
        </div>

        <button id="menu-btn"><i class="uil uil-bars"></i></button>
        <button id="close-btn"><i class="uil uil-multiply"></i></button>
      </div>
    </nav>

    <section id="contact">
      <div class="container">
        <aside>
          <h4>Get in touch</h4>
          <p>We'd love to hear from you. Our friendly team is hear to chat</p>
          <div class="info">
            <article>
              <span class="icon"><i class="uil uil-envelope"></i></span>
              <div class="details">
                <h5>Chat with Us</h5>
                <small>
                  Send us an email and we'll respond shortly
                </small>
                <p>info@sunny.com</p>
              </div>
            </article>
            <article>
              <span class="icon"><i class="uil uil-map-marker"></i></span>
              <div class="details">
                <h5>Office</h5>
                <small>
                  Come say hello at our office HQ
                </small>
                <p>123 Mills Street</p>
                <p>East Airport,Bengalore</p>
              </div>
            </article>
            <article>
              <span class="icon"><i class="uil uil-phone"></i></span>
              <div class="details">
                <h5>Phone</h5>
                <small>
                  Mon - Fri from 9am to 5pm 
                </small>
                <p>+(123) 456-7890</p>
              </div>
            </article>
          </div>
        </aside>
        <form action="https://formspree.io/f/xlekggkk" method="post" >
          <input type="text" name="Name" placeholder="Your Name" required>
          <input type="email" name="Email Address" placeholder="your@yorcompany" required> 
          <input type="number" name="Phone Number" placeholder="Phone Number" required>
          <textarea name="message" placeholder="Message" required></textarea>
          <button type="submit" class="btn">Send</button>
        </form>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="f1">
          <div class="logo">
            <h4>Sunny</h4>
          </div>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis,
            eaque.
          </p>
          <div class="subscribe">
            <input type="email" placeholder="Enter Email" />
            <button><i class="uil uil-arrow-right"></i></button>
          </div>
        </div>
        <div class="f2">
          <h4>About</h4>
          <div class="social">
            <ul>
              <li><a href="index.html" class="active">Home</a></li>
              <li><a href="#products">Products</a></li>
              <li><a href="#why-choose-us">Why Choose US?</a></li>
              <li><a href="faqs.html">FAQs</a></li>
              <li><a href="contacts.html">let's Talk</a></li>
            </ul>
          </div>
        </div>
        <div class="f3">
          <h4>Privacy</h4>
          <ul>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms and Condition</a></li>
            <li><a href="#">Refund Policy</a></li>
          </ul>
        </div>
        <div class="f4">
          <h4>Contact Us</h4>
          <p>
            +91 764593423 <br />
            mukherjeesourav289@gmail.com
          </p>
          <ul>
            <li>
              <a href="https://instagram.com" target="_blank "
                ><i class="uil uil-instagram-alt"></i
              ></a>
            </li>
            <li>
              <a href="https://linkedin.com" target="_blank "
                ><i class="uil uil-linkedin"></i
              ></a>
            </li>
            <li>
              <a href="https://facebook.com" target="_blank "
                ><i class="uil uil-facebook"></i
              ></a>
            </li>
            <li>
              <a href="https://twitter.com" target="_blank "
                ><i class="uil uil-twitter"></i
              ></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="copyright">
        <small>Copyright @ SOURAV_MUKHERJEE_DEV</small>
      </div>
    </footer>
    
    <script src="main.js"></script>
  </body>
</html>
