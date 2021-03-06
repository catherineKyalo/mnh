<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Online Data Management Tool">
    <meta name="author" content="Ministry of Health, Government of Kenya">

    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/fixed-layout.css" rel="stylesheet">
	<!--link href="<?php echo base_url(); ?>css/layout.css" rel="stylesheet" type="text/css" /-->
		<!--link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" /-->
        
        <!--script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script-->
		<!-- -->
		<!-- Attach CSS files -->
	
		<!--link rel="stylesheet" href="<?php echo base_url(); ?>css/styles.css"/-->
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--fav and touch icons -->
    <link rel="shortcut icon"  href="<?php echo base_url(); ?>/images/favicon.ico">
    
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <!--a class="brand" href="/c_front/"><img src="<?php echo base_url(); ?>/images/coat_of_arms-resized.png" width="40" height="40" alt="" /></a-->
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"></li><li><a href="#">Home</a></li>
              
            </ul>
          </div><!--/.nav-collapse -->
          
        </div>
      </div>
    </div>
    
<div class="container" align="center">
      <div align="center"><img src="<?php echo base_url(); ?>images/nscop.png" /></div>
    <hr>
  </div>

  <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="leaderboard">
        <h1>Ministry of Health Online Data Management tool</h1>
        <hr>
        
        <p>This is the Ministry of Health, Online Data Management tool to utilize realtime data for effective program planning</p>
        <div class="row">
        <div class="span4">
          <h2>Benefits</h2>
          </div>
          </div>
          <div class="span4">
          <ul>
           <li>Collect real time data</li>
           <li>Post surveys online for easy access</li>
            <li>Conduct timely Analysis</li>
            </ul>
        </div>
               
       
      </div>

  <!-- Example row of columns -->
      <div class="row">
      
        <div class="span5">
        <div class="selector">
     
          <h2>Take Survey Assesment <img src="<?php echo base_url(); ?>images/sur.PNG" alt="home" height="60" width="60" align="absmiddle"></h2>
          </p></p>
          
          
           <li><a href="<?php echo base_url(); ?>assesment/commodity">MNH Commodity Assessment</a></li>
           <li><a href="<?php echo base_url(); ?>assesment/supplies">MNH Supplies Assessment</a></li>
          
        </div>
        </div>
        
        <div class="span5" >
        
       <div class="selector">
      
          <h2>Surveys Analysis <img src="<?php echo base_url(); ?>images/analysis.PNG" alt="home" height="60" width="60" align="absmiddle"></h2>
          <p></p>
          
           <li><a href="<?php echo base_url(); ?>analysis/commodity">MNH Commodity Survey Analysis</a></li>
           <li><a href="<?php echo base_url(); ?>analysis/commodity">MNH Supplies Survey Analysis</a></li>
          
       </div>
        
      </div>
    </div>
      

  <hr>

     <?php $this->load->view('segments/footer');?>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap/bootstrap-combined.js"></script>
   

  </body>
</html>
