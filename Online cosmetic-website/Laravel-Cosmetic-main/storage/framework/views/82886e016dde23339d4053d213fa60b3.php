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
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/css/style.css')); ?>" />

    <!-- --SWIPER JS CDN -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />

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
          <li><a href="index.html" class="active">Home</a></li>
          <li><a href="#products">Products</a></li>
          <li><a href="#why-choose-us">Why Choose US?</a></li>
          <li><a href="faqs.html">FAQs</a></li>
          <li><a href="contacts.html">let's Talk</a></li>
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

    <!-- /* -------------------------NAVBAR ENDS---------------------- */ -->

    <header>
      <div class="container">
        <div class="info">
          <div class="delivery">
            <small>Free delivery Worldwide</small>
            <i class="uil uil-truck"></i>
          </div>
          <h1>Foundation Matte & Poreless</h1>
          <p>
            Maybelline’s #1 foundation perfect for oily skin. No stickiness, no
            shine.
          </p>
          <div class="cta">
            <a href="#products" class="btn btn-primary">See Products</a>
            <a href="#" id="show-commercial-btn">
              <img src="./images/play.png" alt="" />How it works</a
            >
          </div>
        </div>
        <div class="header-image">
          <img src="./Images/header.png" alt="" />
        </div>
        <div class="details">
          <img src="./Images/details.png" alt="" />
        </div>
      </div>
      .
    </header>

    <!-- -----------------------------END OF HEADER ----------------------------------------------------- -->

    <section id="commercial">
      <div class="container">
        <video controls autoplay loop>
          <source src="./Images/video.mp4" type="video/mp4" />
        </video>
      </div>
    </section>

    <!-- -----------------------------------END OF COMMERCIAL-------------------------------------------- -->

    <section id="products">
      <div class="container">
        <h2>Best Cosmetic Products</h2>
        <p>
          Launched in 2002, Makeup City has brought renowned international
          personal care brands under one roof for the first time in India. From
          a journey of a few stores, we have grown significantly, by making our
          brands available to almost every where a person can think off.
        </p>
        <article>
          <div class="image1">
            <img src="./Images/feature1.png" alt="" />
          </div>
          <div class="info">
            <h2>
              GOS- Primer Plus <br />
              30 ML
            </h2>
            <p>
              GOSH COPENHAGEN offers a wide selection of products in different
              categories: Cosmetics, Fragrances, Hair Care, Face Care, Body
              Care. GOSH Cosmetics are available online.
            </p>
            <a href="#">Read More</a>
          </div>
        </article>
        <article id="article2">
          <div class="info">
            <h2>
              HD Micro Foundation <br />
              Matifying Liquid 30ML
            </h2>
            <p>
              HD Micro Foundation Matifying Liquid is a micronized and gently
              mattifying foundation with vitamin E for the most natural look.
            </p>
            <a href="#">Read More</a>
          </div>
          <div class="image2">
            <img id="i" src="./Images/Feature2.png" alt="" />
          </div>
        </article>
      </div>
    </section>
    <!-- ==================================================END Of PRODUCTS============================================ -->

    <section id="why-choose-us">
      <div class="container">
        <div class="head">
          <div class="left">
            <h5>Why choose us?</h5>
            <h2>How to use?<br />learn more details.</h2>
          </div>
          <div class="right">
            <div class="image">
              <img src="./Images/Ellipse 280.png" alt="" />
            </div>
            <div>
              <p>Does not contain alcohol</p>
              <h4>PH 3.5</h4>
            </div>
          </div>
        </div>
        <article>
          <div class="image">
            <img src="./Images/image and pattan.png" alt="" />
          </div>
          <div class="info">
            <h4>Apply & Ingredients</h4>
            <p>
              Give your face that gorgeous sun-kissed look with high-quality
              bronzers! Makeup city is a house to international brands that sell
              natural-looking bronzers. Bronzing is about giving your face the
              perfect dimension and warmth.
            </p>
            <p>
              If you are looking for ways to warm up your pale skin, apply
              bronzer, and see the difference. Bronzer face seems the smart way
              to add glamour to your otherwise simplistic look.
            </p>
            <a href="#" id="learn-more"
              ><img src="./Images/learn more.png" alt=""
            /></a>
          </div>
        </article>
      </div>
    </section>
    <!-- ====================================END OF WHY CHOOSE US ==========================-->
    <section id="supported">
      <div class="container">
        <h5>SOME OF OUR TRUSTED CLIENTS</h5>
        <div class="clients">
          <div><img src="./Images/logo 1.png" alt="" /></div>
          <div><img src="./Images/logo 2.png" alt="" /></div>
          <div><img src="./Images/logo 3.png" alt="" /></div>
          <div><img src="./Images/logo 4.png" alt="" /></div>
          <div><img src="./Images/logo 5.png" alt="" /></div>
          <div><img src="./Images/logo 6.png" alt="" /></div>
        </div>
      </div>
    </section>

    <!-- ======================================Support=====================================-->
    <section class="swiper">
      <div class="swiper-wrapper">
        <article class="swiper-slide">
          <div class="image">
            <img src="./Images/testimonial1.png" alt="" />
          </div>
          <div class="info">
            <h4>Customer story</h4>
            <h2>
              Quick and best results. <br />
              You are the best!
            </h2>
            <p>
              “If you are going to use a passage of Lorem Ipsum, you need to be
              sure there isn't anything embarrassing hidden in the middle of
              text.
            </p>
            <p>
              There are many variations of passages of Lorem Ipsum available.”
            </p>
            <h5>Mary danso</h5>
            <small>Marketing manager</small>
          </div>
        </article>
        <article class="swiper-slide">
          <div class="image">
            <img src="./Images/testimonial1.png" alt="" />
          </div>
          <div class="info">
            <h4>Customer story</h4>
            <h2>
              Quick and best results. <br />
              You are the best!
            </h2>
            <p>
              “If you are going to use a passage of Lorem Ipsum, you need to be
              sure there isn't anything embarrassing hidden in the middle of
              text.
            </p>
            <p>
              There are many variations of passages of Lorem Ipsum available.”
            </p>
            <h5>Mary danso</h5>
            <small>Marketing manager</small>
          </div>
        </article>
        <article class="swiper-slide">
          <div class="image">
            <img src="./Images/testimonial1.png" alt="" />
          </div>
          <div class="info">
            <h4>Customer story</h4>
            <h2>
              Quick and best results. <br />
              You are the best!
            </h2>
            <p>
              “If you are going to use a passage of Lorem Ipsum, you need to be
              sure there isn't anything embarrassing hidden in the middle of
              text.
            </p>
            <p>
              There are many variations of passages of Lorem Ipsum available.”
            </p>
            <h5>Mary danso</h5>
            <small>Marketing manager</small>
          </div>
        </article>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </section>

    <!-- ==================================== END OF TESTIMONIALS ======================================== -->

    <section id="faqs">
      <div class="container">
        <h2>Frequently Ask Questions</h2>
        <div class="content">
          <article class="open">
            <div class="icon">
              <i class="uil uil-minus"></i>
            </div>
            <div class="info">
              <h4>How long until we deliver your product.</h4>
              <p>
                It takes 2-3 weeks to get your first blog post ready. That
                includes the in-depth research & creation of your monthly
                content marketing strategy that we MUST do before writing your
                first blog post.
              </p>
            </div>
          </article>
          <article>
            <div class="icon">
              <i class="uil uil-plus"></i>
            </div>
            <div class="info">
              <h4>How long until we deliver your product.</h4>
              <p>
                It takes 2-3 weeks to get your first blog post ready. That
                includes the in-depth research & creation of your monthly
                content marketing strategy that we MUST do before writing your
                first blog post.
              </p>
            </div>
          </article>
          <article>
            <div class="icon">
              <i class="uil uil-plus"></i>
            </div>
            <div class="info">
              <h4>How long until we deliver your product.</h4>
              <p>
                It takes 2-3 weeks to get your first blog post ready. That
                includes the in-depth research & creation of your monthly
                content marketing strategy that we MUST do before writing your
                first blog post.
              </p>
            </div>
          </article>
          <article>
            <div class="icon">
              <i class="uil uil-plus"></i>
            </div>
            <div class="info">
              <h4>How long until we deliver your product.</h4>
              <p>
                It takes 2-3 weeks to get your first blog post ready. That
                includes the in-depth research & creation of your monthly
                content marketing strategy that we MUST do before writing your
                first blog post.
              </p>
            </div>
          </article>
          <article>
            <div class="icon">
              <i class="uil uil-plus"></i>
            </div>
            <div class="info">
              <h4>How long until we deliver your product.</h4>
              <p>
                It takes 2-3 weeks to get your first blog post ready. That
                includes the in-depth research & creation of your monthly
                content marketing strategy that we MUST do before writing your
                first blog post.
              </p>
            </div>
          </article>
          <article>
            <div class="icon">
              <i class="uil uil-plus"></i>
            </div>
            <div class="info">
              <h4>How long until we deliver your product.</h4>
              <p>
                It takes 2-3 weeks to get your first blog post ready. That
                includes the in-depth research & creation of your monthly
                content marketing strategy that we MUST do before writing your
                first blog post.
              </p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <div class="qr">
      <div class="stwx">
        <a href="faqs.html" class="btn">Learn More</a>
      </div>
    </div>

    <!-- ============================================End Of Of FAQs==================================================== -->

    <section id="cta">
      <div class="container">
        <div class="info">
          <h3>Enough talk! Lets Make you beautiful</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam,
            nisi est. Quod obcaecati
          </p>
        </div>
        <div class="image">
          <img src="/Images/cta.png" alt="" />
        </div>
        <a href="contacts.html" class="btn">Let's Talk!</a>
      </div>
    </section>

    <!-- ================================================END OF CTA===================================================== -->

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

    <!-- ================================================END OF FOOTER===================================================== -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="./main.js"></script>


    <!-- ================================================================================================================== -->

    <script>
      const vdoplay = document.querySelector("#show-commercial-btn");
      const commercial = document.querySelector("#commercial")
      
      // open video

      vdoplay.addEventListener('click',()=>{
        commercial.style.display = "grid";
      })
      
      // close video

      document.body.addEventListener('click',(e)=>{
        if(e.target.id ==="commercial"){
          e.target.style.display="none";
        }
      })

      const swiper = new Swiper('.swiper', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
});
    </script>

    <!-- ==============================================SCRIPT FOR VIDEO BUTTON ===============================================-->
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel\mvc\resources\views/first.blade.php ENDPATH**/ ?>