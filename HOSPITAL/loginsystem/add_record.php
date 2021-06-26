<?php
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
	
?>
<?php include_once('includes/header.php'); ?>

<br/><br/>
  <div class="container mb-5">
    <div class="row">

        <div class="mx-auto col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center">Add Patient Information</h2>
                    <hr>
                    <form target="" method="POST" action="upload_record.php">
                        
                        <br>
                        
                        <br>
                        <div>
                            <label for="Title">Patient Name</label>
                            <input class="form-control" type="text" name="pname" id="Title" placeholder="Enter Patient Name." required="">
                        </div>
                        <br>
                        <div>
                            <label for="Title">Patient ID</label>
                            <input class="form-control" type="text" name="pid" id="Title" placeholder="Enter Patient ID." required="">
                        </div>
                        <br>
                        <div>
                            <label for="phone">Patient Phone Number</label>
                            <input class="form-control" type="number" name="phone" id="phone" placeholder="EX: 9876543210" required="">
                            <br>
                            <input type="checkbox" id="sms" name="sms" value="1"><label for="sms">Is SMS service available for the above number?</label>
                        </div>
						<br>
						<div>
                            <label for="Title">Staff ID</label>
                            <input class="form-control" type="text" name="sid" id="Title" placeholder="Enter Your Staff ID/Name." required="">
                        </div>
                        <br> 
						
						
						<label for="desc">Prescription Upload</label>
						<div class="custom-file">
						
      `						<input type="file" name="compfile" class="form-control" value="">
					    </div>
						<br>
						
						
						<div>
                            <label for="desc">Extra Notes</label>
                            <textarea class="form-control" name="desc" placeholder="Enter brief and clear description for Prescription." required=""></textarea>
                        </div>
						
                        <br>
                        <div>
                            <button type="submit" name="submit" class="form-control btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function makeSubmenu(value) {

        document.getElementById("city").innerHTML = '';

        fetch('https://raw.githubusercontent.com/bhanuc/indian-list/master/state-city.json')
            .then((response) => {
                return response.json();
            })
            .then((myJson) => {

                var cityname = '';
                for (var i = 0; i < myJson[value].length; i++) {
                    document.getElementById("city").innerHTML += "<option value="+myJson[value][i] +">" + myJson[value][i] + "</option>";
                }

            });

    }
</script>

 
<?php include_once('includes/footer_dash.php'); ?>





<?php } ?>