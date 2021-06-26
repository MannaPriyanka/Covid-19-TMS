<?php
session_start();
if (strlen($_SESSION['id'] == 0)) {
    header('location:logout.php');
} else {

?>
    <?php include_once('includes/header.php'); ?>
    <section>
        <div class="container" id="dash">
            <div class="">
                <div class="alert alert-dark text-center">
                    <h3>Add Patient and Medicine Record </h3>
                    <p>Help Each Other to Fight Against Pandemic</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-6 mb-3">
                    <div class="card" id="card1">
                        <div class="card-body">
                            <a href="add_record.php?id=1&amp;type=OXYGEN&amp;state=Gujarat&amp;city=">
                                <div class="icon">
                                    <img style="max-height: 100%;
    max-width: 100%;vertical-align: middle;
    border-style: none;" src="icons/oxygen.png" alt="id=1&amp;">
                                </div>
                                <p class="text-center">ADD PATIENT RECORD</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-6 mb-3">
                    <div class="card" id="card2">
                        <div class="card-body">
                            <a href="resources.php?id=2&amp;type=MEDICINES&amp;state=Gujarat&amp;city=">
                                <div class="icon">
                                    <img style="max-height: 100%;
    max-width: 100%;vertical-align: middle;
    border-style: none;" src="icons/remdesivir.png" alt="REMDESIVIR">
                                </div>
                                <p class="text-center">MEDICINES</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-6 mb-3">
                    <div class="card" id="card3">
                        <div class="card-body">
                            <a href="patients.php">
                                <div class="icon">
                                    <img style="max-height: 100%;
    max-width: 100%;vertical-align: middle;
    border-style: none;" src="icons/remdesivir.png" alt="REMDESIVIR">
                                </div>
                                <p class="text-center">VIEW PATIENT</p>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>



    </section>


    <?php include_once('includes/footer_dash.php'); ?>





<?php } ?>