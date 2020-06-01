<?php
include"db.php";
//require"db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>My Resume HTML Bootstrap Template</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/style.css" rel="stylesheet">

  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
  <!-- =======================================================
    Theme Name: MyResume
    Theme URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div class="wrapper" id="wrapper">
    <header>
      <div class="banner row" id="banner">
        <div class="parallax text-center" style="background-image: url(img/1.jpg);">
          <div class="parallax-pattern-overlay">
            <div class="container text-center" style="height:600px;padding-top:170px;">
              <a href="#"><img id="site-title" class=" wow fadeInDown" wow-data-delay="0.0s" wow-data-duration="0.9s" src="img/2.png" alt=""/></a>
              <h2 class="intro"><a href="index.html">My Resume</a></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="menu">
        <div class="navbar-wrapper">
          <div class="container">
            <div class="navwrapper">
              <div class="navbar navbar-inverse navbar-static-top">
                <div class="container">
                  <div class="navArea">
                    <div class="navbar-collapse collapse">
                      <ul class="nav navbar-nav">
                        <li class="menuItem active"><a href="#wrapper">Home</a></li>
                        <li class="menuItem"><a href="#aboutus">About Us</a></li>
                        <li class="menuItem"><a href="#specialties">Skills</a></li>
                        <li class="menuItem"><a href="#gallery">Portfolio</a></li>
                        <li class="menuItem"><a href="#feedback">Education</a></li>
                        <li class="menuItem"><a href="#contact">Contact</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!--about us-->
    <section class="aboutus" id="aboutus">
      <div class="container"> 
      <?php

        $sql="SELECT * FROM about ORDER BY id DESC LIMIT 1";
        $res=$a->query($sql);
        while ($data=$res->fetch_assoc()) {
        
      
      ?>       
        <div class="row">
          <div class="col-md-6">
            <div class="papers text-center">
              <img src="imgpractice/upload/<?php echo $data['picture']; ?>" alt=""><br/>              
              <h4 class=""><?php echo $data['caption'];  ?></h4>
              <!--
              <p>
                Have you ever felt worried that your party will not raise up to your guest expectations? In design, vertical rhythm is the structure that guides a reader's eye through the content. Good vertical rhythm makes a layout more balanced and beautiful and its
                content more readable. The time signature in sheet music visually depicts a song's rhythm, while for us, the lines of the baseline grid depict the rhythm of our content and give us guidelines.
              </p>
            -->
            </div>
          </div>
          <div class="col-md-6">
            
            <div class="heading text-center">
              <h2><?php echo $data ['heading'];  ?></h2>
              <h3><?php echo $data ['details'];  ?></h3>
            </div>
            <?php
          }
          ?>


            <!--
            <div class="papers text-center">
              <img src="img/team/2.jpg" alt=""><br/>
              <a href="#"><b>Download my resume</b></a>
              <h4 class="">My Teacher Stephanie Hellen</h4>
              <p>
                Have you ever felt worried that your party will not raise up to your guest expectations? In design, vertical rhythm is the structure that guides a reader's eye through the content. Good vertical rhythm makes a layout more balanced and beautiful and its
                content more readable. The time signature in sheet music visually depicts a song's rhythm, while for us, the lines of the baseline grid depict the rhythm of our content and give us guidelines.
              </p>
            </div>
          -->
          </div>
        </div>
       
      </div>

    </section>


    <!--skills-->
    <section class="specialties" id="specialties">
      <div class="container">
        <?php

        $sql="SELECT * FROM alt";
        $res=$a->query($sql);
        while ($data=$res->fetch_assoc()) {
        
      
      ?>       
        <div class="heading text-center">
          <h2>Our Skills</h2>
          <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis dolor sit amet lacus ultricies rutrum. Curabitur vitae fringilla elit. Sed at nunc congue, cursus erat ac, pellentesque eros. Etiam ullamcorper sed lectus sit amet mattis. Morbi justo sem, cursus nec convallis a, pellentesque eu mi. Morbi hendrerit ultricies ligula </h3>
        </div>
      </div>

      <div class="container">  
        <div class="row">
          <div class="col-md-6 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s" ">
					<div class="skill ">
						<div class="progress-wrap ">
							<h3>Graphic Design</h3>
              	<div class="progress ">
							  <div class="progress-bar color1 " role="progressbar " aria-valuenow="40 " aria-valuemin="0 " aria-valuemax="100 " style="width: 45% ">
								<span class="bar-width "><?php echo $data['graphicdesign'];?></span>
							  </div>

							</div>
						</div>

						<div class="progress-wrap ">
							<h3>HTML</h3>
							<div class="progress ">
							  <div class="progress-bar color2 " role="progressbar " aria-valuenow="20 " aria-valuemin="0 " aria-valuemax="100 " style="width: 45% ">
							   <span class="bar-width "><?php echo $data['html'];?></span>
							  </div>
							</div>
						</div>

						<div class="progress-wrap ">
							<h3>CSS</h3>
							<div class="progress ">
							  <div class="progress-bar color3 " role="progressbar " aria-valuenow="60 " aria-valuemin="0 " aria-valuemax="100 " style="width: 40% ">
								<span class="bar-width "><?php echo $data['css']; ?></span>
							  </div>
							</div>
						</div>

						<div class="progress-wrap ">
							<h3>Wordpress</h3>
							<div class="progress ">
							  <div class="progress-bar color4 " role="progressbar " aria-valuenow="80 " aria-valuemin="0 " aria-valuemax="100 " style="width: 10% ">
								<span class="bar-width "><?php echo $data['wordpress'];?></span>
        
							  </div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 wow fadeInRight " data-wow-offset="0 " data-wow-delay="0.6s "">
            <img src="img/team/6.jpg" class="img-responsive">
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="skills">
              <h3 class="main text-center">WEB DESIGN</h3>
              <div class="restitem clearfix">
                <div class="rm-thumb" style="background-image: url(img/2.png)">
                </div>
                <h5>HTML</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis dolor sit amet lacus ultricies rutrum. Curabitur vitae fringilla elit. Sed at nunc congue, cursus erat ac, pellentesque eros.
                </p>
              </div>
              <div class="restitem clearfix">
                <div class="rm-thumb" style="background-image: url(img/2.png)">
                </div>
                <h5>CSS</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis dolor sit amet lacus ultricies rutrum. Curabitur vitae fringilla elit. Sed at nunc congue, cursus erat ac, pellentesque eros.
                </p>
              </div>
              <div class="restitem clearfix">
                <div class="rm-thumb" style="background-image: url(img/2.png)">
                </div>
                <h5>JAVASCRIPT</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis dolor sit amet lacus ultricies rutrum. Curabitur vitae fringilla elit. Sed at nunc congue, cursus erat ac, pellentesque eros.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="skills">
              <h3 class="main text-center">PHOTOGRAPHY</h3>
              <div class="restitem clearfix">
                <div class="rm-thumb" style="background-image: url(img/2.png)">
                </div>
                <h5>adipiscing elit</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis dolor sit amet lacus ultricies rutrum. Curabitur vitae fringilla elit. Sed at nunc congue, cursus erat ac, pellentesque eros.
                </p>
              </div>
              <div class="restitem clearfix">
                <div class="rm-thumb" style="background-image: url(img/2.png)">
                </div>
                <h5>adipiscing elit</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis dolor sit amet lacus ultricies rutrum. Curabitur vitae fringilla elit. Sed at nunc congue, cursus erat ac, pellentesque eros.
                </p>
              </div>
              <div class="restitem clearfix">
                <div class="rm-thumb" style="background-image: url(img/2.png)">
                </div>
                <h5>adipiscing elit</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis dolor sit amet lacus ultricies rutrum. Curabitur vitae fringilla elit. Sed at nunc congue, cursus erat ac, pellentesque eros.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="skills">
              <h3 class="main text-center">PROGRAMMING</h3>
              <div class="restitem clearfix">
                <div class="rm-thumb" style="background-image: url(img/2.png)">
                </div>
                <h5>adipiscing elit</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis dolor sit amet lacus ultricies rutrum. Curabitur vitae fringilla elit. Sed at nunc congue, cursus erat ac, pellentesque eros.
                </p>
              </div>
              <div class="restitem clearfix">
                <div class="rm-thumb" style="background-image: url(img/2.png)">
                </div>
                <h5>adipiscing elit</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis dolor sit amet lacus ultricies rutrum. Curabitur vitae fringilla elit. Sed at nunc congue, cursus erat ac, pellentesque eros.
                </p>
              </div>
              <div class="restitem clearfix">
                <div class="rm-thumb" style="background-image: url(img/2.png)">
                </div>
                <h5>adipiscing elit</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis dolor sit amet lacus ultricies rutrum. Curabitur vitae fringilla elit. Sed at nunc congue, cursus erat ac, pellentesque eros.
                </p>
              </div>
            </div>
            <?php
                  }
                ?>
          </div>
        </div>
      </div>
    </section>


    <!--portfolio-->
    <section class="gallery" id="gallery">
      <div class="container">
      <?php

        $sql="SELECT * FROM port ORDER BY id DESC LIMIT 1";
        $res=$a->query($sql); 
        
      ?>
        <div class="heading text-center">
          <h2>Portfolio</h2>
          <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis dolor sit amet lacus ultricies rutrum. Curabitur vitae fringilla elit. Sed at nunc congue, cursus erat ac, pellentesque eros. Etiam ullamcorper sed lectus sit amet mattis.</h3>
        </div>

        <div id="grid-gallery" class="grid-gallery">
          <section class="grid-wrap">
            <ul class="grid">
              <li class="grid-sizer"></li>
              <!-- for Masonry column width -->
              <li>
                <figure>
                <?php
                    while ($data=$res->fetch_assoc()) {
                ?>
                  <img src="portfolio/upload/<?php echo $data['picture']; ?>" alt="" />
                  <figcaption>
                    <h3> <?php echo $data['caption'];  ?> </h3>
                    <p> <?php echo $data['deatils'];  ?> </p>
                    <?php
                      }
                    ?>
                    
                  </figcaption>
                </figure>
              </li>
              <li>
                <figure>
                  <img src="img/work/2.jpg" alt="" />
                  <figcaption>
                    <h3>Vitae fringilla elit</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </figcaption>
                </figure>
              </li>
              <li>
                <figure>
                  <img src="img/work/3.jpg" alt="" />
                  <figcaption>
                    <h3>Vitae fringilla elit</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </figcaption>
                </figure>
              </li>
              <li>
                <figure>
                  <img src="img/work/4.jpg" alt="" />
                  <figcaption>
                    <h3>Vitae fringilla elit</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </figcaption>
                </figure>
              </li>
              <li>
                <figure>
                  <img src="img/work/5.jpg" alt="" />
                  <figcaption>
                    <h3>Vitae fringilla elit</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </figcaption>
                </figure>
              </li>
              <li>
                <figure>
                  <img src="img/work/6.jpg" alt="" />
                  <figcaption>
                    <h3>Vitae fringilla elit</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </figcaption>
                </figure>
              </li>

              <li>
                <figure>
                  <img src="img/work/7.jpg" alt="" />
                  <figcaption>
                    <h3>Vitae fringilla elit</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </figcaption>
                </figure>
              </li>

              <li>
                <figure>
                  <img src="img/work/8.jpg" alt="" />
                  <figcaption>
                    <h3>Vitae fringilla elit</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </figcaption>
                </figure>
              </li>

            </ul>

          </section>
          <!-- // end small images -->

          <section class="slideshow">
            <ul>
              <li>
                <figure>
                  <img src="img/work/1.jpg" alt="" />
                </figure>
              </li>
              <li>
                <figure>
                  <img src="img/work/2.jpg" alt="" />
                </figure>
              </li>
              <li>
                <figure>
                  <img src="img/work/3.jpg" alt="" />
                </figure>
              </li>
              <li>
                <figure>
                  <img src="img/work/4.jpg" alt="" />
                </figure>
              </li>
              <li>
                <figure>
                  <img src="img/work/5.jpg" alt="" />
                </figure>
              </li>
              <li>
                <figure>
                  <img src="img/work/6.jpg" alt="" />
                </figure>
              </li>

              <li>
                <figure>
                  <img src="img/work/7.jpg" alt="" />
                </figure>
              </li>

              <li>
                <figure>
                  <img src="img/work/8.jpg" alt="" />
                </figure>
              </li>
            </ul>
            <nav>
              <span class="icon nav-prev"></span>
              <span class="icon nav-next"></span>
              <span class="icon nav-close"></span>
            </nav>
            <div class="info-keys icon">Navigate with arrow keys</div>
          </section>
          <!-- // end slideshow -->
        </div>
        <!-- // grid-gallery -->
      </div>
    </section>

    <!--education-->
    <section class="feedback" id="feedback">
      <div class="container">
      <?php

        $sql="SELECT * FROM education ORDER BY id LIMIT 3";
        $res=$a->query($sql);
        



      ?>
        <div class="heading">
          <h2>Education</h2>
          <h3>Phasellus non dolor nibh. Nullam elementum tellus pretium feugiat.<br>
				Cras dictum tellus dui, vitae sollicitudin ipsum tincidunt in. Sed tincidunt tristique enim sed sollcitudin.</h3>
        </div>
      </div>

      <div class="container">
        
        <div class="row">
        <?php 
          while ($data=$res->fetch_assoc()) {
        ?>
          <div class="col-md-4 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
            <div class="text-center">
              <div class="hi-icon-wrap hi-icon-effect">
                <h4><?php echo $data['heading'];?></h4>
                <h5><?php echo $data['deatils'];?></h5>
                <img class="img-rounded" src="education/upload/<?php echo $data['img']; ?>" />
                <p><?php echo $data['caption'];?></p>
                
              </div>
            </div>
          </div>
          <?php
          }
        ?>
        </div>
        
        
      </div>
     

      <div class="container">
        <div class="row">
          <blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages." <cite>Jogn De, Programming<br/><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></cite>            </blockquote>
          <blockquote>Have you ever felt worried that your party will not raise up to your guest expectations? In design, vertical rhythm is the structure that guides a reader’s eye through the content. Good vertical rhythm makes a layout more balanced and beautiful
            and its content more readable. The time signature in sheet music visually depicts a song’s rhythm, while for us, the lines of the baseline grid depict the rhythm of our content and give us guidelines. <cite>Marta Kay, Business Development<br/><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></cite>            </blockquote>
        </div>
      </div>
    </section>

    <!--education-->
    <section class="contact" id="contact">
      <div class="container">
        <div class="heading">
          <h2>Contact</h2>
          <h3>Phasellus non dolor nibh. Nullam elementum tellus pretium feugiat.<br>
				 Cras dictum tellus dui, vitae sollicitudin ipsum tincidunt in. Sed tincidunt tristique enim sed sollcitudin.</h3>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="map">
              <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>
            </div>
          </div>

          <div class="contact-info">
            <div class="col-md-5">
              <h4>My Contact Info</h4>
              <h5>Nullam elementum tellus pretium feugiat</h5>
              <p>Fusce fermen tum neque a rutrum varius odio pede ullamcorp-er tellus ut dignissim nisi risus non tortor</p>
              <ul>
                <li><i class="fa fa-home fa-2x"></i> Home # 38, Suite 54 Elizebth Street</li>
                <li><i class="fa fa-phone fa-2x"></i> +38 000 129900</li>
                <li><i class="fa fa-envelope fa-2x"></i> info@domain.net</li>
                <li><i class="fa fa-download fa-2x"></i> Download My Resume</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

              <div class="text-center"><button type="submit" class="contact submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!--footer-->
    <section class="footer" id="footer">
      <p class="text-center">
        <a href="#wrapper" class="gototop"><i class="fa fa-angle-double-up fa-2x"></i></a>
      </p>
      <div class="container">
        <ul>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
          <li><a href="#"><i class="fa fa-flickr"></i></a></li>
        </ul>
        <p>&copy; MyResume Theme. All Rights Reserved.</p>
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=MyResume
          -->
          <a href="https://bootstrapmade.com/">Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </section>

  </div>
  <script src="js/jquery.js"></script>
  <script src="js/modernizr.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/menustick.js"></script>
  <script src="js/parallax.js"></script>
  <script src="js/easing.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/smoothscroll.js"></script>
  <script src="js/masonry.js"></script>
  <script src="js/imgloaded.js"></script>
  <script src="js/classie.js"></script>
  <script src="js/colorfinder.js"></script>
  <script src="js/gridscroll.js"></script>
  <script src="js/contact.js"></script>
  <script src="js/common.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <script>
    wow = new WOW({}).init();
  </script>
  <script type="text/javascript">
    jQuery(function($) {
      $(document).ready(function() {
        //enabling stickUp on the '.navbar-wrapper' class
        $('.navbar-wrapper').stickUp({
          parts: {
            0: 'banner',
            1: 'aboutus',
            2: 'specialties',
            3: 'gallery',
            4: 'feedback',
            5: 'contact'
          },
          itemClass: 'menuItem',
          itemHover: 'active',
          topMargin: 'auto'
        });
      });

      //Google Map
      var get_latitude = $('#google-map').data('latitude');
      var get_longitude = $('#google-map').data('longitude');

      function initialize_google_map() {
        var myLatlng = new google.maps.LatLng(get_latitude, get_longitude);
        var mapOptions = {
          zoom: 14,
          scrollwheel: false,
          center: myLatlng
        };
        var map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map
        });
      }
      google.maps.event.addDomListener(window, 'load', initialize_google_map);
    });
  </script>
  <script src="contactform/contactform.js"></script>


</body>

</html>
