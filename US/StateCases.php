<?php
error_reporting(0);

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "https://api.apify.com/v2/key-value-stores/toDWvRj1JpTXiM8FF/records/LATEST?disableRedirect=true");

curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$output = curl_exec($curl);

curl_close($curl);

$output = json_decode($output, true);

//echo $output;


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Live Covid Cases</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
</head>
<style>
    .activecases {
        background-color: #feae96;
        background-image: linear-gradient(315deg, #feae96 0%, #fe0944 74%);
        color: maroon;
    }

    .discharge {
        background-color: #70b2d9;
        background-image: linear-gradient(315deg, #70b2d9 0%, #39e5b6 74%);
        color: dar;
    }

    .deaths {
        background-color: #b1bfd8;
        background-image: linear-gradient(315deg, #b1bfd8 0%, #6782b4 74%);
        color: black;

    }

    .total {
        margin: 10%;
        border-radius: 5%;
        font-weight: bold;
        text-align: center;
        font-size: 20px;
    }

    h2 {
        color: white;
        font-family: monospace;
    }

    .fa-angle-double-up {
        color: green;
    }

    .fa-angle-double-down {
        color: red;
    }
</style>

<body>
    <div class="container">
        <div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="activecases total">
                        <h2>ACTIVE</h2>
                        <p><?php echo $output['activeCases']; ?></p>
                        <p><small>
                                New Cases (<?php echo $output['activeCasesNew']; ?>)</small></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="discharge total">
                        <h2>DISCHARGED</h2>
                        <p><?php echo $output['recovered']; ?></p>
                        <p><small>
                                New Cases
                                (<?php echo $output['recoveredNew']; ?>)</small></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="deaths total">
                        <h2>DEATHS</h2>
                        <p><?php echo $output['deaths']; ?></p>
                        <p><small>
                                New Cases (<?php echo $output['deathsNew']; ?>)</small></p>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <th>Sr. No.</th>
                <th>State</th>
                <th>Active Cases</th>
                <th>New Infected</th>
                <th>Recovered</th>
                <th>New Recovered</th>
                <th>Deceased</th>
                <th>New Deceased</th>
                <th>Total Infected</th>
            </thead>
            <tbody>

                <?php
                $index = 1;
                foreach ($output['regionData'] as $data) { ?>
                    <tr>
                        <td><?php echo $index;
                            $index++; ?></td>
                        <td><?php echo $data['region']; ?></td>
                        <td><?php echo $data['activeCases']; ?></td>
                        <td><?php $newInfected = $data['newInfected'];

                            if ($newInfected < 0) {
                                echo ' <i class="fad fa-angle-double-up"></i>';
                            } else {
                                echo ' <i class="fad fa-angle-double-down"></i>';
                            }
                            echo "  ".$newInfected;
                            ?></td>
                        <td><?php echo $data['recovered']; ?></td>
                        <td><i class="fad fa-angle-double-up"></i><?php echo "  ".$data['newRecovered']; ?></td>
                        <td><?php echo $data['deceased']; ?></td>
                        <td><i class="fad fa-angle-double-down"></i><?php echo "  ".$data['newDeceased']; ?></td>
                        <td><?php echo $data['totalInfected']; ?></td>
                    </tr>
                <?php } ?>

            </tbody>

        </table>
    </div>
    <script>
        
        $(document).ready(function() {
            $('#dataTable').DataTable({

                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });


        });
    </script>
</body>

</html>