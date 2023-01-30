<?php include('header.php');?>
<?php include('admin/connect.php');?>
<?php include('session.php'); ?>

     <style type="text/css">
 
      .form-signin {
        max-width: 600px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
	  
	  
    </style>
    
    <script type="text/javascript" src="js/jquery-2.0.2.min.js"></script> 

	<script type="text/javascript" src="js/sagallery.js"></script>
	<script src="gallery/jquery-photo-gallery/jquery-photo-gallery/js/jquery.quicksand.js" type="text/javascript"></script>
	<script src="gallery/jquery-photo-gallery/jquery-photo-gallery/js/jquery.easing.js" type="text/javascript"></script>
	<script src="gallery/jquery-photo-gallery/jquery-photo-gallery/js/script.js" type="text/javascript"></script>
	<script src="gallery/jquery-photo-gallery/jquery-photo-gallery/js/jquery.prettyPhoto.js" type="text/javascript"></script> 
	<link href="gallery/jquery-photo-gallery/jquery-photo-gallery/css/prettyPhoto.css" rel="stylesheet" type="text/css" />


  </head>


  <body>
  
 	
     <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Kingsfields Express inn</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="member.php"><i class="icon-home"></i> Home</a></li>
              <li class="active"><a href="profile.php"><i class="icon-list"></i> Profile</a></li>
              <li><a href="contact.php"><i class="icon-envelope"></i> Contact</a></li>
            </ul>
            <form class="navbar-form pull-right">

            <div class="btn-group">
  					<button type="submit" class="btn">Actions</button>
  					<button class="btn dropdown-toggle" data-toggle="dropdown">
    				<span class="caret"></span>
  					</button>
  				<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                	<li class="divider"></li>
    				<li><a href="#logout" data-toggle="modal"><i class="icon-off"></i> Log-out</a></li>  
                    
                 
  				</ul>
			</div>
              
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
 	

	<!--Modal Log-out --> 
<div id="logout" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
  </div>
  <div class="modal-body">
  <div class="alert alert-info">Are you Sure you Want to <strong>Logout</strong>?</div>
  </div>
  <div class="modal-footer">
      <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Close</button>
      <a href="logout.php" class="btn btn-info"><i class="icon-off"></i> Logout</a>
  </div>
</div>             
                            
<!--Logout end -->  


    <div class="container">

	<hr>
        				
      <div class="form-signin">	
          
          
          <div align="center" class="alert alert-info"><i class="icon-info-sign"></i>Member Informations</div>
          
          <div class="row-fluid">	
          
          	<div class="control-group">
          	
            	<div class="controls">
          			
                    <div align="center">
                	
                    	<?php 
						
						$query = mysql_query("select * from tb_member where memberID = '$session_id'") or die (mysql_error());
						while($row = mysql_fetch_array($query)){	
						?>
                    
                 <p>Full Name: <?php echo $row['firstname']." ". $row['lastname']?></p>
                 <p>Email Address: <?php echo $row['email']?></p>
                 <p>Contact no.: <?php echo $row['contact_number']?></p>
                 <p>Address: <?php echo $row['address']?></p>
                 <p>Zip: <?php echo $row['zip']?></p>
                 <p>Country: <?php echo $row['country']?></p>
                    
                	</div>
                    
                    <?php }?>
                
          		</div>
                
            </div>
            	
          </div>
           
      </div>     
           
    <hr>
 

    </div> <!-- /container -->
    
    
   



  </body>
  
  
</html>
