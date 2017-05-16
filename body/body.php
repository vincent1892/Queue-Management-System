<body>

<div class="container">
    <h1 class="display-5 text-white text-center mt-5">Customer Queue System</h1>

    <div class="row justify-content-center mt-3">

        <div class="col-md-2 bg-color p-2 m-3 text-white shadow">

            <ul class="nav flex-column nav-pills text-center">
                <img src="img/logo.svg" alt="source-resource" class="img-thumbnail pb-4">
                <li class="nav-item">
                    <a class="nav-link m-1" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-1" href="http://www.sourceglobalresearch.com/" target="_blank">Visit Us</a>
                </li>
            </ul>
        </div>

        <div class="col-md-8 bg-color p-3 m-3 shadow">
            <table class="table table-bordered bg-faded">
                <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>Customer Type</th>
                    <th>Full Name</th>
                    <th>Service Name</th>
                    <th>Waiting</th>
                </tr>
                </thead>
                <tbody>
                <?php
                selectData();
                ?>
                </tbody>
            </table>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-custom float-right" data-toggle="modal" data-target="#customer_info_form">
                Add Customer
            </button>

            <!-- Modal -->
            <div class="modal fade" id="customer_info_form" tabindex="-1" role="dialog" aria-labelledby="modal_title" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal_title">New Customer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="redirect.php" method="post" class="customer-form">
                                <fieldset class="form-group mb-4">
                                    <label class="font-weight-bold" for="service_type">Service Type</label>
                                    <select class="form-control" name="service_type" id="service_type">
                                        <option value="none">None</option>
                                        <option value="housing">Housing</option>
                                        <option value="benefits">Benefits</option>
                                        <option value="council_tax">Council Tax</option>
                                        <option value="fly_tipping">Fly-tipping</option>
                                        <option value="missed_bin">Missed Bin</option>
                                    </select>
                                </fieldset>
                                <fieldset class="form-info">
                                    <div class="btn-group font-weight-bold" data-toggle="buttons">
                                        <label class="btn btn-custom active">
                                            <input type="radio" name="customer" id="citizen" autocomplete="off" value="Citizen" checked> Citizen
                                        </label>
                                        <label class="btn btn-custom">
                                            <input type="radio" name="customer" id="organisation" autocomplete="off" value="Organisation"> Organisation
                                        </label>
                                        <label class="btn btn-custom">
                                            <input type="radio" name="customer" id="anonymous" autocomplete="off" value="Anonymous"> Anonymous
                                        </label>
                                    </div>
                                    <div id="input-fields">
                                        <div class="form-group font-weight-bold">
                                            <label for="title">Title</label>
                                            <select class="form-control" name="title" id="title">
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
                                                <option value="Miss.">Miss.</option>
                                                <option value="Ms.">Ms.</option>
                                                <option value="Mx.">Mx.</option>
                                            </select>
                                        </div>
                                        <div class="form-group font-weight-bold fname">
                                            <label for="firstname">First Name</label>
                                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                                            <div id="f-message" class="form-control-feedback">Please enter customer first name</div>
                                        </div>
                                        <div class="form-group font-weight-bold lname">
                                            <label for="lastname">Last Name</label>
                                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                                            <div id="l-message" class="form-control-feedback">Please enter customer last name</div>
                                        </div>
                                        <div class="form-group font-weight-bold oname">
                                            <label for="organisation_name">Organisation Name</label>
                                            <input type="text" class="form-control" id="organisation_name" name="organisation_name" placeholder="Organisation Name">
                                            <div id="o-message" class="form-control-feedback">Please enter customer organisation name</div>
                                        </div>
                                    </div>
                                    <button id="submit" type="submit" class="btn btn-custom">Submit</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<?php require_once 'script/script.php'; ?>
</body>
