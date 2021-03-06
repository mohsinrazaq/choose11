<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CHOOSE 11 - Homepage</title>
    <link rel="stylesheet" href="css/navbarstyles.css">
    <link rel="stylesheet" href="css/slider-style.css">
    <link rel="stylesheet" href="css/custom-styles.css">
    <link rel="stylesheet" href="css/upcoming-matches.css">
    <link rel="stylesheet" href="css/play-info.css">
    <link rel="stylesheet" href="css/footer.css">
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- bootstrap cdn ends -->
</head>
<body>
  <!-- main wrapper -->
  <div class="wrapper">

      <!-- header started -->
      <header>
          <a href="#" id="logo"></a>
          <nav>
            <a href="#" id="menu-icon"></a>
            <ul>
              <li><a href="#" class="current">Home</a></li>
              <li><a href="#matches">Upcoming Matches</a></li>
              <li><a href="#play">How To Play</a></li>
              <li><a href="login-page.php">Login</a></li>
              <li><a href="signup-page.php">Signup</a></li>
            </ul>
          </nav>
      </header>
      <!-- header ended -->

       <!-- slider code inside -->
       <div class="slider-wrapper">
        <div class="slider" id="slider" style="--img-prev:url(https://lh3.googleusercontent.com/aC9nyW5dhaYFmWD8fcf8DApjpH08eHEkbCHqmUPHRQ5T3jK-QyNKZYVMehmrvyPdEA_KxWvgZ3_kyOOYOAv99Ow3UoKSvEloleVKGSfLOwOyDV3Q6Dwi1G-NYoa9-t_ofmmskE6BYnVIOnIz2HWlMcijzIEwvKAL_R4z63DaLgG0z_OcGiSQHunwGAPXrBQUv42ZXuIMODq4zxDHczSxJ72b0-_udtdQK3JuT2X8nXCwFoF7GxmOpzXS0H5f50DuCbXoXcx-O7bgBMCXZdMpTxB27-wdXeLmxpYUySXgjSN2NAKmK16DmGLYvw5tMlrqwb8h4MJEEbXjP1pjPxXsahb7UZseEGyn80uLjATANJvusyJWCtzkkxYXPz-yI1rDvfEJKe2eyA-5AvFlzFBSwBMASn8f7mXinUrXMMREkJQjoi89NfZ91G7253OEVQOqcWxddiYtcHCO5v6Pl3QfV2SUTWXgggscDSY2ezjSPpYERNTXnIM_aCyWmIG7ybrfqOB0eVYBAgynyuPVbjd4KuZWZq2Dfu33HX1RuPKglbOuZGD1QbpJnruvUVkAmjDXI40ENN7X=w1600-h766);"> 
            <div class="slider__content" id="slider-content">
              <div class="slider__images">
                <div class="slider__images-item slider__images-item--active" data-id="1"><img src="images/1.jpg"/></div>
                <div class="slider__images-item" data-id="2"><img src="images/2.jpg"/></div>
                <div class="slider__images-item" data-id="3"><img src="images/3.jpg"/></div>
                <div class="slider__images-item" data-id="4"><img src="images/4.jpg"/></div>
                <div class="slider__images-item" data-id="5"><img src="images/5.jpg"/></div>
              </div>
              <div class="slider__text">
                <div class="slider__text-item slider__text-item--active" data-id="1">
                  <div class="slider__text-item-head">
                    <h3></h3>
                  </div>
                  <div class="slider__text-item-info">
                    <p></p>
                  </div>
                </div>
                <div class="slider__text-item" data-id="2">
                  <div class="slider__text-item-head">
                    <h3></h3>
                  </div>
                  <div class="slider__text-item-info">
                    <p></p>
                  </div>
                </div>
                <div class="slider__text-item" data-id="3">
                  <div class="slider__text-item-head">
                    <h3></h3>
                  </div>
                  <div class="slider__text-item-info">
                    <p></p>
                  </div>
                </div>
                <div class="slider__text-item" data-id="4">
                  <div class="slider__text-item-head">
                    <h3></h3>
                  </div>
                  <div class="slider__text-item-info">
                    <p></p>
                  </div>
                </div>
                <div class="slider__text-item" data-id="5">
                  <div class="slider__text-item-head">
                    <h3></h3>
                  </div>
                  <div class="slider__text-item-info">
                    <p></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="slider__nav">
              <div class="slider__nav-arrows">
                <div class="slider__nav-arrow slider__nav-arrow--left" id="left">to left</div>
                <div class="slider__nav-arrow slider__nav-arrow--right" id="right">to right</div>
              </div>
              <div class="slider__nav-dots" id="slider-dots">
                <div class="slider__nav-dot slider__nav-dot--active" data-id="1"></div>
                <div class="slider__nav-dot" data-id="2"></div>
                <div class="slider__nav-dot" data-id="3"></div>
                <div class="slider__nav-dot" data-id="4"></div>
                <div class="slider__nav-dot" data-id="5"></div>
              </div>
            </div>
          </div>
       </div> 
       <!-- slider code ends -->

      <!-- upcoming matches section -->
       <section class="upcoming-matches" id="matches">
          <h3>Upcoming Matches</h3>
          <div class="card-parent">
              <div class="card">
                <img class="card-img-top" src="images/200x300card.gif" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>  
              </div>

              <div class="card">
                <img class="card-img-top" src="images/200x300card.gif" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>  
              </div>

              <div class="card">
                  <img class="card-img-top" src="images/200x300card.gif" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>  
              </div>

              <div class="card">
                  <img class="card-img-top" src="images/200x300card.gif" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>  
              </div>

          </div>
         

       
       </section>
       <!-- upcoming matches section ends -->

       <!-- how to play section section -->
       <section class="play-info" id="play">
         <h2>How To Play</h2>
        <div class="video-div">

          <div class="video">
            <video controls>
            <source src="video/Demo.mp4">
            </video>
          </div>

          <div class="video-info">
              <h5>1. Select a Match</h5>
              <p>Select an upcoming match of your choice</p>
              <h5>2. Create your Choose11 Team</h5>
              <p>Use your sports kowledge to create a fantasy team using 100 credits</p>
              <h5>3. Join Free & Cash Contests</h5>
              <p>Participate in Cash or Practice Contests and go for glory</p>
          </div>

        </div>
       </section>
       <!-- how to play section ends -->
       
       <!-- footer started -->
       <footer>
          <h3 class="footer">&copy;2019 choose11. All rights reserved</h3> 
       </footer>
       <!-- footer ended -->
  </div>
  <!-- main wrapper ends -->

  

</body>
<script src="js/slider-sc.js"></script>
</html>