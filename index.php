<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Ian Percy - Infinite Possibilities</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
<link rel="stylesheet" href="css/line-awesome.css"> 
<link href="css/ionicons.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" rel="stylesheet">

 
 <?php
if (stristr($_SERVER['HTTP_USER_AGENT'],'mobi')!==TRUE) {
    ?>
  <link href="css/aos.css" rel="stylesheet">
<?php 
}
?>


  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  
</head>

<body>

  <!--==========================
    Header
  ============================ -->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
      <!--   <h1><a href="#intro" class="scrollto">Ian Percy</a></h1> -->
      </div>
	
      <nav id="nav-menu-container">
        <ul class="nav-menu">
			<li>Are you ready for a breakthrough?</li>
          <li><a href="tel:480-502-3898" class="call-btn scrollto">
              <span>Call Ian Percy<br /> 480-502-3898 </span></a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
	
  </header><!-- #header -->
  	
<!--==========================
    Intro Section
  ============================-->
  <main id="main">
       
<div id="scroll-animate">
  <div id="scroll-animate-main">
  <section id="intro" class="wrapper-parallax">

    <div class="intro-text">
      <h2>A World of Possibilities <br />is waiting for you and your organization
		</h2>
      <p data-aos="fade-right" data-aos-easing="ease-in-out">...but not patiently!</p>
<a href="#ceos" class="get-started-btn scrollto">Get Started
<span>Embrace the impossible</span></a>	  
</div>
  </section><!-- #intro -->



    <div data-spy="affix" id="dot-nav">
    	<ul>
	      <li class="awesome-tooltip" title="Home"><a href="#home"></a></li>
	      <li class="awesome-tooltip" title="CEOS: Will You Prioritize Problems or Possibilities"><a href="#ceos"></a></li>
		  <li class="awesome-tooltip" title="Where Possibilities Come From"><a href="#key-ingredients"></a></li>
		  <li class="awesome-tooltip" title="Aligning the Organization is Essential"><a href="#align"></a></li>
	      <li class="awesome-tooltip" title="What Next"><a href="#next"></a></li>
		  <li class="awesome-tooltip" title="About Ian"><a href="#about"></a></li>
		  <li class="awesome-tooltip" title="Examples of Possibility Thinking"><a href="#examples"></a></li>
		  <li class="awesome-tooltip" title="Do Your Impossible - Articles"><a href="#more-features"></a></li>
	      <li class="awesome-tooltip" title="Contact"><a href="#contact"></a></li>
	    </ul>
	</div>
    <!--==========================
     CEOs Section
    ============================-->
	<?php include 'php/ceos.php';?>
   <!-- #ceos -->

    <!--==========================
      Key Ingredients Section
    ============================-->
	<?php include 'php/key-ingredients.php';?>
  <!-- #key ingredients -->

    <!--==========================
      Align Section
    ============================-->
    
	<?php include 'php/align.php';?>
	
	<!-- #align -->


    
    <!--==========================
      Next Section
    ============================-->
	<?php include 'php/next.php';?>

	<!-- #next -->
	
	    <!--==========================
     About Ian Section
    ============================-->
	
   <?php include 'php/about.php';?>

<!-- #about -->

<!--==========================
     Examples Section
    ============================-->
	
	<?php include 'php/examples.php';?>

		    <!-- #examples -->

<!--==========================
      Examples (More Features) Section
    ============================-->
	
	<?php include 'php/articles.php';?>
    <!-- #more-features -->


<!--==========================
     Contact Section
    ============================-->
	
	 <?php include 'php/contact.php';?>

	    <!-- #contact -->

  </main>

  <!--==========================
     Footer Section
    ============================-->
	
   <?php include 'php/footer.php';?>
    <!-- #footer -->

       
  <a href="#" class="back-to-top"><i class="la la-angle-up"></i></a> 
 


  <!-- JavaScript Libraries -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/easing.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/modernizr-custom.js"></script>
 <!-- <script src="js/nav.js"></script> -->
<script>
 $(document).ready(function(){
    $('.awesome-tooltip').tooltip({
        placement: 'left'
    });   

    $(window).bind('scroll',function(e){
      dotnavigation();
    });
    
    function dotnavigation(){
             
        var numSections = $('section').length;
        
        $('#dot-nav li a').removeClass('active').parent('li').removeClass('active');     
        $('section').each(function(i,item){
          var ele = $(item), nextTop;
          
          console.log(ele.next().html());
          
          if (typeof ele.next().offset() != "undefined") {
            nextTop = ele.next().offset().top;
          }
          else {
            nextTop = $(document).height();
          }
          
          if (ele.offset() !== null) {
            thisTop = ele.offset().top - ((nextTop - ele.offset().top) / numSections);
          }
          else {
            thisTop = 0;
          }
          
          var docTop = $(document).scrollTop();
          
          if(docTop >= thisTop && (docTop < nextTop)){
            $('#dot-nav li').eq(i).addClass('active');
          }
        });   
    }

    /* get clicks working */
    $('#dot-nav li').click(function(){
      
        var id = $(this).find('a').attr("href"),
          posi,
          ele,
          padding = 0;
      
        ele = $(id);
        posi = ($(ele).offset()||0).top - padding;
      
        $('html, body').animate({scrollTop:posi}, 'slow');
      
        return false;
    });

/* end dot nav */
});

</script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>



  <!-- Contact Form JavaScript File -->
  <script src="js/contact/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
