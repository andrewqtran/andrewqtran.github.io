<!doctype html>
<html
xmlns:og="http://ogp.me/ns#"
xmlns:fb="http://www.facebook.com/2008/fbml"
manifest="cache.manifest">
<head>
<meta name="robots" content="noindex">
<meta charset=UTF-8" />
<meta name="viewport" content="width=1024" />
<meta name="description" content="Delivering visual solutions in science, medicine, and health-care through compelling illustration, animation, and design." />
<meta name='keywords' content='UI designer, graphic designer, 3D Animation, biological animation, biological art, biological artist, biological graphic, biological illustrator, medical illustration, medical artist, biomedical communication, biomedical visualization' />
<meta property="fb:admins" content="2500112" />
<meta property="og:image" content="http://andrewqtran.com/images/t-cell.jpg" />
<meta property="og:image" content="http://andrewqtran.com/images/t-cells.png" />
<meta property="og:image" content="http://andrewqtran.com/images/aqt_circle.png" />
<meta property="og:site_name" content="Andrew Q Tran - Biomedical Communicator" />
<meta property="og:title" content="Andrew Q Tran - Biomedical Communicator" />
<meta property="og:description" content="Delivering visual solutions in science, medicine, and health-care through compelling illustration, animation, and design." />
<meta property="og:url" content="http://andrewqtran.com" />
<meta property="og:type" content="website" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<title>Andrew Q Tran &middot; Biomedical Communicator + Designer</title>
<link ref="canonical" href='http://andrewqtran.com' />
<link rel="stylesheet" type="text/css" href="css/960_12_col.css"/>
<link rel="stylesheet" type="text/css" href="css/reset.css"/>
<link href="css/aqt.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Roboto:500,300,300italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="fonts/fonts.css"/>
<link rel="icon" href="favicon.png" sizes="16x16 32x32 114x114" type="image/png">
<link rel="apple-touch-icon" sizes="72x72 114x114" href="favicon.png"/>
<link href="favicon.ico" rel="SHORTCUT ICON" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<script type="text/javascript" src="nivo-slider/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/aqt.js"></script>
<link rel="stylesheet" type="text/css" href="nivo-slider/themes/default/default.css"/>
<link rel="stylesheet" type="text/css" href="nivo-slider/nivo-slider.css"/>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
<?php
function spamcheck($field) {
  // Sanitize e-mail address
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
  // Validate e-mail address
  if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
    return TRUE;
  } else {
    return FALSE;
  }
}
?>

<!-- S P L A S H   S L I D E -->
<div id="bannerWrap">
  <div id="banner">
    <div id="slide">
      <div class="slider-wrapper theme-default">
        <div id="slider" class="nivoSlider"> 
        <img src="images/mrp/div.jpg" alt="Binding of Quantum Dot nanoparticle" data-transition="fade"/> 
        <img src="images/slides/t_cells.jpg" alt="T-cells 3D" data-transition="fade"/> 
        <img src="images/slides/synapse.jpg" alt="Chemical synapse" data-transition="fade"/> 
        <img src="projects/3d_stilllife.jpg" alt="3D Still life" data-transition="fade"/> </div>
      </div>
    </div>
  </div>
</div>

<!-- N A V    M E N U -->
<div id="navWrap">
  <div id="nav" class="slideUp">
    <div class="container_12" >
      <div class="grid_4 alpha" id="logo"> <a href="#banner" class="smoothScroll">andrew<span id="q">q</span>tran</a></div>
      <div  style="float:right">
        <div class="grid_2"><a href="#about" class="menu smoothScroll" id="aboutNav"><i class="icon-user"></i>About</a></div>
        <div class="grid_2"><a href="#projects" class="menu smoothScroll" id="projectsNav"><i class="icon-windows"></i>Projects</a></div>
        <div class="grid_2"><a href="#research" class="menu smoothScroll" id="researchNav"><i class="icon-flaskfull"></i>Research</a></div>
        <div class="grid_2"><a href="#contact" class="menu smoothScroll"><i class="icon-paperplane"></i>Contact</a></div>
      </div>
    </div>
  </div>
</div>


<!--  P A G E   C O N T E N T -->
<div class="container_12 section" id="about">
  <div class="grid_12">
    <h1>About me</h1>
  </div>
  <div class="grid_3">
    <ul class="sideNav">
      <li><img src="images/profile.jpg" width="220px" height="220px" /></li>
      <li><a href="/cv" class="button" target="_blank">View Curriculum Vitae</a></li>
    
		<li><a href="https://www.linkedin.com/in/andrewqtran" class="button" id="linkedin" target="_blank" style="display:none">Connect on LinkedIn</a></li>
      <div class="compact" id="bio1">
        <li><img src="images/scientist.jpg" width="220px" height="220px"  style="opacity:0.3"/></li>
        <li><img src="images/artist.jpg" width="220px" height="220px"  style="opacity:0.3"/></li>
      </div>
    </ul>
  </div>
  <div class="grid_9" id="biography"><?php echo file_get_contents( "biography.php" );?></div>
  <div class="grid_9 compact omega" id="cv"><?php echo file_get_contents( "cv.html" ); ?> </div>
</div>
<hr />
<div class="clear"></div>
<div class="divider" id="about_div"><a href="#projects" class="smoothScroll"><i class="icon-fatarrowdown"></i></a>
  <div>I translate science <br />
    into visual inSpiration.<img class="draggable" src="images/t-cell.png" width="200" height="200" alt="3D T-cell by andrewqtran.com" title="Drag me with you!" /></div>
</div>

<div class="container_12 section" id="projects">
  <div class="grid_12"><h1>Projects</h1></div>
  <div id="gallery">

    <div class="closeEntry grid_3">
    <a href="#projects" class="button"><i class="icon-arrow-left"></i> Return to gallery</a>
    </div>

    <?php
    echo file_get_contents( "projects/dnd.html" );
    echo file_get_contents( "projects/gaain.html" ); 
    echo file_get_contents( "projects/ohbm.html" ); 
    echo file_get_contents( "projects/andrewqtran.html" ); 
    ?>
    <div class="clear"></div>
    <?php
    echo file_get_contents( "projects/dermatome.html" ); 
    echo file_get_contents( "projects/2012_world_cancers.html" ); 
    echo file_get_contents( "projects/logo-norcom.html" ); 
    echo file_get_contents( "projects/animation-continuity.html" ); 
    ?>
    <div class="clear"></div>
    <?php
    echo file_get_contents( "projects/3d_stilllife.html" ); 
    echo file_get_contents( "projects/pressure_ulcers.html" ); 
    echo file_get_contents( "projects/synapses.html" ); 
    echo file_get_contents( "projects/colon_cancer.html" ); 
    ?>
        
    <div class="clear"></div>
    <?php
    echo file_get_contents( "projects/baerveldt_glaucoma_implant.html" ); 
    echo file_get_contents( "projects/osteoporosis.html" ); 
    echo file_get_contents( "projects/knee_ligaments.html" ); 
    echo file_get_contents( "projects/thymus_child.html" ); 
    ?>
    <div class="clear"></div>

  </div>  
</div>
<hr />

<div class="divider" id="research_div"><a href="#research" class="smoothScroll"><i class="icon-fatarrowdown"></i></a>
  <div>Breakthrough research: <br />
    <span id="illuminated">Illuminated</span> </div>
</div>
<?php echo file_get_contents( "research.html" );?>
<hr />
<div class="divider" id="contact_div"><a href="#contact" class="smoothScroll"><i class="icon-fatarrowdown" ></i></a>
  <div>Got an exciting project?<br />
    Let's collaborate!</div>
</div>
<div class="container_12 section" id="contact">
  <div class="grid_12">
    <h1>contact</h1>
  </div>
  <div class="grid_6">
    <h2>let's talk</h2>
    <p>If you'd like to chat about a project, or just simply want to say hello, please feel free to  drop a line here, or email <a href="mailto:andrew[at]andrewqtran.com">andrew<span>@</span>andrewqtran<span>.</span>com</a>.</p><h2 class="inline_icon"><i class="icon-map-marker"></i></h2> <p>I am currently located in beautiful Northern California.</p>
  </div>
  <div class="grid_6">
  <?php
// display form if user has not clicked submit
if (!isset($_POST["submit"])) {
  ?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  <input class="textField" type="email" name="from" id="frmEmailA" placeholder="Email" required autocomplete="email">
  <input class="textField" type="text" name="subject" id="subject" placeholder="Subject">
  <textarea class="textField message" name="message" id="message" placeholder="Message" rows="6" required></textarea><br>
  <input type='submit' class='button' value='Send' name='submit' style='width:50%; margin:10px 0px'>
    <div class='draggable'><img src='images/airplane.png' class="airplane" /></div>
  <?php 
    } else {  // the user has submitted the form
      // Check if the "from" input field is filled out
      if (isset($_POST["from"])) {
        // Check if "from" email address is valid
        $mailcheck = spamcheck($_POST["from"]);
        if ($mailcheck==FALSE) {
          echo "Invalid input";
        } else {
          $from = $_POST["from"]; // sender
          $subject = $_POST["subject"];
          $message = $_POST["message"];
          // message lines should not exceed 70 characters (PHP rule), so wrap it
          $message = wordwrap($message, 70);
          // send mail
          mail("andrewqtran+site@gmail.com",$subject,$message,"From: $from\n");
          echo '<script language="javascript">document.location.href="#contact"</script>
          <h2>Thanks! We\'ll be in touch.</h2><div class=\'draggable\'><img src=\'images/airplane.png\' class="airplane fly" /></div>';
        }
      }
    }
  ?>
</form><br>
   
  </div>
</div>
</div>
</div>
<footer>
  <div id="footer">
    <div id="wrapper">
      <div class="container_12">
        <div class="grid_7">
          <h2>Brief profile</h2>
        </div>
        <div class="grid_1"><br />
        </div>
        <div class="grid_4 omega">
          <h2>Connect with Andrew</h2>
        </div>
        <div class="clear"></div>
        <div class="grid_1"><img src="images/footer.jpg" width="60" height="60" /></div>
        <div class="grid_7">
          <p><a href="#about" class="smoothScroll">Andrew Q. Tran</a> is a biomedical communicator and designer, with a <a href="http://bmc.med.utoronto.ca/bmc/" target="_blank">MScBMC degree</a> from the University of Toronto. His full name "Tran, Andrew" spelled backwards reads "We R DNA N Art". </p>
        </div>
        <div class="grid_1"><a href="https://twitter.com/LastMiracle" target="_blank"><i class="icon-twitter"></i></a> </div>
        <div class="grid_1"><a href="https://www.linkedin.com/in/andrewqtran" target="_blank"><i class="icon-linkedin"></i></a></div>
        <div class="grid_1"><a href="https://www.facebook.com/andrewqtran/" target="_blank"><i class="icon-facebookalt"></i></a></div>
        <div class="grid_1"><a href="//www.behance.net/andrewqtran" target="_blank"><i class="icon-behance"></i></a></div>
      </div>
    </div>
  </div>
  </div>
  <div id="copyright">
    <p> All contents copyright &copy; 2009-2015  Andrew Q. Tran. All rights reserved.<br />
      Please do not reproduce or redistribute without permission.</p>
    <span id="backtotop"><a href="#banner" class="smoothScroll">Visual Solutions</a><br />
    </span><span style="text-transform: none" id="easter"><p><i class="icon-crackedegg"></i> Did you know the T-cell & the airplane are draggable?
    </div>
</footer>

<script type="text/javascript">

/***********************************************
* Easy Email Scrambler script- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

var maildivider="[at]" //enter divider you use to divide your email address strings

for (i=0; i<=(document.links.length-1); i++){
if (document.links[i].href.indexOf(maildivider)!=-1)
document.links[i].href=document.links[i].href.split(maildivider)[0]+"@"+document.links[i].href.split(maildivider)[1]
}

 </script>
</body>
</html>