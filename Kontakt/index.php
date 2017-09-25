<?php 


   	if (isset($_POST["submit"])) {

   $crlf = "\r\n";

    //Get Data

    $name = strip_tags($_POST['name']);

    $email = strip_tags($_POST['email']);

    $phone = strip_tags($_POST['tel']);

    $message = strip_tags($_POST['message']);

    // Parse/Format/Verify Data

   $from = 'sfera interijer kontakt forma'; 
   $to = 'testMail@sfera-software.com'; 
   $subject = 'Poruka s sfera-interior.com kontakt forma ';



	 $message = ' 

<html><head></head>
    <body>
	<br/>
    <img src="http://sfera-software.com/sferaStranica/img/New_Logo_2.png" alt=""/>
        <div>

          <table style="width: 800px;" border="1">
 <tr>
<th colspan="2"><h3>Kontakt obrazac s sfera-interior.com kontakt forme</h3></th>
</tr>

  <tr> <td colspan="2"><p><strong>Subjekt : Kontat forma interijeri</strong></p> </td> </tr>

              
 <tr>
<td>Ime :</td>
 <td> <p>'.$name.'</p></td>
 </tr>

 <tr>
<td>tel :</td>
<td> <p>'.$phone.'</p></td>
 </tr>

<tr>
<td>E-mail :</td>
<td>  <p>'.$email.'</p></td>
</tr>

              

 <tr>
<tr><td colspan="2" style="background-color:#F1F1F1; ">
<table>
<tr><td>
 <p>'.$message.'</p>
</td></tr>
</table> 
</td>
</tr>

                     

</table>
</div>
</body>
</html>

';

	
$headers = 'From: ' . $from  . $crlf .
'Reply-To: ' . $from  . $crlf .
'Content-Type: text/html; charset=UTF-8';

	

   

 
   

    if (!$_POST['name']) 

   {

   $errName = 'Molimo unesite svoje ime';
   $warning ='Obrazac nije potvrđen, provjerite polja>';

   }

   

     if (!$_POST['tel']) 

   {

    $errTel = 'Molimo unesite svoj kontakt broj';
     $warning ='Obrazac nije potvrđen, provjerite polja';

    

   }

   

   

   if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 

           {
			   $errEmail = 'Molimo unjeti valjanu, ispravnu e-mail adresu';

               $warning ='Obrazac nije potvrđen, provjerite polja';

   }

   


    

      if (!$errName && !$errEmail && !$errMessage) {



	if (  mail($to, $sub, $message, $headers)) {



		$result='<div class="thankyou"><h1>Hvala što ste nas kontaktirali!</h1></div>';

              

                 echo "<script>alert('Hvala što ste nas kontaktirali!');</script>";



	} else {



		$result='<span class="errorForm"><h1>Problem s slanjem poruke, pokušajte kasnije!</h1></span>';

                

                



	}

}  }

?>







<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="hr"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Uređenje Prostora | Kontakt | Sfera Interior</title>
        <meta name="description" content="Preuređenje kuća, stanova i poslovnih prostora. Dizajn interijera. Uređenje po sistemu ključ u ruke.">
        <meta name="keywords" content="design interior, dizajn, uređenje interjera, uređenje prostora"/>
        
        
        <meta property="og:title" content="Preuređenje Prostora | Kontakt | Sfera Interior"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="https://www.sfera-interior.com/Kontakt"/>
<meta property="og:site_name" content="Preuređenje Prostora |  Kontakt | Sfera Interior"/>
<meta property="og:description" content="Preuređenje kuća, stanova i poslovnih prostora. Dizajn interijera. Uređenje po sistemu ključ u ruke. "/>
        
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="pfavico.ico">

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/main.css">
    
        <link href="../css/responsive.css" rel="stylesheet" type="text/css"/>
     <script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
     <script src="https://code.jquery.com/jquery-2.1.0.js"></script>
     

  <link rel="apple-touch-icon" sizes="57x57" href="../img/fav/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../img/fav/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../img/fav/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../img/fav/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../img/fav/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../img/fav/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../img/fav/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../img/fav/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../img/fav/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../img/fav/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../img/fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../img/fav/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="../img/fav/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff"> 
     
     
     

    </head>
    
    
    
    
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

     

    <header>  
        
        

  <!--- responsivni menu---->
  
  
       <div id="wrapper">
        <div class="overlay"></div>    
       <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="../index.html"> Sfera interior <img src="../img/logo.png" alt="logo"/></a>
                </li>
                <li>
                    <a href="../index.html">Početna</a>
                </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dizajn <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Dizajn kategorije</li>
                    <li> <a href="../Dizajn/index.html">Dizajn</a></li>
                    <li><a href="../Kuce/index.html" >Kuće i apartmani</a></li>
                    <li><a href="../Uredi/index.html">Poslovni prostori</a></li>
                    <li><a href="..Restorani/index.html" >Restorani</a></li>
                    <li><a href="../Klubovi/index.html" >Barovi i noćni klubovi</a></li>
                     <li><a href="../Hoteli/index.html">Hoteli</a></li>
                      <li><a href="../Casina/index.html">Casina</a></li>
                  </ul>
                </li>
                <li>
                    <a href="../Uredenje/index.html">Uređenje</a>
                </li>
                <li>
                    <a href="../3d.html" style="display:none;" >3D</a>
                </li>
                
                   <li>
                    <a href="" class="activeLi">Kontakt</a>
                </li>
      
            
                <li>
                    <a href="https://twitter.com/">Pratite nas</a>
                </li>
            </ul>
            

        </nav>
        <!-- /#sidebar-wrapper -->  
   
        
    
  
            <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            
             </div>
            
            
            </div>
  

  <!---end responsivni menu----->
 
 
 
        
        
        
  
  <a href="../index.html">        
 <img src="../img/logo.png" alt="logo"/>
  </a>
  
 
        
<nav id="primary_nav_wrap">
<ul>
  <li class="current-menu-item"><a href="../index.html">Početna</a></li>
  <li><a href="../Dizajn/index.html">Dizajn</a>
    <ul>
       <li><a href="../Kuce/index.html">Kuće i apartmani</a></li>
      <li><a href="../Uredi/index.html" >Poslovni prostori</a></li>
       <li><a href="../Restorani/index.html">Restorani</a></li>
      <li><a href="../Klubovi/index.html">Barovi i noćni klubovi</a></li>
       <li><a href="../Hoteli/index.html">Hoteli</a></li>
      <li><a href="../Casina/index.html">Casina</a></li>
     
    </ul>
  </li>
  
  
  <li>  <a href="../Uredenje/index.html">Uređenje</a></li>
  <li><a href="../3d.html" style="display:none;">3D</a> </li>
   <li><a href="" class="activeLi">Kontakt</a></li>
</ul>
</nav>    

 
 </header>
        
        
        
 
            
    <div class="container" style="overflow-x:hidden;">

        
        <div class="MapContainer">
            <h2>Contact</h2>

    
    <iframe class="map" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJr83ACVbWZUcRhtltN2BONWY&key=AIzaSyCPgyiwUJg6xRPHE5S-_bPw6VJ1slD8TmU" allowfullscreen></iframe>
    
        </div>
        
        
        
        <div class="row kontakt">
            
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <p>Tel/Fax: +385 1 91 311 7788 <br/>
                <span>Sfera Adria d.o.o. </span></p>
                <br/>
                <p>Draškovićeva 54, Zagreb
                    <br/>
                    <span>10 000 Croatia</span></p>
                <img src="img/mester.gif" alt="" class="gifImg"/>
                
            </div>
            
            
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 forma">
              <p>Pošaljite Vaš upit</p>
              
              <?php echo "$result";?>
              <?php echo "<span class='errorForm'><h1>$warning</h1></span>";?>
      
              
              
<form  method="post" id="contactForm" role="form" action="index.php">
                
<input class="inputForm" type="text" id="input-4" name="name" value="<?php echo htmlspecialchars($_POST['name']); ?>" oninvalid="this.setCustomValidity('Niste unjeli Vaše ime');" placeholder=" Ime"/>
<?php echo "<span class='errorForm'><p>$errName</p></span>";?>  
                  
                

<input class="inputForm" type="text" id="input-5"  name="email"  value="<?php echo htmlspecialchars($_POST['email']); ?>" oninvalid="this.setCustomValidity('Molimo Vas uneste svoj e-mail')" placeholder=" E-mail"/>
<?php echo "<span class='errorForm'><p>$errEmail</p></span>";?>
                  
                  
                  


<input class="inputForm" type="text" id="input-7" name="tel" value="<?php echo htmlspecialchars($_POST['tel']); ?>" oninvalid="this.setCustomValidity('Molimo Vas uneste svoj kontakt mobitel ili telefon')" placeholder=" Mobitel"/>
<?php echo "<span class='errorForm'><p> $errTel</p></span>";?>
                  
 
 
 
 
<textarea class="inputForm" name="message" rows="10" cols="75"   role="textbox" aria-autocomplete="list" aria-haspopup="true"  placeholder="Vaša poruka"><?php echo htmlspecialchars($_POST['message']);?></textarea>
<?php echo "<span class='errorForm'><p>$errMessage</p></div>";?>
 
        
        
    
        
        
<div style="text-align: right;" class="buttonKontakDiv">
<button class="contact_btn" name="submit" type="submit" value="Send">Pošalji</button>
</div>
        

 
</form>
              
              
              
                
 </div>
            
            
            
        </div>

    </div>        
            
        
        
      
    
        
        
            
<footer style="height: 100px;">
<p><a href="https://www.sfera-adria.com/">© 2017 by Sfera Adria</a></p>
</footer>

            
       
       
        
      
        
        

        
      
        
        
        
     
        <script src="../js/vendor/bootstrap.min.js"></script>
        <script src="../js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
        
        
        
        
        <script>
            //slider
        $(document).ready( function() {
        $('#myCarousel').carousel({
		interval:   1000
	});
	
	var clickEvent = false;
	$('#myCarousel').on('click', '.nav a', function() {
			clickEvent = true;
			$('.nav li').removeClass('active');
			$(this).parent().addClass('active');		
	}).on('slid.bs.carousel', function(e) {
		if(!clickEvent) {
			var count = $('.nav').children().length -1;
			var current = $('.nav li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if(count == id) {
				$('.nav li').first().addClass('active');	
			}
		}
		clickEvent = false;
	});
});

$('.carousel').carousel();

$('#myCarousel').on('slide.bs.carousel', function () {
  // do something…
});    
            
            
        </script>
        
        
   
        <script>
    
    $(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
        
        
    </script>
        
        
        
        
    </body>
</html>
