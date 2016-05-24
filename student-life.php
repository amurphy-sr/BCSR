<!DOCTYPE html>
<!--[if lt IE 9 ]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="_js/modernizr.custom.js"></script>
    <title>Student Life</title>

<?php include '_inc/head-js-css.php'; ?>

  </head>
  <body class="has-hero">

  
<?php include '_inc/nav.php'; ?>
    <div class="container-fluid page-container">
      
      <!-- Page Hero -->
      <div class="row-full-width">

        <div class="page-hero-container page-hero-with-video hero-with-nav">
          <div class="page-hero text-center">
            <h1 class="hero-title">It’s All In Your Backyard</h1>
            <p class="hero-text">When inspiration meets motivation—to study, to make and create, to work out, or even to just hang out—everything you need is close by.</p>
            <div class="hero-buttons">
              <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#introVideoModal">Watch Video</a>
            </div>
          </div>
        </div>

        <div id="hero-video-container" class="student-life">
            <div id="video-wrap">
                <video id="hero-video" preload="metadata" autoplay loop poster="/_images/video/homepage-hero-background.jpg" style="width: 100%;">
                   <source src="/_images/video/homepage-hero-background.mp4" type='video/mp4' />
                   <source src="/_images/video/homepage-hero-background.webm" type='video/webm' />
                   <source src="/_images/video/homepage-hero-background.ogv" type='video/ogg' />
                </video>
            </div>
        </div>

        <i id="intro_arrow_down" class="fa fa-angle-down"></i>
        
      </div>
      <!-- /Page Hero -->

    
      <!-- << Section One >> -->
      <div class="row-full-width">
        <!-- LEFT COLUMN -->
        <div class="column-left side-nav" data-spy="affix" data-offset-top="500">
          <div class="reveal-side-nav"></div>
          <!-- Subnav -->
          <ul class="flat-list list-group">
            <li><div class="list-group-item active section-header">Student Life</div></li>
            <li><a href="#" class="list-group-item">Program Overview</a></li>
            <li><a href="#" class="list-group-item">Social and Political Studies</a></li>
            <li><a href="#" class="list-group-item">Languages and Literature</a></li>
            <li><a href="#" class="list-group-item">Performing and Visual Arts</a></li>
            <li><a href="#" class="list-group-item">Science, Mathematics, and Computing</a></li>
            <li><a href="#" class="list-group-item">Beyond the Cirriculum</a></li>
            <li><a href="#" class="list-group-item">Faculty Bios</a></li>
            <li><a href="#" class="list-group-item">Academic Advising and Support</a></li>
            <li><a href="#" class="list-group-item">Career Development</a></li>
          </ul>
          <!-- /Subnav -->
        </div>
        <!-- /LEFT COLUMN-->

        <!-- CENTER COLUMN -->
        <div class="column-center">
          <!-- Intro -->
          <div>
            <h2 class="text-center">A LOOK AT OUR CAMPUS</h2>
            <p class="">You can walk the length of our wooded campus in about 10 minutes. But there's nothing small-minded about the facilities and resources you'll find at Simon's Rock. For you and your fellow students, these 275 acres become a sanctuary and a launchpad—a place where you'll grow into being a passionate learner, a leader, and an innovator.</p>
          </div>
          <!-- /Intro -->
        </div>
        <!-- /CENTER COLUMN -->

        <!-- RIGHT COLUMN-->
        <div class="column-right">
        </div>  
        <!-- /RIGHT COLUMN -->
      </div>
      <!-- << /Section One >> -->


      <!-- << Section Two >> -->
      <section id="student-life_carousel">
      
        <div class="container-fluid">
        
          <div class="student-life_carousel-row margin-bottom">
          
            <div class="row-inner">
            
              <div id="student-life_carousel_append"></div>
            
              <div id="student-life_carousel_original">
                <!-- Campus Slider -->
                <a href="#" class="student-life-carousel-item daniel-arts-center">
                  <div class="overlay"></div>
                  <h4>Daniel Arts Center</h4>
                </a>
                <a href="#" class="student-life-carousel-item fisher-science-and-academic-center">
                  <div class="overlay"></div>
                  <h4>Fisher Science and Academic Center</h4>
                </a>
                <a href="#" class="student-life-carousel-item kilpatrick-athletic-center">
                  <div class="overlay"></div>
                  <h4>Kilpatrick Athletic Center</h4>
                </a>
                <a href="#" class="student-life-carousel-item livingston-hall-student-union">
                  <div class="overlay"></div>
                  <h4>Livingston Hall Student Union</h4>
                </a>
                <a href="#" class="student-life-carousel-item liebowitz-center">
                  <div class="overlay"></div>
                  <h4>Liebowitz Center for International Studies</h4>
                </a>
                <a href="#" class="student-life-carousel-item alumni-library">
                  <div class="overlay"></div>
                  <h4>Alumni Library</h4>
                </a>
                <a href="#" class="student-life-carousel-item kellogg-music-center">
                  <div class="overlay"></div>
                  <h4>Kellogg Music Center</h4>
                </a>
                <!-- Campus Slider -->
              </div><!-- / student-life_carousel_original -->
              
              <div id="student-life_carousel_prepend"></div>
            
            </div><!-- / row-inner -->
          
          </div><!-- / events-carousel-row -->
        
          <a class="btn btn-link rockers_btn leftbtn"><i class="fa fa-chevron-left"></i></a>
          <a class="btn btn-link rockers_btn rightbtn"><i class="fa fa-chevron-right"></i></a>
        
        </div><!-- / .container-fluid -->
      
      </section>
      <!-- << /Section Two >> -->


      <!-- << Section Three >> -->
      <div class="row-full-width">
        <!-- LEFT COLUMN -->
        <div class="column-left">
        </div>
        <!-- /LEFT COLUMN-->

        <!-- CENTER COLUMN -->
        <div id="trigger1" class="column-center">
        <!-- Circle Navigation -->
          <div class="row padded">
            <div class="col-xs-6 col-sm-3">
              <a class="link-wrap circle-wrap yellow-bg" href="#">
                <div class="outer outer-circle">
                  <div class="inner">
                    <h4 class="circle-text">Life on Campus</h4>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-xs-6 col-sm-3">
              <a class="link-wrap circle-wrap black-bg" href="#">
                <div class="outer outer-circle">
                  <div class="inner">
                    <h4 class="circle-text">Clubs, Activities, and Athletics</h4>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-xs-6 col-sm-3">
              <a class="link-wrap circle-wrap orange-bg" href="#">
                <div class="outer outer-circle">
                  <div class="inner">
                    <h4 class="circle-text">Community Involvement</h4>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-xs-6 col-sm-3">
              <a class="link-wrap circle-wrap blue-bg" href="#">
                <div class="outer outer-circle">
                  <div class="inner">
                    <h4 class="circle-text">Great Barrington and the Berkshires</h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
        <!-- /Circle Navigation -->

          <!-- Text and Map -->
          <div class="row">
            <div class="col-sm-6">
              <h3 class="no-margin">Visit Us Virtually And In Person</h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi.</p>
              <div class="text-center">
                <a class="btn btn-primary">COME TO DISCOVERY DAY</a>
                <div class="page--link">
                  <a class="right-arrow" href="#"><i class="fa fa-angle-right bold"></i> Directions</a>
                  <a class="right-arrow" href="#"><i class="fa fa-angle-right bold"></i> Campus Map</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
            <!-- This link will need to go to the Campus Map page -->
            <a href="#">
              <img src="../_images/map-thumb.jpg" alt="map">
            </a>
            </div>
          </div>
          <!-- /Text and Map -->
        </div>
        <!-- /CENTER COLUMN -->

        <!-- RIGHT COLUMN-->
        <div class="column-right">
        </div>  
        <!-- /RIGHT COLUMN -->
      </div>
      <!-- << /Section Three >> -->

    </div><!-- /container-fluid -->

    <div class="modal" id="introVideoModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">[Title]</h4>
        </div>
        <div class="modal-body">
        <iframe width="1280" height="720" src="https://www.youtube.com/embed/YysT-Fe1RT8" allowfullscreen></iframe>
        </div>
        <div class="modal-footer">
        <button href="#" class="btn btn-primary">CTA LINK</button>
        </div>
      </div>
      </div>
    </div>

    <!-- << Section Two >> -->
      <?php include '_inc/events_carousel.php'; ?>
    <!-- << /Section Two >> -->

    <div class="row-full-width">
      <!-- Sidbar Mobile Nav -->
      <div class="side-nav-mobile">
        <!-- Subnav -->
        <ul class="flat-list list-group list-group-mobile">
          <li><div class="list-group-item active section-header">Student Life</div></li>
            <li><a href="#" class="list-group-item">Program Overview</a></li>
            <li><a href="#" class="list-group-item">Social and Political Studies</a></li>
            <li><a href="#" class="list-group-item">Languages and Literature</a></li>
            <li><a href="#" class="list-group-item">Performing and Visual Arts</a></li>
            <li><a href="#" class="list-group-item">Science, Mathematics, and Computing</a></li>
            <li><a href="#" class="list-group-item">Beyond the Cirriculum</a></li>
            <li><a href="#" class="list-group-item">Faculty Bios</a></li>
            <li><a href="#" class="list-group-item">Academic Advising and Support</a></li>
            <li><a href="#" class="list-group-item">Career Development</a></li>
        </ul>
        <!-- /Subnav -->
      </div>
      <!-- /Sidbar Mobile Nav-->
    </div>

<?php include '_inc/footer.php'; ?>
    
<?php include '_inc/bottom-js.php' ?>

  <script type="text/javascript" src="/_js/greensock/TweenMax.min.js"></script>
  <script type="text/javascript" src="/_js/scrollmagic/jquery.scrollmagic.min.js"></script>

  <script type="text/javascript" src="/_js/backgroundVideo.mod.js"></script>
  
  <script>
    
    jQuery( document ).ready(function($) {
    
      $('#hero-video').backgroundVideo({
          $outerWrap: $('.hero-video-container'),
          parallaxOptions: {
              effect: 1
          }
      });
      
      // init controller
      controller = new ScrollMagic();

      if (window.matchMedia("(min-width: 400px)").matches){
      var scene1 = new ScrollScene({
        triggerElement: '#trigger1',
        triggerHook: 'onEnter',
        offset: 100 /* offset the trigger 150px below #scene's top */
      })
      .setClassToggle('.circle-wrap', 'active') 
      .addTo(controller);

      //init controller
      var controller = new ScrollMagic();
      var scene1 = new ScrollScene({
        triggerElement: '#trigger1',
        triggerHook: 'onEnter',
        offset: 150 /* offset the trigger 150px below #scene's top */
      })
      .setClassToggle('.circle-text', 'active') 
      .addTo(controller);
      }
      
      // init controller
      controller = new ScrollMagic();

      // Page hero parallax
      var tween_page_hero = TweenMax.fromTo('.page-hero', 1.5, 
          { 'opacity' : 1, 'padding-top' : '180px'},
          { 'opacity' : 0.5, 'padding-top' : '250px'}
        );
      // build scene
      var scene_page_hero = new ScrollScene({duration: 300}).setTween(tween_page_hero).addTo(controller);


      });

  </script>

  </body>
</html>