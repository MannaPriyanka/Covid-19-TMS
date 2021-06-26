
<?php
include_once('includes/config.php');
 include_once('includes/Home_header.php');
$req_id=$_GET['id'];

?>



<div class="container">

            <div class="row">
                <div class="mx-auto col-md-6">
                                        <div class="row mb-3">
                        <div class="col-8">
                            <h2>FOOD SERVICES</h2>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-danger btn-sm float-right text-white" data-toggle="modal" data-target="#myModal"><i class="fas fa-exclamation-triangle"></i> Report</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="mx-auto col-md-6 mb-3">
				
							<?php $query=mysqli_query($con,"SELECT * FROM `corona_resource`WHERE id='".$req_id."'");
$cnt=1;
while($row=mysqli_fetch_array($query)){
?>
				
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col-10">
                                            <h3><?php echo $row['title'];?></h3>
                                            <small class="text-warning"><i class="fas fa-map-marker"></i> <?php echo $row['city'].",".$row['state'];?></small>
                                            <br>
                                            <small>Last Updated: 27-05-2021</small>
                                        </div>
                                        
                                    </div>
                                    <div>
                                        <label class="mb-0 text-muted">Service description</label>
                                        <p><?php echo $row['serv_desc'];?></p>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="mb-0 text-muted">Phone</label>
                                            <p><?php echo $row['phone'];?></p>
                                        </div>
                                        <div class="col-6">
                                            
                                            <a class="btn btn-success ca-btn float-right" href="tel:<?php echo $row['phone'];?>"><i class="fas fa-phone-alt"></i></a>
											
										</div>
                                    </div>
                                    <div>
                                        <label class="mb-0 text-muted">Alternate phone numbers</label>
                                        <p><?php echo $row['alt_phone'];?></p>
                                    </div>
									
									  <div>
                                        <label class="mb-0 text-muted">Google Location</label>
										<br/>
                                        <a href="<?php echo $row['google_location'];?>"><?php echo $row['google_location'];?></a>
                                    </div>
									<br/>
									
									  <div class="row">
                                            <div class="col-12">
                                                <a class="btn btn-success form-control"  data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap type="button" >
                                                   Click here to send request :)
                                                </a>
                                            </div>
                                        </div>
									
                                </div>
								
							<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>
-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Send Message to Provider</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="GET" action="sendsms.php" >
          <div class="form-group">
			
			<div class="form-group">
            <label for="recipient-name" class="col-form-label">Service Provider	Phone Number:</label>
            <input type="text" class="form-control"required="Enter Phone number" name="spnum"   readonly="readonly" value="<?php echo $row['phone'];?>" id="recipient-name">

          </div>
		  
		  
            <label for="recipient-name" class="col-form-label">Enter Your Name:</label>
            <input type="text" class="form-control" required="enter name"name="uname" id="recipient-name">
          </div>
		  
		  <div class="form-group">
            <label for="recipient-name" class="col-form-label">Enter Your Phone Number:</label>
            <input type="text" class="form-control"required="Enter Phone number" name="snum" id="recipient-name">

          </div>
		  
		  
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" name="msg" id="message-text"></textarea>
          </div>
		  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Send message</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
								
                            </div>
							
							
								<?php $cnt++;} ?>
                        </div>            </div>
        </div>






<?php include_once('includes/Home_footer.php');?>