
<?php include('header.php');?>
<?php include('admin/connect.php');?>
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
    
    <link rel="stylesheet" type="text/css" href="admin/css/DT_bootstrap.css">   
	<script type="text/javascript" charset="utf-8" language="javascript" src="admin/js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="admin/js/DT_bootstrap.js"></script>


	<script type="text/javascript" src="js/sagallery.js"></script>
	<script src="gallery/jquery-photo-gallery/jquery-photo-gallery/js/jquery.quicksand.js" type="text/javascript"></script>
	<script src="gallery/jquery-photo-gallery/jquery-photo-gallery/js/jquery.easing.js" type="text/javascript"></script>
	<script src="gallery/jquery-photo-gallery/jquery-photo-gallery/js/script.js" type="text/javascript"></script>
	<script src="gallery/jquery-photo-gallery/jquery-photo-gallery/js/jquery.prettyPhoto.js" type="text/javascript"></script> 
	<link href="gallery/jquery-photo-gallery/jquery-photo-gallery/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    
<script>

function goBack()
  {
  window.history.back()
  }
  
</script>
 

  </head>
  

  <body>
  
 
 	
	


    <div class="container">
    
    
    

     <div class="form-signin">
      
      <div class="btn-group">
  <button style="margin-left:0px; margin-bottom:0px;" class="btn" onClick="goBack()"><i class="icon-hand-left"></i> Back</button>
  <button class="btn dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
  
  
  </ul>
</div>

      
      
        <h4>Step 2: Please Select Rooms</h4>
           
            
        	 <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            
                            <div class="progress progress-info progress-striped active">
                            	<div class="bar" style="width: 100%;">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-list"></i>&nbsp;Data Table</strong>
                                </div>
                            </div>
                            <thead class=" hero-unit">
                                <tr>
                                    <th><div align="center" style="margin-top:10px;">Image</div></th>
                                    <th><div align="center">Descriptions</div></th>
                                    <th width="60"><div align="center" style="font-size:18px;">Adults</div><div style="font-size:10px;" align="center"> Age: 8+</div></th>
                                    <th width="60"><div align="center" style="font-size:18px;">Childs</div><div style="font-size:10px;" align="center"> Age: 0-7</div></th>
                                    <th><div align="center">Prices per night</div></th>
                                    <th><div align="center">Amount</div></th>
                                    <th><div align="center">Action</div></th>
                                </tr>
                            </thead>
                            <tbody>
                              
                                    <tr>
                                        <td width="130"><a href="admin/upload/without window and without garage room.jpg" class="image-zoom" rel="prettyPhoto[gallery]" title="Without window and without garage room"><img class="img-polaroid" src="admin/upload/without window and without garage room.jpg" height="120" width="120"></a></td> 
                                        <td width="200"><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:14px;">Without window and without garage room</div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:16px;"><i class="icon-user"></i><i class="icon-user"></i></div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:12px;">Not Allowed</div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:16px;">PHP 796.73</div><div align="center">900.00 incl. Taxes & Fees</div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:16px;">PHP 900.00</div><div align="center" style="font-size:10px;">for 1 night</div><div align="center" style="font-size:12px; color:rgba(0,204,0,1)">Pay only 10% to reserve!</div></td>
                                        <td><div align="center" style="margin-top:20px;"><a href="#cat1" class="btn btn-info" data-toggle="modal" role="button"><i class="icon-th-large"></i> Available</a></div></td> 
                           	  		</tr>
                                    
                                    <tr>
                                        <td width="130"><a href="admin/upload/window side room without garage.jpg" class="image-zoom" rel="prettyPhoto[gallery]" title="Window and without garage room"><img class="img-polaroid" src="admin/upload/window side room without garage.jpg" height="120" width="120"></a></td> 
                                        <td width="200"><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:14px;">Window and without garage room</div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:16px;"><i class="icon-user"></i><i class="icon-user"></i></div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:12px;">Not Allowed</div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:16px;">PHP 796.73</div><div align="center">900.00 incl. Taxes & Fees</div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:16px;">PHP 900.00</div><div align="center" style="font-size:10px;">for 1 night</div><div align="center" style="font-size:12px; color:rgba(0,204,0,1)">Pay only 10% to reserve!</div></td>
                                        <td><div align="center" style="margin-top:20px;"><a href="#cat2" class="btn btn-info" data-toggle="modal" role="button"><i class="icon-th-large"></i> Available</a></div></td> 
                           	  		</tr>
                                    
                                   
                                    
                                     <tr>
                                        <td width="130"><a href="admin/upload/Vip room without Garage.jpg" class="image-zoom" rel="prettyPhoto[gallery]" title="Vip room without Garage"><img class="img-polaroid" src="admin/upload/Vip room without Garage.jpg" height="120" width="120"></a></td> 
                                        <td width="200"><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:14px;">Vip room without Garage</div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:16px;"><i class="icon-user"></i><i class="icon-user"></i></div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:12px;"><i class="icon-user"></i></div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:16px;">PHP 973.50</div><div align="center">1100.00 incl. Taxes & Fees</div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:16px;">PHP 1100.00</div><div align="center" style="font-size:10px;">for 1 night</div><div align="center" style="font-size:12px; color:rgba(0,204,0,1)">Pay only 10% to reserve!</div></td>
                                        <td><div align="center" style="margin-top:20px;"><a href="#cat3" class="btn btn-info" data-toggle="modal" role="button"><i class="icon-th-large"></i> Available</a></div></td> 
                           	  		</tr>
                                    
                                     <tr>
                                        <td width="130"><a href="admin/upload/Vip room with garage.jpg" class="image-zoom" rel="prettyPhoto[gallery]" title="Vip room Garage"><img class="img-polaroid" src="admin/upload/Vip room with garage.jpg" height="120" width="120"></td> 
                                        <td width="200"><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:14px;">Vip room with garage</div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:16px;"><i class="icon-user"></i><i class="icon-user"></i></div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:12px;"><i class="icon-user"></i><i class="icon-user"></i></div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:16px;">PHP 973.50</div><div align="center">1100.00 incl. Taxes & Fees</div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:16px;">PHP 1100.00</div><div align="center" style="font-size:10px;">for 1 night</div><div align="center" style="font-size:12px; color:rgba(0,204,0,1)">Pay only 10% to reserve!</div></td>
                                        <td><div align="center" style="margin-top:20px;"><a href="#cat4" class="btn btn-info" data-toggle="modal" role="button"><i class="icon-th-large"></i> Available</a></div></td> 
                           	  		</tr>
                       
								     
                            </tbody>
                        </table>
        
     
      </div>

    </div> <!-- /container -->
    
    
    <!-- Modal cat1 -->
<div id="cat1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 id="myModalLabel">Without window and without garage rooms</h4>
  </div>
  <div class="modal-body">
  
 
 	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example"                      
                            <thead>
                                <tr>
                                
                                    <th><div align="center" style="font-size:16px">Price</div></th>
                                    <th><div align="center" style="font-size:16px">Total</div></th>
                                    <th><div align="center" style="font-size:16px">Balance</div></th>
                                    <th><div align="center" style="font-size:16px">10%</div></th>
                                    <th><div align="center" style="font-size:16px">Status</div></th>
                                    <th><div align="center" style="font-size:16px">Reserve</div></th>
                          
                                </tr>
                            </thead>
                            <tbody>
                              
                                      <?php
									  
                                    $query = mysql_query("select * from tb_rooms where category_id='1' order by roomID ") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $roomID = $row['roomID'];
										 
										
                                        ?>
                                 
                                    

                                        <tr>
                                        	 
                                    		<td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo'.00';}?></div></td>
                                            <td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo'.00';}?></div></td> 
                                            <td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo'.00';}?></div></td> 
 											<td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo'.00';}?></div></td>
                                            <td><div align="center" style="margin-top:20px"><strong>
											<?php if ($row['status']=='Available'){
												
												$disabled = "";
												
												echo 'Available';}
																								
													elseif($row['status']=='Reserved'){
														
															echo 'Reserved';
													
													
															$disabled = 'disabled="disabled"';
														
														}
														
													else{
													
													echo 'Occupied';
													
													
													$disabled = 'disabled="disabled"';
													
													}
													
												
												?></strong></div></td>						
                                           
                                       
                                            
                                            <form action="" method="post">
                                             
                                             <input name="start" type="hidden" value="">
                                             <input name="roomID" type="hidden" value="<?php echo $row['roomID'];?>">
                                             <input name="end" type="hidden" value="">
                                             <input name="result" type="hidden" value="">                                             <input name="total" type="hidden" value="">
                                             <input name="pre" type="hidden" value="">
                                             <input name="bal" type="hidden" value=""> 
                                                     
                                             <td><div align="center" style="margin-top:20px"><button class="btn btn-info" name="submit" type="submit" <?php echo $disabled?>><i class="icon-hand-right"></i> Room <?php echo $row['name'];?></button></div></td>
                                             
                                             </form>   						   
											
                                  </tr>
                                  
                                  
                                                                     
                        
                                <?php } ?>
                            </tbody>
                        </table>
 
    
    
  </div>
  <div class="modal-footer">

  	<div class="pull-left"><label class="text-info"><strong>Number of night/s:</strong></label></div>   
    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Close</button>
  </div>
</div><!--Modal cat1 end -->

  

<!-- Modal cat2 -->
<div id="cat2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 id="myModalLabel">Window and without garage rooms</h4>
  </div>
  <div class="modal-body">
  
 
 	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example"                      
                            <thead>
                                <tr>
                                
                                    <th><div align="center" style="font-size:16px">Price</div></th>
                                    <th><div align="center" style="font-size:16px">Total</div></th>
                                    <th><div align="center" style="font-size:16px">Balance</div></th>
                                    <th><div align="center" style="font-size:16px">10%</div></th>
                                    <th><div align="center" style="font-size:16px">Status</div></th>
                                    <th><div align="center" style="font-size:16px">Reserve</div></th>
                          
                                </tr>
                            </thead>
                            <tbody>
                              
                                      <?php
									  
                                    $query = mysql_query("select * from tb_rooms where category_id='2' order by roomID ") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $roomID = $row['roomID'];
										$price = $row['price'];
										$total = $price * $result;
										$pre = $total*.10;
										$bal = $total - $pre 
										
                                        ?>
                                 
                                    

                                        <tr>
                                        	 
                                    		<td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo $price; echo'.00';}?></div></td>
                                            <td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo $total; echo'.00';}?></div></td> 
                                            <td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo $bal; echo'.00';}?></div></td> 
 											<td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo $pre; echo'.00';}?></div></td>
                                            <td><div align="center" style="margin-top:20px"><strong>
											<?php if ($row['status']=='Available'){
												
												$disabled = "";
												
												echo 'Available';}
																								
													elseif($row['status']=='Reserved'){
														
															echo 'Reserved';
													
													
															$disabled = 'disabled="disabled"';
														
														}
														
													else{
													
													echo 'Occupied';
													
													
													$disabled = 'disabled="disabled"';
													
													}
													
												
												?></strong></div></td>						
                                           
                                       
                                            
                                            <form action="" method="post">
                                             
                                             <input name="start" type="hidden" value="<?php echo $start;?>">
                                             <input name="roomID" type="hidden" value="<?php echo $row['roomID'];?>">
                                             <input name="end" type="hidden" value="<?php echo $end;?>">
                                             <input name="result" type="hidden" value="<?php echo $result;?>">                                             <input name="total" type="hidden" value="<?php echo $total;?>">
                                             <input name="pre" type="hidden" value="<?php echo $pre;?>">
                                             <input name="bal" type="hidden" value="<?php echo $bal;?>"> 
                                                     
                                             <td><div align="center" style="margin-top:20px"><button class="btn btn-info" name="submit" type="submit" <?php echo $disabled?>><i class="icon-hand-right"></i> Room <?php echo $row['name'];?></button></div></td>
                                             
                                             </form>   						   
											
                                  </tr>
                                  
                                  
                                                                     
                        
                                <?php } ?>
                            </tbody>
                        </table>
 
    
    
  </div>
  <div class="modal-footer">

  	<div class="pull-left"><label class="text-info"><strong>Number of night/s:</strong> <?php echo $result;?></label></div>   
    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Close</button>
  </div>
</div><!--Modal cat2 end -->



<!-- Modal cat3 -->
<div id="cat3" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 id="myModalLabel">Vip room without Garage</h4>
  </div>
  <div class="modal-body">
  
 
 	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example"                      
                            <thead>
                                <tr>
                                
                                    <th><div align="center" style="font-size:16px">Price</div></th>
                                    <th><div align="center" style="font-size:16px">Total</div></th>
                                    <th><div align="center" style="font-size:16px">Balance</div></th>
                                    <th><div align="center" style="font-size:16px">10%</div></th>
                                    <th><div align="center" style="font-size:16px">Status</div></th>
                                    <th><div align="center" style="font-size:16px">Reserve</div></th>
                          
                                </tr>
                            </thead>
                            <tbody>
                              
                                      <?php
									  
                                    $query = mysql_query("select * from tb_rooms where category_id='3' order by roomID ") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $roomID = $row['roomID'];
										$price = $row['price'];
										$total = $price * $result;
										$pre = $total*.10;
										$bal = $total - $pre 
										
                                        ?>
                                 
                                    

                                        <tr>
                                        	 
                                    		<td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo $price; echo'.00';}?></div></td>
                                            <td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo $total; echo'.00';}?></div></td> 
                                            <td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo $bal; echo'.00';}?></div></td> 
 											<td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo $pre; echo'.00';}?></div></td>
                                            <td><div align="center" style="margin-top:20px"><strong>
											<?php if ($row['status']=='Available'){
												
												$disabled = "";
												
												echo 'Available';}
																								
													elseif($row['status']=='Reserved'){
														
															echo 'Reserved';
													
													
															$disabled = 'disabled="disabled"';
														
														}
														
													else{
													
													echo 'Occupied';
													
													
													$disabled = 'disabled="disabled"';
													
													}
													
												
												?></strong></div></td>						
                                           
                                       
                                            
                                            <form action="reservation.php" method="post">
                                             
                                             <input name="start" type="hidden" value="<?php echo $start;?>">
                                             <input name="roomID" type="hidden" value="<?php echo $row['roomID'];?>">
                                             <input name="end" type="hidden" value="<?php echo $end;?>">
                                             <input name="result" type="hidden" value="<?php echo $result;?>">                                             <input name="total" type="hidden" value="<?php echo $total;?>">
                                             <input name="pre" type="hidden" value="<?php echo $pre;?>">
                                             <input name="bal" type="hidden" value="<?php echo $bal;?>"> 
                                                     
                                             <td><div align="center" style="margin-top:20px"><button class="btn btn-info" name="submit" type="submit" <?php echo $disabled?>><i class="icon-hand-right"></i> Room <?php echo $row['name'];?></button></div></td>
                                             
                                             </form>   						   
											
                                  </tr>
                                  
                                  
                                                                     
                        
                                <?php } ?>
                            </tbody>
                        </table>
 
    
    
  </div>
  <div class="modal-footer">

  	<div class="pull-left"><label class="text-info"><strong>Number of night/s:</strong> <?php echo $result;?></label></div>   
    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Close</button>
  </div>
</div><!--Modal cat3 end -->



<!-- Modal cat4 -->
<div id="cat4" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 id="myModalLabel">Vip room with Garage</h4>
  </div>
  <div class="modal-body">
  
 
 	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example"                      
                            <thead>
                                <tr>
                                
                                    <th><div align="center" style="font-size:16px">Price</div></th>
                                    <th><div align="center" style="font-size:16px">Total</div></th>
                                    <th><div align="center" style="font-size:16px">Balance</div></th>
                                    <th><div align="center" style="font-size:16px">10%</div></th>
                                    <th><div align="center" style="font-size:16px">Status</div></th>
                                    <th><div align="center" style="font-size:16px">Reserve</div></th>
                          
                                </tr>
                            </thead>
                            <tbody>
                              
                                      <?php
									  
                                    $query = mysql_query("select * from tb_rooms where category_id='4' order by roomID ") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $roomID = $row['roomID'];
										$price = $row['price'];
										$total = $price * $result;
										$pre = $total*.10;
										$bal = $total - $pre 
										
                                        ?>
                                 
                                    

                                        <tr>
                                        	 
                                    		<td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo $price; echo'.00';}?></div></td>
                                            <td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo $total; echo'.00';}?></div></td> 
                                            <td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo $bal; echo'.00';}?></div></td> 
 											<td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo $pre; echo'.00';}?></div></td>
                                            <td><div align="center" style="margin-top:20px"><strong>
											<?php if ($row['status']=='Available'){
												
												$disabled = "";
												
												echo 'Available';}
																								
													elseif($row['status']=='Reserved'){
														
															echo 'Reserved';
													
													
															$disabled = 'disabled="disabled"';
														
														}
														
													else{
													
													echo 'Occupied';
													
													
													$disabled = 'disabled="disabled"';
													
													}
													
												
												?></strong></div></td>						
                                           
                                       
                                            
                                            <form action="reservation.php" method="post">
                                             
                                             <input name="start" type="hidden" value="<?php echo $start;?>">
                                             <input name="roomID" type="hidden" value="<?php echo $row['roomID'];?>">
                                             <input name="end" type="hidden" value="<?php echo $end;?>">
                                             <input name="result" type="hidden" value="<?php echo $result;?>">                                             <input name="total" type="hidden" value="<?php echo $total;?>">
                                             <input name="pre" type="hidden" value="<?php echo $pre;?>">
                                             <input name="bal" type="hidden" value="<?php echo $bal;?>"> 
                                                     
                                             <td><div align="center" style="margin-top:20px"><button class="btn btn-info" name="submit" type="submit" <?php echo $disabled?>><i class="icon-hand-right"></i> Room <?php echo $row['name'];?></button></div></td>
                                             
                                             </form>   						   
											
                                  </tr>
                                  
                                  
                                                                     
                        
                                <?php } ?>
                            </tbody>
                        </table>
 
    
    
  </div>
  <div class="modal-footer">

  	<div class="pull-left"><label class="text-info"><strong>Number of night/s:</strong> <?php echo $result;?></label></div>   
    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Close</button>
  </div>
</div><!--Modal cat4 end -->
  
  
  

  </body>
  
  
</html>
