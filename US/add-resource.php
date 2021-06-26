<?php
// create & initialize a curl session
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "https://raw.githubusercontent.com/bhanuc/indian-list/master/state-city.json");

curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$output = curl_exec($curl);

curl_close($curl);

$output = json_decode($output, true);

$states = array_keys($output);

//print_r($output);

?>
<?php include_once('includes/Home_header.php'); ?>
<div class="container mb-5">
    <div class="row">

        <div class="mx-auto col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center">Add Resource Information</h2>
                    <hr>
                    <form target="" method="POST" action="upload_resource.php">
                        <div>
                            <label for="resource_type">Resource type</label>
                            <select class="form-control" name="type" id="reource_type" required="">
                                <option value="OXYGEN">OXYGEN</option>
                                <option value="MEDICINES">MEDICINES</option>
                                <option value="HOSPITAL/AMBULANCE">HOSPITAL/AMBULANCE</option>
                                <option value="PLASMA">PLASMA</option>
                                <option value="BLOOD DONERS">BLOOD DONERS</option>
                                <option value="FOOD SERVICES">FOOD SERVICES</option>
                                <option value="QUARANTINE PLACES">QUARANTINE PLACES</option>
                                <option value="AFTER-DEATH SERVICES">AFTER-DEATH SERVICES</option>
                                <option value="OTHER SERVICES">OTHER SERVICES</option>
                            </select>
                        </div>
                        <br>
                        <div>
                            <label for="sts">Select state</label>
                            <select onchange="makeSubmenu(this.value);" id="sts" name="state" class="form-control" required="">
                                <option value="" selected="">Select State</option>
                                <?php
                                foreach ($states as $data) {
                                    echo "<option value='$data'>" . $data . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <br>
                        <div>
                            <label for="city">Select city</label>
                            <select id="city" name="city" class="form-control" required="">
                                <option value="" selected="">Select City</option>

                            </select>
                            <small>Please select nearby city if not available.</small>
                        </div>
                        <br>
                        <div>
                            <label for="Title">Title</label>
                            <input class="form-control" type="text" name="title" id="Title" placeholder="Enter clear title for provided service." required="">
                        </div>
                        <br>
                        <div>
                            <label for="desc">Service description</label>
                            <textarea class="form-control" name="desc" placeholder="Enter brief and clear description for services and recources provided." required=""></textarea>
                        </div>
                        <br>
                        <div>
                            <label for="phone">Phone</label>
                            <input class="form-control" type="number" name="phone" id="phone" placeholder="EX: 9876543210" required="">
                            <br>
                            <input type="checkbox" id="sms" name="sms" value="1"><label for="sms">Is SMS service available for the above number?</label>
                        </div>
                        <br>
                        <div>
                            <label for="al_phone">Alternate Phone (Optional)</label>
                            <input class="form-control" type="text" name="al_phone" id="al_phone" placeholder="EX: 9876543210, 9876543210">
                            <small>Separate multiple numbers with comma sign (,)</small>
                        </div>
                        <br>
                        <div>
                            <label for="email">Email (Optional)</label>
                            <input class="form-control" type="email" name="email" id="email" placeholder="Enter email address.">
                        </div>
                        <br>
                        <div>
                            <label for="loc">Google maps location (Optional)</label>
                            <input class="form-control" type="text" name="loc" id="loc" placeholder="Enter google maps location link.">
                            <small>Provide google maps location for better help.</small>
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
<?php include_once('includes/Home_footer.php'); ?>