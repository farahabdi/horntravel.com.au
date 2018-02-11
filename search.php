<!DOCTYPE html>
<html lang="en">
<head>
<title>Search</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/script.js"></script> 
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/sForm.js"></script>
<script src="search/search.js"></script>

<script>
 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});
 }); 

   
</script>
<!--[if lt IE 8]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<![endif]-->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>

<body>
<!--==============================
              header
=================================-->
<header>  
  <section id="stuck_container">
  <!--==============================
              Stuck menu
  =================================-->
    <div class="container">
      <div class="row">
        <div class="grid_12 rel">
          <h1>
            <a href="index.html">
              <img src="images/logo.png" alt="Logo alt">
            </a>
          </h1>
          <div class="navigation ">
            <nav>
              <ul class="sf-menu">
               <li><a href="index.html">home</a></li>
               <li><a href="index-1.html">about us</a>
                 <ul>
                    <li><a href="#">Consequat ant</a>
                      <ul>
                        <li><a href="#">Consequat </a></li>
                        <li><a href="#">Lorem ipsum </a></li>
                        <li><a href="#">Sit amet</a></li>
                        <li><a href="#">Consectetuer </a></li>
                        <li><a href="#">Adipiscing eli</a></li>
                        <li><a href="#">Pellentesq</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Sit amet</a></li>
                    <li><a href="#">Consectetuer </a></li>
                    <li><a href="#">Adipiscing elit</a></li>
                    <li><a href="#">Pellentesque </a></li>
                    <li><a href="#">Elementum vel</a></li>
                 </ul>
               </li>
               <li><a href="index-2.html">tours</a></li>
               <li><a href="index-3.html">blog</a></li>
               <li><a href="index-4.html">contacts</a></li>
             </ul>
            </nav>
            <div class="clear"></div>
          </div>  
        <div class="clear"></div>  
      </div>
     </div> 
    </div> 
  </section>
</header>
<!--=====================
          Content
======================-->
<section id="content">
  <article class="content_white">
    <div class="container">
      <div class="row">
        <div class="grid_12">
          <h3 class="head__2">Search result:</h3>
    		  <div id="search-results" class="anim_left"></div>
        </div>
      </div>
    </div>
  </article> 
</section>
<!--==============================
              footer
=================================-->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="grid_4">
        <h5>About Us</h5>
        Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer ipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nulla vel diam. Sed in lacus ut enim. <br>
        <a href="#" class="btn">read more</a>
      </div>
      <div class="grid_4">
        <h5>Popular articles</h5>
        <ul>
          <li><a href="#">Fusce euismod consequat ante. Lorem ipsum dolor sit amet</a></li>
          <li><a href="#">Consequat ante. Lorem ipsum dolor sit amet, consectetuer </a></li>
          <li><a href="#">Sed hete euismod consequat ante. Lorem ipsum dolor sit </a></li>
        </ul>
      </div>
      <div class="grid_4">
        <h5>Newsletter</h5>
        <form id="newsletter">
          <p>Sign-up to be notified about news</p>
              <div class="rel">
          <div class="success">Your request has been sent!</div>
            <label class="email">
                <input type="email" value="Email">
                <span class="error">*This is not a valid email address.</span></label></div>
            <br class="clear"><a href="#" class="btn" data-type="submit">Submit</a>
          </form>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="grid_12"> 
        <div class="copyright">
          <div class="socials">
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google-plus"></a>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-skype"></a>
            <a href="#" class="fa fa-pinterest-square"></a>
          </div>
          <span class="brand">Travel agency </span> &copy; <span id="copyright-year"></span> All Rights Reserved &nbsp;&nbsp;|&nbsp;&nbsp; <a href="index-5.html">Privacy Policy</a>
      </div>
    </div>
  </div> 
  </div>   
</footer>
<a href="#" id="toTop" class="fa  fa-arrow-circle-up"></a>
</body>
</html>

