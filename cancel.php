
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Kingsfields Express Inn</title>

    <script type='text/javascript' src="admin/js/jquery.js"></script>


    <script type="text/javascript" src="admin/js/bootstrap-progressbar.js"></script>

    <link rel="stylesheet" type="text/css" href="admin/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="admin/css/bootstrap-progressbar.css">

 <style type="text/css">
 		body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      	}
        .progress .bar.six-sec-ease-in-out {
            -webkit-transition: width 6s ease-in-out;
            -moz-transition: width 6s ease-in-out;
            -ms-transition: width 6s ease-in-out;
            -o-transition: width 6s ease-in-out;
            transition: width 6s ease-in-out;
        }
        .progress.vertical .bar.six-sec-ease-in-out {
            -webkit-transition: height 6s ease-in-out;
            -moz-transition: height 6s ease-in-out;
            -ms-transition: height 6s ease-in-out;
            -o-transition: height 6s ease-in-out;
            transition: height 6s ease-in-out;
        }
        .progress.wide {
            width: 10px;
        }
        .vertical-progressbar-span {
            height: 100px;
        }
    </style>
    
    
 <?php

include('admin/connect.php');	


		
	$confirmation = $_POST['confirmation'];
	$b = $_POST['roomid'];
	
	function cancel($confirmation,$b){

        $qry = mysqli_query($connection,"select count('reserveID') from tb_reserve where transaction_code = '$confirmation' and roomID = '$b'") or die (mysqli_error());
			
		return (mysqli_result($qry, 0 ) == 1 ) ? true : false;
				
	}
	
	
	if (cancel($confirmation,$b) === false){
		
		echo '	<script type="text/javascript">
              	alert("Please check your Transaction code and room ID");
				window.location= "index.php";
              	</script>';	
				


	}
		
		else{
	
		$query = mysqli_query("update tb_reserve set transaction_code = 'cancel',status = 'cancel' WHERE 			transaction_code='$confirmation' and roomID = '$b'") or die (mysql_error());
			
		$sendc = mysqli_query("select * from tb_reserve where transaction_code = '$confirmation'") or die (mysql_error());
		while ($row = mysql_fetch_array($sendc)){
				$memberID = $row['memberID'];
				
		$mem = mysqli_query("select * from tb_member where memberID = '$memberID'") or die (mysqli_error());		
				$mrow = mysqli_fetch_array($mem);
				$fname = $mrow['firstname'];
				$lname = $mrow['lastname'];
				$email = $mrow['email'];
				
	
	
		$mail_To = $email;
                $mail_Subject = "Reservation notification From Kingsfields Express Inn";
                $mail_Body = "First Name: $fname\n".
		"Last Name: $lname\n".
		"Email: $email \n".
		"Confirmation Number: $confirmation\n ".
		"You have Successfully Cancel a Reservation Thanks!!";
                mail($mail_To, $mail_Subject, $mail_Body);
		
		
		}
		
	?>   
    
		
	
		

	

    <script>
        $(document).ready(function() {
		
               
                $('.progress .bar.text-filled-1').progressbar({
                    display_text: 1,
					         refresh_speed: 200,
                   transition_delay: 500,
             
            });
            
            });
   
    </script>
    
    <script type="text/javascript">
	$(document).ready(function()
		{
		 var delay = 2000;
		setTimeout(function(){ window.location = 'index.php';}, delay);
		alert('You have Successfully Cancel a Reservation Thanks!!');  
    });
	
	

	</script>
    

    <?php }?>

    
</head> 
<body>

  
			<div style="margin-top:200px;" class="modal">	
            	<div class="modal-body">
                		<h4>Cancelation process......</h4>
                		<div id="prog" class="progress progress-info progress-striped">
      <div class="bar text-filled-1" data-amount-part="1337" data-amount-total="9000" data-percentage="100">Cancel</div>
                </div>
                </div>
           	</div>     
		
		
   
</body>