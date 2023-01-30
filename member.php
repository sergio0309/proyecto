
<?php include('header.php');?>
<?php include('admin/connect.php');?>
<?php include('session.php'); ?>

    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
      }

      .form-signin {
        max-width: 1000px;
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
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
  
    </style>
    
    <script type="text/javascript" src="js/jquery-2.0.2.min.js"></script> 

	<script type="text/javascript" src="js/sagallery.js"></script>
	<script src="gallery/jquery-photo-gallery/jquery-photo-gallery/js/jquery.quicksand.js" type="text/javascript"></script>
	<script src="gallery/jquery-photo-gallery/jquery-photo-gallery/js/jquery.easing.js" type="text/javascript"></script>
	<script src="gallery/jquery-photo-gallery/jquery-photo-gallery/js/script.js" type="text/javascript"></script>
	<script src="gallery/jquery-photo-gallery/jquery-photo-gallery/js/jquery.prettyPhoto.js" type="text/javascript"></script> 
	<link href="gallery/jquery-photo-gallery/jquery-photo-gallery/css/prettyPhoto.css" rel="stylesheet" type="text/css" />


	<script type="text/javascript" src="js/datepicker.js"></script>
<link href="css/datepicker.css" rel="stylesheet" type="text/css" />
        
		<script type="text/javascript">
		//<![CDATA[

		/*
				A "Reservation Date" example using two datePickers
				--------------------------------------------------

				* Functionality

				1. When the page loads:
						- We clear the value of the two inputs (to clear any values cached by the browser)
						- We set an "onchange" event handler on the startDate input to call the setReservationDates function
				2. When a start date is selected
						- We set the low range of the endDate datePicker to be the start date the user has just selected
						- If the endDate input already has a date stipulated and the date falls before the new start date then we clear the input's value

				* Caveats (aren't there always)

				- This demo has been written for dates that have NOT been split across three inputs

		*/

		function makeTwoChars(inp) {
				return String(inp).length < 2 ? "0" + inp : inp;
		}

		function initialiseInputs() {
				// Clear any old values from the inputs (that might be cached by the browser after a page reload)
				document.getElementById("sd").value = "";
				document.getElementById("ed").value = "";

				// Add the onchange event handler to the start date input
				datePickerController.addEvent(document.getElementById("sd"), "change", setReservationDates);
		}

		var initAttempts = 0;

		function setReservationDates(e) {
				// Internet Explorer will not have created the datePickers yet so we poll the datePickerController Object using a setTimeout
				// until they become available (a maximum of ten times in case something has gone horribly wrong)

				try {
						var sd = datePickerController.getDatePicker("sd");
						var ed = datePickerController.getDatePicker("ed");
				} catch (err) {
						if(initAttempts++ < 10) setTimeout("setReservationDates()", 50);
						return;
				}

				// Check the value of the input is a date of the correct format
				var dt = datePickerController.dateFormat(this.value, sd.format.charAt(0) == "m");

				// If the input's value cannot be parsed as a valid date then return
				if(dt == 0) return;

				// At this stage we have a valid YYYYMMDD date

				// Grab the value set within the endDate input and parse it using the dateFormat method
				// N.B: The second parameter to the dateFormat function, if TRUE, tells the function to favour the m-d-y date format
				var edv = datePickerController.dateFormat(document.getElementById("ed").value, ed.format.charAt(0) == "m");

				// Set the low range of the second datePicker to be the date parsed from the first
				ed.setRangeLow( dt );
				
				// If theres a value already present within the end date input and it's smaller than the start date
				// then clear the end date value
				if(edv < dt) {
						document.getElementById("ed").value = "";
				}
		}

		function removeInputEvents() {
				// Remove the onchange event handler set within the function initialiseInputs
				datePickerController.removeEvent(document.getElementById("sd"), "change", setReservationDates);
		}

		datePickerController.addEvent(window, 'load', initialiseInputs);
		datePickerController.addEvent(window, 'unload', removeInputEvents);

		//]]>
		</script>
		<!--sa error trapping-->
		<script type="text/javascript">
		function validateForm()
		{
		var x=document.forms["index"]["start"].value;
		if (x==null || x=="")
		  {
		  alert("You must enter your check in Date(click the calendar icon)");
		  return false;
		  }
		var y=document.forms["index"]["end"].value;
		if (y==null || y=="")
		  {
		  alert("You must enter your check out Date(click the calendar icon)");
		  return false;
		  }
		}
		</script>
		<!--sa minus date-->
		<script type="text/javascript">
			// Error checking kept to a minimum for brevity
		 
			function setDifference(frm) {
			var dtElem1 = frm.elements['start'];
			var dtElem2 = frm.elements['end'];
			var resultElem = frm.elements['result'];
			 
		// Return if no such element exists
			if(!dtElem1 || !dtElem2 || !resultElem) {
		return;
			}
			 
			//assuming that the delimiter for dt time picker is a '/'.
			var x = dtElem1.value;
			var y = dtElem2.value;
			var arr1 = x.split('/');
			var arr2 = y.split('/');
			 
		// If any problem with input exists, return with an error msg
		if(!arr1 || !arr2 || arr1.length != 3 || arr2.length != 3) {
		resultElem.value = "Invalid Input";
		return;
			}
			 
		var dt1 = new Date();
		dt1.setFullYear(arr1[2], arr1[1], arr1[0]);
		var dt2 = new Date();
		dt2.setFullYear(arr2[2], arr2[1], arr2[0]);

		resultElem.value = (dt2.getTime() - dt1.getTime()) / (60 * 60 * 24 * 1000);
		}
		</script>
        
        <script>
		function goBack()
 		 {
 		 window.history.back()
  			}
  
		</script>
		
<script type="text/javascript">
function validateForms()
{

var a=document.forms["cancelpage"]["confirmation"].value;
if ((a==null || a==""))
  {
  alert("Enter your confirmation code to cancel you reservation!!!");
  return false;
  }
 
if (document.cancelpage.cancelpolicy.checked == false)
{
alert ('Please agree the cancelation policy of this hotel!');
return false;
}
else
{
return true;
}
}
</script>


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
              <li class="active"><a href="member.php"><i class="icon-home"></i> Home</a></li>
              <li><a href="profile.php"><i class="icon-list"></i> Profile</a></li>
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
        				
      	
                                            
        	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">                      
                            <thead class=" hero-unit">
                                <tr>
                                
                                	<th width="110"><div align="center" style="margin-top:10px;">Image</div></th>
                                    <th width="20"><div align="center" style="margin-top:10px;">No.</div></th>
                                    <th width="100"><div align="center" style="font-size:16px">Price</div></th>
                                    <th width="100"><div align="center" style="font-size:16px">Balance</div></th>
                                    <th width="100"><div align="center" style="font-size:16px">Partial</div></th>
                                    <th width="180"><div align="center" style="font-size:16px">Category</div></th>
                                    <th width="160"><div align="center" style="font-size:16px">Arrival</div></th>
                                    <th><div align="center" style="font-size:16px">Departure</div></th>
                                    <th><div align="center" style="font-size:16px">Trans_code</div></th>
                                    <th width="280"><div align="center" style="font-size:16px">Actions</div></th>
                            
                          
                                </tr>
                            </thead>
                            <tbody>
                              
                                      <?php
									  
                                    $query = mysql_query("select * from tb_reserve where memberID = '$session_id' and status='reserved'") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
										$roomID = $row['roomID'];
										$balance =$row['balance'];
										$pre = $row['partial'];
									
                                    $qry = mysql_query("select * from tb_rooms where roomID = '$roomID'") or die(mysql_error());
                                    while ($rowroom = mysql_fetch_array($qry)) {
											
										$catid = $rowroom['category_id'];
										$price = $rowroom['price'];
										
                      					 $qr = mysql_query("select * from tb_category where category_id = '$catid'") or die(mysql_error());
                                    while ($rowcat = mysql_fetch_array($qr)) {
										 	
										
                                        ?>
                                 		
                                    

                              <tr>
                                        
                                        <td><img class="img-polaroid" src="admin/<?php echo $rowroom['location']?>" width="80" height="100"></td>
                                <td><?php echo $rowroom['name']?></td>
                                <td><?php 
								
									$f = sprintf ("%.2f", $price);
									
									echo 'PHP'." ". $f;
								
									?>
                                </td>
                                <td><?php 
								
									$b = sprintf ("%.2f", $balance);
									
									echo 'PHP'." ". $b;
								
									?>
                                </td>
                               <td><?php 
								
									$p = sprintf ("%.2f", $pre);
									
									echo 'PHP'." ". $p;
								
									?>
                                </td>
                                <td><?php echo $rowcat['category_name']?></td>
                                <td><?php echo $row['arrival']?></td>
                                <td><?php echo $row['departure']?></td>
                                <td><?php echo $row['transaction_code']?></td>
                                <td>
                                
                                
                                <a class="btn" href="#resched<?php echo $row['reserveID'];?>" role="button" data-toggle="modal">Re-sched <i class="icon-edit"></i></a> 
                                <a class="btn btn-info" href="#transfer<?php echo $row['reserveID'];?>" data-toggle="modal">Change <i class="icon-home"></i></a>
                               
                                </td>        	
               
<!-- Modal -->
<div id="resched<?php echo $row['reserveID'];?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Reservation Schedule Change</h3>
  </div>
  <div class="modal-body"> 
  
  
  
 
  
 <form method="post" action="resched.php" name="index" onSubmit="return validateForm()">
 
  <input name="reserveid" type="hidden" value="<?php echo $row['reserveID'];?>">
  <input name="price" type="hidden" value="<?php echo $price;?>">
  <input name="partial" type="hidden" value="<?php echo $pre;?>">
 
 <div align="center"> 	
				                    
						<span style="margin-right: 11px; color:rgba(255,255,255,1);">Start Date: <input type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" placeholder="Arrival" name="start" id="sd" value="" maxlength="10" readonly style="width: 210px; margin-left: 15px; border: 1px double #CCCCCC; padding:5px 10px;"/></span><br>
						<span style="margin-right: 11px; color:rgba(255,255,255,1);">End Date:<input type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" placeholder="Departure" name="end" id="ed" value="" maxlength="10" readonly style="width: 210px; margin-left: 23px; border: 1px double #CCCCCC; padding:5px 10px;" /></span><br>
<input type="hidden" name="result" id="result" /><br>
                        
                    
        

       </div>
                        
						
					  
  
           
      
  </div>
  
  <div class="modal-footer">
  	<button type="submit" name="resche" onClick="setDifference(this.form);" class="btn btn-info"><i class="icon-check"></i> CHECK AVAILABILITY</button>
    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Close</button>
    
  </div>
  
  </form>
  
</div><!--modal end -->  


                        
<!-- Modal -->
<div id="transfer<?php echo $row['reserveID'];?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Reservation Schedule Change</h3>
  </div>
  <div class="modal-body"> 
  
  <form action="res.php" method="post">
  
  <input name="reserveid" type="hidden" value="<?php echo $row['reserveID'];?>">
  
  <input name="roomp" type="hidden" value="<?php echo $roomID?>">
  
  <div align="center">Room Number: <select class="span2" name="roomID">
  <?php 
 	
	$resc = mysql_query("select * from tb_rooms where category_id = '$catid' and status = 'available'") or die (mysql_error());
 		while ($row_sche = mysql_fetch_array($resc)){
 
  
  ?>
  
 <option  value="<?php echo $row_sche['roomID']?>"><?php echo 'Room'." ".$row_sche['name'];?></option> 
 
 <?php }?>
  
  </select>
  
  </div>

  </div>
  
  <div class="modal-footer">
  	
    <button type="submit" class="btn btn-info" name="res"><i class="icon-edit"></i> Change</button>
    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Close</button>
    
  </div>
  
   </form>  
  
</div><!--modal end -->             
           
               
											
                       		  </tr>
                                  
                                  
                                                                     
                        		<?php } ?>
                                <?php } ?>
                                <?php } ?>
      
                            </tbody>
                        </table>
 

           
                        <hr>
 

    </div> <!-- /container -->
    
    
   



  </body>
  
  
</html>
