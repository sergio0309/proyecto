<?php include('admin/connect.php');?>

<?php

$id=$_POST['roomid'];

		mysql_query("update tb_reserve set modeofpayment='Online' where memberID='$id'") or die(mysql_error());			

?>
		