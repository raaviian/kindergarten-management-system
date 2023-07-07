<?php 
$page_id = null;
$comp_model = new SharedController;
$current_page = $this->set_current_page_link();
?>
<div>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <h4 >The Dashboard</h4>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_users();  ?>
                    <a class="animated zoomIn record-count card bg-warning text-white"  href="<?php print_link("users/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="material-icons mi-xxxlg">verified_user</i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Teachers</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_admission();  ?>
                    <a class="animated rubberBand record-count card bg-success text-white"  href="<?php print_link("admission/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="material-icons mi-xxxlg">accessible</i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Admission List</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_applyforadmission();  ?>
                    <a class="animated zoomIn record-count alert alert-info"  href="<?php print_link("apply_for_admission/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="material-icons mi-xxxlg">archive</i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">New Student Registration</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_event();  ?>
                    <a class="animated zoomIn record-count alert alert-primary"  href="<?php print_link("event/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="material-icons mi-xxxlg">event_note</i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Event</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_enrollment();  ?>
                    <a class="animated zoomIn record-count card bg-danger text-white"  href="<?php print_link("enrolment/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="material-icons mi-xxxlg">assignment_ind</i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Enrollment</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_howtomakepayment();  ?>
                    <a class="animated rollIn record-count card bg-danger text-white"  href="<?php print_link("how_to_make_payment/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="material-icons">extension</i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">How To Make Payment</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>  
              <div class="col-md-6 comp-grid">
                </div>
            </div>
        </div>
    </div>
</div>
