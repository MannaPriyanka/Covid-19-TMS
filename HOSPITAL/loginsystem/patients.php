<?php
session_start();
error_reporting(0);
//DB conncetion
include_once('includes/config.php');
if (strlen($_SESSION['id'] == 0)) {
    header('location:logout.php');
} else {

?>
    <?php include_once('includes/header.php'); ?>
    <section>
        <div class="container" id="dash">

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->


                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h1 class="h3 mb-2 text-gray-800">Patients Record</h1>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form name="assignto" method="post">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <th>Register No.</th>
                                        <th>Patient Name</th>
                                        <th>Patient ID</th>
                                        <th>Patient Phone No.</th>
                                        <th>STAFF ID</th>
                                        <th>Prescription</th>
                                        <th>Note</th>
                                        <th>Register Date</th>
                                    </thead>
                                    <tbody>
                                    <?php $query = mysqli_query($con,"SELECT * FROM `patient_record`");
                                            $cnt = 1;
                                            while ($row = mysqli_fetch_array($query)) {
                                            ?>

                                                <tr>
                                                    <td><?php echo $row['reg_no']; ?></td>
                                                    <td><?php echo $row['patient_name']; ?></td>
                                                    <td><?php echo $row['patient_id']; ?></td>
                                                    <td><?php echo $row['patient_phone']; ?></td>
                                                    <td><?php echo $row['staff_id']; ?></td>
                                                    <td><?php echo $row['prescription_file']; ?></td>
                                                    <td><?php echo $row['extra_note']; ?></td>
                                                    <td><?php echo $row['reg_date']; ?></td>
                                                
                                                </tr>
                                            <?php 
                                            } ?>
                                    
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>


    <?php include_once('includes/footer_dash.php'); ?>





<?php } ?>