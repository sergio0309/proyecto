<?php
include('admin/connect.php');

if(isset($_POST['resche'])){
	
$id = $_POST['reserveid'];
$start=$_POST['start'];
$end=$_POST['end'];
$result=$_POST['result'];
$price = $_POST['price'];
$total = $result * $price;
$pre = $total *.10;
$bal = $total - $pre;
$ppre = $_POST['partial'];
	
	if ($pre < $ppre){
		
		$par = $pre - $ppre;
		
	}
	
	else if($pre == $ppre){
		
		$par = $pre;
		
		
		}
	
		else{
			
			$par = $ppre - $pre;
			
			}
	

	$result = mysql_query("UPDATE tb_reserve SET partial = '$par',balance = '$bal',total = '$total', arrival = '$start',departure = '$end',days_no = '$result' where reserveid='$id'")or die(mysql_error());
	
?>

											<script type="text/javascript">
                                                alert("You are Succesfully Change Room");
                                                window.location= "member.php";
                                            </script>
                                            
                                            <?php }?>


