<?php
include_once('includes/config.php');
include_once('includes/Home_header.php');
$req_type = $_GET['type'];
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

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2><?php echo $req_type; ?></h2>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-12">
            <div id="accordion">
                <div class="card">
                    <div class="card-header bg-white">
                        <a class="card-link" data-toggle="collapse" href="#collapseOne">
                            <p class="mb-0"><i class="fas fa-filter"></i> Filter</p>
                            <p class="mb-0"><small>Find resources at your location</small></p>
                        </a>
                    </div>
                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                        <div class="card-body">
                            <form method="GET" action="" id="filter">
                                <input type="hidden" name="type" value="<?php echo $req_type; ?>">
                                <div class="row">

                                    <div class="col-md-12">
                                        <label for="city">Select State</label>
                                        <select onchange="makeSubmenu(this.value);" id="sts" name="state" class="form-control" required="">
                                            <option value="" selected="">Select State</option>
                                            <?php
                                            foreach ($states as $data) {
                                                echo "<option value='$data'>" . $data . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="city">Select city</label>
                                        <select id="city" name="city" class="form-control" required="">
                                            <option value="" selected="">Select City</option>

                                        </select>
                                        <small>Please select nearby city if your city is not available.</small>
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn btn-success" type="submit">Search</button>
                                        <button class="btn btn-info float-right" type="reset" onclick="reset_form('city', 'filter')" style="display: none">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- ROW START-->
    <div class="row mb-5">
        <div class="col-md-6 mb-3">
            <?php
            if (isset($_GET['state']) && isset($_GET['city'])) {
                $query = mysqli_query($con, "SELECT * FROM `corona_resource`WHERE res_type='" . $req_type . "' AND state='" . $_GET['state'] . "' AND city ='" . $_GET['city'] . "' AND verified=1 ");
            } else {
                $query = mysqli_query($con, "SELECT * FROM `corona_resource`WHERE res_type='" . $req_type . "'AND verified=1 ");
            }
            $cnt = 1;
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <!--CARD START-->
                <div class="card">
                    <div class="card-body">
                        <a href="resource.php?id=284&amp;state=Gujarat&amp;city=">
                            <h3><?php echo $row['title']; ?>

                                <!--TYPE=  -->
                            </h3>
                        </a>
                        <div class="row">
                            <div class="col-6">
                                <small class="text-warning"><i class="fas fa-map-marker"></i> <?php echo $row['city'] . "," . $row['state']; ?></small>
                            </div>
                            <div class="col-6">
                                <small class="float-right">Last Updated: 19-05-2021</small>
                            </div>
                        </div>
                        <div>
                            <label class="mb-0 text-muted">Service description</label>
                            <p><?php echo $row['serv_desc']; ?></p>

                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="mb-0 text-muted">Phone</label>
                                <p><?php echo $row['phone']; ?></p>

                            </div>
                            <div class="col-6">

                                <a class="btn btn-success ca-btn float-right" href="tel:7623065340"><i class="fas fa-phone-alt"></i></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <a class="btn btn-primary form-control" href="resources_more.php?id=<?php echo htmlentities($row['id']); ?>;&amp;state=Gujarat&amp;city=">
                                    View More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CARD FINISH-->
            <?php $cnt++;
            } ?>
        </div>

    </div>

    <!-- ROW FINISH-->
</div>


<?php include_once('includes/Home_footer.php'); ?>
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
                    document.getElementById("city").innerHTML += "<option value=" + myJson[value][i] + ">" + myJson[value][i] + "</option>";
                }

            });

    }
</script>